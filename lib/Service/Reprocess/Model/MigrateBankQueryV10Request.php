<?php


namespace Yeepay\Yop\Sdk\Service\Reprocess\Model;


class MigrateBankQueryV10Request extends \Yeepay\Yop\Sdk\Model\BaseRequest
{
    /**
     * @var string
     */
    private $migrateRequestId;
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
     * @return MigrateBankQueryV10Request
     */
    public function setMigrateRequestId($migrateRequestId)
    {
        $this->migrateRequestId = $migrateRequestId;
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
     * @return MigrateBankQueryV10Request
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
     * @return MigrateBankQueryV10Request
     */
    public function setMerchantNo($merchantNo)
    {
        $this->merchantNo = $merchantNo;
        return $this;
    }

    public static function getOperationId()
    {
        return 'migrate_bank_query_v1_0';
    }


}
