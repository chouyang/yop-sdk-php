<?php
/**
 * WechatConfigAddWechatConfigRequestDTOParam
 *
 * PHP version 5
 *
 * @category Class
 * @package  Yeepay\Yop\Sdk\
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * 聚合支付
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

namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;

use \ArrayAccess;
use Yeepay\Yop\Sdk\Model\ModelInterface;
use Yeepay\Yop\Sdk\Utils\ObjectSerializer;

/**
 * WechatConfigAddWechatConfigRequestDTOParam Class Doc Comment
 *
 * @category Class
 * @description 方法签名第0个参数，请自行修改arg0等参数的名字
 * @package  Yeepay\Yop\Sdk\
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class WechatConfigAddWechatConfigRequestDTOParam implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'WechatConfigAddWechatConfigRequestDTOParam';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'appKey' => 'string',
        'parentMerchantNo' => 'string',
        'merchantNo' => 'string',
        'tradeAuthDirList' => 'string[]',
        'appIdList' => '\Yeepay\Yop\Sdk\Service\Aggpay\Model\WechatConfigAddAppIdConfigDetailResult[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'appKey' => null,
        'parentMerchantNo' => null,
        'merchantNo' => null,
        'tradeAuthDirList' => null,
        'appIdList' => null
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
        'appKey' => 'appKey',
        'parentMerchantNo' => 'parentMerchantNo',
        'merchantNo' => 'merchantNo',
        'tradeAuthDirList' => 'tradeAuthDirList',
        'appIdList' => 'appIdList'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'appKey' => 'setAppKey',
        'parentMerchantNo' => 'setParentMerchantNo',
        'merchantNo' => 'setMerchantNo',
        'tradeAuthDirList' => 'setTradeAuthDirList',
        'appIdList' => 'setAppIdList'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'appKey' => 'getAppKey',
        'parentMerchantNo' => 'getParentMerchantNo',
        'merchantNo' => 'getMerchantNo',
        'tradeAuthDirList' => 'getTradeAuthDirList',
        'appIdList' => 'getAppIdList'
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
        $this->container['appKey'] = isset($data['appKey']) ? $data['appKey'] : null;
        $this->container['parentMerchantNo'] = isset($data['parentMerchantNo']) ? $data['parentMerchantNo'] : null;
        $this->container['merchantNo'] = isset($data['merchantNo']) ? $data['merchantNo'] : null;
        $this->container['tradeAuthDirList'] = isset($data['tradeAuthDirList']) ? $data['tradeAuthDirList'] : null;
        $this->container['appIdList'] = isset($data['appIdList']) ? $data['appIdList'] : null;
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
     * Gets appKey
     *
     * @return string
     */
    public function getAppKey()
    {
        return $this->container['appKey'];
    }

    /**
     * Sets appKey
     *
     * @param string $appKey appKey
     *
     * @return $this
     */
    public function setAppKey($appKey)
    {
        $this->container['appKey'] = $appKey;

        return $this;
    }

    /**
     * Gets parentMerchantNo
     *
     * @return string
     */
    public function getParentMerchantNo()
    {
        return $this->container['parentMerchantNo'];
    }

    /**
     * Sets parentMerchantNo
     *
     * @param string $parentMerchantNo parentMerchantNo
     *
     * @return $this
     */
    public function setParentMerchantNo($parentMerchantNo)
    {
        $this->container['parentMerchantNo'] = $parentMerchantNo;

        return $this;
    }

    /**
     * Gets merchantNo
     *
     * @return string
     */
    public function getMerchantNo()
    {
        return $this->container['merchantNo'];
    }

    /**
     * Sets merchantNo
     *
     * @param string $merchantNo merchantNo
     *
     * @return $this
     */
    public function setMerchantNo($merchantNo)
    {
        $this->container['merchantNo'] = $merchantNo;

        return $this;
    }

    /**
     * Gets tradeAuthDirList
     *
     * @return string[]
     */
    public function getTradeAuthDirList()
    {
        return $this->container['tradeAuthDirList'];
    }

    /**
     * Sets tradeAuthDirList
     *
     * @param string[] $tradeAuthDirList tradeAuthDirList
     *
     * @return $this
     */
    public function setTradeAuthDirList($tradeAuthDirList)
    {
        $this->container['tradeAuthDirList'] = $tradeAuthDirList;

        return $this;
    }

    /**
     * Gets appIdList
     *
     * @return \Yeepay\Yop\Sdk\Service\Aggpay\Model\WechatConfigAddAppIdConfigDetailResult[]
     */
    public function getAppIdList()
    {
        return $this->container['appIdList'];
    }

    /**
     * Sets appIdList
     *
     * @param \Yeepay\Yop\Sdk\Service\Aggpay\Model\WechatConfigAddAppIdConfigDetailResult[] $appIdList appIdList
     *
     * @return $this
     */
    public function setAppIdList($appIdList)
    {
        $this->container['appIdList'] = $appIdList;

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

