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

/* formulaire/formulaire.html.twig */
class __TwigTemplate_18ef12b41f1f3103cfc4d62c1950d808 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "formulaire/formulaire.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "formulaire/formulaire.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "formulaire/formulaire.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<div class=\"container-fluid\"> 
<div class='text-center mb-5 '>
    <h1><b>Formulaire de contacte</b></h1>
</div>
    <div class=\"d-flex justify-content-center\">
       
       <form action=\"#\" methode=\"post\" class=\"w-25\" >
            <div class=\"form-group row \">
                <label class='col-form-label'for=\"utilisateur\" >Utilisateur :</label>
                <input type=\"text\" class=\"form-control\" placeholder=\"sara.dsn\" >
            </div>
            <div class=\"form-group row \">
                <label class='col-form-label'for=\"mail\" >Mail :</label>
                <input type=\"text\" class=\"form-control\" placeholder=\"sara@gmail.com\" >
            </div>
             <div class=\"form-group row \">
                <label class='col-form-label'for=\"sujet\" >Sujet :</label>
                <input type=\"text\" class=\"form-control\" placeholder=\"ex : livraison\" >
            </div>
            <div class=\"form-group row \">
                <label class='col-form-label'for=\"message\" >Message :</label>
                <textarea rows=\"4\" class=\"form-control\"  ></textarea>
            </div>
       <form/>
    </div> 
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "formulaire/formulaire.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block body %}
<div class=\"container-fluid\"> 
<div class='text-center mb-5 '>
    <h1><b>Formulaire de contacte</b></h1>
</div>
    <div class=\"d-flex justify-content-center\">
       
       <form action=\"#\" methode=\"post\" class=\"w-25\" >
            <div class=\"form-group row \">
                <label class='col-form-label'for=\"utilisateur\" >Utilisateur :</label>
                <input type=\"text\" class=\"form-control\" placeholder=\"sara.dsn\" >
            </div>
            <div class=\"form-group row \">
                <label class='col-form-label'for=\"mail\" >Mail :</label>
                <input type=\"text\" class=\"form-control\" placeholder=\"sara@gmail.com\" >
            </div>
             <div class=\"form-group row \">
                <label class='col-form-label'for=\"sujet\" >Sujet :</label>
                <input type=\"text\" class=\"form-control\" placeholder=\"ex : livraison\" >
            </div>
            <div class=\"form-group row \">
                <label class='col-form-label'for=\"message\" >Message :</label>
                <textarea rows=\"4\" class=\"form-control\"  ></textarea>
            </div>
       <form/>
    </div> 
</div>
{% endblock %}", "formulaire/formulaire.html.twig", "/home/sara/Bureau/monProjet3/templates/formulaire/formulaire.html.twig");
    }
}
