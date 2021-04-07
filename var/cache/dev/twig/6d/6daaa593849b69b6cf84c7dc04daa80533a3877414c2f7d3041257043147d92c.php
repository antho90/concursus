<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* base.html.twig */
class __TwigTemplate_143f7bf0387c6ca1929eb569a00d85cbf62512a3cd9c8295239d87f29970388b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body_id' => [$this, 'block_body_id'],
            'header' => [$this, 'block_header'],
            'nav' => [$this, 'block_nav'],
            'flash' => [$this, 'block_flash'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 2
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 2, $this->source); })()), "request", [], "any", false, false, false, 2), "locale", [], "any", false, false, false, 2), "html", null, true);
        echo "\">
\t<head>
\t\t<meta charset=\"UTF-8\"/>
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"/>
\t\t<link rel=\"stylesheet\" href=\"/assets/css/style.css\">
\t\t<title>
\t\t\t";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        // line 14
        echo "\t\t</title>
\t\t<link rel=\"stylesheet\" href=\"https://bootswatch.com/4/flatly/bootstrap.min.css\">
\t\t";
        // line 16
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 18
        echo " <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\"/> </head> <body>
\t\t\t<body id=\"";
        // line 19
        $this->displayBlock('body_id', $context, $blocks);
        echo "\"> ";
        $this->displayBlock('header', $context, $blocks);
        // line 20
        echo "
\t\t\t\t";
        // line 21
        $this->displayBlock('nav', $context, $blocks);
        // line 174
        echo "
\t\t\t\t";
        // line 175
        $this->displayBlock('flash', $context, $blocks);
        // line 197
        echo "
\t\t\t\t<div class=\"container bck1 padded\"> ";
        // line 198
        $this->displayBlock('body', $context, $blocks);
        // line 199
        echo "\t\t\t\t\t</div>

\t\t\t\t\t";
        // line 208
        echo "
\t\t\t\t\t";
        // line 209
        $this->displayBlock('javascripts', $context, $blocks);
        // line 215
        echo "

\t\t\t\t</body>
\t\t\t</html>
\t\t</head>
\t</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 8
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 9
        echo "\t\t\t\t";
        if (array_key_exists("title", $context)) {
            // line 10
            echo "\t\t\t\t\t";
            echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 10, $this->source); })()), "html", null, true);
        } else {
            echo "Title
\t\t\t\t";
        }
        // line 12
        echo "\t\t\t\t| Concursus
\t\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 16
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 17
        echo "\t\t";
        // line 18
        echo "\t\t<link</body ";
        echo " ";
        echo " <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/styles.css"), "html", null, true);
        echo "\"> ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 19
    public function block_body_id($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_id"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 21
    public function block_nav($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "nav"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "nav"));

        // line 22
        echo "
";
        // line 23
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 24
            echo "
\t\t\t\t\t<nav class=\"navbar navbar-default navbar-expand-lg navbar-dark bg-primary\">
\t\t\t\t\t\t<a class=\"navbar-brand\" href=\"";
            // line 26
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_homepage_index");
            echo "\"><img width=\"130\" height=\"50\" src=\"/images/logo_concursus.png\" alt=\"\"></a>
\t\t\t\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarColor01\" aria-controls=\"navbarColor01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t\t\t\t\t</button>

\t\t\t\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbarColor01\">
\t\t\t\t\t\t\t<ul class=\"navbar-nav mr-auto\">

\t\t\t\t\t\t\t\t\t";
            // line 37
            echo "
\t\t\t\t\t\t\t\t      <li class=\"nav-item dropdown\">
\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Evenement</a>
\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
            // line 41
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_homepage_programme");
            echo "\">Programmes</a>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
            // line 42
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_homepage_livevideos");
            echo "\">Lives/Vidéos</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Mentor</a>
\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Profil</a>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Réglages</a>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Vos compétitions</a>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
            // line 52
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mentor_equipes");
            echo "\">Equipe</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Manage</a>
\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
            // line 59
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("utilisateurs");
            echo "\">Utilisateurs</a>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
            // line 60
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admins");
            echo "\">Admins</a>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
            // line 61
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mentors");
            echo "\">Mentors</a>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
            // line 62
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("juges");
            echo "\">Juges</a>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
            // line 63
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("equipes");
            echo "\">Equipes</a>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
            // line 64
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("competitionsList");
            echo "\">Compétitions</a>

\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"";
            // line 70
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_homepage_aide");
            echo "\"><img width=\"20\" height=\"20\" src=\"https://img.icons8.com/doodle/48/000000/help.png\"/> Aide</a>
\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<ul class=\"navbar-nav ml-auto\">
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"";
            // line 76
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_logout");
            echo "\">Déconnexion</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</nav>

\t\t\t\t";
            // line 83
            echo "


\t\t\t\t";
        } elseif ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_MENTOR")) {
            // line 87
            echo "
\t\t\t\t\t<nav class=\"navbar navbar-default navbar-expand-lg navbar-dark bg-primary\">
\t\t\t\t\t\t<a class=\"navbar-brand\" href=\"";
            // line 89
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_homepage_index");
            echo "\"><img width=\"130\" height=\"50\" src=\"/images/logo_concursus.png\" alt=\"\"></a>
\t\t\t\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarColor01\" aria-controls=\"navbarColor01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t\t\t\t\t</button>

\t\t\t\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbarColor01\">
\t\t\t\t\t\t\t<ul class=\"navbar-nav mr-auto\">

\t\t\t\t\t\t\t\t\t";
            // line 100
            echo "
\t\t\t\t\t\t\t\t      <li class=\"nav-item dropdown\">
\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Evenement</a>
\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
            // line 104
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_homepage_programme");
            echo "\">Programmes</a>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
            // line 105
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_homepage_livevideos");
            echo "\">Lives/Vidéos</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Mentor</a>
\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Profil</a>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Réglages</a>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Vos compétitions</a>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
            // line 115
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mentor_equipes");
            echo "\">Equipe</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"";
            // line 120
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_homepage_aide");
            echo "\"><img width=\"20\" height=\"20\" src=\"https://img.icons8.com/doodle/48/000000/help.png\"/> Aide</a>
\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<ul class=\"navbar-nav ml-auto\">
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"";
            // line 126
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_logout");
            echo "\">Déconnexion</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</nav>

\t\t\t\t";
        } else {
            // line 133
            echo "
\t\t\t\t\t<nav class=\"navbar navbar-default navbar-expand-lg navbar-dark bg-primary\">
\t\t\t\t\t\t<a class=\"navbar-brand\" href=\"";
            // line 135
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_homepage_index");
            echo "\"><img width=\"130\" height=\"50\" src=\"/images/logo_concursus.png\" alt=\"\"></a>
\t\t\t\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarColor01\" aria-controls=\"navbarColor01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t\t\t\t\t</button>

\t\t\t\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbarColor01\">
\t\t\t\t\t\t\t<ul class=\"navbar-nav mr-auto\">

\t\t\t\t\t\t\t\t      <li class=\"nav-item dropdown\">
\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Evenement</a>
\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
            // line 146
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_homepage_programme");
            echo "\">Programmes</a>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
            // line 147
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_homepage_livevideos");
            echo "\">Lives/Vidéos</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t";
            // line 154
            echo "
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"";
            // line 156
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_homepage_aide");
            echo "\"><img width=\"20\" height=\"20\" src=\"https://img.icons8.com/doodle/48/000000/help.png\"/> Aide</a>
\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t<ul class=\"navbar-nav ml-auto\">
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"";
            // line 162
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_login");
            echo "\">Connexion</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t\t\t";
            // line 169
            echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</nav>
\t\t\t\t\t";
        }
        // line 173
        echo "\t\t\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 175
    public function block_flash($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "flash"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "flash"));

        // line 176
        echo "\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 176, $this->source); })()), "session", [], "any", false, false, false, 176), "flashbag", [], "any", false, false, false, 176), "get", [0 => "success"], "method", false, false, false, 176));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 177
            echo "\t\t\t\t\t\t<div class=\"container alert alert-success\" role=\"alert\">
\t\t\t\t\t\t\t";
            // line 178
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 181
        echo "\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 181, $this->source); })()), "session", [], "any", false, false, false, 181), "flashbag", [], "any", false, false, false, 181), "get", [0 => "info"], "method", false, false, false, 181));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 182
            echo "\t\t\t\t\t\t<div class=\"container alert alert-info\" role=\"alert\">
\t\t\t\t\t\t\t";
            // line 183
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 186
        echo "\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 186, $this->source); })()), "session", [], "any", false, false, false, 186), "flashbag", [], "any", false, false, false, 186), "get", [0 => "warning"], "method", false, false, false, 186));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 187
            echo "\t\t\t\t\t\t<div class=\"container alert alert-warning\" role=\"alert\">
\t\t\t\t\t\t\t";
            // line 188
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 191
        echo "\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 191, $this->source); })()), "session", [], "any", false, false, false, 191), "flashbag", [], "any", false, false, false, 191), "get", [0 => "danger"], "method", false, false, false, 191));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 192
            echo "\t\t\t\t\t\t<div class=\"container alert alert-danger\" role=\"alert\">
\t\t\t\t\t\t\t";
            // line 193
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 196
        echo "\t\t\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 198
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 209
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 210
        echo "    <script src=\"https://bootswatch.com/_vendor/jquery/dist/jquery.min.js\"></script>
    <script src=\"https://bootswatch.com/_vendor/bootstrap/dist/js/bootstrap.bundle.min.js\"></script>
    <script src=\"https://bootswatch.com/_assets/js/custom.js\"></script>

\t\t\t\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  574 => 210,  564 => 209,  546 => 198,  536 => 196,  527 => 193,  524 => 192,  519 => 191,  510 => 188,  507 => 187,  502 => 186,  493 => 183,  490 => 182,  485 => 181,  476 => 178,  473 => 177,  468 => 176,  458 => 175,  448 => 173,  442 => 169,  435 => 162,  426 => 156,  422 => 154,  415 => 147,  411 => 146,  397 => 135,  393 => 133,  383 => 126,  374 => 120,  366 => 115,  353 => 105,  349 => 104,  343 => 100,  332 => 89,  328 => 87,  322 => 83,  313 => 76,  304 => 70,  295 => 64,  291 => 63,  287 => 62,  283 => 61,  279 => 60,  275 => 59,  265 => 52,  252 => 42,  248 => 41,  242 => 37,  231 => 26,  227 => 24,  225 => 23,  222 => 22,  212 => 21,  177 => 19,  163 => 18,  161 => 17,  151 => 16,  140 => 12,  133 => 10,  130 => 9,  120 => 8,  104 => 215,  102 => 209,  99 => 208,  95 => 199,  93 => 198,  90 => 197,  88 => 175,  85 => 174,  83 => 21,  80 => 20,  76 => 19,  71 => 18,  69 => 16,  65 => 14,  63 => 8,  54 => 2,  51 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"{{ app.request.locale }}\">
\t<head>
\t\t<meta charset=\"UTF-8\"/>
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"/>
\t\t<link rel=\"stylesheet\" href=\"/assets/css/style.css\">
\t\t<title>
\t\t\t{% block title %}
\t\t\t\t{% if title is defined %}
\t\t\t\t\t{{title}}{% else %}Title
\t\t\t\t{% endif %}
\t\t\t\t| Concursus
\t\t\t{% endblock %}
\t\t</title>
\t\t<link rel=\"stylesheet\" href=\"https://bootswatch.com/4/flatly/bootstrap.min.css\">
\t\t{% block stylesheets %}
\t\t{# bootstrap #}
\t\t<link</body {# rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\" integrity=\"sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm\" crossorigin=\"anonymous\"> #} {# custom #} <link rel=\"stylesheet\" href=\"{{ asset('assets/css/styles.css') }}\"> {% endblock %} <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\"/> </head> <body>
\t\t\t<body id=\"{% block body_id %}{% endblock %}\"> {% block header %}{% endblock %}

\t\t\t\t{% block nav %}

{% if is_granted('ROLE_ADMIN') %}

\t\t\t\t\t<nav class=\"navbar navbar-default navbar-expand-lg navbar-dark bg-primary\">
\t\t\t\t\t\t<a class=\"navbar-brand\" href=\"{{path('app_homepage_index')}}\"><img width=\"130\" height=\"50\" src=\"/images/logo_concursus.png\" alt=\"\"></a>
\t\t\t\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarColor01\" aria-controls=\"navbarColor01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t\t\t\t\t</button>

\t\t\t\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbarColor01\">
\t\t\t\t\t\t\t<ul class=\"navbar-nav mr-auto\">

\t\t\t\t\t\t\t\t\t{# <li class=\"nav-item {% if mainNavMember is defined %}active{% endif %}\">
\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"{{path('app_member_index')}}\">Espace membre</a>
\t\t\t\t\t\t\t\t\t</li> #}

\t\t\t\t\t\t\t\t      <li class=\"nav-item dropdown\">
\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Evenement</a>
\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{path('app_homepage_programme')}}\">Programmes</a>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{path('app_homepage_livevideos')}}\">Lives/Vidéos</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Mentor</a>
\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Profil</a>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Réglages</a>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Vos compétitions</a>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{path('mentor_equipes')}}\">Equipe</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Manage</a>
\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{path('utilisateurs')}}\">Utilisateurs</a>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{path('admins')}}\">Admins</a>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{path('mentors')}}\">Mentors</a>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{path('juges')}}\">Juges</a>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{path('equipes')}}\">Equipes</a>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{path('competitionsList')}}\">Compétitions</a>

\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"{{path('app_homepage_aide')}}\"><img width=\"20\" height=\"20\" src=\"https://img.icons8.com/doodle/48/000000/help.png\"/> Aide</a>
\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<ul class=\"navbar-nav ml-auto\">
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"{{path('security_logout')}}\">Déconnexion</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</nav>

\t\t\t\t{# {% else %} #}



\t\t\t\t{% elseif is_granted('ROLE_MENTOR') %}

\t\t\t\t\t<nav class=\"navbar navbar-default navbar-expand-lg navbar-dark bg-primary\">
\t\t\t\t\t\t<a class=\"navbar-brand\" href=\"{{path('app_homepage_index')}}\"><img width=\"130\" height=\"50\" src=\"/images/logo_concursus.png\" alt=\"\"></a>
\t\t\t\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarColor01\" aria-controls=\"navbarColor01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t\t\t\t\t</button>

\t\t\t\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbarColor01\">
\t\t\t\t\t\t\t<ul class=\"navbar-nav mr-auto\">

\t\t\t\t\t\t\t\t\t{# <li class=\"nav-item {% if mainNavMember is defined %}active{% endif %}\">
\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"{{path('app_member_index')}}\">Espace membre</a>
\t\t\t\t\t\t\t\t\t</li> #}

\t\t\t\t\t\t\t\t      <li class=\"nav-item dropdown\">
\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Evenement</a>
\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{path('app_homepage_programme')}}\">Programmes</a>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{path('app_homepage_livevideos')}}\">Lives/Vidéos</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Mentor</a>
\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Profil</a>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Réglages</a>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Vos compétitions</a>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{path('mentor_equipes')}}\">Equipe</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"{{path('app_homepage_aide')}}\"><img width=\"20\" height=\"20\" src=\"https://img.icons8.com/doodle/48/000000/help.png\"/> Aide</a>
\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<ul class=\"navbar-nav ml-auto\">
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"{{path('security_logout')}}\">Déconnexion</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</nav>

\t\t\t\t{% else %}

\t\t\t\t\t<nav class=\"navbar navbar-default navbar-expand-lg navbar-dark bg-primary\">
\t\t\t\t\t\t<a class=\"navbar-brand\" href=\"{{path('app_homepage_index')}}\"><img width=\"130\" height=\"50\" src=\"/images/logo_concursus.png\" alt=\"\"></a>
\t\t\t\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarColor01\" aria-controls=\"navbarColor01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t\t\t\t\t</button>

\t\t\t\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbarColor01\">
\t\t\t\t\t\t\t<ul class=\"navbar-nav mr-auto\">

\t\t\t\t\t\t\t\t      <li class=\"nav-item dropdown\">
\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Evenement</a>
\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{path('app_homepage_programme')}}\">Programmes</a>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{path('app_homepage_livevideos')}}\">Lives/Vidéos</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t{# <li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"{{path('security_login_mentor')}}\">Mentor</a>
\t\t\t\t\t\t\t\t\t</li> #}

\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"{{path('app_homepage_aide')}}\"><img width=\"20\" height=\"20\" src=\"https://img.icons8.com/doodle/48/000000/help.png\"/> Aide</a>
\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t<ul class=\"navbar-nav ml-auto\">
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"{{path('security_login')}}\">Connexion</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t\t\t{# <li class=\"nav-item {% if mainNavRegistration is defined %}active{% endif %}\">
\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"{{path('app_registration_register')}}\">Inscription</a>
\t\t\t\t\t\t\t\t\t</li> #}

\t\t\t\t\t\t</div>
\t\t\t\t\t</nav>
\t\t\t\t\t{% endif %}
\t\t\t\t{% endblock %}

\t\t\t\t{% block flash %}
\t\t\t\t\t{% for flash_message in app.session.flashbag.get('success') %}
\t\t\t\t\t\t<div class=\"container alert alert-success\" role=\"alert\">
\t\t\t\t\t\t\t{{ flash_message }}
\t\t\t\t\t\t</div>
\t\t\t\t\t{% endfor %}
\t\t\t\t\t{% for flash_message in app.session.flashbag.get('info') %}
\t\t\t\t\t\t<div class=\"container alert alert-info\" role=\"alert\">
\t\t\t\t\t\t\t{{ flash_message }}
\t\t\t\t\t\t</div>
\t\t\t\t\t{% endfor %}
\t\t\t\t\t{% for flash_message in app.session.flashbag.get('warning') %}
\t\t\t\t\t\t<div class=\"container alert alert-warning\" role=\"alert\">
\t\t\t\t\t\t\t{{ flash_message }}
\t\t\t\t\t\t</div>
\t\t\t\t\t{% endfor %}
\t\t\t\t\t{% for flash_message in app.session.flashbag.get('danger') %}
\t\t\t\t\t\t<div class=\"container alert alert-danger\" role=\"alert\">
\t\t\t\t\t\t\t{{ flash_message }}
\t\t\t\t\t\t</div>
\t\t\t\t\t{% endfor %}
\t\t\t\t{% endblock %}

\t\t\t\t<div class=\"container bck1 padded\"> {% block body %}{% endblock %}
\t\t\t\t\t</div>

\t\t\t\t\t{# {% block footer %}
\t\t\t\t\t\t<footer id=\"footer\" class=\"bck1 border-top\">
\t\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t\t<h4>Footer</h4>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</footer>
\t\t\t\t\t{% endblock %} #}

\t\t\t\t\t{% block javascripts %}
    <script src=\"https://bootswatch.com/_vendor/jquery/dist/jquery.min.js\"></script>
    <script src=\"https://bootswatch.com/_vendor/bootstrap/dist/js/bootstrap.bundle.min.js\"></script>
    <script src=\"https://bootswatch.com/_assets/js/custom.js\"></script>

\t\t\t\t\t{% endblock %}


\t\t\t\t</body>
\t\t\t</html>
\t\t</head>
\t</html>
", "base.html.twig", "C:\\wamp64\\www\\concursus\\templates\\base.html.twig");
    }
}
