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

/* FrontOffice/HomePage/front_atelier/inscription_atelier/deleteinscri.html.twig */
class __TwigTemplate_c79c93bcccf13b710fe1b918b569608a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "FrontOffice/HomePage/front_atelier/inscription_atelier/deleteinscri.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "FrontOffice/HomePage/front_atelier/inscription_atelier/deleteinscri.html.twig"));

        // line 1
        yield "<form method=\"post\" action=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_annulation", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["inscription"]) || array_key_exists("inscription", $context) ? $context["inscription"] : (function () { throw new RuntimeError('Variable "inscription" does not exist.', 1, $this->source); })()), "id", [], "any", false, false, false, 1)]), "html", null, true);
        yield "\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir annuler cette inscription ?');\" style=\"display:inline;\">
    <input type=\"hidden\" name=\"_token\" value=\"";
        // line 2
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["inscription"]) || array_key_exists("inscription", $context) ? $context["inscription"] : (function () { throw new RuntimeError('Variable "inscription" does not exist.', 2, $this->source); })()), "id", [], "any", false, false, false, 2))), "html", null, true);
        yield "\">
    <a href=\"javascript:void(0);\" onclick=\"this.closest('form').submit();\">
        <i class=\"fa fa-times-circle\" style=\"color: #dc3545; font-size: 1.5rem;\"></i>
    </a>
</form>
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
        return "FrontOffice/HomePage/front_atelier/inscription_atelier/deleteinscri.html.twig";
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
        return array (  53 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<form method=\"post\" action=\"{{ path('app_annulation', {'id': inscription.id}) }}\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir annuler cette inscription ?');\" style=\"display:inline;\">
    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ inscription.id) }}\">
    <a href=\"javascript:void(0);\" onclick=\"this.closest('form').submit();\">
        <i class=\"fa fa-times-circle\" style=\"color: #dc3545; font-size: 1.5rem;\"></i>
    </a>
</form>
", "FrontOffice/HomePage/front_atelier/inscription_atelier/deleteinscri.html.twig", "C:\\Users\\Lenovo\\WebProject\\templates\\FrontOffice\\HomePage\\front_atelier\\inscription_atelier\\deleteinscri.html.twig");
    }
}
