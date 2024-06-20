<?php
/**
 * YopCreateShopRspDTO
 *
 * PHP version 5
 *
 * @category Class
 * @package  Yeepay\Yop\Sdk\
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * 线下业务
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

namespace Yeepay\Yop\Sdk\Service\Offline\Model;

use \ArrayAccess;
use Yeepay\Yop\Sdk\Model\ModelInterface;
use Yeepay\Yop\Sdk\Utils\ObjectSerializer;

/**
 * YopCreateShopRspDTO Class Doc Comment
 *
 * @category Class
 * @description 创建网点返回信息
 * @package  Yeepay\Yop\Sdk\
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class YopCreateShopRspDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'YopCreateShopRspDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'retCode' => 'string',
        'retMsg' => 'string',
        'shopNo' => 'string',
        'activeCode' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'retCode' => null,
        'retMsg' => null,
        'shopNo' => null,
        'activeCode' => null
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
        'retCode' => 'retCode',
        'retMsg' => 'retMsg',
        'shopNo' => 'shopNo',
        'activeCode' => 'activeCode'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'retCode' => 'setRetCode',
        'retMsg' => 'setRetMsg',
        'shopNo' => 'setShopNo',
        'activeCode' => 'setActiveCode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'retCode' => 'getRetCode',
        'retMsg' => 'getRetMsg',
        'shopNo' => 'getShopNo',
        'activeCode' => 'getActiveCode'
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
        $this->container['retCode'] = isset($data['retCode']) ? $data['retCode'] : null;
        $this->container['retMsg'] = isset($data['retMsg']) ? $data['retMsg'] : null;
        $this->container['shopNo'] = isset($data['shopNo']) ? $data['shopNo'] : null;
        $this->container['activeCode'] = isset($data['activeCode']) ? $data['activeCode'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['retCode'] === null) {
            $invalidProperties[] = "'retCode' can't be null";
        }
        if ($this->container['retMsg'] === null) {
            $invalidProperties[] = "'retMsg' can't be null";
        }
        if ($this->container['shopNo'] === null) {
            $invalidProperties[] = "'shopNo' can't be null";
        }
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
     * Gets retCode
     *
     * @return string
     */
    public function getRetCode()
    {
        return $this->container['retCode'];
    }

    /**
     * Sets retCode
     *
     * @param string $retCode <p>返回码</p>
     *
     * @return $this
     */
    public function setRetCode($retCode)
    {
        $this->container['retCode'] = $retCode;

        return $this;
    }

    /**
     * Gets retMsg
     *
     * @return string
     */
    public function getRetMsg()
    {
        return $this->container['retMsg'];
    }

    /**
     * Sets retMsg
     *
     * @param string $retMsg <p>返回信息</p>
     *
     * @return $this
     */
    public function setRetMsg($retMsg)
    {
        $this->container['retMsg'] = $retMsg;

        return $this;
    }

    /**
     * Gets shopNo
     *
     * @return string
     */
    public function getShopNo()
    {
        return $this->container['shopNo'];
    }

    /**
     * Sets shopNo
     *
     * @param string $shopNo <pre>网点编号</pre>
     *
     * @return $this
     */
    public function setShopNo($shopNo)
    {
        $this->container['shopNo'] = $shopNo;

        return $this;
    }

    /**
     * Gets activeCode
     *
     * @return string
     */
    public function getActiveCode()
    {
        return $this->container['activeCode'];
    }

    /**
     * Sets activeCode
     *
     * @param string $activeCode <p>激活码</p>
     *
     * @return $this
     */
    public function setActiveCode($activeCode)
    {
        $this->container['activeCode'] = $activeCode;

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


