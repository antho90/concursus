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

/* homepage/programme.html.twig */
class __TwigTemplate_76c1dca76f2c372213f98ee88eabe8b4685a8b7ec02e56b15f1bdcab39ff9087 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "homepage/programme.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "homepage/programme.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "homepage/programme.html.twig", 1);
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
\t<div id=\"nav_gauche\" class=\"sidebar-container slideInLeft atss-left at-custom-sidebar addthis-animated\">
\t\t<ul class=\"sidebar-navigation\">
\t\t\t<li class=\"header\">Navigation</li>
\t\t\t<li>
\t\t\t\t<a href=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_homepage_programme");
        echo "\">
\t\t\t\t\t<i class=\"fa fa-home\" aria-hidden=\"true\"></i>
\t\t\t\t\tProgramme
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_homepage_livevideos");
        echo "\">
\t\t\t\t\t<i class=\"fa fa-tachometer\" aria-hidden=\"true\"></i>
\t\t\t\t\tLive et Vidéos
\t\t\t\t</a>
\t\t\t</li>
\t\t</ul>
\t</div>

\t<div class=\"example-wrapper\">
\t\t<h1 class=\" text-center pt-5\">Programmes</h1>
\t\t";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_sort_filter((isset($context["programmes"]) || array_key_exists("programmes", $context) ? $context["programmes"] : (function () { throw new RuntimeError('Variable "programmes" does not exist.', 25, $this->source); })()), function ($__a__, $__b__) use ($context, $macros) { $context["a"] = $__a__; $context["b"] = $__b__; return (-1 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new RuntimeError('Variable "a" does not exist.', 25, $this->source); })()), "id", [], "any", false, false, false, 25), twig_get_attribute($this->env, $this->source, (isset($context["b"]) || array_key_exists("b", $context) ? $context["b"] : (function () { throw new RuntimeError('Variable "b" does not exist.', 25, $this->source); })()), "id", [], "any", false, false, false, 25))); }));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["programme"]) {
            // line 26
            echo "\t\t\t<div class=\"card1 text-center\">
\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["programme"], "nom", [], "any", false, false, false, 28), "html", null, true);
            echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t<h5 class=\"card-title\">";
            // line 31
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["programme"], "date", [], "any", false, false, false, 31), "d/m/Y"), "html", null, true);
            echo "
\t\t\t\t\t</h5>
\t\t\t\t\t<p class=\"card-text\">A partir de
\t\t\t\t\t\t";
            // line 34
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["programme"], "date", [], "any", false, false, false, 34), "H:i"), "html", null, true);
            echo "
\t\t\t\t\t</p>
\t\t\t\t\t<pre>
\t\t\t\t\t\t
\t\t\t\t\t</pre>

\t\t\t\t\t<a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_homepage_competition", ["id" => twig_get_attribute($this->env, $this->source, $context["programme"], "id", [], "any", false, false, false, 40)]), "html", null, true);
            echo "\" class=\"btn btn-primary\">Voir plus</a>
\t\t\t\t</div>

\t\t\t</div><br><br>
\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 45
            echo "\t\t\t<h2>Aucune compétition pour le moment</h2>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['programme'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "\t</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "homepage/programme.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 47,  137 => 45,  127 => 40,  118 => 34,  112 => 31,  106 => 28,  102 => 26,  97 => 25,  84 => 15,  75 => 9,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

\t<div id=\"nav_gauche\" class=\"sidebar-container slideInLeft atss-left at-custom-sidebar addthis-animated\">
\t\t<ul class=\"sidebar-navigation\">
\t\t\t<li class=\"header\">Navigation</li>
\t\t\t<li>
\t\t\t\t<a href=\"{{path('app_homepage_programme')}}\">
\t\t\t\t\t<i class=\"fa fa-home\" aria-hidden=\"true\"></i>
\t\t\t\t\tProgramme
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"{{path('app_homepage_livevideos')}}\">
\t\t\t\t\t<i class=\"fa fa-tachometer\" aria-hidden=\"true\"></i>
\t\t\t\t\tLive et Vidéos
\t\t\t\t</a>
\t\t\t</li>
\t\t</ul>
\t</div>

\t<div class=\"example-wrapper\">
\t\t<h1 class=\" text-center pt-5\">Programmes</h1>
\t\t{% for programme in programmes |sort((a, b) => a.id < b.id) %}
\t\t\t<div class=\"card1 text-center\">
\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t{{programme.nom}}
\t\t\t\t</div>
\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t<h5 class=\"card-title\">{{ programme.date | date('d/m/Y') }}
\t\t\t\t\t</h5>
\t\t\t\t\t<p class=\"card-text\">A partir de
\t\t\t\t\t\t{{ programme.date | date('H:i') }}
\t\t\t\t\t</p>
\t\t\t\t\t<pre>
\t\t\t\t\t\t
\t\t\t\t\t</pre>

\t\t\t\t\t<a href=\"{{path('app_homepage_competition', {'id': programme.id})}}\" class=\"btn btn-primary\">Voir plus</a>
\t\t\t\t</div>

\t\t\t</div><br><br>
\t\t{% else %}
\t\t\t<h2>Aucune compétition pour le moment</h2>
\t\t{% endfor %}
\t</div>
{% endblock %}
", "homepage/programme.html.twig", "C:\\wamp64\\www\\concursus\\templates\\homepage\\programme.html.twig");
    }
}
