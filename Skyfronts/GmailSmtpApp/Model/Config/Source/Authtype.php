<?php
/**
 * Copyright © 2015 Skyfronts. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Skyfronts\GmailSmtpApp\Model\Config\Source;

class Authtype implements \Magento\Framework\Option\ArrayInterface
{
    /**
     * @return array
     */
    public function toOptionArray()
    {
        return [
            ['value' => 'ssl', 'label' => 'SSL'],
            ['value' => 'tls', 'label' => 'TLS']
        ];
    }
}
