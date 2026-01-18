<?php

declare(strict_types=1);

namespace JesseWebDotCom\Webtrees\Module\TimelineTab;

use JesseWebDotCom\Webtrees\Module\TimelineTab\TimelineTabModule;
use Fisharebest\Webtrees\Registry;

require __DIR__ . '/generic.php';

return Registry::container()->get(TimelineTabModule::class);
