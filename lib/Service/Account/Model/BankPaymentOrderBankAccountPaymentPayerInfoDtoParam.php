<?php
/**
 * BankPaymentOrderBankAccountPaymentPayerInfoDtoParam
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
 * BankPaymentOrderBankAccountPaymentPayerInfoDtoParam Class Doc Comment
 *
 * @category Class
 * @description 付款方信息
 * @package  Yeepay\Yop\Sdk\
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class BankPaymentOrderBankAccountPaymentPayerInfoDtoParam implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'BankPaymentOrderBankAccountPaymentPayerInfoDtoParam';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'bankCode' => 'string',
        'payerMerchantNo' => 'string',
        'payerBankAccountNo' => 'string',
        'payerBankAccountName' => 'string',
        'accountType' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'bankCode' => null,
        'payerMerchantNo' => null,
        'payerBankAccountNo' => null,
        'payerBankAccountName' => null,
        'accountType' => null
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
        'bankCode' => 'bankCode',
        'payerMerchantNo' => 'payerMerchantNo',
        'payerBankAccountNo' => 'payerBankAccountNo',
        'payerBankAccountName' => 'payerBankAccountName',
        'accountType' => 'accountType'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'bankCode' => 'setBankCode',
        'payerMerchantNo' => 'setPayerMerchantNo',
        'payerBankAccountNo' => 'setPayerBankAccountNo',
        'payerBankAccountName' => 'setPayerBankAccountName',
        'accountType' => 'setAccountType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'bankCode' => 'getBankCode',
        'payerMerchantNo' => 'getPayerMerchantNo',
        'payerBankAccountNo' => 'getPayerBankAccountNo',
        'payerBankAccountName' => 'getPayerBankAccountName',
        'accountType' => 'getAccountType'
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
        $this->container['bankCode'] = isset($data['bankCode']) ? $data['bankCode'] : null;
        $this->container['payerMerchantNo'] = isset($data['payerMerchantNo']) ? $data['payerMerchantNo'] : null;
        $this->container['payerBankAccountNo'] = isset($data['payerBankAccountNo']) ? $data['payerBankAccountNo'] : null;
        $this->container['payerBankAccountName'] = isset($data['payerBankAccountName']) ? $data['payerBankAccountName'] : null;
        $this->container['accountType'] = isset($data['accountType']) ? $data['accountType'] : null;
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
     * Gets bankCode
     *
     * @return string
     */
    public function getBankCode()
    {
        return $this->container['bankCode'];
    }

    /**
     * Sets bankCode
     *
     * @param string $bankCode bankCode
     *
     * @return $this
     */
    public function setBankCode($bankCode)
    {
        $this->container['bankCode'] = $bankCode;

        return $this;
    }

    /**
     * Gets payerMerchantNo
     *
     * @return string
     */
    public function getPayerMerchantNo()
    {
        return $this->container['payerMerchantNo'];
    }

    /**
     * Sets payerMerchantNo
     *
     * @param string $payerMerchantNo payerMerchantNo
     *
     * @return $this
     */
    public function setPayerMerchantNo($payerMerchantNo)
    {
        $this->container['payerMerchantNo'] = $payerMerchantNo;

        return $this;
    }

    /**
     * Gets payerBankAccountNo
     *
     * @return string
     */
    public function getPayerBankAccountNo()
    {
        return $this->container['payerBankAccountNo'];
    }

    /**
     * Sets payerBankAccountNo
     *
     * @param string $payerBankAccountNo payerBankAccountNo
     *
     * @return $this
     */
    public function setPayerBankAccountNo($payerBankAccountNo)
    {
        $this->container['payerBankAccountNo'] = $payerBankAccountNo;

        return $this;
    }

    /**
     * Gets payerBankAccountName
     *
     * @return string
     */
    public function getPayerBankAccountName()
    {
        return $this->container['payerBankAccountName'];
    }

    /**
     * Sets payerBankAccountName
     *
     * @param string $payerBankAccountName payerBankAccountName
     *
     * @return $this
     */
    public function setPayerBankAccountName($payerBankAccountName)
    {
        $this->container['payerBankAccountName'] = $payerBankAccountName;

        return $this;
    }

    /**
     * Gets accountType
     *
     * @return string
     */
    public function getAccountType()
    {
        return $this->container['accountType'];
    }

    /**
     * Sets accountType
     *
     * @param string $accountType accountType
     *
     * @return $this
     */
    public function setAccountType($accountType)
    {
        $this->container['accountType'] = $accountType;

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


