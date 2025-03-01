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

/* panier/index.html.twig */
class __TwigTemplate_3ea6fb28194d13f763c830375f968653 extends Template
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
        return "FrontOffice/front_client/frontclient.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "panier/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "panier/index.html.twig"));

        $this->parent = $this->loadTemplate("FrontOffice/front_client/frontclient.html.twig", "panier/index.html.twig", 1);
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

        yield "Votre Panier";
        
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
        yield "    <div class=\"container mt-5\">
        <h2 class=\"text-center mb-4\"><i class=\"fas fa-shopping-cart\"></i> <span style=\"color:brown\">Votre Panier</span></h2>

        <!-- ✅ Flash Messages -->
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 10, $this->source); })()), "flashes", ["success"], "method", false, false, false, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 11
            yield "            <div class=\"alert alert-success\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "</div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        yield "        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 13, $this->source); })()), "flashes", ["danger"], "method", false, false, false, 13));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 14
            yield "            <div class=\"alert alert-danger\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "</div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        yield "
        <div class=\"row justify-content-center\">
            ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["lignes"]) || array_key_exists("lignes", $context) ? $context["lignes"] : (function () { throw new RuntimeError('Variable "lignes" does not exist.', 18, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["ligne"]) {
            // line 19
            yield "                <div class=\"col-md-8 mb-4\">
                    <div class=\"card shadow-lg p-4 border-0 rounded\">
                        <div class=\"row g-0 align-items-center\">
                            <!-- Product Image -->
                            <div class=\"col-md-3 text-center\">
                                <img src=\"";
            // line 24
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/uploads/images/logo.png"), "html", null, true);
            yield "\" alt=\"Produit\" class=\"img-fluid rounded\" style=\"max-height: 130px;\">
                            </div>

                            <!-- Product Details -->
                            <div class=\"col-md-5\">
                                <div class=\"card-body\">
                                    <h5 class=\"card-title fw-bold\">";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["ligne"], "idProduit", [], "any", false, false, false, 30), "nomProduit", [], "any", false, false, false, 30), "html", null, true);
            yield "</h5>
                                    <p class=\"card-text\">
                                        <strong>Prix Unitaire:</strong> ";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ligne"], "prixUnitaire", [], "any", false, false, false, 32), "html", null, true);
            yield " TND <br>
                                        <strong>Total:</strong> <span class=\"text-success fw-bold total-price\">";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, $context["ligne"], "prixUnitaire", [], "any", false, false, false, 33) * CoreExtension::getAttribute($this->env, $this->source, $context["ligne"], "quantite", [], "any", false, false, false, 33)), "html", null, true);
            yield " TND</span>
                                    </p>
                                </div>
                            </div>

                            <!-- Inline Modify Form -->
                            <div class=\"col-md-4\">
                                <form class=\"quantite-form d-flex align-items-center\"
                                      data-id=\"";
            // line 41
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ligne"], "id", [], "any", false, false, false, 41), "html", null, true);
            yield "\"
                                      action=\"";
            // line 42
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modifier_quantite", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["ligne"], "id", [], "any", false, false, false, 42)]), "html", null, true);
            yield "\"
                                      method=\"POST\"
                                      novalidate>
                                    <input type=\"number\" name=\"quantite\" class=\"form-control me-2 text-center\" min=\"1\" value=\"";
            // line 45
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ligne"], "quantite", [], "any", false, false, false, 45), "html", null, true);
            yield "\" required>
                                    <button type=\"button\" class=\"btn btn-outline-primary update-btn\">
                                        <i class=\"fas fa-save\"></i>
                                    </button>
                                </form>

                                <a href=\"";
            // line 51
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("supprimer_du_panier", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["ligne"], "id", [], "any", false, false, false, 51)]), "html", null, true);
            yield "\" class=\"btn btn-danger w-100 mt-2\">
                                    <i class=\"fas fa-trash\"></i> Retirer
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['ligne'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        yield "        </div>

        <!-- ✅ \"Valider la Commande\" Button -->
        <div class=\"text-center mt-4\">
            <button class=\"btn btn-success btn-lg px-5\" data-bs-toggle=\"modal\" data-bs-target=\"#commandeModal\">
                <i class=\"fas fa-check\"></i> Valider la Commande
            </button>
        </div>
    </div>

    <!-- ✅ Bootstrap Modal for Command Validation -->
    <div class=\"modal fade\" id=\"commandeModal\" tabindex=\"-1\" aria-labelledby=\"commandeModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\" id=\"commandeModalLabel\">Confirmer votre commande</h5>
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                </div>
                <div class=\"modal-body\">
                    <form id=\"commandeForm\" method=\"post\" action=\"";
        // line 78
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("valider_commande");
        yield "\" novalidate>
                        <div class=\"mb-3\">
                            <label class=\"form-label\">Adresse de Livraison</label>
                            <input type=\"text\" name=\"adresse\" class=\"form-control\" required>
                        </div>
                        <div class=\"mb-3\">
                            <label class=\"form-label\">Méthode de Paiement</label>
                            <select name=\"paiement\" class=\"form-select\" required>
                                <option value=\"Carte Bancaire\">Carte Bancaire</option>
                                <option value=\"Espèces\">Espèces</option>
                                <option value=\"PayPal\">PayPal</option>
                            </select>
                        </div>
                        <div class=\"text-end\">
                            <button type=\"submit\" class=\"btn btn-primary\">Confirmer la Commande</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- ✅ Bootstrap for Styling -->
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css\">
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js\"></script>

    <script>
        document.addEventListener(\"DOMContentLoaded\", function () {
            document.querySelectorAll('.quantite-form').forEach(form => {
                form.addEventListener('submit', function (e) {
                    e.preventDefault(); // Prevent full page reload

                    let formData = new FormData(form);
                    let ligneId = form.getAttribute('data-id');

                    // ✅ Use the correct Symfony path for the request
                    let url = \"";
        // line 114
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modifier_quantite", ["id" => "__ID__"]);
        yield "\".replace('__ID__', ligneId);

                    fetch(url, {
                        method: 'POST',
                        body: formData
                    })
                        .then(response => {
                            if (!response.ok) {
                                throw new Error(\"Erreur HTTP \" + response.status);
                            }
                            return response.json();
                        })
                        .then(data => {
                            if (data.success) {
                                let totalCell = form.closest('.card').querySelector('.total-price');
                                let quantityInput = form.querySelector('input[name=\"quantite\"]');

                                totalCell.textContent = data.total + \" TND\"; // Update total price
                                quantityInput.value = data.quantite; // Update displayed quantity

                                alert(\"Quantité mise à jour !\");
                            } else {
                                alert(\"Erreur: \" + data.message);
                            }
                        })
                        .catch(error => console.error('Erreur:', error));
                });

                // ✅ Ensure button triggers the form submission
                form.querySelector('.update-btn').addEventListener('click', function () {
                    form.dispatchEvent(new Event('submit'));
                });
            });
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
        return "panier/index.html.twig";
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
        return array (  270 => 114,  231 => 78,  210 => 59,  196 => 51,  187 => 45,  181 => 42,  177 => 41,  166 => 33,  162 => 32,  157 => 30,  148 => 24,  141 => 19,  137 => 18,  133 => 16,  124 => 14,  119 => 13,  110 => 11,  106 => 10,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'FrontOffice/front_client/frontclient.html.twig' %}

{% block title %}Votre Panier{% endblock %}

{% block body %}
    <div class=\"container mt-5\">
        <h2 class=\"text-center mb-4\"><i class=\"fas fa-shopping-cart\"></i> <span style=\"color:brown\">Votre Panier</span></h2>

        <!-- ✅ Flash Messages -->
        {% for message in app.flashes('success') %}
            <div class=\"alert alert-success\">{{ message }}</div>
        {% endfor %}
        {% for message in app.flashes('danger') %}
            <div class=\"alert alert-danger\">{{ message }}</div>
        {% endfor %}

        <div class=\"row justify-content-center\">
            {% for ligne in lignes %}
                <div class=\"col-md-8 mb-4\">
                    <div class=\"card shadow-lg p-4 border-0 rounded\">
                        <div class=\"row g-0 align-items-center\">
                            <!-- Product Image -->
                            <div class=\"col-md-3 text-center\">
                                <img src=\"{{ asset('/uploads/images/logo.png') }}\" alt=\"Produit\" class=\"img-fluid rounded\" style=\"max-height: 130px;\">
                            </div>

                            <!-- Product Details -->
                            <div class=\"col-md-5\">
                                <div class=\"card-body\">
                                    <h5 class=\"card-title fw-bold\">{{ ligne.idProduit.nomProduit }}</h5>
                                    <p class=\"card-text\">
                                        <strong>Prix Unitaire:</strong> {{ ligne.prixUnitaire }} TND <br>
                                        <strong>Total:</strong> <span class=\"text-success fw-bold total-price\">{{ ligne.prixUnitaire * ligne.quantite }} TND</span>
                                    </p>
                                </div>
                            </div>

                            <!-- Inline Modify Form -->
                            <div class=\"col-md-4\">
                                <form class=\"quantite-form d-flex align-items-center\"
                                      data-id=\"{{ ligne.id }}\"
                                      action=\"{{ path('modifier_quantite', {'id': ligne.id}) }}\"
                                      method=\"POST\"
                                      novalidate>
                                    <input type=\"number\" name=\"quantite\" class=\"form-control me-2 text-center\" min=\"1\" value=\"{{ ligne.quantite }}\" required>
                                    <button type=\"button\" class=\"btn btn-outline-primary update-btn\">
                                        <i class=\"fas fa-save\"></i>
                                    </button>
                                </form>

                                <a href=\"{{ path('supprimer_du_panier', {'id': ligne.id}) }}\" class=\"btn btn-danger w-100 mt-2\">
                                    <i class=\"fas fa-trash\"></i> Retirer
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            {% endfor %}
        </div>

        <!-- ✅ \"Valider la Commande\" Button -->
        <div class=\"text-center mt-4\">
            <button class=\"btn btn-success btn-lg px-5\" data-bs-toggle=\"modal\" data-bs-target=\"#commandeModal\">
                <i class=\"fas fa-check\"></i> Valider la Commande
            </button>
        </div>
    </div>

    <!-- ✅ Bootstrap Modal for Command Validation -->
    <div class=\"modal fade\" id=\"commandeModal\" tabindex=\"-1\" aria-labelledby=\"commandeModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\" id=\"commandeModalLabel\">Confirmer votre commande</h5>
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                </div>
                <div class=\"modal-body\">
                    <form id=\"commandeForm\" method=\"post\" action=\"{{ path('valider_commande') }}\" novalidate>
                        <div class=\"mb-3\">
                            <label class=\"form-label\">Adresse de Livraison</label>
                            <input type=\"text\" name=\"adresse\" class=\"form-control\" required>
                        </div>
                        <div class=\"mb-3\">
                            <label class=\"form-label\">Méthode de Paiement</label>
                            <select name=\"paiement\" class=\"form-select\" required>
                                <option value=\"Carte Bancaire\">Carte Bancaire</option>
                                <option value=\"Espèces\">Espèces</option>
                                <option value=\"PayPal\">PayPal</option>
                            </select>
                        </div>
                        <div class=\"text-end\">
                            <button type=\"submit\" class=\"btn btn-primary\">Confirmer la Commande</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- ✅ Bootstrap for Styling -->
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css\">
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js\"></script>

    <script>
        document.addEventListener(\"DOMContentLoaded\", function () {
            document.querySelectorAll('.quantite-form').forEach(form => {
                form.addEventListener('submit', function (e) {
                    e.preventDefault(); // Prevent full page reload

                    let formData = new FormData(form);
                    let ligneId = form.getAttribute('data-id');

                    // ✅ Use the correct Symfony path for the request
                    let url = \"{{ path('modifier_quantite', {'id': '__ID__'}) }}\".replace('__ID__', ligneId);

                    fetch(url, {
                        method: 'POST',
                        body: formData
                    })
                        .then(response => {
                            if (!response.ok) {
                                throw new Error(\"Erreur HTTP \" + response.status);
                            }
                            return response.json();
                        })
                        .then(data => {
                            if (data.success) {
                                let totalCell = form.closest('.card').querySelector('.total-price');
                                let quantityInput = form.querySelector('input[name=\"quantite\"]');

                                totalCell.textContent = data.total + \" TND\"; // Update total price
                                quantityInput.value = data.quantite; // Update displayed quantity

                                alert(\"Quantité mise à jour !\");
                            } else {
                                alert(\"Erreur: \" + data.message);
                            }
                        })
                        .catch(error => console.error('Erreur:', error));
                });

                // ✅ Ensure button triggers the form submission
                form.querySelector('.update-btn').addEventListener('click', function () {
                    form.dispatchEvent(new Event('submit'));
                });
            });
        });
    </script>

{% endblock %}
", "panier/index.html.twig", "C:\\Users\\Asus\\Downloads\\WebProject (5)\\WebProject\\templates\\panier\\index.html.twig");
    }
}
