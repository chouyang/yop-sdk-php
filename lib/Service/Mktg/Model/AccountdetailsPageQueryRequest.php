<?php


namespace Yeepay\Yop\Sdk\Service\Mktg\Model;


class AccountdetailsPageQueryRequest extends \Yeepay\Yop\Sdk\Model\BaseRequest
{
    /**
     * @var string
     */
    private $merchantNo;
    /**
     * @var string
     */
    private $trxType;
    /**
     * @var string
     */
    private $bankCardNo;
    /**
     * @var string
     */
    private $startDate;
    /**
     * @var string
     */
    private $endDate;
    /**
     * @var int
     */
    private $pageNo;
    /**
     * @var int
     */
    private $pageSize;

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
     * @return AccountdetailsPageQueryRequest
     */
    public function setMerchantNo($merchantNo)
    {
        $this->merchantNo = $merchantNo;
        return $this;
    }
    /**
     * Gets trxType
     *
     * @return string
     */
    public function getTrxType()
    {
        return $this->trxType;
    }

    /**
     * Sets trxType
     *
     * @param string $trxType
     * @return AccountdetailsPageQueryRequest
     */
    public function setTrxType($trxType)
    {
        $this->trxType = $trxType;
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
     * @return AccountdetailsPageQueryRequest
     */
    public function setBankCardNo($bankCardNo)
    {
        $this->bankCardNo = $bankCardNo;
        return $this;
    }
    /**
     * Gets startDate
     *
     * @return string
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * Sets startDate
     *
     * @param string $startDate
     * @return AccountdetailsPageQueryRequest
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;
        return $this;
    }
    /**
     * Gets endDate
     *
     * @return string
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * Sets endDate
     *
     * @param string $endDate
     * @return AccountdetailsPageQueryRequest
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;
        return $this;
    }
    /**
     * Gets pageNo
     *
     * @return int
     */
    public function getPageNo()
    {
        return $this->pageNo;
    }

    /**
     * Sets pageNo
     *
     * @param int $pageNo
     * @return AccountdetailsPageQueryRequest
     */
    public function setPageNo($pageNo)
    {
        $this->pageNo = $pageNo;
        return $this;
    }
    /**
     * Gets pageSize
     *
     * @return int
     */
    public function getPageSize()
    {
        return $this->pageSize;
    }

    /**
     * Sets pageSize
     *
     * @param int $pageSize
     * @return AccountdetailsPageQueryRequest
     */
    public function setPageSize($pageSize)
    {
        $this->pageSize = $pageSize;
        return $this;
    }

    public static function getOperationId()
    {
        return 'accountdetailsPageQuery';
    }


}
