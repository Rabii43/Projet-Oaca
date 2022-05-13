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

/* @JMSSerializer/Collector/style/jms.css.twig */
class __TwigTemplate_0915bd078865d5f46949d5df41708b50c6ecfc0495d4487c45e0af27cabc24be extends Template
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
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@JMSSerializer/Collector/style/jms.css.twig"));

        // line 1
        echo ".jms-push-right {
    float: right;
}

.jms-plugin-name {
    font-size: 130%;
    font-weight: bold;
    text-align: center;
}

.jms-hidden {
    display: none;
}

.jms-toggle {
    cursor: pointer;
}

.jms-center {
    text-align: center;
}

/**
 * Toolbar
 */
.jms-toolbar {
    display: flex;
    justify-content: space-between;
}

.jms-toolbar>*:not(:last-child) {
    margin-right:5px;
}

.jms-toolbar .jms-copy-as-curl {
    flex: 1;
}

.jms-copy-as-curl {
    font-size: 0; /*hide line return spacings*/
    display: flex;
}

.jms-copy-as-curl>input {
    padding: .5em .75em;
    border-radius: 2px 0px 0px 2px;
    border: 0;
    line-height: inherit;
    background-color: #eee;
    opacity: 1;
    font-size: 14px;
    flex: 1;
}

.jms-copy-as-curl>button {
    font-size: 14px;
    border-radius: 0px 2px 2px 0px;
}

/**
 * Message
 */
.jms-message {
    box-sizing: border-box;
    padding: 5px;
    flex: 1;
    margin: 5px;
    overflow-x: auto;
    white-space: nowrap;
}

.jms-messages {
    clear: both;
    display: flex;
}

/**
 * Stack
 */
.jms-stack>.jms-stack {
    margin-left: 2.5em;
}

/**
 * Stack header
 */
.jms-stack-header {
    display: flex;
    justify-content: space-between;

    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0px 0px 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}

.jms-stack-failed {
    color:#B0413E;
}

.jms-stack-success {
    color: #4F805D;
}

.jms-stack-header .jms-stack-header-target {
    flex: 1;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
    background: white;
    color: black;
    font-size: 0; /*hide line return spacings*/
}

.jms-scheme-http {
    display: none;
}

.jms-scheme-https {
    color: green;
}

.jms-target, .jms-scheme {
    font-weight: normal;
}

.jms-target, .jms-host, .jms-scheme {
    font-size: 12px;
}

.jms-duration {
    min-width: 6ch;
    text-align:center;
}

/**
 * HTTP method colors from swagger-ui.
 */
.jms-method.label {
    color: black;
    width: 9ch;
    text-align: center;
}

.jms-method-post.label {
    background: #49cc90;
}

.jms-method-get.label {
    background: #61affe;
}

.jms-method-put.label {
    background: #fca130;
}

.jms-method-delete.label {
    background: #f93e3e;
}

.jms-method-head.label {
    background: #9012fe;
    color: white;
}

.jms-method-patch.label {
    background: #50e3c2;
}

.jms-method-options.label {
    background: #0d5aa7;
    color: white;
}

.jms-method-connect.label {
    background: #ebebeb;
}

.jms-method-trace.label {
    background: #ebebeb;
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@JMSSerializer/Collector/style/jms.css.twig";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(".jms-push-right {
    float: right;
}

.jms-plugin-name {
    font-size: 130%;
    font-weight: bold;
    text-align: center;
}

.jms-hidden {
    display: none;
}

.jms-toggle {
    cursor: pointer;
}

.jms-center {
    text-align: center;
}

/**
 * Toolbar
 */
.jms-toolbar {
    display: flex;
    justify-content: space-between;
}

.jms-toolbar>*:not(:last-child) {
    margin-right:5px;
}

.jms-toolbar .jms-copy-as-curl {
    flex: 1;
}

.jms-copy-as-curl {
    font-size: 0; /*hide line return spacings*/
    display: flex;
}

.jms-copy-as-curl>input {
    padding: .5em .75em;
    border-radius: 2px 0px 0px 2px;
    border: 0;
    line-height: inherit;
    background-color: #eee;
    opacity: 1;
    font-size: 14px;
    flex: 1;
}

.jms-copy-as-curl>button {
    font-size: 14px;
    border-radius: 0px 2px 2px 0px;
}

/**
 * Message
 */
.jms-message {
    box-sizing: border-box;
    padding: 5px;
    flex: 1;
    margin: 5px;
    overflow-x: auto;
    white-space: nowrap;
}

.jms-messages {
    clear: both;
    display: flex;
}

/**
 * Stack
 */
.jms-stack>.jms-stack {
    margin-left: 2.5em;
}

/**
 * Stack header
 */
.jms-stack-header {
    display: flex;
    justify-content: space-between;

    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0px 0px 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}

.jms-stack-failed {
    color:#B0413E;
}

.jms-stack-success {
    color: #4F805D;
}

.jms-stack-header .jms-stack-header-target {
    flex: 1;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
    background: white;
    color: black;
    font-size: 0; /*hide line return spacings*/
}

.jms-scheme-http {
    display: none;
}

.jms-scheme-https {
    color: green;
}

.jms-target, .jms-scheme {
    font-weight: normal;
}

.jms-target, .jms-host, .jms-scheme {
    font-size: 12px;
}

.jms-duration {
    min-width: 6ch;
    text-align:center;
}

/**
 * HTTP method colors from swagger-ui.
 */
.jms-method.label {
    color: black;
    width: 9ch;
    text-align: center;
}

.jms-method-post.label {
    background: #49cc90;
}

.jms-method-get.label {
    background: #61affe;
}

.jms-method-put.label {
    background: #fca130;
}

.jms-method-delete.label {
    background: #f93e3e;
}

.jms-method-head.label {
    background: #9012fe;
    color: white;
}

.jms-method-patch.label {
    background: #50e3c2;
}

.jms-method-options.label {
    background: #0d5aa7;
    color: white;
}

.jms-method-connect.label {
    background: #ebebeb;
}

.jms-method-trace.label {
    background: #ebebeb;
}
", "@JMSSerializer/Collector/style/jms.css.twig", "/home/terres-rabii/Documents/travail/Pfe/Projet-Oaca/vendor/jms/serializer-bundle/Resources/views/Collector/style/jms.css.twig");
    }
}
