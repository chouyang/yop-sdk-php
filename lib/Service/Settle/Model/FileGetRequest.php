<?php


namespace Yeepay\Yop\Sdk\Service\Settle\Model;


class FileGetRequest extends \Yeepay\Yop\Sdk\Model\BaseRequest
{
    /**
     * @var string
     */
    private $merchantNo;
    /**
     * @var string
     */
    private $parentMerchantNo;
    /**
     * @var string
     */
    private $receiverMerchantNo;
    /**
     * @var string
     */
    private $settleRequestNo;
    /**
     * @var string
     */
    private $settleDate;

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
     * @return FileGetRequest
     */
    public function setMerchantNo($merchantNo)
    {
        $this->merchantNo = $merchantNo;
        return $this;
    }
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
     * @return FileGetRequest
     */
    public function setParentMerchantNo($parentMerchantNo)
    {
        $this->parentMerchantNo = $parentMerchantNo;
        return $this;
    }
    /**
     * Gets receiverMerchantNo
     *
     * @return string
     */
    public function getReceiverMerchantNo()
    {
        return $this->receiverMerchantNo;
    }

    /**
     * Sets receiverMerchantNo
     *
     * @param string $receiverMerchantNo
     * @return FileGetRequest
     */
    public function setReceiverMerchantNo($receiverMerchantNo)
    {
        $this->receiverMerchantNo = $receiverMerchantNo;
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
     * @return FileGetRequest
     */
    public function setSettleRequestNo($settleRequestNo)
    {
        $this->settleRequestNo = $settleRequestNo;
        return $this;
    }
    /**
     * Gets settleDate
     *
     * @return string
     */
    public function getSettleDate()
    {
        return $this->settleDate;
    }

    /**
     * Sets settleDate
     *
     * @param string $settleDate
     * @return FileGetRequest
     */
    public function setSettleDate($settleDate)
    {
        $this->settleDate = $settleDate;
        return $this;
    }

    public static function getOperationId()
    {
        return 'fileGet';
    }


}
