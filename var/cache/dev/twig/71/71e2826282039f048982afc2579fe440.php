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

/* commande/show.html.twig */
class __TwigTemplate_bf9f1a5d39e7a87bd39fa27d1de2ef56 extends Template
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

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "backoff/admin/baseback.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commande/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commande/show.html.twig"));

        $this->parent = $this->loadTemplate("backoff/admin/baseback.html.twig", "commande/show.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Détails de la Commande";
        
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
        yield "    <div class=\"container mt-5\">
        <h1 class=\"text-center mb-4\"><i class=\"fas fa-receipt\"></i> Détails de la Commande</h1>

        <div class=\"card shadow-lg p-4\">
            <div class=\"card-body\">
                <h5 class=\"card-title\">Commande #";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 11, $this->source); })()), "id", [], "any", false, false, false, 11), "html", null, true);
        yield "</h5>
                <hr>
                <p><strong>Date Commande:</strong> ";
        // line 13
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 13, $this->source); })()), "dateCommande", [], "any", false, false, false, 13)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 13, $this->source); })()), "dateCommande", [], "any", false, false, false, 13), "Y-m-d"), "html", null, true)) : ("N/A"));
        yield "</p>
                <p><strong>Montant Total:</strong> <span class=\"fw-bold text-success\">";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 14, $this->source); })()), "montantTotal", [], "any", false, false, false, 14), "html", null, true);
        yield " TND</span></p>
                <p><strong>Statut:</strong>
                    <span class=\"badge ";
        // line 16
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 16, $this->source); })()), "statut", [], "any", false, false, false, 16) == "Confirmé")) {
            yield "bg-success";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 16, $this->source); })()), "statut", [], "any", false, false, false, 16) == "En attente")) {
            yield "bg-warning";
        } else {
            yield "bg-danger";
        }
        yield "\">
                    ";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 17, $this->source); })()), "statut", [], "any", false, false, false, 17), "html", null, true);
        yield "
                </span>
                </p>
                <p><strong>Adresse Livraison:</strong> ";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 20, $this->source); })()), "adresseLivraison", [], "any", false, false, false, 20), "html", null, true);
        yield "</p>
                <p><strong>Méthode de Paiement:</strong> ";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 21, $this->source); })()), "paiement", [], "any", false, false, false, 21), "html", null, true);
        yield "</p>
            </div>
        </div>

        <!-- ✅ Section des Produits Commandés -->
        <div class=\"card mt-4 shadow-lg\">
            <div class=\"card-header bg-primary text-white\">
                <h5 class=\"mb-0\"><i class=\"fas fa-box\"></i> Produits Commandés</h5>
            </div>
            <div class=\"card-body\">
                ";
        // line 31
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 31, $this->source); })()), "idLignedecommande", [], "any", false, false, false, 31)) > 0)) {
            // line 32
            yield "                    <table class=\"table table-bordered table-hover\">
                        <thead class=\"table-light\">
                        <tr>
                            <th>Produit</th>
                            <th>Quantité</th>
                            <th>Prix Unitaire</th>
                            <th>Total</th>
                        </tr>
                        </thead>
                        <tbody>
                        ";
            // line 42
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 42, $this->source); })()), "idLignedecommande", [], "any", false, false, false, 42));
            foreach ($context['_seq'] as $context["_key"] => $context["ligne"]) {
                // line 43
                yield "                            <tr>
                                <td>";
                // line 44
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["ligne"], "idProduit", [], "any", false, false, false, 44), "nomProduit", [], "any", false, false, false, 44), "html", null, true);
                yield "</td>
                                <td>";
                // line 45
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ligne"], "quantite", [], "any", false, false, false, 45), "html", null, true);
                yield "</td>
                                <td>";
                // line 46
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ligne"], "prixUnitaire", [], "any", false, false, false, 46), "html", null, true);
                yield " TND</td>
                                <td class=\"fw-bold text-success\">";
                // line 47
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, $context["ligne"], "quantite", [], "any", false, false, false, 47) * CoreExtension::getAttribute($this->env, $this->source, $context["ligne"], "prixUnitaire", [], "any", false, false, false, 47)), "html", null, true);
                yield " TND</td>
                            </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['ligne'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            yield "                        </tbody>
                    </table>
                ";
        } else {
            // line 53
            yield "                    <p class=\"text-muted\">Aucun produit trouvé pour cette commande.</p>
                ";
        }
        // line 55
        yield "            </div>
        </div>

        <!-- ✅ Boutons d'Action -->
        <div class=\"mt-4 d-flex justify-content-between align-items-center\">
            <a href=\"";
        // line 60
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_commande_index");
        yield "\" class=\"btn btn-secondary\">
                <i class=\"fas fa-arrow-left\"></i> Retour à la Liste
            </a>
            <div>
                <a href=\"";
        // line 64
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_commande_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 64, $this->source); })()), "id", [], "any", false, false, false, 64)]), "html", null, true);
        yield "\" class=\"btn btn-primary\">
                    <i class=\"fas fa-edit\"></i> Modifier
                </a>
                ";
        // line 67
        yield Twig\Extension\CoreExtension::include($this->env, $context, "commande/_delete_form.html.twig");
        yield "
            </div>
        </div>
    </div>

    <!-- ✅ Bootstrap Icons & Styling -->
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css\">
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js\"></script>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "commande/show.html.twig";
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
        return array (  225 => 67,  219 => 64,  212 => 60,  205 => 55,  201 => 53,  196 => 50,  187 => 47,  183 => 46,  179 => 45,  175 => 44,  172 => 43,  168 => 42,  156 => 32,  154 => 31,  141 => 21,  137 => 20,  131 => 17,  121 => 16,  116 => 14,  112 => 13,  107 => 11,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'backoff/admin/baseback.html.twig' %}

{% block title %}Détails de la Commande{% endblock %}

{% block body %}
    <div class=\"container mt-5\">
        <h1 class=\"text-center mb-4\"><i class=\"fas fa-receipt\"></i> Détails de la Commande</h1>

        <div class=\"card shadow-lg p-4\">
            <div class=\"card-body\">
                <h5 class=\"card-title\">Commande #{{ commande.id }}</h5>
                <hr>
                <p><strong>Date Commande:</strong> {{ commande.dateCommande ? commande.dateCommande|date('Y-m-d') : 'N/A' }}</p>
                <p><strong>Montant Total:</strong> <span class=\"fw-bold text-success\">{{ commande.montantTotal }} TND</span></p>
                <p><strong>Statut:</strong>
                    <span class=\"badge {% if commande.statut == 'Confirmé' %}bg-success{% elseif commande.statut == 'En attente' %}bg-warning{% else %}bg-danger{% endif %}\">
                    {{ commande.statut }}
                </span>
                </p>
                <p><strong>Adresse Livraison:</strong> {{ commande.adresseLivraison }}</p>
                <p><strong>Méthode de Paiement:</strong> {{ commande.paiement }}</p>
            </div>
        </div>

        <!-- ✅ Section des Produits Commandés -->
        <div class=\"card mt-4 shadow-lg\">
            <div class=\"card-header bg-primary text-white\">
                <h5 class=\"mb-0\"><i class=\"fas fa-box\"></i> Produits Commandés</h5>
            </div>
            <div class=\"card-body\">
                {% if commande.idLignedecommande|length > 0 %}
                    <table class=\"table table-bordered table-hover\">
                        <thead class=\"table-light\">
                        <tr>
                            <th>Produit</th>
                            <th>Quantité</th>
                            <th>Prix Unitaire</th>
                            <th>Total</th>
                        </tr>
                        </thead>
                        <tbody>
                        {% for ligne in commande.idLignedecommande %}
                            <tr>
                                <td>{{ ligne.idProduit.nomProduit }}</td>
                                <td>{{ ligne.quantite }}</td>
                                <td>{{ ligne.prixUnitaire }} TND</td>
                                <td class=\"fw-bold text-success\">{{ ligne.quantite * ligne.prixUnitaire }} TND</td>
                            </tr>
                        {% endfor %}
                        </tbody>
                    </table>
                {% else %}
                    <p class=\"text-muted\">Aucun produit trouvé pour cette commande.</p>
                {% endif %}
            </div>
        </div>

        <!-- ✅ Boutons d'Action -->
        <div class=\"mt-4 d-flex justify-content-between align-items-center\">
            <a href=\"{{ path('app_commande_index') }}\" class=\"btn btn-secondary\">
                <i class=\"fas fa-arrow-left\"></i> Retour à la Liste
            </a>
            <div>
                <a href=\"{{ path('app_commande_edit', {'id': commande.id}) }}\" class=\"btn btn-primary\">
                    <i class=\"fas fa-edit\"></i> Modifier
                </a>
                {{ include('commande/_delete_form.html.twig') }}
            </div>
        </div>
    </div>

    <!-- ✅ Bootstrap Icons & Styling -->
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css\">
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js\"></script>

{% endblock %}
", "commande/show.html.twig", "C:\\Users\\Asus\\Downloads\\WebProject (5)\\WebProject\\templates\\commande\\show.html.twig");
    }
}
