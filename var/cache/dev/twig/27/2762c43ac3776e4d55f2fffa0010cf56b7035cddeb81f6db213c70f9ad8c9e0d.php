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

/* projects.html.twig */
class __TwigTemplate_4f166a8d8f450a813e637d451f158dcf686454174b07235ba7f0b50f8b79acba extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "projects.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "projects.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "projects.html.twig", 1);
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

        echo "Projects";
        
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
        echo "<p class=\"my-4\"><h1 align=\"center\" class=\"text-dark\" >Projects</h1></p>

<table class=\"table table-bordered\">
  <thead class=\"thead-light\">
    <tr align=\"center\">
      <th scope=\"col\">Project ID</th>
      <th scope=\"col\">Project Name</th>
      <th scope=\"col\">Creator</th>
      <th scope=\"col\">Action</th>
    </tr>
  </thead>
  <tbody>
    ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["projects"]) || array_key_exists("projects", $context) ? $context["projects"] : (function () { throw new RuntimeError('Variable "projects" does not exist.', 17, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["project"]) {
            // line 18
            echo "      <tr align=\"center\">
        <th class=\"align-middle\" scope=\"row\">";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["project"], "id", [], "any", false, false, false, 19), "html", null, true);
            echo "</th>
        <td class=\"align-middle\"><a class=\"text-secondary\" href=\"/project/";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["project"], "id", [], "any", false, false, false, 20), "html", null, true);
            echo "\"><b>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["project"], "projectName", [], "any", false, false, false, 20), "html", null, true);
            echo "</b></a></td>
        <td class=\"align-middle\">";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["project"], "creator", [], "any", false, false, false, 21), "name", [], "any", false, false, false, 21), "html", null, true);
            echo "</td>
        <td class=\"align-middle\">
        ";
            // line 23
            if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted(("ROLE_USER_" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["project"], "creator", [], "any", false, false, false, 23), "id", [], "any", false, false, false, 23))) || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN"))) {
                // line 24
                echo "        <a class=\"btn btn-outline-secondary btn-sm\" href=\"/project/edit/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["project"], "id", [], "any", false, false, false, 24), "html", null, true);
                echo "\" role=\"button\">Edit</a>&ensp;
        <a class=\"btn btn-outline-secondary btn-sm\" href=\"/project/delete/";
                // line 25
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["project"], "id", [], "any", false, false, false, 25), "html", null, true);
                echo "\" role=\"button\">Delete</a></td>
       ";
            }
            // line 27
            echo "      </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['project'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "  </tbody>
</table>
<div class=\"my-5\" align=\"center\">
  <a class=\"btn btn-outline-secondary btn-lg\" href=\"/projects/create\" role=\"button\">Create Project</a>
</div>
</div>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "projects.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 29,  136 => 27,  131 => 25,  126 => 24,  124 => 23,  119 => 21,  113 => 20,  109 => 19,  106 => 18,  102 => 17,  88 => 5,  78 => 4,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
 {% block title %}Projects{% endblock %}

{% block body %}
<p class=\"my-4\"><h1 align=\"center\" class=\"text-dark\" >Projects</h1></p>

<table class=\"table table-bordered\">
  <thead class=\"thead-light\">
    <tr align=\"center\">
      <th scope=\"col\">Project ID</th>
      <th scope=\"col\">Project Name</th>
      <th scope=\"col\">Creator</th>
      <th scope=\"col\">Action</th>
    </tr>
  </thead>
  <tbody>
    {% for project in projects %}
      <tr align=\"center\">
        <th class=\"align-middle\" scope=\"row\">{{ project.id }}</th>
        <td class=\"align-middle\"><a class=\"text-secondary\" href=\"/project/{{ project.id }}\"><b>{{ project.projectName }}</b></a></td>
        <td class=\"align-middle\">{{ project.creator.name }}</td>
        <td class=\"align-middle\">
        {% if is_granted('ROLE_USER_' ~ project.creator.id) or is_granted('ROLE_ADMIN') %}
        <a class=\"btn btn-outline-secondary btn-sm\" href=\"/project/edit/{{ project.id }}\" role=\"button\">Edit</a>&ensp;
        <a class=\"btn btn-outline-secondary btn-sm\" href=\"/project/delete/{{ project.id }}\" role=\"button\">Delete</a></td>
       {% endif %}
      </tr>
    {% endfor %}
  </tbody>
</table>
<div class=\"my-5\" align=\"center\">
  <a class=\"btn btn-outline-secondary btn-lg\" href=\"/projects/create\" role=\"button\">Create Project</a>
</div>
</div>


{% endblock %}
", "projects.html.twig", "/home/user/bugtracking/templates/projects.html.twig");
    }
}
