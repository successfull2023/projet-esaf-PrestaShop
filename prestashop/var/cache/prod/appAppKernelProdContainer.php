<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerC10npx8\appAppKernelProdContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerC10npx8/appAppKernelProdContainer.php') {
    touch(__DIR__.'/ContainerC10npx8.legacy');

    return;
}

if (!\class_exists(appAppKernelProdContainer::class, false)) {
    \class_alias(\ContainerC10npx8\appAppKernelProdContainer::class, appAppKernelProdContainer::class, false);
}

return new \ContainerC10npx8\appAppKernelProdContainer([
    'container.build_hash' => 'C10npx8',
    'container.build_id' => 'f77ee864',
    'container.build_time' => 1698403366,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerC10npx8');