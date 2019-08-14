<?php 
class Buysafe_Siteseals_Helper_Data extends Mage_Core_Helper_Abstract
{
    public function hasHash()
    {
        if(Mage::getStoreConfig('buysafe_options/buysafe_config/buysafe_hash')){
        	return true;
        }
    }
    
    public function getHash()
    {
        if($hash = Mage::getStoreConfig('buysafe_options/buysafe_config/buysafe_hash')){
        	return $hash;
        }
    }

    public function hasStoreNumber()
    {
        if(Mage::getStoreConfig('buysafe_options/buysafe_config/buysafe_shop')){
            return true;
        }
    }

    public function getStoreNumber()
    {
        if($storeNumber = Mage::getStoreConfig('buysafe_options/buysafe_config/buysafe_shop')){
            return $storeNumber;
        }
    }

    public function isEnabled()
    {
        return $this->hasHash() ? true : false;
    } 
        
    public function register()
    {
    	$modules = Mage::getConfig()->getNode('modules')->children();
		$modulesArray = (array)$modules;		
		if ($modulesArray[base64_decode('RW50ZXJwcmlzZV9QY2k=')]->active == 'false') {
			return base64_decode('UHJvZmVzc2lvbmFs');			
		} elseif (isset($modulesArray[base64_decode('RW50ZXJwcmlzZV9FbnRlcnByaXNl')])) {
		    return base64_decode('RW50ZXJwcmlzZQ==');
		} else {
			return base64_decode('Q29tbXVuaXR5');
		}
    }
    
}