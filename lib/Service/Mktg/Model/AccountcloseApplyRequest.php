<?php


namespace Yeepay\Yop\Sdk\Service\Mktg\Model;


class AccountcloseApplyRequest extends \Yeepay\Yop\Sdk\Model\BaseRequest
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
    private $bankCardNo;
    /**
     * @var string
     */
    private $notifyUrl;

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
     * @return AccountcloseApplyRequest
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
     * @return AccountcloseApplyRequest
     */
    public function setCloseOrderId($closeOrderId)
    {
        $this->closeOrderId = $closeOrderId;
        return $this;
    }
    /**
     * Gets bankCardNo
     *
     * @return string
     */
    public function getBankCardNo()
    {
        return $this->bankCardNo;
    }

    /**
     * Sets bankCardNo
     *
     * @param string $bankCardNo
     * @return AccountcloseApplyRequest
     */
    public function setBankCardNo($bankCardNo)
    {
        $this->bankCardNo = $bankCardNo;
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
     * @return AccountcloseApplyRequest
     */
    public function setNotifyUrl($notifyUrl)
    {
        $this->notifyUrl = $notifyUrl;
        return $this;
    }

    public static function getOperationId()
    {
        return 'accountcloseApply';
    }


}
