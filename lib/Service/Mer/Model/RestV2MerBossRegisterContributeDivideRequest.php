<?php


namespace Yeepay\Yop\Sdk\Service\Mer\Model;


class RestV2MerBossRegisterContributeDivideRequest extends \Yeepay\Yop\Sdk\Model\BaseRequest
{
    /**
     * @var string
     */
    private $requestNo;
    /**
     * @var string
     */
    private $businessRole;
    /**
     * @var string
     */
    private $notifyUrl;
    /**
     * @var string
     */
    private $merchantSubjectInfo;
    /**
     * @var string
     */
    private $merchantCorporationInfo;
    /**
     * @var string
     */
    private $merchantContactInfo;
    /**
     * @var string
     */
    private $industryCategoryInfo;
    /**
     * @var string
     */
    private $businessAddressInfo;
    /**
     * @var string
     */
    private $productInfo;
    /**
     * @var string
     */
    private $productQualificationInfo;
    /**
     * @var string
     */
    private $functionService;
    /**
     * @var string
     */
    private $functionServiceQualificationInfo;
    /**
     * @var string
     */
    private $divideConfigInfo;

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
     * @return RestV2MerBossRegisterContributeDivideRequest
     */
    public function setRequestNo($requestNo)
    {
        $this->requestNo = $requestNo;
        return $this;
    }
    /**
     * Gets businessRole
     *
     * @return string
     */
    public function getBusinessRole()
    {
        return $this->businessRole;
    }

    /**
     * Sets businessRole
     *
     * @param string $businessRole
     * @return RestV2MerBossRegisterContributeDivideRequest
     */
    public function setBusinessRole($businessRole)
    {
        $this->businessRole = $businessRole;
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
     * @return RestV2MerBossRegisterContributeDivideRequest
     */
    public function setNotifyUrl($notifyUrl)
    {
        $this->notifyUrl = $notifyUrl;
        return $this;
    }
    /**
     * Gets merchantSubjectInfo
     *
     * @return string
     */
    public function getMerchantSubjectInfo()
    {
        return $this->merchantSubjectInfo;
    }

    /**
     * Sets merchantSubjectInfo
     *
     * @param string $merchantSubjectInfo
     * @return RestV2MerBossRegisterContributeDivideRequest
     */
    public function setMerchantSubjectInfo($merchantSubjectInfo)
    {
        $this->merchantSubjectInfo = $merchantSubjectInfo;
        return $this;
    }
    /**
     * Gets merchantCorporationInfo
     *
     * @return string
     */
    public function getMerchantCorporationInfo()
    {
        return $this->merchantCorporationInfo;
    }

    /**
     * Sets merchantCorporationInfo
     *
     * @param string $merchantCorporationInfo
     * @return RestV2MerBossRegisterContributeDivideRequest
     */
    public function setMerchantCorporationInfo($merchantCorporationInfo)
    {
        $this->merchantCorporationInfo = $merchantCorporationInfo;
        return $this;
    }
    /**
     * Gets merchantContactInfo
     *
     * @return string
     */
    public function getMerchantContactInfo()
    {
        return $this->merchantContactInfo;
    }

    /**
     * Sets merchantContactInfo
     *
     * @param string $merchantContactInfo
     * @return RestV2MerBossRegisterContributeDivideRequest
     */
    public function setMerchantContactInfo($merchantContactInfo)
    {
        $this->merchantContactInfo = $merchantContactInfo;
        return $this;
    }
    /**
     * Gets industryCategoryInfo
     *
     * @return string
     */
    public function getIndustryCategoryInfo()
    {
        return $this->industryCategoryInfo;
    }

    /**
     * Sets industryCategoryInfo
     *
     * @param string $industryCategoryInfo
     * @return RestV2MerBossRegisterContributeDivideRequest
     */
    public function setIndustryCategoryInfo($industryCategoryInfo)
    {
        $this->industryCategoryInfo = $industryCategoryInfo;
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
     * @return RestV2MerBossRegisterContributeDivideRequest
     */
    public function setBusinessAddressInfo($businessAddressInfo)
    {
        $this->businessAddressInfo = $businessAddressInfo;
        return $this;
    }
    /**
     * Gets productInfo
     *
     * @return string
     */
    public function getProductInfo()
    {
        return $this->productInfo;
    }

    /**
     * Sets productInfo
     *
     * @param string $productInfo
     * @return RestV2MerBossRegisterContributeDivideRequest
     */
    public function setProductInfo($productInfo)
    {
        $this->productInfo = $productInfo;
        return $this;
    }
    /**
     * Gets productQualificationInfo
     *
     * @return string
     */
    public function getProductQualificationInfo()
    {
        return $this->productQualificationInfo;
    }

    /**
     * Sets productQualificationInfo
     *
     * @param string $productQualificationInfo
     * @return RestV2MerBossRegisterContributeDivideRequest
     */
    public function setProductQualificationInfo($productQualificationInfo)
    {
        $this->productQualificationInfo = $productQualificationInfo;
        return $this;
    }
    /**
     * Gets functionService
     *
     * @return string
     */
    public function getFunctionService()
    {
        return $this->functionService;
    }

    /**
     * Sets functionService
     *
     * @param string $functionService
     * @return RestV2MerBossRegisterContributeDivideRequest
     */
    public function setFunctionService($functionService)
    {
        $this->functionService = $functionService;
        return $this;
    }
    /**
     * Gets functionServiceQualificationInfo
     *
     * @return string
     */
    public function getFunctionServiceQualificationInfo()
    {
        return $this->functionServiceQualificationInfo;
    }

    /**
     * Sets functionServiceQualificationInfo
     *
     * @param string $functionServiceQualificationInfo
     * @return RestV2MerBossRegisterContributeDivideRequest
     */
    public function setFunctionServiceQualificationInfo($functionServiceQualificationInfo)
    {
        $this->functionServiceQualificationInfo = $functionServiceQualificationInfo;
        return $this;
    }
    /**
     * Gets divideConfigInfo
     *
     * @return string
     */
    public function getDivideConfigInfo()
    {
        return $this->divideConfigInfo;
    }

    /**
     * Sets divideConfigInfo
     *
     * @param string $divideConfigInfo
     * @return RestV2MerBossRegisterContributeDivideRequest
     */
    public function setDivideConfigInfo($divideConfigInfo)
    {
        $this->divideConfigInfo = $divideConfigInfo;
        return $this;
    }

    public static function getOperationId()
    {
        return 'rest_v2_mer_boss_register_contribute_divide';
    }


}
