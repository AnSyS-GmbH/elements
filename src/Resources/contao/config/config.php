<?php

$GLOBALS['TL_CTE']['texts']['textLink'] = 'AnSyS\Elements\ContentTextLink';
$GLOBALS['TL_CTE']['wrapper']['wrapperStart'] = 'AnSyS\Elements\ContentWrapperStart';
$GLOBALS['TL_CTE']['wrapper']['wrapperStop'] = 'AnSyS\Elements\ContentWrapperStop';

$GLOBALS['TL_WRAPPERS']['start'][] = 'wrapperStart';
$GLOBALS['TL_WRAPPERS']['stop'][] = 'wrapperStop';

/*
$GLOBALS['TL_WRAPPERS'] = array
(
        'start' => array
        (
                'accordionStart',
                'sliderStart',
                'fieldsetStart',
		'wrapperStart'
        ),
        'stop' => array
        (
                'accordionStop',
                'sliderStop',
                'fieldsetStop',
		'wrapperStop'
        ),
        'single' => array
        (
                'accordionSingle'
        ),
        'separator' => array()
);
*/

