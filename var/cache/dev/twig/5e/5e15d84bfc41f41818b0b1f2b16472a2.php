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

/* promotion/index.html.twig */
class __TwigTemplate_d63c5f192a75fb77e159d88bae95c23d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "promotion/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "promotion/index.html.twig"));

        $this->parent = $this->loadTemplate("backoff/admin/baseback.html.twig", "promotion/index.html.twig", 1);
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
        yield "    Gestion des Promotions
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
        <h1 class=\"text-center fw-bold text-uppercase mb-4\">Gestion des Promotions</h1>

        <!-- Row with search bar on the left and small round plus button on the right -->
        <div class=\"row mb-3\">
            <!-- Search Bar -->
            <div class=\"col-md-6\">
                <div class=\"input-group search-group\">
                    <span class=\"input-group-text bg-white border-end-0\" id=\"search-icon\">
                        <i class=\"fas fa-search\"></i>
                    </span>
                    <input type=\"text\"
                           class=\"form-control border-start-0 search-bar\"
                           placeholder=\"Rechercher...\"
                           aria-label=\"Rechercher\"
                           aria-describedby=\"search-icon\">
                </div>
            </div>

            <!-- Small round plus button -->
            <div class=\"col-md-6 text-end\">
                <a href=\"";
        // line 29
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_promotion_new");
        yield "\"
                   class=\"btn plus-button\"
                   data-bs-toggle=\"tooltip\"
                   data-bs-placement=\"left\"
                   title=\"Ajouter une Promotion\">
                    <i class=\"fas fa-plus\"></i>
                </a>
            </div>
        </div>

        <!-- Tableau des Promotions -->
        <table class=\"table table-hover table-bordered table-striped text-center\">
            <thead class=\"table-dark\">
            <tr>
                <th>ID</th>
                <th>Code Coupon</th>
                <th>date fin  Promotion</th>
                <th>Prix Nouveau</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["promotions"]) || array_key_exists("promotions", $context) ? $context["promotions"] : (function () { throw new RuntimeError('Variable "promotions" does not exist.', 51, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["promotion"]) {
            // line 52
            yield "                <tr>
                    <td>";
            // line 53
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "id", [], "any", false, false, false, 53), "html", null, true);
            yield "</td>
                    <td>";
            // line 54
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "codeCoupon", [], "any", false, false, false, 54), "html", null, true);
            yield "</td>
                    <td>";
            // line 55
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "endDate", [], "any", false, false, false, 55)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "endDate", [], "any", false, false, false, 55), "Y-m-d"), "html", null, true)) : (""));
            yield "</td>
                    <td>";
            // line 56
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "prixNouv", [], "any", false, false, false, 56), "html", null, true);
            yield "</td>
                    <td>
                        <a href=\"";
            // line 58
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_promotion_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "id", [], "any", false, false, false, 58)]), "html", null, true);
            yield "\"
                           class=\"btn btn-outline-primary btn-sm me-2\">
                            <i class=\"fas fa-eye\"></i> Voir
                        </a>
                        <a href=\"";
            // line 62
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_promotion_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "id", [], "any", false, false, false, 62)]), "html", null, true);
            yield "\"
                           class=\"btn btn-outline-warning btn-sm\">
                            <i class=\"fas fa-edit\"></i> Modifier
                        </a>
                    </td>
                </tr>
            ";
            $context['_iterated'] = true;
        }
        // line 72
        if (!$context['_iterated']) {
            // line 69
            yield "                <tr>
                    <td colspan=\"5\" class=\"text-muted\">Aucune promotion trouvée.</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['promotion'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        yield "            </tbody>

        </table>
    </div>

    <!-- FontAwesome for icons -->
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css\">

    <!-- Custom Styles -->
    <style>
        /* Container width for the search bar */
        .search-group {
            max-width: 300px; /* Adjust as needed */
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
            background-color: #198754; /* matches .btn-success */
            color: #fff;
            border: none;
        }

        .plus-button:hover {
            background-color: #157347;
        }
    </style>
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
        return "promotion/index.html.twig";
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
        return array (  204 => 73,  195 => 69,  193 => 72,  182 => 62,  175 => 58,  170 => 56,  166 => 55,  162 => 54,  158 => 53,  155 => 52,  150 => 51,  125 => 29,  102 => 8,  89 => 7,  77 => 4,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'backoff/admin/baseback.html.twig' %}

{% block title %}
    Gestion des Promotions
{% endblock %}

{% block body %}
    <div class=\"container mt-5\">
        <h1 class=\"text-center fw-bold text-uppercase mb-4\">Gestion des Promotions</h1>

        <!-- Row with search bar on the left and small round plus button on the right -->
        <div class=\"row mb-3\">
            <!-- Search Bar -->
            <div class=\"col-md-6\">
                <div class=\"input-group search-group\">
                    <span class=\"input-group-text bg-white border-end-0\" id=\"search-icon\">
                        <i class=\"fas fa-search\"></i>
                    </span>
                    <input type=\"text\"
                           class=\"form-control border-start-0 search-bar\"
                           placeholder=\"Rechercher...\"
                           aria-label=\"Rechercher\"
                           aria-describedby=\"search-icon\">
                </div>
            </div>

            <!-- Small round plus button -->
            <div class=\"col-md-6 text-end\">
                <a href=\"{{ path('app_promotion_new') }}\"
                   class=\"btn plus-button\"
                   data-bs-toggle=\"tooltip\"
                   data-bs-placement=\"left\"
                   title=\"Ajouter une Promotion\">
                    <i class=\"fas fa-plus\"></i>
                </a>
            </div>
        </div>

        <!-- Tableau des Promotions -->
        <table class=\"table table-hover table-bordered table-striped text-center\">
            <thead class=\"table-dark\">
            <tr>
                <th>ID</th>
                <th>Code Coupon</th>
                <th>date fin  Promotion</th>
                <th>Prix Nouveau</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            {% for promotion in promotions %}
                <tr>
                    <td>{{ promotion.id }}</td>
                    <td>{{ promotion.codeCoupon }}</td>
                    <td>{{ promotion.endDate ? promotion.endDate|date('Y-m-d') : '' }}</td>
                    <td>{{ promotion.prixNouv }}</td>
                    <td>
                        <a href=\"{{ path('app_promotion_show', {'id': promotion.id}) }}\"
                           class=\"btn btn-outline-primary btn-sm me-2\">
                            <i class=\"fas fa-eye\"></i> Voir
                        </a>
                        <a href=\"{{ path('app_promotion_edit', {'id': promotion.id}) }}\"
                           class=\"btn btn-outline-warning btn-sm\">
                            <i class=\"fas fa-edit\"></i> Modifier
                        </a>
                    </td>
                </tr>
            {% else %}
                <tr>
                    <td colspan=\"5\" class=\"text-muted\">Aucune promotion trouvée.</td>
                </tr>
            {% endfor %}
            </tbody>

        </table>
    </div>

    <!-- FontAwesome for icons -->
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css\">

    <!-- Custom Styles -->
    <style>
        /* Container width for the search bar */
        .search-group {
            max-width: 300px; /* Adjust as needed */
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
            background-color: #198754; /* matches .btn-success */
            color: #fff;
            border: none;
        }

        .plus-button:hover {
            background-color: #157347;
        }
    </style>
{% endblock %}
", "promotion/index.html.twig", "C:\\Users\\MSI\\Downloads\\WebProject (5) - Copie\\WebProject (5) - Copie\\WebProject\\templates\\promotion\\index.html.twig");
    }
}
