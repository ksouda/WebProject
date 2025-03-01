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

/* produit/_search_results.html.twig */
class __TwigTemplate_dc615db11566d04a62ddabc20975a4e2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/_search_results.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/_search_results.html.twig"));

        // line 1
        yield "<table class=\"table table-hover table-bordered text-center mt-3\">
    <thead class=\"table-dark\">
    <tr>
        <th>ID</th>
        <th>Nom</th>
        <th>Catégorie</th>
        <th>Prix</th>
        <th>Stock</th>
        <th>Statut</th>
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>
    ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 14, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 15
            yield "        <tr>
            <td>";
            // line 16
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 16), "html", null, true);
            yield "</td>
            <td>";
            // line 17
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "nomProduit", [], "any", false, false, false, 17), "html", null, true);
            yield "</td>
            <td>";
            // line 18
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "categorie", [], "any", false, false, false, 18), "html", null, true);
            yield "</td>
            <td>";
            // line 19
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "prix", [], "any", false, false, false, 19), "html", null, true);
            yield " TND</td>
            <td>";
            // line 20
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "stock", [], "any", false, false, false, 20), "html", null, true);
            yield "</td>
            <td>
                ";
            // line 22
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "statut", [], "any", false, false, false, 22) == "Disponible")) {
                // line 23
                yield "                    <span class=\"badge bg-success\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "statut", [], "any", false, false, false, 23), "html", null, true);
                yield "</span>
                ";
            } else {
                // line 25
                yield "                    <span class=\"badge bg-danger\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "statut", [], "any", false, false, false, 25), "html", null, true);
                yield "</span>
                ";
            }
            // line 27
            yield "            </td>
            <td>
                <a href=\"";
            // line 29
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produit_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 29)]), "html", null, true);
            yield "\" class=\"btn btn-outline-primary btn-sm\">Voir</a>
                <a href=\"";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produit_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 30)]), "html", null, true);
            yield "\" class=\"btn btn-outline-warning btn-sm\">Modifier</a>
            </td>
        </tr>
    ";
            $context['_iterated'] = true;
        }
        // line 37
        if (!$context['_iterated']) {
            // line 34
            yield "        <tr>
            <td colspan=\"7\" class=\"text-muted\">Aucun produit trouvé.</td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['produit'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        yield "    </tbody>
</table>
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
        return "produit/_search_results.html.twig";
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
        return array (  133 => 38,  124 => 34,  122 => 37,  114 => 30,  110 => 29,  106 => 27,  100 => 25,  94 => 23,  92 => 22,  87 => 20,  83 => 19,  79 => 18,  75 => 17,  71 => 16,  68 => 15,  63 => 14,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<table class=\"table table-hover table-bordered text-center mt-3\">
    <thead class=\"table-dark\">
    <tr>
        <th>ID</th>
        <th>Nom</th>
        <th>Catégorie</th>
        <th>Prix</th>
        <th>Stock</th>
        <th>Statut</th>
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>
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
                <a href=\"{{ path('app_produit_show', {'id': produit.id}) }}\" class=\"btn btn-outline-primary btn-sm\">Voir</a>
                <a href=\"{{ path('app_produit_edit', {'id': produit.id}) }}\" class=\"btn btn-outline-warning btn-sm\">Modifier</a>
            </td>
        </tr>
    {% else %}
        <tr>
            <td colspan=\"7\" class=\"text-muted\">Aucun produit trouvé.</td>
        </tr>
    {% endfor %}
    </tbody>
</table>
", "produit/_search_results.html.twig", "C:\\Users\\Asus\\Downloads\\WebProject (5)\\WebProject\\templates\\produit\\_search_results.html.twig");
    }
}
