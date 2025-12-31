<?php

use danog\MadelineProto\Settings;
use danog\MadelineProto\Settings\SettingsAbstract;

function mp_settings($settings)
{
    if ($settings instanceof SettingsAbstract) {
        return $settings;
    }

    if (is_array($settings)) {
        if (method_exists(Settings::class, 'parseFromLegacyArray')) {
            return Settings::parseFromLegacyArray($settings);
        }
        if (method_exists(Settings::class, 'fromLegacyArray')) {
            return Settings::fromLegacyArray($settings);
        }
        if (method_exists(Settings::class, 'loadFromArray')) {
            return Settings::loadFromArray($settings);
        }

        $instance = new Settings();
        $instance->merge($settings);
        return $instance;
    }

    return $settings;
}
