<?php

namespace CodeZee\Captcha\Helper;

use Magento\Store\Model\ScopeInterface;
use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Framework\App\Helper\Context;

class Data extends AbstractHelper
{

    /**
     * Data constructor.
     * @param Context $context
     */
    public function __construct(Context $context)
    {
        parent::__construct($context);
    }

    /**
     * Is module enabled
     *
     * @param null $storeId
     * @return boolean
     */
    public function isEnabled($storeId = null)
    {
        return $this->scopeConfig->getValue('CodeZee_Captcha/settings/enabled', ScopeInterface::SCOPE_STORE, $storeId);
    }

    /**
     * Is Google enabled
     *
     * @param null $storeId
     * @return boolean
     */
    public function useGoogle($storeId = null)
    {
        return $this->scopeConfig->getValue('CodeZee_Captcha/settings/use_google', ScopeInterface::SCOPE_STORE, $storeId);
    }

    /**
     * Get the site key
     *
     * @param null $storeId
     * @return string
     */
    public function getSiteKey($storeId = null)
    {
        return $this->scopeConfig->getValue('CodeZee_Captcha/settings/site_key', ScopeInterface::SCOPE_STORE, $storeId);
    }

    /**
     * Get the secret key
     *
     * @param null $storeId
     * @return string
     */
    public function getSecretKey($storeId = null)
    {
        return $this->scopeConfig->getValue('CodeZee_Captcha/settings/secret_key', ScopeInterface::SCOPE_STORE, $storeId);
    }
}