<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerWxTRhkP\App_KernelProdContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerWxTRhkP/App_KernelProdContainer.php') {
    touch(__DIR__.'/ContainerWxTRhkP.legacy');

    return;
}

if (!\class_exists(App_KernelProdContainer::class, false)) {
    \class_alias(\ContainerWxTRhkP\App_KernelProdContainer::class, App_KernelProdContainer::class, false);
}

return new \ContainerWxTRhkP\App_KernelProdContainer([
    'container.build_hash' => 'WxTRhkP',
    'container.build_id' => '012beb23',
    'container.build_time' => 1693460844,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerWxTRhkP');