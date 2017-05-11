<?php

/* ./partials/carousel.twig */
class __TwigTemplate_0b86d1d6f3930934a944ba54ae3f78500f5c991079b5dda907fa84bbe143540f extends Twig_Template
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
        echo "<div>
    <!-- Carousel -->
    <div id=\"carousel\" class=\"carousel slide pc-view\" data-ride=\"carousel\">
        <!-- Indicators -->
        <ol class=\"carousel-indicators\">
            <li data-target=\"#carousel-example-generic\" data-slide-to=\"0\" class=\"active\"></li>
            <li data-target=\"#carousel-example-generic\" data-slide-to=\"1\"></li>
            <li data-target=\"#carousel-example-generic\" data-slide-to=\"2\"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class=\"carousel-inner\" role=\"listbox\">
            <div class=\"item logo-text  active\">
                <img src=\"/web/client/images/carousel/borat.png\" alt=\"Поездки зарубеж\" class=\"img-responsive center-block\"/>

                <div class=\"carousel-caption logo-text\">
                    <h2>Предстоит поездка за границу?</h2>

                    <p>Поможем чувствовать себя уверенно в общении с иностранцами</p>
                    <a class=\"btn btn-lg btn-orange\" href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("group");
        echo "\">Подробнее</a>
                </div>
            </div>
            <div class=\"item\">
                <img src=\"/web/client/images/carousel/godfather.png\" alt=\"Профессиональный английский\" class=\"img-responsive center-block\"/>

                <div class=\"carousel-caption logo-text\">
                    <h2>Нужен английский по работе?</h2>

                    <p>С опытными преподавателями подтяните свой уровень профессионального английского</p>
                    <a class=\"btn btn-lg btn-orange\" href=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("individually");
        echo "\">Подробнее</a>
                </div>
            </div>
            <div class=\"item\">
                <img src=\"/web/client/images/carousel/fightclub.png\" alt=\"Speaking club\" class=\"img-responsive center-block\"/>

                <div class=\"carousel-caption logo-text\">
                    <h2>Английский расширит круг общения</h2>

                    <p>Вы сможете узнавать новости со всего мира и общаться с очень разными людьми</p>
                    <a class=\"btn btn-lg btn-orange\" href=\"";
        // line 40
        echo $this->env->getExtension('routing')->getPath("speaker");
        echo "\">Speaking club</a>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class=\"left carousel-control\" href=\"#carousel\" role=\"button\" data-slide=\"prev\">
            <span class=\"glyphicon glyphicon-chevron-left\" aria-hidden=\"true\"></span>
            <span class=\"sr-only\">Previous</span>
        </a>
        <a class=\"right carousel-control\" href=\"#carousel\" role=\"button\" data-slide=\"next\">
            <span class=\"glyphicon glyphicon-chevron-right\" aria-hidden=\"true\"></span>
            <span class=\"sr-only\">Next</span>
        </a>
    </div>
    <!-- /#templatemo-carousel -->
</div>
";
    }

    public function getTemplateName()
    {
        return "./partials/carousel.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 40,  53 => 30,  40 => 20,  19 => 1,);
    }
}
/* <div>*/
/*     <!-- Carousel -->*/
/*     <div id="carousel" class="carousel slide pc-view" data-ride="carousel">*/
/*         <!-- Indicators -->*/
/*         <ol class="carousel-indicators">*/
/*             <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>*/
/*             <li data-target="#carousel-example-generic" data-slide-to="1"></li>*/
/*             <li data-target="#carousel-example-generic" data-slide-to="2"></li>*/
/*         </ol>*/
/* */
/*         <!-- Wrapper for slides -->*/
/*         <div class="carousel-inner" role="listbox">*/
/*             <div class="item logo-text  active">*/
/*                 <img src="/web/client/images/carousel/borat.png" alt="Поездки зарубеж" class="img-responsive center-block"/>*/
/* */
/*                 <div class="carousel-caption logo-text">*/
/*                     <h2>Предстоит поездка за границу?</h2>*/
/* */
/*                     <p>Поможем чувствовать себя уверенно в общении с иностранцами</p>*/
/*                     <a class="btn btn-lg btn-orange" href="{{ path('group') }}">Подробнее</a>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="item">*/
/*                 <img src="/web/client/images/carousel/godfather.png" alt="Профессиональный английский" class="img-responsive center-block"/>*/
/* */
/*                 <div class="carousel-caption logo-text">*/
/*                     <h2>Нужен английский по работе?</h2>*/
/* */
/*                     <p>С опытными преподавателями подтяните свой уровень профессионального английского</p>*/
/*                     <a class="btn btn-lg btn-orange" href="{{ path('individually') }}">Подробнее</a>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="item">*/
/*                 <img src="/web/client/images/carousel/fightclub.png" alt="Speaking club" class="img-responsive center-block"/>*/
/* */
/*                 <div class="carousel-caption logo-text">*/
/*                     <h2>Английский расширит круг общения</h2>*/
/* */
/*                     <p>Вы сможете узнавать новости со всего мира и общаться с очень разными людьми</p>*/
/*                     <a class="btn btn-lg btn-orange" href="{{ path('speaker') }}">Speaking club</a>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <!-- Controls -->*/
/*         <a class="left carousel-control" href="#carousel" role="button" data-slide="prev">*/
/*             <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>*/
/*             <span class="sr-only">Previous</span>*/
/*         </a>*/
/*         <a class="right carousel-control" href="#carousel" role="button" data-slide="next">*/
/*             <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>*/
/*             <span class="sr-only">Next</span>*/
/*         </a>*/
/*     </div>*/
/*     <!-- /#templatemo-carousel -->*/
/* </div>*/
/* */
