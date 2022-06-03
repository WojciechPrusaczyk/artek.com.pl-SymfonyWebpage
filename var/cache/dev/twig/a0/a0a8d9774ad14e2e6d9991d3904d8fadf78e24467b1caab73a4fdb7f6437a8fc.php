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

/* Realizacje.html.twig */
class __TwigTemplate_ca49e450c1610a6a9921475b79b817010552ac963890722f4ba8c9f0b6e0fc5d extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Realizacje.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "Realizacje.html.twig", 1);
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
        echo "        <!--Realizacje-->
    <main>
        <div class=\"row w-100 d-flexbox text-center m-0 pb-5 imageRow\">
            <div class=\"col-12 p-5\">
                <h2>
                    Zadaszenia Drewniane
                </h2>
            </div>
            <div class=\"col-md-6 col-sm-12 text-center p-2 m-0\">
                <img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/zadaszenie2.jpg"), "html", null, true);
        echo "\" alt=\"Zdjęcie Prezentacyjne\" class=\"rounded mx-auto w-100\">
            </div>
            <div class=\"col-md-6 col-sm-12 m-auto font-weight-bold p-5\">
                <h4>Zadaszenia są przygotowywane z myślą o wieloletniej eksploatacji.</h4><br>
                <h4>Wykonane z najwyższej jakości materiałów.</h4><br>
                <h4>Przygotowujemy je dokładnie według projektu ustalonego z klientem.</h4>
            </div>
        </div>
        <div class=\"row w-100 d-flexbox text-center m-0 py-5 imageRow\">
            <div class=\"col-12 p-5\">
                <h2>
                    Garaże Drewniane
                </h2>
            </div>
            <div class=\"col-md-6 col-sm-12 m-auto font-weight-bold p-5\">
                <h4>Garaże wykonujemy z wytrzymałych i odpronych na warunki atmosferyczne materiałów.</h4><br>
                <h4>Każda deska pomalowana wysokiej jakości ipregnatem do drewna.</h4><br>
                <h4>Przygotowujemy je dokładnie według projektu ustalonego z klientem.</h4>
            </div>
            <div class=\"col-md-6 col-sm-12 text-center p-2 m-0\">
                <img src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/garaz.jpg"), "html", null, true);
        echo "\" alt=\"Zdjęcie Prezentacyjne\" class=\"rounded mx-auto w-100\">
            </div>
        </div>
        <div class=\"row w-100 d-flexbox text-center m-0 py-5 imageRow\">
            <div class=\"col-12 p-5\">
                <h2>
                    Łóżka drewniane
                </h2>
            </div>
            <div class=\"col-md-6 col-sm-12 text-center p-2 m-0\">
                <img src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/lozko.jpg"), "html", null, true);
        echo "\" alt=\"Zdjęcie Prezentacyjne\" style=\"max-width: 400px;\" class=\"rounded mx-auto w-100\">
            </div>
            <div class=\"col-md-6 col-sm-12 m-auto font-weight-bold p-5\">
                <h4>Wykonujemy wysokiej jakości półki drewniane.</h4><br>
                <h4>Półki wykonywane są głównie z drewna mahoniowego.</h4>
                <h4></h4>
            </div>
        </div>
    </main>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Realizacje.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 43,  93 => 33,  70 => 13,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block main %}
        <!--Realizacje-->
    <main>
        <div class=\"row w-100 d-flexbox text-center m-0 pb-5 imageRow\">
            <div class=\"col-12 p-5\">
                <h2>
                    Zadaszenia Drewniane
                </h2>
            </div>
            <div class=\"col-md-6 col-sm-12 text-center p-2 m-0\">
                <img src=\"{{ asset('images/zadaszenie2.jpg') }}\" alt=\"Zdjęcie Prezentacyjne\" class=\"rounded mx-auto w-100\">
            </div>
            <div class=\"col-md-6 col-sm-12 m-auto font-weight-bold p-5\">
                <h4>Zadaszenia są przygotowywane z myślą o wieloletniej eksploatacji.</h4><br>
                <h4>Wykonane z najwyższej jakości materiałów.</h4><br>
                <h4>Przygotowujemy je dokładnie według projektu ustalonego z klientem.</h4>
            </div>
        </div>
        <div class=\"row w-100 d-flexbox text-center m-0 py-5 imageRow\">
            <div class=\"col-12 p-5\">
                <h2>
                    Garaże Drewniane
                </h2>
            </div>
            <div class=\"col-md-6 col-sm-12 m-auto font-weight-bold p-5\">
                <h4>Garaże wykonujemy z wytrzymałych i odpronych na warunki atmosferyczne materiałów.</h4><br>
                <h4>Każda deska pomalowana wysokiej jakości ipregnatem do drewna.</h4><br>
                <h4>Przygotowujemy je dokładnie według projektu ustalonego z klientem.</h4>
            </div>
            <div class=\"col-md-6 col-sm-12 text-center p-2 m-0\">
                <img src=\"{{ asset('images/garaz.jpg') }}\" alt=\"Zdjęcie Prezentacyjne\" class=\"rounded mx-auto w-100\">
            </div>
        </div>
        <div class=\"row w-100 d-flexbox text-center m-0 py-5 imageRow\">
            <div class=\"col-12 p-5\">
                <h2>
                    Łóżka drewniane
                </h2>
            </div>
            <div class=\"col-md-6 col-sm-12 text-center p-2 m-0\">
                <img src=\"{{ asset('images/lozko.jpg') }}\" alt=\"Zdjęcie Prezentacyjne\" style=\"max-width: 400px;\" class=\"rounded mx-auto w-100\">
            </div>
            <div class=\"col-md-6 col-sm-12 m-auto font-weight-bold p-5\">
                <h4>Wykonujemy wysokiej jakości półki drewniane.</h4><br>
                <h4>Półki wykonywane są głównie z drewna mahoniowego.</h4>
                <h4></h4>
            </div>
        </div>
    </main>
{% endblock %}", "Realizacje.html.twig", "C:\\Users\\Wojtek\\Desktop\\Coding\\ArtekWebpage\\templates\\Realizacje.html.twig");
    }
}
