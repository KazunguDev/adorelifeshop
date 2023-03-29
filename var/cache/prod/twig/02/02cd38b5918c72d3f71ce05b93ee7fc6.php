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

/* @PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/shop_urls_configuration.html.twig */
class __TwigTemplate_aa394e8eb6350754e9b233d429b27076 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'shop_urls_configuration' => [$this, 'block_shop_urls_configuration'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        echo "
";
        // line 27
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["shopUrlsForm"] ?? null), [0 => "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit.html.twig"], true);
        // line 28
        echo "
";
        // line 29
        $this->displayBlock('shop_urls_configuration', $context, $blocks);
    }

    public function block_shop_urls_configuration($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 30
        echo "
  ";
        // line 31
        $context["cardHeaderLabel"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Set shop URL", [], "Admin.Shopparameters.Feature");
        // line 32
        echo "  ";
        if (($context["isShopFeatureActive"] ?? null)) {
            // line 33
            echo "    <div class=\"card\">
      <h3 class=\"card-header\">
        <i class=\"material-icons\">settings</i>
        ";
            // line 36
            echo twig_escape_filter($this->env, ($context["cardHeaderLabel"] ?? null), "html", null, true);
            echo "
      </h3>
      <div class=\"card-body\">
        <div class=\"form-wrapper\">

          <div class=\"alert alert-info\" role=\"alert\">
            <div class=\"alert-text\">
              ";
            // line 43
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("The multistore option is enabled. If you want to change the URL of your shop, you must go to the \"Multistore\" page under the \"Advanced Parameters\" menu.", [], "Admin.Shopparameters.Notification"), "html", null, true);
            echo "
            </div>
          </div>

        </div>
      </div>
    </div>
  ";
        }
        // line 51
        echo "
  ";
        // line 52
        if (( !($context["isShopFeatureActive"] ?? null) && ($context["doesMainShopUrlExist"] ?? null))) {
            // line 53
            echo "    <div class=\"card\">
      <h3 class=\"card-header\">
        <i class=\"material-icons\">settings</i>
        ";
            // line 56
            echo twig_escape_filter($this->env, ($context["cardHeaderLabel"] ?? null), "html", null, true);
            echo "

        <span class=\"help-box\"
              data-container=\"body\"
              data-toggle=\"popover\"
              data-trigger=\"hover\"
              data-placement=\"right\"
              data-content=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Here you can set the URL for your shop. If you migrate your shop to a new URL, remember to change the values below.", [], "Admin.Shopparameters.Notification"), "html", null, true);
            echo "\"
              title=\"\">
        </span>
      </h3>
      <div class=\"card-body\">
        <div class=\"form-wrapper\">
          ";
            // line 69
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["shopUrlsForm"] ?? null), 'widget');
            echo "
        </div>
      </div>

      <div class=\"card-footer\">
        <div class=\"d-flex justify-content-end\">
          <button class=\"btn btn-primary\">";
            // line 75
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save", [], "Admin.Actions"), "html", null, true);
            echo "</button>
        </div>
      </div>
    </div>
  ";
        }
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/shop_urls_configuration.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 75,  116 => 69,  107 => 63,  97 => 56,  92 => 53,  90 => 52,  87 => 51,  76 => 43,  66 => 36,  61 => 33,  58 => 32,  56 => 31,  53 => 30,  46 => 29,  43 => 28,  41 => 27,  38 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/shop_urls_configuration.html.twig", "C:\\xampp\\htdocs\\adorelifeshop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Configure\\ShopParameters\\TrafficSeo\\Meta\\Blocks\\shop_urls_configuration.html.twig");
    }
}
