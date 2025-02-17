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

/* registration/register.html.twig */
class __TwigTemplate_1b029bbd6489061a40bc65906e62ad54 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

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
   
    <!-- endinject -->
    <!-- inject:css -->
    <style>
  /* Personnaliser l'apparence du message d'erreur du champ email */
.form-group {
    color:rgb(162, 76, 10);  /* Changez la couleur des erreurs à rouge */
  /* Met en gras le message d'erreur */
}


</style>

    <link rel=\"stylesheet\" href=\"";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/assets/css/register.css"), "html", null, true);
        yield "\">
    <!-- endinject -->
  </head>
  ";
        // line 25
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        
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

        yield "Inscription";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 25
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

        // line 26
        yield "  <body>
    <div class=\"container-scroller\">
      <div class=\"container-fluid page-body-wrapper full-page-wrapper\">
        <div class=\"content-wrapper d-flex align-items-center auth px-0\">
          <div class=\"row w-100 mx-0\">
            <div class=\"col-lg-4 mx-auto\">
              <div class=\"auth-form-light text-left py-5 px-4 px-sm-5\">
                <div class=\"brand-logo\">
                  <img src=\"";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/assets/images/logo 1.svg"), "html", null, true);
        yield "\" alt=\"logo\">
                </div>
                <h4>Nouveau ici ?</h4>
                <h6 class=\"font-weight-light\">S'inscrire. Cela ne prend que quelques étapes.</h6>
                <form novalidate method=\"post\">
                  ";
        // line 39
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), 'form_start');
        yield "
                  <div class=\"form-group\">
                    ";
        // line 41
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "email", [], "any", false, false, false, 41), 'row', ["attr" => ["class" => "form-control form-control-lg", "placeholder" => "Email"]]);
        yield "
                  </div>
                  <div class=\"form-group\">
                    ";
        // line 44
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "nom", [], "any", false, false, false, 44), 'row', ["attr" => ["class" => "form-control form-control-lg", "placeholder" => "Nom"]]);
        yield "
                  </div>
                  <div class=\"form-group\">
                    ";
        // line 47
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "prenom", [], "any", false, false, false, 47), 'row', ["attr" => ["class" => "form-control form-control-lg", "placeholder" => "Prénom"]]);
        yield "
                  </div>
                  <div class=\"form-group\">
                    ";
        // line 50
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "password", [], "any", false, false, false, 50), 'row', ["attr" => ["class" => "form-control form-control-lg", "placeholder" => "Mot de passe"]]);
        yield "
                  </div>
                  <div class=\"form-group\">
                    ";
        // line 53
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "confirmPassword", [], "any", false, false, false, 53), 'row', ["attr" => ["class" => "form-control form-control-lg", "placeholder" => "Confirmer le mot de passe"]]);
        yield "
                  </div>
                  <div class=\"mb-4\">
                    <div class=\"form-check\">
                      <label class=\"form-check-label text-muted\">
                        <input type=\"checkbox\" class=\"form-check-input\"> J'accepte tous les Termes et Conditions.</label>
                    </div>
                  </div>
                  <div class=\"mt-3 d-grid gap-2\">
                    <button type=\"submit\" class=\"btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn\">S'inscrire</button>
                  </div>
                  <div class=\"text-center mt-4 font-weight-light\">Vous avez déjà un compte? <a href=\"";
        // line 64
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\" class=\"text-primary\">Connectez-vous.</a>
                  </div>
                  ";
        // line 66
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), 'form_end');
        yield "
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Les étoiles en dehors du conteneur principal -->
      <div class=\"stars\">
        <div class=\"star\"></div>
        <div class=\"star\"></div>
        <div class=\"star\"></div>
        <div class=\"star\"></div>
        <div class=\"star\"></div>
        <div class=\"star\"></div>
        <div class=\"star\"></div>
        <div class=\"star\"></div>
        <div class=\"star\"></div>
        <div class=\"star\"></div>
        <div class=\"star\"></div>
        <div class=\"star\"></div>
        <div class=\"star\"></div>
        <div class=\"star\"></div>
        <div class=\"star\"></div>
        <div class=\"star\"></div>
        <div class=\"star\"></div>
        <div class=\"star\"></div>
        <div class=\"star\"></div>
        <div class=\"star\"></div>
        <div class=\"star\"></div>
        <div class=\"star\"></div>
        <div class=\"star\"></div>
        <div class=\"star\"></div>
        <div class=\"star\"></div>
        <div class=\"star\"></div>
        <div class=\"star\"></div>
        <div class=\"star\"></div>
        <div class=\"star\"></div>
      </div>
    </div>
    <!-- plugins:js -->
    <!-- endinject -->
    <!-- inject:js -->

    <!-- endinject -->
  </body>
</html>
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
        return "registration/register.html.twig";
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
        return array (  195 => 66,  190 => 64,  176 => 53,  170 => 50,  164 => 47,  158 => 44,  152 => 41,  147 => 39,  139 => 34,  129 => 26,  116 => 25,  93 => 7,  82 => 25,  76 => 22,  58 => 7,  50 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <!-- Required meta tags -->
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <title>{% block title %}Inscription{% endblock %}</title>
    <!-- plugins:css -->
   
    <!-- endinject -->
    <!-- inject:css -->
    <style>
  /* Personnaliser l'apparence du message d'erreur du champ email */
.form-group {
    color:rgb(162, 76, 10);  /* Changez la couleur des erreurs à rouge */
  /* Met en gras le message d'erreur */
}


</style>

    <link rel=\"stylesheet\" href=\"{{asset('build/assets/css/register.css')}}\">
    <!-- endinject -->
  </head>
  {% block body %}
  <body>
    <div class=\"container-scroller\">
      <div class=\"container-fluid page-body-wrapper full-page-wrapper\">
        <div class=\"content-wrapper d-flex align-items-center auth px-0\">
          <div class=\"row w-100 mx-0\">
            <div class=\"col-lg-4 mx-auto\">
              <div class=\"auth-form-light text-left py-5 px-4 px-sm-5\">
                <div class=\"brand-logo\">
                  <img src=\"{{asset('build/assets/images/logo 1.svg')}}\" alt=\"logo\">
                </div>
                <h4>Nouveau ici ?</h4>
                <h6 class=\"font-weight-light\">S'inscrire. Cela ne prend que quelques étapes.</h6>
                <form novalidate method=\"post\">
                  {{ form_start(form) }}
                  <div class=\"form-group\">
                    {{ form_row(form.email, {'attr': {'class': 'form-control form-control-lg', 'placeholder': 'Email'}}) }}
                  </div>
                  <div class=\"form-group\">
                    {{ form_row(form.nom, {'attr': {'class': 'form-control form-control-lg', 'placeholder': 'Nom'}}) }}
                  </div>
                  <div class=\"form-group\">
                    {{ form_row(form.prenom, {'attr': {'class': 'form-control form-control-lg', 'placeholder': 'Prénom'}}) }}
                  </div>
                  <div class=\"form-group\">
                    {{ form_row(form.password, {'attr': {'class': 'form-control form-control-lg', 'placeholder': 'Mot de passe'}}) }}
                  </div>
                  <div class=\"form-group\">
                    {{ form_row(form.confirmPassword, {'attr': {'class': 'form-control form-control-lg', 'placeholder': 'Confirmer le mot de passe'}}) }}
                  </div>
                  <div class=\"mb-4\">
                    <div class=\"form-check\">
                      <label class=\"form-check-label text-muted\">
                        <input type=\"checkbox\" class=\"form-check-input\"> J'accepte tous les Termes et Conditions.</label>
                    </div>
                  </div>
                  <div class=\"mt-3 d-grid gap-2\">
                    <button type=\"submit\" class=\"btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn\">S'inscrire</button>
                  </div>
                  <div class=\"text-center mt-4 font-weight-light\">Vous avez déjà un compte? <a href=\"{{ path('app_login') }}\" class=\"text-primary\">Connectez-vous.</a>
                  </div>
                  {{ form_end(form) }}
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Les étoiles en dehors du conteneur principal -->
      <div class=\"stars\">
        <div class=\"star\"></div>
        <div class=\"star\"></div>
        <div class=\"star\"></div>
        <div class=\"star\"></div>
        <div class=\"star\"></div>
        <div class=\"star\"></div>
        <div class=\"star\"></div>
        <div class=\"star\"></div>
        <div class=\"star\"></div>
        <div class=\"star\"></div>
        <div class=\"star\"></div>
        <div class=\"star\"></div>
        <div class=\"star\"></div>
        <div class=\"star\"></div>
        <div class=\"star\"></div>
        <div class=\"star\"></div>
        <div class=\"star\"></div>
        <div class=\"star\"></div>
        <div class=\"star\"></div>
        <div class=\"star\"></div>
        <div class=\"star\"></div>
        <div class=\"star\"></div>
        <div class=\"star\"></div>
        <div class=\"star\"></div>
        <div class=\"star\"></div>
        <div class=\"star\"></div>
        <div class=\"star\"></div>
        <div class=\"star\"></div>
        <div class=\"star\"></div>
      </div>
    </div>
    <!-- plugins:js -->
    <!-- endinject -->
    <!-- inject:js -->

    <!-- endinject -->
  </body>
</html>
{% endblock %}", "registration/register.html.twig", "C:\\Users\\Lenovo\\WebProject\\templates\\registration\\register.html.twig");
    }
}
