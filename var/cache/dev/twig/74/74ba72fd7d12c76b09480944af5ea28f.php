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

/* /main/index.html.twig */
class __TwigTemplate_7bd4d48868ecca9693e647f21cfdfd59 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/main/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/main/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "/main/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello MainController!
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        $context["showMessage"] = false;
        // line 8
        echo "\t<style>
\t\t.example-wrapper {
\t\t\tmargin: 1em auto;
\t\t\tmax-width: 800px;
\t\t\twidth: 95%;
\t\t\tfont: 18px / 1.5 sans-serif;
\t\t}
\t\t.example-wrapper code {
\t\t\tbackground: #F5F5F5;
\t\t\tpadding: 2px 6px;
\t\t}
\t</style>

\t<div
\t\tclass=\"example-wrapper\">
\t\t";
        // line 24
        echo "
\t\t<h1>TASKS✅</h1>
\t\t";
        // line 26
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 26, $this->source); })()), "user", [], "any", false, false, false, 26)) {
            // line 27
            echo "
\t\t\tYou are logged in as
\t\t\t";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 29, $this->source); })()), "user", [], "any", false, false, false, 29), "username", [], "any", false, false, false, 29), "html", null, true);
            echo ",
\t\t\t<a href=\"";
            // line 30
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Logout</a>

\t\t";
        } else {
            // line 33
            echo "\t\t\t<a href=\"/login\">Login
\t\t\t</a>
\t\t\t-
\t\t\t<a href=\"/register\">
\t\t\t\tRegistration</a>

\t\t";
        }
        // line 40
        echo "
\t\t";
        // line 41
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 42
            echo "\t\t\t-
\t\t\t<a href=\"";
            // line 43
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_index");
            echo "\">
\t\t\t\tCrear/Modificar eventos</a>
\t\t\t-
\t\t\t<a href=\"";
            // line 46
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_ seeTaskToday");
            echo "\">
\t\t\t\tVer tareas de hoy</a>
\t\t\t-
\t\t\t<a href=\"/user\">Editar Usuarios</a>
\t\t";
        }
        // line 51
        echo "

\t\t<br><br>

\t\t

\t\t";
        // line 57
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 57, $this->source); })()), "user", [], "any", false, false, false, 57)) {
            // line 58
            echo "
\t\t\t";
            // line 59
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["taskAsignments"]) || array_key_exists("taskAsignments", $context) ? $context["taskAsignments"] : (function () { throw new RuntimeError('Variable "taskAsignments" does not exist.', 59, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["task"]) {
                // line 60
                echo "
\t\t\t\t<ul>
\t\t\t\t\t<li>
\t\t\t\t\t\tNombre de la tarea:";
                // line 63
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["task"], "Event", [], "any", false, false, false, 63), "name", [], "any", false, false, false, 63), "html", null, true);
                echo "<br>

\t\t\t\t\t\t";
                // line 65
                if ((((twig_get_attribute($this->env, $this->source, $context["task"], "isState", [], "method", false, false, false, 65) == 1) && (twig_get_attribute($this->env, $this->source, $context["task"], "getStateRequest", [], "method", false, false, false, 65) == 1)) && (twig_get_attribute($this->env, $this->source, $context["task"], "getStartTime", [], "method", false, false, false, 65) == null))) {
                    // line 66
                    echo "
\t\t\t\t\t\t\t<a href=\"";
                    // line 67
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_task_update_State", ["id" => twig_get_attribute($this->env, $this->source, $context["task"], "id", [], "any", false, false, false, 67)]), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t<button type=\"button\">Comenzar Tarea</button>
\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t";
                    // line 71
                    $context["showMessage"] = true;
                    // line 72
                    echo "\t\t\t\t\t\t";
                } else {
                    // line 73
                    echo "
\t\t\t\t\t\t\t<form action=\"";
                    // line 74
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_task_update_State", ["id" => twig_get_attribute($this->env, $this->source, $context["task"], "id", [], "any", false, false, false, 74)]), "html", null, true);
                    echo "\">

\t\t\t\t\t\t\t\t<a>
\t\t\t\t\t\t\t\t\t<button type=\"submit\">Terminar Tarea</button>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<input type=\"number\" placeholder=\"Tiempo de Descanso\" name=\"breakHours\"/>

\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t";
                    // line 82
                    $context["showMessage"] = false;
                    // line 83
                    echo "
\t\t\t\t\t\t";
                }
                // line 85
                echo "

\t\t\t\t\t</li>


\t\t\t\t</ul>


\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['task'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 94
            echo "
\t\t\t";
            // line 95
            if ((isset($context["showMessage"]) || array_key_exists("showMessage", $context) ? $context["showMessage"] : (function () { throw new RuntimeError('Variable "showMessage" does not exist.', 95, $this->source); })())) {
                // line 96
                echo "
\t\t\t\t";
                // line 97
                if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ALMACEN")) {
                    // line 98
                    echo "
\t\t\t\t<a href=\"";
                    // line 99
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_newAlmacen");
                    echo "\">
\t\t\t\tAlmacen</a>
\t\t\t\t
\t\t\t\t";
                }
                // line 103
                echo "
\t\t\t";
            }
            // line 105
            echo "\t\t\t\t\t\t\t\t\t<a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_seeAssignedTasks");
            echo "\"> 

\t\t\t\t\t\t\t\t\t<button type=\"button\" style=\"margin: 20px;\">VER TAREAS ACEPTADAS</button>


\t\t\t";
            // line 110
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["tasks"]) || array_key_exists("tasks", $context) ? $context["tasks"] : (function () { throw new RuntimeError('Variable "tasks" does not exist.', 110, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["task"]) {
                // line 111
                echo "
\t\t\t\t<ul>
\t\t\t\t\t<li>
\t\t\t\t\t\tNombre:";
                // line 114
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["task"], "event", [], "any", false, false, false, 114), "name", [], "any", false, false, false, 114), "html", null, true);
                echo "<br>

\t\t\t\t\t\t<a href=\"";
                // line 116
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_task_edit_State_request", ["id" => twig_get_attribute($this->env, $this->source, $context["task"], "id", [], "any", false, false, false, 116), "state_request" => 1]), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t<button type=\"button\">ACEPTAR</button>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"";
                // line 119
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_task_edit_State_request", ["id" => twig_get_attribute($this->env, $this->source, $context["task"], "id", [], "any", false, false, false, 119), "state_request" => 0]), "html", null, true);
                echo "\">
\t\t\t\t\t\t<a href=\"";
                // line 120
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_task_edit_State_request", ["id" => twig_get_attribute($this->env, $this->source, $context["task"], "id", [], "any", false, false, false, 120), "state_request" => 0]), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t<button type=\"button\">RECHAZAR</button>
\t\t\t\t\t\t</a>

\t\t\t\t\t\t


\t\t\t\t\t</li>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['task'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 129
            echo "\t\t";
        }
        // line 130
        echo "
</div>

\t\t


\t</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "/main/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  312 => 130,  309 => 129,  294 => 120,  290 => 119,  284 => 116,  279 => 114,  274 => 111,  270 => 110,  261 => 105,  257 => 103,  250 => 99,  247 => 98,  245 => 97,  242 => 96,  240 => 95,  237 => 94,  223 => 85,  219 => 83,  217 => 82,  206 => 74,  203 => 73,  200 => 72,  198 => 71,  191 => 67,  188 => 66,  186 => 65,  181 => 63,  176 => 60,  172 => 59,  169 => 58,  167 => 57,  159 => 51,  151 => 46,  145 => 43,  142 => 42,  140 => 41,  137 => 40,  128 => 33,  122 => 30,  118 => 29,  114 => 27,  112 => 26,  108 => 24,  91 => 8,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello MainController!
{% endblock %}

{% block body %}
{% set showMessage = false %}
\t<style>
\t\t.example-wrapper {
\t\t\tmargin: 1em auto;
\t\t\tmax-width: 800px;
\t\t\twidth: 95%;
\t\t\tfont: 18px / 1.5 sans-serif;
\t\t}
\t\t.example-wrapper code {
\t\t\tbackground: #F5F5F5;
\t\t\tpadding: 2px 6px;
\t\t}
\t</style>

\t<div
\t\tclass=\"example-wrapper\">
\t\t{# <h1>Hello {{ controller_name }}! ✅</h1> #}

\t\t<h1>TASKS✅</h1>
\t\t{% if app.user %}

\t\t\tYou are logged in as
\t\t\t{{ app.user.username  }},
\t\t\t<a href=\"{{ path('app_logout') }}\">Logout</a>

\t\t{% else %}
\t\t\t<a href=\"/login\">Login
\t\t\t</a>
\t\t\t-
\t\t\t<a href=\"/register\">
\t\t\t\tRegistration</a>

\t\t{% endif %}

\t\t{% if is_granted(\"ROLE_ADMIN\")%}
\t\t\t-
\t\t\t<a href=\"{{ path('app_event_index') }}\">
\t\t\t\tCrear/Modificar eventos</a>
\t\t\t-
\t\t\t<a href=\"{{path('app_ seeTaskToday') }}\">
\t\t\t\tVer tareas de hoy</a>
\t\t\t-
\t\t\t<a href=\"/user\">Editar Usuarios</a>
\t\t{% endif %}


\t\t<br><br>

\t\t

\t\t{% if app.user %}

\t\t\t{% for task in taskAsignments %}

\t\t\t\t<ul>
\t\t\t\t\t<li>
\t\t\t\t\t\tNombre de la tarea:{{task.Event.name}}<br>

\t\t\t\t\t\t{% if (task.isState()== 1 and task.getStateRequest()==1 and task.getStartTime()== NULL) %}

\t\t\t\t\t\t\t<a href=\"{{ path('app_task_update_State', {'id': task.id}) }}\">
\t\t\t\t\t\t\t\t<button type=\"button\">Comenzar Tarea</button>
\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t{% set showMessage = true %}
\t\t\t\t\t\t{% else %}

\t\t\t\t\t\t\t<form action=\"{{ path('app_task_update_State', {'id': task.id}) }}\">

\t\t\t\t\t\t\t\t<a>
\t\t\t\t\t\t\t\t\t<button type=\"submit\">Terminar Tarea</button>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<input type=\"number\" placeholder=\"Tiempo de Descanso\" name=\"breakHours\"/>

\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t{% set showMessage = false %}

\t\t\t\t\t\t{% endif %}


\t\t\t\t\t</li>


\t\t\t\t</ul>


\t\t\t{% endfor %}

\t\t\t{% if showMessage %}

\t\t\t\t{% if is_granted(\"ROLE_ALMACEN\")%}

\t\t\t\t<a href=\"{{path('app_event_newAlmacen') }}\">
\t\t\t\tAlmacen</a>
\t\t\t\t
\t\t\t\t{% endif %}

\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_seeAssignedTasks')}}\"> 

\t\t\t\t\t\t\t\t\t<button type=\"button\" style=\"margin: 20px;\">VER TAREAS ACEPTADAS</button>


\t\t\t{% for task in tasks %}

\t\t\t\t<ul>
\t\t\t\t\t<li>
\t\t\t\t\t\tNombre:{{task.event.name}}<br>

\t\t\t\t\t\t<a href=\"{{ path('app_task_edit_State_request', {'id': task.id, 'state_request': 1}) }}\">
\t\t\t\t\t\t\t<button type=\"button\">ACEPTAR</button>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"{{ path('app_task_edit_State_request', {'id': task.id, 'state_request': 0}) }}\">
\t\t\t\t\t\t<a href=\"{{ path('app_task_edit_State_request', {'id': task.id, 'state_request': 0}) }}\">
\t\t\t\t\t\t\t<button type=\"button\">RECHAZAR</button>
\t\t\t\t\t\t</a>

\t\t\t\t\t\t


\t\t\t\t\t</li>
\t\t\t{% endfor %}
\t\t{% endif %}

</div>

\t\t


\t</div>
{% endblock %}
", "/main/index.html.twig", "C:\\Fichame2\\templates\\main\\index.html.twig");
    }
}
