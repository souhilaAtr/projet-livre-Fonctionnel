<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerEOlcxCL\App_KernelProdContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerEOlcxCL/App_KernelProdContainer.php') {
    touch(__DIR__.'/ContainerEOlcxCL.legacy');

    return;
}

if (!\class_exists(App_KernelProdContainer::class, false)) {
    \class_alias(\ContainerEOlcxCL\App_KernelProdContainer::class, App_KernelProdContainer::class, false);
}

return new \ContainerEOlcxCL\App_KernelProdContainer([
    'container.build_hash' => 'EOlcxCL',
    'container.build_id' => '5635c8d9',
    'container.build_time' => 1674726317,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerEOlcxCL');
