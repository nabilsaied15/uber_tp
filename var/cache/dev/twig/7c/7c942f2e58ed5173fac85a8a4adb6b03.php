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

/* list.html.twig */
class __TwigTemplate_b8801a253706e2c8d030185173e36cdb extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "list.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "list.html.twig"));

        // line 1
        yield "<link rel=\"stylesheet\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/list_user.css"), "html", null, true);
        yield "\">
";
        // line 2
        yield from $this->loadTemplate("header.html.twig", "list.html.twig", 2)->unwrap()->yield($context);
        // line 3
        yield "<h1>Liste des Utilisateurs</h1>

<div class=\"filter-buttons\">
    <a href=\"";
        // line 6
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_list", ["role" => "admin"]);
        yield "\">Administrateurs</a>
    <a href=\"";
        // line 7
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_list", ["role" => "user"]);
        yield "\">Utilisateurs</a>
    <a href=\"";
        // line 8
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_list", ["role" => "seller"]);
        yield "\">Vendeurs</a>
    <a href=\"";
        // line 9
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_list", ["role" => "delivery_person"]);
        yield "\">Livreurs</a>
    <a href=\"";
        // line 10
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_list", ["role" => "all"]);
        yield "\">Tous</a>
</div>

<div class=\"add-user-button-container\">
    <a href=\"";
        // line 14
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_add");
        yield "\" class=\"btn-primary\">Ajouter un nouveau utilisateur</a>
</div>

<table>
    <thead>
        <tr>
            <th>Nom d'utilisateur</th>
            <th>Email</th>
            <th>Rôle</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 27, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 28
            yield "            <tr>
                <td>";
            // line 29
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "username", [], "any", false, false, false, 29), "html", null, true);
            yield "</td>
                <td>";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 30), "html", null, true);
            yield "</td>
                <td>";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["user"], "role", [], "any", false, false, false, 31), "name", [], "any", false, false, false, 31), "html", null, true);
            yield "</td>
                <td>
                    <!-- Bouton Modifier -->
                    <a href=\"";
            // line 34
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 34)]), "html", null, true);
            yield "\" class=\"btn btn-edit\">Modifier</a>
                    
                    <!-- Bouton Supprimer -->
                    <a href=\"";
            // line 37
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 37)]), "html", null, true);
            yield "\" 
                       onclick=\"return confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur ?');\" 
                       class=\"btn btn-delete\">
                        Supprimer
                    </a>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['user'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        yield "    </tbody>
</table>
    ";
        // line 47
        yield from $this->loadTemplate("footer.html.twig", "list.html.twig", 47)->unwrap()->yield($context);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "list.html.twig";
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
        return array (  144 => 47,  140 => 45,  126 => 37,  120 => 34,  114 => 31,  110 => 30,  106 => 29,  103 => 28,  99 => 27,  83 => 14,  76 => 10,  72 => 9,  68 => 8,  64 => 7,  60 => 6,  55 => 3,  53 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<link rel=\"stylesheet\" href=\"{{ asset('styles/list_user.css') }}\">
{% include 'header.html.twig' %}
<h1>Liste des Utilisateurs</h1>

<div class=\"filter-buttons\">
    <a href=\"{{ path('user_list', { role: 'admin' }) }}\">Administrateurs</a>
    <a href=\"{{ path('user_list', { role: 'user' }) }}\">Utilisateurs</a>
    <a href=\"{{ path('user_list', { role: 'seller' }) }}\">Vendeurs</a>
    <a href=\"{{ path('user_list', { role: 'delivery_person' }) }}\">Livreurs</a>
    <a href=\"{{ path('user_list', { role: 'all' }) }}\">Tous</a>
</div>

<div class=\"add-user-button-container\">
    <a href=\"{{ path('user_add') }}\" class=\"btn-primary\">Ajouter un nouveau utilisateur</a>
</div>

<table>
    <thead>
        <tr>
            <th>Nom d'utilisateur</th>
            <th>Email</th>
            <th>Rôle</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        {% for user in users %}
            <tr>
                <td>{{ user.username }}</td>
                <td>{{ user.email }}</td>
                <td>{{ user.role.name }}</td>
                <td>
                    <!-- Bouton Modifier -->
                    <a href=\"{{ path('user_edit', { id: user.id }) }}\" class=\"btn btn-edit\">Modifier</a>
                    
                    <!-- Bouton Supprimer -->
                    <a href=\"{{ path('user_delete', { id: user.id }) }}\" 
                       onclick=\"return confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur ?');\" 
                       class=\"btn btn-delete\">
                        Supprimer
                    </a>
                </td>
            </tr>
        {% endfor %}
    </tbody>
</table>
    {% include 'footer.html.twig' %}", "list.html.twig", "C:\\Users\\nabil\\OneDrive\\Bureau\\uber\\tp\\templates\\list.html.twig");
    }
}
