<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerT9I6ttn\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerT9I6ttn/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerT9I6ttn.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerT9I6ttn\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerT9I6ttn\App_KernelDevDebugContainer([
    'container.build_hash' => 'T9I6ttn',
    'container.build_id' => '696e4575',
    'container.build_time' => 1706800974,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerT9I6ttn');
