<?php
namespace MadEyeDeer\AvatarTools\Validators;

use Illuminate\Validation\Factory;
use Intervention\Image\ImageManager;
use Illuminate\Contracts\Translation\Translator as TranslatorInterface;

use Flarum\User\AvatarValidator as FlarumAvatarValidator;
use Flarum\Settings\SettingsRepositoryInterface;
use MadEyeDeer\AvatarTools\ExtensionSettings;

class AvatarValidator extends FlarumAvatarValidator
{
    /**
     * @var int default max size in mb
     */
    protected $defaultMaxSize = 2; // default max size 2mb, as per flarum default

    /**
     * @var SettingsRepositoryInterface
     */
    protected $settings;


    public function __construct(Factory $validator, TranslatorInterface $translator, ImageManager $imageManager, SettingsRepositoryInterface $settings)
    {
        parent::__construct($validator, $translator, $imageManager);
        $this->settings = $settings;
    }

    protected function getMaxSize()
    {
        // file size stored in mb
        $maxSize = $this->settings->get(ExtensionSettings::MAXIMUM_AVATAR_FILE_SIZE);

        // if the max size is not a valid number, use the default max size
        if (!is_numeric($maxSize)) {
            $maxSize = $this->defaultMaxSize;
        }

        // return the max size in kilobytes
        return $maxSize * 1024;
    }
}
