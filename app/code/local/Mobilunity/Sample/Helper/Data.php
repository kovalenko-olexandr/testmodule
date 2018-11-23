<?php
/**
 * @category    local
 * @package     Mobilunity_Sample
 * @author      Kovalenko Olexandr <olexandr.filin@gmail.com>
 */

class Mobilunity_Sample_Helper_Data extends Mage_Core_Helper_Abstract
{
    /**
     * Checking status module
     *
     * @return int
    */

    public function isEnabled()
    {
        return (int) Mage::getStoreConfig('mobilunity_options/sample_group/enable', Mage::app()->getStore());
    }

    /**
     * Get decimal factor
     *
     * @return float|int
     */
    public function getDecimalFactor()
    {
        $decimalFactor = Mage::getStoreConfig('mobilunity_options/sample_group/decimal_factor', Mage::app()->getStore());
        $result = ($decimalFactor !== '') ? (float) $decimalFactor : 1;
        return $result;
    }
}
