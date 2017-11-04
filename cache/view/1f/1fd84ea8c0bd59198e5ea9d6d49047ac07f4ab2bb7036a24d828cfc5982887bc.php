<?php

/* base.twig.html */
class __TwigTemplate_7b6ccf3ffdbb533ca30516dd3acfab0447b1bd956049c5ad8a1bdf42a283b8ed extends Twig_Template
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
        echo "<!doctype html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\"
          content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <title>";
        // line 8
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "</title>
</head>
<body>
";
        // line 11
        $this->displayBlock('content', $context, $blocks);
        // line 15
        echo "</body>
</html>";
    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        // line 12
        echo "
<h1>YRA! VSE RABOTAET</h1>
";
    }

    public function getTemplateName()
    {
        return "base.twig.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 12,  42 => 11,  37 => 15,  35 => 11,  29 => 8,  20 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "base.twig.html", "/home/alexey/www/fw40.ll/templates/default/base.twig.html");
    }
}
