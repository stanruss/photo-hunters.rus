<?php

/* __string_template__5ce8b828b2718b06ad863f72d4e5fc05a2d2e2093ee604253a8694a05d5b961e */
class __TwigTemplate_d8c9663e5cedb6b8b6506720616828e1b31678a7faedb885cf5cb5ac5584010d extends Twig_Template
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
<div id=\"checkout-cart\" class=\"container\">
  
  ";
        // line 4
        if ((isset($context["attention"]) ? $context["attention"] : null)) {
            // line 5
            echo "  <div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
            echo (isset($context["attention"]) ? $context["attention"] : null);
            echo "
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
  </div>
  ";
        }
        // line 9
        echo "  ";
        if ((isset($context["success"]) ? $context["success"] : null)) {
            // line 10
            echo "  <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo (isset($context["success"]) ? $context["success"] : null);
            echo "
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
  </div>
  ";
        }
        // line 14
        echo "  ";
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 15
            echo "  <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
  </div>
  ";
        }
        // line 19
        echo "  <div class=\"row\">";
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
    ";
        // line 20
        if (((isset($context["column_left"]) ? $context["column_left"] : null) && (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 21
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 22
            echo "    ";
        } elseif (((isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 23
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 24
            echo "    ";
        } else {
            // line 25
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 26
            echo "    ";
        }
        // line 27
        echo "    <div id=\"content\" class=\"";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\">";
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo "
      <h1>";
        // line 28
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "
        ";
        // line 29
        if ((isset($context["weight"]) ? $context["weight"] : null)) {
            // line 30
            echo "        &nbsp;(";
            echo (isset($context["weight"]) ? $context["weight"] : null);
            echo ")
        ";
        }
        // line 31
        echo " </h1>
      <form action=\"";
        // line 32
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\">
        <div class=\"table-responsive\">
          <table class=\"table table-bordered\">
            <thead>
              <tr>
                <td class=\"text-center\">";
        // line 37
        echo (isset($context["column_image"]) ? $context["column_image"] : null);
        echo "</td>
                <td class=\"text-left\">";
        // line 38
        echo (isset($context["column_name"]) ? $context["column_name"] : null);
        echo "</td>
                <td class=\"text-left\">";
        // line 39
        echo (isset($context["column_model"]) ? $context["column_model"] : null);
        echo "</td>
                <td class=\"text-left\">";
        // line 40
        echo (isset($context["column_quantity"]) ? $context["column_quantity"] : null);
        echo "</td>
                <td class=\"text-right\">";
        // line 41
        echo (isset($context["column_price"]) ? $context["column_price"] : null);
        echo "</td>
                <td class=\"text-right\">";
        // line 42
        echo (isset($context["column_total"]) ? $context["column_total"] : null);
        echo "</td>
              </tr>
            </thead>
            <tbody>
            
            ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 48
            echo "            <tr>
              <td class=\"text-center\">";
            // line 49
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
            // line 50
            echo $this->getAttribute($context["product"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["product"], "name", array());
            echo "</a> ";
            if ( !$this->getAttribute($context["product"], "stock", array())) {
                echo " <span class=\"text-danger\">***</span> ";
            }
            // line 51
            echo "                ";
            if ($this->getAttribute($context["product"], "option", array())) {
                // line 52
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["product"], "option", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    echo " <br />
                <small>";
                    // line 53
                    echo $this->getAttribute($context["option"], "name", array());
                    echo ": ";
                    echo $this->getAttribute($context["option"], "value", array());
                    echo "</small> ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 54
                echo "                ";
            }
            // line 55
            echo "                ";
            if ($this->getAttribute($context["product"], "reward", array())) {
                echo " <br />
                <small>";
                // line 56
                echo $this->getAttribute($context["product"], "reward", array());
                echo "</small> ";
            }
            // line 57
            echo "                ";
            if ($this->getAttribute($context["product"], "recurring", array())) {
                echo " <br />
                <span class=\"label label-info\">";
                // line 58
                echo (isset($context["text_recurring_item"]) ? $context["text_recurring_item"] : null);
                echo "</span> <small>";
                echo $this->getAttribute($context["product"], "recurring", array());
                echo "</small> ";
            }
            echo "</td>
              <td class=\"text-left\">";
            // line 59
            echo $this->getAttribute($context["product"], "model", array());
            echo "</td>
              <td class=\"text-left\"><div class=\"input-group btn-block\" style=\"max-width: 200px;\">
                  <input type=\"text\" name=\"quantity[";
            // line 61
            echo $this->getAttribute($context["product"], "cart_id", array());
            echo "]\" value=\"";
            echo $this->getAttribute($context["product"], "quantity", array());
            echo "\" size=\"1\" class=\"form-control\" />
                  <span class=\"input-group-btn\">
                  <button type=\"submit\" data-toggle=\"tooltip\" title=\"";
            // line 63
            echo (isset($context["button_update"]) ? $context["button_update"] : null);
            echo "\" class=\"btn btn-primary\"><i class=\"fa fa-refresh\"></i></button>
                  <button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 64
            echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
            echo "\" class=\"btn btn-danger\" onclick=\"cart.remove('";
            echo $this->getAttribute($context["product"], "cart_id", array());
            echo "');\"><i class=\"fa fa-times-circle\"></i></button>
                  </span></div></td>
              <td class=\"text-right\">";
            // line 66
            echo $this->getAttribute($context["product"], "price", array());
            echo "</td>
              <td class=\"text-right\">";
            // line 67
            echo $this->getAttribute($context["product"], "total", array());
            echo "</td>
            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["vouchers"]) ? $context["vouchers"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
            // line 71
            echo "            <tr>
              <td></td>
              <td class=\"text-left\">";
            // line 73
            echo $this->getAttribute($context["voucher"], "description", array());
            echo "</td>
              <td class=\"text-left\"></td>
              <td class=\"text-left\"><div class=\"input-group btn-block\" style=\"max-width: 200px;\">
                  <input type=\"text\" name=\"\" value=\"1\" size=\"1\" disabled=\"disabled\" class=\"form-control\" />
                  <span class=\"input-group-btn\">
                  <button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 78
            echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
            echo "\" class=\"btn btn-danger\" onclick=\"voucher.remove('";
            echo $this->getAttribute($context["voucher"], "key", array());
            echo "');\"><i class=\"fa fa-times-circle\"></i></button>
                  </span></div></td>
              <td class=\"text-right\">";
            // line 80
            echo $this->getAttribute($context["voucher"], "amount", array());
            echo "</td>
              <td class=\"text-right\">";
            // line 81
            echo $this->getAttribute($context["voucher"], "amount", array());
            echo "</td>
            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        echo "              </tbody>
            
          </table>
        </div>
      </form>
      ";
        // line 89
        if ((isset($context["modules"]) ? $context["modules"] : null)) {
            // line 90
            echo "      <h2>";
            echo (isset($context["text_next"]) ? $context["text_next"] : null);
            echo "</h2>
      <p>";
            // line 91
            echo (isset($context["text_next_choice"]) ? $context["text_next_choice"] : null);
            echo "</p>
      <div class=\"panel-group\" id=\"accordion\"> ";
            // line 92
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["modules"]) ? $context["modules"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                // line 93
                echo "        ";
                echo $context["module"];
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 94
            echo " </div>
      ";
        }
        // line 95
        echo " <br />
      <div class=\"row\">
        <div class=\"col-sm-4 col-sm-offset-8\">
          <table class=\"table table-bordered\">
            ";
        // line 99
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["totals"]) ? $context["totals"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 100
            echo "            <tr>
              <td class=\"text-right\"><strong>";
            // line 101
            echo $this->getAttribute($context["total"], "title", array());
            echo ":</strong></td>
              <td class=\"text-right\">";
            // line 102
            echo $this->getAttribute($context["total"], "text", array());
            echo "</td>
            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 105
        echo "          </table>
        </div>
      </div>
      <div class=\"buttons clearfix\">
        
        <div class=\"pull-right\"><a href=\"";
        // line 110
        echo (isset($context["checkout"]) ? $context["checkout"] : null);
        echo "\" class=\"btn btn-primary\">";
        echo (isset($context["button_checkout"]) ? $context["button_checkout"] : null);
        echo "</a></div>
      </div>
      ";
        // line 112
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "</div>
    ";
        // line 113
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "</div>
</div>
";
        // line 115
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo " ";
    }

    public function getTemplateName()
    {
        return "__string_template__5ce8b828b2718b06ad863f72d4e5fc05a2d2e2093ee604253a8694a05d5b961e";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  370 => 115,  365 => 113,  361 => 112,  354 => 110,  347 => 105,  338 => 102,  334 => 101,  331 => 100,  327 => 99,  321 => 95,  317 => 94,  308 => 93,  304 => 92,  300 => 91,  295 => 90,  293 => 89,  286 => 84,  277 => 81,  273 => 80,  266 => 78,  258 => 73,  254 => 71,  249 => 70,  240 => 67,  236 => 66,  229 => 64,  225 => 63,  218 => 61,  213 => 59,  205 => 58,  200 => 57,  196 => 56,  191 => 55,  188 => 54,  179 => 53,  172 => 52,  169 => 51,  161 => 50,  147 => 49,  144 => 48,  140 => 47,  132 => 42,  128 => 41,  124 => 40,  120 => 39,  116 => 38,  112 => 37,  104 => 32,  101 => 31,  95 => 30,  93 => 29,  89 => 28,  82 => 27,  79 => 26,  76 => 25,  73 => 24,  70 => 23,  67 => 22,  64 => 21,  62 => 20,  57 => 19,  49 => 15,  46 => 14,  38 => 10,  35 => 9,  27 => 5,  25 => 4,  19 => 1,);
    }
}
/* {{ header }}*/
/* <div id="checkout-cart" class="container">*/
/*   */
/*   {% if attention %}*/
/*   <div class="alert alert-info"><i class="fa fa-info-circle"></i> {{ attention }}*/
/*     <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*   </div>*/
/*   {% endif %}*/
/*   {% if success %}*/
/*   <div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> {{ success }}*/
/*     <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*   </div>*/
/*   {% endif %}*/
/*   {% if error_warning %}*/
/*   <div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> {{ error_warning }}*/
/*     <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*   </div>*/
/*   {% endif %}*/
/*   <div class="row">{{ column_left }}*/
/*     {% if column_left and column_right %}*/
/*     {% set class = 'col-sm-6' %}*/
/*     {% elseif column_left or column_right %}*/
/*     {% set class = 'col-sm-9' %}*/
/*     {% else %}*/
/*     {% set class = 'col-sm-12' %}*/
/*     {% endif %}*/
/*     <div id="content" class="{{ class }}">{{ content_top }}*/
/*       <h1>{{ heading_title }}*/
/*         {% if weight %}*/
/*         &nbsp;({{ weight }})*/
/*         {% endif %} </h1>*/
/*       <form action="{{ action }}" method="post" enctype="multipart/form-data">*/
/*         <div class="table-responsive">*/
/*           <table class="table table-bordered">*/
/*             <thead>*/
/*               <tr>*/
/*                 <td class="text-center">{{ column_image }}</td>*/
/*                 <td class="text-left">{{ column_name }}</td>*/
/*                 <td class="text-left">{{ column_model }}</td>*/
/*                 <td class="text-left">{{ column_quantity }}</td>*/
/*                 <td class="text-right">{{ column_price }}</td>*/
/*                 <td class="text-right">{{ column_total }}</td>*/
/*               </tr>*/
/*             </thead>*/
/*             <tbody>*/
/*             */
/*             {% for product in products %}*/
/*             <tr>*/
/*               <td class="text-center">{% if product.thumb %} <a href="{{ product.href }}"><img src="{{ product.thumb }}" alt="{{ product.name }}" title="{{ product.name }}" class="img-thumbnail" /></a> {% endif %}</td>*/
/*               <td class="text-left"><a href="{{ product.href }}">{{ product.name }}</a> {% if not product.stock %} <span class="text-danger">***</span> {% endif %}*/
/*                 {% if product.option %}*/
/*                 {% for option in product.option %} <br />*/
/*                 <small>{{ option.name }}: {{ option.value }}</small> {% endfor %}*/
/*                 {% endif %}*/
/*                 {% if product.reward %} <br />*/
/*                 <small>{{ product.reward }}</small> {% endif %}*/
/*                 {% if product.recurring %} <br />*/
/*                 <span class="label label-info">{{ text_recurring_item }}</span> <small>{{ product.recurring }}</small> {% endif %}</td>*/
/*               <td class="text-left">{{ product.model }}</td>*/
/*               <td class="text-left"><div class="input-group btn-block" style="max-width: 200px;">*/
/*                   <input type="text" name="quantity[{{ product.cart_id }}]" value="{{ product.quantity }}" size="1" class="form-control" />*/
/*                   <span class="input-group-btn">*/
/*                   <button type="submit" data-toggle="tooltip" title="{{ button_update }}" class="btn btn-primary"><i class="fa fa-refresh"></i></button>*/
/*                   <button type="button" data-toggle="tooltip" title="{{ button_remove }}" class="btn btn-danger" onclick="cart.remove('{{ product.cart_id }}');"><i class="fa fa-times-circle"></i></button>*/
/*                   </span></div></td>*/
/*               <td class="text-right">{{ product.price }}</td>*/
/*               <td class="text-right">{{ product.total }}</td>*/
/*             </tr>*/
/*             {% endfor %}*/
/*             {% for voucher in vouchers %}*/
/*             <tr>*/
/*               <td></td>*/
/*               <td class="text-left">{{ voucher.description }}</td>*/
/*               <td class="text-left"></td>*/
/*               <td class="text-left"><div class="input-group btn-block" style="max-width: 200px;">*/
/*                   <input type="text" name="" value="1" size="1" disabled="disabled" class="form-control" />*/
/*                   <span class="input-group-btn">*/
/*                   <button type="button" data-toggle="tooltip" title="{{ button_remove }}" class="btn btn-danger" onclick="voucher.remove('{{ voucher.key }}');"><i class="fa fa-times-circle"></i></button>*/
/*                   </span></div></td>*/
/*               <td class="text-right">{{ voucher.amount }}</td>*/
/*               <td class="text-right">{{ voucher.amount }}</td>*/
/*             </tr>*/
/*             {% endfor %}*/
/*               </tbody>*/
/*             */
/*           </table>*/
/*         </div>*/
/*       </form>*/
/*       {% if modules %}*/
/*       <h2>{{ text_next }}</h2>*/
/*       <p>{{ text_next_choice }}</p>*/
/*       <div class="panel-group" id="accordion"> {% for module in modules %}*/
/*         {{ module }}*/
/*         {% endfor %} </div>*/
/*       {% endif %} <br />*/
/*       <div class="row">*/
/*         <div class="col-sm-4 col-sm-offset-8">*/
/*           <table class="table table-bordered">*/
/*             {% for total in totals %}*/
/*             <tr>*/
/*               <td class="text-right"><strong>{{ total.title }}:</strong></td>*/
/*               <td class="text-right">{{ total.text }}</td>*/
/*             </tr>*/
/*             {% endfor %}*/
/*           </table>*/
/*         </div>*/
/*       </div>*/
/*       <div class="buttons clearfix">*/
/*         */
/*         <div class="pull-right"><a href="{{ checkout }}" class="btn btn-primary">{{ button_checkout }}</a></div>*/
/*       </div>*/
/*       {{ content_bottom }}</div>*/
/*     {{ column_right }}</div>*/
/* </div>*/
/* {{ footer }} */
