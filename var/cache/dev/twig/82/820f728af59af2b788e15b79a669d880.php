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

/* admin/atelier/_form.html.twig */
class __TwigTemplate_9dfa49b308d1826c0b808bd2bcdae3f9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/atelier/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/atelier/_form.html.twig"));

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
        // line 34
        yield "    <!-- endinject -->
    <link rel=\"shortcut icon\" href=\"assets/images/favicon.png\" />
  </head>
  <body>";
        // line 37
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 249
        yield " </body>
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
        yield "    <style>
.invalid-feedback {
  color: #dc3545; /* Rouge pour signaler l'erreur */
  font-size: 0.875em;
  display: block;
  margin-top: 0.25rem;
}

    </style>
      <link href=\"";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/assets/vendors/feather/feather.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
      <link href=\"";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/assets/vendors/css/vendor.bundle.base.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
      <link href=\"";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/assets/vendors/css/vendor.bundle.base.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
      <link href=\"";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/assets/vendors/font-awesome/css/font-awesome.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
      <link href=\"";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/assets/vendors/mdi/css/materialdesignicons.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
      <!-- endinject -->
      <!-- Plugin css for this page -->
      <!-- <link rel=\"stylesheet\" href=\"assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css\"> -->
      <link rel=\"stylesheet\" href=\"";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/assets/vendors/datatables.net-bs5/dataTables.bootstrap5.css"), "html", null, true);
        yield "\">
      <link rel=\"stylesheet\" href=\"";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/assets/vendors/ti-icons/css/themify-icons.css"), "html", null, true);
        yield "\">
      <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/assets/js/select.dataTables.min.css"), "html", null, true);
        yield "\">
      <!-- End plugin css for this page -->
      <!-- inject:css -->
      <link rel=\"stylesheet\" href=\"";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/assets/cssatelier/style.css"), "html", null, true);
        yield "\">
     ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 37
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

        // line 38
        yield "    <div class=\"container-scroller\">
      
      <!-- partial:partials/_navbar.html -->
     <nav class=\"navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row\">
  <div class=\"text-center navbar-brand-wrapper d-flex align-items-center justify-content-start\">
    <a class=\"navbar-brand brand-logo me-5\" href=\"index.html\"><img src=\"";
        // line 43
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
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("build/assets/images/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 52, $this->source); })()), "user", [], "any", false, false, false, 52), "photo", [], "any", false, false, false, 52))), "html", null, true);
        yield "\" alt=\"profile\" />
            <span class=\"username\">";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 53, $this->source); })()), "user", [], "any", false, false, false, 53), "prenom", [], "any", false, false, false, 53), "html", null, true);
        yield ".";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 53, $this->source); })()), "user", [], "any", false, false, false, 53), "nom", [], "any", false, false, false, 53), "html", null, true);
        yield "</span>
        </a>
        <div class=\"dropdown-menu dropdown-menu-right navbar-dropdown\" aria-labelledby=\"profileDropdown\">
            <a class=\"dropdown-item\">
                <i class=\"ti-settings text-primary\"></i> Profile
            </a>
            ";
        // line 60
        yield "            <form action=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\" method=\"post\" class=\"d-inline\">
                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 61
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("logout"), "html", null, true);
        yield "\">
                <button type=\"submit\" class=\"dropdown-item\">
                    <i class=\"ti-power-off text-primary\"></i> Déconnexion
                </button>
            </form>
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
        // line 80
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin");
        yield "\">
        <i class=\"icon-grid menu-icon\"></i>
        <span class=\"menu-title\">Dashboard</span>
      </a>
    </li>
    <li class=\"nav-item\">
      
    </li>
    <li class=\"nav-item\">
      <a class=\"nav-link\" data-bs-toggle=\"collapse\" href=\"#form-elements\" aria-expanded=\"false\" aria-controls=\"form-elements\">
        <i class=\"mdi mdi-cube\"></i>
        <span class=\"menu-title\">Produits</span>
        <i class=\"menu-arrow\"></i>
      </a>
      <div class=\"collapse\" id=\"form-elements\">
        <ul class=\"nav flex-column sub-menu\">
          <li class=\"nav-item\"><a class=\"nav-link\" href=\"#\">Table</a></li>
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
        // line 108
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_atelierenligne");
        yield "\">Table</a></li>
        </ul>
      </div>
    </li>
    <li class=\"nav-item\">
      
    </li>
    <li class=\"nav-item\">
      
    </li>
   
   
    
  </ul>
</nav>
<div class=\"main-panel1 d-flex justify-content-center align-items-center\">
    <div class=\"content-wrapper1\">
        <div class=\"formtest\">
            <div class=\"d-flex justify-content-center align-items-start flex-wrap gap-4\">
                <!-- Première colonne du formulaire -->
                <div class=\"card p-6\" style=\"width: 450px;\">
                    <div class=\"card-body\">
                        <h4 class=\"card-title text-center\">Ajouter un atelier en ligne</h4>
                 
                        ";
        // line 132
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 132, $this->source); })()), 'form_start', ["attr" => ["class" => "forms-sample", "novalidate" => "novalidate"]]);
        yield "

                        <div class=\"form-group\">
                            ";
        // line 135
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 135, $this->source); })()), "titre", [], "any", false, false, false, 135), 'label', ["label" => "Titre"]);
        yield "
                            ";
        // line 136
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 136, $this->source); })()), "titre", [], "any", false, false, false, 136), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Titre"]]);
        yield "
                            <div class=\"invalid-feedback\">
                            ";
        // line 138
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 138, $this->source); })()), "titre", [], "any", false, false, false, 138), 'errors');
        yield "
                            </div>
                        </div>

                        <div class=\"form-group\">
                            ";
        // line 143
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 143, $this->source); })()), "categorie", [], "any", false, false, false, 143), 'label', ["label" => "Categorie"]);
        yield "
                            ";
        // line 144
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 144, $this->source); })()), "categorie", [], "any", false, false, false, 144), 'widget', ["attr" => ["class" => "form-select form-select-lg", "placeholder" => "Categorie"]]);
        yield "
                            <div class=\"invalid-feedback\">
                            ";
        // line 146
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 146, $this->source); })()), "categorie", [], "any", false, false, false, 146), 'errors');
        yield "
                            </div>
                        </div>

                        <div class=\"form-group\">
                            ";
        // line 151
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 151, $this->source); })()), "description", [], "any", false, false, false, 151), 'label', ["label" => "Description"]);
        yield "
                            ";
        // line 152
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 152, $this->source); })()), "description", [], "any", false, false, false, 152), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Description"]]);
        yield "
                            <div class=\"invalid-feedback\">
                            ";
        // line 154
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 154, $this->source); })()), "description", [], "any", false, false, false, 154), 'errors');
        yield "
                            </div>
                        </div>

                        <div class=\"form-group\">
                            ";
        // line 159
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 159, $this->source); })()), "niveau_diff", [], "any", false, false, false, 159), 'label', ["label" => "Niveau de difficulté"]);
        yield "
                            ";
        // line 160
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 160, $this->source); })()), "niveau_diff", [], "any", false, false, false, 160), 'widget', ["attr" => ["class" => "form-select form-select-lg", "placeholder" => "Niveau de difficulté"]]);
        yield "
                            <div class=\"invalid-feedback\">
                            ";
        // line 162
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 162, $this->source); })()), "niveau_diff", [], "any", false, false, false, 162), 'errors');
        yield "
                            </div>
                           
                        </div>
                    </div>
                </div>

                <!-- Deuxième colonne du formulaire -->
                <div class=\"card p-6\" style=\"width: 450px;\">
                    <div class=\"card-body\">
                        <div class=\"form-group\">
                         <form novalidate method=\"post\">
                            ";
        // line 174
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 174, $this->source); })()), "prix", [], "any", false, false, false, 174), 'label', ["label" => "Prix"]);
        yield "
                            ";
        // line 175
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 175, $this->source); })()), "prix", [], "any", false, false, false, 175), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Prix"]]);
        yield "
                            <div class=\"invalid-feedback\">
                            ";
        // line 177
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 177, $this->source); })()), "prix", [], "any", false, false, false, 177), 'errors');
        yield "
                            </div>
                        </div>

                        <div class=\"form-group\">
                            ";
        // line 182
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 182, $this->source); })()), "datecours", [], "any", false, false, false, 182), 'label', ["label" => "Date du cours"]);
        yield "
                            ";
        // line 183
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 183, $this->source); })()), "datecours", [], "any", false, false, false, 183), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            <div class=\"invalid-feedback\">
                                ";
        // line 185
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 185, $this->source); })()), "datecours", [], "any", false, false, false, 185), "vars", [], "any", false, false, false, 185), "errors", [], "any", false, false, false, 185));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 186
            yield "                                    <p>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 186), "html", null, true);
            yield "</p>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 188
        yield "                            </div>
                        </div>


                        <div class=\"form-group\">
                            ";
        // line 193
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 193, $this->source); })()), "duree", [], "any", false, false, false, 193), 'label', ["label" => "Durée en minutes"]);
        yield "
                            ";
        // line 194
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 194, $this->source); })()), "duree", [], "any", false, false, false, 194), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Durée"]]);
        yield "
                            <div class=\"invalid-feedback\">
                            ";
        // line 196
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 196, $this->source); })()), "duree", [], "any", false, false, false, 196), 'errors');
        yield "
                            </div>
                        </div>

                        <div class=\"form-group\">
                            ";
        // line 201
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 201, $this->source); })()), "lien", [], "any", false, false, false, 201), 'label', ["label" => "Lien"]);
        yield "
                            ";
        // line 202
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 202, $this->source); })()), "lien", [], "any", false, false, false, 202), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            <div class=\"invalid-feedback\">
                            ";
        // line 204
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 204, $this->source); })()), "lien", [], "any", false, false, false, 204), 'errors');
        yield "
                            </div>
                        </div>
                        <button type=\"submit\" class=\"btn btn-primary w-100 mb-3\">
                            ";
        // line 208
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 208, $this->source); })()), "Enregistrer")) : ("Enregistrer")), "html", null, true);
        yield "
                        </button>

                        <a href=\"";
        // line 211
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_atelierenligne");
        yield "\" class=\"btn btn-primary w-100\">
                            ";
        // line 212
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label1", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["button_label1"]) || array_key_exists("button_label1", $context) ? $context["button_label1"] : (function () { throw new RuntimeError('Variable "button_label1" does not exist.', 212, $this->source); })()), "Retour à la liste")) : ("Retour à la liste")), "html", null, true);
        yield "
                        </a>
                        ";
        // line 214
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 214, $this->source); })()), 'form_end');
        yield "
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


</div>

<!-- plugins:js -->
    ";
        // line 227
        yield from $this->unwrap()->yieldBlock('js', $context, $blocks);
        // line 247
        yield "    <!-- <script src=\"assets/js/Chart.roundedBarCharts.js\"></script> -->
    <!-- End custom js for this page-->
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 227
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

        // line 228
        yield "      <script src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/assets/vendors/js/vendor.bundle.base.js"), "html", null, true);
        yield "\"></script>
      <!-- endinject -->
      <!-- Plugin js for this page -->
      <script src=\"";
        // line 231
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/assets/vendors/chart.js/chart.umd.js"), "html", null, true);
        yield "\"></script>
      <script src=\"";
        // line 232
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/assets/vendors/datatables.net/jquery.dataTables.js"), "html", null, true);
        yield "\"></script>
      <!-- <script src=\"assets/vendors/datatables.net-bs4/dataTables.bootstrap4.js\"></script> -->
      <script src=\"";
        // line 234
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/assets/vendors/datatables.net-bs5/dataTables.bootstrap5.js"), "html", null, true);
        yield "\"></script>
      <script src=\"";
        // line 235
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/assets/js/dataTables.select.min.js"), "html", null, true);
        yield "\"></script>
      <!-- End plugin js for this page -->
      <!-- inject:js -->
      <script src=\"";
        // line 238
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/assets/js/off-canvas.js"), "html", null, true);
        yield "\"></script>
      <script src=\"";
        // line 239
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/assets/js/template.js"), "html", null, true);
        yield "\"></script>
      <script src=\"";
        // line 240
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/assets/js/settings.js"), "html", null, true);
        yield "\"></script>
      <script src=\"";
        // line 241
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/assets/js/todolist.js"), "html", null, true);
        yield "\"></script>
      <!-- endinject -->
      <!-- Custom js for this page-->
      <script src=\"";
        // line 244
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/assets/js/jquery.cookie.js"), "html", null, true);
        yield "\" type=\"text/javascript\"></script>
      <script src=\"";
        // line 245
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
        return "admin/atelier/_form.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  583 => 245,  579 => 244,  573 => 241,  569 => 240,  565 => 239,  561 => 238,  555 => 235,  551 => 234,  546 => 232,  542 => 231,  535 => 228,  522 => 227,  509 => 247,  507 => 227,  491 => 214,  486 => 212,  482 => 211,  476 => 208,  469 => 204,  464 => 202,  460 => 201,  452 => 196,  447 => 194,  443 => 193,  436 => 188,  427 => 186,  423 => 185,  418 => 183,  414 => 182,  406 => 177,  401 => 175,  397 => 174,  382 => 162,  377 => 160,  373 => 159,  365 => 154,  360 => 152,  356 => 151,  348 => 146,  343 => 144,  339 => 143,  331 => 138,  326 => 136,  322 => 135,  316 => 132,  289 => 108,  258 => 80,  236 => 61,  231 => 60,  220 => 53,  216 => 52,  204 => 43,  197 => 38,  184 => 37,  171 => 32,  165 => 29,  161 => 28,  157 => 27,  150 => 23,  146 => 22,  142 => 21,  138 => 20,  134 => 19,  123 => 10,  110 => 9,  87 => 7,  74 => 249,  72 => 37,  67 => 34,  65 => 9,  60 => 7,  52 => 1,);
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
    <style>
.invalid-feedback {
  color: #dc3545; /* Rouge pour signaler l'erreur */
  font-size: 0.875em;
  display: block;
  margin-top: 0.25rem;
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
      <link rel=\"stylesheet\" href=\"{{ asset('build/assets/cssatelier/style.css') }}\">
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
            <img src=\"{{ asset('build/assets/images/' ~ app.user.photo) }}\" alt=\"profile\" />
            <span class=\"username\">{{ app.user.prenom }}.{{ app.user.nom }}</span>
        </a>
        <div class=\"dropdown-menu dropdown-menu-right navbar-dropdown\" aria-labelledby=\"profileDropdown\">
            <a class=\"dropdown-item\">
                <i class=\"ti-settings text-primary\"></i> Profile
            </a>
            {# Formulaire de déconnexion #}
            <form action=\"{{ path('app_logout') }}\" method=\"post\" class=\"d-inline\">
                <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('logout') }}\">
                <button type=\"submit\" class=\"dropdown-item\">
                    <i class=\"ti-power-off text-primary\"></i> Déconnexion
                </button>
            </form>
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
      
    </li>
    <li class=\"nav-item\">
      <a class=\"nav-link\" data-bs-toggle=\"collapse\" href=\"#form-elements\" aria-expanded=\"false\" aria-controls=\"form-elements\">
        <i class=\"mdi mdi-cube\"></i>
        <span class=\"menu-title\">Produits</span>
        <i class=\"menu-arrow\"></i>
      </a>
      <div class=\"collapse\" id=\"form-elements\">
        <ul class=\"nav flex-column sub-menu\">
          <li class=\"nav-item\"><a class=\"nav-link\" href=\"#\">Table</a></li>
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
          <li class=\"nav-item\"> <a class=\"nav-link\" href=\"{{ path('app_atelierenligne') }}\">Table</a></li>
        </ul>
      </div>
    </li>
    <li class=\"nav-item\">
      
    </li>
    <li class=\"nav-item\">
      
    </li>
   
   
    
  </ul>
</nav>
<div class=\"main-panel1 d-flex justify-content-center align-items-center\">
    <div class=\"content-wrapper1\">
        <div class=\"formtest\">
            <div class=\"d-flex justify-content-center align-items-start flex-wrap gap-4\">
                <!-- Première colonne du formulaire -->
                <div class=\"card p-6\" style=\"width: 450px;\">
                    <div class=\"card-body\">
                        <h4 class=\"card-title text-center\">Ajouter un atelier en ligne</h4>
                 
                        {{ form_start(form, {'attr': {'class': 'forms-sample', 'novalidate': 'novalidate'}}) }}

                        <div class=\"form-group\">
                            {{ form_label(form.titre, 'Titre') }}
                            {{ form_widget(form.titre, {'attr': {'class': 'form-control', 'placeholder': 'Titre'}}) }}
                            <div class=\"invalid-feedback\">
                            {{ form_errors(form.titre) }}
                            </div>
                        </div>

                        <div class=\"form-group\">
                            {{ form_label(form.categorie, 'Categorie') }}
                            {{ form_widget(form.categorie, {'attr': {'class': 'form-select form-select-lg', 'placeholder': 'Categorie'}}) }}
                            <div class=\"invalid-feedback\">
                            {{ form_errors(form.categorie) }}
                            </div>
                        </div>

                        <div class=\"form-group\">
                            {{ form_label(form.description, 'Description') }}
                            {{ form_widget(form.description, {'attr': {'class': 'form-control', 'placeholder': 'Description'}}) }}
                            <div class=\"invalid-feedback\">
                            {{ form_errors(form.description) }}
                            </div>
                        </div>

                        <div class=\"form-group\">
                            {{ form_label(form.niveau_diff, 'Niveau de difficulté') }}
                            {{ form_widget(form.niveau_diff, {'attr': {'class': 'form-select form-select-lg', 'placeholder': 'Niveau de difficulté'}}) }}
                            <div class=\"invalid-feedback\">
                            {{ form_errors(form.niveau_diff) }}
                            </div>
                           
                        </div>
                    </div>
                </div>

                <!-- Deuxième colonne du formulaire -->
                <div class=\"card p-6\" style=\"width: 450px;\">
                    <div class=\"card-body\">
                        <div class=\"form-group\">
                         <form novalidate method=\"post\">
                            {{ form_label(form.prix, 'Prix') }}
                            {{ form_widget(form.prix, {'attr': {'class': 'form-control', 'placeholder': 'Prix'}}) }}
                            <div class=\"invalid-feedback\">
                            {{ form_errors(form.prix) }}
                            </div>
                        </div>

                        <div class=\"form-group\">
                            {{ form_label(form.datecours, 'Date du cours') }}
                            {{ form_widget(form.datecours, {'attr': {'class': 'form-control'}}) }}
                            <div class=\"invalid-feedback\">
                                {% for error in form.datecours.vars.errors %}
                                    <p>{{ error.message }}</p>
                                {% endfor %}
                            </div>
                        </div>


                        <div class=\"form-group\">
                            {{ form_label(form.duree, 'Durée en minutes') }}
                            {{ form_widget(form.duree, {'attr': {'class': 'form-control', 'placeholder': 'Durée'}}) }}
                            <div class=\"invalid-feedback\">
                            {{ form_errors(form.duree) }}
                            </div>
                        </div>

                        <div class=\"form-group\">
                            {{ form_label(form.lien, 'Lien') }}
                            {{ form_widget(form.lien, {'attr': {'class': 'form-control'}}) }}
                            <div class=\"invalid-feedback\">
                            {{ form_errors(form.lien) }}
                            </div>
                        </div>
                        <button type=\"submit\" class=\"btn btn-primary w-100 mb-3\">
                            {{ button_label|default('Enregistrer') }}
                        </button>

                        <a href=\"{{ path('app_atelierenligne') }}\" class=\"btn btn-primary w-100\">
                            {{ button_label1|default('Retour à la liste') }}
                        </a>
                        {{ form_end(form) }}
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


</div>

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
</html>
", "admin/atelier/_form.html.twig", "C:\\Users\\Lenovo\\WebProject\\templates\\admin\\atelier\\_form.html.twig");
    }
}
