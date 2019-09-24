<?php

/* so-oneshop/template/common/footer.twig */
class __TwigTemplate_3010e2ca5a2085d719a4d89289887c14eaec0e71eb84ed1576769c4ab831f091 extends Twig_Template
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
        // line 2
        echo "
";
        // line 3
        if (($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "typefooter"), "method") == "1")) {
            // line 4
            echo "\t";
            $this->loadTemplate(((isset($context["theme_directory"]) ? $context["theme_directory"] : null) . "/template/footer/footer1.twig"), "so-oneshop/template/common/footer.twig", 4)->display(array_merge($context, array("typefooter" => $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "typefooter"), "method"))));
        } elseif (($this->getAttribute(        // line 5
(isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "typefooter"), "method") == "2")) {
            // line 6
            echo "\t";
            $this->loadTemplate(((isset($context["theme_directory"]) ? $context["theme_directory"] : null) . "/template/footer/footer2.twig"), "so-oneshop/template/common/footer.twig", 6)->display(array_merge($context, array("typefooter" => $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "typefooter"), "method"))));
        } elseif (($this->getAttribute(        // line 7
(isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "typefooter"), "method") == "3")) {
            // line 8
            echo "\t";
            $this->loadTemplate(((isset($context["theme_directory"]) ? $context["theme_directory"] : null) . "/template/footer/footer3.twig"), "so-oneshop/template/common/footer.twig", 8)->display(array_merge($context, array("typefooter" => $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "typefooter"), "method"))));
        }
        // line 10
        echo "

\t
";
        // line 14
        if ($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "backtop"), "method")) {
            echo " 
\t<div class=\"back-to-top\"><i class=\"fa fa-angle-up\"></i></div>
";
        }
        // line 16
        echo " 

";
        // line 18
        if ((($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "social_fb_status"), "method") || $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "social_twitter_status"), "method")) || $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "social_custom_status"), "method"))) {
            // line 19
            echo "\t<section class=\"social-widgets visible-lg\">
\t\t<ul class=\"items\">
\t\t\t";
            // line 21
            if ($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "social_fb_status"), "method")) {
                echo " 
\t\t\t<li class=\"item item-01 facebook\">
\t\t\t\t<a href=\"catalog/view/theme/";
                // line 23
                echo (isset($context["theme_directory"]) ? $context["theme_directory"] : null);
                echo "/template/social/facebook.php?account_fb=";
                echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "facebook"), "method");
                echo " \" class=\"tab-icon\"><span class=\"fa fa-facebook\"></span></a>
\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t<div class=\"title\"><h5>FACEBOOK</h5></div>
\t\t\t\t\t<div class=\"loading\">
\t\t\t\t\t\t<img src=\"catalog/view/theme/";
                // line 27
                echo (isset($context["theme_directory"]) ? $context["theme_directory"] : null);
                echo "/images/ajax-loader.gif\" class=\"ajaxloader\" alt=\"loader\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</li>
\t\t\t";
            }
            // line 31
            echo " 

\t\t\t";
            // line 33
            if ($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "social_twitter_status"), "method")) {
                echo " 
\t\t\t<li class=\"item item-02 twitter\">
\t\t\t\t<a href=\"catalog/view/theme/";
                // line 35
                echo (isset($context["theme_directory"]) ? $context["theme_directory"] : null);
                echo "/template/social/twitter.php?account_twitter=";
                echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "twitter"), "method");
                echo " \" class=\"tab-icon\"><span class=\"fa fa-twitter\"></span></a>
\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t<div class=\"title\"><h5>TWITTER FEEDS</h5></div>
\t\t\t\t\t<div class=\"loading\">
\t\t\t\t\t\t<img src=\"catalog/view/theme/";
                // line 39
                echo (isset($context["theme_directory"]) ? $context["theme_directory"] : null);
                echo "/images/ajax-loader.gif\" class=\"ajaxloader\" alt=\"loader\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</li>
\t\t\t";
            }
            // line 43
            echo " 

\t\t\t";
            // line 45
            if ($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "social_custom_status"), "method")) {
                echo " 
\t\t\t<li class=\"item item-03 youtube\">
\t\t\t\t<div class=\"tab-icon\"><span class=\"fa fa-youtube\"></span></div>
\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t<div class=\"loading\">
\t\t\t\t\t\t";
                // line 50
                if ($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "video_code"), "method")) {
                    // line 51
                    echo "\t\t\t\t\t\t\t\t";
                    echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "decode_entities", array(0 => $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "video_code"), "method")), "method");
                    echo "
\t\t\t\t\t\t";
                }
                // line 52
                echo " 
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</li>
\t\t\t";
            }
            // line 56
            echo " 
\t\t</ul>
\t</section>
\t
";
        }
        // line 60
        echo " 

</div>";
    }

    public function getTemplateName()
    {
        return "so-oneshop/template/common/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 60,  134 => 56,  127 => 52,  121 => 51,  119 => 50,  111 => 45,  107 => 43,  99 => 39,  90 => 35,  85 => 33,  81 => 31,  73 => 27,  64 => 23,  59 => 21,  55 => 19,  53 => 18,  49 => 16,  43 => 14,  38 => 10,  34 => 8,  32 => 7,  29 => 6,  27 => 5,  24 => 4,  22 => 3,  19 => 2,);
    }
}
/* {# =========== Show Header==============#}*/
/* */
/* {% if soconfig.get_settings('typefooter') =='1'%}*/
/* 	{% include theme_directory~'/template/footer/footer1.twig' with {typefooter: soconfig.get_settings('typefooter')} %}*/
/* {% elseif soconfig.get_settings('typefooter') =='2'%}*/
/* 	{% include theme_directory~'/template/footer/footer2.twig' with {typefooter: soconfig.get_settings('typefooter')} %}*/
/* {% elseif soconfig.get_settings('typefooter') =='3'%}*/
/* 	{% include theme_directory~'/template/footer/footer3.twig' with {typefooter: soconfig.get_settings('typefooter')} %}*/
/* {% endif %}*/
/* */
/* */
/* 	*/
/* {# =========== Show BackToTop==============#}*/
/* {% if soconfig.get_settings('backtop') %} */
/* 	<div class="back-to-top"><i class="fa fa-angle-up"></i></div>*/
/* {% endif %} */
/* */
/* {% if soconfig.get_settings('social_fb_status') or soconfig.get_settings('social_twitter_status')  or soconfig.get_settings('social_custom_status') %}*/
/* 	<section class="social-widgets visible-lg">*/
/* 		<ul class="items">*/
/* 			{% if soconfig.get_settings('social_fb_status') %} */
/* 			<li class="item item-01 facebook">*/
/* 				<a href="catalog/view/theme/{{ theme_directory }}/template/social/facebook.php?account_fb={{soconfig.get_settings('facebook')}} " class="tab-icon"><span class="fa fa-facebook"></span></a>*/
/* 				<div class="tab-content">*/
/* 					<div class="title"><h5>FACEBOOK</h5></div>*/
/* 					<div class="loading">*/
/* 						<img src="catalog/view/theme/{{ theme_directory }}/images/ajax-loader.gif" class="ajaxloader" alt="loader">*/
/* 					</div>*/
/* 				</div>*/
/* 			</li>*/
/* 			{% endif %} */
/* */
/* 			{% if soconfig.get_settings('social_twitter_status') %} */
/* 			<li class="item item-02 twitter">*/
/* 				<a href="catalog/view/theme/{{ theme_directory }}/template/social/twitter.php?account_twitter={{ soconfig.get_settings('twitter')}} " class="tab-icon"><span class="fa fa-twitter"></span></a>*/
/* 				<div class="tab-content">*/
/* 					<div class="title"><h5>TWITTER FEEDS</h5></div>*/
/* 					<div class="loading">*/
/* 						<img src="catalog/view/theme/{{ theme_directory }}/images/ajax-loader.gif" class="ajaxloader" alt="loader">*/
/* 					</div>*/
/* 				</div>*/
/* 			</li>*/
/* 			{% endif %} */
/* */
/* 			{% if soconfig.get_settings('social_custom_status') %} */
/* 			<li class="item item-03 youtube">*/
/* 				<div class="tab-icon"><span class="fa fa-youtube"></span></div>*/
/* 				<div class="tab-content">*/
/* 					<div class="loading">*/
/* 						{% if soconfig.get_settings('video_code') %}*/
/* 								{{ soconfig.decode_entities( soconfig.get_settings('video_code') ) }}*/
/* 						{% endif %} */
/* 					</div>*/
/* 				</div>*/
/* 			</li>*/
/* 			{% endif %} */
/* 		</ul>*/
/* 	</section>*/
/* 	*/
/* {% endif %} */
/* */
/* </div>*/
