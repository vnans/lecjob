<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerAhAJlEx\srcDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerAhAJlEx/srcDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerAhAJlEx.legacy');

    return;
}

if (!\class_exists(srcDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerAhAJlEx\srcDevDebugProjectContainer::class, srcDevDebugProjectContainer::class, false);
}

return new \ContainerAhAJlEx\srcDevDebugProjectContainer(array(
    'container.build_hash' => 'AhAJlEx',
    'container.build_id' => '626bea1f',
    'container.build_time' => 1539698228,
), __DIR__.\DIRECTORY_SEPARATOR.'ContainerAhAJlEx');
