<?php

/* ./partials/feedback.twig */
class __TwigTemplate_589a75a9dcc1c223d24af21bdff15f191e2f5914279ae13c357a1a7b66f62f9c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<p>Вы можете задать нам вопрос используя форму ниже:</p>

<form class=\"form-horizontal\" action=\"#\">
    <div class=\"form-group\">
        <input type=\"text\" class=\"form-control js-app-feedback-name\" placeholder=\"Имя\"/>

        <div style=\"display: none;\" class=\"help-block js-app-feedback-message-name\"></div>
    </div>
    <div class=\"form-group\">
        Я хочу получить ответ на:
    </div>
    <div class=\"form-group js-feedback-radio\">
        <input type=\"radio\" name=\"answer\" data-type=\"phone\" checked=\"checked\"> Телефон
        <input type=\"radio\" name=\"answer\" data-type=\"email\"> E-mail
    </div>
    <div class=\"form-group\">
        <input type=\"tel\" class=\"form-control js-app-feedback-phone\" placeholder=\"\"/>

        <div style=\"display: none;\" class=\"help-block js-app-feedback-message-phone\"></div>
    </div>
    <div class=\"form-group\" style=\"display: none;\">
        <input type=\"email\" class=\"form-control js-app-feedback-email\" placeholder=\"E-mail\"/>

        <div style=\"display: none;\" class=\"help-block js-app-feedback-message-email\"></div>
    </div>
    <div class=\"form-group\">
                        <textarea class=\"form-control js-app-feedback-text\" style=\"height: 130px;\"
                                  placeholder=\"Ваше сообщение\"></textarea>

        <div style=\"display: none;\" class=\"help-block js-app-feedback-message-text\"></div>
    </div>
    <div class=\"form-group\">
        <div style=\"display: none;\" class=\"help-block js-app-feedback-message-response-success alert alert-success\">
            Ваше сообщение успешно отправлено. Мы с Вами свяжемся в течении часа
        </div>
        <div style=\"display: none;\" class=\"help-block js-app-feedback-message-response js-app-feedback-message-error alert alert-danger\">

        </div>
    </div>
    <button type=\"button\" class=\"js-app-feedback-button btn btn-orange pull-right\">Отправить
    </button>
</form>
";
    }

    public function getTemplateName()
    {
        return "./partials/feedback.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* <p>Вы можете задать нам вопрос используя форму ниже:</p>*/
/* */
/* <form class="form-horizontal" action="#">*/
/*     <div class="form-group">*/
/*         <input type="text" class="form-control js-app-feedback-name" placeholder="Имя"/>*/
/* */
/*         <div style="display: none;" class="help-block js-app-feedback-message-name"></div>*/
/*     </div>*/
/*     <div class="form-group">*/
/*         Я хочу получить ответ на:*/
/*     </div>*/
/*     <div class="form-group js-feedback-radio">*/
/*         <input type="radio" name="answer" data-type="phone" checked="checked"> Телефон*/
/*         <input type="radio" name="answer" data-type="email"> E-mail*/
/*     </div>*/
/*     <div class="form-group">*/
/*         <input type="tel" class="form-control js-app-feedback-phone" placeholder=""/>*/
/* */
/*         <div style="display: none;" class="help-block js-app-feedback-message-phone"></div>*/
/*     </div>*/
/*     <div class="form-group" style="display: none;">*/
/*         <input type="email" class="form-control js-app-feedback-email" placeholder="E-mail"/>*/
/* */
/*         <div style="display: none;" class="help-block js-app-feedback-message-email"></div>*/
/*     </div>*/
/*     <div class="form-group">*/
/*                         <textarea class="form-control js-app-feedback-text" style="height: 130px;"*/
/*                                   placeholder="Ваше сообщение"></textarea>*/
/* */
/*         <div style="display: none;" class="help-block js-app-feedback-message-text"></div>*/
/*     </div>*/
/*     <div class="form-group">*/
/*         <div style="display: none;" class="help-block js-app-feedback-message-response-success alert alert-success">*/
/*             Ваше сообщение успешно отправлено. Мы с Вами свяжемся в течении часа*/
/*         </div>*/
/*         <div style="display: none;" class="help-block js-app-feedback-message-response js-app-feedback-message-error alert alert-danger">*/
/* */
/*         </div>*/
/*     </div>*/
/*     <button type="button" class="js-app-feedback-button btn btn-orange pull-right">Отправить*/
/*     </button>*/
/* </form>*/
/* */
