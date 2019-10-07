<?php

//$GLOBALS['TL_DCA']['tl_content']['config']['onload_callback'][] = array('MadeYourDay\RockSolidCustomElements\CustomElements', 'onloadCallback');
//$GLOBALS['TL_DCA']['tl_content']['config']['onsubmit_callback'][] = array('MadeYourDay\RockSolidCustomElements\CustomElements', 'onsubmitCallback');
/*
$GLOBALS['TL_DCA']['tl_content']['fields']['rsce_data'] = array(
	'label' => &$GLOBALS['TL_LANG']['tl_content']['rsce_data'],
	'exclude' => true,
	'inputType' => 'rsce_list_hidden',
	'sql' => "mediumblob NULL",
	'save_callback' => array(
		array('AnSyS\\RockSolidCustomElements\\CustomElements', 'saveDataCallback'),
	),
);
*/

$GLOBALS['TL_DCA']['tl_content']['palettes']['text_link'] = '{type_legend},type,headline;{text_legend},text;{link_legend},url,target,linkTitle,embed,titleText,rel;{image_legend},addImage;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID;{invisible_legend:hide},invisible,start,stop';
$GLOBALS['TL_DCA']['tl_content']['palettes']['wrapperStart'] = '{type_legend},type,headline;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID;{invisible_legend:hide},invisible,start,stop';
$GLOBALS['TL_DCA']['tl_content']['palettes']['wrapperStop'] = '{type_legend},type;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests;{invisible_legend:hide},invisible,start,stop';
