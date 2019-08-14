<?php

/**
 * Frontend site seal image block.
 * 
 * PHP Version 5
 * 
 * @category  Class
 * @package   Buysafe_Siteseals
 * @author    Symantec Corporation
 * @copyright 2015 Symantec Corporation, All Rights Reserved.
 */

/**
 * Class declaration
 *
 * @category Class_Type_Block
 * @package  Buysafe_Siteseals
 * @author   Symantec Corporation
 */

class Buysafe_Siteseals_Block_Seals
    extends Mage_Core_Block_Template
{
    
    /**
     * Determine whether the merchant hash is set.
     * 
     * @return boolean
     */
    public function hasHash()
    {
         return Mage::helper('buysafe')->hasHash();
    }    
    
    /**
     * Get the merchant hash.
     * 
     * @return string|boolean
     */
    public function getHash()
    {
         return Mage::helper('buysafe')->getHash();
    }

    /**
     * Determine whether a store number is available.
     * 
     * @return boolean
     */
    public function hasStoreNumber()
    {
        return Mage::helper('buysafe')->hasStoreNumber();
    }

    /**
     * Get the current order model.
     * 
     * @return Mage_Sales_Model_Order
     */
    public function getOrder()
    {
        if (!$this->getData('order')) {
            $this->setData(
                'order',
                Mage::getModel('sales/order')->load(
                    (int) Mage::getSingleton('checkout/session')->getLastOrderId()
                )
            );
        }

        return $this->getData('order');
    }

    /**
     * Get the store number.
     * 
     * @return string|boolean
     */
    public function getStoreNumber()
    {
        return Mage::helper('buysafe')->getStoreNumber();
    }
    
    /**
     * Determine whether the feature is enabled.
     * 
     * @return boolean
     */
    public function isEnabled()
    {
        return Mage::helper('buysafe')->isEnabled();
    }

}