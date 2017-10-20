<?php

/* index.html */
class __TwigTemplate_9fecb9811b9d363d7f813ce7bcaade23e4cbf034dda6bc4056125d15b9aa7590 extends Twig_Template
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
<html lang=\"en\">
\t<head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta name=\"description\" content=\"\">
        <meta name=\"author\" content=\"\">
        <link rel=\"shortcut icon\" href=\"../../docs-assets/ico/favicon.png\">

        <title>Matt Carter : The Webpage : The Flamethrower</title>

        <!-- Bootstrap core CSS -->
        <link href=\"assets/css/bootstrap.css\" rel=\"stylesheet\">
        <link rel=\"stylesheet\" href=\"assets/css/animate.css\">


        <!-- Custom styles for this template -->
        <link href=\"assets/css/main.css\" rel=\"stylesheet\">

        <script src=\"https://code.jquery.com/jquery-1.10.2.min.js\"></script>
        <script src=\"assets/js/hover.zoom.js\"></script>
        <script src=\"assets/js/hover.zoom.conf.js\"></script>
        <script src=\"https://cdn.jsdelivr.net/jquery.typeit/4.4.0/typeit.min.js\"></script> 
        
        <script src=\"https://use.fontawesome.com/7a8dfde674.js\"></script>

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
        <script src=\"https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js\"></script>
        <![endif]-->
  </head>

  <body>

    ";
        // line 37
        $this->loadTemplate("header.html", "index.html", 37)->display($context);
        // line 38
        echo "    ";
        $this->loadTemplate("indexBlurb.html", "index.html", 38)->display($context);
        // line 39
        echo "

    ";
        // line 41
        $this->loadTemplate("footer.html", "index.html", 41)->display($context);
        // line 42
        echo "</body>

<script src=\"assets/js/bootstrap.min.js\"></script>
<script>
\$('#typeMe').typeIt({
     strings: [\"solve problems.\", \"automate everything.\",\"bring information together.\"],
     speed: 100,
     breakLines: false,
     autoStart: false,
     loop: false,
     deleteDelay: 2000
}); 
</script>

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
        return array (  68 => 42,  66 => 41,  62 => 39,  59 => 38,  57 => 37,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
\t<head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta name=\"description\" content=\"\">
        <meta name=\"author\" content=\"\">
        <link rel=\"shortcut icon\" href=\"../../docs-assets/ico/favicon.png\">

        <title>Matt Carter : The Webpage : The Flamethrower</title>

        <!-- Bootstrap core CSS -->
        <link href=\"assets/css/bootstrap.css\" rel=\"stylesheet\">
        <link rel=\"stylesheet\" href=\"assets/css/animate.css\">


        <!-- Custom styles for this template -->
        <link href=\"assets/css/main.css\" rel=\"stylesheet\">

        <script src=\"https://code.jquery.com/jquery-1.10.2.min.js\"></script>
        <script src=\"assets/js/hover.zoom.js\"></script>
        <script src=\"assets/js/hover.zoom.conf.js\"></script>
        <script src=\"https://cdn.jsdelivr.net/jquery.typeit/4.4.0/typeit.min.js\"></script> 
        
        <script src=\"https://use.fontawesome.com/7a8dfde674.js\"></script>

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
        <script src=\"https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js\"></script>
        <![endif]-->
  </head>

  <body>

    {% include 'header.html' %}
    {% include 'indexBlurb.html' %}


    {% include 'footer.html' %}
</body>

<script src=\"assets/js/bootstrap.min.js\"></script>
<script>
\$('#typeMe').typeIt({
     strings: [\"solve problems.\", \"automate everything.\",\"bring information together.\"],
     speed: 100,
     breakLines: false,
     autoStart: false,
     loop: false,
     deleteDelay: 2000
}); 
</script>

</html>", "index.html", "C:\\Users\\matt\\Dropbox\\MattIsAwesome\\twig\\templates\\index.html");
    }
}
