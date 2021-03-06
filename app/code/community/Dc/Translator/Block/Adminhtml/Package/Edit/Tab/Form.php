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
 * @copyright  Copyright (c) 2012-2015 Damián Culotta. (http://www.damianculotta.com.ar/)
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

class Dc_Translator_Block_Adminhtml_Package_Edit_Tab_Form extends Mage_Adminhtml_Block_Widget_Form
{

    public function __construct() {
        parent::__construct();
        $this->setTemplate('dc/translator/package/manage.phtml');
    }

    public function getPackage() {
        return Mage::registry('package_data');
    }
    
    public function getPackageName()
    {
        $_locale = $this->getPackage()->getLocale();
        if ($_locale) {
            return Mage::getModel('translator/package')->getFancyName($_locale);
        }
        return false;
    }

}
