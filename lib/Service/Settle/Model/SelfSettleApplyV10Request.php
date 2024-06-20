<?php


namespace Yeepay\Yop\Sdk\Service\Settle\Model;


class SelfSettleApplyV10Request extends \Yeepay\Yop\Sdk\Model\BaseRequest
{
    /**
     * @var string
     */
    private $parentMerchantNo;
    /**
     * @var string
     */
    private $merchantNo;
    /**
     * @var string
     */
    private $settleRequestNo;
    /**
     * @var string
     */
    private $operatePeriod;
    /**
     * @var \DateTime
     */
    private $endTime;
    /**
     * @var string
     */
    private $notifyUrl;
    /**
     * @var string
     */
    private $bankRemark;

    /**
     * Gets parentMerchantNo
     *
     * @return string
     */
    public function getParentMerchantNo()
    {
        return $this->parentMerchantNo;
    }

    /**
     * Sets parentMerchantNo
     *
     * @param string $parentMerchantNo
     * @return SelfSettleApplyV10Request
     */
    public function setParentMerchantNo($parentMerchantNo)
    {
        $this->parentMerchantNo = $parentMerchantNo;
        return $this;
    }
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
     * @return SelfSettleApplyV10Request
     */
    public function setMerchantNo($merchantNo)
    {
        $this->merchantNo = $merchantNo;
        return $this;
    }
    /**
     * Gets settleRequestNo
     *
     * @return string
     */
    public function getSettleRequestNo()
    {
        return $this->settleRequestNo;
    }

    /**
     * Sets settleRequestNo
     *
     * @param string $settleRequestNo
     * @return SelfSettleApplyV10Request
     */
    public function setSettleRequestNo($settleRequestNo)
    {
        $this->settleRequestNo = $settleRequestNo;
        return $this;
    }
    /**
     * Gets operatePeriod
     *
     * @return string
     */
    public function getOperatePeriod()
    {
        return $this->operatePeriod;
    }

    /**
     * Sets operatePeriod
     *
     * @param string $operatePeriod
     * @return SelfSettleApplyV10Request
     */
    public function setOperatePeriod($operatePeriod)
    {
        $this->operatePeriod = $operatePeriod;
        return $this;
    }
    /**
     * Gets endTime
     *
     * @return \DateTime
     */
    public function getEndTime()
    {
        return $this->endTime;
    }

    /**
     * Sets endTime
     *
     * @param \DateTime $endTime
     * @return SelfSettleApplyV10Request
     */
    public function setEndTime($endTime)
    {
        $this->endTime = $endTime;
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
     * @return SelfSettleApplyV10Request
     */
    public function setNotifyUrl($notifyUrl)
    {
        $this->notifyUrl = $notifyUrl;
        return $this;
    }
    /**
     * Gets bankRemark
     *
     * @return string
     */
    public function getBankRemark()
    {
        return $this->bankRemark;
    }

    /**
     * Sets bankRemark
     *
     * @param string $bankRemark
     * @return SelfSettleApplyV10Request
     */
    public function setBankRemark($bankRemark)
    {
        $this->bankRemark = $bankRemark;
        return $this;
    }

    public static function getOperationId()
    {
        return 'self_settle_apply_v1_0';
    }


}
