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

/* /trait.html.twig */
class __TwigTemplate_0f2943d8661d51fc1c1c265907dc6507f0b9465a311e9a04a49ec090996707de extends \Twig\Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "/trait.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    ";
        $this->loadTemplate("breadcrumbs.html.twig", "/trait.html.twig", 4)->display($context);
        // line 5
        echo "
    <h2 class=\"phpdocumentor-content__title\">
        ";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "name", [], "any", false, false, false, 7), "html", null, true);
        echo "
        ";
        // line 8
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "usedTraits", [], "any", false, false, false, 8))) {
            // line 9
            echo "            <span class=\"phpdocumentor-trait__extends\">
                Uses
                ";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "usedTraits", [], "any", false, false, false, 11));
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
                // line 12
                echo "                    ";
                echo call_user_func_array($this->env->getFilter('route')->getCallable(), [$context["trait"], "trait:short"]);
                if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 12)) {
                    echo ", ";
                }
                // line 13
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trait'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "            </span>
        ";
        }
        // line 16
        echo "    </h2>
    <aside class=\"phpdocumentor-element-found-in\">
        <abbr class=\"phpdocumentor-element-found-in__file\" title=\"";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "file", [], "any", false, false, false, 18), "path", [], "any", false, false, false, 18), "html", null, true);
        echo "\">";
        echo call_user_func_array($this->env->getFilter('route')->getCallable(), [twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "file", [], "any", false, false, false, 18), "file:short"]);
        echo "</abbr>
        :
        <span class=\"phpdocumentor-element-found-in__line\">";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "line", [], "any", false, false, false, 20), "html", null, true);
        echo "</span>
    </aside>

    <p class=\"phpdocumentor-trait__summary\">";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "summary", [], "any", false, false, false, 23), "html", null, true);
        echo "</p>
    <section class=\"phpdocumentor-trait__description\">";
        // line 24
        echo call_user_func_array($this->env->getFilter('markdown')->getCallable(), [twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "description", [], "any", false, false, false, 24)]);
        echo "</section>
    ";
        // line 25
        $context["visibleTags"] = twig_array_filter(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "tags", [], "any", false, false, false, 25), function ($__v__, $__k__) use ($context, $macros) { $context["v"] = $__v__; $context["k"] = $__k__; return !twig_in_filter(($context["k"] ?? null), [0 => "package"]); });
        // line 26
        echo "    ";
        echo twig_include($this->env, $context, "tags.html.twig", ["tags" => ($context["visibleTags"] ?? null)]);
        echo "

    <h3>Table of Contents</h3>
    <table class=\"phpdocumentor-table_of_contents\">
        ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "properties", [], "any", false, false, false, 30));
        foreach ($context['_seq'] as $context["_key"] => $context["property"]) {
            // line 31
            echo "            <tr>
                <th class=\"phpdocumentor-heading\"><a href=\"";
            // line 32
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('link')->getCallable(), [$context["property"]]), "html", null, true);
            echo "\">\$";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["property"], "name", [], "any", false, false, false, 32), "html", null, true);
            echo "</a></th>
                <td class=\"phpdocumentor-cell\">";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["property"], "summary", [], "any", false, false, false, 33), "html", null, true);
            echo "</td>
                <td class=\"phpdocumentor-cell\">";
            // line 34
            echo twig_join_filter(call_user_func_array($this->env->getFilter('route')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["property"], "type", [], "any", false, false, false, 34), "trait:short"]), "|");
            echo "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['property'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "magicProperties", [], "any", false, false, false, 37));
        foreach ($context['_seq'] as $context["_key"] => $context["property"]) {
            // line 38
            echo "            <tr>
                <th class=\"phpdocumentor-heading\"><a href=\"";
            // line 39
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('link')->getCallable(), [$context["property"]]), "html", null, true);
            echo "\">\$";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["property"], "name", [], "any", false, false, false, 39), "html", null, true);
            echo "</a></th>
                <td class=\"phpdocumentor-cell\">";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["property"], "summary", [], "any", false, false, false, 40), "html", null, true);
            echo "</td>
                <td class=\"phpdocumentor-cell\">";
            // line 41
            echo twig_join_filter(call_user_func_array($this->env->getFilter('route')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["property"], "type", [], "any", false, false, false, 41), "trait:short"]), "|");
            echo "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['property'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "inheritedProperties", [], "any", false, false, false, 44));
        foreach ($context['_seq'] as $context["_key"] => $context["property"]) {
            // line 45
            echo "            <tr>
                <th class=\"phpdocumentor-heading\"><a href=\"";
            // line 46
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('link')->getCallable(), [$context["property"]]), "html", null, true);
            echo "\">\$";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["property"], "name", [], "any", false, false, false, 46), "html", null, true);
            echo "</a></th>
                <td class=\"phpdocumentor-cell\">";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["property"], "summary", [], "any", false, false, false, 47), "html", null, true);
            echo "</td>
                <td class=\"phpdocumentor-cell\">";
            // line 48
            echo twig_join_filter(call_user_func_array($this->env->getFilter('route')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["property"], "type", [], "any", false, false, false, 48), "trait:short"]), "|");
            echo "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['property'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "methods", [], "any", false, false, false, 51));
        foreach ($context['_seq'] as $context["_key"] => $context["method"]) {
            // line 52
            echo "            <tr>
                <th class=\"phpdocumentor-heading\"><a href=\"";
            // line 53
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('link')->getCallable(), [$context["method"]]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["method"], "name", [], "any", false, false, false, 53), "html", null, true);
            echo "()</a></th>
                <td class=\"phpdocumentor-cell\">";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["method"], "summary", [], "any", false, false, false, 54), "html", null, true);
            echo "</td>
                <td class=\"phpdocumentor-cell\">";
            // line 55
            echo twig_join_filter(call_user_func_array($this->env->getFilter('route')->getCallable(), [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["method"], "response", [], "any", false, false, false, 55), "type", [], "any", false, false, false, 55), "trait:short"]), "|");
            echo "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['method'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "magicMethods", [], "any", false, false, false, 58));
        foreach ($context['_seq'] as $context["_key"] => $context["method"]) {
            // line 59
            echo "            <tr>
                <th class=\"phpdocumentor-heading\"><a href=\"";
            // line 60
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('link')->getCallable(), [$context["method"]]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["method"], "name", [], "any", false, false, false, 60), "html", null, true);
            echo "()</a></th>
                <td class=\"phpdocumentor-cell\">";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["method"], "summary", [], "any", false, false, false, 61), "html", null, true);
            echo "</td>
                <td class=\"phpdocumentor-cell\">";
            // line 62
            echo twig_join_filter(call_user_func_array($this->env->getFilter('route')->getCallable(), [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["method"], "response", [], "any", false, false, false, 62), "type", [], "any", false, false, false, 62), "trait:short"]), "|");
            echo "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['method'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "inheritedMethods", [], "any", false, false, false, 65));
        foreach ($context['_seq'] as $context["_key"] => $context["method"]) {
            // line 66
            echo "            <tr>
                <th class=\"phpdocumentor-heading\"><a href=\"";
            // line 67
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('link')->getCallable(), [$context["method"]]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["method"], "name", [], "any", false, false, false, 67), "html", null, true);
            echo "()</a></th>
                <td class=\"phpdocumentor-cell\">";
            // line 68
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["method"], "summary", [], "any", false, false, false, 68), "html", null, true);
            echo "</td>
                <td class=\"phpdocumentor-cell\">";
            // line 69
            echo twig_join_filter(call_user_func_array($this->env->getFilter('route')->getCallable(), [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["method"], "response", [], "any", false, false, false, 69), "type", [], "any", false, false, false, 69), "trait:short"]), "|");
            echo "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['method'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "    </table>

    ";
        // line 74
        if ((((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "properties", [], "any", false, false, false, 74)) > 0) || (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "magicProperties", [], "any", false, false, false, 74)) > 0)) || (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "inheritedProperties", [], "any", false, false, false, 74)) > 0))) {
            // line 75
            echo "        <section>
            <h3 class=\"phpdocumentor-properties__header\">Properties</h3>
            ";
            // line 77
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "properties", [], "any", false, false, false, 77));
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
                // line 78
                echo "                ";
                $this->loadTemplate("property.html.twig", "/trait.html.twig", 78)->display($context);
                // line 79
                echo "            ";
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
            // line 80
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "magicProperties", [], "any", false, false, false, 80));
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
                // line 81
                echo "                ";
                $this->loadTemplate("property.html.twig", "/trait.html.twig", 81)->display($context);
                // line 82
                echo "            ";
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
            // line 83
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "inheritedProperties", [], "any", false, false, false, 83));
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
                // line 84
                echo "                ";
                $this->loadTemplate("property.html.twig", "/trait.html.twig", 84)->display($context);
                // line 85
                echo "            ";
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
            // line 86
            echo "        </section>
    ";
        }
        // line 88
        echo "
    ";
        // line 89
        if ((((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "methods", [], "any", false, false, false, 89)) > 0) || (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "magicMethods", [], "any", false, false, false, 89)) > 0)) || (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "inheritedMethods", [], "any", false, false, false, 89)) > 0))) {
            // line 90
            echo "        <section>
            <h3 class=\"phpdocumentor-methods__header\">Methods</h3>
            ";
            // line 92
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "methods", [], "any", false, false, false, 92));
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
                // line 93
                echo "                ";
                $this->loadTemplate("method.html.twig", "/trait.html.twig", 93)->display($context);
                // line 94
                echo "            ";
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
            // line 95
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "magicMethods", [], "any", false, false, false, 95));
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
                // line 96
                echo "                ";
                $this->loadTemplate("method.html.twig", "/trait.html.twig", 96)->display($context);
                // line 97
                echo "            ";
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
            // line 98
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "inheritedMethods", [], "any", false, false, false, 98));
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
                // line 99
                echo "                ";
                $this->loadTemplate("method.html.twig", "/trait.html.twig", 99)->display($context);
                // line 100
                echo "            ";
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
            // line 101
            echo "        </section>
    ";
        }
    }

    public function getTemplateName()
    {
        return "/trait.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  535 => 101,  521 => 100,  518 => 99,  500 => 98,  486 => 97,  483 => 96,  465 => 95,  451 => 94,  448 => 93,  431 => 92,  427 => 90,  425 => 89,  422 => 88,  418 => 86,  404 => 85,  401 => 84,  383 => 83,  369 => 82,  366 => 81,  348 => 80,  334 => 79,  331 => 78,  314 => 77,  310 => 75,  308 => 74,  304 => 72,  295 => 69,  291 => 68,  285 => 67,  282 => 66,  277 => 65,  268 => 62,  264 => 61,  258 => 60,  255 => 59,  250 => 58,  241 => 55,  237 => 54,  231 => 53,  228 => 52,  223 => 51,  214 => 48,  210 => 47,  204 => 46,  201 => 45,  196 => 44,  187 => 41,  183 => 40,  177 => 39,  174 => 38,  169 => 37,  160 => 34,  156 => 33,  150 => 32,  147 => 31,  143 => 30,  135 => 26,  133 => 25,  129 => 24,  125 => 23,  119 => 20,  112 => 18,  108 => 16,  104 => 14,  90 => 13,  84 => 12,  67 => 11,  63 => 9,  61 => 8,  57 => 7,  53 => 5,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/trait.html.twig", "/trait.html.twig");
    }
}
