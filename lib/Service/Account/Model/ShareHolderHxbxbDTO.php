<?php
/**
 * ShareHolderHxbxbDTO
 *
 * PHP version 5
 *
 * @category Class
 * @package  Yeepay\Yop\Sdk\
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * 账户
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

namespace Yeepay\Yop\Sdk\Service\Account\Model;

use \ArrayAccess;
use Yeepay\Yop\Sdk\Model\ModelInterface;
use Yeepay\Yop\Sdk\Utils\ObjectSerializer;

/**
 * ShareHolderHxbxbDTO Class Doc Comment
 *
 * @category Class
 * @description 百信股东信息
 * @package  Yeepay\Yop\Sdk\
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ShareHolderHxbxbDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ShareHolderHxbxbDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'owner' => 'string',
        'ownerIdType' => 'string',
        'ownerIdNo' => 'string',
        'ownerStartDate' => 'string',
        'ownerExpireDate' => 'string',
        'ownerImageFont' => 'string',
        'ownerImageBack' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'owner' => null,
        'ownerIdType' => null,
        'ownerIdNo' => null,
        'ownerStartDate' => null,
        'ownerExpireDate' => null,
        'ownerImageFont' => null,
        'ownerImageBack' => null
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
        'owner' => 'owner',
        'ownerIdType' => 'ownerIdType',
        'ownerIdNo' => 'ownerIdNo',
        'ownerStartDate' => 'ownerStartDate',
        'ownerExpireDate' => 'ownerExpireDate',
        'ownerImageFont' => 'ownerImageFont',
        'ownerImageBack' => 'ownerImageBack'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'owner' => 'setOwner',
        'ownerIdType' => 'setOwnerIdType',
        'ownerIdNo' => 'setOwnerIdNo',
        'ownerStartDate' => 'setOwnerStartDate',
        'ownerExpireDate' => 'setOwnerExpireDate',
        'ownerImageFont' => 'setOwnerImageFont',
        'ownerImageBack' => 'setOwnerImageBack'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'owner' => 'getOwner',
        'ownerIdType' => 'getOwnerIdType',
        'ownerIdNo' => 'getOwnerIdNo',
        'ownerStartDate' => 'getOwnerStartDate',
        'ownerExpireDate' => 'getOwnerExpireDate',
        'ownerImageFont' => 'getOwnerImageFont',
        'ownerImageBack' => 'getOwnerImageBack'
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
        $this->container['owner'] = isset($data['owner']) ? $data['owner'] : null;
        $this->container['ownerIdType'] = isset($data['ownerIdType']) ? $data['ownerIdType'] : null;
        $this->container['ownerIdNo'] = isset($data['ownerIdNo']) ? $data['ownerIdNo'] : null;
        $this->container['ownerStartDate'] = isset($data['ownerStartDate']) ? $data['ownerStartDate'] : null;
        $this->container['ownerExpireDate'] = isset($data['ownerExpireDate']) ? $data['ownerExpireDate'] : null;
        $this->container['ownerImageFont'] = isset($data['ownerImageFont']) ? $data['ownerImageFont'] : null;
        $this->container['ownerImageBack'] = isset($data['ownerImageBack']) ? $data['ownerImageBack'] : null;
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
     * Gets owner
     *
     * @return string
     */
    public function getOwner()
    {
        return $this->container['owner'];
    }

    /**
     * Sets owner
     *
     * @param string $owner <p>控股股东名称</p>
     *
     * @return $this
     */
    public function setOwner($owner)
    {
        $this->container['owner'] = $owner;

        return $this;
    }

    /**
     * Gets ownerIdType
     *
     * @return string
     */
    public function getOwnerIdType()
    {
        return $this->container['ownerIdType'];
    }

    /**
     * Sets ownerIdType
     *
     * @param string $ownerIdType <p>控股股东证件类型<br />可选项如下:<br />ID_CARD:居民身份证<br />INNER_PASSPORT:居民户回簿<br />PASSPORT:外国护照<br />OFFICERS:军官证<br />SOLDIER:士兵证<br />ARMED_OFFICERS:武警军官证<br />HM_VISITORPASS:港澳居民来往内地通行证（香港）<br />MACAO_PASS:港澳居民来往内地通行证（澳门）TAIWAN_PASS:台湾居民旅行证PROVISIONAL_ID_CARD:临时居民身份证ALIEN_RESIDENCE:外国人居留证CHINESE_PASSPORT:中国护照ARMED_SOLDIER:武警士兵证BORDER_ENTRY_EXIT_PERMIT:边民出入境通行证<br />OTHER_PERSONAL:其他个人证件T_VISITORPASS:台湾居民旅行证BUSINESS_LICENSE:三证合一的营业执照</p>
     *
     * @return $this
     */
    public function setOwnerIdType($ownerIdType)
    {
        $this->container['ownerIdType'] = $ownerIdType;

        return $this;
    }

    /**
     * Gets ownerIdNo
     *
     * @return string
     */
    public function getOwnerIdNo()
    {
        return $this->container['ownerIdNo'];
    }

    /**
     * Sets ownerIdNo
     *
     * @param string $ownerIdNo <p>控股股东证件号</p>
     *
     * @return $this
     */
    public function setOwnerIdNo($ownerIdNo)
    {
        $this->container['ownerIdNo'] = $ownerIdNo;

        return $this;
    }

    /**
     * Gets ownerStartDate
     *
     * @return string
     */
    public function getOwnerStartDate()
    {
        return $this->container['ownerStartDate'];
    }

    /**
     * Sets ownerStartDate
     *
     * @param string $ownerStartDate <p>控股股东证件生效日期<br />参数格式为yyyyMMdd</p>
     *
     * @return $this
     */
    public function setOwnerStartDate($ownerStartDate)
    {
        $this->container['ownerStartDate'] = $ownerStartDate;

        return $this;
    }

    /**
     * Gets ownerExpireDate
     *
     * @return string
     */
    public function getOwnerExpireDate()
    {
        return $this->container['ownerExpireDate'];
    }

    /**
     * Sets ownerExpireDate
     *
     * @param string $ownerExpireDate <p>股东或实际控制人证件失效日期<br />参数格式为yyyyMMdd或者forever</p>
     *
     * @return $this
     */
    public function setOwnerExpireDate($ownerExpireDate)
    {
        $this->container['ownerExpireDate'] = $ownerExpireDate;

        return $this;
    }

    /**
     * Gets ownerImageFont
     *
     * @return string
     */
    public function getOwnerImageFont()
    {
        return $this->container['ownerImageFont'];
    }

    /**
     * Sets ownerImageFont
     *
     * @param string $ownerImageFont <p>证件照片正面地址</p>
     *
     * @return $this
     */
    public function setOwnerImageFont($ownerImageFont)
    {
        $this->container['ownerImageFont'] = $ownerImageFont;

        return $this;
    }

    /**
     * Gets ownerImageBack
     *
     * @return string
     */
    public function getOwnerImageBack()
    {
        return $this->container['ownerImageBack'];
    }

    /**
     * Sets ownerImageBack
     *
     * @param string $ownerImageBack <p>证件照片反面地址</p>
     *
     * @return $this
     */
    public function setOwnerImageBack($ownerImageBack)
    {
        $this->container['ownerImageBack'] = $ownerImageBack;

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

