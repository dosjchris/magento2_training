<?php
/**
 * Created by PhpStorm.
 * User: training
 * Date: 11/29/17
 * Time: 1:50 PM
 */

namespace Training\Seller\Model\Repository;


use Magento\Framework\Api\SearchCriteriaInterface;
use Training\Seller\Api\SellerRepositoryInterface;
use Training\Seller\Api\Data\SellerInterfaceFactory;
use Training\Seller\Api\Data\SellerInterface;
use Training\Seller\Api\Data\SellerSearchResultsInterfaceFactory;
use Training\Seller\Model\ResourceModel\Seller as SellerResourceModel;
use Training\Seller\Model\Repository\ManagementFactory as RepositoryManagementFactory;
use Training\Seller\Model\Repository\Management as RepositoryManagement;

class Seller implements SellerRepositoryInterface
{
    /**
     * @var RepositoryManagement
     */
    protected $sellerRepositoryManagement;


    public function __construct(
        SellerInterfaceFactory              $objectFactory,
        SellerResourceModel                 $objectResource,
        SellerSearchResultsInterfaceFactory $searchResultsFactory,
        RepositoryManagementFactory         $repositoryManagementFactory
    )
    {
        $this->sellerRepositoryManagement = $repositoryManagementFactory->create();

        $this->sellerRepositoryManagement
            ->setObjectFactory($objectFactory)
            ->setObjectResource($objectResource)
            ->setSearchResultFactory($searchResultsFactory)
            ->setIdentifierFieldName(SellerInterface::FIELD_IDENTIFIER);
    }

    /**
     * @inheritdoc
     */
    public function getById($objectId)
    {
        return $this->sellerRepositoryManagement->getEntityById($objectId);
    }

    /**
     * @inheritdoc
     */
    public function getByIdentifier($objectIdentifier)
    {

        return $this->sellerRepositoryManagement->getEntityByIdentifier($objectIdentifier);
    }

    /**
     * @inheritdoc
     */
    public function getList(SearchCriteriaInterface $searchCriteria = null)
    {
        return $this->sellerRepositoryManagement->getEntities($searchCriteria);
    }

    /**
     * @inheritdoc
     */
    public function save(SellerInterface $object)
    {
        return $this->sellerRepositoryManagement->saveEntity($object);
    }

    /**
     * @inheritdoc
     */
    public function deleteById($objectId)
    {
        return $this->sellerRepositoryManagement->deleteEntityById($objectId);
    }

    /**
     * @inheritdoc
     */
    public function deleteByIdentifier($objectIdentifier)
    {
        return $this->sellerRepositoryManagement->deleteEntityByIdentifier($objectIdentifier);
    }

}