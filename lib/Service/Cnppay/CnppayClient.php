<?php


namespace Yeepay\Yop\Sdk\Service\Cnppay;


use Yeepay\Yop\Sdk\Client\ClientExecutionParams;
use Yeepay\Yop\Sdk\Client\ClientHandler;
use Yeepay\Yop\Sdk\Client\ClientParams;
use Yeepay\Yop\Sdk\Exception\YopClientException;
use Yeepay\Yop\Sdk\Service\Cnppay\Model as Model;

class CnppayClient
{
    /**
     * @var ClientHandler
     */
    private $clientHandler;

    /**
     * CnppayClient constructor.
     * @param ClientParams $clientParams
     */
    function __construct(ClientParams $clientParams)
    {
        $this->clientHandler = new ClientHandler($clientParams);
    }

    /**
     * @param Model\BankLimitQueryRequest $request
     * @return Model\BankLimitQueryResponse
     * @throws YopClientException
     */
    public function bankLimitQuery(Model\BankLimitQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        if ($request->getMerchantNo() == null) {
            throw new YopClientException("request.merchantNo is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\BankLimitQueryRequestMarshaller::getInstance(),
            Model\BankLimitQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\InstallmentPayRequestRequest $request
     * @return Model\InstallmentPayRequestResponse
     * @throws YopClientException
     */
    public function installmentPayRequest(Model\InstallmentPayRequestRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\InstallmentPayRequestRequestMarshaller::getInstance(),
            Model\InstallmentPayRequestResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\InstallmentPayRequestV11Request $request
     * @return Model\InstallmentPayRequestV11Response
     * @throws YopClientException
     */
    public function installmentPayRequestV1_1(Model\InstallmentPayRequestV11Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\InstallmentPayRequestV11RequestMarshaller::getInstance(),
            Model\InstallmentPayRequestV11ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\InstallmentQuerybankcfgRequest $request
     * @return Model\InstallmentQuerybankcfgResponse
     * @throws YopClientException
     */
    public function installmentQuerybankcfg(Model\InstallmentQuerybankcfgRequest $request)
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
        $clientExecutionParams = new ClientExecutionParams($request, Model\InstallmentQuerybankcfgRequestMarshaller::getInstance(),
            Model\InstallmentQuerybankcfgResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\OverseasPayAuthRequest $request
     * @return Model\OverseasPayAuthResponse
     * @throws YopClientException
     */
    public function overseasPayAuth(Model\OverseasPayAuthRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\OverseasPayAuthRequestMarshaller::getInstance(),
            Model\OverseasPayAuthResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\OverseasPayConfirmRequest $request
     * @return Model\OverseasPayConfirmResponse
     * @throws YopClientException
     */
    public function overseasPayConfirm(Model\OverseasPayConfirmRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\OverseasPayConfirmRequestMarshaller::getInstance(),
            Model\OverseasPayConfirmResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\OverseasPayRequestRequest $request
     * @return Model\OverseasPayRequestResponse
     * @throws YopClientException
     */
    public function overseasPayRequest(Model\OverseasPayRequestRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\OverseasPayRequestRequestMarshaller::getInstance(),
            Model\OverseasPayRequestResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\OverseasQueryRequest $request
     * @return Model\OverseasQueryResponse
     * @throws YopClientException
     */
    public function overseasQuery(Model\OverseasQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        if ($request->getMerchantNo() == null) {
            throw new YopClientException("request.merchantNo is required.");
        }
        if ($request->getOrderId() == null) {
            throw new YopClientException("request.orderId is required.");
        }
        if ($request->getRequestId() == null) {
            throw new YopClientException("request.requestId is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\OverseasQueryRequestMarshaller::getInstance(),
            Model\OverseasQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
}
