<?php

/* auth/login.twig.html */
class __TwigTemplate_03e128eed7afd09153eaa5712e0fa3928e18cc2ac8b60c97d0717703439215d5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.twig.html", "auth/login.twig.html", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.twig.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"container\">
    <div class=\"login-form-wrapper\">

        ";
        // line 7
        echo $this->env->getExtension('engine\core\View\TwigExtension')->formLogin();
        echo "

    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "auth/login.twig.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 7,  31 => 4,  28 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "auth/login.twig.html", "/home/alexey/www/fw40.ll/templates/default/auth/login.twig.html");
    }
}
