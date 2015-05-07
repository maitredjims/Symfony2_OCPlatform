<?php

/* ::layout.html.twig */
class __TwigTemplate_876ef300fbee5620996bea8194ebf778f713e81a9e221ae328e1ce89702fc661 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

        ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "    </head>

    <body>
        <div class=\"container\">
            <div id=\"header\" class=\"jumbotron\">
                ";
        // line 18
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 19
            echo "                    Connecté en tant que ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo " <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">Déconnexion</a>
                ";
        } else {
            // line 21
            echo "                    <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">Connexion</a>
                ";
        }
        // line 23
        echo "                <h1>Ma plateforme d'annonces</h1>
                <p>
                    Ce projet est propulsé par Symfony2,
                    et construit grâce au MOOC OpenClassrooms et SensioLabs.
                </p>
                <p>
                    <a class=\"btn btn-primary btn-lg\" href=\"http://fr.openclassrooms.com/informatique/cours/developpez-votre-site-web-avec-le-framework-symfony2\">
                        Participer au MOOC »
                    </a>
                </p>
            </div>

            <div class=\"row\">
                <div id=\"menu\" class=\"col-md-3\">
                    <h3>Les annonces</h3>
                    <ul class=\"nav nav-pills nav-stacked\">
                        <li><a href=\"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("oc_platform_home");
        echo "\">Accueil</a></li>
                        <li><a href=\"";
        // line 40
        echo $this->env->getExtension('routing')->getPath("oc_platform_add");
        echo "\">Ajouter une annonce</a></li>
                    </ul>

                    <h4>Dernières annonces</h4>
                    ";
        // line 44
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("OCPlatformBundle:Advert:menu", array("limit" => 3)));
        echo "
                </div>
                <div id=\"content\" class=\"col-md-9\">
                    ";
        // line 47
        $this->displayBlock('body', $context, $blocks);
        // line 49
        echo "                </div>
            </div>

            <hr>

            <footer>
                <p>The sky's the limit © ";
        // line 55
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " and beyond.</p>
            </footer>
        </div>

        ";
        // line 59
        $this->displayBlock('javascripts', $context, $blocks);
        // line 64
        echo "
    </body>
</html>
";
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        echo "OC Plateforme";
    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 10
        echo "            ";
        // line 11
        echo "            <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
        ";
    }

    // line 47
    public function block_body($context, array $blocks = array())
    {
        // line 48
        echo "                    ";
    }

    // line 59
    public function block_javascripts($context, array $blocks = array())
    {
        // line 60
        echo "            ";
        // line 61
        echo "            <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
            <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
        ";
    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 61,  148 => 60,  145 => 59,  141 => 48,  138 => 47,  133 => 11,  131 => 10,  128 => 9,  122 => 7,  115 => 64,  113 => 59,  106 => 55,  98 => 49,  96 => 47,  90 => 44,  83 => 40,  79 => 39,  61 => 23,  55 => 21,  47 => 19,  45 => 18,  38 => 13,  36 => 9,  31 => 7,  23 => 1,);
    }
}
