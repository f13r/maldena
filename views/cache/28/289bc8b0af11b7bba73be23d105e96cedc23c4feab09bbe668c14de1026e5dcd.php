<?php

/* ./partials/topmenu.twig */
class __TwigTemplate_271503868f7e0cd2042d4e570db7e9bdb7305a5b68759aded3a644759b26f6ce extends Twig_Template
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
        echo "<div class=\"templatemo-top-menu stuckMenu\">
    <div class=\"container\">
        <!-- Static navbar -->
        <div class=\"navbar navbar-default\" role=\"navigation\">
            <div class=\"container\">
                <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\"
                            data-target=\".navbar-collapse\">
                        <span class=\"sr-only\">Toggle navigation</span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                    <div class=\"logo\">
                        <a href=\"/\">
                            <img class=\"img-responsive\" src=\"/web/client/images/logo.png\" alt=\"Maldena English Club\">
                        </a>
                        <div class=\"phone-mobile\">";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["phone2"]) ? $context["phone2"] : $this->getContext($context, "phone2")), "html", null, true);
        echo "</div>
                    </div>
                </div>
                <div class=\"navbar-collapse collapse\" id=\"templatemo-nav-bar\">
                    <ul class=\"nav navbar-nav navbar-right\" style=\"margin-top: 40px;\">
                        ";
        // line 24
        echo "                            ";
        // line 25
        echo "                        ";
        // line 26
        echo "                        <li";
        if (((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")) == "test")) {
            echo " class=\"active\"";
        }
        echo ">
                            <a href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("test");
        echo "\">Online-тест</a>
                        </li>
                        <li";
        // line 29
        if (((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")) == "demo")) {
            echo " class=\"active\"";
        }
        echo ">
                            <a href=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("demo");
        echo "\">Пробный урок</a>
                        </li>
                        <li";
        // line 32
        if (((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")) == "teachers")) {
            echo " class=\"active\"";
        }
        echo ">
                            <a href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("teachers");
        echo "\">Преподаватели</a>
                        </li>
                        <li class=\"dropdown";
        // line 35
        if (((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")) == "services")) {
            echo " active";
        }
        echo "\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                Виды обучения <span class=\"caret\"></span>
                            </a>
                            <ul class=\"dropdown-menu\">
                                <li><a href=\"";
        // line 40
        echo $this->env->getExtension('routing')->getPath("group");
        echo "\">Групповые занятия</a></li>
                                <li><a href=\"";
        // line 41
        echo $this->env->getExtension('routing')->getPath("individually");
        echo "\">Индивидуальные занятия</a></li>
                                <li role=\"separator\" class=\"divider\"></li>
                                <li><a href=\"";
        // line 43
        echo $this->env->getExtension('routing')->getPath("it");
        echo "\">Английский для ІТ</a></li>
                                <li><a href=\"";
        // line 44
        echo $this->env->getExtension('routing')->getPath("zno");
        echo "\">Подготовка к ВНО (ЗНО)</a></li>
                                ";
        // line 46
        echo "                                ";
        // line 47
        echo "                                <li role=\"separator\" class=\"divider\"></li>
                                <li><a href=\"";
        // line 48
        echo $this->env->getExtension('routing')->getPath("speaker");
        echo "\">Speaking Club</a></li>
                            </ul>
                        </li>
                        ";
        // line 52
        echo "                            ";
        // line 53
        echo "                        ";
        // line 54
        echo "                        <li";
        if (((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")) == "contacts")) {
            echo " class=\"active\"";
        }
        echo ">
                            <a href=\"";
        // line 55
        echo $this->env->getExtension('routing')->getPath("contacts");
        echo "\">Контакты</a>
                        </li>
                        <li><a class=\"phone\" href=\"#\"><strong>";
        // line 57
        echo twig_escape_filter($this->env, (isset($context["phone"]) ? $context["phone"] : $this->getContext($context, "phone")), "html", null, true);
        echo "</strong></a></li>
                        ";
        // line 59
        echo "                    </ul>
                </div>
                <!--/.nav-collapse -->
            </div>
            <!--/.container-fluid -->
        </div>
        <!--/.navbar -->
    </div>
    <!-- /container -->
</div>
";
    }

    public function getTemplateName()
    {
        return "./partials/topmenu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 59,  138 => 57,  133 => 55,  126 => 54,  124 => 53,  122 => 52,  116 => 48,  113 => 47,  111 => 46,  107 => 44,  103 => 43,  98 => 41,  94 => 40,  84 => 35,  79 => 33,  73 => 32,  68 => 30,  62 => 29,  57 => 27,  50 => 26,  48 => 25,  46 => 24,  38 => 18,  19 => 1,);
    }
}
/* <div class="templatemo-top-menu stuckMenu">*/
/*     <div class="container">*/
/*         <!-- Static navbar -->*/
/*         <div class="navbar navbar-default" role="navigation">*/
/*             <div class="container">*/
/*                 <div class="navbar-header">*/
/*                     <button type="button" class="navbar-toggle" data-toggle="collapse"*/
/*                             data-target=".navbar-collapse">*/
/*                         <span class="sr-only">Toggle navigation</span>*/
/*                         <span class="icon-bar"></span>*/
/*                         <span class="icon-bar"></span>*/
/*                         <span class="icon-bar"></span>*/
/*                     </button>*/
/*                     <div class="logo">*/
/*                         <a href="/">*/
/*                             <img class="img-responsive" src="/web/client/images/logo.png" alt="Maldena English Club">*/
/*                         </a>*/
/*                         <div class="phone-mobile">{{ phone2 }}</div>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="navbar-collapse collapse" id="templatemo-nav-bar">*/
/*                     <ul class="nav navbar-nav navbar-right" style="margin-top: 40px;">*/
/*                         {#<li{% if action == 'main' %} class="active"{% endif %}>#}*/
/*                             {#<a href="{{ path('main') }}">Главная</a>#}*/
/*                         {#</li>#}*/
/*                         <li{% if action == 'test' %} class="active"{% endif %}>*/
/*                             <a href="{{ path('test') }}">Online-тест</a>*/
/*                         </li>*/
/*                         <li{% if action == 'demo' %} class="active"{% endif %}>*/
/*                             <a href="{{ path('demo') }}">Пробный урок</a>*/
/*                         </li>*/
/*                         <li{% if action == 'teachers' %} class="active"{% endif %}>*/
/*                             <a href="{{ path('teachers') }}">Преподаватели</a>*/
/*                         </li>*/
/*                         <li class="dropdown{% if action == 'services' %} active{% endif %}">*/
/*                             <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">*/
/*                                 Виды обучения <span class="caret"></span>*/
/*                             </a>*/
/*                             <ul class="dropdown-menu">*/
/*                                 <li><a href="{{ path('group') }}">Групповые занятия</a></li>*/
/*                                 <li><a href="{{ path('individually') }}">Индивидуальные занятия</a></li>*/
/*                                 <li role="separator" class="divider"></li>*/
/*                                 <li><a href="{{ path('it') }}">Английский для ІТ</a></li>*/
/*                                 <li><a href="{{ path('zno') }}">Подготовка к ВНО (ЗНО)</a></li>*/
/*                                 {#<li role="separator" class="divider"></li>#}*/
/*                                 {#<li><a href="{{ path('business') }}">IT и Business английский</a></li>#}*/
/*                                 <li role="separator" class="divider"></li>*/
/*                                 <li><a href="{{ path('speaker') }}">Speaking Club</a></li>*/
/*                             </ul>*/
/*                         </li>*/
/*                         {#<li{% if action == 'services' %} class="active"{% endif %}>#}*/
/*                             {#<a href="{{ path('services') }}">Услуги</a>#}*/
/*                         {#</li>#}*/
/*                         <li{% if action == 'contacts' %} class="active"{% endif %}>*/
/*                             <a href="{{ path('contacts') }}">Контакты</a>*/
/*                         </li>*/
/*                         <li><a class="phone" href="#"><strong>{{ phone }}</strong></a></li>*/
/*                         {#<li><a href="#"><strong>skype: maldena_vn</strong></a></li>#}*/
/*                     </ul>*/
/*                 </div>*/
/*                 <!--/.nav-collapse -->*/
/*             </div>*/
/*             <!--/.container-fluid -->*/
/*         </div>*/
/*         <!--/.navbar -->*/
/*     </div>*/
/*     <!-- /container -->*/
/* </div>*/
/* */
