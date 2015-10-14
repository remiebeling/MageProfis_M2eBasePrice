<?php
class MageProfis_M2eBasePrice_Model_Observer_Baseprice
extends Mage_Core_Model_Abstract
{   
    public $_product = null;
    
    /**
     * convert and set baseprices for ebay and Amazon
     * @param object $observer
     */
    public function setM2eBasePrices($observer)
    {
        $_product = $this->getProduct($observer);
        
        $this->setEbayBasePriceAmount($_product);
        $this->setEbayBasePriceUnit($_product);
        
        $this->setAmazonBasePriceData($_product);
    }
    
    /**
     * get Product data
     * @param object $observer
     * @return object
     */
    public function getProduct($observer)
    {
        return $observer->getProduct();
    }
    
    /**
     * set Base Price amount for eBay
     * @param object $_product
     */
    public function setEbayBasePriceAmount($_product)
    {
        if($_product->getBasePriceAmount() != "" && $_product->getBasePriceUnit() != "")
        {
            $basepriceamount = (string)$_product->getBasePriceAmount();
            
            $unit = strtolower($_product->getBasePriceUnit());

            switch ( $unit ){
                case 'g':
                    $basepriceamount = round(intval($basepriceamount) / 100, 2);
                    break;
                    
                case 'ml':
                    $basepriceamount = round(intval($basepriceamount) / 100, 2);
                    break;
            }

            $_product->setData('m2e_ebay_base_price_unit', $unit);
            
            
            
            $_product->setData('m2e_ebay_base_price_amount', str_replace('.', ',', $basepriceamount));
        }
        //Zend_Debug::dump($_product->getData()); die;
        
    }
    
    public function setEbayBasePriceUnit($_product)
    {
        if($_product->getBasePriceUnit() != "")
        {
            $unit = strtolower($_product->getBasePriceUnit());
            
            switch ( $unit ){
                case 'g':
                    $unit = '100 g';
                    break;
                    
                case 'ml':
                    $unit = '100 ml';
                    break;
                    
                case 'l':
                    $unit = 'L';
                    break;
            }
            
            $_product->setData('m2e_ebay_base_price_unit', $unit);
        }
    }
    
    public function setAmazonBasePriceData($_product)
    {
        $basepriceunit = $_product->getBasePriceUnit();
        $basepriceamount = $_product->getBasePriceAmount();
        if($basepriceamount != "")
        {
            $float = (float)$basepriceamount;
            $int = (int)$basepriceamount;
            if($float != $int)
            {
                $basepriceamount = $float * 1000;
                switch($basepriceunit)
                {
                    case 'KG';
                        $basepriceunit = 'G';
                    break;
                    case 'G';
                        $basepriceunit = 'MG';
                    case 'L';
                        $basepriceunit = 'milliliter';
                    break;
                }
                    
                
            }
        }
        if($basepriceunit == 'L')
        {
            $basepriceunit = 'liter';
        }
        $_product->setData('m2e_amazon_base_price_amount', $basepriceamount);
        $_product->setData('m2e_amazon_base_price_unit', $basepriceunit);
    }
            
}