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

/* @PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/url_schema_configuration.html.twig */
class __TwigTemplate_8347a9925e5d6248911e06a87f1945dd extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'url_schema_configuration' => [$this, 'block_url_schema_configuration'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        echo "
";
        // line 27
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["urlSchemaForm"] ?? null), [0 => "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit.html.twig"], true);
        // line 28
        echo "
";
        // line 29
        $this->displayBlock('url_schema_configuration', $context, $blocks);
    }

    public function block_url_schema_configuration($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 30
        echo "  <div class=\"card\">
    <h3 class=\"card-header\">
      <i class=\"material-icons\">settings</i> ";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Schema of URLs", [], "Admin.Shopparameters.Feature"), "html", null, true);
        echo "

      <span
        class=\"help-box\"
        data-container=\"body\"
        data-toggle=\"popover\"
        data-trigger=\"hover\"
        data-placement=\"right\"
        data-content=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This section enables you to change the default pattern of your links. In order to use this functionality, PrestaShop's \"Friendly URL\" option must be enabled, and Apache's URL rewriting module (mod_rewrite) must be activated on your web server.", [], "Admin.Shopparameters.Notification"), "html", null, true);
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("There are several available keywords for each route listed below; note that keywords with * are required!", [], "Admin.Shopparameters.Notification"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("To add a keyword in your URL, use the {keyword} syntax. If the keyword is not empty, you can add text before or after the keyword with syntax {prepend:keyword:append}. For example {-hey-:meta_title} will add \"-hey-my-title\" in the URL if the meta title is set.", [], "Admin.Shopparameters.Notification"), "html", null, true);
        echo "\"
        title=\"\"
      >
      </span>
    </h3>
    <div class=\"card-body\">
      <div class=\"form-wrapper\">
        <div class=\"alert alert-warning\" role=\"alert\">
            ";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Before making any changes to the default pattern of your URLs, make sure to meet the following requirements:", [], "Admin.Shopparameters.Notification"), "html", null, true);
        echo "
            <ul>
              <li>
                ";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("The Friendly URL feature must be enabled", [], "Admin.Shopparameters.Notification"), "html", null, true);
        echo "
              </li>
              <li>
                ";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("URL rewriting must be activated on your web server", [], "Admin.Shopparameters.Notification"), "html", null, true);
        echo "
              </li>
              <li>
                ";
        // line 57
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("All mandatory keywords (*) must be included in the route", [], "Admin.Shopparameters.Notification"), "html", null, true);
        echo "
              </li>
            </ul>
            ";
        // line 60
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("You should also comply with the syntax:", [], "Admin.Shopparameters.Notification"), "html", null, true);
        echo "
            <ul>
              <li>
                ";
        // line 63
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Keywords must be in braces {keyword}", [], "Admin.Shopparameters.Notification"), "html", null, true);
        echo "
              </li>
              <li>
                ";
        // line 66
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("All keywords must be separated", [], "Admin.Shopparameters.Notification"), "html", null, true);
        echo "
              </li>
              <li>
                ";
        // line 69
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("As long as a keyword has an associated value, you can use the syntax {prepend:keyword:append} to add text before and after it.", [], "Admin.Shopparameters.Notification"), "html", null, true);
        echo "
              </li>
            </ul>
        </div>
        ";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["urlSchemaForm"] ?? null), 'widget');
        echo "
      </div>
    </div>
    <div class=\"card-footer\">
      <div class=\"d-flex justify-content-end\">
        <button class=\"btn btn-primary\">";
        // line 78
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "</button>
      </div>
    </div>
  </div>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/url_schema_configuration.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 78,  131 => 73,  124 => 69,  118 => 66,  112 => 63,  106 => 60,  100 => 57,  94 => 54,  88 => 51,  82 => 48,  68 => 40,  57 => 32,  53 => 30,  46 => 29,  43 => 28,  41 => 27,  38 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/url_schema_configuration.html.twig", "C:\\xampp\\htdocs\\adorelifeshop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Configure\\ShopParameters\\TrafficSeo\\Meta\\Blocks\\url_schema_configuration.html.twig");
    }
}
