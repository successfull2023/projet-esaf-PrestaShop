<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'form.type.product.feature' shared service.

return $this->services['form.type.product.feature'] = new \PrestaShopBundle\Form\Admin\Feature\ProductFeature(($this->services['translator'] ?? $this->getTranslatorService()), ($this->services['PrestaShop\\PrestaShop\\Adapter\\LegacyContext'] ?? $this->getLegacyContextService()), ($this->services['prestashop.router'] ?? $this->load('getPrestashop_RouterService.php')), ($this->services['prestashop.adapter.data_provider.feature'] ?? $this->load('getPrestashop_Adapter_DataProvider_FeatureService.php')));
