<?php

/* /admin/index.twig.html */
class __TwigTemplate_7c7bc9edb0a35736ec51d11c38d7dddc7b23c1518e3f0b471adb736df611ba4f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin-base.twig.html", "/admin/index.twig.html", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "admin-base.twig.html";
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
<section id=\"main-content\">
    <div class=\"din-content\">
        <h1>Dasboard</h1>
    </div>
</section>

";
    }

    // line 13
    public function block_footer($context, array $blocks = array())
    {
        // line 14
        echo "<section id=\"footer\">

<div class=\"copy\">&copy; 2017 WD STUDIO</div>
</section>
";
    }

    public function getTemplateName()
    {
        return "/admin/index.twig.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 14,  43 => 13,  32 => 4,  29 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/admin/index.twig.html", "/home/alexey/www/fw40.ll/templates/default/admin/index.twig.html");
    }
}
