<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerSheavsg\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerSheavsg/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerSheavsg.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerSheavsg\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerSheavsg\App_KernelDevDebugContainer([
    'container.build_hash' => 'Sheavsg',
    'container.build_id' => 'a49dc05c',
    'container.build_time' => 1614674862,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerSheavsg');
