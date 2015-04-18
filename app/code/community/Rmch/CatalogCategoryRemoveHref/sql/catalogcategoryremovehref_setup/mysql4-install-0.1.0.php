<?php
/**
 */
$installer = $this;

$installer->startSetup();

$installer->addAttribute('catalog_category', 'remove_href', array(
    'group'             => 'General Information',
    'type'              => 'int',//can be int, varchar, decimal, text, datetime
    'backend'           => '',
    'frontend_input'    => '',
    'frontend'          => '',
    'label'             => 'Remove Hyperlink',
    'input'             => 'select', //text, textarea, select, file, image, multilselect
    'default'           => 0,  //  Set to False
    'class'             => '',
    'source'            => 'eav/entity_attribute_source_boolean',//this is necessary for select and multilelect, for the rest leave it blank
    'global'            => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_GLOBAL,//scope can be SCOPE_STORE or SCOPE_GLOBAL or SCOPE_WEBSITE
    'visible'           => true,
    'frontend_class'    => '',
    'required'          => false,//or true
    'user_defined'      => true,
    'position'          => 110,//any number will do
));

$installer->endSetup();