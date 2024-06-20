<?php
/**
 * YopSettleReceiptRequestDTO
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
 * YopSettleReceiptRequestDTO Class Doc Comment
 *
 * @category Class
 * @description 结算回单申请
 * @package  Yeepay\Yop\Sdk\
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class YopSettleReceiptRequestDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'YopSettleReceiptRequestDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'parentMerchantNo' => 'string',
        'merchantNo' => 'string',
        'receiverMerchantNo' => 'string',
        'notifyUrl' => 'string',
        'settleStartTime' => 'string',
        'settleEndTime' => 'string',
        'settleRequestNo' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'parentMerchantNo' => null,
        'merchantNo' => null,
        'receiverMerchantNo' => null,
        'notifyUrl' => 'notify-url',
        'settleStartTime' => null,
        'settleEndTime' => null,
        'settleRequestNo' => null
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
        'receiverMerchantNo' => 'receiverMerchantNo',
        'notifyUrl' => 'notifyUrl',
        'settleStartTime' => 'settleStartTime',
        'settleEndTime' => 'settleEndTime',
        'settleRequestNo' => 'settleRequestNo'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'parentMerchantNo' => 'setParentMerchantNo',
        'merchantNo' => 'setMerchantNo',
        'receiverMerchantNo' => 'setReceiverMerchantNo',
        'notifyUrl' => 'setNotifyUrl',
        'settleStartTime' => 'setSettleStartTime',
        'settleEndTime' => 'setSettleEndTime',
        'settleRequestNo' => 'setSettleRequestNo'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'parentMerchantNo' => 'getParentMerchantNo',
        'merchantNo' => 'getMerchantNo',
        'receiverMerchantNo' => 'getReceiverMerchantNo',
        'notifyUrl' => 'getNotifyUrl',
        'settleStartTime' => 'getSettleStartTime',
        'settleEndTime' => 'getSettleEndTime',
        'settleRequestNo' => 'getSettleRequestNo'
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
        $this->container['receiverMerchantNo'] = isset($data['receiverMerchantNo']) ? $data['receiverMerchantNo'] : null;
        $this->container['notifyUrl'] = isset($data['notifyUrl']) ? $data['notifyUrl'] : null;
        $this->container['settleStartTime'] = isset($data['settleStartTime']) ? $data['settleStartTime'] : null;
        $this->container['settleEndTime'] = isset($data['settleEndTime']) ? $data['settleEndTime'] : null;
        $this->container['settleRequestNo'] = isset($data['settleRequestNo']) ? $data['settleRequestNo'] : null;
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
        if ($this->container['notifyUrl'] === null) {
            $invalidProperties[] = "'notifyUrl' can't be null";
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
     * @param string $parentMerchantNo <p>发起方商户编号<br />*标准商户收付款方案中此参数与收款商户编号一致；<br />*平台商户收付款方案中此参数为平台商商户编号；<br />*服务商解决方案中，①标准商户收款时，该参数为标准商户商编 ②平台商收款或平台商入驻商户收款时，该参数为平台商商编。</p>
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
     * @param string $merchantNo <p>收款商户编号或入账方id</p>
     *
     * @return $this
     */
    public function setMerchantNo($merchantNo)
    {
        $this->container['merchantNo'] = $merchantNo;

        return $this;
    }

    /**
     * Gets receiverMerchantNo
     *
     * @return string
     */
    public function getReceiverMerchantNo()
    {
        return $this->container['receiverMerchantNo'];
    }

    /**
     * Sets receiverMerchantNo
     *
     * @param string $receiverMerchantNo <div><span class=\"text-only\" data-eleid=\"5\">用于申请入账方的结算回单，如果merchantno传入了入账方id，需要传入入账方的归属商编。</span></div>
     *
     * @return $this
     */
    public function setReceiverMerchantNo($receiverMerchantNo)
    {
        $this->container['receiverMerchantNo'] = $receiverMerchantNo;

        return $this;
    }

    /**
     * Gets notifyUrl
     *
     * @return string
     */
    public function getNotifyUrl()
    {
        return $this->container['notifyUrl'];
    }

    /**
     * Sets notifyUrl
     *
     * @param string $notifyUrl notifyUrl
     *
     * @return $this
     */
    public function setNotifyUrl($notifyUrl)
    {
        $this->container['notifyUrl'] = $notifyUrl;

        return $this;
    }

    /**
     * Gets settleStartTime
     *
     * @return string
     */
    public function getSettleStartTime()
    {
        return $this->container['settleStartTime'];
    }

    /**
     * Sets settleStartTime
     *
     * @param string $settleStartTime <p>结算时间范围开始时间，此参数和结算请求号只能传一项</p>
     *
     * @return $this
     */
    public function setSettleStartTime($settleStartTime)
    {
        $this->container['settleStartTime'] = $settleStartTime;

        return $this;
    }

    /**
     * Gets settleEndTime
     *
     * @return string
     */
    public function getSettleEndTime()
    {
        return $this->container['settleEndTime'];
    }

    /**
     * Sets settleEndTime
     *
     * @param string $settleEndTime <p>结算时间范围截止时间，此参数和结算请求号只能传一项</p>
     *
     * @return $this
     */
    public function setSettleEndTime($settleEndTime)
    {
        $this->container['settleEndTime'] = $settleEndTime;

        return $this;
    }

    /**
     * Gets settleRequestNo
     *
     * @return string
     */
    public function getSettleRequestNo()
    {
        return $this->container['settleRequestNo'];
    }

    /**
     * Sets settleRequestNo
     *
     * @param string $settleRequestNo <p>结算请求号，此参数和结算时间范围参数只能传一项</p>
     *
     * @return $this
     */
    public function setSettleRequestNo($settleRequestNo)
    {
        $this->container['settleRequestNo'] = $settleRequestNo;

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


