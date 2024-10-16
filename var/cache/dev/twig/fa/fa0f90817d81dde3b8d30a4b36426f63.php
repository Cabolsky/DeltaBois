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

/* produits/index.html.twig */
class __TwigTemplate_ee16bcfdab7b30c64b9b6255019ab2e9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produits/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produits/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "produits/index.html.twig", 1);
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

        yield "Hello ProduitsController!";
        
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
        yield from         $this->loadTemplate("_partials/navbar.html.twig", "produits/index.html.twig", 5)->unwrap()->yield($context);
        yield " 
    <!-- N A V B A R -->


    <!-- P I C T U R E - H E A D E R -->
    <section id=\"picture-header\">
        <div class=\"header-container\">
            <picture>
                <source media=\"(min-width: 768px)\" srcset=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/picture-1.jpg"), "html", null, true);
        yield "\">
                <img class=\"header-image\" src=\"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/picture-1-phone.jpg"), "html", null, true);
        yield "\" alt=\"Header Image\">
            </picture>
            <img class=\"logo-flou\" src=\"";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo-flou.png"), "html", null, true);
        yield "\" alt=\"Logo Flou\">
        </div>
    </section>
    <!-- P I C T U R E - H E A D E R -->


    <!-- C O M M E N T - H E A D E R -->
    ";
        // line 23
        yield from         $this->loadTemplate("_partials/comment.html.twig", "produits/index.html.twig", 23)->unwrap()->yield($context);
        yield "    
    <!-- C O M M E N T - H E A D E R -->


    <!-- P I C T U R E - R U L E -->
    <section id=\"picture-rule\">
        <div class=\"header-container mt-md-4\">
            <picture>
                <source media=\"(min-width: 768px)\" srcset=\"";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/wood-1.jpg"), "html", null, true);
        yield "\">
                <img class=\"header-image\" src=\"";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/wood-1-phone.jpg"), "html", null, true);
        yield "\" alt=\"Header Image\">
            </picture>
        </div>
    </section>
    <!-- P I C T U R E - R U L E -->


    <!-- P I C T U R E - R I G H T -->
    <section id=\"section-right\">
        <div class=\"container-fluid row col-md-10 mx-auto mt-5 mt-md-5\">
            <img src=\"";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/picture-3.jpg"), "html", null, true);
        yield "\" alt=\"\" class=\"picture-right img-fluid col-md-6 order-md-2 order-1\">
            <div class=\"containt-text col-md-6 order-md-1 order-2\">
                <div class=\"containt-title\">
                    <div class=\"icon-bg\">
                        <i class=\"fa-solid fa-tree\"></i>
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


    <!-- C A R D S - P R O D U I T S -->
   ";
        // line 64
        yield from         $this->loadTemplate("_partials/cards.html.twig", "produits/index.html.twig", 64)->unwrap()->yield($context);
        yield " 
    <!-- C A R D S - P R O D U I T S -->

    <!-- P I C T U R E - R U L E -->
    <section id=\"picture-rule\">
        <div class=\"header-container mt-md-4\">
            <picture>
                <source media=\"(min-width: 768px)\" srcset=\"";
        // line 71
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/wood-1.jpg"), "html", null, true);
        yield "\">
                <img class=\"header-image\" src=\"";
        // line 72
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/wood-1-phone.jpg"), "html", null, true);
        yield "\" alt=\"Header Image\">
            </picture>
        </div>
    </section>
    <!-- P I C T U R E - R U L E -->


    <!-- P I C T U R E - R I G H T -->
    <section id=\"section-right\">
        <div class=\"container-fluid row col-md-10 mx-auto mt-5 mt-md-5\">
            <img src=\"";
        // line 82
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/picture-9.jpg"), "html", null, true);
        yield "\" alt=\"\" class=\"picture-right img-fluid col-md-6 order-md-2 order-1\">
            <div class=\"containt-text col-md-6 order-md-1 order-2\">
                <div class=\"containt-title\">
                    <div class=\"icon-bg\">
                        <i class=\"fa-solid fa-tree\"></i>
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


    <!-- A V A N T - A P R E S -->
    <section id=\"avant-apres\">
        <div class=\"container-fluid row col-md-10 mx-auto mt-md-5 mt-1\">
            <div class=\"col-md-6 text-center\">
                <img src=\"";
        // line 107
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/picture-10.jpg"), "html", null, true);
        yield "\" alt=\"Avant\" class=\"img-fluid\">
                <div class=\"containt-title mt-md-2 mt-3\">
                    <div class=\"icon-bg\">
                        <i class=\"fa-solid fa-star\"></i>
                    </div>
                    <h1 class=\"title-text\">LOREM</h1>
                </div>
            </div>
            <div class=\"col-md-6 text-center mt-3 mt-md-0\">
                <img src=\"";
        // line 116
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/picture-11.jpg"), "html", null, true);
        yield "\" alt=\"Après\" class=\"img-fluid\">
                <div class=\"containt-title mt-md-2 mt-3\">
                    <div class=\"icon-bg\">
                        <i class=\"fa-solid fa-star\"></i>
                    </div>
                    <h1 class=\"title-text\">LOREM</h1>
                </div>
            </div>
        </div>
    </section>
    <!-- A V A N T - A P R E S -->
    

    <!-- P I C T U R E - R U L E -->
    <section id=\"picture-rule\">
        <div class=\"header-container mt-md-4\">
            <picture>
                <source media=\"(min-width: 768px)\" srcset=\"";
        // line 133
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/wood-1.jpg"), "html", null, true);
        yield "\">
                <img class=\"header-image\" src=\"";
        // line 134
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/wood-1-phone.jpg"), "html", null, true);
        yield "\" alt=\"Header Image\">
            </picture>
        </div>
    </section>
    <!-- P I C T U R E - R U L E -->


    <!-- C O M M E N T - H E A D E R -->
    ";
        // line 142
        yield from         $this->loadTemplate("_partials/comment.html.twig", "produits/index.html.twig", 142)->unwrap()->yield($context);
        yield " 
    <!-- C O M M E N T - H E A D E R -->
    
    
    <!-- P I C T U R E - H E A D E R -->
    <section id=\"picture-header\">
        <div class=\"header-container mt-3 mt-md-5\">
            <picture>
                <source media=\"(min-width: 768px)\" srcset=\"";
        // line 150
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/picture-1.jpg"), "html", null, true);
        yield "\">
                <img class=\"header-image\" src=\"";
        // line 151
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/picture-1.-phone.jpg"), "html", null, true);
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
        return "produits/index.html.twig";
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
        return array (  303 => 151,  299 => 150,  288 => 142,  277 => 134,  273 => 133,  253 => 116,  241 => 107,  213 => 82,  200 => 72,  196 => 71,  186 => 64,  161 => 42,  148 => 32,  144 => 31,  133 => 23,  123 => 16,  118 => 14,  114 => 13,  103 => 5,  100 => 4,  87 => 3,  64 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}Hello ProduitsController!{% endblock %}
{% block body %}
    <!-- N A V B A R -->
    {% include('_partials/navbar.html.twig') %} 
    <!-- N A V B A R -->


    <!-- P I C T U R E - H E A D E R -->
    <section id=\"picture-header\">
        <div class=\"header-container\">
            <picture>
                <source media=\"(min-width: 768px)\" srcset=\"{{ asset('assets/images/picture-1.jpg') }}\">
                <img class=\"header-image\" src=\"{{ asset('assets/images/picture-1-phone.jpg') }}\" alt=\"Header Image\">
            </picture>
            <img class=\"logo-flou\" src=\"{{ asset('assets/images/logo-flou.png') }}\" alt=\"Logo Flou\">
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


    <!-- P I C T U R E - R I G H T -->
    <section id=\"section-right\">
        <div class=\"container-fluid row col-md-10 mx-auto mt-5 mt-md-5\">
            <img src=\"{{ asset('assets/images/picture-3.jpg') }}\" alt=\"\" class=\"picture-right img-fluid col-md-6 order-md-2 order-1\">
            <div class=\"containt-text col-md-6 order-md-1 order-2\">
                <div class=\"containt-title\">
                    <div class=\"icon-bg\">
                        <i class=\"fa-solid fa-tree\"></i>
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


    <!-- C A R D S - P R O D U I T S -->
   {% include('_partials/cards.html.twig') %} 
    <!-- C A R D S - P R O D U I T S -->

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


    <!-- P I C T U R E - R I G H T -->
    <section id=\"section-right\">
        <div class=\"container-fluid row col-md-10 mx-auto mt-5 mt-md-5\">
            <img src=\"{{ asset('assets/images/picture-9.jpg') }}\" alt=\"\" class=\"picture-right img-fluid col-md-6 order-md-2 order-1\">
            <div class=\"containt-text col-md-6 order-md-1 order-2\">
                <div class=\"containt-title\">
                    <div class=\"icon-bg\">
                        <i class=\"fa-solid fa-tree\"></i>
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


    <!-- A V A N T - A P R E S -->
    <section id=\"avant-apres\">
        <div class=\"container-fluid row col-md-10 mx-auto mt-md-5 mt-1\">
            <div class=\"col-md-6 text-center\">
                <img src=\"{{ asset('assets/images/picture-10.jpg') }}\" alt=\"Avant\" class=\"img-fluid\">
                <div class=\"containt-title mt-md-2 mt-3\">
                    <div class=\"icon-bg\">
                        <i class=\"fa-solid fa-star\"></i>
                    </div>
                    <h1 class=\"title-text\">LOREM</h1>
                </div>
            </div>
            <div class=\"col-md-6 text-center mt-3 mt-md-0\">
                <img src=\"{{ asset('assets/images/picture-11.jpg') }}\" alt=\"Après\" class=\"img-fluid\">
                <div class=\"containt-title mt-md-2 mt-3\">
                    <div class=\"icon-bg\">
                        <i class=\"fa-solid fa-star\"></i>
                    </div>
                    <h1 class=\"title-text\">LOREM</h1>
                </div>
            </div>
        </div>
    </section>
    <!-- A V A N T - A P R E S -->
    

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


    <!-- C O M M E N T - H E A D E R -->
    {% include('_partials/comment.html.twig') %} 
    <!-- C O M M E N T - H E A D E R -->
    
    
    <!-- P I C T U R E - H E A D E R -->
    <section id=\"picture-header\">
        <div class=\"header-container mt-3 mt-md-5\">
            <picture>
                <source media=\"(min-width: 768px)\" srcset=\"{{ asset('assets/images/picture-1.jpg') }}\">
                <img class=\"header-image\" src=\"{{ asset('assets/images/picture-1.-phone.jpg') }}\" alt=\"Header Image\">
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
", "produits/index.html.twig", "C:\\laragon\\www\\DeltaBois\\templates\\produits\\index.html.twig");
    }
}
