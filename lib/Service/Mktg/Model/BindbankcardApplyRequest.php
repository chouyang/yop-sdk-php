<?php


namespace Yeepay\Yop\Sdk\Service\Mktg\Model;


class BindbankcardApplyRequest extends \Yeepay\Yop\Sdk\Model\BaseRequest
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
    private $marketingNo;
    /**
     * @var string
     */
    private $bankCardNo;
    /**
     * @var string
     */
    private $bindBankCardNo;
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
     * @return BindbankcardApplyRequest
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
     * @return BindbankcardApplyRequest
     */
    public function setBindOrderId($bindOrderId)
    {
        $this->bindOrderId = $bindOrderId;
        return $this;
    }
    /**
     * Gets marketingNo
     *
     * @return string
     */
    public function getMarketingNo()
    {
        return $this->marketingNo;
    }

    /**
     * Sets marketingNo
     *
     * @param string $marketingNo
     * @return BindbankcardApplyRequest
     */
    public function setMarketingNo($marketingNo)
    {
        $this->marketingNo = $marketingNo;
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
     * @return BindbankcardApplyRequest
     */
    public function setBankCardNo($bankCardNo)
    {
        $this->bankCardNo = $bankCardNo;
        return $this;
    }
    /**
     * Gets bindBankCardNo
     *
     * @return string
     */
    public function getBindBankCardNo()
    {
        return $this->bindBankCardNo;
    }

    /**
     * Sets bindBankCardNo
     *
     * @param string $bindBankCardNo
     * @return BindbankcardApplyRequest
     */
    public function setBindBankCardNo($bindBankCardNo)
    {
        $this->bindBankCardNo = $bindBankCardNo;
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
     * @return BindbankcardApplyRequest
     */
    public function setNotifyUrl($notifyUrl)
    {
        $this->notifyUrl = $notifyUrl;
        return $this;
    }

    public static function getOperationId()
    {
        return 'bindbankcardApply';
    }


}
