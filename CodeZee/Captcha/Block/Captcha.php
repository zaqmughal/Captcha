<?php

namespace CodeZee\Captcha\Block;

use Magento\Framework\View\Element\Template;
use CodeZee\Captcha\Helper\Data;

class Captcha extends Template
{

    /**
     * @var Data
     */
    protected $dataHelper;

    /**
     * Recaptcha constructor.
     * @param Template\Context $context
     * @param Data $dataHelper
     * @param array $data
     */
    public function __construct(
        Template\Context $context,
        Data $dataHelper,
        array $data = []
    ) {
        $this->dataHelper = $dataHelper;
        parent::__construct($context, $data);
    }

    /**
     * @return bool
     */
    public function isEnabled()
    {
        return $this->dataHelper->isEnabled();
    }

    /**
     * @return bool
     */
    public function useGoogle()
    {
        return $this->dataHelper->useGoogle();
    }

    /**
     * @return string
     */
    public function getSiteKey()
    {
        return $this->dataHelper->getSiteKey();
    }
}