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

/* __string_template__93a809bd65408188c4da1e61628e6c55 */
class __TwigTemplate_0070f7cdfe91c17e3032a7d306d7e91a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'extra_stylesheets' => [$this, 'block_extra_stylesheets'],
            'content_header' => [$this, 'block_content_header'],
            'content' => [$this, 'block_content'],
            'content_footer' => [$this, 'block_content_footer'],
            'sidebar_right' => [$this, 'block_sidebar_right'],
            'javascripts' => [$this, 'block_javascripts'],
            'extra_javascripts' => [$this, 'block_extra_javascripts'],
            'translate_javascripts' => [$this, 'block_translate_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/adorelifeshop/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/adorelifeshop/img/app_icon.png\" />

<title>Contacts • Adore Life Shop</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminContacts';
    var iso_user = 'en';
    var lang_is_rtl = '0';
    var full_language_code = 'en-us';
    var full_cldr_language_code = 'en-US';
    var country_iso_code = 'KE';
    var _PS_VERSION_ = '8.0.2';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'A new order has been placed on your shop.';
    var order_number_msg = 'Order number: ';
    var total_msg = 'Total: ';
    var from_msg = 'From: ';
    var see_order_msg = 'View this order';
    var new_customer_msg = 'A new customer registered on your shop.';
    var customer_name_msg = 'Customer name: ';
    var new_msg = 'A new message was posted on your shop.';
    var see_msg = 'Read this message';
    var token = 'b0bcd22d48fa4ccb7df7b7f523fe8082';
    var token_admin_orders = tokenAdminOrders = 'ea26f533a0f20ef832f6b0bf6239e73e';
    var token_admin_customers = '2b501af0b7449e511f843166cfe50e64';
    var token_admin_customer_threads = tokenAdminCustomerThreads = 'e953acbad31dae86089f2d5b857d208d';
    var currentIndex = 'index.php?controller=AdminContacts';
    var employee_token = '3144634624aaa6d762e82e792ba370ef';
    var choose_language_translate = 'Choose language:';
    var default_language = '1';
    var admin_modules_link = '/adorelifeshop/adorelifeshop-admin/index.php/improve/modules/manage?_token=GVf4wpf16cqre1wE2gV8ddjL9uYqV9ram6uxAgbvgXg';
    var admin_notification_get_link = '/adorelifeshop/adorelifeshop-admin/index.php/common/notifications?_token=GVf4wpf16cqre1wE2gV";
        // line 42
        echo "8ddjL9uYqV9ram6uxAgbvgXg';
    var admin_notification_push_link = adminNotificationPushLink = '/adorelifeshop/adorelifeshop-admin/index.php/common/notifications/ack?_token=GVf4wpf16cqre1wE2gV8ddjL9uYqV9ram6uxAgbvgXg';
    var tab_modules_list = '';
    var update_success_msg = 'Update successful';
    var search_product_msg = 'Search for a product';
  </script>



<link
      rel=\"preload\"
      href=\"/adorelifeshop/adorelifeshop-admin/themes/new-theme/public/703cf8f274fbb265d49c6262825780e1.preload.woff2\"
      as=\"font\"
      crossorigin
    >
      <link href=\"/adorelifeshop/adorelifeshop-admin/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/adorelifeshop/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/adorelifeshop/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/adorelifeshop/modules/blockwishlist/public/backoffice.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/adorelifeshop/adorelifeshop-admin/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/adorelifeshop\\/adorelifeshop-admin\\/\";
var baseDir = \"\\/adorelifeshop\\/\";
var changeFormLanguageUrl = \"\\/adorelifeshop\\/adorelifeshop-admin\\/index.php\\/configure\\/advanced\\/employees\\/change-form-language?_token=GVf4wpf16cqre1wE2gV8ddjL9uYqV9ram6uxAgbvgXg\";
var currency = {\"iso_code\":\"KES\",\"sign\":\"KES\",\"name\":\"Kenyan Shilling\",\"format\":null};
var currency_specifications = {\"symbol\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"currencyCode\":\"KES\",\"currencySymbol\":\"KES\",\"numberSymbols\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"\\u00a4#,##0.00\",\"negativePattern\":\"-\\u00a4#,##0.00\",\"maxFractionDigits\":2,\"minFractionDigits\":2,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var number_specifications = {\"symbol\":[\".\",\",\",\"";
        // line 69
        echo ";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"numberSymbols\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var prestashop = {\"debug\":false};
var show_new_customers = \"1\";
var show_new_messages = \"1\";
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/adorelifeshop/adorelifeshop-admin/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/adorelifeshop/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/adorelifeshop/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/adorelifeshop/js/admin.js?v=8.0.2\"></script>
<script type=\"text/javascript\" src=\"/adorelifeshop/adorelifeshop-admin/themes/new-theme/public/cldr.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/adorelifeshop/js/tools.js?v=8.0.2\"></script>
<script type=\"text/javascript\" src=\"/adorelifeshop/modules/blockwishlist/public/vendors.js\"></script>
<script type=\"text/javascript\" src=\"/adorelifeshop/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/adorelifeshop/adorelifeshop-admin/themes/default/js/vendor/nv.d3.min.js\"></script>

  

";
        // line 87
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>";
        echo "

<body
  class=\"lang-en admincontacts\"
  data-base-url=\"/adorelifeshop/adorelifeshop-admin/index.php\"  data-token=\"GVf4wpf16cqre1wE2gV8ddjL9uYqV9ram6uxAgbvgXg\">

  <header id=\"header\" class=\"d-print-none\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"http://localhost/adorelifeshop/adorelifeshop-admin/index.php?controller=AdminDashboard&amp;token=57b6c090a4f6d569903b35d28ee36a13\"></a>
      <span id=\"shop_version\">8.0.2</span>

      <div class=\"component\" id=\"quick-access-container\">
        <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Quick Access
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/adorelifeshop/adorelifeshop-admin/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=e6469896ab0a5464c66ee53a4cfebfb2\"
                 data-item=\"Catalog evaluation\"
      >Catalog evaluation</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/adorelifeshop/adorelifeshop-admin/index.php/improve/modules/manage?token=f8610ac9c15d479c9266e4d8a062b5b8\"
                 data-item=\"Installed modules\"
      >Installed modules</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/adorelifeshop/adorelifeshop-admin/index.php/sell/catalog/categories/new?token=f8610ac9c15d479c9266e4d8a062b5b8\"
                 data-item=\"New category\"
      >New category</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/adorelifeshop/adorelifeshop-admin/index.php/sell/catalog/products/new?token=f8610ac9c15d479c9266e4d8a062b5b8\"
                 data-item=";
        // line 122
        echo "\"New product\"
      >New product</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/adorelifeshop/adorelifeshop-admin/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=d566df750536ea3d0b7b0013816d5701\"
                 data-item=\"New voucher\"
      >New voucher</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/adorelifeshop/adorelifeshop-admin/index.php/sell/orders?token=f8610ac9c15d479c9266e4d8a062b5b8\"
                 data-item=\"Orders\"
      >Orders</a>
        <div class=\"dropdown-divider\"></div>
          <a id=\"quick-add-link\"
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"174\"
        data-icon=\"icon-AdminParentStores\"
        data-method=\"add\"
        data-url=\"index.php/configure/shop/contacts\"
        data-post-link=\"http://localhost/adorelifeshop/adorelifeshop-admin/index.php?controller=AdminQuickAccesses&token=484b16992ee0d0c1fb0da9ee8fa590b0\"
        data-prompt-text=\"Please name this shortcut:\"
        data-link=\"Contacts - List\"
      >
        <i class=\"material-icons\">add_circle</i>
        Add current page to Quick Access
      </a>
        <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://localhost/adorelifeshop/adorelifeshop-admin/index.php?controller=AdminQuickAccesses&token=484b16992ee0d0c1fb0da9ee8fa590b0\">
      <i class=\"material-icons\">settings</i>
      Manage your quick accesses
    </a>
  </div>
</div>
      </div>
      <div class=\"component component-search\" id=\"header-search-container\">
        <div class=\"component-search-body\">
          <div class=\"component-search-top\">
            <form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"/adorelifeshop/adorelifeshop-admin/index.php?controller=AdminSearch&amp;token=63f4e670a22a0df1a0a8bbe6084a9fbe\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" c";
        // line 162
        echo "lass=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Search (e.g.: product reference, customer name…)\" aria-label=\"Searchbar\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        Everywhere
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"Everywhere\" href=\"#\" data-value=\"0\" data-placeholder=\"What are you looking for?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> Everywhere</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Catalog\" href=\"#\" data-value=\"1\" data-placeholder=\"Product name, reference, etc.\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Catalog</a>
        <a class=\"dropdown-item\" data-item=\"Customers by name\" href=\"#\" data-value=\"2\" data-placeholder=\"Name\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Customers by name</a>
        <a class=\"dropdown-item\" data-item=\"Customers by ip address\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Customers by IP address</a>
        <a class=\"dropdown-item\" data-item=\"Orders\" href=\"#\" data-value=\"3\" data-placeholder=\"Order ID\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Orders</a>
        <a class=\"dropdown-item\" data-item=\"Invoices\" href=\"#\" data-value=\"4\" data-placeholder=\"Invoice number\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i> Invoices</a>
        <a class=\"dropdown-item\" data-item=\"Carts\" href=\"#\" data-value=\"5\" data-placeholder=\"Cart ID\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Carts</a>
        <a class=\"dropdown-item\" data-item=\"Mo";
        // line 178
        echo "dules\" href=\"#\" data-value=\"7\" data-placeholder=\"Module name\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Modules</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">SEARCH</span><i class=\"material-icons\">search</i></button>
    </div>
  </div>
</form>

<script type=\"text/javascript\">
 \$(document).ready(function(){
    \$('#bo_query').one('click', function() {
    \$(this).closest('form').removeClass('collapsed');
  });
});
</script>
            <button class=\"component-search-cancel d-none\">Cancel</button>
          </div>

          <div class=\"component-search-quickaccess d-none\">
  <p class=\"component-search-title\">Quick Access</p>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/adorelifeshop/adorelifeshop-admin/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=e6469896ab0a5464c66ee53a4cfebfb2\"
             data-item=\"Catalog evaluation\"
    >Catalog evaluation</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/adorelifeshop/adorelifeshop-admin/index.php/improve/modules/manage?token=f8610ac9c15d479c9266e4d8a062b5b8\"
             data-item=\"Installed modules\"
    >Installed modules</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/adorelifeshop/adorelifeshop-admin/index.php/sell/catalog/categories/new?token=f8610ac9c15d479c9266e4d8a062b5b8\"
             data-item=\"New category\"
    >New category</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/adorelifeshop/adorelifeshop-admin/index.php/sell/catalog/products/new?token=f8610ac9c15d479c9266e4d8a062b5b8\"
             data-item=\"New product\"
    >New product</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/adorelifeshop/adorelifeshop-admin/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=d566df750536ea3d0b7b0013816d5701\"
             data-item=\"New voucher\"
    >New voucher</a>
  ";
        // line 217
        echo "    <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/adorelifeshop/adorelifeshop-admin/index.php/sell/orders?token=f8610ac9c15d479c9266e4d8a062b5b8\"
             data-item=\"Orders\"
    >Orders</a>
    <div class=\"dropdown-divider\"></div>
      <a id=\"quick-add-link\"
      class=\"dropdown-item js-quick-link\"
      href=\"#\"
      data-rand=\"143\"
      data-icon=\"icon-AdminParentStores\"
      data-method=\"add\"
      data-url=\"index.php/configure/shop/contacts\"
      data-post-link=\"http://localhost/adorelifeshop/adorelifeshop-admin/index.php?controller=AdminQuickAccesses&token=484b16992ee0d0c1fb0da9ee8fa590b0\"
      data-prompt-text=\"Please name this shortcut:\"
      data-link=\"Contacts - List\"
    >
      <i class=\"material-icons\">add_circle</i>
      Add current page to Quick Access
    </a>
    <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://localhost/adorelifeshop/adorelifeshop-admin/index.php?controller=AdminQuickAccesses&token=484b16992ee0d0c1fb0da9ee8fa590b0\">
    <i class=\"material-icons\">settings</i>
    Manage your quick accesses
  </a>
</div>
        </div>

        <div class=\"component-search-background d-none\"></div>
      </div>

      
              <div class=\"component hide-mobile-sm\" id=\"header-maintenance-mode-container\">
          <a class=\"link shop-state\"
             id=\"maintenance-mode\"
             data-toggle=\"pstooltip\"
             data-placement=\"bottom\"
             data-html=\"true\"
             title=\"<p class=&quot;text-left&quot;><strong>Your shop is in maintenance.</strong></p><p class=&quot;text-left&quot;>Your visitors and customers cannot access your shop while in maintenance mode.&amp;lt;br /&amp;gt; To manage the maintenance settings, go to Shop Parameters &amp;gt; Maintenance tab.</p>\" href=\"/adorelifeshop/adorelifeshop-admin/index.php/configure/shop/maintenance/?_token=GVf4wpf16cqre1wE2gV8ddjL9uYqV9ram6uxAgbvgXg\"
          >
            <i class=\"material-icons\">build</i>
            <span>Mai";
        // line 256
        echo "ntenance mode</span>
          </a>
        </div>
      
      <div class=\"header-right\">
                  <div class=\"component\" id=\"header-shop-list-container\">
              <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"http://localhost/adorelifeshop/\" target= \"_blank\">
      <i class=\"material-icons\">visibility</i>
      <span>View my shop</span>
    </a>
  </div>
          </div>
                          <div class=\"component header-right-component\" id=\"header-notifications-container\">
            <div id=\"notif\" class=\"notification-center dropdown dropdown-clickable\">
  <button class=\"btn notification js-notification dropdown-toggle\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">notifications_none</i>
    <span id=\"notifications-total\" class=\"count hide\">0</span>
  </button>
  <div class=\"dropdown-menu dropdown-menu-right js-notifs_dropdown\">
    <div class=\"notifications\">
      <ul class=\"nav nav-tabs\" role=\"tablist\">
                          <li class=\"nav-item\">
            <a
              class=\"nav-link active\"
              id=\"orders-tab\"
              data-toggle=\"tab\"
              data-type=\"order\"
              href=\"#orders-notifications\"
              role=\"tab\"
            >
              Orders<span id=\"_nb_new_orders_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"customers-tab\"
              data-toggle=\"tab\"
              data-type=\"customer\"
              href=\"#customers-notifications\"
              role=\"tab\"
            >
              Customers<span id=\"_nb_new_customers_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"messages-tab\"
              data-toggle=\"tab\"
              data-type=\"customer_message\"
              href=\"#messages-notifications\"
              role";
        // line 309
        echo "=\"tab\"
            >
              Messages<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No new order for now :(<br>
              Have you checked your &lt;strong&gt;&lt;a href=\"http://localhost/adorelifeshop/adorelifeshop-admin/index.php?controller=AdminCarts&amp;action=filterOnlyAbandonedCarts&amp;token=82c7660882c9419484a207d3ed0cbf7f\"&gt;abandoned carts&lt;/a&gt;&lt;/strong&gt;?&lt;br&gt;Your next order could be hiding there!
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No new customer for now :(<br>
              Are you active on social media these days?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No new message for now.<br>
              Seems like all your customers are happy :)
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                        </div>
    </div>
  </div>
</div>

  <script type=\"text/html\" id=\"order-notification-template\">
    <a class=\"notif\" href='order_url'>
      #_id_order_ -
      from <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - registered <strong>_date_add_<";
        // line 354
        echo "/strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"message-notification-template\">
    <a class=\"notif\" href='message_url'>
    <span class=\"message-notification-status _status_\">
      <i class=\"material-icons\">fiber_manual_record</i> _status_
    </span>
      - <strong>_customer_name_</strong> (_company_) - <i class=\"material-icons\">access_time</i> _date_add_
    </a>
  </script>
          </div>
        
        <div class=\"component\" id=\"header-employee-container\">
          <div class=\"dropdown employee-dropdown\">
  <div class=\"rounded-circle person\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">account_circle</i>
  </div>
  <div class=\"dropdown-menu dropdown-menu-right\">
    <div class=\"employee-wrapper-avatar\">
      <div class=\"employee-top\">
        <span class=\"employee-avatar\"><img class=\"avatar rounded-circle\" src=\"http://localhost/adorelifeshop/img/pr/default.jpg\" alt=\"Gisore\" /></span>
        <span class=\"employee_profile\">Welcome back Gisore</span>
      </div>

      <a class=\"dropdown-item employee-link profile-link\" href=\"/adorelifeshop/adorelifeshop-admin/index.php/configure/advanced/employees/1/edit?_token=GVf4wpf16cqre1wE2gV8ddjL9uYqV9ram6uxAgbvgXg\">
      <i class=\"material-icons\">edit</i>
      <span>Your profile</span>
    </a>
    </div>

    <p class=\"divider\"></p>

    
    <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"http://localhost/adorelifeshop/adorelifeshop-admin/index.php?controller=AdminLogin&amp;logout=1&amp;token=088a155eff922aa5cac4c5799c69d2a2\">
      <i class=\"material-icons d-lg-none\">power_settings_new</i>
      <span>Sign out</span>
    </a>
  </div>
</div>
        </div>
              </div>
    </nav>
  </header>

  <nav class=\"nav-bar d-none d-print-none d-md-block\">
  <span class=\"menu-collapse\" data-toggle-url=\"/adorelifeshop/adorelifeshop-admin/index.php/configure/advanced/employees/toggle-navigation?_token=GVf4wpf16cqre1wE2gV8ddjL9uYqV9ram6uxAgbvgXg\">
    <i class=\"m";
        // line 402
        echo "aterial-icons rtl-flip\">chevron_left</i>
    <i class=\"material-icons rtl-flip\">chevron_left</i>
  </span>

  <div class=\"nav-bar-overflow\">
      <div class=\"logo-container\">
          <a id=\"header_logo\" class=\"logo float-left\" href=\"http://localhost/adorelifeshop/adorelifeshop-admin/index.php?controller=AdminDashboard&amp;token=57b6c090a4f6d569903b35d28ee36a13\"></a>
          <span id=\"shop_version\" class=\"header-version\">8.0.2</span>
      </div>

      <ul class=\"main-menu\">
              
                    
                    
          
            <li class=\"link-levelone\" data-submenu=\"1\" id=\"tab-AdminDashboard\">
              <a href=\"http://localhost/adorelifeshop/adorelifeshop-admin/index.php?controller=AdminDashboard&amp;token=57b6c090a4f6d569903b35d28ee36a13\" class=\"link\" >
                <i class=\"material-icons\">trending_up</i> <span>Dashboard</span>
              </a>
            </li>

          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"2\" id=\"tab-SELL\">
                <span class=\"title\">Sell</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                    <a href=\"/adorelifeshop/adorelifeshop-admin/index.php/sell/orders/?_token=GVf4wpf16cqre1wE2gV8ddjL9uYqV9ram6uxAgbvgXg\" class=\"link\">
                      <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                      <span>
                      Orders
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                             ";
        // line 445
        echo "               </a>
                                              <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                                <a href=\"/adorelifeshop/adorelifeshop-admin/index.php/sell/orders/?_token=GVf4wpf16cqre1wE2gV8ddjL9uYqV9ram6uxAgbvgXg\" class=\"link\"> Orders
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                                <a href=\"/adorelifeshop/adorelifeshop-admin/index.php/sell/orders/invoices/?_token=GVf4wpf16cqre1wE2gV8ddjL9uYqV9ram6uxAgbvgXg\" class=\"link\"> Invoices
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                                <a href=\"/adorelifeshop/adorelifeshop-admin/index.php/sell/orders/credit-slips/?_token=GVf4wpf16cqre1wE2gV8ddjL9uYqV9ram6uxAgbvgXg\" class=\"link\"> Credit Slips
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                                <a href=\"/ad";
        // line 475
        echo "orelifeshop/adorelifeshop-admin/index.php/sell/orders/delivery-slips/?_token=GVf4wpf16cqre1wE2gV8ddjL9uYqV9ram6uxAgbvgXg\" class=\"link\"> Delivery Slips
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                                <a href=\"http://localhost/adorelifeshop/adorelifeshop-admin/index.php?controller=AdminCarts&amp;token=82c7660882c9419484a207d3ed0cbf7f\" class=\"link\"> Shopping Carts
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                    <a href=\"/adorelifeshop/adorelifeshop-admin/index.php/sell/catalog/products?_token=GVf4wpf16cqre1wE2gV8ddjL9uYqV9ram6uxAgbvgXg\" class=\"link\">
                      <i class=\"material-icons mi-store\">store</i>
                      <span>
                      Catalog
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
    ";
        // line 507
        echo "                          <li class=\"link-leveltwo\" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                                <a href=\"/adorelifeshop/adorelifeshop-admin/index.php/sell/catalog/products?_token=GVf4wpf16cqre1wE2gV8ddjL9uYqV9ram6uxAgbvgXg\" class=\"link\"> Products
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                                <a href=\"/adorelifeshop/adorelifeshop-admin/index.php/sell/catalog/categories?_token=GVf4wpf16cqre1wE2gV8ddjL9uYqV9ram6uxAgbvgXg\" class=\"link\"> Categories
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                                <a href=\"/adorelifeshop/adorelifeshop-admin/index.php/sell/catalog/monitoring/?_token=GVf4wpf16cqre1wE2gV8ddjL9uYqV9ram6uxAgbvgXg\" class=\"link\"> Monitoring
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                                <a href=\"http://localhost/adorelifeshop/adorelifeshop-admin/index.php?controller=AdminAttributesGroups&amp;token=8b4e0ecc8e2ca369b5bf071d37ca8553\" class=\"link\"> Attributes &amp; Features
                                </a>
                       ";
        // line 534
        echo "       </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                                <a href=\"/adorelifeshop/adorelifeshop-admin/index.php/sell/catalog/brands/?_token=GVf4wpf16cqre1wE2gV8ddjL9uYqV9ram6uxAgbvgXg\" class=\"link\"> Brands &amp; Suppliers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                                <a href=\"/adorelifeshop/adorelifeshop-admin/index.php/sell/attachments/?_token=GVf4wpf16cqre1wE2gV8ddjL9uYqV9ram6uxAgbvgXg\" class=\"link\"> Files
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                                <a href=\"http://localhost/adorelifeshop/adorelifeshop-admin/index.php?controller=AdminCartRules&amp;token=d566df750536ea3d0b7b0013816d5701\" class=\"link\"> Discounts
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                                <a href=\"/adorelifeshop/adorelif";
        // line 564
        echo "eshop-admin/index.php/sell/stocks/?_token=GVf4wpf16cqre1wE2gV8ddjL9uYqV9ram6uxAgbvgXg\" class=\"link\"> Stock
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                    <a href=\"/adorelifeshop/adorelifeshop-admin/index.php/sell/customers/?_token=GVf4wpf16cqre1wE2gV8ddjL9uYqV9ram6uxAgbvgXg\" class=\"link\">
                      <i class=\"material-icons mi-account_circle\">account_circle</i>
                      <span>
                      Customers
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                                <a href=\"/adorelifeshop/adorelifeshop-admin/index.php/sell/customers/?_token=GVf4wpf16cqre1wE2gV8ddjL9uYqV9ram6uxAgbvgXg\" class=\"link\"> Customers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class";
        // line 596
        echo "=\"link-leveltwo\" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                                <a href=\"/adorelifeshop/adorelifeshop-admin/index.php/sell/addresses/?_token=GVf4wpf16cqre1wE2gV8ddjL9uYqV9ram6uxAgbvgXg\" class=\"link\"> Addresses
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                    <a href=\"http://localhost/adorelifeshop/adorelifeshop-admin/index.php?controller=AdminCustomerThreads&amp;token=e953acbad31dae86089f2d5b857d208d\" class=\"link\">
                      <i class=\"material-icons mi-chat\">chat</i>
                      <span>
                      Customer Service
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                                <a href=\"http://localhost/adorelifeshop/adorelifeshop-admin/index.php?controller=AdminCustomerThreads&amp;token=e953acbad31dae86089f2d5b857d208d\" class=\"link\"> Customer Service
                                </a>
        ";
        // line 624
        echo "                      </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                                <a href=\"/adorelifeshop/adorelifeshop-admin/index.php/sell/customer-service/order-messages/?_token=GVf4wpf16cqre1wE2gV8ddjL9uYqV9ram6uxAgbvgXg\" class=\"link\"> Order Messages
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                                <a href=\"http://localhost/adorelifeshop/adorelifeshop-admin/index.php?controller=AdminReturn&amp;token=53f1d2141bce0329be0bb00cf9ba5bf8\" class=\"link\"> Merchandise Returns
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                    <a href=\"http://localhost/adorelifeshop/adorelifeshop-admin/index.php?controller=AdminStats&amp;token=e6469896ab0a5464c66ee53a4cfebfb2\" class=\"link\">
                      <i class=\"material-icons mi-assessment\">assessment</i>
                      <span>
                      Stats
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_";
        // line 655
        echo "arrow_down
                                                            </i>
                                            </a>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"37\" id=\"tab-IMPROVE\">
                <span class=\"title\">Improve</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"38\" id=\"subtab-AdminParentModulesSf\">
                    <a href=\"/adorelifeshop/adorelifeshop-admin/index.php/improve/modules/manage?_token=GVf4wpf16cqre1wE2gV8ddjL9uYqV9ram6uxAgbvgXg\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Modules
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-38\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"39\" id=\"subtab-AdminModulesSf\">
                                <a href=\"/adorelifeshop/adorelifeshop-admin/index.php/improve/modules/manage?_token=GVf4wpf16cqre1wE2gV8ddjL9uYqV9ram6uxAgbvgXg\" class=\"link\"> Module Manager
                                </a>
                              </li>

                                                                             ";
        // line 692
        echo "                                                       </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"43\" id=\"subtab-AdminParentThemes\">
                    <a href=\"/adorelifeshop/adorelifeshop-admin/index.php/improve/design/themes/?_token=GVf4wpf16cqre1wE2gV8ddjL9uYqV9ram6uxAgbvgXg\" class=\"link\">
                      <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                      <span>
                      Design
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"125\" id=\"subtab-AdminThemesParent\">
                                <a href=\"/adorelifeshop/adorelifeshop-admin/index.php/improve/design/themes/?_token=GVf4wpf16cqre1wE2gV8ddjL9uYqV9ram6uxAgbvgXg\" class=\"link\"> Theme &amp; Logo
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"45\" id=\"subtab-AdminParentMailTheme\">
                                <a href=\"/adorelifeshop/adorelifeshop-admin/index.php/improve/design/mail_theme/?_token=G";
        // line 721
        echo "Vf4wpf16cqre1wE2gV8ddjL9uYqV9ram6uxAgbvgXg\" class=\"link\"> Email Theme
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"47\" id=\"subtab-AdminCmsContent\">
                                <a href=\"/adorelifeshop/adorelifeshop-admin/index.php/improve/design/cms-pages/?_token=GVf4wpf16cqre1wE2gV8ddjL9uYqV9ram6uxAgbvgXg\" class=\"link\"> Pages
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"48\" id=\"subtab-AdminModulesPositions\">
                                <a href=\"/adorelifeshop/adorelifeshop-admin/index.php/improve/design/modules/positions/?_token=GVf4wpf16cqre1wE2gV8ddjL9uYqV9ram6uxAgbvgXg\" class=\"link\"> Positions
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"49\" id=\"subtab-AdminImages\">
                                <a href=\"http://localhost/adorelifeshop/adorelifeshop-admin/index.php?controller=AdminImages&amp;token=87437d2d3e954c650b1700528780f21b\" class=\"link\"> Image Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link";
        // line 752
        echo "-leveltwo\" data-submenu=\"117\" id=\"subtab-AdminLinkWidget\">
                                <a href=\"/adorelifeshop/adorelifeshop-admin/index.php/modules/link-widget/list?_token=GVf4wpf16cqre1wE2gV8ddjL9uYqV9ram6uxAgbvgXg\" class=\"link\"> Link List
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"50\" id=\"subtab-AdminParentShipping\">
                    <a href=\"http://localhost/adorelifeshop/adorelifeshop-admin/index.php?controller=AdminCarriers&amp;token=2a8e57741491d0bc23e0feb6b4492425\" class=\"link\">
                      <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                      <span>
                      Shipping
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-50\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"51\" id=\"subtab-AdminCarriers\">
                                <a href=\"http://localhost/adorelifeshop/adorelifeshop-admin/index.php?controller=AdminCarriers&amp;token=2a8e57741491d0bc23e0feb6b4492425\" class=\"link\"> Carriers
                                </a>
                              </li>

                                            ";
        // line 782
        echo "                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"52\" id=\"subtab-AdminShipping\">
                                <a href=\"/adorelifeshop/adorelifeshop-admin/index.php/improve/shipping/preferences/?_token=GVf4wpf16cqre1wE2gV8ddjL9uYqV9ram6uxAgbvgXg\" class=\"link\"> Preferences
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"53\" id=\"subtab-AdminParentPayment\">
                    <a href=\"/adorelifeshop/adorelifeshop-admin/index.php/improve/payment/payment_methods?_token=GVf4wpf16cqre1wE2gV8ddjL9uYqV9ram6uxAgbvgXg\" class=\"link\">
                      <i class=\"material-icons mi-payment\">payment</i>
                      <span>
                      Payment
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-53\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"54\" id=\"subtab-AdminPayment\">
                                <a href=\"/adorelifeshop/adorelifeshop-admin/index.php/improve/payment/payment_methods?_token=GVf4wpf16cqre1wE2gV8ddjL9";
        // line 811
        echo "uYqV9ram6uxAgbvgXg\" class=\"link\"> Payment Methods
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"55\" id=\"subtab-AdminPaymentPreferences\">
                                <a href=\"/adorelifeshop/adorelifeshop-admin/index.php/improve/payment/preferences?_token=GVf4wpf16cqre1wE2gV8ddjL9uYqV9ram6uxAgbvgXg\" class=\"link\"> Preferences
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"56\" id=\"subtab-AdminInternational\">
                    <a href=\"/adorelifeshop/adorelifeshop-admin/index.php/improve/international/localization/?_token=GVf4wpf16cqre1wE2gV8ddjL9uYqV9ram6uxAgbvgXg\" class=\"link\">
                      <i class=\"material-icons mi-language\">language</i>
                      <span>
                      International
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-56\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-s";
        // line 843
        echo "ubmenu=\"57\" id=\"subtab-AdminParentLocalization\">
                                <a href=\"/adorelifeshop/adorelifeshop-admin/index.php/improve/international/localization/?_token=GVf4wpf16cqre1wE2gV8ddjL9uYqV9ram6uxAgbvgXg\" class=\"link\"> Localization
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"62\" id=\"subtab-AdminParentCountries\">
                                <a href=\"/adorelifeshop/adorelifeshop-admin/index.php/improve/international/zones/?_token=GVf4wpf16cqre1wE2gV8ddjL9uYqV9ram6uxAgbvgXg\" class=\"link\"> Locations
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"66\" id=\"subtab-AdminParentTaxes\">
                                <a href=\"/adorelifeshop/adorelifeshop-admin/index.php/improve/international/taxes/?_token=GVf4wpf16cqre1wE2gV8ddjL9uYqV9ram6uxAgbvgXg\" class=\"link\"> Taxes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"69\" id=\"subtab-AdminTranslations\">
                                <a href=\"/adorelifeshop/adorelifeshop-admin/index.php/improve/international/translations/settings?_token=GVf4wpf16cqre1wE2gV8ddjL9uYqV9ram6uxAgbvgXg\" class=\"link\"> Translations
                                </a>
                              </li>

                         ";
        // line 872
        echo "                                                     </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title link-active\" data-submenu=\"70\" id=\"tab-CONFIGURE\">
                <span class=\"title\">Configure</span>
            </li>

                              
                  
                                                      
                                                          
                  <li class=\"link-levelone has_submenu link-active open ul-open\" data-submenu=\"71\" id=\"subtab-ShopParameters\">
                    <a href=\"/adorelifeshop/adorelifeshop-admin/index.php/configure/shop/preferences/preferences?_token=GVf4wpf16cqre1wE2gV8ddjL9uYqV9ram6uxAgbvgXg\" class=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      Shop Parameters
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_up
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-71\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"72\" id=\"subtab-AdminParentPreferences\">
                                <a href=\"/adorelifeshop/adorelifeshop-admin/index.php/configure/shop/preferences/preferences?_token=GVf4wpf16cqre1wE2gV8ddjL9uYqV9ram6uxAgbvgXg\" class=\"link\"> General
                                </a>
                              </li>

                               ";
        // line 907
        echo "                                                   
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"75\" id=\"subtab-AdminParentOrderPreferences\">
                                <a href=\"/adorelifeshop/adorelifeshop-admin/index.php/configure/shop/order-preferences/?_token=GVf4wpf16cqre1wE2gV8ddjL9uYqV9ram6uxAgbvgXg\" class=\"link\"> Order Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"78\" id=\"subtab-AdminPPreferences\">
                                <a href=\"/adorelifeshop/adorelifeshop-admin/index.php/configure/shop/product-preferences/?_token=GVf4wpf16cqre1wE2gV8ddjL9uYqV9ram6uxAgbvgXg\" class=\"link\"> Product Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"79\" id=\"subtab-AdminParentCustomerPreferences\">
                                <a href=\"/adorelifeshop/adorelifeshop-admin/index.php/configure/shop/customer-preferences/?_token=GVf4wpf16cqre1wE2gV8ddjL9uYqV9ram6uxAgbvgXg\" class=\"link\"> Customer Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo link-active\" data-submenu=\"83\" id=\"subtab-AdminParentStores\">
                                <a href=\"";
        // line 935
        echo "/adorelifeshop/adorelifeshop-admin/index.php/configure/shop/contacts/?_token=GVf4wpf16cqre1wE2gV8ddjL9uYqV9ram6uxAgbvgXg\" class=\"link\"> Contact
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"86\" id=\"subtab-AdminParentMeta\">
                                <a href=\"/adorelifeshop/adorelifeshop-admin/index.php/configure/shop/seo-urls/?_token=GVf4wpf16cqre1wE2gV8ddjL9uYqV9ram6uxAgbvgXg\" class=\"link\"> Traffic &amp; SEO
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"89\" id=\"subtab-AdminParentSearchConf\">
                                <a href=\"http://localhost/adorelifeshop/adorelifeshop-admin/index.php?controller=AdminSearchConf&amp;token=5dd791b6851449347a9d86979e7a8937\" class=\"link\"> Search
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"92\" id=\"subtab-AdminAdvancedParameters\">
                    <a href=\"/adorelifeshop/adorelifeshop-admin/index.php/configure/advanced/system-information/?_token=GVf4wpf16cqre1wE2gV8ddjL9uYqV9ram6uxAgbvgXg\" class=\"link\">
                      <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                      <s";
        // line 964
        echo "pan>
                      Advanced Parameters
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-92\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"93\" id=\"subtab-AdminInformation\">
                                <a href=\"/adorelifeshop/adorelifeshop-admin/index.php/configure/advanced/system-information/?_token=GVf4wpf16cqre1wE2gV8ddjL9uYqV9ram6uxAgbvgXg\" class=\"link\"> Information
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"94\" id=\"subtab-AdminPerformance\">
                                <a href=\"/adorelifeshop/adorelifeshop-admin/index.php/configure/advanced/performance/?_token=GVf4wpf16cqre1wE2gV8ddjL9uYqV9ram6uxAgbvgXg\" class=\"link\"> Performance
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"95\" id=\"subtab-AdminAdminPreferences\">
                                <a href=\"/adorelifeshop/adorelifeshop-admin/index.php/configure/advanced/administration/?_token=GVf4wpf16cqre1wE2gV8ddjL9uYqV9ram6uxAgb";
        // line 992
        echo "vgXg\" class=\"link\"> Administration
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"96\" id=\"subtab-AdminEmails\">
                                <a href=\"/adorelifeshop/adorelifeshop-admin/index.php/configure/advanced/emails/?_token=GVf4wpf16cqre1wE2gV8ddjL9uYqV9ram6uxAgbvgXg\" class=\"link\"> E-mail
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"97\" id=\"subtab-AdminImport\">
                                <a href=\"/adorelifeshop/adorelifeshop-admin/index.php/configure/advanced/import/?_token=GVf4wpf16cqre1wE2gV8ddjL9uYqV9ram6uxAgbvgXg\" class=\"link\"> Import
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"98\" id=\"subtab-AdminParentEmployees\">
                                <a href=\"/adorelifeshop/adorelifeshop-admin/index.php/configure/advanced/employees/?_token=GVf4wpf16cqre1wE2gV8ddjL9uYqV9ram6uxAgbvgXg\" class=\"link\"> Team
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"102\" id=\"subtab-AdminParentRequest";
        // line 1023
        echo "Sql\">
                                <a href=\"/adorelifeshop/adorelifeshop-admin/index.php/configure/advanced/sql-requests/?_token=GVf4wpf16cqre1wE2gV8ddjL9uYqV9ram6uxAgbvgXg\" class=\"link\"> Database
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"105\" id=\"subtab-AdminLogs\">
                                <a href=\"/adorelifeshop/adorelifeshop-admin/index.php/configure/advanced/logs/?_token=GVf4wpf16cqre1wE2gV8ddjL9uYqV9ram6uxAgbvgXg\" class=\"link\"> Logs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"106\" id=\"subtab-AdminWebservice\">
                                <a href=\"/adorelifeshop/adorelifeshop-admin/index.php/configure/advanced/webservice-keys/?_token=GVf4wpf16cqre1wE2gV8ddjL9uYqV9ram6uxAgbvgXg\" class=\"link\"> Webservice
                                </a>
                              </li>

                                                                                                                                                                                              
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"109\" id=\"subtab-AdminFeatureFlag\">
                                <a href=\"/adorelifeshop/adorelifeshop-admin/index.php/configure/advanced/feature-flags/?_token=GVf4wpf16cqre1wE2gV8ddjL9uYqV9ram6uxAgbvgXg\" class=\"link\"> New &amp; Experimental Features
                                </a>
  ";
        // line 1050
        echo "                            </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"110\" id=\"subtab-AdminParentSecurity\">
                                <a href=\"/adorelifeshop/adorelifeshop-admin/index.php/configure/advanced/security/?_token=GVf4wpf16cqre1wE2gV8ddjL9uYqV9ram6uxAgbvgXg\" class=\"link\"> Security
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                  </ul>
  </div>
  
</nav>


<div class=\"header-toolbar d-print-none\">
    
  <div class=\"container-fluid\">

    
      <nav aria-label=\"Breadcrumb\">
        <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">Contact</li>
          
                      <li class=\"breadcrumb-item active\">
              <a href=\"/adorelifeshop/adorelifeshop-admin/index.php/configure/shop/contacts/?_token=GVf4wpf16cqre1wE2gV8ddjL9uYqV9ram6uxAgbvgXg\" aria-current=\"page\">Contacts</a>
            </li>
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            Contacts          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                                                          <a
                  class=\"btn btn-primary pointer\"                  id=\"page-header-desc-configuration-add\"
                  href=\"/adorelifeshop/adorelifeshop-admin/index.php/configure/shop/contacts/new?_token=GVf4wpf16cqre1wE2gV8ddjL9uYqV9ram6uxAgbvgXg\"                  title=\"Add new contact\"                >
                  <i class=\"material-icons\">add_circle_outline</i>                  Add new contact
      ";
        // line 1100
        echo "          </a>
                                      
            
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Help\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"/adorelifeshop/adorelifeshop-admin/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Fen%252Fdoc%252FAdminContacts%253Fversion%253D8.0.2%2526country%253Den/Help?_token=GVf4wpf16cqre1wE2gV8ddjL9uYqV9ram6uxAgbvgXg\"
                   id=\"product_form_open_help\"
                >
                  Help
                </a>
                                    </div>
        </div>

      
    </div>
  </div>

  
      <div class=\"page-head-tabs\" id=\"head_tabs\">
      <ul class=\"nav nav-pills\">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <";
        // line 1122
        echo "li class=\"nav-item\">
                    <a href=\"/adorelifeshop/adorelifeshop-admin/index.php/configure/shop/contacts/?_token=GVf4wpf16cqre1wE2gV8ddjL9uYqV9ram6uxAgbvgXg\" id=\"subtab-AdminContacts\" class=\"nav-link tab active current\" data-submenu=\"84\">
                      Contacts
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                <li class=\"nav-item\">
                    <a href=\"http://localhost/adorelifeshop/adorelifeshop-admin/index.php?controller=AdminStores&token=e873caa581aa9a67d3d4b82ac426b096\" id=\"subtab-AdminStores\" class=\"nav-link tab \" data-submenu=\"85\">
                      Stores
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                                                                                                                                                                                                                                                                                                                                                                                    </ul>
    </div>
  
  <div class=\"btn-floating\">
    <button class=\"btn btn-primary collapsed\" data-toggle=\"collapse\" data-target=\".btn-floating-container\" aria-expanded=\"false\">
      <i class=\"material-icons\">add</i>
    </button>
    <div class=\"btn-floating-container collapse\">
      <div class=\"btn-floating-menu\">
        
                              <a
              class=\"btn btn-floating-item   pointer\"              id=\"page-header-desc-floating-configuration-add\"
              href=\"/adorelifeshop/adorelifeshop-admin/index.php/configu";
        // line 1150
        echo "re/shop/contacts/new?_token=GVf4wpf16cqre1wE2gV8ddjL9uYqV9ram6uxAgbvgXg\"              title=\"Add new contact\"            >
              Add new contact
              <i class=\"material-icons\">add_circle_outline</i>            </a>
                  
                              <a class=\"btn btn-floating-item btn-help btn-sidebar\" href=\"#\"
               title=\"Help\"
               data-toggle=\"sidebar\"
               data-target=\"#right-sidebar\"
               data-url=\"/adorelifeshop/adorelifeshop-admin/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Fen%252Fdoc%252FAdminContacts%253Fversion%253D8.0.2%2526country%253Den/Help?_token=GVf4wpf16cqre1wE2gV8ddjL9uYqV9ram6uxAgbvgXg\"
            >
              Help
            </a>
                        </div>
    </div>
  </div>
  
</div>

<div id=\"main-div\">
          
      <div class=\"content-div  with-tabs\">

        

                                                        
        <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>
<div id=\"content-message-box\"></div>


  ";
        // line 1179
        $this->displayBlock('content_header', $context, $blocks);
        $this->displayBlock('content', $context, $blocks);
        $this->displayBlock('content_footer', $context, $blocks);
        $this->displayBlock('sidebar_right', $context, $blocks);
        echo "

        

      </div>
    </div>

  <div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>Oh no!</h1>
  <p class=\"mt-3\">
    The mobile version of this page is not available yet.
  </p>
  <p class=\"mt-2\">
    Please use a desktop computer to access this page, until is adapted to mobile.
  </p>
  <p class=\"mt-2\">
    Thank you.
  </p>
  <a href=\"http://localhost/adorelifeshop/adorelifeshop-admin/index.php?controller=AdminDashboard&amp;token=57b6c090a4f6d569903b35d28ee36a13\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons rtl-flip\">arrow_back</i>
    Back
  </a>
</div>
  <div class=\"mobile-layer\"></div>

      <div id=\"footer\" class=\"bootstrap\">
    
</div>
  

      <div class=\"bootstrap\">
      
    </div>
  
";
        // line 1213
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>";
        echo "
</html>";
    }

    // line 87
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_extra_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 1179
    public function block_content_header($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_content_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_sidebar_right($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 1213
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_extra_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_translate_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "__string_template__93a809bd65408188c4da1e61628e6c55";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1380 => 1213,  1359 => 1179,  1348 => 87,  1339 => 1213,  1299 => 1179,  1268 => 1150,  1238 => 1122,  1214 => 1100,  1162 => 1050,  1133 => 1023,  1100 => 992,  1070 => 964,  1039 => 935,  1009 => 907,  972 => 872,  941 => 843,  907 => 811,  876 => 782,  844 => 752,  811 => 721,  780 => 692,  741 => 655,  708 => 624,  678 => 596,  644 => 564,  612 => 534,  583 => 507,  549 => 475,  517 => 445,  472 => 402,  422 => 354,  375 => 309,  320 => 256,  279 => 217,  238 => 178,  220 => 162,  178 => 122,  138 => 87,  118 => 69,  89 => 42,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__93a809bd65408188c4da1e61628e6c55", "");
    }
}
