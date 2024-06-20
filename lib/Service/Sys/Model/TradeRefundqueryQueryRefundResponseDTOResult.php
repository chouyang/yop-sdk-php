<?php
/**
 * TradeRefundqueryQueryRefundResponseDTOResult
 *
 * PHP version 5
 *
 * @category Class
 * @package  Yeepay\Yop\Sdk\
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * 子商户入网大算航旅
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

namespace Yeepay\Yop\Sdk\Service\Sys\Model;

use \ArrayAccess;
use Yeepay\Yop\Sdk\Model\ModelInterface;
use Yeepay\Yop\Sdk\Utils\ObjectSerializer;

/**
 * TradeRefundqueryQueryRefundResponseDTOResult Class Doc Comment
 *
 * @category Class
 * @package  Yeepay\Yop\Sdk\
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TradeRefundqueryQueryRefundResponseDTOResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TradeRefundqueryQueryRefundResponseDTOResult';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'code' => 'string',
        'message' => 'string',
        'parentMerchantNo' => 'string',
        'merchantNo' => 'string',
        'orderId' => 'string',
        'refundRequestId' => 'string',
        'uniqueOrderNo' => 'string',
        'uniqueRefundNo' => 'string',
        'refundAmount' => 'float',
        'returnMerchantFee' => 'float',
        'returnCustomerFee' => 'float',
        'status' => 'string',
        'description' => 'string',
        'refundRequestDate' => 'string',
        'refundSuccessDate' => 'string',
        'realDeductAmount' => 'float',
        'realRefundAmount' => 'float',
        'accountDivided' => 'string',
        'cashRefundFee' => 'float',
        'bankPromotionInfoDTOList' => '\Yeepay\Yop\Sdk\Service\Sys\Model\TradeRefundqueryBankPromotionInfoDTOResult[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'code' => null,
        'message' => null,
        'parentMerchantNo' => null,
        'merchantNo' => null,
        'orderId' => null,
        'refundRequestId' => null,
        'uniqueOrderNo' => null,
        'uniqueRefundNo' => null,
        'refundAmount' => null,
        'returnMerchantFee' => null,
        'returnCustomerFee' => null,
        'status' => null,
        'description' => null,
        'refundRequestDate' => null,
        'refundSuccessDate' => null,
        'realDeductAmount' => null,
        'realRefundAmount' => null,
        'accountDivided' => null,
        'cashRefundFee' => null,
        'bankPromotionInfoDTOList' => null
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
        'parentMerchantNo' => 'parentMerchantNo',
        'merchantNo' => 'merchantNo',
        'orderId' => 'orderId',
        'refundRequestId' => 'refundRequestId',
        'uniqueOrderNo' => 'uniqueOrderNo',
        'uniqueRefundNo' => 'uniqueRefundNo',
        'refundAmount' => 'refundAmount',
        'returnMerchantFee' => 'returnMerchantFee',
        'returnCustomerFee' => 'returnCustomerFee',
        'status' => 'status',
        'description' => 'description',
        'refundRequestDate' => 'refundRequestDate',
        'refundSuccessDate' => 'refundSuccessDate',
        'realDeductAmount' => 'realDeductAmount',
        'realRefundAmount' => 'realRefundAmount',
        'accountDivided' => 'accountDivided',
        'cashRefundFee' => 'cashRefundFee',
        'bankPromotionInfoDTOList' => 'bankPromotionInfoDTOList'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'code' => 'setCode',
        'message' => 'setMessage',
        'parentMerchantNo' => 'setParentMerchantNo',
        'merchantNo' => 'setMerchantNo',
        'orderId' => 'setOrderId',
        'refundRequestId' => 'setRefundRequestId',
        'uniqueOrderNo' => 'setUniqueOrderNo',
        'uniqueRefundNo' => 'setUniqueRefundNo',
        'refundAmount' => 'setRefundAmount',
        'returnMerchantFee' => 'setReturnMerchantFee',
        'returnCustomerFee' => 'setReturnCustomerFee',
        'status' => 'setStatus',
        'description' => 'setDescription',
        'refundRequestDate' => 'setRefundRequestDate',
        'refundSuccessDate' => 'setRefundSuccessDate',
        'realDeductAmount' => 'setRealDeductAmount',
        'realRefundAmount' => 'setRealRefundAmount',
        'accountDivided' => 'setAccountDivided',
        'cashRefundFee' => 'setCashRefundFee',
        'bankPromotionInfoDTOList' => 'setBankPromotionInfoDTOList'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'code' => 'getCode',
        'message' => 'getMessage',
        'parentMerchantNo' => 'getParentMerchantNo',
        'merchantNo' => 'getMerchantNo',
        'orderId' => 'getOrderId',
        'refundRequestId' => 'getRefundRequestId',
        'uniqueOrderNo' => 'getUniqueOrderNo',
        'uniqueRefundNo' => 'getUniqueRefundNo',
        'refundAmount' => 'getRefundAmount',
        'returnMerchantFee' => 'getReturnMerchantFee',
        'returnCustomerFee' => 'getReturnCustomerFee',
        'status' => 'getStatus',
        'description' => 'getDescription',
        'refundRequestDate' => 'getRefundRequestDate',
        'refundSuccessDate' => 'getRefundSuccessDate',
        'realDeductAmount' => 'getRealDeductAmount',
        'realRefundAmount' => 'getRealRefundAmount',
        'accountDivided' => 'getAccountDivided',
        'cashRefundFee' => 'getCashRefundFee',
        'bankPromotionInfoDTOList' => 'getBankPromotionInfoDTOList'
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
        $this->container['parentMerchantNo'] = isset($data['parentMerchantNo']) ? $data['parentMerchantNo'] : null;
        $this->container['merchantNo'] = isset($data['merchantNo']) ? $data['merchantNo'] : null;
        $this->container['orderId'] = isset($data['orderId']) ? $data['orderId'] : null;
        $this->container['refundRequestId'] = isset($data['refundRequestId']) ? $data['refundRequestId'] : null;
        $this->container['uniqueOrderNo'] = isset($data['uniqueOrderNo']) ? $data['uniqueOrderNo'] : null;
        $this->container['uniqueRefundNo'] = isset($data['uniqueRefundNo']) ? $data['uniqueRefundNo'] : null;
        $this->container['refundAmount'] = isset($data['refundAmount']) ? $data['refundAmount'] : null;
        $this->container['returnMerchantFee'] = isset($data['returnMerchantFee']) ? $data['returnMerchantFee'] : null;
        $this->container['returnCustomerFee'] = isset($data['returnCustomerFee']) ? $data['returnCustomerFee'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['refundRequestDate'] = isset($data['refundRequestDate']) ? $data['refundRequestDate'] : null;
        $this->container['refundSuccessDate'] = isset($data['refundSuccessDate']) ? $data['refundSuccessDate'] : null;
        $this->container['realDeductAmount'] = isset($data['realDeductAmount']) ? $data['realDeductAmount'] : null;
        $this->container['realRefundAmount'] = isset($data['realRefundAmount']) ? $data['realRefundAmount'] : null;
        $this->container['accountDivided'] = isset($data['accountDivided']) ? $data['accountDivided'] : null;
        $this->container['cashRefundFee'] = isset($data['cashRefundFee']) ? $data['cashRefundFee'] : null;
        $this->container['bankPromotionInfoDTOList'] = isset($data['bankPromotionInfoDTOList']) ? $data['bankPromotionInfoDTOList'] : null;
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
     * @param string $parentMerchantNo 父商编
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
     * @param string $merchantNo 子商编
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
     * @param string $orderId 商户订单号
     *
     * @return $this
     */
    public function setOrderId($orderId)
    {
        $this->container['orderId'] = $orderId;

        return $this;
    }

    /**
     * Gets refundRequestId
     *
     * @return string
     */
    public function getRefundRequestId()
    {
        return $this->container['refundRequestId'];
    }

    /**
     * Sets refundRequestId
     *
     * @param string $refundRequestId 商户退款请求号
     *
     * @return $this
     */
    public function setRefundRequestId($refundRequestId)
    {
        $this->container['refundRequestId'] = $refundRequestId;

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
     * Gets uniqueRefundNo
     *
     * @return string
     */
    public function getUniqueRefundNo()
    {
        return $this->container['uniqueRefundNo'];
    }

    /**
     * Sets uniqueRefundNo
     *
     * @param string $uniqueRefundNo 易宝退款订单号
     *
     * @return $this
     */
    public function setUniqueRefundNo($uniqueRefundNo)
    {
        $this->container['uniqueRefundNo'] = $uniqueRefundNo;

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
     * @param float $refundAmount 退款请求金额
     *
     * @return $this
     */
    public function setRefundAmount($refundAmount)
    {
        $this->container['refundAmount'] = $refundAmount;

        return $this;
    }

    /**
     * Gets returnMerchantFee
     *
     * @return float
     */
    public function getReturnMerchantFee()
    {
        return $this->container['returnMerchantFee'];
    }

    /**
     * Sets returnMerchantFee
     *
     * @param float $returnMerchantFee 返还商户手续费
     *
     * @return $this
     */
    public function setReturnMerchantFee($returnMerchantFee)
    {
        $this->container['returnMerchantFee'] = $returnMerchantFee;

        return $this;
    }

    /**
     * Gets returnCustomerFee
     *
     * @return float
     */
    public function getReturnCustomerFee()
    {
        return $this->container['returnCustomerFee'];
    }

    /**
     * Sets returnCustomerFee
     *
     * @param float $returnCustomerFee 返回用户手续费
     *
     * @return $this
     */
    public function setReturnCustomerFee($returnCustomerFee)
    {
        $this->container['returnCustomerFee'] = $returnCustomerFee;

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
     * @param string $status 退款状态
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description 退款描述信息
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets refundRequestDate
     *
     * @return string
     */
    public function getRefundRequestDate()
    {
        return $this->container['refundRequestDate'];
    }

    /**
     * Sets refundRequestDate
     *
     * @param string $refundRequestDate 退款请求时间
     *
     * @return $this
     */
    public function setRefundRequestDate($refundRequestDate)
    {
        $this->container['refundRequestDate'] = $refundRequestDate;

        return $this;
    }

    /**
     * Gets refundSuccessDate
     *
     * @return string
     */
    public function getRefundSuccessDate()
    {
        return $this->container['refundSuccessDate'];
    }

    /**
     * Sets refundSuccessDate
     *
     * @param string $refundSuccessDate 退款成功时间
     *
     * @return $this
     */
    public function setRefundSuccessDate($refundSuccessDate)
    {
        $this->container['refundSuccessDate'] = $refundSuccessDate;

        return $this;
    }

    /**
     * Gets realDeductAmount
     *
     * @return float
     */
    public function getRealDeductAmount()
    {
        return $this->container['realDeductAmount'];
    }

    /**
     * Sets realDeductAmount
     *
     * @param float $realDeductAmount 实扣金额
     *
     * @return $this
     */
    public function setRealDeductAmount($realDeductAmount)
    {
        $this->container['realDeductAmount'] = $realDeductAmount;

        return $this;
    }

    /**
     * Gets realRefundAmount
     *
     * @return float
     */
    public function getRealRefundAmount()
    {
        return $this->container['realRefundAmount'];
    }

    /**
     * Sets realRefundAmount
     *
     * @param float $realRefundAmount 实退金额
     *
     * @return $this
     */
    public function setRealRefundAmount($realRefundAmount)
    {
        $this->container['realRefundAmount'] = $realRefundAmount;

        return $this;
    }

    /**
     * Gets accountDivided
     *
     * @return string
     */
    public function getAccountDivided()
    {
        return $this->container['accountDivided'];
    }

    /**
     * Sets accountDivided
     *
     * @param string $accountDivided 分账规则
     *
     * @return $this
     */
    public function setAccountDivided($accountDivided)
    {
        $this->container['accountDivided'] = $accountDivided;

        return $this;
    }

    /**
     * Gets cashRefundFee
     *
     * @return float
     */
    public function getCashRefundFee()
    {
        return $this->container['cashRefundFee'];
    }

    /**
     * Sets cashRefundFee
     *
     * @param float $cashRefundFee 现金退款金额
     *
     * @return $this
     */
    public function setCashRefundFee($cashRefundFee)
    {
        $this->container['cashRefundFee'] = $cashRefundFee;

        return $this;
    }

    /**
     * Gets bankPromotionInfoDTOList
     *
     * @return \Yeepay\Yop\Sdk\Service\Sys\Model\TradeRefundqueryBankPromotionInfoDTOResult[]
     */
    public function getBankPromotionInfoDTOList()
    {
        return $this->container['bankPromotionInfoDTOList'];
    }

    /**
     * Sets bankPromotionInfoDTOList
     *
     * @param \Yeepay\Yop\Sdk\Service\Sys\Model\TradeRefundqueryBankPromotionInfoDTOResult[] $bankPromotionInfoDTOList 银行优惠卡券列表
     *
     * @return $this
     */
    public function setBankPromotionInfoDTOList($bankPromotionInfoDTOList)
    {
        $this->container['bankPromotionInfoDTOList'] = $bankPromotionInfoDTOList;

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


