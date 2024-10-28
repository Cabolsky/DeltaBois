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
class __TwigTemplate_c47785781e63bc7768892b955fae7b2f extends Template
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


    <!-- P U B -->
    ";
        // line 10
        yield from         $this->loadTemplate("_partials/pub.html.twig", "produits/index.html.twig", 10)->unwrap()->yield($context);
        yield " 
    <!-- P U B -->


    <!-- P I C T U R E - H E A D E R -->
    <section id=\"picture-header\">
        <div class=\"header-container mt-md-5 mt-0\">
            <picture>
                <source media=\"(min-width: 768px)\" srcset=\"";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/picture-1.jpg"), "html", null, true);
        yield "\">
                <img class=\"header-image\" src=\"";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/picture-1-phone.jpg"), "html", null, true);
        yield "\" alt=\"Header Image\">
            </picture>
            <img class=\"logo-flou\" src=\"";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo-flou.png"), "html", null, true);
        yield "\" alt=\"Logo Flou\">
        </div>
    </section>
    <!-- P I C T U R E - H E A D E R -->


    <!-- C O M M E N T - H E A D E R -->
    ";
        // line 28
        yield from         $this->loadTemplate("_partials/comment.html.twig", "produits/index.html.twig", 28)->unwrap()->yield($context);
        yield "    
    <!-- C O M M E N T - H E A D E R -->


    <!-- P I C T U R E - R U L E -->
    <section id=\"picture-rule\">
        <div class=\"header-container mt-md-4\">
            <picture>
                <source media=\"(min-width: 768px)\" srcset=\"";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/wood-1.jpg"), "html", null, true);
        yield "\">
                <img class=\"header-image\" src=\"";
        // line 37
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
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/picture-3.jpg"), "html", null, true);
        yield "\" alt=\"\" class=\"picture-right img-fluid col-md-6 order-md-2 order-1\">
            <div class=\"containt-text col-md-6 order-md-1 order-2\">
                <div class=\"containt-title\">
                    <div class=\"icon-bg\">
                        <i class=\"fa-solid fa-tree\"></i>
                    </div>
                    <h1 class=\"title-text\">";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["article5"]) || array_key_exists("article5", $context) ? $context["article5"] : (function () { throw new RuntimeError('Variable "article5" does not exist.', 53, $this->source); })()), "title", [], "any", false, false, false, 53), "html", null, true);
        yield "</h1>
                </div>
                <p class=\"p-text col-md-10\">";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["article5"]) || array_key_exists("article5", $context) ? $context["article5"] : (function () { throw new RuntimeError('Variable "article5" does not exist.', 55, $this->source); })()), "text", [], "any", false, false, false, 55), "html", null, true);
        yield "</p>
            </div>
        </div>
    </section>
    <!-- P I C T U R E - R I G H T -->


    <!-- C A R D S - P R O D U I T S -->
   ";
        // line 63
        yield from         $this->loadTemplate("_partials/cards.html.twig", "produits/index.html.twig", 63)->unwrap()->yield($context);
        yield " 
    <!-- C A R D S - P R O D U I T S -->

    <!-- P I C T U R E - R U L E -->
    <section id=\"picture-rule\">
        <div class=\"header-container mt-md-4\">
            <picture>
                <source media=\"(min-width: 768px)\" srcset=\"";
        // line 70
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/wood-1.jpg"), "html", null, true);
        yield "\">
                <img class=\"header-image\" src=\"";
        // line 71
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
        // line 81
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/picture-9.jpg"), "html", null, true);
        yield "\" alt=\"\" class=\"picture-right img-fluid col-md-6 order-md-2 order-1\">
            <div class=\"containt-text col-md-6 order-md-1 order-2\">
                <div class=\"containt-title\">
                    <div class=\"icon-bg\">
                        <i class=\"fa-solid fa-tree\"></i>
                    </div>
                    <h1 class=\"title-text\">";
        // line 87
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["article6"]) || array_key_exists("article6", $context) ? $context["article6"] : (function () { throw new RuntimeError('Variable "article6" does not exist.', 87, $this->source); })()), "title", [], "any", false, false, false, 87), "html", null, true);
        yield "</h1>
                </div>
                <p class=\"p-text col-md-10\">";
        // line 89
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["article6"]) || array_key_exists("article6", $context) ? $context["article6"] : (function () { throw new RuntimeError('Variable "article6" does not exist.', 89, $this->source); })()), "text", [], "any", false, false, false, 89), "html", null, true);
        yield "
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
        // line 101
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/picture-10.jpg"), "html", null, true);
        yield "\" alt=\"Avant\" class=\"img-fluid\">
                <div class=\"containt-title mt-md-2 mt-3\">
                    <div class=\"icon-bg\">
                        <i class=\"fa-solid fa-star\"></i>
                    </div>
                    <h1 class=\"title-text\">AVANT</h1>
                </div>
            </div>
            <div class=\"col-md-6 text-center mt-3 mt-md-0\">
                <img src=\"";
        // line 110
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/picture-11.jpg"), "html", null, true);
        yield "\" alt=\"Après\" class=\"img-fluid\">
                <div class=\"containt-title mt-md-2 mt-3\">
                    <div class=\"icon-bg\">
                        <i class=\"fa-solid fa-star\"></i>
                    </div>
                    <h1 class=\"title-text\">APRÉS</h1>
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
        // line 127
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/wood-1.jpg"), "html", null, true);
        yield "\">
                <img class=\"header-image\" src=\"";
        // line 128
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/wood-1-phone.jpg"), "html", null, true);
        yield "\" alt=\"Header Image\">
            </picture>
        </div>
    </section>
    <!-- P I C T U R E - R U L E -->


    <!-- C O M M E N T - H E A D E R -->
    ";
        // line 136
        yield from         $this->loadTemplate("_partials/comment.html.twig", "produits/index.html.twig", 136)->unwrap()->yield($context);
        yield " 
    <!-- C O M M E N T - H E A D E R -->
    
    
    <!-- P I C T U R E - H E A D E R -->
    <section id=\"picture-header\">
        <div class=\"header-container\">
            <picture>
                <source media=\"(min-width: 768px)\" srcset=\"";
        // line 144
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/picture-1.jpg"), "html", null, true);
        yield "\">
                <img class=\"header-image\" src=\"";
        // line 145
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/picture-1-phone.jpg"), "html", null, true);
        yield "\" alt=\"Header Image\">
            </picture>
            <img class=\"logo-flou\" src=\"";
        // line 147
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo-flou.png"), "html", null, true);
        yield "\" alt=\"Logo Flou\">
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
        return array (  317 => 147,  312 => 145,  308 => 144,  297 => 136,  286 => 128,  282 => 127,  262 => 110,  250 => 101,  235 => 89,  230 => 87,  221 => 81,  208 => 71,  204 => 70,  194 => 63,  183 => 55,  178 => 53,  169 => 47,  156 => 37,  152 => 36,  141 => 28,  131 => 21,  126 => 19,  122 => 18,  111 => 10,  103 => 5,  100 => 4,  87 => 3,  64 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}Hello ProduitsController!{% endblock %}
{% block body %}
    <!-- N A V B A R -->
    {% include('_partials/navbar.html.twig') %} 
    <!-- N A V B A R -->


    <!-- P U B -->
    {% include('_partials/pub.html.twig') %} 
    <!-- P U B -->


    <!-- P I C T U R E - H E A D E R -->
    <section id=\"picture-header\">
        <div class=\"header-container mt-md-5 mt-0\">
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
                    <h1 class=\"title-text\">{{ article5.title }}</h1>
                </div>
                <p class=\"p-text col-md-10\">{{ article5.text }}</p>
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
                    <h1 class=\"title-text\">{{ article6.title }}</h1>
                </div>
                <p class=\"p-text col-md-10\">{{ article6.text }}
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
                    <h1 class=\"title-text\">AVANT</h1>
                </div>
            </div>
            <div class=\"col-md-6 text-center mt-3 mt-md-0\">
                <img src=\"{{ asset('assets/images/picture-11.jpg') }}\" alt=\"Après\" class=\"img-fluid\">
                <div class=\"containt-title mt-md-2 mt-3\">
                    <div class=\"icon-bg\">
                        <i class=\"fa-solid fa-star\"></i>
                    </div>
                    <h1 class=\"title-text\">APRÉS</h1>
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
        <div class=\"header-container\">
            <picture>
                <source media=\"(min-width: 768px)\" srcset=\"{{ asset('assets/images/picture-1.jpg') }}\">
                <img class=\"header-image\" src=\"{{ asset('assets/images/picture-1-phone.jpg') }}\" alt=\"Header Image\">
            </picture>
            <img class=\"logo-flou\" src=\"{{ asset('assets/images/logo-flou.png') }}\" alt=\"Logo Flou\">
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
