<?php

defined('MOODLE_INTERNAL') || die();

$THEME->name = 'simple';

$THEME->parents = ['boost'];

$THEME->sheets = [];
$THEME->editor_sheets = [];

$THEME->scss = function($theme) {
    return file_get_contents(__DIR__ . '/scss/pre.scss');
};

$THEME->layouts = [
    'base' => array(
        'file' => 'default.php',
        'regions' => [],
        'defaultregion' => '',
    ),
    'standard' => array(
        'file' => 'default.php',
        'regions' => ['side-pre'],
        'defaultregion' => 'side-pre',
    ),
    'course' => array(
        'file' => 'default.php',
        'regions' => ['side-pre'],
        'defaultregion' => 'side-pre',
    ),
    'incourse' => array(
        'file' => 'default.php',
        'regions' => ['side-pre'],
        'defaultregion' => 'side-pre',
    ),
];
