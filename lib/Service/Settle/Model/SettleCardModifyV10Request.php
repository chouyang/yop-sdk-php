<?php


namespace Yeepay\Yop\Sdk\Service\Settle\Model;


class SettleCardModifyV10Request extends \Yeepay\Yop\Sdk\Model\BaseRequest
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
    private $bankCardNo;
    /**
     * @var string
     */
    private $bankCardType;
    /**
     * @var string
     */
    private $bankCode;
    /**
     * @var string
     */
    private $brancgCode;
    /**
     * @var bool
     */
    private $defaultSettleCard;

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
     * @return SettleCardModifyV10Request
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
     * @return SettleCardModifyV10Request
     */
    public function setMerchantNo($merchantNo)
    {
        $this->merchantNo = $merchantNo;
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
     * @return SettleCardModifyV10Request
     */
    public function setBankCardNo($bankCardNo)
    {
        $this->bankCardNo = $bankCardNo;
        return $this;
    }
    /**
     * Gets bankCardType
     *
     * @return string
     */
    public function getBankCardType()
    {
        return $this->bankCardType;
    }

    /**
     * Sets bankCardType
     *
     * @param string $bankCardType
     * @return SettleCardModifyV10Request
     */
    public function setBankCardType($bankCardType)
    {
        $this->bankCardType = $bankCardType;
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
     * @return SettleCardModifyV10Request
     */
    public function setBankCode($bankCode)
    {
        $this->bankCode = $bankCode;
        return $this;
    }
    /**
     * Gets brancgCode
     *
     * @return string
     */
    public function getBrancgCode()
    {
        return $this->brancgCode;
    }

    /**
     * Sets brancgCode
     *
     * @param string $brancgCode
     * @return SettleCardModifyV10Request
     */
    public function setBrancgCode($brancgCode)
    {
        $this->brancgCode = $brancgCode;
        return $this;
    }
    /**
     * Gets defaultSettleCard
     *
     * @return bool
     */
    public function getDefaultSettleCard()
    {
        return $this->defaultSettleCard;
    }

    /**
     * Sets defaultSettleCard
     *
     * @param bool $defaultSettleCard
     * @return SettleCardModifyV10Request
     */
    public function setDefaultSettleCard($defaultSettleCard)
    {
        $this->defaultSettleCard = $defaultSettleCard;
        return $this;
    }

    public static function getOperationId()
    {
        return 'settle_card_modify_v1_0';
    }


}
