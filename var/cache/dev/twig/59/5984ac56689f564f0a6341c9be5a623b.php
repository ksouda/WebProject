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

/* admin/atelier/atelieradmin.html.twig */
class __TwigTemplate_f29c9847bd70c364d242eb05eafbdd54 extends Template
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
            'css' => [$this, 'block_css'],
            'body' => [$this, 'block_body'],
            'js' => [$this, 'block_js'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/atelier/atelieradmin.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/atelier/atelieradmin.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <!-- Required meta tags -->
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <title>";
        // line 7
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>
    <!-- plugins:css -->
    ";
        // line 9
        yield from $this->unwrap()->yieldBlock('css', $context, $blocks);
        // line 25
        yield "    <!-- endinject -->
    <link rel=\"shortcut icon\" href=\"assets/images/favicon.png\" />
  </head>
";
        // line 28
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 339
        yield "
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

        yield "Back Office EDAYETNA";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 9
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_css(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        // line 10
        yield "    
      <link href=\"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/assets/vendors/feather/feather.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
      <link href=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/assets/vendors/css/vendor.bundle.base.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
      <link href=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/assets/vendors/css/vendor.bundle.base.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
      <link href=\"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/assets/vendors/font-awesome/css/font-awesome.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
      <link href=\"";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/assets/vendors/mdi/css/materialdesignicons.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
      <!-- endinject -->
      <!-- Plugin css for this page -->
      <!-- <link rel=\"stylesheet\" href=\"assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css\"> -->
      <link rel=\"stylesheet\" href=\"";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/assets/vendors/datatables.net-bs5/dataTables.bootstrap5.css"), "html", null, true);
        yield "\">
      <link rel=\"stylesheet\" href=\"";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/assets/vendors/ti-icons/css/themify-icons.css"), "html", null, true);
        yield "\">
      <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/assets/js/select.dataTables.min.css"), "html", null, true);
        yield "\">
      <!-- End plugin css for this page -->
      <!-- inject:css -->
  <link rel=\"stylesheet\" href=\"";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/assets/cssatelier/style.css"), "html", null, true);
        yield "\">     ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 28
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

        // line 29
        yield "
  <div class=\"container-scroller\">
      
      <!-- partial:partials/_navbar.html -->
      <nav class=\"navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row\">
  <div class=\"text-center navbar-brand-wrapper d-flex align-items-center justify-content-start\">
    <a class=\"navbar-brand brand-logo me-5\" href=\"index.html\"><img src=\"";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/assets/images/logo 2.svg"), "html", null, true);
        yield "\" class=\"me-2\" alt=\"logo\" /></a>
  </div>
  <div class=\"navbar-menu-wrapper d-flex align-items-center justify-content-end\">
    <button class=\"navbar-toggler navbar-toggler align-self-center\" type=\"button\" data-toggle=\"minimize\">
      <span class=\"icon-menu\"></span>
    </button>
 
    <ul class=\"navbar-nav navbar-nav-right\">
      
      <li class=\"nav-item nav-profile dropdown\">
        <a class=\"nav-link dropdown-toggle\" href=\"#\" data-bs-toggle=\"dropdown\" id=\"profileDropdown\">
          <img src=\"";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("build/assets/images/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 46, $this->source); })()), "user", [], "any", false, false, false, 46), "photo", [], "any", false, false, false, 46))), "html", null, true);
        yield "\" alt=\"profile\" /><span class=\"username\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 46, $this->source); })()), "user", [], "any", false, false, false, 46), "prenom", [], "any", false, false, false, 46), "html", null, true);
        yield ".";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 46, $this->source); })()), "user", [], "any", false, false, false, 46), "nom", [], "any", false, false, false, 46), "html", null, true);
        yield "</span>
        </a>
        <div class=\"dropdown-menu dropdown-menu-right navbar-dropdown\" aria-labelledby=\"profileDropdown\">
          <a class=\"dropdown-item\" >
            <i class=\"ti-settings text-primary\"></i> Profile </a>
          <a class=\"dropdown-item\" href=\"";
        // line 51
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\">
            <i class=\"ti-power-off text-primary\"></i> Déconnexion </a>
        </div>
      </li>
      
    </ul>
    <button class=\"navbar-toggler navbar-toggler-right d-lg-none align-self-center\" type=\"button\" data-toggle=\"offcanvas\">
      <span class=\"icon-menu\"></span>
    </button>
  </div>
</nav>
      <!-- partial -->
      <div class=\"container-fluid page-body-wrapper\">
        <!-- partial:partials/_sidebar.html -->
       <nav class=\"sidebar sidebar-offcanvas\" id=\"sidebar\">
  <ul class=\"nav\">
     <li class=\"nav-item\">
      <a class=\"nav-link\" href=\"";
        // line 68
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin");
        yield "\">
        <i class=\"icon-grid menu-icon\"></i>
        <span class=\"menu-title\">Dashboard</span>
      </a>
    </li>
    <li class=\"nav-item\">
      <a class=\"nav-link\" data-bs-toggle=\"collapse\" href=\"#ui-basic\" aria-expanded=\"false\" aria-controls=\"ui-basic\">
        <i class=\"mdi mdi-account-multiple\"></i>
        <span class=\"menu-title\">Utilisateurs</span>
        <i class=\"menu-arrow\"></i>
      </a>
      <div class=\"collapse\" id=\"ui-basic\">
        <ul class=\"nav flex-column sub-menu\">
          <li class=\"nav-item\"> <a class=\"nav-link\" href=\"";
        // line 81
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_users");
        yield "\">Table</a></li>
        </ul>
      </div>
    </li>
    
    <li class=\"nav-item\">
      <a class=\"nav-link\" data-bs-toggle=\"collapse\" href=\"#form-elements\" aria-expanded=\"false\" aria-controls=\"ui-basic\">
        <i class=\"mdi mdi-cube\"></i>
        <span class=\"menu-title\">Produits</span>
        <i class=\"menu-arrow\"></i>
      </a>
      <div class=\"collapse\" id=\"form-elements\">
        <ul class=\"nav flex-column sub-menu\">
          <li class=\"nav-item\"> <a class=\"nav-link\" href=\"#\">Table</a></li>
        </ul>
      </div>
    </li>
   
    <li class=\"nav-item\">
      <a class=\"nav-link\" data-bs-toggle=\"collapse\" href=\"#charts\" aria-expanded=\"false\" aria-controls=\"charts\">
        <i class=\"mdi mdi-bowl\"></i>
        <span class=\"menu-title\">Ateliers en ligne</span>
        <i class=\"menu-arrow\"></i>
      </a>
      <div class=\"collapse\" id=\"charts\">
        <ul class=\"nav flex-column sub-menu\">
          <li class=\"nav-item\"> <a class=\"nav-link\" href=\"";
        // line 107
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_atelierenligneadmin");
        yield "\">Table</a></li>
        </ul>
      </div>
    </li>
    <li class=\"nav-item\">
      <a class=\"nav-link\" data-bs-toggle=\"collapse\" href=\"#tables\" aria-expanded=\"false\" aria-controls=\"tables\">
        <i class=\"mdi mdi-screwdriver\"></i>
        <span class=\"menu-title\">Matériaux</span>
        <i class=\"menu-arrow\"></i>
      </a>
      <div class=\"collapse\" id=\"tables\">
        <ul class=\"nav flex-column sub-menu\">
          <li class=\"nav-item\"> <a class=\"nav-link\" href=\"";
        // line 119
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_materiaux_index");
        yield "\">Table Materiaux</a></li>
          <li class=\"nav-item\"> <a class=\"nav-link\" href=\"";
        // line 120
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_fournisseur_index");
        yield "\">Table Fournisseur</a></li>
        </ul>
      </div>
    </li>
    <li class=\"nav-item\">
      <a class=\"nav-link\" data-bs-toggle=\"collapse\" href=\"#icons\" aria-expanded=\"false\" aria-controls=\"icons\">
        <i class=\"mdi mdi-cart\"></i>
        <span class=\"menu-title\">Commandes</span>
        <i class=\"menu-arrow\"></i>
      </a>
      <div class=\"collapse\" id=\"icons\">
        <ul class=\"nav flex-column sub-menu\">
          <li class=\"nav-item\"> <a class=\"nav-link\" href=\"#\">Table</a></li>
        </ul>
      </div>
    </li>
    <li class=\"nav-item\">
      <a class=\"nav-link\" data-bs-toggle=\"collapse\" href=\"#auth\" aria-expanded=\"false\" aria-controls=\"auth\">
        <i class=\"mdi mdi-comment\"></i>
        <span class=\"menu-title\">Reclamations</span>
        <i class=\"menu-arrow\"></i>
      </a>
      <div class=\"collapse\" id=\"auth\">
        <ul class=\"nav flex-column sub-menu\">
          <li class=\"nav-item\"> <a class=\"nav-link\" href=\"";
        // line 144
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_liste_admin");
        yield "\"> Table </a></li>
        </ul>
      </div>
    </li>
   
    
  </ul>
</nav>
        <!-- partial -->
        <div class=\"main-panel\">
          <div class=\"content-wrapper\">
             <div class=\"title-gestion\"> Gestion des Ateliers En Ligne </div>
            <div class=\"table-container\">
        <div class=\"table-title\">
            
            <div class=\"search-box\">
                <i class=\"fa fa-search\"></i>
                <input type=\"text\" placeholder=\"Rechercher...\">
            </div>    
        </div>
        <table>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Titre</th>
                    <th>Categorie</th>
                    <th>Description</th>
                    <th>Niveau_diff</th>
                    <th>Prix</th>
                    <th>Date_cours</th>
                    <th>Durée</th>
                    <th>Lien</th>
                    <th>Inscriptions</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            ";
        // line 181
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["atelierenlignes"]) || array_key_exists("atelierenlignes", $context) ? $context["atelierenlignes"] : (function () { throw new RuntimeError('Variable "atelierenlignes" does not exist.', 181, $this->source); })()));
        $context['_iterated'] = false;
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
        foreach ($context['_seq'] as $context["_key"] => $context["atelierenligne"]) {
            // line 182
            yield "    <tr>
        <td>";
            // line 183
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["atelierenligne"], "id", [], "any", false, false, false, 183), "html", null, true);
            yield "</td>
        <td>";
            // line 184
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["atelierenligne"], "titre", [], "any", false, false, false, 184), "html", null, true);
            yield "</td>
        <td>";
            // line 185
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["atelierenligne"], "categorie", [], "any", false, false, false, 185), "html", null, true);
            yield "</td>
        <td>
            <span class=\"short-description\">";
            // line 187
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["atelierenligne"], "description", [], "any", false, false, false, 187), 0, 10), "html", null, true);
            yield "...</span>
            <span class=\"full-description\" style=\"display: none;\">";
            // line 188
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["atelierenligne"], "description", [], "any", false, false, false, 188), "html", null, true);
            yield "</span>
        </td>
        <td>";
            // line 190
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["atelierenligne"], "niveauDiff", [], "any", false, false, false, 190), "html", null, true);
            yield "</td>
        <td>";
            // line 191
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["atelierenligne"], "prix", [], "any", false, false, false, 191), "html", null, true);
            yield "</td>
        <td>";
            // line 192
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["atelierenligne"], "datecours", [], "any", false, false, false, 192)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["atelierenligne"], "datecours", [], "any", false, false, false, 192), "Y-m-d"), "html", null, true)) : (""));
            yield "</td>
        <td>";
            // line 193
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["atelierenligne"], "duree", [], "any", false, false, false, 193), "html", null, true);
            yield "</td>
        <td>
            <span class=\"short-link\">";
            // line 195
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["atelierenligne"], "lien", [], "any", false, false, false, 195), 0, 10), "html", null, true);
            yield "...</span>
            <span class=\"full-link\" style=\"display: none;\">";
            // line 196
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["atelierenligne"], "lien", [], "any", false, false, false, 196), "html", null, true);
            yield "</span>
        </td>
        <td>
            <ul>
              ";
            // line 200
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["atelierenligne"], "inscription", [], "any", false, false, false, 200));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["inscription"]) {
                // line 201
                yield "                  <li>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["inscription"], "IdUser", [], "any", false, false, false, 201), "nom", [], "any", false, false, false, 201), "html", null, true);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["inscription"], "IdUser", [], "any", false, false, false, 201), "prenom", [], "any", false, false, false, 201), "html", null, true);
                yield "</li>
              ";
                $context['_iterated'] = true;
            }
            // line 204
            if (!$context['_iterated']) {
                // line 203
                yield "                  <li>Aucun inscrit</li>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['inscription'], $context['_parent'], $context['_iterated']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 205
            yield "            </ul>
        </td>
        <td class=\"action-icons\">
            ";
            // line 208
            yield Twig\Extension\CoreExtension::include($this->env, $context, "admin/atelier/deleteadmin.html.twig");
            yield "
            <i class=\"fa fa-info-circle\" 
              style=\"color: #17a2b8; font-size: 1.2rem; cursor: pointer;\" 
              onclick=\"toggleDetailsAdmin(this)\"
              data-titre=\"";
            // line 212
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["atelierenligne"], "titre", [], "any", false, false, false, 212), "html", null, true);
            yield "\"
              data-category=\"";
            // line 213
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["atelierenligne"], "categorie", [], "any", false, false, false, 213), "html", null, true);
            yield "\"
              data-formateur=\"";
            // line 214
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["atelierenligne"], "idUser", [], "any", false, false, false, 214), "nom", [], "any", false, false, false, 214), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["atelierenligne"], "idUser", [], "any", false, false, false, 214), "prenom", [], "any", false, false, false, 214), "html", null, true);
            yield "\"
              data-date=\"";
            // line 215
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["atelierenligne"], "datecours", [], "any", false, false, false, 215), "Y-m-d"), "html", null, true);
            yield "\"
              data-prix=\"";
            // line 216
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["atelierenligne"], "prix", [], "any", false, false, false, 216), "html", null, true);
            yield "\"
              data-lien=\"";
            // line 217
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["atelierenligne"], "lien", [], "any", false, false, false, 217), "html", null, true);
            yield "\"
              data-duree=\"";
            // line 218
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["atelierenligne"], "duree", [], "any", false, false, false, 218), "html", null, true);
            yield "\"
              data-inscrits=\"";
            // line 219
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::join(Twig\Extension\CoreExtension::map($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["atelierenligne"], "inscription", [], "any", false, false, false, 219), function ($__i__) use ($context, $macros) { $context["i"] = $__i__; return ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 219, $this->source); })()), "idUser", [], "any", false, false, false, 219), "nom", [], "any", false, false, false, 219) . " ") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 219, $this->source); })()), "idUser", [], "any", false, false, false, 219), "prenom", [], "any", false, false, false, 219)); }), ", "), "html", null, true);
            yield "\"> <!-- Nom et Prénom des inscrits -->
 
            </i>
        </td>
    </tr>
    <div id=\"infoModal\" class=\"modal\">
      <div class=\"modal-content\">
        <span class=\"close\" onclick=\"toggleDetailsAdmin()\">&times;</span>
        <h2>Informations de l'atelier</h2>
        <p><strong>Titre:</strong> <span id=\"modalTitre\"></span></p>
        <p><strong>Catégorie:</strong> <span id=\"modalCategory\"></span></p>
        <p><strong>Formateur:</strong> <span id=\"modalFormateur\"></span></p>
        <p><strong>Date:</strong> <span id=\"modalDate\"></span></p>
        <p><strong>Prix:</strong> <span id=\"modalPrix\"></span></p>
        <p><strong>Lien:</strong> <span id=\"modalLien\"></span></p>
        <p><strong>Durée:</strong> <span id=\"modalDuree\"></span></p>
        <h3>Liste des inscrits:</h3>
        <ul id=\"modalInscrits\"></ul>
      </div>
    </div>
";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        // line 243
        if (!$context['_iterated']) {
            // line 240
            yield "    <tr>
        <td colspan=\"10\">no records found</td>
    </tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['atelierenligne'], $context['_parent'], $context['_iterated'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 244
        yield "            </tbody>
        </table>
        <div class=\"pagination\">
            <a href=\"#\">&laquo;</a>
            <a href=\"#\">1</a>
            <a href=\"#\">2</a>
            <a href=\"#\">3</a>
            <a href=\"#\">&raquo;</a>
        </div>
    </div>
    <!-- partial -->
        <div class=\"main-panel\">
          <div class=\"content-wrapper\">
                 <!-- content of your gestion -->

          </div>
          <!-- content-wrapper ends -->
         
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    
    <!-- plugins:js -->
    ";
        // line 269
        yield from $this->unwrap()->yieldBlock('js', $context, $blocks);
        // line 336
        yield "    <!-- <script src=\"assets/js/Chart.roundedBarCharts.js\"></script> -->
    <!-- End custom js for this page-->
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 269
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_js(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        // line 270
        yield "
<script>
function toggleDetailsAdmin(element) {
  var modal = document.getElementById(\"infoModal\");
  
  // Extraire les données depuis les attributs data-
  var titre = element.getAttribute(\"data-titre\");
  var category = element.getAttribute(\"data-category\");
  var formateur = element.getAttribute(\"data-formateur\");
  var date = element.getAttribute(\"data-date\");
  var prix = element.getAttribute(\"data-prix\");
  var lien = element.getAttribute(\"data-lien\");
  var duree = element.getAttribute(\"data-duree\");
  var inscrits = element.getAttribute(\"data-inscrits\"); // Liste des inscrits
  
  // Remplir les informations dans le modal
  document.getElementById(\"modalTitre\").innerText = titre;
  document.getElementById(\"modalCategory\").innerText = category;
  document.getElementById(\"modalFormateur\").innerText = formateur;
  document.getElementById(\"modalDate\").innerText = date;
  document.getElementById(\"modalPrix\").innerText = prix;
  document.getElementById(\"modalLien\").innerText = lien;
  document.getElementById(\"modalDuree\").innerText = duree;

  // Afficher la liste des inscrits
  var inscritsList = document.getElementById(\"modalInscrits\");
  inscritsList.innerHTML = \"\"; // Effacer la liste précédente
  var inscritsArray = inscrits.split(\", \"); // Convertir la chaîne en tableau
  inscritsArray.forEach(function(inscrit) {
    var li = document.createElement(\"li\");
    li.textContent = inscrit;
    inscritsList.appendChild(li);
  });

  // Afficher le modal
  modal.style.display = \"block\";
}

// Fermer le modal lorsque l'on clique sur la croix
document.querySelector(\".close\").onclick = function() {
  var modal = document.getElementById(\"infoModal\");
  modal.style.display = \"none\";
}



    </script>
      <script src=\"";
        // line 317
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/assets/vendors/js/vendor.bundle.base.js"), "html", null, true);
        yield "\"></script>
      <!-- endinject -->
      <!-- Plugin js for this page -->
      <script src=\"";
        // line 320
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/assets/vendors/chart.js/chart.umd.js"), "html", null, true);
        yield "\"></script>
      <script src=\"";
        // line 321
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/assets/vendors/datatables.net/jquery.dataTables.js"), "html", null, true);
        yield "\"></script>
      <!-- <script src=\"assets/vendors/datatables.net-bs4/dataTables.bootstrap4.js\"></script> -->
      <script src=\"";
        // line 323
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/assets/vendors/datatables.net-bs5/dataTables.bootstrap5.js"), "html", null, true);
        yield "\"></script>
      <script src=\"";
        // line 324
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/assets/js/dataTables.select.min.js"), "html", null, true);
        yield "\"></script>
      <!-- End plugin js for this page -->
      <!-- inject:js -->
      <script src=\"";
        // line 327
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/assets/js/off-canvas.js"), "html", null, true);
        yield "\"></script>
      <script src=\"";
        // line 328
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/assets/js/template.js"), "html", null, true);
        yield "\"></script>
      <script src=\"";
        // line 329
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/assets/js/settings.js"), "html", null, true);
        yield "\"></script>
      <script src=\"";
        // line 330
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/assets/js/todolist.js"), "html", null, true);
        yield "\"></script>
      <!-- endinject -->
      <!-- Custom js for this page-->
      <script src=\"";
        // line 333
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/assets/js/jquery.cookie.js"), "html", null, true);
        yield "\" type=\"text/javascript\"></script>
      <script src=\"";
        // line 334
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/assets/js/dashboard.js"), "html", null, true);
        yield "\"></script>
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
        return "admin/atelier/atelieradmin.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  703 => 334,  699 => 333,  693 => 330,  689 => 329,  685 => 328,  681 => 327,  675 => 324,  671 => 323,  666 => 321,  662 => 320,  656 => 317,  607 => 270,  594 => 269,  581 => 336,  579 => 269,  552 => 244,  543 => 240,  541 => 243,  508 => 219,  504 => 218,  500 => 217,  496 => 216,  492 => 215,  486 => 214,  482 => 213,  478 => 212,  471 => 208,  466 => 205,  459 => 203,  457 => 204,  448 => 201,  443 => 200,  436 => 196,  432 => 195,  427 => 193,  423 => 192,  419 => 191,  415 => 190,  410 => 188,  406 => 187,  401 => 185,  397 => 184,  393 => 183,  390 => 182,  372 => 181,  332 => 144,  305 => 120,  301 => 119,  286 => 107,  257 => 81,  241 => 68,  221 => 51,  209 => 46,  195 => 35,  187 => 29,  174 => 28,  162 => 24,  156 => 21,  152 => 20,  148 => 19,  141 => 15,  137 => 14,  133 => 13,  129 => 12,  125 => 11,  122 => 10,  109 => 9,  86 => 7,  74 => 339,  72 => 28,  67 => 25,  65 => 9,  60 => 7,  52 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <!-- Required meta tags -->
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <title>{% block title %}Back Office EDAYETNA{% endblock %}</title>
    <!-- plugins:css -->
    {% block css %}
    
      <link href=\"{{ asset('build/assets/vendors/feather/feather.css') }}\" rel=\"stylesheet\">
      <link href=\"{{ asset('build/assets/vendors/css/vendor.bundle.base.css') }}\" rel=\"stylesheet\">
      <link href=\"{{ asset('build/assets/vendors/css/vendor.bundle.base.css') }}\" rel=\"stylesheet\">
      <link href=\"{{ asset('build/assets/vendors/font-awesome/css/font-awesome.min.css') }}\" rel=\"stylesheet\">
      <link href=\"{{ asset('build/assets/vendors/mdi/css/materialdesignicons.min.css') }}\" rel=\"stylesheet\">
      <!-- endinject -->
      <!-- Plugin css for this page -->
      <!-- <link rel=\"stylesheet\" href=\"assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css\"> -->
      <link rel=\"stylesheet\" href=\"{{ asset('build/assets/vendors/datatables.net-bs5/dataTables.bootstrap5.css') }}\">
      <link rel=\"stylesheet\" href=\"{{ asset('build/assets/vendors/ti-icons/css/themify-icons.css') }}\">
      <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('build/assets/js/select.dataTables.min.css') }}\">
      <!-- End plugin css for this page -->
      <!-- inject:css -->
  <link rel=\"stylesheet\" href=\"{{ asset('build/assets/cssatelier/style.css') }}\">     {% endblock %}
    <!-- endinject -->
    <link rel=\"shortcut icon\" href=\"assets/images/favicon.png\" />
  </head>
{% block body %}

  <div class=\"container-scroller\">
      
      <!-- partial:partials/_navbar.html -->
      <nav class=\"navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row\">
  <div class=\"text-center navbar-brand-wrapper d-flex align-items-center justify-content-start\">
    <a class=\"navbar-brand brand-logo me-5\" href=\"index.html\"><img src=\"{{ asset('build/assets/images/logo 2.svg') }}\" class=\"me-2\" alt=\"logo\" /></a>
  </div>
  <div class=\"navbar-menu-wrapper d-flex align-items-center justify-content-end\">
    <button class=\"navbar-toggler navbar-toggler align-self-center\" type=\"button\" data-toggle=\"minimize\">
      <span class=\"icon-menu\"></span>
    </button>
 
    <ul class=\"navbar-nav navbar-nav-right\">
      
      <li class=\"nav-item nav-profile dropdown\">
        <a class=\"nav-link dropdown-toggle\" href=\"#\" data-bs-toggle=\"dropdown\" id=\"profileDropdown\">
          <img src=\"{{ asset('build/assets/images/' ~ app.user.photo) }}\" alt=\"profile\" /><span class=\"username\">{{ app.user.prenom }}.{{ app.user.nom }}</span>
        </a>
        <div class=\"dropdown-menu dropdown-menu-right navbar-dropdown\" aria-labelledby=\"profileDropdown\">
          <a class=\"dropdown-item\" >
            <i class=\"ti-settings text-primary\"></i> Profile </a>
          <a class=\"dropdown-item\" href=\"{{ path('app_logout') }}\">
            <i class=\"ti-power-off text-primary\"></i> Déconnexion </a>
        </div>
      </li>
      
    </ul>
    <button class=\"navbar-toggler navbar-toggler-right d-lg-none align-self-center\" type=\"button\" data-toggle=\"offcanvas\">
      <span class=\"icon-menu\"></span>
    </button>
  </div>
</nav>
      <!-- partial -->
      <div class=\"container-fluid page-body-wrapper\">
        <!-- partial:partials/_sidebar.html -->
       <nav class=\"sidebar sidebar-offcanvas\" id=\"sidebar\">
  <ul class=\"nav\">
     <li class=\"nav-item\">
      <a class=\"nav-link\" href=\"{{ path('app_admin') }}\">
        <i class=\"icon-grid menu-icon\"></i>
        <span class=\"menu-title\">Dashboard</span>
      </a>
    </li>
    <li class=\"nav-item\">
      <a class=\"nav-link\" data-bs-toggle=\"collapse\" href=\"#ui-basic\" aria-expanded=\"false\" aria-controls=\"ui-basic\">
        <i class=\"mdi mdi-account-multiple\"></i>
        <span class=\"menu-title\">Utilisateurs</span>
        <i class=\"menu-arrow\"></i>
      </a>
      <div class=\"collapse\" id=\"ui-basic\">
        <ul class=\"nav flex-column sub-menu\">
          <li class=\"nav-item\"> <a class=\"nav-link\" href=\"{{ path('app_users') }}\">Table</a></li>
        </ul>
      </div>
    </li>
    
    <li class=\"nav-item\">
      <a class=\"nav-link\" data-bs-toggle=\"collapse\" href=\"#form-elements\" aria-expanded=\"false\" aria-controls=\"ui-basic\">
        <i class=\"mdi mdi-cube\"></i>
        <span class=\"menu-title\">Produits</span>
        <i class=\"menu-arrow\"></i>
      </a>
      <div class=\"collapse\" id=\"form-elements\">
        <ul class=\"nav flex-column sub-menu\">
          <li class=\"nav-item\"> <a class=\"nav-link\" href=\"#\">Table</a></li>
        </ul>
      </div>
    </li>
   
    <li class=\"nav-item\">
      <a class=\"nav-link\" data-bs-toggle=\"collapse\" href=\"#charts\" aria-expanded=\"false\" aria-controls=\"charts\">
        <i class=\"mdi mdi-bowl\"></i>
        <span class=\"menu-title\">Ateliers en ligne</span>
        <i class=\"menu-arrow\"></i>
      </a>
      <div class=\"collapse\" id=\"charts\">
        <ul class=\"nav flex-column sub-menu\">
          <li class=\"nav-item\"> <a class=\"nav-link\" href=\"{{ path('app_atelierenligneadmin') }}\">Table</a></li>
        </ul>
      </div>
    </li>
    <li class=\"nav-item\">
      <a class=\"nav-link\" data-bs-toggle=\"collapse\" href=\"#tables\" aria-expanded=\"false\" aria-controls=\"tables\">
        <i class=\"mdi mdi-screwdriver\"></i>
        <span class=\"menu-title\">Matériaux</span>
        <i class=\"menu-arrow\"></i>
      </a>
      <div class=\"collapse\" id=\"tables\">
        <ul class=\"nav flex-column sub-menu\">
          <li class=\"nav-item\"> <a class=\"nav-link\" href=\"{{ path('app_materiaux_index') }}\">Table Materiaux</a></li>
          <li class=\"nav-item\"> <a class=\"nav-link\" href=\"{{ path('app_fournisseur_index') }}\">Table Fournisseur</a></li>
        </ul>
      </div>
    </li>
    <li class=\"nav-item\">
      <a class=\"nav-link\" data-bs-toggle=\"collapse\" href=\"#icons\" aria-expanded=\"false\" aria-controls=\"icons\">
        <i class=\"mdi mdi-cart\"></i>
        <span class=\"menu-title\">Commandes</span>
        <i class=\"menu-arrow\"></i>
      </a>
      <div class=\"collapse\" id=\"icons\">
        <ul class=\"nav flex-column sub-menu\">
          <li class=\"nav-item\"> <a class=\"nav-link\" href=\"#\">Table</a></li>
        </ul>
      </div>
    </li>
    <li class=\"nav-item\">
      <a class=\"nav-link\" data-bs-toggle=\"collapse\" href=\"#auth\" aria-expanded=\"false\" aria-controls=\"auth\">
        <i class=\"mdi mdi-comment\"></i>
        <span class=\"menu-title\">Reclamations</span>
        <i class=\"menu-arrow\"></i>
      </a>
      <div class=\"collapse\" id=\"auth\">
        <ul class=\"nav flex-column sub-menu\">
          <li class=\"nav-item\"> <a class=\"nav-link\" href=\"{{ path('app_reclamation_liste_admin') }}\"> Table </a></li>
        </ul>
      </div>
    </li>
   
    
  </ul>
</nav>
        <!-- partial -->
        <div class=\"main-panel\">
          <div class=\"content-wrapper\">
             <div class=\"title-gestion\"> Gestion des Ateliers En Ligne </div>
            <div class=\"table-container\">
        <div class=\"table-title\">
            
            <div class=\"search-box\">
                <i class=\"fa fa-search\"></i>
                <input type=\"text\" placeholder=\"Rechercher...\">
            </div>    
        </div>
        <table>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Titre</th>
                    <th>Categorie</th>
                    <th>Description</th>
                    <th>Niveau_diff</th>
                    <th>Prix</th>
                    <th>Date_cours</th>
                    <th>Durée</th>
                    <th>Lien</th>
                    <th>Inscriptions</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            {% for atelierenligne in atelierenlignes %}
    <tr>
        <td>{{ atelierenligne.id }}</td>
        <td>{{ atelierenligne.titre }}</td>
        <td>{{ atelierenligne.categorie }}</td>
        <td>
            <span class=\"short-description\">{{ atelierenligne.description|slice(0, 10) }}...</span>
            <span class=\"full-description\" style=\"display: none;\">{{ atelierenligne.description }}</span>
        </td>
        <td>{{ atelierenligne.niveauDiff }}</td>
        <td>{{ atelierenligne.prix }}</td>
        <td>{{ atelierenligne.datecours ? atelierenligne.datecours|date('Y-m-d') : '' }}</td>
        <td>{{ atelierenligne.duree }}</td>
        <td>
            <span class=\"short-link\">{{ atelierenligne.lien|slice(0, 10) }}...</span>
            <span class=\"full-link\" style=\"display: none;\">{{ atelierenligne.lien }}</span>
        </td>
        <td>
            <ul>
              {% for inscription in atelierenligne.inscription %}
                  <li>{{ inscription.IdUser.nom }} {{ inscription.IdUser.prenom }}</li>
              {% else %}
                  <li>Aucun inscrit</li>
              {% endfor %}
            </ul>
        </td>
        <td class=\"action-icons\">
            {{ include('admin/atelier/deleteadmin.html.twig') }}
            <i class=\"fa fa-info-circle\" 
              style=\"color: #17a2b8; font-size: 1.2rem; cursor: pointer;\" 
              onclick=\"toggleDetailsAdmin(this)\"
              data-titre=\"{{ atelierenligne.titre }}\"
              data-category=\"{{ atelierenligne.categorie }}\"
              data-formateur=\"{{ atelierenligne.idUser.nom }} {{ atelierenligne.idUser.prenom }}\"
              data-date=\"{{ atelierenligne.datecours|date('Y-m-d') }}\"
              data-prix=\"{{ atelierenligne.prix }}\"
              data-lien=\"{{ atelierenligne.lien }}\"
              data-duree=\"{{ atelierenligne.duree }}\"
              data-inscrits=\"{{ atelierenligne.inscription | map(i => i.idUser.nom ~ ' ' ~ i.idUser.prenom) | join(', ') }}\"> <!-- Nom et Prénom des inscrits -->
 
            </i>
        </td>
    </tr>
    <div id=\"infoModal\" class=\"modal\">
      <div class=\"modal-content\">
        <span class=\"close\" onclick=\"toggleDetailsAdmin()\">&times;</span>
        <h2>Informations de l'atelier</h2>
        <p><strong>Titre:</strong> <span id=\"modalTitre\"></span></p>
        <p><strong>Catégorie:</strong> <span id=\"modalCategory\"></span></p>
        <p><strong>Formateur:</strong> <span id=\"modalFormateur\"></span></p>
        <p><strong>Date:</strong> <span id=\"modalDate\"></span></p>
        <p><strong>Prix:</strong> <span id=\"modalPrix\"></span></p>
        <p><strong>Lien:</strong> <span id=\"modalLien\"></span></p>
        <p><strong>Durée:</strong> <span id=\"modalDuree\"></span></p>
        <h3>Liste des inscrits:</h3>
        <ul id=\"modalInscrits\"></ul>
      </div>
    </div>
{% else %}
    <tr>
        <td colspan=\"10\">no records found</td>
    </tr>
{% endfor %}
            </tbody>
        </table>
        <div class=\"pagination\">
            <a href=\"#\">&laquo;</a>
            <a href=\"#\">1</a>
            <a href=\"#\">2</a>
            <a href=\"#\">3</a>
            <a href=\"#\">&raquo;</a>
        </div>
    </div>
    <!-- partial -->
        <div class=\"main-panel\">
          <div class=\"content-wrapper\">
                 <!-- content of your gestion -->

          </div>
          <!-- content-wrapper ends -->
         
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    
    <!-- plugins:js -->
    {% block js %}

<script>
function toggleDetailsAdmin(element) {
  var modal = document.getElementById(\"infoModal\");
  
  // Extraire les données depuis les attributs data-
  var titre = element.getAttribute(\"data-titre\");
  var category = element.getAttribute(\"data-category\");
  var formateur = element.getAttribute(\"data-formateur\");
  var date = element.getAttribute(\"data-date\");
  var prix = element.getAttribute(\"data-prix\");
  var lien = element.getAttribute(\"data-lien\");
  var duree = element.getAttribute(\"data-duree\");
  var inscrits = element.getAttribute(\"data-inscrits\"); // Liste des inscrits
  
  // Remplir les informations dans le modal
  document.getElementById(\"modalTitre\").innerText = titre;
  document.getElementById(\"modalCategory\").innerText = category;
  document.getElementById(\"modalFormateur\").innerText = formateur;
  document.getElementById(\"modalDate\").innerText = date;
  document.getElementById(\"modalPrix\").innerText = prix;
  document.getElementById(\"modalLien\").innerText = lien;
  document.getElementById(\"modalDuree\").innerText = duree;

  // Afficher la liste des inscrits
  var inscritsList = document.getElementById(\"modalInscrits\");
  inscritsList.innerHTML = \"\"; // Effacer la liste précédente
  var inscritsArray = inscrits.split(\", \"); // Convertir la chaîne en tableau
  inscritsArray.forEach(function(inscrit) {
    var li = document.createElement(\"li\");
    li.textContent = inscrit;
    inscritsList.appendChild(li);
  });

  // Afficher le modal
  modal.style.display = \"block\";
}

// Fermer le modal lorsque l'on clique sur la croix
document.querySelector(\".close\").onclick = function() {
  var modal = document.getElementById(\"infoModal\");
  modal.style.display = \"none\";
}



    </script>
      <script src=\"{{ asset('build/assets/vendors/js/vendor.bundle.base.js') }}\"></script>
      <!-- endinject -->
      <!-- Plugin js for this page -->
      <script src=\"{{ asset('build/assets/vendors/chart.js/chart.umd.js') }}\"></script>
      <script src=\"{{ asset('build/assets/vendors/datatables.net/jquery.dataTables.js') }}\"></script>
      <!-- <script src=\"assets/vendors/datatables.net-bs4/dataTables.bootstrap4.js\"></script> -->
      <script src=\"{{ asset('build/assets/vendors/datatables.net-bs5/dataTables.bootstrap5.js') }}\"></script>
      <script src=\"{{ asset('build/assets/js/dataTables.select.min.js') }}\"></script>
      <!-- End plugin js for this page -->
      <!-- inject:js -->
      <script src=\"{{ asset('build/assets/js/off-canvas.js') }}\"></script>
      <script src=\"{{ asset('build/assets/js/template.js') }}\"></script>
      <script src=\"{{ asset('build/assets/js/settings.js') }}\"></script>
      <script src=\"{{ asset('build/assets/js/todolist.js') }}\"></script>
      <!-- endinject -->
      <!-- Custom js for this page-->
      <script src=\"{{ asset('build/assets/js/jquery.cookie.js') }}\" type=\"text/javascript\"></script>
      <script src=\"{{ asset('build/assets/js/dashboard.js') }}\"></script>
    {% endblock %}
    <!-- <script src=\"assets/js/Chart.roundedBarCharts.js\"></script> -->
    <!-- End custom js for this page-->
{% endblock %}

", "admin/atelier/atelieradmin.html.twig", "C:\\Users\\Lenovo\\WebProject\\templates\\admin\\atelier\\atelieradmin.html.twig");
    }
}
