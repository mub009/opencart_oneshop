<?php

/* so-oneshop/template/extension/module/so_megamenu/default.twig */
class __TwigTemplate_fa1e003a900b4daab4f09ac602422f4cb6db1389c671cc5e1a0f2c600dff95e0 extends Twig_Template
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
        echo "<div class=\"responsive megamenu-style-dev\">
\t";
        // line 2
        if (($this->getAttribute((isset($context["ustawienia"]) ? $context["ustawienia"] : null), "orientation", array()) == 1)) {
            // line 3
            echo "\t<div class=\"so-vertical-menu no-gutter\">
\t";
        }
        // line 5
        echo "\t
\t";
        // line 6
        if (($this->getAttribute((isset($context["ustawienia"]) ? $context["ustawienia"] : null), "disp_title_module", array()) && (isset($context["head_name"]) ? $context["head_name"] : null))) {
            // line 7
            echo "\t\t<h3>";
            echo (isset($context["head_name"]) ? $context["head_name"] : null);
            echo "</h3>
\t";
        }
        // line 9
        echo "\t<nav class=\"navbar-default\">
\t\t<div class=\" container-megamenu ";
        // line 10
        if (($this->getAttribute((isset($context["ustawienia"]) ? $context["ustawienia"] : null), "full_width", array()) != 1)) {
            echo " ";
            echo "container";
            echo " ";
        }
        echo " ";
        if (($this->getAttribute((isset($context["ustawienia"]) ? $context["ustawienia"] : null), "orientation", array()) == 1)) {
            echo " ";
            echo "vertical ";
            echo " ";
        } else {
            echo " ";
            echo "horizontal";
            echo " ";
        }
        echo "\">
\t\t";
        // line 11
        if (($this->getAttribute((isset($context["ustawienia"]) ? $context["ustawienia"] : null), "orientation", array()) == 1)) {
            // line 12
            echo "\t\t\t<div id=\"menuHeading\">
\t\t\t\t<div class=\"megamenuToogle-wrapper\">
\t\t\t\t\t<div class=\"megamenuToogle-pattern\">
\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t<div><span></span><span></span><span></span></div>
\t\t\t\t\t\t\t";
            // line 17
            echo (isset($context["navigation_text"]) ? $context["navigation_text"] : null);
            echo "
\t\t\t\t\t\t\t<i class=\"fa fa-caret-down\"></i>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"navbar-header\">
\t\t\t\t<button type=\"button\" id=\"show-verticalmenu\" data-toggle=\"collapse\"  class=\"navbar-toggle\">
\t\t\t\t\t<!-- <span class=\"icon-bar\"></span>
\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t<span class=\"icon-bar\"></span> -->
\t\t\t\t\t<i class=\"fa fa-bars\"></i>
\t\t\t\t\t<span class=\"hidden\">";
            // line 29
            echo (isset($context["navigation_text"]) ? $context["navigation_text"] : null);
            echo "</span>

\t\t\t\t</button>
\t\t\t</div>
\t\t";
        } else {
            // line 34
            echo "\t\t\t<div class=\"navbar-header\">
\t\t\t\t<button type=\"button\" id=\"show-megamenu\" data-toggle=\"collapse\"  class=\"navbar-toggle\">
\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t</button>
\t\t\t</div>
\t\t";
        }
        // line 42
        echo "
\t\t";
        // line 43
        if (($this->getAttribute((isset($context["ustawienia"]) ? $context["ustawienia"] : null), "orientation", array()) == 1)) {
            // line 44
            echo "\t\t\t<div class=\"vertical-wrapper\">
\t\t";
        } else {
            // line 46
            echo "\t\t\t<div class=\"megamenu-wrapper\">
\t\t";
        }
        // line 48
        echo "
\t\t";
        // line 49
        if (($this->getAttribute((isset($context["ustawienia"]) ? $context["ustawienia"] : null), "orientation", array()) == 1)) {
            // line 50
            echo "\t\t\t<span id=\"remove-verticalmenu\" class=\"fa fa-times\"></span>
\t\t";
        } else {
            // line 52
            echo "\t\t\t<span id=\"remove-megamenu\" class=\"fa fa-times\"></span>
\t\t";
        }
        // line 54
        echo "
\t\t\t<div class=\"megamenu-pattern\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<ul class=\"megamenu\"
\t\t\t\t\tdata-transition=\"";
        // line 58
        if (($this->getAttribute((isset($context["ustawienia"]) ? $context["ustawienia"] : null), "animation", array()) != "")) {
            echo $this->getAttribute((isset($context["ustawienia"]) ? $context["ustawienia"] : null), "animation", array());
        } else {
            echo "none";
        }
        echo "\" data-animationtime=\"";
        if ((($this->getAttribute((isset($context["ustawienia"]) ? $context["ustawienia"] : null), "animation_time", array()) > 0) && ($this->getAttribute((isset($context["ustawienia"]) ? $context["ustawienia"] : null), "animation_time", array()) < 5000))) {
            echo $this->getAttribute((isset($context["ustawienia"]) ? $context["ustawienia"] : null), "animation_time", array());
        } else {
            echo 500;
        }
        echo "\">
\t\t\t\t\t\t";
        // line 59
        if ((($this->getAttribute((isset($context["ustawienia"]) ? $context["ustawienia"] : null), "home_item", array()) == "icon") || ($this->getAttribute((isset($context["ustawienia"]) ? $context["ustawienia"] : null), "home_item", array()) == "text"))) {
            // line 60
            echo "\t\t\t\t\t\t\t<li class=\"home\">
\t\t\t\t\t\t\t\t<a href=\"";
            // line 61
            echo (isset($context["home"]) ? $context["home"] : null);
            echo "\">
\t\t\t\t\t\t\t\t";
            // line 62
            if (($this->getAttribute((isset($context["ustawienia"]) ? $context["ustawienia"] : null), "home_item", array()) == "icon")) {
                // line 63
                echo "\t\t\t\t\t\t\t\t\t<i class=\"fa fa-home\"></i>
\t\t\t\t\t\t\t\t";
            } else {
                // line 65
                echo "\t\t\t\t\t\t\t\t\t<span><strong>";
                echo (isset($context["home_text"]) ? $context["home_text"] : null);
                echo "</strong></span>
\t\t\t\t\t\t\t\t";
            }
            // line 67
            echo "\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
        }
        // line 70
        echo "\t\t\t\t\t\t
\t\t\t\t\t\t";
        // line 71
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["menu"]) ? $context["menu"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["row"]) {
            // line 72
            echo "\t\t\t\t\t\t\t";
            $context["class"] = "";
            // line 73
            echo "\t\t\t\t\t\t\t";
            $context["icon_font"] = "";
            // line 74
            echo "\t\t\t\t\t\t\t";
            $context["class_link"] = "clearfix";
            // line 75
            echo "\t\t\t\t\t\t\t";
            $context["label_item"] = "";
            // line 76
            echo "\t\t\t\t\t\t\t";
            $context["title"] = false;
            // line 77
            echo "\t\t\t\t\t\t\t";
            $context["target"] = false;
            // line 78
            echo "
\t\t\t\t\t\t\t";
            // line 79
            if (twig_in_filter("no_image", $this->getAttribute($context["row"], "icon", array()))) {
                // line 80
                echo "\t\t\t\t\t\t\t\t";
                $context["icon"] = "";
                // line 81
                echo "\t\t\t\t\t\t\t";
            } else {
                // line 82
                echo "\t\t\t\t\t\t\t\t";
                $context["icon"] = $this->getAttribute($context["row"], "icon", array());
                // line 83
                echo "\t\t\t\t\t\t\t";
            }
            // line 84
            echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t\t";
            // line 85
            if (($this->getAttribute($context["row"], "description", array()) != "")) {
                // line 86
                echo "\t\t\t\t\t\t\t\t";
                $context["class_link"] = ((isset($context["class_link"]) ? $context["class_link"] : null) . " description");
                // line 87
                echo "\t\t\t\t\t\t\t";
            }
            // line 88
            echo "
\t\t\t\t\t\t\t";
            // line 89
            if (((((isset($context["route"]) ? $context["route"] : null) && ((isset($context["route"]) ? $context["route"] : null) == $this->getAttribute($context["row"], "route", array()))) && (isset($context["path"]) ? $context["path"] : null)) && ((isset($context["path"]) ? $context["path"] : null) == $this->getAttribute($context["row"], "path", array())))) {
                // line 90
                echo "\t\t\t\t\t\t\t\t";
                $context["class"] = ((isset($context["class"]) ? $context["class"] : null) . " active_menu");
                // line 91
                echo "\t\t\t\t\t\t\t";
            }
            // line 92
            echo "
\t\t\t\t\t\t\t";
            // line 93
            if ($this->getAttribute($context["row"], "class_menu", array())) {
                // line 94
                echo "\t\t\t\t\t\t\t\t";
                $context["class"] = ((isset($context["class"]) ? $context["class"] : null) . $this->getAttribute($context["row"], "class_menu", array()));
                // line 95
                echo "\t\t\t\t\t\t\t";
            }
            // line 96
            echo "
\t\t\t\t\t\t\t";
            // line 97
            if ($this->getAttribute($context["row"], "icon_font", array())) {
                // line 98
                echo "\t\t\t\t\t\t\t\t";
                $context["icon_font"] = ((((isset($context["icon_font"]) ? $context["icon_font"] : null) . "<i class=\"") . $this->getAttribute($context["row"], "icon_font", array())) . "\"></i>");
                // line 99
                echo "\t\t\t\t\t\t\t";
            }
            // line 100
            echo "
\t\t\t\t\t\t\t";
            // line 101
            if ($this->getAttribute($context["row"], "label_item", array())) {
                // line 102
                echo "\t\t\t\t\t\t\t\t";
                $context["label_item"] = ((((isset($context["label_item"]) ? $context["label_item"] : null) . "<span class=\"label") . $this->getAttribute($context["row"], "label_item", array())) . "\"></span>");
                // line 103
                echo "\t\t\t\t\t\t\t";
            }
            // line 104
            echo "
\t\t\t\t\t\t\t";
            // line 105
            if ((twig_test_iterable($this->getAttribute($context["row"], "submenu", array())) && $this->getAttribute($context["row"], "submenu", array()))) {
                // line 106
                echo "\t\t\t\t\t\t\t\t";
                $context["class"] = ((isset($context["class"]) ? $context["class"] : null) . " with-sub-menu");
                // line 107
                echo "\t\t\t\t\t\t\t\t";
                if (($this->getAttribute($context["row"], "submenu_type", array()) == 1)) {
                    // line 108
                    echo "\t\t\t\t\t\t\t\t\t";
                    $context["class"] = ((isset($context["class"]) ? $context["class"] : null) . " click");
                    // line 109
                    echo "\t\t\t\t\t\t\t\t";
                } else {
                    // line 110
                    echo "\t\t\t\t\t\t\t\t\t";
                    $context["class"] = ((isset($context["class"]) ? $context["class"] : null) . " hover");
                    // line 111
                    echo "\t\t\t\t\t\t\t\t";
                }
                // line 112
                echo "\t\t\t\t\t\t\t";
            }
            // line 113
            echo "
\t\t\t\t\t\t\t";
            // line 114
            if (($this->getAttribute($context["row"], "position", array()) == 1)) {
                // line 115
                echo "\t\t\t\t\t\t\t\t";
                $context["class"] = ((isset($context["class"]) ? $context["class"] : null) . " pull-right");
                // line 116
                echo "\t\t\t\t\t\t\t";
            }
            // line 117
            echo "
\t\t\t\t\t\t\t";
            // line 118
            if (($this->getAttribute($context["row"], "submenu_type", array()) == 2)) {
                // line 119
                echo "\t\t\t\t\t\t\t\t";
                $context["title"] = "title=\"hover-intent\"";
                // line 120
                echo "\t\t\t\t\t\t\t";
            }
            // line 121
            echo "
\t\t\t\t\t\t\t";
            // line 122
            if (($this->getAttribute($context["row"], "new_window", array()) == 1)) {
                // line 123
                echo "\t\t\t\t\t\t\t\t";
                $context["target"] = "target=\"_blank\"";
                // line 124
                echo "\t\t\t\t\t\t\t";
            }
            // line 125
            echo "
\t\t\t\t\t\t\t";
            // line 126
            if (($this->getAttribute((isset($context["ustawienia"]) ? $context["ustawienia"] : null), "orientation", array()) == 1)) {
                // line 127
                echo "\t\t\t\t\t\t\t\t<li class=\"item-vertical ";
                echo (isset($context["class"]) ? $context["class"] : null);
                echo "\" ";
                echo (isset($context["title"]) ? $context["title"] : null);
                echo ">
\t\t\t\t\t\t\t\t\t<p class='close-menu'></p>
\t\t\t\t\t\t\t\t\t";
                // line 129
                if ((twig_test_iterable($this->getAttribute($context["row"], "submenu", array())) && $this->getAttribute($context["row"], "submenu", array()))) {
                    // line 130
                    echo "\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    echo $this->getAttribute($context["row"], "link", array());
                    echo "\" class=\"";
                    echo (isset($context["class_link"]) ? $context["class_link"] : null);
                    echo "\" ";
                    echo (isset($context["target"]) ? $context["target"] : null);
                    echo ">
\t\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>";
                    // line 132
                    echo ((((isset($context["icon_font"]) ? $context["icon_font"] : null) . (isset($context["icon"]) ? $context["icon"] : null)) . $this->getAttribute($this->getAttribute($context["row"], "name", array()), (isset($context["lang_id"]) ? $context["lang_id"] : null), array(), "array")) . $this->getAttribute($context["row"], "description", array()));
                    echo "</strong>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 134
                    echo (isset($context["label_item"]) ? $context["label_item"] : null);
                    echo "
\t\t\t\t\t\t\t\t\t\t\t<b class='fa fa-angle-right' ></b>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 138
                    echo "\t\t\t\t\t\t\t\t \t\t<a href=\"";
                    echo $this->getAttribute($context["row"], "link", array());
                    echo "\" class=\"";
                    echo (isset($context["class_link"]) ? $context["class_link"] : null);
                    echo "\" ";
                    echo (isset($context["target"]) ? $context["target"] : null);
                    echo ">
\t\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>";
                    // line 140
                    echo ((((isset($context["icon_font"]) ? $context["icon_font"] : null) . (isset($context["icon"]) ? $context["icon"] : null)) . $this->getAttribute($this->getAttribute($context["row"], "name", array()), (isset($context["lang_id"]) ? $context["lang_id"] : null), array(), "array")) . $this->getAttribute($context["row"], "description", array()));
                    echo "</strong>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 142
                    echo (isset($context["label_item"]) ? $context["label_item"] : null);
                    echo "
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t";
                }
                // line 145
                echo "
\t\t\t\t\t\t\t\t\t";
                // line 146
                if ((twig_test_iterable($this->getAttribute($context["row"], "submenu", array())) && $this->getAttribute($context["row"], "submenu", array()))) {
                    // line 147
                    echo "\t\t\t\t\t\t\t\t\t\t";
                    if (twig_in_filter("%", $this->getAttribute($context["row"], "submenu_width", array()))) {
                        // line 148
                        echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"sub-menu\" data-subwidth =\"";
                        echo twig_replace_filter($this->getAttribute($context["row"], "submenu_width", array()), array("%" => ""));
                        echo "\">
\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 150
                        echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"sub-menu\" style=\"width:";
                        echo $this->getAttribute($context["row"], "submenu_width", array());
                        echo "\">
\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 152
                    echo "
\t\t\t\t\t\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 155
                    $context["row_fluid"] = 0;
                    // line 156
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["row"], "submenu", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["submenu"]) {
                        // line 157
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        if ((((isset($context["row_fluid"]) ? $context["row_fluid"] : null) + $this->getAttribute($context["submenu"], "content_width", array())) > 12)) {
                            // line 158
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            $context["row_fluid"] = $this->getAttribute($context["submenu"], "content_width", array());
                            // line 159
                            echo "\t\t\t\t\t\t\t\t\t\t \t\t\t\t</div><div class=\"border\"></div><div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        } else {
                            // line 161
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            $context["row_fluid"] = ((isset($context["row_fluid"]) ? $context["row_fluid"] : null) + $this->getAttribute($context["submenu"], "content_width", array()));
                            // line 162
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 163
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-";
                        echo $this->getAttribute($context["submenu"], "content_width", array());
                        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 164
                        if (($this->getAttribute($context["submenu"], "content_type", array()) == 0)) {
                            // line 165
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"html ";
                            echo $this->getAttribute($context["submenu"], "class_menu", array());
                            echo "\">";
                            echo $this->getAttribute($context["submenu"], "html", array());
                            echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        } elseif (($this->getAttribute(                        // line 166
$context["submenu"], "content_type", array()) == 1)) {
                            // line 167
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            if (twig_test_iterable($this->getAttribute($context["submenu"], "product", array()))) {
                                // line 168
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product ";
                                echo $this->getAttribute($context["submenu"], "class_menu", array());
                                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"image\"><a href=\"";
                                // line 169
                                echo $this->getAttribute($this->getAttribute($context["submenu"], "product", array()), "link", array());
                                echo "\" onclick=\"window.location = '";
                                echo $this->getAttribute($this->getAttribute($context["submenu"], "product", array()), "link", array());
                                echo "'\"><img src=\"";
                                echo $this->getAttribute($this->getAttribute($context["submenu"], "product", array()), "image", array());
                                echo "\" alt=\"\"></a></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"name\"><a href=\"";
                                // line 170
                                echo $this->getAttribute($this->getAttribute($context["submenu"], "product", array()), "link", array());
                                echo "\" onclick=\"window.location = '";
                                echo $this->getAttribute($this->getAttribute($context["submenu"], "product", array()), "link", array());
                                echo "'\">";
                                echo $this->getAttribute($this->getAttribute($context["submenu"], "product", array()), "name", array());
                                echo "</a></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"price\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                // line 172
                                if ( !$this->getAttribute($this->getAttribute($context["submenu"], "product", array()), "special", array())) {
                                    // line 173
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    echo $this->getAttribute($this->getAttribute($context["submenu"], "product", array()), "price", array());
                                    echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                } else {
                                    // line 175
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    echo $this->getAttribute($this->getAttribute($context["submenu"], "product", array()), "special", array());
                                    echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                }
                                // line 177
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 180
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        } elseif (($this->getAttribute($context["submenu"], "content_type", array()) == 2)) {
                            // line 181
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"categories ";
                            echo $this->getAttribute($context["submenu"], "class_menu", array());
                            echo "\">";
                            echo $this->getAttribute($context["submenu"], "categories", array());
                            echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        } elseif (($this->getAttribute(                        // line 182
$context["submenu"], "content_type", array()) == 3)) {
                            // line 183
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            if (twig_test_iterable($this->getAttribute($context["submenu"], "manufactures", array()))) {
                                // line 184
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"manufacturer ";
                                echo $this->getAttribute($context["submenu"], "class_menu", array());
                                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                // line 185
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["submenu"], "manufactures", array()));
                                foreach ($context['_seq'] as $context["_key"] => $context["manufacturer"]) {
                                    // line 186
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
                                    echo $this->getAttribute($context["manufacturer"], "link", array());
                                    echo "\">";
                                    echo $this->getAttribute($context["manufacturer"], "name", array());
                                    echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['manufacturer'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 188
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 190
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        } elseif (($this->getAttribute($context["submenu"], "content_type", array()) == 4)) {
                            // line 191
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            if (($this->getAttribute($this->getAttribute($context["submenu"], "images", array()), "show_title", array()) == 1)) {
                                // line 192
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"title-submenu\">";
                                echo $this->getAttribute($this->getAttribute($context["submenu"], "name", array()), (isset($context["lang_id"]) ? $context["lang_id"] : null), array(), "array");
                                echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 194
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"link ";
                            echo $this->getAttribute($context["submenu"], "class_menu", array());
                            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 195
                            echo $this->getAttribute($this->getAttribute($context["submenu"], "images", array()), "link", array());
                            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        } elseif (($this->getAttribute(                        // line 197
$context["submenu"], "content_type", array()) == 5)) {
                            // line 198
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            if ($this->getAttribute($this->getAttribute($context["submenu"], "subcategory", array()), "categories", array())) {
                                // line 199
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"subcategory ";
                                echo $this->getAttribute($context["submenu"], "class_menu", array());
                                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                // line 200
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["submenu"], "subcategory", array()), "categories", array()));
                                foreach ($context['_seq'] as $context["_key"] => $context["categories"]) {
                                    // line 201
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    // line 202
                                    if (($this->getAttribute($this->getAttribute($context["submenu"], "subcategory", array()), "show_title", array()) == 1)) {
                                        // line 203
                                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                                        echo $this->getAttribute($context["categories"], "href", array());
                                        echo "\" class=\"title-submenu ";
                                        echo $this->getAttribute($context["submenu"], "class_menu", array());
                                        echo "\">";
                                        echo $this->getAttribute($context["categories"], "name", array());
                                        echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    }
                                    // line 205
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    if ($this->getAttribute($context["categories"], "categories", array())) {
                                        // line 206
                                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                        echo $this->getAttribute($context["categories"], "categories", array());
                                        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    }
                                    // line 208
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    if (($this->getAttribute($this->getAttribute($context["submenu"], "subcategory", array()), "show_image", array()) == 1)) {
                                        // line 209
                                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                                        echo $this->getAttribute($context["categories"], "thumb", array());
                                        echo "\" alt=\"\" >
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    }
                                    // line 211
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categories'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 213
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 215
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        } elseif (($this->getAttribute($context["submenu"], "content_type", array()) == 6)) {
                            // line 216
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            if (($this->getAttribute($this->getAttribute($context["submenu"], "productlist", array()), "show_title", array()) == 1)) {
                                // line 217
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"title-submenu\">";
                                echo $this->getAttribute($this->getAttribute($context["submenu"], "name", array()), (isset($context["lang_id"]) ? $context["lang_id"] : null), array(), "array");
                                echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 219
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            if ($this->getAttribute($this->getAttribute($context["submenu"], "productlist", array()), "products", array())) {
                                // line 220
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["submenu"], "productlist", array()), "products", array()));
                                foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                                    // line 221
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    $context["itempage"] = (($this->getAttribute($this->getAttribute($context["submenu"], "productlist", array()), "col", array())) ? ((12 / $this->getAttribute($this->getAttribute($context["submenu"], "productlist", array()), "col", array()))) : (4));
                                    // line 222
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-";
                                    echo (isset($context["itempage"]) ? $context["itempage"] : null);
                                    echo " ";
                                    echo $this->getAttribute($context["submenu"], "class_menu", array());
                                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-thumb\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                                    // line 225
                                    echo $this->getAttribute($context["product"], "href", array());
                                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                                    // line 226
                                    echo $this->getAttribute($context["product"], "thumb", array());
                                    echo "\" alt=\"";
                                    echo $this->getAttribute($context["product"], "name", array());
                                    echo "\" title=\"";
                                    echo $this->getAttribute($context["product"], "name", array());
                                    echo "\" class=\"img-responsive\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4><a href=\"";
                                    // line 231
                                    echo $this->getAttribute($context["product"], "href", array());
                                    echo "\">";
                                    echo $this->getAttribute($context["product"], "name", array());
                                    echo "</a></h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>";
                                    // line 232
                                    echo $this->getAttribute($context["product"], "description", array());
                                    echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    // line 233
                                    if ($this->getAttribute($context["product"], "rating", array())) {
                                        // line 234
                                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                        // line 235
                                        $context['_parent'] = $context;
                                        $context['_seq'] = twig_ensure_traversable(range(1, 5));
                                        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                                            // line 236
                                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                            if (($this->getAttribute($context["product"], "rating", array()) < $context["i"])) {
                                                // line 237
                                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                            } else {
                                                // line 239
                                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                            }
                                            // line 241
                                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                        }
                                        $_parent = $context['_parent'];
                                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                                        $context = array_intersect_key($context, $_parent) + $_parent;
                                        // line 242
                                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    }
                                    // line 244
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    // line 245
                                    if ($this->getAttribute($context["product"], "price", array())) {
                                        // line 246
                                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"price\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                        // line 247
                                        if ( !$this->getAttribute($context["product"], "special", array())) {
                                            // line 248
                                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                            echo $this->getAttribute($context["product"], "price", array());
                                            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t   \t\t";
                                        } else {
                                            // line 250
                                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-new\">";
                                            echo $this->getAttribute($context["product"], "special", array());
                                            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-old\">";
                                            // line 251
                                            echo $this->getAttribute($context["product"], "price", array());
                                            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t   \t\t";
                                        }
                                        // line 253
                                        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t   \t\t";
                                        // line 254
                                        if ($this->getAttribute($context["product"], "tax", array())) {
                                            // line 255
                                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-tax\">";
                                            echo $this->getAttribute($context["product"], "tax", array());
                                            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                        }
                                        // line 257
                                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    }
                                    // line 259
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  \t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  \t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t \t";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 264
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 265
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['submenu'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 268
                    echo "\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>\t\t\t
\t\t\t\t\t\t\t\t\t";
                }
                // line 272
                echo "\t\t\t\t\t\t\t\t</li>\t\t\t\t\t\t\t
\t\t\t\t\t\t\t";
            } else {
                // line 273
                echo "\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<li class=\"";
                // line 274
                echo (isset($context["class"]) ? $context["class"] : null);
                echo "\" ";
                echo (isset($context["title"]) ? $context["title"] : null);
                echo ">
\t\t\t\t\t\t\t\t\t<p class='close-menu'></p>
\t\t\t\t\t\t\t\t\t";
                // line 276
                if ((twig_test_iterable($this->getAttribute($context["row"], "submenu", array())) && $this->getAttribute($context["row"], "submenu", array()))) {
                    // line 277
                    echo "\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    echo $this->getAttribute($context["row"], "link", array());
                    echo "\" class=\"";
                    echo (isset($context["class_link"]) ? $context["class_link"] : null);
                    echo "\" ";
                    echo (isset($context["target"]) ? $context["target"] : null);
                    echo ">
\t\t\t\t\t\t\t\t\t\t\t<strong>
\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 279
                    echo ((((isset($context["icon_font"]) ? $context["icon_font"] : null) . (isset($context["icon"]) ? $context["icon"] : null)) . $this->getAttribute($this->getAttribute($context["row"], "name", array()), (isset($context["lang_id"]) ? $context["lang_id"] : null), array(), "array")) . $this->getAttribute($context["row"], "description", array()));
                    echo "
\t\t\t\t\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 281
                    echo (isset($context["label_item"]) ? $context["label_item"] : null);
                    echo "
\t\t\t\t\t\t\t\t\t\t\t<b class='caret'></b>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 285
                    echo "\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    echo $this->getAttribute($context["row"], "link", array());
                    echo "\" class=\"";
                    echo (isset($context["class_link"]) ? $context["class_link"] : null);
                    echo "\" ";
                    echo (isset($context["target"]) ? $context["target"] : null);
                    echo ">
\t\t\t\t\t\t\t\t\t\t\t<strong>
\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 287
                    echo ((((isset($context["icon_font"]) ? $context["icon_font"] : null) . (isset($context["icon"]) ? $context["icon"] : null)) . $this->getAttribute($this->getAttribute($context["row"], "name", array()), (isset($context["lang_id"]) ? $context["lang_id"] : null), array(), "array")) . $this->getAttribute($context["row"], "description", array()));
                    echo "
\t\t\t\t\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 289
                    echo (isset($context["label_item"]) ? $context["label_item"] : null);
                    echo "
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t";
                }
                // line 292
                echo "
\t\t\t\t\t\t\t\t\t";
                // line 293
                if ((twig_test_iterable($this->getAttribute($context["row"], "submenu", array())) && $this->getAttribute($context["row"], "submenu", array()))) {
                    // line 294
                    echo "\t\t\t\t\t\t\t\t\t\t<div class=\"sub-menu\" style=\"width: ";
                    echo $this->getAttribute($context["row"], "submenu_width", array());
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 297
                    $context["row_fluid"] = 0;
                    // line 298
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["row"], "submenu", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["submenu"]) {
                        // line 299
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        if ((((isset($context["row_fluid"]) ? $context["row_fluid"] : null) + $this->getAttribute($context["submenu"], "content_width", array())) > 12)) {
                            // line 300
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            $context["row_fluid"] = $this->getAttribute($context["submenu"], "content_width", array());
                            // line 301
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><div class=\"border\"></div><div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        } else {
                            // line 303
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            $context["row_fluid"] = ((isset($context["row_fluid"]) ? $context["row_fluid"] : null) + $this->getAttribute($context["submenu"], "content_width", array()));
                            // line 304
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 305
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-";
                        echo $this->getAttribute($context["submenu"], "content_width", array());
                        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 306
                        if (($this->getAttribute($context["submenu"], "content_type", array()) == 0)) {
                            // line 307
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"html ";
                            echo $this->getAttribute($context["submenu"], "class_menu", array());
                            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 308
                            echo $this->getAttribute($context["submenu"], "html", array());
                            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        } elseif (($this->getAttribute(                        // line 310
$context["submenu"], "content_type", array()) == 1)) {
                            // line 311
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            if (twig_test_iterable($this->getAttribute($context["submenu"], "product", array()))) {
                                // line 312
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product ";
                                echo $this->getAttribute($context["submenu"], "class_menu", array());
                                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"image\"><a href=\"";
                                // line 313
                                echo $this->getAttribute($this->getAttribute($context["submenu"], "product", array()), "link", array());
                                echo "\" onclick=\"window.location = '";
                                echo $this->getAttribute($this->getAttribute($context["submenu"], "product", array()), "link", array());
                                echo "'\"><img src=\"";
                                echo $this->getAttribute($this->getAttribute($context["submenu"], "product", array()), "image", array());
                                echo "\" alt=\"\"></a></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"name\"><a href=\"";
                                // line 314
                                echo $this->getAttribute($this->getAttribute($context["submenu"], "product", array()), "link", array());
                                echo "\" onclick=\"window.location = '";
                                echo $this->getAttribute($this->getAttribute($context["submenu"], "product", array()), "link", array());
                                echo "'\">";
                                echo $this->getAttribute($this->getAttribute($context["submenu"], "product", array()), "name", array());
                                echo "</a></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"price\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                // line 316
                                if ( !$this->getAttribute($this->getAttribute($context["submenu"], "product", array()), "special", array())) {
                                    // line 317
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    echo $this->getAttribute($this->getAttribute($context["submenu"], "product", array()), "price", array());
                                    echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                } else {
                                    // line 319
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    echo $this->getAttribute($this->getAttribute($context["submenu"], "product", array()), "special", array());
                                    echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                }
                                // line 321
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 324
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        } elseif (($this->getAttribute($context["submenu"], "content_type", array()) == 2)) {
                            // line 325
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"categories ";
                            echo $this->getAttribute($context["submenu"], "class_menu", array());
                            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 326
                            echo $this->getAttribute($context["submenu"], "categories", array());
                            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        } elseif (($this->getAttribute(                        // line 328
$context["submenu"], "content_type", array()) == 3)) {
                            // line 329
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            if (twig_test_iterable($this->getAttribute($context["submenu"], "manufactures", array()))) {
                                // line 330
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"manufacturer ";
                                echo $this->getAttribute($context["submenu"], "class_menu", array());
                                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                // line 331
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["submenu"], "manufactures", array()));
                                foreach ($context['_seq'] as $context["_key"] => $context["manufacturer"]) {
                                    // line 332
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
                                    echo $this->getAttribute($context["manufacturer"], "link", array());
                                    echo "\">";
                                    echo $this->getAttribute($context["manufacturer"], "name", array());
                                    echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['manufacturer'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 334
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 336
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        } elseif (($this->getAttribute($context["submenu"], "content_type", array()) == 4)) {
                            // line 337
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            if (($this->getAttribute($this->getAttribute($context["submenu"], "images", array()), "show_title", array()) == 1)) {
                                // line 338
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"title-submenu\">";
                                echo $this->getAttribute($this->getAttribute($context["submenu"], "name", array()), (isset($context["lang_id"]) ? $context["lang_id"] : null), array(), "array");
                                echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 340
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"link ";
                            echo $this->getAttribute($context["submenu"], "class_menu", array());
                            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 341
                            echo $this->getAttribute($this->getAttribute($context["submenu"], "images", array()), "link", array());
                            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        } elseif (($this->getAttribute(                        // line 343
$context["submenu"], "content_type", array()) == 5)) {
                            // line 344
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            if ($this->getAttribute($this->getAttribute($context["submenu"], "subcategory", array()), "categories", array())) {
                                // line 345
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"subcategory ";
                                echo $this->getAttribute($context["submenu"], "class_menu", array());
                                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                // line 346
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["submenu"], "subcategory", array()), "categories", array()));
                                foreach ($context['_seq'] as $context["_key"] => $context["categories"]) {
                                    // line 347
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    // line 348
                                    if (($this->getAttribute($this->getAttribute($context["submenu"], "subcategory", array()), "show_title", array()) == 1)) {
                                        // line 349
                                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                                        echo $this->getAttribute($context["categories"], "href", array());
                                        echo "\" class=\"title-submenu ";
                                        echo $this->getAttribute($context["submenu"], "class_menu", array());
                                        echo "\">";
                                        echo $this->getAttribute($context["categories"], "name", array());
                                        echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    }
                                    // line 351
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    if ($this->getAttribute($context["categories"], "categories", array())) {
                                        // line 352
                                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                        echo $this->getAttribute($context["categories"], "categories", array());
                                        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    }
                                    // line 354
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    if (($this->getAttribute($this->getAttribute($context["submenu"], "subcategory", array()), "show_image", array()) == 1)) {
                                        // line 355
                                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                                        echo $this->getAttribute($context["categories"], "thumb", array());
                                        echo "\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    }
                                    // line 357
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categories'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 359
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 361
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        } elseif (($this->getAttribute($context["submenu"], "content_type", array()) == 6)) {
                            // line 362
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            if (($this->getAttribute($this->getAttribute($context["submenu"], "productlist", array()), "show_title", array()) == 1)) {
                                // line 363
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"title-submenu\">";
                                echo $this->getAttribute($this->getAttribute($context["submenu"], "name", array()), (isset($context["lang_id"]) ? $context["lang_id"] : null), array(), "array");
                                echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 365
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            if ($this->getAttribute($this->getAttribute($context["submenu"], "productlist", array()), "products", array())) {
                                // line 366
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["submenu"], "productlist", array()), "products", array()));
                                foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                                    // line 367
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    $context["itempage"] = (($this->getAttribute($this->getAttribute($context["submenu"], "productlist", array()), "col", array())) ? ((12 / $this->getAttribute($this->getAttribute($context["submenu"], "productlist", array()), "col", array()))) : (4));
                                    // line 368
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-";
                                    echo (isset($context["itempage"]) ? $context["itempage"] : null);
                                    echo " ";
                                    echo $this->getAttribute($context["submenu"], "class_menu", array());
                                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-thumb\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                                    // line 371
                                    echo $this->getAttribute($context["product"], "href", array());
                                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                                    // line 372
                                    echo $this->getAttribute($context["product"], "thumb", array());
                                    echo "\" alt=\"";
                                    echo $this->getAttribute($context["product"], "name", array());
                                    echo "\" title=\"";
                                    echo $this->getAttribute($context["product"], "name", array());
                                    echo "\" class=\"img-responsive\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4><a href=\"";
                                    // line 377
                                    echo $this->getAttribute($context["product"], "href", array());
                                    echo "\">";
                                    echo $this->getAttribute($context["product"], "name", array());
                                    echo "</a></h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>";
                                    // line 378
                                    echo $this->getAttribute($context["product"], "description", array());
                                    echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    // line 379
                                    if ($this->getAttribute($context["product"], "rating", array())) {
                                        // line 380
                                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                        // line 381
                                        $context['_parent'] = $context;
                                        $context['_seq'] = twig_ensure_traversable(range(1, 5));
                                        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                                            // line 382
                                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                            if (($this->getAttribute($context["product"], "rating", array()) < $context["i"])) {
                                                // line 383
                                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                            } else {
                                                // line 385
                                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                            }
                                            // line 387
                                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                        }
                                        $_parent = $context['_parent'];
                                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                                        $context = array_intersect_key($context, $_parent) + $_parent;
                                        // line 388
                                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    }
                                    // line 390
                                    echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    // line 391
                                    if ($this->getAttribute($context["product"], "price", array())) {
                                        // line 392
                                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"price\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                        // line 393
                                        if ( !$this->getAttribute($context["product"], "special", array())) {
                                            // line 394
                                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                            echo $this->getAttribute($context["product"], "price", array());
                                            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t   \t";
                                        } else {
                                            // line 396
                                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-new\">";
                                            echo $this->getAttribute($context["product"], "special", array());
                                            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-old\">";
                                            // line 397
                                            echo $this->getAttribute($context["product"], "price", array());
                                            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t   \t";
                                        }
                                        // line 399
                                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t   \t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t   \t";
                                        // line 400
                                        if ($this->getAttribute($context["product"], "tax", array())) {
                                            // line 401
                                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-tax\">";
                                            echo $this->getAttribute($context["product"], "tax", array());
                                            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                        }
                                        // line 403
                                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    }
                                    // line 405
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  \t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t  \t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t \t\t\t\t";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 410
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 411
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 412
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['submenu'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 414
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
                }
                // line 418
                echo "\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
            }
            // line 420
            echo "\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 421
        echo "\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t</div>
\t</nav>
\t";
        // line 427
        if (($this->getAttribute((isset($context["ustawienia"]) ? $context["ustawienia"] : null), "orientation", array()) == 1)) {
            // line 428
            echo "\t\t</div>
\t";
        }
        // line 430
        echo "</div>

";
        // line 432
        if (($this->getAttribute((isset($context["ustawienia"]) ? $context["ustawienia"] : null), "orientation", array()) == 1)) {
            // line 433
            echo "<script type=\"text/javascript\">
\t\$(document).ready(function() {
\t\tvar itemver =  ";
            // line 435
            echo $this->getAttribute((isset($context["ustawienia"]) ? $context["ustawienia"] : null), "show_itemver", array());
            echo ";
\t\tif(itemver <= \$( \".vertical ul.megamenu >li\" ).length)
\t\t\t\$('.vertical ul.megamenu').append('<li class=\"loadmore\"><i class=\"fa fa-plus-square-o\"></i><span class=\"more-view\"> More Categories</span></li>');
\t\t\$('.horizontal ul.megamenu li.loadmore').remove();

\t\tvar show_itemver = itemver-1 ;
\t\t\$('ul.megamenu > li.item-vertical').each(function(i){
\t\t\tif(i>show_itemver){
\t\t\t\t\t\$(this).css('display', 'none');
\t\t\t}
\t\t});
\t\t\$(\".megamenu .loadmore\").click(function(){
\t\t\tif(\$(this).hasClass('open')){
\t\t\t\t\$('ul.megamenu li.item-vertical').each(function(i){
\t\t\t\t\tif(i>show_itemver){
\t\t\t\t\t\t\$(this).slideUp(200);
\t\t\t\t\t\t\$(this).css('display', 'none');
\t\t\t\t\t}
\t\t\t\t});
\t\t\t\t\$(this).removeClass('open');
\t\t\t\t\$('.loadmore').html('<i class=\"fa fa-plus-square-o\"></i><span class=\"more-view\">More Categories</span>');
\t\t\t}else{
\t\t\t\t\$('ul.megamenu li.item-vertical').each(function(i){
\t\t\t\t\tif(i>show_itemver){
\t\t\t\t\t\t\$(this).slideDown(200);
\t\t\t\t\t}
\t\t\t\t});
\t\t\t\t\$(this).addClass('open');
\t\t\t\t\$('.loadmore').html('<i class=\"fa fa-minus-square-o\"></i><span class=\"more-view\">Close Categories</span>');
\t\t\t}
\t\t});
\t});
</script>
";
        }
        // line 469
        echo "<script>
\$(document).ready(function(){
\t\$('a[href=\"";
        // line 471
        echo (isset($context["actual_link"]) ? $context["actual_link"] : null);
        echo "\"]').each(function() {
\t\t\$(this).parents('.with-sub-menu').addClass('sub-active');
\t});  
});
</script>";
    }

    public function getTemplateName()
    {
        return "so-oneshop/template/extension/module/so_megamenu/default.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1285 => 471,  1281 => 469,  1244 => 435,  1240 => 433,  1238 => 432,  1234 => 430,  1230 => 428,  1228 => 427,  1220 => 421,  1214 => 420,  1210 => 418,  1204 => 414,  1197 => 412,  1194 => 411,  1191 => 410,  1181 => 405,  1177 => 403,  1171 => 401,  1169 => 400,  1166 => 399,  1161 => 397,  1156 => 396,  1150 => 394,  1148 => 393,  1145 => 392,  1143 => 391,  1140 => 390,  1136 => 388,  1130 => 387,  1126 => 385,  1122 => 383,  1119 => 382,  1115 => 381,  1112 => 380,  1110 => 379,  1106 => 378,  1100 => 377,  1088 => 372,  1084 => 371,  1075 => 368,  1072 => 367,  1067 => 366,  1064 => 365,  1058 => 363,  1055 => 362,  1052 => 361,  1048 => 359,  1041 => 357,  1035 => 355,  1032 => 354,  1026 => 352,  1023 => 351,  1013 => 349,  1011 => 348,  1008 => 347,  1004 => 346,  999 => 345,  996 => 344,  994 => 343,  989 => 341,  984 => 340,  978 => 338,  975 => 337,  972 => 336,  968 => 334,  957 => 332,  953 => 331,  948 => 330,  945 => 329,  943 => 328,  938 => 326,  933 => 325,  930 => 324,  925 => 321,  919 => 319,  913 => 317,  911 => 316,  902 => 314,  894 => 313,  889 => 312,  886 => 311,  884 => 310,  879 => 308,  874 => 307,  872 => 306,  867 => 305,  864 => 304,  861 => 303,  857 => 301,  854 => 300,  851 => 299,  846 => 298,  844 => 297,  837 => 294,  835 => 293,  832 => 292,  826 => 289,  821 => 287,  811 => 285,  804 => 281,  799 => 279,  789 => 277,  787 => 276,  780 => 274,  777 => 273,  773 => 272,  767 => 268,  757 => 265,  754 => 264,  744 => 259,  740 => 257,  734 => 255,  732 => 254,  729 => 253,  724 => 251,  719 => 250,  713 => 248,  711 => 247,  708 => 246,  706 => 245,  703 => 244,  699 => 242,  693 => 241,  689 => 239,  685 => 237,  682 => 236,  678 => 235,  675 => 234,  673 => 233,  669 => 232,  663 => 231,  651 => 226,  647 => 225,  638 => 222,  635 => 221,  630 => 220,  627 => 219,  621 => 217,  618 => 216,  615 => 215,  611 => 213,  604 => 211,  598 => 209,  595 => 208,  589 => 206,  586 => 205,  576 => 203,  574 => 202,  571 => 201,  567 => 200,  562 => 199,  559 => 198,  557 => 197,  552 => 195,  547 => 194,  541 => 192,  538 => 191,  535 => 190,  531 => 188,  520 => 186,  516 => 185,  511 => 184,  508 => 183,  506 => 182,  499 => 181,  496 => 180,  491 => 177,  485 => 175,  479 => 173,  477 => 172,  468 => 170,  460 => 169,  455 => 168,  452 => 167,  450 => 166,  443 => 165,  441 => 164,  436 => 163,  433 => 162,  430 => 161,  426 => 159,  423 => 158,  420 => 157,  415 => 156,  413 => 155,  408 => 152,  402 => 150,  396 => 148,  393 => 147,  391 => 146,  388 => 145,  382 => 142,  377 => 140,  367 => 138,  360 => 134,  355 => 132,  345 => 130,  343 => 129,  335 => 127,  333 => 126,  330 => 125,  327 => 124,  324 => 123,  322 => 122,  319 => 121,  316 => 120,  313 => 119,  311 => 118,  308 => 117,  305 => 116,  302 => 115,  300 => 114,  297 => 113,  294 => 112,  291 => 111,  288 => 110,  285 => 109,  282 => 108,  279 => 107,  276 => 106,  274 => 105,  271 => 104,  268 => 103,  265 => 102,  263 => 101,  260 => 100,  257 => 99,  254 => 98,  252 => 97,  249 => 96,  246 => 95,  243 => 94,  241 => 93,  238 => 92,  235 => 91,  232 => 90,  230 => 89,  227 => 88,  224 => 87,  221 => 86,  219 => 85,  216 => 84,  213 => 83,  210 => 82,  207 => 81,  204 => 80,  202 => 79,  199 => 78,  196 => 77,  193 => 76,  190 => 75,  187 => 74,  184 => 73,  181 => 72,  177 => 71,  174 => 70,  169 => 67,  163 => 65,  159 => 63,  157 => 62,  153 => 61,  150 => 60,  148 => 59,  134 => 58,  128 => 54,  124 => 52,  120 => 50,  118 => 49,  115 => 48,  111 => 46,  107 => 44,  105 => 43,  102 => 42,  92 => 34,  84 => 29,  69 => 17,  62 => 12,  60 => 11,  42 => 10,  39 => 9,  33 => 7,  31 => 6,  28 => 5,  24 => 3,  22 => 2,  19 => 1,);
    }
}
/* <div class="responsive megamenu-style-dev">*/
/* 	{% if ustawienia.orientation == 1 %}*/
/* 	<div class="so-vertical-menu no-gutter">*/
/* 	{% endif %}*/
/* 	*/
/* 	{% if ustawienia.disp_title_module and head_name %}*/
/* 		<h3>{{ head_name }}</h3>*/
/* 	{% endif %}*/
/* 	<nav class="navbar-default">*/
/* 		<div class=" container-megamenu {% if ustawienia.full_width != 1 %} {{ 'container' }} {% endif %} {% if ustawienia.orientation == 1 %} {{ 'vertical ' }} {% else %} {{ 'horizontal' }} {% endif %}">*/
/* 		{% if ustawienia.orientation == 1 %}*/
/* 			<div id="menuHeading">*/
/* 				<div class="megamenuToogle-wrapper">*/
/* 					<div class="megamenuToogle-pattern">*/
/* 						<div class="container">*/
/* 							<div><span></span><span></span><span></span></div>*/
/* 							{{ navigation_text }}*/
/* 							<i class="fa fa-caret-down"></i>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 			<div class="navbar-header">*/
/* 				<button type="button" id="show-verticalmenu" data-toggle="collapse"  class="navbar-toggle">*/
/* 					<!-- <span class="icon-bar"></span>*/
/* 					<span class="icon-bar"></span>*/
/* 					<span class="icon-bar"></span> -->*/
/* 					<i class="fa fa-bars"></i>*/
/* 					<span class="hidden">{{ navigation_text }}</span>*/
/* */
/* 				</button>*/
/* 			</div>*/
/* 		{% else %}*/
/* 			<div class="navbar-header">*/
/* 				<button type="button" id="show-megamenu" data-toggle="collapse"  class="navbar-toggle">*/
/* 					<span class="icon-bar"></span>*/
/* 					<span class="icon-bar"></span>*/
/* 					<span class="icon-bar"></span>*/
/* 				</button>*/
/* 			</div>*/
/* 		{% endif %}*/
/* */
/* 		{% if ustawienia.orientation == 1 %}*/
/* 			<div class="vertical-wrapper">*/
/* 		{% else %}*/
/* 			<div class="megamenu-wrapper">*/
/* 		{% endif %}*/
/* */
/* 		{% if ustawienia.orientation == 1 %}*/
/* 			<span id="remove-verticalmenu" class="fa fa-times"></span>*/
/* 		{% else %}*/
/* 			<span id="remove-megamenu" class="fa fa-times"></span>*/
/* 		{% endif %}*/
/* */
/* 			<div class="megamenu-pattern">*/
/* 				<div class="container">*/
/* 					<ul class="megamenu"*/
/* 					data-transition="{% if ustawienia.animation != '' %}{{ ustawienia.animation }}{% else %}{{ 'none' }}{% endif %}" data-animationtime="{% if ustawienia.animation_time > 0 and ustawienia.animation_time < 5000 %}{{ ustawienia.animation_time }}{% else %}{{ 500 }}{% endif %}">*/
/* 						{% if ustawienia.home_item == 'icon' or ustawienia.home_item == 'text' %}*/
/* 							<li class="home">*/
/* 								<a href="{{ home }}">*/
/* 								{% if ustawienia.home_item == 'icon' %}*/
/* 									<i class="fa fa-home"></i>*/
/* 								{% else %}*/
/* 									<span><strong>{{ home_text }}</strong></span>*/
/* 								{% endif %}*/
/* 								</a>*/
/* 							</li>*/
/* 						{% endif %}*/
/* 						*/
/* 						{% for key, row in menu %}*/
/* 							{% set class 		= '' %}*/
/* 							{% set icon_font 	= '' %}*/
/* 							{% set class_link 	= 'clearfix' %}*/
/* 							{% set label_item 	= '' %}*/
/* 							{% set title 		= false %}*/
/* 							{% set target 		= false %}*/
/* */
/* 							{% if 'no_image' in row.icon %}*/
/* 								{% set icon = '' %}*/
/* 							{% else %}*/
/* 								{% set icon = row.icon %}*/
/* 							{% endif %}*/
/* 							*/
/* 							{% if row.description != '' %}*/
/* 								{% set class_link = class_link~' description' %}*/
/* 							{% endif %}*/
/* */
/* 							{% if route and route == row.route and path and path == row.path %}*/
/* 								{% set class = class~' active_menu' %}*/
/* 							{% endif %}*/
/* */
/* 							{% if row.class_menu %}*/
/* 								{% set class = class~row.class_menu %}*/
/* 							{% endif %}*/
/* */
/* 							{% if row.icon_font %}*/
/* 								{% set icon_font = icon_font~'<i class="'~row.icon_font~'"></i>' %}*/
/* 							{% endif %}*/
/* */
/* 							{% if row.label_item %}*/
/* 								{% set label_item = label_item~'<span class="label'~row.label_item~'"></span>' %}*/
/* 							{% endif %}*/
/* */
/* 							{% if row.submenu is iterable and row.submenu %}*/
/* 								{% set class = class~' with-sub-menu' %}*/
/* 								{% if row.submenu_type == 1 %}*/
/* 									{% set class = class~' click' %}*/
/* 								{% else %}*/
/* 									{% set class = class~' hover' %}*/
/* 								{% endif %}*/
/* 							{% endif %}*/
/* */
/* 							{% if row.position == 1 %}*/
/* 								{% set class = class~' pull-right' %}*/
/* 							{% endif %}*/
/* */
/* 							{% if row.submenu_type == 2 %}*/
/* 								{% set title = 'title="hover-intent"' %}*/
/* 							{% endif %}*/
/* */
/* 							{% if row.new_window == 1 %}*/
/* 								{% set target = 'target="_blank"' %}*/
/* 							{% endif %}*/
/* */
/* 							{% if ustawienia.orientation == 1 %}*/
/* 								<li class="item-vertical {{ class }}" {{ title }}>*/
/* 									<p class='close-menu'></p>*/
/* 									{% if row.submenu is iterable and row.submenu %}*/
/* 										<a href="{{ row.link }}" class="{{ class_link }}" {{ target }}>*/
/* 											<span>*/
/* 												<strong>{{ icon_font~icon~row.name[lang_id]~row.description }}</strong>*/
/* 											</span>*/
/* 											{{ label_item }}*/
/* 											<b class='fa fa-angle-right' ></b>*/
/* 										</a>*/
/* 									{% else %}*/
/* 								 		<a href="{{ row.link }}" class="{{ class_link }}" {{ target }}>*/
/* 											<span>*/
/* 												<strong>{{ icon_font~icon~row.name[lang_id]~row.description }}</strong>*/
/* 											</span>*/
/* 											{{ label_item }}*/
/* 										</a>*/
/* 									{% endif %}*/
/* */
/* 									{% if row.submenu is iterable and row.submenu %}*/
/* 										{% if '%' in row.submenu_width %}*/
/* 											<div class="sub-menu" data-subwidth ="{{ row.submenu_width|replace({'%': ''}) }}">*/
/* 										{% else %}*/
/* 											<div class="sub-menu" style="width:{{ row.submenu_width }}">*/
/* 										{% endif %}*/
/* */
/* 										<div class="content">*/
/* 											<div class="row">*/
/* 												{% set row_fluid = 0 %}*/
/* 												{% for submenu in row.submenu %}*/
/* 													{% if row_fluid+submenu.content_width > 12 %}*/
/* 														{% set row_fluid = submenu.content_width %}*/
/* 										 				</div><div class="border"></div><div class="row">*/
/* 													{% else %}*/
/* 														{% set row_fluid = row_fluid+submenu.content_width %}*/
/* 													{% endif %}*/
/* 													<div class="col-sm-{{ submenu.content_width }}">*/
/* 														{% if submenu.content_type == 0 %}*/
/* 															<div class="html {{submenu.class_menu }}">{{ submenu.html }}</div>*/
/* 														{% elseif submenu.content_type == 1 %}*/
/* 															{% if submenu.product is iterable %}*/
/* 																<div class="product {{ submenu.class_menu }}">*/
/* 																	<div class="image"><a href="{{ submenu.product.link }}" onclick="window.location = '{{ submenu.product.link }}'"><img src="{{ submenu.product.image }}" alt=""></a></div>*/
/* 																	<div class="name"><a href="{{ submenu.product.link }}" onclick="window.location = '{{ submenu.product.link }}'">{{ submenu.product.name }}</a></div>*/
/* 																	<div class="price">*/
/* 																		{% if not submenu.product.special %}*/
/* 																			{{ submenu.product.price }}*/
/* 																		{% else %}*/
/* 																			{{ submenu.product.special }}*/
/* 																		{% endif %}*/
/* 																	</div>*/
/* 																</div>*/
/* 															{% endif %}*/
/* 														{% elseif submenu.content_type == 2 %}*/
/* 															<div class="categories {{ submenu.class_menu }}">{{ submenu.categories }}</div>*/
/* 														{% elseif submenu.content_type == 3 %}*/
/* 															{% if submenu.manufactures is iterable %}*/
/* 																<ul class="manufacturer {{ submenu.class_menu }}">*/
/* 																	{% for manufacturer in submenu.manufactures %}*/
/* 																		<li><a href="{{ manufacturer.link }}">{{ manufacturer.name }}</a></li>*/
/* 																	{% endfor %}*/
/* 																</ul>*/
/* 															{% endif %}*/
/* 														{% elseif submenu.content_type == 4 %}*/
/* 															{% if submenu.images.show_title == 1 %}*/
/* 																<span class="title-submenu">{{ submenu.name[lang_id] }}</span>*/
/* 															{% endif %}*/
/* 															<div class="link {{ submenu.class_menu }}">*/
/* 																{{ submenu.images.link }}*/
/* 															</div>*/
/* 														{% elseif submenu.content_type == 5 %}*/
/* 															{% if submenu.subcategory.categories %}*/
/* 																<ul class="subcategory {{ submenu.class_menu }}">*/
/* 																	{% for categories in submenu.subcategory.categories %}*/
/* 																		<li>*/
/* 																			{% if submenu.subcategory.show_title == 1 %}*/
/* 																				<a href="{{ categories.href }}" class="title-submenu {{ submenu.class_menu }}">{{ categories.name }}</a>*/
/* 																			{% endif %}*/
/* 																			{% if categories.categories %}*/
/* 																				{{ categories.categories }}*/
/* 																			{% endif %}*/
/* 																			{% if submenu.subcategory.show_image == 1 %}*/
/* 																				<img src="{{ categories.thumb }}" alt="" >*/
/* 																			{% endif %}*/
/* 																		</li>*/
/* 																	{% endfor %}*/
/* 																</ul>*/
/* 															{% endif %}*/
/* 														{% elseif submenu.content_type == 6 %}*/
/* 															{% if submenu.productlist.show_title == 1 %}*/
/* 																<span class="title-submenu">{{ submenu.name[lang_id] }}</span>*/
/* 															{% endif %}*/
/* 															{% if submenu.productlist.products %}*/
/* 																{% for product in submenu.productlist.products %}*/
/* 																	{% set itempage = submenu.productlist.col ? 12/submenu.productlist.col : 4 %}*/
/* 																	<div class="col-xs-{{ itempage }} {{ submenu.class_menu }}">*/
/* 																		<div class="product-thumb">*/
/* 																			<div class="image">*/
/* 																				<a href="{{ product.href }}">*/
/* 																					<img src="{{ product.thumb }}" alt="{{ product.name }}" title="{{ product.name }}" class="img-responsive" />*/
/* 																				</a>*/
/* 																			</div>*/
/* 																			<div>*/
/* 																				<div class="caption">*/
/* 																					<h4><a href="{{ product.href }}">{{ product.name }}</a></h4>*/
/* 																					<p>{{ product.description }}</p>*/
/* 																					{% if product.rating %}*/
/* 																						<div class="rating">*/
/* 																							{% for i in 1..5 %}*/
/* 																								{% if product.rating < i %}*/
/* 																									<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/* 																								{% else %}*/
/* 																									<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/* 																								{% endif %}*/
/* 																							{% endfor %}*/
/* 																						</div>*/
/* 																					{% endif %}*/
/* 																			*/
/* 																					{% if product.price %}*/
/* 																						<p class="price">*/
/* 																							{% if not product.special %}*/
/* 																								{{ product.price }}*/
/* 																					   		{% else %}*/
/* 																								<span class="price-new">{{ product.special }}</span>*/
/* 																								<span class="price-old">{{ product.price }}</span>*/
/* 																					   		{% endif %}*/
/* */
/* 																					   		{% if product.tax %}*/
/* 																								<span class="price-tax">{{ product.tax }}</span>*/
/* 																							{% endif %}*/
/* 																						</p>*/
/* 																					{% endif %}*/
/* 																		  		</div>*/
/* 																			</div>*/
/* 																	  	</div>*/
/* 																	</div>*/
/* 															 	{% endfor %}*/
/* 															{% endif %}*/
/* 														{% endif %}													*/
/* 													</div>*/
/* 												{% endfor %}*/
/* 											</div>*/
/* 										</div>				*/
/* 										</div>			*/
/* 									{% endif %}*/
/* 								</li>							*/
/* 							{% else %}						*/
/* 								<li class="{{ class }}" {{ title }}>*/
/* 									<p class='close-menu'></p>*/
/* 									{% if row.submenu is iterable and row.submenu %}*/
/* 										<a href="{{ row.link }}" class="{{ class_link }}" {{ target }}>*/
/* 											<strong>*/
/* 												{{ icon_font~icon~row.name[lang_id]~row.description }}*/
/* 											</strong>*/
/* 											{{ label_item }}*/
/* 											<b class='caret'></b>*/
/* 										</a>*/
/* 									{% else %}*/
/* 										<a href="{{ row.link }}" class="{{ class_link }}" {{ target }}>*/
/* 											<strong>*/
/* 												{{ icon_font~icon~row.name[lang_id]~row.description }}*/
/* 											</strong>*/
/* 											{{ label_item }}*/
/* 										</a>*/
/* 									{% endif %}*/
/* */
/* 									{% if row.submenu is iterable and row.submenu %}*/
/* 										<div class="sub-menu" style="width: {{ row.submenu_width }}">*/
/* 											<div class="content">*/
/* 												<div class="row">*/
/* 													{% set row_fluid = 0 %}*/
/* 													{% for submenu in row.submenu %}*/
/* 														{% if row_fluid+submenu.content_width > 12 %}*/
/* 															{% set row_fluid = submenu.content_width %}*/
/* 															</div><div class="border"></div><div class="row">*/
/* 														{% else %}*/
/* 															{% set row_fluid = row_fluid+submenu.content_width %}*/
/* 														{% endif %}*/
/* 														<div class="col-sm-{{ submenu.content_width }}">*/
/* 															{% if submenu.content_type == 0 %}*/
/* 																<div class="html {{ submenu.class_menu }}">*/
/* 																	{{ submenu.html }}*/
/* 																</div>*/
/* 															{% elseif submenu.content_type == 1 %}*/
/* 																{% if submenu.product is iterable %}*/
/* 																	<div class="product {{ submenu.class_menu }}">*/
/* 																		<div class="image"><a href="{{ submenu.product.link }}" onclick="window.location = '{{ submenu.product.link }}'"><img src="{{ submenu.product.image }}" alt=""></a></div>*/
/* 																		<div class="name"><a href="{{ submenu.product.link }}" onclick="window.location = '{{ submenu.product.link }}'">{{ submenu.product.name }}</a></div>*/
/* 																		<div class="price">*/
/* 																			{% if not submenu.product.special %}*/
/* 																				{{ submenu.product.price }}*/
/* 																			{% else %}*/
/* 																				{{ submenu.product.special }}*/
/* 																			{% endif %}*/
/* 																		</div>*/
/* 																	</div>*/
/* 																{% endif %}*/
/* 															{% elseif submenu.content_type == 2 %}*/
/* 																<div class="categories {{ submenu.class_menu }}">*/
/* 																	{{ submenu.categories }}*/
/* 																</div>															*/
/* 															{% elseif submenu.content_type == 3 %}*/
/* 																{% if submenu.manufactures is iterable %}*/
/* 																	<ul class="manufacturer {{ submenu.class_menu }}">*/
/* 																		{% for manufacturer in submenu.manufactures %}*/
/* 																			<li><a href="{{ manufacturer.link }}">{{ manufacturer.name }}</a></li>*/
/* 																		{% endfor %}*/
/* 																	</ul>*/
/* 																{% endif %}*/
/* 															{% elseif submenu.content_type == 4 %}*/
/* 																{% if submenu.images.show_title == 1 %}*/
/* 																	<span class="title-submenu">{{ submenu.name[lang_id] }}</span>*/
/* 																{% endif %}*/
/* 																<div class="link {{ submenu.class_menu }}">*/
/* 																	{{ submenu.images.link }}*/
/* 																</div>*/
/* 															{% elseif submenu.content_type == 5 %}*/
/* 																{% if submenu.subcategory.categories %}*/
/* 																	<ul class="subcategory {{ submenu.class_menu }}">*/
/* 																		{% for categories in submenu.subcategory.categories %}*/
/* 																			<li>*/
/* 																				{% if submenu.subcategory.show_title == 1 %}*/
/* 																					<a href="{{ categories.href }}" class="title-submenu {{ submenu.class_menu }}">{{ categories.name }}</a>*/
/* 																				{% endif %}*/
/* 																				{% if categories.categories %}*/
/* 																					{{ categories.categories }}*/
/* 																				{% endif %}*/
/* 																				{% if submenu.subcategory.show_image == 1 %}*/
/* 																					<img src="{{ categories.thumb }}" alt="" />*/
/* 																				{% endif %}*/
/* 																			</li>		*/
/* 																		{% endfor %}*/
/* 																	</ul>*/
/* 																{% endif %}*/
/* 															{% elseif submenu.content_type == 6 %}*/
/* 																{% if submenu.productlist.show_title == 1 %}*/
/* 																	<span class="title-submenu">{{ submenu.name[lang_id] }}</span>*/
/* 																{% endif %}*/
/* 																{% if submenu.productlist.products %}*/
/* 																	{% for product in submenu.productlist.products %}*/
/* 																		{% set itempage = submenu.productlist.col ? 12/submenu.productlist.col : 4 %}*/
/* 																		<div class="col-sm-{{ itempage }} {{ submenu.class_menu }}">*/
/* 																			<div class="product-thumb">*/
/* 																				<div class="image">*/
/* 																					<a href="{{ product.href }}">*/
/* 																						<img src="{{ product.thumb }}" alt="{{ product.name }}" title="{{ product.name }}" class="img-responsive" />*/
/* 																					</a>*/
/* 																				</div>*/
/* 																				<div>*/
/* 																					<div class="caption">*/
/* 																						<h4><a href="{{ product.href }}">{{ product.name }}</a></h4>*/
/* 																						<p>{{ product.description }}</p>*/
/* 																						{% if product.rating %}*/
/* 																							<div class="rating">*/
/* 																								{% for i in 1..5 %}*/
/* 																									{% if product.rating < i %}*/
/* 																										<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/* 																									{% else %}*/
/* 																										<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/* 																									{% endif %}*/
/* 																								{% endfor %}*/
/* 																							</div>*/
/* 																						{% endif %}*/
/* */
/* 																						{% if product.price %}*/
/* 																							<p class="price">*/
/* 																								{% if not product.special %}*/
/* 																									{{ product.price }}*/
/* 																							   	{% else %}*/
/* 																									<span class="price-new">{{ product.special }}</span>*/
/* 																									<span class="price-old">{{ product.price }}</span>*/
/* 																							   	{% endif %}*/
/* 																							   	*/
/* 																							   	{% if product.tax %}*/
/* 																									<span class="price-tax">{{ product.tax }}</span>*/
/* 																								{% endif %}*/
/* 																							</p>*/
/* 																						{% endif %}*/
/* 																			  		</div>*/
/* 																				</div>*/
/* 														  					</div>*/
/* 																		</div>*/
/* 													 				{% endfor %}*/
/* 																{% endif %}*/
/* 															{% endif %}*/
/* 														</div>*/
/* 													{% endfor %}*/
/* 												</div>												*/
/* 											</div>*/
/* 										</div>										*/
/* 									{% endif %}*/
/* 								</li>*/
/* 							{% endif %}*/
/* 						{% endfor %}*/
/* 					</ul>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 		</div>*/
/* 	</nav>*/
/* 	{% if ustawienia.orientation == 1 %}*/
/* 		</div>*/
/* 	{% endif %}*/
/* </div>*/
/* */
/* {% if ustawienia.orientation == 1 %}*/
/* <script type="text/javascript">*/
/* 	$(document).ready(function() {*/
/* 		var itemver =  {{ ustawienia.show_itemver }};*/
/* 		if(itemver <= $( ".vertical ul.megamenu >li" ).length)*/
/* 			$('.vertical ul.megamenu').append('<li class="loadmore"><i class="fa fa-plus-square-o"></i><span class="more-view"> More Categories</span></li>');*/
/* 		$('.horizontal ul.megamenu li.loadmore').remove();*/
/* */
/* 		var show_itemver = itemver-1 ;*/
/* 		$('ul.megamenu > li.item-vertical').each(function(i){*/
/* 			if(i>show_itemver){*/
/* 					$(this).css('display', 'none');*/
/* 			}*/
/* 		});*/
/* 		$(".megamenu .loadmore").click(function(){*/
/* 			if($(this).hasClass('open')){*/
/* 				$('ul.megamenu li.item-vertical').each(function(i){*/
/* 					if(i>show_itemver){*/
/* 						$(this).slideUp(200);*/
/* 						$(this).css('display', 'none');*/
/* 					}*/
/* 				});*/
/* 				$(this).removeClass('open');*/
/* 				$('.loadmore').html('<i class="fa fa-plus-square-o"></i><span class="more-view">More Categories</span>');*/
/* 			}else{*/
/* 				$('ul.megamenu li.item-vertical').each(function(i){*/
/* 					if(i>show_itemver){*/
/* 						$(this).slideDown(200);*/
/* 					}*/
/* 				});*/
/* 				$(this).addClass('open');*/
/* 				$('.loadmore').html('<i class="fa fa-minus-square-o"></i><span class="more-view">Close Categories</span>');*/
/* 			}*/
/* 		});*/
/* 	});*/
/* </script>*/
/* {% endif %}*/
/* <script>*/
/* $(document).ready(function(){*/
/* 	$('a[href="{{ actual_link }}"]').each(function() {*/
/* 		$(this).parents('.with-sub-menu').addClass('sub-active');*/
/* 	});  */
/* });*/
/* </script>*/
