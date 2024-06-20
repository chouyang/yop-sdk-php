<?php
/**
 * XwbzOpenAccountDTO
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
 * XwbzOpenAccountDTO Class Doc Comment
 *
 * @category Class
 * @description 新网银行总对总拓展参数
 * @package  Yeepay\Yop\Sdk\
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class XwbzOpenAccountDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'XwbzOpenAccountDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'notifySmsUrl' => 'string',
        'bindCardType' => 'string',
        'bindAccountName' => 'string',
        'bindCardNo' => 'string',
        'bindBankCode' => 'string',
        'businessScope' => 'string',
        'businessValidStart' => 'string',
        'businessValidEnd' => 'string',
        'legalMobile' => 'string',
        'contactName' => 'string',
        'contactMobile' => 'string',
        'contactCardNo' => 'string',
        'contactCardImageFont' => 'string',
        'contactCardImageBack' => 'string',
        'contactCardType' => 'string',
        'magAddress' => 'string',
        'caAuthorizationFile' => 'string',
        'legalAuthorizationFile' => 'string',
        'address' => 'string',
        'benefitInfoReqDTOList' => '\Yeepay\Yop\Sdk\Service\Account\Model\BenefitInfoReqDTO[]',
        'shareHolderInfoList' => '\Yeepay\Yop\Sdk\Service\Account\Model\ShareHolderInfoReqDTO[]',
        'bindCardMobileNo' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'notifySmsUrl' => null,
        'bindCardType' => null,
        'bindAccountName' => null,
        'bindCardNo' => null,
        'bindBankCode' => null,
        'businessScope' => null,
        'businessValidStart' => null,
        'businessValidEnd' => null,
        'legalMobile' => null,
        'contactName' => null,
        'contactMobile' => null,
        'contactCardNo' => null,
        'contactCardImageFont' => null,
        'contactCardImageBack' => null,
        'contactCardType' => null,
        'magAddress' => null,
        'caAuthorizationFile' => null,
        'legalAuthorizationFile' => null,
        'address' => null,
        'benefitInfoReqDTOList' => null,
        'shareHolderInfoList' => null,
        'bindCardMobileNo' => null
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
        'notifySmsUrl' => 'notifySmsUrl',
        'bindCardType' => 'bindCardType',
        'bindAccountName' => 'bindAccountName',
        'bindCardNo' => 'bindCardNo',
        'bindBankCode' => 'bindBankCode',
        'businessScope' => 'businessScope',
        'businessValidStart' => 'businessValidStart',
        'businessValidEnd' => 'businessValidEnd',
        'legalMobile' => 'legalMobile',
        'contactName' => 'contactName',
        'contactMobile' => 'contactMobile',
        'contactCardNo' => 'contactCardNo',
        'contactCardImageFont' => 'contactCardImageFont',
        'contactCardImageBack' => 'contactCardImageBack',
        'contactCardType' => 'contactCardType',
        'magAddress' => 'magAddress',
        'caAuthorizationFile' => 'caAuthorizationFile',
        'legalAuthorizationFile' => 'legalAuthorizationFile',
        'address' => 'address',
        'benefitInfoReqDTOList' => 'benefitInfoReqDTOList',
        'shareHolderInfoList' => 'shareHolderInfoList',
        'bindCardMobileNo' => 'bindCardMobileNo'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'notifySmsUrl' => 'setNotifySmsUrl',
        'bindCardType' => 'setBindCardType',
        'bindAccountName' => 'setBindAccountName',
        'bindCardNo' => 'setBindCardNo',
        'bindBankCode' => 'setBindBankCode',
        'businessScope' => 'setBusinessScope',
        'businessValidStart' => 'setBusinessValidStart',
        'businessValidEnd' => 'setBusinessValidEnd',
        'legalMobile' => 'setLegalMobile',
        'contactName' => 'setContactName',
        'contactMobile' => 'setContactMobile',
        'contactCardNo' => 'setContactCardNo',
        'contactCardImageFont' => 'setContactCardImageFont',
        'contactCardImageBack' => 'setContactCardImageBack',
        'contactCardType' => 'setContactCardType',
        'magAddress' => 'setMagAddress',
        'caAuthorizationFile' => 'setCaAuthorizationFile',
        'legalAuthorizationFile' => 'setLegalAuthorizationFile',
        'address' => 'setAddress',
        'benefitInfoReqDTOList' => 'setBenefitInfoReqDTOList',
        'shareHolderInfoList' => 'setShareHolderInfoList',
        'bindCardMobileNo' => 'setBindCardMobileNo'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'notifySmsUrl' => 'getNotifySmsUrl',
        'bindCardType' => 'getBindCardType',
        'bindAccountName' => 'getBindAccountName',
        'bindCardNo' => 'getBindCardNo',
        'bindBankCode' => 'getBindBankCode',
        'businessScope' => 'getBusinessScope',
        'businessValidStart' => 'getBusinessValidStart',
        'businessValidEnd' => 'getBusinessValidEnd',
        'legalMobile' => 'getLegalMobile',
        'contactName' => 'getContactName',
        'contactMobile' => 'getContactMobile',
        'contactCardNo' => 'getContactCardNo',
        'contactCardImageFont' => 'getContactCardImageFont',
        'contactCardImageBack' => 'getContactCardImageBack',
        'contactCardType' => 'getContactCardType',
        'magAddress' => 'getMagAddress',
        'caAuthorizationFile' => 'getCaAuthorizationFile',
        'legalAuthorizationFile' => 'getLegalAuthorizationFile',
        'address' => 'getAddress',
        'benefitInfoReqDTOList' => 'getBenefitInfoReqDTOList',
        'shareHolderInfoList' => 'getShareHolderInfoList',
        'bindCardMobileNo' => 'getBindCardMobileNo'
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
        $this->container['notifySmsUrl'] = isset($data['notifySmsUrl']) ? $data['notifySmsUrl'] : null;
        $this->container['bindCardType'] = isset($data['bindCardType']) ? $data['bindCardType'] : null;
        $this->container['bindAccountName'] = isset($data['bindAccountName']) ? $data['bindAccountName'] : null;
        $this->container['bindCardNo'] = isset($data['bindCardNo']) ? $data['bindCardNo'] : null;
        $this->container['bindBankCode'] = isset($data['bindBankCode']) ? $data['bindBankCode'] : null;
        $this->container['businessScope'] = isset($data['businessScope']) ? $data['businessScope'] : null;
        $this->container['businessValidStart'] = isset($data['businessValidStart']) ? $data['businessValidStart'] : null;
        $this->container['businessValidEnd'] = isset($data['businessValidEnd']) ? $data['businessValidEnd'] : null;
        $this->container['legalMobile'] = isset($data['legalMobile']) ? $data['legalMobile'] : null;
        $this->container['contactName'] = isset($data['contactName']) ? $data['contactName'] : null;
        $this->container['contactMobile'] = isset($data['contactMobile']) ? $data['contactMobile'] : null;
        $this->container['contactCardNo'] = isset($data['contactCardNo']) ? $data['contactCardNo'] : null;
        $this->container['contactCardImageFont'] = isset($data['contactCardImageFont']) ? $data['contactCardImageFont'] : null;
        $this->container['contactCardImageBack'] = isset($data['contactCardImageBack']) ? $data['contactCardImageBack'] : null;
        $this->container['contactCardType'] = isset($data['contactCardType']) ? $data['contactCardType'] : null;
        $this->container['magAddress'] = isset($data['magAddress']) ? $data['magAddress'] : null;
        $this->container['caAuthorizationFile'] = isset($data['caAuthorizationFile']) ? $data['caAuthorizationFile'] : null;
        $this->container['legalAuthorizationFile'] = isset($data['legalAuthorizationFile']) ? $data['legalAuthorizationFile'] : null;
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['benefitInfoReqDTOList'] = isset($data['benefitInfoReqDTOList']) ? $data['benefitInfoReqDTOList'] : null;
        $this->container['shareHolderInfoList'] = isset($data['shareHolderInfoList']) ? $data['shareHolderInfoList'] : null;
        $this->container['bindCardMobileNo'] = isset($data['bindCardMobileNo']) ? $data['bindCardMobileNo'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['notifySmsUrl'] === null) {
            $invalidProperties[] = "'notifySmsUrl' can't be null";
        }
        if ($this->container['bindCardType'] === null) {
            $invalidProperties[] = "'bindCardType' can't be null";
        }
        if ($this->container['bindAccountName'] === null) {
            $invalidProperties[] = "'bindAccountName' can't be null";
        }
        if ($this->container['bindCardNo'] === null) {
            $invalidProperties[] = "'bindCardNo' can't be null";
        }
        if ($this->container['bindBankCode'] === null) {
            $invalidProperties[] = "'bindBankCode' can't be null";
        }
        if ($this->container['businessValidStart'] === null) {
            $invalidProperties[] = "'businessValidStart' can't be null";
        }
        if ($this->container['businessValidEnd'] === null) {
            $invalidProperties[] = "'businessValidEnd' can't be null";
        }
        if ($this->container['legalMobile'] === null) {
            $invalidProperties[] = "'legalMobile' can't be null";
        }
        if ($this->container['contactName'] === null) {
            $invalidProperties[] = "'contactName' can't be null";
        }
        if ($this->container['contactMobile'] === null) {
            $invalidProperties[] = "'contactMobile' can't be null";
        }
        if ($this->container['contactCardNo'] === null) {
            $invalidProperties[] = "'contactCardNo' can't be null";
        }
        if ($this->container['contactCardImageFont'] === null) {
            $invalidProperties[] = "'contactCardImageFont' can't be null";
        }
        if ($this->container['contactCardType'] === null) {
            $invalidProperties[] = "'contactCardType' can't be null";
        }
        if ($this->container['magAddress'] === null) {
            $invalidProperties[] = "'magAddress' can't be null";
        }
        if ($this->container['caAuthorizationFile'] === null) {
            $invalidProperties[] = "'caAuthorizationFile' can't be null";
        }
        if ($this->container['address'] === null) {
            $invalidProperties[] = "'address' can't be null";
        }
        if ($this->container['benefitInfoReqDTOList'] === null) {
            $invalidProperties[] = "'benefitInfoReqDTOList' can't be null";
        }
        if ($this->container['shareHolderInfoList'] === null) {
            $invalidProperties[] = "'shareHolderInfoList' can't be null";
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
     * Gets notifySmsUrl
     *
     * @return string
     */
    public function getNotifySmsUrl()
    {
        return $this->container['notifySmsUrl'];
    }

    /**
     * Sets notifySmsUrl
     *
     * @param string $notifySmsUrl <p>短验通知路径开户申请银行审核后通知到该地址，商户接收后发起申请短验</p>
     *
     * @return $this
     */
    public function setNotifySmsUrl($notifySmsUrl)
    {
        $this->container['notifySmsUrl'] = $notifySmsUrl;

        return $this;
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
     * @param string $bindCardType <p>绑定卡类型<br />可选项如下:<br />PUBLIC_CARD:对公卡<br />PRIVATE_CARD:对私卡</p>
     *
     * @return $this
     */
    public function setBindCardType($bindCardType)
    {
        $this->container['bindCardType'] = $bindCardType;

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
     * @param string $bindAccountName <p>绑卡银行账户名称</p>
     *
     * @return $this
     */
    public function setBindAccountName($bindAccountName)
    {
        $this->container['bindAccountName'] = $bindAccountName;

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
     * @param string $bindCardNo <p>绑定银行卡号</p>
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
     * @param string $bindBankCode <p>绑定银行编码</p>
     *
     * @return $this
     */
    public function setBindBankCode($bindBankCode)
    {
        $this->container['bindBankCode'] = $bindBankCode;

        return $this;
    }

    /**
     * Gets businessScope
     *
     * @return string
     */
    public function getBusinessScope()
    {
        return $this->container['businessScope'];
    }

    /**
     * Sets businessScope
     *
     * @param string $businessScope <p>经营范围</p>
     *
     * @return $this
     */
    public function setBusinessScope($businessScope)
    {
        $this->container['businessScope'] = $businessScope;

        return $this;
    }

    /**
     * Gets businessValidStart
     *
     * @return string
     */
    public function getBusinessValidStart()
    {
        return $this->container['businessValidStart'];
    }

    /**
     * Sets businessValidStart
     *
     * @param string $businessValidStart <p>企业证件生效日期<br />参数格式为yyyyMMdd</p>
     *
     * @return $this
     */
    public function setBusinessValidStart($businessValidStart)
    {
        $this->container['businessValidStart'] = $businessValidStart;

        return $this;
    }

    /**
     * Gets businessValidEnd
     *
     * @return string
     */
    public function getBusinessValidEnd()
    {
        return $this->container['businessValidEnd'];
    }

    /**
     * Sets businessValidEnd
     *
     * @param string $businessValidEnd <p>企业证件失效日期<br />参数格式为yyyyMMdd或者forever</p>
     *
     * @return $this
     */
    public function setBusinessValidEnd($businessValidEnd)
    {
        $this->container['businessValidEnd'] = $businessValidEnd;

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
     * @param string $legalMobile <p>法人手机号码</p>
     *
     * @return $this
     */
    public function setLegalMobile($legalMobile)
    {
        $this->container['legalMobile'] = $legalMobile;

        return $this;
    }

    /**
     * Gets contactName
     *
     * @return string
     */
    public function getContactName()
    {
        return $this->container['contactName'];
    }

    /**
     * Sets contactName
     *
     * @param string $contactName <p>短验联系人姓名<br />用于开户过程中做短验申请和确认使用</p>
     *
     * @return $this
     */
    public function setContactName($contactName)
    {
        $this->container['contactName'] = $contactName;

        return $this;
    }

    /**
     * Gets contactMobile
     *
     * @return string
     */
    public function getContactMobile()
    {
        return $this->container['contactMobile'];
    }

    /**
     * Sets contactMobile
     *
     * @param string $contactMobile <p>短验联系人手机号<br />法人和联系人非同一人时，手机号不能是同一个</p>
     *
     * @return $this
     */
    public function setContactMobile($contactMobile)
    {
        $this->container['contactMobile'] = $contactMobile;

        return $this;
    }

    /**
     * Gets contactCardNo
     *
     * @return string
     */
    public function getContactCardNo()
    {
        return $this->container['contactCardNo'];
    }

    /**
     * Sets contactCardNo
     *
     * @param string $contactCardNo <p>短验联系人证件号码</p>
     *
     * @return $this
     */
    public function setContactCardNo($contactCardNo)
    {
        $this->container['contactCardNo'] = $contactCardNo;

        return $this;
    }

    /**
     * Gets contactCardImageFont
     *
     * @return string
     */
    public function getContactCardImageFont()
    {
        return $this->container['contactCardImageFont'];
    }

    /**
     * Sets contactCardImageFont
     *
     * @param string $contactCardImageFont <p>短验联系人证件照片正面地址</p>
     *
     * @return $this
     */
    public function setContactCardImageFont($contactCardImageFont)
    {
        $this->container['contactCardImageFont'] = $contactCardImageFont;

        return $this;
    }

    /**
     * Gets contactCardImageBack
     *
     * @return string
     */
    public function getContactCardImageBack()
    {
        return $this->container['contactCardImageBack'];
    }

    /**
     * Sets contactCardImageBack
     *
     * @param string $contactCardImageBack <p>短验联系人件照片反面地址</p>
     *
     * @return $this
     */
    public function setContactCardImageBack($contactCardImageBack)
    {
        $this->container['contactCardImageBack'] = $contactCardImageBack;

        return $this;
    }

    /**
     * Gets contactCardType
     *
     * @return string
     */
    public function getContactCardType()
    {
        return $this->container['contactCardType'];
    }

    /**
     * Sets contactCardType
     *
     * @param string $contactCardType <p>短验联系人证件类型<br />可选项如下:<br />ID_CARD:身份证</p>
     *
     * @return $this
     */
    public function setContactCardType($contactCardType)
    {
        $this->container['contactCardType'] = $contactCardType;

        return $this;
    }

    /**
     * Gets magAddress
     *
     * @return string
     */
    public function getMagAddress()
    {
        return $this->container['magAddress'];
    }

    /**
     * Sets magAddress
     *
     * @param string $magAddress <p>企业实际经营地址</p>
     *
     * @return $this
     */
    public function setMagAddress($magAddress)
    {
        $this->container['magAddress'] = $magAddress;

        return $this;
    }

    /**
     * Gets caAuthorizationFile
     *
     * @return string
     */
    public function getCaAuthorizationFile()
    {
        return $this->container['caAuthorizationFile'];
    }

    /**
     * Sets caAuthorizationFile
     *
     * @param string $caAuthorizationFile <p>企业CA证书及电子签名授权委托书路径</p>
     *
     * @return $this
     */
    public function setCaAuthorizationFile($caAuthorizationFile)
    {
        $this->container['caAuthorizationFile'] = $caAuthorizationFile;

        return $this;
    }

    /**
     * Gets legalAuthorizationFile
     *
     * @return string
     */
    public function getLegalAuthorizationFile()
    {
        return $this->container['legalAuthorizationFile'];
    }

    /**
     * Sets legalAuthorizationFile
     *
     * @param string $legalAuthorizationFile <p>法人委托授权书</p>
     *
     * @return $this
     */
    public function setLegalAuthorizationFile($legalAuthorizationFile)
    {
        $this->container['legalAuthorizationFile'] = $legalAuthorizationFile;

        return $this;
    }

    /**
     * Gets address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param string $address <p>办公地址</p>
     *
     * @return $this
     */
    public function setAddress($address)
    {
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets benefitInfoReqDTOList
     *
     * @return \Yeepay\Yop\Sdk\Service\Account\Model\BenefitInfoReqDTO[]
     */
    public function getBenefitInfoReqDTOList()
    {
        return $this->container['benefitInfoReqDTOList'];
    }

    /**
     * Sets benefitInfoReqDTOList
     *
     * @param \Yeepay\Yop\Sdk\Service\Account\Model\BenefitInfoReqDTO[] $benefitInfoReqDTOList <p>收益人信息<br />不能超过4个</p>
     *
     * @return $this
     */
    public function setBenefitInfoReqDTOList($benefitInfoReqDTOList)
    {
        $this->container['benefitInfoReqDTOList'] = $benefitInfoReqDTOList;

        return $this;
    }

    /**
     * Gets shareHolderInfoList
     *
     * @return \Yeepay\Yop\Sdk\Service\Account\Model\ShareHolderInfoReqDTO[]
     */
    public function getShareHolderInfoList()
    {
        return $this->container['shareHolderInfoList'];
    }

    /**
     * Sets shareHolderInfoList
     *
     * @param \Yeepay\Yop\Sdk\Service\Account\Model\ShareHolderInfoReqDTO[] $shareHolderInfoList <p>股东信息<br />不能超过4个</p>
     *
     * @return $this
     */
    public function setShareHolderInfoList($shareHolderInfoList)
    {
        $this->container['shareHolderInfoList'] = $shareHolderInfoList;

        return $this;
    }

    /**
     * Gets bindCardMobileNo
     *
     * @return string
     */
    public function getBindCardMobileNo()
    {
        return $this->container['bindCardMobileNo'];
    }

    /**
     * Sets bindCardMobileNo
     *
     * @param string $bindCardMobileNo <div> <pre>绑定卡手机号</pre> </div>
     *
     * @return $this
     */
    public function setBindCardMobileNo($bindCardMobileNo)
    {
        $this->container['bindCardMobileNo'] = $bindCardMobileNo;

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


