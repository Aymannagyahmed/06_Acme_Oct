<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* E:\WEB\Laravel_Projcts\07_octobercms\htdocs\acme_oct/themes/acme/partials/site/header.htm */
class __TwigTemplate_179454baa070a5e4b5fc00ac18b6ea385421cb60173b59298f228b236032ee9f extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = array("if" => 9);
        $filters = array("page" => 2, "escape" => 2);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['page', 'escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<nav class=\"navbar navbar-expand-md navbar-dark bg-dark\">
    <a class=\"navbar-brand\" href=\"";
        // line 2
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\">";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 2), "site_name", [], "any", false, false, true, 2), 2, $this->source), "html", null, true);
        echo "</a>
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarsExampleDefault\" aria-controls=\"navbarsExampleDefault\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>
    
    <div class=\"collapse navbar-collapse\" id=\"navbarsExampleDefault\">
      <ul class=\"navbar-nav mr-auto\">
        <li class=\"nav-item ";
        // line 9
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 9), "id", [], "any", false, false, true, 9) == "home")) {
            echo "active";
        }
        echo "  \">
          <a class=\"nav-link\" 
          href=\"";
        // line 11
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\">Home <span class=\"sr-only\">(current)</span></a>
        </li>
        
        <li class=\"nav-item ";
        // line 14
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 14), "id", [], "any", false, false, true, 14) == "about")) {
            echo "active";
        }
        echo "  \">
          <a class=\"nav-link\" 
          href=\"";
        // line 16
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("about");
        echo "\">About <span class=\"sr-only\">(current)</span></a>
        </li>

        <li class=\"nav-item ";
        // line 19
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 19), "id", [], "any", false, false, true, 19) == "blog")) {
            echo "active";
        }
        echo "  \">
          <a class=\"nav-link\" 
          href=\"";
        // line 21
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("blog");
        echo "\">Blog <span class=\"sr-only\">(current)</span></a>
        </li>

        <li class=\"nav-item ";
        // line 24
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 24), "id", [], "any", false, false, true, 24) == "contact")) {
            echo "active";
        }
        echo "  \">
          <a class=\"nav-link\" 
          href=\"";
        // line 26
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("contact");
        echo "\">Contact <span class=\"sr-only\">(current)</span></a>
        </li>
      </ul>
      <form class=\"form-inline my-2 my-lg-0\">
        <input class=\"form-control mr-sm-2\" type=\"text\" placeholder=\"Search\" aria-label=\"Search\">
        <button class=\"btn btn-secondary my-2 my-sm-0\" type=\"submit\">Search</button>
      </form>
    </div>
  </nav>";
    }

    public function getTemplateName()
    {
        return "E:\\WEB\\Laravel_Projcts\\07_octobercms\\htdocs\\acme_oct/themes/acme/partials/site/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 26,  116 => 24,  110 => 21,  103 => 19,  97 => 16,  90 => 14,  84 => 11,  77 => 9,  65 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"navbar navbar-expand-md navbar-dark bg-dark\">
    <a class=\"navbar-brand\" href=\"{{'home'|page}}\">{{this.theme.site_name}}</a>
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarsExampleDefault\" aria-controls=\"navbarsExampleDefault\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>
    
    <div class=\"collapse navbar-collapse\" id=\"navbarsExampleDefault\">
      <ul class=\"navbar-nav mr-auto\">
        <li class=\"nav-item {% if this.page.id =='home'%}active{%endif%}  \">
          <a class=\"nav-link\" 
          href=\"{{'home'|page}}\">Home <span class=\"sr-only\">(current)</span></a>
        </li>
        
        <li class=\"nav-item {% if this.page.id =='about'%}active{%endif%}  \">
          <a class=\"nav-link\" 
          href=\"{{'about'|page}}\">About <span class=\"sr-only\">(current)</span></a>
        </li>

        <li class=\"nav-item {% if this.page.id =='blog'%}active{%endif%}  \">
          <a class=\"nav-link\" 
          href=\"{{'blog'|page}}\">Blog <span class=\"sr-only\">(current)</span></a>
        </li>

        <li class=\"nav-item {% if this.page.id =='contact'%}active{%endif%}  \">
          <a class=\"nav-link\" 
          href=\"{{'contact'|page}}\">Contact <span class=\"sr-only\">(current)</span></a>
        </li>
      </ul>
      <form class=\"form-inline my-2 my-lg-0\">
        <input class=\"form-control mr-sm-2\" type=\"text\" placeholder=\"Search\" aria-label=\"Search\">
        <button class=\"btn btn-secondary my-2 my-sm-0\" type=\"submit\">Search</button>
      </form>
    </div>
  </nav>", "E:\\WEB\\Laravel_Projcts\\07_octobercms\\htdocs\\acme_oct/themes/acme/partials/site/header.htm", "");
    }
}
