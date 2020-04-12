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

/* tags.html.twig */
class __TwigTemplate_b919b4bb6ba0f6e0bd0191c47e5537b43b7a9ab36566c8fd72f2fb2616d526f0 extends \Twig\Template
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
        if ((twig_length_filter($this->env, ($context["tags"] ?? null)) > 0)) {
            // line 2
            echo "    <h5 class=\"phpdocumentor-tag-list__heading\">Tags</h5>
    <dl class=\"phpdocumentor-tag-list\">
        ";
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["tags"] ?? null));
            foreach ($context['_seq'] as $context["name"] => $context["seriesOfTag"]) {
                // line 5
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["seriesOfTag"]);
                foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                    // line 6
                    echo "                <dt class=\"phpdocumentor-tag-list__entry\">
                    <span class=\"phpdocumentor-tag__name\">";
                    // line 7
                    echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                    echo "</span>
                </dt>
                <dd class=\"phpdocumentor-tag-list__definition\">
                    ";
                    // line 10
                    if (twig_get_attribute($this->env, $this->source, $context["tag"], "version", [], "any", false, false, false, 10)) {
                        // line 11
                        echo "                        <span class=\"phpdocumentor-tag-link\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tag"], "version", [], "any", false, false, false, 11), "html", null, true);
                        echo "</span>
                    ";
                    }
                    // line 13
                    echo "                    ";
                    if (twig_get_attribute($this->env, $this->source, $context["tag"], "type", [], "any", false, false, false, 13)) {
                        // line 14
                        echo "                        <span class=\"phpdocumentor-tag-link\">";
                        echo twig_join_filter(call_user_func_array($this->env->getFilter('route')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["tag"], "type", [], "any", false, false, false, 14), "class:short"]), "|");
                        echo "</span>
                    ";
                    }
                    // line 16
                    echo "                    ";
                    if (twig_get_attribute($this->env, $this->source, $context["tag"], "reference", [], "any", false, false, false, 16)) {
                        // line 17
                        echo "                        <span class=\"phpdocumentor-tag-link\">";
                        echo twig_join_filter(call_user_func_array($this->env->getFilter('route')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["tag"], "reference", [], "any", false, false, false, 17), "class:short"]), "|");
                        echo "</span>
                    ";
                    }
                    // line 19
                    echo "                    ";
                    if (twig_get_attribute($this->env, $this->source, $context["tag"], "link", [], "any", false, false, false, 19)) {
                        // line 20
                        echo "                        <a class=\"phpdocumentor-tag-link\" href=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tag"], "link", [], "any", false, false, false, 20), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tag"], "link", [], "any", false, false, false, 20), "html", null, true);
                        echo "</a>
                    ";
                    }
                    // line 22
                    echo "                    <section class=\"phpdocumentor-description\">";
                    echo call_user_func_array($this->env->getFilter('markdown')->getCallable(), [((twig_get_attribute($this->env, $this->source, $context["tag"], "description", [], "any", true, true, false, 22)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["tag"], "description", [], "any", false, false, false, 22), "")) : (""))]);
                    echo "</section>
                </dd>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 25
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['seriesOfTag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "    </dl>
";
        }
    }

    public function getTemplateName()
    {
        return "tags.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 26,  108 => 25,  98 => 22,  90 => 20,  87 => 19,  81 => 17,  78 => 16,  72 => 14,  69 => 13,  63 => 11,  61 => 10,  55 => 7,  52 => 6,  47 => 5,  43 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "tags.html.twig", "tags.html.twig");
    }
}
