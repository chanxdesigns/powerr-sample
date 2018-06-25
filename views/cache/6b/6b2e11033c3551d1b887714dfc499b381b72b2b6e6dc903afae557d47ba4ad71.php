<?php

/* /layout/footer.view.html */
class __TwigTemplate_7279c2457acd57bf0c3e84b98a8e1bfa5cb51b73d156513cb171b347af4dac7d extends Twig_Template
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
        echo "<div class=\"container\">
    <footer>
        <h6 class=\"text-center\"><strong>GET IN TOUCH</strong></h6>
        <div class=\"text-center\">
            <a href=\"mailto:panel@i-apaconline.com\" class=\"text-center\">Contact</a>
        </div>

        <div class=\"mb-5\"></div>

        <p class=\"text-center attribution\">&copy; Powerr Sample, 2018</p>
        <p class=\"small text-center owner\">A brand of <a href=\"http://i-apaconline.com\" target=\"_blank\">iApac Online</a></p>
    </footer>
</div>

</body>
</html>";
    }

    public function getTemplateName()
    {
        return "/layout/footer.view.html";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/layout/footer.view.html", "/home/chanx/PhpstormProjects/panel/views/layout/footer.view.html");
    }
}
