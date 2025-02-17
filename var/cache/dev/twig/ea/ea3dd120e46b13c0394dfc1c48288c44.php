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

/* frontoffice/HomePage/client/reclamation/consulter.html.twig */
class __TwigTemplate_fdcfc7bf5e9d79f213cd6e25c0d35045 extends Template
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
            'head' => [$this, 'block_head'],
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "frontoffice/HomePage/client/reclamation/consulter.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "frontoffice/HomePage/client/reclamation/consulter.html.twig"));

        // line 1
        yield from $this->unwrap()->yieldBlock('head', $context, $blocks);
        // line 143
        yield "

";
        // line 145
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        // line 146
        yield "
";
        // line 147
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 1
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_head(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        // line 2
        yield "    <link rel=\"stylesheet\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/front/css/main.css"), "html", null, true);
        yield "\">

    <!-- Favicons -->
    <link href=\"";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/favicon.png"), "html", null, true);
        yield "\" rel=\"icon\">

    <!-- Fonts -->
    <link href=\"https://fonts.googleapis.com\" rel=\"preconnect\">
    <link href=\"https://fonts.gstatic.com\" rel=\"preconnect\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&family=Poppins:wght@100;200;300;400;500;600;700&display=swap\" rel=\"stylesheet\">

    <!-- Vendor CSS Files -->
    <link href=\"https://unpkg.com/aos@2.3.1/dist/aos.css\" rel=\"stylesheet\">
    <link href=\"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/front/vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
    <link href=\"";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/front/vendor/bootstrap-icons/bootstrap-icons.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
    <link href=\"";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/front/vendor/glightbox/css/glightbox.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
    <link href=\"";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/front/vendor/swiper/swiper-bundle.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">

    <!-- Main CSS File -->
    <link href=\"";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/front/css/main.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
    <style>

/*  ==========LISTE RECLAMATION===============*/

/* titre liste des reclamation sous navbar  */
.container {
  margin-top: 110px; 
}

/* centrer le titre */
.container {
  text-align: center; 
}

h1, h2 {
  margin: 20px 0; 
}

/* Centre horizontalement btn Ajouter */
.text-center {
  display: flex; /* Utilise le modèle flex */
  justify-content: center; 
}

/* Ajoute un espace au-dessus du bouton */
button {
  margin-top: 20px; 
}

.btn-consulter {
  background-color: #8f491c; /* Utilisez le code couleur de votre bouton Ajouter */
  color: white; /* Ajustez la couleur du texte si nécessaire */
}

/* Pour ajouter l'effet de survol */
.btn-consulter:hover {
  background-color: #8f491c; /* Ajustez la couleur au survol si nécessaire */
}

.table {
  width: 100%; /* Occupe 100% de la largeur du conteneur */
  max-width: 1000px; /* Optionnel : pour limiter la largeur maximale */
  margin: 0 auto; /* Centre le tableau */
}

.table-responsive {
  width: 100%; /* Remplit toute la largeur du conteneur */
  max-width: 1000px; /* Limite la largeur maximale si nécessaire */
  margin: 0 auto; /* Centre la div */
}

.btn-primary {
  background-color: #d6b29b; /* Couleur bleu par défaut */
  border-color: #d6b29b; /* Correspond à la couleur de fond */
}

.btn-danger {
  background-color: #8f1c1c; /* Couleur rouge par défaut */
  border-color: #8f1c1c; /* Correspond à la couleur de fond */
}

.btn-secondary {
  background-color: #d6b29b; /* Couleur gris par défaut */
  border-color: #d6b29b; /* Correspond à la couleur de fond */
}

.btn {
  width: 150px; /* Réglez cette valeur selon vos besoins */
  height: 40px; /* Ajustez la hauteur si nécessaire */
}

.btn-spacing {
  margin-left: 10px; /* Ajustez cette valeur selon l'espacement désiré */
}

.table td {
  line-height: 1.5; /* Augmente l'espacement entre les lignes */
}

.table {
  width: 100%; /* Assurez-vous que le tableau prend toute la largeur du conteneur */
}

.table th, .table td {
  text-align: left; /* Alignez le texte à gauche */
  padding: 10px; /* Ajoutez du padding pour l'espacement */
}

.table tbody tr td {
  overflow-wrap: break-word; /* Permet au texte de passer à la ligne */
  max-width: 200px; /* Limiter la largeur de la cellule */
}

.table td {
  overflow-wrap: break-word; /* Permet au texte de passer à la ligne */
  max-width: 250px; /* Ajustez cette valeur selon vos besoins */
}
/*================MODIFIER RECLAMATION============================*/



textarea {
    width: 100%; 
    max-width: 600px; 
    height: 200px; 
    padding: 100px; 
    resize: none; 
}

.form-group {
    margin-bottom: 15px; 
}

.btn {
    margin-top: 10px; 
    padding: 10px 20px; 
    font-size: 16px; 
}


    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 145
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

        yield "Consulter Réclamation";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 147
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

        // line 148
        yield "
    <header id=\"header\" class=\"header d-flex align-items-center fixed-top\">
        <div class=\"container-fluid container-xl position-relative d-flex align-items-center\">
        <a href=\"/\" class=\"logo d-flex align-items-center me-auto\">
            <img src=\"";
        // line 152
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/front/img/logo 2.png"), "html", null, true);
        yield "\" alt=\"Logo\">
        </a>

        <nav id=\"navmenu\" class=\"navmenu\">
            <ul>
            <li><a href=\"#hero\" class=\"active\">Accueil</a></li>
            <li class=\"dropdown\"><a href=\"#\"><span>Boutique</span> <i class=\"bi bi-chevron-down toggle-dropdown\"></i></a>
                <ul>
                    <li><a href=\"#\">Produits</a></li>
                    <li><a href=\"#\">Matériaux</a></li>
                </ul>
            </li>
            <li><a href=\"#\">Ateliers en ligne</a></li>
            <li><a href=\"";
        // line 165
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_liste_client");
        yield "\">Réclamation</a></li>
            <li><a href=\"#\"><i class=\"fas fa-shopping-cart\" style=\"font-size: 20px\" ></i></a></li>
            <li class=\"dropdown\">
                <a href=\"#\" id=\"toggleSidebar\">
                    <i class=\"fas fa-user-circle\" style=\"font-size: 25px\"></i> <!-- Icône de compte -->
                </a>
                <ul>
                    <li><a href=\"#\">Profil</a></li>
                    <li class=\"dropdown\"><a href=\"#\"><span>Historique</span> <i class=\"bi bi-chevron-down toggle-dropdown\"></i></a>
                        <ul>
                        <li><a href=\"#\">Commandes</a></li>
                        <li><a href=\"";
        // line 176
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_liste_client");
        yield "\">Réclamation</a></li>
                        <li><a href=\"#\">Aeliers en ligne</a></li>
                        </ul>
                    </li>
                    <li><a href=\"#\">Déconnexion</a></li>
                </ul>
            </li>
            </ul>
        </nav>
        </div>
    </header>
    <div class=\"container\">
    <h1 class=\"text-center\">Détails de la Réclamation</h1> <!-- Centrer le titre -->
    
    <div class=\"table-responsive text-center\"> 
        <div class=\"table-responsive text-center\">
            <table class=\"table table-bordered\"> 
            <tbody>
                <tr>
                    <th>ID :</th>
                    <td>";
        // line 196
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 196, $this->source); })()), "id", [], "any", false, false, false, 196), "html", null, true);
        yield "</td>
                </tr>
                <tr>
                    <th>Titre :</th>
                    <td>";
        // line 200
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 200, $this->source); })()), "titre", [], "any", false, false, false, 200), "html", null, true);
        yield "</td>
                </tr>
                <tr>
                    <th>Description :</th>
                    <td>";
        // line 204
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 204, $this->source); })()), "description", [], "any", false, false, false, 204), "html", null, true);
        yield "</td>
                </tr>
                <tr>
                    <th>Statut :</th>
                    <td>";
        // line 208
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 208, $this->source); })()), "statut", [], "any", false, false, false, 208), "html", null, true);
        yield "</td>
                </tr>
                <tr>
                    <th>Date :</th>
                    <td>";
        // line 212
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 212, $this->source); })()), "dateReclamation", [], "any", false, false, false, 212), "Y-m-d"), "html", null, true);
        yield "</td>
                </tr>
                <tr>
                    <th>Réponse :</th>
                    <td>
                        ";
        // line 217
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 217, $this->source); })()), "reponse", [], "any", false, false, false, 217)) {
            // line 218
            yield "                            ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 218, $this->source); })()), "reponse", [], "any", false, false, false, 218), "description", [], "any", false, false, false, 218), "html", null, true);
            yield "
                            <br>

                        ";
        } else {
            // line 222
            yield "                            <span class=\"text-danger\">Pas encore répondu</span>
                        ";
        }
        // line 224
        yield "                    </td>
                </tr>
                ";
        // line 226
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 226, $this->source); })()), "reponse", [], "any", false, false, false, 226)) {
            // line 227
            yield "                    <tr>
                        <th>Date de la réponse :</th>
                        <td>";
            // line 229
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 229, $this->source); })()), "reponse", [], "any", false, false, false, 229), "dateReponse", [], "any", false, false, false, 229), "Y-m-d"), "html", null, true);
            yield "</td>
                    </tr>
                ";
        }
        // line 232
        yield "            </tbody>
            </table>
        </div>
    </div>

    ";
        // line 237
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 237, $this->source); })()), "statut", [], "any", false, false, false, 237) == "En attente")) {
            // line 238
            yield "        <div class=\"mt-3 text-center\">
            <a href=\"";
            // line 239
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_modifier", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 239, $this->source); })()), "id", [], "any", false, false, false, 239)]), "html", null, true);
            yield "\" class=\"btn btn-secondary mt-3\">Modifier</a>
            
            <form action=\"";
            // line 241
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_supprimer", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 241, $this->source); })()), "id", [], "any", false, false, false, 241)]), "html", null, true);
            yield "\" method=\"post\" style=\"display:inline;\">
                <input type=\"hidden\" name=\"_token\" value=\"";
            // line 242
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 242, $this->source); })()), "id", [], "any", false, false, false, 242))), "html", null, true);
            yield "\">
                <button type=\"submit\" class=\"btn btn-secondary btn-spacing mt-3\" onclick=\"return confirm('Voulez-vous vraiment supprimer cette réclamation ?');\">Supprimer</button>
            </form>
        </div>


    ";
        }
        // line 249
        yield "

    <a href=\"";
        // line 251
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_liste_client");
        yield "\" class=\"btn btn-secondary mt-3\">Retour</a>
    </div>
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
        return "frontoffice/HomePage/client/reclamation/consulter.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  453 => 251,  449 => 249,  439 => 242,  435 => 241,  430 => 239,  427 => 238,  425 => 237,  418 => 232,  412 => 229,  408 => 227,  406 => 226,  402 => 224,  398 => 222,  390 => 218,  388 => 217,  380 => 212,  373 => 208,  366 => 204,  359 => 200,  352 => 196,  329 => 176,  315 => 165,  299 => 152,  293 => 148,  280 => 147,  257 => 145,  123 => 20,  117 => 17,  113 => 16,  109 => 15,  105 => 14,  93 => 5,  86 => 2,  73 => 1,  62 => 147,  59 => 146,  57 => 145,  53 => 143,  51 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% block head %}
    <link rel=\"stylesheet\" href=\"{{ asset('build/front/css/main.css') }}\">

    <!-- Favicons -->
    <link href=\"{{ asset('img/favicon.png') }}\" rel=\"icon\">

    <!-- Fonts -->
    <link href=\"https://fonts.googleapis.com\" rel=\"preconnect\">
    <link href=\"https://fonts.gstatic.com\" rel=\"preconnect\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&family=Poppins:wght@100;200;300;400;500;600;700&display=swap\" rel=\"stylesheet\">

    <!-- Vendor CSS Files -->
    <link href=\"https://unpkg.com/aos@2.3.1/dist/aos.css\" rel=\"stylesheet\">
    <link href=\"{{ asset('build/front/vendor/bootstrap/css/bootstrap.min.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('build/front/vendor/bootstrap-icons/bootstrap-icons.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('build/front/vendor/glightbox/css/glightbox.min.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('build/front/vendor/swiper/swiper-bundle.min.css') }}\" rel=\"stylesheet\">

    <!-- Main CSS File -->
    <link href=\"{{ asset('build/front/css/main.css') }}\" rel=\"stylesheet\">
    <style>

/*  ==========LISTE RECLAMATION===============*/

/* titre liste des reclamation sous navbar  */
.container {
  margin-top: 110px; 
}

/* centrer le titre */
.container {
  text-align: center; 
}

h1, h2 {
  margin: 20px 0; 
}

/* Centre horizontalement btn Ajouter */
.text-center {
  display: flex; /* Utilise le modèle flex */
  justify-content: center; 
}

/* Ajoute un espace au-dessus du bouton */
button {
  margin-top: 20px; 
}

.btn-consulter {
  background-color: #8f491c; /* Utilisez le code couleur de votre bouton Ajouter */
  color: white; /* Ajustez la couleur du texte si nécessaire */
}

/* Pour ajouter l'effet de survol */
.btn-consulter:hover {
  background-color: #8f491c; /* Ajustez la couleur au survol si nécessaire */
}

.table {
  width: 100%; /* Occupe 100% de la largeur du conteneur */
  max-width: 1000px; /* Optionnel : pour limiter la largeur maximale */
  margin: 0 auto; /* Centre le tableau */
}

.table-responsive {
  width: 100%; /* Remplit toute la largeur du conteneur */
  max-width: 1000px; /* Limite la largeur maximale si nécessaire */
  margin: 0 auto; /* Centre la div */
}

.btn-primary {
  background-color: #d6b29b; /* Couleur bleu par défaut */
  border-color: #d6b29b; /* Correspond à la couleur de fond */
}

.btn-danger {
  background-color: #8f1c1c; /* Couleur rouge par défaut */
  border-color: #8f1c1c; /* Correspond à la couleur de fond */
}

.btn-secondary {
  background-color: #d6b29b; /* Couleur gris par défaut */
  border-color: #d6b29b; /* Correspond à la couleur de fond */
}

.btn {
  width: 150px; /* Réglez cette valeur selon vos besoins */
  height: 40px; /* Ajustez la hauteur si nécessaire */
}

.btn-spacing {
  margin-left: 10px; /* Ajustez cette valeur selon l'espacement désiré */
}

.table td {
  line-height: 1.5; /* Augmente l'espacement entre les lignes */
}

.table {
  width: 100%; /* Assurez-vous que le tableau prend toute la largeur du conteneur */
}

.table th, .table td {
  text-align: left; /* Alignez le texte à gauche */
  padding: 10px; /* Ajoutez du padding pour l'espacement */
}

.table tbody tr td {
  overflow-wrap: break-word; /* Permet au texte de passer à la ligne */
  max-width: 200px; /* Limiter la largeur de la cellule */
}

.table td {
  overflow-wrap: break-word; /* Permet au texte de passer à la ligne */
  max-width: 250px; /* Ajustez cette valeur selon vos besoins */
}
/*================MODIFIER RECLAMATION============================*/



textarea {
    width: 100%; 
    max-width: 600px; 
    height: 200px; 
    padding: 100px; 
    resize: none; 
}

.form-group {
    margin-bottom: 15px; 
}

.btn {
    margin-top: 10px; 
    padding: 10px 20px; 
    font-size: 16px; 
}


    </style>
{% endblock %}


{% block title %}Consulter Réclamation{% endblock %}

{% block body %}

    <header id=\"header\" class=\"header d-flex align-items-center fixed-top\">
        <div class=\"container-fluid container-xl position-relative d-flex align-items-center\">
        <a href=\"/\" class=\"logo d-flex align-items-center me-auto\">
            <img src=\"{{ asset('build/front/img/logo 2.png') }}\" alt=\"Logo\">
        </a>

        <nav id=\"navmenu\" class=\"navmenu\">
            <ul>
            <li><a href=\"#hero\" class=\"active\">Accueil</a></li>
            <li class=\"dropdown\"><a href=\"#\"><span>Boutique</span> <i class=\"bi bi-chevron-down toggle-dropdown\"></i></a>
                <ul>
                    <li><a href=\"#\">Produits</a></li>
                    <li><a href=\"#\">Matériaux</a></li>
                </ul>
            </li>
            <li><a href=\"#\">Ateliers en ligne</a></li>
            <li><a href=\"{{ path('app_reclamation_liste_client') }}\">Réclamation</a></li>
            <li><a href=\"#\"><i class=\"fas fa-shopping-cart\" style=\"font-size: 20px\" ></i></a></li>
            <li class=\"dropdown\">
                <a href=\"#\" id=\"toggleSidebar\">
                    <i class=\"fas fa-user-circle\" style=\"font-size: 25px\"></i> <!-- Icône de compte -->
                </a>
                <ul>
                    <li><a href=\"#\">Profil</a></li>
                    <li class=\"dropdown\"><a href=\"#\"><span>Historique</span> <i class=\"bi bi-chevron-down toggle-dropdown\"></i></a>
                        <ul>
                        <li><a href=\"#\">Commandes</a></li>
                        <li><a href=\"{{ path('app_reclamation_liste_client') }}\">Réclamation</a></li>
                        <li><a href=\"#\">Aeliers en ligne</a></li>
                        </ul>
                    </li>
                    <li><a href=\"#\">Déconnexion</a></li>
                </ul>
            </li>
            </ul>
        </nav>
        </div>
    </header>
    <div class=\"container\">
    <h1 class=\"text-center\">Détails de la Réclamation</h1> <!-- Centrer le titre -->
    
    <div class=\"table-responsive text-center\"> 
        <div class=\"table-responsive text-center\">
            <table class=\"table table-bordered\"> 
            <tbody>
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
            </tbody>
            </table>
        </div>
    </div>

    {% if reclamation.statut == 'En attente' %}
        <div class=\"mt-3 text-center\">
            <a href=\"{{ path('app_reclamation_modifier', {'id': reclamation.id}) }}\" class=\"btn btn-secondary mt-3\">Modifier</a>
            
            <form action=\"{{ path('app_reclamation_supprimer', {'id': reclamation.id}) }}\" method=\"post\" style=\"display:inline;\">
                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ reclamation.id) }}\">
                <button type=\"submit\" class=\"btn btn-secondary btn-spacing mt-3\" onclick=\"return confirm('Voulez-vous vraiment supprimer cette réclamation ?');\">Supprimer</button>
            </form>
        </div>


    {% endif %}


    <a href=\"{{ path('app_reclamation_liste_client') }}\" class=\"btn btn-secondary mt-3\">Retour</a>
    </div>
{% endblock %}", "frontoffice/HomePage/client/reclamation/consulter.html.twig", "C:\\Users\\Lenovo\\WebProject\\templates\\FrontOffice\\HomePage\\client\\reclamation\\consulter.html.twig");
    }
}
