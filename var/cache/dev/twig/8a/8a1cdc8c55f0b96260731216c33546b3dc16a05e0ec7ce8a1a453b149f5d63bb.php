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

/* admin/equipesList.html.twig */
class __TwigTemplate_74b4aac61d16ff8e407eaff92b1dbfb92ad0df58df38c9484eb4b2a71f69456e extends Template
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
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/equipesList.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/equipesList.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/equipesList.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
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

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "
\t<div id=\"nav_gauche\" class=\"sidebar-container slideInLeft atss-left at-custom-sidebar addthis-animated\">
\t\t<ul class=\"sidebar-navigation\">
\t\t\t<li class=\"header\">Navigation</li>
\t\t\t<li>
\t\t\t\t<a href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("utilisateurs");
        echo "\">
\t\t\t\t\t<i class=\"fa fa-home\" aria-hidden=\"true\"></i>
\t\t\t\t\tTous les utilisateurs
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admins");
        echo "\">
\t\t\t\t\t<i class=\"fa fa-tachometer\" aria-hidden=\"true\"></i>
\t\t\t\t\tAdmins
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"";
        // line 24
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mentors");
        echo "\">
\t\t\t\t\t<i class=\"fa fa-tachometer\" aria-hidden=\"true\"></i>
\t\t\t\t\tMentors
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"";
        // line 30
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("juges");
        echo "\">
\t\t\t\t\t<i class=\"fa fa-tachometer\" aria-hidden=\"true\"></i>
\t\t\t\t\tJuges
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"";
        // line 36
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("equipes");
        echo "\">
\t\t\t\t\t<i class=\"fa fa-tachometer\" aria-hidden=\"true\"></i>
\t\t\t\t\tEquipes
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"";
        // line 42
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("competitionsList");
        echo "\">
\t\t\t\t\t<i class=\"fa fa-tachometer\" aria-hidden=\"true\"></i>
\t\t\t\t\tCompétitions
\t\t\t\t</a>
\t\t\t</li>
\t\t</ul>
\t</div>

\t<h1 class=\"text-center pt-5\">Liste des équipes</h1>

\t<div class=\"text-center pt-5\">
\t\t<a href=\"#\" class=\" btn btn-success\">Ajouter</a>
\t</div>

\t<table class=\"table table-hover\">
\t\t<thead class=\"thead-light\">

\t\t\t<th >Id</th>
\t\t\t<th>Nom</th>
\t\t\t<th>Structure</th>
\t\t\t<th>Ville</th>
\t\t\t<th>Compétitions inscrit</th>
\t\t\t<th>Actions</th>

\t\t</thead>
\t\t<tbody>

\t\t\t";
        // line 69
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_sort_filter($context["equipes"], function ($__a__, $__b__) use ($context, $macros) { $context["a"] = $__a__; $context["b"] = $__b__; return (-1 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new RuntimeError('Variable "a" does not exist.', 69, $this->source); })()), "id", [], "any", false, false, false, 69), twig_get_attribute($this->env, $this->source, (isset($context["b"]) || array_key_exists("b", $context) ? $context["b"] : (function () { throw new RuntimeError('Variable "b" does not exist.', 69, $this->source); })()), "id", [], "any", false, false, false, 69))); }));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["equipes"]) {
            // line 70
            echo "\t\t\t\t<tr>
\t\t\t\t\t<td>";
            // line 71
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["equipes"], "id", [], "any", false, false, false, 71), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 72
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["equipes"], "nom", [], "any", false, false, false, 72), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 73
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["equipes"], "structure", [], "any", false, false, false, 73), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 74
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["equipes"], "ville", [], "any", false, false, false, 74), "html", null, true);
            echo "</td>


\t\t\t\t\t";
            // line 77
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_sort_filter(twig_get_attribute($this->env, $this->source, $context["equipes"], "getCompetitons", [], "any", false, false, false, 77), function ($__a__, $__b__) use ($context, $macros) { $context["a"] = $__a__; $context["b"] = $__b__; return (-1 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new RuntimeError('Variable "a" does not exist.', 77, $this->source); })()), "id", [], "any", false, false, false, 77), twig_get_attribute($this->env, $this->source, (isset($context["b"]) || array_key_exists("b", $context) ? $context["b"] : (function () { throw new RuntimeError('Variable "b" does not exist.', 77, $this->source); })()), "id", [], "any", false, false, false, 77))); }));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["competitions"]) {
                // line 78
                echo "\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<p>";
                // line 79
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["competitions"], "nom", [], "any", false, false, false, 79), "html", null, true);
                echo "</p>
\t\t\t\t\t\t</td>
\t\t\t\t\t";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 82
                echo "
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<p></p>
\t\t\t\t\t\t</td>

\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['competitions'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 88
            echo "
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"";
            // line 90
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modifier_equipe", ["id" => twig_get_attribute($this->env, $this->source, $context["equipes"], "id", [], "any", false, false, false, 90)]), "html", null, true);
            echo "\" class=\" btn btn-warning\">Modifier</a>

\t\t\t\t\t\t<a href=\"";
            // line 92
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_equipe", ["id" => twig_get_attribute($this->env, $this->source, $context["equipes"], "id", [], "any", false, false, false, 92)]), "html", null, true);
            echo "\" class=\" btn btn-danger ml-2\" onclick=\"return confirm('Voulez-vous vraiment suprimmer cette utilisateur ?')\">Suprimmer</a>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 96
            echo "\t\t\t\t<tr>
\t\t\t\t\t<td colspan=\"5\">Il n'y a pas d'équipe inscrite</td>
\t\t\t\t</tr>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['equipes'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 100
        echo "
\t\t</tbody>
\t</tale>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/equipesList.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  251 => 100,  242 => 96,  233 => 92,  228 => 90,  224 => 88,  213 => 82,  205 => 79,  202 => 78,  197 => 77,  191 => 74,  187 => 73,  183 => 72,  179 => 71,  176 => 70,  171 => 69,  141 => 42,  132 => 36,  123 => 30,  114 => 24,  105 => 18,  96 => 12,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Liste des équipes
{% endblock %}

{% block body %}

\t<div id=\"nav_gauche\" class=\"sidebar-container slideInLeft atss-left at-custom-sidebar addthis-animated\">
\t\t<ul class=\"sidebar-navigation\">
\t\t\t<li class=\"header\">Navigation</li>
\t\t\t<li>
\t\t\t\t<a href=\"{{path('utilisateurs')}}\">
\t\t\t\t\t<i class=\"fa fa-home\" aria-hidden=\"true\"></i>
\t\t\t\t\tTous les utilisateurs
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"{{path('admins')}}\">
\t\t\t\t\t<i class=\"fa fa-tachometer\" aria-hidden=\"true\"></i>
\t\t\t\t\tAdmins
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"{{path('mentors')}}\">
\t\t\t\t\t<i class=\"fa fa-tachometer\" aria-hidden=\"true\"></i>
\t\t\t\t\tMentors
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"{{path('juges')}}\">
\t\t\t\t\t<i class=\"fa fa-tachometer\" aria-hidden=\"true\"></i>
\t\t\t\t\tJuges
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"{{path('equipes')}}\">
\t\t\t\t\t<i class=\"fa fa-tachometer\" aria-hidden=\"true\"></i>
\t\t\t\t\tEquipes
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"{{path('competitionsList')}}\">
\t\t\t\t\t<i class=\"fa fa-tachometer\" aria-hidden=\"true\"></i>
\t\t\t\t\tCompétitions
\t\t\t\t</a>
\t\t\t</li>
\t\t</ul>
\t</div>

\t<h1 class=\"text-center pt-5\">Liste des équipes</h1>

\t<div class=\"text-center pt-5\">
\t\t<a href=\"#\" class=\" btn btn-success\">Ajouter</a>
\t</div>

\t<table class=\"table table-hover\">
\t\t<thead class=\"thead-light\">

\t\t\t<th >Id</th>
\t\t\t<th>Nom</th>
\t\t\t<th>Structure</th>
\t\t\t<th>Ville</th>
\t\t\t<th>Compétitions inscrit</th>
\t\t\t<th>Actions</th>

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

\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<p></p>
\t\t\t\t\t\t</td>

\t\t\t\t\t{% endfor %}

\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"{{ path('modifier_equipe', {'id': equipes.id})}}\" class=\" btn btn-warning\">Modifier</a>

\t\t\t\t\t\t<a href=\"{{ path('delete_equipe', {'id': equipes.id})}}\" class=\" btn btn-danger ml-2\" onclick=\"return confirm('Voulez-vous vraiment suprimmer cette utilisateur ?')\">Suprimmer</a>
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
", "admin/equipesList.html.twig", "C:\\wamp64\\www\\concursus\\templates\\admin\\equipesList.html.twig");
    }
}
