<?php

/* layout.html.twig */
class __TwigTemplate_daf6066f4275e1df836866784cdaf472 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 1
        echo "<html>
    <head>
        <title>";
        // line 3
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    </head>
    <body>
        ";
        // line 6
        $this->displayBlock('body', $context, $blocks);
        // line 7
        echo "    </body>
</html>";
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, (isset($context['pageTitle']) ? $context['pageTitle'] : null), "html");
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
