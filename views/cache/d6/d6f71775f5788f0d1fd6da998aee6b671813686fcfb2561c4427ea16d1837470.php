<?php

/* templates/saveTest.twig */
class __TwigTemplate_875538aea29ddf0744643307975e087dbd45dcb4ef5fcbec3412826757a09e38 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layouts/main.twig", "templates/saveTest.twig", 1);
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
        echo "    <title>Курсы английского языка в Виннице - Сохранение результатов теста</title>
    <meta name=\"keywords\" content=\"узнать свой уровень английского, тест на знания английского, тест английского, курсы английского языка в Виннице, курсы английского в Виннице, школа английского языка в Виннице, школа языка в Виннице, деловой английский, курси англійської мови\"/>
    <meta name=\"description\" content=\"Узнайте свой уровень английского! Курсы английского языка в Виннице, удобное расположение школы, профессиональные преподаватели и комфортные условия. Мы поможем вам стать лучше в вашей профессии\"/>
";
    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        // line 10
        echo "
";
        // line 11
        $this->loadTemplate("./partials/topmenu.twig", "templates/saveTest.twig", 11)->display(array_merge($context, array("action" => "test")));
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
                                Congratulations!
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
        if (((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")) != "")) {
            // line 39
            echo "            ";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
            echo ", поздравляем!
       ";
        } else {
            // line 41
            echo "           Поздравляем!
       ";
        }
        // line 43
        echo "         Вы успешно завершили тест. Как только мы обработаем результаты, мы с Вами свяжемся, чтобы договориться о деталях обучения.
    </p>
</div>


";
    }

    public function getTemplateName()
    {
        return "templates/saveTest.twig";
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
/*     <title>Курсы английского языка в Виннице - Сохранение результатов теста</title>*/
/*     <meta name="keywords" content="узнать свой уровень английского, тест на знания английского, тест английского, курсы английского языка в Виннице, курсы английского в Виннице, школа английского языка в Виннице, школа языка в Виннице, деловой английский, курси англійської мови"/>*/
/*     <meta name="description" content="Узнайте свой уровень английского! Курсы английского языка в Виннице, удобное расположение школы, профессиональные преподаватели и комфортные условия. Мы поможем вам стать лучше в вашей профессии"/>*/
/* {% endblock %}*/
/* */
/* {% block content %}*/
/* */
/* {% include "./partials/topmenu.twig" with {'action': 'test'} %}*/
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
/*                                 Congratulations!*/
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
/*        {% if name != '' %}*/
/*             {{ name }}, поздравляем!*/
/*        {% else %}*/
/*            Поздравляем!*/
/*        {% endif %}*/
/*          Вы успешно завершили тест. Как только мы обработаем результаты, мы с Вами свяжемся, чтобы договориться о деталях обучения.*/
/*     </p>*/
/* </div>*/
/* */
/* */
/* {% endblock %}*/
/* */
