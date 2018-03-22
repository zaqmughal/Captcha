<?php
/**
 * @category    CodeZee
 * @package     Captcha
 * @author 		Zaq Mughal
 */

namespace CodeZee\Captcha\Controller\Index;

class CaptchaError extends \Magento\Framework\App\Action\Action
{
    public function __construct(
        \Magento\Framework\App\Action\Context $context
    )
    {
        parent::__construct($context);
    }

    public function execute()
    {
        $this->messageManager->addErrorMessage( __('There was an error with the Captcha, please try again.') );
    }
}