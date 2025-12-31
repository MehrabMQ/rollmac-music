<?php

use danog\MadelineProto\Settings;
use danog\MadelineProto\Settings\SettingsAbstract;

function mp_settings($settings)
{
    if ($settings instanceof SettingsAbstract) {
        return $settings;
    }

    if (is_array($settings)) {
        return Settings::fromArray($settings);
    }

    return $settings;
}
