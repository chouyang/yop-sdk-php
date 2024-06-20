<?php
/**
 * GetShopRspDTO
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
 * GetShopRspDTO Class Doc Comment
 *
 * @category Class
 * @description 网点信息
 * @package  Yeepay\Yop\Sdk\
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GetShopRspDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'GetShopRspDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'address' => 'string',
        'districtName' => 'string',
        'city' => 'string',
        'mobile' => 'string',
        'shopName' => 'string',
        'updateTime' => '\DateTime',
        'linkman' => 'string',
        'province' => 'string',
        'cityName' => 'string',
        'createTime' => '\DateTime',
        'district' => 'string',
        'provinceName' => 'string',
        'shopNo' => 'string',
        'merchantNo' => 'string',
        'status' => 'string',
        'activeCode' => 'string',
        'shopType' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'address' => null,
        'districtName' => null,
        'city' => null,
        'mobile' => null,
        'shopName' => null,
        'updateTime' => 'date-time',
        'linkman' => null,
        'province' => null,
        'cityName' => null,
        'createTime' => 'date-time',
        'district' => null,
        'provinceName' => null,
        'shopNo' => null,
        'merchantNo' => null,
        'status' => null,
        'activeCode' => null,
        'shopType' => null
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
        'address' => 'address',
        'districtName' => 'districtName',
        'city' => 'city',
        'mobile' => 'mobile',
        'shopName' => 'shopName',
        'updateTime' => 'updateTime',
        'linkman' => 'linkman',
        'province' => 'province',
        'cityName' => 'cityName',
        'createTime' => 'createTime',
        'district' => 'district',
        'provinceName' => 'provinceName',
        'shopNo' => 'shopNo',
        'merchantNo' => 'merchantNo',
        'status' => 'status',
        'activeCode' => 'activeCode',
        'shopType' => 'shopType'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'address' => 'setAddress',
        'districtName' => 'setDistrictName',
        'city' => 'setCity',
        'mobile' => 'setMobile',
        'shopName' => 'setShopName',
        'updateTime' => 'setUpdateTime',
        'linkman' => 'setLinkman',
        'province' => 'setProvince',
        'cityName' => 'setCityName',
        'createTime' => 'setCreateTime',
        'district' => 'setDistrict',
        'provinceName' => 'setProvinceName',
        'shopNo' => 'setShopNo',
        'merchantNo' => 'setMerchantNo',
        'status' => 'setStatus',
        'activeCode' => 'setActiveCode',
        'shopType' => 'setShopType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'address' => 'getAddress',
        'districtName' => 'getDistrictName',
        'city' => 'getCity',
        'mobile' => 'getMobile',
        'shopName' => 'getShopName',
        'updateTime' => 'getUpdateTime',
        'linkman' => 'getLinkman',
        'province' => 'getProvince',
        'cityName' => 'getCityName',
        'createTime' => 'getCreateTime',
        'district' => 'getDistrict',
        'provinceName' => 'getProvinceName',
        'shopNo' => 'getShopNo',
        'merchantNo' => 'getMerchantNo',
        'status' => 'getStatus',
        'activeCode' => 'getActiveCode',
        'shopType' => 'getShopType'
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
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['districtName'] = isset($data['districtName']) ? $data['districtName'] : null;
        $this->container['city'] = isset($data['city']) ? $data['city'] : null;
        $this->container['mobile'] = isset($data['mobile']) ? $data['mobile'] : null;
        $this->container['shopName'] = isset($data['shopName']) ? $data['shopName'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['linkman'] = isset($data['linkman']) ? $data['linkman'] : null;
        $this->container['province'] = isset($data['province']) ? $data['province'] : null;
        $this->container['cityName'] = isset($data['cityName']) ? $data['cityName'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['district'] = isset($data['district']) ? $data['district'] : null;
        $this->container['provinceName'] = isset($data['provinceName']) ? $data['provinceName'] : null;
        $this->container['shopNo'] = isset($data['shopNo']) ? $data['shopNo'] : null;
        $this->container['merchantNo'] = isset($data['merchantNo']) ? $data['merchantNo'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['activeCode'] = isset($data['activeCode']) ? $data['activeCode'] : null;
        $this->container['shopType'] = isset($data['shopType']) ? $data['shopType'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['address'] === null) {
            $invalidProperties[] = "'address' can't be null";
        }
        if ($this->container['districtName'] === null) {
            $invalidProperties[] = "'districtName' can't be null";
        }
        if ($this->container['city'] === null) {
            $invalidProperties[] = "'city' can't be null";
        }
        if ($this->container['mobile'] === null) {
            $invalidProperties[] = "'mobile' can't be null";
        }
        if ($this->container['shopName'] === null) {
            $invalidProperties[] = "'shopName' can't be null";
        }
        if ($this->container['updateTime'] === null) {
            $invalidProperties[] = "'updateTime' can't be null";
        }
        if ($this->container['linkman'] === null) {
            $invalidProperties[] = "'linkman' can't be null";
        }
        if ($this->container['province'] === null) {
            $invalidProperties[] = "'province' can't be null";
        }
        if ($this->container['cityName'] === null) {
            $invalidProperties[] = "'cityName' can't be null";
        }
        if ($this->container['createTime'] === null) {
            $invalidProperties[] = "'createTime' can't be null";
        }
        if ($this->container['district'] === null) {
            $invalidProperties[] = "'district' can't be null";
        }
        if ($this->container['provinceName'] === null) {
            $invalidProperties[] = "'provinceName' can't be null";
        }
        if ($this->container['shopNo'] === null) {
            $invalidProperties[] = "'shopNo' can't be null";
        }
        if ($this->container['merchantNo'] === null) {
            $invalidProperties[] = "'merchantNo' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
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
     * @param string $address <pre>网点详细地址</pre>
     *
     * @return $this
     */
    public function setAddress($address)
    {
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets districtName
     *
     * @return string
     */
    public function getDistrictName()
    {
        return $this->container['districtName'];
    }

    /**
     * Sets districtName
     *
     * @param string $districtName <pre>网点所在区</pre>
     *
     * @return $this
     */
    public function setDistrictName($districtName)
    {
        $this->container['districtName'] = $districtName;

        return $this;
    }

    /**
     * Gets city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     *
     * @param string $city <pre>网点所在市编码</pre>
     *
     * @return $this
     */
    public function setCity($city)
    {
        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets mobile
     *
     * @return string
     */
    public function getMobile()
    {
        return $this->container['mobile'];
    }

    /**
     * Sets mobile
     *
     * @param string $mobile <pre>联系手机</pre>
     *
     * @return $this
     */
    public function setMobile($mobile)
    {
        $this->container['mobile'] = $mobile;

        return $this;
    }

    /**
     * Gets shopName
     *
     * @return string
     */
    public function getShopName()
    {
        return $this->container['shopName'];
    }

    /**
     * Sets shopName
     *
     * @param string $shopName <pre>网点名称</pre>
     *
     * @return $this
     */
    public function setShopName($shopName)
    {
        $this->container['shopName'] = $shopName;

        return $this;
    }

    /**
     * Gets updateTime
     *
     * @return \DateTime
     */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
     * Sets updateTime
     *
     * @param \DateTime $updateTime <pre>最后修改时间</pre>
     *
     * @return $this
     */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;

        return $this;
    }

    /**
     * Gets linkman
     *
     * @return string
     */
    public function getLinkman()
    {
        return $this->container['linkman'];
    }

    /**
     * Sets linkman
     *
     * @param string $linkman <pre>联系人</pre>
     *
     * @return $this
     */
    public function setLinkman($linkman)
    {
        $this->container['linkman'] = $linkman;

        return $this;
    }

    /**
     * Gets province
     *
     * @return string
     */
    public function getProvince()
    {
        return $this->container['province'];
    }

    /**
     * Sets province
     *
     * @param string $province <pre>网点所在省编码</pre>
     *
     * @return $this
     */
    public function setProvince($province)
    {
        $this->container['province'] = $province;

        return $this;
    }

    /**
     * Gets cityName
     *
     * @return string
     */
    public function getCityName()
    {
        return $this->container['cityName'];
    }

    /**
     * Sets cityName
     *
     * @param string $cityName <pre>网点所在市</pre>
     *
     * @return $this
     */
    public function setCityName($cityName)
    {
        $this->container['cityName'] = $cityName;

        return $this;
    }

    /**
     * Gets createTime
     *
     * @return \DateTime
     */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
     * Sets createTime
     *
     * @param \DateTime $createTime <pre>创建时间</pre>
     *
     * @return $this
     */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;

        return $this;
    }

    /**
     * Gets district
     *
     * @return string
     */
    public function getDistrict()
    {
        return $this->container['district'];
    }

    /**
     * Sets district
     *
     * @param string $district <pre>网点所在区编码</pre>
     *
     * @return $this
     */
    public function setDistrict($district)
    {
        $this->container['district'] = $district;

        return $this;
    }

    /**
     * Gets provinceName
     *
     * @return string
     */
    public function getProvinceName()
    {
        return $this->container['provinceName'];
    }

    /**
     * Sets provinceName
     *
     * @param string $provinceName <pre>网点所在省</pre>
     *
     * @return $this
     */
    public function setProvinceName($provinceName)
    {
        $this->container['provinceName'] = $provinceName;

        return $this;
    }

    /**
     * Gets shopNo
     *
     * @return string
     */
    public function getShopNo()
    {
        return $this->container['shopNo'];
    }

    /**
     * Sets shopNo
     *
     * @param string $shopNo <pre>网点编号</pre>
     *
     * @return $this
     */
    public function setShopNo($shopNo)
    {
        $this->container['shopNo'] = $shopNo;

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
     * @param string $merchantNo <p>收单商编</p>
     *
     * @return $this
     */
    public function setMerchantNo($merchantNo)
    {
        $this->container['merchantNo'] = $merchantNo;

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
     * @param string $status <pre>网点状态<br />枚举值：<br /><em style=\"font-family: Verdana, Arial, Helvetica, sans-serif;\">PERMIT：<em>活跃 <br /></em></em><em style=\"font-family: Verdana, Arial, Helvetica, sans-serif;\">FORBID：<em>关闭</em></em></pre>
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets activeCode
     *
     * @return string
     */
    public function getActiveCode()
    {
        return $this->container['activeCode'];
    }

    /**
     * Sets activeCode
     *
     * @param string $activeCode <p>激活码</p>
     *
     * @return $this
     */
    public function setActiveCode($activeCode)
    {
        $this->container['activeCode'] = $activeCode;

        return $this;
    }

    /**
     * Gets shopType
     *
     * @return string
     */
    public function getShopType()
    {
        return $this->container['shopType'];
    }

    /**
     * Sets shopType
     *
     * @param string $shopType <div> <pre>默认网点DEFAULT,非默认UN_DEFAULT</pre> </div>
     *
     * @return $this
     */
    public function setShopType($shopType)
    {
        $this->container['shopType'] = $shopType;

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

