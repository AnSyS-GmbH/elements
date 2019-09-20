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
			$this->Template->title = $this->headline;
		}

		// Wrapper configuration
		//$this->Template->config = $this->sliderDelay . ',' . $this->sliderSpeed . ',' . $this->sliderStartSlide . ',' . $this->sliderContinuous;
	}
}

class_alias(ContentWrapperStart::class, 'ContentWrapperStart');
