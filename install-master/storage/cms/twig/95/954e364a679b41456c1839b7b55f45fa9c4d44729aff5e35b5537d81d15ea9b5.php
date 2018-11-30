<?php

/* /home/samuel/www/OktoberProva/install-master/themes/hambern-hambern-blank-bootstrap-4/pages/blog.htm */
class __TwigTemplate_caee0ca0944118ce3dcc9b9475cc1c7ed32954aac42c20e213d02c15183beae2 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("blogPosts"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
    }

    public function getTemplateName()
    {
        return "/home/samuel/www/OktoberProva/install-master/themes/hambern-hambern-blank-bootstrap-4/pages/blog.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% component 'blogPosts' %}", "/home/samuel/www/OktoberProva/install-master/themes/hambern-hambern-blank-bootstrap-4/pages/blog.htm", "");
    }
}
