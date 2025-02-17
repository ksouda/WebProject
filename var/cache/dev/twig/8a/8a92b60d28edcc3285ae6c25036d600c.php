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

/* frontoffice/HomePage/client/reclamation/modifier.html.twig */
class __TwigTemplate_3628693ed0f9c5cfb1d6cf7367fc2ba3 extends Template
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
            'head' => [$this, 'block_head'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "frontoffice/HomePage/client/reclamation/modifier.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "frontoffice/HomePage/client/reclamation/modifier.html.twig"));

        // line 1
        yield from $this->unwrap()->yieldBlock('head', $context, $blocks);
        // line 22
        yield "
";
        // line 23
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 1
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_head(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        // line 2
        yield "    <link rel=\"stylesheet\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/front/css/main.css"), "html", null, true);
        yield "\">

    <!-- Favicons -->
    <link href=\"";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/front/img/favicon.png"), "html", null, true);
        yield "\" rel=\"icon\">

    <!-- Fonts -->
    <link href=\"https://fonts.googleapis.com\" rel=\"preconnect\">
    <link href=\"https://fonts.gstatic.com\" rel=\"preconnect\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&family=Poppins:wght@100;200;300;400;500;600;700&display=swap\" rel=\"stylesheet\">

    <!-- Vendor CSS Files -->
    <link href=\"https://unpkg.com/aos@2.3.1/dist/aos.css\" rel=\"stylesheet\">
    <link href=\"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/front/vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
    <link href=\"";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/front/vendor/bootstrap-icons/bootstrap-icons.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
    <link href=\"";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/front/vendor/glightbox/css/glightbox.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
    <link href=\"";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/front/vendor/swiper/swiper-bundle.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">

    <!-- Main CSS File -->
    <link href=\"";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/front/css/main.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 23
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

        // line 24
        yield "
    <header id=\"header\" class=\"header d-flex align-items-center fixed-top\">
        <div class=\"container-fluid container-xl position-relative d-flex align-items-center\">
        <a href=\"/\" class=\"logo d-flex align-items-center me-auto\">
            <img src=\"";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/front/img/logo 2.png"), "html", null, true);
        yield "\" alt=\"Logo\">
        </a>

        <nav id=\"navmenu\" class=\"navmenu\">
            <ul>
            <li><a href=\"#hero\" class=\"active\">Accueil</a></li>
            <li class=\"dropdown\"><a href=\"#\"><span>Boutique</span> <i class=\"bi bi-chevron-down toggle-dropdown\"></i></a>
                <ul>
                    <li><a href=\"#\">Produits</a></li>
                    <li><a href=\"#\">Matériaux</a></li>
                </ul>
            </li>
            <li><a href=\"#\">Ateliers en ligne</a></li>
            <li><a href=\"";
        // line 41
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_liste_client");
        yield "\">Réclamation</a></li>
            <li><a href=\"#\"><i class=\"fas fa-shopping-cart\" style=\"font-size: 20px\" ></i></a></li>
            <li class=\"dropdown\">
                <a href=\"#\" id=\"toggleSidebar\">
                    <i class=\"fas fa-user-circle\" style=\"font-size: 25px\"></i> <!-- Icône de compte -->
                </a>
                <ul>
                    <li><a href=\"#\">Profil</a></li>
                    <li class=\"dropdown\"><a href=\"#\"><span>Historique</span> <i class=\"bi bi-chevron-down toggle-dropdown\"></i></a>
                        <ul>
                        <li><a href=\"#\">Commandes</a></li>
                        <li><a href=\"";
        // line 52
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_liste_client");
        yield "\">Réclamation</a></li>
                        <li><a href=\"#\">Aeliers en ligne</a></li>
                        </ul>
                    </li>
                    <li><a href=\"#\">Déconnexion</a></li>
                </ul>
            </li>
            </ul>
        </nav>
        </div>
    </header>

    <div class=\"container\">

        <h1>Modifier la Réclamation</h1>
        <hr class=\"separator\">

        <!-- Formulaire de modification -->
        <div class=\"text-center\">
        <form method=\"post\" novalidate>
            ";
        // line 72
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        yield "
                <div class=\"mb-3\">
                    ";
        // line 74
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), "titre", [], "any", false, false, false, 74), 'label');
        yield "
                    ";
        // line 75
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 75, $this->source); })()), "titre", [], "any", false, false, false, 75), 'widget');
        yield "
                    ";
        // line 76
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 76, $this->source); })()), "titre", [], "any", false, false, false, 76), 'errors');
        yield "
                </div>

                <div class=\"mb-5\">
                    ";
        // line 80
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 80, $this->source); })()), "description", [], "any", false, false, false, 80), 'label');
        yield "
                    ";
        // line 81
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 81, $this->source); })()), "description", [], "any", false, false, false, 81), 'widget');
        yield "
                    ";
        // line 82
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 82, $this->source); })()), "description", [], "any", false, false, false, 82), 'errors');
        yield "
                </div>

                <div class=\"mt-3 text-center\">
                    <button type=\"submit\" class=\"btn btn-secondary mt-3\">Modifier</button>
                    <a href=\"";
        // line 87
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_liste_client");
        yield "\" class=\"btn btn-secondary btn-spacing mt-3\">Annuler</a>
                </div>
            ";
        // line 89
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 89, $this->source); })()), 'form_end');
        yield "
        </form>    
        </div>
    </div>
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
        return "frontoffice/HomePage/client/reclamation/modifier.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  242 => 89,  237 => 87,  229 => 82,  225 => 81,  221 => 80,  214 => 76,  210 => 75,  206 => 74,  201 => 72,  178 => 52,  164 => 41,  148 => 28,  142 => 24,  129 => 23,  116 => 20,  110 => 17,  106 => 16,  102 => 15,  98 => 14,  86 => 5,  79 => 2,  66 => 1,  55 => 23,  52 => 22,  50 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% block head %}
    <link rel=\"stylesheet\" href=\"{{ asset('build/front/css/main.css') }}\">

    <!-- Favicons -->
    <link href=\"{{ asset('build/front/img/favicon.png') }}\" rel=\"icon\">

    <!-- Fonts -->
    <link href=\"https://fonts.googleapis.com\" rel=\"preconnect\">
    <link href=\"https://fonts.gstatic.com\" rel=\"preconnect\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&family=Poppins:wght@100;200;300;400;500;600;700&display=swap\" rel=\"stylesheet\">

    <!-- Vendor CSS Files -->
    <link href=\"https://unpkg.com/aos@2.3.1/dist/aos.css\" rel=\"stylesheet\">
    <link href=\"{{ asset('build/front/vendor/bootstrap/css/bootstrap.min.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('build/front/vendor/bootstrap-icons/bootstrap-icons.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('build/front/vendor/glightbox/css/glightbox.min.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('build/front/vendor/swiper/swiper-bundle.min.css') }}\" rel=\"stylesheet\">

    <!-- Main CSS File -->
    <link href=\"{{ asset('build/front/css/main.css') }}\" rel=\"stylesheet\">
{% endblock %}

{% block body %}

    <header id=\"header\" class=\"header d-flex align-items-center fixed-top\">
        <div class=\"container-fluid container-xl position-relative d-flex align-items-center\">
        <a href=\"/\" class=\"logo d-flex align-items-center me-auto\">
            <img src=\"{{ asset('build/front/img/logo 2.png') }}\" alt=\"Logo\">
        </a>

        <nav id=\"navmenu\" class=\"navmenu\">
            <ul>
            <li><a href=\"#hero\" class=\"active\">Accueil</a></li>
            <li class=\"dropdown\"><a href=\"#\"><span>Boutique</span> <i class=\"bi bi-chevron-down toggle-dropdown\"></i></a>
                <ul>
                    <li><a href=\"#\">Produits</a></li>
                    <li><a href=\"#\">Matériaux</a></li>
                </ul>
            </li>
            <li><a href=\"#\">Ateliers en ligne</a></li>
            <li><a href=\"{{ path('app_reclamation_liste_client') }}\">Réclamation</a></li>
            <li><a href=\"#\"><i class=\"fas fa-shopping-cart\" style=\"font-size: 20px\" ></i></a></li>
            <li class=\"dropdown\">
                <a href=\"#\" id=\"toggleSidebar\">
                    <i class=\"fas fa-user-circle\" style=\"font-size: 25px\"></i> <!-- Icône de compte -->
                </a>
                <ul>
                    <li><a href=\"#\">Profil</a></li>
                    <li class=\"dropdown\"><a href=\"#\"><span>Historique</span> <i class=\"bi bi-chevron-down toggle-dropdown\"></i></a>
                        <ul>
                        <li><a href=\"#\">Commandes</a></li>
                        <li><a href=\"{{ path('app_reclamation_liste_client') }}\">Réclamation</a></li>
                        <li><a href=\"#\">Aeliers en ligne</a></li>
                        </ul>
                    </li>
                    <li><a href=\"#\">Déconnexion</a></li>
                </ul>
            </li>
            </ul>
        </nav>
        </div>
    </header>

    <div class=\"container\">

        <h1>Modifier la Réclamation</h1>
        <hr class=\"separator\">

        <!-- Formulaire de modification -->
        <div class=\"text-center\">
        <form method=\"post\" novalidate>
            {{ form_start(form, {'attr': {'novalidate': 'novalidate'}}) }}
                <div class=\"mb-3\">
                    {{ form_label(form.titre) }}
                    {{ form_widget(form.titre) }}
                    {{ form_errors(form.titre) }}
                </div>

                <div class=\"mb-5\">
                    {{ form_label(form.description) }}
                    {{ form_widget(form.description) }}
                    {{ form_errors(form.description) }}
                </div>

                <div class=\"mt-3 text-center\">
                    <button type=\"submit\" class=\"btn btn-secondary mt-3\">Modifier</button>
                    <a href=\"{{ path('app_reclamation_liste_client') }}\" class=\"btn btn-secondary btn-spacing mt-3\">Annuler</a>
                </div>
            {{ form_end(form) }}
        </form>    
        </div>
    </div>
{% endblock %}
", "frontoffice/HomePage/client/reclamation/modifier.html.twig", "C:\\Users\\Lenovo\\WebProject\\templates\\FrontOffice\\HomePage\\client\\reclamation\\modifier.html.twig");
    }
}
