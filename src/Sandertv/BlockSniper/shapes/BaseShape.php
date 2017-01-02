<?php

namespace Sandertv\BlockSniper\shapes;

abstract class BaseShape {

    const MAX_WORLD_HEIGHT = 256;
    const MIN_WORLD_HEIGHT = 0;
    
    const TYPE_CUBOID = 0, TYPE_CUBE = 0;
    const TYPE_SPHERE = 1, TYPE_BALL = 1;
    const TYPE_OVERLAY = 2;
    
    public abstract function getName(): string;
    
    public abstract function getPermission(): string;
    
    public abstract function fillShape(): bool;
}
