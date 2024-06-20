<?php
/**
 * PayPassiveOrderResponseDTOResult
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
 * PayPassiveOrderResponseDTOResult Class Doc Comment
 *
 * @category Class
 * @package  Yeepay\Yop\Sdk\
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PayPassiveOrderResponseDTOResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PayPassiveOrderResponseDTOResult';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'code' => 'string',
        'message' => 'string',
        'orderId' => 'string',
        'uniqueOrderNo' => 'string',
        'bankOrderId' => 'string',
        'status' => 'string',
        'terminalPayType' => 'string',
        'paySuccessTime' => 'string',
        'userId' => 'string',
        'bankId' => 'string',
        'transactionId' => 'string',
        'channelPromotionInfo' => 'string',
        'realPayAmount' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'code' => null,
        'message' => null,
        'orderId' => null,
        'uniqueOrderNo' => null,
        'bankOrderId' => null,
        'status' => null,
        'terminalPayType' => null,
        'paySuccessTime' => 'date-time',
        'userId' => null,
        'bankId' => null,
        'transactionId' => null,
        'channelPromotionInfo' => null,
        'realPayAmount' => null
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
        'orderId' => 'orderId',
        'uniqueOrderNo' => 'uniqueOrderNo',
        'bankOrderId' => 'bankOrderId',
        'status' => 'status',
        'terminalPayType' => 'terminalPayType',
        'paySuccessTime' => 'paySuccessTime',
        'userId' => 'userId',
        'bankId' => 'bankId',
        'transactionId' => 'transactionId',
        'channelPromotionInfo' => 'channelPromotionInfo',
        'realPayAmount' => 'realPayAmount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'code' => 'setCode',
        'message' => 'setMessage',
        'orderId' => 'setOrderId',
        'uniqueOrderNo' => 'setUniqueOrderNo',
        'bankOrderId' => 'setBankOrderId',
        'status' => 'setStatus',
        'terminalPayType' => 'setTerminalPayType',
        'paySuccessTime' => 'setPaySuccessTime',
        'userId' => 'setUserId',
        'bankId' => 'setBankId',
        'transactionId' => 'setTransactionId',
        'channelPromotionInfo' => 'setChannelPromotionInfo',
        'realPayAmount' => 'setRealPayAmount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'code' => 'getCode',
        'message' => 'getMessage',
        'orderId' => 'getOrderId',
        'uniqueOrderNo' => 'getUniqueOrderNo',
        'bankOrderId' => 'getBankOrderId',
        'status' => 'getStatus',
        'terminalPayType' => 'getTerminalPayType',
        'paySuccessTime' => 'getPaySuccessTime',
        'userId' => 'getUserId',
        'bankId' => 'getBankId',
        'transactionId' => 'getTransactionId',
        'channelPromotionInfo' => 'getChannelPromotionInfo',
        'realPayAmount' => 'getRealPayAmount'
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
        $this->container['orderId'] = isset($data['orderId']) ? $data['orderId'] : null;
        $this->container['uniqueOrderNo'] = isset($data['uniqueOrderNo']) ? $data['uniqueOrderNo'] : null;
        $this->container['bankOrderId'] = isset($data['bankOrderId']) ? $data['bankOrderId'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['terminalPayType'] = isset($data['terminalPayType']) ? $data['terminalPayType'] : null;
        $this->container['paySuccessTime'] = isset($data['paySuccessTime']) ? $data['paySuccessTime'] : null;
        $this->container['userId'] = isset($data['userId']) ? $data['userId'] : null;
        $this->container['bankId'] = isset($data['bankId']) ? $data['bankId'] : null;
        $this->container['transactionId'] = isset($data['transactionId']) ? $data['transactionId'] : null;
        $this->container['channelPromotionInfo'] = isset($data['channelPromotionInfo']) ? $data['channelPromotionInfo'] : null;
        $this->container['realPayAmount'] = isset($data['realPayAmount']) ? $data['realPayAmount'] : null;
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
     * @param string $code 返回码
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
     * @param string $message 返回信息
     *
     * @return $this
     */
    public function setMessage($message)
    {
        $this->container['message'] = $message;

        return $this;
    }

    /**
     * Gets orderId
     *
     * @return string
     */
    public function getOrderId()
    {
        return $this->container['orderId'];
    }

    /**
     * Sets orderId
     *
     * @param string $orderId 商户收款请求号
     *
     * @return $this
     */
    public function setOrderId($orderId)
    {
        $this->container['orderId'] = $orderId;

        return $this;
    }

    /**
     * Gets uniqueOrderNo
     *
     * @return string
     */
    public function getUniqueOrderNo()
    {
        return $this->container['uniqueOrderNo'];
    }

    /**
     * Sets uniqueOrderNo
     *
     * @param string $uniqueOrderNo 易宝收款订单号
     *
     * @return $this
     */
    public function setUniqueOrderNo($uniqueOrderNo)
    {
        $this->container['uniqueOrderNo'] = $uniqueOrderNo;

        return $this;
    }

    /**
     * Gets bankOrderId
     *
     * @return string
     */
    public function getBankOrderId()
    {
        return $this->container['bankOrderId'];
    }

    /**
     * Sets bankOrderId
     *
     * @param string $bankOrderId 渠道侧商户请求号
     *
     * @return $this
     */
    public function setBankOrderId($bankOrderId)
    {
        $this->container['bankOrderId'] = $bankOrderId;

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
     * Gets terminalPayType
     *
     * @return string
     */
    public function getTerminalPayType()
    {
        return $this->container['terminalPayType'];
    }

    /**
     * Sets terminalPayType
     *
     * @param string $terminalPayType 终端授权方式
     *
     * @return $this
     */
    public function setTerminalPayType($terminalPayType)
    {
        $this->container['terminalPayType'] = $terminalPayType;

        return $this;
    }

    /**
     * Gets paySuccessTime
     *
     * @return string
     */
    public function getPaySuccessTime()
    {
        return $this->container['paySuccessTime'];
    }

    /**
     * Sets paySuccessTime
     *
     * @param string $paySuccessTime 支付完成时间
     *
     * @return $this
     */
    public function setPaySuccessTime($paySuccessTime)
    {
        $this->container['paySuccessTime'] = $paySuccessTime;

        return $this;
    }

    /**
     * Gets userId
     *
     * @return string
     */
    public function getUserId()
    {
        return $this->container['userId'];
    }

    /**
     * Sets userId
     *
     * @param string $userId 用户ID
     *
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->container['userId'] = $userId;

        return $this;
    }

    /**
     * Gets bankId
     *
     * @return string
     */
    public function getBankId()
    {
        return $this->container['bankId'];
    }

    /**
     * Sets bankId
     *
     * @param string $bankId 付款银行
     *
     * @return $this
     */
    public function setBankId($bankId)
    {
        $this->container['bankId'] = $bankId;

        return $this;
    }

    /**
     * Gets transactionId
     *
     * @return string
     */
    public function getTransactionId()
    {
        return $this->container['transactionId'];
    }

    /**
     * Sets transactionId
     *
     * @param string $transactionId 渠道订单号
     *
     * @return $this
     */
    public function setTransactionId($transactionId)
    {
        $this->container['transactionId'] = $transactionId;

        return $this;
    }

    /**
     * Gets channelPromotionInfo
     *
     * @return string
     */
    public function getChannelPromotionInfo()
    {
        return $this->container['channelPromotionInfo'];
    }

    /**
     * Sets channelPromotionInfo
     *
     * @param string $channelPromotionInfo 渠道优惠信息
     *
     * @return $this
     */
    public function setChannelPromotionInfo($channelPromotionInfo)
    {
        $this->container['channelPromotionInfo'] = $channelPromotionInfo;

        return $this;
    }

    /**
     * Gets realPayAmount
     *
     * @return float
     */
    public function getRealPayAmount()
    {
        return $this->container['realPayAmount'];
    }

    /**
     * Sets realPayAmount
     *
     * @param float $realPayAmount 实际支付金额
     *
     * @return $this
     */
    public function setRealPayAmount($realPayAmount)
    {
        $this->container['realPayAmount'] = $realPayAmount;

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


