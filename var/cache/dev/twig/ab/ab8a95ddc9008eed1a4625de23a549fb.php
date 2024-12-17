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

/* /produits/detail_produit.html.twig */
class __TwigTemplate_4875f670382600b9e9592e9cff49750a extends Template
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
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/produits/detail_produit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/produits/detail_produit.html.twig"));

        // line 1
        yield from $this->loadTemplate("/header/header.html.twig", "/produits/detail_produit.html.twig", 1)->unwrap()->yield($context);
        yield "<link rel=\"stylesheet\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/detail_produit.css"), "html", null, true);
        yield "\">

";
        // line 3
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

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
        yield "<h1 class=\"produit-detail-title\">Détail du Produit</h1>

<div class=\"produit-detail\">
    <div class=\"produit-detail-left\">
        <img src=\"/images/";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 8, $this->source); })()), "image", [], "any", false, false, false, 8), "html", null, true);
        yield "\" alt=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 8, $this->source); })()), "nom", [], "any", false, false, false, 8), "html", null, true);
        yield "\" class=\"produit-image\">
    </div>
    <div class=\"produit-detail-right\">
        <h1>";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 11, $this->source); })()), "nom", [], "any", false, false, false, 11), "html", null, true);
        yield "</h1>
        <p><strong>Description :</strong> ";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 12, $this->source); })()), "description", [], "any", false, false, false, 12), "html", null, true);
        yield "</p>
        <p><strong>Prix :</strong> ";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 13, $this->source); })()), "prix", [], "any", false, false, false, 13), "html", null, true);
        yield " €</p>
        <div class=\"commande-section\">
            <label for=\"quantite\"><strong>Quantité :</strong></label>
            <input type=\"number\" id=\"quantite\" name=\"quantite\" value=\"1\" min=\"1\" class=\"quantite-input\">
            <button class=\"btn-commander\">Commander</button>
        </div>
        <a href=\"";
        // line 19
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produit_list");
        yield "\" class=\"back-link\">Retour à la liste</a>
    </div>
</div>

";
        // line 23
        yield from $this->loadTemplate("/footer/footer.html.twig", "/produits/detail_produit.html.twig", 23)->unwrap()->yield($context);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "/produits/detail_produit.html.twig";
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
        return array (  117 => 23,  110 => 19,  101 => 13,  97 => 12,  93 => 11,  85 => 8,  79 => 4,  56 => 3,  49 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% include '/header/header.html.twig' %}<link rel=\"stylesheet\" href=\"{{ asset('styles/detail_produit.css') }}\">

{% block body %}
<h1 class=\"produit-detail-title\">Détail du Produit</h1>

<div class=\"produit-detail\">
    <div class=\"produit-detail-left\">
        <img src=\"/images/{{ produit.image }}\" alt=\"{{ produit.nom }}\" class=\"produit-image\">
    </div>
    <div class=\"produit-detail-right\">
        <h1>{{ produit.nom }}</h1>
        <p><strong>Description :</strong> {{ produit.description }}</p>
        <p><strong>Prix :</strong> {{ produit.prix }} €</p>
        <div class=\"commande-section\">
            <label for=\"quantite\"><strong>Quantité :</strong></label>
            <input type=\"number\" id=\"quantite\" name=\"quantite\" value=\"1\" min=\"1\" class=\"quantite-input\">
            <button class=\"btn-commander\">Commander</button>
        </div>
        <a href=\"{{ path('produit_list') }}\" class=\"back-link\">Retour à la liste</a>
    </div>
</div>

{% include '/footer/footer.html.twig' %}
{% endblock %}
", "/produits/detail_produit.html.twig", "C:\\Users\\nabil\\OneDrive\\Bureau\\uber\\tp\\templates\\produits\\detail_produit.html.twig");
    }
}
