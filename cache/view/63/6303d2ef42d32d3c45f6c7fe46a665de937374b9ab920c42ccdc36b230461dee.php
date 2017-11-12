<?php

/* base.twig.html */
class __TwigTemplate_680395cb1c626452110d266fc1cec55481b068b4789aca4eb8bf2c562067a815 extends Twig_Template
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
    <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, ($context["assetsPath"] ?? null), "html", null, true);
        echo "css/custom.css\" type=\"text/css\" />

</head>
<body>
<div class=\"block-wrapper\">
    <header>
        ";
        // line 17
        $this->displayBlock('header', $context, $blocks);
        // line 20
        echo "    </header>
    <main>
        ";
        // line 22
        $this->displayBlock('content', $context, $blocks);
        // line 25
        echo "    </main>
    <footer>
        ";
        // line 27
        $this->displayBlock('footer', $context, $blocks);
        // line 30
        echo "    </footer>
</div><!-- END WRAPPER -->
<script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js\" integrity=\"sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh\" crossorigin=\"anonymous\"></script>
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js\" integrity=\"sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ\" crossorigin=\"anonymous\"></script>
</body>
</html>";
    }

    // line 17
    public function block_header($context, array $blocks = array())
    {
        // line 18
        echo "        ";
        echo twig_include($this->env, $context, "header.twig.html");
        echo "
        ";
    }

    // line 22
    public function block_content($context, array $blocks = array())
    {
        // line 23
        echo "
        ";
    }

    // line 27
    public function block_footer($context, array $blocks = array())
    {
        // line 28
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
        return array (  91 => 28,  88 => 27,  83 => 23,  80 => 22,  73 => 18,  70 => 17,  60 => 30,  58 => 27,  54 => 25,  52 => 22,  48 => 20,  46 => 17,  37 => 11,  31 => 8,  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "base.twig.html", "/home/alexey/www/fw40.ll/templates/default/base.twig.html");
    }
}
