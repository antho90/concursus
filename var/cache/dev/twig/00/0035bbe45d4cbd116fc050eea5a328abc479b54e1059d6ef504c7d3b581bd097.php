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

/* admin/jugesList.html.twig */
class __TwigTemplate_ca07321d75c9e835671ea1a09bbf9d369289371d21c4b44ce9766625a0949ccb extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/jugesList.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/jugesList.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/jugesList.html.twig", 1);
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

        echo "Liste des Juges
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
            <li>
\t\t\t\t<a href=\"";
        // line 24
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mentors");
        echo "\">
\t\t\t\t\t<i class=\"fa fa-tachometer\" aria-hidden=\"true\"></i>
\t\t\t\t\tMentors
\t\t\t\t</a>
\t\t\t</li>
            <li>
\t\t\t\t<a href=\"";
        // line 30
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("juges");
        echo "\">
\t\t\t\t\t<i class=\"fa fa-tachometer\" aria-hidden=\"true\"></i>
\t\t\t\t\tJuges
\t\t\t\t</a>
\t\t\t</li>
\t\t</ul>
\t</div>


\t<h1 class=\"text-center pt-5\">Liste des Juges</h1>

\t<div class=\"text-center pt-5\">
\t\t<a href=\"";
        // line 42
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("new_utilisateur");
        echo "\" class=\" btn btn-success\">Ajouter</a>
\t</div>

\t<table class=\"table\">
\t\t<thead>

\t\t\t<th>Id</th>
\t\t\t<th>Email</th>
\t\t\t<th>Prénom</th>
\t\t\t<th>Nom</th>
\t\t\t<th>Rôles</th>
\t\t\t<th>Actions</th>

\t\t</thead>
\t\t<tbody>

\t\t\t";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 58, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 59
            echo "\t\t\t\t<tr>
\t\t\t\t\t";
            // line 60
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 60));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                // line 61
                echo "\t\t\t\t\t\t";
                if ((0 === twig_compare($context["role"], "ROLE_JUGE"))) {
                    // line 62
                    echo "\t\t\t\t\t\t\t<td>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 62), "html", null, true);
                    echo "</td>
\t\t\t\t\t\t\t<td>";
                    // line 63
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 63), "html", null, true);
                    echo "</td>
\t\t\t\t\t\t\t<td>";
                    // line 64
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "prenom", [], "any", false, false, false, 64), "html", null, true);
                    echo "</td>
\t\t\t\t\t\t\t<td>";
                    // line 65
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "nom", [], "any", false, false, false, 65), "html", null, true);
                    echo "</td>
\t\t\t\t\t\t\t<td>";
                    // line 66
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "structure", [], "any", false, false, false, 66), "html", null, true);
                    echo "</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t";
                    // line 68
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 68));
                    foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                        // line 69
                        echo "\t\t\t\t\t\t\t\t\t";
                        if ((0 === twig_compare($context["role"], "ROLE_MENTOR"))) {
                            // line 70
                            echo "\t\t\t\t\t\t\t\t\t\tMentor
\t\t\t\t\t\t\t\t\t";
                        } elseif ((0 === twig_compare(                        // line 71
$context["role"], "ROLE_ADMIN"))) {
                            // line 72
                            echo "\t\t\t\t\t\t\t\t\t\tAdmin
\t\t\t\t\t\t\t\t\t";
                        } elseif ((0 === twig_compare(                        // line 73
$context["role"], "ROLE_JUGE"))) {
                            // line 74
                            echo "\t\t\t\t\t\t\t\t\t\tJuge
\t\t\t\t\t\t\t\t\t";
                        }
                        // line 76
                        echo "\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 77
                    echo "\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<a href=\"";
                    // line 80
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modifier_utilisateur", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 80)]), "html", null, true);
                    echo "\" class=\" btn btn-warning\">Modifier</a>

\t\t\t\t\t\t\t\t<a href=\"";
                    // line 82
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_utilisateur", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 82)]), "html", null, true);
                    echo "\" class=\" btn btn-danger ml-2\" onclick=\"return confirm('Voulez-vous vraiment suprimmer cette utilisateur ?')\">Suprimmer</a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t";
                }
                // line 86
                echo "\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 87
            echo "\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 88
            echo "\t\t\t\t<tr>
\t\t\t\t\t<td colspan=\"5\">Il n'y a pas d'utilisateurs inscrit</td>
\t\t\t\t</tr>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        echo "
\t\t</tbody>
\t</tale>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/jugesList.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  258 => 92,  249 => 88,  244 => 87,  238 => 86,  231 => 82,  226 => 80,  221 => 77,  215 => 76,  211 => 74,  209 => 73,  206 => 72,  204 => 71,  201 => 70,  198 => 69,  194 => 68,  189 => 66,  185 => 65,  181 => 64,  177 => 63,  172 => 62,  169 => 61,  165 => 60,  162 => 59,  157 => 58,  138 => 42,  123 => 30,  114 => 24,  105 => 18,  96 => 12,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Liste des Juges
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
            <li>
\t\t\t\t<a href=\"{{path('mentors')}}\">
\t\t\t\t\t<i class=\"fa fa-tachometer\" aria-hidden=\"true\"></i>
\t\t\t\t\tMentors
\t\t\t\t</a>
\t\t\t</li>
            <li>
\t\t\t\t<a href=\"{{path('juges')}}\">
\t\t\t\t\t<i class=\"fa fa-tachometer\" aria-hidden=\"true\"></i>
\t\t\t\t\tJuges
\t\t\t\t</a>
\t\t\t</li>
\t\t</ul>
\t</div>


\t<h1 class=\"text-center pt-5\">Liste des Juges</h1>

\t<div class=\"text-center pt-5\">
\t\t<a href=\"{{ path('new_utilisateur')}}\" class=\" btn btn-success\">Ajouter</a>
\t</div>

\t<table class=\"table\">
\t\t<thead>

\t\t\t<th>Id</th>
\t\t\t<th>Email</th>
\t\t\t<th>Prénom</th>
\t\t\t<th>Nom</th>
\t\t\t<th>Rôles</th>
\t\t\t<th>Actions</th>

\t\t</thead>
\t\t<tbody>

\t\t\t{% for user in users %}
\t\t\t\t<tr>
\t\t\t\t\t{% for role in user.roles %}
\t\t\t\t\t\t{%  if role == \"ROLE_JUGE\" %}
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
", "admin/jugesList.html.twig", "C:\\wamp64\\www\\concursus\\templates\\admin\\jugesList.html.twig");
    }
}
