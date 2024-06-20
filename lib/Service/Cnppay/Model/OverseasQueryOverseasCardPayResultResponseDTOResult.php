<?php
/**
 * OverseasQueryOverseasCardPayResultResponseDTOResult
 *
 * PHP version 5
 *
 * @category Class
 * @package  Yeepay\Yop\Sdk\
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * 无卡交易系统
 *
 * <p>中台的无卡交易系统(Card Not Present)，包含调用统一订单OPR下单及无卡支付服务NCPAY支付的流程</p>
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

namespace Yeepay\Yop\Sdk\Service\Cnppay\Model;

use \ArrayAccess;
use Yeepay\Yop\Sdk\Model\ModelInterface;
use Yeepay\Yop\Sdk\Utils\ObjectSerializer;

/**
 * OverseasQueryOverseasCardPayResultResponseDTOResult Class Doc Comment
 *
 * @category Class
 * @package  Yeepay\Yop\Sdk\
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class OverseasQueryOverseasCardPayResultResponseDTOResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'OverseasQueryOverseasCardPayResultResponseDTOResult';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'code' => 'string',
        'message' => 'string',
        'merchantNo' => 'string',
        'orderId' => 'string',
        'uniqueOrderNo' => 'string',
        'status' => 'string',
        'bankPaySuccessDate' => 'string',
        'riskValidateUrl' => 'string',
        'riskValidateToken' => 'string',
        'referenceId' => 'string',
        'deviceDataUrl' => 'string',
        'jwt' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'code' => null,
        'message' => null,
        'merchantNo' => null,
        'orderId' => null,
        'uniqueOrderNo' => null,
        'status' => null,
        'bankPaySuccessDate' => null,
        'riskValidateUrl' => null,
        'riskValidateToken' => null,
        'referenceId' => null,
        'deviceDataUrl' => null,
        'jwt' => null
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
        'merchantNo' => 'merchantNo',
        'orderId' => 'orderId',
        'uniqueOrderNo' => 'uniqueOrderNo',
        'status' => 'status',
        'bankPaySuccessDate' => 'bankPaySuccessDate',
        'riskValidateUrl' => 'riskValidateUrl',
        'riskValidateToken' => 'riskValidateToken',
        'referenceId' => 'referenceId',
        'deviceDataUrl' => 'deviceDataUrl',
        'jwt' => 'jwt'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'code' => 'setCode',
        'message' => 'setMessage',
        'merchantNo' => 'setMerchantNo',
        'orderId' => 'setOrderId',
        'uniqueOrderNo' => 'setUniqueOrderNo',
        'status' => 'setStatus',
        'bankPaySuccessDate' => 'setBankPaySuccessDate',
        'riskValidateUrl' => 'setRiskValidateUrl',
        'riskValidateToken' => 'setRiskValidateToken',
        'referenceId' => 'setReferenceId',
        'deviceDataUrl' => 'setDeviceDataUrl',
        'jwt' => 'setJwt'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'code' => 'getCode',
        'message' => 'getMessage',
        'merchantNo' => 'getMerchantNo',
        'orderId' => 'getOrderId',
        'uniqueOrderNo' => 'getUniqueOrderNo',
        'status' => 'getStatus',
        'bankPaySuccessDate' => 'getBankPaySuccessDate',
        'riskValidateUrl' => 'getRiskValidateUrl',
        'riskValidateToken' => 'getRiskValidateToken',
        'referenceId' => 'getReferenceId',
        'deviceDataUrl' => 'getDeviceDataUrl',
        'jwt' => 'getJwt'
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
        $this->container['merchantNo'] = isset($data['merchantNo']) ? $data['merchantNo'] : null;
        $this->container['orderId'] = isset($data['orderId']) ? $data['orderId'] : null;
        $this->container['uniqueOrderNo'] = isset($data['uniqueOrderNo']) ? $data['uniqueOrderNo'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['bankPaySuccessDate'] = isset($data['bankPaySuccessDate']) ? $data['bankPaySuccessDate'] : null;
        $this->container['riskValidateUrl'] = isset($data['riskValidateUrl']) ? $data['riskValidateUrl'] : null;
        $this->container['riskValidateToken'] = isset($data['riskValidateToken']) ? $data['riskValidateToken'] : null;
        $this->container['referenceId'] = isset($data['referenceId']) ? $data['referenceId'] : null;
        $this->container['deviceDataUrl'] = isset($data['deviceDataUrl']) ? $data['deviceDataUrl'] : null;
        $this->container['jwt'] = isset($data['jwt']) ? $data['jwt'] : null;
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
     * @param string $merchantNo 收款商编
     *
     * @return $this
     */
    public function setMerchantNo($merchantNo)
    {
        $this->container['merchantNo'] = $merchantNo;

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
     * @param string $orderId 商户请求号
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
     * @param string $uniqueOrderNo 易宝订单号
     *
     * @return $this
     */
    public function setUniqueOrderNo($uniqueOrderNo)
    {
        $this->container['uniqueOrderNo'] = $uniqueOrderNo;

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
     * @param string $status 订单状态
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets bankPaySuccessDate
     *
     * @return string
     */
    public function getBankPaySuccessDate()
    {
        return $this->container['bankPaySuccessDate'];
    }

    /**
     * Sets bankPaySuccessDate
     *
     * @param string $bankPaySuccessDate 渠道支付完成时间
     *
     * @return $this
     */
    public function setBankPaySuccessDate($bankPaySuccessDate)
    {
        $this->container['bankPaySuccessDate'] = $bankPaySuccessDate;

        return $this;
    }

    /**
     * Gets riskValidateUrl
     *
     * @return string
     */
    public function getRiskValidateUrl()
    {
        return $this->container['riskValidateUrl'];
    }

    /**
     * Sets riskValidateUrl
     *
     * @param string $riskValidateUrl 风控校验url
     *
     * @return $this
     */
    public function setRiskValidateUrl($riskValidateUrl)
    {
        $this->container['riskValidateUrl'] = $riskValidateUrl;

        return $this;
    }

    /**
     * Gets riskValidateToken
     *
     * @return string
     */
    public function getRiskValidateToken()
    {
        return $this->container['riskValidateToken'];
    }

    /**
     * Sets riskValidateToken
     *
     * @param string $riskValidateToken 风控校验token
     *
     * @return $this
     */
    public function setRiskValidateToken($riskValidateToken)
    {
        $this->container['riskValidateToken'] = $riskValidateToken;

        return $this;
    }

    /**
     * Gets referenceId
     *
     * @return string
     */
    public function getReferenceId()
    {
        return $this->container['referenceId'];
    }

    /**
     * Sets referenceId
     *
     * @param string $referenceId 采集设备指纹
     *
     * @return $this
     */
    public function setReferenceId($referenceId)
    {
        $this->container['referenceId'] = $referenceId;

        return $this;
    }

    /**
     * Gets deviceDataUrl
     *
     * @return string
     */
    public function getDeviceDataUrl()
    {
        return $this->container['deviceDataUrl'];
    }

    /**
     * Sets deviceDataUrl
     *
     * @param string $deviceDataUrl 设备指纹采集的URL
     *
     * @return $this
     */
    public function setDeviceDataUrl($deviceDataUrl)
    {
        $this->container['deviceDataUrl'] = $deviceDataUrl;

        return $this;
    }

    /**
     * Gets jwt
     *
     * @return string
     */
    public function getJwt()
    {
        return $this->container['jwt'];
    }

    /**
     * Sets jwt
     *
     * @param string $jwt 交易JWT
     *
     * @return $this
     */
    public function setJwt($jwt)
    {
        $this->container['jwt'] = $jwt;

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


