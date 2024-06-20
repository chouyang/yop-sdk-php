<?php


namespace Yeepay\Yop\Sdk\Service\Mktg\Model;


class UserinfoModifyRequest extends \Yeepay\Yop\Sdk\Model\BaseRequest
{
    /**
     * @var string
     */
    private $merchantNo;
    /**
     * @var string
     */
    private $infoOrderId;
    /**
     * @var string
     */
    private $bankCardNo;
    /**
     * @var string
     */
    private $userName;
    /**
     * @var string
     */
    private $mobile;
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
     * @return UserinfoModifyRequest
     */
    public function setMerchantNo($merchantNo)
    {
        $this->merchantNo = $merchantNo;
        return $this;
    }
    /**
     * Gets infoOrderId
     *
     * @return string
     */
    public function getInfoOrderId()
    {
        return $this->infoOrderId;
    }

    /**
     * Sets infoOrderId
     *
     * @param string $infoOrderId
     * @return UserinfoModifyRequest
     */
    public function setInfoOrderId($infoOrderId)
    {
        $this->infoOrderId = $infoOrderId;
        return $this;
    }
    /**
     * Gets bankCardNo
     *
     * @return string
     */
    public function getBankCardNo()
    {
        return $this->bankCardNo;
    }

    /**
     * Sets bankCardNo
     *
     * @param string $bankCardNo
     * @return UserinfoModifyRequest
     */
    public function setBankCardNo($bankCardNo)
    {
        $this->bankCardNo = $bankCardNo;
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
     * @return UserinfoModifyRequest
     */
    public function setUserName($userName)
    {
        $this->userName = $userName;
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
     * @return UserinfoModifyRequest
     */
    public function setMobile($mobile)
    {
        $this->mobile = $mobile;
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
     * @return UserinfoModifyRequest
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
     * @return UserinfoModifyRequest
     */
    public function setIdCardNo($idCardNo)
    {
        $this->idCardNo = $idCardNo;
        return $this;
    }

    public static function getOperationId()
    {
        return 'userinfoModify';
    }


}
