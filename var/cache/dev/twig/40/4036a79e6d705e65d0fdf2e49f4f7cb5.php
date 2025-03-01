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

/* commande/index.html.twig */
class __TwigTemplate_aa50b9db298f64a18787181a5bed475d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commande/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commande/index.html.twig"));

        $this->parent = $this->loadTemplate("backoff/admin/baseback.html.twig", "commande/index.html.twig", 1);
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

        yield "Gestion des Commandes";
        
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
        <h1 class=\"text-center mb-4\"><i class=\"fas fa-box\"></i> Gestion des Commandes</h1>

        <!-- ✅ Search Bar -->
        <div class=\"row mb-3\">
            <div class=\"col-md-6\">
                <div class=\"input-group search-group\">
                    <span class=\"input-group-text bg-white border-end-0\" id=\"search-icon\">
                        <i class=\"fas fa-search\"></i>
                    </span>
                    <input type=\"text\"
                           id=\"search-input\"
                           class=\"form-control border-start-0 search-bar\"
                           placeholder=\"Rechercher une commande...\"
                           aria-label=\"Rechercher\"
                           aria-describedby=\"search-icon\">
                     </div>
                <a href=\"";
        // line 23
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("commande_stats");
        yield "\" class=\"btn btn-success search-bar-button\">
                    <i class=\"fas fa-chart-bar\"></i> Statistiques
                </a>
            </div>
        </div>

        <!-- ✅ Responsive Table -->
        <div class=\"table-responsive\">
            <table class=\"table table-bordered table-hover shadow-sm\">
                <thead class=\"table-dark\">
                <tr>
                    <th>ID</th>
                    <th>Date Commande</th>
                    <th>Montant Total</th>
                    <th>Statut</th>
                    <th>Adresse Livraison</th>
                    <th>Paiement</th>
                    <th class=\"text-center\">Actions</th>
                </tr>
                </thead>
                <tbody id=\"commande-table-body\">
                ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["commandes"]) || array_key_exists("commandes", $context) ? $context["commandes"] : (function () { throw new RuntimeError('Variable "commandes" does not exist.', 44, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["commande"]) {
            // line 45
            yield "                    <tr>
                        <td>";
            // line 46
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "id", [], "any", false, false, false, 46), "html", null, true);
            yield "</td>
                        <td>";
            // line 47
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "dateCommande", [], "any", false, false, false, 47)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "dateCommande", [], "any", false, false, false, 47), "Y-m-d"), "html", null, true)) : ("N/A"));
            yield "</td>
                        <td>";
            // line 48
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "montantTotal", [], "any", false, false, false, 48), "html", null, true);
            yield " TND</td>
                        <td>
                            <span class=\"badge ";
            // line 50
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "statut", [], "any", false, false, false, 50) == "Confirmé")) {
                yield "bg-success";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "statut", [], "any", false, false, false, 50) == "En attente")) {
                yield "bg-warning";
            } else {
                yield "bg-danger";
            }
            yield "\">
                                ";
            // line 51
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "statut", [], "any", false, false, false, 51), "html", null, true);
            yield "
                            </span>
                        </td>
                        <td>";
            // line 54
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "adresseLivraison", [], "any", false, false, false, 54), "html", null, true);
            yield "</td>
                        <td>";
            // line 55
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "paiement", [], "any", false, false, false, 55), "html", null, true);
            yield "</td>
                        <td class=\"text-center\">
                            <a href=\"";
            // line 57
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_commande_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "id", [], "any", false, false, false, 57)]), "html", null, true);
            yield "\" class=\"btn btn-info btn-sm\">
                                <i class=\"fas fa-eye\"></i> Voir
                            </a>
                            <a href=\"";
            // line 60
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_commande_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "id", [], "any", false, false, false, 60)]), "html", null, true);
            yield "\" class=\"btn btn-primary btn-sm\">
                                <i class=\"fas fa-edit\"></i> Modifier
                            </a>
                            <a href=\"";
            // line 63
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_commande_pdf", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "id", [], "any", false, false, false, 63)]), "html", null, true);
            yield "\" class=\"btn btn-danger btn-sm\" target=\"_blank\">
                                <i class=\"fas fa-file-pdf\"></i> PDF
                            </a>
                        </td>
                    </tr>
                ";
            $context['_iterated'] = true;
        }
        // line 72
        if (!$context['_iterated']) {
            // line 69
            yield "                    <tr>
                        <td colspan=\"7\" class=\"text-center text-muted\">Aucune commande trouvée.</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['commande'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        yield "                </tbody>
            </table>
        </div>
    </div>

    <!-- ✅ AJAX Script for Live Search -->
    <script>
        document.addEventListener(\"DOMContentLoaded\", function () {
            let searchInput = document.getElementById(\"search-input\");

            searchInput.addEventListener(\"input\", function () {
                let query = searchInput.value.trim();
                fetch(`/commande/back?search=\${encodeURIComponent(query)}`, {
                    headers: {
                        \"X-Requested-With\": \"XMLHttpRequest\"
                    }
                })
                    .then(response => response.json())
                    .then(data => {
                        let tableBody = document.getElementById(\"commande-table-body\");
                        tableBody.innerHTML = \"\";

                        if (data.commandes.length > 0) {
                            data.commandes.forEach(commande => {
                                let row = document.createElement(\"tr\");
                                row.innerHTML = `
                                <td>\${commande.id}</td>
                                <td>\${commande.dateCommande}</td>
                                <td>\${commande.montantTotal} TND</td>
                                <td>
                                    <span class=\"badge \${commande.statut === 'Confirmé' ? 'bg-success' : commande.statut === 'En attente' ? 'bg-warning' : 'bg-danger'}\">
                                        \${commande.statut}
                                    </span>
                                </td>
                                <td>\${commande.adresseLivraison}</td>
                                <td>\${commande.paiement}</td>
                                <td class=\"text-center\">
                                    <a href=\"/commande/\${commande.id}\" class=\"btn btn-info btn-sm\">
                                        <i class=\"fas fa-eye\"></i> Voir
                                    </a>
                                    <a href=\"/commande/\${commande.id}/edit\" class=\"btn btn-primary btn-sm\">
                                        <i class=\"fas fa-edit\"></i> Modifier
                                    </a>
                                </td>
                            `;
                                tableBody.appendChild(row);
                            });
                        } else {
                            tableBody.innerHTML = `<tr><td colspan=\"7\" class=\"text-center text-muted\">Aucune commande trouvée.</td></tr>`;
                        }
                    })
                    .catch(error => console.error(\"Erreur lors de la recherche:\", error));
            });
        });
    </script>

    <!-- ✅ Bootstrap & FontAwesome -->
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
        return "commande/index.html.twig";
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
        return array (  222 => 73,  213 => 69,  211 => 72,  201 => 63,  195 => 60,  189 => 57,  184 => 55,  180 => 54,  174 => 51,  164 => 50,  159 => 48,  155 => 47,  151 => 46,  148 => 45,  143 => 44,  119 => 23,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'backoff/admin/baseback.html.twig' %}

{% block title %}Gestion des Commandes{% endblock %}

{% block body %}
    <div class=\"container mt-5\">
        <h1 class=\"text-center mb-4\"><i class=\"fas fa-box\"></i> Gestion des Commandes</h1>

        <!-- ✅ Search Bar -->
        <div class=\"row mb-3\">
            <div class=\"col-md-6\">
                <div class=\"input-group search-group\">
                    <span class=\"input-group-text bg-white border-end-0\" id=\"search-icon\">
                        <i class=\"fas fa-search\"></i>
                    </span>
                    <input type=\"text\"
                           id=\"search-input\"
                           class=\"form-control border-start-0 search-bar\"
                           placeholder=\"Rechercher une commande...\"
                           aria-label=\"Rechercher\"
                           aria-describedby=\"search-icon\">
                     </div>
                <a href=\"{{ path('commande_stats') }}\" class=\"btn btn-success search-bar-button\">
                    <i class=\"fas fa-chart-bar\"></i> Statistiques
                </a>
            </div>
        </div>

        <!-- ✅ Responsive Table -->
        <div class=\"table-responsive\">
            <table class=\"table table-bordered table-hover shadow-sm\">
                <thead class=\"table-dark\">
                <tr>
                    <th>ID</th>
                    <th>Date Commande</th>
                    <th>Montant Total</th>
                    <th>Statut</th>
                    <th>Adresse Livraison</th>
                    <th>Paiement</th>
                    <th class=\"text-center\">Actions</th>
                </tr>
                </thead>
                <tbody id=\"commande-table-body\">
                {% for commande in commandes %}
                    <tr>
                        <td>{{ commande.id }}</td>
                        <td>{{ commande.dateCommande ? commande.dateCommande|date('Y-m-d') : 'N/A' }}</td>
                        <td>{{ commande.montantTotal }} TND</td>
                        <td>
                            <span class=\"badge {% if commande.statut == 'Confirmé' %}bg-success{% elseif commande.statut == 'En attente' %}bg-warning{% else %}bg-danger{% endif %}\">
                                {{ commande.statut }}
                            </span>
                        </td>
                        <td>{{ commande.adresseLivraison }}</td>
                        <td>{{ commande.paiement }}</td>
                        <td class=\"text-center\">
                            <a href=\"{{ path('app_commande_show', {'id': commande.id}) }}\" class=\"btn btn-info btn-sm\">
                                <i class=\"fas fa-eye\"></i> Voir
                            </a>
                            <a href=\"{{ path('app_commande_edit', {'id': commande.id}) }}\" class=\"btn btn-primary btn-sm\">
                                <i class=\"fas fa-edit\"></i> Modifier
                            </a>
                            <a href=\"{{ path('app_commande_pdf', {'id': commande.id}) }}\" class=\"btn btn-danger btn-sm\" target=\"_blank\">
                                <i class=\"fas fa-file-pdf\"></i> PDF
                            </a>
                        </td>
                    </tr>
                {% else %}
                    <tr>
                        <td colspan=\"7\" class=\"text-center text-muted\">Aucune commande trouvée.</td>
                    </tr>
                {% endfor %}
                </tbody>
            </table>
        </div>
    </div>

    <!-- ✅ AJAX Script for Live Search -->
    <script>
        document.addEventListener(\"DOMContentLoaded\", function () {
            let searchInput = document.getElementById(\"search-input\");

            searchInput.addEventListener(\"input\", function () {
                let query = searchInput.value.trim();
                fetch(`/commande/back?search=\${encodeURIComponent(query)}`, {
                    headers: {
                        \"X-Requested-With\": \"XMLHttpRequest\"
                    }
                })
                    .then(response => response.json())
                    .then(data => {
                        let tableBody = document.getElementById(\"commande-table-body\");
                        tableBody.innerHTML = \"\";

                        if (data.commandes.length > 0) {
                            data.commandes.forEach(commande => {
                                let row = document.createElement(\"tr\");
                                row.innerHTML = `
                                <td>\${commande.id}</td>
                                <td>\${commande.dateCommande}</td>
                                <td>\${commande.montantTotal} TND</td>
                                <td>
                                    <span class=\"badge \${commande.statut === 'Confirmé' ? 'bg-success' : commande.statut === 'En attente' ? 'bg-warning' : 'bg-danger'}\">
                                        \${commande.statut}
                                    </span>
                                </td>
                                <td>\${commande.adresseLivraison}</td>
                                <td>\${commande.paiement}</td>
                                <td class=\"text-center\">
                                    <a href=\"/commande/\${commande.id}\" class=\"btn btn-info btn-sm\">
                                        <i class=\"fas fa-eye\"></i> Voir
                                    </a>
                                    <a href=\"/commande/\${commande.id}/edit\" class=\"btn btn-primary btn-sm\">
                                        <i class=\"fas fa-edit\"></i> Modifier
                                    </a>
                                </td>
                            `;
                                tableBody.appendChild(row);
                            });
                        } else {
                            tableBody.innerHTML = `<tr><td colspan=\"7\" class=\"text-center text-muted\">Aucune commande trouvée.</td></tr>`;
                        }
                    })
                    .catch(error => console.error(\"Erreur lors de la recherche:\", error));
            });
        });
    </script>

    <!-- ✅ Bootstrap & FontAwesome -->
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css\">
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js\"></script>

{% endblock %}
", "commande/index.html.twig", "C:\\Users\\Asus\\Downloads\\WebProject (5)\\WebProject\\templates\\commande\\index.html.twig");
    }
}
