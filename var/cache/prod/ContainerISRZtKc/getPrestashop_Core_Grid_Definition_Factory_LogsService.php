<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.core.grid.definition.factory.logs' shared service.

$this->services['prestashop.core.grid.definition.factory.logs'] = $instance = new \PrestaShop\PrestaShop\Core\Grid\Definition\Factory\LogGridDefinitionFactory(($this->services['prestashop.core.hook.dispatcher'] ?? $this->getPrestashop_Core_Hook_DispatcherService()), ($this->services['prestashop.adapter.legacy.context'] ?? $this->getPrestashop_Adapter_Legacy_ContextService())->getContext()->language->date_format_full);

$instance->setTranslator(($this->services['translator'] ?? $this->getTranslatorService()));

return $instance;
