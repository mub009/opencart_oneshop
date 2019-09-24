<?php

/* so-oneshop/template/extension/module/so_deals/default2.twig */
class __TwigTemplate_b2d46f26e8d71773ee174d794d4ce884614f345537705eccf115e773862e5fa6 extends Twig_Template
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
        echo "<script>
//<![CDATA[
\tvar listdeal";
        // line 3
        echo (isset($context["module"]) ? $context["module"] : null);
        echo " = [];
//]]>
</script>
<div class=\"module ";
        // line 6
        echo (isset($context["direction_class"]) ? $context["direction_class"] : null);
        echo " ";
        echo (isset($context["class_suffix"]) ? $context["class_suffix"] : null);
        echo "\">    
\t<h3 class=\"modtitle\">
\t\t";
        // line 8
        if ((isset($context["disp_title_module"]) ? $context["disp_title_module"] : null)) {
            echo (isset($context["head_name"]) ? $context["head_name"] : null);
        }
        // line 9
        echo "\t</h3>
\t";
        // line 10
        if (((isset($context["pre_text"]) ? $context["pre_text"] : null) != "")) {
            // line 11
            echo "\t\t<div class=\"form-group\">
\t\t\t";
            // line 12
            echo (isset($context["pre_text"]) ? $context["pre_text"] : null);
            echo "
\t\t</div>
\t";
        }
        // line 15
        echo "\t<div class=\"modcontent\">
\t\t";
        // line 16
        if ((array_key_exists("list", $context) && (isset($context["list"]) ? $context["list"] : null))) {
            // line 17
            echo "\t\t    ";
            $context["tag_id"] = (("so_deals_" . twig_random($this->env)) . twig_date_format_filter($this->env, "now", "mdYHis"));
            // line 18
            echo "\t\t    ";
            $context["class_respl"] = ((((((((("preset00-" . (isset($context["nb_column0"]) ? $context["nb_column0"] : null)) . " preset01-") . (isset($context["nb_column1"]) ? $context["nb_column1"] : null)) . " preset02-") . (isset($context["nb_column2"]) ? $context["nb_column2"] : null)) . " preset03-") . (isset($context["nb_column3"]) ? $context["nb_column3"] : null)) . " preset04-") . (isset($context["nb_column4"]) ? $context["nb_column4"] : null));
            // line 19
            echo "\t\t    ";
            $context["i"] = 0;
            // line 20
            echo "\t\t    ";
            $context["count_item"] = twig_length_filter($this->env, (isset($context["list"]) ? $context["list"] : null));
            // line 21
            echo "\t\t    ";
            if (((isset($context["include_js"]) ? $context["include_js"] : null) == "owlCarousel")) {
                // line 22
                echo "\t\t    \t";
                $this->loadTemplate(((((isset($context["config_theme"]) ? $context["config_theme"] : null) . "/template/extension/module/so_deals/") . (isset($context["store_layout"]) ? $context["store_layout"] : null)) . "_carousel.twig"), "so-oneshop/template/extension/module/so_deals/default2.twig", 22)->display($context);
                // line 23
                echo "\t\t    ";
            } elseif (((isset($context["include_js"]) ? $context["include_js"] : null) == "slick")) {
                // line 24
                echo "\t\t    \t";
                echo twig_include($this->env, $context, ((((isset($context["config_theme"]) ? $context["config_theme"] : null) . "/template/extension/module/so_deals/") . (isset($context["store_layout"]) ? $context["store_layout"] : null)) . "_slick.twig"));
                echo "
\t\t    ";
            } else {
                // line 26
                echo "\t\t    \t";
                echo "";
                echo "
\t\t    ";
            }
            // line 28
            echo "\t\t";
        } else {
            // line 29
            echo "\t    \t";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_noitem"), "method");
            echo "
\t    ";
        }
        // line 31
        echo "\t</div>
\t
\t";
        // line 33
        if (((isset($context["post_text"]) ? $context["post_text"] : null) != "")) {
            // line 34
            echo "\t\t<div class=\"form-group\">
\t\t\t";
            // line 35
            echo (isset($context["post_text"]) ? $context["post_text"] : null);
            echo "
\t\t</div>
\t";
        }
        // line 38
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "so-oneshop/template/extension/module/so_deals/default2.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 38,  110 => 35,  107 => 34,  105 => 33,  101 => 31,  95 => 29,  92 => 28,  86 => 26,  80 => 24,  77 => 23,  74 => 22,  71 => 21,  68 => 20,  65 => 19,  62 => 18,  59 => 17,  57 => 16,  54 => 15,  48 => 12,  45 => 11,  43 => 10,  40 => 9,  36 => 8,  29 => 6,  23 => 3,  19 => 1,);
    }
}
/* <script>*/
/* //<![CDATA[*/
/* 	var listdeal{{ module }} = [];*/
/* //]]>*/
/* </script>*/
/* <div class="module {{ direction_class }} {{ class_suffix }}">    */
/* 	<h3 class="modtitle">*/
/* 		{% if disp_title_module %}{{ head_name }}{% endif %}*/
/* 	</h3>*/
/* 	{% if pre_text != '' %}*/
/* 		<div class="form-group">*/
/* 			{{ pre_text }}*/
/* 		</div>*/
/* 	{% endif %}*/
/* 	<div class="modcontent">*/
/* 		{% if list is defined and list %}*/
/* 		    {% set tag_id = 'so_deals_' ~ random() ~ "now"|date("mdYHis") %}*/
/* 		    {% set class_respl = 'preset00-'~nb_column0~' preset01-'~nb_column1~' preset02-'~nb_column2~' preset03-'~nb_column3~' preset04-'~nb_column4 %}*/
/* 		    {% set i = 0 %}*/
/* 		    {% set count_item = list|length %}*/
/* 		    {% if include_js == 'owlCarousel' %}*/
/* 		    	{% include (config_theme~'/template/extension/module/so_deals/'~store_layout~'_carousel.twig') %}*/
/* 		    {% elseif include_js == 'slick' %}*/
/* 		    	{{ include (config_theme~'/template/extension/module/so_deals/'~store_layout~'_slick.twig') }}*/
/* 		    {% else %}*/
/* 		    	{{ '' }}*/
/* 		    {% endif %}*/
/* 		{% else %}*/
/* 	    	{{ objlang.get('text_noitem') }}*/
/* 	    {% endif %}*/
/* 	</div>*/
/* 	*/
/* 	{% if post_text != '' %}*/
/* 		<div class="form-group">*/
/* 			{{ post_text }}*/
/* 		</div>*/
/* 	{% endif %}*/
/* </div>*/
/* */
