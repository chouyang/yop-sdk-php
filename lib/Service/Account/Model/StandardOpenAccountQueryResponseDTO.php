<?php
/**
 * StandardOpenAccountQueryResponseDTO
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
 * StandardOpenAccountQueryResponseDTO Class Doc Comment
 *
 * @category Class
 * @description 响应结果
 * @package  Yeepay\Yop\Sdk\
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class StandardOpenAccountQueryResponseDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'StandardOpenAccountQueryResponseDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'returnCode' => 'string',
        'returnMsg' => 'string',
        'merchantNo' => 'string',
        'requestNo' => 'string',
        'orderNo' => 'string',
        'status' => 'string',
        'bankAccountNo' => 'string',
        'bankCustomerNo' => 'string',
        'openRequestTime' => 'string',
        'openCompleteTime' => 'string',
        'failReason' => 'string',
        'authType' => 'string'
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
        'requestNo' => null,
        'orderNo' => null,
        'status' => null,
        'bankAccountNo' => null,
        'bankCustomerNo' => null,
        'openRequestTime' => null,
        'openCompleteTime' => null,
        'failReason' => null,
        'authType' => null
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
        'requestNo' => 'requestNo',
        'orderNo' => 'orderNo',
        'status' => 'status',
        'bankAccountNo' => 'bankAccountNo',
        'bankCustomerNo' => 'bankCustomerNo',
        'openRequestTime' => 'openRequestTime',
        'openCompleteTime' => 'openCompleteTime',
        'failReason' => 'failReason',
        'authType' => 'authType'
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
        'requestNo' => 'setRequestNo',
        'orderNo' => 'setOrderNo',
        'status' => 'setStatus',
        'bankAccountNo' => 'setBankAccountNo',
        'bankCustomerNo' => 'setBankCustomerNo',
        'openRequestTime' => 'setOpenRequestTime',
        'openCompleteTime' => 'setOpenCompleteTime',
        'failReason' => 'setFailReason',
        'authType' => 'setAuthType'
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
        'requestNo' => 'getRequestNo',
        'orderNo' => 'getOrderNo',
        'status' => 'getStatus',
        'bankAccountNo' => 'getBankAccountNo',
        'bankCustomerNo' => 'getBankCustomerNo',
        'openRequestTime' => 'getOpenRequestTime',
        'openCompleteTime' => 'getOpenCompleteTime',
        'failReason' => 'getFailReason',
        'authType' => 'getAuthType'
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
        $this->container['requestNo'] = isset($data['requestNo']) ? $data['requestNo'] : null;
        $this->container['orderNo'] = isset($data['orderNo']) ? $data['orderNo'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['bankAccountNo'] = isset($data['bankAccountNo']) ? $data['bankAccountNo'] : null;
        $this->container['bankCustomerNo'] = isset($data['bankCustomerNo']) ? $data['bankCustomerNo'] : null;
        $this->container['openRequestTime'] = isset($data['openRequestTime']) ? $data['openRequestTime'] : null;
        $this->container['openCompleteTime'] = isset($data['openCompleteTime']) ? $data['openCompleteTime'] : null;
        $this->container['failReason'] = isset($data['failReason']) ? $data['failReason'] : null;
        $this->container['authType'] = isset($data['authType']) ? $data['authType'] : null;
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
     * @param string $returnCode 返回状态码AM00000 成功，其他请参考错误码
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
     * @param string $returnMsg 返回描述信息
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
     * @param string $merchantNo 商编号<br>业务主体商编
     *
     * @return $this
     */
    public function setMerchantNo($merchantNo)
    {
        $this->container['merchantNo'] = $merchantNo;

        return $this;
    }

    /**
     * Gets requestNo
     *
     * @return string
     */
    public function getRequestNo()
    {
        return $this->container['requestNo'];
    }

    /**
     * Sets requestNo
     *
     * @param string $requestNo 商户订单号
     *
     * @return $this
     */
    public function setRequestNo($requestNo)
    {
        $this->container['requestNo'] = $requestNo;

        return $this;
    }

    /**
     * Gets orderNo
     *
     * @return string
     */
    public function getOrderNo()
    {
        return $this->container['orderNo'];
    }

    /**
     * Sets orderNo
     *
     * @param string $orderNo 易宝唯一订单号
     *
     * @return $this
     */
    public function setOrderNo($orderNo)
    {
        $this->container['orderNo'] = $orderNo;

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
     * @param string $status 开户状态<br>可选项如下:<br>SUCCESS:成功<br>FAIL:失败<br>PROCESS:请求已受理
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

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
     * @param string $bankAccountNo 银行账户号(成功时返回)<br>此字段为后续请求查询余额，资金划拨等服务接口时必须参数，请着重记录。
     *
     * @return $this
     */
    public function setBankAccountNo($bankAccountNo)
    {
        $this->container['bankAccountNo'] = $bankAccountNo;

        return $this;
    }

    /**
     * Gets bankCustomerNo
     *
     * @return string
     */
    public function getBankCustomerNo()
    {
        return $this->container['bankCustomerNo'];
    }

    /**
     * Sets bankCustomerNo
     *
     * @param string $bankCustomerNo <p>银行客户号(银行编码为XIB，成功时返回)<br />此字段是银行收款所需账号，替换外部结算卡时请替换为此银行客户号，银行才能正常接收商户结算资金。</p>
     *
     * @return $this
     */
    public function setBankCustomerNo($bankCustomerNo)
    {
        $this->container['bankCustomerNo'] = $bankCustomerNo;

        return $this;
    }

    /**
     * Gets openRequestTime
     *
     * @return string
     */
    public function getOpenRequestTime()
    {
        return $this->container['openRequestTime'];
    }

    /**
     * Sets openRequestTime
     *
     * @param string $openRequestTime 开户请求时间<br>格式:yyyy-MM-dd HH:mm:ss
     *
     * @return $this
     */
    public function setOpenRequestTime($openRequestTime)
    {
        $this->container['openRequestTime'] = $openRequestTime;

        return $this;
    }

    /**
     * Gets openCompleteTime
     *
     * @return string
     */
    public function getOpenCompleteTime()
    {
        return $this->container['openCompleteTime'];
    }

    /**
     * Sets openCompleteTime
     *
     * @param string $openCompleteTime 开户完成时间(成功时返回)<br>格式:yyyy-MM-dd HH:mm:ss
     *
     * @return $this
     */
    public function setOpenCompleteTime($openCompleteTime)
    {
        $this->container['openCompleteTime'] = $openCompleteTime;

        return $this;
    }

    /**
     * Gets failReason
     *
     * @return string
     */
    public function getFailReason()
    {
        return $this->container['failReason'];
    }

    /**
     * Sets failReason
     *
     * @param string $failReason 失败原因(失败时返回)
     *
     * @return $this
     */
    public function setFailReason($failReason)
    {
        $this->container['failReason'] = $failReason;

        return $this;
    }

    /**
     * Gets authType
     *
     * @return string
     */
    public function getAuthType()
    {
        return $this->container['authType'];
    }

    /**
     * Sets authType
     *
     * @param string $authType 额外认证方式<br>可选项如下:<br>NO_AUTH:无须认证<br>SHORT_MSG_AUTH:短信认证
     *
     * @return $this
     */
    public function setAuthType($authType)
    {
        $this->container['authType'] = $authType;

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


