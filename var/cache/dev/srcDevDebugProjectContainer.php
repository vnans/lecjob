<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerBwG7rDb\srcDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerBwG7rDb/srcDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerBwG7rDb.legacy');

    return;
}

if (!\class_exists(srcDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerBwG7rDb\srcDevDebugProjectContainer::class, srcDevDebugProjectContainer::class, false);
}

return new \ContainerBwG7rDb\srcDevDebugProjectContainer(array(
    'container.build_hash' => 'BwG7rDb',
    'container.build_id' => 'db875f29',
    'container.build_time' => 1538670972,
), __DIR__.\DIRECTORY_SEPARATOR.'ContainerBwG7rDb');
