<?php
/**
 * @category    local
 * @package     Mobilunity_Sample
 * @author      Kovalenko Olexandr <olexandr.filin@gmail.com>
 */

class Mobilunity_Sample_Model_Observer
{
    /**
     * Add data in mobilunity_sample_coefficient table
     *
     * @param Varien_Event_Observer $observer
     */
    function setDataDecimalFactor($observer)
    {
        if (Mage::helper('mobilunity_sample')->isEnabled() === 1) {
            $orderData = $observer->getEvent()->getOrder();
            $decimalFactor = Mage::helper('mobilunity_sample')->getDecimalFactor();
            try {
                Mage::getModel('mobilunity_sample/coefficient')
                    ->setOrderId($orderData->getEntityId())
                    ->setDecimalFactor($decimalFactor)
                    ->setValue($orderData->getGrandTotal() * $decimalFactor)
                    ->save();
            } catch (Exception $e) {
                Mage::logException($e);
            }
        }
    }
}
