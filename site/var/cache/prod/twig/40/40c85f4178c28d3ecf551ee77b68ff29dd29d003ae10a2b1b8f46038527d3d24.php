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

/* __string_template__4ccb351b8bb6101c58fd58d4a025ef15934b6eeae76e7aff7ae3a78f0040858a */
class __TwigTemplate_065d639ee260dbe7a8586fee985a2ece07763cf70cbe97e5f3ca0821e612f109 extends Template
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

<link rel=\"icon\" type=\"image/x-icon\" href=\"/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/img/app_icon.png\" />

<title>Contacts • gt2i</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminContacts';
    var iso_user = 'fr';
    var lang_is_rtl = '0';
    var full_language_code = 'fr';
    var full_cldr_language_code = 'fr-FR';
    var country_iso_code = 'FR';
    var _PS_VERSION_ = '8.1.1';
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
    var token = '51c27a22c380f337e065feef18d815e4';
    var currentIndex = 'index.php?controller=AdminContacts';
    var employee_token = '3751497297440bcdd58a789689d6891d';
    var choose_language_translate = 'Choisissez la langue :';
    var default_language = '1';
    var admin_modules_link = '/admin637bvwfg2eqpkr6hcdi/index.php/improve/modules/manage?_token=SFoszkj52J1Zf3SFO0ukurbPFicIJb2O219p-nUirNg';
    var admin_notification_get_link = '/admin637bvwfg2eqpkr6hcdi/index.php/common/notifications?_token=SFoszkj52J1Zf3SFO0ukurbPFicIJb2O219p-nUirNg';
    var admin_notification_push_link = adminNotificationPushLink = '/admin637bvwfg2eqpkr6hcdi/index.php/common/notifications/ack?_token=SFoszkj52J1Zf3SFO0ukurbPFicIJb2O219p-nUirNg';
    var tab_modules_list = '';
    var upda";
        // line 42
        echo "te_success_msg = 'Mise à jour réussie';
    var search_product_msg = 'Rechercher un produit';
  </script>



<link
      rel=\"preload\"
      href=\"/admin637bvwfg2eqpkr6hcdi/themes/new-theme/public/2d8017489da689caedc1.preload..woff2\"
      as=\"font\"
      crossorigin
    >
      <link href=\"/admin637bvwfg2eqpkr6hcdi/themes/new-theme/public/create_product_default_theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/admin637bvwfg2eqpkr6hcdi/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/blockwishlist/public/backoffice.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/admin637bvwfg2eqpkr6hcdi/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/admin637bvwfg2eqpkr6hcdi\\/\";
var baseDir = \"\\/\";
var changeFormLanguageUrl = \"\\/admin637bvwfg2eqpkr6hcdi\\/index.php\\/configure\\/advanced\\/employees\\/change-form-language?_token=SFoszkj52J1Zf3SFO0ukurbPFicIJb2O219p-nUirNg\";
var currency = {\"iso_code\":\"EUR\",\"sign\":\"\\u20ac\",\"name\":\"Euro\",\"format\":null};
var currency_specifications = {\"symbol\":[\",\",\"\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"currencyCode\":\"EUR\",\"currencySymbol\":\"\\u20ac\",\"numberSymbols\":[\",\",\"\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.00\\u00a0\\u00a4\",\"negativePattern\":\"-#,##0.00\\u00a0\\u00a4\",\"maxFractionDigits\":2,\"minFractionDigits\":2,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var number_specifications = {\"symbol\":[\",\",\"\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"numberSymbols\":[\",\",\"\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDi";
        // line 67
        echo "gits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var prestashop = {\"debug\":false};
var show_new_customers = \"1\";
var show_new_messages = \"1\";
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/admin637bvwfg2eqpkr6hcdi/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/js/admin.js?v=8.1.1\"></script>
<script type=\"text/javascript\" src=\"/admin637bvwfg2eqpkr6hcdi/themes/new-theme/public/cldr.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/tools.js?v=8.1.1\"></script>
<script type=\"text/javascript\" src=\"/admin637bvwfg2eqpkr6hcdi/themes/new-theme/public/create_product.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/modules/blockwishlist/public/vendors.js\"></script>
<script type=\"text/javascript\" src=\"/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/admin637bvwfg2eqpkr6hcdi/themes/default/js/vendor/nv.d3.min.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_emailalerts/js/admin/ps_emailalerts.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_faviconnotificationbo/views/js/favico.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_faviconnotificationbo/views/js/ps_faviconnotificationbo.js\"></script>

  <script>
  if (undefined !== ps_faviconnotificationbo) {
    ps_faviconnotificationbo.initialize({
      backgroundColor: '#DF0067',
      textColor: '#FFFFFF',
      notificationGetUrl: '/admin637bvwfg2eqpkr6hcdi/index.php/common/notifications?_token=SFoszkj52J1Zf3SFO0ukurbPFicIJb2O219p-nUirNg',
      CHECKBOX_ORDER: 1,
      CHECKBOX_CUSTOMER: 1,
      CHECKBOX_MESSAGE: 1,
      timer: 120000, // Refresh every 2 minutes
    });
  }
</script>


";
        // line 102
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>";
        echo "

<body
  class=\"lang-fr admincontacts\"
  data-base-url=\"/admin637bvwfg2eqpkr6hcdi/index.php\"  data-token=\"SFoszkj52J1Zf3SFO0ukurbPFicIJb2O219p-nUirNg\">

  <header id=\"header\" class=\"d-print-none\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"http://localhost:5002/admin637bvwfg2eqpkr6hcdi/index.php?controller=AdminDashboard&amp;token=9dd4f471066233cb3b504e5143838bfc\"></a>
      <span id=\"shop_version\">8.1.1</span>

      <div class=\"component\" id=\"quick-access-container\">
        <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Accès rapide
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost:5002/admin637bvwfg2eqpkr6hcdi/index.php/sell/orders?token=19b6bd961959ee8c8cde26b66b43ba27\"
                 data-item=\"Commandes\"
      >Commandes</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost:5002/admin637bvwfg2eqpkr6hcdi/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=8650e41b8d9a432c9739581229a6b96a\"
                 data-item=\"Évaluation du catalogue\"
      >Évaluation du catalogue</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost:5002/admin637bvwfg2eqpkr6hcdi/index.php/improve/modules/manage?token=19b6bd961959ee8c8cde26b66b43ba27\"
                 data-item=\"Modules installés\"
      >Modules installés</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost:5002/admin637bvwfg2eqpkr6hcdi/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=00822c89cde36b91ccf72f8672faa887\"
                 data-item=\"Nouveau bo";
        // line 137
        echo "n de réduction\"
      >Nouveau bon de réduction</a>
          <a class=\"dropdown-item quick-row-link new-product-button\"
         href=\"http://localhost:5002/admin637bvwfg2eqpkr6hcdi/index.php/sell/catalog/products-v2/create?token=19b6bd961959ee8c8cde26b66b43ba27\"
                 data-item=\"Nouveau produit\"
      >Nouveau produit</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost:5002/admin637bvwfg2eqpkr6hcdi/index.php/sell/catalog/categories/new?token=19b6bd961959ee8c8cde26b66b43ba27\"
                 data-item=\"Nouvelle catégorie\"
      >Nouvelle catégorie</a>
        <div class=\"dropdown-divider\"></div>
          <a id=\"quick-add-link\"
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"167\"
        data-icon=\"icon-AdminParentStores\"
        data-method=\"add\"
        data-url=\"index.php/configure/shop/contacts/?-nUirNg\"
        data-post-link=\"http://localhost:5002/admin637bvwfg2eqpkr6hcdi/index.php?controller=AdminQuickAccesses&token=ea2e16eeb7aee1525e394266af7297ea\"
        data-prompt-text=\"Veuillez nommer ce raccourci :\"
        data-link=\"Contacts - Liste\"
      >
        <i class=\"material-icons\">add_circle</i>
        Ajouter la page actuelle à l'accès rapide
      </a>
        <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://localhost:5002/admin637bvwfg2eqpkr6hcdi/index.php?controller=AdminQuickAccesses&token=ea2e16eeb7aee1525e394266af7297ea\">
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
      action=\"/admin637bvwfg2eqpkr6hcdi/index.php?controller=AdminSearch&amp;token=ff7a99f3c1e18c9ece5f7560bf931f0d\"
      role=\"sear";
        // line 176
        echo "ch\">
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
        <a class=\"dropdown-item\" data-item=\"Factures\" href=\"#\" data-value=\"4\" data-placeholder=\"Numéro de facture\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i> Factures</a>
        <a class=\"dropdown-item\" data-item=\"Paniers\" href=\"#\" data-value=\"5\" data-placeholder=\"ID panier\" data-icon=\"icon-shopping-cart\"";
        // line 192
        echo "><i class=\"material-icons\">shopping_cart</i> Paniers</a>
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
       href=\"http://localhost:5002/admin637bvwfg2eqpkr6hcdi/index.php/sell/orders?token=19b6bd961959ee8c8cde26b66b43ba27\"
             data-item=\"Commandes\"
    >Commandes</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost:5002/admin637bvwfg2eqpkr6hcdi/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=8650e41b8d9a432c9739581229a6b96a\"
             data-item=\"Évaluation du catalogue\"
    >Évaluation du catalogue</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost:5002/admin637bvwfg2eqpkr6hcdi/index.php/improve/modules/manage?token=19b6bd961959ee8c8cde26b66b43ba27\"
             data-item=\"Modules installés\"
    >Modules installés</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost:5002/admin637bvwfg2eqpkr6hcdi/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=00822c89cde36b91ccf72f8672faa887\"
             data-item=\"Nouveau bon de réduction\"
    >Nouveau bon de réduction</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost:5002/admin637bvwfg2eqpkr6hcdi/index.php/sell/catalog/pro";
        // line 229
        echo "ducts-v2/create?token=19b6bd961959ee8c8cde26b66b43ba27\"
             data-item=\"Nouveau produit\"
    >Nouveau produit</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost:5002/admin637bvwfg2eqpkr6hcdi/index.php/sell/catalog/categories/new?token=19b6bd961959ee8c8cde26b66b43ba27\"
             data-item=\"Nouvelle catégorie\"
    >Nouvelle catégorie</a>
    <div class=\"dropdown-divider\"></div>
      <a id=\"quick-add-link\"
      class=\"dropdown-item js-quick-link\"
      href=\"#\"
      data-rand=\"184\"
      data-icon=\"icon-AdminParentStores\"
      data-method=\"add\"
      data-url=\"index.php/configure/shop/contacts/?-nUirNg\"
      data-post-link=\"http://localhost:5002/admin637bvwfg2eqpkr6hcdi/index.php?controller=AdminQuickAccesses&token=ea2e16eeb7aee1525e394266af7297ea\"
      data-prompt-text=\"Veuillez nommer ce raccourci :\"
      data-link=\"Contacts - Liste\"
    >
      <i class=\"material-icons\">add_circle</i>
      Ajouter la page actuelle à l'accès rapide
    </a>
    <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://localhost:5002/admin637bvwfg2eqpkr6hcdi/index.php?controller=AdminQuickAccesses&token=ea2e16eeb7aee1525e394266af7297ea\">
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
    <a class=\"link\" id=\"header_shopname\" href=\"http://localhost:5002/\" target= \"_blank\">
      <i class=\"material-icons\">visibility</i>
      <span>Voir ma boutique</span>
    </a>
  </div>
          </div>
                          <div class=\"component header-right-component\" id=\"header-notifications-container\">
            <div id=\"notif\" class=\"notification-center dropdown dropdown-clickable\">
  <button class=\"btn notification js-notification dropdown-toggle\" d";
        // line 274
        echo "ata-toggle=\"dropdown\">
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
            <p class=\"no-notification\">
              Pas de nouvelle commande pour le moment :(<br>
              Avez-vous consulté vos <strong><a href=\"http://localhost:5002/admin637bvwfg2eqpkr6hcdi/index.php?controller=AdminCarts&action=filterOnlyAbandonedCarts&token=7c04febac88dece21554047c023afb46\">paniers abandonnés</a></strong> ?<br> Votre prochaine commande ";
        // line 324
        echo "s'y trouve peut-être !
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
      - <strong>_customer_name_</strong> (_company_) - <i class=\"material-icons\">access_time</i> _date_add_
    </a>
  </script>
          </div>
        
        <div class=\"component\" id=\"header-employee-container\">
          <div class=\"dropdown employee-dropdown\">
  <div class=\"rounded-circle person\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">account";
        // line 374
        echo "_circle</i>
  </div>
  <div class=\"dropdown-menu dropdown-menu-right\">
    <div class=\"employee-wrapper-avatar\">
      <div class=\"employee-top\">
        <span class=\"employee-avatar\"><img class=\"avatar rounded-circle\" src=\"http://localhost:5002/img/pr/default.jpg\" alt=\"Raphaël\" /></span>
        <span class=\"employee_profile\">Ravi de vous revoir Raphaël</span>
      </div>

      <a class=\"dropdown-item employee-link profile-link\" href=\"/admin637bvwfg2eqpkr6hcdi/index.php/configure/advanced/employees/1/edit?_token=SFoszkj52J1Zf3SFO0ukurbPFicIJb2O219p-nUirNg\">
      <i class=\"material-icons\">edit</i>
      <span>Votre profil</span>
    </a>
    </div>

    <p class=\"divider\"></p>

    
    <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"http://localhost:5002/admin637bvwfg2eqpkr6hcdi/index.php?controller=AdminLogin&amp;logout=1&amp;token=803b78aca492586246db7b28eef6f1ce\">
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
  <span class=\"menu-collapse\" data-toggle-url=\"/admin637bvwfg2eqpkr6hcdi/index.php/configure/advanced/employees/toggle-navigation?_token=SFoszkj52J1Zf3SFO0ukurbPFicIJb2O219p-nUirNg\">
    <i class=\"material-icons rtl-flip\">chevron_left</i>
    <i class=\"material-icons rtl-flip\">chevron_left</i>
  </span>

  <div class=\"nav-bar-overflow\">
      <div class=\"logo-container\">
          <a id=\"header_logo\" class=\"logo float-left\" href=\"http://localhost:5002/admin637bvwfg2eqpkr6hcdi/index.php?controller=AdminDashboard&amp;token=9dd4f471066233cb3b504e5143838bfc\"></a>
          <span id=\"shop_version\" class=\"header-version\">8.1.1</span>
      </div>

      <ul class=\"main-menu\">
              
                    
                    
          
            <li class=\"link-levelone\" data-submenu=\"1\" id=\"tab-AdminDashboard\">
              <a href=";
        // line 421
        echo "\"http://localhost:5002/admin637bvwfg2eqpkr6hcdi/index.php?controller=AdminDashboard&amp;token=9dd4f471066233cb3b504e5143838bfc\" class=\"link\" >
                <i class=\"material-icons\">trending_up</i> <span>Tableau de bord</span>
              </a>
            </li>

          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"2\" id=\"tab-SELL\">
                <span class=\"title\">Vendre</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                    <a href=\"/admin637bvwfg2eqpkr6hcdi/index.php/sell/orders/?_token=SFoszkj52J1Zf3SFO0ukurbPFicIJb2O219p-nUirNg\" class=\"link\">
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
                                <a href=\"/admin637bvwfg2eqpkr6hcdi/index.php/sell/orders/?_token=SFoszkj52J1Zf3SFO0ukurbPFicIJb2O219p-nUirNg\" class=\"link\"> Commandes
                                </a>
                              </li>

                                                      ";
        // line 458
        echo "                            
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                                <a href=\"/admin637bvwfg2eqpkr6hcdi/index.php/sell/orders/invoices/?_token=SFoszkj52J1Zf3SFO0ukurbPFicIJb2O219p-nUirNg\" class=\"link\"> Factures
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                                <a href=\"/admin637bvwfg2eqpkr6hcdi/index.php/sell/orders/credit-slips/?_token=SFoszkj52J1Zf3SFO0ukurbPFicIJb2O219p-nUirNg\" class=\"link\"> Avoirs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                                <a href=\"/admin637bvwfg2eqpkr6hcdi/index.php/sell/orders/delivery-slips/?_token=SFoszkj52J1Zf3SFO0ukurbPFicIJb2O219p-nUirNg\" class=\"link\"> Bons de livraison
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                                <a href=\"http://localhost:5002/admin637bvwfg2eqpkr6hcdi/index.php?controller=AdminCarts&amp;token=7c04febac88dece21554047c023afb46\" class=\"link\"> Paniers
          ";
        // line 487
        echo "                      </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                    <a href=\"/admin637bvwfg2eqpkr6hcdi/index.php/sell/catalog/products?_token=SFoszkj52J1Zf3SFO0ukurbPFicIJb2O219p-nUirNg\" class=\"link\">
                      <i class=\"material-icons mi-store\">store</i>
                      <span>
                      Catalogue
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                                <a href=\"/admin637bvwfg2eqpkr6hcdi/index.php/sell/catalog/products?_token=SFoszkj52J1Zf3SFO0ukurbPFicIJb2O219p-nUirNg\" class=\"link\"> Produits
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                                <a href=\"/admin637bvwfg2eqpkr6hcdi/index.php/sell/catalo";
        // line 519
        echo "g/categories?_token=SFoszkj52J1Zf3SFO0ukurbPFicIJb2O219p-nUirNg\" class=\"link\"> Catégories
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                                <a href=\"/admin637bvwfg2eqpkr6hcdi/index.php/sell/catalog/monitoring/?_token=SFoszkj52J1Zf3SFO0ukurbPFicIJb2O219p-nUirNg\" class=\"link\"> Suivi
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                                <a href=\"http://localhost:5002/admin637bvwfg2eqpkr6hcdi/index.php?controller=AdminAttributesGroups&amp;token=43c6064f7ec8d67daf2637e5ebb89f27\" class=\"link\"> Attributs et caractéristiques
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                                <a href=\"/admin637bvwfg2eqpkr6hcdi/index.php/sell/catalog/brands/?_token=SFoszkj52J1Zf3SFO0ukurbPFicIJb2O219p-nUirNg\" class=\"link\"> Marques et fournisseurs
                                </a>
                              </li>

                                                                                  
                              
                                                            
   ";
        // line 550
        echo "                           <li class=\"link-leveltwo\" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                                <a href=\"/admin637bvwfg2eqpkr6hcdi/index.php/sell/attachments/?_token=SFoszkj52J1Zf3SFO0ukurbPFicIJb2O219p-nUirNg\" class=\"link\"> Fichiers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                                <a href=\"http://localhost:5002/admin637bvwfg2eqpkr6hcdi/index.php?controller=AdminCartRules&amp;token=00822c89cde36b91ccf72f8672faa887\" class=\"link\"> Réductions
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                                <a href=\"/admin637bvwfg2eqpkr6hcdi/index.php/sell/stocks/?_token=SFoszkj52J1Zf3SFO0ukurbPFicIJb2O219p-nUirNg\" class=\"link\"> Stock
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                    <a href=\"/admin637bvwfg2eqpkr6hcdi/index.php/sell/customers/?_token=SFoszkj52J1Zf3SFO0ukurbPFicIJb2O219p-nUirNg\" class=\"link\">
                      <i class=\"material-icons mi-account_cir";
        // line 579
        echo "cle\">account_circle</i>
                      <span>
                      Clients
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                                <a href=\"/admin637bvwfg2eqpkr6hcdi/index.php/sell/customers/?_token=SFoszkj52J1Zf3SFO0ukurbPFicIJb2O219p-nUirNg\" class=\"link\"> Clients
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                                <a href=\"/admin637bvwfg2eqpkr6hcdi/index.php/sell/addresses/?_token=SFoszkj52J1Zf3SFO0ukurbPFicIJb2O219p-nUirNg\" class=\"link\"> Adresses
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                    <a href=\"http://localhost";
        // line 611
        echo ":5002/admin637bvwfg2eqpkr6hcdi/index.php?controller=AdminCustomerThreads&amp;token=703bf242e3937a2933531a80ae8e8783\" class=\"link\">
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
                                <a href=\"http://localhost:5002/admin637bvwfg2eqpkr6hcdi/index.php?controller=AdminCustomerThreads&amp;token=703bf242e3937a2933531a80ae8e8783\" class=\"link\"> SAV
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                                <a href=\"/admin637bvwfg2eqpkr6hcdi/index.php/sell/customer-service/order-messages/?_token=SFoszkj52J1Zf3SFO0ukurbPFicIJb2O219p-nUirNg\" class=\"link\"> Messages prédéfinis
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"3";
        // line 640
        echo "1\" id=\"subtab-AdminReturn\">
                                <a href=\"http://localhost:5002/admin637bvwfg2eqpkr6hcdi/index.php?controller=AdminReturn&amp;token=f0ece1d343e0f7633b15466180d286bb\" class=\"link\"> Retours produits
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                    <a href=\"http://localhost:5002/admin637bvwfg2eqpkr6hcdi/index.php?controller=AdminStats&amp;token=8650e41b8d9a432c9739581229a6b96a\" class=\"link\">
                      <i class=\"material-icons mi-assessment\">assessment</i>
                      <span>
                      Statistiques
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"37\" id=\"tab-IMPROVE\">
                <span class=\"title\">Personnaliser</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"38\" id=\"subtab-AdminParentModulesSf\">
                    <a href=\"/admin637bvwfg2eqpkr6hcdi/index.php/improve/modules/manage?_token=SFoszkj52J1Zf3SFO0ukurbPFicIJb2O219p-nUirNg\" clas";
        // line 677
        echo "s=\"link\">
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
                                <a href=\"/admin637bvwfg2eqpkr6hcdi/index.php/improve/modules/manage?_token=SFoszkj52J1Zf3SFO0ukurbPFicIJb2O219p-nUirNg\" class=\"link\"> Gestionnaire de modules 
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"43\" id=\"subtab-AdminParentThemes\">
                    <a href=\"/admin637bvwfg2eqpkr6hcdi/index.php/improve/design/themes/?_token=SFoszkj52J1Zf3SFO0ukurbPFicIJb2O219p-nUirNg\" class=\"link\">
                      <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                      <span>
                      Apparence
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    ke";
        // line 708
        echo "yboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"127\" id=\"subtab-AdminThemesParent\">
                                <a href=\"/admin637bvwfg2eqpkr6hcdi/index.php/improve/design/themes/?_token=SFoszkj52J1Zf3SFO0ukurbPFicIJb2O219p-nUirNg\" class=\"link\"> Thème et logo
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"45\" id=\"subtab-AdminParentMailTheme\">
                                <a href=\"/admin637bvwfg2eqpkr6hcdi/index.php/improve/design/mail_theme/?_token=SFoszkj52J1Zf3SFO0ukurbPFicIJb2O219p-nUirNg\" class=\"link\"> Thème d&#039;e-mail
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"47\" id=\"subtab-AdminCmsContent\">
                                <a href=\"/admin637bvwfg2eqpkr6hcdi/index.php/improve/design/cms-pages/?_token=SFoszkj52J1Zf3SFO0ukurbPFicIJb2O219p-nUirNg\" class=\"link\"> Pages
                                </a>
                              </li>

                                                                                  
                              
                                                            
           ";
        // line 739
        echo "                   <li class=\"link-leveltwo\" data-submenu=\"48\" id=\"subtab-AdminModulesPositions\">
                                <a href=\"/admin637bvwfg2eqpkr6hcdi/index.php/improve/design/modules/positions/?_token=SFoszkj52J1Zf3SFO0ukurbPFicIJb2O219p-nUirNg\" class=\"link\"> Positions
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"49\" id=\"subtab-AdminImages\">
                                <a href=\"http://localhost:5002/admin637bvwfg2eqpkr6hcdi/index.php?controller=AdminImages&amp;token=16e836a0ec46ec72ca278813f8df9bb4\" class=\"link\"> Images
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"118\" id=\"subtab-AdminLinkWidget\">
                                <a href=\"/admin637bvwfg2eqpkr6hcdi/index.php/modules/link-widget/list?_token=SFoszkj52J1Zf3SFO0ukurbPFicIJb2O219p-nUirNg\" class=\"link\"> Liste de liens
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"50\" id=\"subtab-AdminParentShipping\">
                    <a href=\"http://localhost:5002/admin637bvwfg2eqpkr6hcdi/index.php?controller=AdminCarriers&amp;token=4fe7b545a344bf48180443cc21e10540\" class=\"link\">
                      <i ";
        // line 768
        echo "class=\"material-icons mi-local_shipping\">local_shipping</i>
                      <span>
                      Livraison
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-50\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"51\" id=\"subtab-AdminCarriers\">
                                <a href=\"http://localhost:5002/admin637bvwfg2eqpkr6hcdi/index.php?controller=AdminCarriers&amp;token=4fe7b545a344bf48180443cc21e10540\" class=\"link\"> Transporteurs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"52\" id=\"subtab-AdminShipping\">
                                <a href=\"/admin637bvwfg2eqpkr6hcdi/index.php/improve/shipping/preferences/?_token=SFoszkj52J1Zf3SFO0ukurbPFicIJb2O219p-nUirNg\" class=\"link\"> Préférences
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"53\" id=\"subtab-AdminParentPayment\">
                    <a h";
        // line 800
        echo "ref=\"/admin637bvwfg2eqpkr6hcdi/index.php/improve/payment/payment_methods?_token=SFoszkj52J1Zf3SFO0ukurbPFicIJb2O219p-nUirNg\" class=\"link\">
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
                                <a href=\"/admin637bvwfg2eqpkr6hcdi/index.php/improve/payment/payment_methods?_token=SFoszkj52J1Zf3SFO0ukurbPFicIJb2O219p-nUirNg\" class=\"link\"> Moyens de paiement
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"55\" id=\"subtab-AdminPaymentPreferences\">
                                <a href=\"/admin637bvwfg2eqpkr6hcdi/index.php/improve/payment/preferences?_token=SFoszkj52J1Zf3SFO0ukurbPFicIJb2O219p-nUirNg\" class=\"link\"> Préférences
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                 ";
        // line 830
        echo "     
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"56\" id=\"subtab-AdminInternational\">
                    <a href=\"/admin637bvwfg2eqpkr6hcdi/index.php/improve/international/localization/?_token=SFoszkj52J1Zf3SFO0ukurbPFicIJb2O219p-nUirNg\" class=\"link\">
                      <i class=\"material-icons mi-language\">language</i>
                      <span>
                      International
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-56\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"57\" id=\"subtab-AdminParentLocalization\">
                                <a href=\"/admin637bvwfg2eqpkr6hcdi/index.php/improve/international/localization/?_token=SFoszkj52J1Zf3SFO0ukurbPFicIJb2O219p-nUirNg\" class=\"link\"> Localisation
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"62\" id=\"subtab-AdminParentCountries\">
                                <a href=\"/admin637bvwfg2eqpkr6hcdi/index.php/improve/international/zones/?_token=SFoszkj52J1Zf3SFO0ukurbPFicIJb2O219p-nUirNg\" class=\"link\"> Zones géographiques
                                </a>
                              </li>

                                                                 ";
        // line 859
        echo "                 
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"66\" id=\"subtab-AdminParentTaxes\">
                                <a href=\"/admin637bvwfg2eqpkr6hcdi/index.php/improve/international/taxes/?_token=SFoszkj52J1Zf3SFO0ukurbPFicIJb2O219p-nUirNg\" class=\"link\"> Taxes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"69\" id=\"subtab-AdminTranslations\">
                                <a href=\"/admin637bvwfg2eqpkr6hcdi/index.php/improve/international/translations/settings?_token=SFoszkj52J1Zf3SFO0ukurbPFicIJb2O219p-nUirNg\" class=\"link\"> Traductions
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title link-active\" data-submenu=\"70\" id=\"tab-CONFIGURE\">
                <span class=\"title\">Configurer</span>
            </li>

                              
                  
                                                      
                                                          
                  <li class=\"link-levelone has_submenu link-active open ul-open\" data-submenu=\"71\" id=\"subtab-ShopParameters\">
                    <a href=\"/admin637bvwfg2eqpkr6hcdi/index.php/configure/shop/preferences/preferences?_token=SFoszkj52J1Zf3SFO0ukurbPFicIJb2O219p-nUirNg\" class=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>
               ";
        // line 894
        echo "       <span>
                      Paramètres de la boutique
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_up
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-71\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"72\" id=\"subtab-AdminParentPreferences\">
                                <a href=\"/admin637bvwfg2eqpkr6hcdi/index.php/configure/shop/preferences/preferences?_token=SFoszkj52J1Zf3SFO0ukurbPFicIJb2O219p-nUirNg\" class=\"link\"> Paramètres généraux
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"75\" id=\"subtab-AdminParentOrderPreferences\">
                                <a href=\"/admin637bvwfg2eqpkr6hcdi/index.php/configure/shop/order-preferences/?_token=SFoszkj52J1Zf3SFO0ukurbPFicIJb2O219p-nUirNg\" class=\"link\"> Commandes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"78\" id=\"subtab-AdminPPreferences\">
                                <a href=\"/admin637bvwfg2eqpkr6hcdi/index.php/configure/shop/product-preferences/?_token=SFoszkj52J1Zf3SFO0ukurbPFic";
        // line 922
        echo "IJb2O219p-nUirNg\" class=\"link\"> Produits
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"79\" id=\"subtab-AdminParentCustomerPreferences\">
                                <a href=\"/admin637bvwfg2eqpkr6hcdi/index.php/configure/shop/customer-preferences/?_token=SFoszkj52J1Zf3SFO0ukurbPFicIJb2O219p-nUirNg\" class=\"link\"> Clients
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo link-active\" data-submenu=\"83\" id=\"subtab-AdminParentStores\">
                                <a href=\"/admin637bvwfg2eqpkr6hcdi/index.php/configure/shop/contacts/?_token=SFoszkj52J1Zf3SFO0ukurbPFicIJb2O219p-nUirNg\" class=\"link\"> Contact
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"86\" id=\"subtab-AdminParentMeta\">
                                <a href=\"/admin637bvwfg2eqpkr6hcdi/index.php/configure/shop/seo-urls/?_token=SFoszkj52J1Zf3SFO0ukurbPFicIJb2O219p-nUirNg\" class=\"link\"> Trafic et SEO
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"89\" id=\"s";
        // line 953
        echo "ubtab-AdminParentSearchConf\">
                                <a href=\"http://localhost:5002/admin637bvwfg2eqpkr6hcdi/index.php?controller=AdminSearchConf&amp;token=1653c376f1d5b3951f870c1d1f03da8b\" class=\"link\"> Rechercher
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"92\" id=\"subtab-AdminAdvancedParameters\">
                    <a href=\"/admin637bvwfg2eqpkr6hcdi/index.php/configure/advanced/system-information/?_token=SFoszkj52J1Zf3SFO0ukurbPFicIJb2O219p-nUirNg\" class=\"link\">
                      <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                      <span>
                      Paramètres avancés
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-92\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"93\" id=\"subtab-AdminInformation\">
                                <a href=\"/admin637bvwfg2eqpkr6hcdi/index.php/configure/advanced/system-information/?_token=SFoszkj52J1Zf3SFO0ukurbPFicIJb2O219p-nUirNg\" class=\"link\"> Informations
                                </a>
                              </li>

                                   ";
        // line 983
        echo "                                               
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"94\" id=\"subtab-AdminPerformance\">
                                <a href=\"/admin637bvwfg2eqpkr6hcdi/index.php/configure/advanced/performance/?_token=SFoszkj52J1Zf3SFO0ukurbPFicIJb2O219p-nUirNg\" class=\"link\"> Performances
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"95\" id=\"subtab-AdminAdminPreferences\">
                                <a href=\"/admin637bvwfg2eqpkr6hcdi/index.php/configure/advanced/administration/?_token=SFoszkj52J1Zf3SFO0ukurbPFicIJb2O219p-nUirNg\" class=\"link\"> Administration
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"96\" id=\"subtab-AdminEmails\">
                                <a href=\"/admin637bvwfg2eqpkr6hcdi/index.php/configure/advanced/emails/?_token=SFoszkj52J1Zf3SFO0ukurbPFicIJb2O219p-nUirNg\" class=\"link\"> E-mail
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"97\" id=\"subtab-AdminImport\">
                                <a href=\"/admin637bvwfg2eqpkr6hcdi/index.php/configure/advanced/import/?_token=SFoszkj52J1Zf3SFO0ukurbPFicIJb2O2";
        // line 1011
        echo "19p-nUirNg\" class=\"link\"> Importer
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"98\" id=\"subtab-AdminParentEmployees\">
                                <a href=\"/admin637bvwfg2eqpkr6hcdi/index.php/configure/advanced/employees/?_token=SFoszkj52J1Zf3SFO0ukurbPFicIJb2O219p-nUirNg\" class=\"link\"> Équipe
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"102\" id=\"subtab-AdminParentRequestSql\">
                                <a href=\"/admin637bvwfg2eqpkr6hcdi/index.php/configure/advanced/sql-requests/?_token=SFoszkj52J1Zf3SFO0ukurbPFicIJb2O219p-nUirNg\" class=\"link\"> Base de données
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"105\" id=\"subtab-AdminLogs\">
                                <a href=\"/admin637bvwfg2eqpkr6hcdi/index.php/configure/advanced/logs/?_token=SFoszkj52J1Zf3SFO0ukurbPFicIJb2O219p-nUirNg\" class=\"link\"> Logs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"106\" id=\"subtab-AdminWebservice\">
  ";
        // line 1043
        echo "                              <a href=\"/admin637bvwfg2eqpkr6hcdi/index.php/configure/advanced/webservice-keys/?_token=SFoszkj52J1Zf3SFO0ukurbPFicIJb2O219p-nUirNg\" class=\"link\"> Webservice
                                </a>
                              </li>

                                                                                                                                                                                                                                                    
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"110\" id=\"subtab-AdminFeatureFlag\">
                                <a href=\"/admin637bvwfg2eqpkr6hcdi/index.php/configure/advanced/feature-flags/?_token=SFoszkj52J1Zf3SFO0ukurbPFicIJb2O219p-nUirNg\" class=\"link\"> Fonctionnalités nouvelles et expérimentales
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"111\" id=\"subtab-AdminParentSecurity\">
                                <a href=\"/admin637bvwfg2eqpkr6hcdi/index.php/configure/advanced/security/?_token=SFoszkj52J1Zf3SFO0ukurbPFicIJb2O219p-nUirNg\" class=\"link\"> Sécurité
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
          
               ";
        // line 1082
        echo "       <li class=\"breadcrumb-item active\">
              <a href=\"/admin637bvwfg2eqpkr6hcdi/index.php/configure/shop/contacts/?_token=SFoszkj52J1Zf3SFO0ukurbPFicIJb2O219p-nUirNg\" aria-current=\"page\">Contacts</a>
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
                  href=\"/admin637bvwfg2eqpkr6hcdi/index.php/configure/shop/contacts/new?_token=SFoszkj52J1Zf3SFO0ukurbPFicIJb2O219p-nUirNg\"                  title=\"Ajouter un contact\"                                  >
                  <i class=\"material-icons\">add_circle_outline</i>                  Ajouter un contact
                </a>
                                      
            
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Aide\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"/admin637bvwfg2eqpkr6hcdi/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Ffr%252Fdoc%252FAdminContacts%253Fversion%253D8.1.1%2526country%253Dfr/Aide?_token=SFoszkj52J1Zf3SFO0ukurbPFicIJb2O219p-nUirNg\"
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
        // line 1125
        echo "                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           <li class=\"nav-item\">
                    <a href=\"/admin637bvwfg2eqpkr6hcdi/index.php/configure/shop/contacts/?_token=SFoszkj52J1Zf3SFO0ukurbPFicIJb2O219p-nUirNg\" id=\"subtab-AdminContacts\" class=\"nav-link tab active current\" data-submenu=\"84\">
                      Contacts
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                <li class=\"nav-item\">
                    <a href=\"http://localhost:5002/admin637bvwfg2eqpkr6hcdi/index.php?controller=AdminStores&token=9e0aafbe307b06c93fae632d112cab52\" id=\"subtab-AdminStores\" class=\"nav-link tab \" data-submenu=\"85\">
                      Magasins
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                          ";
        // line 1141
        echo "                                                                                                                                                                                                                                                                                                                                                                                                                                </ul>
    </div>
  
  <div class=\"btn-floating\">
    <button class=\"btn btn-primary collapsed\" data-toggle=\"collapse\" data-target=\".btn-floating-container\" aria-expanded=\"false\">
      <i class=\"material-icons\">add</i>
    </button>
    <div class=\"btn-floating-container collapse\">
      <div class=\"btn-floating-menu\">
        
                              <a
              class=\"btn btn-floating-item   pointer\"              id=\"page-header-desc-floating-configuration-add\"
              href=\"/admin637bvwfg2eqpkr6hcdi/index.php/configure/shop/contacts/new?_token=SFoszkj52J1Zf3SFO0ukurbPFicIJb2O219p-nUirNg\"              title=\"Ajouter un contact\"            >
              Ajouter un contact
              <i class=\"material-icons\">add_circle_outline</i>            </a>
                  
                              <a class=\"btn btn-floating-item btn-help btn-sidebar\" href=\"#\"
               title=\"Aide\"
               data-toggle=\"sidebar\"
               data-target=\"#right-sidebar\"
               data-url=\"/admin637bvwfg2eqpkr6hcdi/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Ffr%252Fdoc%252FAdminContacts%253Fversion%253D8.1.1%2526country%253Dfr/Aide?_token=SFoszkj52J1Zf3SFO0ukurbPFicIJb2O219p-nUirNg\"
            >
              Aide
            </a>
                        </div>
    </div>
  </div>
  
</div>

<div id=\"main-div\">
          
      <div class=\"content-div  with-tabs\">

        

                                                        
        <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"dis";
        // line 1178
        echo "play: none;\"></div>
<div id=\"content-message-box\"></div>


  ";
        // line 1182
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
  <a href=\"http://localhost:5002/admin637bvwfg2eqpkr6hcdi/index.php?controller=AdminDashboard&amp;token=9dd4f471066233cb3b504e5143838bfc\" class=\"btn btn-primary py-1 mt-3\">
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
        // line 1216
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>";
        echo "
</html>";
    }

    // line 102
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_extra_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 1182
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

    // line 1216
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
        return "__string_template__4ccb351b8bb6101c58fd58d4a025ef15934b6eeae76e7aff7ae3a78f0040858a";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1383 => 1216,  1362 => 1182,  1351 => 102,  1342 => 1216,  1302 => 1182,  1296 => 1178,  1257 => 1141,  1239 => 1125,  1194 => 1082,  1153 => 1043,  1119 => 1011,  1089 => 983,  1057 => 953,  1024 => 922,  994 => 894,  957 => 859,  926 => 830,  894 => 800,  860 => 768,  829 => 739,  796 => 708,  763 => 677,  724 => 640,  693 => 611,  659 => 579,  628 => 550,  595 => 519,  561 => 487,  530 => 458,  491 => 421,  442 => 374,  390 => 324,  338 => 274,  291 => 229,  252 => 192,  234 => 176,  193 => 137,  153 => 102,  116 => 67,  89 => 42,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__4ccb351b8bb6101c58fd58d4a025ef15934b6eeae76e7aff7ae3a78f0040858a", "");
    }
}
