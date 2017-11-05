<?php

/* base.twig.html */
class __TwigTemplate_7b6ccf3ffdbb533ca30516dd3acfab0447b1bd956049c5ad8a1bdf42a283b8ed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!doctype html>
<html lang=\"ru\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\"
          content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <title>";
        // line 8
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "</title>
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css\" integrity=\"sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb\" crossorigin=\"anonymous\">
</head>
<body>
<div class=\"block-wrapper\">
    <header>
        ";
        // line 14
        $this->displayBlock('header', $context, $blocks);
        // line 17
        echo "    </header>
    <main>
        ";
        // line 19
        $this->displayBlock('content', $context, $blocks);
        // line 22
        echo "    </main>
    <footer>
        ";
        // line 24
        $this->displayBlock('footer', $context, $blocks);
        // line 27
        echo "    </footer>
</div><!-- END WRAPPER -->
<script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js\" integrity=\"sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh\" crossorigin=\"anonymous\"></script>
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js\" integrity=\"sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ\" crossorigin=\"anonymous\"></script>
</body>
</html>";
    }

    // line 14
    public function block_header($context, array $blocks = array())
    {
        // line 15
        echo "        ";
        echo twig_include($this->env, $context, "header.twig.html");
        echo "
        ";
    }

    // line 19
    public function block_content($context, array $blocks = array())
    {
        // line 20
        echo "
        ";
    }

    // line 24
    public function block_footer($context, array $blocks = array())
    {
        // line 25
        echo "        ";
        echo twig_include($this->env, $context, "footer.twig.html");
        echo "
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
        return array (  85 => 25,  82 => 24,  77 => 20,  74 => 19,  67 => 15,  64 => 14,  54 => 27,  52 => 24,  48 => 22,  46 => 19,  42 => 17,  40 => 14,  31 => 8,  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "base.twig.html", "/home/alexey/www/fw40.ll/templates/default/base.twig.html");
    }
}
