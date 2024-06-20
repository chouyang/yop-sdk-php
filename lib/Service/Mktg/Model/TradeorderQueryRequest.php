<?php


namespace Yeepay\Yop\Sdk\Service\Mktg\Model;


class TradeorderQueryRequest extends \Yeepay\Yop\Sdk\Model\BaseRequest
{
    /**
     * @var string
     */
    private $merchantNo;
    /**
     * @var string
     */
    private $trxType;
    /**
     * @var string
     */
    private $tradeOrderId;
    /**
     * @var string
     */
    private $uniqueTradeNo;

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
     * @return TradeorderQueryRequest
     */
    public function setMerchantNo($merchantNo)
    {
        $this->merchantNo = $merchantNo;
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
     * @return TradeorderQueryRequest
     */
    public function setTrxType($trxType)
    {
        $this->trxType = $trxType;
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
     * @return TradeorderQueryRequest
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
     * @return TradeorderQueryRequest
     */
    public function setUniqueTradeNo($uniqueTradeNo)
    {
        $this->uniqueTradeNo = $uniqueTradeNo;
        return $this;
    }

    public static function getOperationId()
    {
        return 'tradeorderQuery';
    }


}
