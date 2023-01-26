<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* base.html.twig */
class __TwigTemplate_7a87bc8b0f082028ada754546041824f13b5c85d762074178e23488d44c9b885 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html>

<head>
    <meta charset=\"UTF-8\">
    <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
    <link rel=\"stylesheet\" href=\"https://bootswatch.com/5/spacelab/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css\" integrity=\"sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\" />
    <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/font.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/stylemobile.css"), "html", null, true);
        echo "\"media=\"screen and (max-width: 576px)\">
    ";
        // line 14
        echo "    ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 19
        echo "
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js\"
        integrity=\"sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8\" crossorigin=\"anonymous\">
    </script>
    <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
    <script src=\"https://code.jquery.com/ui/1.13.1/jquery-ui.js\"></script>
    <script src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/autocomplete.js"), "html", null, true);
        echo "\" ></script>
    <script src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/carousel.js"), "html", null, true);
        echo "\" defer></script>
   
    ";
        // line 28
        $this->displayBlock('javascripts', $context, $blocks);
        // line 33
        echo "</head>

<body>
    <header>
        <nav class=\"navbar navbar-expand-lg navbar-dark bg-warning\">
            <div class=\"container-fluid\">
                <div id=\"logo\">
                    <a class=\"navbar-brand\" href=\"";
        // line 40
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/image/valkyrie-high-resolution-logo-black-on-transparent-background.png"), "html", null, true);
        echo "\" alt=\"\" class=\"logo\">
                </a> </div>
               
                <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarColor02\"
                    aria-controls=\"navbarColor02\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>
                <div class=\"collapse navbar-collapse\" id=\"navbarColor02\">
                    <ul class=\"navbar-nav me-auto\">
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" id=\"bande_d\" href=\"";
        // line 50
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_genre");
        echo "?genres=bande_d\">Bandes Dessinées</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" id=\"comics\" href=\"";
        // line 53
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_genre");
        echo "?genres=comics\">Comics</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" id=\"mangas\" href=\"";
        // line 56
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_genre");
        echo "?genres=mangas\">Mangas</a>
                        </li>
                        
                    </ul>
                    
                    <ul class=\"navbar-nav me-auto\">
                    ";
        // line 62
        if (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 62)) {
            // line 63
            echo "                        ";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 64
                echo "                        <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\" ";
                // line 65
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin");
                echo "\">Admin</a></li>
                        ";
            }
            // line 67
            echo "                        <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
            // line 68
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Deconnexion</a></li>
                        ";
        } else {
            // line 70
            echo "                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"";
            // line 71
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">Connexion</a>
                            </li>
                        ";
        }
        // line 74
        echo "                        ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_PERVERS")) {
            // line 75
            echo "                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"#\">Coquinou</a>
                        </li>
                        ";
        } else {
            // line 79
            echo "                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"";
            // line 80
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ageVerif");
            echo "\">Tout Public</a>
                            </li>
                        ";
        }
        // line 83
        echo "                    </ul>

                    
                    <form class=\"d-flex\" id=\"searchBar\" method=\"POST\">  
                        <input class=\"form-control me-sm-1\" type=\"text\" placeholder=\"Recherche\">
                        <button class=\"btn btn-dark my-2 my-sm-0\" type=\"submit\">Rechercher</button>  

                    </form>
                   
                        <div id=\"results\"></div> 
                    
                </div>
            </div>
            <div class=\"navbar-nav\">
                <a href=\"";
        // line 97
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart");
        echo "\" class=\"btn btn-light\">
                    Panier
                </a>
            </div>
        </nav>
    </header>  

    ";
        // line 104
        $this->displayBlock('body', $context, $blocks);
        // line 105
        echo "
    <div id=\"position\">       
        <div class=\"footer\">
            <a href=\"";
        // line 108
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cgu");
        echo "\">Mentions légales/CGU/CGV</a>  
            <a href=\"";
        // line 109
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("about");
        echo "\">About</a>
            <a href=\"";
        // line 110
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo "\">Nous contacter</a>
            <p>Nous suivre : 
                <a href=\"http://www.linkedin.com\"><i class=\"fa-brands fa-linkedin\"></i></a>
                <a href=\"http://www.facebook.com\"><i class=\"fa-brands fa-facebook\"></i></a>
                <a href=\"http://www.twitter.com\"><i class=\"fa-brands fa-twitter\"></i></a>
            </p> 
        </div>   
    </div>
</body>

</html>";
    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Welcome!";
    }

    // line 14
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 15
        echo "    

    ";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getFunction('encore_entry_link_tags')->getCallable()("app"), "html", null, true);
        echo "
    ";
    }

    // line 28
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 29
        echo "    
    ";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getFunction('encore_entry_script_tags')->getCallable()("app"), "html", null, true);
        echo "

    ";
    }

    // line 104
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " ";
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  273 => 104,  266 => 30,  263 => 29,  259 => 28,  253 => 17,  249 => 15,  245 => 14,  238 => 6,  223 => 110,  219 => 109,  215 => 108,  210 => 105,  208 => 104,  198 => 97,  182 => 83,  176 => 80,  173 => 79,  167 => 75,  164 => 74,  158 => 71,  155 => 70,  150 => 68,  147 => 67,  142 => 65,  139 => 64,  136 => 63,  134 => 62,  125 => 56,  119 => 53,  113 => 50,  98 => 40,  89 => 33,  87 => 28,  82 => 26,  78 => 25,  70 => 19,  67 => 14,  63 => 12,  59 => 11,  55 => 10,  48 => 6,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "base.html.twig", "C:\\Users\\ssouh\\Desktop\\soutenance\\eric&quantin\\templates\\base.html.twig");
    }
}
