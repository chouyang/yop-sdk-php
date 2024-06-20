<?php


namespace Yeepay\Yop\Sdk\Service\Offline;


use Yeepay\Yop\Sdk\Client\ClientExecutionParams;
use Yeepay\Yop\Sdk\Client\ClientHandler;
use Yeepay\Yop\Sdk\Client\ClientParams;
use Yeepay\Yop\Sdk\Exception\YopClientException;
use Yeepay\Yop\Sdk\Service\Offline\Model as Model;

class OfflineClient
{
    /**
     * @var ClientHandler
     */
    private $clientHandler;

    /**
     * OfflineClient constructor.
     * @param ClientParams $clientParams
     */
    function __construct(ClientParams $clientParams)
    {
        $this->clientHandler = new ClientHandler($clientParams);
    }

    /**
     * @param Model\BindRequest $request
     * @return Model\BindResponse
     * @throws YopClientException
     */
    public function bind(Model\BindRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\BindRequestMarshaller::getInstance(),
            Model\BindResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\CreateAuxiliaryTerminalRequest $request
     * @return Model\CreateAuxiliaryTerminalResponse
     * @throws YopClientException
     */
    public function createAuxiliaryTerminal(Model\CreateAuxiliaryTerminalRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\CreateAuxiliaryTerminalRequestMarshaller::getInstance(),
            Model\CreateAuxiliaryTerminalResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\CreateQrCodeRequest $request
     * @return Model\CreateQrCodeResponse
     * @throws YopClientException
     */
    public function createQrCode(Model\CreateQrCodeRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\CreateQrCodeRequestMarshaller::getInstance(),
            Model\CreateQrCodeResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\CreateQrcodeRequest $request
     * @return Model\CreateQrcodeResponse
     * @throws YopClientException
     */
    public function createQrcode(Model\CreateQrcodeRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\CreateQrcodeRequestMarshaller::getInstance(),
            Model\CreateQrcodeResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\CreateShopRequest $request
     * @return Model\CreateShopResponse
     * @throws YopClientException
     */
    public function createShop(Model\CreateShopRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\CreateShopRequestMarshaller::getInstance(),
            Model\CreateShopResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\DownloadQrCodeRequest $request
     * @return Model\DownloadQrCodeResponse
     * @throws YopClientException
     */
    public function downloadQrCode(Model\DownloadQrCodeRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\DownloadQrCodeRequestMarshaller::getInstance(),
            Model\DownloadQrCodeResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\DownloadQrcodeRequest $request
     * @return Model\DownloadQrcodeResponse
     * @throws YopClientException
     */
    public function downloadQrcode(Model\DownloadQrcodeRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\DownloadQrcodeRequestMarshaller::getInstance(),
            Model\DownloadQrcodeResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\GetShopRequest $request
     * @return Model\GetShopResponse
     * @throws YopClientException
     */
    public function getShop(Model\GetShopRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        if ($request->getParentMerchantNo() == null) {
            throw new YopClientException("request.parentMerchantNo is required.");
        }
        if ($request->getMerchantNo() == null) {
            throw new YopClientException("request.merchantNo is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\GetShopRequestMarshaller::getInstance(),
            Model\GetShopResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\OpenQrCodeRequest $request
     * @return Model\OpenQrCodeResponse
     * @throws YopClientException
     */
    public function openQrCode(Model\OpenQrCodeRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\OpenQrCodeRequestMarshaller::getInstance(),
            Model\OpenQrCodeResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\OpenQrcodeRequest $request
     * @return Model\OpenQrcodeResponse
     * @throws YopClientException
     */
    public function openQrcode(Model\OpenQrcodeRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\OpenQrcodeRequestMarshaller::getInstance(),
            Model\OpenQrcodeResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\OperateShopRequest $request
     * @return Model\OperateShopResponse
     * @throws YopClientException
     */
    public function operateShop(Model\OperateShopRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\OperateShopRequestMarshaller::getInstance(),
            Model\OperateShopResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\QueryAgentListRequest $request
     * @return Model\QueryAgentListResponse
     * @throws YopClientException
     */
    public function queryAgentList(Model\QueryAgentListRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        if ($request->getAgentMerchantNo() == null) {
            throw new YopClientException("request.agentMerchantNo is required.");
        }
        if ($request->getParentMerchantNo() == null) {
            throw new YopClientException("request.parentMerchantNo is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\QueryAgentListRequestMarshaller::getInstance(),
            Model\QueryAgentListResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\QueryOrderInfoRequest $request
     * @return Model\QueryOrderInfoResponse
     * @throws YopClientException
     */
    public function queryOrderInfo(Model\QueryOrderInfoRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\QueryOrderInfoRequestMarshaller::getInstance(),
            Model\QueryOrderInfoResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\QueryPosTrxInfoRequest $request
     * @return Model\QueryPosTrxInfoResponse
     * @throws YopClientException
     */
    public function queryPosTrxInfo(Model\QueryPosTrxInfoRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\QueryPosTrxInfoRequestMarshaller::getInstance(),
            Model\QueryPosTrxInfoResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\QueryQrCodeListRequest $request
     * @return Model\QueryQrCodeListResponse
     * @throws YopClientException
     */
    public function queryQrCodeList(Model\QueryQrCodeListRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        if ($request->getPageNo() == null) {
            throw new YopClientException("request.pageNo is required.");
        }
        if ($request->getPageSize() == null) {
            throw new YopClientException("request.pageSize is required.");
        }
        if ($request->getParentMerchantNo() == null) {
            throw new YopClientException("request.parentMerchantNo is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\QueryQrCodeListRequestMarshaller::getInstance(),
            Model\QueryQrCodeListResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\QueryQrcodeListRequest $request
     * @return Model\QueryQrcodeListResponse
     * @throws YopClientException
     */
    public function queryQrcodeList(Model\QueryQrcodeListRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        if ($request->getPageNo() == null) {
            throw new YopClientException("request.pageNo is required.");
        }
        if ($request->getPageSize() == null) {
            throw new YopClientException("request.pageSize is required.");
        }
        if ($request->getParentMerchantNo() == null) {
            throw new YopClientException("request.parentMerchantNo is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\QueryQrcodeListRequestMarshaller::getInstance(),
            Model\QueryQrcodeListResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\QueryShopBindListRequest $request
     * @return Model\QueryShopBindListResponse
     * @throws YopClientException
     */
    public function queryShopBindList(Model\QueryShopBindListRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        if ($request->getParentMerchantNo() == null) {
            throw new YopClientException("request.parentMerchantNo is required.");
        }
        if ($request->getMerchantNo() == null) {
            throw new YopClientException("request.merchantNo is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\QueryShopBindListRequestMarshaller::getInstance(),
            Model\QueryShopBindListResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\RelateBroadcastDeviceRequest $request
     * @return Model\RelateBroadcastDeviceResponse
     * @throws YopClientException
     */
    public function relateBroadcastDevice(Model\RelateBroadcastDeviceRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\RelateBroadcastDeviceRequestMarshaller::getInstance(),
            Model\RelateBroadcastDeviceResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\SaveTerminalEmployeeRequest $request
     * @return Model\SaveTerminalEmployeeResponse
     * @throws YopClientException
     */
    public function saveTerminalEmployee(Model\SaveTerminalEmployeeRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\SaveTerminalEmployeeRequestMarshaller::getInstance(),
            Model\SaveTerminalEmployeeResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\UnbindRequest $request
     * @return Model\UnbindResponse
     * @throws YopClientException
     */
    public function unbind(Model\UnbindRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\UnbindRequestMarshaller::getInstance(),
            Model\UnbindResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\UnbindQrCodeRequest $request
     * @return Model\UnbindQrCodeResponse
     * @throws YopClientException
     */
    public function unbindQrCode(Model\UnbindQrCodeRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\UnbindQrCodeRequestMarshaller::getInstance(),
            Model\UnbindQrCodeResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\UnbindQrcodeRequest $request
     * @return Model\UnbindQrcodeResponse
     * @throws YopClientException
     */
    public function unbindQrcode(Model\UnbindQrcodeRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\UnbindQrcodeRequestMarshaller::getInstance(),
            Model\UnbindQrcodeResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\UpdateAuxiliaryTerminalRequest $request
     * @return Model\UpdateAuxiliaryTerminalResponse
     * @throws YopClientException
     */
    public function updateAuxiliaryTerminal(Model\UpdateAuxiliaryTerminalRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\UpdateAuxiliaryTerminalRequestMarshaller::getInstance(),
            Model\UpdateAuxiliaryTerminalResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\UpdateQrCfgRequest $request
     * @return Model\UpdateQrCfgResponse
     * @throws YopClientException
     */
    public function updateQrCfg(Model\UpdateQrCfgRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\UpdateQrCfgRequestMarshaller::getInstance(),
            Model\UpdateQrCfgResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\UpdateQrCodeStatusRequest $request
     * @return Model\UpdateQrCodeStatusResponse
     * @throws YopClientException
     */
    public function updateQrCodeStatus(Model\UpdateQrCodeStatusRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\UpdateQrCodeStatusRequestMarshaller::getInstance(),
            Model\UpdateQrCodeStatusResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\UpdateQrcodeStatusRequest $request
     * @return Model\UpdateQrcodeStatusResponse
     * @throws YopClientException
     */
    public function updateQrcodeStatus(Model\UpdateQrcodeStatusRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\UpdateQrcodeStatusRequestMarshaller::getInstance(),
            Model\UpdateQrcodeStatusResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\UpdateShopRequest $request
     * @return Model\UpdateShopResponse
     * @throws YopClientException
     */
    public function updateShop(Model\UpdateShopRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\UpdateShopRequestMarshaller::getInstance(),
            Model\UpdateShopResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\UpdateTerminalEmployeeRequest $request
     * @return Model\UpdateTerminalEmployeeResponse
     * @throws YopClientException
     */
    public function updateTerminalEmployee(Model\UpdateTerminalEmployeeRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\UpdateTerminalEmployeeRequestMarshaller::getInstance(),
            Model\UpdateTerminalEmployeeResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
}
