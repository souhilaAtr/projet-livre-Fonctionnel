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

/* home/index.html.twig */
class __TwigTemplate_61e2acafeafd4cc40a78328da1dfc4605d5f5816a0122210200a30eee31773ab extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo twig_escape_filter($this->env, $this->env->getFunction('encore_entry_link_tags')->getCallable()("app"), "html", null, true);
        echo "

<link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/home.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/homemobile.css"), "html", null, true);
        echo "\"media=\"screen and (max-width: 576px)\">
";
    }

    // line 10
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getFunction('encore_entry_script_tags')->getCallable()("app"), "html", null, true);
        echo "
    <script src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/mangas.js"), "html", null, true);
        echo "\" defer></script>
    <script src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/comic.js"), "html", null, true);
        echo "\" defer></script>
    <script src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/bandeD.js"), "html", null, true);
        echo "\" defer></script> 
";
    }

    // line 19
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Valkyrie Book Store";
    }

    // line 21
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 22
        echo "
<div class=\"banniere\">
    <img src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/image/valkyrie-high-resolution-logo-black-on-transparent-background.png"), "html", null, true);
        echo "\" alt=\"\" class=\"logoBanniere\">
</div>


<h2>Nos Meilleures ventes</h2>

<div class=\"carousel1\">    
    <div id=\"slider\">
        <div id=\"prev\"></div>
        <div id=\"next\"></div>
        <img src=\"\" alt=\"\">
    </div>
    <div id=\"slider2\">
        <div id=\"prev2\"></div>
        <div id=\"next2\"></div>
        <img src=\"\" alt=\"\">
    </div>
    <div id=\"slider3\">
        <div id=\"prev3\"></div>
        <div id=\"next3\"></div>
        <img src=\"\" alt=\"\">
    </div>
</div>


<h2>Bande Dessinées</h2>
<h3>Notre sélection :</h3>
<div class=\"bandeD\"></div>
<h2>Comic</h2>
<h3>Notre sélection :</h3>
<div class=\"comic\"></div>
<h2>Mangas</h2>
<h3>Notre sélection :</h3>
<div class=\"mangas\"></div>

";
    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 24,  102 => 22,  98 => 21,  91 => 19,  85 => 14,  81 => 13,  77 => 12,  72 => 11,  68 => 10,  62 => 7,  58 => 6,  53 => 4,  49 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "home/index.html.twig", "C:\\Users\\ssouh\\Desktop\\soutenance\\eric&quantin\\templates\\home\\index.html.twig");
    }
}
