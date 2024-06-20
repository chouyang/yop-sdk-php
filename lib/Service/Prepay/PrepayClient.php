<?php


namespace Yeepay\Yop\Sdk\Service\Prepay;


use Yeepay\Yop\Sdk\Client\ClientExecutionParams;
use Yeepay\Yop\Sdk\Client\ClientHandler;
use Yeepay\Yop\Sdk\Client\ClientParams;
use Yeepay\Yop\Sdk\Exception\YopClientException;
use Yeepay\Yop\Sdk\Service\Prepay\Model as Model;

class PrepayClient
{
    /**
     * @var ClientHandler
     */
    private $clientHandler;

    /**
     * PrepayClient constructor.
     * @param ClientParams $clientParams
     */
    function __construct(ClientParams $clientParams)
    {
        $this->clientHandler = new ClientHandler($clientParams);
    }

    /**
     * @param Model\CompleteRequest $request
     * @return Model\CompleteResponse
     * @throws YopClientException
     */
    public function complete(Model\CompleteRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\CompleteRequestMarshaller::getInstance(),
            Model\CompleteResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\CompleteRepealRequest $request
     * @return Model\CompleteRepealResponse
     * @throws YopClientException
     */
    public function completeRepeal(Model\CompleteRepealRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\CompleteRepealRequestMarshaller::getInstance(),
            Model\CompleteRepealResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\PrepayCompleteRepealV10Request $request
     * @return Model\PrepayCompleteRepealV10Response
     * @throws YopClientException
     */
    public function prepay_complete_repeal_v1_0(Model\PrepayCompleteRepealV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\PrepayCompleteRepealV10RequestMarshaller::getInstance(),
            Model\PrepayCompleteRepealV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\PrepayCompleteV10Request $request
     * @return Model\PrepayCompleteV10Response
     * @throws YopClientException
     */
    public function prepay_complete_v1_0(Model\PrepayCompleteV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\PrepayCompleteV10RequestMarshaller::getInstance(),
            Model\PrepayCompleteV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\PrepayRepealV10Request $request
     * @return Model\PrepayRepealV10Response
     * @throws YopClientException
     */
    public function prepay_repeal_v1_0(Model\PrepayRepealV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\PrepayRepealV10RequestMarshaller::getInstance(),
            Model\PrepayRepealV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\RepealRequest $request
     * @return Model\RepealResponse
     * @throws YopClientException
     */
    public function repeal(Model\RepealRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\RepealRequestMarshaller::getInstance(),
            Model\RepealResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
}
