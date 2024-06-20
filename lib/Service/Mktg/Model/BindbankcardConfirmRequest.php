<?php


namespace Yeepay\Yop\Sdk\Service\Mktg\Model;


class BindbankcardConfirmRequest extends \Yeepay\Yop\Sdk\Model\BaseRequest
{
    /**
     * @var string
     */
    private $merchantNo;
    /**
     * @var string
     */
    private $bindOrderId;
    /**
     * @var string
     */
    private $uniqueBindNo;
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
     * @return BindbankcardConfirmRequest
     */
    public function setMerchantNo($merchantNo)
    {
        $this->merchantNo = $merchantNo;
        return $this;
    }
    /**
     * Gets bindOrderId
     *
     * @return string
     */
    public function getBindOrderId()
    {
        return $this->bindOrderId;
    }

    /**
     * Sets bindOrderId
     *
     * @param string $bindOrderId
     * @return BindbankcardConfirmRequest
     */
    public function setBindOrderId($bindOrderId)
    {
        $this->bindOrderId = $bindOrderId;
        return $this;
    }
    /**
     * Gets uniqueBindNo
     *
     * @return string
     */
    public function getUniqueBindNo()
    {
        return $this->uniqueBindNo;
    }

    /**
     * Sets uniqueBindNo
     *
     * @param string $uniqueBindNo
     * @return BindbankcardConfirmRequest
     */
    public function setUniqueBindNo($uniqueBindNo)
    {
        $this->uniqueBindNo = $uniqueBindNo;
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
     * @return BindbankcardConfirmRequest
     */
    public function setSmsCode($smsCode)
    {
        $this->smsCode = $smsCode;
        return $this;
    }

    public static function getOperationId()
    {
        return 'bindbankcardConfirm';
    }


}
