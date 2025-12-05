<?php

defined('MOODLE_INTERNAL') || die();

$plugin->component = 'theme_simple';
$plugin->version   = 2025020400;
$plugin->requires  = 2022041900;
$plugin->dependencies = [
    'theme_boost' => ANY_VERSION
];
