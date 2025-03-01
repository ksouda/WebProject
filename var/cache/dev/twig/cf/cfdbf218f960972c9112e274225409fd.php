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

/* lignedecommande/edit.html.twig */
class __TwigTemplate_35a7e9d6e77df61d6f8264f181ed60bc extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "lignedecommande/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "lignedecommande/edit.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Modifier Ligne de Commande</title>
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css\">
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js\"></script>
</head>
<body>

<div class=\"container mt-5\">
    <div class=\"card p-4 shadow\">
        <h2 class=\"text-center mb-4\">Modifier la Ligne de Commande</h2>
        <form method=\"post\">
            ";
        // line 16
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), 'form_start');
        yield "

            <div class=\"mb-3\">
                ";
        // line 19
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "quantite", [], "any", false, false, false, 19), 'label', ["label" => "Quantité"]);
        yield "
                ";
        // line 20
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "quantite", [], "any", false, false, false, 20), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                <div class=\"text-danger\">";
        // line 21
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "quantite", [], "any", false, false, false, 21), 'errors');
        yield "</div>
            </div>

            <div class=\"mb-3\">
                ";
        // line 25
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "prix_unitaire", [], "any", false, false, false, 25), 'label', ["label" => "Prix Unitaire"]);
        yield "
                ";
        // line 26
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "prix_unitaire", [], "any", false, false, false, 26), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                <div class=\"text-danger\">";
        // line 27
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "prix_unitaire", [], "any", false, false, false, 27), 'errors');
        yield "</div>
            </div>

            <div class=\"mb-3\">
                ";
        // line 31
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "id_produit", [], "any", false, false, false, 31), 'label', ["label" => "Produit"]);
        yield "
                ";
        // line 32
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "id_produit", [], "any", false, false, false, 32), 'widget', ["attr" => ["class" => "form-select"]]);
        yield "
                <div class=\"text-danger\">";
        // line 33
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "id_produit", [], "any", false, false, false, 33), 'errors');
        yield "</div>
            </div>

            <button type=\"submit\" class=\"btn btn-primary w-100\"><i class=\"fas fa-save\"></i> Sauvegarder</button>

            ";
        // line 38
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), 'form_end');
        yield "
        </form>

        <div class=\"text-center mt-3\">
            <a href=\"";
        // line 42
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("voir_panier");
        yield "\" class=\"btn btn-outline-secondary\"><i class=\"fas fa-arrow-left\"></i> Retour</a>
        </div>
    </div>
</div>

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
        return "lignedecommande/edit.html.twig";
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
        return array (  124 => 42,  117 => 38,  109 => 33,  105 => 32,  101 => 31,  94 => 27,  90 => 26,  86 => 25,  79 => 21,  75 => 20,  71 => 19,  65 => 16,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Modifier Ligne de Commande</title>
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css\">
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js\"></script>
</head>
<body>

<div class=\"container mt-5\">
    <div class=\"card p-4 shadow\">
        <h2 class=\"text-center mb-4\">Modifier la Ligne de Commande</h2>
        <form method=\"post\">
            {{ form_start(form) }}

            <div class=\"mb-3\">
                {{ form_label(form.quantite, 'Quantité') }}
                {{ form_widget(form.quantite, {'attr': {'class': 'form-control'}}) }}
                <div class=\"text-danger\">{{ form_errors(form.quantite) }}</div>
            </div>

            <div class=\"mb-3\">
                {{ form_label(form.prix_unitaire, 'Prix Unitaire') }}
                {{ form_widget(form.prix_unitaire, {'attr': {'class': 'form-control'}}) }}
                <div class=\"text-danger\">{{ form_errors(form.prix_unitaire) }}</div>
            </div>

            <div class=\"mb-3\">
                {{ form_label(form.id_produit, 'Produit') }}
                {{ form_widget(form.id_produit, {'attr': {'class': 'form-select'}}) }}
                <div class=\"text-danger\">{{ form_errors(form.id_produit) }}</div>
            </div>

            <button type=\"submit\" class=\"btn btn-primary w-100\"><i class=\"fas fa-save\"></i> Sauvegarder</button>

            {{ form_end(form) }}
        </form>

        <div class=\"text-center mt-3\">
            <a href=\"{{ path('voir_panier') }}\" class=\"btn btn-outline-secondary\"><i class=\"fas fa-arrow-left\"></i> Retour</a>
        </div>
    </div>
</div>

</body>
</html>
", "lignedecommande/edit.html.twig", "C:\\Users\\Asus\\Downloads\\WebProject (5)\\WebProject\\templates\\lignedecommande\\edit.html.twig");
    }
}
