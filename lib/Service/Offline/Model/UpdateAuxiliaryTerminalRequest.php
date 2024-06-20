<?php


namespace Yeepay\Yop\Sdk\Service\Offline\Model;


class UpdateAuxiliaryTerminalRequest extends \Yeepay\Yop\Sdk\Model\BaseRequest
{
    /**
     * @var string
     */
    private $terminalName;
    /**
     * @var string
     */
    private $serialNo;

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
     * @return UpdateAuxiliaryTerminalRequest
     */
    public function setTerminalName($terminalName)
    {
        $this->terminalName = $terminalName;
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
     * @return UpdateAuxiliaryTerminalRequest
     */
    public function setSerialNo($serialNo)
    {
        $this->serialNo = $serialNo;
        return $this;
    }

    public static function getOperationId()
    {
        return 'updateAuxiliaryTerminal';
    }


}
