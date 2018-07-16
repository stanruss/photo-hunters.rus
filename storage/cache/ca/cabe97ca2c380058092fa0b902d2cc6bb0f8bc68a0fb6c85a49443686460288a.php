<?php

/* default/template/extension/payment/cheque.twig */
class __TwigTemplate_ecdde684eab2a765e3cdf62bca921b594f8628fc4db1be98d883e67f1cd52cf2 extends Twig_Template
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
        echo "<h2>";
        echo (isset($context["text_instruction"]) ? $context["text_instruction"] : null);
        echo "</h2>
<div class=\"well well-sm\">
  <p><b>";
        // line 3
        echo (isset($context["text_payable"]) ? $context["text_payable"] : null);
        echo "</b></p>
  <p>";
        // line 4
        echo (isset($context["payable"]) ? $context["payable"] : null);
        echo "</p>
  <b>";
        // line 5
        echo (isset($context["text_address"]) ? $context["text_address"] : null);
        echo "</b><br />
  <p>";
        // line 6
        echo (isset($context["address"]) ? $context["address"] : null);
        echo "</p>
  <p>";
        // line 7
        echo (isset($context["text_payment"]) ? $context["text_payment"] : null);
        echo "</p>
</div>
<div class=\"buttons\">
  <div class=\"pull-right\">
    <input type=\"button\" value=\"";
        // line 11
        echo (isset($context["button_confirm"]) ? $context["button_confirm"] : null);
        echo "\" id=\"button-confirm\" data-loading-text=\"";
        echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
        echo "\" class=\"btn btn-primary\" />
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#button-confirm').on('click', function() {
\t\$.ajax({
\t\turl: 'index.php?route=extension/payment/cheque/confirm',
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('#button-confirm').button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-confirm').button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\tif (json['redirect']) {
\t\t\t\tlocation = json['redirect'];\t
\t\t\t}
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\tconsole.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});

});
//--></script>
";
    }

    public function getTemplateName()
    {
        return "default/template/extension/payment/cheque.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 11,  41 => 7,  37 => 6,  33 => 5,  29 => 4,  25 => 3,  19 => 1,);
    }
}
/* <h2>{{ text_instruction }}</h2>*/
/* <div class="well well-sm">*/
/*   <p><b>{{ text_payable }}</b></p>*/
/*   <p>{{ payable }}</p>*/
/*   <b>{{ text_address }}</b><br />*/
/*   <p>{{ address }}</p>*/
/*   <p>{{ text_payment }}</p>*/
/* </div>*/
/* <div class="buttons">*/
/*   <div class="pull-right">*/
/*     <input type="button" value="{{ button_confirm }}" id="button-confirm" data-loading-text="{{ text_loading }}" class="btn btn-primary" />*/
/*   </div>*/
/* </div>*/
/* <script type="text/javascript"><!--*/
/* $('#button-confirm').on('click', function() {*/
/* 	$.ajax({*/
/* 		url: 'index.php?route=extension/payment/cheque/confirm',*/
/* 		dataType: 'json',*/
/* 		beforeSend: function() {*/
/* 			$('#button-confirm').button('loading');*/
/* 		},*/
/* 		complete: function() {*/
/* 			$('#button-confirm').button('reset');*/
/* 		},*/
/* 		success: function(json) {*/
/* 			if (json['redirect']) {*/
/* 				location = json['redirect'];	*/
/* 			}*/
/* 		},*/
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			console.log(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		}*/
/* 	});*/
/* */
/* });*/
/* //--></script>*/
/* */
