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

/* base.html.twig */
class __TwigTemplate_7257212b705e44980f501e85b446ac1b167c9e5efb0acb67d9b4d68078633435 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'paralax' => [$this, 'block_paralax'],
            'main' => [$this, 'block_main'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"pl-PL\">

<head>
    <title>Drewno Artek</title>
    <meta name=\"description\" content=\"Tworzymy najlepszej jakości wyroby drewniane w okolicy! Zapraszamy do kontaku z nami. Adres: Nowe Krąplewice 19 86-130. Kontakt: (+48)791-271-060.\">

    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/app.css"), "html", null, true);
        echo "\">
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3\" crossorigin=\"anonymous\">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("logo/logo.png"), "html", null, true);
        echo "\">
    <meta charset=\"utf-8\">
    <meta name=\"google-site-verification\" content=\"4tNYNgBSglbHdi6VHHmjfnTKV9CbXENbJlgKA1BZJSA\" />
    <script>
        function onFocusText(ft, text){
            if(ft.value === text){
                ft.value = \"\";
                ft.style.color = 'black';
            }
        }
        function onLostFocus(ft, text){
            if(ft.value === \"\"){
                ft.value = text;
                ft.style.color = 'grey';
            }
        }
    </script>
</head>
<body>
<nav class=\"row m-0\">
    <div class=\"row fw-bold m-0\">
        <div class=\"col-md-12 col-xl-3\">
            <img src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("logo/logoBezTla.png"), "html", null, true);
        echo "\" alt=\"Logo\" class=\"d-block p-0 mx-auto\" style=\"height: 170px;\">
        </div>
        <div class=\"col-sm-12 col-md-4 col-xl-3 pt-3\">
            <div class=\"pt-4 headerButton mx-auto\">
                <a href=\"";
        // line 37
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("main_page");
        echo "\" class=\"d-block text-center p-4\">
                    Strona główna
                </a>
            </div>
        </div>
        <div class=\"col-sm-12 col-md-4 col-xl-3 pt-3\">
            <div class=\"pt-4 headerButton\">
                <a href=\"";
        // line 44
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("realizations");
        echo "\" class=\"d-block text-center p-4 mx-auto\">
                    Realizacje
                </a>
            </div>
        </div>
        <div class=\"col-sm-12 col-md-4 col-xl-3 pt-3 pb-3\">
            <div class=\"pt-4 headerButton mx-auto\">
                <a href=\"";
        // line 51
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo "\" class=\"d-block text-center p-4\">
                    Kontakt
                </a>
            </div>
        </div>
    </div>
</nav>
    ";
        // line 58
        $this->displayBlock('paralax', $context, $blocks);
        // line 61
        echo "    ";
        $this->displayBlock('main', $context, $blocks);
        // line 64
        echo "
<!----------Stopka------------>

<footer class=\"w-100 row d-block m-0 p-0\">
    <div class=\"d0 text-center col m-0\">
        <div class=\"pt-1 fw-bold\">
            Odnośniki:
        </div>
        <div class=\"row pt-2 m-0\">
            <li class=\"pt-3 col-md-3 col-sm-6\">
                <a href=\"";
        // line 74
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("main_page");
        echo "\">Strona główna</a>
            </li>
            <li class=\"pt-3 col-md-3 col-sm-6\">
                <a href=\"";
        // line 77
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("realizations");
        echo "\">Realizacje</a>
            </li>
            <li class=\"pt-3 col-md-3 col-sm-6\">
                <a href=\"";
        // line 80
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo "\">Kontakt</a>
            </li>
            <li class=\"pt-3 col-md-3 col-sm-6\">
                <a href=\"https://github.com/WojciechPrusaczyk\">Twórca Strony</a>
            </li>
        </div>
    </div>
    <div class=\"d1 row p-5 fw-bold m-0\">
        <div class=\"col-sm-12 col-md-4 text-center\">
            <div class=\"py-1\">
                <!--telefon-->
                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"20\" height=\"20\" fill=\"currentColor\" class=\"bi bi-phone\" viewBox=\"0 0 16 16\">
                    <path d=\"M11 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h6zM5 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H5z\"/>
                    <path d=\"M8 14a1 1 0 1 0 0-2 1 1 0 0 0 0 2z\"/>
                </svg>
                (+48)791-271-060
            </div>

            <div class=\"py-1\">
                <!--mail-->
                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"20\" height=\"20\" fill=\"currentColor\" class=\"bi bi-envelope-fill\" viewBox=\"0 0 16 16\">
                    <path d=\"M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z\"/>
                </svg>
                biuro@artek.pl
            </div>
        </div>
        <div class=\"col-sm-12 col-md-4 text-center\">
            <div class=\"py-1\">
                <!--strona internetowa-->
                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"20\" height=\"20\" fill=\"currentColor\" class=\"bi bi-globe\" viewBox=\"0 0 16 16\">
                    <path d=\"M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm7.5-6.923c-.67.204-1.335.82-1.887 1.855A7.97 7.97 0 0 0 5.145 4H7.5V1.077zM4.09 4a9.267 9.267 0 0 1 .64-1.539 6.7 6.7 0 0 1 .597-.933A7.025 7.025 0 0 0 2.255 4H4.09zm-.582 3.5c.03-.877.138-1.718.312-2.5H1.674a6.958 6.958 0 0 0-.656 2.5h2.49zM4.847 5a12.5 12.5 0 0 0-.338 2.5H7.5V5H4.847zM8.5 5v2.5h2.99a12.495 12.495 0 0 0-.337-2.5H8.5zM4.51 8.5a12.5 12.5 0 0 0 .337 2.5H7.5V8.5H4.51zm3.99 0V11h2.653c.187-.765.306-1.608.338-2.5H8.5zM5.145 12c.138.386.295.744.468 1.068.552 1.035 1.218 1.65 1.887 1.855V12H5.145zm.182 2.472a6.696 6.696 0 0 1-.597-.933A9.268 9.268 0 0 1 4.09 12H2.255a7.024 7.024 0 0 0 3.072 2.472zM3.82 11a13.652 13.652 0 0 1-.312-2.5h-2.49c.062.89.291 1.733.656 2.5H3.82zm6.853 3.472A7.024 7.024 0 0 0 13.745 12H11.91a9.27 9.27 0 0 1-.64 1.539 6.688 6.688 0 0 1-.597.933zM8.5 12v2.923c.67-.204 1.335-.82 1.887-1.855.173-.324.33-.682.468-1.068H8.5zm3.68-1h2.146c.365-.767.594-1.61.656-2.5h-2.49a13.65 13.65 0 0 1-.312 2.5zm2.802-3.5a6.959 6.959 0 0 0-.656-2.5H12.18c.174.782.282 1.623.312 2.5h2.49zM11.27 2.461c.247.464.462.98.64 1.539h1.835a7.024 7.024 0 0 0-3.072-2.472c.218.284.418.598.597.933zM10.855 4a7.966 7.966 0 0 0-.468-1.068C9.835 1.897 9.17 1.282 8.5 1.077V4h2.355z\"/>
                </svg>
                www.artek.com.pl
            </div>
            <div class=\"py-1\">
                <!--adres-->
                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"20\" height=\"20\" fill=\"currentColor\" class=\"bi bi-geo-alt-fill\" viewBox=\"0 0 16 16\">
                    <path d=\"M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z\"/>
                </svg>
                Nowe Krąplewice 19 86-130
            </div>
        </div>
        <div class=\"col-md-4 text-center pt-4\">
            This is Website of a woodworking brand located in Poland.
        </div>
    </div>
    <div class=\"d2 text-center font-monospace m-0\">
        Designed & Developed by Wojciech Prusaczyk
    </div>

</footer>
</body>
</html
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 58
    public function block_paralax($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "paralax"));

        // line 59
        echo "
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 61
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 62
        echo "
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  231 => 62,  224 => 61,  216 => 59,  209 => 58,  148 => 80,  142 => 77,  136 => 74,  124 => 64,  121 => 61,  119 => 58,  109 => 51,  99 => 44,  89 => 37,  82 => 33,  57 => 11,  51 => 8,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"pl-PL\">

<head>
    <title>Drewno Artek</title>
    <meta name=\"description\" content=\"Tworzymy najlepszej jakości wyroby drewniane w okolicy! Zapraszamy do kontaku z nami. Adres: Nowe Krąplewice 19 86-130. Kontakt: (+48)791-271-060.\">

    <link rel=\"stylesheet\" href=\"{{ asset('build/app.css') }}\">
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3\" crossorigin=\"anonymous\">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('logo/logo.png') }}\">
    <meta charset=\"utf-8\">
    <meta name=\"google-site-verification\" content=\"4tNYNgBSglbHdi6VHHmjfnTKV9CbXENbJlgKA1BZJSA\" />
    <script>
        function onFocusText(ft, text){
            if(ft.value === text){
                ft.value = \"\";
                ft.style.color = 'black';
            }
        }
        function onLostFocus(ft, text){
            if(ft.value === \"\"){
                ft.value = text;
                ft.style.color = 'grey';
            }
        }
    </script>
</head>
<body>
<nav class=\"row m-0\">
    <div class=\"row fw-bold m-0\">
        <div class=\"col-md-12 col-xl-3\">
            <img src=\"{{ asset('logo/logoBezTla.png') }}\" alt=\"Logo\" class=\"d-block p-0 mx-auto\" style=\"height: 170px;\">
        </div>
        <div class=\"col-sm-12 col-md-4 col-xl-3 pt-3\">
            <div class=\"pt-4 headerButton mx-auto\">
                <a href=\"{{ path('main_page') }}\" class=\"d-block text-center p-4\">
                    Strona główna
                </a>
            </div>
        </div>
        <div class=\"col-sm-12 col-md-4 col-xl-3 pt-3\">
            <div class=\"pt-4 headerButton\">
                <a href=\"{{ path('realizations') }}\" class=\"d-block text-center p-4 mx-auto\">
                    Realizacje
                </a>
            </div>
        </div>
        <div class=\"col-sm-12 col-md-4 col-xl-3 pt-3 pb-3\">
            <div class=\"pt-4 headerButton mx-auto\">
                <a href=\"{{ path('contact') }}\" class=\"d-block text-center p-4\">
                    Kontakt
                </a>
            </div>
        </div>
    </div>
</nav>
    {% block paralax %}

    {% endblock %}
    {% block main %}

    {% endblock %}

<!----------Stopka------------>

<footer class=\"w-100 row d-block m-0 p-0\">
    <div class=\"d0 text-center col m-0\">
        <div class=\"pt-1 fw-bold\">
            Odnośniki:
        </div>
        <div class=\"row pt-2 m-0\">
            <li class=\"pt-3 col-md-3 col-sm-6\">
                <a href=\"{{ path('main_page') }}\">Strona główna</a>
            </li>
            <li class=\"pt-3 col-md-3 col-sm-6\">
                <a href=\"{{ path('realizations') }}\">Realizacje</a>
            </li>
            <li class=\"pt-3 col-md-3 col-sm-6\">
                <a href=\"{{ path('contact') }}\">Kontakt</a>
            </li>
            <li class=\"pt-3 col-md-3 col-sm-6\">
                <a href=\"https://github.com/WojciechPrusaczyk\">Twórca Strony</a>
            </li>
        </div>
    </div>
    <div class=\"d1 row p-5 fw-bold m-0\">
        <div class=\"col-sm-12 col-md-4 text-center\">
            <div class=\"py-1\">
                <!--telefon-->
                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"20\" height=\"20\" fill=\"currentColor\" class=\"bi bi-phone\" viewBox=\"0 0 16 16\">
                    <path d=\"M11 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h6zM5 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H5z\"/>
                    <path d=\"M8 14a1 1 0 1 0 0-2 1 1 0 0 0 0 2z\"/>
                </svg>
                (+48)791-271-060
            </div>

            <div class=\"py-1\">
                <!--mail-->
                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"20\" height=\"20\" fill=\"currentColor\" class=\"bi bi-envelope-fill\" viewBox=\"0 0 16 16\">
                    <path d=\"M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z\"/>
                </svg>
                biuro@artek.pl
            </div>
        </div>
        <div class=\"col-sm-12 col-md-4 text-center\">
            <div class=\"py-1\">
                <!--strona internetowa-->
                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"20\" height=\"20\" fill=\"currentColor\" class=\"bi bi-globe\" viewBox=\"0 0 16 16\">
                    <path d=\"M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm7.5-6.923c-.67.204-1.335.82-1.887 1.855A7.97 7.97 0 0 0 5.145 4H7.5V1.077zM4.09 4a9.267 9.267 0 0 1 .64-1.539 6.7 6.7 0 0 1 .597-.933A7.025 7.025 0 0 0 2.255 4H4.09zm-.582 3.5c.03-.877.138-1.718.312-2.5H1.674a6.958 6.958 0 0 0-.656 2.5h2.49zM4.847 5a12.5 12.5 0 0 0-.338 2.5H7.5V5H4.847zM8.5 5v2.5h2.99a12.495 12.495 0 0 0-.337-2.5H8.5zM4.51 8.5a12.5 12.5 0 0 0 .337 2.5H7.5V8.5H4.51zm3.99 0V11h2.653c.187-.765.306-1.608.338-2.5H8.5zM5.145 12c.138.386.295.744.468 1.068.552 1.035 1.218 1.65 1.887 1.855V12H5.145zm.182 2.472a6.696 6.696 0 0 1-.597-.933A9.268 9.268 0 0 1 4.09 12H2.255a7.024 7.024 0 0 0 3.072 2.472zM3.82 11a13.652 13.652 0 0 1-.312-2.5h-2.49c.062.89.291 1.733.656 2.5H3.82zm6.853 3.472A7.024 7.024 0 0 0 13.745 12H11.91a9.27 9.27 0 0 1-.64 1.539 6.688 6.688 0 0 1-.597.933zM8.5 12v2.923c.67-.204 1.335-.82 1.887-1.855.173-.324.33-.682.468-1.068H8.5zm3.68-1h2.146c.365-.767.594-1.61.656-2.5h-2.49a13.65 13.65 0 0 1-.312 2.5zm2.802-3.5a6.959 6.959 0 0 0-.656-2.5H12.18c.174.782.282 1.623.312 2.5h2.49zM11.27 2.461c.247.464.462.98.64 1.539h1.835a7.024 7.024 0 0 0-3.072-2.472c.218.284.418.598.597.933zM10.855 4a7.966 7.966 0 0 0-.468-1.068C9.835 1.897 9.17 1.282 8.5 1.077V4h2.355z\"/>
                </svg>
                www.artek.com.pl
            </div>
            <div class=\"py-1\">
                <!--adres-->
                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"20\" height=\"20\" fill=\"currentColor\" class=\"bi bi-geo-alt-fill\" viewBox=\"0 0 16 16\">
                    <path d=\"M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z\"/>
                </svg>
                Nowe Krąplewice 19 86-130
            </div>
        </div>
        <div class=\"col-md-4 text-center pt-4\">
            This is Website of a woodworking brand located in Poland.
        </div>
    </div>
    <div class=\"d2 text-center font-monospace m-0\">
        Designed & Developed by Wojciech Prusaczyk
    </div>

</footer>
</body>
</html
", "base.html.twig", "C:\\Users\\Wojtek\\Desktop\\Coding\\ArtekWebpage\\templates\\base.html.twig");
    }
}
