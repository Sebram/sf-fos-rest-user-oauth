<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container75a0xoy\srcDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container75a0xoy/srcDevDebugProjectContainer.php') {
    touch(__DIR__.'/Container75a0xoy.legacy');

    return;
}

if (!\class_exists(srcDevDebugProjectContainer::class, false)) {
    \class_alias(\Container75a0xoy\srcDevDebugProjectContainer::class, srcDevDebugProjectContainer::class, false);
}

return new \Container75a0xoy\srcDevDebugProjectContainer(array(
    'container.build_hash' => '75a0xoy',
    'container.build_id' => '24d7387f',
    'container.build_time' => 1525608849,
), __DIR__.\DIRECTORY_SEPARATOR.'Container75a0xoy');