<?php

namespace CodeZee\Captcha\Model\Config\Source;

class FormSelect implements \Magento\Framework\Option\ArrayInterface
{
    public function toOptionArray()
    {
        return [
            ['value' => '1', 'label' => __('Contact Form')],
            ['value' => '2', 'label' => __('Create Account')],
            ['value' => '3', 'label' => __('Customer Login')],
            ['value' => '4', 'label' => __('Forgot Password')]
        ];
    }
}