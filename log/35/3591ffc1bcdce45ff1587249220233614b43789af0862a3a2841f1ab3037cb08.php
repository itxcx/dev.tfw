<?php

/* about/add.html */
class __TwigTemplate_344cef422319b08fdd71fa137fb9b2e361d0a3f0bbf0f38c810b5c2bf474f703 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layouts.html", "about/add.html", 1);
        $this->blocks = array(
            'css' => array($this, 'block_css'),
            'content' => array($this, 'block_content'),
            'js' => array($this, 'block_js'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layouts.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_css($context, array $blocks = array())
    {
        // line 3
        echo "
";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "<!-- Page -->
<div class=\"page animsition\">
    <div class=\"page-header\">
        <h1 class=\"page-title\"># Layouts</h1>
    </div>
    <div class=\"page-content\">
        <div class=\"panel\">
            <div class=\"panel-heading\">
                <h3 class=\"panel-title\">@ 添加关于我们内容</h3>
            </div>
            <div class=\"panel-body\">
                <form class=\"form-horizontal\" id=\"usedHouseInfoForm\" action=\"/admin/about/add/id/";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "id", array()), "html", null, true);
        echo "\" method=\"post\">
                    <div class=\"form-group\">
                        <label for=\"inputEmail3\" class=\"col-sm-2 control-label\">内容</label>
                        <div class=\"col-sm-10\">
                            <script id=\"container\" name=\"content\" type=\"text/plain\" style=\"height: 300px;\">";
        // line 21
        echo twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "content", array());
        echo "</script>
                        </div>
                    </div>
               
                    <div class=\"form-group\">
                        <div class=\"col-sm-offset-2 col-sm-10\">
                            <button type=\"submit\" class=\"btn btn-success\">提交信息</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- End Page -->
";
    }

    // line 37
    public function block_js($context, array $blocks = array())
    {
        // line 38
        echo "<script src=\"/public/ueditor/ueditor.config.js\"></script>
<script src=\"/public/ueditor/ueditor.all.js\"></script>
<script>
    var ue = UE.getEditor('container');
</script>
";
    }

    public function getTemplateName()
    {
        return "about/add.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 38,  81 => 37,  61 => 21,  54 => 17,  41 => 6,  38 => 5,  33 => 3,  30 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"layouts.html\" %}
{% block css %}

{% endblock %}
{% block content %}
<!-- Page -->
<div class=\"page animsition\">
    <div class=\"page-header\">
        <h1 class=\"page-title\"># Layouts</h1>
    </div>
    <div class=\"page-content\">
        <div class=\"panel\">
            <div class=\"panel-heading\">
                <h3 class=\"panel-title\">@ 添加关于我们内容</h3>
            </div>
            <div class=\"panel-body\">
                <form class=\"form-horizontal\" id=\"usedHouseInfoForm\" action=\"/admin/about/add/id/{{data.id}}\" method=\"post\">
                    <div class=\"form-group\">
                        <label for=\"inputEmail3\" class=\"col-sm-2 control-label\">内容</label>
                        <div class=\"col-sm-10\">
                            <script id=\"container\" name=\"content\" type=\"text/plain\" style=\"height: 300px;\">{% autoescape false %}{{ data.content }}{% endautoescape %}</script>
                        </div>
                    </div>
               
                    <div class=\"form-group\">
                        <div class=\"col-sm-offset-2 col-sm-10\">
                            <button type=\"submit\" class=\"btn btn-success\">提交信息</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- End Page -->
{% endblock %}
{% block js %}
<script src=\"/public/ueditor/ueditor.config.js\"></script>
<script src=\"/public/ueditor/ueditor.all.js\"></script>
<script>
    var ue = UE.getEditor('container');
</script>
{% endblock %}", "about/add.html", "F:\\UPUPW_AP7.0_64-1512.1\\UPUPW_AP7.0_64\\vhosts\\dev.tfw.local\\apps\\admin\\views\\about\\add.html");
    }
}