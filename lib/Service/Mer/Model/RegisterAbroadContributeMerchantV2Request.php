<?php


namespace Yeepay\Yop\Sdk\Service\Mer\Model;


class RegisterAbroadContributeMerchantV2Request extends \Yeepay\Yop\Sdk\Model\BaseRequest
{
    /**
     * @var string
     */
    private $requestNo;
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
    private $settlementAccountInfo;
    /**
     * @var string
     */
    private $notifyUrl;
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
    private $directorInfos;
    /**
     * @var string
     */
    private $pubDeclareInfo;
    /**
     * @var string
     */
    private $abroadProductInfo;
    /**
     * @var string
     */
    private $abroadProductQualificationInfo;
    /**
     * @var string
     */
    private $shareholderInfos;
    /**
     * @var string
     */
    private $seniorInfos;
    /**
     * @var string
     */
    private $beneficialInfos;

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
     * @return RegisterAbroadContributeMerchantV2Request
     */
    public function setRequestNo($requestNo)
    {
        $this->requestNo = $requestNo;
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
     * @return RegisterAbroadContributeMerchantV2Request
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
     * @return RegisterAbroadContributeMerchantV2Request
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
     * @return RegisterAbroadContributeMerchantV2Request
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
     * @return RegisterAbroadContributeMerchantV2Request
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
     * @return RegisterAbroadContributeMerchantV2Request
     */
    public function setBusinessAddressInfo($businessAddressInfo)
    {
        $this->businessAddressInfo = $businessAddressInfo;
        return $this;
    }
    /**
     * Gets settlementAccountInfo
     *
     * @return string
     */
    public function getSettlementAccountInfo()
    {
        return $this->settlementAccountInfo;
    }

    /**
     * Sets settlementAccountInfo
     *
     * @param string $settlementAccountInfo
     * @return RegisterAbroadContributeMerchantV2Request
     */
    public function setSettlementAccountInfo($settlementAccountInfo)
    {
        $this->settlementAccountInfo = $settlementAccountInfo;
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
     * @return RegisterAbroadContributeMerchantV2Request
     */
    public function setNotifyUrl($notifyUrl)
    {
        $this->notifyUrl = $notifyUrl;
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
     * @return RegisterAbroadContributeMerchantV2Request
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
     * @return RegisterAbroadContributeMerchantV2Request
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
     * @return RegisterAbroadContributeMerchantV2Request
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
     * @return RegisterAbroadContributeMerchantV2Request
     */
    public function setFunctionServiceQualificationInfo($functionServiceQualificationInfo)
    {
        $this->functionServiceQualificationInfo = $functionServiceQualificationInfo;
        return $this;
    }
    /**
     * Gets directorInfos
     *
     * @return string
     */
    public function getDirectorInfos()
    {
        return $this->directorInfos;
    }

    /**
     * Sets directorInfos
     *
     * @param string $directorInfos
     * @return RegisterAbroadContributeMerchantV2Request
     */
    public function setDirectorInfos($directorInfos)
    {
        $this->directorInfos = $directorInfos;
        return $this;
    }
    /**
     * Gets pubDeclareInfo
     *
     * @return string
     */
    public function getPubDeclareInfo()
    {
        return $this->pubDeclareInfo;
    }

    /**
     * Sets pubDeclareInfo
     *
     * @param string $pubDeclareInfo
     * @return RegisterAbroadContributeMerchantV2Request
     */
    public function setPubDeclareInfo($pubDeclareInfo)
    {
        $this->pubDeclareInfo = $pubDeclareInfo;
        return $this;
    }
    /**
     * Gets abroadProductInfo
     *
     * @return string
     */
    public function getAbroadProductInfo()
    {
        return $this->abroadProductInfo;
    }

    /**
     * Sets abroadProductInfo
     *
     * @param string $abroadProductInfo
     * @return RegisterAbroadContributeMerchantV2Request
     */
    public function setAbroadProductInfo($abroadProductInfo)
    {
        $this->abroadProductInfo = $abroadProductInfo;
        return $this;
    }
    /**
     * Gets abroadProductQualificationInfo
     *
     * @return string
     */
    public function getAbroadProductQualificationInfo()
    {
        return $this->abroadProductQualificationInfo;
    }

    /**
     * Sets abroadProductQualificationInfo
     *
     * @param string $abroadProductQualificationInfo
     * @return RegisterAbroadContributeMerchantV2Request
     */
    public function setAbroadProductQualificationInfo($abroadProductQualificationInfo)
    {
        $this->abroadProductQualificationInfo = $abroadProductQualificationInfo;
        return $this;
    }
    /**
     * Gets shareholderInfos
     *
     * @return string
     */
    public function getShareholderInfos()
    {
        return $this->shareholderInfos;
    }

    /**
     * Sets shareholderInfos
     *
     * @param string $shareholderInfos
     * @return RegisterAbroadContributeMerchantV2Request
     */
    public function setShareholderInfos($shareholderInfos)
    {
        $this->shareholderInfos = $shareholderInfos;
        return $this;
    }
    /**
     * Gets seniorInfos
     *
     * @return string
     */
    public function getSeniorInfos()
    {
        return $this->seniorInfos;
    }

    /**
     * Sets seniorInfos
     *
     * @param string $seniorInfos
     * @return RegisterAbroadContributeMerchantV2Request
     */
    public function setSeniorInfos($seniorInfos)
    {
        $this->seniorInfos = $seniorInfos;
        return $this;
    }
    /**
     * Gets beneficialInfos
     *
     * @return string
     */
    public function getBeneficialInfos()
    {
        return $this->beneficialInfos;
    }

    /**
     * Sets beneficialInfos
     *
     * @param string $beneficialInfos
     * @return RegisterAbroadContributeMerchantV2Request
     */
    public function setBeneficialInfos($beneficialInfos)
    {
        $this->beneficialInfos = $beneficialInfos;
        return $this;
    }

    public static function getOperationId()
    {
        return 'registerAbroadContributeMerchantV2';
    }


}
