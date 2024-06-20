<?php


namespace Yeepay\Yop\Sdk\Service\Mktg\Model;


class OpenuserQueryRequest extends \Yeepay\Yop\Sdk\Model\BaseRequest
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
    private $uniqueOpenNo;

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
     * @return OpenuserQueryRequest
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
     * @return OpenuserQueryRequest
     */
    public function setOpenOrderId($openOrderId)
    {
        $this->openOrderId = $openOrderId;
        return $this;
    }
    /**
     * Gets uniqueOpenNo
     *
     * @return string
     */
    public function getUniqueOpenNo()
    {
        return $this->uniqueOpenNo;
    }

    /**
     * Sets uniqueOpenNo
     *
     * @param string $uniqueOpenNo
     * @return OpenuserQueryRequest
     */
    public function setUniqueOpenNo($uniqueOpenNo)
    {
        $this->uniqueOpenNo = $uniqueOpenNo;
        return $this;
    }

    public static function getOperationId()
    {
        return 'openuserQuery';
    }


}
