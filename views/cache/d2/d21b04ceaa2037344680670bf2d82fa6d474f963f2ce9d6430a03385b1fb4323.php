<?php

/* ./partials/tryitout.twig */
class __TwigTemplate_e7a9621bd4cfd73afc4a4b960a95dab74dce066d30f4dad1a04295e019d3da2f extends Twig_Template
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
        echo "<div id=\"templatemo-for-start\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"templatemo-line-header container\">
                <div class=\"text-center row\">
                    <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-4\">
                        <hr class=\"hr_gray\"/>
                    </div>
                    <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-4\">
                        <h2>
                            <strong>
                                Пробное занятие
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
<div class=\"container try-it-out\">
    <div class=\"row\">
        <div class=\"col-md-8 col-sm-12 col-xs-12 column\">
            <div class=\"try-it-out-text\">
                Попробуйте наш бесплатный <a href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("demo");
        echo "?button=1\" class=\"underline\">пробный урок</a>, а после этого решайте хотите ли вы продолжить обучение!
            </div>
            <div class=\"try-it-out-button\">
                <a href=\"";
        // line 31
        echo $this->env->getExtension('routing')->getPath("demo");
        echo "?button=1\">
                    <button type=\"button\" class=\"btn btn-lg btn-orange\">
                        <span class=\"glyphicon glyphicon-education\"></span> Записаться
                    </button>
                </a>
            </div>
        </div>
        <div class=\"col-md-4 col-sm-0 col-xs-0 column\">
            <div class=\"img text-center pc-view\">
                <img src=\"https://media.licdn.com/mpr/mpr/p/8/005/085/15e/050995c.jpg\">
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "./partials/tryitout.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 31,  48 => 28,  19 => 1,);
    }
}
/* <div id="templatemo-for-start">*/
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div class="templatemo-line-header container">*/
/*                 <div class="text-center row">*/
/*                     <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">*/
/*                         <hr class="hr_gray"/>*/
/*                     </div>*/
/*                     <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">*/
/*                         <h2>*/
/*                             <strong>*/
/*                                 Пробное занятие*/
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
/* <div class="container try-it-out">*/
/*     <div class="row">*/
/*         <div class="col-md-8 col-sm-12 col-xs-12 column">*/
/*             <div class="try-it-out-text">*/
/*                 Попробуйте наш бесплатный <a href="{{ path('demo') }}?button=1" class="underline">пробный урок</a>, а после этого решайте хотите ли вы продолжить обучение!*/
/*             </div>*/
/*             <div class="try-it-out-button">*/
/*                 <a href="{{ path('demo') }}?button=1">*/
/*                     <button type="button" class="btn btn-lg btn-orange">*/
/*                         <span class="glyphicon glyphicon-education"></span> Записаться*/
/*                     </button>*/
/*                 </a>*/
/*             </div>*/
/*         </div>*/
/*         <div class="col-md-4 col-sm-0 col-xs-0 column">*/
/*             <div class="img text-center pc-view">*/
/*                 <img src="https://media.licdn.com/mpr/mpr/p/8/005/085/15e/050995c.jpg">*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
