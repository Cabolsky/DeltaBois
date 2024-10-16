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

/* _partials/produits.html.twig */
class __TwigTemplate_1c35005d4edb0a2c1c8fa660d164a3a5 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_partials/produits.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_partials/produits.html.twig"));

        // line 1
        yield "    <section id=\"section-produits\">
        <div class=\"container-fluid row col-md-10 mx-auto mt-5 mt-md-5\">
            <img src=\"";
        // line 3
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/picture-8.jpg"), "html", null, true);
        yield "\" alt=\"\" class=\"picture-produits img-fluid col-md-6 order-md-2 order-1\">
            <div class=\"containt-text col-md-6 order-md-1 order-2\">
                <div class=\"containt-title\">
                    <div class=\"icon-bg\">
                        <i class=\"fa-solid fa-people-group\"></i>
                    </div>
                    <h1 class=\"title-text\">LOREM ISPUM ESTAS</h1>
                </div>
                <p class=\"p-text col-md-10\">Lorem ipsum dolor sit amet, consectetur adipiscing 
                    elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut 
                    enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip 
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate 
                    velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat 
                    non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
                    <div class=\"col-12 row list-produits\">
                        <ul class=\"list-elements col-6\">
                            <li class=\"p-liste\">BOIS RONDS</li>
                            <li class=\"p-liste\">BOIS BRUTS DE SCIAGE</li>
                            <li class=\"p-liste\">BOIS RABOTÉS</li>
                            <li class=\"p-liste\">TRAVERSES CHÊNE</li>
                        </ul>
                        <ul class=\"list-elements col-6\">
                            <li class=\"p-liste\">PANNEAUX BRISE-VUE</li>
                            <li class=\"p-liste\">QUINCAILLERIES</li>
                            <li class=\"p-liste\">ENTRETIEN DU BOIS</li>
                            <li class=\"p-liste\">PRODUITS DERIVÉS</li>
                        </ul>
                    </div>
            </div>
        </div>
    </section>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "_partials/produits.html.twig";
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
        return array (  52 => 3,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("    <section id=\"section-produits\">
        <div class=\"container-fluid row col-md-10 mx-auto mt-5 mt-md-5\">
            <img src=\"{{ asset('assets/images/picture-8.jpg') }}\" alt=\"\" class=\"picture-produits img-fluid col-md-6 order-md-2 order-1\">
            <div class=\"containt-text col-md-6 order-md-1 order-2\">
                <div class=\"containt-title\">
                    <div class=\"icon-bg\">
                        <i class=\"fa-solid fa-people-group\"></i>
                    </div>
                    <h1 class=\"title-text\">LOREM ISPUM ESTAS</h1>
                </div>
                <p class=\"p-text col-md-10\">Lorem ipsum dolor sit amet, consectetur adipiscing 
                    elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut 
                    enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip 
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate 
                    velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat 
                    non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
                    <div class=\"col-12 row list-produits\">
                        <ul class=\"list-elements col-6\">
                            <li class=\"p-liste\">BOIS RONDS</li>
                            <li class=\"p-liste\">BOIS BRUTS DE SCIAGE</li>
                            <li class=\"p-liste\">BOIS RABOTÉS</li>
                            <li class=\"p-liste\">TRAVERSES CHÊNE</li>
                        </ul>
                        <ul class=\"list-elements col-6\">
                            <li class=\"p-liste\">PANNEAUX BRISE-VUE</li>
                            <li class=\"p-liste\">QUINCAILLERIES</li>
                            <li class=\"p-liste\">ENTRETIEN DU BOIS</li>
                            <li class=\"p-liste\">PRODUITS DERIVÉS</li>
                        </ul>
                    </div>
            </div>
        </div>
    </section>", "_partials/produits.html.twig", "C:\\laragon\\www\\DeltaBois\\templates\\_partials\\produits.html.twig");
    }
}
