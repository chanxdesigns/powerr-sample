<?php

/* home.view.html */
class __TwigTemplate_6d2ee6cdec526d0ab0c3c890635bd57d0210c996339b0c3fd03749a4d035300f extends Twig_Template
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
        echo twig_include($this->env, $context, "/layout/master.view.html");
        echo "

<div class=\"container\">
        <div class=\"panel-jumbo\">
            <div class=\"wrapper\">
                <div class=\"row\">
                    <div class=\"col-7\">
                        <h1 class=\"slogan\"><strong>BE AN INFLUENCER TODAY</strong></h1>
                        <h3 class=\"outro\">Your opinion can change the world around you today</h3>
                        <a class=\"join-now button outline\">Join Now</a>
                    </div>
                    <div class=\"col-5\"></div>
                </div>
            </div>
        </div>

        <div class=\"benefits\">
            <div class=\"row\">
                <div class=\"col-4\">
                    <h3 class=\"title\">Participate</h3>
                    <p class=\"desc\">Engage in different topics that interest you and where you want to see a change</p>
                </div>
                <div class=\"col-4\">
                    <h3 class=\"title\">Provide Insights</h3>
                    <p class=\"desc\">We will help your insights and feedbacks reach to the right person</p>
                </div>
                <div class=\"col-4\">
                    <h3 class=\"title\">Get Rewarded</h3>
                    <p class=\"desc\">Voila! you get rewarded for providing your honest feedbacks that help shape the world around you</p>
                </div>
            </div>
        </div>

        <div class=\"partners\">
            <h3 class=\"title\">Brands</h3>
            <p class=\"sub-title\">We work with</p>

            <p class=\"desc\">
                Get a chance to share your thoughts and idea with the top companies in world thereby impacting the results and get rewarded instantly for that. Hows that?
            </p>

            <div class=\"partner-logos\">
                <div class=\"row\">
                <div class=\"col-3\">
                    <img src=\"assets/img/partners/adidas.png\" alt=\"Adidas\">
                </div>
                <div class=\"col-3\">
                    <img src=\"assets/img/partners/honda.png\" alt=\"Honda\">
                </div>
                <div class=\"col-3\">
                    <img src=\"assets/img/partners/puma.png\" alt=\"Puma\">
                </div>
                <div class=\"col-3\">
                    <img src=\"assets/img/partners/riot.png\" alt=\"Riot Games\">
                </div>

                <div class=\"col-3\">
                    <img src=\"assets/img/partners/samsung.png\" alt=\"Samsung\">
                </div>
                <div class=\"col-3\">
                    <img src=\"assets/img/partners/suzuki.png\" alt=\"Suzuki\">
                </div>
                <div class=\"col-3\">
                    <img src=\"assets/img/partners/corona.svg\" alt=\"Corona\">
                </div>
                <div class=\"col-3\">
                    <img src=\"assets/img/partners/nike.png\" alt=\"Nike\">
                </div>
                </div>
            </div>
        </div>
</div>

";
        // line 74
        echo twig_include($this->env, $context, "/layout/footer.view.html");
    }

    public function getTemplateName()
    {
        return "home.view.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 74,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "home.view.html", "/home/chanx/PhpstormProjects/panel/views/home.view.html");
    }
}
