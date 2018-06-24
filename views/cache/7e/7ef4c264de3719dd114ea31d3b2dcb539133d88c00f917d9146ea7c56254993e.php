<?php

/* /layout/master.view.html */
class __TwigTemplate_f4fecd76eefc5ae7fc94e0b07c46e25aa1c2af6fb2b169f3f7cb2f373a6db403 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html>
<head>
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css\" integrity=\"sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB\" crossorigin=\"anonymous\">
    <link rel=\"stylesheet\" href=\"/assets/css/styles.css\">
    <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Rancho|Rubik\" rel=\"stylesheet\">
    <script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\" integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js\" integrity=\"sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49\" crossorigin=\"anonymous\"></script>
    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js\" integrity=\"sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T\" crossorigin=\"anonymous\"></script>
    <title>";
        // line 10
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo " - iApac Panel</title>
</head>

<body>
<header>
    <div class=\"container\">
    <nav class=\"navbar navbar-expand-lg navbar-light bg-light\">

            <a class=\"navbar-brand\" href=\"/\">iApac Panel</a>
            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>

            <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                <ul class=\"navbar-nav mr-auto\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"/rewards\">Rewards</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"/payment-modes\">Payment Modes</a>
                    </li>
                    <!--<li class=\"nav-item dropdown\">-->
                        <!--<a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">-->
                            <!--Dropdown-->
                        <!--</a>-->
                        <!--<div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">-->
                            <!--<a class=\"dropdown-item\" href=\"#\">Action</a>-->
                            <!--<a class=\"dropdown-item\" href=\"#\">Another action</a>-->
                            <!--<div class=\"dropdown-divider\"></div>-->
                            <!--<a class=\"dropdown-item\" href=\"#\">Something else here</a>-->
                        <!--</div>-->
                    <!--</li>-->
                </ul>
            </div>

    </nav>
    </div>
</header>";
    }

    public function getTemplateName()
    {
        return "/layout/master.view.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 10,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/layout/master.view.html", "/home/chanx/PhpstormProjects/panel/views/layout/master.view.html");
    }
}
