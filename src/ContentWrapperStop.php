<?php

namespace AnSyS\Elements;

use Contao\BackendTemplate;
use Contao\ContentElement;

/**
 * Front end content element "wrapper" (wrapper stop).
 *
 * @author Sven-Uwe Bruch
 */
class ContentWrapperStop extends ContentElement
{
    /**
     * Template.
     *
     * @var string
     */
    protected $strTemplate = 'ce_wrapper_stop';

    /**
     * Generate the content element.
     */
    protected function compile()
    {
        if (TL_MODE == 'BE') {
            $this->strTemplate = 'be_wildcard';

            $this->Template = new BackendTemplate($this->strTemplate);
        }

        // Previous and next labels
        $this->Template->previous = $GLOBALS['TL_LANG']['MSC']['previous'];
        $this->Template->next = $GLOBALS['TL_LANG']['MSC']['next'];
    }
}

class_alias(ContentWrapperStop::class, 'ContentWrapperStop');
