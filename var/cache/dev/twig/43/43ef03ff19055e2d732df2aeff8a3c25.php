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

/* FrontOffice/HomePage/frontuser.html.twig */
class __TwigTemplate_41c036d24a0e2065d4628ce5c1e1eb81 extends Template
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

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "FrontOffice/HomePage/basefrontclient.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "FrontOffice/HomePage/frontuser.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "FrontOffice/HomePage/frontuser.html.twig"));

        $this->parent = $this->loadTemplate("FrontOffice/HomePage/basefrontclient.html.twig", "FrontOffice/HomePage/frontuser.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
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

        yield "EDAYETNA";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 4
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

        // line 5
        yield "
<main class=\"main\">
    
  <!-- Hero Section -->
    <section id=\"hero\" class=\"hero section dark-background\">

      <div class=\"container\">
        <div class=\"row gy-4\">
          <div class=\"col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center\" data-aos=\"zoom-out\">
            <h1>L'Artisanat à Portée de Clic </h1>
            <p>Un Savoir-Faire Ancestral au Service de l'Avenir</p>
          </div>
          <div class=\"col-lg-6 order-1 order-lg-1 hero-img\" data-aos=\"zoom-out\" data-aos-delay=\"200\">
            <img src=\"";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/front/img/hero.png"), "html", null, true);
        yield "\" class=\"img-fluid animated\" alt=\"\">
          </div>
        </div>
      </div>

     </section>
  <!-- /Hero Section -->

    <!-- Clients Section -->
    <section id=\"clients\" class=\"clients section light-background\">

      <div class=\"container\">

        <div class=\"swiper init-swiper\">
          <script type=\"application/json\" class=\"swiper-config\">
            {
              \"loop\": true,
              \"speed\": 600,
              \"autoplay\": {
                \"delay\": 5000
              },
              \"slidesPerView\": \"auto\",
              \"pagination\": {
                \"el\": \".swiper-pagination\",
                \"type\": \"bullets\",
                \"clickable\": true
              },
              \"breakpoints\": {
                \"320\": {
                  \"slidesPerView\": 2,
                  \"spaceBetween\": 40
                },
                \"480\": {
                  \"slidesPerView\": 3,
                  \"spaceBetween\": 60
                },
                \"640\": {
                  \"slidesPerView\": 4,
                  \"spaceBetween\": 80
                },
                \"992\": {
                  \"slidesPerView\": 5,
                  \"spaceBetween\": 120
                },
                \"1200\": {
                  \"slidesPerView\": 6,
                  \"spaceBetween\": 120
                }
              }
            }
          </script>
          <div class=\"swiper-wrapper align-items-center\">
            <div class=\"swiper-slide\"><img src=\"build/front/img/clients/1.png\" class=\"img-fluid\" alt=\"\"></div>
            <div class=\"swiper-slide\"><img src=\"build/front/img/clients/2.png\" class=\"img-fluid\" alt=\"\"></div>
            <div class=\"swiper-slide\"><img src=\"build/front/img/clients/3.png\" class=\"img-fluid\" alt=\"\"></div>
            <div class=\"swiper-slide\"><img src=\"build/front/img/clients/4.png\" class=\"img-fluid\" alt=\"\"></div>
            <div class=\"swiper-slide\"><img src=\"build/front/img/clients/5.png\" class=\"img-fluid\" alt=\"\"></div>
            <div class=\"swiper-slide\"><img src=\"build/front/img/clients/6.png\" class=\"img-fluid\" alt=\"\"></div>
            <div class=\"swiper-slide\"><img src=\"build/front/img/clients/7.png\" class=\"img-fluid\" alt=\"\"></div>
            <div class=\"swiper-slide\"><img src=\"build/front/img/clients/8.jpg\" class=\"img-fluid\" alt=\"\"></div>
          </div>
        </div>

      </div>

    </section><!-- /Clients Section -->

    <!-- Boutique Section -->
    <!-- Boutique Section -->
    <section id=\"portfolio\" class=\"portfolio section\">

      <!-- Section Title -->
      <div class=\"container section-title\" data-aos=\"fade-up\">
        <h2>Boutique</h2>
        <p>Laissez parler votre créativité : créations uniques et matériaux pour donner vie à vos idées.</p>
      </div><!-- End Section Title -->
      
      <div class=\"container\">

        <div class=\"\" data-layout=\"masonry\" data-sort=\"original-order\">

          <!-- Buttons to filter products or materials -->
          <div class=\"container4\" data-aos=\"fade-up\">
            <div class=\"btn-group\">
              <button id=\"btn-produits\" class=\" btn-primary\" onclick=\"showCategory('produits')\">Produits</button>
              <button id=\"btn-materiaux\" class=\" btn-primary\" onclick=\"showCategory('materiaux')\">Matériaux</button>
            </div>
          </div>

          <!-- Product and Material Display -->
          <div class=\"container\">
            <div id=\"produits\" class=\"row gy-4 isotope-container\" data-aos=\"fade-up\" data-aos-delay=\"200\">
              <!-- Example Product 1 -->
              <div class=\"col-lg-4 col-md-6 portfolio-item \">
                <img src=\"../img/masonry-portfolio/1.jpeg\" class=\"img-fluid\" alt=\"\">
                <div class=\"portfolio-info\">
                  <h4>Tasses et sous-tasses</h4>
                  <p>Pour les amateurs de café et de thé</p>
                  <a href=\"../img/masonry-portfolio/1.jpeg\" title=\"Product 1\" class=\"glightbox preview-link\"><i class=\"bi bi-zoom-in\"></i></a>
                  <!-- <a href=\"portfolio-details.html\" title=\"More Details\" class=\"details-link\"><i class=\"bi bi-link-45deg\"></i></a> -->
                </div>
              </div>

              <!-- Example Product 2 -->
              <div class=\"col-lg-4 col-md-6 portfolio-item\">
                <img src=\"../img/masonry-portfolio/2.jpeg\" class=\"img-fluid\" alt=\"\">
                <div class=\"portfolio-info\">
                  <h4>Bagues</h4>
                  <p>L’art du fait main, à chaque doigt</p>
                  <a href=\"../img/masonry-portfolio/2.jpeg\" title=\"Product 1\" class=\"glightbox preview-link\"><i class=\"bi bi-zoom-in\"></i></a>
                  <!-- <a href=\"portfolio-details.html\" title=\"More Details\" class=\"details-link\"><i class=\"bi bi-link-45deg\"></i></a> -->
                </div>
              </div>
              
              <!-- Example Product 3 -->
              <div class=\"col-lg-4 col-md-6 portfolio-item\">
                <img src=\"../img/masonry-portfolio/3.jpeg\" class=\"img-fluid\" alt=\"\">
                <div class=\"portfolio-info\">
                  <h4>Coussins</h4>
                  <p>Confort et style réunis dans nos coussins faits main</p>
                  <a href=\"../img/masonry-portfolio/3.jpeg\" title=\"Product 1\" class=\"glightbox preview-link\"><i class=\"bi bi-zoom-in\"></i></a>
                  <!-- <a href=\"portfolio-details.html\" title=\"More Details\" class=\"details-link\"><i class=\"bi bi-link-45deg\"></i></a> -->
                </div>
              </div>
            </div>

            <div id=\"materiaux\" class=\"row gy-4 isotope-container\" data-aos=\"fade-up\" data-aos-delay=\"200\">
              ";
        // line 145
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::slice($this->env->getCharset(), (isset($context["materiauxes"]) || array_key_exists("materiauxes", $context) ? $context["materiauxes"] : (function () { throw new RuntimeError('Variable "materiauxes" does not exist.', 145, $this->source); })()), 0, 3));
        foreach ($context['_seq'] as $context["_key"] => $context["materiau"]) {
            // line 146
            yield "                  <div class=\"col-lg-4 col-md-6 portfolio-item\">
                      <div class=\"flip-card\">
                          <div class=\"flip-card-inner\">
                              <!-- Front de la carte -->
                              <div class=\"flip-card-front\">
                                  <img src=\"";
            // line 151
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("img/masonry-portfolio/" . CoreExtension::getAttribute($this->env, $this->source, $context["materiau"], "photo", [], "any", false, false, false, 151))), "html", null, true);
            yield "\" class=\"img-fluid\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["materiau"], "NomMateriel", [], "any", false, false, false, 151), "html", null, true);
            yield "\">
                                  <div class=\"portfolio-info\">
                                      <h4>";
            // line 153
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["materiau"], "NomMateriel", [], "any", false, false, false, 153), "html", null, true);
            yield "</h4>
                                      <p>";
            // line 154
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["materiau"], "PrixUnitaire", [], "any", false, false, false, 154), "html", null, true);
            yield " TND</p>
                                      <a href=\"";
            // line 155
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("img/masonry-portfolio/" . CoreExtension::getAttribute($this->env, $this->source, $context["materiau"], "photo", [], "any", false, false, false, 155))), "html", null, true);
            yield "\" title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["materiau"], "NomMateriel", [], "any", false, false, false, 155), "html", null, true);
            yield "\" class=\"glightbox preview-link\"><i class=\"bi bi-zoom-in\"></i></a>
                                      <a href=\"portfolio-details.html\" title=\"More Details\" class=\"details-link\"><i class=\"bi bi-link-45deg\"></i></a> 
                                  </div>
                              </div>

                              <!-- Back de la carte -->
                              <div class=\"flip-card-back\">
                                  <div class=\"card-details\">
                                      <h4>";
            // line 163
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["materiau"], "NomMateriel", [], "any", false, false, false, 163), "html", null, true);
            yield "</h4>
                                      <p><strong>Description :</strong> ";
            // line 164
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["materiau"], "Description", [], "any", false, false, false, 164), "html", null, true);
            yield "</p>
                                      <p><strong>Prix :</strong> ";
            // line 165
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["materiau"], "PrixUnitaire", [], "any", false, false, false, 165), "html", null, true);
            yield " TND</p>
                                      <p><strong>Catégorie :</strong> ";
            // line 166
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["materiau"], "Categorie", [], "any", false, false, false, 166), "html", null, true);
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
        // line 173
        yield "          </div>
        </div>
      </div><!-- End Portfolio Container -->
      </div>
        </div>
    </section><!-- /Portfolio Section -->
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

 <!-- Ateliers en ligne Section -->
    <section id=\"atelier\" class=\"pricing section lightt-background\">
        <!-- Section Title -->
        <div class=\"container section-title\" data-aos=\"fade-up\">
          <h2>Ateliers en ligne</h2>
          <p>Apprenez l'artisanat en ligne, à votre rythme et où que vous soyez</p>
        </div><!-- End Section Title -->
                <div class=\"container\">
                    <div class=\"row gy-4\">
                        ";
        // line 209
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["ateliers"]) || array_key_exists("ateliers", $context) ? $context["ateliers"] : (function () { throw new RuntimeError('Variable "ateliers" does not exist.', 209, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["atelierenligne"]) {
            // line 210
            yield "                            <div class=\"col-lg-4\" data-aos=\"zoom-in\" data-aos-delay=\"100\">
                                <div class=\"pricing-item\">
                                    <h3>";
            // line 212
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["atelierenligne"], "titre", [], "any", false, false, false, 212), "html", null, true);
            yield "</h3>
                                    <p><strong>Formateur :</strong> ";
            // line 213
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["atelierenligne"], "idUser", [], "any", false, false, false, 213), "nom", [], "any", false, false, false, 213), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["atelierenligne"], "idUser", [], "any", false, false, false, 213), "prenom", [], "any", false, false, false, 213), "html", null, true);
            yield "</p>
                                    <h4><sup>DT</sup>";
            // line 214
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["atelierenligne"], "prix", [], "any", false, false, false, 214), "html", null, true);
            yield "<span> / atelier</span></h4>
                                    <ul>
                                        <li><i class=\"bi bi-check\"></i> <span>";
            // line 216
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["atelierenligne"], "description", [], "any", false, false, false, 216), 0, 10), "html", null, true);
            yield "...</span></li>
                                        <li><i class=\"bi bi-check\"></i> <span>Niveau : ";
            // line 217
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["atelierenligne"], "niveauDiff", [], "any", false, false, false, 217), "html", null, true);
            yield "</span></li>
                                        <li><i class=\"bi bi-check\"></i> <span>Date du cours : ";
            // line 218
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["atelierenligne"], "datecours", [], "any", false, false, false, 218)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["atelierenligne"], "datecours", [], "any", false, false, false, 218), "Y-m-d"), "html", null, true)) : ("N/A"));
            yield "</span></li>
                                        <li><i class=\"bi bi-check\"></i> <span>Durée : ";
            // line 219
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["atelierenligne"], "duree", [], "any", false, false, false, 219), "html", null, true);
            yield " min</span></li>
                                        <li><a href=\"javascript:void(0);\" class=\"see-more\" onclick=\"openModal('";
            // line 220
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["atelierenligne"], "id", [], "any", false, false, false, 220), "html", null, true);
            yield "')\">Voir plus</a></li>
                                    </ul>
                                    <a href=\"";
            // line 222
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_inscription_atelier", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["atelierenligne"], "id", [], "any", false, false, false, 222)]), "html", null, true);
            yield "\" class=\"buy-btn\">S'inscrire</a>
                                </div>
                                
                            </div><!-- End Pricing Item -->
                            
                            <!-- Modale pour chaque atelier -->
                            <div id=\"modal";
            // line 228
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["atelierenligne"], "id", [], "any", false, false, false, 228), "html", null, true);
            yield "\" class=\"modal\">
                                <div class=\"modal-content\">
                                    <span class=\"close\" onclick=\"closeModal('";
            // line 230
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["atelierenligne"], "id", [], "any", false, false, false, 230), "html", null, true);
            yield "')\">&times;</span>
                                    <h2>";
            // line 231
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["atelierenligne"], "titre", [], "any", false, false, false, 231), "html", null, true);
            yield "</h2>
                                    <p><strong>Formateur :</strong> ";
            // line 232
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["atelierenligne"], "idUser", [], "any", false, false, false, 232), "nom", [], "any", false, false, false, 232), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["atelierenligne"], "idUser", [], "any", false, false, false, 232), "prenom", [], "any", false, false, false, 232), "html", null, true);
            yield "</p>
                                    <p><strong>Description complète :</strong> ";
            // line 233
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["atelierenligne"], "description", [], "any", false, false, false, 233), "html", null, true);
            yield "</p>
                                    <p><strong>Prix :</strong> ";
            // line 234
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["atelierenligne"], "prix", [], "any", false, false, false, 234), "html", null, true);
            yield " DT</p>
                                    <p><strong>Date de l'atelier :</strong> ";
            // line 235
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["atelierenligne"], "datecours", [], "any", false, false, false, 235)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["atelierenligne"], "datecours", [], "any", false, false, false, 235), "Y-m-d"), "html", null, true)) : ("Non précisé"));
            yield "</p>
                                    <p><strong>Durée :</strong> ";
            // line 236
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["atelierenligne"], "duree", [], "any", false, false, false, 236), "html", null, true);
            yield " min</p>
                                </div>
                            </div>
                        ";
            $context['_iterated'] = true;
        }
        // line 243
        if (!$context['_iterated']) {
            // line 240
            yield "                            <div class=\"col-lg-12\">
                                <p>Aucun atelier trouvé</p>
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['atelierenligne'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 244
        yield "                    </div>
                    <div class=\"text-center mt-4\">
                        <a href=\"";
        // line 246
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_front_atelier");
        yield "\" class=\"buy-btn\">Explorer</a>
                    </div>                
                  </div>
            
        </section>




    <!-- Contact Section -->
    <section id=\"contact\" class=\"contact section \">

      <!-- Section Title -->
      <div class=\"container section-title\" data-aos=\"fade-up\">
        <h2>Contact</h2>
        <p>Pour plus d'informations, n'hésitez pas à nous contacter ou à venir nous rendre visite</p>
      </div><!-- End Section Title -->

      <div class=\"container\" data-aos=\"fade-up\" data-aos-delay=\"100\">
      <div class=\"row gy-4\">
        
        <!-- Premier container avec les informations -->
        <div class=\"col-lg-5\">
          <div class=\"info-wrap\">
            <div class=\"info-item d-flex\" data-aos=\"fade-up\" data-aos-delay=\"200\">
              <i class=\"bi bi-geo-alt flex-shrink-0\"></i>
              <div>
                <h3>Adresse</h3>
                <p>Tunisie, La Petite Ariana</p>
              </div>
            </div><!-- End Info Item -->

            <div class=\"info-item d-flex\" data-aos=\"fade-up\" data-aos-delay=\"300\">
              <i class=\"bi bi-telephone flex-shrink-0\"></i>
              <div>
                <h3>Appelez-nous</h3>
                <p>+21654123456</p>
              </div>
            </div><!-- End Info Item -->

            <div class=\"info-item d-flex\" data-aos=\"fade-up\" data-aos-delay=\"400\">
              <i class=\"bi bi-envelope flex-shrink-0\"></i>
              <div>
                <h3>Envoyez-nous un email</h3>
                <p>DevElite2025@gmail.com</p>
              </div>
            </div><!-- End Info Item -->
          </div>
        </div>

        <!-- Deuxième container avec la carte Google Maps -->
        <div class=\"col-lg-7\">
          <div class=\"info-wrap\">
            <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2659.8402726228464!2d10.184527978216979!3d36.8992690790857!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12e2cb763f2120bb%3A0xc3e79593db50c2e8!2sLa%20petite%20Ariana%2C%20Cebalat%20Ben%20Ammar!5e0!3m2!1sfr!2stn!4v1738700537584!5m2!1sfr!2stn\" width=\"600\" height=\"270\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>          </div>
        </div>
      </div>
      </div>
    </section><!-- /Contact Section -->

</main>
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
        return "FrontOffice/HomePage/frontuser.html.twig";
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
        return array (  455 => 246,  451 => 244,  442 => 240,  440 => 243,  432 => 236,  428 => 235,  424 => 234,  420 => 233,  414 => 232,  410 => 231,  406 => 230,  401 => 228,  392 => 222,  387 => 220,  383 => 219,  379 => 218,  375 => 217,  371 => 216,  366 => 214,  360 => 213,  356 => 212,  352 => 210,  347 => 209,  309 => 173,  296 => 166,  292 => 165,  288 => 164,  284 => 163,  271 => 155,  267 => 154,  263 => 153,  256 => 151,  249 => 146,  245 => 145,  115 => 18,  100 => 5,  87 => 4,  64 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'FrontOffice/HomePage/basefrontclient.html.twig' %}
{% block title %}EDAYETNA{% endblock %}

{% block body %}

<main class=\"main\">
    
  <!-- Hero Section -->
    <section id=\"hero\" class=\"hero section dark-background\">

      <div class=\"container\">
        <div class=\"row gy-4\">
          <div class=\"col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center\" data-aos=\"zoom-out\">
            <h1>L'Artisanat à Portée de Clic </h1>
            <p>Un Savoir-Faire Ancestral au Service de l'Avenir</p>
          </div>
          <div class=\"col-lg-6 order-1 order-lg-1 hero-img\" data-aos=\"zoom-out\" data-aos-delay=\"200\">
            <img src=\"{{asset('build/front/img/hero.png')}}\" class=\"img-fluid animated\" alt=\"\">
          </div>
        </div>
      </div>

     </section>
  <!-- /Hero Section -->

    <!-- Clients Section -->
    <section id=\"clients\" class=\"clients section light-background\">

      <div class=\"container\">

        <div class=\"swiper init-swiper\">
          <script type=\"application/json\" class=\"swiper-config\">
            {
              \"loop\": true,
              \"speed\": 600,
              \"autoplay\": {
                \"delay\": 5000
              },
              \"slidesPerView\": \"auto\",
              \"pagination\": {
                \"el\": \".swiper-pagination\",
                \"type\": \"bullets\",
                \"clickable\": true
              },
              \"breakpoints\": {
                \"320\": {
                  \"slidesPerView\": 2,
                  \"spaceBetween\": 40
                },
                \"480\": {
                  \"slidesPerView\": 3,
                  \"spaceBetween\": 60
                },
                \"640\": {
                  \"slidesPerView\": 4,
                  \"spaceBetween\": 80
                },
                \"992\": {
                  \"slidesPerView\": 5,
                  \"spaceBetween\": 120
                },
                \"1200\": {
                  \"slidesPerView\": 6,
                  \"spaceBetween\": 120
                }
              }
            }
          </script>
          <div class=\"swiper-wrapper align-items-center\">
            <div class=\"swiper-slide\"><img src=\"build/front/img/clients/1.png\" class=\"img-fluid\" alt=\"\"></div>
            <div class=\"swiper-slide\"><img src=\"build/front/img/clients/2.png\" class=\"img-fluid\" alt=\"\"></div>
            <div class=\"swiper-slide\"><img src=\"build/front/img/clients/3.png\" class=\"img-fluid\" alt=\"\"></div>
            <div class=\"swiper-slide\"><img src=\"build/front/img/clients/4.png\" class=\"img-fluid\" alt=\"\"></div>
            <div class=\"swiper-slide\"><img src=\"build/front/img/clients/5.png\" class=\"img-fluid\" alt=\"\"></div>
            <div class=\"swiper-slide\"><img src=\"build/front/img/clients/6.png\" class=\"img-fluid\" alt=\"\"></div>
            <div class=\"swiper-slide\"><img src=\"build/front/img/clients/7.png\" class=\"img-fluid\" alt=\"\"></div>
            <div class=\"swiper-slide\"><img src=\"build/front/img/clients/8.jpg\" class=\"img-fluid\" alt=\"\"></div>
          </div>
        </div>

      </div>

    </section><!-- /Clients Section -->

    <!-- Boutique Section -->
    <!-- Boutique Section -->
    <section id=\"portfolio\" class=\"portfolio section\">

      <!-- Section Title -->
      <div class=\"container section-title\" data-aos=\"fade-up\">
        <h2>Boutique</h2>
        <p>Laissez parler votre créativité : créations uniques et matériaux pour donner vie à vos idées.</p>
      </div><!-- End Section Title -->
      
      <div class=\"container\">

        <div class=\"\" data-layout=\"masonry\" data-sort=\"original-order\">

          <!-- Buttons to filter products or materials -->
          <div class=\"container4\" data-aos=\"fade-up\">
            <div class=\"btn-group\">
              <button id=\"btn-produits\" class=\" btn-primary\" onclick=\"showCategory('produits')\">Produits</button>
              <button id=\"btn-materiaux\" class=\" btn-primary\" onclick=\"showCategory('materiaux')\">Matériaux</button>
            </div>
          </div>

          <!-- Product and Material Display -->
          <div class=\"container\">
            <div id=\"produits\" class=\"row gy-4 isotope-container\" data-aos=\"fade-up\" data-aos-delay=\"200\">
              <!-- Example Product 1 -->
              <div class=\"col-lg-4 col-md-6 portfolio-item \">
                <img src=\"../img/masonry-portfolio/1.jpeg\" class=\"img-fluid\" alt=\"\">
                <div class=\"portfolio-info\">
                  <h4>Tasses et sous-tasses</h4>
                  <p>Pour les amateurs de café et de thé</p>
                  <a href=\"../img/masonry-portfolio/1.jpeg\" title=\"Product 1\" class=\"glightbox preview-link\"><i class=\"bi bi-zoom-in\"></i></a>
                  <!-- <a href=\"portfolio-details.html\" title=\"More Details\" class=\"details-link\"><i class=\"bi bi-link-45deg\"></i></a> -->
                </div>
              </div>

              <!-- Example Product 2 -->
              <div class=\"col-lg-4 col-md-6 portfolio-item\">
                <img src=\"../img/masonry-portfolio/2.jpeg\" class=\"img-fluid\" alt=\"\">
                <div class=\"portfolio-info\">
                  <h4>Bagues</h4>
                  <p>L’art du fait main, à chaque doigt</p>
                  <a href=\"../img/masonry-portfolio/2.jpeg\" title=\"Product 1\" class=\"glightbox preview-link\"><i class=\"bi bi-zoom-in\"></i></a>
                  <!-- <a href=\"portfolio-details.html\" title=\"More Details\" class=\"details-link\"><i class=\"bi bi-link-45deg\"></i></a> -->
                </div>
              </div>
              
              <!-- Example Product 3 -->
              <div class=\"col-lg-4 col-md-6 portfolio-item\">
                <img src=\"../img/masonry-portfolio/3.jpeg\" class=\"img-fluid\" alt=\"\">
                <div class=\"portfolio-info\">
                  <h4>Coussins</h4>
                  <p>Confort et style réunis dans nos coussins faits main</p>
                  <a href=\"../img/masonry-portfolio/3.jpeg\" title=\"Product 1\" class=\"glightbox preview-link\"><i class=\"bi bi-zoom-in\"></i></a>
                  <!-- <a href=\"portfolio-details.html\" title=\"More Details\" class=\"details-link\"><i class=\"bi bi-link-45deg\"></i></a> -->
                </div>
              </div>
            </div>

            <div id=\"materiaux\" class=\"row gy-4 isotope-container\" data-aos=\"fade-up\" data-aos-delay=\"200\">
              {% for materiau in materiauxes |slice(0, 3) %}
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
        </div>
      </div><!-- End Portfolio Container -->
      </div>
        </div>
    </section><!-- /Portfolio Section -->
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

 <!-- Ateliers en ligne Section -->
    <section id=\"atelier\" class=\"pricing section lightt-background\">
        <!-- Section Title -->
        <div class=\"container section-title\" data-aos=\"fade-up\">
          <h2>Ateliers en ligne</h2>
          <p>Apprenez l'artisanat en ligne, à votre rythme et où que vous soyez</p>
        </div><!-- End Section Title -->
                <div class=\"container\">
                    <div class=\"row gy-4\">
                        {% for atelierenligne in ateliers %}
                            <div class=\"col-lg-4\" data-aos=\"zoom-in\" data-aos-delay=\"100\">
                                <div class=\"pricing-item\">
                                    <h3>{{ atelierenligne.titre }}</h3>
                                    <p><strong>Formateur :</strong> {{  atelierenligne.idUser.nom }} {{ atelierenligne.idUser.prenom}}</p>
                                    <h4><sup>DT</sup>{{ atelierenligne.prix }}<span> / atelier</span></h4>
                                    <ul>
                                        <li><i class=\"bi bi-check\"></i> <span>{{ atelierenligne.description|slice(0, 10) }}...</span></li>
                                        <li><i class=\"bi bi-check\"></i> <span>Niveau : {{ atelierenligne.niveauDiff }}</span></li>
                                        <li><i class=\"bi bi-check\"></i> <span>Date du cours : {{ atelierenligne.datecours ? atelierenligne.datecours|date('Y-m-d') : 'N/A' }}</span></li>
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
                    <div class=\"text-center mt-4\">
                        <a href=\"{{ path('app_front_atelier') }}\" class=\"buy-btn\">Explorer</a>
                    </div>                
                  </div>
            
        </section>




    <!-- Contact Section -->
    <section id=\"contact\" class=\"contact section \">

      <!-- Section Title -->
      <div class=\"container section-title\" data-aos=\"fade-up\">
        <h2>Contact</h2>
        <p>Pour plus d'informations, n'hésitez pas à nous contacter ou à venir nous rendre visite</p>
      </div><!-- End Section Title -->

      <div class=\"container\" data-aos=\"fade-up\" data-aos-delay=\"100\">
      <div class=\"row gy-4\">
        
        <!-- Premier container avec les informations -->
        <div class=\"col-lg-5\">
          <div class=\"info-wrap\">
            <div class=\"info-item d-flex\" data-aos=\"fade-up\" data-aos-delay=\"200\">
              <i class=\"bi bi-geo-alt flex-shrink-0\"></i>
              <div>
                <h3>Adresse</h3>
                <p>Tunisie, La Petite Ariana</p>
              </div>
            </div><!-- End Info Item -->

            <div class=\"info-item d-flex\" data-aos=\"fade-up\" data-aos-delay=\"300\">
              <i class=\"bi bi-telephone flex-shrink-0\"></i>
              <div>
                <h3>Appelez-nous</h3>
                <p>+21654123456</p>
              </div>
            </div><!-- End Info Item -->

            <div class=\"info-item d-flex\" data-aos=\"fade-up\" data-aos-delay=\"400\">
              <i class=\"bi bi-envelope flex-shrink-0\"></i>
              <div>
                <h3>Envoyez-nous un email</h3>
                <p>DevElite2025@gmail.com</p>
              </div>
            </div><!-- End Info Item -->
          </div>
        </div>

        <!-- Deuxième container avec la carte Google Maps -->
        <div class=\"col-lg-7\">
          <div class=\"info-wrap\">
            <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2659.8402726228464!2d10.184527978216979!3d36.8992690790857!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12e2cb763f2120bb%3A0xc3e79593db50c2e8!2sLa%20petite%20Ariana%2C%20Cebalat%20Ben%20Ammar!5e0!3m2!1sfr!2stn!4v1738700537584!5m2!1sfr!2stn\" width=\"600\" height=\"270\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>          </div>
        </div>
      </div>
      </div>
    </section><!-- /Contact Section -->

</main>
{% endblock %}
", "FrontOffice/HomePage/frontuser.html.twig", "C:\\Users\\Lenovo\\WebProject\\templates\\FrontOffice\\HomePage\\frontuser.html.twig");
    }
}
