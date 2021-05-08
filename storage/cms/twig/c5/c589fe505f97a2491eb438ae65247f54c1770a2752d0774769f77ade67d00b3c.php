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

/* C:\xampp\htdocs\acme_oct/themes/responsiv-clean/pages/home.htm */
class __TwigTemplate_e08ab8cb5fd80897cd0b829ce52295ba1ac1ad327acc3ed9a6fcaa84bfb4cbf6 extends \Twig\Template
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
        $tags = array("partial" => 4);
        $filters = array("escape" => 12);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['partial'],
                ['escape'],
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
        echo "<div
    id=\"homePosts\"
    class=\"post-list home-posts\">
    ";
        // line 4
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("home/posts"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 5
        echo "</div>
<div
    class=\"text-center\"
    data-control=\"auto-pager\"
    data-request=\"onPagePosts\"
    data-request-update=\"'home/posts': '@#homePosts'\"
    data-current-page=\"1\"
    data-last-page=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "lastPage", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
        echo "\">
    <a class=\"text-muted oc-loading\">Fetching posts..</a>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\acme_oct/themes/responsiv-clean/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 12,  71 => 5,  67 => 4,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div
    id=\"homePosts\"
    class=\"post-list home-posts\">
    {% partial 'home/posts' %}
</div>
<div
    class=\"text-center\"
    data-control=\"auto-pager\"
    data-request=\"onPagePosts\"
    data-request-update=\"'home/posts': '@#homePosts'\"
    data-current-page=\"1\"
    data-last-page=\"{{ posts.lastPage }}\">
    <a class=\"text-muted oc-loading\">Fetching posts..</a>
</div>", "C:\\xampp\\htdocs\\acme_oct/themes/responsiv-clean/pages/home.htm", "");
    }
}
