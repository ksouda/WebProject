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

/* frontoffice/HomePage/client/reclamation/liste.html.twig */
class __TwigTemplate_164c9041cfcc43148c96ddda98526b57 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "frontoffice/HomePage/client/reclamation/liste.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "frontoffice/HomePage/client/reclamation/liste.html.twig"));

        // line 1
        yield from $this->unwrap()->yieldBlock('head', $context, $blocks);
        // line 153
        yield "
";
        // line 154
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 251
        yield "
";
        
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
        yield "  
        <meta charset=\"UTF-8\">
        <title>";
        // line 4
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>
        <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">
        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text><text y=%221.3em%22 x=%220.2em%22 font-size=%2276%22 fill=%22%23fff%22>sf</text></svg>\">
        
        <!-- Favicons -->
        <link href=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/front/img/favicon.png"), "html", null, true);
        yield "\" rel=\"icon\">

        <!-- Fonts -->
        <link href=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://fonts.googleapis.com"), "html", null, true);
        yield "\" rel=\"preconnect\">
        <link href=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://fonts.gstatic.com"), "html", null, true);
        yield "\" rel=\"preconnect\" crossorigin>
        <link href=\"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"), "html", null, true);
        yield "\" rel=\"stylesheet\">
        <!-- Font Awesome CDN -->
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css\">

        <!-- Vendor CSS Files -->
        <link href=\"https://unpkg.com/aos@2.3.1/dist/aos.css\" rel=\"stylesheet\">
        <link href=\"";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/front/vendor/aos/aos.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
        <link href=\"";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/front/vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
        <link href=\"";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/front/vendor/bootstrap-icons/bootstrap-icons.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
        <link href=\"";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/front/vendor/glightbox/css/glightbox.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
        <link href=\"";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/front/vendor/swiper/swiper-bundle.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
        <link rel=\"stylesheet\" href=\"";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"), "html", null, true);
        yield "\">
        

        <!-- Main CSS File -->
        <link href=\"";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/front/css/main.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
          <link href=\"";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/css2/flipcard.css"), "html", null, true);
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

    // line 4
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

        yield "Symfony Maniac";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 154
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

        // line 155
        yield "   <header id=\"header\" class=\"header d-flex align-items-center fixed-top\">
            <div class=\"container-fluid container-xl position-relative d-flex align-items-center\">
            <a href=\"/\" class=\"logo d-flex align-items-center me-auto\">
                 <img src=\"";
        // line 158
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/front/img/logo 2.png"), "html", null, true);
        yield "\" alt=\"\">
            </a>

            <nav id=\"navmenu\" class=\"navmenu\">
                <ul>
                <li><a href=\"";
        // line 163
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"active\">Accueil</a></li>
                <li class=\"dropdown\"><a href=\"#\"><span>Boutique</span> <i class=\"bi bi-chevron-down toggle-dropdown\"></i></a>
                    <ul>
                        <li><a href=\"#\">Produits</a></li>
                        <li><a href=\"";
        // line 167
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_front_materiaux");
        yield "\">Matériaux</a></li>
                    </ul>
                </li>
                <li><a href=\"";
        // line 170
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_front_atelier");
        yield "\">Ateliers en ligne</a></li>
                <li><a href=\"";
        // line 171
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_liste_client");
        yield "\">Réclamation</a></li>
                <li><a href=\"#\"><i class=\"fas fa-shopping-cart\" style=\"font-size: 20px\" ></i></a></li>
                <li class=\"dropdown\">
                    <a href=\"#\" id=\"toggleSidebar\">
                        <i class=\"fas fa-user-circle\" style=\"font-size: 25px\"></i> <!-- Icône de compte -->
                    </a>
                    <ul>
                        <li><a href=\"";
        // line 178
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profil_page", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 178, $this->source); })()), "user", [], "any", false, false, false, 178), "id", [], "any", false, false, false, 178)]), "html", null, true);
        yield "\">Profil</a></li>
                        <li class=\"dropdown\"><a href=\"#\"><span>Historique</span> <i class=\"bi bi-chevron-down toggle-dropdown\"></i></a>
                            <ul>
                            <li><a href=\"#\">Commandes</a></li>
                            <li><a href=\"";
        // line 182
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_liste_client");
        yield "\">Réclamations</a></li>
                            <li><a href=\"";
        // line 183
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_inscriptions");
        yield "\">Aeliers en ligne</a></li>
                            </ul>
                        </li>
                        <li><a href=\"";
        // line 186
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\">Déconnexion</a></li>
                    </ul>
                </li>
                </ul>
            </nav>
            </div>
        </header>
        

    <div class=\"container\">
        <h1>Liste des Réclamations</h1>
        <hr class=\"separator\">
        <div class=\"table-responsive text-center\">
            <table class=\"table\">
                <thead>
                    <tr>
                        <th style=\"width: 20%;\">ID</th>
                        <th style=\"width: 20%;\">Titre</th>
                        <th style=\"width: 15%;\">Statut</th>
                        <th style=\"width: 20%;\">Date</th>
                        <th style=\"width: 15%;\">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 210
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["reclamations"]) || array_key_exists("reclamations", $context) ? $context["reclamations"] : (function () { throw new RuntimeError('Variable "reclamations" does not exist.', 210, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["reclamation"]) {
            yield "  
                        <tr>
                            <td>";
            // line 212
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "id", [], "any", false, false, false, 212), "html", null, true);
            yield "</td>
                            <td>";
            // line 213
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "titre", [], "any", false, false, false, 213), "html", null, true);
            yield "</td>
                            <!-- <td>";
            // line 214
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "description", [], "any", false, false, false, 214), "html", null, true);
            yield "</td> -->
                            <td>";
            // line 215
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "statut", [], "any", false, false, false, 215), "html", null, true);
            yield "</td>
                            <td>";
            // line 216
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "dateReclamation", [], "any", false, false, false, 216), "Y-m-d"), "html", null, true);
            yield "</td>
                            <td>
                                <a href=\"";
            // line 218
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_consulter_client", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "id", [], "any", false, false, false, 218)]), "html", null, true);
            yield "\" class=\"btn btn-consulter btn-sm\">Consulter</a>
                            </td>
                        </tr>
                    ";
            $context['_iterated'] = true;
        }
        // line 225
        if (!$context['_iterated']) {
            // line 222
            yield "                        <tr>
                            <td colspan=\"6\">Aucune réclamation trouvée.</td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['reclamation'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 226
        yield "                </tbody>
            </table>
        </div>
        <h2 class=\"text-center\">Ajouter une Nouvelle Réclamation</h2>
        <div class=\"text-center\"> <!-- Ajouter une div pour centrer le bouton -->
        <form novalidate method=\"post\">
            ";
        // line 232
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 232, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        yield "
                <div class=\"mb-3\">
                    ";
        // line 234
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 234, $this->source); })()), "titre", [], "any", false, false, false, 234), 'label');
        yield "
                    ";
        // line 235
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 235, $this->source); })()), "titre", [], "any", false, false, false, 235), 'widget');
        yield "
                    ";
        // line 236
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 236, $this->source); })()), "titre", [], "any", false, false, false, 236), 'errors');
        yield "
                </div>

                <div class=\"mb-3\">
                    ";
        // line 240
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 240, $this->source); })()), "description", [], "any", false, false, false, 240), 'label');
        yield "
                    ";
        // line 241
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 241, $this->source); })()), "description", [], "any", false, false, false, 241), 'widget');
        yield "
                    ";
        // line 242
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 242, $this->source); })()), "description", [], "any", false, false, false, 242), 'errors');
        yield "
                </div>

                <button type=\"submit\" class=\"btn btn-primary\">Ajouter</button>
            ";
        // line 246
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 246, $this->source); })()), 'form_end');
        yield "
           </form >
        </div>
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
        return "frontoffice/HomePage/client/reclamation/liste.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  494 => 246,  487 => 242,  483 => 241,  479 => 240,  472 => 236,  468 => 235,  464 => 234,  459 => 232,  451 => 226,  442 => 222,  440 => 225,  432 => 218,  427 => 216,  423 => 215,  419 => 214,  415 => 213,  411 => 212,  403 => 210,  376 => 186,  370 => 183,  366 => 182,  359 => 178,  349 => 171,  345 => 170,  339 => 167,  332 => 163,  324 => 158,  319 => 155,  306 => 154,  283 => 4,  149 => 30,  145 => 29,  138 => 25,  134 => 24,  130 => 23,  126 => 22,  122 => 21,  118 => 20,  109 => 14,  105 => 13,  101 => 12,  95 => 9,  87 => 4,  83 => 2,  70 => 1,  58 => 251,  56 => 154,  53 => 153,  51 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% block head %}
  
        <meta charset=\"UTF-8\">
        <title>{% block title %}Symfony Maniac{% endblock %}</title>
        <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">
        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text><text y=%221.3em%22 x=%220.2em%22 font-size=%2276%22 fill=%22%23fff%22>sf</text></svg>\">
        
        <!-- Favicons -->
        <link href=\"{{asset('build/front/img/favicon.png')}}\" rel=\"icon\">

        <!-- Fonts -->
        <link href=\"{{asset('https://fonts.googleapis.com')}}\" rel=\"preconnect\">
        <link href=\"{{asset('https://fonts.gstatic.com')}}\" rel=\"preconnect\" crossorigin>
        <link href=\"{{asset('https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap')}}\" rel=\"stylesheet\">
        <!-- Font Awesome CDN -->
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css\">

        <!-- Vendor CSS Files -->
        <link href=\"https://unpkg.com/aos@2.3.1/dist/aos.css\" rel=\"stylesheet\">
        <link href=\"{{asset('build/front/vendor/aos/aos.css')}}\" rel=\"stylesheet\">
        <link href=\"{{asset('build/front/vendor/bootstrap/css/bootstrap.min.css')}}\" rel=\"stylesheet\">
        <link href=\"{{asset('build/front/vendor/bootstrap-icons/bootstrap-icons.css')}}\" rel=\"stylesheet\">
        <link href=\"{{asset('build/front/vendor/glightbox/css/glightbox.min.css')}}\" rel=\"stylesheet\">
        <link href=\"{{asset('build/front/vendor/swiper/swiper-bundle.min.css')}}\" rel=\"stylesheet\">
        <link rel=\"stylesheet\" href=\"{{asset('https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css')}}\">
        

        <!-- Main CSS File -->
        <link href=\"{{asset('build/front/css/main.css')}}\" rel=\"stylesheet\">
          <link href=\"{{asset('build/css2/flipcard.css')}}\" rel=\"stylesheet\">
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

{% block body %}
   <header id=\"header\" class=\"header d-flex align-items-center fixed-top\">
            <div class=\"container-fluid container-xl position-relative d-flex align-items-center\">
            <a href=\"/\" class=\"logo d-flex align-items-center me-auto\">
                 <img src=\"{{asset('build/front/img/logo 2.png')}}\" alt=\"\">
            </a>

            <nav id=\"navmenu\" class=\"navmenu\">
                <ul>
                <li><a href=\"{{ path('app_home') }}\" class=\"active\">Accueil</a></li>
                <li class=\"dropdown\"><a href=\"#\"><span>Boutique</span> <i class=\"bi bi-chevron-down toggle-dropdown\"></i></a>
                    <ul>
                        <li><a href=\"#\">Produits</a></li>
                        <li><a href=\"{{ path('app_front_materiaux') }}\">Matériaux</a></li>
                    </ul>
                </li>
                <li><a href=\"{{path('app_front_atelier') }}\">Ateliers en ligne</a></li>
                <li><a href=\"{{path('app_reclamation_liste_client') }}\">Réclamation</a></li>
                <li><a href=\"#\"><i class=\"fas fa-shopping-cart\" style=\"font-size: 20px\" ></i></a></li>
                <li class=\"dropdown\">
                    <a href=\"#\" id=\"toggleSidebar\">
                        <i class=\"fas fa-user-circle\" style=\"font-size: 25px\"></i> <!-- Icône de compte -->
                    </a>
                    <ul>
                        <li><a href=\"{{ path('profil_page', { 'id': app.user.id }) }}\">Profil</a></li>
                        <li class=\"dropdown\"><a href=\"#\"><span>Historique</span> <i class=\"bi bi-chevron-down toggle-dropdown\"></i></a>
                            <ul>
                            <li><a href=\"#\">Commandes</a></li>
                            <li><a href=\"{{path('app_reclamation_liste_client') }}\">Réclamations</a></li>
                            <li><a href=\"{{path('app_inscriptions') }}\">Aeliers en ligne</a></li>
                            </ul>
                        </li>
                        <li><a href=\"{{ path('app_logout') }}\">Déconnexion</a></li>
                    </ul>
                </li>
                </ul>
            </nav>
            </div>
        </header>
        

    <div class=\"container\">
        <h1>Liste des Réclamations</h1>
        <hr class=\"separator\">
        <div class=\"table-responsive text-center\">
            <table class=\"table\">
                <thead>
                    <tr>
                        <th style=\"width: 20%;\">ID</th>
                        <th style=\"width: 20%;\">Titre</th>
                        <th style=\"width: 15%;\">Statut</th>
                        <th style=\"width: 20%;\">Date</th>
                        <th style=\"width: 15%;\">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    {% for reclamation in reclamations %}  
                        <tr>
                            <td>{{ reclamation.id }}</td>
                            <td>{{ reclamation.titre }}</td>
                            <!-- <td>{{ reclamation.description }}</td> -->
                            <td>{{ reclamation.statut }}</td>
                            <td>{{ reclamation.dateReclamation|date('Y-m-d') }}</td>
                            <td>
                                <a href=\"{{ path('app_reclamation_consulter_client', {'id': reclamation.id}) }}\" class=\"btn btn-consulter btn-sm\">Consulter</a>
                            </td>
                        </tr>
                    {% else %}
                        <tr>
                            <td colspan=\"6\">Aucune réclamation trouvée.</td>
                        </tr>
                    {% endfor %}
                </tbody>
            </table>
        </div>
        <h2 class=\"text-center\">Ajouter une Nouvelle Réclamation</h2>
        <div class=\"text-center\"> <!-- Ajouter une div pour centrer le bouton -->
        <form novalidate method=\"post\">
            {{ form_start(form, {'attr': {'novalidate': 'novalidate'}}) }}
                <div class=\"mb-3\">
                    {{ form_label(form.titre) }}
                    {{ form_widget(form.titre) }}
                    {{ form_errors(form.titre) }}
                </div>

                <div class=\"mb-3\">
                    {{ form_label(form.description) }}
                    {{ form_widget(form.description) }}
                    {{ form_errors(form.description) }}
                </div>

                <button type=\"submit\" class=\"btn btn-primary\">Ajouter</button>
            {{ form_end(form) }}
           </form >
        </div>
    </div>
{% endblock %}

", "frontoffice/HomePage/client/reclamation/liste.html.twig", "C:\\Users\\Lenovo\\WebProject\\templates\\FrontOffice\\HomePage\\client\\reclamation\\liste.html.twig");
    }
}
