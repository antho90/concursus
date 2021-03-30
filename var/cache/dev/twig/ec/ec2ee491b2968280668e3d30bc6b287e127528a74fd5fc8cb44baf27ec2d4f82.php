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

/* admin/test.html.twig */
class __TwigTemplate_d2019b7fb4397e440cbde7a1d5f1dfee8082193f9927aa61bd1750880548187d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 20
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/test.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/test.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/test.html.twig", 20);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 22
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Liste des équipes
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 25
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 26
        echo "
\t<h1 class=\"text-center pt-5\">Liste des équipes</h1>

\t<div class=\"text-center pt-5\">
\t\t<a href=\"#\" class=\" btn btn-success\">Ajouter</a>
\t</div>


\t<table class=\"table\">
\t\t<thead>

\t\t\t<th>Id</th>
\t\t\t<th>Nom</th>
\t\t\t<th>Structure</th>
\t\t\t<th>Ville</th>
\t\t\t<th>Compétitions inscrit</th>

\t\t</thead>
\t\t<tbody>

\t\t\t";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_sort_filter($context["equipes"], function ($__a__, $__b__) use ($context, $macros) { $context["a"] = $__a__; $context["b"] = $__b__; return (-1 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new RuntimeError('Variable "a" does not exist.', 46, $this->source); })()), "id", [], "any", false, false, false, 46), twig_get_attribute($this->env, $this->source, (isset($context["b"]) || array_key_exists("b", $context) ? $context["b"] : (function () { throw new RuntimeError('Variable "b" does not exist.', 46, $this->source); })()), "id", [], "any", false, false, false, 46))); }));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["equipes"]) {
            // line 47
            echo "\t\t\t\t<tr>
\t\t\t\t\t<td>";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["equipes"], "id", [], "any", false, false, false, 48), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["equipes"], "nom", [], "any", false, false, false, 49), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["equipes"], "structure", [], "any", false, false, false, 50), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["equipes"], "ville", [], "any", false, false, false, 51), "html", null, true);
            echo "</td>


\t\t\t\t\t";
            // line 54
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_sort_filter(twig_get_attribute($this->env, $this->source, $context["equipes"], "getCompetitons", [], "any", false, false, false, 54), function ($__a__, $__b__) use ($context, $macros) { $context["a"] = $__a__; $context["b"] = $__b__; return (-1 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new RuntimeError('Variable "a" does not exist.', 54, $this->source); })()), "id", [], "any", false, false, false, 54), twig_get_attribute($this->env, $this->source, (isset($context["b"]) || array_key_exists("b", $context) ? $context["b"] : (function () { throw new RuntimeError('Variable "b" does not exist.', 54, $this->source); })()), "id", [], "any", false, false, false, 54))); }));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["competitions"]) {
                // line 55
                echo "\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<p>";
                // line 56
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["competitions"], "nom", [], "any", false, false, false, 56), "html", null, true);
                echo "</p>
\t\t\t\t\t\t</td>
\t\t\t\t\t";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 59
                echo "
\t\t\t\t\t\t<td><p></p></td>

\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['competitions'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            echo "
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"#\" class=\" btn btn-warning\">Modifier</a>

\t\t\t\t\t\t<a href=\"#\" class=\" btn btn-danger ml-2\" onclick=\"return confirm('Voulez-vous vraiment suprimmer cette utilisateur ?')\">Suprimmer</a>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 71
            echo "\t\t\t\t<tr>
\t\t\t\t\t<td colspan=\"5\">Il n'y a pas d'équipe inscrite</td>
\t\t\t\t</tr>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['equipes'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "
\t\t</tbody>
\t</tale>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/test.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 75,  174 => 71,  162 => 63,  153 => 59,  145 => 56,  142 => 55,  137 => 54,  131 => 51,  127 => 50,  123 => 49,  119 => 48,  116 => 47,  111 => 46,  89 => 26,  79 => 25,  59 => 22,  36 => 20,);
    }

    public function getSourceContext()
    {
        return new Source("{# {% for equipes in equipes |sort((a, b) => a.id < b.id) %}
\t<h1>{{ equipes.nom }}</h1>


\t{% for competitions in equipes.getCompetitons |sort((a, b) => a.id < b.id) %}
\t\t<p>{{ competitions.nom }}</p>
\t{% else %}

\t\t<p>Il n'y a pas de d'équipe</p>

\t{% endfor %}

{% else %}

\t<p>Il n'y a pas de compétitions</p>

{% endfor %} #}


{% extends 'base.html.twig' %}

{% block title %}Liste des équipes
{% endblock %}

{% block body %}

\t<h1 class=\"text-center pt-5\">Liste des équipes</h1>

\t<div class=\"text-center pt-5\">
\t\t<a href=\"#\" class=\" btn btn-success\">Ajouter</a>
\t</div>


\t<table class=\"table\">
\t\t<thead>

\t\t\t<th>Id</th>
\t\t\t<th>Nom</th>
\t\t\t<th>Structure</th>
\t\t\t<th>Ville</th>
\t\t\t<th>Compétitions inscrit</th>

\t\t</thead>
\t\t<tbody>

\t\t\t{% for equipes in equipes |sort((a, b) => a.id < b.id) %}
\t\t\t\t<tr>
\t\t\t\t\t<td>{{ equipes.id }}</td>
\t\t\t\t\t<td>{{ equipes.nom }}</td>
\t\t\t\t\t<td>{{ equipes.structure }}</td>
\t\t\t\t\t<td>{{ equipes.ville }}</td>


\t\t\t\t\t{% for competitions in equipes.getCompetitons |sort((a, b) => a.id < b.id) %}
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<p>{{ competitions.nom }}</p>
\t\t\t\t\t\t</td>
\t\t\t\t\t{% else %}

\t\t\t\t\t\t<td><p></p></td>

\t\t\t\t\t{% endfor %}

\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"#\" class=\" btn btn-warning\">Modifier</a>

\t\t\t\t\t\t<a href=\"#\" class=\" btn btn-danger ml-2\" onclick=\"return confirm('Voulez-vous vraiment suprimmer cette utilisateur ?')\">Suprimmer</a>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t{% else %}
\t\t\t\t<tr>
\t\t\t\t\t<td colspan=\"5\">Il n'y a pas d'équipe inscrite</td>
\t\t\t\t</tr>
\t\t\t{% endfor %}

\t\t</tbody>
\t</tale>

{% endblock %}
", "admin/test.html.twig", "C:\\wamp64\\www\\concursus\\templates\\admin\\test.html.twig");
    }
}
