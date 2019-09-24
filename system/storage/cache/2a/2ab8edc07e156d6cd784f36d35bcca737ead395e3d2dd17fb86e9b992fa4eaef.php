<?php

/* so-oneshop/template/common/cart.twig */
class __TwigTemplate_e3ee5594975921f03bf16c883d7b34f51e122c739972025e660b7193d447fc69 extends Twig_Template
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
        echo "<div id=\"cart\" class=\"btn-shopping-cart\">
  
  <a data-loading-text=\"";
        // line 3
        echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
        echo " \" class=\"btn-group top_cart dropdown-toggle\" data-toggle=\"dropdown\">
    <div class=\"shopcart\">
      <span class=\"icon-c\"></span>
      <div class=\"shopcart-inner\">
        <p class=\"text-shopping-cart\">
         ";
        // line 8
        echo (isset($context["text_shop_cart"]) ? $context["text_shop_cart"] : null);
        echo "
        </p>
        <span class=\"total-shopping-cart cart-total-full\">
           ";
        // line 11
        echo (isset($context["text_items"]) ? $context["text_items"] : null);
        echo "
        </span>
      </div>
    </div>
  </a>
  
  <ul class=\"dropdown-menu pull-right shoppingcart-box\">
    ";
        // line 18
        if (((isset($context["products"]) ? $context["products"] : null) || (isset($context["vouchers"]) ? $context["vouchers"] : null))) {
            // line 19
            echo "    <li class=\"content-item\">
      <table class=\"table table-striped\" style=\"margin-bottom:10px;\">
        ";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 22
                echo "        <tr>
          <td class=\"text-center size-img-cart\">";
                // line 23
                if ($this->getAttribute($context["product"], "thumb", array())) {
                    echo " <a href=\"";
                    echo $this->getAttribute($context["product"], "href", array());
                    echo "\"><img src=\"";
                    echo $this->getAttribute($context["product"], "thumb", array());
                    echo "\" alt=\"";
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "\" title=\"";
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "\" class=\"img-thumbnail\" /></a> ";
                }
                echo "</td>
          <td class=\"text-left\"><a href=\"";
                // line 24
                echo $this->getAttribute($context["product"], "href", array());
                echo "\">";
                echo $this->getAttribute($context["product"], "name", array());
                echo "</a> ";
                if ($this->getAttribute($context["product"], "option", array())) {
                    // line 25
                    echo "            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["product"], "option", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                        echo " <br />
            - <small>";
                        // line 26
                        echo $this->getAttribute($context["option"], "name", array());
                        echo " ";
                        echo $this->getAttribute($context["option"], "value", array());
                        echo "</small> ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 27
                    echo "            ";
                }
                // line 28
                echo "            ";
                if ($this->getAttribute($context["product"], "recurring", array())) {
                    echo " <br />
            - <small>";
                    // line 29
                    echo (isset($context["text_recurring"]) ? $context["text_recurring"] : null);
                    echo " ";
                    echo $this->getAttribute($context["product"], "recurring", array());
                    echo "</small> ";
                }
                echo "</td>
          <td class=\"text-right\">x ";
                // line 30
                echo $this->getAttribute($context["product"], "quantity", array());
                echo "</td>
          <td class=\"text-right\">";
                // line 31
                echo $this->getAttribute($context["product"], "total", array());
                echo "</td>
          <td class=\"text-center\"><button type=\"button\" onclick=\"cart.remove('";
                // line 32
                echo $this->getAttribute($context["product"], "cart_id", array());
                echo "');\" title=\"";
                echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
                echo "\" class=\"btn btn-danger btn-xs\"><i class=\"fa fa-trash-o\"></i></button></td>
        </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["vouchers"]) ? $context["vouchers"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
                // line 36
                echo "        <tr>
          <td class=\"text-center\"></td>
          <td class=\"text-left\">";
                // line 38
                echo $this->getAttribute($context["voucher"], "description", array());
                echo "</td>
          <td class=\"text-right\">x&nbsp;1</td>
          <td class=\"text-right\">";
                // line 40
                echo $this->getAttribute($context["voucher"], "amount", array());
                echo "</td>
          <td class=\"text-center text-danger\"><button type=\"button\" onclick=\"voucher.remove('";
                // line 41
                echo $this->getAttribute($context["voucher"], "key", array());
                echo "');\" title=\"";
                echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
                echo "\" class=\"btn btn-danger btn-xs\"><i class=\"fa fa-times\"></i></button></td>
        </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "      </table>
    </li>
  
\t<li>
\t\t<div class=\"checkout clearfix\">
\t\t<a href=\"";
            // line 49
            echo (isset($context["cart"]) ? $context["cart"] : null);
            echo "\" class=\"btn btn-view-cart inverse\"> ";
            echo (isset($context["text_cart"]) ? $context["text_cart"] : null);
            echo "</a>
\t\t<a href=\"";
            // line 50
            echo (isset($context["checkout"]) ? $context["checkout"] : null);
            echo "\" class=\"btn btn-checkout pull-right\">";
            echo (isset($context["text_checkout"]) ? $context["text_checkout"] : null);
            echo "</a>
\t\t</div>
\t</li>
    ";
        } else {
            // line 54
            echo "    <li>
      <p class=\"text-center empty\">";
            // line 55
            echo (isset($context["text_empty"]) ? $context["text_empty"] : null);
            echo "</p>
    </li>
    ";
        }
        // line 58
        echo "  </ul>
</div>
";
    }

    public function getTemplateName()
    {
        return "so-oneshop/template/common/cart.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 58,  185 => 55,  182 => 54,  173 => 50,  167 => 49,  160 => 44,  149 => 41,  145 => 40,  140 => 38,  136 => 36,  131 => 35,  120 => 32,  116 => 31,  112 => 30,  104 => 29,  99 => 28,  96 => 27,  87 => 26,  80 => 25,  74 => 24,  60 => 23,  57 => 22,  53 => 21,  49 => 19,  47 => 18,  37 => 11,  31 => 8,  23 => 3,  19 => 1,);
    }
}
/* <div id="cart" class="btn-shopping-cart">*/
/*   */
/*   <a data-loading-text="{{ text_loading }} " class="btn-group top_cart dropdown-toggle" data-toggle="dropdown">*/
/*     <div class="shopcart">*/
/*       <span class="icon-c"></span>*/
/*       <div class="shopcart-inner">*/
/*         <p class="text-shopping-cart">*/
/*          {{ text_shop_cart}}*/
/*         </p>*/
/*         <span class="total-shopping-cart cart-total-full">*/
/*            {{text_items}}*/
/*         </span>*/
/*       </div>*/
/*     </div>*/
/*   </a>*/
/*   */
/*   <ul class="dropdown-menu pull-right shoppingcart-box">*/
/*     {% if products or vouchers %}*/
/*     <li class="content-item">*/
/*       <table class="table table-striped" style="margin-bottom:10px;">*/
/*         {% for product in products %}*/
/*         <tr>*/
/*           <td class="text-center size-img-cart">{% if product.thumb %} <a href="{{ product.href }}"><img src="{{ product.thumb }}" alt="{{ product.name }}" title="{{ product.name }}" class="img-thumbnail" /></a> {% endif %}</td>*/
/*           <td class="text-left"><a href="{{ product.href }}">{{ product.name }}</a> {% if product.option %}*/
/*             {% for option in product.option %} <br />*/
/*             - <small>{{ option.name }} {{ option.value }}</small> {% endfor %}*/
/*             {% endif %}*/
/*             {% if product.recurring %} <br />*/
/*             - <small>{{ text_recurring }} {{ product.recurring }}</small> {% endif %}</td>*/
/*           <td class="text-right">x {{ product.quantity }}</td>*/
/*           <td class="text-right">{{ product.total }}</td>*/
/*           <td class="text-center"><button type="button" onclick="cart.remove('{{ product.cart_id }}');" title="{{ button_remove }}" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i></button></td>*/
/*         </tr>*/
/*         {% endfor %}*/
/*         {% for voucher in vouchers %}*/
/*         <tr>*/
/*           <td class="text-center"></td>*/
/*           <td class="text-left">{{ voucher.description }}</td>*/
/*           <td class="text-right">x&nbsp;1</td>*/
/*           <td class="text-right">{{ voucher.amount }}</td>*/
/*           <td class="text-center text-danger"><button type="button" onclick="voucher.remove('{{ voucher.key }}');" title="{{ button_remove }}" class="btn btn-danger btn-xs"><i class="fa fa-times"></i></button></td>*/
/*         </tr>*/
/*         {% endfor %}*/
/*       </table>*/
/*     </li>*/
/*   */
/* 	<li>*/
/* 		<div class="checkout clearfix">*/
/* 		<a href="{{ cart }}" class="btn btn-view-cart inverse"> {{ text_cart }}</a>*/
/* 		<a href="{{ checkout }}" class="btn btn-checkout pull-right">{{ text_checkout }}</a>*/
/* 		</div>*/
/* 	</li>*/
/*     {% else %}*/
/*     <li>*/
/*       <p class="text-center empty">{{ text_empty }}</p>*/
/*     </li>*/
/*     {% endif %}*/
/*   </ul>*/
/* </div>*/
/* */
