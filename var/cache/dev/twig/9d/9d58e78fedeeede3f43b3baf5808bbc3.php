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

/* FrontOffice/HomePage/front_atelier/frontatelier.html.twig */
class __TwigTemplate_354bae2ea4099f944da0afa432e6409c extends Template
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
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "FrontOffice/HomePage/front_atelier/frontatelier.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "FrontOffice/HomePage/front_atelier/frontatelier.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html>
    <head>
     
        <meta charset=\"UTF-8\">
        <title>";
        // line 6
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>
        <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">
        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text><text y=%221.3em%22 x=%220.2em%22 font-size=%2276%22 fill=%22%23fff%22>sf</text></svg>\">
        
        <!-- Favicons -->
        <link href=\"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/favicon.png"), "html", null, true);
        yield "\" rel=\"icon\">

        <!-- Fonts -->
        <link href=\"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://fonts.googleapis.com"), "html", null, true);
        yield "\" rel=\"preconnect\">
        <link href=\"";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://fonts.gstatic.com"), "html", null, true);
        yield "\" rel=\"preconnect\" crossorigin>
        <link href=\"";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"), "html", null, true);
        yield "\" rel=\"stylesheet\">
        <!-- Font Awesome CDN -->
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css\">

        <!-- Vendor CSS Files -->
        <link href=\"https://unpkg.com/aos@2.3.1/dist/aos.css\" rel=\"stylesheet\">
        <link href=\"";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/front/vendor/aos/aos.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
        <link href=\"";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/front/vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
        <link href=\"";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/front/vendor/bootstrap-icons/bootstrap-icons.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
        <link href=\"";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/front/vendor/glightbox/css/glightbox.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
        <link href=\"";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/front/vendor/swiper/swiper-bundle.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
        <link rel=\"stylesheet\" href=\"";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"), "html", null, true);
        yield "\">
        

        <!-- Main CSS File -->
        <link href=\"";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/front/cssfront/main.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
        
    </head>
    <body>
    
       <header id=\"header\" class=\"header d-flex align-items-center fixed-top\">
            <div class=\"container-fluid container-xl position-relative d-flex align-items-center\">
            <a href=\"/\" class=\"logo d-flex align-items-center me-auto\">
                 <img src=\"";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/front/img/logo 2.png"), "html", null, true);
        yield "\" alt=\"\">
            </a>

            <nav id=\"navmenu\" class=\"navmenu\">
                <ul>
                <li><a href=\"";
        // line 44
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"active\">Accueil</a></li>
                <li class=\"dropdown\"><a href=\"#\"><span>Boutique</span> <i class=\"bi bi-chevron-down toggle-dropdown\"></i></a>
                    <ul>
                        <li><a href=\"#\">Produits</a></li>
                        <li><a href=\"";
        // line 48
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_front_materiaux");
        yield "\">Matériaux</a></li>
                    </ul>
                </li>
                <li><a href=\"";
        // line 51
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_front_atelier");
        yield "\">Ateliers en ligne</a></li>
                <li><a href=\"";
        // line 52
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_liste_client");
        yield "\">Réclamation</a></li>
                <li><a href=\"#\"><i class=\"fas fa-shopping-cart\" style=\"font-size: 20px\" ></i></a></li>
                <li class=\"dropdown\">
                    <a href=\"#\" id=\"toggleSidebar\">
                        <i class=\"fas fa-user-circle\" style=\"font-size: 25px\"></i> <!-- Icône de compte -->
                    </a>
                    <ul>
                        <li><a href=\"";
        // line 59
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profil_page", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 59, $this->source); })()), "user", [], "any", false, false, false, 59), "id", [], "any", false, false, false, 59)]), "html", null, true);
        yield "\">Profil</a></li>
                        <li class=\"dropdown\"><a href=\"#\"><span>Historique</span> <i class=\"bi bi-chevron-down toggle-dropdown\"></i></a>
                            <ul>
                            <li><a href=\"#\">Commandes</a></li>
                            <li><a href=\"";
        // line 63
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_liste_client");
        yield "\">Réclamations</a></li>
                            <li><a href=\"";
        // line 64
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_inscriptions");
        yield "\">Aeliers en ligne</a></li>
                            </ul>
                        </li>
                        <li><a href=\"";
        // line 67
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\">Déconnexion</a></li>
                    </ul>
                </li>
                </ul>
            </nav>
            </div>
        </header>
        

        
        ";
        // line 77
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 124
        yield "        

        <script src=\"";
        // line 126
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        yield "\"></script>
        <script src=\"";
        // line 127
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/php-email-form/validate.js"), "html", null, true);
        yield "\"></script>
        <script src=\"";
        // line 128
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/aos/aos.js"), "html", null, true);
        yield "\"></script>
        <script src=\"";
        // line 129
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/glightbox/js/glightbox.min.js"), "html", null, true);
        yield "\"></script>
        <script src=\"";
        // line 130
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/swiper/swiper-bundle.min.js"), "html", null, true);
        yield "\"></script>
        <script src=\"";
        // line 131
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/waypoints/noframework.waypoints.js"), "html", null, true);
        yield "\"></script>
        <script src=\"";
        // line 132
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/imagesloaded/imagesloaded.pkgd.min.js"), "html", null, true);
        yield "\"></script>
        <script src=\"";
        // line 133
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/isotope-layout/isotope.pkgd.min.js"), "html", null, true);
        yield "\"></script>
        <script src=\"";
        // line 134
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"), "html", null, true);
        yield "\"></script>
        <script src=\"https://unpkg.com/aos@2.3.1/dist/aos.js\"></script>
        <scrip src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
        <script> AOS.init(); </script>
        <script src=\"";
        // line 138
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/front/jsfront/main.js"), "html", null, true);
        yield "\"></script>   
        <!-- Main JS File -->
    </body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 6
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

        yield "Symfony Maniac";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 77
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

        // line 78
        yield "
            <section id=\"atelier\" class=\"pricing section lightt-background\">
                <div class=\"container section-title\" data-aos=\"fade-up\">
                    <h2>Les ateliers en ligne disponibles </h2>
                </div>
                <div class=\"container\">
                    <div class=\"row gy-4\">
                        ";
        // line 85
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["atelierenlignes"]) || array_key_exists("atelierenlignes", $context) ? $context["atelierenlignes"] : (function () { throw new RuntimeError('Variable "atelierenlignes" does not exist.', 85, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["atelierenligne"]) {
            // line 86
            yield "                            <div class=\"col-lg-4\" data-aos=\"zoom-in\" data-aos-delay=\"100\">
                                <div class=\"pricing-item\">
                                    <h3>";
            // line 88
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["atelierenligne"], "titre", [], "any", false, false, false, 88), "html", null, true);
            yield "</h3>
                                    <p><strong>Formateur :</strong> ";
            // line 89
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["atelierenligne"], "idUser", [], "any", false, false, false, 89), "nom", [], "any", false, false, false, 89), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["atelierenligne"], "idUser", [], "any", false, false, false, 89), "prenom", [], "any", false, false, false, 89), "html", null, true);
            yield "</p>
                                    <h4><sup>DT</sup>";
            // line 90
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["atelierenligne"], "prix", [], "any", false, false, false, 90), "html", null, true);
            yield "<span> / atelier</span></h4>
                                    <ul>
                                        <li><i class=\"bi bi-check\"></i> <span>";
            // line 92
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["atelierenligne"], "description", [], "any", false, false, false, 92), 0, 10), "html", null, true);
            yield "...</span></li>
                                        <li><i class=\"bi bi-check\"></i> <span>Niveau : ";
            // line 93
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["atelierenligne"], "niveauDiff", [], "any", false, false, false, 93), "html", null, true);
            yield "</span></li>
                                        <li><i class=\"bi bi-check\"></i> <span>Date de l'atelier : ";
            // line 94
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["atelierenligne"], "datecours", [], "any", false, false, false, 94)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["atelierenligne"], "datecours", [], "any", false, false, false, 94), "Y-m-d"), "html", null, true)) : ("N/A"));
            yield "</span></li>
                                        <li><i class=\"bi bi-check\"></i> <span>Durée : ";
            // line 95
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["atelierenligne"], "duree", [], "any", false, false, false, 95), "html", null, true);
            yield " min</span></li>
                                        <li><a href=\"javascript:void(0);\" class=\"see-more\" onclick=\"openModal('";
            // line 96
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["atelierenligne"], "id", [], "any", false, false, false, 96), "html", null, true);
            yield "')\">Voir plus</a></li>
                                    </ul>
                                    <a href=\"";
            // line 98
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_inscription_atelier", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["atelierenligne"], "id", [], "any", false, false, false, 98)]), "html", null, true);
            yield "\" class=\"buy-btn\">S'inscrire</a>
                                </div>
                            </div><!-- End Pricing Item -->
                            
                            <!-- Modale pour chaque atelier -->
                            <div id=\"modal";
            // line 103
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["atelierenligne"], "id", [], "any", false, false, false, 103), "html", null, true);
            yield "\" class=\"modal\">
                                <div class=\"modal-content\">
                                    <span class=\"close\" onclick=\"closeModal('";
            // line 105
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["atelierenligne"], "id", [], "any", false, false, false, 105), "html", null, true);
            yield "')\">&times;</span>
                                    <h2>";
            // line 106
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["atelierenligne"], "titre", [], "any", false, false, false, 106), "html", null, true);
            yield "</h2>
                                    <p><strong>Formateur :</strong> ";
            // line 107
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["atelierenligne"], "idUser", [], "any", false, false, false, 107), "nom", [], "any", false, false, false, 107), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["atelierenligne"], "idUser", [], "any", false, false, false, 107), "prenom", [], "any", false, false, false, 107), "html", null, true);
            yield "</p>
                                    <p><strong>Description complète :</strong> ";
            // line 108
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["atelierenligne"], "description", [], "any", false, false, false, 108), "html", null, true);
            yield "</p>
                                    <p><strong>Prix :</strong> ";
            // line 109
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["atelierenligne"], "prix", [], "any", false, false, false, 109), "html", null, true);
            yield " DT</p>
                                    <p><strong>Date de l'atelier :</strong> ";
            // line 110
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["atelierenligne"], "datecours", [], "any", false, false, false, 110)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["atelierenligne"], "datecours", [], "any", false, false, false, 110), "Y-m-d"), "html", null, true)) : ("Non précisé"));
            yield "</p>
                                    <p><strong>Durée :</strong> ";
            // line 111
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["atelierenligne"], "duree", [], "any", false, false, false, 111), "html", null, true);
            yield " min</p>
                                </div>
                            </div>
                        ";
            $context['_iterated'] = true;
        }
        // line 118
        if (!$context['_iterated']) {
            // line 115
            yield "                            <div class=\"col-lg-12\">
                                <p>Aucun atelier trouvé</p>
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['atelierenligne'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 119
        yield "                    </div>
                </div>
            
        </section>
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
        return "FrontOffice/HomePage/front_atelier/frontatelier.html.twig";
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
        return array (  400 => 119,  391 => 115,  389 => 118,  381 => 111,  377 => 110,  373 => 109,  369 => 108,  363 => 107,  359 => 106,  355 => 105,  350 => 103,  342 => 98,  337 => 96,  333 => 95,  329 => 94,  325 => 93,  321 => 92,  316 => 90,  310 => 89,  306 => 88,  302 => 86,  297 => 85,  288 => 78,  275 => 77,  252 => 6,  236 => 138,  229 => 134,  225 => 133,  221 => 132,  217 => 131,  213 => 130,  209 => 129,  205 => 128,  201 => 127,  197 => 126,  193 => 124,  191 => 77,  178 => 67,  172 => 64,  168 => 63,  161 => 59,  151 => 52,  147 => 51,  141 => 48,  134 => 44,  126 => 39,  115 => 31,  108 => 27,  104 => 26,  100 => 25,  96 => 24,  92 => 23,  88 => 22,  79 => 16,  75 => 15,  71 => 14,  65 => 11,  57 => 6,  50 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
     
        <meta charset=\"UTF-8\">
        <title>{% block title %}Symfony Maniac{% endblock %}</title>
        <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">
        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text><text y=%221.3em%22 x=%220.2em%22 font-size=%2276%22 fill=%22%23fff%22>sf</text></svg>\">
        
        <!-- Favicons -->
        <link href=\"{{asset('img/favicon.png')}}\" rel=\"icon\">

        <!-- Fonts -->
        <link href=\"{{asset('https://fonts.googleapis.com')}}\" rel=\"preconnect\">
        <link href=\"{{asset('https://fonts.gstatic.com')}}\" rel=\"preconnect\" crossorigin>
        <link href=\"{{asset('https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap')}}\" rel=\"stylesheet\">
        <!-- Font Awesome CDN -->
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css\">

        <!-- Vendor CSS Files -->
        <link href=\"https://unpkg.com/aos@2.3.1/dist/aos.css\" rel=\"stylesheet\">
        <link href=\"{{asset('build/front/vendor/aos/aos.css')}}\" rel=\"stylesheet\">
        <link href=\"{{asset('build/front/vendor/bootstrap/css/bootstrap.min.css')}}\" rel=\"stylesheet\">
        <link href=\"{{asset('build/front/vendor/bootstrap-icons/bootstrap-icons.css')}}\" rel=\"stylesheet\">
        <link href=\"{{asset('build/front/vendor/glightbox/css/glightbox.min.css')}}\" rel=\"stylesheet\">
        <link href=\"{{asset('build/front/vendor/swiper/swiper-bundle.min.css')}}\" rel=\"stylesheet\">
        <link rel=\"stylesheet\" href=\"{{asset('https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css')}}\">
        

        <!-- Main CSS File -->
        <link href=\"{{asset('build/front/cssfront/main.css')}}\" rel=\"stylesheet\">
        
    </head>
    <body>
    
       <header id=\"header\" class=\"header d-flex align-items-center fixed-top\">
            <div class=\"container-fluid container-xl position-relative d-flex align-items-center\">
            <a href=\"/\" class=\"logo d-flex align-items-center me-auto\">
                 <img src=\"{{asset('build/front/img/logo 2.png')}}\" alt=\"\">
            </a>

            <nav id=\"navmenu\" class=\"navmenu\">
                <ul>
                <li><a href=\"{{ path('app_home') }}\" class=\"active\">Accueil</a></li>
                <li class=\"dropdown\"><a href=\"#\"><span>Boutique</span> <i class=\"bi bi-chevron-down toggle-dropdown\"></i></a>
                    <ul>
                        <li><a href=\"#\">Produits</a></li>
                        <li><a href=\"{{ path('app_front_materiaux') }}\">Matériaux</a></li>
                    </ul>
                </li>
                <li><a href=\"{{path('app_front_atelier') }}\">Ateliers en ligne</a></li>
                <li><a href=\"{{path('app_reclamation_liste_client') }}\">Réclamation</a></li>
                <li><a href=\"#\"><i class=\"fas fa-shopping-cart\" style=\"font-size: 20px\" ></i></a></li>
                <li class=\"dropdown\">
                    <a href=\"#\" id=\"toggleSidebar\">
                        <i class=\"fas fa-user-circle\" style=\"font-size: 25px\"></i> <!-- Icône de compte -->
                    </a>
                    <ul>
                        <li><a href=\"{{ path('profil_page', { 'id': app.user.id }) }}\">Profil</a></li>
                        <li class=\"dropdown\"><a href=\"#\"><span>Historique</span> <i class=\"bi bi-chevron-down toggle-dropdown\"></i></a>
                            <ul>
                            <li><a href=\"#\">Commandes</a></li>
                            <li><a href=\"{{path('app_reclamation_liste_client') }}\">Réclamations</a></li>
                            <li><a href=\"{{path('app_inscriptions') }}\">Aeliers en ligne</a></li>
                            </ul>
                        </li>
                        <li><a href=\"{{ path('app_logout') }}\">Déconnexion</a></li>
                    </ul>
                </li>
                </ul>
            </nav>
            </div>
        </header>
        

        
        {% block body %}

            <section id=\"atelier\" class=\"pricing section lightt-background\">
                <div class=\"container section-title\" data-aos=\"fade-up\">
                    <h2>Les ateliers en ligne disponibles </h2>
                </div>
                <div class=\"container\">
                    <div class=\"row gy-4\">
                        {% for atelierenligne in atelierenlignes %}
                            <div class=\"col-lg-4\" data-aos=\"zoom-in\" data-aos-delay=\"100\">
                                <div class=\"pricing-item\">
                                    <h3>{{ atelierenligne.titre }}</h3>
                                    <p><strong>Formateur :</strong> {{  atelierenligne.idUser.nom }} {{ atelierenligne.idUser.prenom}}</p>
                                    <h4><sup>DT</sup>{{ atelierenligne.prix }}<span> / atelier</span></h4>
                                    <ul>
                                        <li><i class=\"bi bi-check\"></i> <span>{{ atelierenligne.description|slice(0, 10) }}...</span></li>
                                        <li><i class=\"bi bi-check\"></i> <span>Niveau : {{ atelierenligne.niveauDiff }}</span></li>
                                        <li><i class=\"bi bi-check\"></i> <span>Date de l'atelier : {{ atelierenligne.datecours ? atelierenligne.datecours|date('Y-m-d') : 'N/A' }}</span></li>
                                        <li><i class=\"bi bi-check\"></i> <span>Durée : {{ atelierenligne.duree }} min</span></li>
                                        <li><a href=\"javascript:void(0);\" class=\"see-more\" onclick=\"openModal('{{ atelierenligne.id }}')\">Voir plus</a></li>
                                    </ul>
                                    <a href=\"{{ path('app_inscription_atelier', {'id': atelierenligne.id}) }}\" class=\"buy-btn\">S'inscrire</a>
                                </div>
                            </div><!-- End Pricing Item -->
                            
                            <!-- Modale pour chaque atelier -->
                            <div id=\"modal{{ atelierenligne.id }}\" class=\"modal\">
                                <div class=\"modal-content\">
                                    <span class=\"close\" onclick=\"closeModal('{{ atelierenligne.id }}')\">&times;</span>
                                    <h2>{{ atelierenligne.titre }}</h2>
                                    <p><strong>Formateur :</strong> {{ atelierenligne.idUser.nom }} {{ atelierenligne.idUser.prenom}}</p>
                                    <p><strong>Description complète :</strong> {{ atelierenligne.description }}</p>
                                    <p><strong>Prix :</strong> {{ atelierenligne.prix }} DT</p>
                                    <p><strong>Date de l'atelier :</strong> {{ atelierenligne.datecours ? atelierenligne.datecours|date('Y-m-d') : 'Non précisé' }}</p>
                                    <p><strong>Durée :</strong> {{ atelierenligne.duree }} min</p>
                                </div>
                            </div>
                        {% else %}
                            <div class=\"col-lg-12\">
                                <p>Aucun atelier trouvé</p>
                            </div>
                        {% endfor %}
                    </div>
                </div>
            
        </section>
        {% endblock %}
        

        <script src=\"{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}\"></script>
        <script src=\"{{asset('vendor/php-email-form/validate.js')}}\"></script>
        <script src=\"{{asset('vendor/aos/aos.js')}}\"></script>
        <script src=\"{{asset('vendor/glightbox/js/glightbox.min.js')}}\"></script>
        <script src=\"{{asset('vendor/swiper/swiper-bundle.min.js')}}\"></script>
        <script src=\"{{asset('vendor/waypoints/noframework.waypoints.js')}}\"></script>
        <script src=\"{{asset('vendor/imagesloaded/imagesloaded.pkgd.min.js')}}\"></script>
        <script src=\"{{asset('vendor/isotope-layout/isotope.pkgd.min.js')}}\"></script>
        <script src=\"{{asset('https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js')}}\"></script>
        <script src=\"https://unpkg.com/aos@2.3.1/dist/aos.js\"></script>
        <scrip src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
        <script> AOS.init(); </script>
        <script src=\"{{asset('build/front/jsfront/main.js')}}\"></script>   
        <!-- Main JS File -->
    </body>
</html>
", "FrontOffice/HomePage/front_atelier/frontatelier.html.twig", "C:\\Users\\Lenovo\\WebProject\\templates\\FrontOffice\\HomePage\\front_atelier\\frontatelier.html.twig");
    }
}
