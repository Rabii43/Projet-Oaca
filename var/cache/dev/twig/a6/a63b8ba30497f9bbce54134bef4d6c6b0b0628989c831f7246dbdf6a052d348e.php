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

/* @JMSSerializer/Collector/panel.html.twig */
class __TwigTemplate_9a3488fb9115c9dee92ca3a7067d0fd9877ffacfb845f8b51c65e78f17c479aa extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'toolbar' => [$this, 'block_toolbar'],
            'head' => [$this, 'block_head'],
            'menu' => [$this, 'block_menu'],
            'panel' => [$this, 'block_panel'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@JMSSerializer/Collector/panel.html.twig"));

        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@JMSSerializer/Collector/panel.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        // line 5
        ob_start();
        // line 6
        echo twig_include($this->env, $context, "@JMSSerializer/icon.svg");
        echo "
        <span class=\"sf-toolbar-label\">S:</span>";
        // line 7
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 7, $this->source); })()), "runs", [0 => 1], "method", false, false, false, 7)), "html", null, true);
        echo "
        <span class=\"sf-toolbar-label\">D:</span>";
        // line 8
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 8, $this->source); })()), "runs", [0 => 2], "method", false, false, false, 8)), "html", null, true);
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 11
        ob_start();
        // line 12
        echo "<div class=\"sf-toolbar-info-piece\">
            <b>Serializations</b>
            <span class=\"sf-toolbar-status\">";
        // line 14
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 14, $this->source); })()), "runs", [0 => 1], "method", false, false, false, 14)), "html", null, true);
        echo "</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Deserializations</b>
            <span class=\"sf-toolbar-status\">";
        // line 18
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 18, $this->source); })()), "runs", [0 => 2], "method", false, false, false, 18)), "html", null, true);
        echo "</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Listeners</b>
            <span class=\"sf-toolbar-status\">";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 22, $this->source); })()), "getNumListeners", [0 => "called"], "method", false, false, false, 22), "html", null, true);
        echo "</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Handlers</b>
            <span class=\"sf-toolbar-status\">";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 26, $this->source); })()), "getNumHandlers", [0 => "called"], "method", false, false, false, 26), "html", null, true);
        echo "</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Metadata</b>
            <span class=\"sf-toolbar-status ";
        // line 30
        echo (((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 30, $this->source); })()), "loadedMetadata", [], "any", false, false, false, 30)), 0))) ? ("sf-toolbar-status-none") : (""));
        echo "\">";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 30, $this->source); })()), "loadedMetadata", [], "any", false, false, false, 30)), "html", null, true);
        echo "</span>
        </div>";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 34
        $this->loadTemplate("@WebProfiler/Profiler/toolbar_item.html.twig", "@JMSSerializer/Collector/panel.html.twig", 34)->display(twig_array_merge($context, ["link" => (isset($context["profiler_url"]) || array_key_exists("profiler_url", $context) ? $context["profiler_url"] : (function () { throw new RuntimeError('Variable "profiler_url" does not exist.', 34, $this->source); })())]));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 37
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        // line 38
        echo "<style>
        ";
        // line 39
        echo twig_include($this->env, $context, "@JMSSerializer/Collector/style/jms.css.twig");
        echo "
    </style>
    <style>
        .margin-left {
            margin-left: 10px;
        }

        .margin-top {
            margin-top: 10px;
        }

        .margin-bottom {
            margin-bottom: 10px;
        }
    </style>
    <script type=\"text/javascript\">
        ";
        // line 55
        echo twig_include($this->env, $context, "@JMSSerializer/Collector/script/jms.js.twig");
        echo "
    </script>
    ";
        // line 57
        $this->displayParentBlock("head", $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 60
    public function block_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        // line 62
        echo "    ";
        $context["total"] = (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 62, $this->source); })()), "runs", [0 => 1], "method", false, false, false, 62)) + twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 62, $this->source); })()), "runs", [0 => 2], "method", false, false, false, 62)));
        // line 63
        echo "    <span class=\"label ";
        echo (((0 === twig_compare((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 63, $this->source); })()), 0))) ? ("disabled") : (""));
        echo "\">
        <span class=\"icon\">
            ";
        // line 65
        echo twig_include($this->env, $context, "@JMSSerializer/icon.svg");
        echo "
        </span>
        <strong>JMS Serializer</strong>

        <span class=\"count\">
            <span>";
        // line 70
        echo twig_escape_filter($this->env, (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 70, $this->source); })()), "html", null, true);
        echo "</span>
        </span>

    </span>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 76
    public function block_panel($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        // line 77
        echo "<h2>JMS Serializer</h2>

    <div class=\"metrics\">
        <div class=\"metric\">
            <span class=\"value\">";
        // line 81
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 81, $this->source); })()), "runs", [0 => 1], "method", false, false, false, 81)), "html", null, true);
        echo "</span>
            <span class=\"label\">Serializations</span>
        </div>
        <div class=\"metric\">
            <span class=\"value\">";
        // line 85
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 85, $this->source); })()), "runs", [0 => 2], "method", false, false, false, 85)), "html", null, true);
        echo "</span>
            <span class=\"label\">Deserializations</span>
        </div>
        <div class=\"metric-divider\"></div>
        <div class=\"metric\">
            <span class=\"value\">";
        // line 90
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 90, $this->source); })()), "triggeredEvents", [], "any", false, false, false, 90), "count", [], "any", false, false, false, 90), "html", null, true);
        echo "</span>
            <span class=\"label\">Triggered event listeners</span>
        </div>
        <div class=\"metric\">
            <span class=\"value\">";
        // line 94
        echo twig_escape_filter($this->env, twig_round(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 94, $this->source); })()), "triggeredEvents", [], "any", false, false, false, 94), "duration", [], "any", false, false, false, 94), 2), "html", null, true);
        echo " <span class=\"unit\">ms</span></span>
            <span class=\"label\">Triggered event listeners (time)</span>
        </div>
    </div>

    <div class=\"sf-tabs\">
        <div class=\"tab\">
            <h3 class=\"tab-title jms-toggle\" data-toggle=\"#jms-events\">
                Events
                <span class=\"badge\">
                    ";
        // line 104
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 104, $this->source); })()), "triggeredListeners", [], "any", false, false, false, 104)), "html", null, true);
        echo "
                    (";
        // line 105
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 105, $this->source); })()), "getNumListeners", [0 => "called"], "method", false, false, false, 105), "html", null, true);
        echo " listeners)
                </span>


            </h3>

            <div class=\"tab-content\">
                <p class=\"help\">Triggered event listeners</p>

                <div id=\"jms-events\">";
        // line 115
        $this->loadTemplate("@JMSSerializer/Collector/events.html.twig", "@JMSSerializer/Collector/panel.html.twig", 115)->display($context);
        // line 116
        echo "</div>
            </div>
        </div>

        <div class=\"tab\">
            <h3 class=\"tab-title jms-toggle\" data-toggle=\"#jms-handlers\">
                Handlers
                <span class=\"badge\">
                    ";
        // line 124
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 124, $this->source); })()), "triggeredHandlers", [], "any", false, false, false, 124)), "html", null, true);
        echo "
                    (";
        // line 125
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 125, $this->source); })()), "getNumHandlers", [0 => "called"], "method", false, false, false, 125), "html", null, true);
        echo " types)
                </span>
            </h3>

            <div class=\"tab-content\">
                <p class=\"help\">Triggered event handlers</p>

                <div id=\"jms-handlers\">";
        // line 133
        $this->loadTemplate("@JMSSerializer/Collector/handlers.html.twig", "@JMSSerializer/Collector/panel.html.twig", 133)->display($context);
        // line 134
        echo "</div>
            </div>
        </div>

        <div class=\"tab\">
            <h3 class=\"tab-title\">
                Metadata
                <span class=\"badge ";
        // line 141
        echo (((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 141, $this->source); })()), "loadedMetadata", [], "any", false, false, false, 141)), 0))) ? ("status-info") : (""));
        echo "\">";
        // line 142
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 142, $this->source); })()), "loadedMetadata", [], "any", false, false, false, 142)), "html", null, true);
        // line 143
        echo "</span>
            </h3>

            <div class=\"tab-content\">
                <p class=\"help\">Loaded metadata</p>

                <div id=\"jms-metadata\">";
        // line 150
        $this->loadTemplate("@JMSSerializer/Collector/metadata.html.twig", "@JMSSerializer/Collector/panel.html.twig", 150)->display($context);
        // line 151
        echo "</div>
            </div>
        </div>
    </div>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@JMSSerializer/Collector/panel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  315 => 151,  313 => 150,  305 => 143,  303 => 142,  300 => 141,  291 => 134,  289 => 133,  279 => 125,  275 => 124,  265 => 116,  263 => 115,  251 => 105,  247 => 104,  234 => 94,  227 => 90,  219 => 85,  212 => 81,  206 => 77,  199 => 76,  188 => 70,  180 => 65,  174 => 63,  171 => 62,  164 => 60,  157 => 57,  152 => 55,  133 => 39,  130 => 38,  123 => 37,  116 => 34,  109 => 30,  102 => 26,  95 => 22,  88 => 18,  81 => 14,  77 => 12,  75 => 11,  72 => 8,  68 => 7,  64 => 6,  62 => 5,  55 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{%- extends '@WebProfiler/Profiler/layout.html.twig' -%}

{%- block toolbar -%}

    {%- set icon -%}
        {{- include('@JMSSerializer/icon.svg') }}
        <span class=\"sf-toolbar-label\">S:</span>{{- collector.runs(1)|length }}
        <span class=\"sf-toolbar-label\">D:</span>{{- collector.runs(2)|length }}
    {%- endset -%}

    {%- set text -%}
        <div class=\"sf-toolbar-info-piece\">
            <b>Serializations</b>
            <span class=\"sf-toolbar-status\">{{ collector.runs(1)|length }}</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Deserializations</b>
            <span class=\"sf-toolbar-status\">{{ collector.runs(2)|length }}</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Listeners</b>
            <span class=\"sf-toolbar-status\">{{ collector.getNumListeners('called') }}</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Handlers</b>
            <span class=\"sf-toolbar-status\">{{ collector.getNumHandlers('called') }}</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Metadata</b>
            <span class=\"sf-toolbar-status {{ collector.loadedMetadata|length > 0 ? 'sf-toolbar-status-none' : '' }}\">{{ collector.loadedMetadata|length }}</span>
        </div>
    {%- endset -%}

    {%- include '@WebProfiler/Profiler/toolbar_item.html.twig' with { 'link': profiler_url } -%}
{%- endblock -%}

{%- block head -%}
    <style>
        {{ include('@JMSSerializer/Collector/style/jms.css.twig') }}
    </style>
    <style>
        .margin-left {
            margin-left: 10px;
        }

        .margin-top {
            margin-top: 10px;
        }

        .margin-bottom {
            margin-bottom: 10px;
        }
    </style>
    <script type=\"text/javascript\">
        {{ include('@JMSSerializer/Collector/script/jms.js.twig') }}
    </script>
    {{ parent() }}
{%- endblock -%}

{%- block menu -%}
    {# This left-hand menu appears when using the full-screen profiler. #}
    {% set total = (collector.runs(1)|length) + (collector.runs(2)|length) %}
    <span class=\"label {{ total == 0 ? 'disabled' : '' }}\">
        <span class=\"icon\">
            {{ include('@JMSSerializer/icon.svg') }}
        </span>
        <strong>JMS Serializer</strong>

        <span class=\"count\">
            <span>{{ total }}</span>
        </span>

    </span>
{%- endblock -%}

{%- block panel -%}
    <h2>JMS Serializer</h2>

    <div class=\"metrics\">
        <div class=\"metric\">
            <span class=\"value\">{{- collector.runs(1)|length }}</span>
            <span class=\"label\">Serializations</span>
        </div>
        <div class=\"metric\">
            <span class=\"value\">{{- collector.runs(2)|length }}</span>
            <span class=\"label\">Deserializations</span>
        </div>
        <div class=\"metric-divider\"></div>
        <div class=\"metric\">
            <span class=\"value\">{{- collector.triggeredEvents.count }}</span>
            <span class=\"label\">Triggered event listeners</span>
        </div>
        <div class=\"metric\">
            <span class=\"value\">{{- collector.triggeredEvents.duration|round(2) }} <span class=\"unit\">ms</span></span>
            <span class=\"label\">Triggered event listeners (time)</span>
        </div>
    </div>

    <div class=\"sf-tabs\">
        <div class=\"tab\">
            <h3 class=\"tab-title jms-toggle\" data-toggle=\"#jms-events\">
                Events
                <span class=\"badge\">
                    {{ collector.triggeredListeners|length }}
                    ({{ collector.getNumListeners('called') }} listeners)
                </span>


            </h3>

            <div class=\"tab-content\">
                <p class=\"help\">Triggered event listeners</p>

                <div id=\"jms-events\">
                    {%- include '@JMSSerializer/Collector/events.html.twig' -%}
                </div>
            </div>
        </div>

        <div class=\"tab\">
            <h3 class=\"tab-title jms-toggle\" data-toggle=\"#jms-handlers\">
                Handlers
                <span class=\"badge\">
                    {{ collector.triggeredHandlers|length }}
                    ({{ collector.getNumHandlers('called') }} types)
                </span>
            </h3>

            <div class=\"tab-content\">
                <p class=\"help\">Triggered event handlers</p>

                <div id=\"jms-handlers\">
                    {%- include '@JMSSerializer/Collector/handlers.html.twig' -%}
                </div>
            </div>
        </div>

        <div class=\"tab\">
            <h3 class=\"tab-title\">
                Metadata
                <span class=\"badge {{ collector.loadedMetadata|length > 0 ? 'status-info' : '' }}\">
                    {{- collector.loadedMetadata|length -}}
                </span>
            </h3>

            <div class=\"tab-content\">
                <p class=\"help\">Loaded metadata</p>

                <div id=\"jms-metadata\">
                    {%- include '@JMSSerializer/Collector/metadata.html.twig' -%}
                </div>
            </div>
        </div>
    </div>
{%- endblock -%}
", "@JMSSerializer/Collector/panel.html.twig", "/home/terres-rabii/Documents/travail/Pfe/Projet-Oaca/vendor/jms/serializer-bundle/Resources/views/Collector/panel.html.twig");
    }
}
