<?php
/**
 * Dc_Translator
 * 
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 *
 * @category   Dc
 * @package    Dc_Translator
 * @copyright  Copyright (c) 2014 Damián Culotta. (http://www.damianculotta.com.ar/)
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

class Dc_Translator_Block_Adminhtml_Key_Edit_Tabs extends Mage_Adminhtml_Block_Widget_Tabs
{

    public function __construct()
    {
        parent::__construct();
        $this->setId('key_tabs');
        $this->setDestElementId('edit_form');
        $this->setTitle(Mage::helper('translator')->__('Key'));
    }

    protected function _prepareLayout()
    {
        return parent::_prepareLayout();
    }

    protected function _beforeToHtml()
    {
        $this->addTab('form_section', array(
            'label'     => Mage::helper('translator')->__('Key'),
            'title'     => Mage::helper('translator')->__('Key'),
            'content'   => $this->getLayout()->createBlock('translator/adminhtml_key_edit_tab_form')->toHtml(),
        ));
        return parent::_beforeToHtml();
    }

}
