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

/* /indices/files.html.twig */
class __TwigTemplate_6d222e89d0eec614e5399a396612065b148a40fd1ad28f585e64a1fd8cd459d9 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
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
        $this->parent = $this->loadTemplate("base.html.twig", "/indices/files.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    ";
        $context["orderedFiles"] = twig_sort_filter(twig_get_attribute($this->env, $this->source, ($context["project"] ?? null), "files", [], "any", false, false, false, 4), function ($__a__, $__b__) use ($context, $macros) { $context["a"] = $__a__; $context["b"] = $__b__; return (twig_get_attribute($this->env, $this->source, ($context["a"] ?? null), "name", [], "any", false, false, false, 4) <=> twig_get_attribute($this->env, $this->source, ($context["b"] ?? null), "name", [], "any", false, false, false, 4)); });
        // line 5
        echo "
    <h2>Files</h2>
    ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range("a", "z"));
        foreach ($context['_seq'] as $context["_key"] => $context["letter"]) {
            // line 8
            echo "        ";
            $context["filesStartingWith"] = twig_array_filter(($context["orderedFiles"] ?? null), function ($__v__) use ($context, $macros) { $context["v"] = $__v__; return (twig_lower_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->source, ($context["v"] ?? null), "name", [], "any", false, false, false, 8))) == $context["letter"]); });
            // line 9
            echo "        ";
            if ( !twig_test_empty(($context["filesStartingWith"] ?? null))) {
                // line 10
                echo "        <h3>";
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, $context["letter"]), "html", null, true);
                echo "</h3>
        <ul class=\"phpdocumentor-list\">
        ";
                // line 12
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["filesStartingWith"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
                    // line 13
                    echo "            <li>";
                    echo call_user_func_array($this->env->getFilter('route')->getCallable(), [$context["file"], "file:short"]);
                    echo "</li>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 15
                echo "        </ul>
        ";
            }
            // line 17
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['letter'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "/indices/files.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 17,  86 => 15,  77 => 13,  73 => 12,  67 => 10,  64 => 9,  61 => 8,  57 => 7,  53 => 5,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/indices/files.html.twig", "/indices/files.html.twig");
    }
}
