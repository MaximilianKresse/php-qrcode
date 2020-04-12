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

/* /class.html.twig */
class __TwigTemplate_67c90f192b42f488e422b625662af3c640737978205d00b24114b558377d3d6b extends \Twig\Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "/class.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    ";
        $this->loadTemplate("breadcrumbs.html.twig", "/class.html.twig", 4)->display($context);
        // line 5
        echo "
    <article class=\"phpdocumentor-element phpdocumentor-class\">
        <h2 class=\"phpdocumentor-content__title\">
            ";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "name", [], "any", false, false, false, 8), "html", null, true);
        echo "
            ";
        // line 9
        if (twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "parent", [], "any", false, false, false, 9)) {
            // line 10
            echo "                <span class=\"phpdocumentor-class__extends\">
                    extends ";
            // line 11
            echo call_user_func_array($this->env->getFilter('route')->getCallable(), [twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "parent", [], "any", false, false, false, 11), "class:short"]);
            echo "
                </span>
            ";
        }
        // line 14
        echo "            ";
        if (($context["usesPackages"] ?? null)) {
            // line 15
            echo "                <div class=\"phpdocumentor-element__package\">
                    in
                    <ul class=\"phpdocumentor-breadcrumbs\">
                        ";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(call_user_func_array($this->env->getFunction('packages')->getCallable(), [($context["node"] ?? null)]));
            foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
                // line 19
                echo "                            <li><a href=\"";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('link')->getCallable(), [$context["breadcrumb"]]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "name", [], "any", false, false, false, 19), "html", null, true);
                echo "</a></li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "                    </ul>
                </div>
            ";
        }
        // line 24
        echo "            ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "interfaces", [], "any", false, false, false, 24))) {
            // line 25
            echo "                <span class=\"phpdocumentor-class__implements\">
                    implements
                    ";
            // line 27
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "interfaces", [], "any", false, false, false, 27));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["interface"]) {
                // line 28
                echo "                        ";
                echo call_user_func_array($this->env->getFilter('route')->getCallable(), [$context["interface"], "class:short"]);
                if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 28)) {
                    echo ", ";
                }
                // line 29
                echo "                    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['interface'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "                </span>
            ";
        }
        // line 32
        echo "            ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "usedTraits", [], "any", false, false, false, 32))) {
            // line 33
            echo "                <span class=\"phpdocumentor-class__extends\">
                    Uses
                    ";
            // line 35
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "usedTraits", [], "any", false, false, false, 35));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["trait"]) {
                // line 36
                echo "                        ";
                echo call_user_func_array($this->env->getFilter('route')->getCallable(), [$context["trait"], "class:short"]);
                if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 36)) {
                    echo ", ";
                }
                // line 37
                echo "                    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trait'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "                </span>
            ";
        }
        // line 40
        echo "        </h2>
        <aside class=\"phpdocumentor-element-found-in\">
            <abbr class=\"phpdocumentor-element-found-in__file\" title=\"";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "file", [], "any", false, false, false, 42), "path", [], "any", false, false, false, 42), "html", null, true);
        echo "\">";
        echo call_user_func_array($this->env->getFilter('route')->getCallable(), [twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "file", [], "any", false, false, false, 42), "file:short"]);
        echo "</abbr>
            :
            <span class=\"phpdocumentor-element-found-in__line\">";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "line", [], "any", false, false, false, 44), "html", null, true);
        echo "</span>
        </aside>

        <p class=\"phpdocumentor-class__summary\">";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "summary", [], "any", false, false, false, 47), "html", null, true);
        echo "</p>
        <section class=\"phpdocumentor-class__description\">";
        // line 48
        echo call_user_func_array($this->env->getFilter('markdown')->getCallable(), [twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "description", [], "any", false, false, false, 48)]);
        echo "</section>
        ";
        // line 49
        $context["visibleTags"] = twig_array_filter(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "tags", [], "any", false, false, false, 49), function ($__v__, $__k__) use ($context, $macros) { $context["v"] = $__v__; $context["k"] = $__k__; return !twig_in_filter(($context["k"] ?? null), [0 => "package"]); });
        // line 50
        echo "        ";
        echo twig_include($this->env, $context, "tags.html.twig", ["tags" => ($context["visibleTags"] ?? null)]);
        echo "

        <h3>Table of Contents</h3>
        <table class=\"phpdocumentor-table_of_contents\">
            ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "constants", [], "any", false, false, false, 54));
        foreach ($context['_seq'] as $context["_key"] => $context["constant"]) {
            // line 55
            echo "                <tr>
                    <th class=\"phpdocumentor-heading\"><a href=\"";
            // line 56
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('link')->getCallable(), [$context["constant"]]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["constant"], "name", [], "any", false, false, false, 56), "html", null, true);
            echo "</a></th>
                    <td class=\"phpdocumentor-cell\">";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["constant"], "summary", [], "any", false, false, false, 57), "html", null, true);
            echo "</td>
                    <td class=\"phpdocumentor-cell\">";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["constant"], "value", [], "any", false, false, false, 58), "html", null, true);
            echo "</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['constant'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "properties", [], "any", false, false, false, 61));
        foreach ($context['_seq'] as $context["_key"] => $context["property"]) {
            // line 62
            echo "                <tr>
                    <th class=\"phpdocumentor-heading\"><a href=\"";
            // line 63
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('link')->getCallable(), [$context["property"]]), "html", null, true);
            echo "\">\$";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["property"], "name", [], "any", false, false, false, 63), "html", null, true);
            echo "</a></th>
                    <td class=\"phpdocumentor-cell\">";
            // line 64
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["property"], "summary", [], "any", false, false, false, 64), "html", null, true);
            echo "</td>
                    <td class=\"phpdocumentor-cell\">";
            // line 65
            echo twig_join_filter(call_user_func_array($this->env->getFilter('route')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["property"], "type", [], "any", false, false, false, 65), "class:short"]), "|");
            echo "</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['property'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "magicProperties", [], "any", false, false, false, 68));
        foreach ($context['_seq'] as $context["_key"] => $context["property"]) {
            // line 69
            echo "                <tr>
                    <th class=\"phpdocumentor-heading\"><a href=\"";
            // line 70
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('link')->getCallable(), [$context["property"]]), "html", null, true);
            echo "\">\$";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["property"], "name", [], "any", false, false, false, 70), "html", null, true);
            echo "</a></th>
                    <td class=\"phpdocumentor-cell\">";
            // line 71
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["property"], "summary", [], "any", false, false, false, 71), "html", null, true);
            echo "</td>
                    <td class=\"phpdocumentor-cell\">";
            // line 72
            echo twig_join_filter(call_user_func_array($this->env->getFilter('route')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["property"], "type", [], "any", false, false, false, 72), "class:short"]), "|");
            echo "</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['property'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "inheritedProperties", [], "any", false, false, false, 75));
        foreach ($context['_seq'] as $context["_key"] => $context["property"]) {
            // line 76
            echo "                <tr>
                    <th class=\"phpdocumentor-heading\"><a href=\"";
            // line 77
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('link')->getCallable(), [$context["property"]]), "html", null, true);
            echo "\">\$";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["property"], "name", [], "any", false, false, false, 77), "html", null, true);
            echo "</a></th>
                    <td class=\"phpdocumentor-cell\">";
            // line 78
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["property"], "summary", [], "any", false, false, false, 78), "html", null, true);
            echo "</td>
                    <td class=\"phpdocumentor-cell\">";
            // line 79
            echo twig_join_filter(call_user_func_array($this->env->getFilter('route')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["property"], "type", [], "any", false, false, false, 79), "class:short"]), "|");
            echo "</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['property'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "methods", [], "any", false, false, false, 82));
        foreach ($context['_seq'] as $context["_key"] => $context["method"]) {
            // line 83
            echo "                <tr>
                    <th class=\"phpdocumentor-heading\"><a href=\"";
            // line 84
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('link')->getCallable(), [$context["method"]]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["method"], "name", [], "any", false, false, false, 84), "html", null, true);
            echo "()</a></th>
                    <td class=\"phpdocumentor-cell\">";
            // line 85
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["method"], "summary", [], "any", false, false, false, 85), "html", null, true);
            echo "</td>
                    <td class=\"phpdocumentor-cell\">";
            // line 86
            echo twig_join_filter(call_user_func_array($this->env->getFilter('route')->getCallable(), [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["method"], "response", [], "any", false, false, false, 86), "type", [], "any", false, false, false, 86), "class:short"]), "|");
            echo "</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['method'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 89
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "magicMethods", [], "any", false, false, false, 89));
        foreach ($context['_seq'] as $context["_key"] => $context["method"]) {
            // line 90
            echo "                <tr>
                    <th class=\"phpdocumentor-heading\"><a href=\"";
            // line 91
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('link')->getCallable(), [$context["method"]]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["method"], "name", [], "any", false, false, false, 91), "html", null, true);
            echo "()</a></th>
                    <td class=\"phpdocumentor-cell\">";
            // line 92
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["method"], "summary", [], "any", false, false, false, 92), "html", null, true);
            echo "</td>
                    <td class=\"phpdocumentor-cell\">";
            // line 93
            echo twig_join_filter(call_user_func_array($this->env->getFilter('route')->getCallable(), [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["method"], "response", [], "any", false, false, false, 93), "type", [], "any", false, false, false, 93), "class:short"]), "|");
            echo "</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['method'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "inheritedMethods", [], "any", false, false, false, 96));
        foreach ($context['_seq'] as $context["_key"] => $context["method"]) {
            // line 97
            echo "                <tr>
                    <th class=\"phpdocumentor-heading\"><a href=\"";
            // line 98
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('link')->getCallable(), [$context["method"]]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["method"], "name", [], "any", false, false, false, 98), "html", null, true);
            echo "()</a></th>
                    <td class=\"phpdocumentor-cell\">";
            // line 99
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["method"], "summary", [], "any", false, false, false, 99), "html", null, true);
            echo "</td>
                    <td class=\"phpdocumentor-cell\">";
            // line 100
            echo twig_join_filter(call_user_func_array($this->env->getFilter('route')->getCallable(), [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["method"], "response", [], "any", false, false, false, 100), "type", [], "any", false, false, false, 100), "class:short"]), "|");
            echo "</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['method'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 103
        echo "        </table>

        ";
        // line 105
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "constants", [], "any", false, false, false, 105))) {
            // line 106
            echo "            <section>
                <h3 class=\"phpdocumentor-constants__header\">Constants</h3>
                ";
            // line 108
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "constants", [], "any", false, false, false, 108));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["constant"]) {
                // line 109
                echo "                    ";
                $this->loadTemplate("constant.html.twig", "/class.html.twig", 109)->display($context);
                // line 110
                echo "                ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['constant'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 111
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "inheritedConstants", [], "any", false, false, false, 111));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["constant"]) {
                // line 112
                echo "                    ";
                $this->loadTemplate("constant.html.twig", "/class.html.twig", 112)->display($context);
                // line 113
                echo "                ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['constant'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 114
            echo "            </section>
        ";
        }
        // line 116
        echo "
        ";
        // line 117
        if ((( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "properties", [], "any", false, false, false, 117)) ||  !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "magicProperties", [], "any", false, false, false, 117))) ||  !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "inheritedProperties", [], "any", false, false, false, 117)))) {
            // line 118
            echo "            <section>
                <h3 class=\"phpdocumentor-properties__header\">Properties</h3>
                ";
            // line 120
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "properties", [], "any", false, false, false, 120));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["property"]) {
                // line 121
                echo "                    ";
                $this->loadTemplate("property.html.twig", "/class.html.twig", 121)->display($context);
                // line 122
                echo "                ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['property'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 123
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "magicProperties", [], "any", false, false, false, 123));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["property"]) {
                // line 124
                echo "                    ";
                $this->loadTemplate("property.html.twig", "/class.html.twig", 124)->display($context);
                // line 125
                echo "                ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['property'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 126
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "inheritedProperties", [], "any", false, false, false, 126));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["property"]) {
                // line 127
                echo "                    ";
                $this->loadTemplate("property.html.twig", "/class.html.twig", 127)->display($context);
                // line 128
                echo "                ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['property'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 129
            echo "            </section>
        ";
        }
        // line 131
        echo "
        ";
        // line 132
        if ((( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "methods", [], "any", false, false, false, 132)) ||  !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "magicMethods", [], "any", false, false, false, 132))) ||  !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "inheritedMethods", [], "any", false, false, false, 132)))) {
            // line 133
            echo "            <section>
                <h3 class=\"phpdocumentor-methods__header\">Methods</h3>
                ";
            // line 135
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "methods", [], "any", false, false, false, 135));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["method"]) {
                // line 136
                echo "                    ";
                $this->loadTemplate("method.html.twig", "/class.html.twig", 136)->display($context);
                // line 137
                echo "                ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['method'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 138
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "magicMethods", [], "any", false, false, false, 138));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["method"]) {
                // line 139
                echo "                    ";
                $this->loadTemplate("method.html.twig", "/class.html.twig", 139)->display($context);
                // line 140
                echo "                ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['method'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 141
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "inheritedMethods", [], "any", false, false, false, 141));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["method"]) {
                // line 142
                echo "                    ";
                $this->loadTemplate("method.html.twig", "/class.html.twig", 142)->display($context);
                // line 143
                echo "                ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['method'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 144
            echo "            </section>
        ";
        }
        // line 146
        echo "    </article>
";
    }

    public function getTemplateName()
    {
        return "/class.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  737 => 146,  733 => 144,  719 => 143,  716 => 142,  698 => 141,  684 => 140,  681 => 139,  663 => 138,  649 => 137,  646 => 136,  629 => 135,  625 => 133,  623 => 132,  620 => 131,  616 => 129,  602 => 128,  599 => 127,  581 => 126,  567 => 125,  564 => 124,  546 => 123,  532 => 122,  529 => 121,  512 => 120,  508 => 118,  506 => 117,  503 => 116,  499 => 114,  485 => 113,  482 => 112,  464 => 111,  450 => 110,  447 => 109,  430 => 108,  426 => 106,  424 => 105,  420 => 103,  411 => 100,  407 => 99,  401 => 98,  398 => 97,  393 => 96,  384 => 93,  380 => 92,  374 => 91,  371 => 90,  366 => 89,  357 => 86,  353 => 85,  347 => 84,  344 => 83,  339 => 82,  330 => 79,  326 => 78,  320 => 77,  317 => 76,  312 => 75,  303 => 72,  299 => 71,  293 => 70,  290 => 69,  285 => 68,  276 => 65,  272 => 64,  266 => 63,  263 => 62,  258 => 61,  249 => 58,  245 => 57,  239 => 56,  236 => 55,  232 => 54,  224 => 50,  222 => 49,  218 => 48,  214 => 47,  208 => 44,  201 => 42,  197 => 40,  193 => 38,  179 => 37,  173 => 36,  156 => 35,  152 => 33,  149 => 32,  145 => 30,  131 => 29,  125 => 28,  108 => 27,  104 => 25,  101 => 24,  96 => 21,  85 => 19,  81 => 18,  76 => 15,  73 => 14,  67 => 11,  64 => 10,  62 => 9,  58 => 8,  53 => 5,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/class.html.twig", "/class.html.twig");
    }
}
