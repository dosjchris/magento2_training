<?php
/**
 * Created by PhpStorm.
 * User: training
 * Date: 11/29/17
 * Time: 10:20 AM
 */
namespace Training\Seller\Api\Data;

use Magento\Framework\Api\SearchResultsInterface;


/**
 * Seller Search result Data Interface
 *
 * @api
 */
interface SellerSearchResultsInterface extends SearchResultsInterface
{
    /**
     * Get seller list
     *
     * @return \Training\Seller\Api\Data\SellerInterface[]
     */
    public function getItems();

    /**
     * Set seller list
     *
     * @param \Training\Seller\Api\Data\SellerInterface[] $items list of sellers
     *
     * @return $this
     */
    public function setItems(array $items);

}