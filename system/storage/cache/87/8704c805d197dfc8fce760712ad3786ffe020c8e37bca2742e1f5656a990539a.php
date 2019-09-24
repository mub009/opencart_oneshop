<?php

/* so-oneshop/template/header/header1.twig */
class __TwigTemplate_14c00e6181ed331ffca218a2714b457dcf580863717ab301f5655c0a0d5486a9 extends Twig_Template
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
        $context["hidden_headertop"] = (((($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "toppanel_type"), "method") == "1") || ($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "toppanel_type"), "method") == "2"))) ? ("hidden-compact") : (""));
        // line 3
        $context["hidden_headercenter"] = ((($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "toppanel_type"), "method") == "2")) ? ("hidden-compact") : (""));
        // line 4
        $context["hidden_headerbottom"] = ((($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "toppanel_type"), "method") == "1")) ? ("hidden-compact") : (""));
        // line 5
        echo "
<header id=\"header\" class=\" variant typeheader-";
        // line 6
        echo (((isset($context["typeheader"]) ? $context["typeheader"] : null)) ? ((isset($context["typeheader"]) ? $context["typeheader"] : null)) : ("1"));
        echo "\">
\t";
        // line 7
        echo "  
\t<div class=\"header-top ";
        // line 8
        echo (isset($context["hidden_headertop"]) ? $context["hidden_headertop"] : null);
        echo "\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"header-top-left  col-lg-6 col-md-5 col-sm-6 col-xs-2\">
\t\t\t\t\t<ul class=\"top-link list-inline\">
\t\t\t\t\t\t";
        // line 13
        if (($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "phone_status"), "method") && $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "contact_number"), "method"))) {
            // line 14
            echo "\t\t\t\t\t\t<li class=\"telephone hidden-xs hidden-sm\" >
\t\t\t\t\t\t\t";
            // line 15
            echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "decode_entities", array(0 => $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "contact_number"), "method")), "method");
            echo "
\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
        }
        // line 18
        echo "\t\t\t\t\t\t";
        if ($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "welcome_message_status"), "method")) {
            // line 19
            echo "\t\t\t\t\t\t\t<li class=\"hidden-sm hidden-xs welcome-msg\">
\t\t\t\t\t\t\t\t";
            // line 20
            if ( !twig_test_empty($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "welcome_message"), "method"))) {
                // line 21
                echo "\t\t\t\t\t\t\t\t\t";
                echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "decode_entities", array(0 => $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "welcome_message"), "method")), "method");
                echo "
\t\t\t\t\t\t\t\t";
            }
            // line 22
            echo " 
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
        }
        // line 25
        echo "\t\t\t\t\t</ul>\t\t
\t\t\t\t</div>
\t\t\t\t<div class=\"header-top-right collapsed-block col-lg-6 col-md-7 col-sm-6 col-xs-10\">\t\t
\t\t\t\t\t
\t\t\t\t\t\t<ul class=\"top-link list-inline\">
\t\t\t\t\t\t\t";
        // line 30
        if ($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "lang_status"), "method")) {
            // line 31
            echo "\t\t\t\t\t\t\t<li class=\"currency\"> ";
            echo (isset($context["currency"]) ? $context["currency"] : null);
            echo "  </li>
\t\t\t\t\t\t\t<li class=\"language\">";
            // line 32
            echo (isset($context["language"]) ? $context["language"] : null);
            echo " </li>\t
\t\t\t\t\t\t\t";
        }
        // line 33
        echo " 
\t\t\t\t\t\t\t<li class=\"account\" id=\"my_account\"><a href=\"";
        // line 34
        echo (isset($context["account"]) ? $context["account"] : null);
        echo "\" title=\"";
        echo (isset($context["text_account"]) ? $context["text_account"] : null);
        echo " \" class=\"btn-xs dropdown-toggle\" data-toggle=\"dropdown\"> <span class=\"hidden-xs\">";
        echo (isset($context["text_account"]) ? $context["text_account"] : null);
        echo " </span> <span class=\"fa fa-caret-down\"></span></a>
\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu \">
\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 36
        echo (isset($context["wishlist"]) ? $context["wishlist"] : null);
        echo "\" title=\"";
        echo (isset($context["text_wishlist"]) ? $context["text_wishlist"] : null);
        echo "\">";
        echo (isset($context["text_wishlist"]) ? $context["text_wishlist"] : null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 37
        echo (isset($context["compare"]) ? $context["compare"] : null);
        echo "\" title=\"";
        echo (isset($context["text_compare"]) ? $context["text_compare"] : null);
        echo "\">";
        echo (isset($context["text_compare"]) ? $context["text_compare"] : null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t";
        // line 38
        if ((isset($context["logged"]) ? $context["logged"] : null)) {
            // line 39
            echo "\t\t\t\t\t\t\t\t\t<li><a href=\"";
            echo (isset($context["account"]) ? $context["account"] : null);
            echo "\">";
            echo (isset($context["text_account"]) ? $context["text_account"] : null);
            echo "</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"";
            // line 40
            echo (isset($context["order"]) ? $context["order"] : null);
            echo "\">";
            echo (isset($context["text_order"]) ? $context["text_order"] : null);
            echo "</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"";
            // line 41
            echo (isset($context["transaction"]) ? $context["transaction"] : null);
            echo "\">";
            echo (isset($context["text_transaction"]) ? $context["text_transaction"] : null);
            echo "</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"";
            // line 42
            echo (isset($context["download"]) ? $context["download"] : null);
            echo "\">";
            echo (isset($context["text_download"]) ? $context["text_download"] : null);
            echo "</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"";
            // line 43
            echo (isset($context["logout"]) ? $context["logout"] : null);
            echo "\"><i class=\"fa fa-sign-out\" aria-hidden=\"true\"></i> ";
            echo (isset($context["text_logout"]) ? $context["text_logout"] : null);
            echo "</a></li>
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 45
            echo "
\t\t\t\t\t\t\t\t\t<li><a href=\"";
            // line 46
            echo (isset($context["register"]) ? $context["register"] : null);
            echo "\">";
            echo (isset($context["text_register"]) ? $context["text_register"] : null);
            echo "</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"";
            // line 47
            echo (isset($context["login"]) ? $context["login"] : null);
            echo "\">";
            echo (isset($context["text_login"]) ? $context["text_login"] : null);
            echo "</a></li>
\t\t\t\t\t\t\t\t\t";
        }
        // line 48
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>\t
\t\t\t\t\t\t</ul>\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t
\t";
        // line 57
        echo " 
\t<div class=\"header-middle ";
        // line 58
        echo (isset($context["hidden_headercenter"]) ? $context["hidden_headercenter"] : null);
        echo "\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">\t\t\t
\t\t\t\t<div class=\"navbar-logo col-lg-3 col-md-3 col-sm-12 col-xs-12\">
\t\t\t\t\t<div class=\"logo\">
\t\t\t\t   \t\t";
        // line 63
        echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_logo", array(), "method");
        echo "
\t\t\t\t   \t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"middle2 col-lg-6 col-md-5 col-sm-6 col-xs-6\">\t
\t\t\t\t\t<div class=\"search-header-w\">
\t\t\t\t\t\t<div class=\"icon-search hidden-lg hidden-md\"><i class=\"fa fa-search\"></i></div>\t\t\t\t\t\t\t\t
\t\t\t\t\t\t";
        // line 69
        echo (isset($context["search_block"]) ? $context["search_block"] : null);
        echo "
\t\t\t\t\t</div>\t\t\t\t
\t\t\t\t</div>
\t\t\t\t<div class=\"middle-right col-lg-3 col-md-4 col-sm-6 col-xs-6\">\t
\t\t\t\t\t<div class=\"shopping_cart\">\t\t\t\t\t\t\t
\t\t\t\t\t \t";
        // line 74
        echo (isset($context["cart"]) ? $context["cart"] : null);
        echo "
\t\t\t\t\t</div>\t\t\t
\t\t\t\t\t<ul class=\"middle-link list-inline\">
\t\t\t\t\t\t<li class=\"compare hidden-sm hidden-xs\"><a href=\"";
        // line 77
        echo (isset($context["compare"]) ? $context["compare"] : null);
        echo "\"  class=\"top-link-compare\" title=\"";
        echo (isset($context["text_compare"]) ? $context["text_compare"] : null);
        echo " \">";
        echo (isset($context["text_compare"]) ? $context["text_compare"] : null);
        echo "</a></li>
\t\t\t\t\t\t<li class=\"wishlist hidden-sm hidden-xs\"><a href=\"";
        // line 78
        echo (isset($context["wishlist"]) ? $context["wishlist"] : null);
        echo "\" class=\"top-link-wishlist\" title=\"";
        echo (isset($context["text_wishlist"]) ? $context["text_wishlist"] : null);
        echo " \">";
        echo (isset($context["text_wishlist"]) ? $context["text_wishlist"] : null);
        echo "</a></li>
\t\t\t\t\t\t
\t\t\t\t\t\t";
        // line 80
        if ($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "checkout_status"), "method")) {
            // line 81
            echo "\t\t\t\t\t\t\t<li class=\"checkout hidden-xs\"><a href=\"";
            echo (isset($context["checkout"]) ? $context["checkout"] : null);
            echo " \" class=\"btn-link\" title=\"";
            echo (isset($context["text_checkout"]) ? $context["text_checkout"] : null);
            echo " \"><span >";
            echo (isset($context["text_checkout"]) ? $context["text_checkout"] : null);
            echo " </span></a></li>
\t\t\t\t\t\t";
        }
        // line 82
        echo " 
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"header-bottom ";
        // line 89
        echo (isset($context["hidden_headerbottom"]) ? $context["hidden_headerbottom"] : null);
        echo "\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"header-bottom-inner\">
\t\t\t\t\t<div class=\"header-bottom-left menu-vertical col-lg-3 col-md-3 col-sm-6 col-xs-6\">
\t\t\t\t\t\t";
        // line 94
        echo (isset($context["content_menu2"]) ? $context["content_menu2"] : null);
        echo "\t\t
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"header-bottom-right col-lg-9 col-md-9 col-sm-6 col-xs-6\">\t\t\t\t\t
\t\t\t\t\t\t";
        // line 98
        echo (isset($context["content_menu1"]) ? $context["content_menu1"] : null);
        echo "\t\t\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t\t
</header>";
    }

    public function getTemplateName()
    {
        return "so-oneshop/template/header/header1.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  268 => 98,  261 => 94,  253 => 89,  244 => 82,  234 => 81,  232 => 80,  223 => 78,  215 => 77,  209 => 74,  201 => 69,  192 => 63,  184 => 58,  181 => 57,  170 => 48,  163 => 47,  157 => 46,  154 => 45,  147 => 43,  141 => 42,  135 => 41,  129 => 40,  122 => 39,  120 => 38,  112 => 37,  104 => 36,  95 => 34,  92 => 33,  87 => 32,  82 => 31,  80 => 30,  73 => 25,  68 => 22,  62 => 21,  60 => 20,  57 => 19,  54 => 18,  48 => 15,  45 => 14,  43 => 13,  35 => 8,  32 => 7,  28 => 6,  25 => 5,  23 => 4,  21 => 3,  19 => 2,);
    }
}
/* {#=====Get variable : Config Select Block on header=====#}*/
/* {% set hidden_headertop = soconfig.get_settings('toppanel_type') =='1' or soconfig.get_settings('toppanel_type') =='2'? 'hidden-compact' : '' %}*/
/* {% set hidden_headercenter = soconfig.get_settings('toppanel_type') =='2'? 'hidden-compact' : '' %}*/
/* {% set hidden_headerbottom = soconfig.get_settings('toppanel_type') =='1'? 'hidden-compact' : '' %}*/
/* */
/* <header id="header" class=" variant typeheader-{{ typeheader ? typeheader : '1'}}">*/
/* 	{#======	HEADER TOP	=======#}  */
/* 	<div class="header-top {{hidden_headertop}}">*/
/* 		<div class="container">*/
/* 			<div class="row">*/
/* 				<div class="header-top-left  col-lg-6 col-md-5 col-sm-6 col-xs-2">*/
/* 					<ul class="top-link list-inline">*/
/* 						{% if soconfig.get_settings('phone_status') and soconfig.get_settings('contact_number') %}*/
/* 						<li class="telephone hidden-xs hidden-sm" >*/
/* 							{{ soconfig.decode_entities( soconfig.get_settings('contact_number') ) }}*/
/* 						</li>*/
/* 						{% endif %}*/
/* 						{% if soconfig.get_settings('welcome_message_status') %}*/
/* 							<li class="hidden-sm hidden-xs welcome-msg">*/
/* 								{% if soconfig.get_settings('welcome_message') is not empty %}*/
/* 									{{ soconfig.decode_entities( soconfig.get_settings('welcome_message') ) }}*/
/* 								{% endif %} */
/* 							</li>*/
/* 						{% endif %}*/
/* 					</ul>		*/
/* 				</div>*/
/* 				<div class="header-top-right collapsed-block col-lg-6 col-md-7 col-sm-6 col-xs-10">		*/
/* 					*/
/* 						<ul class="top-link list-inline">*/
/* 							{% if soconfig.get_settings('lang_status') %}*/
/* 							<li class="currency"> {{ currency }}  </li>*/
/* 							<li class="language">{{ language }} </li>	*/
/* 							{% endif %} */
/* 							<li class="account" id="my_account"><a href="{{ account }}" title="{{ text_account }} " class="btn-xs dropdown-toggle" data-toggle="dropdown"> <span class="hidden-xs">{{ text_account }} </span> <span class="fa fa-caret-down"></span></a>*/
/* 								<ul class="dropdown-menu ">*/
/* 									<li><a href="{{ wishlist }}" title="{{ text_wishlist }}">{{ text_wishlist }}</a></li>*/
/* 									<li><a href="{{ compare }}" title="{{ text_compare }}">{{ text_compare }}</a></li>*/
/* 									{% if logged %}*/
/* 									<li><a href="{{ account }}">{{ text_account }}</a></li>*/
/* 									<li><a href="{{ order }}">{{ text_order }}</a></li>*/
/* 									<li><a href="{{ transaction }}">{{ text_transaction }}</a></li>*/
/* 									<li><a href="{{ download }}">{{ text_download }}</a></li>*/
/* 									<li><a href="{{ logout }}"><i class="fa fa-sign-out" aria-hidden="true"></i> {{ text_logout }}</a></li>*/
/* 									{% else %}*/
/* */
/* 									<li><a href="{{ register }}">{{ text_register }}</a></li>*/
/* 									<li><a href="{{ login }}">{{ text_login }}</a></li>*/
/* 									{% endif %}															*/
/* 								</ul>*/
/* 							</li>	*/
/* 						</ul>				*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* 	*/
/* 	{#======	HEADER CENTER	=======#} */
/* 	<div class="header-middle {{hidden_headercenter}}">*/
/* 		<div class="container">*/
/* 			<div class="row">			*/
/* 				<div class="navbar-logo col-lg-3 col-md-3 col-sm-12 col-xs-12">*/
/* 					<div class="logo">*/
/* 				   		{{soconfig.get_logo()}}*/
/* 				   	</div>*/
/* 				</div>*/
/* 				<div class="middle2 col-lg-6 col-md-5 col-sm-6 col-xs-6">	*/
/* 					<div class="search-header-w">*/
/* 						<div class="icon-search hidden-lg hidden-md"><i class="fa fa-search"></i></div>								*/
/* 						{{ search_block }}*/
/* 					</div>				*/
/* 				</div>*/
/* 				<div class="middle-right col-lg-3 col-md-4 col-sm-6 col-xs-6">	*/
/* 					<div class="shopping_cart">							*/
/* 					 	{{ cart }}*/
/* 					</div>			*/
/* 					<ul class="middle-link list-inline">*/
/* 						<li class="compare hidden-sm hidden-xs"><a href="{{ compare }}"  class="top-link-compare" title="{{ text_compare }} ">{{ text_compare }}</a></li>*/
/* 						<li class="wishlist hidden-sm hidden-xs"><a href="{{ wishlist }}" class="top-link-wishlist" title="{{ text_wishlist }} ">{{ text_wishlist }}</a></li>*/
/* 						*/
/* 						{% if soconfig.get_settings('checkout_status') %}*/
/* 							<li class="checkout hidden-xs"><a href="{{ checkout }} " class="btn-link" title="{{ text_checkout }} "><span >{{ text_checkout }} </span></a></li>*/
/* 						{% endif %} */
/* 					</ul>*/
/* 				</div>*/
/* 				*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* 	<div class="header-bottom {{hidden_headerbottom}}">*/
/* 		<div class="container">*/
/* 			<div class="row">*/
/* 				<div class="header-bottom-inner">*/
/* 					<div class="header-bottom-left menu-vertical col-lg-3 col-md-3 col-sm-6 col-xs-6">*/
/* 						{{ content_menu2 }}		*/
/* 					</div>*/
/* 					*/
/* 					<div class="header-bottom-right col-lg-9 col-md-9 col-sm-6 col-xs-6">					*/
/* 						{{ content_menu1 }}								*/
/* 					</div>*/
/* 										*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* 		*/
/* </header>*/
