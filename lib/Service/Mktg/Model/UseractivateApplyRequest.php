<?php


namespace Yeepay\Yop\Sdk\Service\Mktg\Model;


class UseractivateApplyRequest extends \Yeepay\Yop\Sdk\Model\BaseRequest
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
    private $marketingNo;
    /**
     * @var string
     */
    private $bankCardNo;

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
     * @return UseractivateApplyRequest
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
     * @return UseractivateApplyRequest
     */
    public function setActivateOrderId($activateOrderId)
    {
        $this->activateOrderId = $activateOrderId;
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
     * @return UseractivateApplyRequest
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
     * @return UseractivateApplyRequest
     */
    public function setBankCardNo($bankCardNo)
    {
        $this->bankCardNo = $bankCardNo;
        return $this;
    }

    public static function getOperationId()
    {
        return 'useractivateApply';
    }


}
