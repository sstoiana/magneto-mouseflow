<?php

class Magneto_Mouseflow_Helper_Data extends Mage_Core_Helper_Abstract
{
    /**
     * Config paths for using throughout the code
     */
    const XML_PATH_ACTIVE  = 'mouseflow/tracking/active';
    const XML_PATH_ACCOUNT = 'mouseflow/tracking/account';

    /**
     * Whether Mouseflow is ready to use
     *
     * @param mixed $store
     * @return bool
     */
    public function isMouseflowAvailable($store = null)
    {
        $accountId = Mage::getStoreConfig(self::XML_PATH_ACCOUNT, $store);
        return $accountId && Mage::getStoreConfigFlag(self::XML_PATH_ACTIVE, $store);
    }
}
