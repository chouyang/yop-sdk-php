<?php


namespace Yeepay\Yop\Sdk\Service\Mktg\Model;


class AccountcloseQueryRequest extends \Yeepay\Yop\Sdk\Model\BaseRequest
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
     * @return AccountcloseQueryRequest
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
     * @return AccountcloseQueryRequest
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
     * @return AccountcloseQueryRequest
     */
    public function setUniqueCloseNo($uniqueCloseNo)
    {
        $this->uniqueCloseNo = $uniqueCloseNo;
        return $this;
    }

    public static function getOperationId()
    {
        return 'accountcloseQuery';
    }


}
