<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerYh5eHTn\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerYh5eHTn/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerYh5eHTn.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerYh5eHTn\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerYh5eHTn\App_KernelDevDebugContainer([
    'container.build_hash' => 'Yh5eHTn',
    'container.build_id' => '905da1da',
    'container.build_time' => 1738761696,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerYh5eHTn');
