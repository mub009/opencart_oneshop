<?php

/* extension/module/so_listing_tabs.twig */
class __TwigTemplate_b433d66f88536d244863b8ffd12cbfa6d77402ced8151036ee1762d7b73d4289 extends Twig_Template
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
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
<div id=\"content\">
\t<div class=\"page-header\">
\t\t<div class=\"container-fluid\">
\t\t\t<div class=\"pull-right\">
\t\t\t\t<button type=\"submit\" form=\"form-featured\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_button_save"), "method");
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i> ";
        echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_button_save"), "method");
        echo "</button>
\t\t\t\t<a class=\"btn btn-success\" onclick=\"\$('#action').val('save_edit');\$('#form-featured').submit();\" data-toggle=\"tooltip\" title=\"";
        // line 7
        echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_button_save_and_edit"), "method");
        echo "\" ><i class=\"fa fa-pencil-square-o\"></i> ";
        echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_button_save_and_edit"), "method");
        echo "</a>
\t\t\t\t<a class=\"btn btn-info\" onclick=\"\$('#action').val('save_new');\$('#form-featured').submit();\" data-toggle=\"tooltip\" title=\"";
        // line 8
        echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_button_save_and_new"), "method");
        echo "\" ><i class=\"fa fa-book\"></i>  ";
        echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_button_save_and_new"), "method");
        echo "</a>
\t\t\t\t<a href=\"";
        // line 9
        echo (isset($context["cancel"]) ? $context["cancel"] : null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_button_cancel"), "method");
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-reply\"></i>  ";
        echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_button_cancel"), "method");
        echo "</a>
\t\t\t</div>
\t\t\t<h1>";
        // line 11
        echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "heading_title_so"), "method");
        echo "</h1>
\t\t\t<ul class=\"breadcrumb\">
\t\t\t\t";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 14
            echo "\t\t\t\t<li><a href=\"";
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "</a></li>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "\t\t\t</ul>
\t\t</div>
\t</div>
\t<div class=\"container-fluid\">
\t\t";
        // line 20
        if ($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "warning", array(), "any", true, true)) {
            // line 21
            echo "\t\t<div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "warning", array());
            echo "
\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
\t\t</div>
\t\t";
        }
        // line 25
        echo "\t\t
\t\t";
        // line 26
        if ((array_key_exists("success", $context) && (isset($context["success"]) ? $context["success"] : null))) {
            // line 27
            echo "\t\t<div class=\"alert alert-success\"><i class=\"fa fa-check-circle\"></i> ";
            echo (isset($context["success"]) ? $context["success"] : null);
            echo "
\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
\t\t</div>
\t\t<div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
            // line 30
            echo (isset($context["text_layout"]) ? $context["text_layout"] : null);
            echo "
\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
\t\t</div>
\t\t";
        }
        // line 34
        echo "    \t
    \t<div class=\"panel panel-default\">
\t\t\t<div class=\"panel-heading\">
\t\t\t\t<h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 37
        echo (isset($context["subheading"]) ? $context["subheading"] : null);
        echo "</h3>
\t\t\t</div>
\t\t\t<div class=\"panel-body\">
\t\t\t\t<form action=\"";
        // line 40
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-featured\" class=\"form-horizontal\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<ul class=\"col-sm-12 nav nav-tabs\" role=\"tablist\" style=\"padding-left: 15px;\">
\t\t\t\t\t\t\t<li ";
        // line 43
        if (((isset($context["selectedid"]) ? $context["selectedid"] : null) == 0)) {
            echo "class=\"active\" ";
        }
        echo "> <a href=\"";
        echo (isset($context["link"]) ? $context["link"] : null);
        echo "\"> <span class=\"fa fa-plus\"></span> ";
        echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "button_add_module"), "method");
        echo "</a></li>
\t\t\t\t\t\t\t";
        // line 44
        $context["i"] = 1;
        // line 45
        echo "\t\t\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["moduletabs"]) ? $context["moduletabs"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["module"]) {
            // line 46
            echo "\t\t\t\t\t\t\t\t<li role=\"presentation\" ";
            if (($this->getAttribute($context["module"], "module_id", array()) == (isset($context["selectedid"]) ? $context["selectedid"] : null))) {
                echo " class=\"active\" ";
            }
            echo ">
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 47
            echo (isset($context["link"]) ? $context["link"] : null);
            echo "&module_id=";
            echo $this->getAttribute($context["module"], "module_id", array());
            echo "\" aria-controls=\"bannermodule-";
            echo $context["key"];
            echo "\"  >
\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-pencil\"></span> ";
            // line 48
            echo $this->getAttribute($context["module"], "name", array());
            echo "
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
            // line 51
            $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
            // line 52
            echo "\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t";
        // line 58
        $context["module_row"] = 1;
        // line 59
        echo "\t\t\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["modules"]) ? $context["modules"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
            // line 60
            echo "\t\t\t\t\t\t\t\t";
            if ((isset($context["selectedid"]) ? $context["selectedid"] : null)) {
                // line 61
                echo "\t\t\t\t\t\t\t\t\t<div class=\"pull-right\">
\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 62
                echo (isset($context["action"]) ? $context["action"] : null);
                echo "&delete=1\" class=\"remove btn btn-danger\" ><span><i class=\"fa fa-remove\"></i> ";
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_button_delete"), "method");
                echo "</span></a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
            }
            // line 65
            echo "\t\t\t\t\t\t\t\t<div  id=\"tab-module";
            echo (isset($context["module_row"]) ? $context["module_row"] : null);
            echo "\" class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"action\" id=\"action\" value=\"\"/>
\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-name\"> <b style=\"font-weight:bold; color:#f00\">*</b> <span data-toggle=\"tooltip\" title=\"";
            // line 68
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_name_desc"), "method");
            echo "\">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_name"), "method");
            echo " </span></label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"name\" value=\"";
            // line 71
            echo $this->getAttribute($context["module"], "name", array());
            echo "\" placeholder=\"";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_name"), "method");
            echo "\" id=\"input-name\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
            // line 73
            if ($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "name", array(), "any", true, true)) {
                // line 74
                echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger col-sm-12\">";
                echo $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "name", array());
                echo "</div>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 76
            echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-head_name\"><b style=\"font-weight:bold; color:#f00\">*</b> <span data-toggle=\"tooltip\" title=\"";
            // line 79
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_head_name_desc"), "method");
            echo "\">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_head_name"), "method");
            echo " </span></label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 82
            $context["i"] = 0;
            // line 83
            echo "\t\t\t\t\t\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 84
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
                // line 85
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"module_description[";
                echo $this->getAttribute($context["language"], "language_id", array());
                echo "][head_name]\" placeholder=\"";
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_head_name"), "method");
                echo "\" id=\"input-head-name-";
                echo $this->getAttribute($context["language"], "language_id", array());
                echo "\" value=\"";
                echo (($this->getAttribute($this->getAttribute((isset($context["module_description"]) ? $context["module_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array", false, true), "head_name", array(), "array", true, true)) ? ($this->getAttribute($this->getAttribute((isset($context["module_description"]) ? $context["module_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array"), "head_name", array(), "array")) : (""));
                echo "\" class=\"form-control ";
                echo ((((isset($context["i"]) ? $context["i"] : null) > 1)) ? (" hide ") : (" first-name"));
                echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 86
                if (((isset($context["i"]) ? $context["i"] : null) == 1)) {
                    // line 87
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" class=\"form-control\" id=\"input-head_name\" placeholder=\"";
                    echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_head_name"), "method");
                    echo "\" value=\"";
                    echo (($this->getAttribute($this->getAttribute((isset($context["module_description"]) ? $context["module_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array", false, true), "head_name", array(), "array", true, true)) ? ($this->getAttribute($this->getAttribute((isset($context["module_description"]) ? $context["module_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array"), "head_name", array(), "array")) : (""));
                    echo "\" name=\"head_name\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 89
                echo "\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 90
            echo "\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<select  class=\"form-control\" id=\"language\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 93
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 94
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["language"], "language_id", array());
                echo "\">";
                echo $this->getAttribute($context["language"], "name", array());
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 96
            echo "\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
            // line 98
            if ($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "head_name", array(), "any", true, true)) {
                // line 99
                echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger col-sm-12\">";
                echo $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "head_name", array());
                echo "</div>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 101
            echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-disp_title_module\"> <span data-toggle=\"tooltip\" title=\"";
            // line 104
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_display_title_module_desc"), "method");
            echo "\">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_display_title_module"), "method");
            echo " </span></label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"disp_title_module\" id=\"input-disp_title_module\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 108
            if ($this->getAttribute($context["module"], "disp_title_module", array())) {
                // line 109
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_yes"), "method");
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">";
                // line 110
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_no"), "method");
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 112
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">";
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_yes"), "method");
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
                // line 113
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_no"), "method");
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 115
            echo "\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-status\"><span data-toggle=\"tooltip\" title=\"";
            // line 120
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_status_desc"), "method");
            echo "\">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_status"), "method");
            echo " </span></label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"status\" id=\"input-status\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 124
            if ($this->getAttribute($context["module"], "status", array())) {
                // line 125
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_enabled"), "method");
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">";
                // line 126
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_disabled"), "method");
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 128
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">";
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_enabled"), "method");
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
                // line 129
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_disabled"), "method");
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 131
            echo "\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"tab-pane\">
\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\" id=\"so_module\">
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#module\" data-toggle=\"tab\">
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 141
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_module"), "method");
            echo "
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#source_option\" data-toggle=\"tab\">
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 146
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_source_option"), "method");
            echo "
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#tabs_option\" data-toggle=\"tab\">
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 151
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_tabs_option"), "method");
            echo "
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#items_option\" data-toggle=\"tab\">
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 156
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_items_option"), "method");
            echo "
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#image_option\" data-toggle=\"tab\">
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 161
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_image_option"), "method");
            echo "
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#effect_option\" data-toggle=\"tab\">
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 166
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_effect_option"), "method");
            echo "
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#advanced_option\" data-toggle=\"tab\">
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 171
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_advanced_option"), "method");
            echo "
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"module\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-class_suffix\"> <span data-toggle=\"tooltip\" title=\"";
            // line 178
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_class_suffix_desc"), "method");
            echo "\">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_class_suffix"), "method");
            echo " </span> </label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"class_suffix\" value=\"";
            // line 181
            echo $this->getAttribute($context["module"], "class_suffix", array());
            echo "\" id=\"input-class_suffix\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-open_link\"> <span data-toggle=\"tooltip\" title=\"";
            // line 186
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_open_link_desc"), "method");
            echo "\">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_open_link"), "method");
            echo " </span></label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"item_link_target\" id=\"input-open_link\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 190
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["item_link_targets"]) ? $context["item_link_targets"] : null));
            foreach ($context['_seq'] as $context["option_id"] => $context["option_value"]) {
                // line 191
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                $context["selected"] = ((($context["option_id"] == $this->getAttribute($context["module"], "item_link_target", array()))) ? ("selected") : (""));
                // line 192
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $context["option_id"];
                echo "\" ";
                echo (isset($context["selected"]) ? $context["selected"] : null);
                echo ">";
                echo $context["option_value"];
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['option_id'], $context['option_value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 194
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-column_1200\"> <span data-toggle=\"tooltip\" title=\"";
            // line 199
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_nb_column0_desc"), "method");
            echo "\">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_column"), "method");
            echo " </span></label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"nb_column0\" id=\"input-column_1200\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 203
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["nb_columns"]) ? $context["nb_columns"] : null));
            foreach ($context['_seq'] as $context["option_id"] => $context["option_value"]) {
                // line 204
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                $context["selected"] = ((($context["option_id"] == $this->getAttribute($context["module"], "nb_column0", array()))) ? ("selected") : (""));
                // line 205
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $context["option_id"];
                echo "\" ";
                echo (isset($context["selected"]) ? $context["selected"] : null);
                echo ">";
                echo $context["option_value"];
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['option_id'], $context['option_value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 207
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-column_992_1199\"><span data-toggle=\"tooltip\" title=\"";
            // line 212
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_nb_column1_desc"), "method");
            echo "\">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_column"), "method");
            echo " </span></label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"nb_column1\" id=\"input-column_992_1199\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 216
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["nb_columns"]) ? $context["nb_columns"] : null));
            foreach ($context['_seq'] as $context["option_id"] => $context["option_value"]) {
                // line 217
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                $context["selected"] = ((($context["option_id"] == $this->getAttribute($context["module"], "nb_column1", array()))) ? ("selected") : (""));
                // line 218
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $context["option_id"];
                echo "\" ";
                echo (isset($context["selected"]) ? $context["selected"] : null);
                echo ">";
                echo $context["option_value"];
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['option_id'], $context['option_value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 220
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-column_768_991\"><span data-toggle=\"tooltip\" title=\"";
            // line 225
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_nb_column2_desc"), "method");
            echo "\">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_column"), "method");
            echo " </span></label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"nb_column2\" id=\"input-column_768_991\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 229
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["nb_columns"]) ? $context["nb_columns"] : null));
            foreach ($context['_seq'] as $context["option_id"] => $context["option_value"]) {
                // line 230
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                $context["selected"] = ((($context["option_id"] == $this->getAttribute($context["module"], "nb_column2", array()))) ? ("selected") : (""));
                // line 231
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $context["option_id"];
                echo "\" ";
                echo (isset($context["selected"]) ? $context["selected"] : null);
                echo ">";
                echo $context["option_value"];
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['option_id'], $context['option_value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 233
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-column_480_767\"> <span data-toggle=\"tooltip\" title=\"";
            // line 238
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_nb_column3_desc"), "method");
            echo "\">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_column"), "method");
            echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"nb_column3\" id=\"input-column_480_767\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 242
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["nb_columns"]) ? $context["nb_columns"] : null));
            foreach ($context['_seq'] as $context["option_id"] => $context["option_value"]) {
                // line 243
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                $context["selected"] = ((($context["option_id"] == $this->getAttribute($context["module"], "nb_column3", array()))) ? ("selected") : (""));
                // line 244
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $context["option_id"];
                echo "\" ";
                echo (isset($context["selected"]) ? $context["selected"] : null);
                echo ">";
                echo $context["option_value"];
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['option_id'], $context['option_value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 246
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-column_0_479\"><span data-toggle=\"tooltip\" title=\"";
            // line 251
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_nb_column4_desc"), "method");
            echo "\">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_column"), "method");
            echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"nb_column4\" id=\"input-column_0_479\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 255
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["nb_columns"]) ? $context["nb_columns"] : null));
            foreach ($context['_seq'] as $context["option_id"] => $context["option_value"]) {
                // line 256
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                $context["selected"] = ((($context["option_id"] == $this->getAttribute($context["module"], "nb_column4", array()))) ? ("selected") : (""));
                // line 257
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $context["option_id"];
                echo "\" ";
                echo (isset($context["selected"]) ? $context["selected"] : null);
                echo ">";
                echo $context["option_value"];
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['option_id'], $context['option_value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 259
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-type_show\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span data-toggle=\"tooltip\" title=\"";
            // line 265
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_type_show_desc"), "method");
            echo "\">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_type_show"), "method");
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"type_show\" id=\"input-type_show\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 270
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["type_shows"]) ? $context["type_shows"] : null));
            foreach ($context['_seq'] as $context["option_id"] => $context["type"]) {
                // line 271
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                $context["selected"] = ((($context["option_id"] == $this->getAttribute($context["module"], "type_show", array()))) ? ("selected") : (""));
                // line 272
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $context["option_id"];
                echo "\" ";
                echo (isset($context["selected"]) ? $context["selected"] : null);
                echo ">";
                echo $context["type"];
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['option_id'], $context['type'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 274
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group type_show_loadmore ";
            // line 278
            echo ((($this->getAttribute($context["module"], "type_show", array()) == "loadmore")) ? ("hide") : (""));
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-nb_rows\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<b style=\"font-weight:bold; color:#f00\">*</b> <span data-toggle=\"tooltip\" title=\"";
            // line 280
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_nb_row_desc"), "method");
            echo "\">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_nb_row"), "method");
            echo " </span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"nb_row\" id=\"input-nb_rows\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 285
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["nb_rows"]) ? $context["nb_rows"] : null));
            foreach ($context['_seq'] as $context["option_id"] => $context["option_value"]) {
                // line 286
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                $context["selected"] = ((($context["option_id"] == $this->getAttribute($context["module"], "nb_row", array()))) ? ("selected") : (""));
                // line 287
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $context["option_id"];
                echo "\" ";
                echo (isset($context["selected"]) ? $context["selected"] : null);
                echo ">";
                echo $context["option_value"];
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['option_id'], $context['option_value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 289
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"source_option\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-type_source\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span data-toggle=\"tooltip\" title=\"";
            // line 298
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_type_source_desc"), "method");
            echo "\">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_type_source"), "method");
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 303
            if ($this->getAttribute($context["module"], "type_source", array())) {
                // line 304
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"type_source\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 305
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_field_product"), "method");
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 307
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"type_source\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 308
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_field_product"), "method");
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 310
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 312
            if ($this->getAttribute($context["module"], "type_source", array())) {
                // line 313
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"type_source\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 314
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_category"), "method");
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 316
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"type_source\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 317
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_category"), "method");
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 319
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-category\"> <b style=\"font-weight:bold; color:#f00\">*</b> <span data-toggle=\"tooltip\" title=\"";
            // line 324
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_category_desc"), "method");
            echo "\">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_category"), "method");
            echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"category\" value=\"\" placeholder=\"";
            // line 327
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_category"), "method");
            echo "\" id=\"input-category\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"featured-category\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 329
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["module"], "categorys", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 330
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"featured-category";
                echo $this->getAttribute($context["category"], "category_id", array());
                echo "\"><i class=\"fa fa-minus-circle\"></i> ";
                echo $this->getAttribute($context["category"], "name", array());
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"category[]\" value=\"";
                // line 331
                echo $this->getAttribute($context["category"], "category_id", array());
                echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 334
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 336
            if ($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "category", array(), "any", true, true)) {
                // line 337
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger col-sm-12\">";
                echo $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "category", array());
                echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 339
            echo "\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-child_category\"> <span data-toggle=\"tooltip\" title=\"";
            // line 342
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_child_category_desc"), "method");
            echo "\">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_child_category"), "method");
            echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 346
            if ($this->getAttribute($context["module"], "child_category", array())) {
                // line 347
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"child_category\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 348
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_include"), "method");
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 350
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"child_category\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 351
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_include"), "method");
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 353
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 355
            if ($this->getAttribute($context["module"], "child_category", array())) {
                // line 356
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"child_category\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 357
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_exclude"), "method");
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 359
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"child_category\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 360
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_exclude"), "method");
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 362
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\" id=\"input-category_depth_form\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-category_depth\"> <b style=\"font-weight:bold; color:#f00\">*</b> <span data-toggle=\"tooltip\" title=\"";
            // line 367
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_category_depth_desc"), "method");
            echo "\">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_category_depth"), "method");
            echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"category_depth\" value=\"";
            // line 370
            echo $this->getAttribute($context["module"], "category_depth", array(), "array");
            echo "\" id=\"input-category_depth\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 372
            if ($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "category_depth", array())) {
                // line 373
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger col-sm-12\">";
                echo $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "category_depth", array());
                echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 375
            echo "\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-product_order\"> <span data-toggle=\"tooltip\" title=\"";
            // line 378
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_product_order_desc"), "method");
            echo "\">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_product_order"), "method");
            echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"product_sort\" id=\"input-product_order\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 382
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["product_sorts"]) ? $context["product_sorts"] : null));
            foreach ($context['_seq'] as $context["option_id"] => $context["option_value"]) {
                // line 383
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                $context["selected"] = ((($context["option_id"] == $this->getAttribute($context["module"], "product_sort", array()))) ? ("selected") : (""));
                // line 384
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $context["option_id"];
                echo "\" ";
                echo (isset($context["selected"]) ? $context["selected"] : null);
                echo ">";
                echo $context["option_value"];
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['option_id'], $context['option_value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 386
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-ordering\"> <span data-toggle=\"tooltip\" title=\"";
            // line 391
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_ordering_desc"), "method");
            echo "\">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_ordering"), "method");
            echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"product_ordering\" id=\"input-ordering\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 395
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["product_orderings"]) ? $context["product_orderings"] : null));
            foreach ($context['_seq'] as $context["option_id"] => $context["option_value"]) {
                // line 396
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                $context["selected"] = ((($context["option_id"] == $this->getAttribute($context["module"], "product_ordering", array()))) ? ("selected") : (""));
                // line 397
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $context["option_id"];
                echo "\" ";
                echo (isset($context["selected"]) ? $context["selected"] : null);
                echo ">";
                echo $context["option_value"];
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['option_id'], $context['option_value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 399
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-source_limit\"> <b style=\"font-weight:bold; color:#f00\">*</b> <span data-toggle=\"tooltip\" title=\"";
            // line 404
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_source_limit_desc"), "method");
            echo "\">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_source_limit"), "method");
            echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"source_limit\" value=\"";
            // line 407
            echo $this->getAttribute($context["module"], "source_limit", array());
            echo "\" id=\"input-source_limit\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 409
            if ($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "source_limit", array())) {
                // line 410
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger col-sm-12\">";
                echo $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "source_limit", array());
                echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 412
            echo "\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-12\"><u style=\"color:#4e9e41\">";
            // line 414
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_for_preload"), "method");
            echo "</u></label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\" id=\"category_preload\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-catid_preload\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span data-toggle=\"tooltip\" title=\"";
            // line 417
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_catid_preload_desc"), "method");
            echo "\">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_category_preload"), "method");
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"catid_preload\" id=\"input-catid_preload\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 422
            if ((($this->getAttribute($context["module"], "tab_all_display", array()) == 1) && ($this->getAttribute($context["module"], "catid_preload", array()) == "*"))) {
                // line 423
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option selected=\"selected\" value=\"*\">";
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_all_product"), "method");
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } elseif (($this->getAttribute(            // line 424
$context["module"], "tab_all_display", array()) == 1)) {
                // line 425
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"*\">";
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_all_product"), "method");
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 427
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["module"], "categorys", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 428
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                $context["selected"] = ((($this->getAttribute($context["option"], "category_id", array()) == $this->getAttribute($context["module"], "catid_preload", array()))) ? ("selected") : (""));
                // line 429
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["option"], "category_id", array());
                echo "\" id=\"catid_preload";
                echo $this->getAttribute($context["option"], "category_id", array());
                echo "\" ";
                echo (isset($context["selected"]) ? $context["selected"] : null);
                echo ">";
                echo $this->getAttribute($context["option"], "name", array());
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 431
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group field_product_tab\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-field_product_tab\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<b style=\"font-weight:bold; color:#f00\">*</b> <span data-toggle=\"tooltip\" title=\"";
            // line 437
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_field_product_tab_desc"), "method");
            echo "\">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_field_product_tab"), "method");
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"field_product_tab\" value=\"\" placeholder=\"";
            // line 441
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_field_product_tab"), "method");
            echo "\" id=\"input-field_product_tab\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"featured-field_product_tab\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 443
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["module"], "field_product_tabs", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["field_product_tab"]) {
                // line 444
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"featured-field_product_tab";
                echo $this->getAttribute($context["field_product_tab"], "product_id", array());
                echo "\"><i class=\"fa fa-minus-circle\"></i> ";
                echo $this->getAttribute($context["field_product_tab"], "name", array());
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"field_product_tab[]\" value=\"";
                // line 445
                echo $this->getAttribute($context["field_product_tab"], "product_id", array());
                echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_product_tab'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 448
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 450
            if ($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "field_product_tab", array(), "any", true, true)) {
                // line 451
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger col-sm-12\">";
                echo $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "field_product_tab", array());
                echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 453
            echo "\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group field_product_tab\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-field_preload\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span data-toggle=\"tooltip\" title=\"";
            // line 457
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_field_preload_desc"), "method");
            echo "\">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_field_preload"), "method");
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"field_preload\" id=\"input-field_preload\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 462
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["module"], "field_product_tabs", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 463
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                $context["selected"] = ((($this->getAttribute($context["option"], "product_id", array()) == $this->getAttribute($context["module"], "field_preload", array()))) ? ("selected") : (""));
                // line 464
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["option"], "product_id", array());
                echo "\" id=\"field_product";
                echo $this->getAttribute($context["option"], "product_id", array());
                echo "\" ";
                echo (isset($context["selected"]) ? $context["selected"] : null);
                echo ">";
                echo $this->getAttribute($context["option"], "name", array());
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 466
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tabs_option\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-tab_all_display\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span data-toggle=\"tooltip\" title=\"";
            // line 475
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_tab_all_display_desc"), "method");
            echo "\">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_tab_all_display"), "method");
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 480
            if ($this->getAttribute($context["module"], "tab_all_display", array())) {
                // line 481
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"tab_all_display\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 482
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_yes"), "method");
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 484
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"tab_all_display\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 485
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_yes"), "method");
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 487
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 489
            if ($this->getAttribute($context["module"], "tab_all_display", array())) {
                // line 490
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"tab_all_display\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 491
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_no"), "method");
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 493
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"tab_all_display\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 494
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_no"), "method");
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 496
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-tab_max_characters\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<b style=\"font-weight:bold; color:#f00\">*</b> <span data-toggle=\"tooltip\" title=\"";
            // line 502
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_tab_max_characters_desc"), "method");
            echo "\">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_tab_max_characters"), "method");
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"tab_max_characters\" value=\"";
            // line 506
            echo $this->getAttribute($context["module"], "tab_max_characters", array());
            echo "\" id=\"input-count\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 508
            if ($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "tab_max_characters", array(), "any", true, true)) {
                // line 509
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger col-sm-12\">";
                echo $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "tab_max_characters", array());
                echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 511
            echo "\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-tab_icon_display\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span data-toggle=\"tooltip\" title=\"";
            // line 515
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_tab_icon_display_desc"), "method");
            echo "\">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_tab_icon_display"), "method");
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 520
            if ($this->getAttribute($context["module"], "tab_icon_display", array())) {
                // line 521
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"tab_icon_display\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 522
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_yes"), "method");
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 524
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"tab_icon_display\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 525
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_yes"), "method");
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 527
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 529
            if ($this->getAttribute($context["module"], "tab_icon_display", array())) {
                // line 530
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"tab_icon_display\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 531
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_no"), "method");
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 533
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"tab_icon_display\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 534
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_no"), "method");
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 536
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group field_product_tab\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-cat_order_by\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span data-toggle=\"tooltip\" title=\"";
            // line 542
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_cat_order_by_desc"), "method");
            echo "\">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_cat_order_by"), "method");
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"cat_order_by\" id=\"input-cat_order_by\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 547
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["cat_order_bys"]) ? $context["cat_order_bys"] : null));
            foreach ($context['_seq'] as $context["option_id"] => $context["option_value"]) {
                // line 548
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                $context["selected"] = ((($context["option_id"] == $this->getAttribute($context["module"], "cat_order_by", array()))) ? ("selected") : (""));
                // line 549
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $context["option_id"];
                echo "\" ";
                echo (isset($context["selected"]) ? $context["selected"] : null);
                echo ">";
                echo $context["option_value"];
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['option_id'], $context['option_value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 551
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-imgcfgcat_width\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<b style=\"font-weight:bold; color:#f00\">*</b> <span data-toggle=\"tooltip\" title=\"";
            // line 557
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_imgcfgcat_width_desc"), "method");
            echo "\">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_imgcfgcat_width"), "method");
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"imgcfgcat_width\" value=\"";
            // line 561
            echo $this->getAttribute($context["module"], "imgcfgcat_width", array());
            echo "\" id=\"input-count\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 563
            if ($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "imgcfgcat_width", array(), "any", true, true)) {
                // line 564
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger col-sm-12\">";
                echo $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "imgcfgcat_width", array());
                echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 566
            echo "\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-imgcfgcat_height\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<b style=\"font-weight:bold; color:#f00\">*</b> <span data-toggle=\"tooltip\" title=\"";
            // line 570
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_imgcfgcat_height_desc"), "method");
            echo "\">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_imgcfgcat_height"), "method");
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"imgcfgcat_height\" value=\"";
            // line 574
            echo $this->getAttribute($context["module"], "imgcfgcat_height", array());
            echo "\" id=\"input-count\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 576
            if ($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "imgcfgcat_height", array(), "any", true, true)) {
                // line 577
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger col-sm-12\">";
                echo $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "imgcfgcat_height", array());
                echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 579
            echo "\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"items_option\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-display_title\"> <span data-toggle=\"tooltip\" title=\"";
            // line 585
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_display_title_desc"), "method");
            echo "\">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_display_title"), "method");
            echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 589
            if ($this->getAttribute($context["module"], "display_title", array())) {
                // line 590
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"display_title\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 591
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_yes"), "method");
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 593
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"display_title\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 594
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_yes"), "method");
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 596
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 598
            if ($this->getAttribute($context["module"], "display_title", array())) {
                // line 599
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"display_title\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 600
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_no"), "method");
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 602
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"display_title\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 603
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_no"), "method");
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 605
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-title_maxlength\"> <b style=\"font-weight:bold; color:#f00\">*</b> <span data-toggle=\"tooltip\" title=\"";
            // line 610
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_title_maxlength_desc"), "method");
            echo "\">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_title_maxlength"), "method");
            echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"title_maxlength\" value=\"";
            // line 613
            echo $this->getAttribute($context["module"], "title_maxlength", array());
            echo "\" id=\"input-title_maxlength\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 615
            if ($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "title_maxlength", array(), "any", true, true)) {
                // line 616
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger col-sm-12\">";
                echo $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "title_maxlength", array());
                echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 618
            echo "\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-display_description\"> <span data-toggle=\"tooltip\" title=\"";
            // line 621
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_display_description_desc"), "method");
            echo "\">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_display_description"), "method");
            echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 625
            if ($this->getAttribute($context["module"], "display_description", array())) {
                // line 626
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"display_description\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 627
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_yes"), "method");
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 629
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"display_description\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 630
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_yes"), "method");
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 632
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 634
            if ($this->getAttribute($context["module"], "display_description", array())) {
                // line 635
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"display_description\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 636
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_no"), "method");
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 638
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"display_description\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 639
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_no"), "method");
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 641
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-description_maxlength\"> <b style=\"font-weight:bold; color:#f00\">*</b> <span data-toggle=\"tooltip\" title=\"";
            // line 646
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_description_maxlength_desc"), "method");
            echo "\">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_description_maxlength"), "method");
            echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"description_maxlength\" value=\"";
            // line 649
            echo $this->getAttribute($context["module"], "description_maxlength", array());
            echo "\" id=\"input-description_maxlength\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 651
            if ($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "description_maxlength", array(), "any", true, true)) {
                // line 652
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger col-sm-12\">";
                echo $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "description_maxlength", array());
                echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 654
            echo "\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-display_price\"> <span data-toggle=\"tooltip\" title=\"";
            // line 657
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_display_price_desc"), "method");
            echo "\">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_display_price"), "method");
            echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 661
            if ($this->getAttribute($context["module"], "display_price", array())) {
                // line 662
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"display_price\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 663
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_yes"), "method");
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 665
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"display_price\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 666
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_yes"), "method");
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 668
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 670
            if ($this->getAttribute($context["module"], "display_price", array())) {
                // line 671
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"display_price\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 672
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_no"), "method");
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 674
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"display_price\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 675
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_no"), "method");
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 677
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-display_add_to_cart\"> <span data-toggle=\"tooltip\" title=\"";
            // line 682
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_display_add_to_cart_desc"), "method");
            echo "\">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_display_add_to_cart"), "method");
            echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 686
            if ($this->getAttribute($context["module"], "display_add_to_cart", array())) {
                // line 687
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"display_add_to_cart\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 688
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_yes"), "method");
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 690
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"display_add_to_cart\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 691
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_yes"), "method");
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 693
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 695
            if ($this->getAttribute($context["module"], "display_add_to_cart", array())) {
                // line 696
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"display_add_to_cart\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 697
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_no"), "method");
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 699
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"display_add_to_cart\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 700
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_no"), "method");
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 702
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-display_wishlist\"> <span data-toggle=\"tooltip\" title=\"";
            // line 707
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_display_wishlist_desc"), "method");
            echo "\">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_display_wishlist"), "method");
            echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 711
            if ($this->getAttribute($context["module"], "display_wishlist", array())) {
                // line 712
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"display_wishlist\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 713
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_yes"), "method");
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 715
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"display_wishlist\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 716
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_yes"), "method");
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 718
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 720
            if ($this->getAttribute($context["module"], "display_wishlist", array())) {
                // line 721
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"display_wishlist\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 722
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_no"), "method");
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 724
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"display_wishlist\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 725
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_no"), "method");
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 727
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-display_compare\"> <span data-toggle=\"tooltip\" title=\"";
            // line 732
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_display_compare_desc"), "method");
            echo "\">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_display_compare"), "method");
            echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 736
            if ($this->getAttribute($context["module"], "display_compare", array())) {
                // line 737
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"display_compare\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 738
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_yes"), "method");
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 740
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"display_compare\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 741
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_yes"), "method");
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 743
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 745
            if ($this->getAttribute($context["module"], "display_compare", array())) {
                // line 746
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"display_compare\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 747
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_no"), "method");
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 749
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"display_compare\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 750
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_no"), "method");
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 752
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-display_rating\"> <span data-toggle=\"tooltip\" title=\"";
            // line 757
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_display_rating_desc"), "method");
            echo "\">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_display_rating"), "method");
            echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 761
            if ($this->getAttribute($context["module"], "display_rating", array())) {
                // line 762
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"display_rating\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 763
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_yes"), "method");
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 765
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"display_rating\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 766
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_yes"), "method");
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 768
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 770
            if ($this->getAttribute($context["module"], "display_rating", array())) {
                // line 771
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"display_rating\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 772
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_no"), "method");
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 774
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"display_rating\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 775
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_no"), "method");
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 777
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-display_sale\"> <span data-toggle=\"tooltip\" title=\"";
            // line 782
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_display_sale_desc"), "method");
            echo "\">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_display_sale"), "method");
            echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 786
            if ($this->getAttribute($context["module"], "display_sale", array())) {
                // line 787
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"display_sale\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 788
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_yes"), "method");
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 790
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"display_sale\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 791
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_yes"), "method");
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 793
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 795
            if ($this->getAttribute($context["module"], "display_sale", array())) {
                // line 796
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"display_sale\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 797
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_no"), "method");
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 799
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"display_sale\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 800
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_no"), "method");
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 802
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-display_new\"> <span data-toggle=\"tooltip\" title=\"";
            // line 807
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_display_new_desc"), "method");
            echo "\">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_display_new"), "method");
            echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 811
            if ($this->getAttribute($context["module"], "display_new", array())) {
                // line 812
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"display_new\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 813
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_yes"), "method");
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 815
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"display_new\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 816
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_yes"), "method");
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 818
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 820
            if ($this->getAttribute($context["module"], "display_new", array())) {
                // line 821
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"display_new\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 822
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_no"), "method");
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 824
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"display_new\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 825
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_no"), "method");
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 827
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\" id=\"input-date_day_form\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-date_day\"> <b style=\"font-weight:bold; color:#f00\">*</b> <span data-toggle=\"tooltip\" title=\"";
            // line 832
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_date_day_desc"), "method");
            echo "\">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_date_day"), "method");
            echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"date_day\" value=\"";
            // line 835
            echo $this->getAttribute($context["module"], "date_day", array());
            echo "\" id=\"input-date_day\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 837
            if ($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "date_day", array(), "any", true, true)) {
                // line 838
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger col-sm-12\">";
                echo $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "date_day", array());
                echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 840
            echo "\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-product_image_num\"> <span data-toggle=\"tooltip\" title=\"";
            // line 843
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_product_image_num_desc"), "method");
            echo "\">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_product_image_num"), "method");
            echo " </span></label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"product_image_num\" id=\"input-product_image_num\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 847
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["product_image_nums"]) ? $context["product_image_nums"] : null));
            foreach ($context['_seq'] as $context["option_id"] => $context["option_value"]) {
                // line 848
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                $context["selected"] = ((($context["option_id"] == $this->getAttribute($context["module"], "product_image_num", array()))) ? ("selected") : (""));
                // line 849
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $context["option_id"];
                echo "\" ";
                echo (isset($context["selected"]) ? $context["selected"] : null);
                echo ">";
                echo $context["option_value"];
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['option_id'], $context['option_value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 851
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"image_option\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-product_image\"> <span data-toggle=\"tooltip\" title=\"";
            // line 859
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_product_image_desc"), "method");
            echo "\">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_product_image"), "method");
            echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 863
            if ($this->getAttribute($context["module"], "product_image", array())) {
                // line 864
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"product_image\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 865
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_yes"), "method");
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 867
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"product_image\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 868
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_yes"), "method");
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 870
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 872
            if ($this->getAttribute($context["module"], "product_image", array())) {
                // line 873
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"product_image\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 874
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_no"), "method");
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 876
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"product_image\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 877
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_no"), "method");
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 879
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-product_get_image_data\"> <span data-toggle=\"tooltip\" title=\"";
            // line 884
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_product_get_image_data_desc"), "method");
            echo "\">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_product_get_image_data"), "method");
            echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 888
            if ($this->getAttribute($context["module"], "product_get_image_data", array())) {
                // line 889
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"product_get_image_data\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 890
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_yes"), "method");
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 892
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"product_get_image_data\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 893
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_yes"), "method");
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 895
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 897
            if ($this->getAttribute($context["module"], "product_get_image_data", array())) {
                // line 898
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"product_get_image_data\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 899
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_no"), "method");
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 901
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"product_get_image_data\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 902
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_no"), "method");
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 904
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-product_get_image_image\"> <span data-toggle=\"tooltip\" title=\"";
            // line 909
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_product_get_image_image_desc"), "method");
            echo "\">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_product_get_image_image"), "method");
            echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 913
            if ($this->getAttribute($context["module"], "product_get_image_image", array())) {
                // line 914
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"product_get_image_image\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 915
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_yes"), "method");
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 917
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"product_get_image_image\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 918
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_yes"), "method");
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 920
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 922
            if ($this->getAttribute($context["module"], "product_get_image_image", array())) {
                // line 923
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"product_get_image_image\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 924
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_no"), "method");
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 926
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"product_get_image_image\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 927
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_no"), "method");
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 929
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-width\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<b style=\"font-weight:bold; color:#f00\">*</b> <span data-toggle=\"tooltip\" title=\"";
            // line 935
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_width_desc"), "method");
            echo "\">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_width"), "method");
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"width\" value=\"";
            // line 939
            echo $this->getAttribute($context["module"], "width", array());
            echo "\" id=\"input-width\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 941
            if ($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "width", array(), "any", true, true)) {
                // line 942
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger col-sm-12\">";
                echo $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "width", array());
                echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 944
            echo "\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-height\"> <b style=\"font-weight:bold; color:#f00\">*</b> <span data-toggle=\"tooltip\" title=\"";
            // line 947
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_height_desc"), "method");
            echo "\">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_height"), "method");
            echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"height\" value=\"";
            // line 950
            echo $this->getAttribute($context["module"], "height", array());
            echo "\" id=\"input-height\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 952
            if ($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "height", array(), "any", true, true)) {
                // line 953
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger col-sm-12\">";
                echo $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "height", array());
                echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 955
            echo "\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-product_placeholder_path\"> <b style=\"font-weight:bold; color:#f00\">*</b> <span data-toggle=\"tooltip\" title=\"";
            // line 958
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_product_placeholder_path_desc"), "method");
            echo "\">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_product_placeholder_path"), "method");
            echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"product_placeholder_path\" value=\"";
            // line 961
            echo $this->getAttribute($context["module"], "product_placeholder_path", array(), "array");
            echo "\" id=\"input-product_placeholder_path\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 963
            if ($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "product_placeholder_path", array(), "any", true, true)) {
                // line 964
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger col-sm-12\">";
                echo $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "product_placeholder_path", array());
                echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 966
            echo "\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-display_banner_image\"> <span data-toggle=\"tooltip\" title=\"";
            // line 969
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_display_banner_image_desc"), "method");
            echo "\">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_display_banner_image"), "method");
            echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 973
            if ($this->getAttribute($context["module"], "display_banner_image", array())) {
                // line 974
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"display_banner_image\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 975
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_yes"), "method");
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 977
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"display_banner_image\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 978
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_yes"), "method");
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 980
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 982
            if ($this->getAttribute($context["module"], "display_banner_image", array())) {
                // line 983
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"display_banner_image\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 984
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_no"), "method");
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 986
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"display_banner_image\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 987
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_no"), "method");
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 989
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group banner-image\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-slide_title\"><span data-toggle=\"tooltip\" title=\"";
            // line 994
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_banner_image_desc"), "method");
            echo "\">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_banner_image"), "method");
            echo " </span></label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" id=\"thumb-image\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
            // line 997
            echo $this->getAttribute($context["module"], "thumb", array());
            echo "\" alt=\"\" title=\"\" data-placeholder=\"";
            echo $this->getAttribute($context["module"], "thumb_default", array());
            echo "\" /></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"banner_image\" value=\"";
            // line 998
            echo (($this->getAttribute($context["module"], "banner_image", array(), "any", true, true)) ? ($this->getAttribute($context["module"], "banner_image", array())) : (""));
            echo "\" id=\"input-image\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 999
            if ($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "banner_image", array(), "any", true, true)) {
                // line 1000
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger col-sm-12\">";
                echo $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "banner_image", array());
                echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 1002
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group banner-image\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-width\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<b style=\"font-weight:bold; color:#f00\">*</b> <span data-toggle=\"tooltip\" title=\"";
            // line 1007
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_banner_width_desc"), "method");
            echo "\">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_banner_width"), "method");
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"banner_width\" value=\"";
            // line 1011
            echo $this->getAttribute($context["module"], "banner_width", array());
            echo "\" id=\"input-banner_width\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1013
            if ($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "banner_width", array(), "any", true, true)) {
                // line 1014
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger col-sm-12\">";
                echo $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "banner_width", array());
                echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 1016
            echo "\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group banner-image\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-banner_height\"> <b style=\"font-weight:bold; color:#f00\">*</b> <span data-toggle=\"tooltip\" title=\"";
            // line 1019
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_banner_height_desc"), "method");
            echo "\">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_banner_height"), "method");
            echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"banner_height\" value=\"";
            // line 1022
            echo $this->getAttribute($context["module"], "banner_height", array());
            echo "\" id=\"input-banner_height\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1024
            if ($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "banner_height", array(), "any", true, true)) {
                // line 1025
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger col-sm-12\">";
                echo $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "banner_height", array());
                echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 1027
            echo "\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group banner-image\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-link\"> <span data-toggle=\"tooltip\" title=\"";
            // line 1030
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_banner_image_url_desc"), "method");
            echo "\">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_banner_image_url"), "method");
            echo " </span> </label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"banner_image_url\" value=\"";
            // line 1033
            echo (($this->getAttribute($context["module"], "banner_image_url", array(), "any", true, true)) ? ($this->getAttribute($context["module"], "banner_image_url", array())) : (""));
            echo "\" id=\"input-link\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"effect_option\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-12\"><u style=\"color:#4e9e41\">";
            // line 1040
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_for_type_show_load_more"), "method");
            echo "</u></label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-effect\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span data-toggle=\"tooltip\" title=\"";
            // line 1043
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_effect_desc"), "method");
            echo "\">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_effect"), "method");
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"effect\" id=\"input-effect\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1048
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["effects"]) ? $context["effects"] : null));
            foreach ($context['_seq'] as $context["option_id"] => $context["option_value"]) {
                // line 1049
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                $context["selected"] = ((($context["option_id"] == $this->getAttribute($context["module"], "effect", array()))) ? ("selected") : (""));
                // line 1050
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $context["option_id"];
                echo "\" ";
                echo (isset($context["selected"]) ? $context["selected"] : null);
                echo ">";
                echo $context["option_value"];
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['option_id'], $context['option_value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1052
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-duration\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<b style=\"font-weight:bold; color:#f00\">*</b> <span data-toggle=\"tooltip\" title=\"";
            // line 1058
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_duration_desc"), "method");
            echo "\">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_duration"), "method");
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"duration\" value=\"";
            // line 1062
            echo $this->getAttribute($context["module"], "duration", array());
            echo "\" id=\"input-duration\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1064
            if ($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "duration", array(), "any", true, true)) {
                // line 1065
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger col-sm-12\">";
                echo $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "duration", array());
                echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 1067
            echo "\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-delay\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<b style=\"font-weight:bold; color:#f00\">*</b> <span data-toggle=\"tooltip\" title=\"";
            // line 1071
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_delay_desc"), "method");
            echo "\">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_delay"), "method");
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"delay\" value=\"";
            // line 1075
            echo $this->getAttribute($context["module"], "delay", array());
            echo "\" id=\"input-delay\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1077
            if ($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "delay", array(), "any", true, true)) {
                // line 1078
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger col-sm-12\">";
                echo $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "delay", array());
                echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 1080
            echo "\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-12\"><u style=\"color:#4e9e41\">";
            // line 1082
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_for_type_show_slider"), "method");
            echo "</u></label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-autoplay\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span data-toggle=\"tooltip\" title=\"";
            // line 1085
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_autoplay_desc"), "method");
            echo "\">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_autoplay"), "method");
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"autoplay\" id=\"input-autoplay\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1090
            if ($this->getAttribute($context["module"], "autoplay", array())) {
                // line 1091
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_yes"), "method");
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">";
                // line 1092
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_no"), "method");
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 1094
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">";
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_yes"), "method");
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
                // line 1095
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_no"), "method");
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 1097
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-display_nav\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span data-toggle=\"tooltip\" title=\"";
            // line 1103
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_display_nav_desc"), "method");
            echo "\">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_display_nav"), "method");
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"display_nav\" id=\"input-display_nav\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1108
            if ($this->getAttribute($context["module"], "display_nav", array())) {
                // line 1109
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_yes"), "method");
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">";
                // line 1110
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_no"), "method");
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 1112
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">";
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_yes"), "method");
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
                // line 1113
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_no"), "method");
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 1115
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-display_loop\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span data-toggle=\"tooltip\" title=\"";
            // line 1121
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_display_loop_desc"), "method");
            echo "\">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_display_loop"), "method");
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"display_loop\" id=\"input-display_loop\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1126
            if ($this->getAttribute($context["module"], "display_loop", array())) {
                // line 1127
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_yes"), "method");
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">";
                // line 1128
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_no"), "method");
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 1130
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">";
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_yes"), "method");
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
                // line 1131
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_no"), "method");
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 1133
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-touchdrag\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span data-toggle=\"tooltip\" title=\"";
            // line 1139
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_touchdrag_desc"), "method");
            echo "\">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_touchdrag"), "method");
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"touchdrag\" id=\"input-touchdrag\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1144
            if ($this->getAttribute($context["module"], "touchdrag", array())) {
                // line 1145
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_yes"), "method");
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">";
                // line 1146
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_no"), "method");
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 1148
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">";
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_yes"), "method");
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
                // line 1149
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_no"), "method");
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 1151
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-mousedrag\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span data-toggle=\"tooltip\" title=\"";
            // line 1157
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_mousedrag_desc"), "method");
            echo "\">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_mousedrag"), "method");
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"mousedrag\" id=\"input-mousedrag\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1162
            if ($this->getAttribute($context["module"], "mousedrag", array())) {
                // line 1163
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_yes"), "method");
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">";
                // line 1164
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_no"), "method");
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 1166
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">";
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_yes"), "method");
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
                // line 1167
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_no"), "method");
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 1169
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-pausehover\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span data-toggle=\"tooltip\" title=\"";
            // line 1175
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_pausehover_desc"), "method");
            echo "\">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_pausehover"), "method");
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"pausehover\" id=\"input-pausehover\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1180
            if ($this->getAttribute($context["module"], "pausehover", array())) {
                // line 1181
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_yes"), "method");
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">";
                // line 1182
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_no"), "method");
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 1184
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">";
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_yes"), "method");
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
                // line 1185
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_no"), "method");
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 1187
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-autoplayTimeout\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<b style=\"font-weight:bold; color:#f00\">*</b> <span data-toggle=\"tooltip\" title=\"";
            // line 1193
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_autoplayTimeout_desc"), "method");
            echo "\">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_autoplayTimeout"), "method");
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"autoplayTimeout\" value=\"";
            // line 1197
            echo $this->getAttribute($context["module"], "autoplayTimeout", array());
            echo "\" id=\"input-autoplayTimeout\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1199
            if ($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "autoplayTimeout", array(), "any", true, true)) {
                // line 1200
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger col-sm-12\">";
                echo $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "autoplayTimeout", array());
                echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 1202
            echo "\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-autoplaySpeed\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<b style=\"font-weight:bold; color:#f00\">*</b> <span data-toggle=\"tooltip\" title=\"";
            // line 1206
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_autoplaySpeed_desc"), "method");
            echo "\">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_autoplaySpeed"), "method");
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"autoplaySpeed\" value=\"";
            // line 1210
            echo $this->getAttribute($context["module"], "autoplaySpeed", array());
            echo "\" id=\"input-autoplaySpeed\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1212
            if ($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "autoplaySpeed", array(), "any", true, true)) {
                // line 1213
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger col-sm-12\">";
                echo $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "autoplaySpeed", array());
                echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 1215
            echo "\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"advanced_option\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-pre_text\"> <span data-toggle=\"tooltip\" title=\"";
            // line 1221
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_pre_text_desc"), "method");
            echo "\">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_pre_text"), "method");
            echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<textarea name=\"pre_text\" id=\"input-pre_text\" class=\"form-control\">";
            // line 1224
            echo $this->getAttribute($context["module"], "pre_text", array());
            echo "</textarea>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-post_text\"> <span data-toggle=\"tooltip\" title=\"";
            // line 1229
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_post_text_desc"), "method");
            echo "\">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_post_text"), "method");
            echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<textarea name=\"post_text\" id=\"input-post_text\" class=\"form-control\">";
            // line 1232
            echo $this->getAttribute($context["module"], "post_text", array());
            echo "</textarea>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-use_cache\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span data-toggle=\"tooltip\" title=\"";
            // line 1238
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_use_cache_desc"), "method");
            echo "\">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_use_cache"), "method");
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1243
            if ($this->getAttribute($context["module"], "use_cache", array())) {
                // line 1244
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"use_cache\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 1245
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_yes"), "method");
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 1247
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"use_cache\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 1248
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_yes"), "method");
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 1250
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1252
            if ($this->getAttribute($context["module"], "use_cache", array())) {
                // line 1253
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"use_cache\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 1254
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_no"), "method");
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 1256
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"use_cache\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 1257
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_no"), "method");
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 1259
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\" id=\"input-cache_time_form\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-cache_time\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span data-toggle=\"tooltip\" title=\"";
            // line 1265
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_cache_time_desc"), "method");
            echo "\">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_cache_time"), "method");
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"cache_time\" value=\"";
            // line 1269
            echo $this->getAttribute($context["module"], "cache_time", array());
            echo "\" id=\"input-cache_time\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1271
            if ($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "cache_time", array(), "any", true, true)) {
                // line 1272
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger col-sm-12\">";
                echo $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "cache_time", array());
                echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 1274
            echo "\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
            // line 1279
            $context["module_row"] = ((isset($context["module_row"]) ? $context["module_row"] : null) + 1);
            // line 1280
            echo "\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1281
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
        \t\t</form>
        \t</div>
    \t</div>\t
  \t</div>
\t<script type=\"text/javascript\"><!--
\t\t\$('input[name=\\'category\\']').autocomplete({
\t\t\tsource: function(request, response) {
\t\t\t\t\$.ajax({
\t\t\t\t\turl: 'index.php?route=extension/module/so_listing_tabs/autocomplete_category&user_token=";
        // line 1291
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&filter_name=' +  encodeURIComponent(request),
\t\t\t\t\tdataType: 'json',
\t\t\t\t\tsuccess: function(json) {
\t\t\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\t\t\treturn {
\t\t\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\t\t\tvalue: item['category_id']
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}));
\t\t\t\t\t}
\t\t\t\t});
\t\t\t},
\t\t\tselect: function(item) {
\t\t\t\t\$('input[name=\\'category\\']').val('');
\t\t\t\t
\t\t\t\t\$('#featured-category' + item['value']).remove();
\t\t\t\t
\t\t\t\t\$('#featured-category').append('<div id=\"featured-category' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"category[]\" value=\"' + item['value'] + '\" /></div>');
\t\t\t\t
\t\t\t\t\$('#catid_preload' + item['value']).remove();
\t\t\t\t\$('#input-catid_preload').append('<option value=\"'+item['value']+'\" id=\"catid_preload' + item['value'] + '\">' + item['label'] + '</option>');
\t\t\t}
\t\t});
\t\t
\t\t\$('#featured-category').delegate('.fa-minus-circle', 'click', function() {
\t\t\t\$(this).parent().remove();
\t\t\tvar id_par = \$(this).parent().attr('id').substr(17);
\t\t\t
\t\t\t\$(\"#input-catid_preload option[value='\"+id_par+\"']\").each(function() {
\t\t\t\t\$(this).remove();
\t\t\t});
\t\t});

\t\t\$('input[name=\\'field_product_tab\\']').autocomplete({
\t\t\tsource: function(request, response) {
\t\t\t\t\$.ajax({
\t\t\t\t\turl: 'index.php?route=extension/module/so_listing_tabs/autocomplete&user_token=";
        // line 1327
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&filter_name=' +  encodeURIComponent(request),
\t\t\t\t\tdataType: 'json',
\t\t\t\t\tsuccess: function(json) {
\t\t\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\t\t\treturn {
\t\t\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\t\t\tvalue: item['product_id']
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}));
\t\t\t\t\t}
\t\t\t\t});
\t\t\t},
\t\t\tselect: function(item) {
\t\t\t\t\$('input[name=\\'field_product_tab\\']').val('');
\t\t\t\t
\t\t\t\t\$('#featured-field_product_tab' + item['value']).remove();
\t\t\t\t
\t\t\t\t\$('#featured-field_product_tab').append('<div id=\"featured-field_product_tab' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"field_product_tab[]\" value=\"' + item['value'] + '\" /></div>');
\t\t\t\t
\t\t\t\t\$('#field_product' + item['value']).remove();
\t\t\t\t\$('#input-field_preload').append('<option value=\"'+item['value']+'\" id=\"field_product' + item['value'] + '\">' + item['label'] + '</option>');
\t\t\t}
\t\t});
\t\t
\t\t\$('#featured-field_product_tab').delegate('.fa-minus-circle', 'click', function() {
\t\t\t\$(this).parent().remove();
\t\t\tvar id_par = \$(this).parent().attr('id').substr(26);
\t\t\t\$(\"#input-field_preload option[value='\"+id_par+\"']\").each(function() {
\t\t\t\t\$(this).remove();
\t\t\t});
\t\t});
//--></script>
\t<script type=\"text/javascript\"><!--
\t\t\$('#so_module a:first').tab('show');
\t\tif(\$(\"input[name='child_category']:radio:checked\").val() == '0')
\t\t{
\t\t\t\$('#input-category_depth_form').hide();
\t\t}else
\t\t{
\t\t\t\$('#input-category_depth_form').show();
\t\t}

\t\t\$(\"input[name='child_category']\").change(function(){
\t\t\tval = \$(this).val();
\t\t\tif(val ==0)
\t\t\t{
\t\t\t\t\$('#input-category_depth_form').hide();
\t\t\t}else
\t\t\t{
\t\t\t\t\$('#input-category_depth_form').show();
\t\t\t}
\t\t});

\t\tif(\$(\"input[name='use_cache']:radio:checked\").val() == '0')
\t\t{
\t\t\t\$('#input-cache_time_form').hide();
\t\t}else
\t\t{
\t\t\t\$('#input-cache_time_form').show();
\t\t}

\t\t\$(\"input[name='use_cache']\").change(function(){
\t\t\tval = \$(this).val();
\t\t\tif(val ==0)
\t\t\t{
\t\t\t\t\$('#input-cache_time_form').hide();
\t\t\t}else
\t\t\t{
\t\t\t\t\$('#input-cache_time_form').show();
\t\t\t}
\t\t});

\t\tif(\$(\"input[name='type_source']:radio:checked\").val() == '0')
\t\t{
\t\t\t\$('.field_product_tab').hide();
\t\t\t\$('#category_preload').show();
\t\t\t\$('.input-product_order_form').show();
\t\t}else
\t\t{
\t\t\t\$('.field_product_tab').show();
\t\t\t\$('#category_preload').hide();
\t\t\t\$('.input-product_order_form').hide();
\t\t}

\t\t\$(\"input[name='type_source']\").change(function(){
\t\t\tval = \$(this).val();
\t\t\tif(val ==0)
\t\t\t{
\t\t\t\t\$('.field_product_tab').hide();
\t\t\t\t\$('#category_preload').show();
\t\t\t\t\$('.input-product_order_form').show();
\t\t\t}else
\t\t\t{
\t\t\t\t\$('.field_product_tab').show();
\t\t\t\t\$('#category_preload').hide();
\t\t\t\t\$('.input-product_order_form').hide();
\t\t\t}
\t\t});
\t
\t\t\$('#input-type_show').change(function(){
\t\t\tvar that = \$(this), opt_select = \$('option:selected', that).val() ;
\t\t\tconsole.log(opt_select);
\t\t\tif (opt_select == 'loadmore'){
\t\t\t\t\$('#input-nb_rows').val(1);
\t\t\t\t\$('.type_show_loadmore').addClass('hide');
\t\t\t}else{
\t\t\t\t\$('.type_show_loadmore').removeClass('hide');
\t\t\t}
\t\t});
\t
\t\t\$(\"input[name='display_banner_image']\").change(function(){
\t\t\tval = \$(this).val();
\t\t\tif(val ==0)
\t\t\t{
\t\t\t\t\$('.banner-image').hide();
\t\t\t\t
\t\t\t}else
\t\t\t{
\t\t\t\t\$('.banner-image').show();
\t\t\t}
\t\t});

\t\tif(\$(\"input[name='display_banner_image']:radio:checked\").val() == '0')
\t\t{
\t\t\t\$('.banner-image').hide();
\t\t}else
\t\t{
\t\t\t\$('.banner-image').show();
\t\t}
\t
\t\t\$('#language').change(function(){
\t\t\tvar that = \$(this), opt_select = \$('option:selected', that).val() , _input = \$('#input-head-name-'+opt_select);
\t\t\t\$('[id^=\"input-head-name-\"]').addClass('hide');
\t\t\t_input.removeClass('hide');
\t\t});
\t
\t\t\$('.first-name').change(function(){
\t\t\t\$('input[name=\"head_name\"]').val(\$(this).val());
\t\t});


\t\t\$(\"input[name='tab_all_display']\").change(function(){
\t\t\tif(\$(this).val() == 1)
\t\t\t{
\t\t\t\t\$('#input-catid_preload').append('<option value=*>All Product</option>');
\t\t\t}else{
\t\t\t\t\$(\"#input-catid_preload option[value='*']\").each(function() {
\t\t\t\t\t\$(this).remove();
\t\t\t\t});
\t\t\t}
\t\t});
\t
\t\tif(\$(\"input[name='display_new']:radio:checked\").val() == '0')
\t\t{
\t\t\t\$('#input-date_day_form').hide();
\t\t}else
\t\t{
\t\t\t\$('#input-date_day_form').show();
\t\t}

\t\t\$(\"input[name='display_new']\").change(function(){
\t\t\tval = \$(this).val();
\t\t\tif(val ==0)
\t\t\t{
\t\t\t\t\$('#input-date_day_form').hide();
\t\t\t}else
\t\t\t{
\t\t\t\t\$('#input-date_day_form').show();
\t\t\t}
\t\t});
//--></script>
\t<script type=\"text/javascript\">
\t\tjQuery(document).ready(function (\$) {
\t\t\tvar button = '<div class=\"remove-caching\" style=\"margin-left: 15px\"><button type=\"button\" onclick=\"remove_cache()\" title=\"";
        // line 1500
        echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_button_clear_cache"), "method");
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-remove\"></i> ";
        echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_button_clear_cache"), "method");
        echo "</button></div>';
\t\t\tvar button_min = '<div class=\"remove-caching\" style=\"margin-left: 7px\"><button type=\"button\" onclick=\"remove_cache()\" title=\"";
        // line 1501
        echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_button_clear_cache"), "method");
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-remove\"></i> </button></div>';
\t\t\tif(\$('#column-left').hasClass('active')){
\t\t\t\t\$('#column-left #stats').after(button);
\t\t\t}else{
\t\t\t\t\$('#column-left #stats').after(button_min);
\t\t\t}
\t\t\t\$('#button-menu').click(function(){
\t\t\t\t\$('.remove-caching').remove();
\t\t\t\tif(\$(this).parents().find('#column-left').hasClass('active')){
\t\t\t\t\t\$('#column-left #stats').after(button);
\t\t\t\t}else{
\t\t\t\t\t\$('#column-left #stats').after(button_min);
\t\t\t\t}
\t\t\t});
\t\t});
\t\tfunction remove_cache(){
\t\t\tvar success_remove = '";
        // line 1517
        echo (isset($context["success_remove"]) ? $context["success_remove"] : null);
        echo "';
\t\t\t\$.ajax({
\t\t\t\ttype: 'POST',
\t\t\t\turl: '";
        // line 1520
        echo (isset($context["linkremove"]) ? $context["linkremove"] : null);
        echo "',
\t\t\t\tdata: {\tis_ajax_cache_lite: 1},
\t\t\t\tsuccess: function () {
\t\t\t\t\tvar html = '<div class=\"alert alert-success cls-remove-cache\"> '+success_remove+' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>';
\t\t\t\t\tif(!(\$('.page-header .container-fluid .alert-success')).hasClass('cls-remove-cache')){
\t\t\t\t\t\t\$('.page-header .container-fluid').append(html);
\t\t\t\t\t}
\t\t\t\t},
\t\t\t});
\t\t}
\t</script>
</div>
";
        // line 1532
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "extension/module/so_listing_tabs.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  3289 => 1532,  3274 => 1520,  3268 => 1517,  3249 => 1501,  3243 => 1500,  3067 => 1327,  3028 => 1291,  3016 => 1281,  3010 => 1280,  3008 => 1279,  3001 => 1274,  2995 => 1272,  2993 => 1271,  2988 => 1269,  2979 => 1265,  2971 => 1259,  2966 => 1257,  2963 => 1256,  2958 => 1254,  2955 => 1253,  2953 => 1252,  2949 => 1250,  2944 => 1248,  2941 => 1247,  2936 => 1245,  2933 => 1244,  2931 => 1243,  2921 => 1238,  2912 => 1232,  2904 => 1229,  2896 => 1224,  2888 => 1221,  2880 => 1215,  2874 => 1213,  2872 => 1212,  2867 => 1210,  2858 => 1206,  2852 => 1202,  2846 => 1200,  2844 => 1199,  2839 => 1197,  2830 => 1193,  2822 => 1187,  2817 => 1185,  2812 => 1184,  2807 => 1182,  2802 => 1181,  2800 => 1180,  2790 => 1175,  2782 => 1169,  2777 => 1167,  2772 => 1166,  2767 => 1164,  2762 => 1163,  2760 => 1162,  2750 => 1157,  2742 => 1151,  2737 => 1149,  2732 => 1148,  2727 => 1146,  2722 => 1145,  2720 => 1144,  2710 => 1139,  2702 => 1133,  2697 => 1131,  2692 => 1130,  2687 => 1128,  2682 => 1127,  2680 => 1126,  2670 => 1121,  2662 => 1115,  2657 => 1113,  2652 => 1112,  2647 => 1110,  2642 => 1109,  2640 => 1108,  2630 => 1103,  2622 => 1097,  2617 => 1095,  2612 => 1094,  2607 => 1092,  2602 => 1091,  2600 => 1090,  2590 => 1085,  2584 => 1082,  2580 => 1080,  2574 => 1078,  2572 => 1077,  2567 => 1075,  2558 => 1071,  2552 => 1067,  2546 => 1065,  2544 => 1064,  2539 => 1062,  2530 => 1058,  2522 => 1052,  2509 => 1050,  2506 => 1049,  2502 => 1048,  2492 => 1043,  2486 => 1040,  2476 => 1033,  2468 => 1030,  2463 => 1027,  2457 => 1025,  2455 => 1024,  2450 => 1022,  2442 => 1019,  2437 => 1016,  2431 => 1014,  2429 => 1013,  2424 => 1011,  2415 => 1007,  2408 => 1002,  2402 => 1000,  2400 => 999,  2396 => 998,  2390 => 997,  2382 => 994,  2375 => 989,  2370 => 987,  2367 => 986,  2362 => 984,  2359 => 983,  2357 => 982,  2353 => 980,  2348 => 978,  2345 => 977,  2340 => 975,  2337 => 974,  2335 => 973,  2326 => 969,  2321 => 966,  2315 => 964,  2313 => 963,  2308 => 961,  2300 => 958,  2295 => 955,  2289 => 953,  2287 => 952,  2282 => 950,  2274 => 947,  2269 => 944,  2263 => 942,  2261 => 941,  2256 => 939,  2247 => 935,  2239 => 929,  2234 => 927,  2231 => 926,  2226 => 924,  2223 => 923,  2221 => 922,  2217 => 920,  2212 => 918,  2209 => 917,  2204 => 915,  2201 => 914,  2199 => 913,  2190 => 909,  2183 => 904,  2178 => 902,  2175 => 901,  2170 => 899,  2167 => 898,  2165 => 897,  2161 => 895,  2156 => 893,  2153 => 892,  2148 => 890,  2145 => 889,  2143 => 888,  2134 => 884,  2127 => 879,  2122 => 877,  2119 => 876,  2114 => 874,  2111 => 873,  2109 => 872,  2105 => 870,  2100 => 868,  2097 => 867,  2092 => 865,  2089 => 864,  2087 => 863,  2078 => 859,  2068 => 851,  2055 => 849,  2052 => 848,  2048 => 847,  2039 => 843,  2034 => 840,  2028 => 838,  2026 => 837,  2021 => 835,  2013 => 832,  2006 => 827,  2001 => 825,  1998 => 824,  1993 => 822,  1990 => 821,  1988 => 820,  1984 => 818,  1979 => 816,  1976 => 815,  1971 => 813,  1968 => 812,  1966 => 811,  1957 => 807,  1950 => 802,  1945 => 800,  1942 => 799,  1937 => 797,  1934 => 796,  1932 => 795,  1928 => 793,  1923 => 791,  1920 => 790,  1915 => 788,  1912 => 787,  1910 => 786,  1901 => 782,  1894 => 777,  1889 => 775,  1886 => 774,  1881 => 772,  1878 => 771,  1876 => 770,  1872 => 768,  1867 => 766,  1864 => 765,  1859 => 763,  1856 => 762,  1854 => 761,  1845 => 757,  1838 => 752,  1833 => 750,  1830 => 749,  1825 => 747,  1822 => 746,  1820 => 745,  1816 => 743,  1811 => 741,  1808 => 740,  1803 => 738,  1800 => 737,  1798 => 736,  1789 => 732,  1782 => 727,  1777 => 725,  1774 => 724,  1769 => 722,  1766 => 721,  1764 => 720,  1760 => 718,  1755 => 716,  1752 => 715,  1747 => 713,  1744 => 712,  1742 => 711,  1733 => 707,  1726 => 702,  1721 => 700,  1718 => 699,  1713 => 697,  1710 => 696,  1708 => 695,  1704 => 693,  1699 => 691,  1696 => 690,  1691 => 688,  1688 => 687,  1686 => 686,  1677 => 682,  1670 => 677,  1665 => 675,  1662 => 674,  1657 => 672,  1654 => 671,  1652 => 670,  1648 => 668,  1643 => 666,  1640 => 665,  1635 => 663,  1632 => 662,  1630 => 661,  1621 => 657,  1616 => 654,  1610 => 652,  1608 => 651,  1603 => 649,  1595 => 646,  1588 => 641,  1583 => 639,  1580 => 638,  1575 => 636,  1572 => 635,  1570 => 634,  1566 => 632,  1561 => 630,  1558 => 629,  1553 => 627,  1550 => 626,  1548 => 625,  1539 => 621,  1534 => 618,  1528 => 616,  1526 => 615,  1521 => 613,  1513 => 610,  1506 => 605,  1501 => 603,  1498 => 602,  1493 => 600,  1490 => 599,  1488 => 598,  1484 => 596,  1479 => 594,  1476 => 593,  1471 => 591,  1468 => 590,  1466 => 589,  1457 => 585,  1449 => 579,  1443 => 577,  1441 => 576,  1436 => 574,  1427 => 570,  1421 => 566,  1415 => 564,  1413 => 563,  1408 => 561,  1399 => 557,  1391 => 551,  1378 => 549,  1375 => 548,  1371 => 547,  1361 => 542,  1353 => 536,  1348 => 534,  1345 => 533,  1340 => 531,  1337 => 530,  1335 => 529,  1331 => 527,  1326 => 525,  1323 => 524,  1318 => 522,  1315 => 521,  1313 => 520,  1303 => 515,  1297 => 511,  1291 => 509,  1289 => 508,  1284 => 506,  1275 => 502,  1267 => 496,  1262 => 494,  1259 => 493,  1254 => 491,  1251 => 490,  1249 => 489,  1245 => 487,  1240 => 485,  1237 => 484,  1232 => 482,  1229 => 481,  1227 => 480,  1217 => 475,  1206 => 466,  1191 => 464,  1188 => 463,  1184 => 462,  1174 => 457,  1168 => 453,  1162 => 451,  1160 => 450,  1156 => 448,  1147 => 445,  1140 => 444,  1136 => 443,  1131 => 441,  1122 => 437,  1114 => 431,  1099 => 429,  1096 => 428,  1091 => 427,  1085 => 425,  1083 => 424,  1078 => 423,  1076 => 422,  1066 => 417,  1060 => 414,  1056 => 412,  1050 => 410,  1048 => 409,  1043 => 407,  1035 => 404,  1028 => 399,  1015 => 397,  1012 => 396,  1008 => 395,  999 => 391,  992 => 386,  979 => 384,  976 => 383,  972 => 382,  963 => 378,  958 => 375,  952 => 373,  950 => 372,  945 => 370,  937 => 367,  930 => 362,  925 => 360,  922 => 359,  917 => 357,  914 => 356,  912 => 355,  908 => 353,  903 => 351,  900 => 350,  895 => 348,  892 => 347,  890 => 346,  881 => 342,  876 => 339,  870 => 337,  868 => 336,  864 => 334,  855 => 331,  848 => 330,  844 => 329,  839 => 327,  831 => 324,  824 => 319,  819 => 317,  816 => 316,  811 => 314,  808 => 313,  806 => 312,  802 => 310,  797 => 308,  794 => 307,  789 => 305,  786 => 304,  784 => 303,  774 => 298,  763 => 289,  750 => 287,  747 => 286,  743 => 285,  733 => 280,  728 => 278,  722 => 274,  709 => 272,  706 => 271,  702 => 270,  692 => 265,  684 => 259,  671 => 257,  668 => 256,  664 => 255,  655 => 251,  648 => 246,  635 => 244,  632 => 243,  628 => 242,  619 => 238,  612 => 233,  599 => 231,  596 => 230,  592 => 229,  583 => 225,  576 => 220,  563 => 218,  560 => 217,  556 => 216,  547 => 212,  540 => 207,  527 => 205,  524 => 204,  520 => 203,  511 => 199,  504 => 194,  491 => 192,  488 => 191,  484 => 190,  475 => 186,  467 => 181,  459 => 178,  449 => 171,  441 => 166,  433 => 161,  425 => 156,  417 => 151,  409 => 146,  401 => 141,  389 => 131,  384 => 129,  379 => 128,  374 => 126,  369 => 125,  367 => 124,  358 => 120,  351 => 115,  346 => 113,  341 => 112,  336 => 110,  331 => 109,  329 => 108,  320 => 104,  315 => 101,  309 => 99,  307 => 98,  303 => 96,  292 => 94,  288 => 93,  283 => 90,  277 => 89,  269 => 87,  267 => 86,  254 => 85,  251 => 84,  246 => 83,  244 => 82,  236 => 79,  231 => 76,  225 => 74,  223 => 73,  216 => 71,  208 => 68,  201 => 65,  193 => 62,  190 => 61,  187 => 60,  182 => 59,  180 => 58,  173 => 53,  167 => 52,  165 => 51,  159 => 48,  151 => 47,  144 => 46,  139 => 45,  137 => 44,  127 => 43,  121 => 40,  115 => 37,  110 => 34,  103 => 30,  96 => 27,  94 => 26,  91 => 25,  83 => 21,  81 => 20,  75 => 16,  64 => 14,  60 => 13,  55 => 11,  46 => 9,  40 => 8,  34 => 7,  28 => 6,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/* 	<div class="page-header">*/
/* 		<div class="container-fluid">*/
/* 			<div class="pull-right">*/
/* 				<button type="submit" form="form-featured" data-toggle="tooltip" title="{{ objlang.get('entry_button_save') }}" class="btn btn-primary"><i class="fa fa-save"></i> {{ objlang.get('entry_button_save') }}</button>*/
/* 				<a class="btn btn-success" onclick="$('#action').val('save_edit');$('#form-featured').submit();" data-toggle="tooltip" title="{{ objlang.get('entry_button_save_and_edit') }}" ><i class="fa fa-pencil-square-o"></i> {{ objlang.get('entry_button_save_and_edit') }}</a>*/
/* 				<a class="btn btn-info" onclick="$('#action').val('save_new');$('#form-featured').submit();" data-toggle="tooltip" title="{{ objlang.get('entry_button_save_and_new') }}" ><i class="fa fa-book"></i>  {{ objlang.get('entry_button_save_and_new') }}</a>*/
/* 				<a href="{{ cancel }}" data-toggle="tooltip" title="{{ objlang.get('entry_button_cancel') }}" class="btn btn-danger"><i class="fa fa-reply"></i>  {{ objlang.get('entry_button_cancel') }}</a>*/
/* 			</div>*/
/* 			<h1>{{ objlang.get('heading_title_so') }}</h1>*/
/* 			<ul class="breadcrumb">*/
/* 				{% for breadcrumb in breadcrumbs %}*/
/* 				<li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/* 				{% endfor %}*/
/* 			</ul>*/
/* 		</div>*/
/* 	</div>*/
/* 	<div class="container-fluid">*/
/* 		{% if error.warning is defined %}*/
/* 		<div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> {{ error.warning }}*/
/* 			<button type="button" class="close" data-dismiss="alert">&times;</button>*/
/* 		</div>*/
/* 		{% endif %}*/
/* 		*/
/* 		{% if success is defined and success %}*/
/* 		<div class="alert alert-success"><i class="fa fa-check-circle"></i> {{ success }}*/
/* 			<button type="button" class="close" data-dismiss="alert">&times;</button>*/
/* 		</div>*/
/* 		<div class="alert alert-info"><i class="fa fa-info-circle"></i> {{ text_layout }}*/
/* 			<button type="button" class="close" data-dismiss="alert">&times;</button>*/
/* 		</div>*/
/* 		{% endif %}*/
/*     	*/
/*     	<div class="panel panel-default">*/
/* 			<div class="panel-heading">*/
/* 				<h3 class="panel-title"><i class="fa fa-pencil"></i> {{ subheading }}</h3>*/
/* 			</div>*/
/* 			<div class="panel-body">*/
/* 				<form action="{{ action }}" method="post" enctype="multipart/form-data" id="form-featured" class="form-horizontal">*/
/* 					<div class="row">*/
/* 						<ul class="col-sm-12 nav nav-tabs" role="tablist" style="padding-left: 15px;">*/
/* 							<li {% if selectedid == 0 %}class="active" {% endif %}> <a href="{{ link }}"> <span class="fa fa-plus"></span> {{ objlang.get('button_add_module') }}</a></li>*/
/* 							{% set i=1 %}*/
/* 							{% for key, module in moduletabs %}*/
/* 								<li role="presentation" {% if module.module_id == selectedid %} class="active" {% endif %}>*/
/* 									<a href="{{ link }}&module_id={{ module.module_id }}" aria-controls="bannermodule-{{ key }}"  >*/
/* 										<span class="fa fa-pencil"></span> {{ module.name }}*/
/* 									</a>*/
/* 								</li>*/
/* 								{% set i = i + 1 %}*/
/* 							{% endfor %}*/
/* 						</ul>*/
/* 					</div>*/
/* 					*/
/* 					<div class="row">*/
/* 						<div class="col-sm-12">*/
/* 							{% set module_row = 1 %}*/
/* 							{% for module in modules %}*/
/* 								{% if selectedid %}*/
/* 									<div class="pull-right">*/
/* 										<a href="{{ action }}&delete=1" class="remove btn btn-danger" ><span><i class="fa fa-remove"></i> {{ objlang.get('entry_button_delete') }}</span></a>*/
/* 									</div>*/
/* 								{% endif %}*/
/* 								<div  id="tab-module{{ module_row }}" class="col-sm-12">*/
/* 									<div class="form-group">*/
/* 										<input type="hidden" name="action" id="action" value=""/>*/
/* 										<label class="col-sm-3 control-label" for="input-name"> <b style="font-weight:bold; color:#f00">*</b> <span data-toggle="tooltip" title="{{ objlang.get('entry_name_desc') }}">{{ objlang.get('entry_name') }} </span></label>*/
/* 										<div class="col-sm-9">*/
/* 											<div class="col-sm-5">*/
/* 												<input type="text" name="name" value="{{ module.name }}" placeholder="{{ objlang.get('entry_name') }}" id="input-name" class="form-control" />*/
/* 											</div>*/
/* 											{% if error.name is defined %}*/
/* 											<div class="text-danger col-sm-12">{{ error.name }}</div>*/
/* 											{% endif %}*/
/* 										</div>*/
/* 									</div>*/
/* 									<div class="form-group">*/
/* 										<label class="col-sm-3 control-label" for="input-head_name"><b style="font-weight:bold; color:#f00">*</b> <span data-toggle="tooltip" title="{{ objlang.get('entry_head_name_desc') }}">{{ objlang.get('entry_head_name') }} </span></label>*/
/* 										<div class="col-sm-9">*/
/* 											<div class="col-sm-5">*/
/* 												{% set i = 0 %}*/
/* 												{% for language in languages %}*/
/* 													{% set i = i + 1 %}*/
/* 													<input type="text" name="module_description[{{ language.language_id }}][head_name]" placeholder="{{ objlang.get('entry_head_name') }}" id="input-head-name-{{ language.language_id }}" value="{{ module_description[language.language_id]['head_name'] is defined ? module_description[language.language_id]['head_name'] : '' }}" class="form-control {{ i>1 ? ' hide ' : ' first-name' }}" />*/
/* 													{% if i == 1 %}*/
/* 													<input type="hidden" class="form-control" id="input-head_name" placeholder="{{ objlang.get('entry_head_name') }}" value="{{ module_description[language.language_id]['head_name'] is defined ? module_description[language.language_id]['head_name'] : '' }}" name="head_name">*/
/* 													{% endif %}*/
/* 												{% endfor %}*/
/* 											</div>*/
/* 											<div class="col-sm-3">*/
/* 												<select  class="form-control" id="language">*/
/* 													{% for language in languages %}*/
/* 														<option value="{{ language.language_id }}">{{ language.name }}</option>*/
/* 													{% endfor %}*/
/* 												</select>*/
/* 											</div>*/
/* 											{% if error.head_name is defined %}*/
/* 											<div class="text-danger col-sm-12">{{ error.head_name }}</div>*/
/* 											{% endif %}*/
/* 										</div>*/
/* 									</div>*/
/* 									<div class="form-group">*/
/* 										<label class="col-sm-3 control-label" for="input-disp_title_module"> <span data-toggle="tooltip" title="{{ objlang.get('entry_display_title_module_desc') }}">{{ objlang.get('entry_display_title_module') }} </span></label>*/
/* 										<div class="col-sm-9">*/
/* 											<div class="col-sm-5">*/
/* 												<select name="disp_title_module" id="input-disp_title_module" class="form-control">*/
/* 													{% if module.disp_title_module %}*/
/* 														<option value="1" selected="selected">{{ objlang.get('text_yes') }}</option>*/
/* 														<option value="0">{{ objlang.get('text_no') }}</option>*/
/* 													{% else %}*/
/* 														<option value="1">{{ objlang.get('text_yes') }}</option>*/
/* 														<option value="0" selected="selected">{{ objlang.get('text_no') }}</option>*/
/* 													{% endif %}*/
/* 												</select>*/
/* 											</div>*/
/* 										</div>*/
/* 									</div>*/
/* 									<div class="form-group">*/
/* 										<label class="col-sm-3 control-label" for="input-status"><span data-toggle="tooltip" title="{{ objlang.get('entry_status_desc') }}">{{ objlang.get('entry_status') }} </span></label>*/
/* 										<div class="col-sm-9">*/
/* 											<div class="col-sm-5">*/
/* 												<select name="status" id="input-status" class="form-control">*/
/* 													{% if module.status %}*/
/* 														<option value="1" selected="selected">{{ objlang.get('text_enabled') }}</option>*/
/* 														<option value="0">{{ objlang.get('text_disabled') }}</option>*/
/* 													{% else %}*/
/* 														<option value="1">{{ objlang.get('text_enabled') }}</option>*/
/* 														<option value="0" selected="selected">{{ objlang.get('text_disabled') }}</option>*/
/* 													{% endif %}*/
/* 												</select>*/
/* 											</div>*/
/* 										</div>*/
/* 									</div>*/
/* 								</div>*/
/* 								*/
/* 								<div class="tab-pane">*/
/* 									<ul class="nav nav-tabs" id="so_module">*/
/* 										<li>*/
/* 											<a href="#module" data-toggle="tab">*/
/* 												{{ objlang.get('entry_module') }}*/
/* 											</a>*/
/* 										</li>*/
/* 										<li>*/
/* 											<a href="#source_option" data-toggle="tab">*/
/* 												{{ objlang.get('entry_source_option') }}*/
/* 											</a>*/
/* 										</li>*/
/* 										<li>*/
/* 											<a href="#tabs_option" data-toggle="tab">*/
/* 												{{ objlang.get('entry_tabs_option') }}*/
/* 											</a>*/
/* 										</li>*/
/* 										<li>*/
/* 											<a href="#items_option" data-toggle="tab">*/
/* 												{{ objlang.get('entry_items_option') }}*/
/* 											</a>*/
/* 										</li>*/
/* 										<li>*/
/* 											<a href="#image_option" data-toggle="tab">*/
/* 												{{ objlang.get('entry_image_option') }}*/
/* 											</a>*/
/* 										</li>*/
/* 										<li>*/
/* 											<a href="#effect_option" data-toggle="tab">*/
/* 												{{ objlang.get('entry_effect_option') }}*/
/* 											</a>*/
/* 										</li>*/
/* 										<li>*/
/* 											<a href="#advanced_option" data-toggle="tab">*/
/* 												{{ objlang.get('entry_advanced_option') }}*/
/* 											</a>*/
/* 										</li>*/
/* 									</ul>*/
/* 									<div class="tab-content">*/
/* 										<div class="tab-pane" id="module">*/
/* 											<div class="form-group">*/
/* 												<label class="col-sm-3 control-label" for="input-class_suffix"> <span data-toggle="tooltip" title="{{ objlang.get('entry_class_suffix_desc') }}">{{ objlang.get('entry_class_suffix') }} </span> </label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<input type="text" name="class_suffix" value="{{ module.class_suffix }}" id="input-class_suffix" class="form-control" />*/
/* 													</div>*/
/* 												</div>*/
/* 											</div>*/
/* 											<div class="form-group">*/
/* 												<label class="col-sm-3 control-label" for="input-open_link"> <span data-toggle="tooltip" title="{{ objlang.get('entry_open_link_desc') }}">{{ objlang.get('entry_open_link') }} </span></label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<select name="item_link_target" id="input-open_link" class="form-control">*/
/* 															{% for option_id, option_value in item_link_targets %}*/
/* 																{% set selected = option_id == module.item_link_target ? 'selected' : '' %}*/
/* 																<option value="{{ option_id }}" {{ selected }}>{{ option_value }}</option>*/
/* 															{% endfor %}*/
/* 														</select>*/
/* 													</div>*/
/* 												</div>*/
/* 											</div>*/
/* 											<div class="form-group">*/
/* 												<label class="col-sm-3 control-label" for="input-column_1200"> <span data-toggle="tooltip" title="{{ objlang.get('entry_nb_column0_desc') }}">{{ objlang.get('entry_column') }} </span></label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<select name="nb_column0" id="input-column_1200" class="form-control">*/
/* 															{% for option_id, option_value in nb_columns %}*/
/* 																{% set selected = option_id == module.nb_column0 ? 'selected' : '' %}*/
/* 																<option value="{{ option_id }}" {{ selected }}>{{ option_value }}</option>*/
/* 															{% endfor %}*/
/* 														</select>*/
/* 													</div>*/
/* 												</div>*/
/* 											</div>*/
/* 											<div class="form-group">*/
/* 												<label class="col-sm-3 control-label" for="input-column_992_1199"><span data-toggle="tooltip" title="{{ objlang.get('entry_nb_column1_desc') }}">{{ objlang.get('entry_column') }} </span></label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<select name="nb_column1" id="input-column_992_1199" class="form-control">*/
/* 															{% for option_id, option_value in nb_columns %}*/
/* 																{% set selected = option_id == module.nb_column1 ? 'selected' : '' %}*/
/* 																<option value="{{ option_id }}" {{ selected }}>{{ option_value }}</option>*/
/* 															{% endfor %}*/
/* 														</select>*/
/* 													</div>*/
/* 												</div>*/
/* 											</div>*/
/* 											<div class="form-group">*/
/* 												<label class="col-sm-3 control-label" for="input-column_768_991"><span data-toggle="tooltip" title="{{ objlang.get('entry_nb_column2_desc') }}">{{ objlang.get('entry_column') }} </span></label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<select name="nb_column2" id="input-column_768_991" class="form-control">*/
/* 															{% for option_id, option_value in nb_columns %}*/
/* 																{% set selected = option_id == module.nb_column2 ? 'selected' : '' %}*/
/* 																<option value="{{ option_id }}" {{ selected }}>{{ option_value }}</option>*/
/* 															{% endfor %}*/
/* 														</select>*/
/* 													</div>*/
/* 												</div>*/
/* 											</div>*/
/* 											<div class="form-group">*/
/* 												<label class="col-sm-3 control-label" for="input-column_480_767"> <span data-toggle="tooltip" title="{{ objlang.get('entry_nb_column3_desc') }}">{{ objlang.get('entry_column') }}</span></label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<select name="nb_column3" id="input-column_480_767" class="form-control">*/
/* 															{% for option_id, option_value in nb_columns %}*/
/* 																{% set selected = option_id == module.nb_column3 ? 'selected' : '' %}*/
/* 																<option value="{{ option_id }}" {{ selected }}>{{ option_value }}</option>*/
/* 															{% endfor %}*/
/* 														</select>*/
/* 													</div>*/
/* 												</div>*/
/* 											</div>*/
/* 											<div class="form-group">*/
/* 												<label class="col-sm-3 control-label" for="input-column_0_479"><span data-toggle="tooltip" title="{{ objlang.get('entry_nb_column4_desc') }}">{{ objlang.get('entry_column') }}</span></label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<select name="nb_column4" id="input-column_0_479" class="form-control">*/
/* 															{% for option_id, option_value in nb_columns %}*/
/* 																{% set selected = option_id == module.nb_column4 ? 'selected' : '' %}*/
/* 																<option value="{{ option_id }}" {{ selected }}>{{ option_value }}</option>*/
/* 															{% endfor %}*/
/* 														</select>*/
/* 													</div>*/
/* 												</div>*/
/* 											</div>*/
/* 											<div class="form-group">*/
/* 												<label class="col-sm-3 control-label" for="input-type_show">*/
/* 													<span data-toggle="tooltip" title="{{ objlang.get('entry_type_show_desc') }}">{{ objlang.get('entry_type_show') }}</span>*/
/* 												</label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<select name="type_show" id="input-type_show" class="form-control">*/
/* 															{% for option_id, type in type_shows %}*/
/* 																{% set selected = option_id == module.type_show ? 'selected' : '' %}*/
/* 																<option value="{{ option_id }}" {{ selected }}>{{ type }}</option>*/
/* 															{% endfor %}*/
/* 														</select>*/
/* 													</div>*/
/* 												</div>*/
/* 											</div>*/
/* 											<div class="form-group type_show_loadmore {{ module.type_show == 'loadmore' ? 'hide' : '' }}">*/
/* 												<label class="col-sm-3 control-label" for="input-nb_rows">*/
/* 													<b style="font-weight:bold; color:#f00">*</b> <span data-toggle="tooltip" title="{{ objlang.get('entry_nb_row_desc') }}">{{ objlang.get('entry_nb_row') }} </span>*/
/* 												</label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<select name="nb_row" id="input-nb_rows" class="form-control">*/
/* 															{% for option_id, option_value in nb_rows %}*/
/* 																{% set selected = option_id == module.nb_row ? 'selected' : '' %}*/
/* 																<option value="{{ option_id }}" {{ selected }}>{{ option_value }}</option>*/
/* 															{% endfor %}*/
/* 														</select>*/
/* 													</div>*/
/* 												</div>*/
/* 											</div>*/
/* 										</div>*/
/* 						*/
/* 										<div class="tab-pane" id="source_option">*/
/* 											<div class="form-group">*/
/* 												<label class="col-sm-3 control-label" for="input-type_source">*/
/* 													<span data-toggle="tooltip" title="{{ objlang.get('entry_type_source_desc') }}">{{ objlang.get('entry_type_source') }}</span>*/
/* 												</label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<label class="radio-inline">*/
/* 															{% if module.type_source %}*/
/* 																<input type="radio" name="type_source" value="1" checked="checked" />*/
/* 																{{ objlang.get('entry_field_product') }}*/
/* 															{% else %}*/
/* 																<input type="radio" name="type_source" value="1" />*/
/* 																{{ objlang.get('entry_field_product') }}*/
/* 															{% endif %}*/
/* 														</label>*/
/* 														<label class="radio-inline">*/
/* 															{% if module.type_source %}*/
/* 																<input type="radio" name="type_source" value="0" />*/
/* 																{{ objlang.get('entry_category') }}*/
/* 															{% else %}*/
/* 																<input type="radio" name="type_source" value="0" checked="checked" />*/
/* 																{{ objlang.get('entry_category') }}*/
/* 															{% endif %}*/
/* 														</label>*/
/* 													</div>*/
/* 												</div>*/
/* 											</div>*/
/* 											<div class="form-group">*/
/* 												<label class="col-sm-3 control-label" for="input-category"> <b style="font-weight:bold; color:#f00">*</b> <span data-toggle="tooltip" title="{{ objlang.get('entry_category_desc') }}">{{ objlang.get('entry_category') }}</span></label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<input type="text" name="category" value="" placeholder="{{ objlang.get('entry_category') }}" id="input-category" class="form-control" />*/
/* 														<div id="featured-category" class="well well-sm" style="height: 150px; overflow: auto;">*/
/* 															{% for category in module.categorys %}*/
/* 																<div id="featured-category{{ category.category_id }}"><i class="fa fa-minus-circle"></i> {{ category.name }}*/
/* 																	<input type="hidden" name="category[]" value="{{ category.category_id }}" />*/
/* 																</div>*/
/* 															{% endfor %}*/
/* 														</div>*/
/* 													</div>*/
/* 													{% if error.category is defined %}*/
/* 													<div class="text-danger col-sm-12">{{ error.category }}</div>*/
/* 													{% endif %}*/
/* 												</div>*/
/* 											</div>*/
/* 											<div class="form-group">*/
/* 												<label class="col-sm-3 control-label" for="input-child_category"> <span data-toggle="tooltip" title="{{ objlang.get('entry_child_category_desc') }}">{{ objlang.get('entry_child_category') }}</span></label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<label class="radio-inline">*/
/* 															{% if module.child_category %}*/
/* 																<input type="radio" name="child_category" value="1" checked="checked" />*/
/* 																{{ objlang.get('entry_include') }}*/
/* 															{% else %}*/
/* 																<input type="radio" name="child_category" value="1" />*/
/* 																{{ objlang.get('entry_include') }}*/
/* 															{% endif %}*/
/* 														</label>*/
/* 														<label class="radio-inline">*/
/* 															{% if module.child_category %}*/
/* 																<input type="radio" name="child_category" value="0" />*/
/* 																{{ objlang.get('entry_exclude') }}*/
/* 															{% else %}*/
/* 																<input type="radio" name="child_category" value="0" checked="checked" />*/
/* 																{{ objlang.get('entry_exclude') }}*/
/* 															{% endif %}*/
/* 														</label>*/
/* 													</div>*/
/* 												</div>*/
/* 											</div>*/
/* 											<div class="form-group" id="input-category_depth_form">*/
/* 												<label class="col-sm-3 control-label" for="input-category_depth"> <b style="font-weight:bold; color:#f00">*</b> <span data-toggle="tooltip" title="{{ objlang.get('entry_category_depth_desc') }}">{{ objlang.get('entry_category_depth') }}</span></label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<input type="text" name="category_depth" value="{{ module['category_depth'] }}" id="input-category_depth" class="form-control" />*/
/* 													</div>*/
/* 													{% if error.category_depth %}*/
/* 													<div class="text-danger col-sm-12">{{ error.category_depth }}</div>*/
/* 													{% endif %}*/
/* 												</div>*/
/* 											</div>*/
/* 											<div class="form-group">*/
/* 												<label class="col-sm-3 control-label" for="input-product_order"> <span data-toggle="tooltip" title="{{ objlang.get('entry_product_order_desc') }}">{{ objlang.get('entry_product_order') }}</span></label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<select name="product_sort" id="input-product_order" class="form-control">*/
/* 															{% for option_id, option_value in product_sorts %}*/
/* 																{% set selected = option_id == module.product_sort ? 'selected' : '' %}*/
/* 																<option value="{{ option_id }}" {{ selected }}>{{ option_value }}</option>*/
/* 															{% endfor %}*/
/* 														</select>*/
/* 													</div>*/
/* 												</div>*/
/* 											</div>*/
/* 											<div class="form-group">*/
/* 												<label class="col-sm-3 control-label" for="input-ordering"> <span data-toggle="tooltip" title="{{ objlang.get('entry_ordering_desc') }}">{{ objlang.get('entry_ordering') }}</span></label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<select name="product_ordering" id="input-ordering" class="form-control">*/
/* 															{% for option_id, option_value in product_orderings %}*/
/* 																{% set selected = option_id == module.product_ordering ? 'selected' : '' %}*/
/* 																<option value="{{ option_id }}" {{ selected }}>{{ option_value }}</option>*/
/* 															{% endfor %}*/
/* 														</select>*/
/* 													</div>*/
/* 												</div>*/
/* 											</div>*/
/* 											<div class="form-group">*/
/* 												<label class="col-sm-3 control-label" for="input-source_limit"> <b style="font-weight:bold; color:#f00">*</b> <span data-toggle="tooltip" title="{{ objlang.get('entry_source_limit_desc') }}">{{ objlang.get('entry_source_limit') }}</span></label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<input type="text" name="source_limit" value="{{ module.source_limit }}" id="input-source_limit" class="form-control" />*/
/* 													</div>*/
/* 													{% if error.source_limit %}*/
/* 													<div class="text-danger col-sm-12">{{ error.source_limit }}</div>*/
/* 													{% endif %}*/
/* 												</div>*/
/* 											</div>*/
/* 											<label class="col-sm-12"><u style="color:#4e9e41">{{ objlang.get('entry_for_preload') }}</u></label>*/
/* 											<div class="form-group" id="category_preload">*/
/* 												<label class="col-sm-3 control-label" for="input-catid_preload">*/
/* 													<span data-toggle="tooltip" title="{{ objlang.get('entry_catid_preload_desc') }}">{{ objlang.get('entry_category_preload') }}</span>*/
/* 												</label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<select name="catid_preload" id="input-catid_preload" class="form-control">*/
/* 															{% if module.tab_all_display ==1 and module.catid_preload =="*" %}*/
/* 																<option selected="selected" value="*">{{ objlang.get('entry_all_product') }}</option>*/
/* 															{% elseif module.tab_all_display == 1 %}*/
/* 																<option value="*">{{ objlang.get('entry_all_product') }}</option>*/
/* 															{% endif %}*/
/* 															{% for option in module.categorys %}*/
/* 																{% set selected = option.category_id == module.catid_preload ? 'selected' : '' %}*/
/* 																<option value="{{ option.category_id }}" id="catid_preload{{ option.category_id }}" {{ selected }}>{{ option.name }}</option>*/
/* 															{% endfor %}*/
/* 														</select>*/
/* 													</div>*/
/* 												</div>*/
/* 											</div>*/
/* 											<div class="form-group field_product_tab">*/
/* 												<label class="col-sm-3 control-label" for="input-field_product_tab">*/
/* 													<b style="font-weight:bold; color:#f00">*</b> <span data-toggle="tooltip" title="{{ objlang.get('entry_field_product_tab_desc') }}">{{ objlang.get('entry_field_product_tab') }}</span>*/
/* 												</label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<input type="text" name="field_product_tab" value="" placeholder="{{ objlang.get('entry_field_product_tab') }}" id="input-field_product_tab" class="form-control" />*/
/* 														<div id="featured-field_product_tab" class="well well-sm" style="height: 150px; overflow: auto;">*/
/* 															{% for field_product_tab in module.field_product_tabs %}*/
/* 																<div id="featured-field_product_tab{{ field_product_tab.product_id }}"><i class="fa fa-minus-circle"></i> {{ field_product_tab.name }}*/
/* 																<input type="hidden" name="field_product_tab[]" value="{{ field_product_tab.product_id }}" />*/
/* 																</div>*/
/* 															{% endfor %}*/
/* 														</div>*/
/* 													</div>*/
/* 													{% if error.field_product_tab is defined %}*/
/* 													<div class="text-danger col-sm-12">{{ error.field_product_tab }}</div>*/
/* 													{% endif %}*/
/* 												</div>*/
/* 											</div>*/
/* 											<div class="form-group field_product_tab">*/
/* 												<label class="col-sm-3 control-label" for="input-field_preload">*/
/* 													<span data-toggle="tooltip" title="{{ objlang.get('entry_field_preload_desc') }}">{{ objlang.get('entry_field_preload') }}</span>*/
/* 												</label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<select name="field_preload" id="input-field_preload" class="form-control">*/
/* 															{% for option in module.field_product_tabs %}*/
/* 																{% set selected = option.product_id == module.field_preload ? 'selected' : '' %}*/
/* 																<option value="{{ option.product_id }}" id="field_product{{ option.product_id }}" {{ selected }}>{{ option.name }}</option>*/
/* 															{% endfor %}*/
/* 														</select>*/
/* 													</div>*/
/* 												</div>*/
/* 											</div>*/
/* 										</div>*/
/* 						*/
/* 										<div class="tab-pane" id="tabs_option">*/
/* 											<div class="form-group">*/
/* 												<label class="col-sm-3 control-label" for="input-tab_all_display">*/
/* 													<span data-toggle="tooltip" title="{{ objlang.get('entry_tab_all_display_desc') }}">{{ objlang.get('entry_tab_all_display') }}</span>*/
/* 												</label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<label class="radio-inline">*/
/* 															{% if module.tab_all_display %}*/
/* 																<input type="radio" name="tab_all_display" value="1" checked="checked" />*/
/* 																{{ objlang.get('text_yes') }}*/
/* 															{% else %}*/
/* 																<input type="radio" name="tab_all_display" value="1" />*/
/* 																{{ objlang.get('text_yes') }}*/
/* 															{% endif %}*/
/* 														</label>*/
/* 														<label class="radio-inline">*/
/* 															{% if module.tab_all_display %}*/
/* 																<input type="radio" name="tab_all_display" value="0" />*/
/* 																{{ objlang.get('text_no') }}*/
/* 															{% else %}*/
/* 																<input type="radio" name="tab_all_display" value="0" checked="checked" />*/
/* 																{{ objlang.get('text_no') }}*/
/* 															{% endif %}*/
/* 														</label>*/
/* 													</div>*/
/* 												</div>*/
/* 											</div>*/
/* 											<div class="form-group">*/
/* 												<label class="col-sm-3 control-label" for="input-tab_max_characters">*/
/* 													<b style="font-weight:bold; color:#f00">*</b> <span data-toggle="tooltip" title="{{ objlang.get('entry_tab_max_characters_desc') }}">{{ objlang.get('entry_tab_max_characters') }}</span>*/
/* 												</label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<input type="text" name="tab_max_characters" value="{{ module.tab_max_characters }}" id="input-count" class="form-control" />*/
/* 													</div>*/
/* 													{% if error.tab_max_characters is defined %}*/
/* 													<div class="text-danger col-sm-12">{{ error.tab_max_characters }}</div>*/
/* 													{% endif %}*/
/* 												</div>*/
/* 											</div>*/
/* 											<div class="form-group">*/
/* 												<label class="col-sm-3 control-label" for="input-tab_icon_display">*/
/* 													<span data-toggle="tooltip" title="{{ objlang.get('entry_tab_icon_display_desc') }}">{{ objlang.get('entry_tab_icon_display') }}</span>*/
/* 												</label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<label class="radio-inline">*/
/* 															{% if module.tab_icon_display %}*/
/* 																<input type="radio" name="tab_icon_display" value="1" checked="checked" />*/
/* 																{{ objlang.get('text_yes') }}*/
/* 															{% else %}*/
/* 																<input type="radio" name="tab_icon_display" value="1" />*/
/* 																{{ objlang.get('text_yes') }}*/
/* 															{% endif %}*/
/* 														</label>*/
/* 														<label class="radio-inline">*/
/* 															{% if module.tab_icon_display %}*/
/* 																<input type="radio" name="tab_icon_display" value="0" />*/
/* 																{{ objlang.get('text_no') }}*/
/* 															{% else %}*/
/* 																<input type="radio" name="tab_icon_display" value="0" checked="checked" />*/
/* 																{{ objlang.get('text_no') }}*/
/* 															{% endif %}*/
/* 														</label>*/
/* 													</div>*/
/* 												</div>*/
/* 											</div>*/
/* 											<div class="form-group field_product_tab">*/
/* 												<label class="col-sm-3 control-label" for="input-cat_order_by">*/
/* 													<span data-toggle="tooltip" title="{{ objlang.get('entry_cat_order_by_desc') }}">{{ objlang.get('entry_cat_order_by') }}</span>*/
/* 												</label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<select name="cat_order_by" id="input-cat_order_by" class="form-control">*/
/* 															{% for option_id, option_value in cat_order_bys %}*/
/* 																{% set selected = option_id == module.cat_order_by ? 'selected' : '' %}*/
/* 																<option value="{{ option_id }}" {{ selected }}>{{ option_value }}</option>*/
/* 															{% endfor %}*/
/* 														</select>*/
/* 													</div>*/
/* 												</div>*/
/* 											</div>*/
/* 											<div class="form-group">*/
/* 												<label class="col-sm-3 control-label" for="input-imgcfgcat_width">*/
/* 													<b style="font-weight:bold; color:#f00">*</b> <span data-toggle="tooltip" title="{{ objlang.get('entry_imgcfgcat_width_desc') }}">{{ objlang.get('entry_imgcfgcat_width') }}</span>*/
/* 												</label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<input type="text" name="imgcfgcat_width" value="{{ module.imgcfgcat_width }}" id="input-count" class="form-control" />*/
/* 													</div>*/
/* 													{% if error.imgcfgcat_width is defined %}*/
/* 													<div class="text-danger col-sm-12">{{ error.imgcfgcat_width }}</div>*/
/* 													{% endif %}*/
/* 												</div>*/
/* 											</div>*/
/* 											<div class="form-group">*/
/* 												<label class="col-sm-3 control-label" for="input-imgcfgcat_height">*/
/* 													<b style="font-weight:bold; color:#f00">*</b> <span data-toggle="tooltip" title="{{ objlang.get('entry_imgcfgcat_height_desc') }}">{{ objlang.get('entry_imgcfgcat_height') }}</span>*/
/* 												</label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<input type="text" name="imgcfgcat_height" value="{{ module.imgcfgcat_height }}" id="input-count" class="form-control" />*/
/* 													</div>*/
/* 													{% if error.imgcfgcat_height is defined %}*/
/* 													<div class="text-danger col-sm-12">{{ error.imgcfgcat_height }}</div>*/
/* 													{% endif %}*/
/* 												</div>*/
/* 											</div>*/
/* 										</div>*/
/* 						*/
/* 										<div class="tab-pane" id="items_option">*/
/* 											<div class="form-group">*/
/* 												<label class="col-sm-3 control-label" for="input-display_title"> <span data-toggle="tooltip" title="{{ objlang.get('entry_display_title_desc') }}">{{ objlang.get('entry_display_title') }}</span></label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<label class="radio-inline">*/
/* 															{% if module.display_title %}*/
/* 																<input type="radio" name="display_title" value="1" checked="checked" />*/
/* 																{{ objlang.get('text_yes') }}*/
/* 															{% else %}*/
/* 																<input type="radio" name="display_title" value="1" />*/
/* 																{{ objlang.get('text_yes') }}*/
/* 															{% endif %}*/
/* 														</label>*/
/* 														<label class="radio-inline">*/
/* 															{% if module.display_title %}*/
/* 																<input type="radio" name="display_title" value="0" />*/
/* 																{{ objlang.get('text_no') }}*/
/* 															{% else %}*/
/* 																<input type="radio" name="display_title" value="0" checked="checked" />*/
/* 																{{ objlang.get('text_no') }}*/
/* 															{% endif %}*/
/* 														</label>*/
/* 													</div>*/
/* 												</div>*/
/* 											</div>*/
/* 											<div class="form-group">*/
/* 												<label class="col-sm-3 control-label" for="input-title_maxlength"> <b style="font-weight:bold; color:#f00">*</b> <span data-toggle="tooltip" title="{{ objlang.get('entry_title_maxlength_desc') }}">{{ objlang.get('entry_title_maxlength') }}</span></label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<input type="text" name="title_maxlength" value="{{ module.title_maxlength }}" id="input-title_maxlength" class="form-control" />*/
/* 													</div>*/
/* 													{% if error.title_maxlength is defined %}*/
/* 													<div class="text-danger col-sm-12">{{ error.title_maxlength }}</div>*/
/* 													{% endif %}*/
/* 												</div>*/
/* 											</div>*/
/* 											<div class="form-group">*/
/* 												<label class="col-sm-3 control-label" for="input-display_description"> <span data-toggle="tooltip" title="{{ objlang.get('entry_display_description_desc') }}">{{ objlang.get('entry_display_description') }}</span></label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<label class="radio-inline">*/
/* 															{% if module.display_description %}*/
/* 																<input type="radio" name="display_description" value="1" checked="checked" />*/
/* 																{{ objlang.get('text_yes') }}*/
/* 															{% else %}*/
/* 																<input type="radio" name="display_description" value="1" />*/
/* 																{{ objlang.get('text_yes') }}*/
/* 															{% endif %}*/
/* 														</label>*/
/* 														<label class="radio-inline">*/
/* 															{% if module.display_description %}*/
/* 																<input type="radio" name="display_description" value="0" />*/
/* 																{{ objlang.get('text_no') }}*/
/* 															{% else %}*/
/* 																<input type="radio" name="display_description" value="0" checked="checked" />*/
/* 																{{ objlang.get('text_no') }}*/
/* 															{% endif %}*/
/* 														</label>*/
/* 													</div>*/
/* 												</div>*/
/* 											</div>*/
/* 											<div class="form-group">*/
/* 												<label class="col-sm-3 control-label" for="input-description_maxlength"> <b style="font-weight:bold; color:#f00">*</b> <span data-toggle="tooltip" title="{{ objlang.get('entry_description_maxlength_desc') }}">{{ objlang.get('entry_description_maxlength') }}</span></label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<input type="text" name="description_maxlength" value="{{ module.description_maxlength }}" id="input-description_maxlength" class="form-control" />*/
/* 													</div>*/
/* 													{% if error.description_maxlength is defined %}*/
/* 													<div class="text-danger col-sm-12">{{ error.description_maxlength }}</div>*/
/* 													{% endif %}*/
/* 												</div>*/
/* 											</div>*/
/* 											<div class="form-group">*/
/* 												<label class="col-sm-3 control-label" for="input-display_price"> <span data-toggle="tooltip" title="{{ objlang.get('entry_display_price_desc') }}">{{ objlang.get('entry_display_price') }}</span></label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<label class="radio-inline">*/
/* 															{% if module.display_price %}*/
/* 																<input type="radio" name="display_price" value="1" checked="checked" />*/
/* 																{{ objlang.get('text_yes') }}*/
/* 															{% else %}*/
/* 																<input type="radio" name="display_price" value="1" />*/
/* 																{{ objlang.get('text_yes') }}*/
/* 															{% endif %}*/
/* 														</label>*/
/* 														<label class="radio-inline">*/
/* 															{% if module.display_price %}*/
/* 																<input type="radio" name="display_price" value="0" />*/
/* 																{{ objlang.get('text_no') }}*/
/* 															{% else %}*/
/* 																<input type="radio" name="display_price" value="0" checked="checked" />*/
/* 																{{ objlang.get('text_no') }}*/
/* 															{% endif %}*/
/* 														</label>*/
/* 													</div>*/
/* 												</div>*/
/* 											</div>*/
/* 											<div class="form-group">*/
/* 												<label class="col-sm-3 control-label" for="input-display_add_to_cart"> <span data-toggle="tooltip" title="{{ objlang.get('entry_display_add_to_cart_desc') }}">{{ objlang.get('entry_display_add_to_cart') }}</span></label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<label class="radio-inline">*/
/* 															{% if module.display_add_to_cart %}*/
/* 																<input type="radio" name="display_add_to_cart" value="1" checked="checked" />*/
/* 																{{ objlang.get('text_yes') }}*/
/* 															{% else %}*/
/* 																<input type="radio" name="display_add_to_cart" value="1" />*/
/* 																{{ objlang.get('text_yes') }}*/
/* 															{% endif %}*/
/* 														</label>*/
/* 														<label class="radio-inline">*/
/* 															{% if module.display_add_to_cart %}*/
/* 																<input type="radio" name="display_add_to_cart" value="0" />*/
/* 																{{ objlang.get('text_no') }}*/
/* 															{% else %}*/
/* 																<input type="radio" name="display_add_to_cart" value="0" checked="checked" />*/
/* 																{{ objlang.get('text_no') }}*/
/* 															{% endif %}*/
/* 														</label>*/
/* 													</div>*/
/* 												</div>*/
/* 											</div>*/
/* 											<div class="form-group">*/
/* 												<label class="col-sm-3 control-label" for="input-display_wishlist"> <span data-toggle="tooltip" title="{{ objlang.get('entry_display_wishlist_desc') }}">{{ objlang.get('entry_display_wishlist') }}</span></label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<label class="radio-inline">*/
/* 															{% if module.display_wishlist %}*/
/* 																<input type="radio" name="display_wishlist" value="1" checked="checked" />*/
/* 																{{ objlang.get('text_yes') }}*/
/* 															{% else %}*/
/* 																<input type="radio" name="display_wishlist" value="1" />*/
/* 																{{ objlang.get('text_yes') }}*/
/* 															{% endif %}*/
/* 														</label>*/
/* 														<label class="radio-inline">*/
/* 															{% if module.display_wishlist %}*/
/* 																<input type="radio" name="display_wishlist" value="0" />*/
/* 																{{ objlang.get('text_no') }}*/
/* 															{% else %}*/
/* 																<input type="radio" name="display_wishlist" value="0" checked="checked" />*/
/* 																{{ objlang.get('text_no') }}*/
/* 															{% endif %}*/
/* 														</label>*/
/* 													</div>*/
/* 												</div>*/
/* 											</div>*/
/* 											<div class="form-group">*/
/* 												<label class="col-sm-3 control-label" for="input-display_compare"> <span data-toggle="tooltip" title="{{ objlang.get('entry_display_compare_desc') }}">{{ objlang.get('entry_display_compare') }}</span></label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<label class="radio-inline">*/
/* 															{% if module.display_compare %}*/
/* 																<input type="radio" name="display_compare" value="1" checked="checked" />*/
/* 																{{ objlang.get('text_yes') }}*/
/* 															{% else %}*/
/* 																<input type="radio" name="display_compare" value="1" />*/
/* 																{{ objlang.get('text_yes') }}*/
/* 															{% endif %}*/
/* 														</label>*/
/* 														<label class="radio-inline">*/
/* 															{% if module.display_compare %}*/
/* 																<input type="radio" name="display_compare" value="0" />*/
/* 																{{ objlang.get('text_no') }}*/
/* 															{% else %}*/
/* 																<input type="radio" name="display_compare" value="0" checked="checked" />*/
/* 																{{ objlang.get('text_no') }}*/
/* 															{% endif %}*/
/* 														</label>*/
/* 													</div>*/
/* 												</div>*/
/* 											</div>*/
/* 											<div class="form-group">*/
/* 												<label class="col-sm-3 control-label" for="input-display_rating"> <span data-toggle="tooltip" title="{{ objlang.get('entry_display_rating_desc') }}">{{ objlang.get('entry_display_rating') }}</span></label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<label class="radio-inline">*/
/* 															{% if module.display_rating %}*/
/* 																<input type="radio" name="display_rating" value="1" checked="checked" />*/
/* 																{{ objlang.get('text_yes') }}*/
/* 															{% else %}*/
/* 																<input type="radio" name="display_rating" value="1" />*/
/* 																{{ objlang.get('text_yes') }}*/
/* 															{% endif %}*/
/* 														</label>*/
/* 														<label class="radio-inline">*/
/* 															{% if module.display_rating %}*/
/* 																<input type="radio" name="display_rating" value="0" />*/
/* 																{{ objlang.get('text_no') }}*/
/* 															{% else %}*/
/* 																<input type="radio" name="display_rating" value="0" checked="checked" />*/
/* 																{{ objlang.get('text_no') }}*/
/* 															{% endif %}*/
/* 														</label>*/
/* 													</div>*/
/* 												</div>*/
/* 											</div>*/
/* 											<div class="form-group">*/
/* 												<label class="col-sm-3 control-label" for="input-display_sale"> <span data-toggle="tooltip" title="{{ objlang.get('entry_display_sale_desc') }}">{{ objlang.get('entry_display_sale') }}</span></label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<label class="radio-inline">*/
/* 															{% if module.display_sale %}*/
/* 																<input type="radio" name="display_sale" value="1" checked="checked" />*/
/* 																{{ objlang.get('text_yes') }}*/
/* 															{% else %}*/
/* 																<input type="radio" name="display_sale" value="1" />*/
/* 																{{ objlang.get('text_yes') }}*/
/* 															{% endif %}*/
/* 														</label>*/
/* 														<label class="radio-inline">*/
/* 															{% if module.display_sale %}*/
/* 																<input type="radio" name="display_sale" value="0" />*/
/* 																{{ objlang.get('text_no') }}*/
/* 															{% else %}*/
/* 																<input type="radio" name="display_sale" value="0" checked="checked" />*/
/* 																{{ objlang.get('text_no') }}*/
/* 															{% endif %}*/
/* 														</label>*/
/* 													</div>*/
/* 												</div>*/
/* 											</div>*/
/* 											<div class="form-group">*/
/* 												<label class="col-sm-3 control-label" for="input-display_new"> <span data-toggle="tooltip" title="{{ objlang.get('entry_display_new_desc') }}">{{ objlang.get('entry_display_new') }}</span></label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<label class="radio-inline">*/
/* 															{% if module.display_new %}*/
/* 																<input type="radio" name="display_new" value="1" checked="checked" />*/
/* 																{{ objlang.get('text_yes') }}*/
/* 															{% else %}*/
/* 																<input type="radio" name="display_new" value="1" />*/
/* 																{{ objlang.get('text_yes') }}*/
/* 															{% endif %}*/
/* 														</label>*/
/* 														<label class="radio-inline">*/
/* 															{% if module.display_new %}*/
/* 																<input type="radio" name="display_new" value="0" />*/
/* 																{{ objlang.get('text_no') }}*/
/* 															{% else %}*/
/* 																<input type="radio" name="display_new" value="0" checked="checked" />*/
/* 																{{ objlang.get('text_no') }}*/
/* 															{% endif %}*/
/* 														</label>*/
/* 													</div>*/
/* 												</div>*/
/* 											</div>*/
/* 											<div class="form-group" id="input-date_day_form">*/
/* 												<label class="col-sm-3 control-label" for="input-date_day"> <b style="font-weight:bold; color:#f00">*</b> <span data-toggle="tooltip" title="{{ objlang.get('entry_date_day_desc') }}">{{ objlang.get('entry_date_day') }}</span></label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<input type="text" name="date_day" value="{{ module.date_day }}" id="input-date_day" class="form-control" />*/
/* 													</div>*/
/* 													{% if error.date_day is defined %}*/
/* 													<div class="text-danger col-sm-12">{{ error.date_day }}</div>*/
/* 													{% endif %}*/
/* 												</div>*/
/* 											</div>*/
/* 											<div class="form-group">*/
/* 												<label class="col-sm-3 control-label" for="input-product_image_num"> <span data-toggle="tooltip" title="{{ objlang.get('entry_product_image_num_desc') }}">{{ objlang.get('entry_product_image_num') }} </span></label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<select name="product_image_num" id="input-product_image_num" class="form-control">*/
/* 															{% for option_id, option_value in product_image_nums %}*/
/* 																{% set selected = option_id == module.product_image_num ? 'selected' : '' %}*/
/* 																<option value="{{ option_id }}" {{ selected }}>{{ option_value }}</option>*/
/* 															{% endfor %}*/
/* 														</select>*/
/* 													</div>*/
/* 												</div>*/
/* 											</div>*/
/* 										</div>*/
/* 						*/
/* 										<div class="tab-pane" id="image_option">*/
/* 											<div class="form-group">*/
/* 												<label class="col-sm-3 control-label" for="input-product_image"> <span data-toggle="tooltip" title="{{ objlang.get('entry_product_image_desc') }}">{{ objlang.get('entry_product_image') }}</span></label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<label class="radio-inline">*/
/* 															{% if module.product_image %}*/
/* 																<input type="radio" name="product_image" value="1" checked="checked" />*/
/* 																{{ objlang.get('text_yes') }}*/
/* 															{% else %}*/
/* 																<input type="radio" name="product_image" value="1" />*/
/* 																{{ objlang.get('text_yes') }}*/
/* 															{% endif %}*/
/* 														</label>*/
/* 														<label class="radio-inline">*/
/* 															{% if module.product_image %}*/
/* 																<input type="radio" name="product_image" value="0" />*/
/* 																{{ objlang.get('text_no') }}*/
/* 															{% else %}*/
/* 																<input type="radio" name="product_image" value="0" checked="checked" />*/
/* 																{{ objlang.get('text_no') }}*/
/* 															{% endif %}*/
/* 														</label>*/
/* 													</div>*/
/* 												</div>*/
/* 											</div>*/
/* 											<div class="form-group">*/
/* 												<label class="col-sm-3 control-label" for="input-product_get_image_data"> <span data-toggle="tooltip" title="{{ objlang.get('entry_product_get_image_data_desc') }}">{{ objlang.get('entry_product_get_image_data') }}</span></label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<label class="radio-inline">*/
/* 															{% if module.product_get_image_data %}*/
/* 																<input type="radio" name="product_get_image_data" value="1" checked="checked" />*/
/* 																{{ objlang.get('text_yes') }}*/
/* 															{% else %}*/
/* 																<input type="radio" name="product_get_image_data" value="1" />*/
/* 																{{ objlang.get('text_yes') }}*/
/* 															{% endif %}*/
/* 														</label>*/
/* 														<label class="radio-inline">*/
/* 															{% if module.product_get_image_data %}*/
/* 																<input type="radio" name="product_get_image_data" value="0" />*/
/* 																{{ objlang.get('text_no') }}*/
/* 															{% else %}*/
/* 																<input type="radio" name="product_get_image_data" value="0" checked="checked" />*/
/* 																{{ objlang.get('text_no') }}*/
/* 															{% endif %}*/
/* 														</label>*/
/* 													</div>*/
/* 												</div>*/
/* 											</div>*/
/* 											<div class="form-group">*/
/* 												<label class="col-sm-3 control-label" for="input-product_get_image_image"> <span data-toggle="tooltip" title="{{ objlang.get('entry_product_get_image_image_desc') }}">{{ objlang.get('entry_product_get_image_image') }}</span></label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<label class="radio-inline">*/
/* 															{% if module.product_get_image_image %}*/
/* 																<input type="radio" name="product_get_image_image" value="1" checked="checked" />*/
/* 																{{ objlang.get('text_yes') }}*/
/* 															{% else %}*/
/* 																<input type="radio" name="product_get_image_image" value="1" />*/
/* 																{{ objlang.get('text_yes') }}*/
/* 															{% endif %}*/
/* 														</label>*/
/* 														<label class="radio-inline">*/
/* 															{% if module.product_get_image_image %}*/
/* 																<input type="radio" name="product_get_image_image" value="0" />*/
/* 																{{ objlang.get('text_no') }}*/
/* 															{% else %}*/
/* 																<input type="radio" name="product_get_image_image" value="0" checked="checked" />*/
/* 																{{ objlang.get('text_no') }}*/
/* 															{% endif %}*/
/* 														</label>*/
/* 													</div>*/
/* 												</div>*/
/* 											</div>*/
/* 											<div class="form-group">*/
/* 												<label class="col-sm-3 control-label" for="input-width">*/
/* 													<b style="font-weight:bold; color:#f00">*</b> <span data-toggle="tooltip" title="{{ objlang.get('entry_width_desc') }}">{{ objlang.get('entry_width') }}</span>*/
/* 												</label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<input type="text" name="width" value="{{ module.width }}" id="input-width" class="form-control" />*/
/* 													</div>*/
/* 													{% if error.width is defined %}*/
/* 													<div class="text-danger col-sm-12">{{ error.width }}</div>*/
/* 													{% endif %}*/
/* 												</div>*/
/* 											</div>*/
/* 											<div class="form-group">*/
/* 												<label class="col-sm-3 control-label" for="input-height"> <b style="font-weight:bold; color:#f00">*</b> <span data-toggle="tooltip" title="{{ objlang.get('entry_height_desc') }}">{{ objlang.get('entry_height') }}</span></label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<input type="text" name="height" value="{{ module.height }}" id="input-height" class="form-control" />*/
/* 													</div>*/
/* 													{% if error.height is defined %}*/
/* 													<div class="text-danger col-sm-12">{{ error.height }}</div>*/
/* 													{% endif %}*/
/* 												</div>*/
/* 											</div>*/
/* 											<div class="form-group">*/
/* 												<label class="col-sm-3 control-label" for="input-product_placeholder_path"> <b style="font-weight:bold; color:#f00">*</b> <span data-toggle="tooltip" title="{{ objlang.get('entry_product_placeholder_path_desc') }}">{{ objlang.get('entry_product_placeholder_path') }}</span></label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<input type="text" name="product_placeholder_path" value="{{ module['product_placeholder_path'] }}" id="input-product_placeholder_path" class="form-control" />*/
/* 													</div>*/
/* 													{% if error.product_placeholder_path is defined %}*/
/* 													<div class="text-danger col-sm-12">{{ error.product_placeholder_path }}</div>*/
/* 													{% endif %}*/
/* 												</div>*/
/* 											</div>*/
/* 											<div class="form-group">*/
/* 												<label class="col-sm-3 control-label" for="input-display_banner_image"> <span data-toggle="tooltip" title="{{ objlang.get('entry_display_banner_image_desc') }}">{{ objlang.get('entry_display_banner_image') }}</span></label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<label class="radio-inline">*/
/* 															{% if module.display_banner_image %}*/
/* 																<input type="radio" name="display_banner_image" value="1" checked="checked" />*/
/* 																{{ objlang.get('text_yes') }}*/
/* 															{% else %}*/
/* 																<input type="radio" name="display_banner_image" value="1" />*/
/* 																{{ objlang.get('text_yes') }}*/
/* 															{% endif %}*/
/* 														</label>*/
/* 														<label class="radio-inline">*/
/* 															{% if module.display_banner_image %}*/
/* 																<input type="radio" name="display_banner_image" value="0" />*/
/* 																{{ objlang.get('text_no') }}*/
/* 															{% else %}*/
/* 																<input type="radio" name="display_banner_image" value="0" checked="checked" />*/
/* 																{{ objlang.get('text_no') }}*/
/* 															{% endif %}*/
/* 														</label>*/
/* 													</div>*/
/* 												</div>*/
/* 											</div>*/
/* 											<div class="form-group banner-image">*/
/* 												<label class="col-sm-3 control-label" for="input-slide_title"><span data-toggle="tooltip" title="{{ objlang.get('entry_banner_image_desc') }}">{{ objlang.get('entry_banner_image') }} </span></label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<a href="" id="thumb-image" data-toggle="image" class="img-thumbnail"><img src="{{ module.thumb }}" alt="" title="" data-placeholder="{{ module.thumb_default }}" /></a>*/
/* 														<input type="hidden" name="banner_image" value="{{ module.banner_image is defined ? module.banner_image : '' }}" id="input-image" />*/
/* 														{% if error.banner_image is defined %}*/
/* 														<div class="text-danger col-sm-12">{{ error.banner_image }}</div>*/
/* 														{% endif %}*/
/* 													</div>*/
/* 												</div>*/
/* 											</div>*/
/* 											<div class="form-group banner-image">*/
/* 												<label class="col-sm-3 control-label" for="input-width">*/
/* 													<b style="font-weight:bold; color:#f00">*</b> <span data-toggle="tooltip" title="{{ objlang.get('entry_banner_width_desc') }}">{{ objlang.get('entry_banner_width') }}</span>*/
/* 												</label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<input type="text" name="banner_width" value="{{ module.banner_width }}" id="input-banner_width" class="form-control" />*/
/* 													</div>*/
/* 													{% if error.banner_width is defined %}*/
/* 													<div class="text-danger col-sm-12">{{ error.banner_width }}</div>*/
/* 													{% endif %}*/
/* 												</div>*/
/* 											</div>*/
/* 											<div class="form-group banner-image">*/
/* 												<label class="col-sm-3 control-label" for="input-banner_height"> <b style="font-weight:bold; color:#f00">*</b> <span data-toggle="tooltip" title="{{ objlang.get('entry_banner_height_desc') }}">{{ objlang.get('entry_banner_height') }}</span></label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<input type="text" name="banner_height" value="{{ module.banner_height }}" id="input-banner_height" class="form-control" />*/
/* 													</div>*/
/* 													{% if error.banner_height is defined %}*/
/* 													<div class="text-danger col-sm-12">{{ error.banner_height }}</div>*/
/* 													{% endif %}*/
/* 												</div>*/
/* 											</div>*/
/* 											<div class="form-group banner-image">*/
/* 												<label class="col-sm-3 control-label" for="input-link"> <span data-toggle="tooltip" title="{{ objlang.get('entry_banner_image_url_desc') }}">{{ objlang.get('entry_banner_image_url') }} </span> </label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<input type="text" name="banner_image_url" value="{{ module.banner_image_url is defined ? module.banner_image_url : '' }}" id="input-link" class="form-control" />*/
/* 													</div>*/
/* 												</div>*/
/* 											</div>*/
/* 										</div>*/
/* 						*/
/* 										<div class="tab-pane" id="effect_option">*/
/* 											<label class="col-sm-12"><u style="color:#4e9e41">{{ objlang.get('entry_for_type_show_load_more') }}</u></label>*/
/* 											<div class="form-group">*/
/* 												<label class="col-sm-3 control-label" for="input-effect">*/
/* 													<span data-toggle="tooltip" title="{{ objlang.get('entry_effect_desc') }}">{{ objlang.get('entry_effect') }}</span>*/
/* 												</label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<select name="effect" id="input-effect" class="form-control">*/
/* 															{% for option_id, option_value in effects %}*/
/* 																{% set selected = option_id == module.effect ? 'selected' : '' %}*/
/* 																<option value="{{ option_id }}" {{ selected }}>{{ option_value }}</option>*/
/* 															{% endfor %}*/
/* 														</select>*/
/* 													</div>*/
/* 												</div>*/
/* 											</div>*/
/* 											<div class="form-group">*/
/* 												<label class="col-sm-3 control-label" for="input-duration">*/
/* 													<b style="font-weight:bold; color:#f00">*</b> <span data-toggle="tooltip" title="{{ objlang.get('entry_duration_desc') }}">{{ objlang.get('entry_duration') }}</span>*/
/* 												</label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<input type="text" name="duration" value="{{ module.duration }}" id="input-duration" class="form-control" />*/
/* 													</div>*/
/* 													{% if error.duration is defined %}*/
/* 													<div class="text-danger col-sm-12">{{ error.duration }}</div>*/
/* 													{% endif %}*/
/* 												</div>*/
/* 											</div>*/
/* 											<div class="form-group">*/
/* 												<label class="col-sm-3 control-label" for="input-delay">*/
/* 													<b style="font-weight:bold; color:#f00">*</b> <span data-toggle="tooltip" title="{{ objlang.get('entry_delay_desc') }}">{{ objlang.get('entry_delay') }}</span>*/
/* 												</label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<input type="text" name="delay" value="{{ module.delay }}" id="input-delay" class="form-control" />*/
/* 													</div>*/
/* 													{% if error.delay is defined %}*/
/* 													<div class="text-danger col-sm-12">{{ error.delay }}</div>*/
/* 													{% endif %}*/
/* 												</div>*/
/* 											</div>*/
/* 											<label class="col-sm-12"><u style="color:#4e9e41">{{ objlang.get('entry_for_type_show_slider') }}</u></label>*/
/* 											<div class="form-group">*/
/* 												<label class="col-sm-3 control-label" for="input-autoplay">*/
/* 													<span data-toggle="tooltip" title="{{ objlang.get('entry_autoplay_desc') }}">{{ objlang.get('entry_autoplay') }}</span>*/
/* 												</label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<select name="autoplay" id="input-autoplay" class="form-control">*/
/* 															{% if module.autoplay %}*/
/* 																<option value="1" selected="selected">{{ objlang.get('text_yes') }}</option>*/
/* 																<option value="0">{{ objlang.get('text_no') }}</option>*/
/* 															{% else %}*/
/* 																<option value="1">{{ objlang.get('text_yes') }}</option>*/
/* 																<option value="0" selected="selected">{{ objlang.get('text_no') }}</option>*/
/* 															{% endif %}*/
/* 														</select>*/
/* 													</div>*/
/* 												</div>*/
/* 											</div>*/
/* 											<div class="form-group">*/
/* 												<label class="col-sm-3 control-label" for="input-display_nav">*/
/* 													<span data-toggle="tooltip" title="{{ objlang.get('entry_display_nav_desc') }}">{{ objlang.get('entry_display_nav') }}</span>*/
/* 												</label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<select name="display_nav" id="input-display_nav" class="form-control">*/
/* 															{% if module.display_nav %}*/
/* 																<option value="1" selected="selected">{{ objlang.get('text_yes') }}</option>*/
/* 																<option value="0">{{ objlang.get('text_no') }}</option>*/
/* 															{% else %}*/
/* 																<option value="1">{{ objlang.get('text_yes') }}</option>*/
/* 																<option value="0" selected="selected">{{ objlang.get('text_no') }}</option>*/
/* 															{% endif %}*/
/* 														</select>*/
/* 													</div>*/
/* 												</div>*/
/* 											</div>*/
/* 											<div class="form-group">*/
/* 												<label class="col-sm-3 control-label" for="input-display_loop">*/
/* 													<span data-toggle="tooltip" title="{{ objlang.get('entry_display_loop_desc') }}">{{ objlang.get('entry_display_loop') }}</span>*/
/* 												</label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<select name="display_loop" id="input-display_loop" class="form-control">*/
/* 															{% if module.display_loop %}*/
/* 																<option value="1" selected="selected">{{ objlang.get('text_yes') }}</option>*/
/* 																<option value="0">{{ objlang.get('text_no') }}</option>*/
/* 															{% else %}*/
/* 																<option value="1">{{ objlang.get('text_yes') }}</option>*/
/* 																<option value="0" selected="selected">{{ objlang.get('text_no') }}</option>*/
/* 															{% endif %}*/
/* 														</select>*/
/* 													</div>*/
/* 												</div>*/
/* 											</div>*/
/* 											<div class="form-group">*/
/* 												<label class="col-sm-3 control-label" for="input-touchdrag">*/
/* 													<span data-toggle="tooltip" title="{{ objlang.get('entry_touchdrag_desc') }}">{{ objlang.get('entry_touchdrag') }}</span>*/
/* 												</label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<select name="touchdrag" id="input-touchdrag" class="form-control">*/
/* 															{% if module.touchdrag %}*/
/* 																<option value="1" selected="selected">{{ objlang.get('text_yes') }}</option>*/
/* 																<option value="0">{{ objlang.get('text_no') }}</option>*/
/* 															{% else %}*/
/* 																<option value="1">{{ objlang.get('text_yes') }}</option>*/
/* 																<option value="0" selected="selected">{{ objlang.get('text_no') }}</option>*/
/* 															{% endif %}*/
/* 														</select>*/
/* 													</div>*/
/* 												</div>*/
/* 											</div>*/
/* 											<div class="form-group">*/
/* 												<label class="col-sm-3 control-label" for="input-mousedrag">*/
/* 													<span data-toggle="tooltip" title="{{ objlang.get('entry_mousedrag_desc') }}">{{ objlang.get('entry_mousedrag') }}</span>*/
/* 												</label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<select name="mousedrag" id="input-mousedrag" class="form-control">*/
/* 															{% if module.mousedrag %}*/
/* 																<option value="1" selected="selected">{{ objlang.get('text_yes') }}</option>*/
/* 																<option value="0">{{ objlang.get('text_no') }}</option>*/
/* 															{% else %}*/
/* 																<option value="1">{{ objlang.get('text_yes') }}</option>*/
/* 																<option value="0" selected="selected">{{ objlang.get('text_no') }}</option>*/
/* 															{% endif %}*/
/* 														</select>*/
/* 													</div>*/
/* 												</div>*/
/* 											</div>*/
/* 											<div class="form-group">*/
/* 												<label class="col-sm-3 control-label" for="input-pausehover">*/
/* 													<span data-toggle="tooltip" title="{{ objlang.get('entry_pausehover_desc') }}">{{ objlang.get('entry_pausehover') }}</span>*/
/* 												</label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<select name="pausehover" id="input-pausehover" class="form-control">*/
/* 															{% if module.pausehover %}*/
/* 																<option value="1" selected="selected">{{ objlang.get('text_yes') }}</option>*/
/* 																<option value="0">{{ objlang.get('text_no') }}</option>*/
/* 															{% else %}*/
/* 																<option value="1">{{ objlang.get('text_yes') }}</option>*/
/* 																<option value="0" selected="selected">{{ objlang.get('text_no') }}</option>*/
/* 															{% endif %}*/
/* 														</select>*/
/* 													</div>*/
/* 												</div>*/
/* 											</div>*/
/* 											<div class="form-group">*/
/* 												<label class="col-sm-3 control-label" for="input-autoplayTimeout">*/
/* 													<b style="font-weight:bold; color:#f00">*</b> <span data-toggle="tooltip" title="{{ objlang.get('entry_autoplayTimeout_desc') }}">{{ objlang.get('entry_autoplayTimeout') }}</span>*/
/* 												</label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<input type="text" name="autoplayTimeout" value="{{ module.autoplayTimeout }}" id="input-autoplayTimeout" class="form-control" />*/
/* 													</div>*/
/* 													{% if error.autoplayTimeout is defined %}*/
/* 													<div class="text-danger col-sm-12">{{ error.autoplayTimeout }}</div>*/
/* 													{% endif %}*/
/* 												</div>*/
/* 											</div>*/
/* 											<div class="form-group">*/
/* 												<label class="col-sm-3 control-label" for="input-autoplaySpeed">*/
/* 													<b style="font-weight:bold; color:#f00">*</b> <span data-toggle="tooltip" title="{{ objlang.get('entry_autoplaySpeed_desc') }}">{{ objlang.get('entry_autoplaySpeed') }}</span>*/
/* 												</label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<input type="text" name="autoplaySpeed" value="{{ module.autoplaySpeed }}" id="input-autoplaySpeed" class="form-control" />*/
/* 													</div>*/
/* 													{% if error.autoplaySpeed is defined %}*/
/* 													<div class="text-danger col-sm-12">{{ error.autoplaySpeed }}</div>*/
/* 													{% endif %}*/
/* 												</div>*/
/* 											</div>*/
/* 										</div>*/
/* 						*/
/* 										<div class="tab-pane" id="advanced_option">*/
/* 											<div class="form-group">*/
/* 												<label class="col-sm-3 control-label" for="input-pre_text"> <span data-toggle="tooltip" title="{{ objlang.get('entry_pre_text_desc') }}">{{ objlang.get('entry_pre_text') }}</span></label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<textarea name="pre_text" id="input-pre_text" class="form-control">{{ module.pre_text }}</textarea>*/
/* 													</div>*/
/* 												</div>*/
/* 											</div>*/
/* 											<div class="form-group">*/
/* 												<label class="col-sm-3 control-label" for="input-post_text"> <span data-toggle="tooltip" title="{{ objlang.get('entry_post_text_desc') }}">{{ objlang.get('entry_post_text') }}</span></label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<textarea name="post_text" id="input-post_text" class="form-control">{{ module.post_text }}</textarea>*/
/* 													</div>*/
/* 												</div>*/
/* 											</div>*/
/* 											<div class="form-group">*/
/* 												<label class="col-sm-3 control-label" for="input-use_cache">*/
/* 													<span data-toggle="tooltip" title="{{ objlang.get('entry_use_cache_desc') }}">{{ objlang.get('entry_use_cache') }}</span>*/
/* 												</label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<label class="radio-inline">*/
/* 															{% if module.use_cache %}*/
/* 																<input type="radio" name="use_cache" value="1" checked="checked" />*/
/* 																{{ objlang.get('text_yes') }}*/
/* 															{% else %}*/
/* 																<input type="radio" name="use_cache" value="1" />*/
/* 																{{ objlang.get('text_yes') }}*/
/* 															{% endif %}*/
/* 														</label>*/
/* 														<label class="radio-inline">*/
/* 															{% if module.use_cache %}*/
/* 																<input type="radio" name="use_cache" value="0" />*/
/* 																{{ objlang.get('text_no') }}*/
/* 															{% else %}*/
/* 																<input type="radio" name="use_cache" value="0" checked="checked" />*/
/* 																{{ objlang.get('text_no') }}*/
/* 															{% endif %}*/
/* 														</label>*/
/* 													</div>*/
/* 												</div>*/
/* 											</div>*/
/* 											<div class="form-group" id="input-cache_time_form">*/
/* 												<label class="col-sm-3 control-label" for="input-cache_time">*/
/* 													<span data-toggle="tooltip" title="{{ objlang.get('entry_cache_time_desc') }}">{{ objlang.get('entry_cache_time') }}</span>*/
/* 												</label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<input type="text" name="cache_time" value="{{ module.cache_time }}" id="input-cache_time" class="form-control" />*/
/* 													</div>*/
/* 													{% if error.cache_time is defined %}*/
/* 													<div class="text-danger col-sm-12">{{ error.cache_time }}</div>*/
/* 													{% endif %}*/
/* 												</div>*/
/* 											</div>*/
/* 										</div>*/
/* 									</div>*/
/* 								</div>*/
/* 								{% set module_row = module_row + 1 %}*/
/* 							{% endfor %}*/
/* 						</div>*/
/* 					</div>*/
/*         		</form>*/
/*         	</div>*/
/*     	</div>	*/
/*   	</div>*/
/* 	<script type="text/javascript"><!--*/
/* 		$('input[name=\'category\']').autocomplete({*/
/* 			source: function(request, response) {*/
/* 				$.ajax({*/
/* 					url: 'index.php?route=extension/module/so_listing_tabs/autocomplete_category&user_token={{ user_token }}&filter_name=' +  encodeURIComponent(request),*/
/* 					dataType: 'json',*/
/* 					success: function(json) {*/
/* 						response($.map(json, function(item) {*/
/* 							return {*/
/* 								label: item['name'],*/
/* 								value: item['category_id']*/
/* 							}*/
/* 						}));*/
/* 					}*/
/* 				});*/
/* 			},*/
/* 			select: function(item) {*/
/* 				$('input[name=\'category\']').val('');*/
/* 				*/
/* 				$('#featured-category' + item['value']).remove();*/
/* 				*/
/* 				$('#featured-category').append('<div id="featured-category' + item['value'] + '"><i class="fa fa-minus-circle"></i> ' + item['label'] + '<input type="hidden" name="category[]" value="' + item['value'] + '" /></div>');*/
/* 				*/
/* 				$('#catid_preload' + item['value']).remove();*/
/* 				$('#input-catid_preload').append('<option value="'+item['value']+'" id="catid_preload' + item['value'] + '">' + item['label'] + '</option>');*/
/* 			}*/
/* 		});*/
/* 		*/
/* 		$('#featured-category').delegate('.fa-minus-circle', 'click', function() {*/
/* 			$(this).parent().remove();*/
/* 			var id_par = $(this).parent().attr('id').substr(17);*/
/* 			*/
/* 			$("#input-catid_preload option[value='"+id_par+"']").each(function() {*/
/* 				$(this).remove();*/
/* 			});*/
/* 		});*/
/* */
/* 		$('input[name=\'field_product_tab\']').autocomplete({*/
/* 			source: function(request, response) {*/
/* 				$.ajax({*/
/* 					url: 'index.php?route=extension/module/so_listing_tabs/autocomplete&user_token={{ user_token }}&filter_name=' +  encodeURIComponent(request),*/
/* 					dataType: 'json',*/
/* 					success: function(json) {*/
/* 						response($.map(json, function(item) {*/
/* 							return {*/
/* 								label: item['name'],*/
/* 								value: item['product_id']*/
/* 							}*/
/* 						}));*/
/* 					}*/
/* 				});*/
/* 			},*/
/* 			select: function(item) {*/
/* 				$('input[name=\'field_product_tab\']').val('');*/
/* 				*/
/* 				$('#featured-field_product_tab' + item['value']).remove();*/
/* 				*/
/* 				$('#featured-field_product_tab').append('<div id="featured-field_product_tab' + item['value'] + '"><i class="fa fa-minus-circle"></i> ' + item['label'] + '<input type="hidden" name="field_product_tab[]" value="' + item['value'] + '" /></div>');*/
/* 				*/
/* 				$('#field_product' + item['value']).remove();*/
/* 				$('#input-field_preload').append('<option value="'+item['value']+'" id="field_product' + item['value'] + '">' + item['label'] + '</option>');*/
/* 			}*/
/* 		});*/
/* 		*/
/* 		$('#featured-field_product_tab').delegate('.fa-minus-circle', 'click', function() {*/
/* 			$(this).parent().remove();*/
/* 			var id_par = $(this).parent().attr('id').substr(26);*/
/* 			$("#input-field_preload option[value='"+id_par+"']").each(function() {*/
/* 				$(this).remove();*/
/* 			});*/
/* 		});*/
/* //--></script>*/
/* 	<script type="text/javascript"><!--*/
/* 		$('#so_module a:first').tab('show');*/
/* 		if($("input[name='child_category']:radio:checked").val() == '0')*/
/* 		{*/
/* 			$('#input-category_depth_form').hide();*/
/* 		}else*/
/* 		{*/
/* 			$('#input-category_depth_form').show();*/
/* 		}*/
/* */
/* 		$("input[name='child_category']").change(function(){*/
/* 			val = $(this).val();*/
/* 			if(val ==0)*/
/* 			{*/
/* 				$('#input-category_depth_form').hide();*/
/* 			}else*/
/* 			{*/
/* 				$('#input-category_depth_form').show();*/
/* 			}*/
/* 		});*/
/* */
/* 		if($("input[name='use_cache']:radio:checked").val() == '0')*/
/* 		{*/
/* 			$('#input-cache_time_form').hide();*/
/* 		}else*/
/* 		{*/
/* 			$('#input-cache_time_form').show();*/
/* 		}*/
/* */
/* 		$("input[name='use_cache']").change(function(){*/
/* 			val = $(this).val();*/
/* 			if(val ==0)*/
/* 			{*/
/* 				$('#input-cache_time_form').hide();*/
/* 			}else*/
/* 			{*/
/* 				$('#input-cache_time_form').show();*/
/* 			}*/
/* 		});*/
/* */
/* 		if($("input[name='type_source']:radio:checked").val() == '0')*/
/* 		{*/
/* 			$('.field_product_tab').hide();*/
/* 			$('#category_preload').show();*/
/* 			$('.input-product_order_form').show();*/
/* 		}else*/
/* 		{*/
/* 			$('.field_product_tab').show();*/
/* 			$('#category_preload').hide();*/
/* 			$('.input-product_order_form').hide();*/
/* 		}*/
/* */
/* 		$("input[name='type_source']").change(function(){*/
/* 			val = $(this).val();*/
/* 			if(val ==0)*/
/* 			{*/
/* 				$('.field_product_tab').hide();*/
/* 				$('#category_preload').show();*/
/* 				$('.input-product_order_form').show();*/
/* 			}else*/
/* 			{*/
/* 				$('.field_product_tab').show();*/
/* 				$('#category_preload').hide();*/
/* 				$('.input-product_order_form').hide();*/
/* 			}*/
/* 		});*/
/* 	*/
/* 		$('#input-type_show').change(function(){*/
/* 			var that = $(this), opt_select = $('option:selected', that).val() ;*/
/* 			console.log(opt_select);*/
/* 			if (opt_select == 'loadmore'){*/
/* 				$('#input-nb_rows').val(1);*/
/* 				$('.type_show_loadmore').addClass('hide');*/
/* 			}else{*/
/* 				$('.type_show_loadmore').removeClass('hide');*/
/* 			}*/
/* 		});*/
/* 	*/
/* 		$("input[name='display_banner_image']").change(function(){*/
/* 			val = $(this).val();*/
/* 			if(val ==0)*/
/* 			{*/
/* 				$('.banner-image').hide();*/
/* 				*/
/* 			}else*/
/* 			{*/
/* 				$('.banner-image').show();*/
/* 			}*/
/* 		});*/
/* */
/* 		if($("input[name='display_banner_image']:radio:checked").val() == '0')*/
/* 		{*/
/* 			$('.banner-image').hide();*/
/* 		}else*/
/* 		{*/
/* 			$('.banner-image').show();*/
/* 		}*/
/* 	*/
/* 		$('#language').change(function(){*/
/* 			var that = $(this), opt_select = $('option:selected', that).val() , _input = $('#input-head-name-'+opt_select);*/
/* 			$('[id^="input-head-name-"]').addClass('hide');*/
/* 			_input.removeClass('hide');*/
/* 		});*/
/* 	*/
/* 		$('.first-name').change(function(){*/
/* 			$('input[name="head_name"]').val($(this).val());*/
/* 		});*/
/* */
/* */
/* 		$("input[name='tab_all_display']").change(function(){*/
/* 			if($(this).val() == 1)*/
/* 			{*/
/* 				$('#input-catid_preload').append('<option value=*>All Product</option>');*/
/* 			}else{*/
/* 				$("#input-catid_preload option[value='*']").each(function() {*/
/* 					$(this).remove();*/
/* 				});*/
/* 			}*/
/* 		});*/
/* 	*/
/* 		if($("input[name='display_new']:radio:checked").val() == '0')*/
/* 		{*/
/* 			$('#input-date_day_form').hide();*/
/* 		}else*/
/* 		{*/
/* 			$('#input-date_day_form').show();*/
/* 		}*/
/* */
/* 		$("input[name='display_new']").change(function(){*/
/* 			val = $(this).val();*/
/* 			if(val ==0)*/
/* 			{*/
/* 				$('#input-date_day_form').hide();*/
/* 			}else*/
/* 			{*/
/* 				$('#input-date_day_form').show();*/
/* 			}*/
/* 		});*/
/* //--></script>*/
/* 	<script type="text/javascript">*/
/* 		jQuery(document).ready(function ($) {*/
/* 			var button = '<div class="remove-caching" style="margin-left: 15px"><button type="button" onclick="remove_cache()" title="{{ objlang.get('entry_button_clear_cache') }}" class="btn btn-danger"><i class="fa fa-remove"></i> {{ objlang.get('entry_button_clear_cache') }}</button></div>';*/
/* 			var button_min = '<div class="remove-caching" style="margin-left: 7px"><button type="button" onclick="remove_cache()" title="{{ objlang.get('entry_button_clear_cache') }}" class="btn btn-danger"><i class="fa fa-remove"></i> </button></div>';*/
/* 			if($('#column-left').hasClass('active')){*/
/* 				$('#column-left #stats').after(button);*/
/* 			}else{*/
/* 				$('#column-left #stats').after(button_min);*/
/* 			}*/
/* 			$('#button-menu').click(function(){*/
/* 				$('.remove-caching').remove();*/
/* 				if($(this).parents().find('#column-left').hasClass('active')){*/
/* 					$('#column-left #stats').after(button);*/
/* 				}else{*/
/* 					$('#column-left #stats').after(button_min);*/
/* 				}*/
/* 			});*/
/* 		});*/
/* 		function remove_cache(){*/
/* 			var success_remove = '{{ success_remove }}';*/
/* 			$.ajax({*/
/* 				type: 'POST',*/
/* 				url: '{{ linkremove }}',*/
/* 				data: {	is_ajax_cache_lite: 1},*/
/* 				success: function () {*/
/* 					var html = '<div class="alert alert-success cls-remove-cache"> '+success_remove+' <button type="button" class="close" data-dismiss="alert">&times;</button></div>';*/
/* 					if(!($('.page-header .container-fluid .alert-success')).hasClass('cls-remove-cache')){*/
/* 						$('.page-header .container-fluid').append(html);*/
/* 					}*/
/* 				},*/
/* 			});*/
/* 		}*/
/* 	</script>*/
/* </div>*/
/* {{ footer }}*/
