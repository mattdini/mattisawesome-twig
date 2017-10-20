<?php

/* project.html */
class __TwigTemplate_d583839bb592fe41fad4a44c03eded449fb1a69fb6815a0f5904277dea1e7c4b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("mainTemplate.html", "project.html", 1);
        $this->blocks = array(
            'mainContent' => array($this, 'block_mainContent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "mainTemplate.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_mainContent($context, array $blocks = array())
    {
        // line 4
        echo "
";
    }

    public function getTemplateName()
    {
        return "project.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"mainTemplate.html\" %}

{% block mainContent %}

{% endblock %}", "project.html", "C:\\Users\\matt\\Dropbox\\MattIsAwesome\\twig\\templates\\project.html");
    }
}
