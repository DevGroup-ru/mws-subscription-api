<?php
/*******************************************************************************
 * Copyright 2009-2015 Amazon Services. All Rights Reserved.
 * Licensed under the Apache License, Version 2.0 (the "License");
 *
 * You may not use this file except in compliance with the License.
 * You may obtain a copy of the License at: http://aws.amazon.com/apache2.0
 * This file is distributed on an "AS IS" BASIS, WITHOUT WARRANTIES OR
 * CONDITIONS OF ANY KIND, either express or implied. See the License for the
 * specific language governing permissions and limitations under the License.
 *******************************************************************************
 * PHP Version 5
 * @category Amazon
 * @package  MWS Subscriptions Service
 * @version  2013-07-01
 * Library Version: 2015-03-12
 * Generated: Wed Mar 11 20:33:15 GMT 2015
 */

/**
 *  @see MWSSubscriptionsService_Model
 */
require_once __DIR__ .'/../Model.php';

 /**
  * MWSSubscriptionsService_Model_GetSubscriptionInput.
  *
  * Properties:
  * <ul>
  *
  * <li>SellerId: string</li>
  * <li>MWSAuthToken: string</li>
  * <li>MarketplaceId: string</li>
  * <li>NotificationType: string</li>
  * <li>Destination: MWSSubscriptionsService_Model_Destination</li>
  *
  * </ul>
  */
 class MWSSubscriptionsService_Model_GetSubscriptionInput extends MWSSubscriptionsService_Model
 {
     public function __construct($data = null)
     {
         $this->_fields = [
    'SellerId' => ['FieldValue' => null, 'FieldType' => 'string'],
    'MWSAuthToken' => ['FieldValue' => null, 'FieldType' => 'string'],
    'MarketplaceId' => ['FieldValue' => null, 'FieldType' => 'string'],
    'NotificationType' => ['FieldValue' => null, 'FieldType' => 'string'],
    'Destination' => ['FieldValue' => null, 'FieldType' => 'MWSSubscriptionsService_Model_Destination'],
    ];
         parent::__construct($data);
     }

    /**
     * Get the value of the SellerId property.
     *
     * @return string SellerId
     */
    public function getSellerId()
    {
        return $this->_fields['SellerId']['FieldValue'];
    }

    /**
     * Set the value of the SellerId property.
     *
     * @param string sellerId
     *
     * @return this instance
     */
    public function setSellerId($value)
    {
        $this->_fields['SellerId']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if SellerId is set.
     *
     * @return true if SellerId is set
     */
    public function isSetSellerId()
    {
        return null !== $this->_fields['SellerId']['FieldValue'];
    }

    /**
     * Set the value of SellerId, return this.
     *
     * @param sellerId
     *             The new value to set
     *
     * @return This instance
     */
    public function withSellerId($value)
    {
        $this->setSellerId($value);

        return $this;
    }

    /**
     * Get the value of the MWSAuthToken property.
     *
     * @return string MWSAuthToken
     */
    public function getMWSAuthToken()
    {
        return $this->_fields['MWSAuthToken']['FieldValue'];
    }

    /**
     * Set the value of the MWSAuthToken property.
     *
     * @param string mwsAuthToken
     *
     * @return this instance
     */
    public function setMWSAuthToken($value)
    {
        $this->_fields['MWSAuthToken']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if MWSAuthToken is set.
     *
     * @return true if MWSAuthToken is set
     */
    public function isSetMWSAuthToken()
    {
        return null !== $this->_fields['MWSAuthToken']['FieldValue'];
    }

    /**
     * Set the value of MWSAuthToken, return this.
     *
     * @param mwsAuthToken
     *             The new value to set
     *
     * @return This instance
     */
    public function withMWSAuthToken($value)
    {
        $this->setMWSAuthToken($value);

        return $this;
    }

    /**
     * Get the value of the MarketplaceId property.
     *
     * @return string MarketplaceId
     */
    public function getMarketplaceId()
    {
        return $this->_fields['MarketplaceId']['FieldValue'];
    }

    /**
     * Set the value of the MarketplaceId property.
     *
     * @param string marketplaceId
     *
     * @return this instance
     */
    public function setMarketplaceId($value)
    {
        $this->_fields['MarketplaceId']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if MarketplaceId is set.
     *
     * @return true if MarketplaceId is set
     */
    public function isSetMarketplaceId()
    {
        return null !== $this->_fields['MarketplaceId']['FieldValue'];
    }

    /**
     * Set the value of MarketplaceId, return this.
     *
     * @param marketplaceId
     *             The new value to set
     *
     * @return This instance
     */
    public function withMarketplaceId($value)
    {
        $this->setMarketplaceId($value);

        return $this;
    }

    /**
     * Get the value of the NotificationType property.
     *
     * @return string NotificationType
     */
    public function getNotificationType()
    {
        return $this->_fields['NotificationType']['FieldValue'];
    }

    /**
     * Set the value of the NotificationType property.
     *
     * @param string notificationType
     *
     * @return this instance
     */
    public function setNotificationType($value)
    {
        $this->_fields['NotificationType']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if NotificationType is set.
     *
     * @return true if NotificationType is set
     */
    public function isSetNotificationType()
    {
        return null !== $this->_fields['NotificationType']['FieldValue'];
    }

    /**
     * Set the value of NotificationType, return this.
     *
     * @param notificationType
     *             The new value to set
     *
     * @return This instance
     */
    public function withNotificationType($value)
    {
        $this->setNotificationType($value);

        return $this;
    }

    /**
     * Get the value of the Destination property.
     *
     * @return Destination Destination
     */
    public function getDestination()
    {
        return $this->_fields['Destination']['FieldValue'];
    }

    /**
     * Set the value of the Destination property.
     *
     * @param MWSSubscriptionsService_Model_Destination destination
     *
     * @return this instance
     */
    public function setDestination($value)
    {
        $this->_fields['Destination']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if Destination is set.
     *
     * @return true if Destination is set
     */
    public function isSetDestination()
    {
        return null !== $this->_fields['Destination']['FieldValue'];
    }

    /**
     * Set the value of Destination, return this.
     *
     * @param destination
     *             The new value to set
     *
     * @return This instance
     */
    public function withDestination($value)
    {
        $this->setDestination($value);

        return $this;
    }
 }
