<?php

namespace MadEyeDeer\AvatarTools\Validators;

use Flarum\Foundation\AbstractValidator;
use MadEyeDeer\AvatarTools\ExtensionSettings;

class SettingsValidator extends AbstractValidator
{
    protected $rules = [
        ExtensionSettings::MAXIMUM_AVATAR_FILE_SIZE => ['required', 'integer', 'min:1'],
    ];

    protected $messages = [
        ExtensionSettings::MAXIMUM_AVATAR_FILE_SIZE . '.required' => 'The maximum avatar file size is required.',
        ExtensionSettings::MAXIMUM_AVATAR_FILE_SIZE . '.integer' => 'The maximum avatar file size must be an integer.',
        ExtensionSettings::MAXIMUM_AVATAR_FILE_SIZE . '.min' => 'The maximum avatar file size must be at least 1.',
    ];

    public function validate(array $attributes): \Illuminate\Validation\Validator
    {
        return $this->validator->make($attributes, $this->rules, $this->messages);
    }
}
