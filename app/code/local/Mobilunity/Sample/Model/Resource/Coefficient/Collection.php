<?php
/**
 * @category    local
 * @package     Mobilunity_Sample
 * @author      Kovalenko Olexandr <olexandr.filin@gmail.com>
 */

class Mobilunity_Sample_Model_Resource_Coefficient_Collection extends Mage_Core_Model_Resource_Db_Collection_Abstract
{
    public function _construct()
    {
        $this->_init('mobilunity_sample/coefficient');
    }
}
