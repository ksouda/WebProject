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

/* commande/pdf_template.html.twig */
class __TwigTemplate_626cc70d229bda03d1eb0eea9b55efd6 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commande/pdf_template.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commande/pdf_template.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <title>Commande #";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 5, $this->source); })()), "id", [], "any", false, false, false, 5), "html", null, true);
        yield "</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 14px;
            background-size: cover;
            padding: 20px;
        }
        .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
            border: 4px solid #333;
            border-radius: 10px;
            background: white;
            box-shadow: 0px 0px 10px rgba(0,0,0,0.1);
        }
        h1 {
            text-align: center;
            color: #007bff;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid black;
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #007bff;
            color: white;
        }
        .status {
            padding: 5px;
            border-radius: 5px;
            font-weight: bold;
        }
        .success { background-color: #28a745; color: white; }
        .warning { background-color: #ffc107; color: black; }
        .danger { background-color: #dc3545; color: white; }
    </style>
</head>
<body>
<div class=\"container\">
    <h1>Commande #";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 52, $this->source); })()), "id", [], "any", false, false, false, 52), "html", null, true);
        yield "</h1>
    <img src=\"";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/uploads/images/"), "html", null, true);
        yield "\" width=\"150\" style=\"display:block; margin:auto;\" alt=\"\">
    <p><strong>Date :</strong> ";
        // line 54
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 54, $this->source); })()), "dateCommande", [], "any", false, false, false, 54)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 54, $this->source); })()), "dateCommande", [], "any", false, false, false, 54), "d/m/Y"), "html", null, true)) : ("N/A"));
        yield "</p>
    <p><strong>Montant Total :</strong> ";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 55, $this->source); })()), "montantTotal", [], "any", false, false, false, 55), "html", null, true);
        yield " TND</p>
    <p><strong>Adresse de Livraison :</strong> ";
        // line 56
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 56, $this->source); })()), "adresseLivraison", [], "any", false, false, false, 56), "html", null, true);
        yield "</p>
    <p><strong>Mode de Paiement :</strong> ";
        // line 57
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 57, $this->source); })()), "paiement", [], "any", false, false, false, 57), "html", null, true);
        yield "</p>
    <p><strong>Statut :</strong>
        <span class=\"status ";
        // line 59
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 59, $this->source); })()), "statut", [], "any", false, false, false, 59) == "Confirmé")) {
            yield "success";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 59, $this->source); })()), "statut", [], "any", false, false, false, 59) == "En attente")) {
            yield "warning";
        } else {
            yield "danger";
        }
        yield "\">
                ";
        // line 60
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 60, $this->source); })()), "statut", [], "any", false, false, false, 60), "html", null, true);
        yield "
            </span>
    </p>
</div>
</body>
</html>
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
        return "commande/pdf_template.html.twig";
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
        return array (  139 => 60,  129 => 59,  124 => 57,  120 => 56,  116 => 55,  112 => 54,  108 => 53,  104 => 52,  54 => 5,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <title>Commande #{{ commande.id }}</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 14px;
            background-size: cover;
            padding: 20px;
        }
        .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
            border: 4px solid #333;
            border-radius: 10px;
            background: white;
            box-shadow: 0px 0px 10px rgba(0,0,0,0.1);
        }
        h1 {
            text-align: center;
            color: #007bff;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid black;
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #007bff;
            color: white;
        }
        .status {
            padding: 5px;
            border-radius: 5px;
            font-weight: bold;
        }
        .success { background-color: #28a745; color: white; }
        .warning { background-color: #ffc107; color: black; }
        .danger { background-color: #dc3545; color: white; }
    </style>
</head>
<body>
<div class=\"container\">
    <h1>Commande #{{ commande.id }}</h1>
    <img src=\"{{ asset('/uploads/images/') }}\" width=\"150\" style=\"display:block; margin:auto;\" alt=\"\">
    <p><strong>Date :</strong> {{ commande.dateCommande ? commande.dateCommande|date('d/m/Y') : 'N/A' }}</p>
    <p><strong>Montant Total :</strong> {{ commande.montantTotal }} TND</p>
    <p><strong>Adresse de Livraison :</strong> {{ commande.adresseLivraison }}</p>
    <p><strong>Mode de Paiement :</strong> {{ commande.paiement }}</p>
    <p><strong>Statut :</strong>
        <span class=\"status {% if commande.statut == 'Confirmé' %}success{% elseif commande.statut == 'En attente' %}warning{% else %}danger{% endif %}\">
                {{ commande.statut }}
            </span>
    </p>
</div>
</body>
</html>
", "commande/pdf_template.html.twig", "C:\\Users\\Asus\\Downloads\\WebProject (5)\\WebProject\\templates\\commande\\pdf_template.html.twig");
    }
}
