<?php


namespace Yeepay\Yop\Sdk\Service\Mktg\Model;


class UseractivateConfirmRequest extends \Yeepay\Yop\Sdk\Model\BaseRequest
{
    /**
     * @var string
     */
    private $merchantNo;
    /**
     * @var string
     */
    private $activateOrderId;
    /**
     * @var string
     */
    private $uniqueActivateNo;
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
     * @return UseractivateConfirmRequest
     */
    public function setMerchantNo($merchantNo)
    {
        $this->merchantNo = $merchantNo;
        return $this;
    }
    /**
     * Gets activateOrderId
     *
     * @return string
     */
    public function getActivateOrderId()
    {
        return $this->activateOrderId;
    }

    /**
     * Sets activateOrderId
     *
     * @param string $activateOrderId
     * @return UseractivateConfirmRequest
     */
    public function setActivateOrderId($activateOrderId)
    {
        $this->activateOrderId = $activateOrderId;
        return $this;
    }
    /**
     * Gets uniqueActivateNo
     *
     * @return string
     */
    public function getUniqueActivateNo()
    {
        return $this->uniqueActivateNo;
    }

    /**
     * Sets uniqueActivateNo
     *
     * @param string $uniqueActivateNo
     * @return UseractivateConfirmRequest
     */
    public function setUniqueActivateNo($uniqueActivateNo)
    {
        $this->uniqueActivateNo = $uniqueActivateNo;
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
     * @return UseractivateConfirmRequest
     */
    public function setSmsCode($smsCode)
    {
        $this->smsCode = $smsCode;
        return $this;
    }

    public static function getOperationId()
    {
        return 'useractivateConfirm';
    }


}
