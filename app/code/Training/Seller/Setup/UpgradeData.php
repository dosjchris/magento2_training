<?php
/**
 * Created by PhpStorm.
 * User: training
 * Date: 12/1/17
 * Time: 11:47 AM
 */

namespace Training\Seller\Setup;


use Magento\Customer\Setup\CustomerSetupFactory;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\Setup\UpgradeSchemaInterface;

class UpgradeData implements UpgradeSchemaInterface
{
    /**
     * @var CustomerSetupFactory
     */
    private $customerSetupFactory;

    /**
     * @param CustomerSetupFactory $customerSetupFactory
     */
    public function __construct(CustomerSetupFactory $customerSetupFactory)
    {

        $this->customerSetupFactory = $customerSetupFactory;
    }

    /**
     * Upgrades DB schema for a module
     *
     * @param SchemaSetupInterface $setup
     * @param ModuleContextInterface $context
     * @return void
     */
    public function upgrade(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        if (version_compare($context->getVersion(), '1.0.2', '<')) {
            $this->addCustomerAttribute($setup);
        }
    }

    /**
     * @param SchemaSetupInterface $setup
     */
    protected function addCustomerAttribute(SchemaSetupInterface $setup)
    {
        $customerSetup = $this->customerSetupFactory->Create(['setup' => $setup]);
    }

}