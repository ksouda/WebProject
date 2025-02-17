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

/* login/index.html.twig */
class __TwigTemplate_5ea07c09b388b995fb9659583b3b0c48 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "login/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "login/index.html.twig"));

        // line 1
        yield "

<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <!-- Required meta tags -->
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <title>";
        // line 9
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        // line 10
        yield "</title>
    <!-- plugins:css -->
   
    <!-- endinject -->
    <!-- inject:css -->
    <link rel=\"stylesheet\" href=\"";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/assets/css/register.css"), "html", null, true);
        yield "\">
    <!-- endinject -->
  </head>
 
";
        // line 20
        yield "



";
        // line 24
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 9
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

        yield "Connexion";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 24
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

        // line 25
        yield "   <div class=\"container-scroller\">
      <div class=\"container-fluid page-body-wrapper full-page-wrapper\">
        <div class=\"content-wrapper d-flex align-items-center auth px-0\">
          <div class=\"row w-100 mx-0\">
            <div class=\"col-lg-4 mx-auto\">
              <div class=\"auth-form-light text-left py-5 px-4 px-sm-5\">
                <div class=\"brand-logo\">
                  <img src=\"";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/assets/images/logo 1.svg"), "html", null, true);
        yield "\" alt=\"logo\">
                </div>
        <h4>Bonjour !</h4>
        <h6 class=\"font-weight-light\">Connectez-vous pour continuer.</h6>
        ";
        // line 37
        yield "        ";
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 37, $this->source); })())) {
            // line 38
            yield "            <div class=\"alert alert-danger mt-3\">
                ";
            // line 39
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 39, $this->source); })()), "messageKey", [], "any", false, false, false, 39), CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 39, $this->source); })()), "messageData", [], "any", false, false, false, 39), "security"), "html", null, true);
            yield "
            </div>
        ";
        }
        // line 42
        yield "
        ";
        // line 44
        yield "        <form action=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\" method=\"post\" class=\"mt-4\">
            ";
        // line 46
        yield "            <div class=\"form-group\">
                <label for=\"username\">Email:</label>
                <input type=\"email\" 
                    class=\"form-control form-control-lg\"
                    id=\"email\" 
                    name=\"email\" 
                    value=\"";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 52, $this->source); })()), "html", null, true);
        yield "\" 
                    class=\"form-control\" 
                    placeholder=\"Votre email\" 
                    required>
            </div>

            ";
        // line 59
        yield "            <div class=\"form-group\">
                <label for=\"password\">Mot de passe:</label>
                <input type=\"password\" 
                       class=\"form-control form-control-lg\"
                       id=\"password\" 
                       name=\"_password\" 
                       class=\"form-control\" 
                       placeholder=\"Votre mot de passe\" 
                       required>
            </div>

            ";
        // line 71
        yield "            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        yield "\">

            ";
        // line 74
        yield "            <button type=\"submit\" class=\"btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn\">Se connecter</button>
         
              <div class=\"text-center mt-4 font-weight-light\"> Vous n'avez pas de compte ?  <a href=\"";
        // line 76
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        yield "\" class=\"text-primary\"> Créer un compte</a>
              </div>
       </form>

        ";
        // line 81
        yield "        ";
        // line 84
        yield " </div>
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
        return "login/index.html.twig";
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
        return array (  214 => 84,  212 => 81,  205 => 76,  201 => 74,  195 => 71,  182 => 59,  173 => 52,  165 => 46,  160 => 44,  157 => 42,  151 => 39,  148 => 38,  145 => 37,  138 => 32,  129 => 25,  116 => 24,  93 => 9,  82 => 24,  76 => 20,  69 => 15,  62 => 10,  60 => 9,  50 => 1,);
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
    <title>{% block title %}Connexion{% endblock %}
</title>
    <!-- plugins:css -->
   
    <!-- endinject -->
    <!-- inject:css -->
    <link rel=\"stylesheet\" href=\"{{asset('build/assets/css/register.css')}}\">
    <!-- endinject -->
  </head>
 
{# templates/login/index.html.twig #}




{% block body %}
   <div class=\"container-scroller\">
      <div class=\"container-fluid page-body-wrapper full-page-wrapper\">
        <div class=\"content-wrapper d-flex align-items-center auth px-0\">
          <div class=\"row w-100 mx-0\">
            <div class=\"col-lg-4 mx-auto\">
              <div class=\"auth-form-light text-left py-5 px-4 px-sm-5\">
                <div class=\"brand-logo\">
                  <img src=\"{{asset('build/assets/images/logo 1.svg')}}\" alt=\"logo\">
                </div>
        <h4>Bonjour !</h4>
        <h6 class=\"font-weight-light\">Connectez-vous pour continuer.</h6>
        {# Afficher les erreurs de connexion #}
        {% if error %}
            <div class=\"alert alert-danger mt-3\">
                {{ error.messageKey|trans(error.messageData, 'security') }}
            </div>
        {% endif %}

        {# Formulaire de connexion #}
        <form action=\"{{ path('app_login') }}\" method=\"post\" class=\"mt-4\">
            {# Champ Email (utilisé comme _username) #}
            <div class=\"form-group\">
                <label for=\"username\">Email:</label>
                <input type=\"email\" 
                    class=\"form-control form-control-lg\"
                    id=\"email\" 
                    name=\"email\" 
                    value=\"{{ last_username }}\" 
                    class=\"form-control\" 
                    placeholder=\"Votre email\" 
                    required>
            </div>

            {# Champ Mot de passe #}
            <div class=\"form-group\">
                <label for=\"password\">Mot de passe:</label>
                <input type=\"password\" 
                       class=\"form-control form-control-lg\"
                       id=\"password\" 
                       name=\"_password\" 
                       class=\"form-control\" 
                       placeholder=\"Votre mot de passe\" 
                       required>
            </div>

            {# Jeton CSRF #}
            <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">

            {# Bouton de soumission #}
            <button type=\"submit\" class=\"btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn\">Se connecter</button>
         
              <div class=\"text-center mt-4 font-weight-light\"> Vous n'avez pas de compte ?  <a href=\"{{ path('app_register') }}\" class=\"text-primary\"> Créer un compte</a>
              </div>
       </form>

        {# Liens supplémentaires (optionnels) #}
        {# <div class=\"mt-3\">
            <a href=\"{{ path('app_forgot_password') }}\">Mot de passe oublié ?</a>
        </div> #}
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
{% endblock %}", "login/index.html.twig", "C:\\Users\\Lenovo\\WebProject\\templates\\login\\index.html.twig");
    }
}
