<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerEgsidm1\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerEgsidm1/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerEgsidm1.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerEgsidm1\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerEgsidm1\App_KernelDevDebugContainer([
    'container.build_hash' => 'Egsidm1',
    'container.build_id' => '21ff039e',
    'container.build_time' => 1584959794,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerEgsidm1');