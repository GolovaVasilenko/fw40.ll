<?php

/* admin-base.twig.html */
class __TwigTemplate_f8063288370159782379e8b14ea300b6efcaef038b3568af44c75c4352d928fa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'sidebar' => array($this, 'block_sidebar'),
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
        echo "css/admin.css\" type=\"text/css\" />

</head>
<body>
<div class=\"block-wrapper\">
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-md-2 bg-sidebar\">
                ";
        // line 19
        $this->displayBlock('sidebar', $context, $blocks);
        // line 41
        echo "            </div>
            <div class=\"col-md-10\">
        ";
        // line 43
        $this->displayBlock('header', $context, $blocks);
        // line 52
        echo "

        ";
        // line 54
        $this->displayBlock('content', $context, $blocks);
        // line 57
        echo "            </div>
        </div>
    </div>
        ";
        // line 60
        $this->displayBlock('footer', $context, $blocks);
        // line 63
        echo "
</div><!-- END WRAPPER -->
<script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js\" integrity=\"sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh\" crossorigin=\"anonymous\"></script>
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js\" integrity=\"sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ\" crossorigin=\"anonymous\"></script>
</body>
</html>";
    }

    // line 19
    public function block_sidebar($context, array $blocks = array())
    {
        // line 20
        echo "                <section id=\"logo\">
                    <div class=\"img-block\">

                    </div>
                    <div class=\"logo-block\">
                        WD STUDIO
                    </div>
                </section>
                <section id=\"navigation\">
                    <nav class=\"main-navigation\">
                        <ul class=\"nav flex-column\">
                            <li class=\"nav-item\"><a href=\"/admin\">Dashboard</a></li>
                            <li class=\"nav-item\"><a href=\"/admin/page\">Pages</a></li>
                            <li class=\"nav-item\"><a href=\"/admin/userst\">Users</a></li>
                            <li class=\"nav-item\"><a href=\"/admin/roles\">Roles</a></li>
                            <li class=\"nav-item\"><a href=\"/admin/permissions\">Permissions</a></li>
                            <li class=\"nav-item\"><a href=\"/admin/settings\">Settings</a></li>
                        </ul>
                    </nav>
                </section>
                ";
    }

    // line 43
    public function block_header($context, array $blocks = array())
    {
        // line 44
        echo "                <section id=\"header\">
                    <nav id=\"top-menu\" class=\"nav justify-content-end\">
                        <ul>
                            <li><a href=\"/logout\">Enter</a></li>
                        </ul>
                    </nav>
                </section>
        ";
    }

    // line 54
    public function block_content($context, array $blocks = array())
    {
        // line 55
        echo "
        ";
    }

    // line 60
    public function block_footer($context, array $blocks = array())
    {
        // line 61
        echo "        ";
        echo twig_include($this->env, $context, "footer.twig.html");
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "admin-base.twig.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 61,  129 => 60,  124 => 55,  121 => 54,  110 => 44,  107 => 43,  83 => 20,  80 => 19,  70 => 63,  68 => 60,  63 => 57,  61 => 54,  57 => 52,  55 => 43,  51 => 41,  49 => 19,  38 => 11,  32 => 8,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "admin-base.twig.html", "/home/alexey/www/fw40.ll/templates/default/admin-base.twig.html");
    }
}
