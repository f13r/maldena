<?php

/* ./partials/footer.twig */
class __TwigTemplate_be74455ed435b5f0d5f49e576327983697cbf92243d9f4d8b01c190d0cc25b55 extends Twig_Template
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
        echo "<div class=\"footer\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"text-center\">
                <div>
                    <ul class=\"list-inline\">
                        <li><a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("main");
        echo "\">Главная</a></li>
                        <li><a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("demo");
        echo "\">Пробный урок</a></li>
                        <li><a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("group");
        echo "\">Групповые занятия</a></li>
                        <li><a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("individually");
        echo "\">Индивидуальное обучение</a></li>
                        ";
        // line 12
        echo "                        <li><a href=\"";
        echo $this->env->getExtension('routing')->getPath("it");
        echo "\">Английский для ІТ</a></li>
                        <li><a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("teachers");
        echo "\">Преподаватели</a></li>
                        ";
        // line 15
        echo "                        ";
        // line 16
        echo "                        ";
        // line 17
        echo "                        ";
        // line 18
        echo "                        <li><a href=\"";
        echo $this->env->getExtension('routing')->getPath("test");
        echo "\">Online-тест</a></li>
                        <li><a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("speaker");
        echo "\">Speaking Club</a></li>
                        <li><a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("contacts");
        echo "\">Контакты</a></li>
                        ";
        // line 22
        echo "                        <li>&copy; 2016</li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "./partials/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 22,  67 => 20,  63 => 19,  58 => 18,  56 => 17,  54 => 16,  52 => 15,  48 => 13,  43 => 12,  39 => 10,  35 => 9,  31 => 8,  27 => 7,  19 => 1,);
    }
}
/* <div class="footer">*/
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div class="text-center">*/
/*                 <div>*/
/*                     <ul class="list-inline">*/
/*                         <li><a href="{{ path('main') }}">Главная</a></li>*/
/*                         <li><a href="{{ path('demo') }}">Пробный урок</a></li>*/
/*                         <li><a href="{{ path('group') }}">Групповые занятия</a></li>*/
/*                         <li><a href="{{ path('individually') }}">Индивидуальное обучение</a></li>*/
/*                         {#<li><a href="{{ path('tests') }}">Подготовка к тестам</a></li>#}*/
/*                         <li><a href="{{ path('it') }}">Английский для ІТ</a></li>*/
/*                         <li><a href="{{ path('teachers') }}">Преподаватели</a></li>*/
/*                         {#<li role="separator" class="divider"></li>#}*/
/*                         {#<li role="separator" class="divider"></li>#}*/
/*                         {#<li><a href="{{ path('business') }}">IT и Business английский</a></li>#}*/
/*                         {#<li role="separator" class="divider"></li>#}*/
/*                         <li><a href="{{ path('test') }}">Online-тест</a></li>*/
/*                         <li><a href="{{ path('speaker') }}">Speaking Club</a></li>*/
/*                         <li><a href="{{ path('contacts') }}">Контакты</a></li>*/
/*                         {#<li><a href="/">Maldena English Club</a></li>#}*/
/*                         <li>&copy; 2016</li>*/
/*                     </ul>*/
/*                 </div>*/
/* */
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
