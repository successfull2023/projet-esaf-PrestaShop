<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'ps_checkout.store.module.paypal' shared service.

return $this->services['ps_checkout.store.module.paypal'] = new \PrestaShop\Module\PrestashopCheckout\Presenter\Store\Modules\PaypalModule(($this->services['ps_checkout.paypal.configuration'] ?? $this->load('getPsCheckout_Paypal_ConfigurationService.php')));