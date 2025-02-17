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

/* admin/atelier/deleteadmin.html.twig */
class __TwigTemplate_5258b45c668dc9087296e8d0fad51ef2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/atelier/deleteadmin.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/atelier/deleteadmin.html.twig"));

        // line 1
        yield "

<form method=\"post\" action=\"";
        // line 3
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_atelierenligne_deleteadmin", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["atelierenligne"]) || array_key_exists("atelierenligne", $context) ? $context["atelierenligne"] : (function () { throw new RuntimeError('Variable "atelierenligne" does not exist.', 3, $this->source); })()), "id", [], "any", false, false, false, 3)]), "html", null, true);
        yield "\" onsubmit=\"return confirm('Are you sure you want to delete this item?');\" style=\"display:inline;\">
    <input type=\"hidden\" name=\"_token\" value=\"";
        // line 4
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("deleteadmin" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["atelierenligne"]) || array_key_exists("atelierenligne", $context) ? $context["atelierenligne"] : (function () { throw new RuntimeError('Variable "atelierenligne" does not exist.', 4, $this->source); })()), "id", [], "any", false, false, false, 4))), "html", null, true);
        yield "\">
    <button type=\"submit\" style=\"border: none; background: transparent; padding: 0; cursor: pointer;\">
        <i class=\"fa fa-trash\" style=\"color: #dc3545;\"></i>
    </button>
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
        return "admin/atelier/deleteadmin.html.twig";
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
        return array (  56 => 4,  52 => 3,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("

<form method=\"post\" action=\"{{ path('app_atelierenligne_deleteadmin', {'id': atelierenligne.id}) }}\" onsubmit=\"return confirm('Are you sure you want to delete this item?');\" style=\"display:inline;\">
    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('deleteadmin' ~ atelierenligne.id) }}\">
    <button type=\"submit\" style=\"border: none; background: transparent; padding: 0; cursor: pointer;\">
        <i class=\"fa fa-trash\" style=\"color: #dc3545;\"></i>
    </button>
</form>
", "admin/atelier/deleteadmin.html.twig", "C:\\Users\\Lenovo\\WebProject\\templates\\admin\\atelier\\deleteadmin.html.twig");
    }
}
