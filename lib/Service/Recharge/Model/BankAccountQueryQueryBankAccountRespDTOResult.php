<?php
/**
 * BankAccountQueryQueryBankAccountRespDTOResult
 *
 * PHP version 5
 *
 * @category Class
 * @package  Yeepay\Yop\Sdk\
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * 商户充值
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

namespace Yeepay\Yop\Sdk\Service\Recharge\Model;

use \ArrayAccess;
use Yeepay\Yop\Sdk\Model\ModelInterface;
use Yeepay\Yop\Sdk\Utils\ObjectSerializer;

/**
 * BankAccountQueryQueryBankAccountRespDTOResult Class Doc Comment
 *
 * @category Class
 * @package  Yeepay\Yop\Sdk\
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class BankAccountQueryQueryBankAccountRespDTOResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'BankAccountQueryQueryBankAccountRespDTOResult';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'returnCode' => 'string',
        'returnMsg' => 'string',
        'merchantNo' => 'string',
        'accountAmt' => 'float',
        'useableAmt' => 'float',
        'frozenAmt' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'returnCode' => null,
        'returnMsg' => null,
        'merchantNo' => null,
        'accountAmt' => null,
        'useableAmt' => null,
        'frozenAmt' => null
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
        'merchantNo' => 'merchantNo',
        'accountAmt' => 'accountAmt',
        'useableAmt' => 'useableAmt',
        'frozenAmt' => 'frozenAmt'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'returnCode' => 'setReturnCode',
        'returnMsg' => 'setReturnMsg',
        'merchantNo' => 'setMerchantNo',
        'accountAmt' => 'setAccountAmt',
        'useableAmt' => 'setUseableAmt',
        'frozenAmt' => 'setFrozenAmt'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'returnCode' => 'getReturnCode',
        'returnMsg' => 'getReturnMsg',
        'merchantNo' => 'getMerchantNo',
        'accountAmt' => 'getAccountAmt',
        'useableAmt' => 'getUseableAmt',
        'frozenAmt' => 'getFrozenAmt'
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
        $this->container['merchantNo'] = isset($data['merchantNo']) ? $data['merchantNo'] : null;
        $this->container['accountAmt'] = isset($data['accountAmt']) ? $data['accountAmt'] : null;
        $this->container['useableAmt'] = isset($data['useableAmt']) ? $data['useableAmt'] : null;
        $this->container['frozenAmt'] = isset($data['frozenAmt']) ? $data['frozenAmt'] : null;
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
     * @param string $merchantNo 商编
     *
     * @return $this
     */
    public function setMerchantNo($merchantNo)
    {
        $this->container['merchantNo'] = $merchantNo;

        return $this;
    }

    /**
     * Gets accountAmt
     *
     * @return float
     */
    public function getAccountAmt()
    {
        return $this->container['accountAmt'];
    }

    /**
     * Sets accountAmt
     *
     * @param float $accountAmt 账户余额
     *
     * @return $this
     */
    public function setAccountAmt($accountAmt)
    {
        $this->container['accountAmt'] = $accountAmt;

        return $this;
    }

    /**
     * Gets useableAmt
     *
     * @return float
     */
    public function getUseableAmt()
    {
        return $this->container['useableAmt'];
    }

    /**
     * Sets useableAmt
     *
     * @param float $useableAmt 可用金额
     *
     * @return $this
     */
    public function setUseableAmt($useableAmt)
    {
        $this->container['useableAmt'] = $useableAmt;

        return $this;
    }

    /**
     * Gets frozenAmt
     *
     * @return float
     */
    public function getFrozenAmt()
    {
        return $this->container['frozenAmt'];
    }

    /**
     * Sets frozenAmt
     *
     * @param float $frozenAmt 冻结金额
     *
     * @return $this
     */
    public function setFrozenAmt($frozenAmt)
    {
        $this->container['frozenAmt'] = $frozenAmt;

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


