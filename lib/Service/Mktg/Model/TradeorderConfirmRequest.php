<?php


namespace Yeepay\Yop\Sdk\Service\Mktg\Model;


class TradeorderConfirmRequest extends \Yeepay\Yop\Sdk\Model\BaseRequest
{
    /**
     * @var string
     */
    private $merchantNo;
    /**
     * @var string
     */
    private $tradeOrderId;
    /**
     * @var string
     */
    private $uniqueTradeNo;
    /**
     * @var string
     */
    private $trxType;
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
     * @return TradeorderConfirmRequest
     */
    public function setMerchantNo($merchantNo)
    {
        $this->merchantNo = $merchantNo;
        return $this;
    }
    /**
     * Gets tradeOrderId
     *
     * @return string
     */
    public function getTradeOrderId()
    {
        return $this->tradeOrderId;
    }

    /**
     * Sets tradeOrderId
     *
     * @param string $tradeOrderId
     * @return TradeorderConfirmRequest
     */
    public function setTradeOrderId($tradeOrderId)
    {
        $this->tradeOrderId = $tradeOrderId;
        return $this;
    }
    /**
     * Gets uniqueTradeNo
     *
     * @return string
     */
    public function getUniqueTradeNo()
    {
        return $this->uniqueTradeNo;
    }

    /**
     * Sets uniqueTradeNo
     *
     * @param string $uniqueTradeNo
     * @return TradeorderConfirmRequest
     */
    public function setUniqueTradeNo($uniqueTradeNo)
    {
        $this->uniqueTradeNo = $uniqueTradeNo;
        return $this;
    }
    /**
     * Gets trxType
     *
     * @return string
     */
    public function getTrxType()
    {
        return $this->trxType;
    }

    /**
     * Sets trxType
     *
     * @param string $trxType
     * @return TradeorderConfirmRequest
     */
    public function setTrxType($trxType)
    {
        $this->trxType = $trxType;
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
     * @return TradeorderConfirmRequest
     */
    public function setSmsCode($smsCode)
    {
        $this->smsCode = $smsCode;
        return $this;
    }

    public static function getOperationId()
    {
        return 'tradeorderConfirm';
    }


}
