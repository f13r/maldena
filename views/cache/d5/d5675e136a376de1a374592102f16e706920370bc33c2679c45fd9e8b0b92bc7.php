<?php

/* layouts/main.twig */
class __TwigTemplate_8a9faa07b2078acc96cdd7344c879917b97c0db9332d13fbdc0f60e8cf4dd8ff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'meta' => array($this, 'block_meta'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
    ";
        // line 5
        $this->displayBlock('meta', $context, $blocks);
        // line 6
        echo "    ";
        $this->loadTemplate("./partials/head.twig", "layouts/main.twig", 6)->display($context);
        // line 7
        echo "</head>
    <body id=\"templatemo-top\">
    <div class=\"wrapper\">

        <section class=\"main\">
            ";
        // line 12
        $this->displayBlock('content', $context, $blocks);
        // line 13
        echo "        </section>
    </div>
    <div class=\"clearfix\"></div>
    ";
        // line 16
        $this->loadTemplate("./partials/footer.twig", "layouts/main.twig", 16)->display($context);
        // line 17
        echo "    ";
        $this->loadTemplate("./partials/scripts.twig", "layouts/main.twig", 17)->display($context);
        // line 18
        echo "
    </body>
</html>
";
    }

    // line 5
    public function block_meta($context, array $blocks = array())
    {
    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "layouts/main.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 12,  58 => 5,  51 => 18,  48 => 17,  46 => 16,  41 => 13,  39 => 12,  32 => 7,  29 => 6,  27 => 5,  21 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* */
/* <head>*/
/*     {% block meta %}{% endblock %}*/
/*     {% include "./partials/head.twig" %}*/
/* </head>*/
/*     <body id="templatemo-top">*/
/*     <div class="wrapper">*/
/* */
/*         <section class="main">*/
/*             {% block content %}{% endblock %}*/
/*         </section>*/
/*     </div>*/
/*     <div class="clearfix"></div>*/
/*     {% include "./partials/footer.twig" %}*/
/*     {% include "./partials/scripts.twig" %}*/
/* */
/*     </body>*/
/* </html>*/
/* */
