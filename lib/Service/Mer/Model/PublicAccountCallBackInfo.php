<?php
/**
 * PublicAccountCallBackInfo
 *
 * PHP version 5
 *
 * @category Class
 * @package  Yeepay\Yop\Sdk\
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * 子商户管理
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

namespace Yeepay\Yop\Sdk\Service\Mer\Model;

use \ArrayAccess;
use Yeepay\Yop\Sdk\Model\ModelInterface;
use Yeepay\Yop\Sdk\Utils\ObjectSerializer;

/**
 * PublicAccountCallBackInfo Class Doc Comment
 *
 * @category Class
 * @description 老板管账对公账户信息
 * @package  Yeepay\Yop\Sdk\
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PublicAccountCallBackInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PublicAccountCallBackInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'receiverNo' => 'string',
        'bankCardNo' => 'string',
        'status' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'receiverNo' => null,
        'bankCardNo' => null,
        'status' => null
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
        'receiverNo' => 'receiverNo',
        'bankCardNo' => 'bankCardNo',
        'status' => 'status'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'receiverNo' => 'setReceiverNo',
        'bankCardNo' => 'setBankCardNo',
        'status' => 'setStatus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'receiverNo' => 'getReceiverNo',
        'bankCardNo' => 'getBankCardNo',
        'status' => 'getStatus'
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
        $this->container['receiverNo'] = isset($data['receiverNo']) ? $data['receiverNo'] : null;
        $this->container['bankCardNo'] = isset($data['bankCardNo']) ? $data['bankCardNo'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['receiverNo'] === null) {
            $invalidProperties[] = "'receiverNo' can't be null";
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
     * Gets receiverNo
     *
     * @return string
     */
    public function getReceiverNo()
    {
        return $this->container['receiverNo'];
    }

    /**
     * Sets receiverNo
     *
     * @param string $receiverNo <p>入账方编号</p> <p>入账方唯一标识，用于查询、变更入账方信息。</p>
     *
     * @return $this
     */
    public function setReceiverNo($receiverNo)
    {
        $this->container['receiverNo'] = $receiverNo;

        return $this;
    }

    /**
     * Gets bankCardNo
     *
     * @return string
     */
    public function getBankCardNo()
    {
        return $this->container['bankCardNo'];
    }

    /**
     * Sets bankCardNo
     *
     * @param string $bankCardNo <p>银行卡号</p>
     *
     * @return $this
     */
    public function setBankCardNo($bankCardNo)
    {
        $this->container['bankCardNo'] = $bankCardNo;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status <p>入账方状态</p> <div data-page-id=\"OY64dHLw1o1F9Ex1aTIcfgg5nHf\" data-docx-has-block-data=\"false\"> <div class=\"ace-line ace-line old-record-id-VF29do3gvoFtTaxVpNPc7Mg7nld\">REVIEWING 资质审核中</div> <div class=\"ace-line ace-line old-record-id-BKezdM3JroQZIExOWBxc4JYknUe\">REVIEW_BACK 资质审核驳回</div> <div class=\"ace-line ace-line old-record-id-KIp2d2q6soOtevxS2fUcxmXdnNd\">BUSINESS_OPENING 入账方申请中</div> <div class=\"ace-line ace-line old-record-id-OJCcdH67Xoi8jcxzPZfcAUFLn9b\">AGREEMENT_SIGNING 确认书待签署</div> <div class=\"ace-line ace-line old-record-id-PG8YdYXL0oV5xfxVT9PcCKPmnJe\">SUCCESS 分账设置成功</div> </div>
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

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


