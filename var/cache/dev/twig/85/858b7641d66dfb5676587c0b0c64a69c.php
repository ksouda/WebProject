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

/* FrontOffice/HomePage/profiluser.html.twig */
class __TwigTemplate_f82f85d3c012a10a04d9e5a37e072188 extends Template
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
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "FrontOffice/HomePage/basefrontclient.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "FrontOffice/HomePage/profiluser.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "FrontOffice/HomePage/profiluser.html.twig"));

        $this->parent = $this->loadTemplate("FrontOffice/HomePage/basefrontclient.html.twig", "FrontOffice/HomePage/profiluser.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
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

        yield "Mon Profil";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
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

        // line 6
        yield "


<div class=\"container mt-5\">
    <div class=\"row justify-content-center\">
        <div class=\"col-md-9\">
            <div class=\"mrg\">
                <h2 class=\"text-left mb-4 fw-bold text-uppercase\">Mon Profil :</h2>
                <div class=\"card p-5 shadow-lg rounded\">
                    <div class=\"row\">
                        <!-- Colonne de la photo -->
                        <div class=\"col-md-4 d-flex flex-column align-items-center position-relative\">
                            <div class=\"position-relative\">
                                <img src=\"";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("build/assets/images/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 19, $this->source); })()), "user", [], "any", false, false, false, 19), "photo", [], "any", false, false, false, 19))), "html", null, true);
        yield "\" alt=\"Photo de profil\" class=\"rounded-circle border shadow-sm mb-3 profile-img\">
                                
                                <!-- Icône de modification de la photo -->
                                <button class=\"btn btn-light btn-sm border position-absolute edit-photo-btn\" id=\"editPhotoBtn\">
                                    <i class=\"fas fa-pencil-alt\"></i>
                                </button>
                            </div>

                            <!-- Affichage du Nom et Prénom sous la photo -->
                            <h4 class=\"mt-3 text-center fw-bold user-name\">";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 28, $this->source); })()), "nom", [], "any", false, false, false, 28), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 28, $this->source); })()), "prenom", [], "any", false, false, false, 28), "html", null, true);
        yield "</h4>
                        </div>

                        <!-- Colonne de séparation fine -->
                        <div class=\"col-md-1 d-flex align-items-center\">
                            <div class=\"vr\"></div>
                        </div>

                        <!-- Colonne des informations utilisateur -->
                        <div class=\"col-md-7\">
                            <form novalidate method=\"post\" action=\"";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profil_update", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 38, $this->source); })()), "id", [], "any", false, false, false, 38)]), "html", null, true);
        yield "\" class=\"mt-2\">
                                <div class=\"mb-3\">
                                    <label class=\"form-label fw-bold\">Nom</label>
                                    <input type=\"text\" class=\"form-control form-input\" name=\"nom\" value=\"";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 41, $this->source); })()), "nom", [], "any", false, false, false, 41), "html", null, true);
        yield "\">
                                </div>
                                <div class=\"mb-3\">
                                    <label class=\"form-label fw-bold\">Prénom</label>
                                    <input type=\"text\" class=\"form-control form-input\" name=\"prenom\" value=\"";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 45, $this->source); })()), "prenom", [], "any", false, false, false, 45), "html", null, true);
        yield "\">
                                </div>
                                <div class=\"mb-3\">
                                    <label class=\"form-label fw-bold\">Email</label>
                                    <input type=\"email\" class=\"form-control form-input\" name=\"email\" value=\"";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 49, $this->source); })()), "email", [], "any", false, false, false, 49), "html", null, true);
        yield "\">
                                </div>
                                <div class=\"mb-3\">
                                    <label class=\"form-label fw-bold\">Adresse</label>
                                    <input type=\"text\" class=\"form-control form-input\" name=\"adresse\" value=\"";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 53, $this->source); })()), "adresse", [], "any", false, false, false, 53), "html", null, true);
        yield "\">
                                </div>
                                <div class=\"mb-3\">
                                    <label class=\"form-label fw-bold\">Numéro de téléphone</label>
                                    <input type=\"text\" class=\"form-control form-input\" name=\"numTel\" value=\"";
        // line 57
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 57, $this->source); })()), "numTel", [], "any", false, false, false, 57), "html", null, true);
        yield "\">
                                </div>
                                <hr>
                                <h4 class=\"mt-4 text-center\">Modifier le mot de passe</h4>
                                <div class=\"mb-3\">
                                    <label class=\"form-label fw-bold\">Mot de passe actuel</label>
                                    <input type=\"password\" class=\"form-control form-input\" name=\"current_password\" required>
                                </div>
                                <div class=\"mb-3\">
                                    <label class=\"form-label fw-bold\">Nouveau mot de passe</label>
                                    <input type=\"password\" class=\"form-control form-input\" name=\"new_password\">
                                </div>
                                <div class=\"text-center\">
                                    <button type=\"submit\" class=\"btn btn-success w-100\">Enregistrer</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div> <!-- Fin .card -->
            </div> <!-- Fin .mrg -->
        </div>
    </div>
</div>





<!-- Boîte modale pour modifier la photo -->
<div id=\"photoModal\" class=\"modal fade\" tabindex=\"-1\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\"> 
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\">Modifier la photo</h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body\">
                <form id=\"photoForm\" method=\"post\" action=\"";
        // line 94
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("update_photo", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 94, $this->source); })()), "id", [], "any", false, false, false, 94)]), "html", null, true);
        yield "\">
                    <div class=\"mb-3\">
                        <label class=\"form-label\">Nouveau nom de la photo</label>
                        <input type=\"text\" class=\"form-control\" name=\"photo\" id=\"photoInput\" required>
                    </div>
                    <div class=\"text-center\">
                        <button type=\"submit\" class=\"btn btn-success\">Confirmer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Style pour aligner et espacer le nom et prénom sous la photo -->
<style>
    /* Fond flou pour la boîte modale */
    .modal-backdrop {
        backdrop-filter: blur(5px);
    }

    /* Corrige le problème de focus sur le champ */
    #photoModal {
        z-index: 1055 !important;
    }
    /* Espacement pour la section */
    .mrg {
        margin-top: 100px;
        margin-bottom: 50px;
    }

    /* Style de la photo */
    .profile-img {
        width: 200px;
        height: 200px;
        object-fit: cover;
        position: relative;
    }

    /* Bouton de modification de photo */
    .edit-photo-btn {
        position: absolute;
        bottom: 10px;
        right: 10px;
        border-radius: 50%;
        padding: 8px;
        width: 35px;
        height: 35px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: white;
        cursor: pointer;
    }

    /* Style du nom et prénom sous la photo */
    .user-name {
        color: #191e3a;
        font-size: 20px;
    }

    /* Séparation entre la photo et les infos */
    .vr {
        width: 2px;
        background: #ccc;
        height: 100%;
    }

    /* Style des boutons */
    .btn-success {
        background: #ce987e;
        border: none;
        padding: 12px;
        border-radius: 10px;
        font-size: 16px;
    }

    .btn-success:hover {
        background: #8f491c;
    }
    
.btn-close {
        font-size: 1.2rem;
        outline: none;
    }
    .btn-close:hover {
        font-size: 1.5rem;
        outline: none;
        color: #8f491c;

    }
</style>

<!-- Script pour ouvrir la boîte modale -->
<script>
     document.getElementById('editPhotoBtn').addEventListener('click', function() {
        var myModal = new bootstrap.Modal(document.getElementById('photoModal'));
        myModal.show();

        // Attendre que la boîte modale soit bien affichée avant de donner le focus
        setTimeout(() => {
            document.getElementById('photoInput').focus();
        }, 500);
    });
</script>

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
        return "FrontOffice/HomePage/profiluser.html.twig";
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
        return array (  216 => 94,  176 => 57,  169 => 53,  162 => 49,  155 => 45,  148 => 41,  142 => 38,  127 => 28,  115 => 19,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'FrontOffice/HomePage/basefrontclient.html.twig' %}

{% block title %}Mon Profil{% endblock %}

{% block body %}



<div class=\"container mt-5\">
    <div class=\"row justify-content-center\">
        <div class=\"col-md-9\">
            <div class=\"mrg\">
                <h2 class=\"text-left mb-4 fw-bold text-uppercase\">Mon Profil :</h2>
                <div class=\"card p-5 shadow-lg rounded\">
                    <div class=\"row\">
                        <!-- Colonne de la photo -->
                        <div class=\"col-md-4 d-flex flex-column align-items-center position-relative\">
                            <div class=\"position-relative\">
                                <img src=\"{{ asset('build/assets/images/' ~ app.user.photo) }}\" alt=\"Photo de profil\" class=\"rounded-circle border shadow-sm mb-3 profile-img\">
                                
                                <!-- Icône de modification de la photo -->
                                <button class=\"btn btn-light btn-sm border position-absolute edit-photo-btn\" id=\"editPhotoBtn\">
                                    <i class=\"fas fa-pencil-alt\"></i>
                                </button>
                            </div>

                            <!-- Affichage du Nom et Prénom sous la photo -->
                            <h4 class=\"mt-3 text-center fw-bold user-name\">{{ user.nom }} {{ user.prenom }}</h4>
                        </div>

                        <!-- Colonne de séparation fine -->
                        <div class=\"col-md-1 d-flex align-items-center\">
                            <div class=\"vr\"></div>
                        </div>

                        <!-- Colonne des informations utilisateur -->
                        <div class=\"col-md-7\">
                            <form novalidate method=\"post\" action=\"{{ path('profil_update', { 'id': user.id }) }}\" class=\"mt-2\">
                                <div class=\"mb-3\">
                                    <label class=\"form-label fw-bold\">Nom</label>
                                    <input type=\"text\" class=\"form-control form-input\" name=\"nom\" value=\"{{ user.nom }}\">
                                </div>
                                <div class=\"mb-3\">
                                    <label class=\"form-label fw-bold\">Prénom</label>
                                    <input type=\"text\" class=\"form-control form-input\" name=\"prenom\" value=\"{{ user.prenom }}\">
                                </div>
                                <div class=\"mb-3\">
                                    <label class=\"form-label fw-bold\">Email</label>
                                    <input type=\"email\" class=\"form-control form-input\" name=\"email\" value=\"{{ user.email }}\">
                                </div>
                                <div class=\"mb-3\">
                                    <label class=\"form-label fw-bold\">Adresse</label>
                                    <input type=\"text\" class=\"form-control form-input\" name=\"adresse\" value=\"{{ user.adresse }}\">
                                </div>
                                <div class=\"mb-3\">
                                    <label class=\"form-label fw-bold\">Numéro de téléphone</label>
                                    <input type=\"text\" class=\"form-control form-input\" name=\"numTel\" value=\"{{ user.numTel }}\">
                                </div>
                                <hr>
                                <h4 class=\"mt-4 text-center\">Modifier le mot de passe</h4>
                                <div class=\"mb-3\">
                                    <label class=\"form-label fw-bold\">Mot de passe actuel</label>
                                    <input type=\"password\" class=\"form-control form-input\" name=\"current_password\" required>
                                </div>
                                <div class=\"mb-3\">
                                    <label class=\"form-label fw-bold\">Nouveau mot de passe</label>
                                    <input type=\"password\" class=\"form-control form-input\" name=\"new_password\">
                                </div>
                                <div class=\"text-center\">
                                    <button type=\"submit\" class=\"btn btn-success w-100\">Enregistrer</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div> <!-- Fin .card -->
            </div> <!-- Fin .mrg -->
        </div>
    </div>
</div>





<!-- Boîte modale pour modifier la photo -->
<div id=\"photoModal\" class=\"modal fade\" tabindex=\"-1\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\"> 
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\">Modifier la photo</h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body\">
                <form id=\"photoForm\" method=\"post\" action=\"{{ path('update_photo', { 'id': user.id }) }}\">
                    <div class=\"mb-3\">
                        <label class=\"form-label\">Nouveau nom de la photo</label>
                        <input type=\"text\" class=\"form-control\" name=\"photo\" id=\"photoInput\" required>
                    </div>
                    <div class=\"text-center\">
                        <button type=\"submit\" class=\"btn btn-success\">Confirmer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Style pour aligner et espacer le nom et prénom sous la photo -->
<style>
    /* Fond flou pour la boîte modale */
    .modal-backdrop {
        backdrop-filter: blur(5px);
    }

    /* Corrige le problème de focus sur le champ */
    #photoModal {
        z-index: 1055 !important;
    }
    /* Espacement pour la section */
    .mrg {
        margin-top: 100px;
        margin-bottom: 50px;
    }

    /* Style de la photo */
    .profile-img {
        width: 200px;
        height: 200px;
        object-fit: cover;
        position: relative;
    }

    /* Bouton de modification de photo */
    .edit-photo-btn {
        position: absolute;
        bottom: 10px;
        right: 10px;
        border-radius: 50%;
        padding: 8px;
        width: 35px;
        height: 35px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: white;
        cursor: pointer;
    }

    /* Style du nom et prénom sous la photo */
    .user-name {
        color: #191e3a;
        font-size: 20px;
    }

    /* Séparation entre la photo et les infos */
    .vr {
        width: 2px;
        background: #ccc;
        height: 100%;
    }

    /* Style des boutons */
    .btn-success {
        background: #ce987e;
        border: none;
        padding: 12px;
        border-radius: 10px;
        font-size: 16px;
    }

    .btn-success:hover {
        background: #8f491c;
    }
    
.btn-close {
        font-size: 1.2rem;
        outline: none;
    }
    .btn-close:hover {
        font-size: 1.5rem;
        outline: none;
        color: #8f491c;

    }
</style>

<!-- Script pour ouvrir la boîte modale -->
<script>
     document.getElementById('editPhotoBtn').addEventListener('click', function() {
        var myModal = new bootstrap.Modal(document.getElementById('photoModal'));
        myModal.show();

        // Attendre que la boîte modale soit bien affichée avant de donner le focus
        setTimeout(() => {
            document.getElementById('photoInput').focus();
        }, 500);
    });
</script>

{% endblock %}

", "FrontOffice/HomePage/profiluser.html.twig", "C:\\Users\\Lenovo\\WebProject\\templates\\FrontOffice\\HomePage\\profiluser.html.twig");
    }
}
