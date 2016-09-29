<?php

/* layout.html */
class __TwigTemplate_cfbd4f2a4bd52a86a82c5193d348f939b90030aa1c9918cd5407816150939066 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\">
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
    <title>无标题文档</title>
</head>
<body>
<header></header>
<center>
    <h1>
    ";
        // line 11
        $this->displayBlock('content', $context, $blocks);
        // line 13
        echo "    </h1>
</center>
<footer></footer>
</body>
</html>";
    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        // line 12
        echo "    ";
    }

    public function getTemplateName()
    {
        return "layout.html";
    }

    public function getDebugInfo()
    {
        return array (  45 => 12,  42 => 11,  34 => 13,  32 => 11,  20 => 1,);
    }

    public function getSource()
    {
        return "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\">
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
    <title>无标题文档</title>
</head>
<body>
<header></header>
<center>
    <h1>
    {%  block content %}
    {%  endblock %}
    </h1>
</center>
<footer></footer>
</body>
</html>";
    }
}
