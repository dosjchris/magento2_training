<?php
namespace Training\Seller\Model;

use Magento\Framework\DataObject\IdentityInterface;
use Magento\Framework\Model\AbstractModel;
use Training\Seller\Api\Data\SellerInterface;

/**
 * Created by PhpStorm.
 * User: training
 * Date: 11/29/17
 * Time: 10:54 AM
 */
class Seller extends AbstractModel implements SellerInterface, IdentityInterface
{

    const CACHE_TAG = 'training_seller';

    protected $_cacheTag = self::CACHE_TAG;


    /**
     * Magento Constructor
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init(
            \Training\Seller\Model\ResourceModel\Seller::class
        );
    }


    /**
     * Return unique ID(s) for each object in system
     *
     * @return string[]
     *
     */
    public function getIdentities()
    {
        return [self::CACHE_TAG . '_' . $this->getId(), self::CACHE_TAG . '_' . $this->getIdentifier()];
    }

    /**
     * Get field: seller_id
     *
     * @return int|null
     */
    public function getSellerId()
    {

        return $this->getId();
    }

    /**
     * Get field: identifier
     *
     * @return string
     */
    public function getIdentifier()
    {

        return (string) $this->getData(self::FIELD_IDENTIFIER);
    }

    /**
     * Get field: name
     *
     * @return string
     */
    public function getName()
    {

        return (string) $this->getData(self::FIELD_NAME);
    }

    /**
     * Get field: created_at
     *
     * @return string|null
     */
    public function getCreatedAt()
    {

        return (string) $this->getData(self::FIELD_CREATED_AT);
    }

    /**
     * Get field: updated_at
     *
     * @return string|null
     */
    public function getUpdatedAt()
    {
         return (string) $this->getData(self::FIELD_UPDATED_AT);

    }

    /**
     * Get field: description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return (string) $this->getData(self::FIELD_DESCRIPTION);

    }


    /**
     * Set field: seller_id
     *
     * @param int $value
     *
     * @return SellerInterface
     */
    public function setSellerId($value)
    {

        return $this->setId((int) $value);
    }

    /**
     * Set field: identifier
     *
     * @param string $value
     *
     * @return SellerInterface
     */
    public function setIdentifier($value)
    {
        return $this->setData(self::FIELD_IDENTIFIER, (string) $value);
    }

    /**
     * Set field: name
     *
     * @param string $value
     *
     * @return SellerInterface
     */
    public function setName($value)
    {
        return $this->setData(self::FIELD_NAME, (string) $value);
    }

    /**
     * Set field: created_at
     *
     * @param string $value
     *
     * @return SellerInterface
     */
    public function setCreatedAt($value)
    {
          return $this->setData(self::FIELD_CREATED_AT, (string) $value);
    }

    /**
     * Set field: updated_at
     *
     * @param string $value
     *
     * @return SellerInterface
     */
    public function setUpdatedAt($value)
    {
         return $this->setData(self::FIELD_UPDATED_AT, (string) $value);
    }

    /**
     * Set field: Description
     *
     * @param string $value
     *
     * @return SellerInterface
     */
    public function setDescription($value)
    {
        if ($value !== null) {
            $value = (string) $value;
        }

        return $this->setData(self::FIELD_DESCRIPTION, $value);
    }


    public function populateFromArray(array $values)
    {
        $this->setIdentifier($values['identifier']);
        $this->setName($values['name']);
        if (array_key_exists("description",$values)) {
           $this->setDescription($values['description']);
        }

        return $this;
    }

    /**
     * Get field: description
     *
     * @return string|null
     */

}