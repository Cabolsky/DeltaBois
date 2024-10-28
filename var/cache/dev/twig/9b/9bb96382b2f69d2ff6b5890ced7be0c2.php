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
class __TwigTemplate_7c37ee4392b6624b3d725a57531dda77 extends Template
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
        yield "<section id=\"section-produits\">
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
                <h1 class=\"title-text\">";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["article3"]) || array_key_exists("article3", $context) ? $context["article3"] : (function () { throw new RuntimeError('Variable "article3" does not exist.', 9, $this->source); })()), "title", [], "any", false, false, false, 9), "html", null, true);
        yield "</h1>
            </div>
            <p class=\"p-text col-md-10\">";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["article3"]) || array_key_exists("article3", $context) ? $context["article3"] : (function () { throw new RuntimeError('Variable "article3" does not exist.', 11, $this->source); })()), "text", [], "any", false, false, false, 11), "html", null, true);
        yield "</p>
            <div class=\"col-12 row list-produits\">
                <ul class=\"list-elements col-6\">
                    ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 14, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 15
            yield "                        ";
            if (((CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 15) >= 1) && (CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 15) <= 10))) {
                // line 16
                yield "                            <li class=\"p-liste\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "name", [], "any", false, false, false, 16), "html", null, true);
                yield "</li>
                        ";
            }
            // line 18
            yield "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['produit'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        yield "                </ul>
                <ul class=\"list-elements col-6\">
                    ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 21, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 22
            yield "                        ";
            if (((CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 22) >= 11) && (CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 22) <= 20))) {
                // line 23
                yield "                            <li class=\"p-liste\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "name", [], "any", false, false, false, 23), "html", null, true);
                yield "</li>
                        ";
            }
            // line 25
            yield "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['produit'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        yield "                </ul>
            </div>
        </div>
    </div>
</section>
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
        return array (  114 => 26,  108 => 25,  102 => 23,  99 => 22,  95 => 21,  91 => 19,  85 => 18,  79 => 16,  76 => 15,  72 => 14,  66 => 11,  61 => 9,  52 => 3,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<section id=\"section-produits\">
    <div class=\"container-fluid row col-md-10 mx-auto mt-5 mt-md-5\">
        <img src=\"{{ asset('assets/images/picture-8.jpg') }}\" alt=\"\" class=\"picture-produits img-fluid col-md-6 order-md-2 order-1\">
        <div class=\"containt-text col-md-6 order-md-1 order-2\">
            <div class=\"containt-title\">
                <div class=\"icon-bg\">
                    <i class=\"fa-solid fa-people-group\"></i>
                </div>
                <h1 class=\"title-text\">{{ article3.title }}</h1>
            </div>
            <p class=\"p-text col-md-10\">{{ article3.text }}</p>
            <div class=\"col-12 row list-produits\">
                <ul class=\"list-elements col-6\">
                    {% for produit in produits %}
                        {% if produit.id >= 1 and produit.id <= 10 %}
                            <li class=\"p-liste\">{{ produit.name }}</li>
                        {% endif %}
                    {% endfor %}
                </ul>
                <ul class=\"list-elements col-6\">
                    {% for produit in produits %}
                        {% if produit.id >= 11 and produit.id <= 20 %}
                            <li class=\"p-liste\">{{ produit.name }}</li>
                        {% endif %}
                    {% endfor %}
                </ul>
            </div>
        </div>
    </div>
</section>
", "_partials/produits.html.twig", "C:\\laragon\\www\\DeltaBois\\templates\\_partials\\produits.html.twig");
    }
}
