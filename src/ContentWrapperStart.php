<?php

namespace AnSyS\Elements;

use Contao\BackendTemplate;

/**
 * Front end content element "wrapper" (wrapper start).
 *
 * @author Sven-Uwe Bruch
 */
class ContentWrapperStart extends \ContentElement
{

	/**
	 * Template
	 * @var string
	 */
	protected $strTemplate = 'ce_wrapper_start';

	/**
	 * Generate the content element
	 */
	protected function compile()
	{
		if (TL_MODE == 'BE')
		{
			$this->strTemplate = 'be_wildcard';

			$this->Template = new BackendTemplate($this->strTemplate);
                        $s="";
			if($this->cssID[0])
                          $s=$s . "ID=" . $this->cssID[0] . " ";
			if($this->cssID[1])
                          $s=$s . "Style=" . $this->cssID[1] . " ";
			if($this->headline)
                          $s=$s . $this->headline;
			$this->Template->title = $s;
		}
	}
}

class_alias(ContentWrapperStart::class, 'ContentWrapperStart');
