<?php
/**
 * BindbankcardApplyBindBankCardApplyResponseResult
 *
 * PHP version 5
 *
 * @category Class
 * @package  Yeepay\Yop\Sdk\
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * 营销系统
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

namespace Yeepay\Yop\Sdk\Service\Mktg\Model;

use \ArrayAccess;
use Yeepay\Yop\Sdk\Model\ModelInterface;
use Yeepay\Yop\Sdk\Utils\ObjectSerializer;

/**
 * BindbankcardApplyBindBankCardApplyResponseResult Class Doc Comment
 *
 * @category Class
 * @package  Yeepay\Yop\Sdk\
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class BindbankcardApplyBindBankCardApplyResponseResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'BindbankcardApplyBindBankCardApplyResponseResult';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'code' => 'string',
        'message' => 'string',
        'status' => 'string',
        'verifyType' => 'string',
        'bindOrderId' => 'string',
        'uniqueBindNo' => 'string',
        'pageUrl' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'code' => null,
        'message' => null,
        'status' => null,
        'verifyType' => null,
        'bindOrderId' => null,
        'uniqueBindNo' => null,
        'pageUrl' => null
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
        'code' => 'code',
        'message' => 'message',
        'status' => 'status',
        'verifyType' => 'verifyType',
        'bindOrderId' => 'bindOrderId',
        'uniqueBindNo' => 'uniqueBindNo',
        'pageUrl' => 'pageUrl'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'code' => 'setCode',
        'message' => 'setMessage',
        'status' => 'setStatus',
        'verifyType' => 'setVerifyType',
        'bindOrderId' => 'setBindOrderId',
        'uniqueBindNo' => 'setUniqueBindNo',
        'pageUrl' => 'setPageUrl'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'code' => 'getCode',
        'message' => 'getMessage',
        'status' => 'getStatus',
        'verifyType' => 'getVerifyType',
        'bindOrderId' => 'getBindOrderId',
        'uniqueBindNo' => 'getUniqueBindNo',
        'pageUrl' => 'getPageUrl'
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
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['verifyType'] = isset($data['verifyType']) ? $data['verifyType'] : null;
        $this->container['bindOrderId'] = isset($data['bindOrderId']) ? $data['bindOrderId'] : null;
        $this->container['uniqueBindNo'] = isset($data['uniqueBindNo']) ? $data['uniqueBindNo'] : null;
        $this->container['pageUrl'] = isset($data['pageUrl']) ? $data['pageUrl'] : null;
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
     * Gets code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
     * Sets code
     *
     * @param string $code 业务返回码
     *
     * @return $this
     */
    public function setCode($code)
    {
        $this->container['code'] = $code;

        return $this;
    }

    /**
     * Gets message
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
     * Sets message
     *
     * @param string $message 业务返回描述
     *
     * @return $this
     */
    public function setMessage($message)
    {
        $this->container['message'] = $message;

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
     * @param string $status 状态
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets verifyType
     *
     * @return string
     */
    public function getVerifyType()
    {
        return $this->container['verifyType'];
    }

    /**
     * Sets verifyType
     *
     * @param string $verifyType 验证类型
     *
     * @return $this
     */
    public function setVerifyType($verifyType)
    {
        $this->container['verifyType'] = $verifyType;

        return $this;
    }

    /**
     * Gets bindOrderId
     *
     * @return string
     */
    public function getBindOrderId()
    {
        return $this->container['bindOrderId'];
    }

    /**
     * Sets bindOrderId
     *
     * @param string $bindOrderId 商户请求号
     *
     * @return $this
     */
    public function setBindOrderId($bindOrderId)
    {
        $this->container['bindOrderId'] = $bindOrderId;

        return $this;
    }

    /**
     * Gets uniqueBindNo
     *
     * @return string
     */
    public function getUniqueBindNo()
    {
        return $this->container['uniqueBindNo'];
    }

    /**
     * Sets uniqueBindNo
     *
     * @param string $uniqueBindNo 易宝唯一流水号
     *
     * @return $this
     */
    public function setUniqueBindNo($uniqueBindNo)
    {
        $this->container['uniqueBindNo'] = $uniqueBindNo;

        return $this;
    }

    /**
     * Gets pageUrl
     *
     * @return string
     */
    public function getPageUrl()
    {
        return $this->container['pageUrl'];
    }

    /**
     * Sets pageUrl
     *
     * @param string $pageUrl 跳转页面URL
     *
     * @return $this
     */
    public function setPageUrl($pageUrl)
    {
        $this->container['pageUrl'] = $pageUrl;

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


