<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerPsxhn2Q\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerPsxhn2Q/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerPsxhn2Q.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerPsxhn2Q\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerPsxhn2Q\App_KernelDevDebugContainer([
    'container.build_hash' => 'Psxhn2Q',
    'container.build_id' => 'b057ae30',
    'container.build_time' => 1703311540,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerPsxhn2Q');
