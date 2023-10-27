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

/* __string_template__ee925b57059c40a9294858401d3cbcf7 */
class __TwigTemplate_a4c282d9abcdad2ba7aad42bb81ff7b2 extends Template
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
<html lang=\"fr\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/prestashop/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/prestashop/img/app_icon.png\" />

<title>Devises • esaf</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminCurrencies';
    var iso_user = 'fr';
    var lang_is_rtl = '0';
    var full_language_code = 'fr-fr';
    var full_cldr_language_code = 'fr-FR';
    var country_iso_code = 'FR';
    var _PS_VERSION_ = '8.1.0';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'Une nouvelle commande a été passée sur votre boutique.';
    var order_number_msg = 'Numéro de commande : ';
    var total_msg = 'Total : ';
    var from_msg = 'Du ';
    var see_order_msg = 'Afficher cette commande';
    var new_customer_msg = 'Un nouveau client s\\'est inscrit sur votre boutique.';
    var customer_name_msg = 'Nom du client : ';
    var new_msg = 'Un nouveau message a été posté sur votre boutique.';
    var see_msg = 'Lire le message';
    var token = '1f5a1914530d06cf9d1f0ff644bac3bf';
    var currentIndex = 'index.php?controller=AdminCurrencies';
    var employee_token = '1e1eae59ad462d0ead96eb2a1a0f9e14';
    var choose_language_translate = 'Choisissez la langue :';
    var default_language = '1';
    var admin_modules_link = '/prestashop/admin2023/index.php/improve/modules/manage?_token=4yRpxoh1XAV1D9_jY8oZNlDtKxW044AJkI8AwJ97YWE';
    var admin_notification_get_link = '/prestashop/admin2023/index.php/common/notifications?_token=4yRpxoh1XAV1D9_jY8oZNlDtKxW044AJkI8AwJ97YWE';
    var admin_notification_push_link = adminNotificationPushLink = '/prestashop/admin2023/index.php/common/notifications/ack?_token=4yRpxoh1XAV1D9_jY8oZNlDtKxW044AJkI8AwJ97YWE';
    var tab_modules_list = ";
        // line 41
        echo "'';
    var update_success_msg = 'Mise à jour réussie';
    var search_product_msg = 'Rechercher un produit';
  </script>



<link
      rel=\"preload\"
      href=\"/prestashop/admin2023/themes/new-theme/public/2d8017489da689caedc1.preload..woff2\"
      as=\"font\"
      crossorigin
    >
      <link href=\"/prestashop/admin2023/themes/new-theme/public/create_product_default_theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/admin2023/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"https://unpkg.com/@prestashopcorp/edition-reskin/dist/back.min.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/admin2023/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/modules/ps_checkout/views/css/incompatible-banner.css?version=3.4.0\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/modules/klaviyopsautomation/dist/css/klaviyops-admin-global.0dd51c02.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/modules/ps_facebook/views/css/admin/menu.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/modules/psxmarketingwithgoogle/views/css/admin/menu.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/prestashop\\/admin2023\\/\";
var baseDir = \"\\/prestashop\\/\";
var changeFormLanguageUrl = \"\\/prestashop\\/admin2023\\/index.php\\/configure\\/advanced\\/employees\\/change-form-language?_token=4yRpxoh1XAV1D9_jY8oZNlDtKxW044AJkI8AwJ97YWE\";
var currency = {\"iso_code\":\"EUR\",\"sign\":\"\\u20ac\",\"name\":\"Euro\",\"format\":null};
var currency_specifications = {\"symbol\":[\",\",\"\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"currencyCode\":\"EUR\",\"currencySym";
        // line 70
        echo "bol\":\"\\u20ac\",\"numberSymbols\":[\",\",\"\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.00\\u00a0\\u00a4\",\"negativePattern\":\"-#,##0.00\\u00a0\\u00a4\",\"maxFractionDigits\":2,\"minFractionDigits\":2,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var number_specifications = {\"symbol\":[\",\",\"\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"numberSymbols\":[\",\",\"\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var prestashop = {\"debug\":false};
var show_new_customers = \"1\";
var show_new_messages = \"1\";
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/prestashop/modules/ps_edition_basic/views/js/favicon.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/modules/ps_edition_basic/views/js/hideMinifiedChecklist.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/admin2023/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/js/admin.js?v=8.1.0\"></script>
<script type=\"text/javascript\" src=\"/prestashop/admin2023/themes/new-theme/public/cldr.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/js/tools.js?v=8.1.0\"></script>
<script type=\"text/javascript\" src=\"/prestashop/admin2023/themes/new-theme/public/create_product.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/admin2023/themes/default/js/vendor/nv.d3.min.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/modules/ps_faviconnotificationbo/views/js/favico.js\"></script>
<scri";
        // line 89
        echo "pt type=\"text/javascript\" src=\"/prestashop/modules/ps_faviconnotificationbo/views/js/ps_faviconnotificationbo.js\"></script>

  <script>
            var admin_gamification_ajax_url = \"http:\\/\\/localhost\\/prestashop\\/admin2023\\/index.php?controller=AdminGamification&token=8e51fd7359bb98baba85b9da98d5997c\";
            var current_id_tab = 60;
        </script><script>
  if (undefined !== ps_faviconnotificationbo) {
    ps_faviconnotificationbo.initialize({
      backgroundColor: '#DF0067',
      textColor: '#FFFFFF',
      notificationGetUrl: '/prestashop/admin2023/index.php/common/notifications?_token=4yRpxoh1XAV1D9_jY8oZNlDtKxW044AJkI8AwJ97YWE',
      CHECKBOX_ORDER: 1,
      CHECKBOX_CUSTOMER: 1,
      CHECKBOX_MESSAGE: 1,
      timer: 120000, // Refresh every 2 minutes
    });
  }
</script>
    <script>
        window.userLocale  = 'fr';
        window.userflow_id = 'ct_55jfryadgneorc45cjqxpbf6o4';
    </script>
    <script type=\"module\" src=\"https://unpkg.com/@prestashopcorp/smb-edition-homepage/dist/assets/index.js\"></script>

";
        // line 113
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>";
        echo "

<body
  class=\"lang-fr admincurrencies\"
  data-base-url=\"/prestashop/admin2023/index.php\"  data-token=\"4yRpxoh1XAV1D9_jY8oZNlDtKxW044AJkI8AwJ97YWE\">

  <header id=\"header\" class=\"d-print-none\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"http://localhost/prestashop/admin2023/index.php?controller=AdminPsEditionBasicHomepageController&amp;token=20c4f94fd7400ca9959420c208401a92\"></a>
      <span id=\"shop_version\">8.1.0</span>

      <div class=\"component\" id=\"quick-access-container\">
        <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Accès rapide
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost/prestashop/admin2023/index.php/sell/orders?token=c908adc7aa34aca27a8f77b2a988b502\"
                 data-item=\"Commandes\"
      >Commandes</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost/prestashop/admin2023/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=0bf6c404565a5301bc3b0b4020fbb338\"
                 data-item=\"Évaluation du catalogue\"
      >Évaluation du catalogue</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost/prestashop/admin2023/index.php/improve/modules/manage?token=c908adc7aa34aca27a8f77b2a988b502\"
                 data-item=\"Modules installés\"
      >Modules installés</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost/prestashop/admin2023/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=80cfc6506c9bf087ecd75e8ec0ba603a\"
                 data-item=\"Nouveau bon de réduction\"
      >";
        // line 149
        echo "Nouveau bon de réduction</a>
          <a class=\"dropdown-item quick-row-link new-product-button\"
         href=\"http://localhost/prestashop/admin2023/index.php/sell/catalog/products-v2/create?token=c908adc7aa34aca27a8f77b2a988b502\"
                 data-item=\"Nouveau produit\"
      >Nouveau produit</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost/prestashop/admin2023/index.php/sell/catalog/categories/new?token=c908adc7aa34aca27a8f77b2a988b502\"
                 data-item=\"Nouvelle catégorie\"
      >Nouvelle catégorie</a>
        <div class=\"dropdown-divider\"></div>
          <a id=\"quick-add-link\"
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"62\"
        data-icon=\"icon-AdminParentLocalization\"
        data-method=\"add\"
        data-url=\"index.php/improve/international/currencies\"
        data-post-link=\"http://localhost/prestashop/admin2023/index.php?controller=AdminQuickAccesses&token=ec6838ab70ea02754e2ce8ea29bef8f3\"
        data-prompt-text=\"Veuillez nommer ce raccourci :\"
        data-link=\"Devises - Liste\"
      >
        <i class=\"material-icons\">add_circle</i>
        Ajouter la page actuelle à l'accès rapide
      </a>
        <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://localhost/prestashop/admin2023/index.php?controller=AdminQuickAccesses&token=ec6838ab70ea02754e2ce8ea29bef8f3\">
      <i class=\"material-icons\">settings</i>
      Gérez vos accès rapides
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
      action=\"/prestashop/admin2023/index.php?controller=AdminSearch&amp;token=cc12aeca56900f797d16077f3ae22407\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_sea";
        // line 188
        echo "rch_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Rechercher (ex. : référence produit, nom du client, etc.)\" aria-label=\"Barre de recherche\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        Partout
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"Partout\" href=\"#\" data-value=\"0\" data-placeholder=\"Que souhaitez-vous trouver ?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> Partout</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Catalogue\" href=\"#\" data-value=\"1\" data-placeholder=\"Nom du produit, référence, etc.\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Catalogue</a>
        <a class=\"dropdown-item\" data-item=\"Clients par nom\" href=\"#\" data-value=\"2\" data-placeholder=\"Nom\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Clients par nom</a>
        <a class=\"dropdown-item\" data-item=\"Clients par adresse IP\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Clients par adresse IP</a>
        <a class=\"dropdown-item\" data-item=\"Commandes\" href=\"#\" data-value=\"3\" data-placeholder=\"ID commande\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Commandes</a>
        <a class=\"dropdown-item\" data-item=\"Factures\" href=\"#\" data-value=\"4\" data-placeholder=\"Numéro de facture\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i> Factures</a>
        <a class=\"dropdown-item\" data-item=\"Paniers\" href=\"#\" data-value=\"5\" data-placeholder=\"ID panier\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Paniers</a>
   ";
        // line 204
        echo "     <a class=\"dropdown-item\" data-item=\"Modules\" href=\"#\" data-value=\"7\" data-placeholder=\"Nom du module\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Modules</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">RECHERCHE</span><i class=\"material-icons\">search</i></button>
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
            <button class=\"component-search-cancel d-none\">Annuler</button>
          </div>

          <div class=\"component-search-quickaccess d-none\">
  <p class=\"component-search-title\">Accès rapide</p>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/prestashop/admin2023/index.php/sell/orders?token=c908adc7aa34aca27a8f77b2a988b502\"
             data-item=\"Commandes\"
    >Commandes</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/prestashop/admin2023/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=0bf6c404565a5301bc3b0b4020fbb338\"
             data-item=\"Évaluation du catalogue\"
    >Évaluation du catalogue</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/prestashop/admin2023/index.php/improve/modules/manage?token=c908adc7aa34aca27a8f77b2a988b502\"
             data-item=\"Modules installés\"
    >Modules installés</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/prestashop/admin2023/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=80cfc6506c9bf087ecd75e8ec0ba603a\"
             data-item=\"Nouveau bon de réduction\"
    >Nouveau bon de réduction</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/prestashop/admin2023/index.php/sell/catalog/products-v2/create?token=c908adc7aa34aca27a8f77b2a988b502\"
             data-item=\"Nouveau produit\"
    >Nou";
        // line 242
        echo "veau produit</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/prestashop/admin2023/index.php/sell/catalog/categories/new?token=c908adc7aa34aca27a8f77b2a988b502\"
             data-item=\"Nouvelle catégorie\"
    >Nouvelle catégorie</a>
    <div class=\"dropdown-divider\"></div>
      <a id=\"quick-add-link\"
      class=\"dropdown-item js-quick-link\"
      href=\"#\"
      data-rand=\"167\"
      data-icon=\"icon-AdminParentLocalization\"
      data-method=\"add\"
      data-url=\"index.php/improve/international/currencies\"
      data-post-link=\"http://localhost/prestashop/admin2023/index.php?controller=AdminQuickAccesses&token=ec6838ab70ea02754e2ce8ea29bef8f3\"
      data-prompt-text=\"Veuillez nommer ce raccourci :\"
      data-link=\"Devises - Liste\"
    >
      <i class=\"material-icons\">add_circle</i>
      Ajouter la page actuelle à l'accès rapide
    </a>
    <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://localhost/prestashop/admin2023/index.php?controller=AdminQuickAccesses&token=ec6838ab70ea02754e2ce8ea29bef8f3\">
    <i class=\"material-icons\">settings</i>
    Gérez vos accès rapides
  </a>
</div>
        </div>

        <div class=\"component-search-background d-none\"></div>
      </div>

      
      
      <div class=\"header-right\">
                  <div class=\"component\" id=\"header-shop-list-container\">
              <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"http://localhost/prestashop/\" target= \"_blank\">
      <i class=\"material-icons\">visibility</i>
      <span>Voir ma boutique</span>
    </a>
  </div>
          </div>
                          <div class=\"component header-right-component\" id=\"header-notifications-container\">
            <div id=\"notif\" class=\"notification-center dropdown dropdown-clickable\">
  <button class=\"btn notification js-notification dropdown-toggle\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">notifications_none</i>
    <span id=\"notifications-total\" class=\"cou";
        // line 287
        echo "nt hide\">0</span>
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
              Commandes<span id=\"_nb_new_orders_\"></span>
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
              Clients<span id=\"_nb_new_customers_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"messages-tab\"
              data-toggle=\"tab\"
              data-type=\"customer_message\"
              href=\"#messages-notifications\"
              role=\"tab\"
            >
              Messages<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Pas de nouvelle commande pour le moment :(<br>
              Avez-vous consulté vos <strong><a href=\"http://localhost/prestashop/admin2023/index.php?controller=AdminCarts&action=filterOnlyAbandonedCarts&token=41fa272a61a549884849c47106002bbe\">paniers abandonnés</a></strong> ?<br> Votre prochaine commande s'y trouve peut-être !
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                  ";
        // line 339
        echo "                  <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Aucun nouveau client pour l'instant :(<br>
              Êtes-vous actifs sur les réseaux sociaux en ce moment ?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Pas de nouveau message pour l'instant.<br>
              On dirait que vos clients sont satisfaits :)
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
      de <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - enregistré le <strong>_date_add_</strong>
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
      <div class=";
        // line 389
        echo "\"employee-top\">
        <span class=\"employee-avatar\"><img class=\"avatar rounded-circle\" src=\"http://localhost/prestashop/img/pr/default.jpg\" alt=\"Stevie rose\" /></span>
        <span class=\"employee_profile\">Ravi de vous revoir Stevie rose</span>
      </div>

      <a class=\"dropdown-item employee-link profile-link\" href=\"/prestashop/admin2023/index.php/configure/advanced/employees/1/edit?_token=4yRpxoh1XAV1D9_jY8oZNlDtKxW044AJkI8AwJ97YWE\">
      <i class=\"material-icons\">edit</i>
      <span>Votre profil</span>
    </a>
    </div>

    <p class=\"divider\"></p>

                  <a class=\"dropdown-item \" href=\"https://accounts.distribution.prestashop.net?utm_source=localhost&utm_medium=back-office&utm_campaign=ps_accounts&utm_content=headeremployeedropdownlink\" target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">open_in_new</i> Gérer votre compte PrestaShop
        </a>
                  <p class=\"divider\"></p>
            
    <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"http://localhost/prestashop/admin2023/index.php?controller=AdminLogin&amp;logout=1&amp;token=1fb421e2b80e622d6dafa091da6e847b\">
      <i class=\"material-icons d-lg-none\">power_settings_new</i>
      <span>Déconnexion</span>
    </a>
  </div>
</div>
        </div>
              </div>
    </nav>
  </header>

  <nav class=\"nav-bar d-none d-print-none d-md-block\">
  <span class=\"menu-collapse\" data-toggle-url=\"/prestashop/admin2023/index.php/configure/advanced/employees/toggle-navigation?_token=4yRpxoh1XAV1D9_jY8oZNlDtKxW044AJkI8AwJ97YWE\">
    <i class=\"material-icons rtl-flip\">chevron_left</i>
    <i class=\"material-icons rtl-flip\">chevron_left</i>
  </span>

  <div class=\"nav-bar-overflow\">
      <div class=\"logo-container\">
          <a id=\"header_logo\" class=\"logo float-left\" href=\"http://localhost/prestashop/admin2023/index.php?controller=AdminPsEditionBasicHomepageController&amp;token=20c4f94fd7400ca9959420c208401a92\"></a>
";
        // line 427
        echo "          <span id=\"shop_version\" class=\"header-version\">8.1.0</span>
      </div>

      <ul class=\"main-menu\">
              
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"131\" id=\"tab-HOME\">
                <span class=\"title\">Bienvenue</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"1\" id=\"subtab-AdminDashboard\">
                    <a href=\"http://localhost/prestashop/admin2023/index.php?controller=AdminDashboard&amp;token=0604b032b14e901ec8a45693ff50b957\" class=\"link\">
                      <i class=\"material-icons mi-trending_up\">trending_up</i>
                      <span>
                      Tableau de bord
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"2\" id=\"tab-SELL\">
                <span class=\"title\">Vendre</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                    <a href=\"/prestashop/admin2023/index.php/sell/orders/?_token=4yRpxoh1XAV1D9_jY8oZNlDtKxW044AJkI8AwJ97YWE\" class=\"link\">
                      <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                      <sp";
        // line 471
        echo "an>
                      Commandes
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                                <a href=\"/prestashop/admin2023/index.php/sell/orders/?_token=4yRpxoh1XAV1D9_jY8oZNlDtKxW044AJkI8AwJ97YWE\" class=\"link\"> Commandes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                                <a href=\"/prestashop/admin2023/index.php/sell/orders/invoices/?_token=4yRpxoh1XAV1D9_jY8oZNlDtKxW044AJkI8AwJ97YWE\" class=\"link\"> Factures
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                                <a href=\"/prestashop/admin2023/index.php/sell/orders/credit-slips/?_token=4yRpxoh1XAV1D9_jY8oZNlDtKxW044AJkI8AwJ97YWE\" class=\"link\"> Avoirs
                                </a>
                              </li>

                       ";
        // line 503
        echo "                                                           
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                                <a href=\"/prestashop/admin2023/index.php/sell/orders/delivery-slips/?_token=4yRpxoh1XAV1D9_jY8oZNlDtKxW044AJkI8AwJ97YWE\" class=\"link\"> Bons de livraison
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                                <a href=\"http://localhost/prestashop/admin2023/index.php?controller=AdminCarts&amp;token=41fa272a61a549884849c47106002bbe\" class=\"link\"> Paniers
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                    <a href=\"/prestashop/admin2023/index.php/sell/catalog/products?_token=4yRpxoh1XAV1D9_jY8oZNlDtKxW044AJkI8AwJ97YWE\" class=\"link\">
                      <i class=\"material-icons mi-store\">store</i>
                      <span>
                      Catalogue
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                       ";
        // line 534
        echo "     </a>
                                              <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                                <a href=\"/prestashop/admin2023/index.php/sell/catalog/products?_token=4yRpxoh1XAV1D9_jY8oZNlDtKxW044AJkI8AwJ97YWE\" class=\"link\"> Produits
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                                <a href=\"/prestashop/admin2023/index.php/sell/catalog/categories?_token=4yRpxoh1XAV1D9_jY8oZNlDtKxW044AJkI8AwJ97YWE\" class=\"link\"> Catégories
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                                <a href=\"/prestashop/admin2023/index.php/sell/catalog/monitoring/?_token=4yRpxoh1XAV1D9_jY8oZNlDtKxW044AJkI8AwJ97YWE\" class=\"link\"> Suivi
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                                <a href=\"http://localhost/prest";
        // line 564
        echo "ashop/admin2023/index.php?controller=AdminAttributesGroups&amp;token=da1548897f1a69a51de65d5e97bf45cc\" class=\"link\"> Attributs et caractéristiques
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                                <a href=\"/prestashop/admin2023/index.php/sell/catalog/brands/?_token=4yRpxoh1XAV1D9_jY8oZNlDtKxW044AJkI8AwJ97YWE\" class=\"link\"> Marques et fournisseurs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                                <a href=\"/prestashop/admin2023/index.php/sell/attachments/?_token=4yRpxoh1XAV1D9_jY8oZNlDtKxW044AJkI8AwJ97YWE\" class=\"link\"> Fichiers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                                <a href=\"http://localhost/prestashop/admin2023/index.php?controller=AdminCartRules&amp;token=80cfc6506c9bf087ecd75e8ec0ba603a\" class=\"link\"> Réductions
                                </a>
                              </li>

                                                                                  
                              
                                                          ";
        // line 594
        echo "  
                              <li class=\"link-leveltwo\" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                                <a href=\"/prestashop/admin2023/index.php/sell/stocks/?_token=4yRpxoh1XAV1D9_jY8oZNlDtKxW044AJkI8AwJ97YWE\" class=\"link\"> Stock
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                    <a href=\"/prestashop/admin2023/index.php/sell/customers/?_token=4yRpxoh1XAV1D9_jY8oZNlDtKxW044AJkI8AwJ97YWE\" class=\"link\">
                      <i class=\"material-icons mi-account_circle\">account_circle</i>
                      <span>
                      Clients
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                                <a href=\"/prestashop/admin2023/index.php/sell/customers/?_token=4yRpxoh1XAV1D9_jY8oZNlDtKxW044AJkI8AwJ97YWE\" class=\"link\"> Clients
                                </a>
                              </li>

                                                                                  ";
        // line 625
        echo "
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                                <a href=\"/prestashop/admin2023/index.php/sell/addresses/?_token=4yRpxoh1XAV1D9_jY8oZNlDtKxW044AJkI8AwJ97YWE\" class=\"link\"> Adresses
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                    <a href=\"http://localhost/prestashop/admin2023/index.php?controller=AdminCustomerThreads&amp;token=961e82a7343cb756857a315d99c19503\" class=\"link\">
                      <i class=\"material-icons mi-chat\">chat</i>
                      <span>
                      SAV
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                                <a href=\"http://localhost/prestashop/admin2023/index.php?controller=AdminCustomerThreads&amp;token=961e82a7343cb756857a315d99c1950";
        // line 654
        echo "3\" class=\"link\"> SAV
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                                <a href=\"/prestashop/admin2023/index.php/sell/customer-service/order-messages/?_token=4yRpxoh1XAV1D9_jY8oZNlDtKxW044AJkI8AwJ97YWE\" class=\"link\"> Messages prédéfinis
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                                <a href=\"http://localhost/prestashop/admin2023/index.php?controller=AdminReturn&amp;token=4c22931789c662e4fb9ba426b9e59244\" class=\"link\"> Retours produits
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                    <a href=\"http://localhost/prestashop/admin2023/index.php?controller=AdminMetricsLegacyStatsController&amp;token=6e071d71e1945b3f81d934d8eacb9f62\" class=\"link\">
                      <i class=\"material-icons mi-assessment\">assessment</i>
                      <span>
                      Statistiques
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
    ";
        // line 687
        echo "                                                                keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-32\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"174\" id=\"subtab-AdminMetricsLegacyStatsController\">
                                <a href=\"http://localhost/prestashop/admin2023/index.php?controller=AdminMetricsLegacyStatsController&amp;token=6e071d71e1945b3f81d934d8eacb9f62\" class=\"link\"> Statistiques
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"175\" id=\"subtab-AdminMetricsController\">
                                <a href=\"http://localhost/prestashop/admin2023/index.php?controller=AdminMetricsController&amp;token=1030a506c714d44b3d10793269f6dbbc\" class=\"link\"> PrestaShop Metrics
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title link-active\" data-submenu=\"37\" id=\"tab-IMPROVE\">
                <span class=\"title\">Personnaliser</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-leve";
        // line 723
        echo "lone has_submenu\" data-submenu=\"38\" id=\"subtab-AdminParentModulesSf\">
                    <a href=\"http://localhost/prestashop/admin2023/index.php?controller=AdminPsMboModule&amp;token=cbe2a15fe41f98d97c46fcde7f22ca1a\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Modules
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-38\" class=\"submenu panel-collapse\">
                                                                                                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"135\" id=\"subtab-AdminPsMboModuleParent\">
                                <a href=\"http://localhost/prestashop/admin2023/index.php?controller=AdminPsMboModule&amp;token=cbe2a15fe41f98d97c46fcde7f22ca1a\" class=\"link\"> Marketplace
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"39\" id=\"subtab-AdminModulesSf\">
                                <a href=\"/prestashop/admin2023/index.php/improve/modules/manage?_token=4yRpxoh1XAV1D9_jY8oZNlDtKxW044AJkI8AwJ97YWE\" class=\"link\"> Gestionnaire de modules 
                                </a>
                              </li>

                                           ";
        // line 750
        echo "                                                                                         </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"43\" id=\"subtab-AdminParentThemes\">
                    <a href=\"/prestashop/admin2023/index.php/improve/design/themes/?_token=4yRpxoh1XAV1D9_jY8oZNlDtKxW044AJkI8AwJ97YWE\" class=\"link\">
                      <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                      <span>
                      Apparence
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"142\" id=\"subtab-AdminThemesParent\">
                                <a href=\"/prestashop/admin2023/index.php/improve/design/themes/?_token=4yRpxoh1XAV1D9_jY8oZNlDtKxW044AJkI8AwJ97YWE\" class=\"link\"> Thème et logo
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"139\" id=\"subtab-AdminPsMboTheme\">
                                <a href=\"http://localhost/prestashop/admin2023/index.php?controller=AdminPsMboTheme&";
        // line 779
        echo "amp;token=5a642b10950353bdd2b7819ba81b866f\" class=\"link\"> Themes Catalog
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"45\" id=\"subtab-AdminParentMailTheme\">
                                <a href=\"/prestashop/admin2023/index.php/improve/design/mail_theme/?_token=4yRpxoh1XAV1D9_jY8oZNlDtKxW044AJkI8AwJ97YWE\" class=\"link\"> Thème d&#039;e-mail
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"47\" id=\"subtab-AdminCmsContent\">
                                <a href=\"/prestashop/admin2023/index.php/improve/design/cms-pages/?_token=4yRpxoh1XAV1D9_jY8oZNlDtKxW044AJkI8AwJ97YWE\" class=\"link\"> Pages
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"48\" id=\"subtab-AdminModulesPositions\">
                                <a href=\"/prestashop/admin2023/index.php/improve/design/modules/positions/?_token=4yRpxoh1XAV1D9_jY8oZNlDtKxW044AJkI8AwJ97YWE\" class=\"link\"> Positions
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"";
        // line 810
        echo "49\" id=\"subtab-AdminImages\">
                                <a href=\"http://localhost/prestashop/admin2023/index.php?controller=AdminImages&amp;token=e5240e25552261de7a76ceb1222e3518\" class=\"link\"> Images
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"118\" id=\"subtab-AdminLinkWidget\">
                                <a href=\"/prestashop/admin2023/index.php/modules/link-widget/list?_token=4yRpxoh1XAV1D9_jY8oZNlDtKxW044AJkI8AwJ97YWE\" class=\"link\"> Liste de liens
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"50\" id=\"subtab-AdminParentShipping\">
                    <a href=\"http://localhost/prestashop/admin2023/index.php?controller=AdminCarriers&amp;token=014260711c9a378d43cdc9eeda6ff710\" class=\"link\">
                      <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                      <span>
                      Livraison
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-50\" class=\"submenu panel-collapse\">
                                                      
                         ";
        // line 841
        echo "     
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"51\" id=\"subtab-AdminCarriers\">
                                <a href=\"http://localhost/prestashop/admin2023/index.php?controller=AdminCarriers&amp;token=014260711c9a378d43cdc9eeda6ff710\" class=\"link\"> Transporteurs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"52\" id=\"subtab-AdminShipping\">
                                <a href=\"/prestashop/admin2023/index.php/improve/shipping/preferences/?_token=4yRpxoh1XAV1D9_jY8oZNlDtKxW044AJkI8AwJ97YWE\" class=\"link\"> Préférences
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"161\" id=\"subtab-AdminMbeConfiguration\">
                                <a href=\"http://localhost/prestashop/admin2023/index.php?controller=AdminMbeConfiguration&amp;token=02d2abeb7462f2a2484efa019bb535bc\" class=\"link\"> MBE - Configuration
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"163\" id=\"subtab-AdminMbeShipping\">
                                <a href=\"http://localhost/prestashop/admin2023/index.php?controller=AdminMbeShipping&amp;token=3754bf6194089a8027a461ca42a9c468\" class=\"link\"> MBE - Expéditions
      ";
        // line 869
        echo "                          </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"53\" id=\"subtab-AdminParentPayment\">
                    <a href=\"/prestashop/admin2023/index.php/improve/payment/payment_methods?_token=4yRpxoh1XAV1D9_jY8oZNlDtKxW044AJkI8AwJ97YWE\" class=\"link\">
                      <i class=\"material-icons mi-payment\">payment</i>
                      <span>
                      Paiement
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-53\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"54\" id=\"subtab-AdminPayment\">
                                <a href=\"/prestashop/admin2023/index.php/improve/payment/payment_methods?_token=4yRpxoh1XAV1D9_jY8oZNlDtKxW044AJkI8AwJ97YWE\" class=\"link\"> Moyens de paiement
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"55\" id=\"subtab-AdminPaymentPref";
        // line 900
        echo "erences\">
                                <a href=\"/prestashop/admin2023/index.php/improve/payment/preferences?_token=4yRpxoh1XAV1D9_jY8oZNlDtKxW044AJkI8AwJ97YWE\" class=\"link\"> Préférences
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                                                          
                  <li class=\"link-levelone has_submenu link-active open ul-open\" data-submenu=\"56\" id=\"subtab-AdminInternational\">
                    <a href=\"/prestashop/admin2023/index.php/improve/international/localization/?_token=4yRpxoh1XAV1D9_jY8oZNlDtKxW044AJkI8AwJ97YWE\" class=\"link\">
                      <i class=\"material-icons mi-language\">language</i>
                      <span>
                      International
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_up
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-56\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo link-active\" data-submenu=\"57\" id=\"subtab-AdminParentLocalization\">
                                <a href=\"/prestashop/admin2023/index.php/improve/international/localization/?_token=4yRpxoh1XAV1D9_jY8oZNlDtKxW044AJkI8AwJ97YWE\" class=\"link\"> Localisation
                                </a>
                              </li>

                                      ";
        // line 930
        echo "                                            
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"62\" id=\"subtab-AdminParentCountries\">
                                <a href=\"/prestashop/admin2023/index.php/improve/international/zones/?_token=4yRpxoh1XAV1D9_jY8oZNlDtKxW044AJkI8AwJ97YWE\" class=\"link\"> Zones géographiques
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"66\" id=\"subtab-AdminParentTaxes\">
                                <a href=\"/prestashop/admin2023/index.php/improve/international/taxes/?_token=4yRpxoh1XAV1D9_jY8oZNlDtKxW044AJkI8AwJ97YWE\" class=\"link\"> Taxes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"69\" id=\"subtab-AdminTranslations\">
                                <a href=\"/prestashop/admin2023/index.php/improve/international/translations/settings?_token=4yRpxoh1XAV1D9_jY8oZNlDtKxW044AJkI8AwJ97YWE\" class=\"link\"> Traductions
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"168\" id=\"subtab-Marketing\">
                    <a href=\"http://localhost/pr";
        // line 961
        echo "estashop/admin2023/index.php?controller=AdminPsfacebookModule&amp;token=bd27b5eb07e48244df5bb2d4e0515d75\" class=\"link\">
                      <i class=\"material-icons mi-campaign\">campaign</i>
                      <span>
                      Marketing
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-168\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"169\" id=\"subtab-AdminPsfacebookModule\">
                                <a href=\"http://localhost/prestashop/admin2023/index.php?controller=AdminPsfacebookModule&amp;token=bd27b5eb07e48244df5bb2d4e0515d75\" class=\"link\"> Facebook &amp; Instagram
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"171\" id=\"subtab-AdminPsxMktgWithGoogleModule\">
                                <a href=\"http://localhost/prestashop/admin2023/index.php?controller=AdminPsxMktgWithGoogleModule&amp;token=b9bfa199e9eb8b98d66a4d0cc57eed11\" class=\"link\"> Google
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                             ";
        // line 992
        echo "             
                    
          
            <li class=\"category-title\" data-submenu=\"70\" id=\"tab-CONFIGURE\">
                <span class=\"title\">Configurer</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"71\" id=\"subtab-ShopParameters\">
                    <a href=\"/prestashop/admin2023/index.php/configure/shop/preferences/preferences?_token=4yRpxoh1XAV1D9_jY8oZNlDtKxW044AJkI8AwJ97YWE\" class=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      Paramètres de la boutique
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-71\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"72\" id=\"subtab-AdminParentPreferences\">
                                <a href=\"/prestashop/admin2023/index.php/configure/shop/preferences/preferences?_token=4yRpxoh1XAV1D9_jY8oZNlDtKxW044AJkI8AwJ97YWE\" class=\"link\"> Paramètres généraux
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"75\" id=\"subtab-AdminParentOrderPreferences\">
              ";
        // line 1026
        echo "                  <a href=\"/prestashop/admin2023/index.php/configure/shop/order-preferences/?_token=4yRpxoh1XAV1D9_jY8oZNlDtKxW044AJkI8AwJ97YWE\" class=\"link\"> Commandes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"78\" id=\"subtab-AdminPPreferences\">
                                <a href=\"/prestashop/admin2023/index.php/configure/shop/product-preferences/?_token=4yRpxoh1XAV1D9_jY8oZNlDtKxW044AJkI8AwJ97YWE\" class=\"link\"> Produits
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"79\" id=\"subtab-AdminParentCustomerPreferences\">
                                <a href=\"/prestashop/admin2023/index.php/configure/shop/customer-preferences/?_token=4yRpxoh1XAV1D9_jY8oZNlDtKxW044AJkI8AwJ97YWE\" class=\"link\"> Clients
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"83\" id=\"subtab-AdminParentStores\">
                                <a href=\"/prestashop/admin2023/index.php/configure/shop/contacts/?_token=4yRpxoh1XAV1D9_jY8oZNlDtKxW044AJkI8AwJ97YWE\" class=\"link\"> Contact
                                </a>
                              </li>

                                                                                  
                              
                            ";
        // line 1056
        echo "                                
                              <li class=\"link-leveltwo\" data-submenu=\"86\" id=\"subtab-AdminParentMeta\">
                                <a href=\"/prestashop/admin2023/index.php/configure/shop/seo-urls/?_token=4yRpxoh1XAV1D9_jY8oZNlDtKxW044AJkI8AwJ97YWE\" class=\"link\"> Trafic et SEO
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"89\" id=\"subtab-AdminParentSearchConf\">
                                <a href=\"http://localhost/prestashop/admin2023/index.php?controller=AdminSearchConf&amp;token=96478ca082d55bc74a9541b55917c8e3\" class=\"link\"> Rechercher
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"92\" id=\"subtab-AdminAdvancedParameters\">
                    <a href=\"/prestashop/admin2023/index.php/configure/advanced/system-information/?_token=4yRpxoh1XAV1D9_jY8oZNlDtKxW044AJkI8AwJ97YWE\" class=\"link\">
                      <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                      <span>
                      Paramètres avancés
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                         ";
        // line 1086
        echo "                     <ul id=\"collapse-92\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"93\" id=\"subtab-AdminInformation\">
                                <a href=\"/prestashop/admin2023/index.php/configure/advanced/system-information/?_token=4yRpxoh1XAV1D9_jY8oZNlDtKxW044AJkI8AwJ97YWE\" class=\"link\"> Informations
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"94\" id=\"subtab-AdminPerformance\">
                                <a href=\"/prestashop/admin2023/index.php/configure/advanced/performance/?_token=4yRpxoh1XAV1D9_jY8oZNlDtKxW044AJkI8AwJ97YWE\" class=\"link\"> Performances
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"95\" id=\"subtab-AdminAdminPreferences\">
                                <a href=\"/prestashop/admin2023/index.php/configure/advanced/administration/?_token=4yRpxoh1XAV1D9_jY8oZNlDtKxW044AJkI8AwJ97YWE\" class=\"link\"> Administration
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"96\" id=\"subtab-AdminEmails\">
                                <a href=\"/prestashop";
        // line 1115
        echo "/admin2023/index.php/configure/advanced/emails/?_token=4yRpxoh1XAV1D9_jY8oZNlDtKxW044AJkI8AwJ97YWE\" class=\"link\"> E-mail
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"97\" id=\"subtab-AdminImport\">
                                <a href=\"/prestashop/admin2023/index.php/configure/advanced/import/?_token=4yRpxoh1XAV1D9_jY8oZNlDtKxW044AJkI8AwJ97YWE\" class=\"link\"> Importer
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"98\" id=\"subtab-AdminParentEmployees\">
                                <a href=\"/prestashop/admin2023/index.php/configure/advanced/employees/?_token=4yRpxoh1XAV1D9_jY8oZNlDtKxW044AJkI8AwJ97YWE\" class=\"link\"> Équipe
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"102\" id=\"subtab-AdminParentRequestSql\">
                                <a href=\"/prestashop/admin2023/index.php/configure/advanced/sql-requests/?_token=4yRpxoh1XAV1D9_jY8oZNlDtKxW044AJkI8AwJ97YWE\" class=\"link\"> Base de données
                                </a>
                              </li>

                                                                                  
                              
                                                            
                         ";
        // line 1146
        echo "     <li class=\"link-leveltwo\" data-submenu=\"105\" id=\"subtab-AdminLogs\">
                                <a href=\"/prestashop/admin2023/index.php/configure/advanced/logs/?_token=4yRpxoh1XAV1D9_jY8oZNlDtKxW044AJkI8AwJ97YWE\" class=\"link\"> Logs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"106\" id=\"subtab-AdminWebservice\">
                                <a href=\"/prestashop/admin2023/index.php/configure/advanced/webservice-keys/?_token=4yRpxoh1XAV1D9_jY8oZNlDtKxW044AJkI8AwJ97YWE\" class=\"link\"> Webservice
                                </a>
                              </li>

                                                                                                                                                                                                                                                    
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"110\" id=\"subtab-AdminFeatureFlag\">
                                <a href=\"/prestashop/admin2023/index.php/configure/advanced/feature-flags/?_token=4yRpxoh1XAV1D9_jY8oZNlDtKxW044AJkI8AwJ97YWE\" class=\"link\"> Fonctionnalités nouvelles et expérimentales
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"111\" id=\"subtab-AdminParentSecurity\">
                                <a href=\"/prestashop/admin2023/index.php/configure/advanced/security/?_token=4yRpxoh1XAV1D9_jY8";
        // line 1171
        echo "oZNlDtKxW044AJkI8AwJ97YWE\" class=\"link\"> Sécurité
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"173\" id=\"subtab-AdminKlaviyoPsConfig\">
                    <a href=\"http://localhost/prestashop/admin2023/index.php?controller=AdminKlaviyoPsConfig&amp;token=e4c4b526e2898c6502453574a6aae4d4\" class=\"link\">
                      <i class=\"material-icons mi-trending_up\">trending_up</i>
                      <span>
                      Klaviyo
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                              
          
                  </ul>
  </div>
  
</nav>


<div class=\"header-toolbar d-print-none\">
    
  <div class=\"container-fluid\">

    
      <nav aria-label=\"Breadcrumb\">
        <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">Localisation</li>
          
                      <li class=\"breadcrumb-item active\">
              <a href=\"/prestashop/admin2023/index.php/improve/international/currencies/?_token=4yRpxoh1XAV1D9_jY8oZNlDtKxW044AJkI8AwJ97YWE\" aria-current=\"page\">Devises</a>
            </li>
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            Devises          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                        ";
        // line 1226
        echo "                                  <a
                  class=\"btn btn-primary pointer\"                  id=\"page-header-desc-configuration-add\"
                  href=\"/prestashop/admin2023/index.php/improve/international/currencies/new?_token=4yRpxoh1XAV1D9_jY8oZNlDtKxW044AJkI8AwJ97YWE\"                  title=\"Ajouter une nouvelle devise\"                                  >
                  <i class=\"material-icons\">add_circle_outline</i>                  Ajouter une nouvelle devise
                </a>
                                      
            
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Aide\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"/prestashop/admin2023/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Ffr%252Fdoc%252FAdminCurrencies%253Fversion%253D8.1.0%2526country%253Dfr/Aide?_token=4yRpxoh1XAV1D9_jY8oZNlDtKxW044AJkI8AwJ97YWE\"
                   id=\"product_form_open_help\"
                >
                  Aide
                </a>
                                    </div>
        </div>

      
    </div>
  </div>

  
      <div class=\"page-head-tabs\" id=\"head_tabs\">
      <ul class=\"nav nav-pills\">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         ";
        // line 1252
        echo "                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           <li class=\"nav-item\">
                    <a href=\"/prestashop/admin2023/index.php/improve/international/localization/?_token=4yRpxoh1XAV1D9_jY8oZNlDtKxW044AJkI8AwJ97YWE\" id=\"subtab-AdminLocalization\" class=\"nav-link tab \" data-submenu=\"58\">
                      Localisation
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                <li class=\"nav-item\">
                    <a href=\"/prestashop/admin2023/index.php/improve/international/languages/?_token=4yRpxoh1XAV1D9_jY8oZNlDtKxW044AJkI8AwJ97YWE\" id=\"subtab-AdminLanguages\" class=\"nav-link tab \" data-submenu=\"59\">
                      Langues
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                <li class=\"nav-item\">
                    <a href=\"/prestashop/admin2023/index.php/improve/international/currencies/?_token=4yRpxoh1XAV1D9_jY8oZNlDtKxW044AJkI8AwJ97YWE\" id=\"subtab-AdminCurrencies\" class=\"nav-link tab active current\" data-submenu=\"60\">
                      Devises
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                 ";
        // line 1273
        echo "     </span>
                    </a>
                  </li>
                                                                <li class=\"nav-item\">
                    <a href=\"/prestashop/admin2023/index.php/improve/international/geolocation/?_token=4yRpxoh1XAV1D9_jY8oZNlDtKxW044AJkI8AwJ97YWE\" id=\"subtab-AdminGeolocation\" class=\"nav-link tab \" data-submenu=\"61\">
                      Géolocalisation
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
              href=\"/prestashop/admin2023/index.php/improve/international/currencies/new?_token=4yRpxoh1XAV1D9_jY8oZNlDtKxW044AJkI8AwJ97YWE\"              title=\"Ajouter une nouvell";
        // line 1296
        echo "e devise\"            >
              Ajouter une nouvelle devise
              <i class=\"material-icons\">add_circle_outline</i>            </a>
                  
                              <a class=\"btn btn-floating-item btn-help btn-sidebar\" href=\"#\"
               title=\"Aide\"
               data-toggle=\"sidebar\"
               data-target=\"#right-sidebar\"
               data-url=\"/prestashop/admin2023/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Ffr%252Fdoc%252FAdminCurrencies%253Fversion%253D8.1.0%2526country%253Dfr/Aide?_token=4yRpxoh1XAV1D9_jY8oZNlDtKxW044AJkI8AwJ97YWE\"
            >
              Aide
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
        // line 1325
        $this->displayBlock('content_header', $context, $blocks);
        $this->displayBlock('content', $context, $blocks);
        $this->displayBlock('content_footer', $context, $blocks);
        $this->displayBlock('sidebar_right', $context, $blocks);
        echo "

        

      </div>
    </div>

  <div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>Oh non !</h1>
  <p class=\"mt-3\">
    La version mobile de cette page n'est pas encore disponible.
  </p>
  <p class=\"mt-2\">
    Cette page n'est pas encore disponible sur mobile, merci de la consulter sur ordinateur.
  </p>
  <p class=\"mt-2\">
    Merci.
  </p>
  <a href=\"http://localhost/prestashop/admin2023/index.php?controller=AdminPsEditionBasicHomepageController&amp;token=20c4f94fd7400ca9959420c208401a92\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons rtl-flip\">arrow_back</i>
    Précédent
  </a>
</div>
  <div class=\"mobile-layer\"></div>

      <div id=\"footer\" class=\"bootstrap\">
    
</div>
  

      <div class=\"bootstrap\">
      
    </div>
  
";
        // line 1359
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>";
        echo "
</html>";
    }

    // line 113
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_extra_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 1325
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

    // line 1359
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
        return "__string_template__ee925b57059c40a9294858401d3cbcf7";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1536 => 1359,  1515 => 1325,  1504 => 113,  1495 => 1359,  1455 => 1325,  1424 => 1296,  1399 => 1273,  1376 => 1252,  1348 => 1226,  1291 => 1171,  1264 => 1146,  1231 => 1115,  1200 => 1086,  1168 => 1056,  1136 => 1026,  1100 => 992,  1067 => 961,  1034 => 930,  1002 => 900,  969 => 869,  939 => 841,  906 => 810,  873 => 779,  842 => 750,  813 => 723,  775 => 687,  740 => 654,  709 => 625,  676 => 594,  644 => 564,  612 => 534,  579 => 503,  545 => 471,  499 => 427,  459 => 389,  407 => 339,  353 => 287,  306 => 242,  266 => 204,  248 => 188,  207 => 149,  166 => 113,  140 => 89,  119 => 70,  88 => 41,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__ee925b57059c40a9294858401d3cbcf7", "");
    }
}
