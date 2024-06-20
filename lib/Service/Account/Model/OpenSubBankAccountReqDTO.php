<?php
/**
 * OpenSubBankAccountReqDTO
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
 * OpenSubBankAccountReqDTO Class Doc Comment
 *
 * @category Class
 * @description 申请缴费账户的入参
 * @package  Yeepay\Yop\Sdk\
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class OpenSubBankAccountReqDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'OpenSubBankAccountReqDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'parentMerchantNo' => 'string',
        'merchantNo' => 'string',
        'merchantAccountUid' => 'string',
        'bankCode' => 'string',
        'bankAccountNo' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'parentMerchantNo' => null,
        'merchantNo' => null,
        'merchantAccountUid' => null,
        'bankCode' => null,
        'bankAccountNo' => null
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
        'merchantAccountUid' => 'merchantAccountUid',
        'bankCode' => 'bankCode',
        'bankAccountNo' => 'bankAccountNo'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'parentMerchantNo' => 'setParentMerchantNo',
        'merchantNo' => 'setMerchantNo',
        'merchantAccountUid' => 'setMerchantAccountUid',
        'bankCode' => 'setBankCode',
        'bankAccountNo' => 'setBankAccountNo'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'parentMerchantNo' => 'getParentMerchantNo',
        'merchantNo' => 'getMerchantNo',
        'merchantAccountUid' => 'getMerchantAccountUid',
        'bankCode' => 'getBankCode',
        'bankAccountNo' => 'getBankAccountNo'
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
        $this->container['merchantAccountUid'] = isset($data['merchantAccountUid']) ? $data['merchantAccountUid'] : null;
        $this->container['bankCode'] = isset($data['bankCode']) ? $data['bankCode'] : null;
        $this->container['bankAccountNo'] = isset($data['bankAccountNo']) ? $data['bankAccountNo'] : null;
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
        if ($this->container['merchantAccountUid'] === null) {
            $invalidProperties[] = "'merchantAccountUid' can't be null";
        }
        if ($this->container['bankCode'] === null) {
            $invalidProperties[] = "'bankCode' can't be null";
        }
        if ($this->container['bankAccountNo'] === null) {
            $invalidProperties[] = "'bankAccountNo' can't be null";
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
     * @param string $parentMerchantNo <p>业务发起方商编<br />*标准商户收付款方案中此参数与开户商户编号一致；*平台商户收付款方案中此参数为平台商商户编号；*服务商解决方案中，①所属标准商户申请开户时，该参数为服务商商编 ②所属平台商申请开户且以服务资质在银行开立母户时，此参数填写服务商商户编号 ②所属平台商入驻商户申请开户时需以平台资质在银行开立母户，该参数填写平台商商编</p>
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
     * @param string $merchantNo <pre>商户编号<br />易宝支付分配的的商户唯一标识</pre>
     *
     * @return $this
     */
    public function setMerchantNo($merchantNo)
    {
        $this->container['merchantNo'] = $merchantNo;

        return $this;
    }

    /**
     * Gets merchantAccountUid
     *
     * @return string
     */
    public function getMerchantAccountUid()
    {
        return $this->container['merchantAccountUid'];
    }

    /**
     * Sets merchantAccountUid
     *
     * @param string $merchantAccountUid <pre>商户侧记账簿编号，数字、字母、下划线组合</pre>
     *
     * @return $this
     */
    public function setMerchantAccountUid($merchantAccountUid)
    {
        $this->container['merchantAccountUid'] = $merchantAccountUid;

        return $this;
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
     * @param string $bankCode <pre>开户银行编码</pre> <p>可选项如下：</p> <pre>SMB_LARGE</pre>
     *
     * @return $this
     */
    public function setBankCode($bankCode)
    {
        $this->container['bankCode'] = $bankCode;

        return $this;
    }

    /**
     * Gets bankAccountNo
     *
     * @return string
     */
    public function getBankAccountNo()
    {
        return $this->container['bankAccountNo'];
    }

    /**
     * Sets bankAccountNo
     *
     * @param string $bankAccountNo <pre>银行账户号<br />备注：对应银行开户接口中，开成功的银行账户号</pre>
     *
     * @return $this
     */
    public function setBankAccountNo($bankAccountNo)
    {
        $this->container['bankAccountNo'] = $bankAccountNo;

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

