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

/* @PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/robots_file_generation.html.twig */
class __TwigTemplate_9f5119657efd2760861c8661695a0065 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'keyword' => [$this, 'block_keyword'],
            'meta_robots_file_form_rest' => [$this, 'block_meta_robots_file_form_rest'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        echo "
";
        // line 27
        echo "
";
        // line 28
        $this->displayBlock('keyword', $context, $blocks);
    }

    public function block_keyword($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 29
        echo "<div class=\"card\">
  <h3 class=\"card-header\">
    <i class=\"material-icons\">settings</i>
    ";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Robots file generation", [], "Admin.Shopparameters.Feature"), "html", null, true);
        echo "
  </h3>

  <div class=\"card-body\">
    <div class=\"form-wrapper\">
      <div class=\"alert alert-info\" role=\"alert\">
        <div class=\"alert-text\">
          ";
        // line 39
        $context["defaultDescription"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Your robots.txt file MUST be in your website's root directory and nowhere else (e.g. http://www.example.com/robots.txt).", [], "Admin.Shopparameters.Notification");
        // line 40
        echo "            ";
        if (($context["isRobotsTextFileValid"] ?? null)) {
            // line 41
            echo "              ";
            echo twig_escape_filter($this->env, ($context["defaultDescription"] ?? null), "html", null, true);
            echo " <br>
              ";
            // line 42
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Generate your \"robots.txt\" file by clicking on the following button (this will erase the old robots.txt file)", [], "Admin.Shopparameters.Notification"), "html", null, true);
            echo "
            ";
        } else {
            // line 44
            echo "              ";
            echo twig_escape_filter($this->env, ($context["defaultDescription"] ?? null), "html", null, true);
            echo " <br>
              ";
            // line 45
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Before you can use this tool, you need to:", [], "Admin.Shopparameters.Notification"), "html", null, true);
            echo " <br>
              ";
            // line 46
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("1) Create a blank robots.txt file in your root directory.", [], "Admin.Shopparameters.Notification"), "html", null, true);
            echo " <br>
              ";
            // line 47
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("2) Give it write permissions (CHMOD 666 on Unix system).", [], "Admin.Shopparameters.Notification"), "html", null, true);
            echo "
            ";
        }
        // line 49
        echo "          </div>
        </div>

        ";
        // line 52
        $this->displayBlock('meta_robots_file_form_rest', $context, $blocks);
        // line 55
        echo "      </div>
    </div>
    <div class=\"card-footer\">
      <div class=\"d-flex justify-content-end\">
        ";
        // line 59
        if (($context["isRobotsTextFileValid"] ?? null)) {
            // line 60
            echo "          <button class=\"btn btn-primary\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Generate robots.txt file", [], "Admin.Shopparameters.Feature"), "html", null, true);
            echo "</button>
        ";
        }
        // line 62
        echo "      </div>
    </div>
  </div>
";
    }

    // line 52
    public function block_meta_robots_file_form_rest($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 53
        echo "          ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["setUpUrlsForm"] ?? null), 'rest');
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/robots_file_generation.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  132 => 53,  128 => 52,  121 => 62,  115 => 60,  113 => 59,  107 => 55,  105 => 52,  100 => 49,  95 => 47,  91 => 46,  87 => 45,  82 => 44,  77 => 42,  72 => 41,  69 => 40,  67 => 39,  57 => 32,  52 => 29,  45 => 28,  42 => 27,  39 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/robots_file_generation.html.twig", "C:\\xampp\\htdocs\\adorelifeshop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Configure\\ShopParameters\\TrafficSeo\\Meta\\Blocks\\robots_file_generation.html.twig");
    }
}
