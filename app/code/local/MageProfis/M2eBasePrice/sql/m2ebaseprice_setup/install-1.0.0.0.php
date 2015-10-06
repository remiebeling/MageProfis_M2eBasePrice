<?php
$installer = $this;
/* @var MageProfis_ChildrenCategories_Model_Resource_Setup $installer */
$installer->startSetup();

$installer->addAttribute('catalog_product', 'm2e_amazon_base_price_unit', array(
    'group'                         => 'eBay / Amazon',
    'label'                         => 'Amazon BasePrice Einheit',
    'type'                          => 'text',
    'input'                         => 'text',
    'visible'                       => true,
    'required'                      => false,
    'user_defined'                  => true,
    'searchable'                    => false,
    'filterable'                    => false,
    'comparable'                    => false,
    'visible_on_front'              => false,
    'visible_in_advanced_search'    => false,
    'unique'                        => false,
    'global'                        => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE,
    'used_in_product_listing'       => 1,
));

$installer->addAttribute('catalog_product', 'm2e_amazon_base_price_amount', array(
    'group'                         => 'eBay / Amazon',
    'label'                         => 'Amazon BasePrice Wert',
    'type'                          => 'text',
    'input'                         => 'text',
    'visible'                       => true,
    'required'                      => false,
    'user_defined'                  => true,
    'searchable'                    => false,
    'filterable'                    => false,
    'comparable'                    => false,
    'visible_on_front'              => false,
    'visible_in_advanced_search'    => false,
    'unique'                        => false,
    'global'                        => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE,
    'used_in_product_listing'       => 1,
));

$installer->addAttribute('catalog_product', 'm2e_ebay_base_price_unit', array(
    'group'                         => 'eBay / Amazon',
    'label'                         => 'eBay BasePrice Einheit',
    'type'                          => 'text',
    'input'                         => 'text',
    'visible'                       => true,
    'required'                      => false,
    'user_defined'                  => true,
    'searchable'                    => false,
    'filterable'                    => false,
    'comparable'                    => false,
    'visible_on_front'              => false,
    'visible_in_advanced_search'    => false,
    'unique'                        => false,
    'global'                        => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE,
    'used_in_product_listing'       => 1,
));

$installer->addAttribute('catalog_product', 'm2e_ebay_base_price_amount', array(
    'group'                         => 'eBay / Amazon',
    'label'                         => 'eBay BasePrice Wert',
    'type'                          => 'text',
    'input'                         => 'text',
    'visible'                       => true,
    'required'                      => false,
    'user_defined'                  => true,
    'searchable'                    => false,
    'filterable'                    => false,
    'comparable'                    => false,
    'visible_on_front'              => false,
    'visible_in_advanced_search'    => false,
    'unique'                        => false,
    'global'                        => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE,
    'used_in_product_listing'       => 1,
));
$installer->endSetup();
