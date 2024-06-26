<?php
/**
 * RefundOrderRequestDTO
 *
 * PHP version 5
 *
 * @category Class
 * @package  Yeepay\Yop\Sdk\
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * 旅游资源
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

namespace Yeepay\Yop\Sdk\Service\TravelResources\Model;

use \ArrayAccess;
use Yeepay\Yop\Sdk\Model\ModelInterface;
use Yeepay\Yop\Sdk\Utils\ObjectSerializer;

/**
 * RefundOrderRequestDTO Class Doc Comment
 *
 * @category Class
 * @description 退款订单请求参数
 * @package  Yeepay\Yop\Sdk\
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class RefundOrderRequestDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'RefundOrderRequestDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'parentMerchantNo' => 'string',
        'merchantNo' => 'string',
        'merchantRequestNo' => 'string',
        'merchantRefundRequestNo' => 'string',
        'parentMerchantRequestNo' => 'string',
        'parentMerchantRefundRequestNo' => 'string',
        'refundAmount' => 'float',
        'complateNotifyUrl' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'parentMerchantNo' => null,
        'merchantNo' => null,
        'merchantRequestNo' => null,
        'merchantRefundRequestNo' => null,
        'parentMerchantRequestNo' => null,
        'parentMerchantRefundRequestNo' => null,
        'refundAmount' => null,
        'complateNotifyUrl' => 'notify-url'
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
        'merchantRequestNo' => 'merchantRequestNo',
        'merchantRefundRequestNo' => 'merchantRefundRequestNo',
        'parentMerchantRequestNo' => 'parentMerchantRequestNo',
        'parentMerchantRefundRequestNo' => 'parentMerchantRefundRequestNo',
        'refundAmount' => 'refundAmount',
        'complateNotifyUrl' => 'complateNotifyUrl'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'parentMerchantNo' => 'setParentMerchantNo',
        'merchantNo' => 'setMerchantNo',
        'merchantRequestNo' => 'setMerchantRequestNo',
        'merchantRefundRequestNo' => 'setMerchantRefundRequestNo',
        'parentMerchantRequestNo' => 'setParentMerchantRequestNo',
        'parentMerchantRefundRequestNo' => 'setParentMerchantRefundRequestNo',
        'refundAmount' => 'setRefundAmount',
        'complateNotifyUrl' => 'setComplateNotifyUrl'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'parentMerchantNo' => 'getParentMerchantNo',
        'merchantNo' => 'getMerchantNo',
        'merchantRequestNo' => 'getMerchantRequestNo',
        'merchantRefundRequestNo' => 'getMerchantRefundRequestNo',
        'parentMerchantRequestNo' => 'getParentMerchantRequestNo',
        'parentMerchantRefundRequestNo' => 'getParentMerchantRefundRequestNo',
        'refundAmount' => 'getRefundAmount',
        'complateNotifyUrl' => 'getComplateNotifyUrl'
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
        $this->container['merchantRequestNo'] = isset($data['merchantRequestNo']) ? $data['merchantRequestNo'] : null;
        $this->container['merchantRefundRequestNo'] = isset($data['merchantRefundRequestNo']) ? $data['merchantRefundRequestNo'] : null;
        $this->container['parentMerchantRequestNo'] = isset($data['parentMerchantRequestNo']) ? $data['parentMerchantRequestNo'] : null;
        $this->container['parentMerchantRefundRequestNo'] = isset($data['parentMerchantRefundRequestNo']) ? $data['parentMerchantRefundRequestNo'] : null;
        $this->container['refundAmount'] = isset($data['refundAmount']) ? $data['refundAmount'] : null;
        $this->container['complateNotifyUrl'] = isset($data['complateNotifyUrl']) ? $data['complateNotifyUrl'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['merchantNo'] === null) {
            $invalidProperties[] = "'merchantNo' can't be null";
        }
        if ($this->container['merchantRequestNo'] === null) {
            $invalidProperties[] = "'merchantRequestNo' can't be null";
        }
        if ($this->container['merchantRefundRequestNo'] === null) {
            $invalidProperties[] = "'merchantRefundRequestNo' can't be null";
        }
        if ($this->container['refundAmount'] === null) {
            $invalidProperties[] = "'refundAmount' can't be null";
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
     * @param string $parentMerchantNo <p>请求商编</p>
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
     * @param string $merchantNo <p>业务商编</p>
     *
     * @return $this
     */
    public function setMerchantNo($merchantNo)
    {
        $this->container['merchantNo'] = $merchantNo;

        return $this;
    }

    /**
     * Gets merchantRequestNo
     *
     * @return string
     */
    public function getMerchantRequestNo()
    {
        return $this->container['merchantRequestNo'];
    }

    /**
     * Sets merchantRequestNo
     *
     * @param string $merchantRequestNo <p>商户请求单号</p>
     *
     * @return $this
     */
    public function setMerchantRequestNo($merchantRequestNo)
    {
        $this->container['merchantRequestNo'] = $merchantRequestNo;

        return $this;
    }

    /**
     * Gets merchantRefundRequestNo
     *
     * @return string
     */
    public function getMerchantRefundRequestNo()
    {
        return $this->container['merchantRefundRequestNo'];
    }

    /**
     * Sets merchantRefundRequestNo
     *
     * @param string $merchantRefundRequestNo <p>商户退款订单号</p>
     *
     * @return $this
     */
    public function setMerchantRefundRequestNo($merchantRefundRequestNo)
    {
        $this->container['merchantRefundRequestNo'] = $merchantRefundRequestNo;

        return $this;
    }

    /**
     * Gets parentMerchantRequestNo
     *
     * @return string
     */
    public function getParentMerchantRequestNo()
    {
        return $this->container['parentMerchantRequestNo'];
    }

    /**
     * Sets parentMerchantRequestNo
     *
     * @param string $parentMerchantRequestNo <p>请求商户订单号</p>
     *
     * @return $this
     */
    public function setParentMerchantRequestNo($parentMerchantRequestNo)
    {
        $this->container['parentMerchantRequestNo'] = $parentMerchantRequestNo;

        return $this;
    }

    /**
     * Gets parentMerchantRefundRequestNo
     *
     * @return string
     */
    public function getParentMerchantRefundRequestNo()
    {
        return $this->container['parentMerchantRefundRequestNo'];
    }

    /**
     * Sets parentMerchantRefundRequestNo
     *
     * @param string $parentMerchantRefundRequestNo <p>请求商户退款订单号</p>
     *
     * @return $this
     */
    public function setParentMerchantRefundRequestNo($parentMerchantRefundRequestNo)
    {
        $this->container['parentMerchantRefundRequestNo'] = $parentMerchantRefundRequestNo;

        return $this;
    }

    /**
     * Gets refundAmount
     *
     * @return float
     */
    public function getRefundAmount()
    {
        return $this->container['refundAmount'];
    }

    /**
     * Sets refundAmount
     *
     * @param float $refundAmount <p>退款金额</p>
     *
     * @return $this
     */
    public function setRefundAmount($refundAmount)
    {
        $this->container['refundAmount'] = $refundAmount;

        return $this;
    }

    /**
     * Gets complateNotifyUrl
     *
     * @return string
     */
    public function getComplateNotifyUrl()
    {
        return $this->container['complateNotifyUrl'];
    }

    /**
     * Sets complateNotifyUrl
     *
     * @param string $complateNotifyUrl <p>通知地址</p>
     *
     * @return $this
     */
    public function setComplateNotifyUrl($complateNotifyUrl)
    {
        $this->container['complateNotifyUrl'] = $complateNotifyUrl;

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


