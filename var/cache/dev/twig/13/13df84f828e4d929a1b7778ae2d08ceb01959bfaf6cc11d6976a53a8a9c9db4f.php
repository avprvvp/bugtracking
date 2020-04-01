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

/* ticket/show.html.twig */
class __TwigTemplate_668b1e7fe72a1e0209ca999840a63f1b41da689b49fc5fef908e14c301d032c2 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ticket/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ticket/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "ticket/show.html.twig", 1);
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

        echo "Ticket";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1 align=\"center\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 6, $this->source); })()), "name", [], "any", false, false, false, 6), "html", null, true);
        echo "</h1>

    <table align=\"center\" class=\"table table-bordered\">
        <thead class=\"thead-light\">
        
            <tr align=\"center\">
            <th scope=\"col\">Type</th>
            <th scope=\"col\">Status</th>
            <th scope=\"col\">Creator</th>
            <th scope=\"col\">Assigned to</th>
            <th scope=\"col\">Tags</th>
            <th scope=\"col\">Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr align=\"center\">
                <td>";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 22, $this->source); })()), "type", [], "any", false, false, false, 22), "html", null, true);
        echo "</td>
                <td>";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 23, $this->source); })()), "status", [], "any", false, false, false, 23), "html", null, true);
        echo "</td>
                <td>----</td>
                <td>----</td>
                <td>----</td>
                <td>
                    <a class=\"btn btn-outline-secondary btn-sm\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ticket_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 28, $this->source); })()), "id", [], "any", false, false, false, 28)]), "html", null, true);
        echo "\" role=\"button\">Edit</a>&ensp;
                    <a class=\"btn btn-outline-secondary btn-sm\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ticket_delete", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 29, $this->source); })()), "id", [], "any", false, false, false, 29)]), "html", null, true);
        echo "\" role=\"button\">Delete</a></td>
                </td>
        </tbody>
    </table>
    <h1 align=\"center\">
    Comments
    </h1>
    ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 36, $this->source); })()), "comments", [], "any", false, false, false, 36));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 37
            echo "    <div class=\"my-5\">
    <div align=\"center\" class=\"mx-auto\" style=\"width: 200px;\">
    <div align=\"justify\">
        <p>Name: </p>
        <p>Comment: ";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "text", [], "any", false, false, false, 41), "html", null, true);
            echo "</p>
        <p><a class=\"btn btn-outline-secondary btn-sm\" href=\"#\" role=\"button\">Delete</a></p>
    </div>
    </div>
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "    <div align=\"center\">
        <a class=\"btn btn-outline-secondary btn-sm\" href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("create_comment", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 48, $this->source); })()), "id", [], "any", false, false, false, 48)]), "html", null, true);
        echo "\">Add new comment</a>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "ticket/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 48,  156 => 47,  144 => 41,  138 => 37,  134 => 36,  124 => 29,  120 => 28,  112 => 23,  108 => 22,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Ticket{% endblock %}

{% block body %}
    <h1 align=\"center\">{{ ticket.name }}</h1>

    <table align=\"center\" class=\"table table-bordered\">
        <thead class=\"thead-light\">
        
            <tr align=\"center\">
            <th scope=\"col\">Type</th>
            <th scope=\"col\">Status</th>
            <th scope=\"col\">Creator</th>
            <th scope=\"col\">Assigned to</th>
            <th scope=\"col\">Tags</th>
            <th scope=\"col\">Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr align=\"center\">
                <td>{{ ticket.type }}</td>
                <td>{{ ticket.status }}</td>
                <td>----</td>
                <td>----</td>
                <td>----</td>
                <td>
                    <a class=\"btn btn-outline-secondary btn-sm\" href=\"{{ path('ticket_edit', {'id': ticket.id}) }}\" role=\"button\">Edit</a>&ensp;
                    <a class=\"btn btn-outline-secondary btn-sm\" href=\"{{ path('ticket_delete', {'id': ticket.id}) }}\" role=\"button\">Delete</a></td>
                </td>
        </tbody>
    </table>
    <h1 align=\"center\">
    Comments
    </h1>
    {% for comment in ticket.comments %}
    <div class=\"my-5\">
    <div align=\"center\" class=\"mx-auto\" style=\"width: 200px;\">
    <div align=\"justify\">
        <p>Name: </p>
        <p>Comment: {{ comment.text }}</p>
        <p><a class=\"btn btn-outline-secondary btn-sm\" href=\"#\" role=\"button\">Delete</a></p>
    </div>
    </div>
    </div>
    {% endfor %}
    <div align=\"center\">
        <a class=\"btn btn-outline-secondary btn-sm\" href=\"{{ path('create_comment', {'id': ticket.id}) }}\">Add new comment</a>
    </div>

{% endblock %}
", "ticket/show.html.twig", "/home/user/bugtracking/templates/ticket/show.html.twig");
    }
}
