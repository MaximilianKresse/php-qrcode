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

/* layout.html.twig */
class __TwigTemplate_750c676452d3bf3a3ed72a33d24e026cffb3f2bfdcf942a7d4f3b9dc359f3253 extends \Twig\Template
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
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <link rel=\"icon\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["images/favicon.ico"]), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["css/normalize.css"]), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["css/base.css"]), "html", null, true);
        echo "\">
    ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 14
        echo "    ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 21
        echo "</head>
<body>
    <header class=\"phpdocumentor-top-header\"></header>
    <header class=\"phpdocumentor-header\">
        <section class=\"phpdocumentor-section\">
            <h1 class=\"phpdocumentor-title\">";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["project"] ?? null), "name", [], "any", false, false, false, 26), "html", null, true);
        echo "</h1>
        </section>
    </header>
    <main class=\"phpdocumentor\">
        <div class=\"phpdocumentor-section\">
            ";
        // line 31
        $this->loadTemplate("sidebar.html.twig", "layout.html.twig", 31)->display($context);
        // line 32
        echo "
            <div class=\"nine phpdocumentor-columns phpdocumentor-content\">
            ";
        // line 34
        $this->displayBlock('content', $context, $blocks);
        // line 35
        echo "                <div data-search-results class=\"phpdocumentor-search-results phpdocumentor-search-results--hidden\">

                    <h2>Search results</h2>
                    <ul class=\"phpdocumentor-search-results__entries\">

                    </ul>
                </div>
            </div>
        </div>
    </main>
    <script>
        cssVars({});
    </script>
</body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["project"] ?? null), "name", [], "any", false, false, false, 5), "html", null, true);
    }

    // line 10
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo "        <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro\">
        <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["css/template.css"]), "html", null, true);
        echo "\">
    ";
    }

    // line 14
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 15
        echo "        <script src=\"https://cdn.jsdelivr.net/npm/fuse.js@3.4.6\"></script>
        <script src=\"https://cdn.jsdelivr.net/npm/css-vars-ponyfill@2\"></script>
        <script src=\"https://cdn.jsdelivr.net/gh/google/code-prettify@master/loader/run_prettify.js\"></script>
        <script src=\"";
        // line 18
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["js/search.js"]), "html", null, true);
        echo "\"></script>
        <script defer src=\"";
        // line 19
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["js/searchIndex.js"]), "html", null, true);
        echo "\"></script>
    ";
    }

    // line 34
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 34,  144 => 19,  140 => 18,  135 => 15,  131 => 14,  125 => 12,  122 => 11,  118 => 10,  111 => 5,  92 => 35,  90 => 34,  86 => 32,  84 => 31,  76 => 26,  69 => 21,  66 => 14,  64 => 10,  60 => 9,  56 => 8,  52 => 7,  47 => 5,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "layout.html.twig", "layout.html.twig");
    }
}
