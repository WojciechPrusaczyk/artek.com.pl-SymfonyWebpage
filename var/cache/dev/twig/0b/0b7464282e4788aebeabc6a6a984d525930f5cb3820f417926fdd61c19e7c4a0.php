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

/* StronaGlowna.html.twig */
class __TwigTemplate_87823c7286ca485144cbb4b261b19c358914ce943b1e42df3be2e2a7d1680e26 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'paralax' => [$this, 'block_paralax'],
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "StronaGlowna.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "StronaGlowna.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_paralax($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "paralax"));

        // line 4
        echo "    <div class=\"text-center zdjecieGlowneTekst w-100\" style=\"background-image: url(";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/zadaszenie1.jpg"), "html", null, true);
        echo ");\">
        <p class=\"h1 fw-bold lh-sm font-monospace\">WYROBY</p>
        <p class=\"h1 fw-bold lh-sm font-monospace\">DREWNIANE</p>
        <p class=\"h2 fw-bold lh-sm font-monospace\">Stoły, Zadaszenia, Garaże</p>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 10
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 11
        echo "    <main>
        <!--Realizacje-->

        <div class=\"row w-100 d-flexbox text-center m-0 pb-5 imageRow\">
            <div class=\"col-12 p-5\">
                <h2>
                    Zadaszenia Drewniane
                </h2>
            </div>
            <div class=\"col-md-6 col-sm-12 text-center p-2 m-0\">
                <img src=\"";
        // line 21
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
        // line 41
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
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/lozko.jpg"), "html", null, true);
        echo "\" alt=\"Zdjęcie Prezentacyjne\" style=\"max-width: 400px;\" class=\"rounded mx-auto w-100\">
            </div>
            <div class=\"col-md-6 col-sm-12 m-auto font-weight-bold p-5\">
                <h4>Wykonujemy wysokiej jakości półki drewniane.</h4><br>
                <h4>Półki wykonywane są głównie z drewna mahoniowego.</h4>
                <h4></h4>
            </div>
        </div>

        <!--Formularz-->

        <p class=\"my-5 w-75 mx-auto\">
            <h1>Napisz do nas!</h1><br>
            <h3>Na wszystkie wiadomości odpowiadamy najszybciej jak to możliwe.</h3><br>
        </p>
        <form action=\"\" method=\"get\" class=\"my-5 w-75 mx-auto\">
            <div class=\"col-sm-12 col-md-6 col-xl-5 mx-auto\">
                <input type=\"text\" value=\"Imie i nazwisko\" name=\"ProdName\" class=\"form-control mx-auto m-3 mw-100\" onclick=\"onFocusText(this, 'Imie i nazwisko')\" onfocusout=\"onLostFocus(this, 'Imie i nazwisko')\" style=\"color: grey; height: 6vh; font-size: 1.3rem;\">
            </div>
            <div class=\"col-sm-12 col-md-6 col-xl-5 mx-auto\">
                <input type=\"text\" value=\"Adres e-mail, lub telefon\" name=\"contact\" class=\"form-control mx-auto my-3 mw-100\" onclick=\"onFocusText(this, 'Adres e-mail, lub telefon')\" onfocusout=\"onLostFocus(this, 'Adres e-mail, lub telefon')\" style=\"color: grey; height: 6vh; font-size: 1.3rem;\">
            </div>
            <div class=\"col-sm-12 col-md-10 mx-auto\">
                <textarea name=\"\" id=\"\" value=\"Wiadomość...\" name=\"message\" class=\"form-control mx-auto my-3 w-100\" onclick=\"onFocusText(this, 'Wiadomość...')\" onfocusout=\"onLostFocus(this, 'Wiadomość...')\" style=\"color: grey; height: 20vh; font-size: 1.3rem;\"></textarea>
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
        return "StronaGlowna.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 51,  116 => 41,  93 => 21,  81 => 11,  74 => 10,  60 => 4,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block paralax %}
    <div class=\"text-center zdjecieGlowneTekst w-100\" style=\"background-image: url({{ asset('images/zadaszenie1.jpg') }});\">
        <p class=\"h1 fw-bold lh-sm font-monospace\">WYROBY</p>
        <p class=\"h1 fw-bold lh-sm font-monospace\">DREWNIANE</p>
        <p class=\"h2 fw-bold lh-sm font-monospace\">Stoły, Zadaszenia, Garaże</p>
    </div>
{% endblock %}
{% block main %}
    <main>
        <!--Realizacje-->

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

        <!--Formularz-->

        <p class=\"my-5 w-75 mx-auto\">
            <h1>Napisz do nas!</h1><br>
            <h3>Na wszystkie wiadomości odpowiadamy najszybciej jak to możliwe.</h3><br>
        </p>
        <form action=\"\" method=\"get\" class=\"my-5 w-75 mx-auto\">
            <div class=\"col-sm-12 col-md-6 col-xl-5 mx-auto\">
                <input type=\"text\" value=\"Imie i nazwisko\" name=\"ProdName\" class=\"form-control mx-auto m-3 mw-100\" onclick=\"onFocusText(this, 'Imie i nazwisko')\" onfocusout=\"onLostFocus(this, 'Imie i nazwisko')\" style=\"color: grey; height: 6vh; font-size: 1.3rem;\">
            </div>
            <div class=\"col-sm-12 col-md-6 col-xl-5 mx-auto\">
                <input type=\"text\" value=\"Adres e-mail, lub telefon\" name=\"contact\" class=\"form-control mx-auto my-3 mw-100\" onclick=\"onFocusText(this, 'Adres e-mail, lub telefon')\" onfocusout=\"onLostFocus(this, 'Adres e-mail, lub telefon')\" style=\"color: grey; height: 6vh; font-size: 1.3rem;\">
            </div>
            <div class=\"col-sm-12 col-md-10 mx-auto\">
                <textarea name=\"\" id=\"\" value=\"Wiadomość...\" name=\"message\" class=\"form-control mx-auto my-3 w-100\" onclick=\"onFocusText(this, 'Wiadomość...')\" onfocusout=\"onLostFocus(this, 'Wiadomość...')\" style=\"color: grey; height: 20vh; font-size: 1.3rem;\"></textarea>
            </div>
            <div class=\"col-sm-8 col-md-6 col-xl-3 mx-auto\">
                <input type=\"submit\" value=\"Wyślij\" class=\"btn my-3 mx-auto p-3 w-75\">
            </div>
        </form>
    </main>
{% endblock %}", "StronaGlowna.html.twig", "C:\\Users\\Wojtek\\Desktop\\Coding\\ArtekWebpage\\templates\\StronaGlowna.html.twig");
    }
}
