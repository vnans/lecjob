<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container8uZMPWN\srcProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container8uZMPWN/srcProdProjectContainer.php') {
    touch(__DIR__.'/Container8uZMPWN.legacy');

    return;
}

if (!\class_exists(srcProdProjectContainer::class, false)) {
    \class_alias(\Container8uZMPWN\srcProdProjectContainer::class, srcProdProjectContainer::class, false);
}

return new \Container8uZMPWN\srcProdProjectContainer(array(
    'container.build_hash' => '8uZMPWN',
    'container.build_id' => 'adb3f778',
    'container.build_time' => 1538733408,
), __DIR__.\DIRECTORY_SEPARATOR.'Container8uZMPWN');
