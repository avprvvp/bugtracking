<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerL4RaBtS\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerL4RaBtS/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerL4RaBtS.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerL4RaBtS\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerL4RaBtS\App_KernelDevDebugContainer([
    'container.build_hash' => 'L4RaBtS',
    'container.build_id' => '97cdf18f',
    'container.build_time' => 1585537780,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerL4RaBtS');
