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

/* _partials/navbar.html.twig */
class __TwigTemplate_4fdd41b6e58aeaf16e5bc4dfec87f710 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_partials/navbar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_partials/navbar.html.twig"));

        // line 1
        yield "<!-- N A V B A R -->
<section id=\"navbar\">
    <nav class=\"navbar navbar-expand-md navbar-light\">
        <div class=\"container-fluid\">
            <a class=\"navbar-brand\" href=\"";
        // line 5
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_index");
        yield "\">
                <img src=\"";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo.png"), "html", null, true);
        yield "\" class=\"logo-nav\" alt=\"Logo\">
            </a>
            <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
            <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
                <ul class=\"navbar-nav ms-auto mt-5 mt-md-0\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" aria-current=\"page\" href=\"";
        // line 14
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_index");
        yield "\">ACCUEIL</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
        // line 17
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produits");
        yield "\">NOS PRODUITS</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
        // line 20
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact");
        yield "\">CONTACT</a>
                    </li>
                </ul>
                <div class=\"containt-flag\">
                    <div class=\"bg-blue\"></div>
                    <div class=\"bg-white\"></div>
                    <div class=\"bg-red\"></div>
                </div>
            </div>
        </div>
    </nav>
</section>
<!-- N A V B A R -->

";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "_partials/navbar.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  81 => 20,  75 => 17,  69 => 14,  58 => 6,  54 => 5,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!-- N A V B A R -->
<section id=\"navbar\">
    <nav class=\"navbar navbar-expand-md navbar-light\">
        <div class=\"container-fluid\">
            <a class=\"navbar-brand\" href=\"{{ path('app_index') }}\">
                <img src=\"{{ asset('assets/images/logo.png') }}\" class=\"logo-nav\" alt=\"Logo\">
            </a>
            <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
            <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
                <ul class=\"navbar-nav ms-auto mt-5 mt-md-0\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" aria-current=\"page\" href=\"{{ path('app_index') }}\">ACCUEIL</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{ path('app_produits') }}\">NOS PRODUITS</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{ path('app_contact') }}\">CONTACT</a>
                    </li>
                </ul>
                <div class=\"containt-flag\">
                    <div class=\"bg-blue\"></div>
                    <div class=\"bg-white\"></div>
                    <div class=\"bg-red\"></div>
                </div>
            </div>
        </div>
    </nav>
</section>
<!-- N A V B A R -->

", "_partials/navbar.html.twig", "C:\\laragon\\www\\DeltaBois\\templates\\_partials\\navbar.html.twig");
    }
}
