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

/* admin/materiaux/show.html.twig */
class __TwigTemplate_76c98f4ac70ae281024bbdc5f0345b55 extends Template
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
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/materiaux/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/materiaux/show.html.twig"));

        // line 1
        yield "<!DOCTYPE html>

<title>Materiaux</title>

";
        // line 5
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 43
        yield "
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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
        yield "    <h1>Materiaux</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["materiaux"]) || array_key_exists("materiaux", $context) ? $context["materiaux"] : (function () { throw new RuntimeError('Variable "materiaux" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Nom_materiel</th>
                <td>";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["materiaux"]) || array_key_exists("materiaux", $context) ? $context["materiaux"] : (function () { throw new RuntimeError('Variable "materiaux" does not exist.', 16, $this->source); })()), "nomMateriel", [], "any", false, false, false, 16), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Quantite_stock</th>
                <td>";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["materiaux"]) || array_key_exists("materiaux", $context) ? $context["materiaux"] : (function () { throw new RuntimeError('Variable "materiaux" does not exist.', 20, $this->source); })()), "quantiteStock", [], "any", false, false, false, 20), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Seuil_min</th>
                <td>";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["materiaux"]) || array_key_exists("materiaux", $context) ? $context["materiaux"] : (function () { throw new RuntimeError('Variable "materiaux" does not exist.', 24, $this->source); })()), "seuilMin", [], "any", false, false, false, 24), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Prix_unitaire</th>
                <td>";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["materiaux"]) || array_key_exists("materiaux", $context) ? $context["materiaux"] : (function () { throw new RuntimeError('Variable "materiaux" does not exist.', 28, $this->source); })()), "prixUnitaire", [], "any", false, false, false, 28), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Categorie</th>
                <td>";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["materiaux"]) || array_key_exists("materiaux", $context) ? $context["materiaux"] : (function () { throw new RuntimeError('Variable "materiaux" does not exist.', 32, $this->source); })()), "categorie", [], "any", false, false, false, 32), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["materiaux"]) || array_key_exists("materiaux", $context) ? $context["materiaux"] : (function () { throw new RuntimeError('Variable "materiaux" does not exist.', 36, $this->source); })()), "description", [], "any", false, false, false, 36), "html", null, true);
        yield "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 41
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_materiaux_index");
        yield "\">back to list</a>
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
        return "admin/materiaux/show.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  140 => 41,  132 => 36,  125 => 32,  118 => 28,  111 => 24,  104 => 20,  97 => 16,  90 => 12,  82 => 6,  69 => 5,  57 => 43,  55 => 5,  49 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>

<title>Materiaux</title>

{% block body %}
    <h1>Materiaux</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ materiaux.id }}</td>
            </tr>
            <tr>
                <th>Nom_materiel</th>
                <td>{{ materiaux.nomMateriel }}</td>
            </tr>
            <tr>
                <th>Quantite_stock</th>
                <td>{{ materiaux.quantiteStock }}</td>
            </tr>
            <tr>
                <th>Seuil_min</th>
                <td>{{ materiaux.seuilMin }}</td>
            </tr>
            <tr>
                <th>Prix_unitaire</th>
                <td>{{ materiaux.prixUnitaire }}</td>
            </tr>
            <tr>
                <th>Categorie</th>
                <td>{{ materiaux.categorie }}</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>{{ materiaux.description }}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('app_materiaux_index') }}\">back to list</a>
{% endblock %}

", "admin/materiaux/show.html.twig", "C:\\Users\\Lenovo\\WebProject\\templates\\admin\\materiaux\\show.html.twig");
    }
}
