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

/* admin/fournisseur/_delete_form.html.twig */
class __TwigTemplate_81c5baa17ba5af8b466c70ff67e638fc extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/fournisseur/_delete_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/fournisseur/_delete_form.html.twig"));

        // line 1
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["fournisseur"] ?? null), "id", [], "any", true, true, false, 1) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["fournisseur"]) || array_key_exists("fournisseur", $context) ? $context["fournisseur"] : (function () { throw new RuntimeError('Variable "fournisseur" does not exist.', 1, $this->source); })()), "id", [], "any", false, false, false, 1)))) {
            // line 2
            yield "    <form method=\"post\" action=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_fournisseur_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["fournisseur"]) || array_key_exists("fournisseur", $context) ? $context["fournisseur"] : (function () { throw new RuntimeError('Variable "fournisseur" does not exist.', 2, $this->source); })()), "id", [], "any", false, false, false, 2)]), "html", null, true);
            yield "\" 
          onsubmit=\"return confirm('Are you sure you want to delete this item?');\" 
          style=\"display:inline;\">
        <input type=\"hidden\" name=\"_token\" value=\"";
            // line 5
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["fournisseur"]) || array_key_exists("fournisseur", $context) ? $context["fournisseur"] : (function () { throw new RuntimeError('Variable "fournisseur" does not exist.', 5, $this->source); })()), "id", [], "any", false, false, false, 5))), "html", null, true);
            yield "\">
        <button type=\"submit\" style=\"border: none; background: transparent; padding: 0; cursor: pointer;\">
            <i class=\"fa fa-trash\" style=\"color: #dc3545;\"></i>
        </button>  
    </form>
";
        } else {
            // line 11
            yield "    <p class=\"text-danger\">Erreur : Fournisseur non trouvé.</p>
";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/fournisseur/_delete_form.html.twig";
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
        return array (  66 => 11,  57 => 5,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% if fournisseur.id is defined and fournisseur.id is not null %}
    <form method=\"post\" action=\"{{ path('app_fournisseur_delete', {'id': fournisseur.id}) }}\" 
          onsubmit=\"return confirm('Are you sure you want to delete this item?');\" 
          style=\"display:inline;\">
        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ fournisseur.id) }}\">
        <button type=\"submit\" style=\"border: none; background: transparent; padding: 0; cursor: pointer;\">
            <i class=\"fa fa-trash\" style=\"color: #dc3545;\"></i>
        </button>  
    </form>
{% else %}
    <p class=\"text-danger\">Erreur : Fournisseur non trouvé.</p>
{% endif %}
", "admin/fournisseur/_delete_form.html.twig", "C:\\Users\\Lenovo\\WebProject\\templates\\admin\\fournisseur\\_delete_form.html.twig");
    }
}
