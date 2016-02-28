var app = (function(){
	return {
		settings: {
			feedback: {
				phone: '.js-app-feedback-phone',
				email: '.js-app-feedback-email',
				radio: '.js-feedback-radio',
				button: '.js-app-feedback-button',
				names: {
					name: 'Имя',
					text: 'Сообщение',
					email: 'E-mail',
					phone: 'Телефон'
				},
				fields: {
					name: '.js-app-feedback-name',
					text: '.js-app-feedback-text',
					phone: '.js-app-feedback-phone'
				},
				messages: {
					name: '.js-app-feedback-message-name',
					text: '.js-app-feedback-message-text',
					email: '.js-app-feedback-message-email',
					phone: '.js-app-feedback-message-phone',
					response: '.js-app-feedback-message-response',
					error: '.js-app-feedback-message-error'
				},
				validate: {
					name: ['Empty'],
					text: ['Empty'],
					email: ['Empty', 'Email'],
					phone: ['Empty', 'Phone']
				},
				prefix: '_rule',
				phoneMask: '(XXX) XXX-XX-XX'
			}
		},

		init: function () {
			this.initFeedbackForm();
		},

		initFeedbackForm: function () {
			var self = this;
			var options = { 
				  translation: {
				      '0': {
				        pattern: /[0-9]/
				      }
				  },
				  placeholder: " +38 (   )    -  -  "
				  
			};
			$(this.settings.feedback.phone).mask('+38 (000) 000-00-00', options);
			$(this.settings.feedback.radio).off().on('change', 'input:radio', function(evt) {
				var name = $(evt.target).attr('data-type');
				if (name === 'email') {
					$(self.settings.feedback.fields.phone).parent().hide();
					delete self.settings.feedback.fields.phone;
				} else if (name === 'phone') {
					$(self.settings.feedback.fields.email).parent().hide();
					delete self.settings.feedback.fields.email;
				}
				self.settings.feedback.fields[name] = self.settings.feedback[name];
				$(self.settings.feedback.fields[name]).parent().show();
			});
			$(this.settings.feedback.button).off().on('click', function(evt) {
				var feedback = {
					fields: {},
					messages: {}
				};
				_.each(self.settings.feedback.fields, function(ident, name) {
					if ($(ident).length !== undefined) {
						$(ident).off().on('keyup', function (evt) {
							self.clearError($(evt.target));
							self.clearResponse();
						});
						if (this.fields[name] === undefined) {
							this.fields[name] = {};
						}
						if (this.messages[name] === undefined) {
							this.messages[name] = {};
						}
						this.fields[name].value = $(ident).val() || $(ident).html(); 
						this.fields[name].node = $(ident); 

						if ($(self.settings.feedback.messages[name]).length !== undefined) {
							this.messages[name].node = $(self.settings.feedback.messages[name]); 
						} else {
							console.warn('Message node with name ' + name + ' not found!');
							return false;
						}
					} else {
						console.warn('Node with name ' + name + ' not found!');
						return false;
					}
				}, feedback);

				self.validateFeedbackForm(feedback);
			});
		},

		validateFeedbackForm: function (feedback) {
			var self = this;
			var resultValidation = true;
			var data = {};
			_.each(feedback.fields, function(field, name) {
				data[name] = field.value;
				if (name === 'phone') {
					data['phone'] = $(self.settings.feedback.phone).cleanVal();
				}

				_.each(self.settings.feedback.validate[name], function(rule) {
					var functionName = self.settings.feedback.prefix + rule;
					if (typeof self[functionName] === 'function') {
						var validateResult = self[functionName](field.value, self.settings.feedback.names[name]);
						if (validateResult !== false) {
							var node = feedback.messages[name].node;
							node.html(validateResult);
							node.show();
							self.showError(field.node, true);
							resultValidation = false;
						} 
					} 
				});
			});

			if (resultValidation === true) {
				$.ajax({
					method: 'post',
					url: "/feedback",
					data: {
					  feedback: data 
					},
					dataType: 'json'
				}).done(function(response) {
					if (typeof response.error != undefined) {
						if (response.error == 1) {
							$(self.settings.feedback.messages.error).show();
							_.each(response.messages, function(message) {
								$(self.settings.feedback.messages.error).html(message + '<br>');
							});
						} else {
							$(self.settings.feedback.messages.response).show();
						}
					}
				});
			}

		},

		clearError: function (node) {
			node.parent('.form-group').removeClass('has-error');
			node.siblings('.help-block').hide();
		},

		clearResponse: function() {
			$(this.settings.feedback.messages.response).hide();
		},

		showError: function (inputNode, status) {
			var parent = inputNode.parent('.form-group');
			if (status) {
				parent.addClass('has-error');
			} else {
				parent.removeClass('has-error');
			}
		},

	}
})();