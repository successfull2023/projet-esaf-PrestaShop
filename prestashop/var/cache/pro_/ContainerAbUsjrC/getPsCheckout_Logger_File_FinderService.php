<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'ps_checkout.logger.file.finder' shared service.

return $this->services['ps_checkout.logger.file.finder'] = new \PrestaShop\Module\PrestashopCheckout\Logger\LoggerFileFinder(($this->services['ps_checkout.logger.directory'] ?? ($this->services['ps_checkout.logger.directory'] = new \PrestaShop\Module\PrestashopCheckout\Logger\LoggerDirectory('8.1.0', \dirname(__DIR__, 4)))), ($this->services['ps_checkout.logger.filename'] ?? $this->load('getPsCheckout_Logger_FilenameService.php')));
