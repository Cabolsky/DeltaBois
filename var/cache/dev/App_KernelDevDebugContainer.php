<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerKVcW4gG\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerKVcW4gG/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerKVcW4gG.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerKVcW4gG\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerKVcW4gG\App_KernelDevDebugContainer([
    'container.build_hash' => 'KVcW4gG',
    'container.build_id' => '69ac21be',
    'container.build_time' => 1730125700,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerKVcW4gG');
