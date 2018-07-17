<?php

/* __string_template__6d740d431374bcb2249e2bf5bf0688f4b903061e4be80ee42a37c8c1db404cdd */
class __TwigTemplate_18978dc400c298808fb95b3a1fe973df75677c7661d9409b68ae04b30fe97059 extends Twig_Template
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
        if ((isset($context["heading_title"]) ? $context["heading_title"] : null)) {
            // line 2
            echo "  <h2>";
            echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
            echo "</h2>
  ";
        }
        // line 4
        echo "  ";
        echo (isset($context["html"]) ? $context["html"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "__string_template__6d740d431374bcb2249e2bf5bf0688f4b903061e4be80ee42a37c8c1db404cdd";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  21 => 2,  19 => 1,);
    }
}
/* {% if heading_title %}*/
/*   <h2>{{ heading_title }}</h2>*/
/*   {% endif %}*/
/*   {{ html }}*/
/* */
