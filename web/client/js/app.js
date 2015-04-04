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
					phone: '.js-app-feedback-message-phone'
				},
				validate: {
					name: ['Empty'],
					text: ['Empty'],
					email: ['Empty', 'Email'],
					phone: ['Empty', 'Phone']
				},
				prefix: '_rule'
			}
		},

		init: function () {
			this.initFeedbackForm();
		},

		initFeedbackForm: function () {
			var self = this;

			$(this.settings.feedback.radio).off().on('change', 'input:radio', function(evt) {
				var name = $(evt.target).attr('data-type');
				if (name === 'email') {
					$(self.settings.feedback.fields.phone).parent().hide();
					delete self.settings.feedback.fields.phone;
				} else if (name === 'phone') {
					console.log($(self.settings.feedback.fields.email), 'email');
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
			_.each(feedback.fields, function(field, name) {
				_.each(self.settings.feedback.validate[name], function(rule) {
					var functionName = self.settings.feedback.prefix + rule;
					if (typeof self[functionName] === 'function') {
						var validateResult = self[functionName](field.value, self.settings.feedback.names[name]);
						if (validateResult !== false) {
							var node = feedback.messages[name].node;
							node.html(validateResult);
							node.show();
							self.showError(field.node, true);
						}
					}
				});

			});

		},

		clearError: function (node) {
			node.parent('.form-group').removeClass('has-error');
			node.siblings('.help-block').hide();
		},

		showError: function (inputNode, status) {
			var parent = inputNode.parent('.form-group');
			if (status) {
				parent.addClass('has-error');
			} else {
				parent.removeClass('has-error');
			}
		},


		_ruleEmpty: function (value, fieldName) {
			if (value === ''){
				return 'Пожалуйста, заполните поле ' + fieldName;
			}
			return false;
		},

		_ruleEmail: function (value, fieldName) {
			var re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
		    if (!re.test(value)) {
				return 'Пожалуйста, введите правильный ' + fieldName;
		    }
			return false;
		},

		_rulePhone: function (value, fieldName) {
			return false;
		},


		setCaretPosition: function(node, caretPos) {
		    var el = node;
		    el.value = el.value;
		    if (el !== null) {
		        if (el.createTextRange) {
		            var range = el.createTextRange();
		            range.move('character', caretPos);
		            range.select();
		            return true;
		        } else {
		            // (el.selectionStart === 0 added for Firefox bug)
		            if (el.selectionStart || el.selectionStart === 0) {
		                el.focus();
		                el.setSelectionRange(caretPos, caretPos);
		                return true;
		            } else  { // fail city, fortunately this never happens (as far as I've tested) :)
		                el.focus();
		                return false;
		            }
		        }
		    }
		}
	}
})();