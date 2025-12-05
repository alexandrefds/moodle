<?php
defined('MOODLE_INTERNAL') || die();

$templatecontext = [
    'output' => $OUTPUT,
    'bodyattributes' => $OUTPUT->body_attributes(),
    'sitefullname' => format_string($SITE->fullname),
    'sitename' => format_string($SITE->shortname),
];

echo $OUTPUT->render_from_template('theme_simple/default', $templatecontext);
