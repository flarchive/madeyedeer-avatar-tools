<?php
namespace MadEyeDeer\AvatarTools\ServiceProviders;

use Flarum\Foundation\AbstractServiceProvider;
use Flarum\User\AvatarValidator;
use MadEyeDeer\AvatarTools\Validators\AvatarValidator as CustomAvatarValidator;

class AvatarServiceProvider extends AbstractServiceProvider
{
    public function register()
    {
        $this->container->bind(AvatarValidator::class, CustomAvatarValidator::class);
    }
}
