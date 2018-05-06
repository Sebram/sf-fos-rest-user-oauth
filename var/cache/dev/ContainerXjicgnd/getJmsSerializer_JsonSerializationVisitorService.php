<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'jms_serializer.json_serialization_visitor' shared service.

include_once $this->targetDirs[3].'/vendor/jms/serializer/src/JMS/Serializer/VisitorInterface.php';
include_once $this->targetDirs[3].'/vendor/jms/serializer/src/JMS/Serializer/AbstractVisitor.php';
include_once $this->targetDirs[3].'/vendor/jms/serializer/src/JMS/Serializer/GenericSerializationVisitor.php';
include_once $this->targetDirs[3].'/vendor/jms/serializer/src/JMS/Serializer/JsonSerializationVisitor.php';

$this->services['jms_serializer.json_serialization_visitor'] = $instance = new \JMS\Serializer\JsonSerializationVisitor(${($_ = isset($this->services['jms_serializer.naming_strategy']) ? $this->services['jms_serializer.naming_strategy'] : $this->load('getJmsSerializer_NamingStrategyService.php')) && false ?: '_'}, ${($_ = isset($this->services['jms_serializer.accessor_strategy']) ? $this->services['jms_serializer.accessor_strategy'] : $this->load('getJmsSerializer_AccessorStrategyService.php')) && false ?: '_'});

$instance->setOptions(1216);

return $instance;
