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

/* homepage/index.html.twig */
class __TwigTemplate_45d7bdf0359be8b2e45ce8b4de91eaa0b29b3024be1be351e3e8fb9a8395033d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "homepage/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "homepage/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "homepage/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
\t<div class=\"text-center pt-5\">

\t\t<h1>Concursus</h1>

\t</div>

\t<div class=\"row pt-5\">


\t\t<div class=\"col-md-9\">


\t\t\t<div class=\"text-center pt-5\">

\t\t\t\t<iframe width=\"100%\" height=\"400\" src=\"https://www.youtube.com/embed/twuQFm9zD5Q\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>

\t\t\t</div>
\t\t</div>

\t\t<div class=\"col-md-3 text-center pt-5\">

\t\t\t<h4>Programme</h4>

\t\t\t";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, twig_sort_filter((isset($context["programmes"]) || array_key_exists("programmes", $context) ? $context["programmes"] : (function () { throw new RuntimeError('Variable "programmes" does not exist.', 28, $this->source); })()), function ($__a__, $__b__) use ($context, $macros) { $context["a"] = $__a__; $context["b"] = $__b__; return (-1 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new RuntimeError('Variable "a" does not exist.', 28, $this->source); })()), "id", [], "any", false, false, false, 28), twig_get_attribute($this->env, $this->source, (isset($context["b"]) || array_key_exists("b", $context) ? $context["b"] : (function () { throw new RuntimeError('Variable "b" does not exist.', 28, $this->source); })()), "id", [], "any", false, false, false, 28))); }), 0, 6));
        foreach ($context['_seq'] as $context["_key"] => $context["programme"]) {
            // line 29
            echo "\t\t\t\t<a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_homepage_competition", ["id" => twig_get_attribute($this->env, $this->source, $context["programme"], "id", [], "any", false, false, false, 29)]), "html", null, true);
            echo "\">
\t\t\t\t\t<strong>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["programme"], "nom", [], "any", false, false, false, 30), "html", null, true);
            echo "</strong>
\t\t\t\t</a>
\t\t\t\t<p>le :
\t\t\t\t\t";
            // line 33
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["programme"], "date", [], "any", false, false, false, 33), "d/m/Y"), "html", null, true);
            echo "
\t\t\t\t</p>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['programme'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "
\t\t</div>
\t</div>

\t<div class=\"text-center pt-5\">

\t\t<h2>Bienvenue</h2>

\t\t<p class=\"text-justify\">
\t\t\tLors des compétitions MakerFight Jr., les kids créent des robots qui s'affrontent sur plusieurs playgrounds. Le plaisir d'apprendre, les échanges entre élèves et le travail d'équipe sont au premier plan. Cet événement permet aux kids de s'enthousiasmer pour les mathématiques, l'informatique, les sciences naturelles et la technologie grâce à la résolution de problèmes pratiques liés aux challenges.
\t\t\tLa plupart des compétitions sont internationales et ouvertes aux groupes de la région et du monde entier. Les meilleurs équipes poursuivront leur aventure au niveau national, européen voire international… que la science soit avec vous !
\t\t</p>

\t</div>

\t<div class=\"text-center pt-5\">

\t\t<h2>L'équipe Organisatrice</h2>

\t</div>

\t<div>
\t\t<section>
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">

\t\t\t\t\t<div class=\"col-md-4  mt-5\">
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<div class=\"text-center\" itemprop=\"image\">
\t\t\t\t\t\t\t\t<img width=\"180\" height=\"180\" src=\"http://placehold.it/150x50?text=Photo\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\tLorem Ipsum is simply dummy text of the printing and typesetting industry.
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t\t\t\t<strong>Prénom Nom</strong>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-md-4  mt-5\">
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<div class=\"text-center\" itemprop=\"image\">
\t\t\t\t\t\t\t\t<img width=\"180\" height=\"180\" src=\"http://placehold.it/150x50?text=Photo\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\tLorem Ipsum is simply dummy text of the printing and typesetting industry.
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t\t\t\t<strong>Prénom Nom</strong>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-md-4  mt-5\">
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<div class=\"text-center\" itemprop=\"image\">
\t\t\t\t\t\t\t\t<img width=\"180\" height=\"180\" src=\"http://placehold.it/150x50?text=Photo\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\tLorem Ipsum is simply dummy text of the printing and typesetting industry.
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t\t\t\t<strong>Prénom Nom</strong>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-md-4  mt-5\">
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<div class=\"text-center\" itemprop=\"image\">
\t\t\t\t\t\t\t\t<img width=\"180\" height=\"180\" src=\"http://placehold.it/150x50?text=Photo\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\tLorem Ipsum is simply dummy text of the printing and typesetting industry.
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t\t\t\t<strong>Prénom Nom</strong>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-md-4  mt-5\">
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<div class=\"text-center\" itemprop=\"image\">
\t\t\t\t\t\t\t\t<img width=\"180\" height=\"180\" src=\"http://placehold.it/150x50?text=Photo\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\tLorem Ipsum is simply dummy text of the printing and typesetting industry.
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t\t\t\t<strong>Prénom Nom</strong>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-md-4  mt-5\">
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<div class=\"text-center\" itemprop=\"image\">
\t\t\t\t\t\t\t\t<img width=\"180\" height=\"180\" src=\"http://placehold.it/150x50?text=Photo\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\tLorem Ipsum is simply dummy text of the printing and typesetting industry.
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t\t\t\t<strong>Prénom Nom</strong>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t</div>

\t<div class=\"text-center pt-5\">

\t\t<h2>A propos de l'événement</h2>

\t\t<p class=\"text-justify\">
\t\t\tCette année, au vu des contraintes liées à la pandémie, l’événmenent aura lieu en grande partie à distance. Mais nous avons souhaité conserver une partie non virtuelle c’est pourquoi, en plus de vous demander d’allumer vos caméras, nous créerons des playgrounds avec des vrais robots équipés de caméras pour garder l’esprit MakerFight.
\t\t</p>

\t</div>

\t<div class=\"text-center pt-5\">

\t\t<h2>Sponsors</h2>

\t\t<section>
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">

\t\t\t\t\t<div class=\"col-md-4  mt-5\">
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<div class=\"text-center\" itemprop=\"image\">
\t\t\t\t\t\t\t\t<img width=\"90\" height=\"90\" src=\"http://placehold.it/150x50?text=Sponsors\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t\t\t\t<strong>Nom du sponsors</strong>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-md-4  mt-5\">
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<div class=\"text-center\" itemprop=\"image\">
\t\t\t\t\t\t\t\t<img width=\"90\" height=\"90\" src=\"http://placehold.it/150x50?text=Sponsors\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t\t\t\t<strong>Nom du sponsors</strong>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-md-4  mt-5\">
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<div class=\"text-center\" itemprop=\"image\">
\t\t\t\t\t\t\t\t<img width=\"90\" height=\"90\" src=\"http://placehold.it/150x50?text=Sponsors\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t\t\t\t<strong>Nom du sponsors</strong>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t</div>

\t\t</div>


\t</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "homepage/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 36,  109 => 33,  103 => 30,  98 => 29,  94 => 28,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

\t<div class=\"text-center pt-5\">

\t\t<h1>Concursus</h1>

\t</div>

\t<div class=\"row pt-5\">


\t\t<div class=\"col-md-9\">


\t\t\t<div class=\"text-center pt-5\">

\t\t\t\t<iframe width=\"100%\" height=\"400\" src=\"https://www.youtube.com/embed/twuQFm9zD5Q\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>

\t\t\t</div>
\t\t</div>

\t\t<div class=\"col-md-3 text-center pt-5\">

\t\t\t<h4>Programme</h4>

\t\t\t{% for programme in programmes |sort((a, b) => a.id < b.id) |slice(0, 6) %}
\t\t\t\t<a href=\"{{path('app_homepage_competition', {'id': programme.id})}}\">
\t\t\t\t\t<strong>{{programme.nom}}</strong>
\t\t\t\t</a>
\t\t\t\t<p>le :
\t\t\t\t\t{{ programme.date | date('d/m/Y') }}
\t\t\t\t</p>
\t\t\t{% endfor %}

\t\t</div>
\t</div>

\t<div class=\"text-center pt-5\">

\t\t<h2>Bienvenue</h2>

\t\t<p class=\"text-justify\">
\t\t\tLors des compétitions MakerFight Jr., les kids créent des robots qui s'affrontent sur plusieurs playgrounds. Le plaisir d'apprendre, les échanges entre élèves et le travail d'équipe sont au premier plan. Cet événement permet aux kids de s'enthousiasmer pour les mathématiques, l'informatique, les sciences naturelles et la technologie grâce à la résolution de problèmes pratiques liés aux challenges.
\t\t\tLa plupart des compétitions sont internationales et ouvertes aux groupes de la région et du monde entier. Les meilleurs équipes poursuivront leur aventure au niveau national, européen voire international… que la science soit avec vous !
\t\t</p>

\t</div>

\t<div class=\"text-center pt-5\">

\t\t<h2>L'équipe Organisatrice</h2>

\t</div>

\t<div>
\t\t<section>
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">

\t\t\t\t\t<div class=\"col-md-4  mt-5\">
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<div class=\"text-center\" itemprop=\"image\">
\t\t\t\t\t\t\t\t<img width=\"180\" height=\"180\" src=\"http://placehold.it/150x50?text=Photo\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\tLorem Ipsum is simply dummy text of the printing and typesetting industry.
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t\t\t\t<strong>Prénom Nom</strong>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-md-4  mt-5\">
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<div class=\"text-center\" itemprop=\"image\">
\t\t\t\t\t\t\t\t<img width=\"180\" height=\"180\" src=\"http://placehold.it/150x50?text=Photo\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\tLorem Ipsum is simply dummy text of the printing and typesetting industry.
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t\t\t\t<strong>Prénom Nom</strong>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-md-4  mt-5\">
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<div class=\"text-center\" itemprop=\"image\">
\t\t\t\t\t\t\t\t<img width=\"180\" height=\"180\" src=\"http://placehold.it/150x50?text=Photo\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\tLorem Ipsum is simply dummy text of the printing and typesetting industry.
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t\t\t\t<strong>Prénom Nom</strong>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-md-4  mt-5\">
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<div class=\"text-center\" itemprop=\"image\">
\t\t\t\t\t\t\t\t<img width=\"180\" height=\"180\" src=\"http://placehold.it/150x50?text=Photo\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\tLorem Ipsum is simply dummy text of the printing and typesetting industry.
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t\t\t\t<strong>Prénom Nom</strong>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-md-4  mt-5\">
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<div class=\"text-center\" itemprop=\"image\">
\t\t\t\t\t\t\t\t<img width=\"180\" height=\"180\" src=\"http://placehold.it/150x50?text=Photo\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\tLorem Ipsum is simply dummy text of the printing and typesetting industry.
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t\t\t\t<strong>Prénom Nom</strong>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-md-4  mt-5\">
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<div class=\"text-center\" itemprop=\"image\">
\t\t\t\t\t\t\t\t<img width=\"180\" height=\"180\" src=\"http://placehold.it/150x50?text=Photo\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\tLorem Ipsum is simply dummy text of the printing and typesetting industry.
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t\t\t\t<strong>Prénom Nom</strong>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t</div>

\t<div class=\"text-center pt-5\">

\t\t<h2>A propos de l'événement</h2>

\t\t<p class=\"text-justify\">
\t\t\tCette année, au vu des contraintes liées à la pandémie, l’événmenent aura lieu en grande partie à distance. Mais nous avons souhaité conserver une partie non virtuelle c’est pourquoi, en plus de vous demander d’allumer vos caméras, nous créerons des playgrounds avec des vrais robots équipés de caméras pour garder l’esprit MakerFight.
\t\t</p>

\t</div>

\t<div class=\"text-center pt-5\">

\t\t<h2>Sponsors</h2>

\t\t<section>
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">

\t\t\t\t\t<div class=\"col-md-4  mt-5\">
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<div class=\"text-center\" itemprop=\"image\">
\t\t\t\t\t\t\t\t<img width=\"90\" height=\"90\" src=\"http://placehold.it/150x50?text=Sponsors\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t\t\t\t<strong>Nom du sponsors</strong>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-md-4  mt-5\">
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<div class=\"text-center\" itemprop=\"image\">
\t\t\t\t\t\t\t\t<img width=\"90\" height=\"90\" src=\"http://placehold.it/150x50?text=Sponsors\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t\t\t\t<strong>Nom du sponsors</strong>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-md-4  mt-5\">
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<div class=\"text-center\" itemprop=\"image\">
\t\t\t\t\t\t\t\t<img width=\"90\" height=\"90\" src=\"http://placehold.it/150x50?text=Sponsors\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t\t\t\t<strong>Nom du sponsors</strong>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t</div>

\t\t</div>


\t</div>
{% endblock %}
", "homepage/index.html.twig", "C:\\wamp64\\www\\concursus\\templates\\homepage\\index.html.twig");
    }
}
