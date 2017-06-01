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
  * MWSSubscriptionsService_Model_DeregisterDestinationResponse.
  *
  * Properties:
  * <ul>
  *
  * <li>DeregisterDestinationResult: MWSSubscriptionsService_Model_DeregisterDestinationResult</li>
  * <li>ResponseMetadata: MWSSubscriptionsService_Model_ResponseMetadata</li>
  * <li>ResponseHeaderMetadata: MWSSubscriptionsService_Model_ResponseHeaderMetadata</li>
  *
  * </ul>
  */
 class MWSSubscriptionsService_Model_DeregisterDestinationResponse extends MWSSubscriptionsService_Model
 {
     public function __construct($data = null)
     {
         $this->_fields = [
    'DeregisterDestinationResult' => ['FieldValue' => null, 'FieldType' => 'MWSSubscriptionsService_Model_DeregisterDestinationResult'],
    'ResponseMetadata' => ['FieldValue' => null, 'FieldType' => 'MWSSubscriptionsService_Model_ResponseMetadata'],
    'ResponseHeaderMetadata' => ['FieldValue' => null, 'FieldType' => 'MWSSubscriptionsService_Model_ResponseHeaderMetadata'],
    ];
         parent::__construct($data);
     }

    /**
     * Get the value of the DeregisterDestinationResult property.
     *
     * @return DeregisterDestinationResult DeregisterDestinationResult
     */
    public function getDeregisterDestinationResult()
    {
        return $this->_fields['DeregisterDestinationResult']['FieldValue'];
    }

    /**
     * Set the value of the DeregisterDestinationResult property.
     *
     * @param MWSSubscriptionsService_Model_DeregisterDestinationResult deregisterDestinationResult
     *
     * @return \MWSSubscriptionsService_Model_DeregisterDestinationResponse
     */
    public function setDeregisterDestinationResult($value)
    {
        $this->_fields['DeregisterDestinationResult']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if DeregisterDestinationResult is set.
     *
     * @return true if DeregisterDestinationResult is set
     */
    public function isSetDeregisterDestinationResult()
    {
        return null !== $this->_fields['DeregisterDestinationResult']['FieldValue'];
    }

    /**
     * Set the value of DeregisterDestinationResult, return this.
     *
     * @param deregisterDestinationResult
     *             The new value to set
     *
     * @return \MWSSubscriptionsService_Model_DeregisterDestinationResponse
     */
    public function withDeregisterDestinationResult($value)
    {
        $this->setDeregisterDestinationResult($value);

        return $this;
    }

    /**
     * Get the value of the ResponseMetadata property.
     *
     * @return ResponseMetadata ResponseMetadata
     */
    public function getResponseMetadata()
    {
        return $this->_fields['ResponseMetadata']['FieldValue'];
    }

    /**
     * Set the value of the ResponseMetadata property.
     *
     * @param MWSSubscriptionsService_Model_ResponseMetadata responseMetadata
     *
     * @return \MWSSubscriptionsService_Model_DeregisterDestinationResponse
     */
    public function setResponseMetadata($value)
    {
        $this->_fields['ResponseMetadata']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if ResponseMetadata is set.
     *
     * @return true if ResponseMetadata is set
     */
    public function isSetResponseMetadata()
    {
        return null !== $this->_fields['ResponseMetadata']['FieldValue'];
    }

    /**
     * Set the value of ResponseMetadata, return this.
     *
     * @param responseMetadata
     *             The new value to set
     *
     * @return \MWSSubscriptionsService_Model_DeregisterDestinationResponse
     */
    public function withResponseMetadata($value)
    {
        $this->setResponseMetadata($value);

        return $this;
    }

    /**
     * Get the value of the ResponseHeaderMetadata property.
     *
     * @return string ResponseHeaderMetadata ResponseHeaderMetadata
     */
    public function getResponseHeaderMetadata()
    {
        return $this->_fields['ResponseHeaderMetadata']['FieldValue'];
    }

    /**
     * Set the value of the ResponseHeaderMetadata property.
     *
     * @param MWSSubscriptionsService_Model_ResponseHeaderMetadata responseHeaderMetadata
     *
     * @return \MWSSubscriptionsService_Model_DeregisterDestinationResponse
     */
    public function setResponseHeaderMetadata($value)
    {
        $this->_fields['ResponseHeaderMetadata']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if ResponseHeaderMetadata is set.
     *
     * @return true if ResponseHeaderMetadata is set
     */
    public function isSetResponseHeaderMetadata()
    {
        return null !== $this->_fields['ResponseHeaderMetadata']['FieldValue'];
    }

    /**
     * Set the value of ResponseHeaderMetadata, return this.
     *
     * @param responseHeaderMetadata
     *             The new value to set
     *
     * @return \MWSSubscriptionsService_Model_DeregisterDestinationResponse
     */
    public function withResponseHeaderMetadata($value)
    {
        $this->setResponseHeaderMetadata($value);

        return $this;
    }
    /**
     * Construct MWSSubscriptionsService_Model_DeregisterDestinationResponse from XML string.
     *
     * @param $xml
     *        XML string to construct from
     *
     * @return MWSSubscriptionsService_Model_DeregisterDestinationResponse
     */
    public static function fromXML($xml)
    {
        $dom = new DOMDocument();
        $dom->loadXML($xml);
        $xpath = new DOMXPath($dom);
        $response = $xpath->query("//*[local-name()='DeregisterDestinationResponse']");
        if ($response->length == 1) {
            return new self(($response->item(0)));
        }

        throw new Exception('Unable to construct MWSSubscriptionsService_Model_DeregisterDestinationResponse from provided XML. 
                              Make sure that DeregisterDestinationResponse is a root element');
    }
    /**
     * XML Representation for this object.
     *
     * @return string XML for this object
     */
    public function toXML()
    {
        $xml = '';
        $xml .= '<DeregisterDestinationResponse xmlns="http://mws.amazonservices.com/schema/Subscriptions/2013-07-01">';
        $xml .= $this->_toXMLFragment();
        $xml .= '</DeregisterDestinationResponse>';

        return $xml;
    }
 }
