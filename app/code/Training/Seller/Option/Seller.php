<?php
/**
 * Created by PhpStorm.
 * User: training
 * Date: 12/1/17
 * Time: 12:01 PM
 */

namespace Training\Seller\Option;

use Magento\Eav\Model\Entity\Attribute\Source\AbstractSource;

class Seller extends AbstractSource
{

    public function __construct(sellerCollectionFactory $sellerCollectionFactory)
    {
    }

    /**
     * Retrieve All options
     *
     * @return array
     */
    public function getAllOptions()
    {
        // TODO: Implement getAllOptions() method.
    }
}