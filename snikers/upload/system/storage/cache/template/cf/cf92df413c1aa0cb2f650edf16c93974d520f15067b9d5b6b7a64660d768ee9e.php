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

/* zCamera/template/extension/module/featured.twig */
class __TwigTemplate_61ee0551b13f64895e61d149ce16bcac5ec77f0b4e37a540560a577d447d912a extends \Twig\Template
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
        echo "<div class=\"heading\"><h3>";
        echo ($context["heading_title"] ?? null);
        echo "</h3><hr class=\"gradient-divider\"></hr></div>
<div class=\"product-content\">
\t<div class=\"row\">
\t ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 5
            echo "\t  <div class=\"product-layout col-lg-3 col-md-3 col-sm-6 col-xs-12\">
\t\t<div class=\"product-thumb transition\">
\t\t  <div class=\"nd-wrap nd-style-1\">
\t\t\t<center><a href=\"";
            // line 8
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 8);
            echo "\">
\t\t\t  <img src=\"";
            // line 9
            echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 9);
            echo "\" alt=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 9);
            echo "\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 9);
            echo "\" class=\"img-responsive\" />
\t\t\t</a></center>
\t\t\t<div class=\"nd-content\">
\t\t\t\t<div class=\"nd-content_inner\">
\t\t\t\t\t<div class=\"nd-content_inner1\">
\t\t\t\t\t\t<h4 class=\"nd-title\"><span><a href=\"";
            // line 14
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 14);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 14);
            echo "</a></span></h4>
\t\t\t\t\t\t<span class=\"nd-icon\">
\t\t\t\t\t\t\t<span class=\"fa fa-shopping-cart fa-fw\" data-toggle=\"tooltip\" title=\"";
            // line 16
            echo ($context["button_cart"] ?? null);
            echo "\" onclick=\"cart.add('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 16);
            echo "');\"></span>
\t\t\t\t\t\t</span>
\t\t\t\t\t\t<span class=\"nd-icon\">
\t\t\t\t\t\t\t<span class=\"fa fa-heart fa-fw\" data-toggle=\"tooltip\" title=\"";
            // line 19
            echo ($context["button_wishlist"] ?? null);
            echo "\" onclick=\"wishlist.add('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 19);
            echo "');\"></span>
\t\t\t\t\t\t</span>
\t\t\t\t\t\t<span class=\"nd-icon\">
\t\t\t\t\t\t\t<span class=\"fa fa-exchange fa-fw\" data-toggle=\"tooltip\" title=\"";
            // line 22
            echo ($context["button_compare"] ?? null);
            echo "\" onclick=\"compare.add('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 22);
            echo "');\"></span>
\t\t\t\t\t\t</span>
\t\t\t\t\t</div>\t\t\t\t\t
\t\t\t\t</div>\t\t\t\t
\t\t\t</div>
\t\t  </div>
\t\t  <div class=\"caption\">
\t\t\t<p>";
            // line 29
            echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 29);
            echo "</p>
\t\t\t";
            // line 30
            if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 30)) {
                // line 31
                echo "\t\t\t<div class=\"rating\">
\t\t\t  ";
                // line 32
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(5);
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 33
                    echo "\t\t\t  ";
                    if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 33) < $context["i"])) {
                        // line 34
                        echo "\t\t\t  <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t  ";
                    } else {
                        // line 36
                        echo "\t\t\t  <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t  ";
                    }
                    // line 38
                    echo "\t\t\t  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 39
                echo "\t\t\t</div>
\t\t\t";
            }
            // line 41
            echo "\t\t\t";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 41)) {
                // line 42
                echo "\t\t\t<p class=\"price\">
\t\t\t  ";
                // line 43
                if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 43)) {
                    // line 44
                    echo "\t\t\t  ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 44);
                    echo "
\t\t\t  ";
                } else {
                    // line 46
                    echo "\t\t\t  <span class=\"price-new\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 46);
                    echo "</span> <span class=\"price-old\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 46);
                    echo "</span>
\t\t\t  ";
                }
                // line 48
                echo "\t\t\t  ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 48)) {
                    // line 49
                    echo "\t\t\t  <span class=\"price-tax\">";
                    echo ($context["text_tax"] ?? null);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 49);
                    echo "</span>
\t\t\t  ";
                }
                // line 51
                echo "\t\t\t</p>
\t\t\t";
            }
            // line 53
            echo "\t\t  </div>
\t\t</div>
\t  </div>
\t  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "\t  
\t  ";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 59
            echo "\t\t  <div class=\"product-layout-col\">
\t\t   <div class=\"product-thumb transition\">
\t\t\t<div class=\"col-sm-4\">
\t\t\t  <div class=\"image\"><a href=\"";
            // line 62
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 62);
            echo "\"><img src=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 62);
            echo "\" alt=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 62);
            echo "\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 62);
            echo "\" class=\"img-responsive\" /></a></div>
\t\t\t</div>
\t\t\t<div class=\"col-sm-8\">
\t\t\t  <div class=\"caption\">
\t\t\t\t<h4><a href=\"";
            // line 66
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 66);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 66);
            echo "</a></h4>
\t\t\t\t";
            // line 67
            if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 67)) {
                // line 68
                echo "\t\t\t\t<div class=\"rating\">
\t\t\t\t  ";
                // line 69
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(5);
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 70
                    echo "\t\t\t\t  ";
                    if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 70) < $context["i"])) {
                        // line 71
                        echo "\t\t\t\t  <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t  ";
                    } else {
                        // line 73
                        echo "\t\t\t\t  <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t  ";
                    }
                    // line 75
                    echo "\t\t\t\t  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 76
                echo "\t\t\t\t</div>
\t\t\t\t";
            }
            // line 78
            echo "\t\t\t\t";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 78)) {
                // line 79
                echo "\t\t\t\t<p class=\"price\">
\t\t\t\t  ";
                // line 80
                if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 80)) {
                    // line 81
                    echo "\t\t\t\t  ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 81);
                    echo "
\t\t\t\t  ";
                } else {
                    // line 83
                    echo "\t\t\t\t  <span class=\"price-new\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 83);
                    echo "</span> <span class=\"price-old\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 83);
                    echo "</span>
\t\t\t\t  ";
                }
                // line 85
                echo "\t\t\t\t  ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 85)) {
                    // line 86
                    echo "\t\t\t\t  <span class=\"price-tax\">";
                    echo ($context["text_tax"] ?? null);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 86);
                    echo "</span>
\t\t\t\t  ";
                }
                // line 88
                echo "\t\t\t\t</p>
\t\t\t\t";
            }
            // line 90
            echo "\t\t\t  </div>
\t\t\t </div>
\t\t   </div>
\t\t  </div>
\t  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 95
        echo "\t  
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "zCamera/template/extension/module/featured.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  292 => 95,  282 => 90,  278 => 88,  270 => 86,  267 => 85,  259 => 83,  253 => 81,  251 => 80,  248 => 79,  245 => 78,  241 => 76,  235 => 75,  231 => 73,  227 => 71,  224 => 70,  220 => 69,  217 => 68,  215 => 67,  209 => 66,  196 => 62,  191 => 59,  187 => 58,  184 => 57,  175 => 53,  171 => 51,  163 => 49,  160 => 48,  152 => 46,  146 => 44,  144 => 43,  141 => 42,  138 => 41,  134 => 39,  128 => 38,  124 => 36,  120 => 34,  117 => 33,  113 => 32,  110 => 31,  108 => 30,  104 => 29,  92 => 22,  84 => 19,  76 => 16,  69 => 14,  57 => 9,  53 => 8,  48 => 5,  44 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "zCamera/template/extension/module/featured.twig", "");
    }
}
