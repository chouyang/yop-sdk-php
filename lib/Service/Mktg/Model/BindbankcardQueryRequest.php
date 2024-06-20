<?php


namespace Yeepay\Yop\Sdk\Service\Mktg\Model;


class BindbankcardQueryRequest extends \Yeepay\Yop\Sdk\Model\BaseRequest
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
     * @return BindbankcardQueryRequest
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
     * @return BindbankcardQueryRequest
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
     * @return BindbankcardQueryRequest
     */
    public function setUniqueBindNo($uniqueBindNo)
    {
        $this->uniqueBindNo = $uniqueBindNo;
        return $this;
    }

    public static function getOperationId()
    {
        return 'bindbankcardQuery';
    }


}
