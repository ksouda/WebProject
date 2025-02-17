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

/* frontoffice/HomePage/front_atelier/inscription_atelier/inscriptionatelier.html.twig */
class __TwigTemplate_3deb4c26380fa2b6cd42b8ac4e2a9501 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "frontoffice/HomePage/front_atelier/inscription_atelier/inscriptionatelier.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "frontoffice/HomePage/front_atelier/inscription_atelier/inscriptionatelier.html.twig"));

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
        <script src=\"https://cdn.jsdelivr.net/npm/sweetalert2@11\"></script>

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
        yield "\">Accueil</a></li>
                <li class=\"dropdown\"><a href=\"#\"><span>Boutique</span> <i class=\"bi bi-chevron-down toggle-dropdown\"></i></a>
                    <ul>
                        <li><a href=\"#\">Produits</a></li>
                        <li><a href=\"#\">Matériaux</a></li>
                    </ul>
                </li>
                <li><a href=\"";
        // line 51
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_front_atelier");
        yield "\" >Ateliers en ligne</a></li>
                <li><a href=\"#\">Réclamation</a></li>
                <li><a href=\"#\"><i class=\"fas fa-shopping-cart\" style=\"font-size: 20px\" ></i></a></li>
                <li class=\"dropdown\">
                    <a href=\"#\" id=\"toggleSidebar\">
                        <i class=\"fas fa-user-circle active\" style=\"font-size: 25px\" ></i> <!-- Icône de compte -->
                    </a>
                    <ul>
                        <li><a href=\"#\">Profil</a></li>
                        <li class=\"dropdown\"><a href=\"#\"><span>Historique</span> <i class=\"bi bi-chevron-down toggle-dropdown\"></i></a>
                            <ul>
                            <li><a href=\"#\">Commandes</a></li>
                            <li><a href=\"#\">Réclamations</a></li>
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
        
        
        ";
        // line 76
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 165
        yield "        

        <script src=\"";
        // line 167
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        yield "\"></script>
        <script src=\"";
        // line 168
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/php-email-form/validate.js"), "html", null, true);
        yield "\"></script>
        <script src=\"";
        // line 169
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/aos/aos.js"), "html", null, true);
        yield "\"></script>
        <script src=\"";
        // line 170
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/glightbox/js/glightbox.min.js"), "html", null, true);
        yield "\"></script>
        <script src=\"";
        // line 171
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/swiper/swiper-bundle.min.js"), "html", null, true);
        yield "\"></script>
        <script src=\"";
        // line 172
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/waypoints/noframework.waypoints.js"), "html", null, true);
        yield "\"></script>
        <script src=\"";
        // line 173
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/imagesloaded/imagesloaded.pkgd.min.js"), "html", null, true);
        yield "\"></script>
        <script src=\"";
        // line 174
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/isotope-layout/isotope.pkgd.min.js"), "html", null, true);
        yield "\"></script>
        <script src=\"";
        // line 175
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"), "html", null, true);
        yield "\"></script>
        <script src=\"https://unpkg.com/aos@2.3.1/dist/aos.js\"></script>
        <scrip src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
        <!-- Bootstrap JS (pour que le modal fonctionne correctement) -->

<script src=\"https://cdn.jsdelivr.net/npm/sweetalert2@11\"></script>
        <script> AOS.init(); </script>
        <script src=\"";
        // line 182
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

    // line 76
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

        // line 77
        yield "            
        <section id=\"inscriptions\" class=\"team section lightt-background\">
            <div class=\"container section-title\" data-aos=\"fade-up\">
                <h2>Historique des inscriptions</h2>
                <p>Retrouvez les ateliers auxquels vous êtes inscrit.</p>
            </div>
            
            <div class=\"container\">
                <div class=\"row gy-4\">
                ";
        // line 86
        if ((array_key_exists("inscriptions", $context) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["inscriptions"]) || array_key_exists("inscriptions", $context) ? $context["inscriptions"] : (function () { throw new RuntimeError('Variable "inscriptions" does not exist.', 86, $this->source); })())))) {
            // line 87
            yield "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["inscriptions"]) || array_key_exists("inscriptions", $context) ? $context["inscriptions"] : (function () { throw new RuntimeError('Variable "inscriptions" does not exist.', 87, $this->source); })()));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["inscription"]) {
                // line 88
                yield "                    <div class=\"col-lg-6\" data-aos=\"fade-up\">
                        <div class=\"team-member d-flex align-items-start\">
                        <div class=\"member-info\">
                            <h4>";
                // line 91
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["inscription"], "atelier", [], "any", false, false, false, 91), "titre", [], "any", false, false, false, 91), "html", null, true);
                yield "</h4>
                            <span>Formateur: ";
                // line 92
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["inscription"], "atelier", [], "any", false, false, false, 92), "idUser", [], "any", false, false, false, 92), "nom", [], "any", false, false, false, 92), "html", null, true);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["inscription"], "atelier", [], "any", false, false, false, 92), "idUser", [], "any", false, false, false, 92), "prenom", [], "any", false, false, false, 92), "html", null, true);
                yield "</span>
                            <p>Date d'inscription: ";
                // line 93
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["inscription"], "dateinscri", [], "any", false, false, false, 93), "Y-m-d"), "html", null, true);
                yield "</p>
                            <p>Statut: ";
                // line 94
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["inscription"], "statut", [], "any", false, false, false, 94), "html", null, true);
                yield "</p>
                            <div class=\"social d-flex gap-2\">
                                <!-- Icônes d'action supplémentaires -->
                                <a onclick=\"toggleDetails(event, this)\">
                                <button type=\"button\" class=\"btn btn-link p-0 border-0\" style=\"background: none;\"
                                    data-titre=\"";
                // line 99
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["inscription"], "atelier", [], "any", false, false, false, 99), "titre", [], "any", false, false, false, 99), "html", null, true);
                yield "\"
                                    data-category=\"";
                // line 100
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["inscription"], "atelier", [], "any", false, false, false, 100), "categorie", [], "any", false, false, false, 100), "html", null, true);
                yield "\"
                                    data-formateur=\"";
                // line 101
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["inscription"], "atelier", [], "any", false, false, false, 101), "idUser", [], "any", false, false, false, 101), "nom", [], "any", false, false, false, 101), "html", null, true);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["inscription"], "atelier", [], "any", false, false, false, 101), "idUser", [], "any", false, false, false, 101), "prenom", [], "any", false, false, false, 101), "html", null, true);
                yield "\"
                                    data-date=\"";
                // line 102
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["inscription"], "atelier", [], "any", false, false, false, 102), "datecours", [], "any", false, false, false, 102), "Y-m-d"), "html", null, true);
                yield "\"
                                    data-prix=\"";
                // line 103
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["inscription"], "atelier", [], "any", false, false, false, 103), "prix", [], "any", false, false, false, 103), "html", null, true);
                yield "\"
                                    data-lien=\"";
                // line 104
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["inscription"], "atelier", [], "any", false, false, false, 104), "lien", [], "any", false, false, false, 104), "html", null, true);
                yield "\"
                                    data-duree=\"";
                // line 105
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["inscription"], "atelier", [], "any", false, false, false, 105), "duree", [], "any", false, false, false, 105), "html", null, true);
                yield "\"
                                    data-statut=\"";
                // line 106
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["inscription"], "statut", [], "any", false, false, false, 106), "html", null, true);
                yield "\">
                                    <i class=\"fa fa-info-circle\" style=\"color: #17a2b8; font-size: 1.2rem; cursor: pointer;\"></i>
                                </button>
                                </a>
                                ";
                // line 110
                yield Twig\Extension\CoreExtension::include($this->env, $context, "FrontOffice/HomePage/front_atelier/inscription_atelier/deleteinscri.html.twig");
                yield "
                            </div>
                        </div>
                        </div>
                    </div>
                    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['inscription'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 116
            yield "                ";
        } else {
            // line 117
            yield "                    <div class=\"col-12 text-center\">
                    <p>Aucune inscription trouvée.</p>
                    </div>
                ";
        }
        // line 121
        yield "                </div>
            </div>
            <!-- Modal personnalisé -->
            <div id=\"atelierInfoModal\" class=\"custom-modal\">
                <div class=\"custom-modal-content\">
                    <span class=\"close-modal\">&times;</span>
                    <h2>Détails qui concernent l'atelier</h2>
                    <p><strong>Titre de l'atelier :</strong> <span id=\"atelierTitle\"></span></p>
                    <p><strong>Catégorie :</strong> <span id=\"atelierCategory\"></span></p>
                    <p><strong>Formateur :</strong> <span id=\"atelierFormateur\"></span></p>
                    <p><strong>Date de l'atelier:</strong> <span id=\"atelierDate\"></span></p>
                    <p><strong>Prix :</strong> <span id=\"atelierPrix\"></span> dt</p>
                    <p><strong>Durée :</strong> <span id=\"atelierDuree\"></span> minutes</p>
                    <p><strong>Lien :</strong> <span id=\"atelierLien\"></span></p>
                    <p><strong>Statut :</strong> <span id=\"atelierStatut\"></span></p>
                    <button id=\"closeModalButton\" class=\"close-button\">Fermer</button>
                </div>
            </div>


           ";
        // line 141
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 141, $this->source); })()), "flashes", ["info"], "method", false, false, false, 141))) {
            // line 142
            yield "    <script>
    Swal.fire({
        title: 'Avertissement',
        text: \"Vous êtes déjà inscrit à cet atelier.\",
        icon: 'info',
        confirmButtonText: 'OK'
    });
    </script>
";
        }
        // line 151
        yield "
";
        // line 152
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 152, $this->source); })()), "flashes", ["success"], "method", false, false, false, 152))) {
            // line 153
            yield "    <script>
    Swal.fire({
        title: 'Inscription avec succès',
        icon: 'success',
        confirmButtonText: 'OK'
    });
    </script>
";
        }
        // line 161
        yield "
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
        return "frontoffice/HomePage/front_atelier/inscription_atelier/inscriptionatelier.html.twig";
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
        return array (  446 => 161,  436 => 153,  434 => 152,  431 => 151,  420 => 142,  418 => 141,  396 => 121,  390 => 117,  387 => 116,  367 => 110,  360 => 106,  356 => 105,  352 => 104,  348 => 103,  344 => 102,  338 => 101,  334 => 100,  330 => 99,  322 => 94,  318 => 93,  312 => 92,  308 => 91,  303 => 88,  285 => 87,  283 => 86,  272 => 77,  259 => 76,  236 => 6,  220 => 182,  210 => 175,  206 => 174,  202 => 173,  198 => 172,  194 => 171,  190 => 170,  186 => 169,  182 => 168,  178 => 167,  174 => 165,  172 => 76,  144 => 51,  134 => 44,  126 => 39,  115 => 31,  108 => 27,  104 => 26,  100 => 25,  96 => 24,  92 => 23,  88 => 22,  79 => 16,  75 => 15,  71 => 14,  65 => 11,  57 => 6,  50 => 1,);
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
        <script src=\"https://cdn.jsdelivr.net/npm/sweetalert2@11\"></script>

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
                <li><a href=\"{{path('app_home')}}\">Accueil</a></li>
                <li class=\"dropdown\"><a href=\"#\"><span>Boutique</span> <i class=\"bi bi-chevron-down toggle-dropdown\"></i></a>
                    <ul>
                        <li><a href=\"#\">Produits</a></li>
                        <li><a href=\"#\">Matériaux</a></li>
                    </ul>
                </li>
                <li><a href=\"{{path('app_front_atelier')}}\" >Ateliers en ligne</a></li>
                <li><a href=\"#\">Réclamation</a></li>
                <li><a href=\"#\"><i class=\"fas fa-shopping-cart\" style=\"font-size: 20px\" ></i></a></li>
                <li class=\"dropdown\">
                    <a href=\"#\" id=\"toggleSidebar\">
                        <i class=\"fas fa-user-circle active\" style=\"font-size: 25px\" ></i> <!-- Icône de compte -->
                    </a>
                    <ul>
                        <li><a href=\"#\">Profil</a></li>
                        <li class=\"dropdown\"><a href=\"#\"><span>Historique</span> <i class=\"bi bi-chevron-down toggle-dropdown\"></i></a>
                            <ul>
                            <li><a href=\"#\">Commandes</a></li>
                            <li><a href=\"#\">Réclamations</a></li>
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
        
        
        {% block body %}
            
        <section id=\"inscriptions\" class=\"team section lightt-background\">
            <div class=\"container section-title\" data-aos=\"fade-up\">
                <h2>Historique des inscriptions</h2>
                <p>Retrouvez les ateliers auxquels vous êtes inscrit.</p>
            </div>
            
            <div class=\"container\">
                <div class=\"row gy-4\">
                {% if inscriptions is defined and inscriptions is not empty %}
                    {% for inscription in inscriptions %}
                    <div class=\"col-lg-6\" data-aos=\"fade-up\">
                        <div class=\"team-member d-flex align-items-start\">
                        <div class=\"member-info\">
                            <h4>{{ inscription.atelier.titre }}</h4>
                            <span>Formateur: {{ inscription.atelier.idUser.nom }} {{ inscription.atelier.idUser.prenom}}</span>
                            <p>Date d'inscription: {{ inscription.dateinscri|date('Y-m-d') }}</p>
                            <p>Statut: {{ inscription.statut }}</p>
                            <div class=\"social d-flex gap-2\">
                                <!-- Icônes d'action supplémentaires -->
                                <a onclick=\"toggleDetails(event, this)\">
                                <button type=\"button\" class=\"btn btn-link p-0 border-0\" style=\"background: none;\"
                                    data-titre=\"{{ inscription.atelier.titre }}\"
                                    data-category=\"{{ inscription.atelier.categorie }}\"
                                    data-formateur=\"{{ inscription.atelier.idUser.nom }} {{ inscription.atelier.idUser.prenom }}\"
                                    data-date=\"{{ inscription.atelier.datecours|date('Y-m-d') }}\"
                                    data-prix=\"{{ inscription.atelier.prix }}\"
                                    data-lien=\"{{ inscription.atelier.lien }}\"
                                    data-duree=\"{{ inscription.atelier.duree }}\"
                                    data-statut=\"{{ inscription.statut }}\">
                                    <i class=\"fa fa-info-circle\" style=\"color: #17a2b8; font-size: 1.2rem; cursor: pointer;\"></i>
                                </button>
                                </a>
                                {{include('FrontOffice/HomePage/front_atelier/inscription_atelier/deleteinscri.html.twig')}}
                            </div>
                        </div>
                        </div>
                    </div>
                    {% endfor %}
                {% else %}
                    <div class=\"col-12 text-center\">
                    <p>Aucune inscription trouvée.</p>
                    </div>
                {% endif %}
                </div>
            </div>
            <!-- Modal personnalisé -->
            <div id=\"atelierInfoModal\" class=\"custom-modal\">
                <div class=\"custom-modal-content\">
                    <span class=\"close-modal\">&times;</span>
                    <h2>Détails qui concernent l'atelier</h2>
                    <p><strong>Titre de l'atelier :</strong> <span id=\"atelierTitle\"></span></p>
                    <p><strong>Catégorie :</strong> <span id=\"atelierCategory\"></span></p>
                    <p><strong>Formateur :</strong> <span id=\"atelierFormateur\"></span></p>
                    <p><strong>Date de l'atelier:</strong> <span id=\"atelierDate\"></span></p>
                    <p><strong>Prix :</strong> <span id=\"atelierPrix\"></span> dt</p>
                    <p><strong>Durée :</strong> <span id=\"atelierDuree\"></span> minutes</p>
                    <p><strong>Lien :</strong> <span id=\"atelierLien\"></span></p>
                    <p><strong>Statut :</strong> <span id=\"atelierStatut\"></span></p>
                    <button id=\"closeModalButton\" class=\"close-button\">Fermer</button>
                </div>
            </div>


           {% if app.flashes('info') is not empty %}
    <script>
    Swal.fire({
        title: 'Avertissement',
        text: \"Vous êtes déjà inscrit à cet atelier.\",
        icon: 'info',
        confirmButtonText: 'OK'
    });
    </script>
{% endif %}

{% if app.flashes('success') is not empty %}
    <script>
    Swal.fire({
        title: 'Inscription avec succès',
        icon: 'success',
        confirmButtonText: 'OK'
    });
    </script>
{% endif %}

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
        <!-- Bootstrap JS (pour que le modal fonctionne correctement) -->

<script src=\"https://cdn.jsdelivr.net/npm/sweetalert2@11\"></script>
        <script> AOS.init(); </script>
        <script src=\"{{asset('build/front/jsfront/main.js')}}\"></script>   
        <!-- Main JS File -->
    </body>
</html>
", "frontoffice/HomePage/front_atelier/inscription_atelier/inscriptionatelier.html.twig", "C:\\Users\\Lenovo\\WebProject\\templates\\FrontOffice\\HomePage\\front_atelier\\inscription_atelier\\inscriptionatelier.html.twig");
    }
}
