<?php


namespace Yeepay\Yop\Sdk\Service\Offline\Model;


class CreateAuxiliaryTerminalRequest extends \Yeepay\Yop\Sdk\Model\BaseRequest
{
    /**
     * @var string
     */
    private $terminalName;
    /**
     * @var string
     */
    private $parentMerchantNo;
    /**
     * @var string
     */
    private $shopNo;
    /**
     * @var string
     */
    private $merchantNo;
    /**
     * @var string
     */
    private $serialNo;
    /**
     * @var string
     */
    private $terminalType;

    /**
     * Gets terminalName
     *
     * @return string
     */
    public function getTerminalName()
    {
        return $this->terminalName;
    }

    /**
     * Sets terminalName
     *
     * @param string $terminalName
     * @return CreateAuxiliaryTerminalRequest
     */
    public function setTerminalName($terminalName)
    {
        $this->terminalName = $terminalName;
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
     * @return CreateAuxiliaryTerminalRequest
     */
    public function setParentMerchantNo($parentMerchantNo)
    {
        $this->parentMerchantNo = $parentMerchantNo;
        return $this;
    }
    /**
     * Gets shopNo
     *
     * @return string
     */
    public function getShopNo()
    {
        return $this->shopNo;
    }

    /**
     * Sets shopNo
     *
     * @param string $shopNo
     * @return CreateAuxiliaryTerminalRequest
     */
    public function setShopNo($shopNo)
    {
        $this->shopNo = $shopNo;
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
     * @return CreateAuxiliaryTerminalRequest
     */
    public function setMerchantNo($merchantNo)
    {
        $this->merchantNo = $merchantNo;
        return $this;
    }
    /**
     * Gets serialNo
     *
     * @return string
     */
    public function getSerialNo()
    {
        return $this->serialNo;
    }

    /**
     * Sets serialNo
     *
     * @param string $serialNo
     * @return CreateAuxiliaryTerminalRequest
     */
    public function setSerialNo($serialNo)
    {
        $this->serialNo = $serialNo;
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
     * @return CreateAuxiliaryTerminalRequest
     */
    public function setTerminalType($terminalType)
    {
        $this->terminalType = $terminalType;
        return $this;
    }

    public static function getOperationId()
    {
        return 'createAuxiliaryTerminal';
    }


}
