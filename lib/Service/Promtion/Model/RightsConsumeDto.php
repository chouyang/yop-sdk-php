<?php
/**
 * RightsConsumeDto
 *
 * PHP version 5
 *
 * @category Class
 * @package  Yeepay\Yop\Sdk\
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * 营销
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 1.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.13
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Yeepay\Yop\Sdk\Service\Promtion\Model;

use \ArrayAccess;
use Yeepay\Yop\Sdk\Model\ModelInterface;
use Yeepay\Yop\Sdk\Utils\ObjectSerializer;

/**
 * RightsConsumeDto Class Doc Comment
 *
 * @category Class
 * @description 请修改我
 * @package  Yeepay\Yop\Sdk\
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class RightsConsumeDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'RightsConsumeDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'consumeTime' => 'string',
        'brandName' => 'string',
        'rightsCode' => 'string',
        'rightsTitle' => 'string',
        'requestNo' => 'string',
        'consumeStatus' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'consumeTime' => null,
        'brandName' => null,
        'rightsCode' => null,
        'rightsTitle' => null,
        'requestNo' => null,
        'consumeStatus' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'consumeTime' => 'consumeTime',
        'brandName' => 'brandName',
        'rightsCode' => 'rightsCode',
        'rightsTitle' => 'rightsTitle',
        'requestNo' => 'requestNo',
        'consumeStatus' => 'consumeStatus'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'consumeTime' => 'setConsumeTime',
        'brandName' => 'setBrandName',
        'rightsCode' => 'setRightsCode',
        'rightsTitle' => 'setRightsTitle',
        'requestNo' => 'setRequestNo',
        'consumeStatus' => 'setConsumeStatus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'consumeTime' => 'getConsumeTime',
        'brandName' => 'getBrandName',
        'rightsCode' => 'getRightsCode',
        'rightsTitle' => 'getRightsTitle',
        'requestNo' => 'getRequestNo',
        'consumeStatus' => 'getConsumeStatus'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['consumeTime'] = isset($data['consumeTime']) ? $data['consumeTime'] : null;
        $this->container['brandName'] = isset($data['brandName']) ? $data['brandName'] : null;
        $this->container['rightsCode'] = isset($data['rightsCode']) ? $data['rightsCode'] : null;
        $this->container['rightsTitle'] = isset($data['rightsTitle']) ? $data['rightsTitle'] : null;
        $this->container['requestNo'] = isset($data['requestNo']) ? $data['requestNo'] : null;
        $this->container['consumeStatus'] = isset($data['consumeStatus']) ? $data['consumeStatus'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets consumeTime
     *
     * @return string
     */
    public function getConsumeTime()
    {
        return $this->container['consumeTime'];
    }

    /**
     * Sets consumeTime
     *
     * @param string $consumeTime consumeTime
     *
     * @return $this
     */
    public function setConsumeTime($consumeTime)
    {
        $this->container['consumeTime'] = $consumeTime;

        return $this;
    }

    /**
     * Gets brandName
     *
     * @return string
     */
    public function getBrandName()
    {
        return $this->container['brandName'];
    }

    /**
     * Sets brandName
     *
     * @param string $brandName brandName
     *
     * @return $this
     */
    public function setBrandName($brandName)
    {
        $this->container['brandName'] = $brandName;

        return $this;
    }

    /**
     * Gets rightsCode
     *
     * @return string
     */
    public function getRightsCode()
    {
        return $this->container['rightsCode'];
    }

    /**
     * Sets rightsCode
     *
     * @param string $rightsCode rightsCode
     *
     * @return $this
     */
    public function setRightsCode($rightsCode)
    {
        $this->container['rightsCode'] = $rightsCode;

        return $this;
    }

    /**
     * Gets rightsTitle
     *
     * @return string
     */
    public function getRightsTitle()
    {
        return $this->container['rightsTitle'];
    }

    /**
     * Sets rightsTitle
     *
     * @param string $rightsTitle rightsTitle
     *
     * @return $this
     */
    public function setRightsTitle($rightsTitle)
    {
        $this->container['rightsTitle'] = $rightsTitle;

        return $this;
    }

    /**
     * Gets requestNo
     *
     * @return string
     */
    public function getRequestNo()
    {
        return $this->container['requestNo'];
    }

    /**
     * Sets requestNo
     *
     * @param string $requestNo requestNo
     *
     * @return $this
     */
    public function setRequestNo($requestNo)
    {
        $this->container['requestNo'] = $requestNo;

        return $this;
    }

    /**
     * Gets consumeStatus
     *
     * @return string
     */
    public function getConsumeStatus()
    {
        return $this->container['consumeStatus'];
    }

    /**
     * Sets consumeStatus
     *
     * @param string $consumeStatus consumeStatus
     *
     * @return $this
     */
    public function setConsumeStatus($consumeStatus)
    {
        $this->container['consumeStatus'] = $consumeStatus;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}

