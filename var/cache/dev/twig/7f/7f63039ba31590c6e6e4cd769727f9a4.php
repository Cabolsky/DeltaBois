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

/* partials/cards.html.twig */
class __TwigTemplate_f79d9cdc4e186bc760f4f628242147a9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/cards.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/cards.html.twig"));

        // line 1
        yield "    <!-- C A R D S - P R O D U I T S -->
    <section id=\"cards\">
        <div class=\"container-fluid mt-md-0\">
            <div class=\"row col-md-10 mx-auto space-cards\">
                <div class=\"col-md-4\">
                    <div class=\"card\">
                        <img src=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/cards-1.jpg"), "html", null, true);
        yield "\" alt=\"Lasure Protection du Bois\" class=\"card-img-top\">
                        <div class=\"containt-text col-md-12\">
                            <div class=\"containt-title mt-md-5\">
                                <div class=\"icon-bg\">
                                    <i class=\"fa-solid fa-star\"></i>
                                </div>
                                <h1 class=\"title-text\">LOREM ISPUM ESTAS</h1>
                            </div>
                            <p class=\"p-text col-6 col-md-8 mx-auto\">Lorem ipsum dolor sit amet, consectetur adipiscing 
                                elit. Sed do eiusmod tempor incididunt.
                            </p>
                            <button class=\"card-button\">DÉCOUVRIR</button>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-4\">
                    <div class=\"card\">
                        <img src=\"";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/cards-2.jpg"), "html", null, true);
        yield "\" alt=\"Lasure Protection du Bois\" class=\"card-img-top\">
                        <div class=\"containt-text col-md-12\">
                            <div class=\"containt-title mt-md-5\">
                                <div class=\"icon-bg\">
                                    <i class=\"fa-solid fa-star\"></i>
                                </div>
                                <h1 class=\"title-text\">LOREM ISPUM ESTAS</h1>
                            </div>
                            <p class=\"p-text col-6 col-md-8 mx-auto\">Lorem ipsum dolor sit amet, consectetur adipiscing 
                                elit. Sed do eiusmod tempor incididunt ut.
                            </p>
                            <button class=\"card-button\">DÉCOUVRIR</button>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-4\">
                    <div class=\"card\">
                        <img src=\"";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/cards-3.jpg"), "html", null, true);
        yield "\" alt=\"Lasure Protection du Bois\" class=\"card-img-top\">
                        <div class=\"containt-text col-md-12\">
                            <div class=\"containt-title mt-md-5\">
                                <div class=\"icon-bg\">
                                    <i class=\"fa-solid fa-star\"></i>
                                </div>
                                <h1 class=\"title-text\">LOREM ISPUM ESTAS</h1>
                            </div>
                            <p class=\"p-text col-6 col-md-8 mx-auto\">Lorem ipsum dolor sit amet, consectetur adipiscing 
                                elit. Sed do eiusmod tempor incididunt ut.
                            </p>
                            <button class=\"card-button\">DÉCOUVRIR</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row col-md-10 mx-auto space-cards\">
                <div class=\"col-md-4\">
                    <div class=\"card\">
                        <img src=\"";
        // line 60
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/cards-4.jpg"), "html", null, true);
        yield "\" alt=\"Lasure Protection du Bois\" class=\"card-img-top\">
                        <div class=\"containt-text col-md-12\">
                            <div class=\"containt-title mt-md-5\">
                                <div class=\"icon-bg\">
                                    <i class=\"fa-solid fa-star\"></i>
                                </div>
                                <h1 class=\"title-text\">LOREM ISPUM ESTAS</h1>
                            </div>
                            <p class=\"p-text col-6 col-md-8 mx-auto\">Lorem ipsum dolor sit amet, consectetur adipiscing 
                                elit. Sed do eiusmod tempor incididunt ut.
                            </p>
                            <button class=\"card-button\">DÉCOUVRIR</button>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-4\">
                    <div class=\"card\">
                        <img src=\"";
        // line 77
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/cards-5.jpg"), "html", null, true);
        yield "\" alt=\"Lasure Protection du Bois\" class=\"card-img-top\">
                        <div class=\"containt-text col-md-12\">
                            <div class=\"containt-title mt-md-5\">
                                <div class=\"icon-bg\">
                                    <i class=\"fa-solid fa-star\"></i>
                                </div>
                                <h1 class=\"title-text\">LOREM ISPUM ESTAS</h1>
                            </div>
                            <p class=\"p-text col-6 col-md-8 mx-auto\">Lorem ipsum dolor sit amet, consectetur adipiscing 
                                elit. Sed do eiusmod tempor incididunt ut.
                            </p>
                            <button class=\"card-button\">DÉCOUVRIR</button>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-4\">
                    <div class=\"card\">
                        <img src=\"";
        // line 94
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/cards-6.jpg"), "html", null, true);
        yield "\" alt=\"Lasure Protection du Bois\" class=\"card-img-top\">
                        <div class=\"containt-text col-md-12\">
                            <div class=\"containt-title mt-md-5\">
                                <div class=\"icon-bg\">
                                    <i class=\"fa-solid fa-star\"></i>
                                </div>
                                <h1 class=\"title-text\">LOREM ISPUM ESTAS</h1>
                            </div>
                            <p class=\"p-text col-6 col-md-8 mx-auto\">Lorem ipsum dolor sit amet, consectetur adipiscing 
                                elit. Sed do eiusmod tempor incididunt.
                            </p>
                            <button class=\"card-button\">DÉCOUVRIR</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- C A R D S - P R O D U I T S -->";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/cards.html.twig";
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
        return array (  158 => 94,  138 => 77,  118 => 60,  96 => 41,  76 => 24,  56 => 7,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("    <!-- C A R D S - P R O D U I T S -->
    <section id=\"cards\">
        <div class=\"container-fluid mt-md-0\">
            <div class=\"row col-md-10 mx-auto space-cards\">
                <div class=\"col-md-4\">
                    <div class=\"card\">
                        <img src=\"{{ asset('assets/images/cards-1.jpg') }}\" alt=\"Lasure Protection du Bois\" class=\"card-img-top\">
                        <div class=\"containt-text col-md-12\">
                            <div class=\"containt-title mt-md-5\">
                                <div class=\"icon-bg\">
                                    <i class=\"fa-solid fa-star\"></i>
                                </div>
                                <h1 class=\"title-text\">LOREM ISPUM ESTAS</h1>
                            </div>
                            <p class=\"p-text col-6 col-md-8 mx-auto\">Lorem ipsum dolor sit amet, consectetur adipiscing 
                                elit. Sed do eiusmod tempor incididunt.
                            </p>
                            <button class=\"card-button\">DÉCOUVRIR</button>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-4\">
                    <div class=\"card\">
                        <img src=\"{{ asset('assets/images/cards-2.jpg') }}\" alt=\"Lasure Protection du Bois\" class=\"card-img-top\">
                        <div class=\"containt-text col-md-12\">
                            <div class=\"containt-title mt-md-5\">
                                <div class=\"icon-bg\">
                                    <i class=\"fa-solid fa-star\"></i>
                                </div>
                                <h1 class=\"title-text\">LOREM ISPUM ESTAS</h1>
                            </div>
                            <p class=\"p-text col-6 col-md-8 mx-auto\">Lorem ipsum dolor sit amet, consectetur adipiscing 
                                elit. Sed do eiusmod tempor incididunt ut.
                            </p>
                            <button class=\"card-button\">DÉCOUVRIR</button>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-4\">
                    <div class=\"card\">
                        <img src=\"{{ asset('assets/images/cards-3.jpg') }}\" alt=\"Lasure Protection du Bois\" class=\"card-img-top\">
                        <div class=\"containt-text col-md-12\">
                            <div class=\"containt-title mt-md-5\">
                                <div class=\"icon-bg\">
                                    <i class=\"fa-solid fa-star\"></i>
                                </div>
                                <h1 class=\"title-text\">LOREM ISPUM ESTAS</h1>
                            </div>
                            <p class=\"p-text col-6 col-md-8 mx-auto\">Lorem ipsum dolor sit amet, consectetur adipiscing 
                                elit. Sed do eiusmod tempor incididunt ut.
                            </p>
                            <button class=\"card-button\">DÉCOUVRIR</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row col-md-10 mx-auto space-cards\">
                <div class=\"col-md-4\">
                    <div class=\"card\">
                        <img src=\"{{ asset('assets/images/cards-4.jpg') }}\" alt=\"Lasure Protection du Bois\" class=\"card-img-top\">
                        <div class=\"containt-text col-md-12\">
                            <div class=\"containt-title mt-md-5\">
                                <div class=\"icon-bg\">
                                    <i class=\"fa-solid fa-star\"></i>
                                </div>
                                <h1 class=\"title-text\">LOREM ISPUM ESTAS</h1>
                            </div>
                            <p class=\"p-text col-6 col-md-8 mx-auto\">Lorem ipsum dolor sit amet, consectetur adipiscing 
                                elit. Sed do eiusmod tempor incididunt ut.
                            </p>
                            <button class=\"card-button\">DÉCOUVRIR</button>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-4\">
                    <div class=\"card\">
                        <img src=\"{{ asset('assets/images/cards-5.jpg') }}\" alt=\"Lasure Protection du Bois\" class=\"card-img-top\">
                        <div class=\"containt-text col-md-12\">
                            <div class=\"containt-title mt-md-5\">
                                <div class=\"icon-bg\">
                                    <i class=\"fa-solid fa-star\"></i>
                                </div>
                                <h1 class=\"title-text\">LOREM ISPUM ESTAS</h1>
                            </div>
                            <p class=\"p-text col-6 col-md-8 mx-auto\">Lorem ipsum dolor sit amet, consectetur adipiscing 
                                elit. Sed do eiusmod tempor incididunt ut.
                            </p>
                            <button class=\"card-button\">DÉCOUVRIR</button>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-4\">
                    <div class=\"card\">
                        <img src=\"{{ asset('assets/images/cards-6.jpg') }}\" alt=\"Lasure Protection du Bois\" class=\"card-img-top\">
                        <div class=\"containt-text col-md-12\">
                            <div class=\"containt-title mt-md-5\">
                                <div class=\"icon-bg\">
                                    <i class=\"fa-solid fa-star\"></i>
                                </div>
                                <h1 class=\"title-text\">LOREM ISPUM ESTAS</h1>
                            </div>
                            <p class=\"p-text col-6 col-md-8 mx-auto\">Lorem ipsum dolor sit amet, consectetur adipiscing 
                                elit. Sed do eiusmod tempor incididunt.
                            </p>
                            <button class=\"card-button\">DÉCOUVRIR</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- C A R D S - P R O D U I T S -->", "partials/cards.html.twig", "C:\\laragon\\www\\DeltaBois\\templates\\partials\\cards.html.twig");
    }
}
