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

/* produit/stat2.html.twig */
class __TwigTemplate_983060b527a37c774ac59a19177a3b2a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/stat2.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/stat2.html.twig"));

        $this->parent = $this->loadTemplate("backoff/admin/baseback.html.twig", "produit/stat2.html.twig", 1);
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

        yield "Statistiques des Produits";
        
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
        <h1 class=\"text-center fw-bold text-uppercase mb-4\">📊 Statistiques des Produits</h1>

        <!-- 📝 Summary Section -->
        <div class=\"row text-center mb-4\">
            <div class=\"col-md-4\">
                <div class=\"alert alert-primary\">
                    <h3>📦 Total Produits</h3>
                    <h2 class=\"fw-bold\">";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalProducts"]) || array_key_exists("totalProducts", $context) ? $context["totalProducts"] : (function () { throw new RuntimeError('Variable "totalProducts" does not exist.', 14, $this->source); })()), "html", null, true);
        yield "</h2>
                </div>
            </div>
            <div class=\"col-md-4\">
                <div class=\"alert alert-success\">
                    <h3>🔥 Produits en Promotion</h3>
                    <h2 class=\"fw-bold\">";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["promotedProductsCount"]) || array_key_exists("promotedProductsCount", $context) ? $context["promotedProductsCount"] : (function () { throw new RuntimeError('Variable "promotedProductsCount" does not exist.', 20, $this->source); })()), "html", null, true);
        yield "</h2>
                </div>
            </div>
            <div class=\"col-md-4\">
                <div class=\"alert alert-warning\">
                    <h3>💰 Prix Moyen</h3>
                    <h2 class=\"fw-bold\">";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["averagePrice"]) || array_key_exists("averagePrice", $context) ? $context["averagePrice"] : (function () { throw new RuntimeError('Variable "averagePrice" does not exist.', 26, $this->source); })()), 2, ".", ","), "html", null, true);
        yield " TND</h2>
                </div>
            </div>
        </div>

        <!-- 🏆 Most & Least Expensive Products -->
        <div class=\"row text-center mb-4\">
            <div class=\"col-md-6\">
                <div class=\"alert alert-danger\">
                    <h3>💎 Produit le Plus Cher</h3>
                    <h4 class=\"fw-bold\">";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["mostExpensiveProduct"]) || array_key_exists("mostExpensiveProduct", $context) ? $context["mostExpensiveProduct"] : (function () { throw new RuntimeError('Variable "mostExpensiveProduct" does not exist.', 36, $this->source); })()), "nom_produit", [], "any", false, false, false, 36), "html", null, true);
        yield "</h4>
                    <h5>";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["mostExpensiveProduct"]) || array_key_exists("mostExpensiveProduct", $context) ? $context["mostExpensiveProduct"] : (function () { throw new RuntimeError('Variable "mostExpensiveProduct" does not exist.', 37, $this->source); })()), "prix", [], "any", false, false, false, 37), 2, ".", ","), "html", null, true);
        yield " TND</h5>
                </div>
            </div>
            <div class=\"col-md-6\">
                <div class=\"alert alert-info\">
                    <h3>🔹 Produit le Moins Cher</h3>
                    <h4 class=\"fw-bold\">";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["leastExpensiveProduct"]) || array_key_exists("leastExpensiveProduct", $context) ? $context["leastExpensiveProduct"] : (function () { throw new RuntimeError('Variable "leastExpensiveProduct" does not exist.', 43, $this->source); })()), "nom_produit", [], "any", false, false, false, 43), "html", null, true);
        yield "</h4>
                    <h5>";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["leastExpensiveProduct"]) || array_key_exists("leastExpensiveProduct", $context) ? $context["leastExpensiveProduct"] : (function () { throw new RuntimeError('Variable "leastExpensiveProduct" does not exist.', 44, $this->source); })()), "prix", [], "any", false, false, false, 44), 2, ".", ","), "html", null, true);
        yield " TND</h5>
                </div>
            </div>
        </div>

        <!-- 🥧 Pie Chart for Promotion Distribution -->
        <h2 class=\"text-center text-primary\">📊 Répartition des Promotions</h2>
        <div class=\"row justify-content-center\">
            <div class=\"col-md-6\">
                <canvas id=\"promotionPieChart\"></canvas>
            </div>
        </div>

        <!-- 📊 Bar Chart for Product Category Distribution -->
        <h2 class=\"text-center text-danger mt-5\">🏷️ Répartition par Catégorie</h2>
        <div class=\"row justify-content-center\">
            <div class=\"col-md-8\">
                <canvas id=\"categoryBarChart\"></canvas>
            </div>
        </div>
    </div>

    <!-- Load Chart.js -->
    <script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>

    <script>
        document.addEventListener(\"DOMContentLoaded\", function () {
            // 🥧 Pie Chart for Promotion Distribution
            var promotionData = {
                labels: [\"Produits en Promotion\", \"Produits Sans Promotion\"],
                datasets: [{
                    data: [";
        // line 75
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["promotedProductsCount"]) || array_key_exists("promotedProductsCount", $context) ? $context["promotedProductsCount"] : (function () { throw new RuntimeError('Variable "promotedProductsCount" does not exist.', 75, $this->source); })()), "html", null, true);
        yield ", ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["nonPromotedProductsCount"]) || array_key_exists("nonPromotedProductsCount", $context) ? $context["nonPromotedProductsCount"] : (function () { throw new RuntimeError('Variable "nonPromotedProductsCount" does not exist.', 75, $this->source); })()), "html", null, true);
        yield "],
                    backgroundColor: ['#FF6384', '#36A2EB'],
                }]
            };

            new Chart(document.getElementById('promotionPieChart'), {
                type: 'pie',
                data: promotionData
            });

            // 📊 Bar Chart for Category Distribution
            var categoryData = JSON.parse('";
        // line 86
        yield (isset($context["categoryDistribution"]) || array_key_exists("categoryDistribution", $context) ? $context["categoryDistribution"] : (function () { throw new RuntimeError('Variable "categoryDistribution" does not exist.', 86, $this->source); })());
        yield "');
            var categoryLabels = categoryData.map(item => item.category);
            var categoryCounts = categoryData.map(item => item.count);

            new Chart(document.getElementById('categoryBarChart'), {
                type: 'bar',
                data: {
                    labels: categoryLabels,
                    datasets: [{
                        label: 'Nombre de Produits',
                        data: categoryCounts,
                        backgroundColor: '#FFCE56'
                    }]
                },
                options: {
                    responsive: true,
                    plugins: {
                        legend: {
                            display: false
                        }
                    }
                }
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
        return "produit/stat2.html.twig";
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
        return array (  208 => 86,  192 => 75,  158 => 44,  154 => 43,  145 => 37,  141 => 36,  128 => 26,  119 => 20,  110 => 14,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'backoff/admin/baseback.html.twig' %}

{% block title %}Statistiques des Produits{% endblock %}

{% block body %}
    <div class=\"container mt-5\">
        <h1 class=\"text-center fw-bold text-uppercase mb-4\">📊 Statistiques des Produits</h1>

        <!-- 📝 Summary Section -->
        <div class=\"row text-center mb-4\">
            <div class=\"col-md-4\">
                <div class=\"alert alert-primary\">
                    <h3>📦 Total Produits</h3>
                    <h2 class=\"fw-bold\">{{ totalProducts }}</h2>
                </div>
            </div>
            <div class=\"col-md-4\">
                <div class=\"alert alert-success\">
                    <h3>🔥 Produits en Promotion</h3>
                    <h2 class=\"fw-bold\">{{ promotedProductsCount }}</h2>
                </div>
            </div>
            <div class=\"col-md-4\">
                <div class=\"alert alert-warning\">
                    <h3>💰 Prix Moyen</h3>
                    <h2 class=\"fw-bold\">{{ averagePrice|number_format(2, '.', ',') }} TND</h2>
                </div>
            </div>
        </div>

        <!-- 🏆 Most & Least Expensive Products -->
        <div class=\"row text-center mb-4\">
            <div class=\"col-md-6\">
                <div class=\"alert alert-danger\">
                    <h3>💎 Produit le Plus Cher</h3>
                    <h4 class=\"fw-bold\">{{ mostExpensiveProduct.nom_produit }}</h4>
                    <h5>{{ mostExpensiveProduct.prix|number_format(2, '.', ',') }} TND</h5>
                </div>
            </div>
            <div class=\"col-md-6\">
                <div class=\"alert alert-info\">
                    <h3>🔹 Produit le Moins Cher</h3>
                    <h4 class=\"fw-bold\">{{ leastExpensiveProduct.nom_produit }}</h4>
                    <h5>{{ leastExpensiveProduct.prix|number_format(2, '.', ',') }} TND</h5>
                </div>
            </div>
        </div>

        <!-- 🥧 Pie Chart for Promotion Distribution -->
        <h2 class=\"text-center text-primary\">📊 Répartition des Promotions</h2>
        <div class=\"row justify-content-center\">
            <div class=\"col-md-6\">
                <canvas id=\"promotionPieChart\"></canvas>
            </div>
        </div>

        <!-- 📊 Bar Chart for Product Category Distribution -->
        <h2 class=\"text-center text-danger mt-5\">🏷️ Répartition par Catégorie</h2>
        <div class=\"row justify-content-center\">
            <div class=\"col-md-8\">
                <canvas id=\"categoryBarChart\"></canvas>
            </div>
        </div>
    </div>

    <!-- Load Chart.js -->
    <script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>

    <script>
        document.addEventListener(\"DOMContentLoaded\", function () {
            // 🥧 Pie Chart for Promotion Distribution
            var promotionData = {
                labels: [\"Produits en Promotion\", \"Produits Sans Promotion\"],
                datasets: [{
                    data: [{{ promotedProductsCount }}, {{ nonPromotedProductsCount }}],
                    backgroundColor: ['#FF6384', '#36A2EB'],
                }]
            };

            new Chart(document.getElementById('promotionPieChart'), {
                type: 'pie',
                data: promotionData
            });

            // 📊 Bar Chart for Category Distribution
            var categoryData = JSON.parse('{{ categoryDistribution|raw }}');
            var categoryLabels = categoryData.map(item => item.category);
            var categoryCounts = categoryData.map(item => item.count);

            new Chart(document.getElementById('categoryBarChart'), {
                type: 'bar',
                data: {
                    labels: categoryLabels,
                    datasets: [{
                        label: 'Nombre de Produits',
                        data: categoryCounts,
                        backgroundColor: '#FFCE56'
                    }]
                },
                options: {
                    responsive: true,
                    plugins: {
                        legend: {
                            display: false
                        }
                    }
                }
            });
        });
    </script>

{% endblock %}
", "produit/stat2.html.twig", "C:\\Users\\MSI\\Downloads\\WebProject (5) - Copie\\WebProject (5) - Copie\\WebProject\\templates\\produit\\stat2.html.twig");
    }
}
