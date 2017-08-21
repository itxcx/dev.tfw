<?php

/* layouts.html */
class __TwigTemplate_1287190271804d5025c4be302879936dfd6c73ccbb6998db6181d967d5888fd1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'css' => array($this, 'block_css'),
            'content' => array($this, 'block_content'),
            'js' => array($this, 'block_js'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html class=\"no-js\" lang=\"en\">
<head>
  <meta charset=\"utf-8\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui\">
  <meta name=\"description\" content=\"bootstrap admin template\">
  <meta name=\"author\" content=\"\">

  <title>首页 | ";
        // line 10
        echo twig_escape_filter($this->env, ($context["websiteName"] ?? null), "html", null, true);
        echo "</title>

  <link rel=\"apple-touch-icon\" href=\"/apps/admin/views/assets/images/apple-touch-icon.png\">
  <link rel=\"shortcut icon\" href=\"/apps/admin/views/assets/images/favicon.ico\">

  <!-- Stylesheets -->
  <link rel=\"stylesheet\" href=\"/apps/admin/views/assets/css/bootstrap.min.css\">
  <link rel=\"stylesheet\" href=\"/apps/admin/views/assets/css/bootstrap-extend.min.css\">
  <link rel=\"stylesheet\" href=\"/apps/admin/views/assets/css/site.min.css\">

  <!-- Plugins -->
  <link rel=\"stylesheet\" href=\"/apps/admin/views/assets/vendor/animsition/animsition.css\">
  <link rel=\"stylesheet\" href=\"/apps/admin/views/assets/vendor/asscrollable/asScrollable.css\">
  <link rel=\"stylesheet\" href=\"/apps/admin/views/assets/vendor/switchery/switchery.css\">
  <link rel=\"stylesheet\" href=\"/apps/admin/views/assets/vendor/intro-js/introjs.css\">
  <link rel=\"stylesheet\" href=\"/apps/admin/views/assets/vendor/slidepanel/slidePanel.css\">
  <link rel=\"stylesheet\" href=\"/apps/admin/views/assets/vendor/flag-icon-css/flag-icon.css\">

  <!-- Fonts -->
  <link rel=\"stylesheet\" href=\"/apps/admin/views/assets/fonts/web-icons/web-icons.min.css\">
  <link rel=\"stylesheet\" href=\"/apps/admin/views/assets/fonts/brand-icons/brand-icons.min.css\">
  <link href='http://fonts.googlefonts.net/css?family=Open+Sans' rel='stylesheet' type='text/css'>

  <!-- 引入SweetAlert css -->
  <link rel=\"stylesheet\" href=\"/public/sweetalert-master/dist/sweetalert.css\">

  ";
        // line 36
        $this->displayBlock('css', $context, $blocks);
        // line 39
        echo "
  <!-- Scripts -->
  <script src=\"/apps/admin/views/assets/vendor/modernizr/modernizr.js\"></script>
  <script src=\"/apps/admin/views/assets/vendor/breakpoints/breakpoints.js\"></script>
  <script>
    Breakpoints();
  </script>
</head>
<body class=\"site-menubar-unfold\" data-auto-menubar=\"false\">
  <!--[if lt IE 8]>
        <p class=\"browserupgrade\">You are using an <strong>outdated</strong> browser. Please <a href=\"http://browsehappy.com/\">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

  <nav class=\"site-navbar navbar navbar-default navbar-fixed-top navbar-mega\" role=\"navigation\">

    <div class=\"navbar-header\">
      <button type=\"button\" class=\"navbar-toggle hamburger hamburger-close navbar-toggle-left hided\"
      data-toggle=\"menubar\">
        <span class=\"sr-only\">Toggle navigation</span>
        <span class=\"hamburger-bar\"></span>
      </button>
      <button type=\"button\" class=\"navbar-toggle collapsed\" data-target=\"#site-navbar-collapse\"
      data-toggle=\"collapse\">
        <i class=\"icon wb-more-horizontal\" aria-hidden=\"true\"></i>
      </button>
      <div class=\"navbar-brand navbar-brand-center site-gridmenu-toggle\" data-toggle=\"gridmenu\">
        <img class=\"navbar-brand-logo\" src=\"/apps/admin/views/assets/images/logo.png\" title=\"Remark\">
        <span class=\"navbar-brand-text\"> ";
        // line 66
        echo twig_escape_filter($this->env, ($context["websiteName"] ?? null), "html", null, true);
        echo "</span>
      </div>
      <button type=\"button\" class=\"navbar-toggle collapsed\" data-target=\"#site-navbar-search\"
      data-toggle=\"collapse\">
        <span class=\"sr-only\">Toggle Search</span>
        <i class=\"icon wb-search\" aria-hidden=\"true\"></i>
      </button>
    </div>

    <div class=\"navbar-container container-fluid\">
      <!-- Navbar Collapse -->
      <div class=\"collapse navbar-collapse navbar-collapse-toolbar\" id=\"site-navbar-collapse\">
        <!-- Navbar Toolbar -->
        <ul class=\"nav navbar-toolbar\">
          <li class=\"hidden-float\" id=\"toggleMenubar\">
            <a data-toggle=\"menubar\" href=\"#\" role=\"button\">
              <i class=\"icon hamburger hamburger-arrow-left\">
                  <span class=\"sr-only\">Toggle menubar</span>
                  <span class=\"hamburger-bar\"></span>
                </i>
            </a>
          </li>
          <li class=\"hidden-xs\" id=\"toggleFullscreen\">
            <a class=\"icon icon-fullscreen\" data-toggle=\"fullscreen\" href=\"#\" role=\"button\">
              <span class=\"sr-only\">Toggle fullscreen</span>
            </a>
          </li>
        </ul>
        <!-- End Navbar Toolbar -->

        <!-- Navbar Toolbar Right -->
        <ul class=\"nav navbar-toolbar navbar-right navbar-toolbar-right\">
          <li class=\"dropdown\">
            <a class=\"navbar-avatar dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" aria-expanded=\"false\"
            data-animation=\"scale-up\" role=\"button\">
              <h4>欢迎您：";
        // line 101
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["userinfo"] ?? null), "username", array()), "html", null, true);
        echo "</h4>
            </a>
            <ul class=\"dropdown-menu\" role=\"menu\">
              <li role=\"presentation\">
                <a href=\"javascript:void(0)\" role=\"menuitem\" onclick=\"javascript:window.location.href='/admin/index/logout'\"><i class=\"icon wb-power\" aria-hidden=\"true\"></i> 退出</a>
              </li>
            </ul>
          </li>
        </ul>
        <!-- End Navbar Toolbar Right -->
      </div>
      <!-- End Navbar Collapse -->
    </div>
  </nav>


 <div class=\"site-menubar\">
    <div class=\"site-menubar-body\">
      <div>
        <div>
          <ul class=\"site-menu\">
            <li class=\"site-menu-category\">导航栏目</li>
            <li class=\"site-menu-item has-sub\">
              <a class=\"animsition-link\" href=\"/admin/index/index\" data-slug=\"dashboard\" >
                <i class=\"site-menu-icon wb-dashboard\" aria-hidden=\"true\"></i>
                <span class=\"site-menu-title\">首页</span>
              </a>
            </li>
            <li class=\"site-menu-item has-sub active open\">
              <a href=\"javascript:void(0)\" data-slug=\"layout\">
                <i class=\"site-menu-icon wb-layout\" aria-hidden=\"true\"></i>
                <span class=\"site-menu-title\">后台用户管理</span>
                <span class=\"site-menu-arrow\"></span>
              </a>
              <ul class=\"site-menu-sub\">
                <li class=\"site-menu-item\">
                  <a class=\"animsition-link\" href=\"/admin/adminUser/add\" data-slug=\"layout-menu-collapsed\">
                    <i class=\"site-menu-icon \" aria-hidden=\"true\"></i>
                    <span class=\"site-menu-title\">添加用户</span>
                  </a>
                </li>
                <li class=\"site-menu-item\">
                  <a class=\"animsition-link\" href=\"/admin/adminUser/index\" data-slug=\"layout-menu-collapsed\">
                    <i class=\"site-menu-icon \" aria-hidden=\"true\"></i>
                    <span class=\"site-menu-title\">用户列表</span>
                  </a>
                </li>
              </ul>
            </li>
            <li class=\"site-menu-item has-sub active open\">
              <a href=\"javascript:void(0)\" data-slug=\"layout\">
                <i class=\"site-menu-icon wb-layout\" aria-hidden=\"true\"></i>
                <span class=\"site-menu-title\">城市管理</span>
                <span class=\"site-menu-arrow\"></span>
              </a>
              <ul class=\"site-menu-sub\">
                <li class=\"site-menu-item\">
                  <a class=\"animsition-link\" href=\"/admin/city/add\" data-slug=\"layout-menu-collapsed\">
                    <i class=\"site-menu-icon \" aria-hidden=\"true\"></i>
                    <span class=\"site-menu-title\">添加城市</span>
                  </a>
                </li>
                <li class=\"site-menu-item\">
                  <a class=\"animsition-link\" href=\"/admin/city/index\" data-slug=\"layout-menu-collapsed\">
                    <i class=\"site-menu-icon \" aria-hidden=\"true\"></i>
                    <span class=\"site-menu-title\">城市列表</span>
                  </a>
                </li>
              </ul>
            </li>
            <li class=\"site-menu-item has-sub active open\">
              <a href=\"javascript:void(0)\" data-slug=\"layout\">
                <i class=\"site-menu-icon wb-layout\" aria-hidden=\"true\"></i>
                <span class=\"site-menu-title\">置业顾问管理</span>
                <span class=\"site-menu-arrow\"></span>
              </a>
              <ul class=\"site-menu-sub\">
                <li class=\"site-menu-item\">
                  <a class=\"animsition-link\" href=\"/admin/propertyConsultant/add\" data-slug=\"layout-menu-collapsed\">
                    <i class=\"site-menu-icon \" aria-hidden=\"true\"></i>
                    <span class=\"site-menu-title\">添加置业顾问</span>
                  </a>
                </li>
                <li class=\"site-menu-item\">
                  <a class=\"animsition-link\" href=\"/admin/propertyConsultant/index\" data-slug=\"layout-menu-collapsed\">
                    <i class=\"site-menu-icon \" aria-hidden=\"true\"></i>
                    <span class=\"site-menu-title\">置业顾问列表</span>
                  </a>
                </li>
              </ul>
            </li>
            <li class=\"site-menu-item has-sub active open\">
              <a href=\"javascript:void(0)\" data-slug=\"layout\">
                <i class=\"site-menu-icon wb-layout\" aria-hidden=\"true\"></i>
                <span class=\"site-menu-title\">房屋管理</span>
                <span class=\"site-menu-arrow\"></span>
              </a>
              <ul class=\"site-menu-sub\">
                <li class=\"site-menu-item\">
                  <a class=\"animsition-link\" href=\"/admin/houseCategory/add\" data-slug=\"layout-menu-collapsed\">
                    <i class=\"site-menu-icon \" aria-hidden=\"true\"></i>
                    <span class=\"site-menu-title\">添加房类别</span>
                  </a>
                </li>
                <li class=\"site-menu-item\">
                  <a class=\"animsition-link\" href=\"/admin/houseCategory/index\" data-slug=\"layout-menu-collapsed\">
                    <i class=\"site-menu-icon \" aria-hidden=\"true\"></i>
                    <span class=\"site-menu-title\">房类别列表</span>
                  </a>
                </li>
                <li class=\"site-menu-item\">
                  <a class=\"animsition-link\" href=\"/admin/newHouseCatalog/add\" data-slug=\"layout-menu-collapsed\">
                    <i class=\"site-menu-icon \" aria-hidden=\"true\"></i>
                    <span class=\"site-menu-title\">添加新房条目</span>
                  </a>
                </li>
                <li class=\"site-menu-item\">
                  <a class=\"animsition-link\" href=\"/admin/newHouseCatalog/index\" data-slug=\"layout-menu-collapsed\">
                    <i class=\"site-menu-icon \" aria-hidden=\"true\"></i>
                    <span class=\"site-menu-title\">新房条目列表</span>
                  </a>
                </li>
                <li class=\"site-menu-item\">
                  <a class=\"animsition-link\" href=\"/admin/usedHouseCatalog/add\" data-slug=\"layout-menu-collapsed\">
                    <i class=\"site-menu-icon \" aria-hidden=\"true\"></i>
                    <span class=\"site-menu-title\">添加二手房条目</span>
                  </a>
                </li>
                <li class=\"site-menu-item\">
                  <a class=\"animsition-link\" href=\"/admin/usedHouseCatalog/index\" data-slug=\"layout-menu-collapsed\">
                    <i class=\"site-menu-icon \" aria-hidden=\"true\"></i>
                    <span class=\"site-menu-title\">二手房条目列表</span>
                  </a>
                </li>
                <li class=\"site-menu-item\">
                  <a class=\"animsition-link\" href=\"/admin/tenmentCatalog/add\" data-slug=\"layout-menu-collapsed\">
                    <i class=\"site-menu-icon \" aria-hidden=\"true\"></i>
                    <span class=\"site-menu-title\">添加租房条目</span>
                  </a>
                </li>
                <li class=\"site-menu-item\">
                  <a class=\"animsition-link\" href=\"/admin/tenmentCatalog/index\" data-slug=\"layout-menu-collapsed\">
                    <i class=\"site-menu-icon \" aria-hidden=\"true\"></i>
                    <span class=\"site-menu-title\">租房条目列表</span>
                  </a>
                </li>
                <li class=\"site-menu-item\">
                  <a class=\"animsition-link\" href=\"/admin/sellHouseInfo/index\" data-slug=\"layout-menu-collapsed\">
                    <i class=\"site-menu-icon \" aria-hidden=\"true\"></i>
                    <span class=\"site-menu-title\">卖房条目列表</span>
                  </a>
                </li>
                <li class=\"site-menu-item\">
                  <a class=\"animsition-link\" href=\"/admin/buyHouseCatagory/add\" data-slug=\"layout-menu-collapsed\">
                    <i class=\"site-menu-icon \" aria-hidden=\"true\"></i>
                    <span class=\"site-menu-title\">添加购房百科</span>
                  </a>
                </li>
                <li class=\"site-menu-item\">
                  <a class=\"animsition-link\" href=\"/admin/buyHouseCatagory/index\" data-slug=\"layout-menu-collapsed\">
                    <i class=\"site-menu-icon \" aria-hidden=\"true\"></i>
                    <span class=\"site-menu-title\">购房百科列表</span>
                  </a>
                </li>
              </ul>
            </li>
            <li class=\"site-menu-item has-sub active open\">
              <a href=\"javascript:void(0)\" data-slug=\"layout\">
                <i class=\"site-menu-icon wb-layout\" aria-hidden=\"true\"></i>
                <span class=\"site-menu-title\">Layouts</span>
                <span class=\"site-menu-arrow\"></span>
              </a>
              <ul class=\"site-menu-sub\">
                <li class=\"site-menu-item\">
                  <a class=\"animsition-link\" href=\"menu-collapsed.html\" data-slug=\"layout-menu-collapsed\">
                    <i class=\"site-menu-icon \" aria-hidden=\"true\"></i>
                    <span class=\"site-menu-title\">Menu Collapsed</span>
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>


  ";
        // line 289
        $this->displayBlock('content', $context, $blocks);
        // line 292
        echo "

    <!-- Footer -->
  <footer class=\"site-footer\">
    <span class=\"site-footer-legal\"><i class=\"red-600 wb wb-heart\"></i> <a href=\"javascript:;\">重庆存己科技提供技术支持</a></span>
  </footer>

  <!-- Core  -->
  <script src=\"/apps/admin/views/assets/vendor/jquery/jquery.js\"></script>
  <script src=\"/apps/admin/views/assets/vendor/bootstrap/bootstrap.js\"></script>
  <script src=\"/apps/admin/views/assets/vendor/animsition/jquery.animsition.js\"></script>
  <script src=\"/apps/admin/views/assets/vendor/asscroll/jquery-asScroll.js\"></script>
  <script src=\"/apps/admin/views/assets/vendor/mousewheel/jquery.mousewheel.js\"></script>
  <script src=\"/apps/admin/views/assets/vendor/asscrollable/jquery.asScrollable.all.js\"></script>
  <script src=\"/apps/admin/views/assets/vendor/ashoverscroll/jquery-asHoverScroll.js\"></script>

  <!-- Plugins -->
  <script src=\"/apps/admin/views/assets/vendor/switchery/switchery.min.js\"></script>
  <script src=\"/apps/admin/views/assets/vendor/intro-js/intro.js\"></script>
  <script src=\"/apps/admin/views/assets/vendor/screenfull/screenfull.js\"></script>
  <script src=\"/apps/admin/views/assets/vendor/slidepanel/jquery-slidePanel.js\"></script>

  <!-- Scripts -->
  <script src=\"/apps/admin/views/assets/js/core.js\"></script>
  <script src=\"/apps/admin/views/assets/js/site.js\"></script>

  <script src=\"/apps/admin/views/assets/js/sections/menu.js\"></script>
  <script src=\"/apps/admin/views/assets/js/sections/menubar.js\"></script>
  <script src=\"/apps/admin/views/assets/js/sections/gridmenu.js\"></script>
  <script src=\"/apps/admin/views/assets/js/sections/sidebar.js\"></script>

  <script src=\"/apps/admin/views/assets/js/configs/config-colors.js\"></script>
  <script src=\"/apps/admin/views/assets/js/configs/config-tour.js\"></script>

  <script src=\"/apps/admin/views/assets/js/components/asscrollable.js\"></script>
  <script src=\"/apps/admin/views/assets/js/components/animsition.js\"></script>
  <script src=\"/apps/admin/views/assets/js/components/slidepanel.js\"></script>
  <script src=\"/apps/admin/views/assets/js/components/switchery.js\"></script>

  <!-- Scripts For This Page -->

  <!-- 引入SweetAlert js -->
  <script src=\"/public/sweetalert-master/dist/sweetalert.min.js\"></script>
  <!-- 引入 jquery.validate.min.js -->
  <script src=\"/public/jquery-validation-1.16.0/dist/jquery.validate.min.js\"></script>
  <script src=\"/public/jquery-validation-1.16.0/lib/jquery.form.js\"></script>

  ";
        // line 339
        $this->displayBlock('js', $context, $blocks);
        // line 342
        echo "
  <script>
    (function(document, window, \$) {
      'use strict';

      var Site = window.Site;
      \$(document).ready(function() {
        Site.run();
      });
    })(document, window, jQuery);
  </script>


</body>

</html>
";
    }

    // line 36
    public function block_css($context, array $blocks = array())
    {
        // line 37
        echo "
  ";
    }

    // line 289
    public function block_content($context, array $blocks = array())
    {
        // line 290
        echo "
  ";
    }

    // line 339
    public function block_js($context, array $blocks = array())
    {
        // line 340
        echo "
  ";
    }

    public function getTemplateName()
    {
        return "layouts.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  414 => 340,  411 => 339,  406 => 290,  403 => 289,  398 => 37,  395 => 36,  375 => 342,  373 => 339,  324 => 292,  322 => 289,  131 => 101,  93 => 66,  64 => 39,  62 => 36,  33 => 10,  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html class=\"no-js\" lang=\"en\">
<head>
  <meta charset=\"utf-8\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui\">
  <meta name=\"description\" content=\"bootstrap admin template\">
  <meta name=\"author\" content=\"\">

  <title>首页 | {{ websiteName }}</title>

  <link rel=\"apple-touch-icon\" href=\"/apps/admin/views/assets/images/apple-touch-icon.png\">
  <link rel=\"shortcut icon\" href=\"/apps/admin/views/assets/images/favicon.ico\">

  <!-- Stylesheets -->
  <link rel=\"stylesheet\" href=\"/apps/admin/views/assets/css/bootstrap.min.css\">
  <link rel=\"stylesheet\" href=\"/apps/admin/views/assets/css/bootstrap-extend.min.css\">
  <link rel=\"stylesheet\" href=\"/apps/admin/views/assets/css/site.min.css\">

  <!-- Plugins -->
  <link rel=\"stylesheet\" href=\"/apps/admin/views/assets/vendor/animsition/animsition.css\">
  <link rel=\"stylesheet\" href=\"/apps/admin/views/assets/vendor/asscrollable/asScrollable.css\">
  <link rel=\"stylesheet\" href=\"/apps/admin/views/assets/vendor/switchery/switchery.css\">
  <link rel=\"stylesheet\" href=\"/apps/admin/views/assets/vendor/intro-js/introjs.css\">
  <link rel=\"stylesheet\" href=\"/apps/admin/views/assets/vendor/slidepanel/slidePanel.css\">
  <link rel=\"stylesheet\" href=\"/apps/admin/views/assets/vendor/flag-icon-css/flag-icon.css\">

  <!-- Fonts -->
  <link rel=\"stylesheet\" href=\"/apps/admin/views/assets/fonts/web-icons/web-icons.min.css\">
  <link rel=\"stylesheet\" href=\"/apps/admin/views/assets/fonts/brand-icons/brand-icons.min.css\">
  <link href='http://fonts.googlefonts.net/css?family=Open+Sans' rel='stylesheet' type='text/css'>

  <!-- 引入SweetAlert css -->
  <link rel=\"stylesheet\" href=\"/public/sweetalert-master/dist/sweetalert.css\">

  {% block css %}

  {% endblock %}

  <!-- Scripts -->
  <script src=\"/apps/admin/views/assets/vendor/modernizr/modernizr.js\"></script>
  <script src=\"/apps/admin/views/assets/vendor/breakpoints/breakpoints.js\"></script>
  <script>
    Breakpoints();
  </script>
</head>
<body class=\"site-menubar-unfold\" data-auto-menubar=\"false\">
  <!--[if lt IE 8]>
        <p class=\"browserupgrade\">You are using an <strong>outdated</strong> browser. Please <a href=\"http://browsehappy.com/\">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

  <nav class=\"site-navbar navbar navbar-default navbar-fixed-top navbar-mega\" role=\"navigation\">

    <div class=\"navbar-header\">
      <button type=\"button\" class=\"navbar-toggle hamburger hamburger-close navbar-toggle-left hided\"
      data-toggle=\"menubar\">
        <span class=\"sr-only\">Toggle navigation</span>
        <span class=\"hamburger-bar\"></span>
      </button>
      <button type=\"button\" class=\"navbar-toggle collapsed\" data-target=\"#site-navbar-collapse\"
      data-toggle=\"collapse\">
        <i class=\"icon wb-more-horizontal\" aria-hidden=\"true\"></i>
      </button>
      <div class=\"navbar-brand navbar-brand-center site-gridmenu-toggle\" data-toggle=\"gridmenu\">
        <img class=\"navbar-brand-logo\" src=\"/apps/admin/views/assets/images/logo.png\" title=\"Remark\">
        <span class=\"navbar-brand-text\"> {{ websiteName }}</span>
      </div>
      <button type=\"button\" class=\"navbar-toggle collapsed\" data-target=\"#site-navbar-search\"
      data-toggle=\"collapse\">
        <span class=\"sr-only\">Toggle Search</span>
        <i class=\"icon wb-search\" aria-hidden=\"true\"></i>
      </button>
    </div>

    <div class=\"navbar-container container-fluid\">
      <!-- Navbar Collapse -->
      <div class=\"collapse navbar-collapse navbar-collapse-toolbar\" id=\"site-navbar-collapse\">
        <!-- Navbar Toolbar -->
        <ul class=\"nav navbar-toolbar\">
          <li class=\"hidden-float\" id=\"toggleMenubar\">
            <a data-toggle=\"menubar\" href=\"#\" role=\"button\">
              <i class=\"icon hamburger hamburger-arrow-left\">
                  <span class=\"sr-only\">Toggle menubar</span>
                  <span class=\"hamburger-bar\"></span>
                </i>
            </a>
          </li>
          <li class=\"hidden-xs\" id=\"toggleFullscreen\">
            <a class=\"icon icon-fullscreen\" data-toggle=\"fullscreen\" href=\"#\" role=\"button\">
              <span class=\"sr-only\">Toggle fullscreen</span>
            </a>
          </li>
        </ul>
        <!-- End Navbar Toolbar -->

        <!-- Navbar Toolbar Right -->
        <ul class=\"nav navbar-toolbar navbar-right navbar-toolbar-right\">
          <li class=\"dropdown\">
            <a class=\"navbar-avatar dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" aria-expanded=\"false\"
            data-animation=\"scale-up\" role=\"button\">
              <h4>欢迎您：{{ userinfo.username }}</h4>
            </a>
            <ul class=\"dropdown-menu\" role=\"menu\">
              <li role=\"presentation\">
                <a href=\"javascript:void(0)\" role=\"menuitem\" onclick=\"javascript:window.location.href='/admin/index/logout'\"><i class=\"icon wb-power\" aria-hidden=\"true\"></i> 退出</a>
              </li>
            </ul>
          </li>
        </ul>
        <!-- End Navbar Toolbar Right -->
      </div>
      <!-- End Navbar Collapse -->
    </div>
  </nav>


 <div class=\"site-menubar\">
    <div class=\"site-menubar-body\">
      <div>
        <div>
          <ul class=\"site-menu\">
            <li class=\"site-menu-category\">导航栏目</li>
            <li class=\"site-menu-item has-sub\">
              <a class=\"animsition-link\" href=\"/admin/index/index\" data-slug=\"dashboard\" >
                <i class=\"site-menu-icon wb-dashboard\" aria-hidden=\"true\"></i>
                <span class=\"site-menu-title\">首页</span>
              </a>
            </li>
            <li class=\"site-menu-item has-sub active open\">
              <a href=\"javascript:void(0)\" data-slug=\"layout\">
                <i class=\"site-menu-icon wb-layout\" aria-hidden=\"true\"></i>
                <span class=\"site-menu-title\">后台用户管理</span>
                <span class=\"site-menu-arrow\"></span>
              </a>
              <ul class=\"site-menu-sub\">
                <li class=\"site-menu-item\">
                  <a class=\"animsition-link\" href=\"/admin/adminUser/add\" data-slug=\"layout-menu-collapsed\">
                    <i class=\"site-menu-icon \" aria-hidden=\"true\"></i>
                    <span class=\"site-menu-title\">添加用户</span>
                  </a>
                </li>
                <li class=\"site-menu-item\">
                  <a class=\"animsition-link\" href=\"/admin/adminUser/index\" data-slug=\"layout-menu-collapsed\">
                    <i class=\"site-menu-icon \" aria-hidden=\"true\"></i>
                    <span class=\"site-menu-title\">用户列表</span>
                  </a>
                </li>
              </ul>
            </li>
            <li class=\"site-menu-item has-sub active open\">
              <a href=\"javascript:void(0)\" data-slug=\"layout\">
                <i class=\"site-menu-icon wb-layout\" aria-hidden=\"true\"></i>
                <span class=\"site-menu-title\">城市管理</span>
                <span class=\"site-menu-arrow\"></span>
              </a>
              <ul class=\"site-menu-sub\">
                <li class=\"site-menu-item\">
                  <a class=\"animsition-link\" href=\"/admin/city/add\" data-slug=\"layout-menu-collapsed\">
                    <i class=\"site-menu-icon \" aria-hidden=\"true\"></i>
                    <span class=\"site-menu-title\">添加城市</span>
                  </a>
                </li>
                <li class=\"site-menu-item\">
                  <a class=\"animsition-link\" href=\"/admin/city/index\" data-slug=\"layout-menu-collapsed\">
                    <i class=\"site-menu-icon \" aria-hidden=\"true\"></i>
                    <span class=\"site-menu-title\">城市列表</span>
                  </a>
                </li>
              </ul>
            </li>
            <li class=\"site-menu-item has-sub active open\">
              <a href=\"javascript:void(0)\" data-slug=\"layout\">
                <i class=\"site-menu-icon wb-layout\" aria-hidden=\"true\"></i>
                <span class=\"site-menu-title\">置业顾问管理</span>
                <span class=\"site-menu-arrow\"></span>
              </a>
              <ul class=\"site-menu-sub\">
                <li class=\"site-menu-item\">
                  <a class=\"animsition-link\" href=\"/admin/propertyConsultant/add\" data-slug=\"layout-menu-collapsed\">
                    <i class=\"site-menu-icon \" aria-hidden=\"true\"></i>
                    <span class=\"site-menu-title\">添加置业顾问</span>
                  </a>
                </li>
                <li class=\"site-menu-item\">
                  <a class=\"animsition-link\" href=\"/admin/propertyConsultant/index\" data-slug=\"layout-menu-collapsed\">
                    <i class=\"site-menu-icon \" aria-hidden=\"true\"></i>
                    <span class=\"site-menu-title\">置业顾问列表</span>
                  </a>
                </li>
              </ul>
            </li>
            <li class=\"site-menu-item has-sub active open\">
              <a href=\"javascript:void(0)\" data-slug=\"layout\">
                <i class=\"site-menu-icon wb-layout\" aria-hidden=\"true\"></i>
                <span class=\"site-menu-title\">房屋管理</span>
                <span class=\"site-menu-arrow\"></span>
              </a>
              <ul class=\"site-menu-sub\">
                <li class=\"site-menu-item\">
                  <a class=\"animsition-link\" href=\"/admin/houseCategory/add\" data-slug=\"layout-menu-collapsed\">
                    <i class=\"site-menu-icon \" aria-hidden=\"true\"></i>
                    <span class=\"site-menu-title\">添加房类别</span>
                  </a>
                </li>
                <li class=\"site-menu-item\">
                  <a class=\"animsition-link\" href=\"/admin/houseCategory/index\" data-slug=\"layout-menu-collapsed\">
                    <i class=\"site-menu-icon \" aria-hidden=\"true\"></i>
                    <span class=\"site-menu-title\">房类别列表</span>
                  </a>
                </li>
                <li class=\"site-menu-item\">
                  <a class=\"animsition-link\" href=\"/admin/newHouseCatalog/add\" data-slug=\"layout-menu-collapsed\">
                    <i class=\"site-menu-icon \" aria-hidden=\"true\"></i>
                    <span class=\"site-menu-title\">添加新房条目</span>
                  </a>
                </li>
                <li class=\"site-menu-item\">
                  <a class=\"animsition-link\" href=\"/admin/newHouseCatalog/index\" data-slug=\"layout-menu-collapsed\">
                    <i class=\"site-menu-icon \" aria-hidden=\"true\"></i>
                    <span class=\"site-menu-title\">新房条目列表</span>
                  </a>
                </li>
                <li class=\"site-menu-item\">
                  <a class=\"animsition-link\" href=\"/admin/usedHouseCatalog/add\" data-slug=\"layout-menu-collapsed\">
                    <i class=\"site-menu-icon \" aria-hidden=\"true\"></i>
                    <span class=\"site-menu-title\">添加二手房条目</span>
                  </a>
                </li>
                <li class=\"site-menu-item\">
                  <a class=\"animsition-link\" href=\"/admin/usedHouseCatalog/index\" data-slug=\"layout-menu-collapsed\">
                    <i class=\"site-menu-icon \" aria-hidden=\"true\"></i>
                    <span class=\"site-menu-title\">二手房条目列表</span>
                  </a>
                </li>
                <li class=\"site-menu-item\">
                  <a class=\"animsition-link\" href=\"/admin/tenmentCatalog/add\" data-slug=\"layout-menu-collapsed\">
                    <i class=\"site-menu-icon \" aria-hidden=\"true\"></i>
                    <span class=\"site-menu-title\">添加租房条目</span>
                  </a>
                </li>
                <li class=\"site-menu-item\">
                  <a class=\"animsition-link\" href=\"/admin/tenmentCatalog/index\" data-slug=\"layout-menu-collapsed\">
                    <i class=\"site-menu-icon \" aria-hidden=\"true\"></i>
                    <span class=\"site-menu-title\">租房条目列表</span>
                  </a>
                </li>
                <li class=\"site-menu-item\">
                  <a class=\"animsition-link\" href=\"/admin/sellHouseInfo/index\" data-slug=\"layout-menu-collapsed\">
                    <i class=\"site-menu-icon \" aria-hidden=\"true\"></i>
                    <span class=\"site-menu-title\">卖房条目列表</span>
                  </a>
                </li>
                <li class=\"site-menu-item\">
                  <a class=\"animsition-link\" href=\"/admin/buyHouseCatagory/add\" data-slug=\"layout-menu-collapsed\">
                    <i class=\"site-menu-icon \" aria-hidden=\"true\"></i>
                    <span class=\"site-menu-title\">添加购房百科</span>
                  </a>
                </li>
                <li class=\"site-menu-item\">
                  <a class=\"animsition-link\" href=\"/admin/buyHouseCatagory/index\" data-slug=\"layout-menu-collapsed\">
                    <i class=\"site-menu-icon \" aria-hidden=\"true\"></i>
                    <span class=\"site-menu-title\">购房百科列表</span>
                  </a>
                </li>
              </ul>
            </li>
            <li class=\"site-menu-item has-sub active open\">
              <a href=\"javascript:void(0)\" data-slug=\"layout\">
                <i class=\"site-menu-icon wb-layout\" aria-hidden=\"true\"></i>
                <span class=\"site-menu-title\">Layouts</span>
                <span class=\"site-menu-arrow\"></span>
              </a>
              <ul class=\"site-menu-sub\">
                <li class=\"site-menu-item\">
                  <a class=\"animsition-link\" href=\"menu-collapsed.html\" data-slug=\"layout-menu-collapsed\">
                    <i class=\"site-menu-icon \" aria-hidden=\"true\"></i>
                    <span class=\"site-menu-title\">Menu Collapsed</span>
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>


  {% block content %}

  {% endblock %}


    <!-- Footer -->
  <footer class=\"site-footer\">
    <span class=\"site-footer-legal\"><i class=\"red-600 wb wb-heart\"></i> <a href=\"javascript:;\">重庆存己科技提供技术支持</a></span>
  </footer>

  <!-- Core  -->
  <script src=\"/apps/admin/views/assets/vendor/jquery/jquery.js\"></script>
  <script src=\"/apps/admin/views/assets/vendor/bootstrap/bootstrap.js\"></script>
  <script src=\"/apps/admin/views/assets/vendor/animsition/jquery.animsition.js\"></script>
  <script src=\"/apps/admin/views/assets/vendor/asscroll/jquery-asScroll.js\"></script>
  <script src=\"/apps/admin/views/assets/vendor/mousewheel/jquery.mousewheel.js\"></script>
  <script src=\"/apps/admin/views/assets/vendor/asscrollable/jquery.asScrollable.all.js\"></script>
  <script src=\"/apps/admin/views/assets/vendor/ashoverscroll/jquery-asHoverScroll.js\"></script>

  <!-- Plugins -->
  <script src=\"/apps/admin/views/assets/vendor/switchery/switchery.min.js\"></script>
  <script src=\"/apps/admin/views/assets/vendor/intro-js/intro.js\"></script>
  <script src=\"/apps/admin/views/assets/vendor/screenfull/screenfull.js\"></script>
  <script src=\"/apps/admin/views/assets/vendor/slidepanel/jquery-slidePanel.js\"></script>

  <!-- Scripts -->
  <script src=\"/apps/admin/views/assets/js/core.js\"></script>
  <script src=\"/apps/admin/views/assets/js/site.js\"></script>

  <script src=\"/apps/admin/views/assets/js/sections/menu.js\"></script>
  <script src=\"/apps/admin/views/assets/js/sections/menubar.js\"></script>
  <script src=\"/apps/admin/views/assets/js/sections/gridmenu.js\"></script>
  <script src=\"/apps/admin/views/assets/js/sections/sidebar.js\"></script>

  <script src=\"/apps/admin/views/assets/js/configs/config-colors.js\"></script>
  <script src=\"/apps/admin/views/assets/js/configs/config-tour.js\"></script>

  <script src=\"/apps/admin/views/assets/js/components/asscrollable.js\"></script>
  <script src=\"/apps/admin/views/assets/js/components/animsition.js\"></script>
  <script src=\"/apps/admin/views/assets/js/components/slidepanel.js\"></script>
  <script src=\"/apps/admin/views/assets/js/components/switchery.js\"></script>

  <!-- Scripts For This Page -->

  <!-- 引入SweetAlert js -->
  <script src=\"/public/sweetalert-master/dist/sweetalert.min.js\"></script>
  <!-- 引入 jquery.validate.min.js -->
  <script src=\"/public/jquery-validation-1.16.0/dist/jquery.validate.min.js\"></script>
  <script src=\"/public/jquery-validation-1.16.0/lib/jquery.form.js\"></script>

  {% block js %}

  {% endblock %}

  <script>
    (function(document, window, \$) {
      'use strict';

      var Site = window.Site;
      \$(document).ready(function() {
        Site.run();
      });
    })(document, window, jQuery);
  </script>


</body>

</html>
", "layouts.html", "F:\\UPUPW_AP7.0_64-1512.1\\UPUPW_AP7.0_64\\vhosts\\dev.tfw.local\\apps\\admin\\views\\layouts.html");
    }
}