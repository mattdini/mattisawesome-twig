<?php

/* index.html */
class __TwigTemplate_9fecb9811b9d363d7f813ce7bcaade23e4cbf034dda6bc4056125d15b9aa7590 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("mainTemplate.html", "index.html", 1);
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
        $this->loadTemplate("indexBlurb.html", "index.html", 4)->display($context);
    }

    public function getTemplateName()
    {
        return "index.html";
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
{% include 'indexBlurb.html' %}
{% endblock %}", "index.html", "C:\\Users\\matt\\Dropbox\\MattIsAwesome\\twig\\templates\\index.html");
    }
}
