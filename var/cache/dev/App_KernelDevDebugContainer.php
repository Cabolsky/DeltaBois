<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerGIEdn2U\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerGIEdn2U/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerGIEdn2U.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerGIEdn2U\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerGIEdn2U\App_KernelDevDebugContainer([
    'container.build_hash' => 'GIEdn2U',
    'container.build_id' => '64ccfb85',
    'container.build_time' => 1730057652,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerGIEdn2U');
