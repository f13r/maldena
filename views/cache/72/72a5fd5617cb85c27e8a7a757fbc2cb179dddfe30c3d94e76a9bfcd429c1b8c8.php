<?php

/* layouts/main.twig */
class __TwigTemplate_e17f7aadbbb0fc371be8395439df0a2f93dc1b2fe357dc5ae44852e642b1f3be extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

";
        // line 4
        $this->loadTemplate("./partials/head.twig", "layouts/main.twig", 4)->display($context);
        // line 5
        echo "
    <body id=\"templatemo-top\">
    ";
        // line 7
        $this->loadTemplate("./partials/topmenu.twig", "layouts/main.twig", 7)->display($context);
        // line 8
        echo "
    <section>
        ";
        // line 10
        $this->displayBlock('content', $context, $blocks);
        // line 11
        echo "    </section>



    ";
        // line 15
        $this->loadTemplate("./partials/footer.twig", "layouts/main.twig", 15)->display($context);
        // line 16
        echo "    ";
        $this->loadTemplate("./partials/scripts.twig", "layouts/main.twig", 16)->display($context);
        // line 17
        echo "
    </body>
</html>
";
    }

    // line 10
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
        return array (  57 => 10,  50 => 17,  47 => 16,  45 => 15,  39 => 11,  37 => 10,  33 => 8,  31 => 7,  27 => 5,  25 => 4,  20 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* */
/* {% include "./partials/head.twig" %}*/
/* */
/*     <body id="templatemo-top">*/
/*     {% include "./partials/topmenu.twig" %}*/
/* */
/*     <section>*/
/*         {% block content %}{% endblock %}*/
/*     </section>*/
/* */
/* */
/* */
/*     {% include "./partials/footer.twig" %}*/
/*     {% include "./partials/scripts.twig" %}*/
/* */
/*     </body>*/
/* </html>*/
/* */
