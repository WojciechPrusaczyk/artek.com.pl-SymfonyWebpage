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

/* NapiszDoNas.html.twig */
class __TwigTemplate_bfe01141479fbf6384aca5676b00a09b511c852061ef856106d27ab1cd972ccb extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'main' => [$this, 'block_main'],
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "NapiszDoNas.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "NapiszDoNas.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "        <main>
            <p class=\"my-5 w-75 mx-auto\">
                <h1>Napisz do nas!</h1><br>
                <h3>Na wszystkie wiadomości odpowiadamy najszybciej jak to możliwe.</h3><br>
            </p>
            <form action=\"\" method=\"get\" class=\"my-5 w-75 mx-auto\">
                <div class=\"col-sm-12 col-md-6 col-xl-5 mx-auto\">
                    <input type=\"text\" value=\"Imie i nazwisko\" name=\"ProdName\" class=\"form-control mx-auto m-3 mw-100\" onclick=\"onFocusText(this, 'Imie i nazwisko')\" onfocusout=\"onLostFocus(this, 'Imie i nazwisko')\" style=\"color: grey\">
                </div>
                <div class=\"col-sm-12 col-md-6 col-xl-5 mx-auto\">
                    <input type=\"text\" value=\"Adres e-mail, lub telefon\" name=\"contact\" class=\"form-control mx-auto my-3 mw-100\" onclick=\"onFocusText(this, 'Adres e-mail, lub telefon')\" onfocusout=\"onLostFocus(this, 'Adres e-mail, lub telefon')\" style=\"color: grey\">
                </div>
                <div class=\"col-sm-12 col-md-10 mx-auto\">
                    <textarea name=\"\" id=\"\" value=\"Wiadomość...\" name=\"message\" class=\"form-control mx-auto my-3 w-100\" onclick=\"onFocusText(this, 'Wiadomość...')\" onfocusout=\"onLostFocus(this, 'Wiadomość...')\" style=\"color: grey; height: 35vh;\"></textarea>
                </div>
                <div class=\"col-sm-8 col-md-6 col-xl-3 mx-auto\">
                    <input type=\"submit\" value=\"Wyślij\" class=\"btn my-3 mx-auto p-3 w-75\">
                </div>
            </form>
        </main>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "NapiszDoNas.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block main %}
        <main>
            <p class=\"my-5 w-75 mx-auto\">
                <h1>Napisz do nas!</h1><br>
                <h3>Na wszystkie wiadomości odpowiadamy najszybciej jak to możliwe.</h3><br>
            </p>
            <form action=\"\" method=\"get\" class=\"my-5 w-75 mx-auto\">
                <div class=\"col-sm-12 col-md-6 col-xl-5 mx-auto\">
                    <input type=\"text\" value=\"Imie i nazwisko\" name=\"ProdName\" class=\"form-control mx-auto m-3 mw-100\" onclick=\"onFocusText(this, 'Imie i nazwisko')\" onfocusout=\"onLostFocus(this, 'Imie i nazwisko')\" style=\"color: grey\">
                </div>
                <div class=\"col-sm-12 col-md-6 col-xl-5 mx-auto\">
                    <input type=\"text\" value=\"Adres e-mail, lub telefon\" name=\"contact\" class=\"form-control mx-auto my-3 mw-100\" onclick=\"onFocusText(this, 'Adres e-mail, lub telefon')\" onfocusout=\"onLostFocus(this, 'Adres e-mail, lub telefon')\" style=\"color: grey\">
                </div>
                <div class=\"col-sm-12 col-md-10 mx-auto\">
                    <textarea name=\"\" id=\"\" value=\"Wiadomość...\" name=\"message\" class=\"form-control mx-auto my-3 w-100\" onclick=\"onFocusText(this, 'Wiadomość...')\" onfocusout=\"onLostFocus(this, 'Wiadomość...')\" style=\"color: grey; height: 35vh;\"></textarea>
                </div>
                <div class=\"col-sm-8 col-md-6 col-xl-3 mx-auto\">
                    <input type=\"submit\" value=\"Wyślij\" class=\"btn my-3 mx-auto p-3 w-75\">
                </div>
            </form>
        </main>
{% endblock %}", "NapiszDoNas.html.twig", "C:\\Users\\Wojtek\\Desktop\\Coding\\ArtekWebpage\\templates\\NapiszDoNas.html.twig");
    }
}
