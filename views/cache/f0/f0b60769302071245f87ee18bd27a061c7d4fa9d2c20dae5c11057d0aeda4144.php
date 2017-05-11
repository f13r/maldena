<?php

/* ./partials/contacts.twig */
class __TwigTemplate_23a525e50919367da9790421e9338eb2be003369cdf9591132c55fe4b2786cd6 extends Twig_Template
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
        echo "<div class=\"clearfix\"></div>
<div id=\"templatemo-contact\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"templatemo-line-header container pc-view\">
                        <div class=\"text-center row\">
                            <div class=\" col-lg-4 col-md-4 col-sm-4 col-xs-4\">
                                <hr class=\"hr_gray\"/>
                            </div>
                            <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-4\"><h2><strong>Наши контакты</strong></h2>
                            </div>
                            <div class=\" col-lg-4 col-md-4 col-sm-4 col-xs-4\">
                                <hr class=\"hr_gray\"/>
                            </div>
                        </div>
                    </div>
                    <div class=\"templatemo-line-header container mobile-view\">
                        <div class=\"text-center row\">
                            <div class=\"col-xs-3\">
                                <hr class=\"hr_gray\"/>
                            </div>
                            <div class=\"col-xs-6\"><h2>Наши контакты</h2></div>
                            <div class=\"col-xs-3\">
                                <hr class=\"hr_gray\"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"col-md-8\">
                <div class=\"templatemo-contact-map pc-view\" id=\"map-canvas\"></div>
                <div class=\"clearfix\"></div>
                <i>";
        // line 36
        echo twig_escape_filter($this->env, (isset($context["city"]) ? $context["city"] : $this->getContext($context, "city")), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, (isset($context["address"]) ? $context["address"] : $this->getContext($context, "address")), "html", null, true);
        echo ", тел. ";
        echo twig_escape_filter($this->env, (isset($context["phone"]) ? $context["phone"] : $this->getContext($context, "phone")), "html", null, true);
        echo " или ";
        echo twig_escape_filter($this->env, (isset($context["phone2"]) ? $context["phone2"] : $this->getContext($context, "phone2")), "html", null, true);
        echo "</i>
            </div>
            <div class=\"col-md-4 contact_right\">
                <p>Нашы <strong>курсы английского языка</strong> находятся по адресу: </p>

                <p><img src=\"/web/client/images/location.png\" alt=\"icon 1\"/>";
        // line 41
        echo twig_escape_filter($this->env, (isset($context["city"]) ? $context["city"] : $this->getContext($context, "city")), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, (isset($context["address"]) ? $context["address"] : $this->getContext($context, "address")), "html", null, true);
        echo "</p>

                <p><img src=\"/web/client/images/phone1.png\" alt=\"icon 2\"/>";
        // line 43
        echo twig_escape_filter($this->env, (isset($context["phone"]) ? $context["phone"] : $this->getContext($context, "phone")), "html", null, true);
        echo "</p>
                <p><img src=\"/web/client/images/phone1.png\" alt=\"icon 2\"/>";
        // line 44
        echo twig_escape_filter($this->env, (isset($context["phone2"]) ? $context["phone2"] : $this->getContext($context, "phone2")), "html", null, true);
        echo "</p>

                ";
        // line 46
        $this->loadTemplate("./partials/feedback.twig", "./partials/contacts.twig", 46)->display($context);
        // line 47
        echo "
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</div>
<!-- /#templatemo-contact -->
";
    }

    public function getTemplateName()
    {
        return "./partials/contacts.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 47,  86 => 46,  81 => 44,  77 => 43,  70 => 41,  56 => 36,  19 => 1,);
    }
}
/* <div class="clearfix"></div>*/
/* <div id="templatemo-contact">*/
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div class="container">*/
/*                 <div class="row">*/
/*                     <div class="templatemo-line-header container pc-view">*/
/*                         <div class="text-center row">*/
/*                             <div class=" col-lg-4 col-md-4 col-sm-4 col-xs-4">*/
/*                                 <hr class="hr_gray"/>*/
/*                             </div>*/
/*                             <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"><h2><strong>Наши контакты</strong></h2>*/
/*                             </div>*/
/*                             <div class=" col-lg-4 col-md-4 col-sm-4 col-xs-4">*/
/*                                 <hr class="hr_gray"/>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="templatemo-line-header container mobile-view">*/
/*                         <div class="text-center row">*/
/*                             <div class="col-xs-3">*/
/*                                 <hr class="hr_gray"/>*/
/*                             </div>*/
/*                             <div class="col-xs-6"><h2>Наши контакты</h2></div>*/
/*                             <div class="col-xs-3">*/
/*                                 <hr class="hr_gray"/>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/* */
/*             <div class="col-md-8">*/
/*                 <div class="templatemo-contact-map pc-view" id="map-canvas"></div>*/
/*                 <div class="clearfix"></div>*/
/*                 <i>{{ city }}, {{ address }}, тел. {{ phone }} или {{ phone2 }}</i>*/
/*             </div>*/
/*             <div class="col-md-4 contact_right">*/
/*                 <p>Нашы <strong>курсы английского языка</strong> находятся по адресу: </p>*/
/* */
/*                 <p><img src="/web/client/images/location.png" alt="icon 1"/>{{ city }}, {{ address }}</p>*/
/* */
/*                 <p><img src="/web/client/images/phone1.png" alt="icon 2"/>{{ phone }}</p>*/
/*                 <p><img src="/web/client/images/phone1.png" alt="icon 2"/>{{ phone2 }}</p>*/
/* */
/*                 {% include "./partials/feedback.twig" %}*/
/* */
/*             </div>*/
/*         </div>*/
/*         <!-- /.row -->*/
/*     </div>*/
/*     <!-- /.container -->*/
/* </div>*/
/* <!-- /#templatemo-contact -->*/
/* */
