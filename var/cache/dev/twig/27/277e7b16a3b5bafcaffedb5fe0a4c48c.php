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

/* admin/reclamation/consulter.html.twig */
class __TwigTemplate_7aeded941090694f77b529b17a450596 extends Template
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
            'body' => [$this, 'block_body'],
            'js' => [$this, 'block_js'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "admin/baseback.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/reclamation/consulter.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/reclamation/consulter.html.twig"));

        $this->parent = $this->loadTemplate("admin/baseback.html.twig", "admin/reclamation/consulter.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
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

        // line 3
        yield "<div class=\"container-scroller\">

  <!-- partial:partials/_navbar.html -->
  <nav class=\"navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row\">
  <div class=\"text-center navbar-brand-wrapper d-flex align-items-center justify-content-start\">
    <a class=\"navbar-brand brand-logo me-5\" href=\"index.html\"><img src=\"";
        // line 8
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
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("build/assets/images/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 19, $this->source); })()), "user", [], "any", false, false, false, 19), "photo", [], "any", false, false, false, 19))), "html", null, true);
        yield "\" alt=\"profile\" /><span class=\"username\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 19, $this->source); })()), "user", [], "any", false, false, false, 19), "prenom", [], "any", false, false, false, 19), "html", null, true);
        yield ".";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 19, $this->source); })()), "user", [], "any", false, false, false, 19), "nom", [], "any", false, false, false, 19), "html", null, true);
        yield "</span>
        </a>
        <div class=\"dropdown-menu dropdown-menu-right navbar-dropdown\" aria-labelledby=\"profileDropdown\">
          <a class=\"dropdown-item\" >
            <i class=\"ti-settings text-primary\"></i> Profile </a>
          <a class=\"dropdown-item\" href=\"";
        // line 24
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
  <!-- partial:partials/_sidebar.html -->
  <div class=\"container-fluid page-body-wrapper\">
        <nav class=\"sidebar sidebar-offcanvas\" id=\"sidebar\">
  <ul class=\"nav\">
     <li class=\"nav-item\">
      <a class=\"nav-link\" href=\"";
        // line 40
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
        // line 53
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
        // line 79
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
        // line 91
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_materiaux_index");
        yield "\">Table Materiaux</a></li>
          <li class=\"nav-item\"> <a class=\"nav-link\" href=\"";
        // line 92
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
        // line 116
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_liste_admin");
        yield "\"> Table </a></li>
        </ul>
      </div>
    </li>
   
    
  </ul>
</nav>

    <!-- Contenu principal -->
    <div class=\"main-panel\">
      <div class=\"content-wrapper\">
        <div class=\"title-gestion\"> Détails de la Réclamation </div>

            <table class=\"table\">
                <tr>
                    <th>ID :</th>
                    <td>";
        // line 133
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 133, $this->source); })()), "id", [], "any", false, false, false, 133), "html", null, true);
        yield "</td>
                </tr>
                <tr>
                    <th>Titre :</th>
                    <td>";
        // line 137
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 137, $this->source); })()), "titre", [], "any", false, false, false, 137), "html", null, true);
        yield "</td>
                </tr>
                <tr>
                    <th>Description :</th>
                    <td>";
        // line 141
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 141, $this->source); })()), "description", [], "any", false, false, false, 141), "html", null, true);
        yield "</td>
                </tr>
                <tr>
                    <th>Statut :</th>
                    <td>";
        // line 145
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 145, $this->source); })()), "statut", [], "any", false, false, false, 145), "html", null, true);
        yield "</td>
                </tr>
                <tr>
                    <th>Date :</th>
                    <td>";
        // line 149
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 149, $this->source); })()), "dateReclamation", [], "any", false, false, false, 149), "Y-m-d"), "html", null, true);
        yield "</td>
                </tr>
                <tr>
                    <th>Réponse :</th>
                    <td>
                        ";
        // line 154
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 154, $this->source); })()), "reponse", [], "any", false, false, false, 154)) {
            // line 155
            yield "                            ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 155, $this->source); })()), "reponse", [], "any", false, false, false, 155), "description", [], "any", false, false, false, 155), "html", null, true);
            yield "
                            <br>

                        ";
        } else {
            // line 159
            yield "                            <span class=\"text-danger\">Pas encore répondu</span>
                        ";
        }
        // line 161
        yield "                    </td>
                </tr>
                ";
        // line 163
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 163, $this->source); })()), "reponse", [], "any", false, false, false, 163)) {
            // line 164
            yield "                    <tr>
                        <th>Date de la réponse :</th>
                        <td>";
            // line 166
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 166, $this->source); })()), "reponse", [], "any", false, false, false, 166), "dateReponse", [], "any", false, false, false, 166), "Y-m-d"), "html", null, true);
            yield "</td>
                    </tr>
                ";
        }
        // line 169
        yield "            </table>

            ";
        // line 171
        if ( !(isset($context["reponseExiste"]) || array_key_exists("reponseExiste", $context) ? $context["reponseExiste"] : (function () { throw new RuntimeError('Variable "reponseExiste" does not exist.', 171, $this->source); })())) {
            // line 172
            yield "                <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reponse_ajouter", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 172, $this->source); })()), "id", [], "any", false, false, false, 172)]), "html", null, true);
            yield "\" class=\"btn btn-primary\">Répondre</a>
            ";
        }
        // line 174
        yield "
            ";
        // line 175
        if (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 175, $this->source); })()), "statut", [], "any", false, false, false, 175) == "En cours") && CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 175, $this->source); })()), "reponse", [], "any", false, false, false, 175))) {
            // line 176
            yield "                <div class=\"mt-3\">
                    <a href=\"";
            // line 177
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reponse_modifier", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 177, $this->source); })()), "reponse", [], "any", false, false, false, 177), "id", [], "any", false, false, false, 177)]), "html", null, true);
            yield "\" class=\"btn btn-warning\">Modifier</a>
                </div>
            ";
        }
        // line 180
        yield "
            <a href=\"";
        // line 181
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_liste_admin");
        yield "\" class=\"btn btn-secondary\">Retour</a>
        </div>
    </div>
</div>

    ";
        // line 186
        yield from $this->unwrap()->yieldBlock('js', $context, $blocks);
        // line 206
        yield "    <!-- <script src=\"assets/js/Chart.roundedBarCharts.js\"></script> -->
    <!-- End custom js for this page-->
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 186
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

        // line 187
        yield "      <script src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/assets/vendors/js/vendor.bundle.base.js"), "html", null, true);
        yield "\"></script>
      <!-- endinject -->
      <!-- Plugin js for this page -->
      <script src=\"";
        // line 190
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/assets/vendors/chart.js/chart.umd.js"), "html", null, true);
        yield "\"></script>
      <script src=\"";
        // line 191
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/assets/vendors/datatables.net/jquery.dataTables.js"), "html", null, true);
        yield "\"></script>
      <!-- <script src=\"assets/vendors/datatables.net-bs4/dataTables.bootstrap4.js\"></script> -->
      <script src=\"";
        // line 193
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/assets/vendors/datatables.net-bs5/dataTables.bootstrap5.js"), "html", null, true);
        yield "\"></script>
      <script src=\"";
        // line 194
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/assets/js/dataTables.select.min.js"), "html", null, true);
        yield "\"></script>
      <!-- End plugin js for this page -->
      <!-- inject:js -->
      <script src=\"";
        // line 197
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/assets/js/off-canvas.js"), "html", null, true);
        yield "\"></script>
      <script src=\"";
        // line 198
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/assets/js/template.js"), "html", null, true);
        yield "\"></script>
      <script src=\"";
        // line 199
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/assets/js/settings.js"), "html", null, true);
        yield "\"></script>
      <script src=\"";
        // line 200
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/assets/js/todolist.js"), "html", null, true);
        yield "\"></script>
      <!-- endinject -->
      <!-- Custom js for this page-->
      <script src=\"";
        // line 203
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/assets/js/jquery.cookie.js"), "html", null, true);
        yield "\" type=\"text/javascript\"></script>
      <script src=\"";
        // line 204
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
        return "admin/reclamation/consulter.html.twig";
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
        return array (  419 => 204,  415 => 203,  409 => 200,  405 => 199,  401 => 198,  397 => 197,  391 => 194,  387 => 193,  382 => 191,  378 => 190,  371 => 187,  358 => 186,  345 => 206,  343 => 186,  335 => 181,  332 => 180,  326 => 177,  323 => 176,  321 => 175,  318 => 174,  312 => 172,  310 => 171,  306 => 169,  300 => 166,  296 => 164,  294 => 163,  290 => 161,  286 => 159,  278 => 155,  276 => 154,  268 => 149,  261 => 145,  254 => 141,  247 => 137,  240 => 133,  220 => 116,  193 => 92,  189 => 91,  174 => 79,  145 => 53,  129 => 40,  110 => 24,  98 => 19,  84 => 8,  77 => 3,  64 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'admin/baseback.html.twig' %}
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
  <!-- partial:partials/_sidebar.html -->
  <div class=\"container-fluid page-body-wrapper\">
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

    <!-- Contenu principal -->
    <div class=\"main-panel\">
      <div class=\"content-wrapper\">
        <div class=\"title-gestion\"> Détails de la Réclamation </div>

            <table class=\"table\">
                <tr>
                    <th>ID :</th>
                    <td>{{ reclamation.id }}</td>
                </tr>
                <tr>
                    <th>Titre :</th>
                    <td>{{ reclamation.titre }}</td>
                </tr>
                <tr>
                    <th>Description :</th>
                    <td>{{ reclamation.description }}</td>
                </tr>
                <tr>
                    <th>Statut :</th>
                    <td>{{ reclamation.statut }}</td>
                </tr>
                <tr>
                    <th>Date :</th>
                    <td>{{ reclamation.dateReclamation|date('Y-m-d') }}</td>
                </tr>
                <tr>
                    <th>Réponse :</th>
                    <td>
                        {% if reclamation.reponse %}
                            {{ reclamation.reponse.description }}
                            <br>

                        {% else %}
                            <span class=\"text-danger\">Pas encore répondu</span>
                        {% endif %}
                    </td>
                </tr>
                {% if reclamation.reponse %}
                    <tr>
                        <th>Date de la réponse :</th>
                        <td>{{ reclamation.reponse.dateReponse|date('Y-m-d') }}</td>
                    </tr>
                {% endif %}
            </table>

            {% if not reponseExiste %}
                <a href=\"{{ path('app_reponse_ajouter', {'id': reclamation.id}) }}\" class=\"btn btn-primary\">Répondre</a>
            {% endif %}

            {% if reclamation.statut == 'En cours' and reclamation.reponse %}
                <div class=\"mt-3\">
                    <a href=\"{{ path('app_reponse_modifier', {'id': reclamation.reponse.id}) }}\" class=\"btn btn-warning\">Modifier</a>
                </div>
            {% endif %}

            <a href=\"{{ path('app_reclamation_liste_admin') }}\" class=\"btn btn-secondary\">Retour</a>
        </div>
    </div>
</div>

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
{% endblock %}
", "admin/reclamation/consulter.html.twig", "C:\\Users\\Lenovo\\WebProject\\templates\\admin\\reclamation\\consulter.html.twig");
    }
}
