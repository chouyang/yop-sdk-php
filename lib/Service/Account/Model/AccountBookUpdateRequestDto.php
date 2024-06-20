<?php
/**
 * AccountBookUpdateRequestDto
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
 * AccountBookUpdateRequestDto Class Doc Comment
 *
 * @category Class
 * @description 请修改我
 * @package  Yeepay\Yop\Sdk\
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AccountBookUpdateRequestDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AccountBookUpdateRequestDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'parentMerchantNo' => 'string',
        'merchantNo' => 'string',
        'merchantAccountBookNo' => 'string',
        'ypAccountBookNo' => 'string',
        'bindCardList' => '\Yeepay\Yop\Sdk\Service\Account\Model\ModifyCardDTO[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'parentMerchantNo' => null,
        'merchantNo' => null,
        'merchantAccountBookNo' => null,
        'ypAccountBookNo' => null,
        'bindCardList' => null
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
        'parentMerchantNo' => 'parentMerchantNo',
        'merchantNo' => 'merchantNo',
        'merchantAccountBookNo' => 'merchantAccountBookNo',
        'ypAccountBookNo' => 'ypAccountBookNo',
        'bindCardList' => 'bindCardList'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'parentMerchantNo' => 'setParentMerchantNo',
        'merchantNo' => 'setMerchantNo',
        'merchantAccountBookNo' => 'setMerchantAccountBookNo',
        'ypAccountBookNo' => 'setYpAccountBookNo',
        'bindCardList' => 'setBindCardList'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'parentMerchantNo' => 'getParentMerchantNo',
        'merchantNo' => 'getMerchantNo',
        'merchantAccountBookNo' => 'getMerchantAccountBookNo',
        'ypAccountBookNo' => 'getYpAccountBookNo',
        'bindCardList' => 'getBindCardList'
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
        $this->container['parentMerchantNo'] = isset($data['parentMerchantNo']) ? $data['parentMerchantNo'] : null;
        $this->container['merchantNo'] = isset($data['merchantNo']) ? $data['merchantNo'] : null;
        $this->container['merchantAccountBookNo'] = isset($data['merchantAccountBookNo']) ? $data['merchantAccountBookNo'] : null;
        $this->container['ypAccountBookNo'] = isset($data['ypAccountBookNo']) ? $data['ypAccountBookNo'] : null;
        $this->container['bindCardList'] = isset($data['bindCardList']) ? $data['bindCardList'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['parentMerchantNo'] === null) {
            $invalidProperties[] = "'parentMerchantNo' can't be null";
        }
        if ($this->container['merchantNo'] === null) {
            $invalidProperties[] = "'merchantNo' can't be null";
        }
        if ($this->container['bindCardList'] === null) {
            $invalidProperties[] = "'bindCardList' can't be null";
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
     * @param string $parentMerchantNo <p>发起方商户编号<br />标准商户收付款方案中此参数与商编一致，平台商户收付款方案中此参数为平台商商户编号</p>
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
     * @param string $merchantNo <p>商户编号</p>
     *
     * @return $this
     */
    public function setMerchantNo($merchantNo)
    {
        $this->container['merchantNo'] = $merchantNo;

        return $this;
    }

    /**
     * Gets merchantAccountBookNo
     *
     * @return string
     */
    public function getMerchantAccountBookNo()
    {
        return $this->container['merchantAccountBookNo'];
    }

    /**
     * Sets merchantAccountBookNo
     *
     * @param string $merchantAccountBookNo <p>商户侧记账簿编号<br />商户侧记账簿编号和易宝记账簿编号二选一必填</p>
     *
     * @return $this
     */
    public function setMerchantAccountBookNo($merchantAccountBookNo)
    {
        $this->container['merchantAccountBookNo'] = $merchantAccountBookNo;

        return $this;
    }

    /**
     * Gets ypAccountBookNo
     *
     * @return string
     */
    public function getYpAccountBookNo()
    {
        return $this->container['ypAccountBookNo'];
    }

    /**
     * Sets ypAccountBookNo
     *
     * @param string $ypAccountBookNo <p>易宝记账簿编号<br />商户侧记账簿编号和易宝记账簿编号二选一必填</p>
     *
     * @return $this
     */
    public function setYpAccountBookNo($ypAccountBookNo)
    {
        $this->container['ypAccountBookNo'] = $ypAccountBookNo;

        return $this;
    }

    /**
     * Gets bindCardList
     *
     * @return \Yeepay\Yop\Sdk\Service\Account\Model\ModifyCardDTO[]
     */
    public function getBindCardList()
    {
        return $this->container['bindCardList'];
    }

    /**
     * Sets bindCardList
     *
     * @param \Yeepay\Yop\Sdk\Service\Account\Model\ModifyCardDTO[] $bindCardList <p>修改绑定卡信息</p>
     *
     * @return $this
     */
    public function setBindCardList($bindCardList)
    {
        $this->container['bindCardList'] = $bindCardList;

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

