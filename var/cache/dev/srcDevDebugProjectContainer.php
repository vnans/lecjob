<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerNskzgil\srcDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerNskzgil/srcDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerNskzgil.legacy');

    return;
}

if (!\class_exists(srcDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerNskzgil\srcDevDebugProjectContainer::class, srcDevDebugProjectContainer::class, false);
}

return new \ContainerNskzgil\srcDevDebugProjectContainer(array(
    'container.build_hash' => 'Nskzgil',
    'container.build_id' => '6787ee15',
    'container.build_time' => 1544716956,
), __DIR__.\DIRECTORY_SEPARATOR.'ContainerNskzgil');
