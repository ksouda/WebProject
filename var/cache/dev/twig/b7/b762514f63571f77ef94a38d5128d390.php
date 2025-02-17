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

/* admin/produit.html.twig */
class __TwigTemplate_6ef53bea21d1ebee6ab8c4da2d6b91b6 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/produit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/produit.html.twig"));

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
        // line 26
        yield "    <!-- endinject -->
    <link rel=\"shortcut icon\" href=\"assets/images/favicon.png\" />
  </head>
  <body>";
        // line 29
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 289
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/assets/css/style.css"), "html", null, true);
        yield "\">
     ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 29
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

        // line 30
        yield "    <div class=\"container-scroller\">
      
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
          <a class=\"dropdown-item\" href=\"#\">
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
          <li class=\"nav-item\"> <a class=\"nav-link\" href=\"";
        // line 95
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_produit");
        yield "\">Table</a></li>
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
      <div class=\"collapse\" id=\"tables\">
        <ul class=\"nav flex-column sub-menu\">
          <li class=\"nav-item\"> <a class=\"nav-link\" href=\"#\">Table</a></li>
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
        <!-- partial -->
        <div class=\"main-panel\">
          <div class=\"content-wrapper\">
          ";
        // line 156
        yield "             <div class=\"title-gestion\"> Gestion des Produits </div>
            <div class=\"table-container\">
        <div class=\"table-title\">
     
            
            <div class=\"search-box\">
                <i class=\"fa fa-search\"></i>
                <input type=\"text\" placeholder=\"Rechercher...\">
            </div>
            <i class=\"fa fa-plus\">   ";
        // line 165
        yield "  </i>
        </div>
        <table>
            <thead>
                <tr>
                    <th>Nom du Produit</th>
                    <th>Catégorie</th>
                    <th>Prix</th>
                    <th>Stock</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Produit 1</td>
                    <td>Électronique</td>
                    <td>100€</td>
                    <td>50</td>
                    <td class=\"action-icons\">
                        <i class=\"fa fa-edit\" style=\"color: #ffc107;\"></i>
                        <i class=\"fa fa-trash\" style=\"color: #dc3545;\"></i>
                        <i class=\"fa fa-info-circle\" style=\"color: #17a2b8;\"></i>
                    </td>
                </tr>
                <tr>
                    <td>Produit 2</td>
                    <td>Vêtements</td>
                    <td>30€</td>
                    <td>120</td>
                    <td class=\"action-icons\">
                        <i class=\"fa fa-edit\" style=\"color: #ffc107;\"></i>
                        <i class=\"fa fa-trash\" style=\"color: #dc3545;\"></i>
                        <i class=\"fa fa-info-circle\" style=\"color: #17a2b8;\"></i>
                    </td>
                </tr>
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
              
           ";
        // line 213
        yield "<div class=\"formtest\">
<div class=\"col-md-6 grid-margin stretch-card\">
                <div class=\"card\">
                  <div class=\"card-body\">
                    <h4 class=\"card-title\">Ajouter produit</h4>
                    <form class=\"forms-sample\">
                      <div class=\"form-group\">
                        <label for=\"exampleInputUsername1\">Username</label>
                        <input type=\"text\" class=\"form-control\" id=\"exampleInputUsername1\" placeholder=\"Username\">
                      </div>
                      <div class=\"form-group\">
                        <label for=\"exampleInputEmail1\">Email address</label>
                        <input type=\"email\" class=\"form-control\" id=\"exampleInputEmail1\" placeholder=\"Email\">
                      </div>
                      <div class=\"form-group\">
                        <label for=\"exampleInputPassword1\">Password</label>
                        <input type=\"password\" class=\"form-control\" id=\"exampleInputPassword1\" placeholder=\"Password\">
                      </div>
                      <div class=\"form-group\">
                        <label for=\"exampleInputConfirmPassword1\">Confirm Password</label>
                        <input type=\"password\" class=\"form-control\" id=\"exampleInputConfirmPassword1\" placeholder=\"Password\">
                      </div>
                     
                      <div class=\"form-group\">
                        <label for=\"exampleFormControlSelect1\">Large select</label>
                        <select class=\"form-select form-select-lg\" id=\"exampleFormControlSelect1\">
                          <option>1</option>
                          <option>2</option>
                          <option>3</option>
                          <option>4</option>
                          <option>5</option>
                        </select>
                      </div>
                      <button type=\"submit\" class=\"btn btn-primary me-2\">Submit</button>
                  
                    </form>
                  </div>
                </div>
              </div>
 </div>
";
        // line 255
        yield "          </div>
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
        // line 267
        yield from $this->unwrap()->yieldBlock('js', $context, $blocks);
        // line 287
        yield "    <!-- <script src=\"assets/js/Chart.roundedBarCharts.js\"></script> -->
    <!-- End custom js for this page-->
 ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 267
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

        // line 268
        yield "      <script src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/assets/vendors/js/vendor.bundle.base.js"), "html", null, true);
        yield "\"></script>
      <!-- endinject -->
      <!-- Plugin js for this page -->
      <script src=\"";
        // line 271
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/assets/vendors/chart.js/chart.umd.js"), "html", null, true);
        yield "\"></script>
      <script src=\"";
        // line 272
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/assets/vendors/datatables.net/jquery.dataTables.js"), "html", null, true);
        yield "\"></script>
      <!-- <script src=\"assets/vendors/datatables.net-bs4/dataTables.bootstrap4.js\"></script> -->
      <script src=\"";
        // line 274
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/assets/vendors/datatables.net-bs5/dataTables.bootstrap5.js"), "html", null, true);
        yield "\"></script>
      <script src=\"";
        // line 275
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/assets/js/dataTables.select.min.js"), "html", null, true);
        yield "\"></script>
      <!-- End plugin js for this page -->
      <!-- inject:js -->
      <script src=\"";
        // line 278
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/assets/js/off-canvas.js"), "html", null, true);
        yield "\"></script>
      <script src=\"";
        // line 279
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/assets/js/template.js"), "html", null, true);
        yield "\"></script>
      <script src=\"";
        // line 280
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/assets/js/settings.js"), "html", null, true);
        yield "\"></script>
      <script src=\"";
        // line 281
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/assets/js/todolist.js"), "html", null, true);
        yield "\"></script>
      <!-- endinject -->
      <!-- Custom js for this page-->
      <script src=\"";
        // line 284
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/assets/js/jquery.cookie.js"), "html", null, true);
        yield "\" type=\"text/javascript\"></script>
      <script src=\"";
        // line 285
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
        return "admin/produit.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  523 => 285,  519 => 284,  513 => 281,  509 => 280,  505 => 279,  501 => 278,  495 => 275,  491 => 274,  486 => 272,  482 => 271,  475 => 268,  462 => 267,  449 => 287,  447 => 267,  433 => 255,  391 => 213,  342 => 165,  331 => 156,  268 => 95,  238 => 68,  209 => 46,  195 => 35,  188 => 30,  175 => 29,  162 => 24,  156 => 21,  152 => 20,  148 => 19,  141 => 15,  137 => 14,  133 => 13,  129 => 12,  125 => 11,  122 => 10,  109 => 9,  86 => 7,  74 => 289,  72 => 29,  67 => 26,  65 => 9,  60 => 7,  52 => 1,);
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
      <link rel=\"stylesheet\" href=\"{{ asset('build/assets/css/style.css') }}\">
     {% endblock %}
    <!-- endinject -->
    <link rel=\"shortcut icon\" href=\"assets/images/favicon.png\" />
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
          <a class=\"dropdown-item\" href=\"#\">
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
          <li class=\"nav-item\"> <a class=\"nav-link\" href=\"{{ path('app_admin_produit') }}\">Table</a></li>
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
      <div class=\"collapse\" id=\"tables\">
        <ul class=\"nav flex-column sub-menu\">
          <li class=\"nav-item\"> <a class=\"nav-link\" href=\"#\">Table</a></li>
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
        <!-- partial -->
        <div class=\"main-panel\">
          <div class=\"content-wrapper\">
          {# votre continue #}
             <div class=\"title-gestion\"> Gestion des Produits </div>
            <div class=\"table-container\">
        <div class=\"table-title\">
     
            
            <div class=\"search-box\">
                <i class=\"fa fa-search\"></i>
                <input type=\"text\" placeholder=\"Rechercher...\">
            </div>
            <i class=\"fa fa-plus\">   {# ajout #}  </i>
        </div>
        <table>
            <thead>
                <tr>
                    <th>Nom du Produit</th>
                    <th>Catégorie</th>
                    <th>Prix</th>
                    <th>Stock</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Produit 1</td>
                    <td>Électronique</td>
                    <td>100€</td>
                    <td>50</td>
                    <td class=\"action-icons\">
                        <i class=\"fa fa-edit\" style=\"color: #ffc107;\"></i>
                        <i class=\"fa fa-trash\" style=\"color: #dc3545;\"></i>
                        <i class=\"fa fa-info-circle\" style=\"color: #17a2b8;\"></i>
                    </td>
                </tr>
                <tr>
                    <td>Produit 2</td>
                    <td>Vêtements</td>
                    <td>30€</td>
                    <td>120</td>
                    <td class=\"action-icons\">
                        <i class=\"fa fa-edit\" style=\"color: #ffc107;\"></i>
                        <i class=\"fa fa-trash\" style=\"color: #dc3545;\"></i>
                        <i class=\"fa fa-info-circle\" style=\"color: #17a2b8;\"></i>
                    </td>
                </tr>
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
              
           {# formulaire #}
<div class=\"formtest\">
<div class=\"col-md-6 grid-margin stretch-card\">
                <div class=\"card\">
                  <div class=\"card-body\">
                    <h4 class=\"card-title\">Ajouter produit</h4>
                    <form class=\"forms-sample\">
                      <div class=\"form-group\">
                        <label for=\"exampleInputUsername1\">Username</label>
                        <input type=\"text\" class=\"form-control\" id=\"exampleInputUsername1\" placeholder=\"Username\">
                      </div>
                      <div class=\"form-group\">
                        <label for=\"exampleInputEmail1\">Email address</label>
                        <input type=\"email\" class=\"form-control\" id=\"exampleInputEmail1\" placeholder=\"Email\">
                      </div>
                      <div class=\"form-group\">
                        <label for=\"exampleInputPassword1\">Password</label>
                        <input type=\"password\" class=\"form-control\" id=\"exampleInputPassword1\" placeholder=\"Password\">
                      </div>
                      <div class=\"form-group\">
                        <label for=\"exampleInputConfirmPassword1\">Confirm Password</label>
                        <input type=\"password\" class=\"form-control\" id=\"exampleInputConfirmPassword1\" placeholder=\"Password\">
                      </div>
                     
                      <div class=\"form-group\">
                        <label for=\"exampleFormControlSelect1\">Large select</label>
                        <select class=\"form-select form-select-lg\" id=\"exampleFormControlSelect1\">
                          <option>1</option>
                          <option>2</option>
                          <option>3</option>
                          <option>4</option>
                          <option>5</option>
                        </select>
                      </div>
                      <button type=\"submit\" class=\"btn btn-primary me-2\">Submit</button>
                  
                    </form>
                  </div>
                </div>
              </div>
 </div>
{# end formulaire #}
{# end de votre continue #}
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
</html>", "admin/produit.html.twig", "C:\\Users\\Lenovo\\WebProject\\templates\\admin\\produit.html.twig");
    }
}
