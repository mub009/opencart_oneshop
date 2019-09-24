<?php

/* so-oneshop/template/extension/module/so_extra_slider/default.twig */
class __TwigTemplate_35c6292f7fe28b342e970ae59a6eca2a6dfb3d985baafbdccc28d42c3396a619 extends Twig_Template
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
        echo "<!-- default Grid  -->
<div class=\"module ";
        // line 2
        echo (isset($context["direction_class"]) ? $context["direction_class"] : null);
        echo " ";
        echo (isset($context["class_suffix"]) ? $context["class_suffix"] : null);
        echo "\">
\t";
        // line 3
        if ((isset($context["disp_title_module"]) ? $context["disp_title_module"] : null)) {
            echo " 
\t\t<h3 class=\"modtitle\">";
            // line 4
            echo (isset($context["head_name"]) ? $context["head_name"] : null);
            echo "</h3>
\t";
        }
        // line 6
        echo "
\t";
        // line 7
        if ( !twig_test_empty(trim((isset($context["pre_text"]) ? $context["pre_text"] : null)))) {
            echo " 
\t\t<div class=\"form-group\">
\t\t\t";
            // line 9
            echo (isset($context["pre_text"]) ? $context["pre_text"] : null);
            echo "
\t\t</div>
\t";
        }
        // line 12
        echo "
\t<div class=\"modcontent\">
\t\t
\t\t";
        // line 15
        if (twig_test_empty((isset($context["products"]) ? $context["products"] : null))) {
            // line 16
            echo "\t\t\t<div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> 
\t\t\t\t";
            // line 17
            echo (isset($context["text_noproduct"]) ? $context["text_noproduct"] : null);
            echo "
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
\t\t\t</div>

\t\t";
        } else {
            // line 22
            echo "\t\t\t";
            $context["count_item"] = twig_length_filter($this->env, (isset($context["products"]) ? $context["products"] : null));
            echo "\t
\t\t\t";
            // line 23
            $context["cls_btn_page"] = ((((isset($context["button_page"]) ? $context["button_page"] : null) == "top")) ? ("buttom-type1") : ("button-type2"));
            echo "\t
\t\t\t";
            // line 24
            $context["btn_type"] = ((((isset($context["button_page"]) ? $context["button_page"] : null) == "top")) ? ("button-type1") : ("button-type2"));
            // line 25
            echo "\t\t\t
\t\t\t";
            // line 26
            $context["tag_id"] = ("so_extra_slider_" . (isset($context["suffix"]) ? $context["suffix"] : null));
            // line 27
            echo "\t\t\t";
            $context["class_respl"] = ((((((((("preset00-" . (isset($context["nb_column0"]) ? $context["nb_column0"] : null)) . " preset01-") . (isset($context["nb_column1"]) ? $context["nb_column1"] : null)) . " preset02-") . (isset($context["nb_column2"]) ? $context["nb_column2"] : null)) . " preset03-") . (isset($context["nb_column3"]) ? $context["nb_column3"] : null)) . " preset04-") . (isset($context["nb_column4"]) ? $context["nb_column4"] : null));
            // line 28
            echo "\t\t\t";
            $context["btn_prev"] = ((((isset($context["button_page"]) ? $context["button_page"] : null) == "top")) ? ("&#171") : ("&#139"));
            // line 29
            echo "\t\t\t";
            $context["btn_next"] = ((((isset($context["button_page"]) ? $context["button_page"] : null) == "top")) ? ("&#187") : ("&#155"));
            // line 30
            echo "\t\t\t";
            $context["i"] = 0;
            // line 31
            echo "
\t\t\t<div id=\"";
            // line 32
            echo (isset($context["tag_id"]) ? $context["tag_id"] : null);
            echo "\" class=\"so-extraslider ";
            echo (isset($context["cls_btn_page"]) ? $context["cls_btn_page"] : null);
            echo " ";
            echo (isset($context["class_respl"]) ? $context["class_respl"] : null);
            echo " ";
            echo (isset($context["btn_type"]) ? $context["btn_type"] : null);
            echo "\">
\t\t\t\t<!-- Begin extraslider-inner -->
\t\t\t\t<div class=\"extraslider-inner products-list grid\" data-effect=\"";
            // line 34
            echo (isset($context["effect"]) ? $context["effect"] : null);
            echo "\">
\t\t\t\t\t";
            // line 35
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
            foreach ($context['_seq'] as $context["i"] => $context["product"]) {
                // line 36
                echo "\t\t\t\t\t\t";
                $context["i"] = ($context["i"] + 1);
                // line 37
                echo "\t\t\t\t\t\t";
                if (((($context["i"] % (isset($context["nb_rows"]) ? $context["nb_rows"] : null)) == 1) || ((isset($context["nb_rows"]) ? $context["nb_rows"] : null) == 1))) {
                    echo " 
\t\t\t\t\t\t<div class=\"item \">
\t\t\t\t\t\t";
                }
                // line 39
                echo " 

\t\t\t\t\t\t\t<div class=\"product-layout ";
                // line 41
                echo (isset($context["products_style"]) ? $context["products_style"] : null);
                echo " \">
\t\t\t\t\t\t\t\t<div class=\"product-item-container\">
\t\t\t\t\t\t\t\t\t<div class=\"left-block\">\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<div class=\"product-image-container ";
                // line 44
                if (((isset($context["product_image_num"]) ? $context["product_image_num"] : null) == 2)) {
                    echo " ";
                    echo "second_img";
                    echo " ";
                }
                echo "\t\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 45
                echo $this->getAttribute($context["product"], "href", array());
                echo "\" target=\"";
                echo (isset($context["item_link_target"]) ? $context["item_link_target"] : null);
                echo "\" title=\"";
                echo $this->getAttribute($context["product"], "nameFull", array());
                echo " \"  >
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 46
                if (((isset($context["product_image_num"]) ? $context["product_image_num"] : null) == 2)) {
                    // line 47
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    echo $this->getAttribute($context["product"], "thumb", array());
                    echo "\" class=\"img-1 img-responsive\" alt=\"";
                    echo $this->getAttribute($context["product"], "nameFull", array());
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    // line 48
                    echo $this->getAttribute($context["product"], "thumb2", array());
                    echo "\" class=\"img-2 img-responsive\" alt=\"";
                    echo $this->getAttribute($context["product"], "nameFull", array());
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 49
                    echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    // line 50
                    echo $this->getAttribute($context["product"], "thumb", array());
                    echo "\" alt=\"";
                    echo $this->getAttribute($context["product"], "nameFull", array());
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 51
                echo "\t\t
\t\t\t\t\t\t\t\t\t\t\t</a>\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"box-label\">
\t\t\t\t\t\t\t\t\t\t\t";
                // line 55
                if (($this->getAttribute($context["product"], "special", array()) && (isset($context["display_sale"]) ? $context["display_sale"] : null))) {
                    echo " 
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"label-product label-sale\">";
                    // line 56
                    echo " ";
                    echo $this->getAttribute($context["product"], "discount", array());
                    echo "  </span>
\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 57
                echo " 

\t\t\t\t\t\t\t\t\t\t\t";
                // line 59
                if (($this->getAttribute($context["product"], "productNew", array()) && (isset($context["display_new"]) ? $context["display_new"] : null))) {
                    echo " 
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"label-product label-new\">";
                    // line 60
                    echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_new"), "method");
                    echo " </span>
\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 61
                echo " \t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"so-quickview\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"hidden\" data-product='";
                // line 64
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "' href=\"";
                echo $this->getAttribute($context["product"], "href", array());
                echo "\" target=\"";
                echo (isset($context["item_link_target"]) ? $context["item_link_target"] : null);
                echo "\" ></a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
                // line 66
                if ((((isset($context["display_addtocart"]) ? $context["display_addtocart"] : null) || (isset($context["display_wishlist"]) ? $context["display_wishlist"] : null)) || (isset($context["display_compare"]) ? $context["display_compare"] : null))) {
                    echo " 
\t\t\t\t\t\t\t\t\t\t\t<div class=\"button-group so-quickview\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 68
                    if ((isset($context["display_addtocart"]) ? $context["display_addtocart"] : null)) {
                        echo " 
\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"addToCart btn-button\" title=\"";
                        // line 69
                        echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "button_cart"), "method");
                        echo "\" onclick=\"cart.add('";
                        echo $this->getAttribute($context["product"], "product_id", array());
                        echo " ');\"><i class=\"fa fa-shopping-cart\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 70
                        if (((isset($context["nb_column0"]) ? $context["nb_column0"] : null) != 6)) {
                            echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"hidden hidden-xs hidden-sm hidden-md\">";
                            // line 71
                            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "button_cart"), "method");
                            echo " </span>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 72
                        echo " 
\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 74
                    echo " 
\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 75
                    if ((isset($context["display_wishlist"]) ? $context["display_wishlist"] : null)) {
                        echo " 
\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"wishlist btn-button\" title=\"";
                        // line 76
                        echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "button_wishlist"), "method");
                        echo " \" onclick=\"wishlist.add('";
                        echo $this->getAttribute($context["product"], "product_id", array());
                        echo " ');\"><i class=\"fa fa-heart\"></i></button>
\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 77
                    echo " 
\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 78
                    if ((isset($context["display_compare"]) ? $context["display_compare"] : null)) {
                        echo " 
\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"compare btn-button\" title=\"";
                        // line 79
                        echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "button_compare"), "method");
                        echo " \" onclick=\"compare.add('";
                        echo $this->getAttribute($context["product"], "product_id", array());
                        echo " ');\"><i class=\"fa fa-random\"></i></button>
\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 80
                    echo " 
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 82
                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"right-block\">
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t\t\t\t\t";
                // line 89
                if ((isset($context["display_title"]) ? $context["display_title"] : null)) {
                    echo " 
\t\t\t\t\t\t\t\t\t\t\t\t<h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    // line 91
                    echo $this->getAttribute($context["product"], "href", array());
                    echo "\" target=\"";
                    echo (isset($context["item_link_target"]) ? $context["item_link_target"] : null);
                    echo "\" title=\"";
                    echo $this->getAttribute($context["product"], "nameFull", array());
                    echo " \"  >
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 92
                    echo $this->getAttribute($context["product"], "name", array());
                    echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 96
                echo "\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t";
                // line 97
                if ((isset($context["display_rating"]) ? $context["display_rating"] : null)) {
                    // line 98
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                    if ($this->getAttribute($context["product"], "rating", array())) {
                        // line 99
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 100
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(range(1, 5));
                        foreach ($context['_seq'] as $context["_key"] => $context["k"]) {
                            // line 101
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            $context["k"] = ($context["k"] + 1);
                            // line 102
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            if (($this->getAttribute($context["product"], "rating", array()) < $context["k"])) {
                                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t \t";
                            } else {
                                // line 104
                                echo "   
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 106
                            echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['k'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 107
                        echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 109
                        echo "  
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 111
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(range(1, 5));
                        foreach ($context['_seq'] as $context["_key"] => $context["j"]) {
                            // line 112
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            $context["j"] = ($context["j"] + 1);
                            // line 113
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['j'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 114
                        echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 117
                    echo "\t
\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 118
                echo "\t\t

\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t";
                // line 121
                if ((isset($context["display_price"]) ? $context["display_price"] : null)) {
                    echo " 
\t\t\t\t\t\t\t\t\t\t\t\t<div  class=\"price\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 123
                    if ( !$this->getAttribute($context["product"], "special", array())) {
                        echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-new\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 125
                        echo $this->getAttribute($context["product"], "price", array());
                        echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 127
                        echo "   
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-new\">";
                        // line 128
                        echo $this->getAttribute($context["product"], "special", array());
                        echo " </span>&nbsp;&nbsp;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-old\">";
                        // line 129
                        echo $this->getAttribute($context["product"], "price", array());
                        echo " </span>&nbsp;
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 130
                    echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 131
                    if ($this->getAttribute($context["product"], "tax", array())) {
                        echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"hidden price-percent-reduction\">";
                        // line 132
                        echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_tax"), "method");
                        echo "  ";
                        echo $this->getAttribute($context["product"], "tax", array());
                        echo " </span>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 133
                    echo " 
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 135
                echo " 
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t";
                // line 137
                if ((isset($context["display_description"]) ? $context["display_description"] : null)) {
                    echo " 
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-des\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 139
                    echo $this->getAttribute($context["product"], "description", array());
                    echo " 
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 141
                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- End item-wrap-inner -->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- End item-wrap -->

\t\t\t\t\t\t";
                // line 154
                if (((($context["i"] % (isset($context["nb_rows"]) ? $context["nb_rows"] : null)) == 0) || ($context["i"] == (isset($context["count_item"]) ? $context["count_item"] : null)))) {
                    echo " 
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 156
                echo " 

\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['i'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 158
            echo "\t 
\t\t\t\t</div>
\t\t\t\t<!--End extraslider-inner -->

\t\t\t\t<script type=\"text/javascript\">
\t\t\t\t//<![CDATA[
\t\t\t\tjQuery(document).ready(function (\$) {
\t\t\t\t\t(function (element) {
\t\t\t\t\t\tvar \$element = \$(element),
\t\t\t\t\t\t\t\t\$extraslider = \$(\".extraslider-inner\", \$element),
\t\t\t\t\t\t\t\t_delay = ";
            // line 168
            echo (isset($context["delay"]) ? $context["delay"] : null);
            echo " ,
\t\t\t\t\t\t\t\t_duration = ";
            // line 169
            echo (isset($context["duration"]) ? $context["duration"] : null);
            echo " ,
\t\t\t\t\t\t\t\t_effect = '";
            // line 170
            echo (isset($context["effect"]) ? $context["effect"] : null);
            echo " ';

\t\t\t\t\t\t\$extraslider.on(\"initialized.owl.carousel2\", function () {
\t\t\t\t\t\t\tvar \$item_active = \$(\".owl2-item.active\", \$element);
\t\t\t\t\t\t\tif (\$item_active.length > 1 && _effect != \"none\") {
\t\t\t\t\t\t\t\t_getAnimate(\$item_active);
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\telse {
\t\t\t\t\t\t\t\tvar \$item = \$(\".owl2-item\", \$element);
\t\t\t\t\t\t\t\t\$item.css({\"opacity\": 1, \"filter\": \"alpha(opacity = 100)\"});
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t";
            // line 181
            if (((isset($context["dots"]) ? $context["dots"] : null) == "true")) {
                echo " 
\t\t\t\t\t\t\tif (\$(\".owl2-dot\", \$element).length < 2) {
\t\t\t\t\t\t\t\t\$(\".owl2-prev\", \$element).css(\"display\", \"none\");
\t\t\t\t\t\t\t\t\$(\".owl2-next\", \$element).css(\"display\", \"none\");
\t\t\t\t\t\t\t\t\$(\".owl2-dot\", \$element).css(\"display\", \"none\");
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t";
            }
            // line 188
            echo "
\t\t\t\t\t\t\t";
            // line 189
            if (((isset($context["button_page"]) ? $context["button_page"] : null) == "top")) {
                echo " 
\t\t\t\t\t\t\t\t\$(\".owl2-controls\", \$element).insertBefore(\$extraslider);
\t\t\t\t\t\t\t\t\$(\".owl2-dots\", \$element).insertAfter(\$(\".owl2-prev\", \$element));
\t\t\t\t\t\t\t";
            } else {
                // line 192
                echo "  
\t\t\t\t\t\t\t\t\$(\".owl2-nav\", \$element).insertBefore(\$extraslider);
\t\t\t\t\t\t\t\t\$(\".owl2-controls\", \$element).insertAfter(\$extraslider);
\t\t\t\t\t\t\t";
            }
            // line 196
            echo "
\t\t\t\t\t\t});

\t\t\t\t\t\t\$extraslider.owlCarousel2({
\t\t\t\t\t\t\trtl: ";
            // line 200
            echo (isset($context["direction"]) ? $context["direction"] : null);
            echo ",
\t\t\t\t\t\t\tmargin: ";
            // line 201
            echo (isset($context["margin"]) ? $context["margin"] : null);
            echo ",
\t\t\t\t\t\t\tslideBy: ";
            // line 202
            echo (isset($context["slideBy"]) ? $context["slideBy"] : null);
            echo ",
\t\t\t\t\t\t\tautoplay: ";
            // line 203
            echo (isset($context["autoplay"]) ? $context["autoplay"] : null);
            echo ",
\t\t\t\t\t\t\tautoplayHoverPause: ";
            // line 204
            echo (isset($context["autoplayHoverPause"]) ? $context["autoplayHoverPause"] : null);
            echo ",
\t\t\t\t\t\t\tautoplayTimeout: ";
            // line 205
            echo (isset($context["autoplayTimeout"]) ? $context["autoplayTimeout"] : null);
            echo " ,
\t\t\t\t\t\t\tautoplaySpeed: ";
            // line 206
            echo (isset($context["autoplaySpeed"]) ? $context["autoplaySpeed"] : null);
            echo " ,
\t\t\t\t\t\t\tstartPosition: ";
            // line 207
            echo (isset($context["startPosition"]) ? $context["startPosition"] : null);
            echo " ,
\t\t\t\t\t\t\tmouseDrag: ";
            // line 208
            echo (isset($context["mouseDrag"]) ? $context["mouseDrag"] : null);
            echo ",
\t\t\t\t\t\t\ttouchDrag: ";
            // line 209
            echo (isset($context["touchDrag"]) ? $context["touchDrag"] : null);
            echo " ,
\t\t\t\t\t\t\tautoWidth: false,
\t\t\t\t\t\t\tresponsive: {
\t\t\t\t\t\t\t\t0: \t{ items: ";
            // line 212
            echo (isset($context["nb_column4"]) ? $context["nb_column4"] : null);
            echo " } ,
\t\t\t\t\t\t\t\t480: { items: ";
            // line 213
            echo (isset($context["nb_column3"]) ? $context["nb_column3"] : null);
            echo " },
\t\t\t\t\t\t\t\t768: { items: ";
            // line 214
            echo (isset($context["nb_column2"]) ? $context["nb_column2"] : null);
            echo " },
\t\t\t\t\t\t\t\t992: { items: ";
            // line 215
            echo (isset($context["nb_column1"]) ? $context["nb_column1"] : null);
            echo " },
\t\t\t\t\t\t\t\t1200: {items: ";
            // line 216
            echo (isset($context["nb_column0"]) ? $context["nb_column0"] : null);
            echo "}
\t\t\t\t\t\t\t},
\t\t\t\t\t\t\tdotClass: \"owl2-dot\",
\t\t\t\t\t\t\tdotsClass: \"owl2-dots\",
\t\t\t\t\t\t\tdots: ";
            // line 220
            echo (isset($context["dots"]) ? $context["dots"] : null);
            echo " ,
\t\t\t\t\t\t\tdotsSpeed:";
            // line 221
            echo (isset($context["dotsSpeed"]) ? $context["dotsSpeed"] : null);
            echo " ,
\t\t\t\t\t\t\tnav: ";
            // line 222
            echo (isset($context["nav"]) ? $context["nav"] : null);
            echo " ,
\t\t\t\t\t\t\tloop: ";
            // line 223
            echo (isset($context["loop"]) ? $context["loop"] : null);
            echo " ,
\t\t\t\t\t\t\tnavSpeed: ";
            // line 224
            echo (isset($context["navSpeed"]) ? $context["navSpeed"] : null);
            echo " ,
\t\t\t\t\t\t\tnavText: [\"";
            // line 225
            echo (isset($context["btn_prev"]) ? $context["btn_prev"] : null);
            echo " \", \"";
            echo (isset($context["btn_next"]) ? $context["btn_next"] : null);
            echo " \"],
\t\t\t\t\t\t\tnavClass: [\"owl2-prev\", \"owl2-next\"]

\t\t\t\t\t\t});

\t\t\t\t\t\t\$extraslider.on(\"translate.owl.carousel2\", function (e) {
\t\t\t\t        \t";
            // line 231
            if (((isset($context["dots"]) ? $context["dots"] : null) == "true")) {
                echo " 
\t\t\t\t        \tif (\$(\".owl2-dot\", \$element).length < 2) {
\t\t\t\t        \t\t\$(\".owl2-prev\", \$element).css(\"display\", \"none\");
\t\t\t\t        \t\t\$(\".owl2-next\", \$element).css(\"display\", \"none\");
\t\t\t\t        \t\t\$(\".owl2-dot\", \$element).css(\"display\", \"none\");
\t\t\t\t        \t}
\t\t\t\t        \t";
            }
            // line 237
            echo " 
\t\t\t\t        \tvar \$item_active = \$(\".owl2-item.active\", \$element);
\t\t\t\t        \t_UngetAnimate(\$item_active);
\t\t\t\t        \t_getAnimate(\$item_active);
\t\t\t\t        });
\t\t\t\t        \$extraslider.on(\"translated.owl.carousel2\", function (e) {
\t\t\t\t        \t";
            // line 243
            if (((isset($context["dots"]) ? $context["dots"] : null) == "true")) {
                echo " 
\t\t\t\t        \tif (\$(\".owl2-dot\", \$element).length < 2) {
\t\t\t\t        \t\t\$(\".owl2-prev\", \$element).css(\"display\", \"none\");
\t\t\t\t        \t\t\$(\".owl2-next\", \$element).css(\"display\", \"none\");
\t\t\t\t        \t\t\$(\".owl2-dot\", \$element).css(\"display\", \"none\");
\t\t\t\t        \t}
\t\t\t\t        \t";
            }
            // line 249
            echo " 
\t\t\t\t        \tvar \$item_active = \$(\".owl2-item.active\", \$element);
\t\t\t\t        \tvar \$item = \$(\".owl2-item\", \$element);
\t\t\t\t        \t_UngetAnimate(\$item);
\t\t\t\t        \tif (\$item_active.length > 1 && _effect != \"none\") {
\t\t\t\t        \t\t_getAnimate(\$item_active);
\t\t\t\t        \t} else {
\t\t\t\t        \t\t\$item.css({\"opacity\": 1, \"filter\": \"alpha(opacity = 100)\"});
\t\t\t\t        \t}
\t\t\t\t        });
\t\t\t\t        function _getAnimate(\$el) {
\t\t\t\t        \tif (_effect == \"none\") return;
\t\t\t\t        \t//if (\$.browser.msie && parseInt(\$.browser.version, 10) <= 9) return;
\t\t\t\t        \t\$extraslider.removeClass(\"extra-animate\");
\t\t\t\t        \t\$el.each(function (i) {
\t\t\t\t        \t\tvar \$_el = \$(this);
\t\t\t\t        \t\tvar i= i + 1;
\t\t\t\t        \t\t\$(this).css({
\t\t\t\t        \t\t\t\"-webkit-animation\": _effect + \" \" + _duration + \"ms ease both\",
\t\t\t\t        \t\t\t\"-moz-animation\": _effect + \" \" + _duration + \"ms ease both\",
\t\t\t\t        \t\t\t\"-o-animation\": _effect + \" \" + _duration + \"ms ease both\",
\t\t\t\t        \t\t\t\"animation\": _effect + \" \" + _duration + \"ms ease both\",
\t\t\t\t        \t\t\t\"-webkit-animation-delay\": +i * _delay + \"ms\",
\t\t\t\t        \t\t\t\"-moz-animation-delay\": +i * _delay + \"ms\",
\t\t\t\t        \t\t\t\"-o-animation-delay\": +i * _delay + \"ms\",
\t\t\t\t        \t\t\t\"animation-delay\": +i * _delay + \"ms\",
\t\t\t\t        \t\t\t
\t\t\t\t        \t\t}).animate({
\t\t\t\t        \t\t\t
\t\t\t\t        \t\t});
\t\t\t\t        \t\tif (i == \$el.size() - 1) {
\t\t\t\t        \t\t\t\$extraslider.addClass(\"extra-animate\");
\t\t\t\t        \t\t}
\t\t\t\t        \t});
\t\t\t\t        }
\t\t\t\t        function _UngetAnimate(\$el) {
\t\t\t\t        \t\$el.each(function (i) {
\t\t\t\t        \t\t\$(this).css({
\t\t\t\t        \t\t\t\"animation\": \"\",
\t\t\t\t        \t\t\t\"-webkit-animation\": \"\",
\t\t\t\t        \t\t\t\"-moz-animation\": \"\",
\t\t\t\t        \t\t\t\"-o-animation\": \"\",
\t\t\t\t        \t\t});
\t\t\t\t        \t});
\t\t\t\t        } 
\t\t\t\t\t})(\"#";
            // line 294
            echo (isset($context["tag_id"]) ? $context["tag_id"] : null);
            echo " \");
\t\t\t\t});
\t\t\t\t//]]>
\t\t\t</script>

\t\t\t</div>
\t\t";
        }
        // line 301
        echo "\t
\t</div> 
\t";
        // line 303
        if ( !twig_test_empty(trim((isset($context["post_text"]) ? $context["post_text"] : null)))) {
            echo " 
\t\t<div class=\"form-group\">
\t\t\t";
            // line 305
            echo (isset($context["post_text"]) ? $context["post_text"] : null);
            echo "
\t\t</div>
\t";
        }
        // line 308
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "so-oneshop/template/extension/module/so_extra_slider/default.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  743 => 308,  737 => 305,  732 => 303,  728 => 301,  718 => 294,  671 => 249,  661 => 243,  653 => 237,  643 => 231,  632 => 225,  628 => 224,  624 => 223,  620 => 222,  616 => 221,  612 => 220,  605 => 216,  601 => 215,  597 => 214,  593 => 213,  589 => 212,  583 => 209,  579 => 208,  575 => 207,  571 => 206,  567 => 205,  563 => 204,  559 => 203,  555 => 202,  551 => 201,  547 => 200,  541 => 196,  535 => 192,  528 => 189,  525 => 188,  515 => 181,  501 => 170,  497 => 169,  493 => 168,  481 => 158,  473 => 156,  467 => 154,  452 => 141,  446 => 139,  441 => 137,  437 => 135,  432 => 133,  425 => 132,  421 => 131,  418 => 130,  413 => 129,  409 => 128,  406 => 127,  400 => 125,  395 => 123,  390 => 121,  385 => 118,  381 => 117,  375 => 114,  368 => 113,  365 => 112,  361 => 111,  357 => 109,  352 => 107,  345 => 106,  340 => 104,  333 => 102,  330 => 101,  326 => 100,  323 => 99,  320 => 98,  318 => 97,  315 => 96,  308 => 92,  300 => 91,  295 => 89,  286 => 82,  281 => 80,  274 => 79,  270 => 78,  267 => 77,  260 => 76,  256 => 75,  253 => 74,  248 => 72,  243 => 71,  239 => 70,  233 => 69,  229 => 68,  224 => 66,  215 => 64,  210 => 61,  205 => 60,  201 => 59,  197 => 57,  191 => 56,  187 => 55,  181 => 51,  174 => 50,  171 => 49,  164 => 48,  157 => 47,  155 => 46,  147 => 45,  139 => 44,  133 => 41,  129 => 39,  122 => 37,  119 => 36,  115 => 35,  111 => 34,  100 => 32,  97 => 31,  94 => 30,  91 => 29,  88 => 28,  85 => 27,  83 => 26,  80 => 25,  78 => 24,  74 => 23,  69 => 22,  61 => 17,  58 => 16,  56 => 15,  51 => 12,  45 => 9,  40 => 7,  37 => 6,  32 => 4,  28 => 3,  22 => 2,  19 => 1,);
    }
}
/* <!-- default Grid  -->*/
/* <div class="module {{direction_class}} {{ class_suffix }}">*/
/* 	{% if disp_title_module %} */
/* 		<h3 class="modtitle">{{ head_name }}</h3>*/
/* 	{% endif %}*/
/* */
/* 	{% if pre_text|trim is not empty  %} */
/* 		<div class="form-group">*/
/* 			{{ pre_text }}*/
/* 		</div>*/
/* 	{% endif %}*/
/* */
/* 	<div class="modcontent">*/
/* 		*/
/* 		{% if products is empty %}*/
/* 			<div class="alert alert-info"><i class="fa fa-info-circle"></i> */
/* 				{{ text_noproduct }}*/
/* 				<button type="button" class="close" data-dismiss="alert">×</button>*/
/* 			</div>*/
/* */
/* 		{% else %}*/
/* 			{% set count_item 	= products|length %}	*/
/* 			{% set cls_btn_page =  (button_page  ==  'top') ? 'buttom-type1':'button-type2' %}	*/
/* 			{% set btn_type 	=  (button_page  ==  'top') ? 'button-type1':'button-type2'%}*/
/* 			*/
/* 			{% set tag_id = 'so_extra_slider_'~suffix %}*/
/* 			{% set class_respl = 'preset00-'~nb_column0~' preset01-'~nb_column1~' preset02-'~nb_column2~' preset03-'~nb_column3~' preset04-'~nb_column4 %}*/
/* 			{% set btn_prev = (button_page == 'top') ? '&#171':'&#139' %}*/
/* 			{% set btn_next = (button_page == 'top') ? '&#187':'&#155' %}*/
/* 			{% set i = 0 %}*/
/* */
/* 			<div id="{{tag_id}}" class="so-extraslider {{cls_btn_page}} {{class_respl}} {{btn_type}}">*/
/* 				<!-- Begin extraslider-inner -->*/
/* 				<div class="extraslider-inner products-list grid" data-effect="{{effect}}">*/
/* 					{% for i, product in products %}*/
/* 						{% set i = i + 1 %}*/
/* 						{% if i % nb_rows  ==  1  or  nb_rows  ==  1 %} */
/* 						<div class="item ">*/
/* 						{% endif %} */
/* */
/* 							<div class="product-layout {{ products_style }} ">*/
/* 								<div class="product-item-container">*/
/* 									<div class="left-block">									*/
/* 										<div class="product-image-container {% if product_image_num  == 2 %} {{ 'second_img' }} {% endif %}	">*/
/* 											<a href="{{ product.href }}" target="{{ item_link_target }}" title="{{ product.nameFull }} "  >*/
/* 												{% if product_image_num  == 2 %}*/
/* 													<img src="{{ product.thumb}}" class="img-1 img-responsive" alt="{{ product.nameFull }}">*/
/* 													<img src="{{ product.thumb2}}" class="img-2 img-responsive" alt="{{ product.nameFull }}">*/
/* 												{% else %} */
/* 													<img src="{{ product.thumb}}" alt="{{ product.nameFull }}">*/
/* 												{% endif %}		*/
/* 											</a>						*/
/* 										</div>*/
/* 										<div class="box-label">*/
/* 											{% if product.special  and  display_sale  %} */
/* 												<span class="label-product label-sale">{# {{ objlang.get('text_sale') }} #} {{ product.discount }}  </span>*/
/* 											{% endif %} */
/* */
/* 											{% if product.productNew  and  display_new  %} */
/* 												<span class="label-product label-new">{{ objlang.get('text_new') }} </span>*/
/* 											{% endif %} 											*/
/* 										</div>*/
/* 										<div class="so-quickview">*/
/* 											<a class="hidden" data-product='{{ product.product_id }}' href="{{ product.href }}" target="{{ item_link_target }}" ></a>*/
/* 										</div>*/
/* 										{% if display_addtocart  or  display_wishlist  or  display_compare %} */
/* 											<div class="button-group so-quickview">*/
/* 												{% if display_addtocart  %} */
/* 												<button type="button" class="addToCart btn-button" title="{{ objlang.get('button_cart') }}" onclick="cart.add('{{ product.product_id }} ');"><i class="fa fa-shopping-cart"></i>*/
/* 													{% if nb_column0  !=  6 %} */
/* 													<span class="hidden hidden-xs hidden-sm hidden-md">{{ objlang.get('button_cart') }} </span>*/
/* 													{% endif %} */
/* 												</button>*/
/* 												{% endif %} */
/* 												{% if display_wishlist  %} */
/* 												<button type="button" class="wishlist btn-button" title="{{ objlang.get('button_wishlist') }} " onclick="wishlist.add('{{ product.product_id }} ');"><i class="fa fa-heart"></i></button>*/
/* 												{% endif %} */
/* 												{% if display_compare %} */
/* 												<button type="button" class="compare btn-button" title="{{ objlang.get('button_compare') }} " onclick="compare.add('{{ product.product_id }} ');"><i class="fa fa-random"></i></button>*/
/* 												{% endif %} */
/* 											</div>*/
/* 										{% endif %} */
/* 																	*/
/* 									</div>*/
/* */
/* 									<div class="right-block">*/
/* 										*/
/* 										<div class="caption">*/
/* 											{% if display_title %} */
/* 												<h4>*/
/* 													<a href="{{ product.href }}" target="{{ item_link_target }}" title="{{ product.nameFull }} "  >*/
/* 														{{ product.name }} */
/* 													</a>*/
/* 												</h4>*/
/* 											{% endif %}*/
/* 								*/
/* 											{% if display_rating %}*/
/* 												{% if product.rating %}*/
/* 													<div class="rating">*/
/* 														{% for k in 1..5 %}*/
/* 															{% set k = k + 1 %}*/
/* 															{% if product.rating < k %} */
/* 																<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/* 														 	{% else %}   */
/* 																<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/* 															{% endif %} */
/* 														{% endfor %} */
/* 													</div>*/
/* 												{% else %}  */
/* 												<div class="rating">*/
/* 													{% for j in 1..5 %}*/
/* 														{% set j = j + 1 %}*/
/* 														<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/* 													{% endfor %} */
/* 													*/
/* 												</div>*/
/* 												{% endif %}	*/
/* 											{% endif %}		*/
/* */
/* 											*/
/* 											{% if display_price %} */
/* 												<div  class="price">*/
/* 													{% if not product.special %} */
/* 														<span class="price-new">*/
/* 															{{ product.price }} */
/* 														</span>*/
/* 													{% else %}   */
/* 														<span class="price-new">{{ product.special }} </span>&nbsp;&nbsp;*/
/* 														<span class="price-old">{{ product.price }} </span>&nbsp;*/
/* 													{% endif %} */
/* 													{% if product.tax %} */
/* 														<span class="hidden price-percent-reduction">{{ objlang.get('text_tax') }}  {{ product.tax }} </span>*/
/* 													{% endif %} */
/* 												</div>*/
/* 											{% endif %} */
/* 											*/
/* 											{% if display_description %} */
/* 												<div class="item-des">*/
/* 													{{ product.description }} */
/* 												</div>*/
/* 											{% endif %} */
/* 																						*/
/* 										</div>*/
/* 										*/
/* 									</div>*/
/* */
/* 									*/
/* 					*/
/* 								</div>*/
/* 								<!-- End item-wrap-inner -->*/
/* 							</div>*/
/* 							<!-- End item-wrap -->*/
/* */
/* 						{% if i % nb_rows  ==  0  or  i  ==  count_item %} */
/* 						</div>*/
/* 						{% endif %} */
/* */
/* 					{% endfor %}	 */
/* 				</div>*/
/* 				<!--End extraslider-inner -->*/
/* */
/* 				<script type="text/javascript">*/
/* 				//<![CDATA[*/
/* 				jQuery(document).ready(function ($) {*/
/* 					(function (element) {*/
/* 						var $element = $(element),*/
/* 								$extraslider = $(".extraslider-inner", $element),*/
/* 								_delay = {{ delay }} ,*/
/* 								_duration = {{ duration }} ,*/
/* 								_effect = '{{ effect }} ';*/
/* */
/* 						$extraslider.on("initialized.owl.carousel2", function () {*/
/* 							var $item_active = $(".owl2-item.active", $element);*/
/* 							if ($item_active.length > 1 && _effect != "none") {*/
/* 								_getAnimate($item_active);*/
/* 							}*/
/* 							else {*/
/* 								var $item = $(".owl2-item", $element);*/
/* 								$item.css({"opacity": 1, "filter": "alpha(opacity = 100)"});*/
/* 							}*/
/* 							{% if dots  ==  "true" %} */
/* 							if ($(".owl2-dot", $element).length < 2) {*/
/* 								$(".owl2-prev", $element).css("display", "none");*/
/* 								$(".owl2-next", $element).css("display", "none");*/
/* 								$(".owl2-dot", $element).css("display", "none");*/
/* 							}*/
/* 							{% endif %}*/
/* */
/* 							{% if button_page  ==  "top" %} */
/* 								$(".owl2-controls", $element).insertBefore($extraslider);*/
/* 								$(".owl2-dots", $element).insertAfter($(".owl2-prev", $element));*/
/* 							{% else %}  */
/* 								$(".owl2-nav", $element).insertBefore($extraslider);*/
/* 								$(".owl2-controls", $element).insertAfter($extraslider);*/
/* 							{% endif %}*/
/* */
/* 						});*/
/* */
/* 						$extraslider.owlCarousel2({*/
/* 							rtl: {{ direction}},*/
/* 							margin: {{ margin }},*/
/* 							slideBy: {{ slideBy }},*/
/* 							autoplay: {{ autoplay }},*/
/* 							autoplayHoverPause: {{ autoplayHoverPause  }},*/
/* 							autoplayTimeout: {{ autoplayTimeout }} ,*/
/* 							autoplaySpeed: {{ autoplaySpeed }} ,*/
/* 							startPosition: {{ startPosition }} ,*/
/* 							mouseDrag: {{ mouseDrag }},*/
/* 							touchDrag: {{ touchDrag }} ,*/
/* 							autoWidth: false,*/
/* 							responsive: {*/
/* 								0: 	{ items: {{ nb_column4 }} } ,*/
/* 								480: { items: {{ nb_column3 }} },*/
/* 								768: { items: {{ nb_column2 }} },*/
/* 								992: { items: {{ nb_column1 }} },*/
/* 								1200: {items: {{ nb_column0 }}}*/
/* 							},*/
/* 							dotClass: "owl2-dot",*/
/* 							dotsClass: "owl2-dots",*/
/* 							dots: {{ dots }} ,*/
/* 							dotsSpeed:{{ dotsSpeed }} ,*/
/* 							nav: {{ nav }} ,*/
/* 							loop: {{ loop }} ,*/
/* 							navSpeed: {{ navSpeed }} ,*/
/* 							navText: ["{{ btn_prev }} ", "{{ btn_next }} "],*/
/* 							navClass: ["owl2-prev", "owl2-next"]*/
/* */
/* 						});*/
/* */
/* 						$extraslider.on("translate.owl.carousel2", function (e) {*/
/* 				        	{% if dots  ==  "true" %} */
/* 				        	if ($(".owl2-dot", $element).length < 2) {*/
/* 				        		$(".owl2-prev", $element).css("display", "none");*/
/* 				        		$(".owl2-next", $element).css("display", "none");*/
/* 				        		$(".owl2-dot", $element).css("display", "none");*/
/* 				        	}*/
/* 				        	{% endif %} */
/* 				        	var $item_active = $(".owl2-item.active", $element);*/
/* 				        	_UngetAnimate($item_active);*/
/* 				        	_getAnimate($item_active);*/
/* 				        });*/
/* 				        $extraslider.on("translated.owl.carousel2", function (e) {*/
/* 				        	{% if dots  ==  "true" %} */
/* 				        	if ($(".owl2-dot", $element).length < 2) {*/
/* 				        		$(".owl2-prev", $element).css("display", "none");*/
/* 				        		$(".owl2-next", $element).css("display", "none");*/
/* 				        		$(".owl2-dot", $element).css("display", "none");*/
/* 				        	}*/
/* 				        	{% endif %} */
/* 				        	var $item_active = $(".owl2-item.active", $element);*/
/* 				        	var $item = $(".owl2-item", $element);*/
/* 				        	_UngetAnimate($item);*/
/* 				        	if ($item_active.length > 1 && _effect != "none") {*/
/* 				        		_getAnimate($item_active);*/
/* 				        	} else {*/
/* 				        		$item.css({"opacity": 1, "filter": "alpha(opacity = 100)"});*/
/* 				        	}*/
/* 				        });*/
/* 				        function _getAnimate($el) {*/
/* 				        	if (_effect == "none") return;*/
/* 				        	//if ($.browser.msie && parseInt($.browser.version, 10) <= 9) return;*/
/* 				        	$extraslider.removeClass("extra-animate");*/
/* 				        	$el.each(function (i) {*/
/* 				        		var $_el = $(this);*/
/* 				        		var i= i + 1;*/
/* 				        		$(this).css({*/
/* 				        			"-webkit-animation": _effect + " " + _duration + "ms ease both",*/
/* 				        			"-moz-animation": _effect + " " + _duration + "ms ease both",*/
/* 				        			"-o-animation": _effect + " " + _duration + "ms ease both",*/
/* 				        			"animation": _effect + " " + _duration + "ms ease both",*/
/* 				        			"-webkit-animation-delay": +i * _delay + "ms",*/
/* 				        			"-moz-animation-delay": +i * _delay + "ms",*/
/* 				        			"-o-animation-delay": +i * _delay + "ms",*/
/* 				        			"animation-delay": +i * _delay + "ms",*/
/* 				        			*/
/* 				        		}).animate({*/
/* 				        			*/
/* 				        		});*/
/* 				        		if (i == $el.size() - 1) {*/
/* 				        			$extraslider.addClass("extra-animate");*/
/* 				        		}*/
/* 				        	});*/
/* 				        }*/
/* 				        function _UngetAnimate($el) {*/
/* 				        	$el.each(function (i) {*/
/* 				        		$(this).css({*/
/* 				        			"animation": "",*/
/* 				        			"-webkit-animation": "",*/
/* 				        			"-moz-animation": "",*/
/* 				        			"-o-animation": "",*/
/* 				        		});*/
/* 				        	});*/
/* 				        } */
/* 					})("#{{ tag_id  }} ");*/
/* 				});*/
/* 				//]]>*/
/* 			</script>*/
/* */
/* 			</div>*/
/* 		{% endif %}*/
/* 	*/
/* 	</div> */
/* 	{% if post_text|trim is not empty  %} */
/* 		<div class="form-group">*/
/* 			{{ post_text  }}*/
/* 		</div>*/
/* 	{% endif %}*/
/* */
/* </div>*/
