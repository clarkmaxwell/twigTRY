<?php

/* index.html */
class __TwigTemplate_68382b9aa5b82414a20bf208bb1b0859 extends Twig_Template
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
        echo "<html>
<head>
\t<title></title>
</head>
<body>
\t";
        // line 6
        echo twig_escape_filter($this->env, helloworld(), "html", null, true);
        echo "
</body>
</html>
";
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
        return array (  26 => 6,  19 => 1,);
    }
}
