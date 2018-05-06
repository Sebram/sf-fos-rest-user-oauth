<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'property_info' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/property-info/PropertyTypeExtractorInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/property-info/PropertyDescriptionExtractorInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/property-info/PropertyAccessExtractorInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/property-info/PropertyListExtractorInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/property-info/PropertyInfoExtractorInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/property-info/PropertyInfoExtractor.php';

return $this->services['property_info'] = new \Symfony\Component\PropertyInfo\PropertyInfoExtractor(new RewindableGenerator(function () {
    yield 0 => ${($_ = isset($this->services['property_info.serializer_extractor']) ? $this->services['property_info.serializer_extractor'] : $this->load('getPropertyInfo_SerializerExtractorService.php')) && false ?: '_'};
    yield 1 => ${($_ = isset($this->services['property_info.reflection_extractor']) ? $this->services['property_info.reflection_extractor'] : $this->services['property_info.reflection_extractor'] = new \Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor()) && false ?: '_'};
    yield 2 => ${($_ = isset($this->services['doctrine.orm.default_entity_manager.property_info_extractor']) ? $this->services['doctrine.orm.default_entity_manager.property_info_extractor'] : $this->load('getDoctrine_Orm_DefaultEntityManager_PropertyInfoExtractorService.php')) && false ?: '_'};
}, 3), new RewindableGenerator(function () {
    yield 0 => ${($_ = isset($this->services['doctrine.orm.default_entity_manager.property_info_extractor']) ? $this->services['doctrine.orm.default_entity_manager.property_info_extractor'] : $this->load('getDoctrine_Orm_DefaultEntityManager_PropertyInfoExtractorService.php')) && false ?: '_'};
    yield 1 => ${($_ = isset($this->services['property_info.php_doc_extractor']) ? $this->services['property_info.php_doc_extractor'] : $this->services['property_info.php_doc_extractor'] = new \Symfony\Component\PropertyInfo\Extractor\PhpDocExtractor()) && false ?: '_'};
    yield 2 => ${($_ = isset($this->services['property_info.reflection_extractor']) ? $this->services['property_info.reflection_extractor'] : $this->services['property_info.reflection_extractor'] = new \Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor()) && false ?: '_'};
}, 3), new RewindableGenerator(function () {
    yield 0 => ${($_ = isset($this->services['property_info.php_doc_extractor']) ? $this->services['property_info.php_doc_extractor'] : $this->services['property_info.php_doc_extractor'] = new \Symfony\Component\PropertyInfo\Extractor\PhpDocExtractor()) && false ?: '_'};
}, 1), new RewindableGenerator(function () {
    yield 0 => ${($_ = isset($this->services['property_info.reflection_extractor']) ? $this->services['property_info.reflection_extractor'] : $this->services['property_info.reflection_extractor'] = new \Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor()) && false ?: '_'};
}, 1));
