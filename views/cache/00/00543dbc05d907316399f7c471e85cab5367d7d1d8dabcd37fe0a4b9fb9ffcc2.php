<?php

/* templates/englishTest.twig */
class __TwigTemplate_3c6f61d612593956abcf2d495ede280b12ec08acb564244edbd1707cef56d365 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layouts/main.twig", "templates/englishTest.twig", 1);
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
        echo "    <title>Курсы английского языка в Виннице - Тест на знание английского языка</title>
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
        $this->loadTemplate("./partials/topmenu.twig", "templates/englishTest.twig", 11)->display(array_merge($context, array("action" => "test")));
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
                                    Online-тecт английского языка
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
    <div>
        <form method=\"post\" action=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("saveTest");
        echo "\" id=\"userForm\">
            <div class=\"container\">
                <div>
                    <p>Пройдите тест, чтобы мы могли узнать уровень вашего английского и предложить лучший вариант обучения.</p>
                    <p>И помните здесь нет хороших или плохих результатов, нам нужны ответы для того, чтобы подобрать для вас максимально эффективное обучение в нашей школе английского. Если вы не знаете ответ можете смело пропустить вопрос.</p>
                </div>
            ";
        // line 43
        $this->loadTemplate("./partials/test.twig", "templates/englishTest.twig", 43)->display(array_merge($context, array("answer" => (isset($context["answer"]) ? $context["answer"] : $this->getContext($context, "answer")), "user" => (isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")))));
        // line 44
        echo "                <div class=\"submit text-center\">
                    <button class=\"btn btn-lg btn-orange\" type=\"submit\">Отправить результаты</button>
                </div>
            </div>
        </form>
    </div>


";
    }

    public function getTemplateName()
    {
        return "templates/englishTest.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 44,  83 => 43,  74 => 37,  47 => 12,  45 => 11,  42 => 10,  39 => 9,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends "layouts/main.twig" %}*/
/* */
/* {% block meta %}*/
/*     <title>Курсы английского языка в Виннице - Тест на знание английского языка</title>*/
/*     <meta name="keywords" content="узнать свой уровень английского, тест на знания английского, тест английского, курсы английского языка в Виннице, курсы английского в Виннице, школа английского языка в Виннице, школа языка в Виннице, деловой английский, курси англійської мови"/>*/
/*     <meta name="description" content="Узнайте свой уровень английского! Курсы английского языка в Виннице, удобное расположение школы, профессиональные преподаватели и комфортные условия. Мы поможем вам стать лучше в вашей профессии"/>*/
/* {% endblock %}*/
/* */
/* {% block content %}*/
/* */
/*     {% include "./partials/topmenu.twig" with {'action': 'test'} %}*/
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
/*                             <h2>*/
/*                                 <strong>*/
/*                                     Online-тecт английского языка*/
/*                                 </strong>*/
/*                             </h2>*/
/*                         </div>*/
/*                         <div class=" col-lg-4 col-md-4 col-sm-4 col-xs-4">*/
/*                             <hr class="hr_gray"/>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     <div>*/
/*         <form method="post" action="{{ path('saveTest') }}" id="userForm">*/
/*             <div class="container">*/
/*                 <div>*/
/*                     <p>Пройдите тест, чтобы мы могли узнать уровень вашего английского и предложить лучший вариант обучения.</p>*/
/*                     <p>И помните здесь нет хороших или плохих результатов, нам нужны ответы для того, чтобы подобрать для вас максимально эффективное обучение в нашей школе английского. Если вы не знаете ответ можете смело пропустить вопрос.</p>*/
/*                 </div>*/
/*             {% include "./partials/test.twig" with {'answer': answer, 'user': user} %}*/
/*                 <div class="submit text-center">*/
/*                     <button class="btn btn-lg btn-orange" type="submit">Отправить результаты</button>*/
/*                 </div>*/
/*             </div>*/
/*         </form>*/
/*     </div>*/
/* */
/* */
/* {% endblock %}*/
/* */
