<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('sw-KE', array (
));

$catalogueSw = new MessageCatalogue('sw', array (
));
$catalogue->addFallbackCatalogue($catalogueSw);
$catalogueDefault = new MessageCatalogue('default', array (
));
$catalogueSw->addFallbackCatalogue($catalogueDefault);

return $catalogue;
