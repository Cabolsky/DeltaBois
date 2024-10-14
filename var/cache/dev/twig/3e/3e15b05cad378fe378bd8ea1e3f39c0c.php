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

/* contact/index.html.twig */
class __TwigTemplate_b3c242ed50d34049c2a724719d769b9b extends Template
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

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "contact/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Hello ContactController!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        yield "    <!-- N A V B A R -->
    ";
        // line 5
        yield from         $this->loadTemplate("_partials/navbar.html.twig", "contact/index.html.twig", 5)->unwrap()->yield($context);
        yield " 
    <!-- N A V B A R -->


    <!-- P I C T U R E - H E A D E R -->
    <section id=\"picture-header\">
        <div class=\"header-container\">
            <picture>
                <source media=\"(min-width: 768px)\" srcset=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/picture-header-contact.jpg"), "html", null, true);
        yield "\">
                <img class=\"header-image\" src=\"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/picture-1-phone.jpg"), "html", null, true);
        yield "\" alt=\"Header Image\">
            </picture>
        </div>
    </section>
    <!-- P I C T U R E - H E A D E R -->


    <!-- C O M M E N T - H E A D E R -->
    ";
        // line 22
        yield from         $this->loadTemplate("_partials/comment.html.twig", "contact/index.html.twig", 22)->unwrap()->yield($context);
        yield "  
    <!-- C O M M E N T - H E A D E R -->


    <!-- P I C T U R E - R U L E -->
    <section id=\"picture-rule\">
        <div class=\"header-container mt-md-4\">
            <picture>
                <source media=\"(min-width: 768px)\" srcset=\"";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/wood-1.jpg"), "html", null, true);
        yield "\">
                <img class=\"header-image\" src=\"";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/wood-1-phone.jpg"), "html", null, true);
        yield "\" alt=\"Header Image\">
            </picture>
        </div>
    </section>
    <!-- P I C T U R E - R U L E -->


    <!-- P I C T U R E - L E F T -->
    <section id=\"section-left\">
        <div class=\"container-fluid row col-md-10 mx-auto mt-5  mt-md-5\">
            <img src=\"";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/picture-7.jpg"), "html", null, true);
        yield "\" alt=\"Photo du Chateau Lucas II\" class=\"picture-left img-fluid col-md-6 order-md-1 order-1\">
            <div class=\"containt-text col-md-6 order-md-2 order-2\">
                <div class=\"containt-title\">
                    <div class=\"icon-bg\">
                        <i class=\"fa-solid fa-people-group\"></i>
                    </div>
                    <h1 class=\"title-text\">LOREM ISPUM ESTAS</h1>
                </div>
                <p class=\"p-text col-md-10 mx-auto\">Lorem ipsum dolor sit amet, consectetur adipiscing 
                    elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut 
                    enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip 
                    ex ea commodo consequat. Duis aute irure dolor.</p>
                <ul class=\"list-elements col-12\">
                    <li class=\"p-liste\">4 Rue d’Aquitaine ZA de Cramat</li>
                    <li class=\"p-liste\">40140 Soustons</li>
                    <li class=\"p-liste\">0558411670</li>
                    <li class=\"p-liste\">Deltabois40@Orange.fr</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- P I C T U R E - L E F T -->  
     

    <!-- P I C T U R E - R U L E -->
    <section id=\"localisation\">
        <div class=\"col-10 mx-auto mt-5\">
            <img class=\"img-fluid\" src=\"";
        // line 68
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/localisation.png"), "html", null, true);
        yield "\" alt=\"Header Image\">
        </div>
    </section>
    <!-- P I C T U R E - R U L E -->


    <!-- P R E S E N T A T I O N -->
    <section id=\"section-family\">
        <div class=\"container-family col-md-8 mx-auto mt-4 mt-md-5\">
            <div class=\"presentation\">
                <img src=\"";
        // line 78
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/picture-5.jpg"), "html", null, true);
        yield "\" alt=\"Hugo CAZADIEU\" class=\"round-image\">
                <p class=\"p-name my-2 mt-md-3\">
                    <span>J</span>
                    <span>E</span>
                    <span>A</span>
                    <span>N</span>
                    <span>-</span>
                    <span>P</span>
                    <span>I</span>
                    <span>E</span>
                    <span>R</span>
                    <span>E</span>
                    <span> </span>
                    <span class=\"color-name\">C</span>
                    <span class=\"color-name\">A</span>
                    <span class=\"color-name\">Z</span>
                    <span class=\"color-name\">A</span>
                    <span class=\"color-name\">D</span>
                    <span class=\"color-name\">I</span>
                    <span class=\"color-name\">E</span>
                    <span class=\"color-name\">U</span>
                </p>
                <p class=\"p-grade my-0\">PATRON</p>
            </div>
            <div class=\"presentation\">
                <img src=\"";
        // line 103
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/picture-4.jpg"), "html", null, true);
        yield "\" alt=\"Person 2\" class=\"round-image\">
                <p class=\"p-name my-2 mt-md-3\">
                    <span>H</span>
                    <span>U</span>
                    <span>G</span>
                    <span>O</span>
                    <span> </span>
                    <span class=\"color-name\">C</span>
                    <span class=\"color-name\">A</span>
                    <span class=\"color-name\">Z</span>
                    <span class=\"color-name\">A</span>
                    <span class=\"color-name\">D</span>
                    <span class=\"color-name\">I</span>
                    <span class=\"color-name\">E</span>
                    <span class=\"color-name\">U</span>
                </p>
                <p class=\"p-grade my-0\">DIRECTEUR</p>
            </div>
            <div class=\"presentation\">
                <img src=\"";
        // line 122
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/picture-6.jpg"), "html", null, true);
        yield "\" alt=\"Person 3\" class=\"round-image\">
                <p class=\"p-name my-2 mt-md-3\">
                    <span>C</span>
                    <span>H</span>
                    <span>R</span>
                    <span>I</span>
                    <span>S</span>
                    <span>T</span>
                    <span>O</span>
                    <span>P</span>
                    <span>H</span>
                    <span>E</span>
                    <span> </span>
                    <span class=\"color-name\">S</span>
                    <span class=\"color-name\">A</span>
                    <span class=\"color-name\">J</span>
                    <span class=\"color-name\">U</span>
                    <span class=\"color-name\">S</span>
                </p>
                <p class=\"p-grade my-0\">CHAUFFEUR</p>
            </div>
        </div>
    </section>
    <!-- P R E S E N T A T I O N -->
    

    <!-- P I C T U R E - R I G H T -->
    <section id=\"section-right\">
        <div class=\"container-fluid row col-md-10 mx-auto mt-5 mt-md-5\">
            <img src=\"";
        // line 151
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/picture-3.jpg"), "html", null, true);
        yield "\" alt=\"\" class=\"picture-right img-fluid col-md-6 order-md-2 order-1\">
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
            </div>
        </div>
    </section>
    <!-- P I C T U R E - R I G H T -->


    <!-- P I C T U R E - R U L E -->
    <section id=\"picture-rule\">
        <div class=\"header-container mt-md-5\">
            <picture>
                <source media=\"(min-width: 768px)\" srcset=\"";
        // line 176
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/wood-1.jpg"), "html", null, true);
        yield "\">
                <img class=\"header-image\" src=\"";
        // line 177
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/wood-1-phone.jpg"), "html", null, true);
        yield "\" alt=\"Header Image\">
            </picture>
        </div>
    </section>
    <!-- P I C T U R E - R U L E -->


    <!-- C O M M E N T - H E A D E R -->
    ";
        // line 185
        yield from         $this->loadTemplate("_partials/comment.html.twig", "contact/index.html.twig", 185)->unwrap()->yield($context);
        yield "  
    <!-- C O M M E N T - H E A D E R -->
    
    
    <!-- P I C T U R E - H E A D E R -->
    <section id=\"picture-header\">
        <div class=\"header-container mt-3 mt-md-5\">
            <picture>
                <source media=\"(min-width: 768px)\" srcset=\"";
        // line 193
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/picture-header-contact.jpg"), "html", null, true);
        yield "\">
                <img class=\"header-image\" src=\"";
        // line 194
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/picture-1-phone.jpg"), "html", null, true);
        yield "\" alt=\"Header Image\">
            </picture>
        </div>
    </section>
    <!-- P I C T U R E - H E A D E R -->


    <!-- F O O T E R -->
    <section id=\"footer\">
        <footer class=\"navbar navbar-expand-md navbar-light bg-white\">
            <div class=\"container-fluid\">
                <a class=\"navbar-brand\" href=\"#\">  
                </a>
                <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#footerNav\" aria-controls=\"footerNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>
                <div class=\"collapse navbar-collapse\" id=\"footerNav\">
                    <ul class=\"navbar-nav ms-auto\">
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"#\">À PROPOS</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"#\">NOS SERVICES</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"#\">POLITIQUE DE CONFIDENTIALITÉ</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"#\">CONTACT</a>
                        </li>
                    </ul>
                </div>
            </div>
        </footer>
    </section>
    <!-- F O O T E R -->
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "contact/index.html.twig";
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
        return array (  340 => 194,  336 => 193,  325 => 185,  314 => 177,  310 => 176,  282 => 151,  250 => 122,  228 => 103,  200 => 78,  187 => 68,  157 => 41,  144 => 31,  140 => 30,  129 => 22,  118 => 14,  114 => 13,  103 => 5,  100 => 4,  87 => 3,  64 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}Hello ContactController!{% endblock %}
{% block body %}
    <!-- N A V B A R -->
    {% include('_partials/navbar.html.twig') %} 
    <!-- N A V B A R -->


    <!-- P I C T U R E - H E A D E R -->
    <section id=\"picture-header\">
        <div class=\"header-container\">
            <picture>
                <source media=\"(min-width: 768px)\" srcset=\"{{ asset('assets/images/picture-header-contact.jpg') }}\">
                <img class=\"header-image\" src=\"{{ asset('assets/images/picture-1-phone.jpg') }}\" alt=\"Header Image\">
            </picture>
        </div>
    </section>
    <!-- P I C T U R E - H E A D E R -->


    <!-- C O M M E N T - H E A D E R -->
    {% include('_partials/comment.html.twig') %}  
    <!-- C O M M E N T - H E A D E R -->


    <!-- P I C T U R E - R U L E -->
    <section id=\"picture-rule\">
        <div class=\"header-container mt-md-4\">
            <picture>
                <source media=\"(min-width: 768px)\" srcset=\"{{ asset('assets/images/wood-1.jpg') }}\">
                <img class=\"header-image\" src=\"{{ asset('assets/images/wood-1-phone.jpg') }}\" alt=\"Header Image\">
            </picture>
        </div>
    </section>
    <!-- P I C T U R E - R U L E -->


    <!-- P I C T U R E - L E F T -->
    <section id=\"section-left\">
        <div class=\"container-fluid row col-md-10 mx-auto mt-5  mt-md-5\">
            <img src=\"{{ asset('assets/images/picture-7.jpg') }}\" alt=\"Photo du Chateau Lucas II\" class=\"picture-left img-fluid col-md-6 order-md-1 order-1\">
            <div class=\"containt-text col-md-6 order-md-2 order-2\">
                <div class=\"containt-title\">
                    <div class=\"icon-bg\">
                        <i class=\"fa-solid fa-people-group\"></i>
                    </div>
                    <h1 class=\"title-text\">LOREM ISPUM ESTAS</h1>
                </div>
                <p class=\"p-text col-md-10 mx-auto\">Lorem ipsum dolor sit amet, consectetur adipiscing 
                    elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut 
                    enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip 
                    ex ea commodo consequat. Duis aute irure dolor.</p>
                <ul class=\"list-elements col-12\">
                    <li class=\"p-liste\">4 Rue d’Aquitaine ZA de Cramat</li>
                    <li class=\"p-liste\">40140 Soustons</li>
                    <li class=\"p-liste\">0558411670</li>
                    <li class=\"p-liste\">Deltabois40@Orange.fr</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- P I C T U R E - L E F T -->  
     

    <!-- P I C T U R E - R U L E -->
    <section id=\"localisation\">
        <div class=\"col-10 mx-auto mt-5\">
            <img class=\"img-fluid\" src=\"{{ asset('assets/images/localisation.png') }}\" alt=\"Header Image\">
        </div>
    </section>
    <!-- P I C T U R E - R U L E -->


    <!-- P R E S E N T A T I O N -->
    <section id=\"section-family\">
        <div class=\"container-family col-md-8 mx-auto mt-4 mt-md-5\">
            <div class=\"presentation\">
                <img src=\"{{ asset('assets/images/picture-5.jpg') }}\" alt=\"Hugo CAZADIEU\" class=\"round-image\">
                <p class=\"p-name my-2 mt-md-3\">
                    <span>J</span>
                    <span>E</span>
                    <span>A</span>
                    <span>N</span>
                    <span>-</span>
                    <span>P</span>
                    <span>I</span>
                    <span>E</span>
                    <span>R</span>
                    <span>E</span>
                    <span> </span>
                    <span class=\"color-name\">C</span>
                    <span class=\"color-name\">A</span>
                    <span class=\"color-name\">Z</span>
                    <span class=\"color-name\">A</span>
                    <span class=\"color-name\">D</span>
                    <span class=\"color-name\">I</span>
                    <span class=\"color-name\">E</span>
                    <span class=\"color-name\">U</span>
                </p>
                <p class=\"p-grade my-0\">PATRON</p>
            </div>
            <div class=\"presentation\">
                <img src=\"{{ asset('assets/images/picture-4.jpg') }}\" alt=\"Person 2\" class=\"round-image\">
                <p class=\"p-name my-2 mt-md-3\">
                    <span>H</span>
                    <span>U</span>
                    <span>G</span>
                    <span>O</span>
                    <span> </span>
                    <span class=\"color-name\">C</span>
                    <span class=\"color-name\">A</span>
                    <span class=\"color-name\">Z</span>
                    <span class=\"color-name\">A</span>
                    <span class=\"color-name\">D</span>
                    <span class=\"color-name\">I</span>
                    <span class=\"color-name\">E</span>
                    <span class=\"color-name\">U</span>
                </p>
                <p class=\"p-grade my-0\">DIRECTEUR</p>
            </div>
            <div class=\"presentation\">
                <img src=\"{{ asset('assets/images/picture-6.jpg') }}\" alt=\"Person 3\" class=\"round-image\">
                <p class=\"p-name my-2 mt-md-3\">
                    <span>C</span>
                    <span>H</span>
                    <span>R</span>
                    <span>I</span>
                    <span>S</span>
                    <span>T</span>
                    <span>O</span>
                    <span>P</span>
                    <span>H</span>
                    <span>E</span>
                    <span> </span>
                    <span class=\"color-name\">S</span>
                    <span class=\"color-name\">A</span>
                    <span class=\"color-name\">J</span>
                    <span class=\"color-name\">U</span>
                    <span class=\"color-name\">S</span>
                </p>
                <p class=\"p-grade my-0\">CHAUFFEUR</p>
            </div>
        </div>
    </section>
    <!-- P R E S E N T A T I O N -->
    

    <!-- P I C T U R E - R I G H T -->
    <section id=\"section-right\">
        <div class=\"container-fluid row col-md-10 mx-auto mt-5 mt-md-5\">
            <img src=\"{{ asset('assets/images/picture-3.jpg') }}\" alt=\"\" class=\"picture-right img-fluid col-md-6 order-md-2 order-1\">
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
            </div>
        </div>
    </section>
    <!-- P I C T U R E - R I G H T -->


    <!-- P I C T U R E - R U L E -->
    <section id=\"picture-rule\">
        <div class=\"header-container mt-md-5\">
            <picture>
                <source media=\"(min-width: 768px)\" srcset=\"{{ asset('assets/images/wood-1.jpg') }}\">
                <img class=\"header-image\" src=\"{{ asset('assets/images/wood-1-phone.jpg') }}\" alt=\"Header Image\">
            </picture>
        </div>
    </section>
    <!-- P I C T U R E - R U L E -->


    <!-- C O M M E N T - H E A D E R -->
    {% include('_partials/comment.html.twig') %}  
    <!-- C O M M E N T - H E A D E R -->
    
    
    <!-- P I C T U R E - H E A D E R -->
    <section id=\"picture-header\">
        <div class=\"header-container mt-3 mt-md-5\">
            <picture>
                <source media=\"(min-width: 768px)\" srcset=\"{{ asset('assets/images/picture-header-contact.jpg') }}\">
                <img class=\"header-image\" src=\"{{ asset('assets/images/picture-1-phone.jpg') }}\" alt=\"Header Image\">
            </picture>
        </div>
    </section>
    <!-- P I C T U R E - H E A D E R -->


    <!-- F O O T E R -->
    <section id=\"footer\">
        <footer class=\"navbar navbar-expand-md navbar-light bg-white\">
            <div class=\"container-fluid\">
                <a class=\"navbar-brand\" href=\"#\">  
                </a>
                <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#footerNav\" aria-controls=\"footerNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>
                <div class=\"collapse navbar-collapse\" id=\"footerNav\">
                    <ul class=\"navbar-nav ms-auto\">
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"#\">À PROPOS</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"#\">NOS SERVICES</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"#\">POLITIQUE DE CONFIDENTIALITÉ</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"#\">CONTACT</a>
                        </li>
                    </ul>
                </div>
            </div>
        </footer>
    </section>
    <!-- F O O T E R -->
{% endblock %}
", "contact/index.html.twig", "C:\\laragon\\www\\DeltaBois\\templates\\contact\\index.html.twig");
    }
}
