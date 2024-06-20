<?php


namespace Yeepay\Yop\Sdk\Service\Mktg\Model;


class AccountcloseConfirmRequest extends \Yeepay\Yop\Sdk\Model\BaseRequest
{
    /**
     * @var string
     */
    private $merchantNo;
    /**
     * @var string
     */
    private $closeOrderId;
    /**
     * @var string
     */
    private $uniqueCloseNo;
    /**
     * @var string
     */
    private $smsCode;

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
     * @return AccountcloseConfirmRequest
     */
    public function setMerchantNo($merchantNo)
    {
        $this->merchantNo = $merchantNo;
        return $this;
    }
    /**
     * Gets closeOrderId
     *
     * @return string
     */
    public function getCloseOrderId()
    {
        return $this->closeOrderId;
    }

    /**
     * Sets closeOrderId
     *
     * @param string $closeOrderId
     * @return AccountcloseConfirmRequest
     */
    public function setCloseOrderId($closeOrderId)
    {
        $this->closeOrderId = $closeOrderId;
        return $this;
    }
    /**
     * Gets uniqueCloseNo
     *
     * @return string
     */
    public function getUniqueCloseNo()
    {
        return $this->uniqueCloseNo;
    }

    /**
     * Sets uniqueCloseNo
     *
     * @param string $uniqueCloseNo
     * @return AccountcloseConfirmRequest
     */
    public function setUniqueCloseNo($uniqueCloseNo)
    {
        $this->uniqueCloseNo = $uniqueCloseNo;
        return $this;
    }
    /**
     * Gets smsCode
     *
     * @return string
     */
    public function getSmsCode()
    {
        return $this->smsCode;
    }

    /**
     * Sets smsCode
     *
     * @param string $smsCode
     * @return AccountcloseConfirmRequest
     */
    public function setSmsCode($smsCode)
    {
        $this->smsCode = $smsCode;
        return $this;
    }

    public static function getOperationId()
    {
        return 'accountcloseConfirm';
    }


}
