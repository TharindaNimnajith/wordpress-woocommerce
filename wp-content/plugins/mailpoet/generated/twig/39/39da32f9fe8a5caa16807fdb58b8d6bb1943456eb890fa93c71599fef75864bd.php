<?php

if (!defined('ABSPATH')) exit;


use MailPoetVendor\Twig\Environment;
use MailPoetVendor\Twig\Error\LoaderError;
use MailPoetVendor\Twig\Error\RuntimeError;
use MailPoetVendor\Twig\Extension\SandboxExtension;
use MailPoetVendor\Twig\Markup;
use MailPoetVendor\Twig\Sandbox\SecurityError;
use MailPoetVendor\Twig\Sandbox\SecurityNotAllowedTagError;
use MailPoetVendor\Twig\Sandbox\SecurityNotAllowedFilterError;
use MailPoetVendor\Twig\Sandbox\SecurityNotAllowedFunctionError;
use MailPoetVendor\Twig\Source;
use MailPoetVendor\Twig\Template;

/* segments/dynamic.html */
class __TwigTemplate_756448057f537f5715d1a262e5a4bc2ae04cea7f694f005ae4bcfe6c68608edd extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'translations' => [$this, 'block_translations'],
            'after_translations' => [$this, 'block_after_translations'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "layout.html";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("layout.html", "segments/dynamic.html", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "  <div id=\"dynamic_segments_container\"></div>

  <script type=\"text/javascript\">
    var mailpoet_listing_per_page = ";
        // line 7
        echo \MailPoetVendor\twig_escape_filter($this->env, ($context["items_per_page"] ?? null), "html", null, true);
        echo ";
    var mailpoet_beacon_articles = [
      '5d667fc22c7d3a7a4d77c426', // https://kb.mailpoet.com/article/282-create-a-list
      '57f47ca3c697914f21035256', // https://kb.mailpoet.com/article/133-the-wordpress-users-list
      '5d4beee42c7d3a330e3c4207', // https://kb.mailpoet.com/article/278-the-woocommerce-customers-list
      '5e187a3a2c7d3a7e9ae607ff', // https://kb.mailpoet.com/article/294-managing-your-subscribers-list
      '57ce079f903360649f6e56fc', // https://kb.mailpoet.com/article/126-importing-subscribers-with-csv-files
      '5d722c7104286364bc8ecf19', // https://kb.mailpoet.com/article/284-import-old-customers-to-the-woocommerce-customers-list
      '59a89621042863033a1c82e6' // https://kb.mailpoet.com/article/205-roles-and-permissions
    ];
    var mailpoet_custom_fields = ";
        // line 17
        echo json_encode(($context["custom_fields"] ?? null));
        echo ";
    var mailpoet_static_segments_list = ";
        // line 18
        echo json_encode(($context["static_segments_list"] ?? null));
        echo ";
    var wordpress_editable_roles_list = ";
        // line 19
        echo json_encode(($context["wordpress_editable_roles_list"] ?? null));
        echo ";
    var mailpoet_newsletters_list = ";
        // line 20
        echo json_encode(($context["newsletters_list"] ?? null));
        echo ";
    var mailpoet_product_categories = ";
        // line 21
        echo json_encode(($context["product_categories"] ?? null));
        echo ";
    var mailpoet_products = ";
        // line 22
        echo json_encode(($context["products"] ?? null));
        echo ";
    var mailpoet_membership_plans = ";
        // line 23
        echo json_encode(($context["membership_plans"] ?? null));
        echo ";
    var mailpoet_subscription_products = ";
        // line 24
        echo json_encode(($context["subscription_products"] ?? null));
        echo ";
    var mailpoet_can_use_woocommerce_memberships = ";
        // line 25
        echo json_encode(($context["can_use_woocommerce_memberships"] ?? null));
        echo ";
    var mailpoet_can_use_woocommerce_subscriptions = ";
        // line 26
        echo json_encode(($context["can_use_woocommerce_subscriptions"] ?? null));
        echo ";
    var mailpoet_woocommerce_currency_symbol = ";
        // line 27
        echo json_encode(($context["woocommerce_currency_symbol"] ?? null));
        echo ";
    var mailpoet_woocommerce_countries = ";
        // line 28
        echo json_encode(($context["woocommerce_countries"] ?? null));
        echo ";
    var mailpoet_woocommerce_payment_methods = ";
        // line 29
        echo json_encode(($context["woocommerce_payment_methods"] ?? null));
        echo ";
    var mailpoet_woocommerce_shipping_methods = ";
        // line 30
        echo json_encode(($context["woocommerce_shipping_methods"] ?? null));
        echo ";
    var mailpoet_signup_forms = ";
        // line 31
        echo json_encode(($context["signup_forms"] ?? null));
        echo ";
    var mailpoet_automations = ";
        // line 32
        echo json_encode(($context["automations"] ?? null));
        echo ";
  </script>
";
    }

    // line 36
    public function block_translations($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 37
        echo "  ";
        $this->loadTemplate("segments/translations.html", "segments/dynamic.html", 37)->display($context);
    }

    // line 40
    public function block_after_translations($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 41
        echo "  ";
        echo do_action("mailpoet_segments_translations_after");
        echo "
";
    }

    public function getTemplateName()
    {
        return "segments/dynamic.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 41,  146 => 40,  141 => 37,  137 => 36,  130 => 32,  126 => 31,  122 => 30,  118 => 29,  114 => 28,  110 => 27,  106 => 26,  102 => 25,  98 => 24,  94 => 23,  90 => 22,  86 => 21,  82 => 20,  78 => 19,  74 => 18,  70 => 17,  57 => 7,  52 => 4,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "segments/dynamic.html", "/home/circleci/mailpoet/mailpoet/views/segments/dynamic.html");
    }
}
