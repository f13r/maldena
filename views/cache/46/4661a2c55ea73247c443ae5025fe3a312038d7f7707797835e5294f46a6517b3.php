<?php

/* templates/demo.twig */
class __TwigTemplate_e66d6e33880fba720ce9f340b558ebd13df9d9ea01e60a9d58bdb9295b4bcb51 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layouts/main.twig", "templates/demo.twig", 1);
        $this->blocks = array(
            'meta' => array($this, 'block_meta'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layouts/main.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_meta($context, array $blocks = array())
    {
        // line 4
        echo "    <title>Курсы английского языка в Виннице - демо урок</title>
    <meta name=\"keywords\" content=\"Бесплатный демо урок, Винница, курсы английского языка в Виннице, курсы английского в Виннице, школа английского языка в Виннице, школа языка в Виннице, деловой английский, курси англійської мови\"/>
    <meta name=\"description\" content=\"Бесплатный демо урок на наших курсах английского языка в Виннице, удобное расположение школы, профессиональные преподаватели и комфортные условия. Мы поможем вам стать лучше в вашей профессии\"/>
";
    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        // line 10
        echo "
    ";
        // line 11
        $this->loadTemplate("./partials/topmenu.twig", "templates/demo.twig", 11)->display(array_merge($context, array("action" => "demo")));
        // line 12
        echo "
    <div id=\"templatemo-for-start\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"templatemo-line-header container pc-view\">
                    <div class=\"text-center row\">
                        <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-4\">
                            <hr class=\"hr_gray\"/>
                        </div>
                        <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-4\">
                            <h1>
                                <strong>
                                    Бесплатный пробный урок
                                </strong>
                            </h1>
                        </div>
                        <div class=\" col-lg-4 col-md-4 col-sm-4 col-xs-4\">
                            <hr class=\"hr_gray\"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class=\"container contacts\">
        <div class=\"row\">
            <div>
                <p>
                    Перед тем как доверить нашим курсам английского языка ваше обучение - запишитесь к нам на <strong>бесплатный пробный урок</strong>. Убедитесь в профессионализме наших преподавателей и уютности нашей школы.
                </p>
                <p>
                    <i>Даже если по каким-то причинам вам не подойдет наше обучение, вы хорошо проведете время за чашечкой свежесваренного кофе и узнаете что-то новое :)</i>
                </p>
            </div>
        </div>
    </div>

<div class=\"container contacts mar-top-0 demo-lesson\">
    <form method=\"POST\" action=\"";
        // line 51
        echo $this->env->getExtension('routing')->getPath("saveDemo");
        echo "\" id=\"userForm\">
        <div class=\"row questions mar-top-0\">
            <ul class=\"list-group\">
                <li class=\"list-group-item\">
                    <div class=\"description\">
                        Оставьте нам свой номер телефона, мы вам перезвоним и договоримся об уроке на то время когда будет удобно вам:
                    </div>
                    ";
        // line 58
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "getFlashBag", array()), "get", array(0 => "wrongDemoForm"), "method")) {
            // line 59
            echo "                        <div class=\"red-color\">Пожалуйста, заполните поля отмеченые звездочками (имя и телефон)</div>
                    ";
        }
        // line 61
        echo "                    <ul class=\"list-unstyled\">
                        <li>
                            <div class=\"list-question\">Имя:</div>
                            <div class=\"list-answer\">
                                <input type=\"text\" name=\"user[name]\" value=\"";
        // line 65
        if ($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "name", array(), "array", true, true)) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "name", array(), "array"), "html", null, true);
        }
        echo "\" />
                            </div>
                        </li>
                        <li>
                            <div class=\"list-question\">Телефон:</div>
                            <div class=\"list-answer\">
                                <input type=\"tel\" id=\"phone\" name=\"user[phone]\" class=\"js-app-feedback-phone\" value=\"";
        // line 71
        if ($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "phone", array(), "array", true, true)) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "phone", array(), "array"), "html", null, true);
        }
        echo "\"/>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class=\"submit text-center\">
            <button class=\"btn btn-lg btn-orange\" type=\"submit\">Записаться на пробный урок</button>
        </div>
    </form>
</div>
    <div class=\"clearfix\"></div>


";
    }

    public function getTemplateName()
    {
        return "templates/demo.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 71,  110 => 65,  104 => 61,  100 => 59,  98 => 58,  88 => 51,  47 => 12,  45 => 11,  42 => 10,  39 => 9,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends "layouts/main.twig" %}*/
/* */
/* {% block meta %}*/
/*     <title>Курсы английского языка в Виннице - демо урок</title>*/
/*     <meta name="keywords" content="Бесплатный демо урок, Винница, курсы английского языка в Виннице, курсы английского в Виннице, школа английского языка в Виннице, школа языка в Виннице, деловой английский, курси англійської мови"/>*/
/*     <meta name="description" content="Бесплатный демо урок на наших курсах английского языка в Виннице, удобное расположение школы, профессиональные преподаватели и комфортные условия. Мы поможем вам стать лучше в вашей профессии"/>*/
/* {% endblock %}*/
/* */
/* {% block content %}*/
/* */
/*     {% include "./partials/topmenu.twig" with {'action': 'demo'} %}*/
/* */
/*     <div id="templatemo-for-start">*/
/*         <div class="container">*/
/*             <div class="row">*/
/*                 <div class="templatemo-line-header container pc-view">*/
/*                     <div class="text-center row">*/
/*                         <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">*/
/*                             <hr class="hr_gray"/>*/
/*                         </div>*/
/*                         <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">*/
/*                             <h1>*/
/*                                 <strong>*/
/*                                     Бесплатный пробный урок*/
/*                                 </strong>*/
/*                             </h1>*/
/*                         </div>*/
/*                         <div class=" col-lg-4 col-md-4 col-sm-4 col-xs-4">*/
/*                             <hr class="hr_gray"/>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/*     <div class="container contacts">*/
/*         <div class="row">*/
/*             <div>*/
/*                 <p>*/
/*                     Перед тем как доверить нашим курсам английского языка ваше обучение - запишитесь к нам на <strong>бесплатный пробный урок</strong>. Убедитесь в профессионализме наших преподавателей и уютности нашей школы.*/
/*                 </p>*/
/*                 <p>*/
/*                     <i>Даже если по каким-то причинам вам не подойдет наше обучение, вы хорошо проведете время за чашечкой свежесваренного кофе и узнаете что-то новое :)</i>*/
/*                 </p>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/* <div class="container contacts mar-top-0 demo-lesson">*/
/*     <form method="POST" action="{{ path('saveDemo') }}" id="userForm">*/
/*         <div class="row questions mar-top-0">*/
/*             <ul class="list-group">*/
/*                 <li class="list-group-item">*/
/*                     <div class="description">*/
/*                         Оставьте нам свой номер телефона, мы вам перезвоним и договоримся об уроке на то время когда будет удобно вам:*/
/*                     </div>*/
/*                     {% if app.session.getFlashBag.get('wrongDemoForm') %}*/
/*                         <div class="red-color">Пожалуйста, заполните поля отмеченые звездочками (имя и телефон)</div>*/
/*                     {% endif %}*/
/*                     <ul class="list-unstyled">*/
/*                         <li>*/
/*                             <div class="list-question">Имя:</div>*/
/*                             <div class="list-answer">*/
/*                                 <input type="text" name="user[name]" value="{% if user['name'] is defined %}{{ user['name'] }}{% endif %}" />*/
/*                             </div>*/
/*                         </li>*/
/*                         <li>*/
/*                             <div class="list-question">Телефон:</div>*/
/*                             <div class="list-answer">*/
/*                                 <input type="tel" id="phone" name="user[phone]" class="js-app-feedback-phone" value="{% if user['phone'] is defined %}{{ user['phone'] }}{% endif %}"/>*/
/*                             </div>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </li>*/
/*             </ul>*/
/*         </div>*/
/*         <div class="submit text-center">*/
/*             <button class="btn btn-lg btn-orange" type="submit">Записаться на пробный урок</button>*/
/*         </div>*/
/*     </form>*/
/* </div>*/
/*     <div class="clearfix"></div>*/
/* */
/* */
/* {% endblock %}*/
/* */
/* */
