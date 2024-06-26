<?php


namespace Yeepay\Yop\Sdk\Service\Netpay\Model;


class OrderRequest extends \Yeepay\Yop\Sdk\Model\BaseRequest
{
    /**
     * @var string
     */
    private $parentMerchantNo;
    /**
     * @var string
     */
    private $merchantNo;
    /**
     * @var string
     */
    private $orderId;
    /**
     * @var float
     */
    private $orderAmount;
    /**
     * @var string
     */
    private $expiredTime;
    /**
     * @var string
     */
    private $notifyUrl;
    /**
     * @var string
     */
    private $memo;
    /**
     * @var string
     */
    private $goodsName;
    /**
     * @var string
     */
    private $fundProcessType;
    /**
     * @var string
     */
    private $cardType;
    /**
     * @var string
     */
    private $bankAccountType;
    /**
     * @var string
     */
    private $bankCode;
    /**
     * @var string
     */
    private $terminalType;
    /**
     * @var string
     */
    private $payerIp;
    /**
     * @var string
     */
    private $csNotifyUrl;
    /**
     * @var string
     */
    private $businessInfo;
    /**
     * @var string
     */
    private $returnUrl;
    /**
     * @var string
     */
    private $orderType;
    /**
     * @var string
     */
    private $payerAccountName;
    /**
     * @var string
     */
    private $payerAccountNo;
    /**
     * @var string
     */
    private $commercePlatform;
    /**
     * @var string
     */
    private $pyeeBankAccountType;
    /**
     * @var string
     */
    private $pyeeBankCode;
    /**
     * @var string
     */
    private $pyeeAccountName;
    /**
     * @var string
     */
    private $pyeeAccountNo;

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
     * @return OrderRequest
     */
    public function setParentMerchantNo($parentMerchantNo)
    {
        $this->parentMerchantNo = $parentMerchantNo;
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
     * @return OrderRequest
     */
    public function setMerchantNo($merchantNo)
    {
        $this->merchantNo = $merchantNo;
        return $this;
    }
    /**
     * Gets orderId
     *
     * @return string
     */
    public function getOrderId()
    {
        return $this->orderId;
    }

    /**
     * Sets orderId
     *
     * @param string $orderId
     * @return OrderRequest
     */
    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;
        return $this;
    }
    /**
     * Gets orderAmount
     *
     * @return float
     */
    public function getOrderAmount()
    {
        return $this->orderAmount;
    }

    /**
     * Sets orderAmount
     *
     * @param float $orderAmount
     * @return OrderRequest
     */
    public function setOrderAmount($orderAmount)
    {
        $this->orderAmount = $orderAmount;
        return $this;
    }
    /**
     * Gets expiredTime
     *
     * @return string
     */
    public function getExpiredTime()
    {
        return $this->expiredTime;
    }

    /**
     * Sets expiredTime
     *
     * @param string $expiredTime
     * @return OrderRequest
     */
    public function setExpiredTime($expiredTime)
    {
        $this->expiredTime = $expiredTime;
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
     * @return OrderRequest
     */
    public function setNotifyUrl($notifyUrl)
    {
        $this->notifyUrl = $notifyUrl;
        return $this;
    }
    /**
     * Gets memo
     *
     * @return string
     */
    public function getMemo()
    {
        return $this->memo;
    }

    /**
     * Sets memo
     *
     * @param string $memo
     * @return OrderRequest
     */
    public function setMemo($memo)
    {
        $this->memo = $memo;
        return $this;
    }
    /**
     * Gets goodsName
     *
     * @return string
     */
    public function getGoodsName()
    {
        return $this->goodsName;
    }

    /**
     * Sets goodsName
     *
     * @param string $goodsName
     * @return OrderRequest
     */
    public function setGoodsName($goodsName)
    {
        $this->goodsName = $goodsName;
        return $this;
    }
    /**
     * Gets fundProcessType
     *
     * @return string
     */
    public function getFundProcessType()
    {
        return $this->fundProcessType;
    }

    /**
     * Sets fundProcessType
     *
     * @param string $fundProcessType
     * @return OrderRequest
     */
    public function setFundProcessType($fundProcessType)
    {
        $this->fundProcessType = $fundProcessType;
        return $this;
    }
    /**
     * Gets cardType
     *
     * @return string
     */
    public function getCardType()
    {
        return $this->cardType;
    }

    /**
     * Sets cardType
     *
     * @param string $cardType
     * @return OrderRequest
     */
    public function setCardType($cardType)
    {
        $this->cardType = $cardType;
        return $this;
    }
    /**
     * Gets bankAccountType
     *
     * @return string
     */
    public function getBankAccountType()
    {
        return $this->bankAccountType;
    }

    /**
     * Sets bankAccountType
     *
     * @param string $bankAccountType
     * @return OrderRequest
     */
    public function setBankAccountType($bankAccountType)
    {
        $this->bankAccountType = $bankAccountType;
        return $this;
    }
    /**
     * Gets bankCode
     *
     * @return string
     */
    public function getBankCode()
    {
        return $this->bankCode;
    }

    /**
     * Sets bankCode
     *
     * @param string $bankCode
     * @return OrderRequest
     */
    public function setBankCode($bankCode)
    {
        $this->bankCode = $bankCode;
        return $this;
    }
    /**
     * Gets terminalType
     *
     * @return string
     */
    public function getTerminalType()
    {
        return $this->terminalType;
    }

    /**
     * Sets terminalType
     *
     * @param string $terminalType
     * @return OrderRequest
     */
    public function setTerminalType($terminalType)
    {
        $this->terminalType = $terminalType;
        return $this;
    }
    /**
     * Gets payerIp
     *
     * @return string
     */
    public function getPayerIp()
    {
        return $this->payerIp;
    }

    /**
     * Sets payerIp
     *
     * @param string $payerIp
     * @return OrderRequest
     */
    public function setPayerIp($payerIp)
    {
        $this->payerIp = $payerIp;
        return $this;
    }
    /**
     * Gets csNotifyUrl
     *
     * @return string
     */
    public function getCsNotifyUrl()
    {
        return $this->csNotifyUrl;
    }

    /**
     * Sets csNotifyUrl
     *
     * @param string $csNotifyUrl
     * @return OrderRequest
     */
    public function setCsNotifyUrl($csNotifyUrl)
    {
        $this->csNotifyUrl = $csNotifyUrl;
        return $this;
    }
    /**
     * Gets businessInfo
     *
     * @return string
     */
    public function getBusinessInfo()
    {
        return $this->businessInfo;
    }

    /**
     * Sets businessInfo
     *
     * @param string $businessInfo
     * @return OrderRequest
     */
    public function setBusinessInfo($businessInfo)
    {
        $this->businessInfo = $businessInfo;
        return $this;
    }
    /**
     * Gets returnUrl
     *
     * @return string
     */
    public function getReturnUrl()
    {
        return $this->returnUrl;
    }

    /**
     * Sets returnUrl
     *
     * @param string $returnUrl
     * @return OrderRequest
     */
    public function setReturnUrl($returnUrl)
    {
        $this->returnUrl = $returnUrl;
        return $this;
    }
    /**
     * Gets orderType
     *
     * @return string
     */
    public function getOrderType()
    {
        return $this->orderType;
    }

    /**
     * Sets orderType
     *
     * @param string $orderType
     * @return OrderRequest
     */
    public function setOrderType($orderType)
    {
        $this->orderType = $orderType;
        return $this;
    }
    /**
     * Gets payerAccountName
     *
     * @return string
     */
    public function getPayerAccountName()
    {
        return $this->payerAccountName;
    }

    /**
     * Sets payerAccountName
     *
     * @param string $payerAccountName
     * @return OrderRequest
     */
    public function setPayerAccountName($payerAccountName)
    {
        $this->payerAccountName = $payerAccountName;
        return $this;
    }
    /**
     * Gets payerAccountNo
     *
     * @return string
     */
    public function getPayerAccountNo()
    {
        return $this->payerAccountNo;
    }

    /**
     * Sets payerAccountNo
     *
     * @param string $payerAccountNo
     * @return OrderRequest
     */
    public function setPayerAccountNo($payerAccountNo)
    {
        $this->payerAccountNo = $payerAccountNo;
        return $this;
    }
    /**
     * Gets commercePlatform
     *
     * @return string
     */
    public function getCommercePlatform()
    {
        return $this->commercePlatform;
    }

    /**
     * Sets commercePlatform
     *
     * @param string $commercePlatform
     * @return OrderRequest
     */
    public function setCommercePlatform($commercePlatform)
    {
        $this->commercePlatform = $commercePlatform;
        return $this;
    }
    /**
     * Gets pyeeBankAccountType
     *
     * @return string
     */
    public function getPyeeBankAccountType()
    {
        return $this->pyeeBankAccountType;
    }

    /**
     * Sets pyeeBankAccountType
     *
     * @param string $pyeeBankAccountType
     * @return OrderRequest
     */
    public function setPyeeBankAccountType($pyeeBankAccountType)
    {
        $this->pyeeBankAccountType = $pyeeBankAccountType;
        return $this;
    }
    /**
     * Gets pyeeBankCode
     *
     * @return string
     */
    public function getPyeeBankCode()
    {
        return $this->pyeeBankCode;
    }

    /**
     * Sets pyeeBankCode
     *
     * @param string $pyeeBankCode
     * @return OrderRequest
     */
    public function setPyeeBankCode($pyeeBankCode)
    {
        $this->pyeeBankCode = $pyeeBankCode;
        return $this;
    }
    /**
     * Gets pyeeAccountName
     *
     * @return string
     */
    public function getPyeeAccountName()
    {
        return $this->pyeeAccountName;
    }

    /**
     * Sets pyeeAccountName
     *
     * @param string $pyeeAccountName
     * @return OrderRequest
     */
    public function setPyeeAccountName($pyeeAccountName)
    {
        $this->pyeeAccountName = $pyeeAccountName;
        return $this;
    }
    /**
     * Gets pyeeAccountNo
     *
     * @return string
     */
    public function getPyeeAccountNo()
    {
        return $this->pyeeAccountNo;
    }

    /**
     * Sets pyeeAccountNo
     *
     * @param string $pyeeAccountNo
     * @return OrderRequest
     */
    public function setPyeeAccountNo($pyeeAccountNo)
    {
        $this->pyeeAccountNo = $pyeeAccountNo;
        return $this;
    }

    public static function getOperationId()
    {
        return 'order';
    }


}
