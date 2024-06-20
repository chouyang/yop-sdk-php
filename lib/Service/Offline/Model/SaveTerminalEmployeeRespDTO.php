<?php
/**
 * SaveTerminalEmployeeRespDTO
 *
 * PHP version 5
 *
 * @category Class
 * @package  Yeepay\Yop\Sdk\
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * 线下业务
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

namespace Yeepay\Yop\Sdk\Service\Offline\Model;

use \ArrayAccess;
use Yeepay\Yop\Sdk\Model\ModelInterface;
use Yeepay\Yop\Sdk\Utils\ObjectSerializer;

/**
 * SaveTerminalEmployeeRespDTO Class Doc Comment
 *
 * @category Class
 * @description 保存操作员信息响应
 * @package  Yeepay\Yop\Sdk\
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SaveTerminalEmployeeRespDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SaveTerminalEmployeeRespDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'retCode' => 'string',
        'employeeNo' => 'string',
        'retMsg' => 'string',
        'employeeStatus' => 'string',
        'timestamp' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'retCode' => null,
        'employeeNo' => null,
        'retMsg' => null,
        'employeeStatus' => null,
        'timestamp' => 'date-time'
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
        'retCode' => 'retCode',
        'employeeNo' => 'employeeNo',
        'retMsg' => 'retMsg',
        'employeeStatus' => 'employeeStatus',
        'timestamp' => 'timestamp'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'retCode' => 'setRetCode',
        'employeeNo' => 'setEmployeeNo',
        'retMsg' => 'setRetMsg',
        'employeeStatus' => 'setEmployeeStatus',
        'timestamp' => 'setTimestamp'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'retCode' => 'getRetCode',
        'employeeNo' => 'getEmployeeNo',
        'retMsg' => 'getRetMsg',
        'employeeStatus' => 'getEmployeeStatus',
        'timestamp' => 'getTimestamp'
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
        $this->container['retCode'] = isset($data['retCode']) ? $data['retCode'] : null;
        $this->container['employeeNo'] = isset($data['employeeNo']) ? $data['employeeNo'] : null;
        $this->container['retMsg'] = isset($data['retMsg']) ? $data['retMsg'] : null;
        $this->container['employeeStatus'] = isset($data['employeeStatus']) ? $data['employeeStatus'] : null;
        $this->container['timestamp'] = isset($data['timestamp']) ? $data['timestamp'] : null;
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
     * Gets retCode
     *
     * @return string
     */
    public function getRetCode()
    {
        return $this->container['retCode'];
    }

    /**
     * Sets retCode
     *
     * @param string $retCode retCode
     *
     * @return $this
     */
    public function setRetCode($retCode)
    {
        $this->container['retCode'] = $retCode;

        return $this;
    }

    /**
     * Gets employeeNo
     *
     * @return string
     */
    public function getEmployeeNo()
    {
        return $this->container['employeeNo'];
    }

    /**
     * Sets employeeNo
     *
     * @param string $employeeNo employeeNo
     *
     * @return $this
     */
    public function setEmployeeNo($employeeNo)
    {
        $this->container['employeeNo'] = $employeeNo;

        return $this;
    }

    /**
     * Gets retMsg
     *
     * @return string
     */
    public function getRetMsg()
    {
        return $this->container['retMsg'];
    }

    /**
     * Sets retMsg
     *
     * @param string $retMsg retMsg
     *
     * @return $this
     */
    public function setRetMsg($retMsg)
    {
        $this->container['retMsg'] = $retMsg;

        return $this;
    }

    /**
     * Gets employeeStatus
     *
     * @return string
     */
    public function getEmployeeStatus()
    {
        return $this->container['employeeStatus'];
    }

    /**
     * Sets employeeStatus
     *
     * @param string $employeeStatus employeeStatus
     *
     * @return $this
     */
    public function setEmployeeStatus($employeeStatus)
    {
        $this->container['employeeStatus'] = $employeeStatus;

        return $this;
    }

    /**
     * Gets timestamp
     *
     * @return \DateTime
     */
    public function getTimestamp()
    {
        return $this->container['timestamp'];
    }

    /**
     * Sets timestamp
     *
     * @param \DateTime $timestamp timestamp
     *
     * @return $this
     */
    public function setTimestamp($timestamp)
    {
        $this->container['timestamp'] = $timestamp;

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


