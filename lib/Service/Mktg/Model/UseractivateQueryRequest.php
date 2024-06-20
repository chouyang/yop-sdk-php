<?php


namespace Yeepay\Yop\Sdk\Service\Mktg\Model;


class UseractivateQueryRequest extends \Yeepay\Yop\Sdk\Model\BaseRequest
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
     * @return UseractivateQueryRequest
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
     * @return UseractivateQueryRequest
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
     * @return UseractivateQueryRequest
     */
    public function setUniqueActivateNo($uniqueActivateNo)
    {
        $this->uniqueActivateNo = $uniqueActivateNo;
        return $this;
    }

    public static function getOperationId()
    {
        return 'useractivateQuery';
    }


}
