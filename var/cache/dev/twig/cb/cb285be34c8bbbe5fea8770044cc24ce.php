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

/* index/index.html.twig */
class __TwigTemplate_c034f30f7291650f86de5ac4e4516a91 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "index/index.html.twig", 1);
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

        yield "ACCUEIL";
        
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
        yield from         $this->loadTemplate("_partials/navbar.html.twig", "index/index.html.twig", 5)->unwrap()->yield($context);
        yield " 
    <!-- N A V B A R -->


    <!-- P U B -->
    ";
        // line 10
        yield from         $this->loadTemplate("_partials/pub.html.twig", "index/index.html.twig", 10)->unwrap()->yield($context);
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
        yield from         $this->loadTemplate("_partials/comment.html.twig", "index/index.html.twig", 28)->unwrap()->yield($context);
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
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/picture-3.jpg"), "html", null, true);
        yield "\" alt=\"\" class=\"picture-right img-fluid col-md-6 order-md-2 order-1\">
            <div class=\"containt-text col-md-6 order-md-1 order-2\">
                <div class=\"containt-title\">
                    <div class=\"icon-bg\">
                        <i class=\"fa-solid fa-tree\"></i>
                    </div>
                    <h1 class=\"title-text\">";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["article1"]) || array_key_exists("article1", $context) ? $context["article1"] : (function () { throw new RuntimeError('Variable "article1" does not exist.', 52, $this->source); })()), "title", [], "any", false, false, false, 52), "html", null, true);
        yield "</h1>
                </div>
                <p class=\"p-text col-md-10\">";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["article1"]) || array_key_exists("article1", $context) ? $context["article1"] : (function () { throw new RuntimeError('Variable "article1" does not exist.', 54, $this->source); })()), "text", [], "any", false, false, false, 54), "html", null, true);
        yield "</p>
            </div>
        </div>
    </section>
    <!-- P I C T U R E - R I G H T -->


    <!-- P R E S E N T A T I O N -->
    <section id=\"section-family\">
        <div class=\"container-family col-md-8 mx-auto mt-4 mt-md-5\">
            <div class=\"presentation\">
                <img src=\"";
        // line 65
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
        // line 90
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
        // line 109
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


    <!-- P I C T U R E - L E F T -->
    <section id=\"section-left\">
        <div class=\"container-fluid row col-md-10 mx-auto mt-5  mt-md-5\">
            <img src=\"";
        // line 138
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/picture-7.jpg"), "html", null, true);
        yield "\" alt=\"Photo du Chateau Lucas II\" class=\"picture-left img-fluid col-md-6 order-md-1 order-1\">
            <div class=\"containt-text col-md-6 order-md-2 order-2\">
                <div class=\"containt-title\">
                    <div class=\"icon-bg\">
                        <i class=\"fa-solid fa-location-dot\"></i>
                    </div>
                    <h1 class=\"title-text\">";
        // line 144
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["article2"]) || array_key_exists("article2", $context) ? $context["article2"] : (function () { throw new RuntimeError('Variable "article2" does not exist.', 144, $this->source); })()), "title", [], "any", false, false, false, 144), "html", null, true);
        yield "</h1>
                </div>
                <p class=\"p-text col-md-10 mx-auto\">";
        // line 146
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["article2"]) || array_key_exists("article2", $context) ? $context["article2"] : (function () { throw new RuntimeError('Variable "article2" does not exist.', 146, $this->source); })()), "text", [], "any", false, false, false, 146), "html", null, true);
        yield "</p>
                <ul class=\"list-elements col-12\">
                    <li class=\"p-liste\">";
        // line 148
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["coordonnees"]) || array_key_exists("coordonnees", $context) ? $context["coordonnees"] : (function () { throw new RuntimeError('Variable "coordonnees" does not exist.', 148, $this->source); })()), "adresse", [], "any", false, false, false, 148), "html", null, true);
        yield "</li>
                    <li class=\"p-liste\">";
        // line 149
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["coordonnees"]) || array_key_exists("coordonnees", $context) ? $context["coordonnees"] : (function () { throw new RuntimeError('Variable "coordonnees" does not exist.', 149, $this->source); })()), "codePostal", [], "any", false, false, false, 149), "html", null, true);
        yield "</li>
                    <li class=\"p-liste\">";
        // line 150
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["coordonnees"]) || array_key_exists("coordonnees", $context) ? $context["coordonnees"] : (function () { throw new RuntimeError('Variable "coordonnees" does not exist.', 150, $this->source); })()), "phone", [], "any", false, false, false, 150), "html", null, true);
        yield "</li>
                    <li class=\"p-liste\">";
        // line 151
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["coordonnees"]) || array_key_exists("coordonnees", $context) ? $context["coordonnees"] : (function () { throw new RuntimeError('Variable "coordonnees" does not exist.', 151, $this->source); })()), "mail", [], "any", false, false, false, 151), "html", null, true);
        yield "</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- P I C T U R E - L E F T -->

    
    <!-- P I C T U R E - R U L E -->
    <section id=\"picture-rule\">
        <div class=\"header-container mt-md-5\">
            <picture>
                <source media=\"(min-width: 768px)\" srcset=\"";
        // line 163
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/wood-1.jpg"), "html", null, true);
        yield "\">
                <img class=\"header-image\" src=\"";
        // line 164
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/wood-1-phone.jpg"), "html", null, true);
        yield "\" alt=\"Header Image\">
            </picture>
        </div>
    </section>
    <!-- P I C T U R E - R U L E -->


    <!-- P I C T U R E - P R O D U I T S -->
    ";
        // line 172
        yield from         $this->loadTemplate("_partials/produits.html.twig", "index/index.html.twig", 172)->unwrap()->yield($context);
        yield "  
    <!-- P I C T U R E - P R O D U I T S -->


    <!-- P I C T U R E - L E F T -->
    <section id=\"section-left\">
        <div class=\"container-fluid row col-md-10 mx-auto mt-5  mt-md-5\">
            <img src=\"";
        // line 179
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/picture-7.jpg"), "html", null, true);
        yield "\" alt=\"Photo du Chateau Lucas II\" class=\"picture-left img-fluid col-md-6 order-md-1 order-1\">
            <div class=\"containt-text col-md-6 order-md-2 order-2\">
                <div class=\"containt-title\">
                    <div class=\"icon-bg\">
                        <i class=\"fa-solid fa-truck\"></i>
                    </div>
                    <h1 class=\"title-text\">";
        // line 185
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["article4"]) || array_key_exists("article4", $context) ? $context["article4"] : (function () { throw new RuntimeError('Variable "article4" does not exist.', 185, $this->source); })()), "title", [], "any", false, false, false, 185), "html", null, true);
        yield "</h1>
                </div>
                <p class=\"p-text col-md-10 mx-auto\">";
        // line 187
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["article4"]) || array_key_exists("article4", $context) ? $context["article4"] : (function () { throw new RuntimeError('Variable "article4" does not exist.', 187, $this->source); })()), "text", [], "any", false, false, false, 187), "html", null, true);
        yield "</p>
                <ul class=\"list-elements col-12\">
                    <li class=\"p-liste\">LANDES</li>
                    <li class=\"p-liste\">PAYS-BASQUE</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- P I C T U R E - L E F T -->


    <!-- P I C T U R E - R U L E -->
    <section id=\"picture-rule\">
        <div class=\"header-container mt-md-5\">
            <picture>
                <source media=\"(min-width: 768px)\" srcset=\"";
        // line 202
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/wood-1.jpg"), "html", null, true);
        yield "\">
                <img class=\"header-image\" src=\"";
        // line 203
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/wood-1-phone.jpg"), "html", null, true);
        yield "\" alt=\"Header Image\">
            </picture>
        </div>
    </section>
    <!-- P I C T U R E - R U L E -->


    <!-- C O M M E N T - H E A D E R -->
    ";
        // line 211
        yield from         $this->loadTemplate("_partials/comment.html.twig", "index/index.html.twig", 211)->unwrap()->yield($context);
        yield " 
    <!-- C O M M E N T - H E A D E R -->
    
    
    <!-- P I C T U R E - H E A D E R -->
    <section id=\"picture-header\">
        <div class=\"header-container\">
            <picture>
                <source media=\"(min-width: 768px)\" srcset=\"";
        // line 219
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/picture-1.jpg"), "html", null, true);
        yield "\">
                <img class=\"header-image\" src=\"";
        // line 220
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/picture-1-phone.jpg"), "html", null, true);
        yield "\" alt=\"Header Image\">
            </picture>
            <img class=\"logo-flou\" src=\"";
        // line 222
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
        return "index/index.html.twig";
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
        return array (  416 => 222,  411 => 220,  407 => 219,  396 => 211,  385 => 203,  381 => 202,  363 => 187,  358 => 185,  349 => 179,  339 => 172,  328 => 164,  324 => 163,  309 => 151,  305 => 150,  301 => 149,  297 => 148,  292 => 146,  287 => 144,  278 => 138,  246 => 109,  224 => 90,  196 => 65,  182 => 54,  177 => 52,  168 => 46,  156 => 37,  152 => 36,  141 => 28,  131 => 21,  126 => 19,  122 => 18,  111 => 10,  103 => 5,  100 => 4,  87 => 3,  64 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}ACCUEIL{% endblock %}
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
                    <h1 class=\"title-text\">{{ article1.title }}</h1>
                </div>
                <p class=\"p-text col-md-10\">{{ article1.text }}</p>
            </div>
        </div>
    </section>
    <!-- P I C T U R E - R I G H T -->


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


    <!-- P I C T U R E - L E F T -->
    <section id=\"section-left\">
        <div class=\"container-fluid row col-md-10 mx-auto mt-5  mt-md-5\">
            <img src=\"{{ asset('assets/images/picture-7.jpg') }}\" alt=\"Photo du Chateau Lucas II\" class=\"picture-left img-fluid col-md-6 order-md-1 order-1\">
            <div class=\"containt-text col-md-6 order-md-2 order-2\">
                <div class=\"containt-title\">
                    <div class=\"icon-bg\">
                        <i class=\"fa-solid fa-location-dot\"></i>
                    </div>
                    <h1 class=\"title-text\">{{ article2.title }}</h1>
                </div>
                <p class=\"p-text col-md-10 mx-auto\">{{ article2.text }}</p>
                <ul class=\"list-elements col-12\">
                    <li class=\"p-liste\">{{ coordonnees.adresse }}</li>
                    <li class=\"p-liste\">{{ coordonnees.codePostal }}</li>
                    <li class=\"p-liste\">{{ coordonnees.phone }}</li>
                    <li class=\"p-liste\">{{ coordonnees.mail }}</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- P I C T U R E - L E F T -->

    
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


    <!-- P I C T U R E - P R O D U I T S -->
    {% include('_partials/produits.html.twig') %}  
    <!-- P I C T U R E - P R O D U I T S -->


    <!-- P I C T U R E - L E F T -->
    <section id=\"section-left\">
        <div class=\"container-fluid row col-md-10 mx-auto mt-5  mt-md-5\">
            <img src=\"{{ asset('assets/images/picture-7.jpg') }}\" alt=\"Photo du Chateau Lucas II\" class=\"picture-left img-fluid col-md-6 order-md-1 order-1\">
            <div class=\"containt-text col-md-6 order-md-2 order-2\">
                <div class=\"containt-title\">
                    <div class=\"icon-bg\">
                        <i class=\"fa-solid fa-truck\"></i>
                    </div>
                    <h1 class=\"title-text\">{{ article4.title }}</h1>
                </div>
                <p class=\"p-text col-md-10 mx-auto\">{{ article4.text }}</p>
                <ul class=\"list-elements col-12\">
                    <li class=\"p-liste\">LANDES</li>
                    <li class=\"p-liste\">PAYS-BASQUE</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- P I C T U R E - L E F T -->


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
", "index/index.html.twig", "C:\\laragon\\www\\DeltaBois\\templates\\index\\index.html.twig");
    }
}
