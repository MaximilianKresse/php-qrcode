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

/* /interface.html.twig */
class __TwigTemplate_59e97b32e741bd7b539647b067c65439075d658ba29bbefa9e67f0cc50e0764f extends \Twig\Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "/interface.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    ";
        $this->loadTemplate("breadcrumbs.html.twig", "/interface.html.twig", 4)->display($context);
        // line 5
        echo "    <article class=\"phpdocumentor-element phpdocumentor-interface\">
        <h2 class=\"phpdocumentor-content__title\">
            ";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "name", [], "any", false, false, false, 7), "html", null, true);
        echo "
            ";
        // line 8
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "parent", [], "any", false, false, false, 8))) {
            // line 9
            echo "                <span class=\"phpdocumentor-interface__extends\">
                    extends
                    ";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "parent", [], "any", false, false, false, 11));
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
                // line 12
                echo "                        ";
                echo call_user_func_array($this->env->getFilter('route')->getCallable(), [$context["interface"], "class:short"]);
                if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 12)) {
                    echo ", ";
                }
                // line 13
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
            // line 14
            echo "                </span>
            ";
        }
        // line 16
        echo "            ";
        if (($context["usesPackages"] ?? null)) {
            // line 17
            echo "                <div class=\"phpdocumentor-element__package\">
                    in
                    <ul class=\"phpdocumentor-breadcrumbs\">
                        ";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(call_user_func_array($this->env->getFunction('packages')->getCallable(), [($context["node"] ?? null)]));
            foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
                // line 21
                echo "                            <li><a href=\"";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('link')->getCallable(), [$context["breadcrumb"]]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "name", [], "any", false, false, false, 21), "html", null, true);
                echo "</a></li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "                    </ul>
                </div>
            ";
        }
        // line 26
        echo "        </h2>
        <aside class=\"phpdocumentor-element-found-in\">
            <abbr class=\"phpdocumentor-element-found-in__file\" title=\"";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "file", [], "any", false, false, false, 28), "path", [], "any", false, false, false, 28), "html", null, true);
        echo "\">";
        echo call_user_func_array($this->env->getFilter('route')->getCallable(), [twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "file", [], "any", false, false, false, 28), "file:short"]);
        echo "</abbr>
            :
            <span class=\"phpdocumentor-element-found-in__line\">";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "line", [], "any", false, false, false, 30), "html", null, true);
        echo "</span>
        </aside>

        <p class=\"phpdocumentor-interface__summary\">";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "summary", [], "any", false, false, false, 33), "html", null, true);
        echo "</p>
        <section class=\"phpdocumentor-interface__description\">";
        // line 34
        echo call_user_func_array($this->env->getFilter('markdown')->getCallable(), [twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "description", [], "any", false, false, false, 34)]);
        echo "</section>
        ";
        // line 35
        $context["visibleTags"] = twig_array_filter(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "tags", [], "any", false, false, false, 35), function ($__v__, $__k__) use ($context, $macros) { $context["v"] = $__v__; $context["k"] = $__k__; return !twig_in_filter(($context["k"] ?? null), [0 => "package"]); });
        // line 36
        echo "        ";
        echo twig_include($this->env, $context, "tags.html.twig", ["tags" => ($context["visibleTags"] ?? null)]);
        echo "

        <h3>Table of Contents</h3>
        <table class=\"phpdocumentor-table_of_contents\">
            ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "constants", [], "any", false, false, false, 40));
        foreach ($context['_seq'] as $context["_key"] => $context["constant"]) {
            // line 41
            echo "                <tr>
                    <th class=\"phpdocumentor-heading\"><a href=\"";
            // line 42
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('link')->getCallable(), [$context["constant"]]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["constant"], "name", [], "any", false, false, false, 42), "html", null, true);
            echo "</a></th>
                    <td class=\"phpdocumentor-cell\">";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["constant"], "summary", [], "any", false, false, false, 43), "html", null, true);
            echo "</td>
                    <td class=\"phpdocumentor-cell\">";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["constant"], "value", [], "any", false, false, false, 44), "html", null, true);
            echo "</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['constant'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "properties", [], "any", false, false, false, 47));
        foreach ($context['_seq'] as $context["_key"] => $context["property"]) {
            // line 48
            echo "                <tr>
                    <th class=\"phpdocumentor-heading\"><a href=\"";
            // line 49
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('link')->getCallable(), [$context["property"]]), "html", null, true);
            echo "\">\$";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["property"], "name", [], "any", false, false, false, 49), "html", null, true);
            echo "</a></th>
                    <td class=\"phpdocumentor-cell\">";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["property"], "summary", [], "any", false, false, false, 50), "html", null, true);
            echo "</td>
                    <td class=\"phpdocumentor-cell\">";
            // line 51
            echo twig_join_filter(call_user_func_array($this->env->getFilter('route')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["property"], "type", [], "any", false, false, false, 51), "class:short"]), "|");
            echo "</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['property'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "magicProperties", [], "any", false, false, false, 54));
        foreach ($context['_seq'] as $context["_key"] => $context["property"]) {
            // line 55
            echo "                <tr>
                    <th class=\"phpdocumentor-heading\"><a href=\"";
            // line 56
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('link')->getCallable(), [$context["property"]]), "html", null, true);
            echo "\">\$";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["property"], "name", [], "any", false, false, false, 56), "html", null, true);
            echo "</a></th>
                    <td class=\"phpdocumentor-cell\">";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["property"], "summary", [], "any", false, false, false, 57), "html", null, true);
            echo "</td>
                    <td class=\"phpdocumentor-cell\">";
            // line 58
            echo twig_join_filter(call_user_func_array($this->env->getFilter('route')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["property"], "type", [], "any", false, false, false, 58), "class:short"]), "|");
            echo "</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['property'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "inheritedProperties", [], "any", false, false, false, 61));
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
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "methods", [], "any", false, false, false, 68));
        foreach ($context['_seq'] as $context["_key"] => $context["method"]) {
            // line 69
            echo "                <tr>
                    <th class=\"phpdocumentor-heading\"><a href=\"";
            // line 70
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('link')->getCallable(), [$context["method"]]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["method"], "name", [], "any", false, false, false, 70), "html", null, true);
            echo "()</a></th>
                    <td class=\"phpdocumentor-cell\">";
            // line 71
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["method"], "summary", [], "any", false, false, false, 71), "html", null, true);
            echo "</td>
                    <td class=\"phpdocumentor-cell\">";
            // line 72
            echo twig_join_filter(call_user_func_array($this->env->getFilter('route')->getCallable(), [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["method"], "response", [], "any", false, false, false, 72), "type", [], "any", false, false, false, 72), "class:short"]), "|");
            echo "</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['method'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "magicMethods", [], "any", false, false, false, 75));
        foreach ($context['_seq'] as $context["_key"] => $context["method"]) {
            // line 76
            echo "                <tr>
                    <th class=\"phpdocumentor-heading\"><a href=\"";
            // line 77
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('link')->getCallable(), [$context["method"]]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["method"], "name", [], "any", false, false, false, 77), "html", null, true);
            echo "()</a></th>
                    <td class=\"phpdocumentor-cell\">";
            // line 78
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["method"], "summary", [], "any", false, false, false, 78), "html", null, true);
            echo "</td>
                    <td class=\"phpdocumentor-cell\">";
            // line 79
            echo twig_join_filter(call_user_func_array($this->env->getFilter('route')->getCallable(), [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["method"], "response", [], "any", false, false, false, 79), "type", [], "any", false, false, false, 79), "class:short"]), "|");
            echo "</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['method'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "inheritedMethods", [], "any", false, false, false, 82));
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
        echo "        </table>

        ";
        // line 91
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "constants", [], "any", false, false, false, 91))) {
            // line 92
            echo "            <section>
                <h3 class=\"phpdocumentor-constants__header\">Constants</h3>
                ";
            // line 94
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "constants", [], "any", false, false, false, 94));
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
                // line 95
                echo "                    ";
                $this->loadTemplate("constant.html.twig", "/interface.html.twig", 95)->display($context);
                // line 96
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
            // line 97
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "inheritedConstants", [], "any", false, false, false, 97));
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
                // line 98
                echo "                    ";
                $this->loadTemplate("constant.html.twig", "/interface.html.twig", 98)->display($context);
                // line 99
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
            // line 100
            echo "            </section>
        ";
        }
        // line 102
        echo "
        ";
        // line 103
        if ((( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "properties", [], "any", false, false, false, 103)) ||  !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "magicProperties", [], "any", false, false, false, 103))) ||  !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "inheritedProperties", [], "any", false, false, false, 103)))) {
            // line 104
            echo "            <section>
                <h3 class=\"phpdocumentor-properties__header\">Properties</h3>
                ";
            // line 106
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "properties", [], "any", false, false, false, 106));
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
                // line 107
                echo "                    ";
                $this->loadTemplate("property.html.twig", "/interface.html.twig", 107)->display($context);
                // line 108
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
            // line 109
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "magicProperties", [], "any", false, false, false, 109));
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
                // line 110
                echo "                    ";
                $this->loadTemplate("property.html.twig", "/interface.html.twig", 110)->display($context);
                // line 111
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
            // line 112
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "inheritedProperties", [], "any", false, false, false, 112));
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
                // line 113
                echo "                    ";
                $this->loadTemplate("property.html.twig", "/interface.html.twig", 113)->display($context);
                // line 114
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
            // line 115
            echo "            </section>
        ";
        }
        // line 117
        echo "
        ";
        // line 118
        if ((( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "methods", [], "any", false, false, false, 118)) ||  !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "magicMethods", [], "any", false, false, false, 118))) ||  !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "inheritedMethods", [], "any", false, false, false, 118)))) {
            // line 119
            echo "            <section>
                <h3 class=\"phpdocumentor-methods__header\">Methods</h3>
                ";
            // line 121
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "methods", [], "any", false, false, false, 121));
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
                // line 122
                echo "                    ";
                $this->loadTemplate("method.html.twig", "/interface.html.twig", 122)->display($context);
                // line 123
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
            // line 124
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "magicMethods", [], "any", false, false, false, 124));
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
                // line 125
                echo "                    ";
                $this->loadTemplate("method.html.twig", "/interface.html.twig", 125)->display($context);
                // line 126
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
            // line 127
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "inheritedMethods", [], "any", false, false, false, 127));
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
                // line 128
                echo "                    ";
                $this->loadTemplate("method.html.twig", "/interface.html.twig", 128)->display($context);
                // line 129
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
            // line 130
            echo "            </section>
        ";
        }
        // line 132
        echo "    </article>
";
    }

    public function getTemplateName()
    {
        return "/interface.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  676 => 132,  672 => 130,  658 => 129,  655 => 128,  637 => 127,  623 => 126,  620 => 125,  602 => 124,  588 => 123,  585 => 122,  568 => 121,  564 => 119,  562 => 118,  559 => 117,  555 => 115,  541 => 114,  538 => 113,  520 => 112,  506 => 111,  503 => 110,  485 => 109,  471 => 108,  468 => 107,  451 => 106,  447 => 104,  445 => 103,  442 => 102,  438 => 100,  424 => 99,  421 => 98,  403 => 97,  389 => 96,  386 => 95,  369 => 94,  365 => 92,  363 => 91,  359 => 89,  350 => 86,  346 => 85,  340 => 84,  337 => 83,  332 => 82,  323 => 79,  319 => 78,  313 => 77,  310 => 76,  305 => 75,  296 => 72,  292 => 71,  286 => 70,  283 => 69,  278 => 68,  269 => 65,  265 => 64,  259 => 63,  256 => 62,  251 => 61,  242 => 58,  238 => 57,  232 => 56,  229 => 55,  224 => 54,  215 => 51,  211 => 50,  205 => 49,  202 => 48,  197 => 47,  188 => 44,  184 => 43,  178 => 42,  175 => 41,  171 => 40,  163 => 36,  161 => 35,  157 => 34,  153 => 33,  147 => 30,  140 => 28,  136 => 26,  131 => 23,  120 => 21,  116 => 20,  111 => 17,  108 => 16,  104 => 14,  90 => 13,  84 => 12,  67 => 11,  63 => 9,  61 => 8,  57 => 7,  53 => 5,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/interface.html.twig", "/interface.html.twig");
    }
}
