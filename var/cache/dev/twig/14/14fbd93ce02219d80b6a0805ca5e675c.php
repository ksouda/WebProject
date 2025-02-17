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

/* user/index.html.twig */
class __TwigTemplate_76c6e9bde187b8d9453db222de42d793 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/index.html.twig"));

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
        // line 122
        yield "    <!-- endinject -->
    <link rel=\"shortcut icon\" href=\"";
        // line 123
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/assets/images/logo 1.svg"), "html", null, true);
        yield "\" />
  </head>
  <body>";
        // line 125
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 678
        yield " </body>
</html>";
        
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
        yield " <style>/* Modal background with blur effect */
.modall-overlay {
    display: none; /* Ensures modal starts hidden */
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.3); /* Dark semi-transparent background */
    backdrop-filter: blur(8px); /* Blurred background effect */
    display: flex;
    justify-content: center;
    align-items: center;
    z-index: 1000;
}

/* Modal content box (White background) */
.modall-content {
     background: rgba(255, 255, 255, 0.6); 
    padding: 25px;
    width:500px;

    border-radius: 20px; /* Smooth rounded corners */
    box-shadow: 0 6px 15px rgba(0, 0, 0, 0.2); /* Soft shadow for better visibility */
    text-align: center;
    position: relative;
    transition: transform 0.5s ease-in-out; /* Smooth animation */
}

/* Close button */

.modal-buttons {
  color:White;
    margin-top: 20px;
    display: flex;
    justify-content: center;
    gap: 15px;
}
/* Close button */
.closee-btn {
    position: absolute;
    top: 10px;
    right: 15px;
    font-size: 22px;
    cursor: pointer;
    color: #191e3a;
}


.closee-btn:hover {
    color:#547587; /* Red on hover */
}
/* Ensure the rest of the page is blurred when modal is open */
body.modall-open {
    overflow: hidden;
}
";
        // line 67
        yield ".refresh-table {
    color: #547587; /* Default color */
    font-size: 18px; /* Default size */
    transition: color 0.3s ease, transform 0.2s ease; /* Smooth transition */
}

.refresh-table:hover {
    color:  #191e3a; /* Change color on hover */
    font-size: 22px; /* Increase size on hover */
    transform: scale(1.2); /* Slight zoom effect */
    cursor: pointer;
}
.form-group1 input:focus,
.form-group1 select:focus {
    border-color: #547587;
    outline: none;
    box-shadow: 0 0 8px rgba(84, 117, 135, 0.57);
}
.form-group1 {
    margin-bottom: 10px;
}
.form-group1 label {
  
    font-weight: bold;
    color:#191e3a;
    margin-bottom: 5px;
}

.form-group1 input,
.form-group1 select {
    width:50%;
    padding: 5px;
    border: 1px solid  #547587;
    border-radius: 8px;
    font-size: 14px;
    transition: all 0.3s ease-in-out;
}


 </style>
      <link href=\"";
        // line 107
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/assets/vendors/feather/feather.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
      <link href=\"";
        // line 108
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/assets/vendors/css/vendor.bundle.base.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
      <link href=\"";
        // line 109
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/assets/vendors/css/vendor.bundle.base.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
      <link href=\"";
        // line 110
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/assets/vendors/font-awesome/css/font-awesome.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
      <link href=\"";
        // line 111
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/assets/vendors/mdi/css/materialdesignicons.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
      <!-- endinject -->
      <!-- Plugin css for this page -->
      <!-- <link rel=\"stylesheet\" href=\"assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css\"> -->
      <link rel=\"stylesheet\" href=\"";
        // line 115
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/assets/vendors/datatables.net-bs5/dataTables.bootstrap5.css"), "html", null, true);
        yield "\">
      <link rel=\"stylesheet\" href=\"";
        // line 116
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/assets/vendors/ti-icons/css/themify-icons.css"), "html", null, true);
        yield "\">
      <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 117
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/assets/js/select.dataTables.min.css"), "html", null, true);
        yield "\">
      <!-- End plugin css for this page -->
      <!-- inject:css -->
      <link rel=\"stylesheet\" href=\"";
        // line 120
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/assets/css/style.css"), "html", null, true);
        yield "\">
     ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 125
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

        // line 126
        yield "    <div class=\"container-scroller\">
      
      <!-- partial:partials/_navbar.html -->
      <nav class=\"navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row\">
  <div class=\"text-center navbar-brand-wrapper d-flex align-items-center justify-content-start\">
    <a class=\"navbar-brand brand-logo me-5\" href=\"index.html\"><img src=\"";
        // line 131
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
        // line 142
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("build/assets/images/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 142, $this->source); })()), "user", [], "any", false, false, false, 142), "photo", [], "any", false, false, false, 142))), "html", null, true);
        yield "\" alt=\"profile\" /><span class=\"username\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 142, $this->source); })()), "user", [], "any", false, false, false, 142), "prenom", [], "any", false, false, false, 142), "html", null, true);
        yield ".";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 142, $this->source); })()), "user", [], "any", false, false, false, 142), "nom", [], "any", false, false, false, 142), "html", null, true);
        yield "</span>
        </a>
        <div class=\"dropdown-menu dropdown-menu-right navbar-dropdown\" aria-labelledby=\"profileDropdown\">
          <a class=\"dropdown-item\" >
            <i class=\"ti-settings text-primary\"></i> Profile </a>
          <a class=\"dropdown-item\" href=\"";
        // line 147
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
        // line 164
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
        // line 177
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
        // line 203
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
        // line 215
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_materiaux_index");
        yield "\">Table Materiaux</a></li>
          <li class=\"nav-item\"> <a class=\"nav-link\" href=\"";
        // line 216
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
        // line 240
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
          ";
        // line 252
        yield "             <div class=\"title-gestion\"> Gestion des Utilisateurs </div>
            <div class=\"table-container\">
        <div class=\"table-title\">
     
            
            <div class=\"search-box\">
                <i class=\"fa fa-search\"></i>
                <input type=\"text\" id=\"search-input\" placeholder=\"Rechercher...\">
               
            </div>

 <i class=\"fa fa-refresh refresh-table\" title=\"Réinitialiser\"></i>
        </div>
      
        <table>
            <thead>
                <tr>
                    <th></th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Email</th>
          
                    <th>Fonctions</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 278
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 278, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 279
            yield "                    <tr>
                        <td>
                     
                            ";
            // line 282
            if (CoreExtension::getAttribute($this->env, $this->source, $context["user"], "photo", [], "any", false, false, false, 282)) {
                // line 283
                yield "                                <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("build/assets/images/" . CoreExtension::getAttribute($this->env, $this->source, $context["user"], "photo", [], "any", false, false, false, 283))), "html", null, true);
                yield "\" 
                                    
                                    width=\"50\" height=\"50\" 
                                    style=\"border-radius: 50%; object-fit: cover;\">
                      
                            ";
            } else {
                // line 289
                yield "                                <span>Aucune photo</span>
                            ";
            }
            // line 291
            yield "                        
                        </td>
                        <td>";
            // line 293
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "nom", [], "any", false, false, false, 293), "html", null, true);
            yield "</td>
                        <td>";
            // line 294
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "prenom", [], "any", false, false, false, 294), "html", null, true);
            yield "</td>
                        <td>";
            // line 295
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 295), "html", null, true);
            yield "</td>
  


                        <td class=\"action-icons\">     
                           <a href=\"#\" class=\"text-warning open-edit-modal\" 
                              data-id=\"";
            // line 301
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 301), "html", null, true);
            yield "\" 
                              data-nom=\"";
            // line 302
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "nom", [], "any", false, false, false, 302), "html", null, true);
            yield "\" 
                              data-prenom=\"";
            // line 303
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "prenom", [], "any", false, false, false, 303), "html", null, true);
            yield "\" 
                              data-email=\"";
            // line 304
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 304), "html", null, true);
            yield "\" 
                              data-adresse=\"";
            // line 305
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "adresse", [], "any", false, false, false, 305), "html", null, true);
            yield "\" 
                              data-numtel=\"";
            // line 306
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "numTel", [], "any", false, false, false, 306), "html", null, true);
            yield "\" 
                              data-photo=\"";
            // line 307
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "photo", [], "any", false, false, false, 307), "html", null, true);
            yield "\"
                              data-role=\"";
            // line 308
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 308)), "html", null, true);
            yield "\">
                                <i class=\"fa fa-edit\"></i>
                            </a>
                            <a href=\"#\" class=\"text-danger delete-user\" 
                              data-user-id=\"";
            // line 312
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 312), "html", null, true);
            yield "\" 
                              data-user-name=\"";
            // line 313
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "nom", [], "any", false, false, false, 313), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "prenom", [], "any", false, false, false, 313), "html", null, true);
            yield "\">
                                <i class=\"fa fa-trash\"></i>
                            </a>

                            <a href=\"#\" class=\"text-info open-modall\" 
                              data-nom=\"";
            // line 318
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "nom", [], "any", false, false, false, 318), "html", null, true);
            yield "\" 
                              data-prenom=\"";
            // line 319
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "prenom", [], "any", false, false, false, 319), "html", null, true);
            yield "\" 
                              data-email=\"";
            // line 320
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 320), "html", null, true);
            yield "\" 
                              data-photo=\"";
            // line 321
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("build/assets/images/" . CoreExtension::getAttribute($this->env, $this->source, $context["user"], "photo", [], "any", false, false, false, 321))), "html", null, true);
            yield "\"
                              data-adresse=\"";
            // line 322
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "adresse", [], "any", false, false, false, 322), "html", null, true);
            yield "\"
                              data-numtel=\"";
            // line 323
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "numTel", [], "any", false, false, false, 323), "html", null, true);
            yield "\"
                              data-role=\"";
            // line 324
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 324)), "html", null, true);
            yield "\"> ";
            // line 325
            yield "                                <i class=\"fa fa-info-circle\"></i>
                            </a>
                        </td>
                    </tr>
                ";
            $context['_iterated'] = true;
        }
        // line 333
        if (!$context['_iterated']) {
            // line 330
            yield "                    <tr>
                        <td colspan=\"6\" class=\"text-center\">Aucun utilisateur trouvé</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['user'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 334
        yield "            </tbody>
        </table>

        ";
        // line 338
        yield "        <div class=\"pagination\">
            ";
        // line 339
        yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, (isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 339, $this->source); })()));
        yield "
        </div>



    </div>
  <!-- Modal for User Info -->
<div id=\"userInfoModall\" class=\"modall-overlay\" style=\"display: none;\">
    <div class=\"modall-content\">
        <span class=\"closee-btn\">&times;</span>
        <h3>Informations de l'utilisateur</h3>
        <div id=\"user-details\">
            <!-- User details will be dynamically inserted here -->
        </div>
    </div>
</div>
<!-- Delete Confirmation Modal -->
<div id=\"deleteConfirmationModal\" class=\"modall-overlay\" style=\"display: none;\">
    <div class=\"modall-content\">
       
        <h3>Confirmer la suppression</h3>
        <p id=\"delete-message\">Voulez-vous vraiment supprimer cet utilisateur ?</p>
        <div class=\"modal-buttons\">
            <button id=\"confirmDelete\" class=\"btn btn-danger\">Supprimer</button>
            <button class=\"close-btn btn btn-secondary\">Annuler</button>
        </div>
    </div>
</div>

";
        // line 369
        yield "          </div>
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
       
          <!-- partial -->
        </div>


        <!-- main-panel ends -->
      </div>
      
<!-- Modal pour l'édition des utilisateurs -->
<div id=\"editUserModal\" class=\"modall-overlay\" style=\"display: none;\">
    <div class=\"modall-content\">
        <span class=\"closee-btn\">&times;</span>
        <h3>Modifier l'utilisateur</h3>
       <form id=\"editUserForm\" method=\"POST\">
    <input type=\"hidden\" id=\"edit-user-id\" name=\"id\">
    
    <div class=\"form-group1\">
        <label>Nom:</label>
        <input type=\"text\" id=\"edit-nom\" name=\"nom\" required>
    </div>
    
    <div class=\"form-group1\">
        <label>Prénom:</label>
        <input type=\"text\" id=\"edit-prenom\" name=\"prenom\" required>
    </div>

    <div class=\"form-group1\">
        <label>Email:</label>
        <input type=\"email\" id=\"edit-email\" name=\"email\" required>
    </div>

    <div class=\"form-group1\">
        <label>Adresse:</label>
        <input type=\"text\" id=\"edit-adresse\" name=\"adresse\">
    </div>

    <div class=\"form-group1\">
        <label>Téléphone:</label>
        <input type=\"text\" id=\"edit-numTel\" name=\"numTel\">
    </div>
      <div class=\"form-group1\">
        <label>photo:</label>
        <input type=\"text\" id=\"edit-photo\" name=\"photo\">
    </div>


    <div class=\"form-group1\">
        <label>Rôle:</label>
        <select id=\"edit-role\" name=\"role\">
            <option value=\"ROLE_CLIENT\">Client</option>
            <option value=\"ROLE_ADMIN\">Administrateur</option>
            <option value=\"ROLE_ARTISAN\">Artisan</option>
        </select>
    </div>

    <hr>
    <h4>Changer le mot de passe</h4>

    <div class=\"form-group1\">
        <label>Mot de passe actuel:</label>
        <input type=\"password\" id=\"current-password\" name=\"currentPassword\">
    </div>

    <div class=\"form-group1\">
        <label>Nouveau mot de passe:</label>
        <input type=\"password\" id=\"new-password\" name=\"newPassword\">
    </div>

    <div class=\"modal-buttons1\">
        <button type=\"submit\" class=\"btn btn-success\">Enregistrer</button>
    </div>
</form>



    </div>
</div>


      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    ";
        // line 455
        yield from $this->unwrap()->yieldBlock('js', $context, $blocks);
        // line 676
        yield "    <!-- <script src=\"assets/js/Chart.roundedBarCharts.js\"></script> -->
    <!-- End custom js for this page-->
 ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 455
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

        // line 456
        yield "      <script>
      document.addEventListener(\"DOMContentLoaded\", function () {
    const editModal = document.getElementById(\"editUserModal\");
    const closeEditModal = editModal.querySelector(\".closee-btn\");
    const editForm = document.getElementById(\"editUserForm\");

    // Ouvrir la modale avec les infos de l'utilisateur
    document.querySelectorAll(\".open-edit-modal\").forEach(button => {
        button.addEventListener(\"click\", function(event) {
            event.preventDefault();

            const userId = this.getAttribute(\"data-id\");
            document.getElementById(\"edit-user-id\").value = userId;
            document.getElementById(\"edit-nom\").value = this.getAttribute(\"data-nom\");
            document.getElementById(\"edit-prenom\").value = this.getAttribute(\"data-prenom\");
            document.getElementById(\"edit-email\").value = this.getAttribute(\"data-email\");
            document.getElementById(\"edit-adresse\").value = this.getAttribute(\"data-adresse\");
            document.getElementById(\"edit-numTel\").value = this.getAttribute(\"data-numtel\");
            document.getElementById(\"edit-photo\").value = this.getAttribute(\"data-photo\");

            // Réinitialiser les champs de mot de passe
            document.getElementById(\"current-password\").value = \"\";
            document.getElementById(\"new-password\").value = \"\";

            editModal.style.display = \"flex\";
            document.body.classList.add(\"modall-open\");
        });
    });

    // Fermeture de la modale
    closeEditModal.addEventListener(\"click\", function () {
        editModal.style.display = \"none\";
        document.body.classList.remove(\"modall-open\");
    });

    // Envoi du formulaire avec AJAX
    editForm.addEventListener(\"submit\", function(event) {
        event.preventDefault(); // Empêche le rechargement de la page

        const userId = document.getElementById(\"edit-user-id\").value;
        const formData = new FormData(editForm);

        fetch(`/edituser/\${userId}`, {
            method: \"POST\",
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                alert(\"Utilisateur mis à jour avec succès !\");
                location.reload(); // Recharger la page après modification
            } else {
                alert(\"Erreur : \" + data.message);
            }
        })
        .catch(error => console.error(\"Erreur:\", error));
    });
});


  </script>

      <script>
document.addEventListener(\"DOMContentLoaded\", function() {
    const modal = document.getElementById(\"userInfoModall\");
    const closeModal = document.querySelector(\".closee-btn\");
    const userDetails = document.getElementById(\"user-details\");

    // Handle click on \"Info\" buttons
    document.querySelectorAll(\".open-modall\").forEach(button => {
        button.addEventListener(\"click\", function(event) {
            event.preventDefault();

            const nom = this.getAttribute(\"data-nom\");
            const prenom = this.getAttribute(\"data-prenom\");
            const email = this.getAttribute(\"data-email\");
            const photo = this.getAttribute(\"data-photo\");
            const adresse = this.getAttribute(\"data-adresse\");
            const numTel = this.getAttribute(\"data-numtel\");
            const role = this.getAttribute(\"data-role\");

            // Format role
            let roleFormatted = \"\";
            if (role.includes(\"ROLE_ADMIN\")) roleFormatted = \"Admin\";
            else if (role.includes(\"ROLE_ARTISAN\")) roleFormatted = \"Artisan\";
            else if (role.includes(\"ROLE_CLIENT\")) roleFormatted = \"Client\";
            else roleFormatted = \"Utilisateur\";

            // Populate modal content
            userDetails.innerHTML = `
                <img src=\"\${photo}\" alt=\"Photo de \${prenom}\" style=\"width:80px; height:80px; border-radius:50%; object-fit:cover;\">
                <p><strong>Nom:</strong> \${nom}</p>
                <p><strong>Prénom:</strong> \${prenom}</p>
                <p><strong>Email:</strong> \${email}</p>
                <p><strong>Adresse:</strong> \${adresse}</p>
                <p><strong>Téléphone:</strong> \${numTel}</p>
                <p><strong>Rôle:</strong> \${roleFormatted}</p>
            `;

            // Show modal
            modal.style.display = \"flex\";
            document.body.classList.add(\"modall-open\");
        });
    });

    // Close modal when clicking the close button
    closeModal.addEventListener(\"click\", function() {
        modal.style.display = \"none\";
        document.body.classList.remove(\"modall-open\");
    });

    // Close modal when clicking outside the content
    window.addEventListener(\"click\", function(event) {
        if (event.target === modal) {
            modal.style.display = \"none\";
            document.body.classList.remove(\"modall-open\");
        }
    });
});
</script>
<script>
document.addEventListener(\"DOMContentLoaded\", function () {
    const searchInput = document.getElementById(\"search-input\");
    const refreshButton = document.querySelector(\".refresh-table\");
    const tableRows = document.querySelectorAll(\"tbody tr\"); // Get all table rows

    // Function to filter table rows based on search input
    function filterTable() {
        const searchText = searchInput.value.toLowerCase();

        tableRows.forEach(row => {
            const rowData = row.textContent.toLowerCase();
            if (rowData.includes(searchText)) {
                row.style.display = \"\";
            } else {
                row.style.display = \"none\";
            }
        });
    }

    // Event listener for search input
    searchInput.addEventListener(\"keyup\", filterTable);

    // Event listener for refresh button
    refreshButton.addEventListener(\"click\", function () {
        searchInput.value = \"\"; // Clear search input
        tableRows.forEach(row => row.style.display = \"\"); // Show all rows
    });
});
</script>
<script>
document.addEventListener(\"DOMContentLoaded\", function () {
    const deleteModal = document.getElementById(\"deleteConfirmationModal\");
    const closeModalButtons = document.querySelectorAll(\".close-btn\");
    const confirmDeleteButton = document.getElementById(\"confirmDelete\");
    let userIdToDelete = null;

    // Handle click on delete buttons
    document.querySelectorAll(\".delete-user\").forEach(button => {
        button.addEventListener(\"click\", function (event) {
            event.preventDefault();
            
            userIdToDelete = this.getAttribute(\"data-user-id\");
            const userName = this.getAttribute(\"data-user-name\");

            // Update modal message
            document.getElementById(\"delete-message\").textContent = 
                `Voulez-vous vraiment supprimer l'utilisateur \${userName} ?`;

            // Show modal
            deleteModal.style.display = \"flex\";
            document.body.classList.add(\"modall-open\");
        });
    });

    // Confirm deletion and redirect
    confirmDeleteButton.addEventListener(\"click\", function () {
        if (userIdToDelete) {
            window.location.href = `/deleteuser/\${userIdToDelete}`;
        }
    });

    // Close modal when clicking cancel or close button
    closeModalButtons.forEach(button => {
        button.addEventListener(\"click\", function () {
            deleteModal.style.display = \"none\";
            document.body.classList.remove(\"modall-open\");
        });
    });

    // Close modal when clicking outside the content
    window.addEventListener(\"click\", function (event) {
        if (event.target === deleteModal) {
            deleteModal.style.display = \"none\";
            document.body.classList.remove(\"modall-open\");
        }
    });
});
</script>


      <script src=\"";
        // line 657
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/assets/vendors/js/vendor.bundle.base.js"), "html", null, true);
        yield "\"></script>
      <!-- endinject -->
      <!-- Plugin js for this page -->
      <script src=\"";
        // line 660
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/assets/vendors/chart.js/chart.umd.js"), "html", null, true);
        yield "\"></script>
      <script src=\"";
        // line 661
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/assets/vendors/datatables.net/jquery.dataTables.js"), "html", null, true);
        yield "\"></script>
      <!-- <script src=\"assets/vendors/datatables.net-bs4/dataTables.bootstrap4.js\"></script> -->
      <script src=\"";
        // line 663
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/assets/vendors/datatables.net-bs5/dataTables.bootstrap5.js"), "html", null, true);
        yield "\"></script>
      <script src=\"";
        // line 664
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/assets/js/dataTables.select.min.js"), "html", null, true);
        yield "\"></script>
      <!-- End plugin js for this page -->
      <!-- inject:js -->
      <script src=\"";
        // line 667
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/assets/js/off-canvas.js"), "html", null, true);
        yield "\"></script>
      <script src=\"";
        // line 668
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/assets/js/template.js"), "html", null, true);
        yield "\"></script>
      <script src=\"";
        // line 669
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/assets/js/settings.js"), "html", null, true);
        yield "\"></script>
      <script src=\"";
        // line 670
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/assets/js/todolist.js"), "html", null, true);
        yield "\"></script>
      <!-- endinject -->
      <!-- Custom js for this page-->
      <script src=\"";
        // line 673
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/assets/js/jquery.cookie.js"), "html", null, true);
        yield "\" type=\"text/javascript\"></script>
      <script src=\"";
        // line 674
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
        return "user/index.html.twig";
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
        return array (  1022 => 674,  1018 => 673,  1012 => 670,  1008 => 669,  1004 => 668,  1000 => 667,  994 => 664,  990 => 663,  985 => 661,  981 => 660,  975 => 657,  772 => 456,  759 => 455,  746 => 676,  744 => 455,  656 => 369,  624 => 339,  621 => 338,  616 => 334,  607 => 330,  605 => 333,  597 => 325,  594 => 324,  590 => 323,  586 => 322,  582 => 321,  578 => 320,  574 => 319,  570 => 318,  560 => 313,  556 => 312,  549 => 308,  545 => 307,  541 => 306,  537 => 305,  533 => 304,  529 => 303,  525 => 302,  521 => 301,  512 => 295,  508 => 294,  504 => 293,  500 => 291,  496 => 289,  486 => 283,  484 => 282,  479 => 279,  474 => 278,  446 => 252,  432 => 240,  405 => 216,  401 => 215,  386 => 203,  357 => 177,  341 => 164,  321 => 147,  309 => 142,  295 => 131,  288 => 126,  275 => 125,  262 => 120,  256 => 117,  252 => 116,  248 => 115,  241 => 111,  237 => 110,  233 => 109,  229 => 108,  225 => 107,  183 => 67,  125 => 10,  112 => 9,  89 => 7,  77 => 678,  75 => 125,  70 => 123,  67 => 122,  65 => 9,  60 => 7,  52 => 1,);
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
 <style>/* Modal background with blur effect */
.modall-overlay {
    display: none; /* Ensures modal starts hidden */
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.3); /* Dark semi-transparent background */
    backdrop-filter: blur(8px); /* Blurred background effect */
    display: flex;
    justify-content: center;
    align-items: center;
    z-index: 1000;
}

/* Modal content box (White background) */
.modall-content {
     background: rgba(255, 255, 255, 0.6); 
    padding: 25px;
    width:500px;

    border-radius: 20px; /* Smooth rounded corners */
    box-shadow: 0 6px 15px rgba(0, 0, 0, 0.2); /* Soft shadow for better visibility */
    text-align: center;
    position: relative;
    transition: transform 0.5s ease-in-out; /* Smooth animation */
}

/* Close button */

.modal-buttons {
  color:White;
    margin-top: 20px;
    display: flex;
    justify-content: center;
    gap: 15px;
}
/* Close button */
.closee-btn {
    position: absolute;
    top: 10px;
    right: 15px;
    font-size: 22px;
    cursor: pointer;
    color: #191e3a;
}


.closee-btn:hover {
    color:#547587; /* Red on hover */
}
/* Ensure the rest of the page is blurred when modal is open */
body.modall-open {
    overflow: hidden;
}
{#  #}
.refresh-table {
    color: #547587; /* Default color */
    font-size: 18px; /* Default size */
    transition: color 0.3s ease, transform 0.2s ease; /* Smooth transition */
}

.refresh-table:hover {
    color:  #191e3a; /* Change color on hover */
    font-size: 22px; /* Increase size on hover */
    transform: scale(1.2); /* Slight zoom effect */
    cursor: pointer;
}
.form-group1 input:focus,
.form-group1 select:focus {
    border-color: #547587;
    outline: none;
    box-shadow: 0 0 8px rgba(84, 117, 135, 0.57);
}
.form-group1 {
    margin-bottom: 10px;
}
.form-group1 label {
  
    font-weight: bold;
    color:#191e3a;
    margin-bottom: 5px;
}

.form-group1 input,
.form-group1 select {
    width:50%;
    padding: 5px;
    border: 1px solid  #547587;
    border-radius: 8px;
    font-size: 14px;
    transition: all 0.3s ease-in-out;
}


 </style>
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
      <link rel=\"stylesheet\" href=\"{{ asset('build/assets/css/style.css') }}\">
     {% endblock %}
    <!-- endinject -->
    <link rel=\"shortcut icon\" href=\"{{ asset('build/assets/images/logo 1.svg') }}\" />
  </head>
  <body>{% block body %}
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
          {# votre continue #}
             <div class=\"title-gestion\"> Gestion des Utilisateurs </div>
            <div class=\"table-container\">
        <div class=\"table-title\">
     
            
            <div class=\"search-box\">
                <i class=\"fa fa-search\"></i>
                <input type=\"text\" id=\"search-input\" placeholder=\"Rechercher...\">
               
            </div>

 <i class=\"fa fa-refresh refresh-table\" title=\"Réinitialiser\"></i>
        </div>
      
        <table>
            <thead>
                <tr>
                    <th></th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Email</th>
          
                    <th>Fonctions</th>
                </tr>
            </thead>
            <tbody>
                {% for user in users %}
                    <tr>
                        <td>
                     
                            {% if user.photo %}
                                <img src=\"{{ asset('build/assets/images/' ~ user.photo) }}\" 
                                    
                                    width=\"50\" height=\"50\" 
                                    style=\"border-radius: 50%; object-fit: cover;\">
                      
                            {% else %}
                                <span>Aucune photo</span>
                            {% endif %}
                        
                        </td>
                        <td>{{ user.nom }}</td>
                        <td>{{ user.prenom }}</td>
                        <td>{{ user.email }}</td>
  


                        <td class=\"action-icons\">     
                           <a href=\"#\" class=\"text-warning open-edit-modal\" 
                              data-id=\"{{ user.id }}\" 
                              data-nom=\"{{ user.nom }}\" 
                              data-prenom=\"{{ user.prenom }}\" 
                              data-email=\"{{ user.email }}\" 
                              data-adresse=\"{{ user.adresse }}\" 
                              data-numtel=\"{{ user.numTel }}\" 
                              data-photo=\"{{ user.photo }}\"
                              data-role=\"{{ user.roles|first }}\">
                                <i class=\"fa fa-edit\"></i>
                            </a>
                            <a href=\"#\" class=\"text-danger delete-user\" 
                              data-user-id=\"{{ user.id }}\" 
                              data-user-name=\"{{ user.nom }} {{ user.prenom }}\">
                                <i class=\"fa fa-trash\"></i>
                            </a>

                            <a href=\"#\" class=\"text-info open-modall\" 
                              data-nom=\"{{ user.nom }}\" 
                              data-prenom=\"{{ user.prenom }}\" 
                              data-email=\"{{ user.email }}\" 
                              data-photo=\"{{ asset('build/assets/images/' ~ user.photo) }}\"
                              data-adresse=\"{{ user.adresse }}\"
                              data-numtel=\"{{ user.numTel }}\"
                              data-role=\"{{ user.roles|first }}\"> {# Assuming roles is an array #}
                                <i class=\"fa fa-info-circle\"></i>
                            </a>
                        </td>
                    </tr>
                {% else %}
                    <tr>
                        <td colspan=\"6\" class=\"text-center\">Aucun utilisateur trouvé</td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>

        {# Pagination #}
        <div class=\"pagination\">
            {{ knp_pagination_render(users) }}
        </div>



    </div>
  <!-- Modal for User Info -->
<div id=\"userInfoModall\" class=\"modall-overlay\" style=\"display: none;\">
    <div class=\"modall-content\">
        <span class=\"closee-btn\">&times;</span>
        <h3>Informations de l'utilisateur</h3>
        <div id=\"user-details\">
            <!-- User details will be dynamically inserted here -->
        </div>
    </div>
</div>
<!-- Delete Confirmation Modal -->
<div id=\"deleteConfirmationModal\" class=\"modall-overlay\" style=\"display: none;\">
    <div class=\"modall-content\">
       
        <h3>Confirmer la suppression</h3>
        <p id=\"delete-message\">Voulez-vous vraiment supprimer cet utilisateur ?</p>
        <div class=\"modal-buttons\">
            <button id=\"confirmDelete\" class=\"btn btn-danger\">Supprimer</button>
            <button class=\"close-btn btn btn-secondary\">Annuler</button>
        </div>
    </div>
</div>

{# end de votre continue #}
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
       
          <!-- partial -->
        </div>


        <!-- main-panel ends -->
      </div>
      
<!-- Modal pour l'édition des utilisateurs -->
<div id=\"editUserModal\" class=\"modall-overlay\" style=\"display: none;\">
    <div class=\"modall-content\">
        <span class=\"closee-btn\">&times;</span>
        <h3>Modifier l'utilisateur</h3>
       <form id=\"editUserForm\" method=\"POST\">
    <input type=\"hidden\" id=\"edit-user-id\" name=\"id\">
    
    <div class=\"form-group1\">
        <label>Nom:</label>
        <input type=\"text\" id=\"edit-nom\" name=\"nom\" required>
    </div>
    
    <div class=\"form-group1\">
        <label>Prénom:</label>
        <input type=\"text\" id=\"edit-prenom\" name=\"prenom\" required>
    </div>

    <div class=\"form-group1\">
        <label>Email:</label>
        <input type=\"email\" id=\"edit-email\" name=\"email\" required>
    </div>

    <div class=\"form-group1\">
        <label>Adresse:</label>
        <input type=\"text\" id=\"edit-adresse\" name=\"adresse\">
    </div>

    <div class=\"form-group1\">
        <label>Téléphone:</label>
        <input type=\"text\" id=\"edit-numTel\" name=\"numTel\">
    </div>
      <div class=\"form-group1\">
        <label>photo:</label>
        <input type=\"text\" id=\"edit-photo\" name=\"photo\">
    </div>


    <div class=\"form-group1\">
        <label>Rôle:</label>
        <select id=\"edit-role\" name=\"role\">
            <option value=\"ROLE_CLIENT\">Client</option>
            <option value=\"ROLE_ADMIN\">Administrateur</option>
            <option value=\"ROLE_ARTISAN\">Artisan</option>
        </select>
    </div>

    <hr>
    <h4>Changer le mot de passe</h4>

    <div class=\"form-group1\">
        <label>Mot de passe actuel:</label>
        <input type=\"password\" id=\"current-password\" name=\"currentPassword\">
    </div>

    <div class=\"form-group1\">
        <label>Nouveau mot de passe:</label>
        <input type=\"password\" id=\"new-password\" name=\"newPassword\">
    </div>

    <div class=\"modal-buttons1\">
        <button type=\"submit\" class=\"btn btn-success\">Enregistrer</button>
    </div>
</form>



    </div>
</div>


      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    {% block js %}
      <script>
      document.addEventListener(\"DOMContentLoaded\", function () {
    const editModal = document.getElementById(\"editUserModal\");
    const closeEditModal = editModal.querySelector(\".closee-btn\");
    const editForm = document.getElementById(\"editUserForm\");

    // Ouvrir la modale avec les infos de l'utilisateur
    document.querySelectorAll(\".open-edit-modal\").forEach(button => {
        button.addEventListener(\"click\", function(event) {
            event.preventDefault();

            const userId = this.getAttribute(\"data-id\");
            document.getElementById(\"edit-user-id\").value = userId;
            document.getElementById(\"edit-nom\").value = this.getAttribute(\"data-nom\");
            document.getElementById(\"edit-prenom\").value = this.getAttribute(\"data-prenom\");
            document.getElementById(\"edit-email\").value = this.getAttribute(\"data-email\");
            document.getElementById(\"edit-adresse\").value = this.getAttribute(\"data-adresse\");
            document.getElementById(\"edit-numTel\").value = this.getAttribute(\"data-numtel\");
            document.getElementById(\"edit-photo\").value = this.getAttribute(\"data-photo\");

            // Réinitialiser les champs de mot de passe
            document.getElementById(\"current-password\").value = \"\";
            document.getElementById(\"new-password\").value = \"\";

            editModal.style.display = \"flex\";
            document.body.classList.add(\"modall-open\");
        });
    });

    // Fermeture de la modale
    closeEditModal.addEventListener(\"click\", function () {
        editModal.style.display = \"none\";
        document.body.classList.remove(\"modall-open\");
    });

    // Envoi du formulaire avec AJAX
    editForm.addEventListener(\"submit\", function(event) {
        event.preventDefault(); // Empêche le rechargement de la page

        const userId = document.getElementById(\"edit-user-id\").value;
        const formData = new FormData(editForm);

        fetch(`/edituser/\${userId}`, {
            method: \"POST\",
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                alert(\"Utilisateur mis à jour avec succès !\");
                location.reload(); // Recharger la page après modification
            } else {
                alert(\"Erreur : \" + data.message);
            }
        })
        .catch(error => console.error(\"Erreur:\", error));
    });
});


  </script>

      <script>
document.addEventListener(\"DOMContentLoaded\", function() {
    const modal = document.getElementById(\"userInfoModall\");
    const closeModal = document.querySelector(\".closee-btn\");
    const userDetails = document.getElementById(\"user-details\");

    // Handle click on \"Info\" buttons
    document.querySelectorAll(\".open-modall\").forEach(button => {
        button.addEventListener(\"click\", function(event) {
            event.preventDefault();

            const nom = this.getAttribute(\"data-nom\");
            const prenom = this.getAttribute(\"data-prenom\");
            const email = this.getAttribute(\"data-email\");
            const photo = this.getAttribute(\"data-photo\");
            const adresse = this.getAttribute(\"data-adresse\");
            const numTel = this.getAttribute(\"data-numtel\");
            const role = this.getAttribute(\"data-role\");

            // Format role
            let roleFormatted = \"\";
            if (role.includes(\"ROLE_ADMIN\")) roleFormatted = \"Admin\";
            else if (role.includes(\"ROLE_ARTISAN\")) roleFormatted = \"Artisan\";
            else if (role.includes(\"ROLE_CLIENT\")) roleFormatted = \"Client\";
            else roleFormatted = \"Utilisateur\";

            // Populate modal content
            userDetails.innerHTML = `
                <img src=\"\${photo}\" alt=\"Photo de \${prenom}\" style=\"width:80px; height:80px; border-radius:50%; object-fit:cover;\">
                <p><strong>Nom:</strong> \${nom}</p>
                <p><strong>Prénom:</strong> \${prenom}</p>
                <p><strong>Email:</strong> \${email}</p>
                <p><strong>Adresse:</strong> \${adresse}</p>
                <p><strong>Téléphone:</strong> \${numTel}</p>
                <p><strong>Rôle:</strong> \${roleFormatted}</p>
            `;

            // Show modal
            modal.style.display = \"flex\";
            document.body.classList.add(\"modall-open\");
        });
    });

    // Close modal when clicking the close button
    closeModal.addEventListener(\"click\", function() {
        modal.style.display = \"none\";
        document.body.classList.remove(\"modall-open\");
    });

    // Close modal when clicking outside the content
    window.addEventListener(\"click\", function(event) {
        if (event.target === modal) {
            modal.style.display = \"none\";
            document.body.classList.remove(\"modall-open\");
        }
    });
});
</script>
<script>
document.addEventListener(\"DOMContentLoaded\", function () {
    const searchInput = document.getElementById(\"search-input\");
    const refreshButton = document.querySelector(\".refresh-table\");
    const tableRows = document.querySelectorAll(\"tbody tr\"); // Get all table rows

    // Function to filter table rows based on search input
    function filterTable() {
        const searchText = searchInput.value.toLowerCase();

        tableRows.forEach(row => {
            const rowData = row.textContent.toLowerCase();
            if (rowData.includes(searchText)) {
                row.style.display = \"\";
            } else {
                row.style.display = \"none\";
            }
        });
    }

    // Event listener for search input
    searchInput.addEventListener(\"keyup\", filterTable);

    // Event listener for refresh button
    refreshButton.addEventListener(\"click\", function () {
        searchInput.value = \"\"; // Clear search input
        tableRows.forEach(row => row.style.display = \"\"); // Show all rows
    });
});
</script>
<script>
document.addEventListener(\"DOMContentLoaded\", function () {
    const deleteModal = document.getElementById(\"deleteConfirmationModal\");
    const closeModalButtons = document.querySelectorAll(\".close-btn\");
    const confirmDeleteButton = document.getElementById(\"confirmDelete\");
    let userIdToDelete = null;

    // Handle click on delete buttons
    document.querySelectorAll(\".delete-user\").forEach(button => {
        button.addEventListener(\"click\", function (event) {
            event.preventDefault();
            
            userIdToDelete = this.getAttribute(\"data-user-id\");
            const userName = this.getAttribute(\"data-user-name\");

            // Update modal message
            document.getElementById(\"delete-message\").textContent = 
                `Voulez-vous vraiment supprimer l'utilisateur \${userName} ?`;

            // Show modal
            deleteModal.style.display = \"flex\";
            document.body.classList.add(\"modall-open\");
        });
    });

    // Confirm deletion and redirect
    confirmDeleteButton.addEventListener(\"click\", function () {
        if (userIdToDelete) {
            window.location.href = `/deleteuser/\${userIdToDelete}`;
        }
    });

    // Close modal when clicking cancel or close button
    closeModalButtons.forEach(button => {
        button.addEventListener(\"click\", function () {
            deleteModal.style.display = \"none\";
            document.body.classList.remove(\"modall-open\");
        });
    });

    // Close modal when clicking outside the content
    window.addEventListener(\"click\", function (event) {
        if (event.target === deleteModal) {
            deleteModal.style.display = \"none\";
            document.body.classList.remove(\"modall-open\");
        }
    });
});
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
 {% endblock %} </body>
</html>", "user/index.html.twig", "C:\\Users\\Lenovo\\WebProject\\templates\\user\\index.html.twig");
    }
}
