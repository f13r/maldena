<?php

/* templates/saveDemo.twig */
class __TwigTemplate_db1611d1107e0df54191e2bcb79fe73eba58373016ebf63ff8b30030747e096e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layouts/main.twig", "templates/saveDemo.twig", 1);
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
        echo "    <title>Курсы английского языка в Виннице - Запись на пробный урок</title>
    <meta name=\"keywords\" content=\"Бесплатный пробный урок, курсы английского языка в Виннице, курсы английского в Виннице, школа английского языка в Виннице, школа языка в Виннице, деловой английский, курси англійської мови\"/>
    <meta name=\"description\" content=\"Бесплатный пробный урок! Курсы английского языка в Виннице, удобное расположение школы, профессиональные преподаватели и комфортные условия. Мы поможем вам стать лучше в вашей профессии\"/>
";
    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        // line 10
        echo "
";
        // line 11
        $this->loadTemplate("./partials/topmenu.twig", "templates/saveDemo.twig", 11)->display(array_merge($context, array("action" => "demo")));
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
                        <h2>
                            <strong>
                                Thank you!
                            </strong>
                        </h2>
                    </div>
                    <div class=\" col-lg-4 col-md-4 col-sm-4 col-xs-4\">
                        <hr class=\"hr_gray\"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class=\"container\">
    <p>
       ";
        // line 38
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "name", array()) != "")) {
            // line 39
            echo "            ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "name", array()), "html", null, true);
            echo ", поздравляем!
       ";
        } else {
            // line 41
            echo "           Поздравляем!
       ";
        }
        // line 43
        echo "         Вы успешно записались на пробный урок. Мы с Вами свяжемся, чтобы договориться когда Вам будет удобно прийти на урок.
    </p>
</div>


";
    }

    public function getTemplateName()
    {
        return "templates/saveDemo.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 43,  83 => 41,  77 => 39,  75 => 38,  47 => 12,  45 => 11,  42 => 10,  39 => 9,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends "layouts/main.twig" %}*/
/* */
/* {% block meta %}*/
/*     <title>Курсы английского языка в Виннице - Запись на пробный урок</title>*/
/*     <meta name="keywords" content="Бесплатный пробный урок, курсы английского языка в Виннице, курсы английского в Виннице, школа английского языка в Виннице, школа языка в Виннице, деловой английский, курси англійської мови"/>*/
/*     <meta name="description" content="Бесплатный пробный урок! Курсы английского языка в Виннице, удобное расположение школы, профессиональные преподаватели и комфортные условия. Мы поможем вам стать лучше в вашей профессии"/>*/
/* {% endblock %}*/
/* */
/* {% block content %}*/
/* */
/* {% include "./partials/topmenu.twig" with {'action': 'demo'} %}*/
/* */
/* <div id="templatemo-for-start">*/
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div class="templatemo-line-header container pc-view">*/
/*                 <div class="text-center row">*/
/*                     <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">*/
/*                         <hr class="hr_gray"/>*/
/*                     </div>*/
/*                     <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">*/
/*                         <h2>*/
/*                             <strong>*/
/*                                 Thank you!*/
/*                             </strong>*/
/*                         </h2>*/
/*                     </div>*/
/*                     <div class=" col-lg-4 col-md-4 col-sm-4 col-xs-4">*/
/*                         <hr class="hr_gray"/>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* <div class="container">*/
/*     <p>*/
/*        {% if user.name != '' %}*/
/*             {{ user.name }}, поздравляем!*/
/*        {% else %}*/
/*            Поздравляем!*/
/*        {% endif %}*/
/*          Вы успешно записались на пробный урок. Мы с Вами свяжемся, чтобы договориться когда Вам будет удобно прийти на урок.*/
/*     </p>*/
/* </div>*/
/* */
/* */
/* {% endblock %}*/
/* */
