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

/* livrer/livraison.html.twig */
class __TwigTemplate_76a36c221f7e853cc1bec0e5f4345711 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "livrer/livraison.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "livrer/livraison.html.twig"));

        // line 1
        yield "


";
        // line 4
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 7
        yield "
";
        // line 8
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 4
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

        // line 5
        yield "<link rel=\"stylesheet\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/livrer.css"), "html", null, true);
        yield "\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 8
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

        // line 9
        yield from $this->loadTemplate("/header/header.html.twig", "livrer/livraison.html.twig", 9)->unwrap()->yield($context);
        // line 10
        yield "<h1>Liste des Livraisons</h1>

<div class=\"filter-buttons-container\">
    <div class=\"filter-buttons\">
        <a href=\"";
        // line 14
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_livrer", ["status" => "all"]);
        yield "\" 
           class=\"button ";
        // line 15
        if (((isset($context["currentStatus"]) || array_key_exists("currentStatus", $context) ? $context["currentStatus"] : (function () { throw new RuntimeError('Variable "currentStatus" does not exist.', 15, $this->source); })()) == "all")) {
            yield "active";
        }
        yield "\">Toutes</a>
        <a href=\"";
        // line 16
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_livrer", ["status" => "En cours"]);
        yield "\" 
           class=\"button ";
        // line 17
        if (((isset($context["currentStatus"]) || array_key_exists("currentStatus", $context) ? $context["currentStatus"] : (function () { throw new RuntimeError('Variable "currentStatus" does not exist.', 17, $this->source); })()) == "En cours")) {
            yield "active";
        }
        yield "\">En cours</a>
        <a href=\"";
        // line 18
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_livrer", ["status" => "Livrée"]);
        yield "\" 
           class=\"button ";
        // line 19
        if (((isset($context["currentStatus"]) || array_key_exists("currentStatus", $context) ? $context["currentStatus"] : (function () { throw new RuntimeError('Variable "currentStatus" does not exist.', 19, $this->source); })()) == "Livrée")) {
            yield "active";
        }
        yield "\">Livrée</a>
        <a href=\"";
        // line 20
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_livrer", ["status" => "Échec"]);
        yield "\" 
           class=\"button ";
        // line 21
        if (((isset($context["currentStatus"]) || array_key_exists("currentStatus", $context) ? $context["currentStatus"] : (function () { throw new RuntimeError('Variable "currentStatus" does not exist.', 21, $this->source); })()) == "Échec")) {
            yield "active";
        }
        yield "\">Échec</a>
    </div>
</div>


<div class=\"item-grid\">
    ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["livraisons"]) || array_key_exists("livraisons", $context) ? $context["livraisons"] : (function () { throw new RuntimeError('Variable "livraisons" does not exist.', 27, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["livraison"]) {
            // line 28
            yield "        <div class=\"item-card\">
            <h2>Commande #";
            // line 29
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["livraison"], "getIdCommande", [], "any", false, false, false, 29), "html", null, true);
            yield "</h2>
            <p><strong>ID Livreur :</strong> ";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["livraison"], "getIdLivreur", [], "any", false, false, false, 30), "html", null, true);
            yield "</p>
            <p><strong>Date :</strong> ";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["livraison"], "dateLivraison", [], "any", false, false, false, 31), "Y-m-d H:i"), "html", null, true);
            yield "</p>
            <span class=\"status 
                ";
            // line 33
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["livraison"], "status", [], "any", false, false, false, 33) == "Livrée")) {
                yield "livree
                ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 34
$context["livraison"], "status", [], "any", false, false, false, 34) == "En cours")) {
                yield "en-cours
                ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 35
$context["livraison"], "status", [], "any", false, false, false, 35) == "Échec")) {
                yield "echec
                ";
            }
            // line 36
            yield "\">
                ";
            // line 37
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["livraison"], "status", [], "any", false, false, false, 37), "html", null, true);
            yield "
            </span>
        </div>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 41
            yield "        <p style=\"text-align: center;\">Aucune livraison trouvée.</p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['livraison'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        yield "</div>

";
        // line 45
        yield from $this->loadTemplate("/footer/footer.html.twig", "livrer/livraison.html.twig", 45)->unwrap()->yield($context);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "livrer/livraison.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  221 => 45,  217 => 43,  210 => 41,  201 => 37,  198 => 36,  193 => 35,  189 => 34,  185 => 33,  180 => 31,  176 => 30,  172 => 29,  169 => 28,  164 => 27,  153 => 21,  149 => 20,  143 => 19,  139 => 18,  133 => 17,  129 => 16,  123 => 15,  119 => 14,  113 => 10,  111 => 9,  98 => 8,  84 => 5,  71 => 4,  60 => 8,  57 => 7,  55 => 4,  50 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("


{% block stylesheets %}
<link rel=\"stylesheet\" href=\"{{ asset('styles/livrer.css') }}\">
{% endblock %}

{% block body %}
{% include '/header/header.html.twig' %}
<h1>Liste des Livraisons</h1>

<div class=\"filter-buttons-container\">
    <div class=\"filter-buttons\">
        <a href=\"{{ path('app_livrer', { status: 'all' }) }}\" 
           class=\"button {% if currentStatus == 'all' %}active{% endif %}\">Toutes</a>
        <a href=\"{{ path('app_livrer', { status: 'En cours' }) }}\" 
           class=\"button {% if currentStatus == 'En cours' %}active{% endif %}\">En cours</a>
        <a href=\"{{ path('app_livrer', { status: 'Livrée' }) }}\" 
           class=\"button {% if currentStatus == 'Livrée' %}active{% endif %}\">Livrée</a>
        <a href=\"{{ path('app_livrer', { status: 'Échec' }) }}\" 
           class=\"button {% if currentStatus == 'Échec' %}active{% endif %}\">Échec</a>
    </div>
</div>


<div class=\"item-grid\">
    {% for livraison in livraisons %}
        <div class=\"item-card\">
            <h2>Commande #{{ livraison.getIdCommande }}</h2>
            <p><strong>ID Livreur :</strong> {{ livraison.getIdLivreur }}</p>
            <p><strong>Date :</strong> {{ livraison.dateLivraison|date('Y-m-d H:i') }}</p>
            <span class=\"status 
                {% if livraison.status == 'Livrée' %}livree
                {% elseif livraison.status == 'En cours' %}en-cours
                {% elseif livraison.status == 'Échec' %}echec
                {% endif %}\">
                {{ livraison.status }}
            </span>
        </div>
    {% else %}
        <p style=\"text-align: center;\">Aucune livraison trouvée.</p>
    {% endfor %}
</div>

{% include '/footer/footer.html.twig' %}
{% endblock %}
", "livrer/livraison.html.twig", "C:\\Users\\nabil\\OneDrive\\Bureau\\uber\\tp\\templates\\livrer\\livraison.html.twig");
    }
}
