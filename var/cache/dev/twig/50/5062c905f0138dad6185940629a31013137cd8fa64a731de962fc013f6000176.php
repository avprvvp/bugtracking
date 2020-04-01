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

/* project.html.twig */
class __TwigTemplate_158504e781e5122c961fb4eb11c09c7eee2d8b2bca44d1df8c414321cf057845 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "project.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "project.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "project.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Project";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "<h1 align=\"center\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 5, $this->source); })()), "projectName", [], "any", false, false, false, 5), "html", null, true);
        echo "</h1>

<table class=\"table table-bordered\">
  <thead class=\"thead-light\">
    <tr align=\"center\">
      <th scope=\"col\">ID</th>
      <th scope=\"col\">Ticket name</th>
      <th scope=\"col\">Assigned to</th>
      <th scope=\"col\">Creator</th>
      <th scope=\"col\">Action</th>
    </tr>
  </thead>
  <tbody>
    ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 18, $this->source); })()), "tickets", [], "any", false, false, false, 18));
        foreach ($context['_seq'] as $context["_key"] => $context["ticket"]) {
            // line 19
            echo "      <tr align=\"center\">
        <th scope=\"row\">";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ticket"], "id", [], "any", false, false, false, 20), "html", null, true);
            echo "</th>
        <th scope=\"row\"><a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ticket_show", ["id" => twig_get_attribute($this->env, $this->source, $context["ticket"], "id", [], "any", false, false, false, 21)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ticket"], "name", [], "any", false, false, false, 21), "html", null, true);
            echo "</a></th>
        <td>----</td>
        <td>----</td>
        <td>
        <a class=\"btn btn-outline-secondary btn-sm\" href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ticket_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["ticket"], "id", [], "any", false, false, false, 25), "project_id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ticket"], "project", [], "any", false, false, false, 25), "id", [], "any", false, false, false, 25)]), "html", null, true);
            echo "\" role=\"button\">Edit</a>&ensp;
        <a class=\"btn btn-outline-secondary btn-sm\" href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ticket_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["ticket"], "id", [], "any", false, false, false, 26), "project_id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ticket"], "project", [], "any", false, false, false, 26), "id", [], "any", false, false, false, 26)]), "html", null, true);
            echo "\" role=\"button\">Delete</a></td>
      </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ticket'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "  </tbody>
</table>
<div align=\"center\" class=\"my-3\">
  <a class=\"btn btn-outline-secondary btn-lg\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ticket_new", ["project_id" => twig_get_attribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 32, $this->source); })()), "id", [], "any", false, false, false, 32)]), "html", null, true);
        echo "\" role=\"button\">Create Ticket</a>
</div>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "project.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 32,  138 => 29,  129 => 26,  125 => 25,  116 => 21,  112 => 20,  109 => 19,  105 => 18,  88 => 5,  78 => 4,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
 {% block title %}Project{% endblock %}

{% block body %}
<h1 align=\"center\">{{ project.projectName }}</h1>

<table class=\"table table-bordered\">
  <thead class=\"thead-light\">
    <tr align=\"center\">
      <th scope=\"col\">ID</th>
      <th scope=\"col\">Ticket name</th>
      <th scope=\"col\">Assigned to</th>
      <th scope=\"col\">Creator</th>
      <th scope=\"col\">Action</th>
    </tr>
  </thead>
  <tbody>
    {% for ticket in project.tickets %}
      <tr align=\"center\">
        <th scope=\"row\">{{ ticket.id }}</th>
        <th scope=\"row\"><a href=\"{{ path('ticket_show', {'id': ticket.id}) }}\">{{ ticket.name }}</a></th>
        <td>----</td>
        <td>----</td>
        <td>
        <a class=\"btn btn-outline-secondary btn-sm\" href=\"{{ path('ticket_edit', {'id': ticket.id, 'project_id': ticket.project.id}) }}\" role=\"button\">Edit</a>&ensp;
        <a class=\"btn btn-outline-secondary btn-sm\" href=\"{{ path('ticket_delete', {'id': ticket.id, 'project_id': ticket.project.id}) }}\" role=\"button\">Delete</a></td>
      </tr>
    {% endfor %}
  </tbody>
</table>
<div align=\"center\" class=\"my-3\">
  <a class=\"btn btn-outline-secondary btn-lg\" href=\"{{ path('ticket_new', {project_id: project.id}) }}\" role=\"button\">Create Ticket</a>
</div>


{% endblock %}
", "project.html.twig", "/home/user/bugtracking/templates/project.html.twig");
    }
}
