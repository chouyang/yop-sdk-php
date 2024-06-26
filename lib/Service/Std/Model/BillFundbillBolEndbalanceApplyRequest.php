<?php


namespace Yeepay\Yop\Sdk\Service\Std\Model;


class BillFundbillBolEndbalanceApplyRequest extends \Yeepay\Yop\Sdk\Model\BaseRequest
{
    /**
     * @var string
     */
    private $bookDate;
    /**
     * @var string
     */
    private $merchantNo;
    /**
     * @var string
     */
    private $notifyUrl;
    /**
     * @var string
     */
    private $subMerchantNo;

    /**
     * Gets bookDate
     *
     * @return string
     */
    public function getBookDate()
    {
        return $this->bookDate;
    }

    /**
     * Sets bookDate
     *
     * @param string $bookDate
     * @return BillFundbillBolEndbalanceApplyRequest
     */
    public function setBookDate($bookDate)
    {
        $this->bookDate = $bookDate;
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
     * @return BillFundbillBolEndbalanceApplyRequest
     */
    public function setMerchantNo($merchantNo)
    {
        $this->merchantNo = $merchantNo;
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
     * @return BillFundbillBolEndbalanceApplyRequest
     */
    public function setNotifyUrl($notifyUrl)
    {
        $this->notifyUrl = $notifyUrl;
        return $this;
    }
    /**
     * Gets subMerchantNo
     *
     * @return string
     */
    public function getSubMerchantNo()
    {
        return $this->subMerchantNo;
    }

    /**
     * Sets subMerchantNo
     *
     * @param string $subMerchantNo
     * @return BillFundbillBolEndbalanceApplyRequest
     */
    public function setSubMerchantNo($subMerchantNo)
    {
        $this->subMerchantNo = $subMerchantNo;
        return $this;
    }

    public static function getOperationId()
    {
        return 'billFundbillBolEndbalanceApply';
    }


}
