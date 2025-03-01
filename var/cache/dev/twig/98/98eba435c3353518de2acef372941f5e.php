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

/* commande/_form.html.twig */
class __TwigTemplate_50d702e3fd9e39f67abbb38f0ff1b388 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commande/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commande/_form.html.twig"));

        // line 1
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        yield "

<div class=\"container p-4 shadow rounded bg-light\">
    <h4 class=\"mb-3 text-center\">Modifier la Commande</h4>

    <!-- ✅ Global Form Errors -->
    ";
        // line 7
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), 'errors')) {
            // line 8
            yield "        <div class=\"alert alert-danger\">
            <strong>Veuillez corriger les erreurs ci-dessous :</strong>
            ";
            // line 10
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), 'errors');
            yield "
        </div>
    ";
        }
        // line 13
        yield "
    <!-- ✅ Adresse de Livraison -->
    <div class=\"mb-3\">
        <label class=\"form-label fw-bold\">Adresse de Livraison</label>
        ";
        // line 17
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "adresseLivraison", [], "any", false, false, false, 17), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
        ";
        // line 18
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "adresseLivraison", [], "any", false, false, false, 18), 'errors')) {
            // line 19
            yield "            <div class=\"text-danger small\">
                ";
            // line 20
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "adresseLivraison", [], "any", false, false, false, 20), 'errors');
            yield "
            </div>
        ";
        } else {
            // line 23
            yield "            <div class=\"text-muted small\">Veuillez entrer une adresse valide (min. 5 caractères).</div>
        ";
        }
        // line 25
        yield "    </div>

    <!-- ✅ Méthode de Paiement -->
    <div class=\"mb-3\">
        <label class=\"form-label fw-bold\">Méthode de Paiement</label>
        ";
        // line 30
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "paiement", [], "any", false, false, false, 30), 'widget', ["attr" => ["class" => "form-select"]]);
        yield "
        ";
        // line 31
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "paiement", [], "any", false, false, false, 31), 'errors')) {
            // line 32
            yield "            <div class=\"text-danger small\">
                ";
            // line 33
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "paiement", [], "any", false, false, false, 33), 'errors');
            yield "
            </div>
        ";
        } else {
            // line 36
            yield "            <div class=\"text-muted small\">Sélectionnez une méthode de paiement parmi: Carte Bancaire, Espèces, ou PayPal.</div>
        ";
        }
        // line 38
        yield "    </div>

    <!-- ✅ Montant Total (Read-only) -->
    <div class=\"mb-3\">
        <label class=\"form-label fw-bold\">Montant Total (TND)</label>
        ";
        // line 43
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "montantTotal", [], "any", false, false, false, 43), 'widget', ["attr" => ["class" => "form-control bg-light", "readonly" => "readonly"]]);
        yield "
        ";
        // line 44
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "montantTotal", [], "any", false, false, false, 44), 'errors')) {
            // line 45
            yield "            <div class=\"text-danger small\">
                ";
            // line 46
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "montantTotal", [], "any", false, false, false, 46), 'errors');
            yield "
            </div>
        ";
        } else {
            // line 49
            yield "            <div class=\"text-muted small\">Ce champ est automatiquement calculé.</div>
        ";
        }
        // line 51
        yield "    </div>

    <!-- ✅ Date de Commande -->
    <div class=\"mb-3\">
        <label class=\"form-label fw-bold\">Date de Commande</label>
        ";
        // line 56
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "dateCommande", [], "any", false, false, false, 56), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
        ";
        // line 57
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "dateCommande", [], "any", false, false, false, 57), 'errors')) {
            // line 58
            yield "            <div class=\"text-danger small\">
                ";
            // line 59
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "dateCommande", [], "any", false, false, false, 59), 'errors');
            yield "
            </div>
        ";
        } else {
            // line 62
            yield "            <div class=\"text-muted small\">Veuillez entrer une date valide pour la commande.</div>
        ";
        }
        // line 64
        yield "    </div>

    <!-- ✅ Statut -->
    <div class=\"mb-3\">
        <label class=\"form-label fw-bold\">Statut</label>
        ";
        // line 69
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "statut", [], "any", false, false, false, 69), 'widget', ["attr" => ["class" => "form-select"]]);
        yield "
        ";
        // line 70
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), "statut", [], "any", false, false, false, 70), 'errors')) {
            // line 71
            yield "            <div class=\"text-danger small\">
                ";
            // line 72
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "statut", [], "any", false, false, false, 72), 'errors');
            yield "
            </div>
        ";
        } else {
            // line 75
            yield "            <div class=\"text-muted small\">Statut de la commande: En attente, Confirmé ou Annulé.</div>
        ";
        }
        // line 77
        yield "    </div>

    <!-- ✅ Submit Button -->
    <div class=\"text-end\">
        <button type=\"submit\" class=\"btn btn-success\">
            <i class=\"fas fa-save\"></i> ";
        // line 82
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 82, $this->source); })()), "Enregistrer")) : ("Enregistrer")), "html", null, true);
        yield "
        </button>
    </div>
</div>

";
        // line 87
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 87, $this->source); })()), 'form_end');
        yield "

<!-- ✅ JavaScript to Enhance Validation Messages -->
<script>
    document.addEventListener(\"DOMContentLoaded\", function () {
        document.querySelector(\"form\").addEventListener(\"submit\", function (event) {
            let errors = [];
            let adresseLivraison = document.querySelector(\"[name='commande[adresseLivraison]']\");
            let paiement = document.querySelector(\"[name='commande[paiement]']\");

            if (!adresseLivraison.value.trim()) {
                errors.push(\"L'adresse de livraison est obligatoire.\");
            } else if (adresseLivraison.value.length < 5) {
                errors.push(\"L'adresse doit contenir au moins 5 caractères.\");
            }

            if (!paiement.value) {
                errors.push(\"Veuillez sélectionner une méthode de paiement.\");
            }

            if (errors.length > 0) {
                event.preventDefault();
                alert(\"Erreurs détectées :\\n\\n\" + errors.join(\"\\n\"));
            }
        });
    });
</script>
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
        return "commande/_form.html.twig";
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
        return array (  213 => 87,  205 => 82,  198 => 77,  194 => 75,  188 => 72,  185 => 71,  183 => 70,  179 => 69,  172 => 64,  168 => 62,  162 => 59,  159 => 58,  157 => 57,  153 => 56,  146 => 51,  142 => 49,  136 => 46,  133 => 45,  131 => 44,  127 => 43,  120 => 38,  116 => 36,  110 => 33,  107 => 32,  105 => 31,  101 => 30,  94 => 25,  90 => 23,  84 => 20,  81 => 19,  79 => 18,  75 => 17,  69 => 13,  63 => 10,  59 => 8,  57 => 7,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ form_start(form, {'attr': {'novalidate': 'novalidate'}}) }}

<div class=\"container p-4 shadow rounded bg-light\">
    <h4 class=\"mb-3 text-center\">Modifier la Commande</h4>

    <!-- ✅ Global Form Errors -->
    {% if form_errors(form) %}
        <div class=\"alert alert-danger\">
            <strong>Veuillez corriger les erreurs ci-dessous :</strong>
            {{ form_errors(form) }}
        </div>
    {% endif %}

    <!-- ✅ Adresse de Livraison -->
    <div class=\"mb-3\">
        <label class=\"form-label fw-bold\">Adresse de Livraison</label>
        {{ form_widget(form.adresseLivraison, {'attr': {'class': 'form-control'}}) }}
        {% if form_errors(form.adresseLivraison) %}
            <div class=\"text-danger small\">
                {{ form_errors(form.adresseLivraison) }}
            </div>
        {% else %}
            <div class=\"text-muted small\">Veuillez entrer une adresse valide (min. 5 caractères).</div>
        {% endif %}
    </div>

    <!-- ✅ Méthode de Paiement -->
    <div class=\"mb-3\">
        <label class=\"form-label fw-bold\">Méthode de Paiement</label>
        {{ form_widget(form.paiement, {'attr': {'class': 'form-select'}}) }}
        {% if form_errors(form.paiement) %}
            <div class=\"text-danger small\">
                {{ form_errors(form.paiement) }}
            </div>
        {% else %}
            <div class=\"text-muted small\">Sélectionnez une méthode de paiement parmi: Carte Bancaire, Espèces, ou PayPal.</div>
        {% endif %}
    </div>

    <!-- ✅ Montant Total (Read-only) -->
    <div class=\"mb-3\">
        <label class=\"form-label fw-bold\">Montant Total (TND)</label>
        {{ form_widget(form.montantTotal, {'attr': {'class': 'form-control bg-light', 'readonly': 'readonly'}}) }}
        {% if form_errors(form.montantTotal) %}
            <div class=\"text-danger small\">
                {{ form_errors(form.montantTotal) }}
            </div>
        {% else %}
            <div class=\"text-muted small\">Ce champ est automatiquement calculé.</div>
        {% endif %}
    </div>

    <!-- ✅ Date de Commande -->
    <div class=\"mb-3\">
        <label class=\"form-label fw-bold\">Date de Commande</label>
        {{ form_widget(form.dateCommande, {'attr': {'class': 'form-control'}}) }}
        {% if form_errors(form.dateCommande) %}
            <div class=\"text-danger small\">
                {{ form_errors(form.dateCommande) }}
            </div>
        {% else %}
            <div class=\"text-muted small\">Veuillez entrer une date valide pour la commande.</div>
        {% endif %}
    </div>

    <!-- ✅ Statut -->
    <div class=\"mb-3\">
        <label class=\"form-label fw-bold\">Statut</label>
        {{ form_widget(form.statut, {'attr': {'class': 'form-select'}}) }}
        {% if form_errors(form.statut) %}
            <div class=\"text-danger small\">
                {{ form_errors(form.statut) }}
            </div>
        {% else %}
            <div class=\"text-muted small\">Statut de la commande: En attente, Confirmé ou Annulé.</div>
        {% endif %}
    </div>

    <!-- ✅ Submit Button -->
    <div class=\"text-end\">
        <button type=\"submit\" class=\"btn btn-success\">
            <i class=\"fas fa-save\"></i> {{ button_label|default('Enregistrer') }}
        </button>
    </div>
</div>

{{ form_end(form) }}

<!-- ✅ JavaScript to Enhance Validation Messages -->
<script>
    document.addEventListener(\"DOMContentLoaded\", function () {
        document.querySelector(\"form\").addEventListener(\"submit\", function (event) {
            let errors = [];
            let adresseLivraison = document.querySelector(\"[name='commande[adresseLivraison]']\");
            let paiement = document.querySelector(\"[name='commande[paiement]']\");

            if (!adresseLivraison.value.trim()) {
                errors.push(\"L'adresse de livraison est obligatoire.\");
            } else if (adresseLivraison.value.length < 5) {
                errors.push(\"L'adresse doit contenir au moins 5 caractères.\");
            }

            if (!paiement.value) {
                errors.push(\"Veuillez sélectionner une méthode de paiement.\");
            }

            if (errors.length > 0) {
                event.preventDefault();
                alert(\"Erreurs détectées :\\n\\n\" + errors.join(\"\\n\"));
            }
        });
    });
</script>
", "commande/_form.html.twig", "C:\\Users\\Asus\\Downloads\\WebProject (5)\\WebProject\\templates\\commande\\_form.html.twig");
    }
}
