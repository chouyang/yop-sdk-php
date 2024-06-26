<?php


namespace Yeepay\Yop\Sdk\Service\Settle\Model;


class BalanceQueryRequest extends \Yeepay\Yop\Sdk\Model\BaseRequest
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
    private $operatePeriod;
    /**
     * @var \DateTime
     */
    private $endTime;

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
     * @return BalanceQueryRequest
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
     * @return BalanceQueryRequest
     */
    public function setMerchantNo($merchantNo)
    {
        $this->merchantNo = $merchantNo;
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
     * @return BalanceQueryRequest
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
     * @return BalanceQueryRequest
     */
    public function setEndTime($endTime)
    {
        $this->endTime = $endTime;
        return $this;
    }

    public static function getOperationId()
    {
        return 'balanceQuery';
    }


}
