<?php

/* content.twig.html */
class __TwigTemplate_2fc87f26d10032ce3433cd2a8c7c5836b02d56a060f5a4af87623245f9f37b16 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.twig.html", "content.twig.html", 1);
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

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "<div class=\"container\">
<p>Content page</p>
</div>
";
    }

    public function getTemplateName()
    {
        return "content.twig.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 6,  28 => 5,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "content.twig.html", "/home/alexey/www/fw40.ll/templates/default/content.twig.html");
    }
}
