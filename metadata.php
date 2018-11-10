<?php

/**
 * Metadata version
 */
$sMetadataVersion = '2.1';

/**
 * Module information
 */
$aModule = array(
    'id' => 'rs_visualcms_custom_widget_example',
    'title' => '<strong style="color:#1E477F;">rheinstruktur.de</strong>RS:</strong> VisualCMS Custom-Widget Example',
    'description' => array(
        'de' => 'VisualCMS Custom-Widget Example',
        'en' => 'VisualCMS Custom-Widget Example',
    ),
    'thumbnail' => 'rheinstruktur.png',
    'version' => '0.1',
    'author' => 'rheinstruktur.de',
    'url' => 'https://rheinstruktur.de',
    'email' => 'speckhardt@rheinstruktur.de',
    'extend' => array(),
    'templates' => [
        'rs_content_element.tpl' => 'rs/VisualCms/Application/views/tpl/widgets/rs_content_element.tpl',
    ],
);
