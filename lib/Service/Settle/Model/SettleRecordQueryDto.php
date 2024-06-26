<?php
/**
 * SettleRecordQueryDto
 *
 * PHP version 5
 *
 * @category Class
 * @package  Yeepay\Yop\Sdk\
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * 商户结算2.0
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

namespace Yeepay\Yop\Sdk\Service\Settle\Model;

use \ArrayAccess;
use Yeepay\Yop\Sdk\Model\ModelInterface;
use Yeepay\Yop\Sdk\Utils\ObjectSerializer;

/**
 * SettleRecordQueryDto Class Doc Comment
 *
 * @category Class
 * @description 未命名
 * @package  Yeepay\Yop\Sdk\
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SettleRecordQueryDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SettleRecordQueryDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'summaryNo' => 'string',
        'settleAmount' => 'float',
        'status' => 'string',
        'statusDesc' => 'string',
        'createTime' => '\DateTime',
        'settleType' => 'string',
        'realAmount' => 'float',
        'realFee' => 'float',
        'settleRecordDetailsDtos' => '\Yeepay\Yop\Sdk\Service\Settle\Model\SettleRecordDetailsDto[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'summaryNo' => null,
        'settleAmount' => null,
        'status' => null,
        'statusDesc' => null,
        'createTime' => 'date-time',
        'settleType' => null,
        'realAmount' => null,
        'realFee' => null,
        'settleRecordDetailsDtos' => null
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
        'summaryNo' => 'summaryNo',
        'settleAmount' => 'settleAmount',
        'status' => 'status',
        'statusDesc' => 'statusDesc',
        'createTime' => 'createTime',
        'settleType' => 'settleType',
        'realAmount' => 'realAmount',
        'realFee' => 'realFee',
        'settleRecordDetailsDtos' => 'settleRecordDetailsDtos'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'summaryNo' => 'setSummaryNo',
        'settleAmount' => 'setSettleAmount',
        'status' => 'setStatus',
        'statusDesc' => 'setStatusDesc',
        'createTime' => 'setCreateTime',
        'settleType' => 'setSettleType',
        'realAmount' => 'setRealAmount',
        'realFee' => 'setRealFee',
        'settleRecordDetailsDtos' => 'setSettleRecordDetailsDtos'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'summaryNo' => 'getSummaryNo',
        'settleAmount' => 'getSettleAmount',
        'status' => 'getStatus',
        'statusDesc' => 'getStatusDesc',
        'createTime' => 'getCreateTime',
        'settleType' => 'getSettleType',
        'realAmount' => 'getRealAmount',
        'realFee' => 'getRealFee',
        'settleRecordDetailsDtos' => 'getSettleRecordDetailsDtos'
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
        $this->container['summaryNo'] = isset($data['summaryNo']) ? $data['summaryNo'] : null;
        $this->container['settleAmount'] = isset($data['settleAmount']) ? $data['settleAmount'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['statusDesc'] = isset($data['statusDesc']) ? $data['statusDesc'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['settleType'] = isset($data['settleType']) ? $data['settleType'] : null;
        $this->container['realAmount'] = isset($data['realAmount']) ? $data['realAmount'] : null;
        $this->container['realFee'] = isset($data['realFee']) ? $data['realFee'] : null;
        $this->container['settleRecordDetailsDtos'] = isset($data['settleRecordDetailsDtos']) ? $data['settleRecordDetailsDtos'] : null;
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
     * Gets summaryNo
     *
     * @return string
     */
    public function getSummaryNo()
    {
        return $this->container['summaryNo'];
    }

    /**
     * Sets summaryNo
     *
     * @param string $summaryNo 结算订单号
     *
     * @return $this
     */
    public function setSummaryNo($summaryNo)
    {
        $this->container['summaryNo'] = $summaryNo;

        return $this;
    }

    /**
     * Gets settleAmount
     *
     * @return float
     */
    public function getSettleAmount()
    {
        return $this->container['settleAmount'];
    }

    /**
     * Sets settleAmount
     *
     * @param float $settleAmount 应结金额
     *
     * @return $this
     */
    public function setSettleAmount($settleAmount)
    {
        $this->container['settleAmount'] = $settleAmount;

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
     * @param string $status <p>结算订单状态</p> <div> <pre>SUCCESS:结算成功</pre> <div> <pre>BEFORE_REMIT:待出款</pre> <div> <pre>SETTLE_FAIL:结算异常</pre> <div> <pre>REMITTING:银行处理中</pre> <div> <pre>BANK_REVERSE:银行冲正</pre> </div> </div> </div> </div> </div>
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets statusDesc
     *
     * @return string
     */
    public function getStatusDesc()
    {
        return $this->container['statusDesc'];
    }

    /**
     * Sets statusDesc
     *
     * @param string $statusDesc 结算订单状态描述
     *
     * @return $this
     */
    public function setStatusDesc($statusDesc)
    {
        $this->container['statusDesc'] = $statusDesc;

        return $this;
    }

    /**
     * Gets createTime
     *
     * @return \DateTime
     */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
     * Sets createTime
     *
     * @param \DateTime $createTime 结算订单创建时间
     *
     * @return $this
     */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;

        return $this;
    }

    /**
     * Gets settleType
     *
     * @return string
     */
    public function getSettleType()
    {
        return $this->container['settleType'];
    }

    /**
     * Sets settleType
     *
     * @param string $settleType 结算产品
     *
     * @return $this
     */
    public function setSettleType($settleType)
    {
        $this->container['settleType'] = $settleType;

        return $this;
    }

    /**
     * Gets realAmount
     *
     * @return float
     */
    public function getRealAmount()
    {
        return $this->container['realAmount'];
    }

    /**
     * Sets realAmount
     *
     * @param float $realAmount 结算到账金额
     *
     * @return $this
     */
    public function setRealAmount($realAmount)
    {
        $this->container['realAmount'] = $realAmount;

        return $this;
    }

    /**
     * Gets realFee
     *
     * @return float
     */
    public function getRealFee()
    {
        return $this->container['realFee'];
    }

    /**
     * Sets realFee
     *
     * @param float $realFee 结算手续费
     *
     * @return $this
     */
    public function setRealFee($realFee)
    {
        $this->container['realFee'] = $realFee;

        return $this;
    }

    /**
     * Gets settleRecordDetailsDtos
     *
     * @return \Yeepay\Yop\Sdk\Service\Settle\Model\SettleRecordDetailsDto[]
     */
    public function getSettleRecordDetailsDtos()
    {
        return $this->container['settleRecordDetailsDtos'];
    }

    /**
     * Sets settleRecordDetailsDtos
     *
     * @param \Yeepay\Yop\Sdk\Service\Settle\Model\SettleRecordDetailsDto[] $settleRecordDetailsDtos settleRecordDetailsDtos
     *
     * @return $this
     */
    public function setSettleRecordDetailsDtos($settleRecordDetailsDtos)
    {
        $this->container['settleRecordDetailsDtos'] = $settleRecordDetailsDtos;

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


