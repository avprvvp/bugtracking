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
            <th scope=\"col\">Description</th>
            <th scope=\"col\">Tags</th>
            <th scope=\"col\">File</th>
            <th scope=\"col\">Assigned to</th>
            <th scope=\"col\">Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr align=\"center\">
                <td>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 24, $this->source); })()), "type", [], "any", false, false, false, 24), "html", null, true);
        echo "</td>
                <td>";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 25, $this->source); })()), "status", [], "any", false, false, false, 25), "html", null, true);
        echo "</td>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 26, $this->source); })()), "creator", [], "any", false, false, false, 26), "name", [], "any", false, false, false, 26), "html", null, true);
        echo "</td>
                <td>";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 27, $this->source); })()), "description", [], "any", false, false, false, 27), "html", null, true);
        echo "</td>
                <td>
                ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 29, $this->source); })()), "tags", [], "any", false, false, false, 29));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 30
            echo "                ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tag"], "name", [], "any", false, false, false, 30), "html", null, true);
            echo " 
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "                </td>
                <td>----</td>
                <td>";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 34, $this->source); })()), "assign", [], "any", false, false, false, 34), "name", [], "any", false, false, false, 34), "html", null, true);
        echo "</td>
                <td>
                    <a class=\"btn btn-outline-secondary btn-sm\" href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ticket_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 36, $this->source); })()), "id", [], "any", false, false, false, 36), "project_id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 36, $this->source); })()), "project", [], "any", false, false, false, 36), "id", [], "any", false, false, false, 36)]), "html", null, true);
        echo "\">Edit</a>&ensp;
                    <a class=\"btn btn-outline-secondary btn-sm\" href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ticket_delete", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 37, $this->source); })()), "id", [], "any", false, false, false, 37), "project_id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 37, $this->source); })()), "project", [], "any", false, false, false, 37), "id", [], "any", false, false, false, 37)]), "html", null, true);
        echo "\">Delete</a></td>
                </td>
        </tbody>
    </table>
    <h1 align=\"center\">
    Comments
    </h1>

    ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 45, $this->source); })()), "comments", [], "any", false, false, false, 45));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 46
            echo "    
    <div class=\"my-3\">
    <div align=\"center\" class=\"mx-auto\" style=\"width: 200px;\">
    <div align=\"justify\">
        <p>User:<b> ";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "creator", [], "any", false, false, false, 50), "name", [], "any", false, false, false, 50), "html", null, true);
            echo "</b></p>
        <p>Comment: ";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "text", [], "any", false, false, false, 51), "html", null, true);
            echo "</p>
        <p><a class=\"btn btn-outline-secondary btn-sm\" href=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("comment_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["comment"], "id", [], "any", false, false, false, 52), "ticket_id" => twig_get_attribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 52, $this->source); })()), "id", [], "any", false, false, false, 52)]), "html", null, true);
            echo "\" role=\"button\">Delete</a></p>
    </div>
    </div>
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "    <div align=\"center\" class=\"mx-auto\" style=\"width: 400px;\">
      ";
        // line 58
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["comment_form"]) || array_key_exists("comment_form", $context) ? $context["comment_form"] : (function () { throw new RuntimeError('Variable "comment_form" does not exist.', 58, $this->source); })()), 'form_start');
        echo "
    ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["comment_form"]) || array_key_exists("comment_form", $context) ? $context["comment_form"] : (function () { throw new RuntimeError('Variable "comment_form" does not exist.', 59, $this->source); })()), 'widget');
        echo "
    <div align=\"center\" class=\"mb-5\">
        <button  class=\"btn btn-outline-secondary btn-sm\">";
        // line 61
        echo twig_escape_filter($this->env, (((isset($context["button_label"]) || array_key_exists("button_label", $context))) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 61, $this->source); })()), "Submit")) : ("Submit")), "html", null, true);
        echo "</button>
    </div>
";
        // line 63
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["comment_form"]) || array_key_exists("comment_form", $context) ? $context["comment_form"] : (function () { throw new RuntimeError('Variable "comment_form" does not exist.', 63, $this->source); })()), 'form_end');
        echo "
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
        return array (  210 => 63,  205 => 61,  200 => 59,  196 => 58,  193 => 57,  182 => 52,  178 => 51,  174 => 50,  168 => 46,  164 => 45,  153 => 37,  149 => 36,  144 => 34,  140 => 32,  131 => 30,  127 => 29,  122 => 27,  118 => 26,  114 => 25,  110 => 24,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
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
            <th scope=\"col\">Description</th>
            <th scope=\"col\">Tags</th>
            <th scope=\"col\">File</th>
            <th scope=\"col\">Assigned to</th>
            <th scope=\"col\">Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr align=\"center\">
                <td>{{ ticket.type }}</td>
                <td>{{ ticket.status }}</td>
                <td>{{ ticket.creator.name }}</td>
                <td>{{ ticket.description }}</td>
                <td>
                {% for tag in ticket.tags %}
                {{ tag.name }} 
                {% endfor %}
                </td>
                <td>----</td>
                <td>{{ ticket.assign.name }}</td>
                <td>
                    <a class=\"btn btn-outline-secondary btn-sm\" href=\"{{ path('ticket_edit', {'id': ticket.id, 'project_id': ticket.project.id}) }}\">Edit</a>&ensp;
                    <a class=\"btn btn-outline-secondary btn-sm\" href=\"{{ path('ticket_delete', {'id': ticket.id, 'project_id': ticket.project.id}) }}\">Delete</a></td>
                </td>
        </tbody>
    </table>
    <h1 align=\"center\">
    Comments
    </h1>

    {% for comment in ticket.comments %}
    
    <div class=\"my-3\">
    <div align=\"center\" class=\"mx-auto\" style=\"width: 200px;\">
    <div align=\"justify\">
        <p>User:<b> {{ comment.creator.name }}</b></p>
        <p>Comment: {{ comment.text }}</p>
        <p><a class=\"btn btn-outline-secondary btn-sm\" href=\"{{ path('comment_delete', {'id': comment.id, 'ticket_id': ticket.id}) }}\" role=\"button\">Delete</a></p>
    </div>
    </div>
    </div>
    {% endfor %}
    <div align=\"center\" class=\"mx-auto\" style=\"width: 400px;\">
      {{ form_start(comment_form) }}
    {{ form_widget(comment_form) }}
    <div align=\"center\" class=\"mb-5\">
        <button  class=\"btn btn-outline-secondary btn-sm\">{{ button_label|default('Submit') }}</button>
    </div>
{{ form_end(comment_form) }}
    </div>

{% endblock %}
", "ticket/show.html.twig", "/home/user/bugtracking/templates/ticket/show.html.twig");
    }
}
