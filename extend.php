<?php

/*
 * This file is part of madeyedeer/avatar-tools.
 *
 * Copyright (c) 2024 Mad Eye Deer Pty Ltd.
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

namespace MadEyeDeer\AvatarTools;
use Flarum\Settings\Event\Saving;
use MadEyeDeer\AvatarTools\Listeners\SettingsSavingListener;
use MadEyeDeer\AvatarTools\ServiceProviders\AvatarServiceProvider;

use Flarum\Extend;

return [
    (new Extend\Frontend('forum'))
        ->js(__DIR__.'/js/dist/forum.js')
        ->css(__DIR__.'/less/forum.less'),
    (new Extend\Frontend('admin'))
        ->js(__DIR__.'/js/dist/admin.js')
        ->css(__DIR__.'/less/admin.less'),
    new Extend\Locales(__DIR__.'/locale'),

    (new Extend\ServiceProvider())
        ->register(AvatarServiceProvider::class),

    (new Extend\Event())->listen(Saving::class, SettingsSavingListener::class),
];
