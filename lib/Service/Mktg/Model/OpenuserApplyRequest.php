<?php


namespace Yeepay\Yop\Sdk\Service\Mktg\Model;


class OpenuserApplyRequest extends \Yeepay\Yop\Sdk\Model\BaseRequest
{
    /**
     * @var string
     */
    private $merchantNo;
    /**
     * @var string
     */
    private $openOrderId;
    /**
     * @var string
     */
    private $marketingNo;
    /**
     * @var string
     */
    private $merchantUserNo;
    /**
     * @var string
     */
    private $profession;
    /**
     * @var string
     */
    private $sex;
    /**
     * @var string
     */
    private $bankCode;
    /**
     * @var string
     */
    private $accountLevel;
    /**
     * @var string
     */
    private $userName;
    /**
     * @var string
     */
    private $idCardType;
    /**
     * @var string
     */
    private $idCardNo;
    /**
     * @var string
     */
    private $idAddress;
    /**
     * @var string
     */
    private $idStartDate;
    /**
     * @var string
     */
    private $idEndDate;
    /**
     * @var string
     */
    private $idIssuingAuthority;
    /**
     * @var string
     */
    private $nationality;
    /**
     * @var string
     */
    private $mobile;
    /**
     * @var string
     */
    private $bindBankCardNo;
    /**
     * @var string
     */
    private $city;
    /**
     * @var string
     */
    private $notifyUrl;

    /**
     * Gets merchantNo
     *
     * @return string
     */
    public function getMerchantNo()
    {
        return $this->merchantNo;
    }

    /**
     * Sets merchantNo
     *
     * @param string $merchantNo
     * @return OpenuserApplyRequest
     */
    public function setMerchantNo($merchantNo)
    {
        $this->merchantNo = $merchantNo;
        return $this;
    }
    /**
     * Gets openOrderId
     *
     * @return string
     */
    public function getOpenOrderId()
    {
        return $this->openOrderId;
    }

    /**
     * Sets openOrderId
     *
     * @param string $openOrderId
     * @return OpenuserApplyRequest
     */
    public function setOpenOrderId($openOrderId)
    {
        $this->openOrderId = $openOrderId;
        return $this;
    }
    /**
     * Gets marketingNo
     *
     * @return string
     */
    public function getMarketingNo()
    {
        return $this->marketingNo;
    }

    /**
     * Sets marketingNo
     *
     * @param string $marketingNo
     * @return OpenuserApplyRequest
     */
    public function setMarketingNo($marketingNo)
    {
        $this->marketingNo = $marketingNo;
        return $this;
    }
    /**
     * Gets merchantUserNo
     *
     * @return string
     */
    public function getMerchantUserNo()
    {
        return $this->merchantUserNo;
    }

    /**
     * Sets merchantUserNo
     *
     * @param string $merchantUserNo
     * @return OpenuserApplyRequest
     */
    public function setMerchantUserNo($merchantUserNo)
    {
        $this->merchantUserNo = $merchantUserNo;
        return $this;
    }
    /**
     * Gets profession
     *
     * @return string
     */
    public function getProfession()
    {
        return $this->profession;
    }

    /**
     * Sets profession
     *
     * @param string $profession
     * @return OpenuserApplyRequest
     */
    public function setProfession($profession)
    {
        $this->profession = $profession;
        return $this;
    }
    /**
     * Gets sex
     *
     * @return string
     */
    public function getSex()
    {
        return $this->sex;
    }

    /**
     * Sets sex
     *
     * @param string $sex
     * @return OpenuserApplyRequest
     */
    public function setSex($sex)
    {
        $this->sex = $sex;
        return $this;
    }
    /**
     * Gets bankCode
     *
     * @return string
     */
    public function getBankCode()
    {
        return $this->bankCode;
    }

    /**
     * Sets bankCode
     *
     * @param string $bankCode
     * @return OpenuserApplyRequest
     */
    public function setBankCode($bankCode)
    {
        $this->bankCode = $bankCode;
        return $this;
    }
    /**
     * Gets accountLevel
     *
     * @return string
     */
    public function getAccountLevel()
    {
        return $this->accountLevel;
    }

    /**
     * Sets accountLevel
     *
     * @param string $accountLevel
     * @return OpenuserApplyRequest
     */
    public function setAccountLevel($accountLevel)
    {
        $this->accountLevel = $accountLevel;
        return $this;
    }
    /**
     * Gets userName
     *
     * @return string
     */
    public function getUserName()
    {
        return $this->userName;
    }

    /**
     * Sets userName
     *
     * @param string $userName
     * @return OpenuserApplyRequest
     */
    public function setUserName($userName)
    {
        $this->userName = $userName;
        return $this;
    }
    /**
     * Gets idCardType
     *
     * @return string
     */
    public function getIdCardType()
    {
        return $this->idCardType;
    }

    /**
     * Sets idCardType
     *
     * @param string $idCardType
     * @return OpenuserApplyRequest
     */
    public function setIdCardType($idCardType)
    {
        $this->idCardType = $idCardType;
        return $this;
    }
    /**
     * Gets idCardNo
     *
     * @return string
     */
    public function getIdCardNo()
    {
        return $this->idCardNo;
    }

    /**
     * Sets idCardNo
     *
     * @param string $idCardNo
     * @return OpenuserApplyRequest
     */
    public function setIdCardNo($idCardNo)
    {
        $this->idCardNo = $idCardNo;
        return $this;
    }
    /**
     * Gets idAddress
     *
     * @return string
     */
    public function getIdAddress()
    {
        return $this->idAddress;
    }

    /**
     * Sets idAddress
     *
     * @param string $idAddress
     * @return OpenuserApplyRequest
     */
    public function setIdAddress($idAddress)
    {
        $this->idAddress = $idAddress;
        return $this;
    }
    /**
     * Gets idStartDate
     *
     * @return string
     */
    public function getIdStartDate()
    {
        return $this->idStartDate;
    }

    /**
     * Sets idStartDate
     *
     * @param string $idStartDate
     * @return OpenuserApplyRequest
     */
    public function setIdStartDate($idStartDate)
    {
        $this->idStartDate = $idStartDate;
        return $this;
    }
    /**
     * Gets idEndDate
     *
     * @return string
     */
    public function getIdEndDate()
    {
        return $this->idEndDate;
    }

    /**
     * Sets idEndDate
     *
     * @param string $idEndDate
     * @return OpenuserApplyRequest
     */
    public function setIdEndDate($idEndDate)
    {
        $this->idEndDate = $idEndDate;
        return $this;
    }
    /**
     * Gets idIssuingAuthority
     *
     * @return string
     */
    public function getIdIssuingAuthority()
    {
        return $this->idIssuingAuthority;
    }

    /**
     * Sets idIssuingAuthority
     *
     * @param string $idIssuingAuthority
     * @return OpenuserApplyRequest
     */
    public function setIdIssuingAuthority($idIssuingAuthority)
    {
        $this->idIssuingAuthority = $idIssuingAuthority;
        return $this;
    }
    /**
     * Gets nationality
     *
     * @return string
     */
    public function getNationality()
    {
        return $this->nationality;
    }

    /**
     * Sets nationality
     *
     * @param string $nationality
     * @return OpenuserApplyRequest
     */
    public function setNationality($nationality)
    {
        $this->nationality = $nationality;
        return $this;
    }
    /**
     * Gets mobile
     *
     * @return string
     */
    public function getMobile()
    {
        return $this->mobile;
    }

    /**
     * Sets mobile
     *
     * @param string $mobile
     * @return OpenuserApplyRequest
     */
    public function setMobile($mobile)
    {
        $this->mobile = $mobile;
        return $this;
    }
    /**
     * Gets bindBankCardNo
     *
     * @return string
     */
    public function getBindBankCardNo()
    {
        return $this->bindBankCardNo;
    }

    /**
     * Sets bindBankCardNo
     *
     * @param string $bindBankCardNo
     * @return OpenuserApplyRequest
     */
    public function setBindBankCardNo($bindBankCardNo)
    {
        $this->bindBankCardNo = $bindBankCardNo;
        return $this;
    }
    /**
     * Gets city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Sets city
     *
     * @param string $city
     * @return OpenuserApplyRequest
     */
    public function setCity($city)
    {
        $this->city = $city;
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
     * @return OpenuserApplyRequest
     */
    public function setNotifyUrl($notifyUrl)
    {
        $this->notifyUrl = $notifyUrl;
        return $this;
    }

    public static function getOperationId()
    {
        return 'openuserApply';
    }


}
