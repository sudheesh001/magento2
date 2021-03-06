<?php
/**
 * Magento
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@magentocommerce.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade Magento to newer
 * versions in the future. If you wish to customize Magento for your
 * needs please refer to http://www.magentocommerce.com for more information.
 *
 * @category    Magento
 * @package     Mage_Catalog
 * @subpackage  integration_tests
 * @copyright   Copyright (c) 2013 X.commerce, Inc. (http://www.magentocommerce.com)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

/**
 * Test class for Mage_Catalog_Block_Product_List_Crosssell.
 *
 * @magentoDataFixture Mage/Catalog/_files/products_crosssell.php
 */
class Mage_Catalog_Block_Product_List_CrosssellTest extends PHPUnit_Framework_TestCase
{
    public function testAll()
    {
        Mage::app()->getArea(Mage_Core_Model_App_Area::AREA_FRONTEND)->load();
        $product = Mage::getModel('Mage_Catalog_Model_Product');
        $product->load(2);
        Mage::register('product', $product);
        /** @var $block Mage_Catalog_Block_Product_List_Crosssell */
        $block = Mage::app()->getLayout()->createBlock('Mage_Catalog_Block_Product_List_Crosssell');
        $block->setLayout(Mage::getModel('Mage_Core_Model_Layout'));
        $block->setTemplate('Mage_Checkout::cart/crosssell.phtml');
        $block->setItemCount(1);

        $html = $block->toHtml();
        $this->assertNotEmpty($html);
        $this->assertContains('Simple Cross Sell', $html); /* name */
        $this->assertContains('product/1/', $html);  /* part of url */
        $this->assertInstanceOf('Mage_Catalog_Model_Resource_Product_Link_Product_Collection', $block->getItems());
    }
}
