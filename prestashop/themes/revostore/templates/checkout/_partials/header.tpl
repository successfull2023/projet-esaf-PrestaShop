{*
* 2007-2022 ETS-Soft
*
* NOTICE OF LICENSE
*
* This file is not open source! Each license that you purchased is only available for 1 wesite only.
* If you want to use this file on more websites (or projects), you need to purchase additional licenses. 
* You are not allowed to redistribute, resell, lease, license, sub-license or offer our resources to any third party.
* 
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs, please contact us for extra customization service at an affordable price
*
*  @author ETS-Soft <etssoft.jsc@gmail.com>
*  @copyright  2007-2022 ETS-Soft
*  @license    Valid for 1 website (or project) for each purchase of license
*  International Registered Trademark & Property of ETS-Soft
*}
<div class="header_content">
{block name='header_nav'}
  <nav class="header-nav">
    <div class="container">
        <div class="nav">
            <div class="left-nav">
              {hook h='displayNav1'}
            </div>
            <div class="right-nav">
                <span class="toogle_nav">
                    <i class="material-icons d-inline menu">menu</i>
                </span>
                <div class="toogle_nav_right">
                    {hook h='displayNav2'}
                    {if isset($tc_config.YBC_TC_TRACK_ORDER) && $tc_config.YBC_TC_TRACK_ORDER == 1}
    					<a class="nav_link" href="{$link->getPageLink('stores')|escape:'html':'UTF-8'}" title="{l s='Track your order' d='Shop.Theme.Action'}">
    						<i class="fa fa-random"></i> {l s='Track your order' d='Shop.Theme.Action'}
    					</a>
    				{/if}
                    {if isset($tc_config.YBC_TC_STORE_LINK) && $tc_config.YBC_TC_STORE_LINK == 1}
    					<a class="nav_link" href="{$link->getPageLink('stores')|escape:'html':'UTF-8'}" title="{l s='Store locator' d='Shop.Theme.Action'}">
    						<i class="fa fa-map-marker"></i> {l s='Store locator' d='Shop.Theme.Action'}
    					</a>
    				{/if}
                </div>
            </div>
        </div>
    </div>
  </nav>
{/block}

{block name='header_top'}
  <div class="mobile_logo">
    <div class="" id="_mobile_logo">
      <a href="{$urls.base_url|escape:'html':'UTF-8'}">
        <img class="logo img-responsive" src="{if isset($tc_dev_mode) && $tc_dev_mode && isset($logo_url)&&$logo_url}{$logo_url|escape:'html':'UTF-8'}{else}{$shop.logo|escape:'html':'UTF-8'}{/if}" alt="{$shop.name|escape:'html':'UTF-8'}">
      </a>
    </div>
  </div>
  <div class="header-top">
    <div class="container">
       <div class="row">
        <div class="pull-xs-left hidden-md-up text-xs-center mobile closed" id="menu-icon">
          <i class="material-icons d-inline menu">menu</i>
        </div>
        <div class="col-md-4 hidden-sm-down" id="_desktop_logo">
          <a href="{$urls.base_url|escape:'html':'UTF-8'}">
            <img class="logo img-responsive" src="{if isset($tc_dev_mode) && $tc_dev_mode && isset($logo_url)&&$logo_url}{$logo_url|escape:'html':'UTF-8'}{else}{$shop.logo|escape:'html':'UTF-8'}{/if}" alt="{$shop.name|escape:'html':'UTF-8'}">
          </a>
        </div>
        {hook h='displayTop'}
      </div>
    </div>
    <div class="menu_and_cattree">
        <div class="container">
            <div class="row">
             {if isset($tc_config.YBC_TC_LAYOUT) && $tc_config.YBC_TC_LAYOUT == 'LayoutHome1'}
                {hook h='customcategories'}
                <div class="custom_menu col-md-9 col-sm-9">
                    {hook h='displayMegaMenu'}
                </div>
             {else}
                <div class="custom_menu col-md-12 col-sm-12">
                    {hook h='displayMegaMenu'}
                </div>
             {/if}
            </div>
        </div>
    </div>
  </div>
  {hook h='displayNavFullWidth'}
  
{/block}
</div>
