<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'nelmio_api_doc.route_describers.fos_rest' shared service.

include_once $this->targetDirs[3].'/vendor/nelmio/api-doc-bundle/RouteDescriber/RouteDescriberInterface.php';
include_once $this->targetDirs[3].'/vendor/nelmio/api-doc-bundle/RouteDescriber/RouteDescriberTrait.php';
include_once $this->targetDirs[3].'/vendor/nelmio/api-doc-bundle/RouteDescriber/FosRestDescriber.php';

return $this->services['nelmio_api_doc.route_describers.fos_rest'] = new \Nelmio\ApiDocBundle\RouteDescriber\FosRestDescriber(${($_ = isset($this->services['annotation_reader']) ? $this->services['annotation_reader'] : $this->getAnnotationReaderService()) && false ?: '_'});
