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
 * @package     Magento_Di
 * @copyright   Copyright (c) 2013 X.commerce, Inc. (http://www.magentocommerce.com)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

interface Magento_Di_Generator_CodeGenerator_Interface extends \Zend\Code\Generator\GeneratorInterface
{
    /**
     * @param string $name
     * @return Magento_Di_Generator_CodeGenerator_Interface
     */
    public function setName($name);

    /**
     * @param array $docBlock
     * @return Magento_Di_Generator_CodeGenerator_Interface
     */
    public function setClassDocBlock(array $docBlock);

    /**
     * @param array $properties
     * @return Magento_Di_Generator_CodeGenerator_Interface
     */
    public function addProperties(array $properties);

    /**
     * @param array $methods
     * @return Magento_Di_Generator_CodeGenerator_Interface
     */
    public function addMethods(array $methods);

    /**
     * @param string $extendedClass
     * @return Magento_Di_Generator_CodeGenerator_Interface
     */
    public function setExtendedClass($extendedClass);

    /**
     * setImplementedInterfaces()
     *
     * @param array $interfaces
     * @return Magento_Di_Generator_CodeGenerator_Interface
     */
    public function setImplementedInterfaces(array $interfaces);
}