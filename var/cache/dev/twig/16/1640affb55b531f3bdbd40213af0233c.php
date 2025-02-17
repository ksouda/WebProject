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

/* FrontOffice/HomePage/materiaux.html.twig */
class __TwigTemplate_343156eacfe67963bc751e43bce1e7db extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "FrontOffice/HomePage/materiaux.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "FrontOffice/HomePage/materiaux.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html>
    <head>
     
       
        <meta charset=\"UTF-8\">
        <title>";
        // line 7
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>
        <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">
        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text><text y=%221.3em%22 x=%220.2em%22 font-size=%2276%22 fill=%22%23fff%22>sf</text></svg>\">
        
        <!-- Favicons -->
        <link href=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/front/img/favicon.png"), "html", null, true);
        yield "\" rel=\"icon\">

        <!-- Fonts -->
        <link href=\"";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://fonts.googleapis.com"), "html", null, true);
        yield "\" rel=\"preconnect\">
        <link href=\"";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://fonts.gstatic.com"), "html", null, true);
        yield "\" rel=\"preconnect\" crossorigin>
        <link href=\"";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"), "html", null, true);
        yield "\" rel=\"stylesheet\">
        <!-- Font Awesome CDN -->
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css\">

        <!-- Vendor CSS Files -->
        <link href=\"https://unpkg.com/aos@2.3.1/dist/aos.css\" rel=\"stylesheet\">
        <link href=\"";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/front/vendor/aos/aos.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
        <link href=\"";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/front/vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
        <link href=\"";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/front/vendor/bootstrap-icons/bootstrap-icons.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
        <link href=\"";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/front/vendor/glightbox/css/glightbox.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
        <link href=\"";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/front/vendor/swiper/swiper-bundle.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
        <link rel=\"stylesheet\" href=\"";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"), "html", null, true);
        yield "\">
        

        <!-- Main CSS File -->
        <link href=\"";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/front/css/main.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
          <link href=\"";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/css2/flipcard.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">

        
    </head>
    <body>
    
       <header id=\"header\" class=\"header d-flex align-items-center fixed-top\">
            <div class=\"container-fluid container-xl position-relative d-flex align-items-center\">
            <a href=\"/\" class=\"logo d-flex align-items-center me-auto\">
                 <img src=\"";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/front/img/logo 2.png"), "html", null, true);
        yield "\" alt=\"\">
            </a>

            <nav id=\"navmenu\" class=\"navmenu\">
                <ul>
                <li><a href=\"";
        // line 47
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"active\">Accueil</a></li>
                <li class=\"dropdown\"><a href=\"#\"><span>Boutique</span> <i class=\"bi bi-chevron-down toggle-dropdown\"></i></a>
                    <ul>
                        <li><a href=\"#\">Produits</a></li>
                        <li><a href=\"";
        // line 51
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_front_materiaux");
        yield "\">Matériaux</a></li>
                    </ul>
                </li>
                <li><a href=\"";
        // line 54
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_front_atelier");
        yield "\">Ateliers en ligne</a></li>
                <li><a href=\"";
        // line 55
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_liste_client");
        yield "\">Réclamation</a></li>
                <li><a href=\"#\"><i class=\"fas fa-shopping-cart\" style=\"font-size: 20px\" ></i></a></li>
                <li class=\"dropdown\">
                    <a href=\"#\" id=\"toggleSidebar\">
                        <i class=\"fas fa-user-circle\" style=\"font-size: 25px\"></i> <!-- Icône de compte -->
                    </a>
                    <ul>
                        <li><a href=\"";
        // line 62
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profil_page", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 62, $this->source); })()), "user", [], "any", false, false, false, 62), "id", [], "any", false, false, false, 62)]), "html", null, true);
        yield "\">Profil</a></li>
                        <li class=\"dropdown\"><a href=\"#\"><span>Historique</span> <i class=\"bi bi-chevron-down toggle-dropdown\"></i></a>
                            <ul>
                            <li><a href=\"#\">Commandes</a></li>
                            <li><a href=\"";
        // line 66
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_liste_client");
        yield "\">Réclamations</a></li>
                            <li><a href=\"";
        // line 67
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_inscriptions");
        yield "\">Aeliers en ligne</a></li>
                            </ul>
                        </li>
                        <li><a href=\"";
        // line 70
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\">Déconnexion</a></li>
                    </ul>
                </li>
                </ul>
            </nav>
            </div>
        </header>
        

        

";
        // line 81
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 154
        yield "        <footer id=\"footer\" class=\"footer dark-background\">
          <div class=\"container footer-top dark-background\">
            <div class=\"row gy-4\">
                <div class=\"col-lg-4 col-md-6 footer-about\">
                <a href=\"index.html.twig\" class=\"d-flex\">
                    <span class=\"sitename\">EDAYETNA</span>
                </a>
                <div class=\"footer-contact pt-3\">
                    <p>La petite Ariana</p>
                    <p>Tunisia</p>
                    <p class=\"mt-3\"><strong>Phone:</strong> <span>+216 54 123 456</span></p>
                    <p><strong>Email:</strong> <span>DevElite2025@gmail.com</span></p>
                </div>
                </div>


                <div class=\"col-lg-2 col-md-3 footer-links\">
                <h4>Liens Utiles</h4>
                <ul>
                    <li><i class=\"bi bi-chevron-right\"></i> <a href=\"#hero\">Accueil</a></li>
                    <li><i class=\"bi bi-chevron-right\"></i> <a href=\"#about\">A propos de nous</a></li>
                    <li><i class=\"bi bi-chevron-right\"></i> <a href=\"#team\">Equipe</a></li>
                    <li><i class=\"bi bi-chevron-right\"></i> <a href=\"#contact\">Contact</a></li>
                </ul>
                </div>

                <div class=\"col-lg-4 col-md-12\">
                <h4>Suivez-nous</h4>
                <p>Restez connecté pour ne rien manquer !</p>
                <div class=\"social-links d-flex\">
                    <a href=\"\"><i class=\"bi bi-twitter-x\"></i></a>
                    <a href=\"\"><i class=\"bi bi-facebook\"></i></a>
                    <a href=\"\"><i class=\"bi bi-instagram\"></i></a>
                    <a href=\"\"><i class=\"bi bi-linkedin\"></i></a>
                </div>
                </div>
            </div>
            </div>
        </footer>

      
        <script src=\"";
        // line 195
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/front/vendor/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        yield "\"></script>
        <script src=\"";
        // line 196
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/front/vendor/php-email-form/validate.js"), "html", null, true);
        yield "\"></script>
        <script src=\"";
        // line 197
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/front/vendor/aos/aos.js"), "html", null, true);
        yield "\"></script>
        <script src=\"";
        // line 198
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/front/vendor/glightbox/js/glightbox.min.js"), "html", null, true);
        yield "\"></script>
        <script src=\"";
        // line 199
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/front/vendor/swiper/swiper-bundle.min.js"), "html", null, true);
        yield "\"></script>
        <script src=\"";
        // line 200
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/front/vendor/waypoints/noframework.waypoints.js"), "html", null, true);
        yield "\"></script>
        <script src=\"";
        // line 201
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/front/vendor/imagesloaded/imagesloaded.pkgd.min.js"), "html", null, true);
        yield "\"></script>
        <script src=\"";
        // line 202
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/front/vendor/isotope-layout/isotope.pkgd.min.js"), "html", null, true);
        yield "\"></script>
        <script src=\"";
        // line 203
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"), "html", null, true);
        yield "\"></script>
        <script src=\"https://unpkg.com/aos@2.3.1/dist/aos.js\"></script>
        <scrip src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
        <script> AOS.init(); </script>
        <script src=\"build/front/js/main.js\"></script>   
    </body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 7
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

    // line 81
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

        // line 82
        yield "        
 

<!-- Boutique Section -->
<section id=\"portfolio\" class=\"portfolio section mt-5\">

  <!-- Section Title -->
  <div class=\"container section-title\" data-aos=\"fade-up\">
    <h2>Materiaux</h2>
    <p>Des matériaux soigneusement sélectionnés pour sublimer vos créations artisanales.</p>
  </div><!-- End Section Title -->
  
  <div class=\"container\">

    <!-- Parcourir les matériaux -->
    <div id=\"materiaux\" class=\"row gy-4 isotope-container\" data-aos=\"fade-up\" data-aos-delay=\"200\">
    ";
        // line 98
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["materiauxes"]) || array_key_exists("materiauxes", $context) ? $context["materiauxes"] : (function () { throw new RuntimeError('Variable "materiauxes" does not exist.', 98, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["materiau"]) {
            // line 99
            yield "        <div class=\"col-lg-4 col-md-6 portfolio-item\">
            <div class=\"flip-card\">
                <div class=\"flip-card-inner\">
                    <!-- Front de la carte -->
                    <div class=\"flip-card-front\">
                        <img src=\"";
            // line 104
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("img/masonry-portfolio/" . CoreExtension::getAttribute($this->env, $this->source, $context["materiau"], "photo", [], "any", false, false, false, 104))), "html", null, true);
            yield "\" class=\"img-fluid\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["materiau"], "NomMateriel", [], "any", false, false, false, 104), "html", null, true);
            yield "\">
                        <div class=\"portfolio-info\">
                            <h4>";
            // line 106
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["materiau"], "NomMateriel", [], "any", false, false, false, 106), "html", null, true);
            yield "</h4>
                            <p>";
            // line 107
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["materiau"], "PrixUnitaire", [], "any", false, false, false, 107), "html", null, true);
            yield " TND</p>
                            <a href=\"";
            // line 108
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("img/masonry-portfolio/" . CoreExtension::getAttribute($this->env, $this->source, $context["materiau"], "photo", [], "any", false, false, false, 108))), "html", null, true);
            yield "\" title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["materiau"], "NomMateriel", [], "any", false, false, false, 108), "html", null, true);
            yield "\" class=\"glightbox preview-link\"><i class=\"bi bi-zoom-in\"></i></a>
                            <a href=\"portfolio-details.html\" title=\"More Details\" class=\"details-link\"><i class=\"bi bi-link-45deg\"></i></a> 
                        </div>
                    </div>

                    <!-- Back de la carte -->
                    <div class=\"flip-card-back\">
                        <div class=\"card-details\">
                            <h4>";
            // line 116
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["materiau"], "NomMateriel", [], "any", false, false, false, 116), "html", null, true);
            yield "</h4>
                            <p><strong>Description :</strong> ";
            // line 117
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["materiau"], "Description", [], "any", false, false, false, 117), "html", null, true);
            yield "</p>
                            <p><strong>Prix :</strong> ";
            // line 118
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["materiau"], "PrixUnitaire", [], "any", false, false, false, 118), "html", null, true);
            yield " TND</p>
                            <p><strong>Catégorie :</strong> ";
            // line 119
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["materiau"], "Categorie", [], "any", false, false, false, 119), "html", null, true);
            yield "</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['materiau'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 126
        yield "</div>

  </div><!-- End Container -->
</section><!-- End Portfolio Section -->



 <script>
document.addEventListener('DOMContentLoaded', function () {
  document.querySelectorAll('.details-link').forEach(link => {
    link.addEventListener('click', function(e) {
      e.preventDefault(); // Empêche le lien de s'ouvrir
      const card = this.closest('.portfolio-item').querySelector('.flip-card');
      const cardInner = card.querySelector('.flip-card-inner');
      
      // Effectuer le premier flip
      card.classList.add('flip');
      
      // Retirer la classe 'flip' après 1.5 seconde pour revenir à l'état initial
      setTimeout(() => {
        card.classList.remove('flip');
      }, 8000); // 8000ms = 8 seconde
    });
  });
});

</script>   
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
        return "FrontOffice/HomePage/materiaux.html.twig";
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
        return array (  412 => 126,  399 => 119,  395 => 118,  391 => 117,  387 => 116,  374 => 108,  370 => 107,  366 => 106,  359 => 104,  352 => 99,  348 => 98,  330 => 82,  317 => 81,  294 => 7,  275 => 203,  271 => 202,  267 => 201,  263 => 200,  259 => 199,  255 => 198,  251 => 197,  247 => 196,  243 => 195,  200 => 154,  198 => 81,  184 => 70,  178 => 67,  174 => 66,  167 => 62,  157 => 55,  153 => 54,  147 => 51,  140 => 47,  132 => 42,  120 => 33,  116 => 32,  109 => 28,  105 => 27,  101 => 26,  97 => 25,  93 => 24,  89 => 23,  80 => 17,  76 => 16,  72 => 15,  66 => 12,  58 => 7,  50 => 1,);
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
        <link href=\"{{asset('build/front/img/favicon.png')}}\" rel=\"icon\">

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
        <link href=\"{{asset('build/front/css/main.css')}}\" rel=\"stylesheet\">
          <link href=\"{{asset('build/css2/flipcard.css')}}\" rel=\"stylesheet\">

        
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
        
 

<!-- Boutique Section -->
<section id=\"portfolio\" class=\"portfolio section mt-5\">

  <!-- Section Title -->
  <div class=\"container section-title\" data-aos=\"fade-up\">
    <h2>Materiaux</h2>
    <p>Des matériaux soigneusement sélectionnés pour sublimer vos créations artisanales.</p>
  </div><!-- End Section Title -->
  
  <div class=\"container\">

    <!-- Parcourir les matériaux -->
    <div id=\"materiaux\" class=\"row gy-4 isotope-container\" data-aos=\"fade-up\" data-aos-delay=\"200\">
    {% for materiau in materiauxes %}
        <div class=\"col-lg-4 col-md-6 portfolio-item\">
            <div class=\"flip-card\">
                <div class=\"flip-card-inner\">
                    <!-- Front de la carte -->
                    <div class=\"flip-card-front\">
                        <img src=\"{{ asset('img/masonry-portfolio/' ~ materiau.photo) }}\" class=\"img-fluid\" alt=\"{{ materiau.NomMateriel }}\">
                        <div class=\"portfolio-info\">
                            <h4>{{ materiau.NomMateriel }}</h4>
                            <p>{{ materiau.PrixUnitaire }} TND</p>
                            <a href=\"{{ asset('img/masonry-portfolio/' ~ materiau.photo) }}\" title=\"{{ materiau.NomMateriel }}\" class=\"glightbox preview-link\"><i class=\"bi bi-zoom-in\"></i></a>
                            <a href=\"portfolio-details.html\" title=\"More Details\" class=\"details-link\"><i class=\"bi bi-link-45deg\"></i></a> 
                        </div>
                    </div>

                    <!-- Back de la carte -->
                    <div class=\"flip-card-back\">
                        <div class=\"card-details\">
                            <h4>{{ materiau.NomMateriel }}</h4>
                            <p><strong>Description :</strong> {{ materiau.Description }}</p>
                            <p><strong>Prix :</strong> {{ materiau.PrixUnitaire }} TND</p>
                            <p><strong>Catégorie :</strong> {{ materiau.Categorie }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    {% endfor %}
</div>

  </div><!-- End Container -->
</section><!-- End Portfolio Section -->



 <script>
document.addEventListener('DOMContentLoaded', function () {
  document.querySelectorAll('.details-link').forEach(link => {
    link.addEventListener('click', function(e) {
      e.preventDefault(); // Empêche le lien de s'ouvrir
      const card = this.closest('.portfolio-item').querySelector('.flip-card');
      const cardInner = card.querySelector('.flip-card-inner');
      
      // Effectuer le premier flip
      card.classList.add('flip');
      
      // Retirer la classe 'flip' après 1.5 seconde pour revenir à l'état initial
      setTimeout(() => {
        card.classList.remove('flip');
      }, 8000); // 8000ms = 8 seconde
    });
  });
});

</script>   
{% endblock %}
        <footer id=\"footer\" class=\"footer dark-background\">
          <div class=\"container footer-top dark-background\">
            <div class=\"row gy-4\">
                <div class=\"col-lg-4 col-md-6 footer-about\">
                <a href=\"index.html.twig\" class=\"d-flex\">
                    <span class=\"sitename\">EDAYETNA</span>
                </a>
                <div class=\"footer-contact pt-3\">
                    <p>La petite Ariana</p>
                    <p>Tunisia</p>
                    <p class=\"mt-3\"><strong>Phone:</strong> <span>+216 54 123 456</span></p>
                    <p><strong>Email:</strong> <span>DevElite2025@gmail.com</span></p>
                </div>
                </div>


                <div class=\"col-lg-2 col-md-3 footer-links\">
                <h4>Liens Utiles</h4>
                <ul>
                    <li><i class=\"bi bi-chevron-right\"></i> <a href=\"#hero\">Accueil</a></li>
                    <li><i class=\"bi bi-chevron-right\"></i> <a href=\"#about\">A propos de nous</a></li>
                    <li><i class=\"bi bi-chevron-right\"></i> <a href=\"#team\">Equipe</a></li>
                    <li><i class=\"bi bi-chevron-right\"></i> <a href=\"#contact\">Contact</a></li>
                </ul>
                </div>

                <div class=\"col-lg-4 col-md-12\">
                <h4>Suivez-nous</h4>
                <p>Restez connecté pour ne rien manquer !</p>
                <div class=\"social-links d-flex\">
                    <a href=\"\"><i class=\"bi bi-twitter-x\"></i></a>
                    <a href=\"\"><i class=\"bi bi-facebook\"></i></a>
                    <a href=\"\"><i class=\"bi bi-instagram\"></i></a>
                    <a href=\"\"><i class=\"bi bi-linkedin\"></i></a>
                </div>
                </div>
            </div>
            </div>
        </footer>

      
        <script src=\"{{asset('build/front/vendor/bootstrap/js/bootstrap.bundle.min.js')}}\"></script>
        <script src=\"{{asset('build/front/vendor/php-email-form/validate.js')}}\"></script>
        <script src=\"{{asset('build/front/vendor/aos/aos.js')}}\"></script>
        <script src=\"{{asset('build/front/vendor/glightbox/js/glightbox.min.js')}}\"></script>
        <script src=\"{{asset('build/front/vendor/swiper/swiper-bundle.min.js')}}\"></script>
        <script src=\"{{asset('build/front/vendor/waypoints/noframework.waypoints.js')}}\"></script>
        <script src=\"{{asset('build/front/vendor/imagesloaded/imagesloaded.pkgd.min.js')}}\"></script>
        <script src=\"{{asset('build/front/vendor/isotope-layout/isotope.pkgd.min.js')}}\"></script>
        <script src=\"{{asset('https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js')}}\"></script>
        <script src=\"https://unpkg.com/aos@2.3.1/dist/aos.js\"></script>
        <scrip src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
        <script> AOS.init(); </script>
        <script src=\"build/front/js/main.js\"></script>   
    </body>
</html>
", "FrontOffice/HomePage/materiaux.html.twig", "C:\\Users\\Lenovo\\WebProject\\templates\\FrontOffice\\HomePage\\materiaux.html.twig");
    }
}
