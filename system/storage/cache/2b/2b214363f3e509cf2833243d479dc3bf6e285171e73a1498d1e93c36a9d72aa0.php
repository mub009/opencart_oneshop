<?php

/* so-oneshop/template/product/special.twig */
class __TwigTemplate_5219950c0856a1b170adde573305ab8e26ae997f6850181e37bbcabafba1ddb4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo (isset($context["header"]) ? $context["header"] : null);
        echo "
<div class=\"breadcrumbs\">
  <div class=\"container\">
       <div class=\"current-name\">   
        ";
        // line 5
        $context["last"] = twig_length_filter($this->env, (isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        // line 6
        echo "        ";
        $context["i"] = 0;
        // line 7
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["breadcrumb"] => $context["crumbInfo"]) {
            echo "  
            ";
            // line 8
            $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
            echo "     
            ";
            // line 9
            if (((isset($context["i"]) ? $context["i"] : null) == (isset($context["last"]) ? $context["last"] : null))) {
                echo " 
            ";
                // line 10
                echo $this->getAttribute($context["crumbInfo"], "text", array());
                echo "
          ";
            }
            // line 11
            echo "  
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['breadcrumb'], $context['crumbInfo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "      </div>
      <ul class=\"breadcrumb\">
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 16
            echo "        <li><a href=\"";
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "      </ul>
    </div>
</div>
<div class=\"container\">
  
  <div class=\"row\">";
        // line 23
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
    ";
        // line 24
        if (((isset($context["column_left"]) ? $context["column_left"] : null) && (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 25
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 26
            echo "    ";
        } elseif (((isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 27
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 28
            echo "    ";
        } else {
            // line 29
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 30
            echo "    ";
        }
        // line 31
        echo "    <div id=\"content\" class=\"";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\">";
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo "
\t
\t\t<div class=\"products-category\">
\t\t";
        // line 34
        if ((isset($context["products"]) ? $context["products"] : null)) {
            // line 35
            echo "\t\t\t";
            // line 36
            echo "\t\t\t";
            $this->loadTemplate(((isset($context["theme_directory"]) ? $context["theme_directory"] : null) . "/template/soconfig/listing.twig"), "so-oneshop/template/product/special.twig", 36)->display(array_merge($context, array("listingType" => (isset($context["listingType"]) ? $context["listingType"] : null))));
            // line 37
            echo "\t\t";
        } else {
            // line 38
            echo "\t\t\t<p>";
            echo (isset($context["text_empty"]) ? $context["text_empty"] : null);
            echo "</p>
\t\t\t<div class=\"buttons\">
\t\t\t\t<div class=\"pull-right\"><a href=\"";
            // line 40
            echo (isset($context["continue"]) ? $context["continue"] : null);
            echo "\" class=\"btn btn-primary\">";
            echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
            echo "</a></div>
\t\t\t</div>
\t\t";
        }
        // line 43
        echo "\t</div>
\t
     ";
        // line 45
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "</div>
    ";
        // line 46
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "</div>
</div>

";
        // line 49
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "so-oneshop/template/product/special.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 49,  149 => 46,  145 => 45,  141 => 43,  133 => 40,  127 => 38,  124 => 37,  121 => 36,  119 => 35,  117 => 34,  108 => 31,  105 => 30,  102 => 29,  99 => 28,  96 => 27,  93 => 26,  90 => 25,  88 => 24,  84 => 23,  77 => 18,  66 => 16,  62 => 15,  58 => 13,  51 => 11,  46 => 10,  42 => 9,  38 => 8,  31 => 7,  28 => 6,  26 => 5,  19 => 1,);
    }
}
/* {{ header }}*/
/* <div class="breadcrumbs">*/
/*   <div class="container">*/
/*        <div class="current-name">   */
/*         {% set last = breadcrumbs|length %}*/
/*         {% set i = 0 %}*/
/*         {% for breadcrumb, crumbInfo in breadcrumbs %}  */
/*             {% set i = i + 1 %}     */
/*             {% if i == last  %} */
/*             {{ crumbInfo.text }}*/
/*           {% endif %}  */
/*         {% endfor %}*/
/*       </div>*/
/*       <ul class="breadcrumb">*/
/*         {% for breadcrumb in breadcrumbs %}*/
/*         <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*         {% endfor %}*/
/*       </ul>*/
/*     </div>*/
/* </div>*/
/* <div class="container">*/
/*   */
/*   <div class="row">{{ column_left }}*/
/*     {% if column_left and column_right %}*/
/*     {% set class = 'col-sm-6' %}*/
/*     {% elseif column_left or column_right %}*/
/*     {% set class = 'col-sm-9' %}*/
/*     {% else %}*/
/*     {% set class = 'col-sm-12' %}*/
/*     {% endif %}*/
/*     <div id="content" class="{{ class }}">{{ content_top }}*/
/* 	*/
/* 		<div class="products-category">*/
/* 		{% if products %}*/
/* 			{#==== Product Listing ==== #}*/
/* 			{% include theme_directory~'/template/soconfig/listing.twig' with {listingType: listingType} %}*/
/* 		{% else %}*/
/* 			<p>{{ text_empty }}</p>*/
/* 			<div class="buttons">*/
/* 				<div class="pull-right"><a href="{{ continue }}" class="btn btn-primary">{{ button_continue }}</a></div>*/
/* 			</div>*/
/* 		{% endif %}*/
/* 	</div>*/
/* 	*/
/*      {{ content_bottom }}</div>*/
/*     {{ column_right }}</div>*/
/* </div>*/
/* */
/* {{ footer }}*/
