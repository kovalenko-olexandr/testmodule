<?php
/**
 * @category    local
 * @package     Mobilunity_Sample
 * @author      Kovalenko Olexandr <olexandr.filin@gmail.com>
 */

class Mobilunity_Sample_Model_Resource_Coefficient extends Mage_Core_Model_Resource_Db_Abstract
{
    protected function _construct()
    {
        $this->_init('mobilunity_sample/coefficient', 'coefficient_id');
    }
}
