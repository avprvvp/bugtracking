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

/* ticket/index.html.twig */
class __TwigTemplate_8e9460530e2daf137e1ee233aee010117955f4e120e53d2135d739a7d3654103 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ticket/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ticket/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "ticket/index.html.twig", 1);
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

        echo "Ticket index";
        
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
        echo "<div class=\"my-5\">
<div align=\"center\" class=\"mx-auto\">
    <h1>Tickets</h1>

    <table class=\"table\" align=\"center\">
        <thead class=\"thead-light\">
            <tr align=\"center\">
                <th scope=\"col\">Id</th>
                <th scope=\"col\">Name</th>
                <th scope=\"col\">Type</th>
                <th scope=\"col\">Status</th>
                <th scope=\"col\">Creator</th>
                <th scope=\"col\">Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tickets"]) || array_key_exists("tickets", $context) ? $context["tickets"] : (function () { throw new RuntimeError('Variable "tickets" does not exist.', 22, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["ticket"]) {
            // line 23
            echo "            <tr align=\"center\" scope=\"row\">
                <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ticket"], "id", [], "any", false, false, false, 24), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ticket"], "name", [], "any", false, false, false, 25), "html", null, true);
            echo "</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td class=\"mx-auto\" style=\"width: 270px;\">
                    <a class=\"btn btn-outline-secondary btn-sm\" href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ticket_show", ["id" => twig_get_attribute($this->env, $this->source, $context["ticket"], "id", [], "any", false, false, false, 30)]), "html", null, true);
            echo "\">Show</a>&ensp;
                    <a class=\"btn btn-outline-secondary btn-sm\" href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ticket_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["ticket"], "id", [], "any", false, false, false, 31)]), "html", null, true);
            echo "\">Edit</a>&ensp;
                    <a class=\"btn btn-outline-secondary btn-sm\" href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ticket_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["ticket"], "id", [], "any", false, false, false, 32)]), "html", null, true);
            echo "\">Delete</a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 36
            echo "            <tr>
                <td colspan=\"3\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ticket'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "        </tbody>
    </table>

    <a class=\"btn btn-outline-secondary btn-lg\" href=\"";
        // line 43
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ticket_new");
        echo "\">Create new</a>
    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "ticket/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 43,  152 => 40,  143 => 36,  134 => 32,  130 => 31,  126 => 30,  118 => 25,  114 => 24,  111 => 23,  106 => 22,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Ticket index{% endblock %}

{% block body %}
<div class=\"my-5\">
<div align=\"center\" class=\"mx-auto\">
    <h1>Tickets</h1>

    <table class=\"table\" align=\"center\">
        <thead class=\"thead-light\">
            <tr align=\"center\">
                <th scope=\"col\">Id</th>
                <th scope=\"col\">Name</th>
                <th scope=\"col\">Type</th>
                <th scope=\"col\">Status</th>
                <th scope=\"col\">Creator</th>
                <th scope=\"col\">Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for ticket in tickets %}
            <tr align=\"center\" scope=\"row\">
                <td>{{ ticket.id }}</td>
                <td>{{ ticket.name }}</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td class=\"mx-auto\" style=\"width: 270px;\">
                    <a class=\"btn btn-outline-secondary btn-sm\" href=\"{{ path('ticket_show', {'id': ticket.id}) }}\">Show</a>&ensp;
                    <a class=\"btn btn-outline-secondary btn-sm\" href=\"{{ path('ticket_edit', {'id': ticket.id}) }}\">Edit</a>&ensp;
                    <a class=\"btn btn-outline-secondary btn-sm\" href=\"{{ path('ticket_delete', {'id': ticket.id}) }}\">Delete</a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"3\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <a class=\"btn btn-outline-secondary btn-lg\" href=\"{{ path('ticket_new') }}\">Create new</a>
    </div>
</div>
{% endblock %}
", "ticket/index.html.twig", "/home/user/bugtracking/templates/ticket/index.html.twig");
    }
}
