<?php

/**
 * This file is part of the eZ Publish Kernel package.
 *
 * @copyright Copyright (C) eZ Systems AS. All rights reserved.
 * @license For full copyright and license information view LICENSE file distributed with this source code.
 */
namespace eZ\Publish\Core\MVC\Symfony\Cache\Http\SignalSlot;

use eZ\Publish\Core\SignalSlot\Signal;

/**
 * A slot handling UpdateLocationSignal.
 *
 * @deprecated since 6.8. The platform-http-cache package defines slots for http-cache multi-tagging.
 */
class UpdateLocationSlot extends PurgeForContentHttpCacheSlot
{
    protected function supports(Signal $signal)
    {
        return $signal instanceof Signal\LocationService\UpdateLocationSignal;
    }
}
