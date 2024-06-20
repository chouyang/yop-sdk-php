<?php
/**
 * AccountdetailsPageQueryAccountBusinessDTOResult
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
 * AccountdetailsPageQueryAccountBusinessDTOResult Class Doc Comment
 *
 * @category Class
 * @package  Yeepay\Yop\Sdk\
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AccountdetailsPageQueryAccountBusinessDTOResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AccountdetailsPageQueryAccountBusinessDTOResult';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'trxTime' => 'string',
        'trxType' => 'string',
        'direction' => 'string',
        'amount' => 'float',
        'balance' => 'float',
        'oppTrxNo' => 'string',
        'bankTrxFlowNo' => 'string',
        'memo' => 'string',
        'status' => 'string',
        'bindBankCardNo' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'trxTime' => null,
        'trxType' => null,
        'direction' => null,
        'amount' => null,
        'balance' => null,
        'oppTrxNo' => null,
        'bankTrxFlowNo' => null,
        'memo' => null,
        'status' => null,
        'bindBankCardNo' => null
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
        'trxTime' => 'trxTime',
        'trxType' => 'trxType',
        'direction' => 'direction',
        'amount' => 'amount',
        'balance' => 'balance',
        'oppTrxNo' => 'oppTrxNo',
        'bankTrxFlowNo' => 'bankTrxFlowNo',
        'memo' => 'memo',
        'status' => 'status',
        'bindBankCardNo' => 'bindBankCardNo'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'trxTime' => 'setTrxTime',
        'trxType' => 'setTrxType',
        'direction' => 'setDirection',
        'amount' => 'setAmount',
        'balance' => 'setBalance',
        'oppTrxNo' => 'setOppTrxNo',
        'bankTrxFlowNo' => 'setBankTrxFlowNo',
        'memo' => 'setMemo',
        'status' => 'setStatus',
        'bindBankCardNo' => 'setBindBankCardNo'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'trxTime' => 'getTrxTime',
        'trxType' => 'getTrxType',
        'direction' => 'getDirection',
        'amount' => 'getAmount',
        'balance' => 'getBalance',
        'oppTrxNo' => 'getOppTrxNo',
        'bankTrxFlowNo' => 'getBankTrxFlowNo',
        'memo' => 'getMemo',
        'status' => 'getStatus',
        'bindBankCardNo' => 'getBindBankCardNo'
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
        $this->container['trxTime'] = isset($data['trxTime']) ? $data['trxTime'] : null;
        $this->container['trxType'] = isset($data['trxType']) ? $data['trxType'] : null;
        $this->container['direction'] = isset($data['direction']) ? $data['direction'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['balance'] = isset($data['balance']) ? $data['balance'] : null;
        $this->container['oppTrxNo'] = isset($data['oppTrxNo']) ? $data['oppTrxNo'] : null;
        $this->container['bankTrxFlowNo'] = isset($data['bankTrxFlowNo']) ? $data['bankTrxFlowNo'] : null;
        $this->container['memo'] = isset($data['memo']) ? $data['memo'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['bindBankCardNo'] = isset($data['bindBankCardNo']) ? $data['bindBankCardNo'] : null;
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
     * Gets trxTime
     *
     * @return string
     */
    public function getTrxTime()
    {
        return $this->container['trxTime'];
    }

    /**
     * Sets trxTime
     *
     * @param string $trxTime 交易时间
     *
     * @return $this
     */
    public function setTrxTime($trxTime)
    {
        $this->container['trxTime'] = $trxTime;

        return $this;
    }

    /**
     * Gets trxType
     *
     * @return string
     */
    public function getTrxType()
    {
        return $this->container['trxType'];
    }

    /**
     * Sets trxType
     *
     * @param string $trxType 交易类型
     *
     * @return $this
     */
    public function setTrxType($trxType)
    {
        $this->container['trxType'] = $trxType;

        return $this;
    }

    /**
     * Gets direction
     *
     * @return string
     */
    public function getDirection()
    {
        return $this->container['direction'];
    }

    /**
     * Sets direction
     *
     * @param string $direction 借贷标志
     *
     * @return $this
     */
    public function setDirection($direction)
    {
        $this->container['direction'] = $direction;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return float
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param float $amount 交易金额
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets balance
     *
     * @return float
     */
    public function getBalance()
    {
        return $this->container['balance'];
    }

    /**
     * Sets balance
     *
     * @param float $balance 账户余额
     *
     * @return $this
     */
    public function setBalance($balance)
    {
        $this->container['balance'] = $balance;

        return $this;
    }

    /**
     * Gets oppTrxNo
     *
     * @return string
     */
    public function getOppTrxNo()
    {
        return $this->container['oppTrxNo'];
    }

    /**
     * Sets oppTrxNo
     *
     * @param string $oppTrxNo 对手账号
     *
     * @return $this
     */
    public function setOppTrxNo($oppTrxNo)
    {
        $this->container['oppTrxNo'] = $oppTrxNo;

        return $this;
    }

    /**
     * Gets bankTrxFlowNo
     *
     * @return string
     */
    public function getBankTrxFlowNo()
    {
        return $this->container['bankTrxFlowNo'];
    }

    /**
     * Sets bankTrxFlowNo
     *
     * @param string $bankTrxFlowNo 银行交易流水号
     *
     * @return $this
     */
    public function setBankTrxFlowNo($bankTrxFlowNo)
    {
        $this->container['bankTrxFlowNo'] = $bankTrxFlowNo;

        return $this;
    }

    /**
     * Gets memo
     *
     * @return string
     */
    public function getMemo()
    {
        return $this->container['memo'];
    }

    /**
     * Sets memo
     *
     * @param string $memo 摘要
     *
     * @return $this
     */
    public function setMemo($memo)
    {
        $this->container['memo'] = $memo;

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
     * @param string $status 交易状态
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets bindBankCardNo
     *
     * @return string
     */
    public function getBindBankCardNo()
    {
        return $this->container['bindBankCardNo'];
    }

    /**
     * Sets bindBankCardNo
     *
     * @param string $bindBankCardNo 绑定的一类银行卡号
     *
     * @return $this
     */
    public function setBindBankCardNo($bindBankCardNo)
    {
        $this->container['bindBankCardNo'] = $bindBankCardNo;

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

