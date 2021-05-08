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

/* C:\xampp\htdocs\acme_oct/themes/acme/pages/blog/post.htm */
class __TwigTemplate_8ab1a0514177bf38ac0cd77034d5aa4138bc359e0638442410eff56578397469 extends \Twig\Template
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
        $tags = array("set" => 1, "if" => 7, "for" => 26);
        $filters = array("escape" => 9, "raw" => 17, "date" => 21);
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
        $context["nextPost"] = twig_get_attribute($this->env, $this->source, ($context["blogPost"] ?? null), "nextPost", [], "any", false, false, true, 2);
        // line 3
        $context["lastPost"] = twig_get_attribute($this->env, $this->source, ($context["blogPost"] ?? null), "previousPost", [], "any", false, false, true, 3);
        // line 4
        echo "
<div class=\"post-single\">
    <article>
        ";
        // line 7
        if (($context["image"] ?? null)) {
            // line 8
            echo "            <div class=\"post-image\">
                <img src=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["image"] ?? null), "path", [], "any", false, false, true, 9), 9, $this->source), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "title", [], "any", false, false, true, 9), 9, $this->source), "html", null, true);
            echo "\" />
            </div>
        ";
        }
        // line 12
        echo "        <header class=\"post-title\">
            <h1>";
        // line 13
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "title", [], "any", false, false, true, 13), 13, $this->source), "html", null, true);
        echo "</h1>
        </header>

        <div class=\"post-content\">
            ";
        // line 17
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "content_html", [], "any", false, false, true, 17), 17, $this->source);
        echo "
        </div>

        <footer>
            <span class=\"published\"><i class=\"icon icon-calendar\"></i> ";
        // line 21
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "published_at", [], "any", false, false, true, 21), 21, $this->source), "M d, Y"), "html", null, true);
        echo "</span>
            ";
        // line 23
        echo "            ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "categories", [], "any", false, false, true, 23), "count", [], "any", false, false, true, 23)) {
            echo " in
                <span class=\"category\">
                    <i class=\"icon icon-folder-open\"></i>
                    ";
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "categories", [], "any", false, false, true, 26));
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
                // line 27
                echo "                        <a href=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["category"], "url", [], "any", false, false, true, 27), 27, $this->source), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, true, 27), 27, $this->source), "html", null, true);
                echo "</a>";
                if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, true, 27)) {
                    echo ", ";
                }
                // line 28
                echo "                    ";
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
            // line 29
            echo "                </span>
            ";
        }
        // line 31
        echo "        </footer>
    </article>
    <nav class=\"post-links\">
        ";
        // line 34
        if (($context["lastPost"] ?? null)) {
            // line 35
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["lastPost"] ?? null), "url", [], "any", false, false, true, 35), 35, $this->source), "html", null, true);
            echo "\" class=\"link-previous\">
                <p>Previous</p>
                <span>";
            // line 37
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["lastPost"] ?? null), "title", [], "any", false, false, true, 37), 37, $this->source), "html", null, true);
            echo "</span>
            </a>
        ";
        }
        // line 40
        echo "        ";
        if (($context["nextPost"] ?? null)) {
            // line 41
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["nextPost"] ?? null), "url", [], "any", false, false, true, 41), 41, $this->source), "html", null, true);
            echo "\" class=\"link-next\">
                <p>Next</p>
                <span>";
            // line 43
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["nextPost"] ?? null), "title", [], "any", false, false, true, 43), 43, $this->source), "html", null, true);
            echo "</span>
            </a>
        ";
        }
        // line 46
        echo "    </nav>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\acme_oct/themes/acme/pages/blog/post.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 46,  186 => 43,  180 => 41,  177 => 40,  171 => 37,  165 => 35,  163 => 34,  158 => 31,  154 => 29,  140 => 28,  131 => 27,  114 => 26,  107 => 23,  103 => 21,  96 => 17,  89 => 13,  86 => 12,  78 => 9,  75 => 8,  73 => 7,  68 => 4,  66 => 3,  64 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set image = post.featured_images.first %}
{% set nextPost = blogPost.nextPost %}
{% set lastPost = blogPost.previousPost %}

<div class=\"post-single\">
    <article>
        {% if image %}
            <div class=\"post-image\">
                <img src=\"{{ image.path }}\" alt=\"{{ post.title }}\" />
            </div>
        {% endif %}
        <header class=\"post-title\">
            <h1>{{ post.title }}</h1>
        </header>

        <div class=\"post-content\">
            {{ post.content_html|raw }}
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
    </article>
    <nav class=\"post-links\">
        {% if lastPost %}
            <a href=\"{{ lastPost.url }}\" class=\"link-previous\">
                <p>Previous</p>
                <span>{{ lastPost.title }}</span>
            </a>
        {% endif %}
        {% if nextPost %}
            <a href=\"{{ nextPost.url }}\" class=\"link-next\">
                <p>Next</p>
                <span>{{ nextPost.title }}</span>
            </a>
        {% endif %}
    </nav>
</div>", "C:\\xampp\\htdocs\\acme_oct/themes/acme/pages/blog/post.htm", "");
    }
}
