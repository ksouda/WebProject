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

/* admin/reclamation/modifier.html.twig */
class __TwigTemplate_0af0124e9d4b527bfd434d68cf5b58ac extends Template
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
        // line 2
        return "admin/baseback.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/reclamation/modifier.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/reclamation/modifier.html.twig"));

        $this->parent = $this->loadTemplate("admin/baseback.html.twig", "admin/reclamation/modifier.html.twig", 2);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
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

        // line 4
        yield "<div class=\"container-scroller\">

  <!-- partial:partials/_navbar.html -->
  <nav class=\"navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row\">
    <div class=\"text-center navbar-brand-wrapper d-flex align-items-center justify-content-start\">
      <a class=\"navbar-brand brand-logo me-5\" href=\"#\"><img src=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/assets/images/logo 2.svg"), "html", null, true);
        yield "\" class=\"me-2\" alt=\"logo\" /></a>
    </div>
    <div class=\"navbar-menu-wrapper d-flex align-items-center justify-content-end\">
      <button class=\"navbar-toggler navbar-toggler-right d-lg-none align-self-center\" type=\"button\" data-bs-toggle=\"offcanvas\">
        <span class=\"icon-menu\"></span>
      </button>
    </div>
  </nav>

  <!-- partial:partials/_sidebar.html -->
  <div class=\"container-fluid page-body-wrapper\">
    <nav class=\"sidebar sidebar-offcanvas\" id=\"sidebar\">
      <ul class=\"nav\">
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"#\">
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
            </ul>
          </div>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" data-bs-toggle=\"collapse\" href=\"#form-elements\" aria-expanded=\"false\" aria-controls=\"form-elements\">
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
            <span class=\"menu-title\">Réclamations</span>
            <i class=\"menu-arrow\"></i>
          </a>
          <div class=\"collapse\" id=\"auth\">
            <ul class=\"nav flex-column sub-menu\">
              <li class=\"nav-item\"> <a class=\"nav-link\" href=\"#\">Table</a></li>
            </ul>
          </div>
        </li>
      </ul>
    </nav>

    <!-- Contenu principal -->
    <div class=\"main-panel\">
      <div class=\"content-wrapper\">
        <div class=\"title-gestion\"> Modifier Réponse </div>
          <div class=\"container\">
            <form method=\"post\" novalidate>
              ";
        // line 109
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 109, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        yield "
                <div class=\"mb-3\">
                    ";
        // line 111
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 111, $this->source); })()), "description", [], "any", false, false, false, 111), 'label');
        yield "
                    ";
        // line 112
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 112, $this->source); })()), "description", [], "any", false, false, false, 112), 'widget');
        yield "
                    ";
        // line 113
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 113, $this->source); })()), "description", [], "any", false, false, false, 113), 'errors');
        yield "
                </div>
                <button type=\"submit\" class=\"btn btn-primary\">Modifier</button>
              ";
        // line 116
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 116, $this->source); })()), 'form_end');
        yield "
              <a href=\"";
        // line 117
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reponse_liste_admin");
        yield "\" class=\"btn btn-secondary mt-3\">Retour à la liste</a>
            </form>
          </div>
        </div>
      </div>
    </div>

    ";
        // line 124
        yield from $this->unwrap()->yieldBlock('js', $context, $blocks);
        // line 144
        yield "    <!-- <script src=\"assets/js/Chart.roundedBarCharts.js\"></script> -->
    <!-- End custom js for this page-->
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 124
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

        // line 125
        yield "      <script src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/assets/vendors/js/vendor.bundle.base.js"), "html", null, true);
        yield "\"></script>
      <!-- endinject -->
      <!-- Plugin js for this page -->
      <script src=\"";
        // line 128
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/assets/vendors/chart.js/chart.umd.js"), "html", null, true);
        yield "\"></script>
      <script src=\"";
        // line 129
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/assets/vendors/datatables.net/jquery.dataTables.js"), "html", null, true);
        yield "\"></script>
      <!-- <script src=\"assets/vendors/datatables.net-bs4/dataTables.bootstrap4.js\"></script> -->
      <script src=\"";
        // line 131
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/assets/vendors/datatables.net-bs5/dataTables.bootstrap5.js"), "html", null, true);
        yield "\"></script>
      <script src=\"";
        // line 132
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/assets/js/dataTables.select.min.js"), "html", null, true);
        yield "\"></script>
      <!-- End plugin js for this page -->
      <!-- inject:js -->
      <script src=\"";
        // line 135
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/assets/js/off-canvas.js"), "html", null, true);
        yield "\"></script>
      <script src=\"";
        // line 136
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/assets/js/template.js"), "html", null, true);
        yield "\"></script>
      <script src=\"";
        // line 137
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/assets/js/settings.js"), "html", null, true);
        yield "\"></script>
      <script src=\"";
        // line 138
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/assets/js/todolist.js"), "html", null, true);
        yield "\"></script>
      <!-- endinject -->
      <!-- Custom js for this page-->
      <script src=\"";
        // line 141
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/assets/js/jquery.cookie.js"), "html", null, true);
        yield "\" type=\"text/javascript\"></script>
      <script src=\"";
        // line 142
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
        return "admin/reclamation/modifier.html.twig";
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
        return array (  296 => 142,  292 => 141,  286 => 138,  282 => 137,  278 => 136,  274 => 135,  268 => 132,  264 => 131,  259 => 129,  255 => 128,  248 => 125,  235 => 124,  222 => 144,  220 => 124,  210 => 117,  206 => 116,  200 => 113,  196 => 112,  192 => 111,  187 => 109,  84 => 9,  77 => 4,  64 => 3,  41 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("
{% extends 'admin/baseback.html.twig' %}
{% block body %}
<div class=\"container-scroller\">

  <!-- partial:partials/_navbar.html -->
  <nav class=\"navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row\">
    <div class=\"text-center navbar-brand-wrapper d-flex align-items-center justify-content-start\">
      <a class=\"navbar-brand brand-logo me-5\" href=\"#\"><img src=\"{{ asset('build/assets/images/logo 2.svg') }}\" class=\"me-2\" alt=\"logo\" /></a>
    </div>
    <div class=\"navbar-menu-wrapper d-flex align-items-center justify-content-end\">
      <button class=\"navbar-toggler navbar-toggler-right d-lg-none align-self-center\" type=\"button\" data-bs-toggle=\"offcanvas\">
        <span class=\"icon-menu\"></span>
      </button>
    </div>
  </nav>

  <!-- partial:partials/_sidebar.html -->
  <div class=\"container-fluid page-body-wrapper\">
    <nav class=\"sidebar sidebar-offcanvas\" id=\"sidebar\">
      <ul class=\"nav\">
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"#\">
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
            </ul>
          </div>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" data-bs-toggle=\"collapse\" href=\"#form-elements\" aria-expanded=\"false\" aria-controls=\"form-elements\">
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
            <span class=\"menu-title\">Réclamations</span>
            <i class=\"menu-arrow\"></i>
          </a>
          <div class=\"collapse\" id=\"auth\">
            <ul class=\"nav flex-column sub-menu\">
              <li class=\"nav-item\"> <a class=\"nav-link\" href=\"#\">Table</a></li>
            </ul>
          </div>
        </li>
      </ul>
    </nav>

    <!-- Contenu principal -->
    <div class=\"main-panel\">
      <div class=\"content-wrapper\">
        <div class=\"title-gestion\"> Modifier Réponse </div>
          <div class=\"container\">
            <form method=\"post\" novalidate>
              {{ form_start(form, {'attr': {'novalidate': 'novalidate'}}) }}
                <div class=\"mb-3\">
                    {{ form_label(form.description) }}
                    {{ form_widget(form.description) }}
                    {{ form_errors(form.description) }}
                </div>
                <button type=\"submit\" class=\"btn btn-primary\">Modifier</button>
              {{ form_end(form) }}
              <a href=\"{{ path('app_reponse_liste_admin') }}\" class=\"btn btn-secondary mt-3\">Retour à la liste</a>
            </form>
          </div>
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
{% endblock %}", "admin/reclamation/modifier.html.twig", "C:\\Users\\Lenovo\\WebProject\\templates\\admin\\reclamation\\modifier.html.twig");
    }
}
