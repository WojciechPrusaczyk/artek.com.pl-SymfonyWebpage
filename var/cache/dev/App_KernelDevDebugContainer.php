<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container0YkFWYc\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container0YkFWYc/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container0YkFWYc.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container0YkFWYc\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container0YkFWYc\App_KernelDevDebugContainer([
    'container.build_hash' => '0YkFWYc',
    'container.build_id' => '0222e070',
    'container.build_time' => 1654253969,
], __DIR__.\DIRECTORY_SEPARATOR.'Container0YkFWYc');
