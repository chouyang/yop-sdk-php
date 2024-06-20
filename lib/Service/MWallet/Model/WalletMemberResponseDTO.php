<?php
/**
 * WalletMemberResponseDTO
 *
 * PHP version 5
 *
 * @category Class
 * @package  Yeepay\Yop\Sdk\
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * 会员钱包
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

namespace Yeepay\Yop\Sdk\Service\MWallet\Model;

use \ArrayAccess;
use Yeepay\Yop\Sdk\Model\ModelInterface;
use Yeepay\Yop\Sdk\Utils\ObjectSerializer;

/**
 * WalletMemberResponseDTO Class Doc Comment
 *
 * @category Class
 * @description 响应结果
 * @package  Yeepay\Yop\Sdk\
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class WalletMemberResponseDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'WalletMemberResponseDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'code' => 'string',
        'message' => 'string',
        'walletUserNo' => 'string',
        'walletStatus' => 'string',
        'balance' => 'string',
        'name' => 'string',
        'certificateType' => 'string',
        'certificateNo' => 'string',
        'walletCategory' => 'string',
        'tradePswdSet' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'code' => null,
        'message' => null,
        'walletUserNo' => null,
        'walletStatus' => null,
        'balance' => null,
        'name' => null,
        'certificateType' => null,
        'certificateNo' => null,
        'walletCategory' => null,
        'tradePswdSet' => null
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
        'code' => 'code',
        'message' => 'message',
        'walletUserNo' => 'walletUserNo',
        'walletStatus' => 'walletStatus',
        'balance' => 'balance',
        'name' => 'name',
        'certificateType' => 'certificateType',
        'certificateNo' => 'certificateNo',
        'walletCategory' => 'walletCategory',
        'tradePswdSet' => 'tradePswdSet'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'code' => 'setCode',
        'message' => 'setMessage',
        'walletUserNo' => 'setWalletUserNo',
        'walletStatus' => 'setWalletStatus',
        'balance' => 'setBalance',
        'name' => 'setName',
        'certificateType' => 'setCertificateType',
        'certificateNo' => 'setCertificateNo',
        'walletCategory' => 'setWalletCategory',
        'tradePswdSet' => 'setTradePswdSet'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'code' => 'getCode',
        'message' => 'getMessage',
        'walletUserNo' => 'getWalletUserNo',
        'walletStatus' => 'getWalletStatus',
        'balance' => 'getBalance',
        'name' => 'getName',
        'certificateType' => 'getCertificateType',
        'certificateNo' => 'getCertificateNo',
        'walletCategory' => 'getWalletCategory',
        'tradePswdSet' => 'getTradePswdSet'
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
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
        $this->container['walletUserNo'] = isset($data['walletUserNo']) ? $data['walletUserNo'] : null;
        $this->container['walletStatus'] = isset($data['walletStatus']) ? $data['walletStatus'] : null;
        $this->container['balance'] = isset($data['balance']) ? $data['balance'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['certificateType'] = isset($data['certificateType']) ? $data['certificateType'] : null;
        $this->container['certificateNo'] = isset($data['certificateNo']) ? $data['certificateNo'] : null;
        $this->container['walletCategory'] = isset($data['walletCategory']) ? $data['walletCategory'] : null;
        $this->container['tradePswdSet'] = isset($data['tradePswdSet']) ? $data['tradePswdSet'] : null;
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
     * Gets code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
     * Sets code
     *
     * @param string $code 返回码
     *
     * @return $this
     */
    public function setCode($code)
    {
        $this->container['code'] = $code;

        return $this;
    }

    /**
     * Gets message
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
     * Sets message
     *
     * @param string $message 返回消息<br>返回码的详细说明
     *
     * @return $this
     */
    public function setMessage($message)
    {
        $this->container['message'] = $message;

        return $this;
    }

    /**
     * Gets walletUserNo
     *
     * @return string
     */
    public function getWalletUserNo()
    {
        return $this->container['walletUserNo'];
    }

    /**
     * Sets walletUserNo
     *
     * @param string $walletUserNo 钱包账户ID<br>用户在易宝钱包生成的唯一编号
     *
     * @return $this
     */
    public function setWalletUserNo($walletUserNo)
    {
        $this->container['walletUserNo'] = $walletUserNo;

        return $this;
    }

    /**
     * Gets walletStatus
     *
     * @return string
     */
    public function getWalletStatus()
    {
        return $this->container['walletStatus'];
    }

    /**
     * Sets walletStatus
     *
     * @param string $walletStatus 钱包账户状态<br>可选项如下:<br>AVAILABLY:正常<br>FREEZE:冻结<br>CANCAEL:已注销
     *
     * @return $this
     */
    public function setWalletStatus($walletStatus)
    {
        $this->container['walletStatus'] = $walletStatus;

        return $this;
    }

    /**
     * Gets balance
     *
     * @return string
     */
    public function getBalance()
    {
        return $this->container['balance'];
    }

    /**
     * Sets balance
     *
     * @param string $balance 钱包账户余额<br>钱包账户当前总余额，单位元，精确到小数点后两位
     *
     * @return $this
     */
    public function setBalance($balance)
    {
        $this->container['balance'] = $balance;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name 姓名
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets certificateType
     *
     * @return string
     */
    public function getCertificateType()
    {
        return $this->container['certificateType'];
    }

    /**
     * Sets certificateType
     *
     * @param string $certificateType 证件类型<br>IDENTITY_CARD：身份证
     *
     * @return $this
     */
    public function setCertificateType($certificateType)
    {
        $this->container['certificateType'] = $certificateType;

        return $this;
    }

    /**
     * Gets certificateNo
     *
     * @return string
     */
    public function getCertificateNo()
    {
        return $this->container['certificateNo'];
    }

    /**
     * Sets certificateNo
     *
     * @param string $certificateNo 证件号码<br>显示前6后2，中间为*
     *
     * @return $this
     */
    public function setCertificateNo($certificateNo)
    {
        $this->container['certificateNo'] = $certificateNo;

        return $this;
    }

    /**
     * Gets walletCategory
     *
     * @return string
     */
    public function getWalletCategory()
    {
        return $this->container['walletCategory'];
    }

    /**
     * Sets walletCategory
     *
     * @param string $walletCategory 钱包账户等级<br>可选项如下:<br>ONE_CATEGORY:一类<br>TWO_CATEGORY:二类 <br>THREE_CATEGORY:三类
     *
     * @return $this
     */
    public function setWalletCategory($walletCategory)
    {
        $this->container['walletCategory'] = $walletCategory;

        return $this;
    }

    /**
     * Gets tradePswdSet
     *
     * @return bool
     */
    public function getTradePswdSet()
    {
        return $this->container['tradePswdSet'];
    }

    /**
     * Sets tradePswdSet
     *
     * @param bool $tradePswdSet 是否已设置交易密码<br>TRUE：已设置
     *
     * @return $this
     */
    public function setTradePswdSet($tradePswdSet)
    {
        $this->container['tradePswdSet'] = $tradePswdSet;

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

