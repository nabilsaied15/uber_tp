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

/* /produits/list_produit.html.twig */
class __TwigTemplate_d36891e3f4e73a33bf9a8b21ead1403a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/produits/list_produit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/produits/list_produit.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
";
        // line 6
        yield from $this->loadTemplate("/header/header.html.twig", "/produits/list_produit.html.twig", 6)->unwrap()->yield($context);
        yield "    <link rel=\"stylesheet\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/list_produit.css"), "html", null, true);
        yield "\">
    <title>Liste des Produits</title>
</head>
<body>
    <div class=\"container\">
        <h1>Liste des Produits</h1>

        <!-- Boutons de filtre -->
        <div class=\"filter-buttons-container\">
            <div class=\"filter-buttons\">
                <form method=\"get\">
                    <button type=\"submit\" name=\"categorie\" value=\"Plats principaux\">Plats principaux</button>
                    <button type=\"submit\" name=\"categorie\" value=\"Desserts\">Desserts</button>
                    <button type=\"submit\" name=\"categorie\" value=\"Boissons\">Boissons</button>
                    <button type=\"submit\" name=\"categorie\" value=\"Snacks\">Snacks</button>
                    <button type=\"submit\" name=\"categorie\" value=\"\">Tous les produits</button>
                </form>
            </div>
        </div>

        <div class=\"add-product-button-container\" style=\"text-align: center; margin: 20px 0;\">
            <button class=\"btn btn-primary\">Ajouter un Produit</button>
        </div>
        <div id=\"add-product-form\" class=\"add-product-form\" style=\"display: none;\">
            <h2>Ajouter un Produit</h2>
            <form method=\"post\" action=\"";
        // line 31
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produit_list");
        yield "\" enctype=\"multipart/form-data\">
                <input type=\"text\" name=\"nom\" placeholder=\"Nom\" required>
                <textarea name=\"description\" placeholder=\"Description\" required></textarea>
                <input type=\"number\" step=\"0.01\" name=\"prix\" placeholder=\"Prix (€)\" required>
                <input type=\"text\" name=\"categorie\" placeholder=\"Catégorie\" required>
                <input type=\"file\" name=\"image\" required>
                <button type=\"submit\" class=\"btn btn-add\">Ajouter</button>
            </form>
        </div>
        <div class=\"produit-grid\">
            ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 41, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 42
            yield "            <div class=\"produit-card\">
                <img src=\"/images/";
            // line 43
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "image", [], "any", false, false, false, 43), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "nom", [], "any", false, false, false, 43), "html", null, true);
            yield "\">
                <h2>";
            // line 44
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "nom", [], "any", false, false, false, 44), "html", null, true);
            yield "</h2>
                <p><strong>Description :</strong> ";
            // line 45
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "description", [], "any", false, false, false, 45), "html", null, true);
            yield "</p>
                <p><strong>Prix :</strong> ";
            // line 46
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "prix", [], "any", false, false, false, 46), "html", null, true);
            yield " €</p>
                <div class=\"produit-actions\">
                    <a href=\"";
            // line 48
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produit_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 48)]), "html", null, true);
            yield "\" class=\"btn-action btn-edit\" title=\"Modifier\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-edit\">
                            <path d=\"M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19H4v-3L16.5 3.5z\"></path>
                        </svg>
                    </a>
                                   <a href=\"";
            // line 53
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produit_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 53)]), "html", null, true);
            yield "\" 
                       onclick=\"return confirm('Êtes-vous sûr de vouloir supprimer ce produit ?');\" 
                       class=\"btn btn-delete\">
                        Supprimer
                    </a>
    
 
                    </a>
                </div>
                
                <a href=\"";
            // line 63
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produit_detail", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 63)]), "html", null, true);
            yield "\" class=\"btn btn-info\">Savoir plus</a>
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['produit'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        yield "        </div>

        ";
        // line 68
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 68, $this->source); })()))) {
            // line 69
            yield "        <p class=\"no-produits\">Aucun produit trouvé.</p>
        ";
        }
        // line 71
        yield "    </div>

";
        // line 73
        yield from $this->loadTemplate("/footer/footer.html.twig", "/produits/list_produit.html.twig", 73)->unwrap()->yield($context);
        // line 74
        yield "
    <script>

        const addProductButton = document.querySelector('.add-product-button-container .btn-primary');
        const addProductForm = document.getElementById('add-product-form');

        addProductButton.addEventListener('click', () => {

            if (addProductForm.style.display === 'none' || addProductForm.style.display === '') {
                addProductForm.style.display = 'block'; 
                addProductButton.textContent = 'Masquer le Formulaire'; 
            } else {
                addProductForm.style.display = 'none'; 
                addProductButton.textContent = 'Ajouter un Produit'; 
            }
        });
    </script>
</body>
</html>
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
        return "/produits/list_produit.html.twig";
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
        return array (  170 => 74,  168 => 73,  164 => 71,  160 => 69,  158 => 68,  154 => 66,  145 => 63,  132 => 53,  124 => 48,  119 => 46,  115 => 45,  111 => 44,  105 => 43,  102 => 42,  98 => 41,  85 => 31,  55 => 6,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
{% include '/header/header.html.twig' %}    <link rel=\"stylesheet\" href=\"{{ asset('styles/list_produit.css') }}\">
    <title>Liste des Produits</title>
</head>
<body>
    <div class=\"container\">
        <h1>Liste des Produits</h1>

        <!-- Boutons de filtre -->
        <div class=\"filter-buttons-container\">
            <div class=\"filter-buttons\">
                <form method=\"get\">
                    <button type=\"submit\" name=\"categorie\" value=\"Plats principaux\">Plats principaux</button>
                    <button type=\"submit\" name=\"categorie\" value=\"Desserts\">Desserts</button>
                    <button type=\"submit\" name=\"categorie\" value=\"Boissons\">Boissons</button>
                    <button type=\"submit\" name=\"categorie\" value=\"Snacks\">Snacks</button>
                    <button type=\"submit\" name=\"categorie\" value=\"\">Tous les produits</button>
                </form>
            </div>
        </div>

        <div class=\"add-product-button-container\" style=\"text-align: center; margin: 20px 0;\">
            <button class=\"btn btn-primary\">Ajouter un Produit</button>
        </div>
        <div id=\"add-product-form\" class=\"add-product-form\" style=\"display: none;\">
            <h2>Ajouter un Produit</h2>
            <form method=\"post\" action=\"{{ path('produit_list') }}\" enctype=\"multipart/form-data\">
                <input type=\"text\" name=\"nom\" placeholder=\"Nom\" required>
                <textarea name=\"description\" placeholder=\"Description\" required></textarea>
                <input type=\"number\" step=\"0.01\" name=\"prix\" placeholder=\"Prix (€)\" required>
                <input type=\"text\" name=\"categorie\" placeholder=\"Catégorie\" required>
                <input type=\"file\" name=\"image\" required>
                <button type=\"submit\" class=\"btn btn-add\">Ajouter</button>
            </form>
        </div>
        <div class=\"produit-grid\">
            {% for produit in produits %}
            <div class=\"produit-card\">
                <img src=\"/images/{{ produit.image }}\" alt=\"{{ produit.nom }}\">
                <h2>{{ produit.nom }}</h2>
                <p><strong>Description :</strong> {{ produit.description }}</p>
                <p><strong>Prix :</strong> {{ produit.prix }} €</p>
                <div class=\"produit-actions\">
                    <a href=\"{{ path('produit_edit', { 'id': produit.id }) }}\" class=\"btn-action btn-edit\" title=\"Modifier\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-edit\">
                            <path d=\"M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19H4v-3L16.5 3.5z\"></path>
                        </svg>
                    </a>
                                   <a href=\"{{ path('produit_delete', {  'id': produit.id }) }}\" 
                       onclick=\"return confirm('Êtes-vous sûr de vouloir supprimer ce produit ?');\" 
                       class=\"btn btn-delete\">
                        Supprimer
                    </a>
    
 
                    </a>
                </div>
                
                <a href=\"{{ path('produit_detail', { 'id': produit.id }) }}\" class=\"btn btn-info\">Savoir plus</a>
            </div>
            {% endfor %}
        </div>

        {% if produits is empty %}
        <p class=\"no-produits\">Aucun produit trouvé.</p>
        {% endif %}
    </div>

{% include '/footer/footer.html.twig' %}

    <script>

        const addProductButton = document.querySelector('.add-product-button-container .btn-primary');
        const addProductForm = document.getElementById('add-product-form');

        addProductButton.addEventListener('click', () => {

            if (addProductForm.style.display === 'none' || addProductForm.style.display === '') {
                addProductForm.style.display = 'block'; 
                addProductButton.textContent = 'Masquer le Formulaire'; 
            } else {
                addProductForm.style.display = 'none'; 
                addProductButton.textContent = 'Ajouter un Produit'; 
            }
        });
    </script>
</body>
</html>
", "/produits/list_produit.html.twig", "C:\\Users\\nabil\\OneDrive\\Bureau\\uber\\tp\\templates\\produits\\list_produit.html.twig");
    }
}
