<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.adapter.pdf.delivery_slip_pdf_generator' shared service.

return $this->services['prestashop.adapter.pdf.delivery_slip_pdf_generator'] = new \PrestaShop\PrestaShop\Adapter\PDF\DeliverySlipPdfGenerator(($this->services['translator'] ?? $this->getTranslatorService()));
