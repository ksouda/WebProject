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

/* FrontOffice/HomePage/base.html.twig */
class __TwigTemplate_941d6ea91e5d99e99c9a643301ed6f4f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "FrontOffice/HomePage/base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "FrontOffice/HomePage/base.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html>
    <head>
     
        <meta charset=\"UTF-8\">
        <title>";
        // line 6
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>
        <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">
        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text><text y=%221.3em%22 x=%220.2em%22 font-size=%2276%22 fill=%22%23fff%22>sf</text></svg>\">
        
        <!-- Favicons -->
        <link href=\"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/favicon.png"), "html", null, true);
        yield "\" rel=\"icon\">

        <!-- Fonts -->
        <link href=\"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://fonts.googleapis.com"), "html", null, true);
        yield "\" rel=\"preconnect\">
        <link href=\"";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://fonts.gstatic.com"), "html", null, true);
        yield "\" rel=\"preconnect\" crossorigin>
        <link href=\"";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"), "html", null, true);
        yield "\" rel=\"stylesheet\">

        <!-- Vendor CSS Files -->
        <link href=\"https://unpkg.com/aos@2.3.1/dist/aos.css\" rel=\"stylesheet\">
        <link href=\"";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/aos/aos.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
        <link href=\"";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
        <link href=\"";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/bootstrap-icons/bootstrap-icons.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
        <link href=\"";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/glightbox/css/glightbox.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
        <link href=\"";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/swiper/swiper-bundle.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
        <link rel=\"stylesheet\" href=\"";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"), "html", null, true);
        yield "\">
        

        <!-- Main CSS File -->
        <link href=\"css/main.css\" rel=\"stylesheet\">
        
    </head>
    <body>
    
        <header id=\"header\" class=\"header d-flex align-items-center fixed-top\">
            <div class=\"container-fluid container-xl position-relative d-flex align-items-center\">
            <a href=\"/\" class=\"logo d-flex align-items-center me-auto\">
                 <img src=\"";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logo 2.png"), "html", null, true);
        yield "\" alt=\"\">
            </a>

            <nav id=\"navmenu\" class=\"navmenu\">
                <ul>
                <li><a href=\"#hero\" class=\"active\">Accueil</a></li>
                <li><a href=\"#about\">A propos de nous</a></li>
                <li><a href=\"#portfolio\">Boutique</a></li>
                <li><a href=\"#team\">Notre équipe</a></li>
                <li><a href=\"#pricing\">Ateliers en ligne</a></li>
                <li><a href=\"#contact\">Contact</a></li>
                </ul>
                <i class=\"mobile-nav-toggle d-xl-none bi bi-list\"></i>
            </nav>
            <a class=\"btn-getstarted\" href=\"#about\">S'inscrire</a>
            </div>
        </header>


        ";
        // line 56
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 57
        yield "        <footer id=\"footer\" class=\"footer dark-background\">
          <div class=\"container footer-top dark-background\">
            <div class=\"row gy-4\">
                <div class=\"col-lg-4 col-md-6 footer-about\">
                <a href=\"index.html.twig\" class=\"d-flex\">
                    <span class=\"sitename\">EDAYETNA</span>
                </a>
                <div class=\"footer-contact pt-3\">
                    <p>La petite Ariana</p>
                    <p>Tunisia</p>
                    <p class=\"mt-3\"><strong>Phone:</strong> <span>+216 54 123 456</span></p>
                    <p><strong>Email:</strong> <span>DevElite2025@gmail.com</span></p>
                </div>
                </div>


                <div class=\"col-lg-2 col-md-3 footer-links\">
                <h4>Liens Utiles</h4>
                <ul>
                    <li><i class=\"bi bi-chevron-right\"></i> <a href=\"#hero\">Accueil</a></li>
                    <li><i class=\"bi bi-chevron-right\"></i> <a href=\"#about\">A propos de nous</a></li>
                    <li><i class=\"bi bi-chevron-right\"></i> <a href=\"#team\">Equipe</a></li>
                    <li><i class=\"bi bi-chevron-right\"></i> <a href=\"#contact\">Contact</a></li>
                </ul>
                </div>

                <div class=\"col-lg-4 col-md-12\">
                <h4>Suivez-nous</h4>
                <p>Restez connecté pour ne rien manquer !</p>
                <div class=\"social-links d-flex\">
                    <a href=\"\"><i class=\"bi bi-twitter-x\"></i></a>
                    <a href=\"\"><i class=\"bi bi-facebook\"></i></a>
                    <a href=\"\"><i class=\"bi bi-instagram\"></i></a>
                    <a href=\"\"><i class=\"bi bi-linkedin\"></i></a>
                </div>
                </div>
            </div>
            </div>
        </footer>

        <script src=\"";
        // line 97
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        yield "\"></script>
        <script src=\"";
        // line 98
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/php-email-form/validate.js"), "html", null, true);
        yield "\"></script>
        <script src=\"";
        // line 99
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/aos/aos.js"), "html", null, true);
        yield "\"></script>
        <script src=\"";
        // line 100
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/glightbox/js/glightbox.min.js"), "html", null, true);
        yield "\"></script>
        <script src=\"";
        // line 101
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/swiper/swiper-bundle.min.js"), "html", null, true);
        yield "\"></script>
        <script src=\"";
        // line 102
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/waypoints/noframework.waypoints.js"), "html", null, true);
        yield "\"></script>
        <script src=\"";
        // line 103
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/imagesloaded/imagesloaded.pkgd.min.js"), "html", null, true);
        yield "\"></script>
        <script src=\"";
        // line 104
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/isotope-layout/isotope.pkgd.min.js"), "html", null, true);
        yield "\"></script>
        <script src=\"";
        // line 105
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"), "html", null, true);
        yield "\"></script>
        <script src=\"https://unpkg.com/aos@2.3.1/dist/aos.js\"></script>
        <scrip src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
        <script> AOS.init(); </script>
        <script src=\"";
        // line 109
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/main.js"), "html", null, true);
        yield "\"></script>   
        <!-- Main JS File -->
    </body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 6
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

    // line 56
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

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "FrontOffice/HomePage/base.html.twig";
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
        return array (  265 => 56,  242 => 6,  226 => 109,  219 => 105,  215 => 104,  211 => 103,  207 => 102,  203 => 101,  199 => 100,  195 => 99,  191 => 98,  187 => 97,  145 => 57,  143 => 56,  121 => 37,  106 => 25,  102 => 24,  98 => 23,  94 => 22,  90 => 21,  86 => 20,  79 => 16,  75 => 15,  71 => 14,  65 => 11,  57 => 6,  50 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
     
        <meta charset=\"UTF-8\">
        <title>{% block title %}Symfony Maniac{% endblock %}</title>
        <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">
        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text><text y=%221.3em%22 x=%220.2em%22 font-size=%2276%22 fill=%22%23fff%22>sf</text></svg>\">
        
        <!-- Favicons -->
        <link href=\"{{asset('img/favicon.png')}}\" rel=\"icon\">

        <!-- Fonts -->
        <link href=\"{{asset('https://fonts.googleapis.com')}}\" rel=\"preconnect\">
        <link href=\"{{asset('https://fonts.gstatic.com')}}\" rel=\"preconnect\" crossorigin>
        <link href=\"{{asset('https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap')}}\" rel=\"stylesheet\">

        <!-- Vendor CSS Files -->
        <link href=\"https://unpkg.com/aos@2.3.1/dist/aos.css\" rel=\"stylesheet\">
        <link href=\"{{asset('vendor/aos/aos.css')}}\" rel=\"stylesheet\">
        <link href=\"{{asset('vendor/bootstrap/css/bootstrap.min.css')}}\" rel=\"stylesheet\">
        <link href=\"{{asset('vendor/bootstrap-icons/bootstrap-icons.css')}}\" rel=\"stylesheet\">
        <link href=\"{{asset('vendor/glightbox/css/glightbox.min.css')}}\" rel=\"stylesheet\">
        <link href=\"{{asset('vendor/swiper/swiper-bundle.min.css')}}\" rel=\"stylesheet\">
        <link rel=\"stylesheet\" href=\"{{asset('https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css')}}\">
        

        <!-- Main CSS File -->
        <link href=\"css/main.css\" rel=\"stylesheet\">
        
    </head>
    <body>
    
        <header id=\"header\" class=\"header d-flex align-items-center fixed-top\">
            <div class=\"container-fluid container-xl position-relative d-flex align-items-center\">
            <a href=\"/\" class=\"logo d-flex align-items-center me-auto\">
                 <img src=\"{{asset('img/logo 2.png')}}\" alt=\"\">
            </a>

            <nav id=\"navmenu\" class=\"navmenu\">
                <ul>
                <li><a href=\"#hero\" class=\"active\">Accueil</a></li>
                <li><a href=\"#about\">A propos de nous</a></li>
                <li><a href=\"#portfolio\">Boutique</a></li>
                <li><a href=\"#team\">Notre équipe</a></li>
                <li><a href=\"#pricing\">Ateliers en ligne</a></li>
                <li><a href=\"#contact\">Contact</a></li>
                </ul>
                <i class=\"mobile-nav-toggle d-xl-none bi bi-list\"></i>
            </nav>
            <a class=\"btn-getstarted\" href=\"#about\">S'inscrire</a>
            </div>
        </header>


        {% block body %}{% endblock %}
        <footer id=\"footer\" class=\"footer dark-background\">
          <div class=\"container footer-top dark-background\">
            <div class=\"row gy-4\">
                <div class=\"col-lg-4 col-md-6 footer-about\">
                <a href=\"index.html.twig\" class=\"d-flex\">
                    <span class=\"sitename\">EDAYETNA</span>
                </a>
                <div class=\"footer-contact pt-3\">
                    <p>La petite Ariana</p>
                    <p>Tunisia</p>
                    <p class=\"mt-3\"><strong>Phone:</strong> <span>+216 54 123 456</span></p>
                    <p><strong>Email:</strong> <span>DevElite2025@gmail.com</span></p>
                </div>
                </div>


                <div class=\"col-lg-2 col-md-3 footer-links\">
                <h4>Liens Utiles</h4>
                <ul>
                    <li><i class=\"bi bi-chevron-right\"></i> <a href=\"#hero\">Accueil</a></li>
                    <li><i class=\"bi bi-chevron-right\"></i> <a href=\"#about\">A propos de nous</a></li>
                    <li><i class=\"bi bi-chevron-right\"></i> <a href=\"#team\">Equipe</a></li>
                    <li><i class=\"bi bi-chevron-right\"></i> <a href=\"#contact\">Contact</a></li>
                </ul>
                </div>

                <div class=\"col-lg-4 col-md-12\">
                <h4>Suivez-nous</h4>
                <p>Restez connecté pour ne rien manquer !</p>
                <div class=\"social-links d-flex\">
                    <a href=\"\"><i class=\"bi bi-twitter-x\"></i></a>
                    <a href=\"\"><i class=\"bi bi-facebook\"></i></a>
                    <a href=\"\"><i class=\"bi bi-instagram\"></i></a>
                    <a href=\"\"><i class=\"bi bi-linkedin\"></i></a>
                </div>
                </div>
            </div>
            </div>
        </footer>

        <script src=\"{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}\"></script>
        <script src=\"{{asset('vendor/php-email-form/validate.js')}}\"></script>
        <script src=\"{{asset('vendor/aos/aos.js')}}\"></script>
        <script src=\"{{asset('vendor/glightbox/js/glightbox.min.js')}}\"></script>
        <script src=\"{{asset('vendor/swiper/swiper-bundle.min.js')}}\"></script>
        <script src=\"{{asset('vendor/waypoints/noframework.waypoints.js')}}\"></script>
        <script src=\"{{asset('vendor/imagesloaded/imagesloaded.pkgd.min.js')}}\"></script>
        <script src=\"{{asset('vendor/isotope-layout/isotope.pkgd.min.js')}}\"></script>
        <script src=\"{{asset('https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js')}}\"></script>
        <script src=\"https://unpkg.com/aos@2.3.1/dist/aos.js\"></script>
        <scrip src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
        <script> AOS.init(); </script>
        <script src=\"{{ asset('js/main.js') }}\"></script>   
        <!-- Main JS File -->
    </body>
</html>
", "FrontOffice/HomePage/base.html.twig", "C:\\Users\\MSI\\wetransfer_webproject_2025-02-06_1505\\WebProject\\templates\\FrontOffice\\HomePage\\base.html.twig");
    }
}
