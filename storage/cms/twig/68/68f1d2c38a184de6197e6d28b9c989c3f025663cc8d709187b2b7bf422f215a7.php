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

/* C:\xampp\htdocs\acme_oct/themes/responsiv-clean/partials/blog/post.htm */
class __TwigTemplate_c41c666de3ae59e2eb70d26131805d2d8009319f0a120c8d356f1f55b3e31a5f extends \Twig\Template
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
        $tags = array("set" => 1, "if" => 4, "for" => 24);
        $filters = array("escape" => 6, "raw" => 15, "date" => 19);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for'],
                ['escape', 'raw', 'date'],
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
        $context["image"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "featured_images", [], "any", false, false, true, 1), "first", [], "any", false, false, true, 1);
        // line 2
        echo "<article>

    ";
        // line 4
        if (($context["image"] ?? null)) {
            // line 5
            echo "        <div class=\"post-image\">
            <a href=\"";
            // line 6
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "url", [], "any", false, false, true, 6), 6, $this->source), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["image"] ?? null), "path", [], "any", false, false, true, 6), 6, $this->source), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "title", [], "any", false, false, true, 6), 6, $this->source), "html", null, true);
            echo "\" /></a>
        </div>
    ";
        } else {
            // line 9
            echo "        <header class=\"post-title\">
            <h1><a href=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "url", [], "any", false, false, true, 10), 10, $this->source), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "title", [], "any", false, false, true, 10), 10, $this->source), "html", null, true);
            echo "</a></h1>
        </header>
    ";
        }
        // line 13
        echo "
    <div class=\"post-content\">
        ";
        // line 15
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "summary", [], "any", false, false, true, 15), 15, $this->source);
        echo "
    </div>

    <footer>
        <span class=\"published\"><i class=\"icon icon-calendar\"></i> ";
        // line 19
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "published_at", [], "any", false, false, true, 19), 19, $this->source), "M d, Y"), "html", null, true);
        echo "</span>
        ";
        // line 21
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "categories", [], "any", false, false, true, 21), "count", [], "any", false, false, true, 21)) {
            echo " in
            <span class=\"category\">
                <i class=\"icon icon-folder-open\"></i>
                ";
            // line 24
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "categories", [], "any", false, false, true, 24));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 25
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["category"], "url", [], "any", false, false, true, 25), 25, $this->source), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, true, 25), 25, $this->source), "html", null, true);
                echo "</a>";
                if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, true, 25)) {
                    echo ", ";
                }
                // line 26
                echo "                ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "            </span>
        ";
        }
        // line 29
        echo "    </footer>
</article>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\acme_oct/themes/responsiv-clean/partials/blog/post.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 29,  156 => 27,  142 => 26,  133 => 25,  116 => 24,  109 => 21,  105 => 19,  98 => 15,  94 => 13,  86 => 10,  83 => 9,  73 => 6,  70 => 5,  68 => 4,  64 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set image = post.featured_images.first %}
<article>

    {% if image %}
        <div class=\"post-image\">
            <a href=\"{{ post.url }}\"><img src=\"{{ image.path }}\" alt=\"{{ post.title }}\" /></a>
        </div>
    {% else %}
        <header class=\"post-title\">
            <h1><a href=\"{{ post.url }}\">{{ post.title }}</a></h1>
        </header>
    {% endif %}

    <div class=\"post-content\">
        {{ post.summary|raw }}
    </div>

    <footer>
        <span class=\"published\"><i class=\"icon icon-calendar\"></i> {{ post.published_at|date('M d, Y') }}</span>
        {# <span class=\"author\"><i class=\"icon icon-user\"></i> {{ post.author.full_name }}</span> #}
        {% if post.categories.count %} in
            <span class=\"category\">
                <i class=\"icon icon-folder-open\"></i>
                {% for category in post.categories %}
                    <a href=\"{{ category.url }}\">{{ category.name }}</a>{% if not loop.last %}, {% endif %}
                {% endfor %}
            </span>
        {% endif %}
    </footer>
</article>", "C:\\xampp\\htdocs\\acme_oct/themes/responsiv-clean/partials/blog/post.htm", "");
    }
}
