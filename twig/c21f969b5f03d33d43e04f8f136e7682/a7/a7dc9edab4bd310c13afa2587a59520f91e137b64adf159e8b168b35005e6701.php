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

/* sidebar.html.twig */
class __TwigTemplate_1c3b61612318bece8eab9c1d08e16c5d8c5e03c2efff6bbd42ff0ef2ba90e624 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<aside class=\"three phpdocumentor-columns phpdocumentor-sidebar\">
    <section data-search-form class=\"phpdocumentor-search\">
        <h2 class=\"phpdocumentor-sidebar__category-header\">Search</h2>
        <label class=\"phpdocumentor-label\">
            <span class=\"visually-hidden\">Search for</span>
            <input type=\"search\" class=\"phpdocumentor-field phpdocumentor-search__field\" placeholder=\"Loading ..\" disabled />
        </label>
    </section>

    ";
        // line 10
        if (($context["menu"] ?? null)) {
            // line 11
            echo "    <section class=\"phpdocumentor-sidebar__category\">
        ";
            // line 12
            echo twig_include($this->env, $context, "menu.html.twig", ["menuItem" => ($context["menu"] ?? null)], false);
            echo "
    </section>
    ";
        }
        // line 15
        echo "
    <section class=\"phpdocumentor-sidebar__category\">
        <h2 class=\"phpdocumentor-sidebar__category-header\">Namespaces</h2>
        ";
        // line 18
        if ((($context["usesNamespaces"] ?? null) ||  !($context["usesPackages"] ?? null))) {
            // line 19
            echo "            <h3 class=\"phpdocumentor-sidebar__root-namespace\">";
            echo call_user_func_array($this->env->getFilter('route')->getCallable(), [twig_get_attribute($this->env, $this->source, ($context["project"] ?? null), "namespace", [], "any", false, false, false, 19), "Global"]);
            echo "</h3>
            ";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["project"] ?? null), "namespace", [], "any", false, false, false, 20), "children", [], "any", false, false, false, 20));
            foreach ($context['_seq'] as $context["_key"] => $context["namespace"]) {
                // line 21
                echo "                <h4 class=\"phpdocumentor-sidebar__root-namespace\">";
                echo call_user_func_array($this->env->getFilter('route')->getCallable(), [$context["namespace"], "class:short"]);
                echo "</h4>
                <ul class=\"phpdocumentor-list\">
                    ";
                // line 23
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["namespace"], "children", [], "any", false, false, false, 23));
                foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                    // line 24
                    echo "                        <li>";
                    echo call_user_func_array($this->env->getFilter('route')->getCallable(), [$context["child"], "class:short"]);
                    echo "</li>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 26
                echo "                </ul>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['namespace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "        ";
        }
        // line 29
        echo "    </section>

    ";
        // line 31
        if (($context["usesPackages"] ?? null)) {
            // line 32
            echo "    <section class=\"phpdocumentor-sidebar__category\">
        <h2 class=\"phpdocumentor-sidebar__category-header\">Packages</h2>
        ";
            // line 34
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["project"] ?? null), "package", [], "any", false, false, false, 34), "children", [], "any", false, false, false, 34));
            foreach ($context['_seq'] as $context["_key"] => $context["package"]) {
                // line 35
                echo "            <h3 class=\"phpdocumentor-sidebar__root-package\">";
                echo call_user_func_array($this->env->getFilter('route')->getCallable(), [$context["package"], "class:short"]);
                echo "</h3>
            <ul class=\"phpdocumentor-list\">
                ";
                // line 37
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["package"], "children", [], "any", false, false, false, 37));
                foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                    // line 38
                    echo "                    <li>";
                    echo call_user_func_array($this->env->getFilter('route')->getCallable(), [$context["child"], "class:short"]);
                    echo "</li>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 40
                echo "            </ul>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['package'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            echo "    </section>
    ";
        }
        // line 44
        echo "
    <section class=\"phpdocumentor-sidebar__category\">
        <h2 class=\"phpdocumentor-sidebar__category-header\">Reports</h2>
        ";
        // line 47
        if ((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["project"] ?? null), "settings", [], "any", false, false, false, 47), "custom", [], "any", false, false, false, 47)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["graphs.enabled"] ?? null) : null)) {
            // line 48
            echo "        <h3 class=\"phpdocumentor-sidebar__root-package\"><a href=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["graphs/classes.html"]), "html", null, true);
            echo "\">Class Diagram</a></h3>
        ";
        }
        // line 50
        echo "        <h3 class=\"phpdocumentor-sidebar__root-package\"><a href=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["reports/deprecated.html"]), "html", null, true);
        echo "\">Deprecated</a></h3>
        <h3 class=\"phpdocumentor-sidebar__root-package\"><a href=\"";
        // line 51
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["reports/errors.html"]), "html", null, true);
        echo "\">Errors</a></h3>
        <h3 class=\"phpdocumentor-sidebar__root-package\"><a href=\"";
        // line 52
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["reports/markers.html"]), "html", null, true);
        echo "\">Markers</a></h3>
    </section>

    <section class=\"phpdocumentor-sidebar__category\">
        <h2 class=\"phpdocumentor-sidebar__category-header\">Indices</h2>
        <h3 class=\"phpdocumentor-sidebar__root-package\"><a href=\"";
        // line 57
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["indices/files.html"]), "html", null, true);
        echo "\">Files</a></h3>
    </section>
</aside>
";
    }

    public function getTemplateName()
    {
        return "sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 57,  170 => 52,  166 => 51,  161 => 50,  155 => 48,  153 => 47,  148 => 44,  144 => 42,  137 => 40,  128 => 38,  124 => 37,  118 => 35,  114 => 34,  110 => 32,  108 => 31,  104 => 29,  101 => 28,  94 => 26,  85 => 24,  81 => 23,  75 => 21,  71 => 20,  66 => 19,  64 => 18,  59 => 15,  53 => 12,  50 => 11,  48 => 10,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "sidebar.html.twig", "sidebar.html.twig");
    }
}
