<?php

/* /home/samuel/www/OktoberProva/install-master/themes/hambern-hambern-blank-bootstrap-4/layouts/default.htm */
class __TwigTemplate_d86eb95c77132b8d250a46e8eade9f91c75c1a8402ba9b2cb3b835c635512cfb extends Twig_Template
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
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">

    <link href=\"";
        // line 8
        echo $this->extensions['Cms\Twig\Extension']->themeFilter(array(0 => "assets/vendor/bootstrap/dist/css/bootstrap.min.css", 1 => "assets/vendor/font-awesome/css/font-awesome.min.css", 2 => "assets/vendor/animate.css/animate.min.css", 3 => "assets/vendor/plyr/dist/plyr.css", 4 => "assets/dist/scss/app.css"));
        // line 14
        echo "\" rel=\"stylesheet\">
    ";
        // line 15
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 16
        echo "
  </head>
  <body>

\t";
        // line 20
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("navbar"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 21
        echo "
    ";
        // line 22
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "filename", array()) == "home.htm")) {
            // line 23
            echo "      ";
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("jumbotron"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 24
            echo "    ";
        } else {
            // line 25
            echo "    <br><br>
    ";
        }
        // line 27
        echo "
  <section id=\"page\" class=\"container m-b-3\">
      <div class=\"row\">
          <div class=\"col-md-8\">";
        // line 30
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        echo "</div>
          <div class=\"col-md-4\">";
        // line 31
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("sidebar"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        echo "</div>
      </div>


  </section>

    <script src=\"";
        // line 37
        echo $this->extensions['Cms\Twig\Extension']->themeFilter(array(0 => "assets/vendor/jquery/dist/jquery.min.js", 1 => "assets/vendor/tether/dist/js/tether.min.js", 2 => "assets/vendor/bootstrap/dist/js/bootstrap.min.js", 3 => "assets/vendor/wow/dist/wow.min.js", 4 => "assets/vendor/holderjs/holder.min.js", 5 => "assets/vendor/plyr/dist/plyr.js", 6 => "assets/js/scripts.js", 7 => "assets/dist/js/app.js"));
        // line 46
        echo "\"></script>
    ";
        // line 47
        $_minify = System\Classes\CombineAssets::instance()->useMinify;
        if ($_minify) {
            echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.combined-min.js"></script>'.PHP_EOL;
        }
        else {
            echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
            echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        }
        echo '<link rel="stylesheet" property="stylesheet" href="'. Request::getBasePath()
                    .'/modules/system/assets/css/framework.extras'.($_minify ? '-min' : '').'.css">'.PHP_EOL;
        unset($_minify);
        // line 48
        echo "    ";
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 49
        echo "  </body>
</html>";
    }

    public function getTemplateName()
    {
        return "/home/samuel/www/OktoberProva/install-master/themes/hambern-hambern-blank-bootstrap-4/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 49,  107 => 48,  92 => 47,  89 => 46,  87 => 37,  76 => 31,  72 => 30,  67 => 27,  63 => 25,  60 => 24,  55 => 23,  53 => 22,  50 => 21,  46 => 20,  40 => 16,  37 => 15,  34 => 14,  32 => 8,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">

    <link href=\"{{ [
      'assets/vendor/bootstrap/dist/css/bootstrap.min.css',
      'assets/vendor/font-awesome/css/font-awesome.min.css',
      'assets/vendor/animate.css/animate.min.css',
      'assets/vendor/plyr/dist/plyr.css',
      'assets/dist/scss/app.css',
    ]|theme }}\" rel=\"stylesheet\">
    {% styles %}

  </head>
  <body>

\t{% partial 'navbar' %}

    {% if this.page.filename == \"home.htm\" %}
      {% partial 'jumbotron' %}
    {% else %}
    <br><br>
    {% endif %}

  <section id=\"page\" class=\"container m-b-3\">
      <div class=\"row\">
          <div class=\"col-md-8\">{% page %}</div>
          <div class=\"col-md-4\">{% partial 'sidebar' %}</div>
      </div>


  </section>

    <script src=\"{{ [
      'assets/vendor/jquery/dist/jquery.min.js',
      'assets/vendor/tether/dist/js/tether.min.js',
      'assets/vendor/bootstrap/dist/js/bootstrap.min.js',
      'assets/vendor/wow/dist/wow.min.js',
      'assets/vendor/holderjs/holder.min.js',
      'assets/vendor/plyr/dist/plyr.js',
      'assets/js/scripts.js',
      'assets/dist/js/app.js'
    ]|theme }}\"></script>
    {% framework extras %}
    {% scripts %}
  </body>
</html>", "/home/samuel/www/OktoberProva/install-master/themes/hambern-hambern-blank-bootstrap-4/layouts/default.htm", "");
    }
}
