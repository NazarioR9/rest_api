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

/* security/register.html.twig */
class __TwigTemplate_63c15852f5cf01fccdcf9be47a3f26f5664ee05ed29cdb9be63fdc186092132c extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/register.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/register.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "security/register.html.twig", 1);
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
        echo "    ";
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 4, $this->source); })())) {
            // line 5
            echo "        <div class=\"alert alert-danger\">
            ";
            // line 6
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 6, $this->source); })()), "messageKey", [], "any", false, false, false, 6), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 6, $this->source); })()), "messageData", [], "any", false, false, false, 6), "security"), "html", null, true);
            echo "
        </div>
    ";
        }
        // line 9
        echo "
    <div class=\"row\">
        <div class=\"col-sm-5\">
            <div class=\"well\">
                <form action=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("register");
        echo "\" method=\"post\">
                    <fieldset>
                        <legend><i class=\"fa fa-lock\" aria-hidden=\"true\"></i> Registration </legend>
                        <div class=\"form-group\">
                            <label for=\"name\">First Name</label>
                            <input type=\"text\" id=\"fname\" name=\"fname\" class=\"form-control\" required/>
                        </div>
                        <div class=\"form-group\">
                            <label for=\"name\">Last Name</label>
                            <input type=\"text\" id=\"lname\" name=\"lname\" class=\"form-control\" required/>
                        </div>
                        <div class=\"form-group\">
                            <label for=\"inputEmail\">Email</label>
                            <input type=\"text\" id=\"email\" name=\"email\" class=\"form-control\" required/>
                        </div>
                        <div class=\"form-group\">
                            <label for=\"password\">Password</label>
                            <input type=\"password\" id=\"password\" name=\"password\" class=\"form-control\" required/>
                        </div>
                        <div class=\"form-group\">
                            <label for=\"title\"> Title </label>
                            <select name=\"title\" id=\"title\" >
                                <option>Employee</option>
                                <option>HR</option>
                            </select>
                        </div>
                        <button type=\"submit\" class=\"btn btn-primary\">
                            <i class=\"fa fa-sign-in\" aria-hidden=\"true\"></i> Sign in
                        </button>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "security/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 13,  80 => 9,  74 => 6,  71 => 5,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
    {% if error %}
        <div class=\"alert alert-danger\">
            {{ error.messageKey|trans(error.messageData, 'security') }}
        </div>
    {% endif %}

    <div class=\"row\">
        <div class=\"col-sm-5\">
            <div class=\"well\">
                <form action=\"{{ path('register') }}\" method=\"post\">
                    <fieldset>
                        <legend><i class=\"fa fa-lock\" aria-hidden=\"true\"></i> Registration </legend>
                        <div class=\"form-group\">
                            <label for=\"name\">First Name</label>
                            <input type=\"text\" id=\"fname\" name=\"fname\" class=\"form-control\" required/>
                        </div>
                        <div class=\"form-group\">
                            <label for=\"name\">Last Name</label>
                            <input type=\"text\" id=\"lname\" name=\"lname\" class=\"form-control\" required/>
                        </div>
                        <div class=\"form-group\">
                            <label for=\"inputEmail\">Email</label>
                            <input type=\"text\" id=\"email\" name=\"email\" class=\"form-control\" required/>
                        </div>
                        <div class=\"form-group\">
                            <label for=\"password\">Password</label>
                            <input type=\"password\" id=\"password\" name=\"password\" class=\"form-control\" required/>
                        </div>
                        <div class=\"form-group\">
                            <label for=\"title\"> Title </label>
                            <select name=\"title\" id=\"title\" >
                                <option>Employee</option>
                                <option>HR</option>
                            </select>
                        </div>
                        <button type=\"submit\" class=\"btn btn-primary\">
                            <i class=\"fa fa-sign-in\" aria-hidden=\"true\"></i> Sign in
                        </button>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
{% endblock %}", "security/register.html.twig", "/home/nazario/Devs/PHP/rest_api/templates/security/register.html.twig");
    }
}
