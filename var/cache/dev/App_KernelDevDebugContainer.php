<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerGGULqdn\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerGGULqdn/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerGGULqdn.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerGGULqdn\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerGGULqdn\App_KernelDevDebugContainer([
    'container.build_hash' => 'GGULqdn',
    'container.build_id' => 'c627167c',
    'container.build_time' => 1617964419,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerGGULqdn');
