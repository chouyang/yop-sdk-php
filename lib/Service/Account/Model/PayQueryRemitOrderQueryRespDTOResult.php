<?php
/**
 * PayQueryRemitOrderQueryRespDTOResult
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
 * PayQueryRemitOrderQueryRespDTOResult Class Doc Comment
 *
 * @category Class
 * @package  Yeepay\Yop\Sdk\
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PayQueryRemitOrderQueryRespDTOResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PayQueryRemitOrderQueryRespDTOResult';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'returnCode' => 'string',
        'returnMsg' => 'string',
        'requestNo' => 'string',
        'orderNo' => 'string',
        'merchantNo' => 'string',
        'orderAmount' => 'float',
        'receiveAmount' => 'float',
        'debitAmount' => 'float',
        'orderTime' => 'string',
        'finishTime' => 'string',
        'fee' => 'float',
        'feeUndertakerMerchantNo' => 'string',
        'status' => 'string',
        'failReason' => 'string',
        'receiveType' => 'string',
        'receiverAccountNo' => 'string',
        'receiverAccountName' => 'string',
        'receiverBankCode' => 'string',
        'branchBankCode' => 'string',
        'comments' => 'string',
        'isReversed' => 'bool',
        'reverseTime' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'returnCode' => null,
        'returnMsg' => null,
        'requestNo' => null,
        'orderNo' => null,
        'merchantNo' => null,
        'orderAmount' => null,
        'receiveAmount' => null,
        'debitAmount' => null,
        'orderTime' => 'date-time',
        'finishTime' => 'date-time',
        'fee' => null,
        'feeUndertakerMerchantNo' => null,
        'status' => null,
        'failReason' => null,
        'receiveType' => null,
        'receiverAccountNo' => null,
        'receiverAccountName' => null,
        'receiverBankCode' => null,
        'branchBankCode' => null,
        'comments' => null,
        'isReversed' => null,
        'reverseTime' => 'date-time'
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
        'returnCode' => 'returnCode',
        'returnMsg' => 'returnMsg',
        'requestNo' => 'requestNo',
        'orderNo' => 'orderNo',
        'merchantNo' => 'merchantNo',
        'orderAmount' => 'orderAmount',
        'receiveAmount' => 'receiveAmount',
        'debitAmount' => 'debitAmount',
        'orderTime' => 'orderTime',
        'finishTime' => 'finishTime',
        'fee' => 'fee',
        'feeUndertakerMerchantNo' => 'feeUndertakerMerchantNo',
        'status' => 'status',
        'failReason' => 'failReason',
        'receiveType' => 'receiveType',
        'receiverAccountNo' => 'receiverAccountNo',
        'receiverAccountName' => 'receiverAccountName',
        'receiverBankCode' => 'receiverBankCode',
        'branchBankCode' => 'branchBankCode',
        'comments' => 'comments',
        'isReversed' => 'isReversed',
        'reverseTime' => 'reverseTime'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'returnCode' => 'setReturnCode',
        'returnMsg' => 'setReturnMsg',
        'requestNo' => 'setRequestNo',
        'orderNo' => 'setOrderNo',
        'merchantNo' => 'setMerchantNo',
        'orderAmount' => 'setOrderAmount',
        'receiveAmount' => 'setReceiveAmount',
        'debitAmount' => 'setDebitAmount',
        'orderTime' => 'setOrderTime',
        'finishTime' => 'setFinishTime',
        'fee' => 'setFee',
        'feeUndertakerMerchantNo' => 'setFeeUndertakerMerchantNo',
        'status' => 'setStatus',
        'failReason' => 'setFailReason',
        'receiveType' => 'setReceiveType',
        'receiverAccountNo' => 'setReceiverAccountNo',
        'receiverAccountName' => 'setReceiverAccountName',
        'receiverBankCode' => 'setReceiverBankCode',
        'branchBankCode' => 'setBranchBankCode',
        'comments' => 'setComments',
        'isReversed' => 'setIsReversed',
        'reverseTime' => 'setReverseTime'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'returnCode' => 'getReturnCode',
        'returnMsg' => 'getReturnMsg',
        'requestNo' => 'getRequestNo',
        'orderNo' => 'getOrderNo',
        'merchantNo' => 'getMerchantNo',
        'orderAmount' => 'getOrderAmount',
        'receiveAmount' => 'getReceiveAmount',
        'debitAmount' => 'getDebitAmount',
        'orderTime' => 'getOrderTime',
        'finishTime' => 'getFinishTime',
        'fee' => 'getFee',
        'feeUndertakerMerchantNo' => 'getFeeUndertakerMerchantNo',
        'status' => 'getStatus',
        'failReason' => 'getFailReason',
        'receiveType' => 'getReceiveType',
        'receiverAccountNo' => 'getReceiverAccountNo',
        'receiverAccountName' => 'getReceiverAccountName',
        'receiverBankCode' => 'getReceiverBankCode',
        'branchBankCode' => 'getBranchBankCode',
        'comments' => 'getComments',
        'isReversed' => 'getIsReversed',
        'reverseTime' => 'getReverseTime'
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
        $this->container['returnCode'] = isset($data['returnCode']) ? $data['returnCode'] : null;
        $this->container['returnMsg'] = isset($data['returnMsg']) ? $data['returnMsg'] : null;
        $this->container['requestNo'] = isset($data['requestNo']) ? $data['requestNo'] : null;
        $this->container['orderNo'] = isset($data['orderNo']) ? $data['orderNo'] : null;
        $this->container['merchantNo'] = isset($data['merchantNo']) ? $data['merchantNo'] : null;
        $this->container['orderAmount'] = isset($data['orderAmount']) ? $data['orderAmount'] : null;
        $this->container['receiveAmount'] = isset($data['receiveAmount']) ? $data['receiveAmount'] : null;
        $this->container['debitAmount'] = isset($data['debitAmount']) ? $data['debitAmount'] : null;
        $this->container['orderTime'] = isset($data['orderTime']) ? $data['orderTime'] : null;
        $this->container['finishTime'] = isset($data['finishTime']) ? $data['finishTime'] : null;
        $this->container['fee'] = isset($data['fee']) ? $data['fee'] : null;
        $this->container['feeUndertakerMerchantNo'] = isset($data['feeUndertakerMerchantNo']) ? $data['feeUndertakerMerchantNo'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['failReason'] = isset($data['failReason']) ? $data['failReason'] : null;
        $this->container['receiveType'] = isset($data['receiveType']) ? $data['receiveType'] : null;
        $this->container['receiverAccountNo'] = isset($data['receiverAccountNo']) ? $data['receiverAccountNo'] : null;
        $this->container['receiverAccountName'] = isset($data['receiverAccountName']) ? $data['receiverAccountName'] : null;
        $this->container['receiverBankCode'] = isset($data['receiverBankCode']) ? $data['receiverBankCode'] : null;
        $this->container['branchBankCode'] = isset($data['branchBankCode']) ? $data['branchBankCode'] : null;
        $this->container['comments'] = isset($data['comments']) ? $data['comments'] : null;
        $this->container['isReversed'] = isset($data['isReversed']) ? $data['isReversed'] : null;
        $this->container['reverseTime'] = isset($data['reverseTime']) ? $data['reverseTime'] : null;
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
     * Gets returnCode
     *
     * @return string
     */
    public function getReturnCode()
    {
        return $this->container['returnCode'];
    }

    /**
     * Sets returnCode
     *
     * @param string $returnCode 返回码
     *
     * @return $this
     */
    public function setReturnCode($returnCode)
    {
        $this->container['returnCode'] = $returnCode;

        return $this;
    }

    /**
     * Gets returnMsg
     *
     * @return string
     */
    public function getReturnMsg()
    {
        return $this->container['returnMsg'];
    }

    /**
     * Sets returnMsg
     *
     * @param string $returnMsg 返回信息
     *
     * @return $this
     */
    public function setReturnMsg($returnMsg)
    {
        $this->container['returnMsg'] = $returnMsg;

        return $this;
    }

    /**
     * Gets requestNo
     *
     * @return string
     */
    public function getRequestNo()
    {
        return $this->container['requestNo'];
    }

    /**
     * Sets requestNo
     *
     * @param string $requestNo 商户请求号
     *
     * @return $this
     */
    public function setRequestNo($requestNo)
    {
        $this->container['requestNo'] = $requestNo;

        return $this;
    }

    /**
     * Gets orderNo
     *
     * @return string
     */
    public function getOrderNo()
    {
        return $this->container['orderNo'];
    }

    /**
     * Sets orderNo
     *
     * @param string $orderNo 易宝付款订单号
     *
     * @return $this
     */
    public function setOrderNo($orderNo)
    {
        $this->container['orderNo'] = $orderNo;

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
     * @param string $merchantNo 商户编号
     *
     * @return $this
     */
    public function setMerchantNo($merchantNo)
    {
        $this->container['merchantNo'] = $merchantNo;

        return $this;
    }

    /**
     * Gets orderAmount
     *
     * @return float
     */
    public function getOrderAmount()
    {
        return $this->container['orderAmount'];
    }

    /**
     * Sets orderAmount
     *
     * @param float $orderAmount 付款金额
     *
     * @return $this
     */
    public function setOrderAmount($orderAmount)
    {
        $this->container['orderAmount'] = $orderAmount;

        return $this;
    }

    /**
     * Gets receiveAmount
     *
     * @return float
     */
    public function getReceiveAmount()
    {
        return $this->container['receiveAmount'];
    }

    /**
     * Sets receiveAmount
     *
     * @param float $receiveAmount 到账金额
     *
     * @return $this
     */
    public function setReceiveAmount($receiveAmount)
    {
        $this->container['receiveAmount'] = $receiveAmount;

        return $this;
    }

    /**
     * Gets debitAmount
     *
     * @return float
     */
    public function getDebitAmount()
    {
        return $this->container['debitAmount'];
    }

    /**
     * Sets debitAmount
     *
     * @param float $debitAmount 扣账金额
     *
     * @return $this
     */
    public function setDebitAmount($debitAmount)
    {
        $this->container['debitAmount'] = $debitAmount;

        return $this;
    }

    /**
     * Gets orderTime
     *
     * @return string
     */
    public function getOrderTime()
    {
        return $this->container['orderTime'];
    }

    /**
     * Sets orderTime
     *
     * @param string $orderTime 付款下单时间
     *
     * @return $this
     */
    public function setOrderTime($orderTime)
    {
        $this->container['orderTime'] = $orderTime;

        return $this;
    }

    /**
     * Gets finishTime
     *
     * @return string
     */
    public function getFinishTime()
    {
        return $this->container['finishTime'];
    }

    /**
     * Sets finishTime
     *
     * @param string $finishTime 付款完成时间
     *
     * @return $this
     */
    public function setFinishTime($finishTime)
    {
        $this->container['finishTime'] = $finishTime;

        return $this;
    }

    /**
     * Gets fee
     *
     * @return float
     */
    public function getFee()
    {
        return $this->container['fee'];
    }

    /**
     * Sets fee
     *
     * @param float $fee 手续费
     *
     * @return $this
     */
    public function setFee($fee)
    {
        $this->container['fee'] = $fee;

        return $this;
    }

    /**
     * Gets feeUndertakerMerchantNo
     *
     * @return string
     */
    public function getFeeUndertakerMerchantNo()
    {
        return $this->container['feeUndertakerMerchantNo'];
    }

    /**
     * Sets feeUndertakerMerchantNo
     *
     * @param string $feeUndertakerMerchantNo 手续费承担方商编
     *
     * @return $this
     */
    public function setFeeUndertakerMerchantNo($feeUndertakerMerchantNo)
    {
        $this->container['feeUndertakerMerchantNo'] = $feeUndertakerMerchantNo;

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
     * Gets failReason
     *
     * @return string
     */
    public function getFailReason()
    {
        return $this->container['failReason'];
    }

    /**
     * Sets failReason
     *
     * @param string $failReason 失败原因
     *
     * @return $this
     */
    public function setFailReason($failReason)
    {
        $this->container['failReason'] = $failReason;

        return $this;
    }

    /**
     * Gets receiveType
     *
     * @return string
     */
    public function getReceiveType()
    {
        return $this->container['receiveType'];
    }

    /**
     * Sets receiveType
     *
     * @param string $receiveType 到账类型
     *
     * @return $this
     */
    public function setReceiveType($receiveType)
    {
        $this->container['receiveType'] = $receiveType;

        return $this;
    }

    /**
     * Gets receiverAccountNo
     *
     * @return string
     */
    public function getReceiverAccountNo()
    {
        return $this->container['receiverAccountNo'];
    }

    /**
     * Sets receiverAccountNo
     *
     * @param string $receiverAccountNo 收款方银行账号
     *
     * @return $this
     */
    public function setReceiverAccountNo($receiverAccountNo)
    {
        $this->container['receiverAccountNo'] = $receiverAccountNo;

        return $this;
    }

    /**
     * Gets receiverAccountName
     *
     * @return string
     */
    public function getReceiverAccountName()
    {
        return $this->container['receiverAccountName'];
    }

    /**
     * Sets receiverAccountName
     *
     * @param string $receiverAccountName 收款方开户名
     *
     * @return $this
     */
    public function setReceiverAccountName($receiverAccountName)
    {
        $this->container['receiverAccountName'] = $receiverAccountName;

        return $this;
    }

    /**
     * Gets receiverBankCode
     *
     * @return string
     */
    public function getReceiverBankCode()
    {
        return $this->container['receiverBankCode'];
    }

    /**
     * Sets receiverBankCode
     *
     * @param string $receiverBankCode 收款方开户行编码
     *
     * @return $this
     */
    public function setReceiverBankCode($receiverBankCode)
    {
        $this->container['receiverBankCode'] = $receiverBankCode;

        return $this;
    }

    /**
     * Gets branchBankCode
     *
     * @return string
     */
    public function getBranchBankCode()
    {
        return $this->container['branchBankCode'];
    }

    /**
     * Sets branchBankCode
     *
     * @param string $branchBankCode 支行编码
     *
     * @return $this
     */
    public function setBranchBankCode($branchBankCode)
    {
        $this->container['branchBankCode'] = $branchBankCode;

        return $this;
    }

    /**
     * Gets comments
     *
     * @return string
     */
    public function getComments()
    {
        return $this->container['comments'];
    }

    /**
     * Sets comments
     *
     * @param string $comments 银行附言
     *
     * @return $this
     */
    public function setComments($comments)
    {
        $this->container['comments'] = $comments;

        return $this;
    }

    /**
     * Gets isReversed
     *
     * @return bool
     */
    public function getIsReversed()
    {
        return $this->container['isReversed'];
    }

    /**
     * Sets isReversed
     *
     * @param bool $isReversed 冲退标识
     *
     * @return $this
     */
    public function setIsReversed($isReversed)
    {
        $this->container['isReversed'] = $isReversed;

        return $this;
    }

    /**
     * Gets reverseTime
     *
     * @return string
     */
    public function getReverseTime()
    {
        return $this->container['reverseTime'];
    }

    /**
     * Sets reverseTime
     *
     * @param string $reverseTime 冲退时间
     *
     * @return $this
     */
    public function setReverseTime($reverseTime)
    {
        $this->container['reverseTime'] = $reverseTime;

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


