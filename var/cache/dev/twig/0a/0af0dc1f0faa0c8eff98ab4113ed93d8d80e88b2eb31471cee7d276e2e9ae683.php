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

/* admin/mentorsList.html.twig */
class __TwigTemplate_bd1262faa0eb1dc23f5e7f405638ea49234bd3fe1b09039bd330d91fce575c0e extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/mentorsList.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/mentorsList.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/mentorsList.html.twig", 1);
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

        echo "Liste des Mentors
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
\t\t\t\t\tTous les Utilisateurs
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


\t<h1 class=\"text-center pt-5\">Liste des Mentors</h1>

\t<div class=\"text-center pt-5\">
\t\t<a href=\"";
        // line 54
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("new_utilisateur");
        echo "\" class=\" btn btn-success\">Ajouter</a>
\t</div>

\t<table class=\"table table-hover\">
\t\t<thead class=\"thead-light\">

\t\t\t<th>Id</th>
\t\t\t<th>Email</th>
\t\t\t<th>Prénom</th>
\t\t\t<th>Nom</th>
\t\t\t<th>Structure</th>
\t\t\t<th>Rôles</th>
\t\t\t<th>Actions</th>

\t\t</thead>
\t\t<tbody>

\t\t\t";
        // line 71
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_sort_filter((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 71, $this->source); })()), function ($__a__, $__b__) use ($context, $macros) { $context["a"] = $__a__; $context["b"] = $__b__; return (-1 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new RuntimeError('Variable "a" does not exist.', 71, $this->source); })()), "id", [], "any", false, false, false, 71), twig_get_attribute($this->env, $this->source, (isset($context["b"]) || array_key_exists("b", $context) ? $context["b"] : (function () { throw new RuntimeError('Variable "b" does not exist.', 71, $this->source); })()), "id", [], "any", false, false, false, 71))); }));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 72
            echo "\t\t\t\t<tr>
\t\t\t\t\t";
            // line 73
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 73));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                // line 74
                echo "\t\t\t\t\t\t";
                if ((0 === twig_compare($context["role"], "ROLE_MENTOR"))) {
                    // line 75
                    echo "\t\t\t\t\t\t\t<td>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 75), "html", null, true);
                    echo "</td>
\t\t\t\t\t\t\t<td>";
                    // line 76
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 76), "html", null, true);
                    echo "</td>
\t\t\t\t\t\t\t<td>";
                    // line 77
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "prenom", [], "any", false, false, false, 77), "html", null, true);
                    echo "</td>
\t\t\t\t\t\t\t<td>";
                    // line 78
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "nom", [], "any", false, false, false, 78), "html", null, true);
                    echo "</td>
\t\t\t\t\t\t\t<td>";
                    // line 79
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "structure", [], "any", false, false, false, 79), "html", null, true);
                    echo "</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t";
                    // line 81
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 81));
                    foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                        // line 82
                        echo "\t\t\t\t\t\t\t\t\t";
                        if ((0 === twig_compare($context["role"], "ROLE_MENTOR"))) {
                            // line 83
                            echo "\t\t\t\t\t\t\t\t\t\tMentor
\t\t\t\t\t\t\t\t\t";
                        } elseif ((0 === twig_compare(                        // line 84
$context["role"], "ROLE_ADMIN"))) {
                            // line 85
                            echo "\t\t\t\t\t\t\t\t\t\tAdmin
\t\t\t\t\t\t\t\t\t";
                        } elseif ((0 === twig_compare(                        // line 86
$context["role"], "ROLE_JUGE"))) {
                            // line 87
                            echo "\t\t\t\t\t\t\t\t\t\tJuge
\t\t\t\t\t\t\t\t\t";
                        }
                        // line 89
                        echo "\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 90
                    echo "\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<a href=\"";
                    // line 93
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modifier_utilisateur", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 93)]), "html", null, true);
                    echo "\" class=\" btn btn-warning\">Modifier</a>

\t\t\t\t\t\t\t\t<a href=\"";
                    // line 95
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_utilisateur", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 95)]), "html", null, true);
                    echo "\" class=\" btn btn-danger ml-2\" onclick=\"return confirm('Voulez-vous vraiment suprimmer cette utilisateur ?')\">Suprimmer</a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t";
                }
                // line 99
                echo "\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 100
            echo "\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 101
            echo "\t\t\t\t<tr>
\t\t\t\t\t<td colspan=\"5\">Il n'y a pas d'utilisateurs inscrit</td>
\t\t\t\t</tr>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 105
        echo "
\t\t</tbody>
\t</tale>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/mentorsList.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  277 => 105,  268 => 101,  263 => 100,  257 => 99,  250 => 95,  245 => 93,  240 => 90,  234 => 89,  230 => 87,  228 => 86,  225 => 85,  223 => 84,  220 => 83,  217 => 82,  213 => 81,  208 => 79,  204 => 78,  200 => 77,  196 => 76,  191 => 75,  188 => 74,  184 => 73,  181 => 72,  176 => 71,  156 => 54,  141 => 42,  132 => 36,  123 => 30,  114 => 24,  105 => 18,  96 => 12,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Liste des Mentors
{% endblock %}

{% block body %}

\t<div id=\"nav_gauche\" class=\"sidebar-container slideInLeft atss-left at-custom-sidebar addthis-animated\">
\t\t<ul class=\"sidebar-navigation\">
\t\t\t<li class=\"header\">Navigation</li>
\t\t\t<li>
\t\t\t\t<a href=\"{{path('utilisateurs')}}\">
\t\t\t\t\t<i class=\"fa fa-home\" aria-hidden=\"true\"></i>
\t\t\t\t\tTous les Utilisateurs
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


\t<h1 class=\"text-center pt-5\">Liste des Mentors</h1>

\t<div class=\"text-center pt-5\">
\t\t<a href=\"{{ path('new_utilisateur')}}\" class=\" btn btn-success\">Ajouter</a>
\t</div>

\t<table class=\"table table-hover\">
\t\t<thead class=\"thead-light\">

\t\t\t<th>Id</th>
\t\t\t<th>Email</th>
\t\t\t<th>Prénom</th>
\t\t\t<th>Nom</th>
\t\t\t<th>Structure</th>
\t\t\t<th>Rôles</th>
\t\t\t<th>Actions</th>

\t\t</thead>
\t\t<tbody>

\t\t\t{% for user in users |sort((a, b) => a.id < b.id) %}
\t\t\t\t<tr>
\t\t\t\t\t{% for role in user.roles %}
\t\t\t\t\t\t{%  if role == \"ROLE_MENTOR\" %}
\t\t\t\t\t\t\t<td>{{ user.id }}</td>
\t\t\t\t\t\t\t<td>{{ user.email }}</td>
\t\t\t\t\t\t\t<td>{{ user.prenom }}</td>
\t\t\t\t\t\t\t<td>{{ user.nom }}</td>
\t\t\t\t\t\t\t<td>{{ user.structure }}</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t{% for role in user.roles %}
\t\t\t\t\t\t\t\t\t{%  if role == \"ROLE_MENTOR\" %}
\t\t\t\t\t\t\t\t\t\tMentor
\t\t\t\t\t\t\t\t\t{% elseif role == \"ROLE_ADMIN\" %}
\t\t\t\t\t\t\t\t\t\tAdmin
\t\t\t\t\t\t\t\t\t{% elseif role == \"ROLE_JUGE\" %}
\t\t\t\t\t\t\t\t\t\tJuge
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<a href=\"{{ path('modifier_utilisateur', {'id': user.id})}}\" class=\" btn btn-warning\">Modifier</a>

\t\t\t\t\t\t\t\t<a href=\"{{ path('delete_utilisateur', {'id': user.id})}}\" class=\" btn btn-danger ml-2\" onclick=\"return confirm('Voulez-vous vraiment suprimmer cette utilisateur ?')\">Suprimmer</a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t{% endif %}
\t\t\t\t{% endfor %}
\t\t\t{% else %}
\t\t\t\t<tr>
\t\t\t\t\t<td colspan=\"5\">Il n'y a pas d'utilisateurs inscrit</td>
\t\t\t\t</tr>
\t\t\t{% endfor %}

\t\t</tbody>
\t</tale>

{% endblock %}
", "admin/mentorsList.html.twig", "C:\\wamp64\\www\\concursus\\templates\\admin\\mentorsList.html.twig");
    }
}
