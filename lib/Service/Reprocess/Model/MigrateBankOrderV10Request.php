<?php


namespace Yeepay\Yop\Sdk\Service\Reprocess\Model;


class MigrateBankOrderV10Request extends \Yeepay\Yop\Sdk\Model\BaseRequest
{
    /**
     * @var string
     */
    private $migrateRequestId;
    /**
     * @var string
     */
    private $orderId;
    /**
     * @var string
     */
    private $uniqueOrderNo;
    /**
     * @var string
     */
    private $migrateNotifyUrl;
    /**
     * @var string
     */
    private $migrateAmount;
    /**
     * @var string
     */
    private $accountLinkInfo;
    /**
     * @var string
     */
    private $parentMerchantNo;
    /**
     * @var string
     */
    private $merchantNo;

    /**
     * Gets migrateRequestId
     *
     * @return string
     */
    public function getMigrateRequestId()
    {
        return $this->migrateRequestId;
    }

    /**
     * Sets migrateRequestId
     *
     * @param string $migrateRequestId
     * @return MigrateBankOrderV10Request
     */
    public function setMigrateRequestId($migrateRequestId)
    {
        $this->migrateRequestId = $migrateRequestId;
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
     * @return MigrateBankOrderV10Request
     */
    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;
        return $this;
    }
    /**
     * Gets uniqueOrderNo
     *
     * @return string
     */
    public function getUniqueOrderNo()
    {
        return $this->uniqueOrderNo;
    }

    /**
     * Sets uniqueOrderNo
     *
     * @param string $uniqueOrderNo
     * @return MigrateBankOrderV10Request
     */
    public function setUniqueOrderNo($uniqueOrderNo)
    {
        $this->uniqueOrderNo = $uniqueOrderNo;
        return $this;
    }
    /**
     * Gets migrateNotifyUrl
     *
     * @return string
     */
    public function getMigrateNotifyUrl()
    {
        return $this->migrateNotifyUrl;
    }

    /**
     * Sets migrateNotifyUrl
     *
     * @param string $migrateNotifyUrl
     * @return MigrateBankOrderV10Request
     */
    public function setMigrateNotifyUrl($migrateNotifyUrl)
    {
        $this->migrateNotifyUrl = $migrateNotifyUrl;
        return $this;
    }
    /**
     * Gets migrateAmount
     *
     * @return string
     */
    public function getMigrateAmount()
    {
        return $this->migrateAmount;
    }

    /**
     * Sets migrateAmount
     *
     * @param string $migrateAmount
     * @return MigrateBankOrderV10Request
     */
    public function setMigrateAmount($migrateAmount)
    {
        $this->migrateAmount = $migrateAmount;
        return $this;
    }
    /**
     * Gets accountLinkInfo
     *
     * @return string
     */
    public function getAccountLinkInfo()
    {
        return $this->accountLinkInfo;
    }

    /**
     * Sets accountLinkInfo
     *
     * @param string $accountLinkInfo
     * @return MigrateBankOrderV10Request
     */
    public function setAccountLinkInfo($accountLinkInfo)
    {
        $this->accountLinkInfo = $accountLinkInfo;
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
     * @return MigrateBankOrderV10Request
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
     * @return MigrateBankOrderV10Request
     */
    public function setMerchantNo($merchantNo)
    {
        $this->merchantNo = $merchantNo;
        return $this;
    }

    public static function getOperationId()
    {
        return 'migrate_bank_order_v1_0';
    }


}
