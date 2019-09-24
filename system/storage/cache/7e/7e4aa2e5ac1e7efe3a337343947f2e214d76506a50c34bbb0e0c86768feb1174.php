<?php

/* so-oneshop/template/soconfig/listing.twig */
class __TwigTemplate_135e606cee5ba8c2603e01de7f2568ae55d8f4dd56071852a077c689e0b48484 extends Twig_Template
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
        // line 10
        $context["devices"] = array("lg" => "Desktops", "md" => "Tablet Landscape", "sm" => "Tablet Portrait", "xs" => "Phones");
        // line 11
        $context["device_res"] = "";
        // line 12
        echo "

";
        // line 14
        if ((($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_route", array(), "method") == "product/category") || ($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_route", array(), "method") == "extension/module/so_filter_shop_by/filter_data"))) {
            // line 15
            echo "\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["devices"]) ? $context["devices"] : null));
            foreach ($context['_seq'] as $context["key"] => $context["subfix"]) {
                // line 16
                echo "\t\t";
                if (($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => ("product_catalog_column_" . $context["key"])), "method") == 5)) {
                    // line 17
                    echo "\t\t\t";
                    $context["device_res"] = ((((isset($context["device_res"]) ? $context["device_res"] : null) . " col-") . $context["key"]) . "-15");
                    // line 18
                    echo "\t\t";
                } else {
                    // line 19
                    echo "\t\t\t";
                    $context["device_res"] = (((((isset($context["device_res"]) ? $context["device_res"] : null) . " col-") . $context["key"]) . "-") . (12 / $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => ("product_catalog_column_" . $context["key"])), "method")));
                    // line 20
                    echo "\t\t";
                }
                // line 21
                echo "\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['subfix'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 23
            echo "\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["devices"]) ? $context["devices"] : null));
            foreach ($context['_seq'] as $context["key"] => $context["subfix"]) {
                // line 24
                echo "\t\t";
                if (($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => ("other_catalog_column_" . $context["key"])), "method") == 5)) {
                    // line 25
                    echo "\t\t\t";
                    $context["device_res"] = ((((isset($context["device_res"]) ? $context["device_res"] : null) . " col-") . $context["key"]) . "-15");
                    // line 26
                    echo "\t\t";
                } else {
                    // line 27
                    echo "\t\t\t";
                    $context["device_res"] = (((((isset($context["device_res"]) ? $context["device_res"] : null) . " col-") . $context["key"]) . "-") . (12 / $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => ("other_catalog_column_" . $context["key"])), "method")));
                    // line 28
                    echo "\t\t";
                }
                // line 29
                echo "\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['subfix'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 31
        echo "
";
        // line 33
        echo "<div class=\"product-filter filters-panel\">
  <div class=\"row\">
\t\t<div class=\"col-sm-2 view-mode hidden-sm hidden-xs\">
\t\t\t<div class=\"list-view\">
\t\t\t\t<button type=\"button\" id=\"grid-view\" class=\"btn btn-default grid ";
        // line 37
        echo ((((isset($context["listingType"]) ? $context["listingType"] : null) == "grid")) ? ("active") : (""));
        echo "\" title=\"";
        echo (isset($context["button_grid"]) ? $context["button_grid"] : null);
        echo "\"><i class=\"fa fa-th-large\"></i></button>
\t\t\t\t<button type=\"button\" id=\"list-view\" class=\"btn btn-default list ";
        // line 38
        echo ((((isset($context["listingType"]) ? $context["listingType"] : null) == "list")) ? ("active") : (""));
        echo "\" title=\"";
        echo (isset($context["button_list"]) ? $context["button_list"] : null);
        echo "\"><i class=\"fa fa-bars\"></i></button>
\t\t\t</div>
\t\t</div>
\t
\t\t<div class=\"short-by-show form-inline text-right col-md-10 col-sm-12\">
\t\t\t<div class=\"form-group short-by\">
\t\t\t\t<label class=\"control-label\" for=\"input-sort\">";
        // line 44
        echo (isset($context["text_sort"]) ? $context["text_sort"] : null);
        echo "</label>
\t\t\t\t<select id=\"input-sort\" class=\"form-control\" onchange=\"location = this.value;\">
\t\t\t\t\t
\t\t\t\t\t";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["sorts"]);
        foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
            // line 48
            echo "\t\t\t\t\t";
            if (($this->getAttribute($context["sorts"], "value", array()) == sprintf("%s-%s", (isset($context["sort"]) ? $context["sort"] : null), (isset($context["order"]) ? $context["order"] : null)))) {
                // line 49
                echo "\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["sorts"], "href", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["sorts"], "text", array());
                echo "</option>
\t\t\t\t\t";
            } else {
                // line 51
                echo "\t\t\t\t\t
\t\t\t\t\t<option value=\"";
                // line 52
                echo $this->getAttribute($context["sorts"], "href", array());
                echo "\">";
                echo $this->getAttribute($context["sorts"], "text", array());
                echo "</option>
\t\t\t\t\t
\t\t\t\t\t";
            }
            // line 55
            echo "\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "\t\t\t\t
\t\t\t\t</select>
\t\t\t</div>
\t\t\t<div class=\"form-group\">
\t\t\t\t<label class=\"control-label\" for=\"input-limit\">";
        // line 60
        echo (isset($context["text_limit"]) ? $context["text_limit"] : null);
        echo "</label>
\t\t\t\t<select id=\"input-limit\" class=\"form-control\" onchange=\"location = this.value;\">
\t\t\t\t\t";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["limits"]);
        foreach ($context['_seq'] as $context["_key"] => $context["limits"]) {
            // line 63
            echo "\t\t\t\t\t";
            if (($this->getAttribute($context["limits"], "value", array()) == (isset($context["limit"]) ? $context["limit"] : null))) {
                // line 64
                echo "\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["limits"], "href", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["limits"], "text", array());
                echo "</option>
\t\t\t\t\t";
            } else {
                // line 66
                echo "\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["limits"], "href", array());
                echo "\">";
                echo $this->getAttribute($context["limits"], "text", array());
                echo "</option>
\t\t\t\t\t";
            }
            // line 68
            echo "\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limits'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "\t\t\t\t</select>
\t\t\t</div>
\t\t\t<div class=\"form-group product-compare\"><a href=\"";
        // line 71
        echo (isset($context["compare"]) ? $context["compare"] : null);
        echo "\" id=\"compare-total\" class=\"btn btn-default\">";
        echo (isset($context["text_compare"]) ? $context["text_compare"] : null);
        echo "</a></div>
\t\t</div>
\t
  </div>
</div>
";
        // line 77
        echo "<div class=\"products-list row ";
        echo (isset($context["listingType"]) ? $context["listingType"] : null);
        echo "\">
\t";
        // line 78
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["idproduct"] => $context["product"]) {
            // line 79
            echo "\t
\t";
            // line 80
            if (((isset($context["listingType"]) ? $context["listingType"] : null) == "grid")) {
                // line 81
                echo "\t\t<div class=\"product-layout ";
                echo (isset($context["device_res"]) ? $context["device_res"] : null);
                echo "\">
\t\t\t<div class=\"product-item-container\">
\t\t\t\t<div class=\"left-block\">
\t\t\t\t\t<div class=\"product-image-container ";
                // line 84
                if ((($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "secondimg"), "method") == "2") && $this->getAttribute($context["product"], "thumb2", array()))) {
                    echo " second_img";
                }
                echo "  \">
\t\t\t\t\t\t<a href=\"";
                // line 85
                echo $this->getAttribute($context["product"], "href", array());
                echo " \" title=\"";
                echo $this->getAttribute($context["product"], "name", array());
                echo " \">
\t\t\t\t\t\t\t<img  src=\"";
                // line 86
                echo $this->getAttribute($context["product"], "thumb", array());
                echo " \"  title=\"";
                echo $this->getAttribute($context["product"], "name", array());
                echo " \" class=\"img-1 img-responsive\" />
\t\t\t\t\t\t\t";
                // line 87
                if ((($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "secondimg"), "method") == "2") && $this->getAttribute($context["product"], "thumb2", array()))) {
                    // line 88
                    echo "\t\t\t\t\t\t\t\t<img src=\"";
                    echo $this->getAttribute($context["product"], "thumb2", array());
                    echo "\"  alt=\"";
                    echo $this->getAttribute($context["product"], "name", array());
                    echo " \" title=\"";
                    echo $this->getAttribute($context["product"], "name", array());
                    echo " \" class=\"img-2 img-responsive\" />
\t\t\t\t\t\t\t";
                }
                // line 90
                echo "\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t";
                // line 94
                echo "\t\t\t\t\t";
                if (($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "countdown_status"), "method") && $this->getAttribute($context["product"], "special_end_date", array()))) {
                    // line 95
                    echo "\t\t\t\t\t\t";
                    $this->loadTemplate(((isset($context["theme_directory"]) ? $context["theme_directory"] : null) . "/template/soconfig/countdown.twig"), "so-oneshop/template/soconfig/listing.twig", 95)->display(array_merge($context, array("product" => $context["product"], "special_end_date" => $this->getAttribute($context["product"], "special_end_date", array()))));
                    // line 96
                    echo "\t\t\t\t\t";
                }
                // line 97
                echo "\t\t\t\t\t
\t\t\t\t\t<div class=\"box-label\">
\t\t\t\t\t\t";
                // line 100
                echo "\t\t\t\t\t\t";
                if (($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "new_status"), "method") && $this->getAttribute($context["product"], "date_available", array()))) {
                    echo " 
\t\t\t\t\t\t\t<span class=\"label-product label-new\">";
                    // line 101
                    echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_new"), "method");
                    echo " </span>
\t\t\t\t\t\t";
                }
                // line 102
                echo " 
\t\t\t\t\t\t
\t\t\t\t\t\t";
                // line 105
                echo "\t\t\t\t\t\t";
                if ($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "discount_status"), "method")) {
                    echo " 
\t\t\t\t\t\t";
                    // line 106
                    if (($this->getAttribute($context["product"], "price", array()) && $this->getAttribute($context["product"], "special", array()))) {
                        echo " 
\t\t\t\t\t\t\t<span class=\"label-product label-sale\">
\t\t\t\t\t\t\t\t ";
                        // line 108
                        echo $this->getAttribute($context["product"], "discount", array());
                        echo "
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t";
                    }
                    // line 110
                    echo " 
\t\t\t\t\t\t";
                }
                // line 111
                echo " 
\t\t\t\t\t</div> 
\t\t\t\t\t";
                // line 113
                if ($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "quick_status"), "method")) {
                    // line 114
                    echo "\t\t\t\t\t\t<a class=\"quickview iframe-link visible-lg btn-button\" title=\"";
                    echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_quickview"), "method");
                    echo " \" data-fancybox-type=\"iframe\"  href=\"";
                    echo $this->getAttribute((isset($context["our_url"]) ? $context["our_url"] : null), "link", array(0 => "extension/soconfig/quickview", 1 => ("product_id=" . $this->getAttribute($context["product"], "product_id", array()))), "method");
                    echo "\"> <i class=\"fa fa-eye\"></i> ";
                    echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_quickview"), "method");
                    echo "</a>
\t\t\t\t\t";
                }
                // line 116
                echo "
\t\t\t\t\t<div class=\"button-group\">
\t\t\t\t\t\t<button class=\"addToCart btn-button\" type=\"button\" title=\"";
                // line 118
                echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
                echo "\" onclick=\"cart.add('";
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "', '";
                echo $this->getAttribute($context["product"], "minimum", array());
                echo "');\"><!-- ";
                echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
                echo " --><i class=\"fa fa-shopping-cart\"></i></button>
\t\t\t\t\t\t<button class=\"wishlist btn-button\" type=\"button\" title=\"";
                // line 119
                echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                echo "\" onclick=\"wishlist.add('";
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "');\"><i class=\"fa fa-heart\"></i></button>
\t\t\t\t\t\t<button class=\"compare btn-button\" type=\"button\" title=\"";
                // line 120
                echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
                echo "\" onclick=\"compare.add('";
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "');\"><i class=\"fa fa-random\"></i></button>
\t\t\t\t\t\t 
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"right-block\">
\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t<h4><a href=\"";
                // line 127
                echo $this->getAttribute($context["product"], "href", array());
                echo " \">";
                echo $this->getAttribute($context["product"], "name", array());
                echo " </a></h4>
\t\t\t\t\t\t";
                // line 128
                if ($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "rating_status"), "method")) {
                    echo " 
\t\t\t\t\t\t<div class=\"ratings\">
\t\t\t\t\t\t\t<div class=\"rating-box\">
\t\t\t\t\t\t\t";
                    // line 131
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 132
                        echo "\t\t\t\t\t\t\t";
                        if (($this->getAttribute($context["product"], "rating", array()) < $context["i"])) {
                            echo " 
\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i></span>
\t\t\t\t\t\t\t";
                        } else {
                            // line 134
                            echo "   
\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-1x\"></i><i class=\"fa fa-star-o fa-stack-1x\"></i></span>
\t\t\t\t\t\t\t";
                        }
                        // line 136
                        echo " 
\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 138
                    echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 141
                echo " 
\t\t\t\t\t\t
\t\t\t\t\t\t";
                // line 143
                if ($this->getAttribute($context["product"], "price", array())) {
                    echo " 
\t\t\t\t\t\t<div class=\"price\">
\t\t\t\t\t\t\t";
                    // line 145
                    if ( !$this->getAttribute($context["product"], "special", array())) {
                        echo " 
\t\t\t\t\t\t\t\t<span class=\"price-new\">";
                        // line 146
                        echo $this->getAttribute($context["product"], "price", array());
                        echo " </span>
\t\t\t\t\t\t\t";
                    } else {
                        // line 147
                        echo "   
\t\t\t\t\t\t\t\t<span class=\"price-new\">";
                        // line 148
                        echo $this->getAttribute($context["product"], "special", array());
                        echo " </span> <span class=\"price-old\">";
                        echo $this->getAttribute($context["product"], "price", array());
                        echo " </span>
\t\t\t\t\t\t\t";
                    }
                    // line 149
                    echo " 
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 151
                echo " 
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"description hidden\">
\t\t\t\t\t\t\t<p>";
                // line 154
                echo $this->getAttribute($context["product"], "description", array());
                echo " </p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t
\t\t\t</div>
\t\t</div>
\t\t
\t\t";
                // line 164
                echo "\t\t";
                $context["subfix_id"] = ($context["idproduct"] + 1);
                // line 165
                echo "\t\t";
                if ((($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_route", array(), "method") == "product/category") || ($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_route", array(), "method") == "extension/module/so_filter_shop_by/filter_data"))) {
                    // line 166
                    echo "\t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["devices"]) ? $context["devices"] : null));
                    foreach ($context['_seq'] as $context["key"] => $context["subfix"]) {
                        // line 167
                        echo "\t\t\t\t";
                        $context["idproduct"] = ($context["key"] + 1);
                        // line 168
                        echo "\t\t\t\t";
                        if ($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => ("product_catalog_column_" . $context["key"])), "method")) {
                            // line 169
                            echo "\t\t\t\t\t";
                            if ((((isset($context["subfix_id"]) ? $context["subfix_id"] : null) % $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => ("product_catalog_column_" . $context["key"])), "method")) == 0)) {
                                // line 170
                                echo "\t\t\t\t\t\t";
                                $context["subfix_id"] = 1;
                                // line 171
                                echo "\t\t\t\t\t\t<div class=\"clearfix visible-";
                                echo $context["key"];
                                echo "-block\"></div>
\t\t\t\t\t";
                            }
                            // line 173
                            echo "\t\t\t\t";
                        }
                        // line 174
                        echo "\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['key'], $context['subfix'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 175
                    echo "\t\t";
                } else {
                    // line 176
                    echo "\t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["devices"]) ? $context["devices"] : null));
                    foreach ($context['_seq'] as $context["key"] => $context["subfix"]) {
                        // line 177
                        echo "\t\t\t\t";
                        if ($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => ("other_catalog_column_" . $context["key"])), "method")) {
                            // line 178
                            echo "\t\t\t\t\t";
                            if ((((isset($context["subfix_id"]) ? $context["subfix_id"] : null) % $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => ("other_catalog_column_" . $context["key"])), "method")) == 0)) {
                                // line 179
                                echo "\t\t\t\t\t\t";
                                $context["subfix_id"] = 1;
                                // line 180
                                echo "\t\t\t\t\t\t<div class=\"clearfix visible-";
                                echo $context["key"];
                                echo "-block\"></div>
\t\t\t\t\t";
                            }
                            // line 182
                            echo "\t\t\t\t";
                        }
                        // line 183
                        echo "\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['key'], $context['subfix'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 184
                    echo "\t\t";
                }
                // line 185
                echo "\t\t";
                // line 186
                echo "\t\t
\t";
            } else {
                // line 188
                echo "\t\t<div class=\"product-list product-layout col-xs-12\">
\t\t\t<div class=\"product-item-container\">
\t\t\t\t<div class=\"left-block\">
\t\t\t\t\t<div class=\"product-image-container ";
                // line 191
                if ((($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "secondimg"), "method") == "2") && $this->getAttribute($context["product"], "thumb2", array()))) {
                    echo " second_img";
                }
                echo "  \">
\t\t\t\t\t\t<a href=\"";
                // line 192
                echo $this->getAttribute($context["product"], "href", array());
                echo " \" title=\"";
                echo $this->getAttribute($context["product"], "name", array());
                echo " \">
\t\t\t\t\t\t\t<img  src=\"";
                // line 193
                echo $this->getAttribute($context["product"], "thumb", array());
                echo " \"  title=\"";
                echo $this->getAttribute($context["product"], "name", array());
                echo " \" class=\"img-1 img-responsive\" />
\t\t\t\t\t\t\t";
                // line 194
                if ((($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "secondimg"), "method") == "2") && $this->getAttribute($context["product"], "thumb2", array()))) {
                    // line 195
                    echo "\t\t\t\t\t\t\t\t<img src=\"";
                    echo $this->getAttribute($context["product"], "thumb2", array());
                    echo "\"  alt=\"";
                    echo $this->getAttribute($context["product"], "name", array());
                    echo " \" title=\"";
                    echo $this->getAttribute($context["product"], "name", array());
                    echo " \" class=\"img-2 img-responsive\" />
\t\t\t\t\t\t\t";
                }
                // line 197
                echo "\t\t\t\t\t\t</a>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"box-label\">
\t\t\t\t\t\t";
                // line 202
                echo "\t\t\t\t\t\t";
                if (($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "new_status"), "method") && $this->getAttribute($context["product"], "date_available", array()))) {
                    echo " 
\t\t\t\t\t\t\t<span class=\"label-product label-new\">";
                    // line 203
                    echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_new"), "method");
                    echo " </span>
\t\t\t\t\t\t";
                }
                // line 204
                echo " 
\t\t\t\t\t\t
\t\t\t\t\t\t";
                // line 207
                echo "\t\t\t\t\t\t";
                if ($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "discount_status"), "method")) {
                    echo " 
\t\t\t\t\t\t";
                    // line 208
                    if (($this->getAttribute($context["product"], "price", array()) && $this->getAttribute($context["product"], "special", array()))) {
                        echo " 
\t\t\t\t\t\t\t<span class=\"label-product label-sale\">
\t\t\t\t\t\t\t\t ";
                        // line 210
                        echo $this->getAttribute($context["product"], "discount", array());
                        echo "
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t";
                    }
                    // line 212
                    echo " 
\t\t\t\t\t\t";
                }
                // line 213
                echo " 
\t\t\t\t\t</div> 

\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t";
                // line 219
                echo "\t\t\t\t\t";
                if (($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "countdown_status"), "method") && $this->getAttribute($context["product"], "special_end_date", array()))) {
                    // line 220
                    echo "\t\t\t\t\t\t";
                    $this->loadTemplate(((isset($context["theme_directory"]) ? $context["theme_directory"] : null) . "/template/soconfig/countdown.twig"), "so-oneshop/template/soconfig/listing.twig", 220)->display(array_merge($context, array("product" => $context["product"], "special_end_date" => $this->getAttribute($context["product"], "special_end_date", array()))));
                    // line 221
                    echo "\t\t\t\t\t";
                }
                // line 222
                echo "\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"right-block\">
\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t<h4><a href=\"";
                // line 226
                echo $this->getAttribute($context["product"], "href", array());
                echo " \">";
                echo $this->getAttribute($context["product"], "name", array());
                echo " </a></h4>
\t\t\t\t\t\t";
                // line 227
                if ($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "rating_status"), "method")) {
                    echo " 
\t\t\t\t\t\t<div class=\"ratings\">
\t\t\t\t\t\t\t<div class=\"rating-box\">
\t\t\t\t\t\t\t";
                    // line 230
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 231
                        echo "\t\t\t\t\t\t\t";
                        if (($this->getAttribute($context["product"], "rating", array()) < $context["i"])) {
                            echo " 
\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i></span>
\t\t\t\t\t\t\t";
                        } else {
                            // line 233
                            echo "   
\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-1x\"></i><i class=\"fa fa-star-o fa-stack-1x\"></i></span>
\t\t\t\t\t\t\t";
                        }
                        // line 235
                        echo " 
\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 237
                    echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 240
                echo " 
\t\t\t\t\t\t
\t\t\t\t\t\t";
                // line 242
                if ($this->getAttribute($context["product"], "price", array())) {
                    echo " 
\t\t\t\t\t\t<div class=\"price\">
\t\t\t\t\t\t\t";
                    // line 244
                    if ( !$this->getAttribute($context["product"], "special", array())) {
                        echo " 
\t\t\t\t\t\t\t\t<span class=\"price-new\">";
                        // line 245
                        echo $this->getAttribute($context["product"], "price", array());
                        echo " </span>
\t\t\t\t\t\t\t";
                    } else {
                        // line 246
                        echo "   
\t\t\t\t\t\t\t\t<span class=\"price-new\">";
                        // line 247
                        echo $this->getAttribute($context["product"], "special", array());
                        echo " </span> <span class=\"price-old\">";
                        echo $this->getAttribute($context["product"], "price", array());
                        echo " </span>
\t\t\t\t\t\t\t";
                    }
                    // line 248
                    echo " 
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 250
                echo " 
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"description \">
\t\t\t\t\t\t\t<p>";
                // line 253
                echo $this->getAttribute($context["product"], "description", array());
                echo " </p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"button-group\">
\t\t\t\t\t\t<button class=\"addToCart\" type=\"button\" title=\"";
                // line 257
                echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
                echo " \" onclick=\"cart.add('";
                echo $this->getAttribute($context["product"], "product_id", array());
                echo " ', '";
                echo $this->getAttribute($context["product"], "minimum", array());
                echo " ');\"><span>";
                echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
                echo " </span></button>
\t\t\t\t\t\t<button class=\"wishlist btn-button\" type=\"button\" title=\"";
                // line 258
                echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                echo " \" onclick=\"wishlist.add('";
                echo $this->getAttribute($context["product"], "product_id", array());
                echo " ');\"><i class=\"fa fa-heart\"></i></button>

\t\t\t\t\t\t<button class=\"compare btn-button\" type=\"button\" title=\"";
                // line 260
                echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
                echo " \" onclick=\"compare.add('";
                echo $this->getAttribute($context["product"], "product_id", array());
                echo " ');\"><i class=\"fa fa-random\"></i></button>
\t\t\t\t\t\t";
                // line 261
                if ($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "quick_status"), "method")) {
                    // line 262
                    echo "\t\t\t\t\t\t\t<a class=\"quickview iframe-link visible-lg btn-button\" title=\"";
                    echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_quickview"), "method");
                    echo " \" data-fancybox-type=\"iframe\"  href=\"";
                    echo $this->getAttribute((isset($context["our_url"]) ? $context["our_url"] : null), "link", array(0 => "extension/soconfig/quickview", 1 => ("product_id=" . $this->getAttribute($context["product"], "product_id", array()))), "method");
                    echo "\"> <i class=\"fa fa-eye\"></i> </a>
\t\t\t\t\t\t";
                }
                // line 263
                echo " 
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t</div>
\t\t</div>
\t
\t";
            }
            // line 272
            echo "\t";
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
        unset($context['_seq'], $context['_iterated'], $context['idproduct'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 273
        echo "</div>

";
        // line 276
        echo "<div class=\"product-filter product-filter-bottom filters-panel\">
\t<div class=\"row\">
\t\t<div class=\"col-sm-6 text-left\">";
        // line 278
        echo (isset($context["pagination"]) ? $context["pagination"] : null);
        echo "</div>
\t\t<div class=\"col-sm-6 text-right\">";
        // line 279
        echo (isset($context["results"]) ? $context["results"] : null);
        echo "</div>
\t</div>
</div>
<script type=\"text/javascript\"><!--
 \$('.view-mode .list-view button').bind(\"click\", function() {
\tif (\$(this).is(\".active\")) {return false;}
\t\$.cookie('listingType', \$(this).is(\".grid\") ? 'grid' : 'list', { path: '/' });
\tlocation.reload();
});
//--></script> ";
    }

    public function getTemplateName()
    {
        return "so-oneshop/template/soconfig/listing.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  788 => 279,  784 => 278,  780 => 276,  776 => 273,  762 => 272,  751 => 263,  743 => 262,  741 => 261,  735 => 260,  728 => 258,  718 => 257,  711 => 253,  706 => 250,  701 => 248,  694 => 247,  691 => 246,  686 => 245,  682 => 244,  677 => 242,  673 => 240,  667 => 237,  660 => 235,  655 => 233,  648 => 231,  644 => 230,  638 => 227,  632 => 226,  626 => 222,  623 => 221,  620 => 220,  617 => 219,  610 => 213,  606 => 212,  600 => 210,  595 => 208,  590 => 207,  586 => 204,  581 => 203,  576 => 202,  570 => 197,  560 => 195,  558 => 194,  552 => 193,  546 => 192,  540 => 191,  535 => 188,  531 => 186,  529 => 185,  526 => 184,  520 => 183,  517 => 182,  511 => 180,  508 => 179,  505 => 178,  502 => 177,  497 => 176,  494 => 175,  488 => 174,  485 => 173,  479 => 171,  476 => 170,  473 => 169,  470 => 168,  467 => 167,  462 => 166,  459 => 165,  456 => 164,  444 => 154,  439 => 151,  434 => 149,  427 => 148,  424 => 147,  419 => 146,  415 => 145,  410 => 143,  406 => 141,  400 => 138,  393 => 136,  388 => 134,  381 => 132,  377 => 131,  371 => 128,  365 => 127,  353 => 120,  347 => 119,  337 => 118,  333 => 116,  323 => 114,  321 => 113,  317 => 111,  313 => 110,  307 => 108,  302 => 106,  297 => 105,  293 => 102,  288 => 101,  283 => 100,  279 => 97,  276 => 96,  273 => 95,  270 => 94,  265 => 90,  255 => 88,  253 => 87,  247 => 86,  241 => 85,  235 => 84,  228 => 81,  226 => 80,  223 => 79,  206 => 78,  201 => 77,  191 => 71,  187 => 69,  181 => 68,  173 => 66,  165 => 64,  162 => 63,  158 => 62,  153 => 60,  147 => 56,  141 => 55,  133 => 52,  130 => 51,  122 => 49,  119 => 48,  115 => 47,  109 => 44,  98 => 38,  92 => 37,  86 => 33,  83 => 31,  76 => 29,  73 => 28,  70 => 27,  67 => 26,  64 => 25,  61 => 24,  56 => 23,  49 => 21,  46 => 20,  43 => 19,  40 => 18,  37 => 17,  34 => 16,  29 => 15,  27 => 14,  23 => 12,  21 => 11,  19 => 10,);
    }
}
/* {#*/
/* ****************************************************** */
/*  * @package	SO Framework for Opencart 3.x*/
/*  * @author	http://www.opencartworks.com*/
/*  * @license	GNU General Public License*/
/*  * @copyright(C) 2008-2017 opencartworks.com. All rights reserved.*/
/*  *******************************************************/
/* #}*/
/* {#====  Variables Device_res ==== #}*/
/* {% set devices = { 'lg' : 'Desktops','md' : 'Tablet Landscape','sm' : 'Tablet Portrait','xs' : 'Phones'} %}*/
/* {% set device_res = '' %}*/
/* */
/* */
/* {% if soconfig.get_route()=='product/category' or  soconfig.get_route()=='extension/module/so_filter_shop_by/filter_data' %}*/
/* 	{% for  key, subfix in devices %}*/
/* 		{% if soconfig.get_settings('product_catalog_column_'~key) == 5 %}*/
/* 			{% set device_res = device_res ~ ' col-'~key~'-15' %}*/
/* 		{% else %}*/
/* 			{% set device_res = device_res ~ ' col-'~key~'-'~(12 / soconfig.get_settings('product_catalog_column_'~key) ) %}*/
/* 		{% endif %}*/
/* 	{% endfor %}*/
/* {% else %}*/
/* 	{% for  key, subfix in devices %}*/
/* 		{% if soconfig.get_settings('other_catalog_column_'~key) == 5 %}*/
/* 			{% set device_res = device_res ~ ' col-'~key~'-15' %}*/
/* 		{% else %}*/
/* 			{% set device_res = device_res ~ ' col-'~key~'-'~(12 / soconfig.get_settings('other_catalog_column_'~key) ) %}*/
/* 		{% endif %}*/
/* 	{% endfor %}*/
/* {% endif %}*/
/* */
/* {#==== filters panel Top==== #}*/
/* <div class="product-filter filters-panel">*/
/*   <div class="row">*/
/* 		<div class="col-sm-2 view-mode hidden-sm hidden-xs">*/
/* 			<div class="list-view">*/
/* 				<button type="button" id="grid-view" class="btn btn-default grid {{ listingType=='grid' ? 'active' : ''}}" title="{{ button_grid }}"><i class="fa fa-th-large"></i></button>*/
/* 				<button type="button" id="list-view" class="btn btn-default list {{ listingType=='list' ? 'active' : ''}}" title="{{ button_list }}"><i class="fa fa-bars"></i></button>*/
/* 			</div>*/
/* 		</div>*/
/* 	*/
/* 		<div class="short-by-show form-inline text-right col-md-10 col-sm-12">*/
/* 			<div class="form-group short-by">*/
/* 				<label class="control-label" for="input-sort">{{ text_sort }}</label>*/
/* 				<select id="input-sort" class="form-control" onchange="location = this.value;">*/
/* 					*/
/* 					{% for sorts in sorts %}*/
/* 					{% if sorts.value == '%s-%s'|format(sort, order) %}*/
/* 					<option value="{{ sorts.href }}" selected="selected">{{ sorts.text }}</option>*/
/* 					{% else %}*/
/* 					*/
/* 					<option value="{{ sorts.href }}">{{ sorts.text }}</option>*/
/* 					*/
/* 					{% endif %}*/
/* 					{% endfor %}*/
/* 				*/
/* 				</select>*/
/* 			</div>*/
/* 			<div class="form-group">*/
/* 				<label class="control-label" for="input-limit">{{ text_limit }}</label>*/
/* 				<select id="input-limit" class="form-control" onchange="location = this.value;">*/
/* 					{% for limits in limits %}*/
/* 					{% if limits.value == limit %}*/
/* 					<option value="{{ limits.href }}" selected="selected">{{ limits.text }}</option>*/
/* 					{% else %}*/
/* 					<option value="{{ limits.href }}">{{ limits.text }}</option>*/
/* 					{% endif %}*/
/* 					{% endfor %}*/
/* 				</select>*/
/* 			</div>*/
/* 			<div class="form-group product-compare"><a href="{{ compare }}" id="compare-total" class="btn btn-default">{{ text_compare }}</a></div>*/
/* 		</div>*/
/* 	*/
/*   </div>*/
/* </div>*/
/* {#==== Product List|Grid ==== #}*/
/* <div class="products-list row {{ listingType }}">*/
/* 	{% for idproduct, product in products %}*/
/* 	*/
/* 	{% if listingType=='grid' %}*/
/* 		<div class="product-layout {{ device_res }}">*/
/* 			<div class="product-item-container">*/
/* 				<div class="left-block">*/
/* 					<div class="product-image-container {% if soconfig.get_settings('secondimg') =='2'  and  product.thumb2 %} second_img{% endif %}  ">*/
/* 						<a href="{{ product.href }} " title="{{ product.name }} ">*/
/* 							<img  src="{{ product.thumb }} "  title="{{ product.name }} " class="img-1 img-responsive" />*/
/* 							{% if soconfig.get_settings('secondimg') =='2'  and  product.thumb2  %}*/
/* 								<img src="{{ product.thumb2 }}"  alt="{{ product.name }} " title="{{ product.name }} " class="img-2 img-responsive" />*/
/* 							{% endif %}*/
/* 						</a>*/
/* 					</div>*/
/* 					*/
/* 					{#===== Show CountDown Product =======#}*/
/* 					{% if soconfig.get_settings('countdown_status') and product.special_end_date %}*/
/* 						{% include theme_directory~'/template/soconfig/countdown.twig' with {product: product,special_end_date:product.special_end_date} %}*/
/* 					{% endif %}*/
/* 					*/
/* 					<div class="box-label">*/
/* 						{#===== New Label=======#}*/
/* 						{% if soconfig.get_settings('new_status') and product.date_available %} */
/* 							<span class="label-product label-new">{{ objlang.get('text_new')}} </span>*/
/* 						{% endif %} */
/* 						*/
/* 						{#=======Discount Label======= #}*/
/* 						{% if soconfig.get_settings('discount_status')  %} */
/* 						{% if product.price  and  product.special  %} */
/* 							<span class="label-product label-sale">*/
/* 								 {{ product.discount }}*/
/* 							</span>*/
/* 						{% endif %} */
/* 						{% endif %} */
/* 					</div> */
/* 					{% if soconfig.get_settings('quick_status') %}*/
/* 						<a class="quickview iframe-link visible-lg btn-button" title="{{ objlang.get('text_quickview')}} " data-fancybox-type="iframe"  href="{{ our_url.link('extension/soconfig/quickview','product_id='~product.product_id) }}"> <i class="fa fa-eye"></i> {{objlang.get('text_quickview')}}</a>*/
/* 					{% endif %}*/
/* */
/* 					<div class="button-group">*/
/* 						<button class="addToCart btn-button" type="button" title="{{ button_cart}}" onclick="cart.add('{{ product.product_id }}', '{{ product.minimum }}');"><!-- {{ button_cart }} --><i class="fa fa-shopping-cart"></i></button>*/
/* 						<button class="wishlist btn-button" type="button" title="{{ button_wishlist}}" onclick="wishlist.add('{{ product.product_id }}');"><i class="fa fa-heart"></i></button>*/
/* 						<button class="compare btn-button" type="button" title="{{ button_compare }}" onclick="compare.add('{{ product.product_id }}');"><i class="fa fa-random"></i></button>*/
/* 						 */
/* 					</div>*/
/* 				</div>*/
/* 				*/
/* 				<div class="right-block">*/
/* 					<div class="caption">*/
/* 						<h4><a href="{{ product.href }} ">{{ product.name }} </a></h4>*/
/* 						{% if soconfig.get_settings('rating_status') %} */
/* 						<div class="ratings">*/
/* 							<div class="rating-box">*/
/* 							{% for i in 1..5 %}*/
/* 							{% if product.rating < i %} */
/* 								<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>*/
/* 							{% else %}   */
/* 								<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>*/
/* 							{% endif %} */
/* 							{% endfor %}*/
/* */
/* 							</div>*/
/* 						</div>*/
/* 						{% endif %} */
/* 						*/
/* 						{% if product.price %} */
/* 						<div class="price">*/
/* 							{% if not product.special %} */
/* 								<span class="price-new">{{ product.price }} </span>*/
/* 							{% else %}   */
/* 								<span class="price-new">{{ product.special }} </span> <span class="price-old">{{ product.price }} </span>*/
/* 							{% endif %} */
/* 						</div>*/
/* 						{% endif %} */
/* 						*/
/* 						<div class="description hidden">*/
/* 							<p>{{ product.description }} </p>*/
/* 						</div>*/
/* 					</div>*/
/* 					*/
/* 				</div>*/
/* 				*/
/* 			</div>*/
/* 		</div>*/
/* 		*/
/* 		{# =========Clearfix fluid grid layout============== #}*/
/* 		{% set subfix_id = idproduct + 1 %}*/
/* 		{% if soconfig.get_route()=='product/category' or  soconfig.get_route()=='extension/module/so_filter_shop_by/filter_data' %}*/
/* 			{% for  key, subfix in devices %}*/
/* 				{% set idproduct = key + 1 %}*/
/* 				{% if soconfig.get_settings('product_catalog_column_'~key) %}*/
/* 					{% if subfix_id % soconfig.get_settings('product_catalog_column_'~key) == 0 %}*/
/* 						{% set subfix_id = 1 %}*/
/* 						<div class="clearfix visible-{{key}}-block"></div>*/
/* 					{% endif %}*/
/* 				{% endif %}*/
/* 			{% endfor %}*/
/* 		{% else %}*/
/* 			{% for  key, subfix in devices %}*/
/* 				{% if soconfig.get_settings('other_catalog_column_'~key) %}*/
/* 					{% if subfix_id % soconfig.get_settings('other_catalog_column_'~key) == 0 %}*/
/* 						{% set subfix_id = 1 %}*/
/* 						<div class="clearfix visible-{{key}}-block"></div>*/
/* 					{% endif %}*/
/* 				{% endif %}*/
/* 			{% endfor %}*/
/* 		{% endif %}*/
/* 		{# ====End Clearfix fluid grid layout =======#}*/
/* 		*/
/* 	{% else %}*/
/* 		<div class="product-list product-layout col-xs-12">*/
/* 			<div class="product-item-container">*/
/* 				<div class="left-block">*/
/* 					<div class="product-image-container {% if soconfig.get_settings('secondimg') =='2'  and  product.thumb2 %} second_img{% endif %}  ">*/
/* 						<a href="{{ product.href }} " title="{{ product.name }} ">*/
/* 							<img  src="{{ product.thumb }} "  title="{{ product.name }} " class="img-1 img-responsive" />*/
/* 							{% if soconfig.get_settings('secondimg') =='2'  and  product.thumb2  %}*/
/* 								<img src="{{ product.thumb2 }}"  alt="{{ product.name }} " title="{{ product.name }} " class="img-2 img-responsive" />*/
/* 							{% endif %}*/
/* 						</a>*/
/* 						*/
/* 					</div>*/
/* 					<div class="box-label">*/
/* 						{# New Label  #}*/
/* 						{% if soconfig.get_settings('new_status') and product.date_available %} */
/* 							<span class="label-product label-new">{{ objlang.get('text_new')}} </span>*/
/* 						{% endif %} */
/* 						*/
/* 						{# Discount Label #}*/
/* 						{% if soconfig.get_settings('discount_status')  %} */
/* 						{% if product.price  and  product.special  %} */
/* 							<span class="label-product label-sale">*/
/* 								 {{ product.discount }}*/
/* 							</span>*/
/* 						{% endif %} */
/* 						{% endif %} */
/* 					</div> */
/* */
/* 					*/
/* 					*/
/* 					{#===== Show CountDown Product =======#}*/
/* 					{% if soconfig.get_settings('countdown_status') and product.special_end_date %}*/
/* 						{% include theme_directory~'/template/soconfig/countdown.twig' with {product: product,special_end_date:product.special_end_date} %}*/
/* 					{% endif %}*/
/* 				</div>*/
/* 				*/
/* 				<div class="right-block">*/
/* 					<div class="caption">*/
/* 						<h4><a href="{{ product.href }} ">{{ product.name }} </a></h4>*/
/* 						{% if soconfig.get_settings('rating_status') %} */
/* 						<div class="ratings">*/
/* 							<div class="rating-box">*/
/* 							{% for i in 1..5 %}*/
/* 							{% if product.rating < i %} */
/* 								<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>*/
/* 							{% else %}   */
/* 								<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>*/
/* 							{% endif %} */
/* 							{% endfor %}*/
/* */
/* 							</div>*/
/* 						</div>*/
/* 						{% endif %} */
/* 						*/
/* 						{% if product.price %} */
/* 						<div class="price">*/
/* 							{% if not product.special %} */
/* 								<span class="price-new">{{ product.price }} </span>*/
/* 							{% else %}   */
/* 								<span class="price-new">{{ product.special }} </span> <span class="price-old">{{ product.price }} </span>*/
/* 							{% endif %} */
/* 						</div>*/
/* 						{% endif %} */
/* 						*/
/* 						<div class="description ">*/
/* 							<p>{{ product.description }} </p>*/
/* 						</div>*/
/* 					</div>*/
/* 					<div class="button-group">*/
/* 						<button class="addToCart" type="button" title="{{ button_cart }} " onclick="cart.add('{{ product.product_id }} ', '{{ product.minimum }} ');"><span>{{ button_cart }} </span></button>*/
/* 						<button class="wishlist btn-button" type="button" title="{{ button_wishlist }} " onclick="wishlist.add('{{ product.product_id }} ');"><i class="fa fa-heart"></i></button>*/
/* */
/* 						<button class="compare btn-button" type="button" title="{{ button_compare }} " onclick="compare.add('{{ product.product_id }} ');"><i class="fa fa-random"></i></button>*/
/* 						{% if soconfig.get_settings('quick_status')  %}*/
/* 							<a class="quickview iframe-link visible-lg btn-button" title="{{ objlang.get('text_quickview')}} " data-fancybox-type="iframe"  href="{{ our_url.link('extension/soconfig/quickview','product_id='~product.product_id) }}"> <i class="fa fa-eye"></i> </a>*/
/* 						{% endif %} */
/* 						*/
/* 					</div>*/
/* 				</div>*/
/* 				*/
/* 			</div>*/
/* 		</div>*/
/* 	*/
/* 	{% endif %}*/
/* 	{% endfor %}*/
/* </div>*/
/* */
/* {#==== filters panel Bottom==== #}*/
/* <div class="product-filter product-filter-bottom filters-panel">*/
/* 	<div class="row">*/
/* 		<div class="col-sm-6 text-left">{{ pagination }}</div>*/
/* 		<div class="col-sm-6 text-right">{{ results }}</div>*/
/* 	</div>*/
/* </div>*/
/* <script type="text/javascript"><!--*/
/*  $('.view-mode .list-view button').bind("click", function() {*/
/* 	if ($(this).is(".active")) {return false;}*/
/* 	$.cookie('listingType', $(this).is(".grid") ? 'grid' : 'list', { path: '/' });*/
/* 	location.reload();*/
/* });*/
/* //--></script> */
