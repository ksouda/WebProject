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

/* admin/materiaux/_form.html.twig */
class __TwigTemplate_234970edefc03f0a7d72b95a818c25e8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/materiaux/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/materiaux/_form.html.twig"));

        // line 1
        yield "
<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <!-- Required meta tags -->
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <title>";
        // line 8
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>
    <!-- plugins:css -->
    ";
        // line 10
        yield from $this->unwrap()->yieldBlock('css', $context, $blocks);
        // line 27
        yield "    <!-- endinject -->
    <link rel=\"shortcut icon\" href=\"build/assets/images/favicon.png\" />
  </head>
  <body>";
        // line 30
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 268
        yield " </body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 8
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

    // line 10
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

        // line 11
        yield "    
      <link href=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/assets/vendors/feather/feather.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
      <link href=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/assets/vendors/css/vendor.bundle.base.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
      <link href=\"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/assets/vendors/css/vendor.bundle.base.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
      <link href=\"";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/assets/vendors/font-awesome/css/font-awesome.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
      <link href=\"";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/assets/vendors/mdi/css/materialdesignicons.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
      <!-- endinject -->
      <!-- Plugin css for this page -->
      <!-- <link rel=\"stylesheet\" href=\"assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css\"> -->
      <link rel=\"stylesheet\" href=\"";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/assets/vendors/datatables.net-bs5/dataTables.bootstrap5.css"), "html", null, true);
        yield "\">
      <link rel=\"stylesheet\" href=\"";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/assets/vendors/ti-icons/css/themify-icons.css"), "html", null, true);
        yield "\">
      <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/assets/js/select.dataTables.min.css"), "html", null, true);
        yield "\">
      <!-- End plugin css for this page -->
      <!-- inject:css -->
      <link rel=\"stylesheet\" href=\"";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/assets/css/style.css"), "html", null, true);
        yield "\">
     ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 30
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

        // line 31
        yield "    <div class=\"container-scroller\">
      
      <!-- partial:partials/_navbar.html -->
       <nav class=\"navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row\">
  <div class=\"text-center navbar-brand-wrapper d-flex align-items-center justify-content-start\">
    <a class=\"navbar-brand brand-logo me-5\" href=\"index.html\"><img src=\"";
        // line 36
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
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("build/assets/images/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 47, $this->source); })()), "user", [], "any", false, false, false, 47), "photo", [], "any", false, false, false, 47))), "html", null, true);
        yield "\" alt=\"profile\" /><span class=\"username\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 47, $this->source); })()), "user", [], "any", false, false, false, 47), "prenom", [], "any", false, false, false, 47), "html", null, true);
        yield ".";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 47, $this->source); })()), "user", [], "any", false, false, false, 47), "nom", [], "any", false, false, false, 47), "html", null, true);
        yield "</span>
        </a>
        <div class=\"dropdown-menu dropdown-menu-right navbar-dropdown\" aria-labelledby=\"profileDropdown\">
          <a class=\"dropdown-item\" >
            <i class=\"ti-settings text-primary\"></i> Profile </a>
          <a class=\"dropdown-item\" href=\"";
        // line 52
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
          <li class=\"nav-item\"> <a class=\"nav-link\" href=\"#\">Table</a></li>
          <li class=\"nav-item\"> <a class=\"nav-link\" href=\"#\">Statistiques</a></li>
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
          <li class=\"nav-item\"> <a class=\"nav-link\" href=\"#\">Table</a></li>
        </ul>
      </div>
    </li>
    <li class=\"nav-item\">
      <a class=\"nav-link\" data-bs-toggle=\"collapse\" href=\"#tables\" aria-expanded=\"false\" aria-controls=\"tables\">
        <i class=\"mdi mdi-screwdriver\"></i>
        <span class=\"menu-title\">Matériaux</span>
        <i class=\"menu-arrow\"></i>
      </a>
      <div class=\"collapse\" id=\"tabels\">
        <ul class=\"nav flex-column sub-menu\">
            <li class=\"nav-item\"> <a class=\"nav-link\" href=\"";
        // line 120
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_materiaux_index");
        yield "\">Table Materiaux</a></li>
            <li class=\"nav-item\"> <a class=\"nav-link\" href=\"";
        // line 121
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
          <li class=\"nav-item\"> <a class=\"nav-link\" href=\"#\"> Table </a></li>
        </ul>
      </div>
    </li>
   
    
  </ul>
</nav>
              
";
        // line 155
        yield "        <div class=\"main-panel\">
          
          <div class=\"content-wrapper\">
            <div class=\"formtestmt-5 d-flex justify-content-center\">
            <div class=\"col-md-6 grid-margin stretch-card\">
            <div class=\"card w-100\">
            <div class=\"card-body\">
            <h4 class=\"card-title\">Formulaire Materiaux</h4>
";
        // line 163
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 163, $this->source); })()), 'form_start', ["attr" => ["class" => "forms-sample", "novalidate" => "novalidate"]]);
        yield "

            <form class=\"forms-sample\">
                <div class=\"form-group\">
                 <label for=\"nom_materiel\">Nom du matériel</label>
                ";
        // line 168
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 168, $this->source); })()), "nom_materiel", [], "any", false, false, false, 168), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                <div class=\"error-message text-danger small\">
                    ";
        // line 170
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 170, $this->source); })()), "nom_materiel", [], "any", false, false, false, 170), 'errors');
        yield "
                </div>

                <label for=\"Quantite_stock\">Quantité</label>
                ";
        // line 174
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 174, $this->source); })()), "quantite_stock", [], "any", false, false, false, 174), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                <div class=\"error-message text-danger small\">
                    ";
        // line 176
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 176, $this->source); })()), "quantite_stock", [], "any", false, false, false, 176), 'errors');
        yield "
                </div>

                <label for=\"seuil_min\">Seuil minimale</label>
                ";
        // line 180
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 180, $this->source); })()), "seuil_min", [], "any", false, false, false, 180), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                <div class=\"error-message text-danger small\">
                    ";
        // line 182
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 182, $this->source); })()), "seuil_min", [], "any", false, false, false, 182), 'errors');
        yield "
                </div>

                <label for=\"prix_unitaire\">Prix Unitaire</label>
                ";
        // line 186
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 186, $this->source); })()), "prix_unitaire", [], "any", false, false, false, 186), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                <div class=\"error-message text-danger small\">
                    ";
        // line 188
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 188, $this->source); })()), "prix_unitaire", [], "any", false, false, false, 188), 'errors');
        yield "
                </div>

                <label for=\"categorie\">Categorie</label>
                ";
        // line 192
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 192, $this->source); })()), "categorie", [], "any", false, false, false, 192), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                <div class=\"error-message text-danger small\">
                    ";
        // line 194
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 194, $this->source); })()), "categorie", [], "any", false, false, false, 194), 'errors');
        yield "
                </div>

                <label for=\"description\">Description</label>
                ";
        // line 198
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 198, $this->source); })()), "description", [], "any", false, false, false, 198), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                <div class=\"error-message text-danger small\">
                    ";
        // line 200
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 200, $this->source); })()), "description", [], "any", false, false, false, 200), 'errors');
        yield "
                </div>

                <label for=\"photo\">Photo</label>
                ";
        // line 204
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 204, $this->source); })()), "photo", [], "any", false, false, false, 204), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                <div class=\"error-message text-danger small\">
                    ";
        // line 206
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 206, $this->source); })()), "photo", [], "any", false, false, false, 206), 'errors');
        yield "
                </div>

                <label for=\"id_fournisseur\">Fournisseur</label>
                ";
        // line 210
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 210, $this->source); })()), "id_fournisseur", [], "any", false, false, false, 210), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                <div class=\"error-message text-danger small\">
                    ";
        // line 212
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 212, $this->source); })()), "id_fournisseur", [], "any", false, false, false, 212), 'errors');
        yield "
                </div>


                

                
                <button type=\"submit\" class=\"btn btn-primary me-2\" style=\"margin-top: 10px;\">Enregistrer</button>
                
                <a href=\"";
        // line 221
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_materiaux_index");
        yield "\">Revenir a la liste</a>
                
              ";
        // line 223
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 223, $this->source); })()), 'form_end');
        yield "
            </form>
            </div>
            </div>
            </div>
            </div>
          </div>
        </div>
            ";
        // line 232
        yield "       
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
       
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    ";
        // line 246
        yield from $this->unwrap()->yieldBlock('js', $context, $blocks);
        // line 266
        yield "    <!-- <script src=\"assets/js/Chart.roundedBarCharts.js\"></script> -->
    <!-- End custom js for this page-->
 ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 246
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

        // line 247
        yield "      <script src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/assets/vendors/js/vendor.bundle.base.js"), "html", null, true);
        yield "\"></script>
      <!-- endinject -->
      <!-- Plugin js for this page -->
      <script src=\"";
        // line 250
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/assets/vendors/chart.js/chart.umd.js"), "html", null, true);
        yield "\"></script>
      <script src=\"";
        // line 251
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/assets/vendors/datatables.net/jquery.dataTables.js"), "html", null, true);
        yield "\"></script>
      <!-- <script src=\"assets/vendors/datatables.net-bs4/dataTables.bootstrap4.js\"></script> -->
      <script src=\"";
        // line 253
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/assets/vendors/datatables.net-bs5/dataTables.bootstrap5.js"), "html", null, true);
        yield "\"></script>
      <script src=\"";
        // line 254
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/assets/js/dataTables.select.min.js"), "html", null, true);
        yield "\"></script>
      <!-- End plugin js for this page -->
      <!-- inject:js -->
      <script src=\"";
        // line 257
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/assets/js/off-canvas.js"), "html", null, true);
        yield "\"></script>
      <script src=\"";
        // line 258
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/assets/js/template.js"), "html", null, true);
        yield "\"></script>
      <script src=\"";
        // line 259
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/assets/js/settings.js"), "html", null, true);
        yield "\"></script>
      <script src=\"";
        // line 260
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/assets/js/todolist.js"), "html", null, true);
        yield "\"></script>
      <!-- endinject -->
      <!-- Custom js for this page-->
      <script src=\"";
        // line 263
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/assets/js/jquery.cookie.js"), "html", null, true);
        yield "\" type=\"text/javascript\"></script>
      <script src=\"";
        // line 264
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
        return "admin/materiaux/_form.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  560 => 264,  556 => 263,  550 => 260,  546 => 259,  542 => 258,  538 => 257,  532 => 254,  528 => 253,  523 => 251,  519 => 250,  512 => 247,  499 => 246,  486 => 266,  484 => 246,  468 => 232,  457 => 223,  452 => 221,  440 => 212,  435 => 210,  428 => 206,  423 => 204,  416 => 200,  411 => 198,  404 => 194,  399 => 192,  392 => 188,  387 => 186,  380 => 182,  375 => 180,  368 => 176,  363 => 174,  356 => 170,  351 => 168,  343 => 163,  333 => 155,  297 => 121,  293 => 120,  222 => 52,  210 => 47,  196 => 36,  189 => 31,  176 => 30,  163 => 25,  157 => 22,  153 => 21,  149 => 20,  142 => 16,  138 => 15,  134 => 14,  130 => 13,  126 => 12,  123 => 11,  110 => 10,  87 => 8,  75 => 268,  73 => 30,  68 => 27,  66 => 10,  61 => 8,  52 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("
<!DOCTYPE html>
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
      <link rel=\"stylesheet\" href=\"{{ asset('build/assets/css/style.css') }}\">
     {% endblock %}
    <!-- endinject -->
    <link rel=\"shortcut icon\" href=\"build/assets/images/favicon.png\" />
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
          <li class=\"nav-item\"> <a class=\"nav-link\" href=\"#\">Table</a></li>
          <li class=\"nav-item\"> <a class=\"nav-link\" href=\"#\">Statistiques</a></li>
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
          <li class=\"nav-item\"> <a class=\"nav-link\" href=\"#\">Table</a></li>
        </ul>
      </div>
    </li>
    <li class=\"nav-item\">
      <a class=\"nav-link\" data-bs-toggle=\"collapse\" href=\"#tables\" aria-expanded=\"false\" aria-controls=\"tables\">
        <i class=\"mdi mdi-screwdriver\"></i>
        <span class=\"menu-title\">Matériaux</span>
        <i class=\"menu-arrow\"></i>
      </a>
      <div class=\"collapse\" id=\"tabels\">
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
          <li class=\"nav-item\"> <a class=\"nav-link\" href=\"#\"> Table </a></li>
        </ul>
      </div>
    </li>
   
    
  </ul>
</nav>
              
{# formulaire #}
        <div class=\"main-panel\">
          
          <div class=\"content-wrapper\">
            <div class=\"formtestmt-5 d-flex justify-content-center\">
            <div class=\"col-md-6 grid-margin stretch-card\">
            <div class=\"card w-100\">
            <div class=\"card-body\">
            <h4 class=\"card-title\">Formulaire Materiaux</h4>
{{ form_start(form, {'attr': {'class': 'forms-sample', 'novalidate': 'novalidate'}}) }}

            <form class=\"forms-sample\">
                <div class=\"form-group\">
                 <label for=\"nom_materiel\">Nom du matériel</label>
                {{ form_widget(form.nom_materiel, { 'attr': {'class': 'form-control'} }) }}
                <div class=\"error-message text-danger small\">
                    {{ form_errors(form.nom_materiel) }}
                </div>

                <label for=\"Quantite_stock\">Quantité</label>
                {{ form_widget(form.quantite_stock, { 'attr': {'class': 'form-control'} }) }}
                <div class=\"error-message text-danger small\">
                    {{ form_errors(form.quantite_stock) }}
                </div>

                <label for=\"seuil_min\">Seuil minimale</label>
                {{ form_widget(form.seuil_min, { 'attr': {'class': 'form-control'} }) }}
                <div class=\"error-message text-danger small\">
                    {{ form_errors(form.seuil_min) }}
                </div>

                <label for=\"prix_unitaire\">Prix Unitaire</label>
                {{ form_widget(form.prix_unitaire, { 'attr': {'class': 'form-control'} }) }}
                <div class=\"error-message text-danger small\">
                    {{ form_errors(form.prix_unitaire) }}
                </div>

                <label for=\"categorie\">Categorie</label>
                {{ form_widget(form.categorie, { 'attr': {'class': 'form-control'} }) }}
                <div class=\"error-message text-danger small\">
                    {{ form_errors(form.categorie) }}
                </div>

                <label for=\"description\">Description</label>
                {{ form_widget(form.description, { 'attr': {'class': 'form-control'} }) }}
                <div class=\"error-message text-danger small\">
                    {{ form_errors(form.description) }}
                </div>

                <label for=\"photo\">Photo</label>
                {{ form_widget(form.photo, { 'attr': {'class': 'form-control'} }) }}
                <div class=\"error-message text-danger small\">
                    {{ form_errors(form.photo) }}
                </div>

                <label for=\"id_fournisseur\">Fournisseur</label>
                {{ form_widget(form.id_fournisseur, { 'attr': {'class': 'form-control'} }) }}
                <div class=\"error-message text-danger small\">
                    {{ form_errors(form.id_fournisseur) }}
                </div>


                

                
                <button type=\"submit\" class=\"btn btn-primary me-2\" style=\"margin-top: 10px;\">Enregistrer</button>
                
                <a href=\"{{ path('app_materiaux_index') }}\">Revenir a la liste</a>
                
              {{ form_end(form) }}
            </form>
            </div>
            </div>
            </div>
            </div>
          </div>
        </div>
            {# end formulaire #}
       
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
       
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    {% block js %}
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
</html>", "admin/materiaux/_form.html.twig", "C:\\Users\\Lenovo\\WebProject\\templates\\admin\\materiaux\\_form.html.twig");
    }
}
