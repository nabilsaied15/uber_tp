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

/* footer.html.twig */
class __TwigTemplate_7ea24e237dfde21e6232fcd12716fd38 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "footer.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "footer.html.twig"));

        // line 1
        yield "<link rel=\"stylesheet\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/footer.css"), "html", null, true);
        yield "\">
<footer>
    <div class=\"footer-container\">
        <div class=\"footer-section\">
            <h3>À propos</h3>
            <p>Ce site est dédié à la gestion des utilisateurs et des produits, offrant une expérience moderne et intuitive.</p>
        </div>
        <div class=\"footer-section\">
            <h3>Liens utiles</h3>
            <ul>
                <li><a href=\"#\">Accueil</a></li>
                <li><a href=\"#\">Produits</a></li>
                <li><a href=\"#\">Utilisateurs</a></li>
                <li><a href=\"#\">Contact</a></li>
            </ul>
        </div>
        <div class=\"footer-section\">
            <h3>Suivez-nous</h3>
            <div class=\"social-icons\">
                <a href=\"#\"><img src=\"/icons/facebook-icon.png\" alt=\"Facebook\"></a>
                <a href=\"#\"><img src=\"/icons/youtube.jpg\" alt=\"Youtube\"></a>
                <a href=\"#\"><img src=\"/icons/instagram.jpg\" alt=\"Instagram\"></a>
            </div>
        </div>
    </div>
    <div class=\"footer-bottom\">
        <p>&copy; 2025 MonSite. Tous droits réservés.</p>
    </div>
</footer>

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
        return "footer.html.twig";
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
        return array (  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<link rel=\"stylesheet\" href=\"{{ asset('styles/footer.css') }}\">
<footer>
    <div class=\"footer-container\">
        <div class=\"footer-section\">
            <h3>À propos</h3>
            <p>Ce site est dédié à la gestion des utilisateurs et des produits, offrant une expérience moderne et intuitive.</p>
        </div>
        <div class=\"footer-section\">
            <h3>Liens utiles</h3>
            <ul>
                <li><a href=\"#\">Accueil</a></li>
                <li><a href=\"#\">Produits</a></li>
                <li><a href=\"#\">Utilisateurs</a></li>
                <li><a href=\"#\">Contact</a></li>
            </ul>
        </div>
        <div class=\"footer-section\">
            <h3>Suivez-nous</h3>
            <div class=\"social-icons\">
                <a href=\"#\"><img src=\"/icons/facebook-icon.png\" alt=\"Facebook\"></a>
                <a href=\"#\"><img src=\"/icons/youtube.jpg\" alt=\"Youtube\"></a>
                <a href=\"#\"><img src=\"/icons/instagram.jpg\" alt=\"Instagram\"></a>
            </div>
        </div>
    </div>
    <div class=\"footer-bottom\">
        <p>&copy; 2025 MonSite. Tous droits réservés.</p>
    </div>
</footer>

", "footer.html.twig", "C:\\Users\\nabil\\OneDrive\\Bureau\\uber\\tp\\templates\\footer.html.twig");
    }
}
