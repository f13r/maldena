<?php

/* templates/admin/login.twig */
class __TwigTemplate_575ac06160d6d97838edf7d4585d0ec77336463fa3afde28b15e4715dc50153c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layouts/login.twig", "templates/admin/login.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layouts/login.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "
<form class=\"form-horizontal\" action=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("admin_login_check");
        echo "\" method=\"post\">
\t";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "html", null, true);
        echo "
\t<div class=\"input-prepend\" title=\"Username\">
\t\t<span class=\"add-on\"><i class=\"halflings-icon user\"></i></span>
\t\t<input class=\"input-large span10\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" name=\"_username\" id=\"username\" type=\"text\" placeholder=\"type username\"/>
\t</div>
\t<div class=\"clearfix\"></div>

\t<div class=\"input-prepend\" title=\"Password\">
\t\t<span class=\"add-on\"><i class=\"halflings-icon lock\"></i></span>
\t\t<input class=\"input-large span10\" name=\"_password\" id=\"password\" type=\"password\" placeholder=\"type password\"/>
\t</div>
\t<div class=\"clearfix\"></div>

\t";
        // line 20
        echo "
\t<div class=\"button-login\">
\t\t<button type=\"submit\" class=\"btn btn-primary\">Login</button>
\t</div>
\t<div class=\"clearfix\"></div>
</form>

";
    }

    public function getTemplateName()
    {
        return "templates/admin/login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 20,  44 => 9,  38 => 6,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends "layouts/login.twig" %}*/
/* */
/* {% block content %}*/
/* */
/* <form class="form-horizontal" action="{{ path('admin_login_check') }}" method="post">*/
/* 	{{ error }}*/
/* 	<div class="input-prepend" title="Username">*/
/* 		<span class="add-on"><i class="halflings-icon user"></i></span>*/
/* 		<input class="input-large span10" value="{{ last_username }}" name="_username" id="username" type="text" placeholder="type username"/>*/
/* 	</div>*/
/* 	<div class="clearfix"></div>*/
/* */
/* 	<div class="input-prepend" title="Password">*/
/* 		<span class="add-on"><i class="halflings-icon lock"></i></span>*/
/* 		<input class="input-large span10" name="_password" id="password" type="password" placeholder="type password"/>*/
/* 	</div>*/
/* 	<div class="clearfix"></div>*/
/* */
/* 	{#<label class="remember" for="remember"><input type="checkbox" id="remember" />Remember me</label>#}*/
/* */
/* 	<div class="button-login">*/
/* 		<button type="submit" class="btn btn-primary">Login</button>*/
/* 	</div>*/
/* 	<div class="clearfix"></div>*/
/* </form>*/
/* */
/* {% endblock %}*/
/* */
