<?php


namespace Yeepay\Yop\Sdk\Service\Mer\Model;


class MerQualificationSupplementRequest extends \Yeepay\Yop\Sdk\Model\BaseRequest
{
    /**
     * @var string
     */
    private $requestNo;
    /**
     * @var string
     */
    private $merchantNo;
    /**
     * @var string
     */
    private $qualifications;

    /**
     * Gets requestNo
     *
     * @return string
     */
    public function getRequestNo()
    {
        return $this->requestNo;
    }

    /**
     * Sets requestNo
     *
     * @param string $requestNo
     * @return MerQualificationSupplementRequest
     */
    public function setRequestNo($requestNo)
    {
        $this->requestNo = $requestNo;
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
     * @return MerQualificationSupplementRequest
     */
    public function setMerchantNo($merchantNo)
    {
        $this->merchantNo = $merchantNo;
        return $this;
    }
    /**
     * Gets qualifications
     *
     * @return string
     */
    public function getQualifications()
    {
        return $this->qualifications;
    }

    /**
     * Sets qualifications
     *
     * @param string $qualifications
     * @return MerQualificationSupplementRequest
     */
    public function setQualifications($qualifications)
    {
        $this->qualifications = $qualifications;
        return $this;
    }

    public static function getOperationId()
    {
        return 'mer_qualification_supplement';
    }


}
