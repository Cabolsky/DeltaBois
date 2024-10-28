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

/* _partials/comment.html.twig */
class __TwigTemplate_45eb54669116ae13bb78d90c94ddb1ed extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_partials/comment.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_partials/comment.html.twig"));

        // line 1
        yield "    <!-- C O M M E N T - H E A D E R -->
    <section id=\"comment-header\">
        <div id=\"comment-slider\" class=\"carousel slide d-md-none\" data-bs-ride=\"carousel\">
            <div class=\"carousel-inner my-4\">
                <div class=\"carousel-item active\">
                    <div class=\"col-12\">
                        <div class=\"containt-title\">
                            <div class=\"icon-bg\">
                                <i class=\"fa-solid fa-tree\"></i>
                            </div>
                            <h1 class=\"title-comment\">";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["commentaire1"]) || array_key_exists("commentaire1", $context) ? $context["commentaire1"] : (function () { throw new RuntimeError('Variable "commentaire1" does not exist.', 11, $this->source); })()), "title", [], "any", false, false, false, 11), "html", null, true);
        yield "</h1>
                        </div>
                        <p class=\"p-comment col-9 mx-auto\">";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["commentaire1"]) || array_key_exists("commentaire1", $context) ? $context["commentaire1"] : (function () { throw new RuntimeError('Variable "commentaire1" does not exist.', 13, $this->source); })()), "text", [], "any", false, false, false, 13), "html", null, true);
        yield "</p>
                    </div>
                </div>
                <div class=\"carousel-item\">
                    <div class=\"col-12\">
                        <div class=\"containt-title\">
                            <div class=\"icon-bg\">
                                <i class=\"fa-solid fa-people-group\"></i>
                            </div>
                            <h1 class=\"title-comment\">";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["commentaire2"]) || array_key_exists("commentaire2", $context) ? $context["commentaire2"] : (function () { throw new RuntimeError('Variable "commentaire2" does not exist.', 22, $this->source); })()), "title", [], "any", false, false, false, 22), "html", null, true);
        yield "</h1>
                        </div>
                        <p class=\"p-comment col-9 mx-auto\">";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["commentaire2"]) || array_key_exists("commentaire2", $context) ? $context["commentaire2"] : (function () { throw new RuntimeError('Variable "commentaire2" does not exist.', 24, $this->source); })()), "text", [], "any", false, false, false, 24), "html", null, true);
        yield "</p>
                    </div>
                </div>
                <div class=\"carousel-item\">
                    <div class=\"col-12\">
                        <div class=\"containt-title\">
                            <div class=\"icon-bg\">
                                <i class=\"fa-solid fa-truck\"></i>
                            </div>
                            <h1 class=\"title-comment\">";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["commentaire3"]) || array_key_exists("commentaire3", $context) ? $context["commentaire3"] : (function () { throw new RuntimeError('Variable "commentaire3" does not exist.', 33, $this->source); })()), "title", [], "any", false, false, false, 33), "html", null, true);
        yield "</h1>
                        </div>
                        <p class=\"p-comment col-9 mx-auto\">";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["commentaire3"]) || array_key_exists("commentaire3", $context) ? $context["commentaire3"] : (function () { throw new RuntimeError('Variable "commentaire3" does not exist.', 35, $this->source); })()), "text", [], "any", false, false, false, 35), "html", null, true);
        yield "</p>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"row col-11 mx-auto d-none d-md-flex mt-md-5\">
            <div class=\"col-12 col-md-4\">
                <div class=\"containt-title\">
                    <div class=\"icon-bg\">
                        <i class=\"fa-solid fa-tree\"></i>
                    </div>
                    <h1 class=\"title-comment\">";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["commentaire1"]) || array_key_exists("commentaire1", $context) ? $context["commentaire1"] : (function () { throw new RuntimeError('Variable "commentaire1" does not exist.', 46, $this->source); })()), "title", [], "any", false, false, false, 46), "html", null, true);
        yield "</h1>
                </div>
                <p class=\"p-comment col-12 col-md-10 mx-auto\">";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["commentaire1"]) || array_key_exists("commentaire1", $context) ? $context["commentaire1"] : (function () { throw new RuntimeError('Variable "commentaire1" does not exist.', 48, $this->source); })()), "text", [], "any", false, false, false, 48), "html", null, true);
        yield "</p>
            </div>
            <div class=\"col-12 col-md-4\">
                <div class=\"containt-title\">
                    <div class=\"icon-bg\">
                        <i class=\"fa-solid fa-people-group\"></i>
                    </div>
                    <h1 class=\"title-comment\">";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["commentaire2"]) || array_key_exists("commentaire2", $context) ? $context["commentaire2"] : (function () { throw new RuntimeError('Variable "commentaire2" does not exist.', 55, $this->source); })()), "title", [], "any", false, false, false, 55), "html", null, true);
        yield "</h1>
                </div>
                <p class=\"p-comment col-12 col-md-10 mx-auto\">L";
        // line 57
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["commentaire2"]) || array_key_exists("commentaire2", $context) ? $context["commentaire2"] : (function () { throw new RuntimeError('Variable "commentaire2" does not exist.', 57, $this->source); })()), "text", [], "any", false, false, false, 57), "html", null, true);
        yield "</p>
            </div>
            <div class=\"col-12 col-md-4\">
                <div class=\"containt-title\">
                    <div class=\"icon-bg\">
                        <i class=\"fa-solid fa-truck\"></i>
                    </div>
                    <h1 class=\"title-comment\">";
        // line 64
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["commentaire3"]) || array_key_exists("commentaire3", $context) ? $context["commentaire3"] : (function () { throw new RuntimeError('Variable "commentaire3" does not exist.', 64, $this->source); })()), "title", [], "any", false, false, false, 64), "html", null, true);
        yield "</h1>
                </div>
                <p class=\"p-comment col-12 col-md-10 mx-auto\">";
        // line 66
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["commentaire3"]) || array_key_exists("commentaire3", $context) ? $context["commentaire3"] : (function () { throw new RuntimeError('Variable "commentaire3" does not exist.', 66, $this->source); })()), "text", [], "any", false, false, false, 66), "html", null, true);
        yield "</p>
            </div>
        </div>
    </section>
    <!-- C O M M E N T - H E A D E R -->";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "_partials/comment.html.twig";
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
        return array (  148 => 66,  143 => 64,  133 => 57,  128 => 55,  118 => 48,  113 => 46,  99 => 35,  94 => 33,  82 => 24,  77 => 22,  65 => 13,  60 => 11,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("    <!-- C O M M E N T - H E A D E R -->
    <section id=\"comment-header\">
        <div id=\"comment-slider\" class=\"carousel slide d-md-none\" data-bs-ride=\"carousel\">
            <div class=\"carousel-inner my-4\">
                <div class=\"carousel-item active\">
                    <div class=\"col-12\">
                        <div class=\"containt-title\">
                            <div class=\"icon-bg\">
                                <i class=\"fa-solid fa-tree\"></i>
                            </div>
                            <h1 class=\"title-comment\">{{ commentaire1.title }}</h1>
                        </div>
                        <p class=\"p-comment col-9 mx-auto\">{{ commentaire1.text }}</p>
                    </div>
                </div>
                <div class=\"carousel-item\">
                    <div class=\"col-12\">
                        <div class=\"containt-title\">
                            <div class=\"icon-bg\">
                                <i class=\"fa-solid fa-people-group\"></i>
                            </div>
                            <h1 class=\"title-comment\">{{ commentaire2.title }}</h1>
                        </div>
                        <p class=\"p-comment col-9 mx-auto\">{{ commentaire2.text }}</p>
                    </div>
                </div>
                <div class=\"carousel-item\">
                    <div class=\"col-12\">
                        <div class=\"containt-title\">
                            <div class=\"icon-bg\">
                                <i class=\"fa-solid fa-truck\"></i>
                            </div>
                            <h1 class=\"title-comment\">{{ commentaire3.title }}</h1>
                        </div>
                        <p class=\"p-comment col-9 mx-auto\">{{ commentaire3.text }}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"row col-11 mx-auto d-none d-md-flex mt-md-5\">
            <div class=\"col-12 col-md-4\">
                <div class=\"containt-title\">
                    <div class=\"icon-bg\">
                        <i class=\"fa-solid fa-tree\"></i>
                    </div>
                    <h1 class=\"title-comment\">{{ commentaire1.title }}</h1>
                </div>
                <p class=\"p-comment col-12 col-md-10 mx-auto\">{{ commentaire1.text }}</p>
            </div>
            <div class=\"col-12 col-md-4\">
                <div class=\"containt-title\">
                    <div class=\"icon-bg\">
                        <i class=\"fa-solid fa-people-group\"></i>
                    </div>
                    <h1 class=\"title-comment\">{{ commentaire2.title }}</h1>
                </div>
                <p class=\"p-comment col-12 col-md-10 mx-auto\">L{{ commentaire2.text }}</p>
            </div>
            <div class=\"col-12 col-md-4\">
                <div class=\"containt-title\">
                    <div class=\"icon-bg\">
                        <i class=\"fa-solid fa-truck\"></i>
                    </div>
                    <h1 class=\"title-comment\">{{ commentaire3.title }}</h1>
                </div>
                <p class=\"p-comment col-12 col-md-10 mx-auto\">{{ commentaire3.text }}</p>
            </div>
        </div>
    </section>
    <!-- C O M M E N T - H E A D E R -->", "_partials/comment.html.twig", "C:\\laragon\\www\\DeltaBois\\templates\\_partials\\comment.html.twig");
    }
}
