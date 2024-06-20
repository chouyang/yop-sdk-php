<?php
/**
 * WhzbbOpenAccountDTO
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
 * WhzbbOpenAccountDTO Class Doc Comment
 *
 * @category Class
 * @description 众邦银行拓展参数
 * @package  Yeepay\Yop\Sdk\
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class WhzbbOpenAccountDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'WhzbbOpenAccountDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'bindCardType' => 'string',
        'bindCardNo' => 'string',
        'bindBankCode' => 'string',
        'bindAccountName' => 'string',
        'businessLicenceEffectiveDate' => 'string',
        'businessLicenceExpirationDate' => 'string',
        'legalLicenceEffectiveDate' => 'string',
        'legalLicenceExpirationDate' => 'string',
        'legalMobile' => 'string',
        'bcpNo' => 'string',
        'registerAddress' => 'string',
        'organizationNo' => 'string',
        'organizationStart' => 'string',
        'organizationEnd' => 'string',
        'organizationPicUrl' => 'string',
        'taxNo' => 'string',
        'taxPicUrl' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'bindCardType' => null,
        'bindCardNo' => null,
        'bindBankCode' => null,
        'bindAccountName' => null,
        'businessLicenceEffectiveDate' => null,
        'businessLicenceExpirationDate' => null,
        'legalLicenceEffectiveDate' => null,
        'legalLicenceExpirationDate' => null,
        'legalMobile' => null,
        'bcpNo' => null,
        'registerAddress' => null,
        'organizationNo' => null,
        'organizationStart' => null,
        'organizationEnd' => null,
        'organizationPicUrl' => null,
        'taxNo' => null,
        'taxPicUrl' => null
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
        'bindCardType' => 'bindCardType',
        'bindCardNo' => 'bindCardNo',
        'bindBankCode' => 'bindBankCode',
        'bindAccountName' => 'bindAccountName',
        'businessLicenceEffectiveDate' => 'businessLicenceEffectiveDate',
        'businessLicenceExpirationDate' => 'businessLicenceExpirationDate',
        'legalLicenceEffectiveDate' => 'legalLicenceEffectiveDate',
        'legalLicenceExpirationDate' => 'legalLicenceExpirationDate',
        'legalMobile' => 'legalMobile',
        'bcpNo' => 'bcpNo',
        'registerAddress' => 'registerAddress',
        'organizationNo' => 'organizationNo',
        'organizationStart' => 'organizationStart',
        'organizationEnd' => 'organizationEnd',
        'organizationPicUrl' => 'organizationPicUrl',
        'taxNo' => 'taxNo',
        'taxPicUrl' => 'taxPicUrl'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'bindCardType' => 'setBindCardType',
        'bindCardNo' => 'setBindCardNo',
        'bindBankCode' => 'setBindBankCode',
        'bindAccountName' => 'setBindAccountName',
        'businessLicenceEffectiveDate' => 'setBusinessLicenceEffectiveDate',
        'businessLicenceExpirationDate' => 'setBusinessLicenceExpirationDate',
        'legalLicenceEffectiveDate' => 'setLegalLicenceEffectiveDate',
        'legalLicenceExpirationDate' => 'setLegalLicenceExpirationDate',
        'legalMobile' => 'setLegalMobile',
        'bcpNo' => 'setBcpNo',
        'registerAddress' => 'setRegisterAddress',
        'organizationNo' => 'setOrganizationNo',
        'organizationStart' => 'setOrganizationStart',
        'organizationEnd' => 'setOrganizationEnd',
        'organizationPicUrl' => 'setOrganizationPicUrl',
        'taxNo' => 'setTaxNo',
        'taxPicUrl' => 'setTaxPicUrl'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'bindCardType' => 'getBindCardType',
        'bindCardNo' => 'getBindCardNo',
        'bindBankCode' => 'getBindBankCode',
        'bindAccountName' => 'getBindAccountName',
        'businessLicenceEffectiveDate' => 'getBusinessLicenceEffectiveDate',
        'businessLicenceExpirationDate' => 'getBusinessLicenceExpirationDate',
        'legalLicenceEffectiveDate' => 'getLegalLicenceEffectiveDate',
        'legalLicenceExpirationDate' => 'getLegalLicenceExpirationDate',
        'legalMobile' => 'getLegalMobile',
        'bcpNo' => 'getBcpNo',
        'registerAddress' => 'getRegisterAddress',
        'organizationNo' => 'getOrganizationNo',
        'organizationStart' => 'getOrganizationStart',
        'organizationEnd' => 'getOrganizationEnd',
        'organizationPicUrl' => 'getOrganizationPicUrl',
        'taxNo' => 'getTaxNo',
        'taxPicUrl' => 'getTaxPicUrl'
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
        $this->container['bindCardType'] = isset($data['bindCardType']) ? $data['bindCardType'] : null;
        $this->container['bindCardNo'] = isset($data['bindCardNo']) ? $data['bindCardNo'] : null;
        $this->container['bindBankCode'] = isset($data['bindBankCode']) ? $data['bindBankCode'] : null;
        $this->container['bindAccountName'] = isset($data['bindAccountName']) ? $data['bindAccountName'] : null;
        $this->container['businessLicenceEffectiveDate'] = isset($data['businessLicenceEffectiveDate']) ? $data['businessLicenceEffectiveDate'] : null;
        $this->container['businessLicenceExpirationDate'] = isset($data['businessLicenceExpirationDate']) ? $data['businessLicenceExpirationDate'] : null;
        $this->container['legalLicenceEffectiveDate'] = isset($data['legalLicenceEffectiveDate']) ? $data['legalLicenceEffectiveDate'] : null;
        $this->container['legalLicenceExpirationDate'] = isset($data['legalLicenceExpirationDate']) ? $data['legalLicenceExpirationDate'] : null;
        $this->container['legalMobile'] = isset($data['legalMobile']) ? $data['legalMobile'] : null;
        $this->container['bcpNo'] = isset($data['bcpNo']) ? $data['bcpNo'] : null;
        $this->container['registerAddress'] = isset($data['registerAddress']) ? $data['registerAddress'] : null;
        $this->container['organizationNo'] = isset($data['organizationNo']) ? $data['organizationNo'] : null;
        $this->container['organizationStart'] = isset($data['organizationStart']) ? $data['organizationStart'] : null;
        $this->container['organizationEnd'] = isset($data['organizationEnd']) ? $data['organizationEnd'] : null;
        $this->container['organizationPicUrl'] = isset($data['organizationPicUrl']) ? $data['organizationPicUrl'] : null;
        $this->container['taxNo'] = isset($data['taxNo']) ? $data['taxNo'] : null;
        $this->container['taxPicUrl'] = isset($data['taxPicUrl']) ? $data['taxPicUrl'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['bindCardType'] === null) {
            $invalidProperties[] = "'bindCardType' can't be null";
        }
        if ($this->container['bindCardNo'] === null) {
            $invalidProperties[] = "'bindCardNo' can't be null";
        }
        if ($this->container['bindBankCode'] === null) {
            $invalidProperties[] = "'bindBankCode' can't be null";
        }
        if ($this->container['bindAccountName'] === null) {
            $invalidProperties[] = "'bindAccountName' can't be null";
        }
        if ($this->container['businessLicenceEffectiveDate'] === null) {
            $invalidProperties[] = "'businessLicenceEffectiveDate' can't be null";
        }
        if ($this->container['businessLicenceExpirationDate'] === null) {
            $invalidProperties[] = "'businessLicenceExpirationDate' can't be null";
        }
        if ($this->container['legalLicenceEffectiveDate'] === null) {
            $invalidProperties[] = "'legalLicenceEffectiveDate' can't be null";
        }
        if ($this->container['legalLicenceExpirationDate'] === null) {
            $invalidProperties[] = "'legalLicenceExpirationDate' can't be null";
        }
        if ($this->container['legalMobile'] === null) {
            $invalidProperties[] = "'legalMobile' can't be null";
        }
        if ($this->container['bcpNo'] === null) {
            $invalidProperties[] = "'bcpNo' can't be null";
        }
        if ($this->container['registerAddress'] === null) {
            $invalidProperties[] = "'registerAddress' can't be null";
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
     * Gets bindCardType
     *
     * @return string
     */
    public function getBindCardType()
    {
        return $this->container['bindCardType'];
    }

    /**
     * Sets bindCardType
     *
     * @param string $bindCardType 绑定卡类型<br>可选项如下:<br>PUBLIC_CARD:对公卡<br>PRIVATE_CARD:对私卡
     *
     * @return $this
     */
    public function setBindCardType($bindCardType)
    {
        $this->container['bindCardType'] = $bindCardType;

        return $this;
    }

    /**
     * Gets bindCardNo
     *
     * @return string
     */
    public function getBindCardNo()
    {
        return $this->container['bindCardNo'];
    }

    /**
     * Sets bindCardNo
     *
     * @param string $bindCardNo 绑定银行卡号
     *
     * @return $this
     */
    public function setBindCardNo($bindCardNo)
    {
        $this->container['bindCardNo'] = $bindCardNo;

        return $this;
    }

    /**
     * Gets bindBankCode
     *
     * @return string
     */
    public function getBindBankCode()
    {
        return $this->container['bindBankCode'];
    }

    /**
     * Sets bindBankCode
     *
     * @param string $bindBankCode 绑定银行编码
     *
     * @return $this
     */
    public function setBindBankCode($bindBankCode)
    {
        $this->container['bindBankCode'] = $bindBankCode;

        return $this;
    }

    /**
     * Gets bindAccountName
     *
     * @return string
     */
    public function getBindAccountName()
    {
        return $this->container['bindAccountName'];
    }

    /**
     * Sets bindAccountName
     *
     * @param string $bindAccountName 绑卡名称
     *
     * @return $this
     */
    public function setBindAccountName($bindAccountName)
    {
        $this->container['bindAccountName'] = $bindAccountName;

        return $this;
    }

    /**
     * Gets businessLicenceEffectiveDate
     *
     * @return string
     */
    public function getBusinessLicenceEffectiveDate()
    {
        return $this->container['businessLicenceEffectiveDate'];
    }

    /**
     * Sets businessLicenceEffectiveDate
     *
     * @param string $businessLicenceEffectiveDate 营业执照生效日期<br>参数格式为yyyyMMdd
     *
     * @return $this
     */
    public function setBusinessLicenceEffectiveDate($businessLicenceEffectiveDate)
    {
        $this->container['businessLicenceEffectiveDate'] = $businessLicenceEffectiveDate;

        return $this;
    }

    /**
     * Gets businessLicenceExpirationDate
     *
     * @return string
     */
    public function getBusinessLicenceExpirationDate()
    {
        return $this->container['businessLicenceExpirationDate'];
    }

    /**
     * Sets businessLicenceExpirationDate
     *
     * @param string $businessLicenceExpirationDate 营业执照失效日期<br>参数格式为yyyyMMdd或者forever
     *
     * @return $this
     */
    public function setBusinessLicenceExpirationDate($businessLicenceExpirationDate)
    {
        $this->container['businessLicenceExpirationDate'] = $businessLicenceExpirationDate;

        return $this;
    }

    /**
     * Gets legalLicenceEffectiveDate
     *
     * @return string
     */
    public function getLegalLicenceEffectiveDate()
    {
        return $this->container['legalLicenceEffectiveDate'];
    }

    /**
     * Sets legalLicenceEffectiveDate
     *
     * @param string $legalLicenceEffectiveDate 法人证件生效日期<br>参数格式为yyyyMMdd
     *
     * @return $this
     */
    public function setLegalLicenceEffectiveDate($legalLicenceEffectiveDate)
    {
        $this->container['legalLicenceEffectiveDate'] = $legalLicenceEffectiveDate;

        return $this;
    }

    /**
     * Gets legalLicenceExpirationDate
     *
     * @return string
     */
    public function getLegalLicenceExpirationDate()
    {
        return $this->container['legalLicenceExpirationDate'];
    }

    /**
     * Sets legalLicenceExpirationDate
     *
     * @param string $legalLicenceExpirationDate 法人证件失效日期<br>参数格式为yyyyMMdd或者forever
     *
     * @return $this
     */
    public function setLegalLicenceExpirationDate($legalLicenceExpirationDate)
    {
        $this->container['legalLicenceExpirationDate'] = $legalLicenceExpirationDate;

        return $this;
    }

    /**
     * Gets legalMobile
     *
     * @return string
     */
    public function getLegalMobile()
    {
        return $this->container['legalMobile'];
    }

    /**
     * Sets legalMobile
     *
     * @param string $legalMobile 法人手机号码
     *
     * @return $this
     */
    public function setLegalMobile($legalMobile)
    {
        $this->container['legalMobile'] = $legalMobile;

        return $this;
    }

    /**
     * Gets bcpNo
     *
     * @return string
     */
    public function getBcpNo()
    {
        return $this->container['bcpNo'];
    }

    /**
     * Sets bcpNo
     *
     * @param string $bcpNo 基本账户开户许可核准号
     *
     * @return $this
     */
    public function setBcpNo($bcpNo)
    {
        $this->container['bcpNo'] = $bcpNo;

        return $this;
    }

    /**
     * Gets registerAddress
     *
     * @return string
     */
    public function getRegisterAddress()
    {
        return $this->container['registerAddress'];
    }

    /**
     * Sets registerAddress
     *
     * @param string $registerAddress 商户注册地址
     *
     * @return $this
     */
    public function setRegisterAddress($registerAddress)
    {
        $this->container['registerAddress'] = $registerAddress;

        return $this;
    }

    /**
     * Gets organizationNo
     *
     * @return string
     */
    public function getOrganizationNo()
    {
        return $this->container['organizationNo'];
    }

    /**
     * Sets organizationNo
     *
     * @param string $organizationNo 组织机构代码
     *
     * @return $this
     */
    public function setOrganizationNo($organizationNo)
    {
        $this->container['organizationNo'] = $organizationNo;

        return $this;
    }

    /**
     * Gets organizationStart
     *
     * @return string
     */
    public function getOrganizationStart()
    {
        return $this->container['organizationStart'];
    }

    /**
     * Sets organizationStart
     *
     * @param string $organizationStart 组织机构代码生效日期<br>参数格式为yyyyMMdd
     *
     * @return $this
     */
    public function setOrganizationStart($organizationStart)
    {
        $this->container['organizationStart'] = $organizationStart;

        return $this;
    }

    /**
     * Gets organizationEnd
     *
     * @return string
     */
    public function getOrganizationEnd()
    {
        return $this->container['organizationEnd'];
    }

    /**
     * Sets organizationEnd
     *
     * @param string $organizationEnd 组织机构代码失效日期<br>参数格式为yyyyMMdd或者forever
     *
     * @return $this
     */
    public function setOrganizationEnd($organizationEnd)
    {
        $this->container['organizationEnd'] = $organizationEnd;

        return $this;
    }

    /**
     * Gets organizationPicUrl
     *
     * @return string
     */
    public function getOrganizationPicUrl()
    {
        return $this->container['organizationPicUrl'];
    }

    /**
     * Sets organizationPicUrl
     *
     * @param string $organizationPicUrl 组织机构代码证照片
     *
     * @return $this
     */
    public function setOrganizationPicUrl($organizationPicUrl)
    {
        $this->container['organizationPicUrl'] = $organizationPicUrl;

        return $this;
    }

    /**
     * Gets taxNo
     *
     * @return string
     */
    public function getTaxNo()
    {
        return $this->container['taxNo'];
    }

    /**
     * Sets taxNo
     *
     * @param string $taxNo 税务登记号
     *
     * @return $this
     */
    public function setTaxNo($taxNo)
    {
        $this->container['taxNo'] = $taxNo;

        return $this;
    }

    /**
     * Gets taxPicUrl
     *
     * @return string
     */
    public function getTaxPicUrl()
    {
        return $this->container['taxPicUrl'];
    }

    /**
     * Sets taxPicUrl
     *
     * @param string $taxPicUrl 税务登记证照片
     *
     * @return $this
     */
    public function setTaxPicUrl($taxPicUrl)
    {
        $this->container['taxPicUrl'] = $taxPicUrl;

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


