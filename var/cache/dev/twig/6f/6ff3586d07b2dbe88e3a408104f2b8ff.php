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
class __TwigTemplate_15b6087754098fbdf525b38f71b4d25a extends Template
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
                            <h1 class=\"title-comment\">LOREM ISPUM ESTAS</h1>
                        </div>
                        <p class=\"p-comment col-9 mx-auto\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do
                            eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                            enim ad minim veniam, quis nostrud exercitation ullamco laboris
                            nisi ut aliquip ex ea commodo.</p>
                    </div>
                </div>
                <div class=\"carousel-item\">
                    <div class=\"col-12\">
                        <div class=\"containt-title\">
                            <div class=\"icon-bg\">
                                <i class=\"fa-solid fa-people-group\"></i>
                            </div>
                            <h1 class=\"title-comment\">LOREM ISPUM ESTAS</h1>
                        </div>
                        <p class=\"p-comment col-9 mx-auto\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do
                            eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                            enim ad minim veniam, quis nostrud exercitation ullamco laboris
                            nisi ut aliquip ex ea commodo.</p>
                    </div>
                </div>
                <div class=\"carousel-item\">
                    <div class=\"col-12\">
                        <div class=\"containt-title\">
                            <div class=\"icon-bg\">
                                <i class=\"fa-solid fa-truck\"></i>
                            </div>
                            <h1 class=\"title-comment\">LOREM ISPUM ESTAS</h1>
                        </div>
                        <p class=\"p-comment col-9 mx-auto\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do
                            eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                            enim ad minim veniam, quis nostrud exercitation ullamco laboris
                            nisi ut aliquip ex ea commodo.</p>
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
                    <h1 class=\"title-comment\">LOREM ISPUM ESTAS</h1>
                </div>
                <p class=\"p-comment col-12 col-md-10 mx-auto\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do
                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                    enim ad minim veniam, quis nostrud exercitation ullamco laboris
                    nisi ut aliquip ex ea commodo.</p>
            </div>
            <div class=\"col-12 col-md-4\">
                <div class=\"containt-title\">
                    <div class=\"icon-bg\">
                        <i class=\"fa-solid fa-people-group\"></i>
                    </div>
                    <h1 class=\"title-comment\">LOREM ISPUM ESTAS</h1>
                </div>
                <p class=\"p-comment col-12 col-md-10 mx-auto\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do
                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                    enim ad minim veniam, quis nostrud exercitation ullamco laboris
                    nisi ut aliquip ex ea commodo.</p>
            </div>
            <div class=\"col-12 col-md-4\">
                <div class=\"containt-title\">
                    <div class=\"icon-bg\">
                        <i class=\"fa-solid fa-truck\"></i>
                    </div>
                    <h1 class=\"title-comment\">LOREM ISPUM ESTAS</h1>
                </div>
                <p class=\"p-comment col-12 col-md-10 mx-auto\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do
                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                    enim ad minim veniam, quis nostrud exercitation ullamco laboris
                    nisi ut aliquip ex ea commodo.</p>
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
    public function getDebugInfo(): array
    {
        return array (  48 => 1,);
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
                            <h1 class=\"title-comment\">LOREM ISPUM ESTAS</h1>
                        </div>
                        <p class=\"p-comment col-9 mx-auto\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do
                            eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                            enim ad minim veniam, quis nostrud exercitation ullamco laboris
                            nisi ut aliquip ex ea commodo.</p>
                    </div>
                </div>
                <div class=\"carousel-item\">
                    <div class=\"col-12\">
                        <div class=\"containt-title\">
                            <div class=\"icon-bg\">
                                <i class=\"fa-solid fa-people-group\"></i>
                            </div>
                            <h1 class=\"title-comment\">LOREM ISPUM ESTAS</h1>
                        </div>
                        <p class=\"p-comment col-9 mx-auto\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do
                            eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                            enim ad minim veniam, quis nostrud exercitation ullamco laboris
                            nisi ut aliquip ex ea commodo.</p>
                    </div>
                </div>
                <div class=\"carousel-item\">
                    <div class=\"col-12\">
                        <div class=\"containt-title\">
                            <div class=\"icon-bg\">
                                <i class=\"fa-solid fa-truck\"></i>
                            </div>
                            <h1 class=\"title-comment\">LOREM ISPUM ESTAS</h1>
                        </div>
                        <p class=\"p-comment col-9 mx-auto\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do
                            eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                            enim ad minim veniam, quis nostrud exercitation ullamco laboris
                            nisi ut aliquip ex ea commodo.</p>
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
                    <h1 class=\"title-comment\">LOREM ISPUM ESTAS</h1>
                </div>
                <p class=\"p-comment col-12 col-md-10 mx-auto\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do
                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                    enim ad minim veniam, quis nostrud exercitation ullamco laboris
                    nisi ut aliquip ex ea commodo.</p>
            </div>
            <div class=\"col-12 col-md-4\">
                <div class=\"containt-title\">
                    <div class=\"icon-bg\">
                        <i class=\"fa-solid fa-people-group\"></i>
                    </div>
                    <h1 class=\"title-comment\">LOREM ISPUM ESTAS</h1>
                </div>
                <p class=\"p-comment col-12 col-md-10 mx-auto\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do
                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                    enim ad minim veniam, quis nostrud exercitation ullamco laboris
                    nisi ut aliquip ex ea commodo.</p>
            </div>
            <div class=\"col-12 col-md-4\">
                <div class=\"containt-title\">
                    <div class=\"icon-bg\">
                        <i class=\"fa-solid fa-truck\"></i>
                    </div>
                    <h1 class=\"title-comment\">LOREM ISPUM ESTAS</h1>
                </div>
                <p class=\"p-comment col-12 col-md-10 mx-auto\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do
                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                    enim ad minim veniam, quis nostrud exercitation ullamco laboris
                    nisi ut aliquip ex ea commodo.</p>
            </div>
        </div>
    </section>
    <!-- C O M M E N T - H E A D E R -->", "_partials/comment.html.twig", "C:\\laragon\\www\\DeltaBois\\templates\\_partials\\comment.html.twig");
    }
}
