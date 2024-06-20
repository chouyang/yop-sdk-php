<?php


namespace Yeepay\Yop\Sdk\Service\Mktg\Model;


class UseropenQueryRequest extends \Yeepay\Yop\Sdk\Model\BaseRequest
{
    /**
     * @var string
     */
    private $merchantNo;
    /**
     * @var string
     */
    private $marketingNo;
    /**
     * @var string
     */
    private $bankCode;
    /**
     * @var string
     */
    private $idCardType;
    /**
     * @var string
     */
    private $idCardNo;

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
     * @return UseropenQueryRequest
     */
    public function setMerchantNo($merchantNo)
    {
        $this->merchantNo = $merchantNo;
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
     * @return UseropenQueryRequest
     */
    public function setMarketingNo($marketingNo)
    {
        $this->marketingNo = $marketingNo;
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
     * @return UseropenQueryRequest
     */
    public function setBankCode($bankCode)
    {
        $this->bankCode = $bankCode;
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
     * @return UseropenQueryRequest
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
     * @return UseropenQueryRequest
     */
    public function setIdCardNo($idCardNo)
    {
        $this->idCardNo = $idCardNo;
        return $this;
    }

    public static function getOperationId()
    {
        return 'useropenQuery';
    }


}
