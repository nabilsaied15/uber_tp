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

/* commander/commande.html.twig */
class __TwigTemplate_e7b7f439be466a8037bd64288a5eabca extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commander/commande.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commander/commande.html.twig"));

        // line 1
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 4
        yield "
";
        // line 5
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 1
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 2
        yield "<link rel=\"stylesheet\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/commande.css"), "html", null, true);
        yield "\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
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

        // line 6
        yield from $this->loadTemplate("/header/header.html.twig", "commander/commande.html.twig", 6)->unwrap()->yield($context);
        // line 7
        yield "
<h1>Liste des Commandes</h1>
<div class=\"filter-buttons\" style=\"text-align: center; margin: 20px;\">
    <a href=\"";
        // line 10
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_commander", ["status" => "all"]);
        yield "\" class=\"button ";
        if (((isset($context["currentStatus"]) || array_key_exists("currentStatus", $context) ? $context["currentStatus"] : (function () { throw new RuntimeError('Variable "currentStatus" does not exist.', 10, $this->source); })()) == "All")) {
            yield "active";
        }
        yield "\">All</a>
    <a href=\"";
        // line 11
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_commander", ["status" => "En cours"]);
        yield "\" class=\"button ";
        if (((isset($context["currentStatus"]) || array_key_exists("currentStatus", $context) ? $context["currentStatus"] : (function () { throw new RuntimeError('Variable "currentStatus" does not exist.', 11, $this->source); })()) == "En cours")) {
            yield "active";
        }
        yield "\">En cours</a>
    <a href=\"";
        // line 12
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_commander", ["status" => "En attente"]);
        yield "\" class=\"button ";
        if (((isset($context["currentStatus"]) || array_key_exists("currentStatus", $context) ? $context["currentStatus"] : (function () { throw new RuntimeError('Variable "currentStatus" does not exist.', 12, $this->source); })()) == "En attente")) {
            yield "active";
        }
        yield "\">En attente</a>
    <a href=\"";
        // line 13
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_commander", ["status" => "Livrée"]);
        yield "\" class=\"button ";
        if (((isset($context["currentStatus"]) || array_key_exists("currentStatus", $context) ? $context["currentStatus"] : (function () { throw new RuntimeError('Variable "currentStatus" does not exist.', 13, $this->source); })()) == "Livrée")) {
            yield "active";
        }
        yield "\">Livrée</a>
    <a href=\"";
        // line 14
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_commander", ["status" => "Annulée"]);
        yield "\" class=\"button ";
        if (((isset($context["currentStatus"]) || array_key_exists("currentStatus", $context) ? $context["currentStatus"] : (function () { throw new RuntimeError('Variable "currentStatus" does not exist.', 14, $this->source); })()) == "Annulée")) {
            yield "active";
        }
        yield "\">Annulée</a>
</div>
<div class=\"item-grid\">
    ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["commandes"]) || array_key_exists("commandes", $context) ? $context["commandes"] : (function () { throw new RuntimeError('Variable "commandes" does not exist.', 17, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["commande"]) {
            // line 18
            yield "        <div class=\"item-card\">
            <h2>Commande #";
            // line 19
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "getIdCommande", [], "any", false, false, false, 19), "html", null, true);
            yield "</h2>
            <p><strong>ID Client :</strong> ";
            // line 20
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "getIdClient", [], "any", false, false, false, 20), "html", null, true);
            yield "</p>
            <p><strong>Date :</strong> ";
            // line 21
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "dateCommande", [], "any", false, false, false, 21), "Y-m-d H:i"), "html", null, true);
            yield "</p>
            <p><strong>Total :</strong> ";
            // line 22
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "totalCommande", [], "any", false, false, false, 22), "html", null, true);
            yield " €</p>
            <span class=\"status 
                ";
            // line 24
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "status", [], "any", false, false, false, 24) == "En attente")) {
                yield "en-attente
                ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 25
$context["commande"], "status", [], "any", false, false, false, 25) == "En cours")) {
                yield "en-cours
                ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 26
$context["commande"], "status", [], "any", false, false, false, 26) == "Livrée")) {
                yield "livree
                ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 27
$context["commande"], "status", [], "any", false, false, false, 27) == "Annulée")) {
                yield "annulee
                ";
            }
            // line 28
            yield "\">
                ";
            // line 29
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "status", [], "any", false, false, false, 29), "html", null, true);
            yield "
            </span>
        </div>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 33
            yield "        <p style=\"text-align: center; margin-top: 20px;\">Aucune commande trouvée.</p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['commande'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        yield "</div>
";
        // line 36
        yield from $this->loadTemplate("/footer/footer.html.twig", "commander/commande.html.twig", 36)->unwrap()->yield($context);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "commander/commande.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  219 => 36,  216 => 35,  209 => 33,  200 => 29,  197 => 28,  192 => 27,  188 => 26,  184 => 25,  180 => 24,  175 => 22,  171 => 21,  167 => 20,  163 => 19,  160 => 18,  155 => 17,  145 => 14,  137 => 13,  129 => 12,  121 => 11,  113 => 10,  108 => 7,  106 => 6,  93 => 5,  79 => 2,  66 => 1,  55 => 5,  52 => 4,  50 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% block stylesheets %}
<link rel=\"stylesheet\" href=\"{{ asset('styles/commande.css') }}\">
{% endblock %}

{% block body %}
{% include '/header/header.html.twig' %}

<h1>Liste des Commandes</h1>
<div class=\"filter-buttons\" style=\"text-align: center; margin: 20px;\">
    <a href=\"{{ path('app_commander', { status: 'all' }) }}\" class=\"button {% if currentStatus == 'All' %}active{% endif %}\">All</a>
    <a href=\"{{ path('app_commander', { status: 'En cours' }) }}\" class=\"button {% if currentStatus == 'En cours' %}active{% endif %}\">En cours</a>
    <a href=\"{{ path('app_commander', { status: 'En attente' }) }}\" class=\"button {% if currentStatus == 'En attente' %}active{% endif %}\">En attente</a>
    <a href=\"{{ path('app_commander', { status: 'Livrée' }) }}\" class=\"button {% if currentStatus == 'Livrée' %}active{% endif %}\">Livrée</a>
    <a href=\"{{ path('app_commander', { status: 'Annulée' }) }}\" class=\"button {% if currentStatus == 'Annulée' %}active{% endif %}\">Annulée</a>
</div>
<div class=\"item-grid\">
    {% for commande in commandes %}
        <div class=\"item-card\">
            <h2>Commande #{{ commande.getIdCommande }}</h2>
            <p><strong>ID Client :</strong> {{ commande.getIdClient }}</p>
            <p><strong>Date :</strong> {{ commande.dateCommande|date('Y-m-d H:i') }}</p>
            <p><strong>Total :</strong> {{ commande.totalCommande }} €</p>
            <span class=\"status 
                {% if commande.status == 'En attente' %}en-attente
                {% elseif commande.status == 'En cours' %}en-cours
                {% elseif commande.status == 'Livrée' %}livree
                {% elseif commande.status == 'Annulée' %}annulee
                {% endif %}\">
                {{ commande.status }}
            </span>
        </div>
    {% else %}
        <p style=\"text-align: center; margin-top: 20px;\">Aucune commande trouvée.</p>
    {% endfor %}
</div>
{% include '/footer/footer.html.twig' %}
{% endblock %}
", "commander/commande.html.twig", "C:\\Users\\nabil\\OneDrive\\Bureau\\uber\\tp\\templates\\commander\\commande.html.twig");
    }
}
