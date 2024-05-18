<?php
namespace MadEyeDeer\AvatarTools;

class ExtensionSettings
{
    const EXTENSION_PREFIX = 'madeyedeer-avatar-tools';
    const MAXIMUM_AVATAR_FILE_SIZE = 'madeyedeer-avatar-tools_maximumAvatarFileSize';

    /**
     * Removes the extension prefix from a fully qualified setting key,
     * returning the simplified setting identifier.
     *
     * @param string $fullKey The complete setting key including the extension prefix.
     * @return string The setting identifier without the extension prefix.
     */
    public static function stripExtensionPrefix(string $fullKey) : string
    {
        return str_replace(self::EXTENSION_PREFIX . '_', '', $fullKey);
    }
}
