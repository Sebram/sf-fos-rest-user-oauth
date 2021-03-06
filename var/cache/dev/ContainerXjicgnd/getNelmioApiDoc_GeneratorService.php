<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'nelmio_api_doc.generator' shared service.

include_once $this->targetDirs[3].'/vendor/nelmio/api-doc-bundle/ApiDocGenerator.php';

return $this->services['nelmio_api_doc.generator'] = new \Nelmio\ApiDocBundle\ApiDocGenerator(new RewindableGenerator(function () {
    yield 0 => ${($_ = isset($this->services['nelmio_api_doc.describers.config']) ? $this->services['nelmio_api_doc.describers.config'] : $this->load('getNelmioApiDoc_Describers_ConfigService.php')) && false ?: '_'};
    yield 1 => ${($_ = isset($this->services['nelmio_api_doc.describers.swagger_php.default']) ? $this->services['nelmio_api_doc.describers.swagger_php.default'] : $this->load('getNelmioApiDoc_Describers_SwaggerPhp_DefaultService.php')) && false ?: '_'};
    yield 2 => ${($_ = isset($this->services['nelmio_api_doc.describers.route.default']) ? $this->services['nelmio_api_doc.describers.route.default'] : $this->load('getNelmioApiDoc_Describers_Route_DefaultService.php')) && false ?: '_'};
    yield 3 => ${($_ = isset($this->services['nelmio_api_doc.describers.default']) ? $this->services['nelmio_api_doc.describers.default'] : $this->services['nelmio_api_doc.describers.default'] = new \Nelmio\ApiDocBundle\Describer\DefaultDescriber()) && false ?: '_'};
}, 4), new RewindableGenerator(function () {
    yield 0 => ${($_ = isset($this->services['nelmio_api_doc.model_describers.form']) ? $this->services['nelmio_api_doc.model_describers.form'] : $this->load('getNelmioApiDoc_ModelDescribers_FormService.php')) && false ?: '_'};
    yield 1 => ${($_ = isset($this->services['nelmio_api_doc.model_describers.jms']) ? $this->services['nelmio_api_doc.model_describers.jms'] : $this->load('getNelmioApiDoc_ModelDescribers_JmsService.php')) && false ?: '_'};
    yield 2 => ${($_ = isset($this->services['nelmio_api_doc.model_describers.object']) ? $this->services['nelmio_api_doc.model_describers.object'] : $this->load('getNelmioApiDoc_ModelDescribers_ObjectService.php')) && false ?: '_'};
}, 3));
