<?php
/**
 * Created by PhpStorm.
 * User: training
 * Date: 11/29/17
 * Time: 10:08 AM
 */
namespace Training\Seller\Api;

use Magento\Framework\Api\SearchCriteriaInterface;
use Training\Seller\Api\Data\SellerInterface;
/**
 * Seller Repository Interface
 *
 * @api
 */

interface SellerRepositoryInterface
{
    /**
     * retourne Seller par son id
     *
     * @param int $objectId
     *
     * @return \Training\Seller\Api\Data\SellerInterface
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     */
    public function getById($objectId);


    /**
     * Retourne Seller par son identifiant
     *
     * @param string $objectIdentifier
     *
     * @return \Training\Seller\Api\Data\SellerInterface
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     */
    public function getByIdentifier($identifier);


    /**
     * Retourne liste de Sellers selon un critere
     *
     * @param \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria search criteria
     *
     * @return \Training\Seller\Api\Data\SellerSearchResultsInterface
     */
    public function getList(SearchCriteriaInterface $searchCriteria = null);

    /**
     * sauve un Seller
     *
     * @param \Training\Seller\Api\Data\SellerInterface $object
     *
     * @return \Training\Seller\Api\Data\SellerInterface
     * @throws \Magento\Framework\Exception\CouldNotSaveException
     */
    public function save (SellerInterface $object);


    /**
     * Supprime un Seller par son id
     *
     * @param int $objectId
     *
     * @return bool
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     * @throws \Magento\Framework\Exception\CouldNotDeleteException
     */
    public function deleteById ($objectId);


    /**
     * Sauve un Seller par son identifiant
     *
     * @param string $objectIdentifier
     *
     * @return bool
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     * @throws \Magento\Framework\Exception\CouldNotDeleteException
     */
    public function deleteByIdentifier ($objectIdentifier);

}