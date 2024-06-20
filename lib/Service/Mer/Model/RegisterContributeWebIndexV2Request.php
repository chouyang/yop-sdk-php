<?php


namespace Yeepay\Yop\Sdk\Service\Mer\Model;


class RegisterContributeWebIndexV2Request extends \Yeepay\Yop\Sdk\Model\BaseRequest
{
    /**
     * @var string
     */
    private $requestNo;
    /**
     * @var string
     */
    private $signType;
    /**
     * @var string
     */
    private $notifyUrl;
    /**
     * @var string
     */
    private $returnUrl;
    /**
     * @var string
     */
    private $productTemplateNo;
    /**
     * @var string
     */
    private $merchantBaseInfo;
    /**
     * @var string
     */
    private $corporationInfo;
    /**
     * @var string
     */
    private $contactInfo;
    /**
     * @var string
     */
    private $businessAddressInfo;

    /**
     * Gets requestNo
     *
     * @return string
     */
    public function getRequestNo()
    {
        return $this->requestNo;
    }

    /**
     * Sets requestNo
     *
     * @param string $requestNo
     * @return RegisterContributeWebIndexV2Request
     */
    public function setRequestNo($requestNo)
    {
        $this->requestNo = $requestNo;
        return $this;
    }
    /**
     * Gets signType
     *
     * @return string
     */
    public function getSignType()
    {
        return $this->signType;
    }

    /**
     * Sets signType
     *
     * @param string $signType
     * @return RegisterContributeWebIndexV2Request
     */
    public function setSignType($signType)
    {
        $this->signType = $signType;
        return $this;
    }
    /**
     * Gets notifyUrl
     *
     * @return string
     */
    public function getNotifyUrl()
    {
        return $this->notifyUrl;
    }

    /**
     * Sets notifyUrl
     *
     * @param string $notifyUrl
     * @return RegisterContributeWebIndexV2Request
     */
    public function setNotifyUrl($notifyUrl)
    {
        $this->notifyUrl = $notifyUrl;
        return $this;
    }
    /**
     * Gets returnUrl
     *
     * @return string
     */
    public function getReturnUrl()
    {
        return $this->returnUrl;
    }

    /**
     * Sets returnUrl
     *
     * @param string $returnUrl
     * @return RegisterContributeWebIndexV2Request
     */
    public function setReturnUrl($returnUrl)
    {
        $this->returnUrl = $returnUrl;
        return $this;
    }
    /**
     * Gets productTemplateNo
     *
     * @return string
     */
    public function getProductTemplateNo()
    {
        return $this->productTemplateNo;
    }

    /**
     * Sets productTemplateNo
     *
     * @param string $productTemplateNo
     * @return RegisterContributeWebIndexV2Request
     */
    public function setProductTemplateNo($productTemplateNo)
    {
        $this->productTemplateNo = $productTemplateNo;
        return $this;
    }
    /**
     * Gets merchantBaseInfo
     *
     * @return string
     */
    public function getMerchantBaseInfo()
    {
        return $this->merchantBaseInfo;
    }

    /**
     * Sets merchantBaseInfo
     *
     * @param string $merchantBaseInfo
     * @return RegisterContributeWebIndexV2Request
     */
    public function setMerchantBaseInfo($merchantBaseInfo)
    {
        $this->merchantBaseInfo = $merchantBaseInfo;
        return $this;
    }
    /**
     * Gets corporationInfo
     *
     * @return string
     */
    public function getCorporationInfo()
    {
        return $this->corporationInfo;
    }

    /**
     * Sets corporationInfo
     *
     * @param string $corporationInfo
     * @return RegisterContributeWebIndexV2Request
     */
    public function setCorporationInfo($corporationInfo)
    {
        $this->corporationInfo = $corporationInfo;
        return $this;
    }
    /**
     * Gets contactInfo
     *
     * @return string
     */
    public function getContactInfo()
    {
        return $this->contactInfo;
    }

    /**
     * Sets contactInfo
     *
     * @param string $contactInfo
     * @return RegisterContributeWebIndexV2Request
     */
    public function setContactInfo($contactInfo)
    {
        $this->contactInfo = $contactInfo;
        return $this;
    }
    /**
     * Gets businessAddressInfo
     *
     * @return string
     */
    public function getBusinessAddressInfo()
    {
        return $this->businessAddressInfo;
    }

    /**
     * Sets businessAddressInfo
     *
     * @param string $businessAddressInfo
     * @return RegisterContributeWebIndexV2Request
     */
    public function setBusinessAddressInfo($businessAddressInfo)
    {
        $this->businessAddressInfo = $businessAddressInfo;
        return $this;
    }

    public static function getOperationId()
    {
        return 'registerContributeWebIndexV2';
    }


}
