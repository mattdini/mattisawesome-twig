<?php

/* index.html */
class __TwigTemplate_ef4cb7fd880ca570ff20781406f4fe7d27cd8efb436d1568a58b8747c0ca056b extends Twig_Template
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
        echo "<!DOCTYPE html>
<html>
    <head>
        <title>My Webpage</title>
    </head>
    <body>
        <ul id=\"navigation\">
        ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["navigation"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 9
            echo "            <li><a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "href", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "caption", array()), "html", null, true);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "        </ul>
        <h1>My Webpage</h1>
        ";
        // line 13
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "
    </body>
</html>";
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
        return array (  47 => 13,  43 => 11,  32 => 9,  28 => 8,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <title>My Webpage</title>
    </head>
    <body>
        <ul id=\"navigation\">
        {% for item in navigation %}
            <li><a href=\"{{ item.href }}\">{{ item.caption }}</a></li>
        {% endfor %}
        </ul>
        <h1>My Webpage</h1>
        {{ name }}
    </body>
</html>", "index.html", "/var/www/html/twig/templates/index.html");
    }
}
