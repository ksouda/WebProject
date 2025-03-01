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

/* produit/indexbackproduit.html.twig */
class __TwigTemplate_ca9bac4c9b851914d3995c58a04d19d5 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/indexbackproduit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/indexbackproduit.html.twig"));

        $this->parent = $this->loadTemplate("backoff/admin/baseback.html.twig", "produit/indexbackproduit.html.twig", 1);
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

        // line 4
        yield "    Boutique | Gestion des Produits
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 7
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

        // line 8
        yield "    <div class=\"container mt-5\">
        <h1 class=\"text-center fw-bold text-uppercase mb-4\">Gestion des Produits</h1>
        <div class=\"text-center mt-4\">


        </div>

        <!-- Row with search bar on the left and round 'plus' button on the right -->
        <div class=\"row mb-3\">
            <!-- Search Bar -->
            <div class=\"col-md-6\">
                <div class=\"input-group search-group\">
                    <span class=\"input-group-text bg-white border-end-0\" id=\"search-icon\">
                        <i class=\"fas fa-search\"></i>
                    </span>
                    <input type=\"text\"
                           id=\"search-input\"
                           class=\"form-control border-start-0 search-bar\"
                           placeholder=\"Rechercher...\"
                           aria-label=\"Rechercher\"
                           aria-describedby=\"search-icon\">
                </div>

            </div>


            <!-- Small round plus button (top-right) -->
            <div class=\"col-md-6 text-end\">
                <!-- Add Product Button -->
                <a href=\"";
        // line 37
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produit_new");
        yield "\"
                   class=\"btn plus-button me-2\"
                   data-bs-toggle=\"tooltip\"
                   data-bs-placement=\"left\"
                   title=\"Ajouter un Produit\">
                    <i class=\"fas fa-plus\"></i>
                </a>
                <a href=\"";
        // line 44
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produit_stats");
        yield "\" class=\"btn btn-success search-bar-button\">
                    <i class=\"fas fa-chart-bar\"></i> Statistiques
                </a>
                <a href=\"";
        // line 47
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produit_stats2");
        yield "\" class=\"btn btn-success search-bar-button\">
                    <i class=\"fas fa-chart-bar\"></i> Statistiques
                </a>

                <a href=\"";
        // line 51
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produit_trier");
        yield "\" class=\"btn btn-warning\">
                    <i class=\"fas fa-sort\"></i> Trier les Produits
                </a>
                <!-- Add Promotion Button -->
                <a href=\"";
        // line 55
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_promotion_new");
        yield "\"
                   class=\"btn promo-button\"
                   data-bs-toggle=\"tooltip\"
                   data-bs-placement=\"left\"
                   title=\"Ajouter une Promotion\">
                    <i class=\"fas fa-tags\"></i> Ajouter Promo
                </a>
            </div>

        </div>

        <!-- Tableau des Produits -->


        <!-- Table for displaying results -->
        <table class=\"table table-hover table-bordered table-striped text-center\">
            <thead class=\"table-dark\">
            <tr>
                <th>ID Produit</th>
                <th>Nom du Produit</th>
                <th>Catégorie</th>
                <th>Prix</th>
                <th>Stock</th>
                <th>Statut</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody id=\"produit-table-body\">
            ";
        // line 83
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 83, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 84
            yield "                <tr>
                    <td>";
            // line 85
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 85), "html", null, true);
            yield "</td>
                    <td>";
            // line 86
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "nomProduit", [], "any", false, false, false, 86), "html", null, true);
            yield "</td>
                    <td>";
            // line 87
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "categorie", [], "any", false, false, false, 87), "html", null, true);
            yield "</td>
                    <td>";
            // line 88
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "prix", [], "any", false, false, false, 88), "html", null, true);
            yield " TND</td>
                    <td>";
            // line 89
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "stock", [], "any", false, false, false, 89), "html", null, true);
            yield "</td>
                    <td>
                        ";
            // line 91
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "statut", [], "any", false, false, false, 91) == "Disponible")) {
                // line 92
                yield "                            <span class=\"badge bg-success\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "statut", [], "any", false, false, false, 92), "html", null, true);
                yield "</span>
                        ";
            } else {
                // line 94
                yield "                            <span class=\"badge bg-danger\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "statut", [], "any", false, false, false, 94), "html", null, true);
                yield "</span>
                        ";
            }
            // line 96
            yield "                    </td>
                    <td>
                        <a href=\"";
            // line 98
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produit_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 98)]), "html", null, true);
            yield "\"
                           class=\"btn btn-outline-primary btn-sm me-2\">
                            <i class=\"fas fa-eye\"></i> Voir
                        </a>
                        <a href=\"";
            // line 102
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produit_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 102)]), "html", null, true);
            yield "\"
                           class=\"btn btn-outline-warning btn-sm\">
                            <i class=\"fas fa-edit\"></i> Modifier
                        </a>
                    </td>
                </tr>
            ";
            $context['_iterated'] = true;
        }
        // line 112
        if (!$context['_iterated']) {
            // line 109
            yield "                <tr>
                    <td colspan=\"7\" class=\"text-muted\">Aucun produit disponible pour le moment.</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['produit'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 113
        yield "            </tbody>
        </table>

    </div>

    <!-- FontAwesome for icons -->
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css\">

    <!-- Custom Styles -->
    <style>
        /* Keep the search bar narrower */
        .search-group {
            max-width: 300px; /* adjust as needed */
        }

        /* Rounded search field */
        .search-bar {
            border-radius: 25px;
            outline: none;
            box-shadow: none;
        }

        /* Round the left side of the icon area */
        #search-icon {
            border-radius: 25px 0 0 25px;
            border-right: none;
        }

        /* Small, circular button with a plus icon */
        .plus-button {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            padding: 0;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            background-color: #198754; /* matches .btn-success from Bootstrap */
            color: #fff;
            border: none;
        }

        /* Hover state for the plus button */
        .plus-button:hover {
            background-color: #157347;
        }
        /* Plus button (Add Product) */
        .plus-button {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            padding: 0;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            background-color: #198754; /* Green */
            color: #fff;
            border: none;
            transition: 0.3s;
        }

        .plus-button:hover {
            background-color: #157347;
        }
        .search-bar-button {
            background: #28a745; /* Bootstrap success green */
            color: white;
            font-size: 14px;
            padding: 8px 16px;
            border-radius: 20px;
            text-transform: uppercase;
            font-weight: bold;
            transition: all 0.3s ease-in-out;
            display: inline-flex;
            align-items: center;
            gap: 8px; /* Space between icon and text */
        }

        .search-bar-button i {
            font-size: 16px; /* Icon size */
        }

        .search-bar-button:hover {
            background: #218838;
            transform: scale(1.05);
            box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.2);
        }

        /* Promotion button */
        .promo-button {
            padding: 10px 15px;
            border-radius: 20px;
            background-color: #0d6efd; /* Bootstrap primary blue */
            color: white;
            font-weight: bold;
            text-decoration: none;
            transition: 0.3s ease-in-out;
        }

        .promo-button:hover {
            background-color: #0b5ed7;
        }

    </style>
    <script>
        document.addEventListener(\"DOMContentLoaded\", function () {
            let searchInput = document.getElementById(\"search-input\");

            searchInput.addEventListener(\"input\", function () {
                let query = searchInput.value.trim();
                fetch(`/produit/back?search=\${encodeURIComponent(query)}`, {
                    headers: {
                        \"X-Requested-With\": \"XMLHttpRequest\"
                    }
                })
                    .then(response => response.json())
                    .then(data => {
                        let tableBody = document.getElementById(\"produit-table-body\");
                        tableBody.innerHTML = \"\";

                        if (data.produits.length > 0) {
                            data.produits.forEach(produit => {
                                let row = document.createElement(\"tr\");
                                row.innerHTML = `
                        <td>\${produit.id}</td>
                        <td>\${produit.nomProduit}</td>
                        <td>\${produit.categorie}</td>
                        <td>\${produit.prix} TND</td>
                        <td>\${produit.stock}</td>
                        <td>
                            <span class=\"badge \${produit.statut === 'Disponible' ? 'bg-success' : 'bg-danger'}\">
                                \${produit.statut}
                            </span>
                        </td>
                        <td>
                            <a href=\"/produit/\${produit.id}\" class=\"btn btn-outline-primary btn-sm me-2\">
                                <i class=\"fas fa-eye\"></i> Voir
                            </a>
                            <a href=\"/produit/\${produit.id}/edit\" class=\"btn btn-outline-warning btn-sm\">
                                <i class=\"fas fa-edit\"></i> Modifier
                            </a>
                        </td>
                    `;
                                tableBody.appendChild(row);
                            });
                        } else {
                            tableBody.innerHTML = `<tr><td colspan=\"7\" class=\"text-muted\">Aucun produit trouvé.</td></tr>`;
                        }
                    })
                    .catch(error => console.error(\"Erreur lors de la recherche:\", error));
            });
        });
    </script>

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
        return "produit/indexbackproduit.html.twig";
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
        return array (  270 => 113,  261 => 109,  259 => 112,  248 => 102,  241 => 98,  237 => 96,  231 => 94,  225 => 92,  223 => 91,  218 => 89,  214 => 88,  210 => 87,  206 => 86,  202 => 85,  199 => 84,  194 => 83,  163 => 55,  156 => 51,  149 => 47,  143 => 44,  133 => 37,  102 => 8,  89 => 7,  77 => 4,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'backoff/admin/baseback.html.twig' %}

{% block title %}
    Boutique | Gestion des Produits
{% endblock %}

{% block body %}
    <div class=\"container mt-5\">
        <h1 class=\"text-center fw-bold text-uppercase mb-4\">Gestion des Produits</h1>
        <div class=\"text-center mt-4\">


        </div>

        <!-- Row with search bar on the left and round 'plus' button on the right -->
        <div class=\"row mb-3\">
            <!-- Search Bar -->
            <div class=\"col-md-6\">
                <div class=\"input-group search-group\">
                    <span class=\"input-group-text bg-white border-end-0\" id=\"search-icon\">
                        <i class=\"fas fa-search\"></i>
                    </span>
                    <input type=\"text\"
                           id=\"search-input\"
                           class=\"form-control border-start-0 search-bar\"
                           placeholder=\"Rechercher...\"
                           aria-label=\"Rechercher\"
                           aria-describedby=\"search-icon\">
                </div>

            </div>


            <!-- Small round plus button (top-right) -->
            <div class=\"col-md-6 text-end\">
                <!-- Add Product Button -->
                <a href=\"{{ path('app_produit_new') }}\"
                   class=\"btn plus-button me-2\"
                   data-bs-toggle=\"tooltip\"
                   data-bs-placement=\"left\"
                   title=\"Ajouter un Produit\">
                    <i class=\"fas fa-plus\"></i>
                </a>
                <a href=\"{{ path('produit_stats') }}\" class=\"btn btn-success search-bar-button\">
                    <i class=\"fas fa-chart-bar\"></i> Statistiques
                </a>
                <a href=\"{{ path('produit_stats2') }}\" class=\"btn btn-success search-bar-button\">
                    <i class=\"fas fa-chart-bar\"></i> Statistiques
                </a>

                <a href=\"{{ path('app_produit_trier') }}\" class=\"btn btn-warning\">
                    <i class=\"fas fa-sort\"></i> Trier les Produits
                </a>
                <!-- Add Promotion Button -->
                <a href=\"{{ path('app_promotion_new') }}\"
                   class=\"btn promo-button\"
                   data-bs-toggle=\"tooltip\"
                   data-bs-placement=\"left\"
                   title=\"Ajouter une Promotion\">
                    <i class=\"fas fa-tags\"></i> Ajouter Promo
                </a>
            </div>

        </div>

        <!-- Tableau des Produits -->


        <!-- Table for displaying results -->
        <table class=\"table table-hover table-bordered table-striped text-center\">
            <thead class=\"table-dark\">
            <tr>
                <th>ID Produit</th>
                <th>Nom du Produit</th>
                <th>Catégorie</th>
                <th>Prix</th>
                <th>Stock</th>
                <th>Statut</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody id=\"produit-table-body\">
            {% for produit in produits %}
                <tr>
                    <td>{{ produit.id }}</td>
                    <td>{{ produit.nomProduit }}</td>
                    <td>{{ produit.categorie }}</td>
                    <td>{{ produit.prix }} TND</td>
                    <td>{{ produit.stock }}</td>
                    <td>
                        {% if produit.statut == 'Disponible' %}
                            <span class=\"badge bg-success\">{{ produit.statut }}</span>
                        {% else %}
                            <span class=\"badge bg-danger\">{{ produit.statut }}</span>
                        {% endif %}
                    </td>
                    <td>
                        <a href=\"{{ path('app_produit_show', {'id': produit.id}) }}\"
                           class=\"btn btn-outline-primary btn-sm me-2\">
                            <i class=\"fas fa-eye\"></i> Voir
                        </a>
                        <a href=\"{{ path('app_produit_edit', {'id': produit.id}) }}\"
                           class=\"btn btn-outline-warning btn-sm\">
                            <i class=\"fas fa-edit\"></i> Modifier
                        </a>
                    </td>
                </tr>
            {% else %}
                <tr>
                    <td colspan=\"7\" class=\"text-muted\">Aucun produit disponible pour le moment.</td>
                </tr>
            {% endfor %}
            </tbody>
        </table>

    </div>

    <!-- FontAwesome for icons -->
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css\">

    <!-- Custom Styles -->
    <style>
        /* Keep the search bar narrower */
        .search-group {
            max-width: 300px; /* adjust as needed */
        }

        /* Rounded search field */
        .search-bar {
            border-radius: 25px;
            outline: none;
            box-shadow: none;
        }

        /* Round the left side of the icon area */
        #search-icon {
            border-radius: 25px 0 0 25px;
            border-right: none;
        }

        /* Small, circular button with a plus icon */
        .plus-button {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            padding: 0;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            background-color: #198754; /* matches .btn-success from Bootstrap */
            color: #fff;
            border: none;
        }

        /* Hover state for the plus button */
        .plus-button:hover {
            background-color: #157347;
        }
        /* Plus button (Add Product) */
        .plus-button {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            padding: 0;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            background-color: #198754; /* Green */
            color: #fff;
            border: none;
            transition: 0.3s;
        }

        .plus-button:hover {
            background-color: #157347;
        }
        .search-bar-button {
            background: #28a745; /* Bootstrap success green */
            color: white;
            font-size: 14px;
            padding: 8px 16px;
            border-radius: 20px;
            text-transform: uppercase;
            font-weight: bold;
            transition: all 0.3s ease-in-out;
            display: inline-flex;
            align-items: center;
            gap: 8px; /* Space between icon and text */
        }

        .search-bar-button i {
            font-size: 16px; /* Icon size */
        }

        .search-bar-button:hover {
            background: #218838;
            transform: scale(1.05);
            box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.2);
        }

        /* Promotion button */
        .promo-button {
            padding: 10px 15px;
            border-radius: 20px;
            background-color: #0d6efd; /* Bootstrap primary blue */
            color: white;
            font-weight: bold;
            text-decoration: none;
            transition: 0.3s ease-in-out;
        }

        .promo-button:hover {
            background-color: #0b5ed7;
        }

    </style>
    <script>
        document.addEventListener(\"DOMContentLoaded\", function () {
            let searchInput = document.getElementById(\"search-input\");

            searchInput.addEventListener(\"input\", function () {
                let query = searchInput.value.trim();
                fetch(`/produit/back?search=\${encodeURIComponent(query)}`, {
                    headers: {
                        \"X-Requested-With\": \"XMLHttpRequest\"
                    }
                })
                    .then(response => response.json())
                    .then(data => {
                        let tableBody = document.getElementById(\"produit-table-body\");
                        tableBody.innerHTML = \"\";

                        if (data.produits.length > 0) {
                            data.produits.forEach(produit => {
                                let row = document.createElement(\"tr\");
                                row.innerHTML = `
                        <td>\${produit.id}</td>
                        <td>\${produit.nomProduit}</td>
                        <td>\${produit.categorie}</td>
                        <td>\${produit.prix} TND</td>
                        <td>\${produit.stock}</td>
                        <td>
                            <span class=\"badge \${produit.statut === 'Disponible' ? 'bg-success' : 'bg-danger'}\">
                                \${produit.statut}
                            </span>
                        </td>
                        <td>
                            <a href=\"/produit/\${produit.id}\" class=\"btn btn-outline-primary btn-sm me-2\">
                                <i class=\"fas fa-eye\"></i> Voir
                            </a>
                            <a href=\"/produit/\${produit.id}/edit\" class=\"btn btn-outline-warning btn-sm\">
                                <i class=\"fas fa-edit\"></i> Modifier
                            </a>
                        </td>
                    `;
                                tableBody.appendChild(row);
                            });
                        } else {
                            tableBody.innerHTML = `<tr><td colspan=\"7\" class=\"text-muted\">Aucun produit trouvé.</td></tr>`;
                        }
                    })
                    .catch(error => console.error(\"Erreur lors de la recherche:\", error));
            });
        });
    </script>

{% endblock %}
", "produit/indexbackproduit.html.twig", "C:\\Users\\MSI\\Downloads\\WebProject (5) - Copie\\WebProject (5) - Copie\\WebProject\\templates\\produit\\indexbackproduit.html.twig");
    }
}
