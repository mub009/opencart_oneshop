<?php

/* so-oneshop/template/extension/module/so_facebook_message/default.twig */
class __TwigTemplate_71036b88189be005627b7aedf925c9c23c982106da79f7b1509c31be124bbedd extends Twig_Template
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
        echo "<div id=\"fb-root\"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = \"//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.10\";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div class=\"so-fb-message ";
        // line 10
        echo $this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "position", array());
        echo "\" style=\"width: ";
        echo $this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "width", array());
        echo "px\">
\t<div class=\"so-fb-ms-inner\" style=\"display: none;\">
\t\t<div class=\"offline_heading\" style=\"width: ";
        // line 12
        echo ($this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "width", array()) - 2);
        echo "px\">
            <label class=\"button_chat_offline_text\">";
        // line 13
        echo $this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "widget_text", array());
        echo "</label>
            <i class=\"fa fa-angle-down shrink_icon\"></i>
        </div>
\t\t<div class=\"fb-page\" 
\t\t\tdata-href=\"";
        // line 17
        echo $this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "page_url", array());
        echo "\" 
\t\t\tdata-tabs=\"";
        // line 18
        echo $this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "tabs", array());
        echo "\" 
\t\t\tdata-width=\"";
        // line 19
        echo $this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "width", array());
        echo "\" 
\t\t\tdata-height=\"";
        // line 20
        echo $this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "height", array());
        echo "\" 
\t\t\tdata-small-header=\"";
        // line 21
        echo ((($this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "small_header", array()) == 1)) ? ("true") : ("false"));
        echo "\" 
\t\t\tdata-adapt-container-width=\"true\" 
\t\t\tdata-hide-cover=\"";
        // line 23
        echo ((($this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "hide_cover", array()) == 1)) ? ("true") : ("false"));
        echo "\" 
\t\t\tdata-show-facepile=\"";
        // line 24
        echo ((($this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "show_facepile", array()) == 1)) ? ("true") : ("false"));
        echo "\">
\t\t\t<blockquote cite=\"";
        // line 25
        echo $this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "page_url", array());
        echo "\" class=\"fb-xfbml-parse-ignore\">
\t\t\t\t<a href=\"";
        // line 26
        echo $this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "page_url", array());
        echo "\">";
        echo $this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "name", array());
        echo "</a>
\t\t\t</blockquote>
\t\t</div>
\t</div>
\t
\t<div class=\"so-fb-ms-bottom so-fb-message-style-";
        // line 31
        echo $this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "button_style", array());
        echo "\">
\t\t";
        // line 32
        if (($this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "button_style", array()) == "default")) {
            // line 33
            echo "      \t<div class=\"so-fb-ms-heading so-fb-message-head\">
      \t\t<img class=\"online\" alt=\"image\" src=\"catalog/view/theme/default/image/so_facebook_message/da.png\">";
            // line 34
            echo $this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "widget_text", array());
            echo "
      \t";
        } elseif (($this->getAttribute(        // line 35
(isset($context["setting"]) ? $context["setting"] : null), "button_style", array()) == "metro")) {
            // line 36
            echo "      \t<div class=\"so-fb-ms-heading so-fb-message-head-metro\">
      \t\t<a href=\"javascript:void(0)\"><span></span>";
            // line 37
            echo $this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "widget_text", array());
            echo "</a>
      \t";
        } elseif (($this->getAttribute(        // line 38
(isset($context["setting"]) ? $context["setting"] : null), "button_style", array()) == "icon")) {
            // line 39
            echo "      \t<div class=\"so-fb-ms-heading so-fb-message-head-icon\">
      \t\t<img  src=\"catalog/view/theme/default/image/so_facebook_message/fbmessenger.svg\" style=\"width:50px;\">
      \t";
        }
        // line 42
        echo "       \t</div>
\t</div>\t
</div>
<script type=\"text/javascript\">
\tjQuery(document).ready(function(\$) {
\t\t\$(document).on('click', '.so-fb-ms-bottom', function() {
\t\t\t\$('.so-fb-ms-inner').show();
\t\t\t\$(this).hide();
\t\t})

\t\t\$(document).on('click', '.offline_heading', function() {
\t\t\t\$('.so-fb-ms-inner').hide();
\t\t\t\$('.so-fb-ms-bottom').show();
\t\t})
\t})
</script>";
    }

    public function getTemplateName()
    {
        return "so-oneshop/template/extension/module/so_facebook_message/default.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 42,  115 => 39,  113 => 38,  109 => 37,  106 => 36,  104 => 35,  100 => 34,  97 => 33,  95 => 32,  91 => 31,  81 => 26,  77 => 25,  73 => 24,  69 => 23,  64 => 21,  60 => 20,  56 => 19,  52 => 18,  48 => 17,  41 => 13,  37 => 12,  30 => 10,  19 => 1,);
    }
}
/* <div id="fb-root"></div>*/
/* <script>(function(d, s, id) {*/
/*   var js, fjs = d.getElementsByTagName(s)[0];*/
/*   if (d.getElementById(id)) return;*/
/*   js = d.createElement(s); js.id = id;*/
/*   js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.10";*/
/*   fjs.parentNode.insertBefore(js, fjs);*/
/* }(document, 'script', 'facebook-jssdk'));</script>*/
/* */
/* <div class="so-fb-message {{ setting.position }}" style="width: {{ setting.width }}px">*/
/* 	<div class="so-fb-ms-inner" style="display: none;">*/
/* 		<div class="offline_heading" style="width: {{ setting.width - 2 }}px">*/
/*             <label class="button_chat_offline_text">{{ setting.widget_text }}</label>*/
/*             <i class="fa fa-angle-down shrink_icon"></i>*/
/*         </div>*/
/* 		<div class="fb-page" */
/* 			data-href="{{ setting.page_url }}" */
/* 			data-tabs="{{ setting.tabs }}" */
/* 			data-width="{{ setting.width }}" */
/* 			data-height="{{ setting.height }}" */
/* 			data-small-header="{{ setting.small_header == 1 ? 'true' : 'false' }}" */
/* 			data-adapt-container-width="true" */
/* 			data-hide-cover="{{ setting.hide_cover == 1 ? 'true' : 'false' }}" */
/* 			data-show-facepile="{{ setting.show_facepile == 1 ? 'true' : 'false' }}">*/
/* 			<blockquote cite="{{ setting.page_url }}" class="fb-xfbml-parse-ignore">*/
/* 				<a href="{{ setting.page_url }}">{{ setting.name }}</a>*/
/* 			</blockquote>*/
/* 		</div>*/
/* 	</div>*/
/* 	*/
/* 	<div class="so-fb-ms-bottom so-fb-message-style-{{ setting.button_style }}">*/
/* 		{% if setting.button_style == 'default' %}*/
/*       	<div class="so-fb-ms-heading so-fb-message-head">*/
/*       		<img class="online" alt="image" src="catalog/view/theme/default/image/so_facebook_message/da.png">{{ setting.widget_text }}*/
/*       	{% elseif setting.button_style == 'metro' %}*/
/*       	<div class="so-fb-ms-heading so-fb-message-head-metro">*/
/*       		<a href="javascript:void(0)"><span></span>{{ setting.widget_text }}</a>*/
/*       	{% elseif setting.button_style == 'icon' %}*/
/*       	<div class="so-fb-ms-heading so-fb-message-head-icon">*/
/*       		<img  src="catalog/view/theme/default/image/so_facebook_message/fbmessenger.svg" style="width:50px;">*/
/*       	{% endif %}*/
/*        	</div>*/
/* 	</div>	*/
/* </div>*/
/* <script type="text/javascript">*/
/* 	jQuery(document).ready(function($) {*/
/* 		$(document).on('click', '.so-fb-ms-bottom', function() {*/
/* 			$('.so-fb-ms-inner').show();*/
/* 			$(this).hide();*/
/* 		})*/
/* */
/* 		$(document).on('click', '.offline_heading', function() {*/
/* 			$('.so-fb-ms-inner').hide();*/
/* 			$('.so-fb-ms-bottom').show();*/
/* 		})*/
/* 	})*/
/* </script>*/
