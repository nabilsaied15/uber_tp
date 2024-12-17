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

/* /header/header.html.twig */
class __TwigTemplate_5f2d960a2278ebb5ae06650dc1c0dd5f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/header/header.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/header/header.html.twig"));

        // line 1
        yield "<link rel=\"stylesheet\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/header.css"), "html", null, true);
        yield "\">

<header>
    <div class=\"container\">
        <div class=\"logo\">
            <a href=\"";
        // line 6
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
        yield "\">Uber Nabil Saied </a>
        </div>
        <nav class=\"navbar\">
            <ul>
                <li><a href=\"";
        // line 10
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produit_list");
        yield "\" ";
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 10, $this->source); })()), "request", [], "any", false, false, false, 10), "attributes", [], "any", false, false, false, 10), "get", ["_route"], "method", false, false, false, 10) == "produit_list")) {
            yield "class=\"active\"";
        }
        yield ">Produits</a></li>
                <li><a href=\"";
        // line 11
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_list");
        yield "\" ";
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 11, $this->source); })()), "request", [], "any", false, false, false, 11), "attributes", [], "any", false, false, false, 11), "get", ["_route"], "method", false, false, false, 11) == "user_list")) {
            yield "class=\"active\"";
        }
        yield ">Utilisateurs</a></li>
                <li><a href=\"";
        // line 12
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_commander");
        yield "\" ";
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 12, $this->source); })()), "request", [], "any", false, false, false, 12), "attributes", [], "any", false, false, false, 12), "get", ["_route"], "method", false, false, false, 12) == "app_commander")) {
            yield "class=\"active\"";
        }
        yield ">Les Commandes </a></li>
                <li><a href=\"";
        // line 13
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_livrer");
        yield "\" ";
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 13, $this->source); })()), "request", [], "any", false, false, false, 13), "attributes", [], "any", false, false, false, 13), "get", ["_route"], "method", false, false, false, 13) == "app_livrer")) {
            yield "class=\"active\"";
        }
        yield ">Les Livraisons </a></li>
                <li><a href=\"";
        // line 14
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_vender");
        yield "\" ";
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 14, $this->source); })()), "request", [], "any", false, false, false, 14), "attributes", [], "any", false, false, false, 14), "get", ["_route"], "method", false, false, false, 14) == "app_vender")) {
            yield "class=\"active\"";
        }
        yield "> Les Boutiques </a></li>

            </ul>
        </nav>
    </div>
</header>

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
        return "/header/header.html.twig";
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
        return array (  96 => 14,  88 => 13,  80 => 12,  72 => 11,  64 => 10,  57 => 6,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<link rel=\"stylesheet\" href=\"{{ asset('styles/header.css') }}\">

<header>
    <div class=\"container\">
        <div class=\"logo\">
            <a href=\"{{ path('homepage') }}\">Uber Nabil Saied </a>
        </div>
        <nav class=\"navbar\">
            <ul>
                <li><a href=\"{{ path('produit_list') }}\" {% if app.request.attributes.get('_route') == 'produit_list' %}class=\"active\"{% endif %}>Produits</a></li>
                <li><a href=\"{{ path('user_list') }}\" {% if app.request.attributes.get('_route') == 'user_list' %}class=\"active\"{% endif %}>Utilisateurs</a></li>
                <li><a href=\"{{ path('app_commander') }}\" {% if app.request.attributes.get('_route') == 'app_commander' %}class=\"active\"{% endif %}>Les Commandes </a></li>
                <li><a href=\"{{ path('app_livrer') }}\" {% if app.request.attributes.get('_route') == 'app_livrer' %}class=\"active\"{% endif %}>Les Livraisons </a></li>
                <li><a href=\"{{ path('app_vender') }}\" {% if app.request.attributes.get('_route') == 'app_vender' %}class=\"active\"{% endif %}> Les Boutiques </a></li>

            </ul>
        </nav>
    </div>
</header>

", "/header/header.html.twig", "C:\\Users\\nabil\\OneDrive\\Bureau\\uber\\tp\\templates\\header\\header.html.twig");
    }
}
