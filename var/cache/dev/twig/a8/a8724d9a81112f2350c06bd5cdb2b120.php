<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* partials/navbar.html.twig */
class __TwigTemplate_713c02921e7c9f98de220dd2475a737c extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/navbar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/navbar.html.twig"));

        // line 1
        yield "    <!-- N A V B A R -->
    <section id=\"navbar\">
        <nav class=\"navbar navbar-expand-md navbar-light bg-white\">
            <div class=\"container-fluid\">
                <a class=\"navbar-brand\" href=\"#\">   
                </a>
                <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>
                <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
                    <ul class=\"navbar-nav ms-auto\">
                        <li class=\"nav-item\">
                            <a class=\"nav-link active\" aria-current=\"page\" href=\"index.html\">ACCUEIL</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"produits.html\">NOS PRODUITS</a>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"contact.html\">CONTACT</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </section>
    <!-- N A V B A R -->";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/navbar.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("    <!-- N A V B A R -->
    <section id=\"navbar\">
        <nav class=\"navbar navbar-expand-md navbar-light bg-white\">
            <div class=\"container-fluid\">
                <a class=\"navbar-brand\" href=\"#\">   
                </a>
                <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>
                <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
                    <ul class=\"navbar-nav ms-auto\">
                        <li class=\"nav-item\">
                            <a class=\"nav-link active\" aria-current=\"page\" href=\"index.html\">ACCUEIL</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"produits.html\">NOS PRODUITS</a>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"contact.html\">CONTACT</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </section>
    <!-- N A V B A R -->", "partials/navbar.html.twig", "C:\\laragon\\www\\DeltaBois\\templates\\partials\\navbar.html.twig");
    }
}
