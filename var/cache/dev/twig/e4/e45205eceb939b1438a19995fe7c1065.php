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

/* commande/stat.html.twig */
class __TwigTemplate_14657dba97fa709b0955e02ab3bc57b1 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commande/stat.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commande/stat.html.twig"));

        $this->parent = $this->loadTemplate("backoff/admin/baseback.html.twig", "commande/stat.html.twig", 1);
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

        yield "Statistiques des Commandes";
        
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
        <h1 class=\"text-center fw-bold text-uppercase mb-4\">📊 Statistiques des Commandes</h1>

        <!-- 📝 Summary Section -->
        <div class=\"row text-center mb-4\">
            <div class=\"col-md-6\">
                <div class=\"alert alert-primary\">
                    <h3>📦 Total Commandes</h3>
                    <h2 class=\"fw-bold\">";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalOrders"]) || array_key_exists("totalOrders", $context) ? $context["totalOrders"] : (function () { throw new RuntimeError('Variable "totalOrders" does not exist.', 14, $this->source); })()), "html", null, true);
        yield "</h2>
                </div>
            </div>
            <div class=\"col-md-6\">
                <div class=\"alert alert-success\">
                    <h3>💰 Revenu Total</h3>
                    <h2 class=\"fw-bold\">";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["totalRevenue"]) || array_key_exists("totalRevenue", $context) ? $context["totalRevenue"] : (function () { throw new RuntimeError('Variable "totalRevenue" does not exist.', 20, $this->source); })()), 2, ".", ","), "html", null, true);
        yield " TND</h2>
                </div>
            </div>
        </div>

        <!-- 🥧 Pie Chart for Order Status Distribution -->
        <h2 class=\"text-center text-info\">📊 Répartition des Statuts de Commande</h2>
        <div class=\"row justify-content-center\">
            <div class=\"col-md-6\">
                <canvas id=\"orderStatusChart\"></canvas>
            </div>
        </div>

        <!-- 📊 Bar Chart for Best-Selling Products -->
        <h2 class=\"text-center text-danger mt-5\">🏆 Meilleures Ventes</h2>
        <div class=\"row justify-content-center\">
            <div class=\"col-md-8\">
                <canvas id=\"bestSellingChart\"></canvas>
            </div>
        </div>
    </div>

    <!-- Load Chart.js -->
    <script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>

    <script>
        document.addEventListener(\"DOMContentLoaded\", function () {
            // 📊 Pie Chart for Order Status
            var statusData = JSON.parse('";
        // line 48
        yield (isset($context["statusCounts"]) || array_key_exists("statusCounts", $context) ? $context["statusCounts"] : (function () { throw new RuntimeError('Variable "statusCounts" does not exist.', 48, $this->source); })());
        yield "');
            var statusLabels = statusData.map(item => item.status);
            var statusValues = statusData.map(item => item.count);

            new Chart(document.getElementById('orderStatusChart'), {
                type: 'pie',
                data: {
                    labels: statusLabels,
                    datasets: [{
                        data: statusValues,
                        backgroundColor: ['#36A2EB', '#FF6384', '#FFCE56'],
                    }]
                }
            });

            // 📊 Bar Chart for Best-Selling Products
            var productData = JSON.parse('";
        // line 64
        yield (isset($context["topProducts"]) || array_key_exists("topProducts", $context) ? $context["topProducts"] : (function () { throw new RuntimeError('Variable "topProducts" does not exist.', 64, $this->source); })());
        yield "');
            var productLabels = productData.map(item => item.name);
            var productValues = productData.map(item => item.total_sold);

            new Chart(document.getElementById('bestSellingChart'), {
                type: 'bar',
                data: {
                    labels: productLabels,
                    datasets: [{
                        label: 'Quantité Vendue',
                        data: productValues,
                        backgroundColor: '#FF6384'
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
        return "commande/stat.html.twig";
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
        return array (  169 => 64,  150 => 48,  119 => 20,  110 => 14,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'backoff/admin/baseback.html.twig' %}

{% block title %}Statistiques des Commandes{% endblock %}

{% block body %}
    <div class=\"container mt-5\">
        <h1 class=\"text-center fw-bold text-uppercase mb-4\">📊 Statistiques des Commandes</h1>

        <!-- 📝 Summary Section -->
        <div class=\"row text-center mb-4\">
            <div class=\"col-md-6\">
                <div class=\"alert alert-primary\">
                    <h3>📦 Total Commandes</h3>
                    <h2 class=\"fw-bold\">{{ totalOrders }}</h2>
                </div>
            </div>
            <div class=\"col-md-6\">
                <div class=\"alert alert-success\">
                    <h3>💰 Revenu Total</h3>
                    <h2 class=\"fw-bold\">{{ totalRevenue|number_format(2, '.', ',') }} TND</h2>
                </div>
            </div>
        </div>

        <!-- 🥧 Pie Chart for Order Status Distribution -->
        <h2 class=\"text-center text-info\">📊 Répartition des Statuts de Commande</h2>
        <div class=\"row justify-content-center\">
            <div class=\"col-md-6\">
                <canvas id=\"orderStatusChart\"></canvas>
            </div>
        </div>

        <!-- 📊 Bar Chart for Best-Selling Products -->
        <h2 class=\"text-center text-danger mt-5\">🏆 Meilleures Ventes</h2>
        <div class=\"row justify-content-center\">
            <div class=\"col-md-8\">
                <canvas id=\"bestSellingChart\"></canvas>
            </div>
        </div>
    </div>

    <!-- Load Chart.js -->
    <script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>

    <script>
        document.addEventListener(\"DOMContentLoaded\", function () {
            // 📊 Pie Chart for Order Status
            var statusData = JSON.parse('{{ statusCounts|raw }}');
            var statusLabels = statusData.map(item => item.status);
            var statusValues = statusData.map(item => item.count);

            new Chart(document.getElementById('orderStatusChart'), {
                type: 'pie',
                data: {
                    labels: statusLabels,
                    datasets: [{
                        data: statusValues,
                        backgroundColor: ['#36A2EB', '#FF6384', '#FFCE56'],
                    }]
                }
            });

            // 📊 Bar Chart for Best-Selling Products
            var productData = JSON.parse('{{ topProducts|raw }}');
            var productLabels = productData.map(item => item.name);
            var productValues = productData.map(item => item.total_sold);

            new Chart(document.getElementById('bestSellingChart'), {
                type: 'bar',
                data: {
                    labels: productLabels,
                    datasets: [{
                        label: 'Quantité Vendue',
                        data: productValues,
                        backgroundColor: '#FF6384'
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
", "commande/stat.html.twig", "C:\\Users\\Asus\\Downloads\\WebProject (5)\\WebProject\\templates\\commande\\stat.html.twig");
    }
}
