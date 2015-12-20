<?php

/* ./partials/topmenu.twig */
class __TwigTemplate_7fe4a6b05321df8276f61bf1026797c45e428720425c7799a62786a874d41035 extends Twig_Template
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
                            <img class=\"img-responsive\" src=\"web/client/images/logo/logo.png\" alt=\"Maldena English Club\">
                        </a>
                        <div class=\"phone-mobile\">";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["phone"]) ? $context["phone"] : $this->getContext($context, "phone")), "html", null, true);
        echo "</div>
                    </div>
                </div>
                <div class=\"navbar-collapse collapse\" id=\"templatemo-nav-bar\">
                    <ul class=\"nav navbar-nav navbar-right\" style=\"margin-top: 40px;\">
                        <li class=\"active\"><a href=\"#templatemo-top\">Главная</a></li>
                        <li><a href=\"#templatemo-about\">Услуги</a></li>
                        <li><a href=\"#templatemo-contact\">Контакты</a></li>
                        <li><a class=\"phone\" href=\"#\"><strong>";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["phone"]) ? $context["phone"] : $this->getContext($context, "phone")), "html", null, true);
        echo "</strong></a></li>
                        <li><a href=\"#\"><strong>skype: maldena_vn</strong></a></li>
                    </ul>
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
        return array (  49 => 26,  38 => 18,  19 => 1,);
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
/*                             <img class="img-responsive" src="web/client/images/logo/logo.png" alt="Maldena English Club">*/
/*                         </a>*/
/*                         <div class="phone-mobile">{{ phone }}</div>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="navbar-collapse collapse" id="templatemo-nav-bar">*/
/*                     <ul class="nav navbar-nav navbar-right" style="margin-top: 40px;">*/
/*                         <li class="active"><a href="#templatemo-top">Главная</a></li>*/
/*                         <li><a href="#templatemo-about">Услуги</a></li>*/
/*                         <li><a href="#templatemo-contact">Контакты</a></li>*/
/*                         <li><a class="phone" href="#"><strong>{{ phone }}</strong></a></li>*/
/*                         <li><a href="#"><strong>skype: maldena_vn</strong></a></li>*/
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
