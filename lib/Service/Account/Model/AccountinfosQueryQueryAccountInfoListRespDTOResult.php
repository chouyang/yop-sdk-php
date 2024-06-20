<?php
/**
 * AccountinfosQueryQueryAccountInfoListRespDTOResult
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
 * AccountinfosQueryQueryAccountInfoListRespDTOResult Class Doc Comment
 *
 * @category Class
 * @package  Yeepay\Yop\Sdk\
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AccountinfosQueryQueryAccountInfoListRespDTOResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AccountinfosQueryQueryAccountInfoListRespDTOResult';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'returnCode' => 'string',
        'returnMsg' => 'string',
        'initiateMerchantNo' => 'string',
        'merchantNo' => 'string',
        'totalAccountBalance' => 'float',
        'accountInfoList' => '\Yeepay\Yop\Sdk\Service\Account\Model\AccountinfosQueryAccountDTOResult[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'returnCode' => null,
        'returnMsg' => null,
        'initiateMerchantNo' => null,
        'merchantNo' => null,
        'totalAccountBalance' => null,
        'accountInfoList' => null
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
        'initiateMerchantNo' => 'initiateMerchantNo',
        'merchantNo' => 'merchantNo',
        'totalAccountBalance' => 'totalAccountBalance',
        'accountInfoList' => 'accountInfoList'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'returnCode' => 'setReturnCode',
        'returnMsg' => 'setReturnMsg',
        'initiateMerchantNo' => 'setInitiateMerchantNo',
        'merchantNo' => 'setMerchantNo',
        'totalAccountBalance' => 'setTotalAccountBalance',
        'accountInfoList' => 'setAccountInfoList'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'returnCode' => 'getReturnCode',
        'returnMsg' => 'getReturnMsg',
        'initiateMerchantNo' => 'getInitiateMerchantNo',
        'merchantNo' => 'getMerchantNo',
        'totalAccountBalance' => 'getTotalAccountBalance',
        'accountInfoList' => 'getAccountInfoList'
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
        $this->container['initiateMerchantNo'] = isset($data['initiateMerchantNo']) ? $data['initiateMerchantNo'] : null;
        $this->container['merchantNo'] = isset($data['merchantNo']) ? $data['merchantNo'] : null;
        $this->container['totalAccountBalance'] = isset($data['totalAccountBalance']) ? $data['totalAccountBalance'] : null;
        $this->container['accountInfoList'] = isset($data['accountInfoList']) ? $data['accountInfoList'] : null;
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
     * Gets initiateMerchantNo
     *
     * @return string
     */
    public function getInitiateMerchantNo()
    {
        return $this->container['initiateMerchantNo'];
    }

    /**
     * Sets initiateMerchantNo
     *
     * @param string $initiateMerchantNo 发起方商户编号
     *
     * @return $this
     */
    public function setInitiateMerchantNo($initiateMerchantNo)
    {
        $this->container['initiateMerchantNo'] = $initiateMerchantNo;

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
     * Gets totalAccountBalance
     *
     * @return float
     */
    public function getTotalAccountBalance()
    {
        return $this->container['totalAccountBalance'];
    }

    /**
     * Sets totalAccountBalance
     *
     * @param float $totalAccountBalance 账户总余额
     *
     * @return $this
     */
    public function setTotalAccountBalance($totalAccountBalance)
    {
        $this->container['totalAccountBalance'] = $totalAccountBalance;

        return $this;
    }

    /**
     * Gets accountInfoList
     *
     * @return \Yeepay\Yop\Sdk\Service\Account\Model\AccountinfosQueryAccountDTOResult[]
     */
    public function getAccountInfoList()
    {
        return $this->container['accountInfoList'];
    }

    /**
     * Sets accountInfoList
     *
     * @param \Yeepay\Yop\Sdk\Service\Account\Model\AccountinfosQueryAccountDTOResult[] $accountInfoList 账户信息列表
     *
     * @return $this
     */
    public function setAccountInfoList($accountInfoList)
    {
        $this->container['accountInfoList'] = $accountInfoList;

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


