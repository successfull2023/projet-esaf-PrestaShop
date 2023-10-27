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

/* __string_template__d46ce9a9b8381ba7a2a6ca4e49a8e977 */
class __TwigTemplate_bf9dc81645f49657ed9f476c76e7e80f extends Template
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

<title>Produits • esaf</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminProducts';
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
    var token = '1854ba6fa7fa57e7fbad68ff733a89ae';
    var currentIndex = 'index.php?controller=AdminProducts';
    var employee_token = '1e1eae59ad462d0ead96eb2a1a0f9e14';
    var choose_language_translate = 'Choisissez la langue :';
    var default_language = '1';
    var admin_modules_link = '/prestashop/admin2023/index.php/improve/modules/manage?_token=ln5l3ASnYh0_0vodxL3UdlOOXzxYfToKivG5hnuorsk';
    var admin_notification_get_link = '/prestashop/admin2023/index.php/common/notifications?_token=ln5l3ASnYh0_0vodxL3UdlOOXzxYfToKivG5hnuorsk';
    var admin_notification_push_link = adminNotificationPushLink = '/prestashop/admin2023/index.php/common/notifications/ack?_token=ln5l3ASnYh0_0vodxL3UdlOOXzxYfToKivG5hnuorsk';
    var tab_modules_list = '';";
        // line 41
        echo "
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
      <link href=\"/prestashop/modules/ybc_themeconfig/css/admin.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/modules/ets_purchasetogether/views/css/admin-css.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/modules/ybc_widget/css/admin.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/modules/ybc_blog_free/views/css/admin.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/modules/ps_facebook/views/css/admin/menu.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/modules/psxmarketingwithgoogle/views/css/admin/menu.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/prestashop\\/admin2023\\/\";
var baseDir = \"\\/prestashop\\/\";
var changeFormLanguageUrl = \"\\/prestashop\\/admin2023\\/index.php\\/configure\\/advanced\\/employees\\/change-form-language?_token=ln5l3ASnYh0_0vodxL3UdlOOXzxYfToKivG5hnuorsk\";
var currency = {\"iso_code\":\"EUR\",\"sign\":\"\\u20ac\",\"name\":\"Euro\",\"fo";
        // line 71
        echo "rmat\":null};
var currency_specifications = {\"symbol\":[\",\",\"\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"currencyCode\":\"EUR\",\"currencySymbol\":\"\\u20ac\",\"numberSymbols\":[\",\",\"\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.00\\u00a0\\u00a4\",\"negativePattern\":\"-#,##0.00\\u00a0\\u00a4\",\"maxFractionDigits\":2,\"minFractionDigits\":2,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
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
<script type=\"text/javascript\" src=\"/prestashop/admin2023/themes/defa";
        // line 89
        echo "ult/js/vendor/nv.d3.min.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/modules/ets_purchasetogether/views/js/etsadmin.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/modules/ps_faviconnotificationbo/views/js/favico.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/modules/ps_faviconnotificationbo/views/js/ps_faviconnotificationbo.js\"></script>

  <script>
            var admin_gamification_ajax_url = \"http:\\/\\/localhost\\/prestashop\\/admin2023\\/index.php?controller=AdminGamification&token=8e51fd7359bb98baba85b9da98d5997c\";
            var current_id_tab = 10;
        </script><script>
  if (undefined !== ps_faviconnotificationbo) {
    ps_faviconnotificationbo.initialize({
      backgroundColor: '#DF0067',
      textColor: '#FFFFFF',
      notificationGetUrl: '/prestashop/admin2023/index.php/common/notifications?_token=ln5l3ASnYh0_0vodxL3UdlOOXzxYfToKivG5hnuorsk',
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
        // line 116
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>";
        echo "

<body
  class=\"lang-fr adminproducts\"
  data-base-url=\"/prestashop/admin2023/index.php\"  data-token=\"ln5l3ASnYh0_0vodxL3UdlOOXzxYfToKivG5hnuorsk\">

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
      >No";
        // line 152
        echo "uveau bon de réduction</a>
          <a class=\"dropdown-item quick-row-link new-product-button\"
         href=\"http://localhost/prestashop/admin2023/index.php/sell/catalog/products-v2/create?token=c908adc7aa34aca27a8f77b2a988b502\"
                 data-item=\"Nouveau produit\"
      >Nouveau produit</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost/prestashop/admin2023/index.php/sell/catalog/categories/new?token=c908adc7aa34aca27a8f77b2a988b502\"
                 data-item=\"Nouvelle catégorie\"
      >Nouvelle catégorie</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost/prestashop/admin2023/index.php/improve/design/cms-pages?token=c908adc7aa34aca27a8f77b2a988b502\"
                 data-item=\"Pages - Liste\"
      >Pages - Liste</a>
        <div class=\"dropdown-divider\"></div>
          <a id=\"quick-add-link\"
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"142\"
        data-icon=\"icon-AdminCatalog\"
        data-method=\"add\"
        data-url=\"index.php/sell/catalog/products-v2/11/edit\"
        data-post-link=\"http://localhost/prestashop/admin2023/index.php?controller=AdminQuickAccesses&token=ec6838ab70ea02754e2ce8ea29bef8f3\"
        data-prompt-text=\"Veuillez nommer ce raccourci :\"
        data-link=\"Produits - Liste\"
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
      class=\"bo_search_form dropdown-form j";
        // line 191
        echo "s-dropdown-form collapsed\"
      method=\"post\"
      action=\"/prestashop/admin2023/index.php?controller=AdminSearch&amp;token=cc12aeca56900f797d16077f3ae22407\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
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
        <a class=\"dropdown-item\" data-item=\"Factures\" href=\"#\" data-value=\"4\" data-placeholder=\"Numéro de facture\" data-icon=\"icon-book\"><i class";
        // line 209
        echo "=\"material-icons\">book</i> Factures</a>
        <a class=\"dropdown-item\" data-item=\"Paniers\" href=\"#\" data-value=\"5\" data-placeholder=\"ID panier\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Paniers</a>
        <a class=\"dropdown-item\" data-item=\"Modules\" href=\"#\" data-value=\"7\" data-placeholder=\"Nom du module\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Modules</a>
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
    >Nouveau bon de réduct";
        // line 245
        echo "ion</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/prestashop/admin2023/index.php/sell/catalog/products-v2/create?token=c908adc7aa34aca27a8f77b2a988b502\"
             data-item=\"Nouveau produit\"
    >Nouveau produit</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/prestashop/admin2023/index.php/sell/catalog/categories/new?token=c908adc7aa34aca27a8f77b2a988b502\"
             data-item=\"Nouvelle catégorie\"
    >Nouvelle catégorie</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/prestashop/admin2023/index.php/improve/design/cms-pages?token=c908adc7aa34aca27a8f77b2a988b502\"
             data-item=\"Pages - Liste\"
    >Pages - Liste</a>
    <div class=\"dropdown-divider\"></div>
      <a id=\"quick-add-link\"
      class=\"dropdown-item js-quick-link\"
      href=\"#\"
      data-rand=\"136\"
      data-icon=\"icon-AdminCatalog\"
      data-method=\"add\"
      data-url=\"index.php/sell/catalog/products-v2/11/edit\"
      data-post-link=\"http://localhost/prestashop/admin2023/index.php?controller=AdminQuickAccesses&token=ec6838ab70ea02754e2ce8ea29bef8f3\"
      data-prompt-text=\"Veuillez nommer ce raccourci :\"
      data-link=\"Produits - Liste\"
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
      <i class=\"material-icons\">visibilit";
        // line 289
        echo "y</i>
      <span>Voir ma boutique</span>
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
            <p class=\"no-notific";
        // line 344
        echo "ation\">
              Pas de nouvelle commande pour le moment :(<br>
              Avez-vous consulté vos <strong><a href=\"http://localhost/prestashop/admin2023/index.php?controller=AdminCarts&action=filterOnlyAbandonedCarts&token=41fa272a61a549884849c47106002bbe\">paniers abandonnés</a></strong> ?<br> Votre prochaine commande s'y trouve peut-être !
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
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
      - <strong>_customer_name_</stro";
        // line 388
        echo "ng> (_company_) - <i class=\"material-icons\">access_time</i> _date_add_
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
        <span class=\"employee-avatar\"><img class=\"avatar rounded-circle\" src=\"http://localhost/prestashop/img/pr/default.jpg\" alt=\"Stevie rose\" /></span>
        <span class=\"employee_profile\">Ravi de vous revoir Stevie rose</span>
      </div>

      <a class=\"dropdown-item employee-link profile-link\" href=\"/prestashop/admin2023/index.php/configure/advanced/employees/1/edit?_token=ln5l3ASnYh0_0vodxL3UdlOOXzxYfToKivG5hnuorsk\">
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
  <span class=\"menu-collapse\" data-toggle-url=\"/prestashop/admin2023/index.php/configure/advanced/employees/toggle-n";
        // line 430
        echo "avigation?_token=ln5l3ASnYh0_0vodxL3UdlOOXzxYfToKivG5hnuorsk\">
    <i class=\"material-icons rtl-flip\">chevron_left</i>
    <i class=\"material-icons rtl-flip\">chevron_left</i>
  </span>

  <div class=\"nav-bar-overflow\">
      <div class=\"logo-container\">
          <a id=\"header_logo\" class=\"logo float-left\" href=\"http://localhost/prestashop/admin2023/index.php?controller=AdminPsEditionBasicHomepageController&amp;token=20c4f94fd7400ca9959420c208401a92\"></a>
          <span id=\"shop_version\" class=\"header-version\">8.1.0</span>
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
                              
          
                      
                                          
                    
          
            <li class=\"category-title link-active\" data-submenu=\"2\" id=\"tab-SELL\">
                <span class=\"title\">Vendre</span>
            </li>

        ";
        // line 475
        echo "                      
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                    <a href=\"/prestashop/admin2023/index.php/sell/orders/?_token=ln5l3ASnYh0_0vodxL3UdlOOXzxYfToKivG5hnuorsk\" class=\"link\">
                      <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                      <span>
                      Commandes
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                                <a href=\"/prestashop/admin2023/index.php/sell/orders/?_token=ln5l3ASnYh0_0vodxL3UdlOOXzxYfToKivG5hnuorsk\" class=\"link\"> Commandes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                                <a href=\"/prestashop/admin2023/index.php/sell/orders/invoices/?_token=ln5l3ASnYh0_0vodxL3UdlOOXzxYfToKivG5hnuorsk\" class=\"link\"> Factures
                                </a>
                              </li>

                                                                    ";
        // line 506
        echo "              
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                                <a href=\"/prestashop/admin2023/index.php/sell/orders/credit-slips/?_token=ln5l3ASnYh0_0vodxL3UdlOOXzxYfToKivG5hnuorsk\" class=\"link\"> Avoirs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                                <a href=\"/prestashop/admin2023/index.php/sell/orders/delivery-slips/?_token=ln5l3ASnYh0_0vodxL3UdlOOXzxYfToKivG5hnuorsk\" class=\"link\"> Bons de livraison
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                                <a href=\"http://localhost/prestashop/admin2023/index.php?controller=AdminCarts&amp;token=41fa272a61a549884849c47106002bbe\" class=\"link\"> Paniers
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                                                          
                  <li class=\"link-levelone has_submenu link-active open ul-open\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                    <a href=\"/prestashop/admin2023/index";
        // line 537
        echo ".php/sell/catalog/products?_token=ln5l3ASnYh0_0vodxL3UdlOOXzxYfToKivG5hnuorsk\" class=\"link\">
                      <i class=\"material-icons mi-store\">store</i>
                      <span>
                      Catalogue
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_up
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo link-active\" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                                <a href=\"/prestashop/admin2023/index.php/sell/catalog/products?_token=ln5l3ASnYh0_0vodxL3UdlOOXzxYfToKivG5hnuorsk\" class=\"link\"> Produits
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                                <a href=\"/prestashop/admin2023/index.php/sell/catalog/categories?_token=ln5l3ASnYh0_0vodxL3UdlOOXzxYfToKivG5hnuorsk\" class=\"link\"> Catégories
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                                <a href=\"/prestash";
        // line 567
        echo "op/admin2023/index.php/sell/catalog/monitoring/?_token=ln5l3ASnYh0_0vodxL3UdlOOXzxYfToKivG5hnuorsk\" class=\"link\"> Suivi
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                                <a href=\"http://localhost/prestashop/admin2023/index.php?controller=AdminAttributesGroups&amp;token=da1548897f1a69a51de65d5e97bf45cc\" class=\"link\"> Attributs et caractéristiques
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                                <a href=\"/prestashop/admin2023/index.php/sell/catalog/brands/?_token=ln5l3ASnYh0_0vodxL3UdlOOXzxYfToKivG5hnuorsk\" class=\"link\"> Marques et fournisseurs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                                <a href=\"/prestashop/admin2023/index.php/sell/attachments/?_token=ln5l3ASnYh0_0vodxL3UdlOOXzxYfToKivG5hnuorsk\" class=\"link\"> Fichiers
                                </a>
                              </li>

                                                                                  
                              
                                                     ";
        // line 597
        echo "       
                              <li class=\"link-leveltwo\" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                                <a href=\"http://localhost/prestashop/admin2023/index.php?controller=AdminCartRules&amp;token=80cfc6506c9bf087ecd75e8ec0ba603a\" class=\"link\"> Réductions
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                                <a href=\"/prestashop/admin2023/index.php/sell/stocks/?_token=ln5l3ASnYh0_0vodxL3UdlOOXzxYfToKivG5hnuorsk\" class=\"link\"> Stock
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                    <a href=\"/prestashop/admin2023/index.php/sell/customers/?_token=ln5l3ASnYh0_0vodxL3UdlOOXzxYfToKivG5hnuorsk\" class=\"link\">
                      <i class=\"material-icons mi-account_circle\">account_circle</i>
                      <span>
                      Clients
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                     ";
        // line 628
        echo "                                 
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                                <a href=\"/prestashop/admin2023/index.php/sell/customers/?_token=ln5l3ASnYh0_0vodxL3UdlOOXzxYfToKivG5hnuorsk\" class=\"link\"> Clients
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                                <a href=\"/prestashop/admin2023/index.php/sell/addresses/?_token=ln5l3ASnYh0_0vodxL3UdlOOXzxYfToKivG5hnuorsk\" class=\"link\"> Adresses
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
                  ";
        // line 659
        echo "                          </a>
                                              <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                                <a href=\"http://localhost/prestashop/admin2023/index.php?controller=AdminCustomerThreads&amp;token=961e82a7343cb756857a315d99c19503\" class=\"link\"> SAV
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                                <a href=\"/prestashop/admin2023/index.php/sell/customer-service/order-messages/?_token=ln5l3ASnYh0_0vodxL3UdlOOXzxYfToKivG5hnuorsk\" class=\"link\"> Messages prédéfinis
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                                <a href=\"http://localhost/prestashop/admin2023/index.php?controller=AdminReturn&amp;token=4c22931789c662e4fb9ba426b9e59244\" class=\"link\"> Retours produits
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
";
        // line 691
        echo "                  <li class=\"link-levelone has_submenu\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                    <a href=\"http://localhost/prestashop/admin2023/index.php?controller=AdminMetricsLegacyStatsController&amp;token=6e071d71e1945b3f81d934d8eacb9f62\" class=\"link\">
                      <i class=\"material-icons mi-assessment\">assessment</i>
                      <span>
                      Statistiques
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
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

                                                ";
        // line 718
        echo "                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"37\" id=\"tab-IMPROVE\">
                <span class=\"title\">Personnaliser</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"38\" id=\"subtab-AdminParentModulesSf\">
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

                                              ";
        // line 753
        echo "                                    
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"39\" id=\"subtab-AdminModulesSf\">
                                <a href=\"/prestashop/admin2023/index.php/improve/modules/manage?_token=ln5l3ASnYh0_0vodxL3UdlOOXzxYfToKivG5hnuorsk\" class=\"link\"> Gestionnaire de modules 
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"43\" id=\"subtab-AdminParentThemes\">
                    <a href=\"/prestashop/admin2023/index.php/improve/design/themes/?_token=ln5l3ASnYh0_0vodxL3UdlOOXzxYfToKivG5hnuorsk\" class=\"link\">
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
                                <a href=\"/prestashop/admin2023/index.php/improve/design/themes/?_token=ln5l3ASn";
        // line 782
        echo "Yh0_0vodxL3UdlOOXzxYfToKivG5hnuorsk\" class=\"link\"> Thème et logo
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"139\" id=\"subtab-AdminPsMboTheme\">
                                <a href=\"http://localhost/prestashop/admin2023/index.php?controller=AdminPsMboTheme&amp;token=5a642b10950353bdd2b7819ba81b866f\" class=\"link\"> Themes Catalog
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"45\" id=\"subtab-AdminParentMailTheme\">
                                <a href=\"/prestashop/admin2023/index.php/improve/design/mail_theme/?_token=ln5l3ASnYh0_0vodxL3UdlOOXzxYfToKivG5hnuorsk\" class=\"link\"> Thème d&#039;e-mail
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"47\" id=\"subtab-AdminCmsContent\">
                                <a href=\"/prestashop/admin2023/index.php/improve/design/cms-pages/?_token=ln5l3ASnYh0_0vodxL3UdlOOXzxYfToKivG5hnuorsk\" class=\"link\"> Pages
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"48\" id";
        // line 813
        echo "=\"subtab-AdminModulesPositions\">
                                <a href=\"/prestashop/admin2023/index.php/improve/design/modules/positions/?_token=ln5l3ASnYh0_0vodxL3UdlOOXzxYfToKivG5hnuorsk\" class=\"link\"> Positions
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"49\" id=\"subtab-AdminImages\">
                                <a href=\"http://localhost/prestashop/admin2023/index.php?controller=AdminImages&amp;token=e5240e25552261de7a76ceb1222e3518\" class=\"link\"> Images
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"118\" id=\"subtab-AdminLinkWidget\">
                                <a href=\"/prestashop/admin2023/index.php/modules/link-widget/list?_token=ln5l3ASnYh0_0vodxL3UdlOOXzxYfToKivG5hnuorsk\" class=\"link\"> Liste de liens
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"50\" id=\"subtab-AdminParentShipping\">
                    <a href=\"http://localhost/prestashop/admin2023/index.php?controller=AdminCarriers&amp;token=014260711c9a378d43cdc9eeda6ff710\" class=\"link\">
                      <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                      <span>
  ";
        // line 844
        echo "                    Livraison
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-50\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"51\" id=\"subtab-AdminCarriers\">
                                <a href=\"http://localhost/prestashop/admin2023/index.php?controller=AdminCarriers&amp;token=014260711c9a378d43cdc9eeda6ff710\" class=\"link\"> Transporteurs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"52\" id=\"subtab-AdminShipping\">
                                <a href=\"/prestashop/admin2023/index.php/improve/shipping/preferences/?_token=ln5l3ASnYh0_0vodxL3UdlOOXzxYfToKivG5hnuorsk\" class=\"link\"> Préférences
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"161\" id=\"subtab-AdminMbeConfiguration\">
                                <a href=\"http://localhost/prestashop/admin2023/index.php?controller=AdminMbeConfiguration&amp;token=02d2abeb7462f2a2484efa019bb535bc\" class=\"link\"> MBE - Configuration
                   ";
        // line 872
        echo "             </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"163\" id=\"subtab-AdminMbeShipping\">
                                <a href=\"http://localhost/prestashop/admin2023/index.php?controller=AdminMbeShipping&amp;token=3754bf6194089a8027a461ca42a9c468\" class=\"link\"> MBE - Expéditions
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"53\" id=\"subtab-AdminParentPayment\">
                    <a href=\"/prestashop/admin2023/index.php/improve/payment/payment_methods?_token=ln5l3ASnYh0_0vodxL3UdlOOXzxYfToKivG5hnuorsk\" class=\"link\">
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
     ";
        // line 904
        echo "                           <a href=\"/prestashop/admin2023/index.php/improve/payment/payment_methods?_token=ln5l3ASnYh0_0vodxL3UdlOOXzxYfToKivG5hnuorsk\" class=\"link\"> Moyens de paiement
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"55\" id=\"subtab-AdminPaymentPreferences\">
                                <a href=\"/prestashop/admin2023/index.php/improve/payment/preferences?_token=ln5l3ASnYh0_0vodxL3UdlOOXzxYfToKivG5hnuorsk\" class=\"link\"> Préférences
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"56\" id=\"subtab-AdminInternational\">
                    <a href=\"/prestashop/admin2023/index.php/improve/international/localization/?_token=ln5l3ASnYh0_0vodxL3UdlOOXzxYfToKivG5hnuorsk\" class=\"link\">
                      <i class=\"material-icons mi-language\">language</i>
                      <span>
                      International
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-56\" class=\"submenu panel-collapse\">
                                                      
                              
            ";
        // line 935
        echo "                                                
                              <li class=\"link-leveltwo\" data-submenu=\"57\" id=\"subtab-AdminParentLocalization\">
                                <a href=\"/prestashop/admin2023/index.php/improve/international/localization/?_token=ln5l3ASnYh0_0vodxL3UdlOOXzxYfToKivG5hnuorsk\" class=\"link\"> Localisation
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"62\" id=\"subtab-AdminParentCountries\">
                                <a href=\"/prestashop/admin2023/index.php/improve/international/zones/?_token=ln5l3ASnYh0_0vodxL3UdlOOXzxYfToKivG5hnuorsk\" class=\"link\"> Zones géographiques
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"66\" id=\"subtab-AdminParentTaxes\">
                                <a href=\"/prestashop/admin2023/index.php/improve/international/taxes/?_token=ln5l3ASnYh0_0vodxL3UdlOOXzxYfToKivG5hnuorsk\" class=\"link\"> Taxes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"69\" id=\"subtab-AdminTranslations\">
                                <a href=\"/prestashop/admin2023/index.php/improve/international/translations/settings?_token=ln5l3ASnYh0_0vodxL3UdlOOXzxYfToKivG5hnuorsk\" class=\"link\"> Traductions
                              ";
        // line 962
        echo "  </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"168\" id=\"subtab-Marketing\">
                    <a href=\"http://localhost/prestashop/admin2023/index.php?controller=AdminPsfacebookModule&amp;token=bd27b5eb07e48244df5bb2d4e0515d75\" class=\"link\">
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
                                ";
        // line 994
        echo "<a href=\"http://localhost/prestashop/admin2023/index.php?controller=AdminPsxMktgWithGoogleModule&amp;token=b9bfa199e9eb8b98d66a4d0cc57eed11\" class=\"link\"> Google
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"70\" id=\"tab-CONFIGURE\">
                <span class=\"title\">Configurer</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"71\" id=\"subtab-ShopParameters\">
                    <a href=\"/prestashop/admin2023/index.php/configure/shop/preferences/preferences?_token=ln5l3ASnYh0_0vodxL3UdlOOXzxYfToKivG5hnuorsk\" class=\"link\">
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
                                <a href=\"/prestashop/admin2023/index.php/configure/shop/preferences/preferences?_token=";
        // line 1029
        echo "ln5l3ASnYh0_0vodxL3UdlOOXzxYfToKivG5hnuorsk\" class=\"link\"> Paramètres généraux
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"75\" id=\"subtab-AdminParentOrderPreferences\">
                                <a href=\"/prestashop/admin2023/index.php/configure/shop/order-preferences/?_token=ln5l3ASnYh0_0vodxL3UdlOOXzxYfToKivG5hnuorsk\" class=\"link\"> Commandes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"78\" id=\"subtab-AdminPPreferences\">
                                <a href=\"/prestashop/admin2023/index.php/configure/shop/product-preferences/?_token=ln5l3ASnYh0_0vodxL3UdlOOXzxYfToKivG5hnuorsk\" class=\"link\"> Produits
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"79\" id=\"subtab-AdminParentCustomerPreferences\">
                                <a href=\"/prestashop/admin2023/index.php/configure/shop/customer-preferences/?_token=ln5l3ASnYh0_0vodxL3UdlOOXzxYfToKivG5hnuorsk\" class=\"link\"> Clients
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li";
        // line 1060
        echo " class=\"link-leveltwo\" data-submenu=\"83\" id=\"subtab-AdminParentStores\">
                                <a href=\"/prestashop/admin2023/index.php/configure/shop/contacts/?_token=ln5l3ASnYh0_0vodxL3UdlOOXzxYfToKivG5hnuorsk\" class=\"link\"> Contact
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"86\" id=\"subtab-AdminParentMeta\">
                                <a href=\"/prestashop/admin2023/index.php/configure/shop/seo-urls/?_token=ln5l3ASnYh0_0vodxL3UdlOOXzxYfToKivG5hnuorsk\" class=\"link\"> Trafic et SEO
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"89\" id=\"subtab-AdminParentSearchConf\">
                                <a href=\"http://localhost/prestashop/admin2023/index.php?controller=AdminSearchConf&amp;token=96478ca082d55bc74a9541b55917c8e3\" class=\"link\"> Rechercher
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"92\" id=\"subtab-AdminAdvancedParameters\">
                    <a href=\"/prestashop/admin2023/index.php/configure/advanced/system-information/?_token=ln5l3ASnYh0_0vodxL3UdlOOXzxYfToKivG5hnuorsk\" class=\"link\">
                      <i class=\"material-icons mi-settings_app";
        // line 1089
        echo "lications\">settings_applications</i>
                      <span>
                      Paramètres avancés
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-92\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"93\" id=\"subtab-AdminInformation\">
                                <a href=\"/prestashop/admin2023/index.php/configure/advanced/system-information/?_token=ln5l3ASnYh0_0vodxL3UdlOOXzxYfToKivG5hnuorsk\" class=\"link\"> Informations
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"94\" id=\"subtab-AdminPerformance\">
                                <a href=\"/prestashop/admin2023/index.php/configure/advanced/performance/?_token=ln5l3ASnYh0_0vodxL3UdlOOXzxYfToKivG5hnuorsk\" class=\"link\"> Performances
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"95\" id=\"subtab-AdminAdminPreferences\">
                                <a href=\"/prestashop/admin2023/index.php/configure/advanced/administration/?_token=ln5l3ASnYh0_0v";
        // line 1118
        echo "odxL3UdlOOXzxYfToKivG5hnuorsk\" class=\"link\"> Administration
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"96\" id=\"subtab-AdminEmails\">
                                <a href=\"/prestashop/admin2023/index.php/configure/advanced/emails/?_token=ln5l3ASnYh0_0vodxL3UdlOOXzxYfToKivG5hnuorsk\" class=\"link\"> E-mail
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"97\" id=\"subtab-AdminImport\">
                                <a href=\"/prestashop/admin2023/index.php/configure/advanced/import/?_token=ln5l3ASnYh0_0vodxL3UdlOOXzxYfToKivG5hnuorsk\" class=\"link\"> Importer
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"98\" id=\"subtab-AdminParentEmployees\">
                                <a href=\"/prestashop/admin2023/index.php/configure/advanced/employees/?_token=ln5l3ASnYh0_0vodxL3UdlOOXzxYfToKivG5hnuorsk\" class=\"link\"> Équipe
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"102\" id=\"subtab-AdminParentRequestSql\">
   ";
        // line 1150
        echo "                             <a href=\"/prestashop/admin2023/index.php/configure/advanced/sql-requests/?_token=ln5l3ASnYh0_0vodxL3UdlOOXzxYfToKivG5hnuorsk\" class=\"link\"> Base de données
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"105\" id=\"subtab-AdminLogs\">
                                <a href=\"/prestashop/admin2023/index.php/configure/advanced/logs/?_token=ln5l3ASnYh0_0vodxL3UdlOOXzxYfToKivG5hnuorsk\" class=\"link\"> Logs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"106\" id=\"subtab-AdminWebservice\">
                                <a href=\"/prestashop/admin2023/index.php/configure/advanced/webservice-keys/?_token=ln5l3ASnYh0_0vodxL3UdlOOXzxYfToKivG5hnuorsk\" class=\"link\"> Webservice
                                </a>
                              </li>

                                                                                                                                                                                                                                                    
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"110\" id=\"subtab-AdminFeatureFlag\">
                                <a href=\"/prestashop/admin2023/index.php/configure/advanced/feature-flags/?_token=ln5l3ASnYh0_0vodxL3UdlOOXzxYfToKivG5hnuorsk\" class=\"link\"> Fonctionnalités nouvelles et expérimentales
                        ";
        // line 1175
        echo "        </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"111\" id=\"subtab-AdminParentSecurity\">
                                <a href=\"/prestashop/admin2023/index.php/configure/advanced/security/?_token=ln5l3ASnYh0_0vodxL3UdlOOXzxYfToKivG5hnuorsk\" class=\"link\"> Sécurité
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
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"146\" id=\"tab-AdminYbcBlogFree\">
                <span class=\"title\">Blog</span>
            </li>

                              
                  
                            ";
        // line 1215
        echo "                          
                  
                  <li class=\"link-levelone\" data-submenu=\"147\" id=\"subtab-AdminYbcBlogFreePost\">
                    <a href=\"http://localhost/prestashop/admin2023/index.php?controller=AdminYbcBlogFreePost&amp;token=d85097f5dc4f5b03876279b7e50688ad\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Blog posts
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"148\" id=\"subtab-AdminYbcBlogFreeCategory\">
                    <a href=\"http://localhost/prestashop/admin2023/index.php?controller=AdminYbcBlogFreeCategory&amp;token=1be0a71e1e0d90c4edf60ec0a4004f5d\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Blog categories
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"149\" id=\"subtab-AdminYbcBlogFreeComment\">
               ";
        // line 1248
        echo "     <a href=\"http://localhost/prestashop/admin2023/index.php?controller=AdminYbcBlogFreeComment&amp;token=68ad181b199f62d338b64d3e92e09a8c\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Blog comments
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"150\" id=\"subtab-AdminYbcBlogFreeSlider\">
                    <a href=\"http://localhost/prestashop/admin2023/index.php?controller=AdminYbcBlogFreeSlider&amp;token=3b33e020f7d90a01da058b2f67f50920\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Blog Slider
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"151\" id=\"subtab-AdminYbcBlogFreeGallery\">
                    <a href=\"http://localhost/prestashop/admin2023/index.php?controller=AdminYbcBlogFreeGallery&amp;token=7b4810d2bfa56bc2944950c993ab47d7\" class=\"link\">
     ";
        // line 1279
        echo "                 <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Blog gallery
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"152\" id=\"subtab-AdminYbcBlogFreeSetting\">
                    <a href=\"http://localhost/prestashop/admin2023/index.php?controller=AdminYbcBlogFreeSetting&amp;token=49f4fc75586f38182cab6ac2d733e3e1\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Settings
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                              
          
                  </ul>
  </div>
  
</nav>


<div id=\"main-div\">
          
      <div class=\"content-div -notoolbar \">

        

                                                        
        <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>
<div id=\"content-message-box\"></div>


  ";
        // line 1322
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
        // line 1356
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>";
        echo "
</html>";
    }

    // line 116
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_extra_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 1322
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

    // line 1356
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
        return "__string_template__d46ce9a9b8381ba7a2a6ca4e49a8e977";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1531 => 1356,  1510 => 1322,  1499 => 116,  1490 => 1356,  1450 => 1322,  1405 => 1279,  1372 => 1248,  1337 => 1215,  1295 => 1175,  1268 => 1150,  1234 => 1118,  1203 => 1089,  1172 => 1060,  1139 => 1029,  1102 => 994,  1068 => 962,  1039 => 935,  1006 => 904,  972 => 872,  942 => 844,  909 => 813,  876 => 782,  845 => 753,  808 => 718,  779 => 691,  745 => 659,  712 => 628,  679 => 597,  647 => 567,  615 => 537,  582 => 506,  549 => 475,  502 => 430,  458 => 388,  412 => 344,  355 => 289,  309 => 245,  271 => 209,  251 => 191,  210 => 152,  169 => 116,  140 => 89,  120 => 71,  88 => 41,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__d46ce9a9b8381ba7a2a6ca4e49a8e977", "");
    }
}
