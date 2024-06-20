<?php


namespace Yeepay\Yop\Sdk\Service\Mktg;


use Yeepay\Yop\Sdk\Client\ClientExecutionParams;
use Yeepay\Yop\Sdk\Client\ClientHandler;
use Yeepay\Yop\Sdk\Client\ClientParams;
use Yeepay\Yop\Sdk\Exception\YopClientException;
use Yeepay\Yop\Sdk\Service\Mktg\Model as Model;

class MktgClient
{
    /**
     * @var ClientHandler
     */
    private $clientHandler;

    /**
     * MktgClient constructor.
     * @param ClientParams $clientParams
     */
    function __construct(ClientParams $clientParams)
    {
        $this->clientHandler = new ClientHandler($clientParams);
    }

    /**
     * @param Model\AccountbalanceQueryRequest $request
     * @return Model\AccountbalanceQueryResponse
     * @throws YopClientException
     */
    public function accountbalanceQuery(Model\AccountbalanceQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        if ($request->getMerchantNo() == null) {
            throw new YopClientException("request.merchantNo is required.");
        }
        if ($request->getBankCardNo() == null) {
            throw new YopClientException("request.bankCardNo is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\AccountbalanceQueryRequestMarshaller::getInstance(),
            Model\AccountbalanceQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\AccountcloseApplyRequest $request
     * @return Model\AccountcloseApplyResponse
     * @throws YopClientException
     */
    public function accountcloseApply(Model\AccountcloseApplyRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\AccountcloseApplyRequestMarshaller::getInstance(),
            Model\AccountcloseApplyResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\AccountcloseConfirmRequest $request
     * @return Model\AccountcloseConfirmResponse
     * @throws YopClientException
     */
    public function accountcloseConfirm(Model\AccountcloseConfirmRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\AccountcloseConfirmRequestMarshaller::getInstance(),
            Model\AccountcloseConfirmResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\AccountcloseQueryRequest $request
     * @return Model\AccountcloseQueryResponse
     * @throws YopClientException
     */
    public function accountcloseQuery(Model\AccountcloseQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        if ($request->getMerchantNo() == null) {
            throw new YopClientException("request.merchantNo is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\AccountcloseQueryRequestMarshaller::getInstance(),
            Model\AccountcloseQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\AccountdetailsPageQueryRequest $request
     * @return Model\AccountdetailsPageQueryResponse
     * @throws YopClientException
     */
    public function accountdetailsPageQuery(Model\AccountdetailsPageQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        if ($request->getMerchantNo() == null) {
            throw new YopClientException("request.merchantNo is required.");
        }
        if ($request->getTrxType() == null) {
            throw new YopClientException("request.trxType is required.");
        }
        if ($request->getBankCardNo() == null) {
            throw new YopClientException("request.bankCardNo is required.");
        }
        if ($request->getStartDate() == null) {
            throw new YopClientException("request.startDate is required.");
        }
        if ($request->getEndDate() == null) {
            throw new YopClientException("request.endDate is required.");
        }
        if ($request->getPageNo() == null) {
            throw new YopClientException("request.pageNo is required.");
        }
        if ($request->getPageSize() == null) {
            throw new YopClientException("request.pageSize is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\AccountdetailsPageQueryRequestMarshaller::getInstance(),
            Model\AccountdetailsPageQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\AccountstatusQueryRequest $request
     * @return Model\AccountstatusQueryResponse
     * @throws YopClientException
     */
    public function accountstatusQuery(Model\AccountstatusQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        if ($request->getMerchantNo() == null) {
            throw new YopClientException("request.merchantNo is required.");
        }
        if ($request->getBankCardNo() == null) {
            throw new YopClientException("request.bankCardNo is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\AccountstatusQueryRequestMarshaller::getInstance(),
            Model\AccountstatusQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\BindbankcardApplyRequest $request
     * @return Model\BindbankcardApplyResponse
     * @throws YopClientException
     */
    public function bindbankcardApply(Model\BindbankcardApplyRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\BindbankcardApplyRequestMarshaller::getInstance(),
            Model\BindbankcardApplyResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\BindbankcardConfirmRequest $request
     * @return Model\BindbankcardConfirmResponse
     * @throws YopClientException
     */
    public function bindbankcardConfirm(Model\BindbankcardConfirmRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\BindbankcardConfirmRequestMarshaller::getInstance(),
            Model\BindbankcardConfirmResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\BindbankcardQueryRequest $request
     * @return Model\BindbankcardQueryResponse
     * @throws YopClientException
     */
    public function bindbankcardQuery(Model\BindbankcardQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\BindbankcardQueryRequestMarshaller::getInstance(),
            Model\BindbankcardQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\OpenuserApplyRequest $request
     * @return Model\OpenuserApplyResponse
     * @throws YopClientException
     */
    public function openuserApply(Model\OpenuserApplyRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\OpenuserApplyRequestMarshaller::getInstance(),
            Model\OpenuserApplyResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\OpenuserQueryRequest $request
     * @return Model\OpenuserQueryResponse
     * @throws YopClientException
     */
    public function openuserQuery(Model\OpenuserQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        if ($request->getMerchantNo() == null) {
            throw new YopClientException("request.merchantNo is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\OpenuserQueryRequestMarshaller::getInstance(),
            Model\OpenuserQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\SmscodeSendRequest $request
     * @return Model\SmscodeSendResponse
     * @throws YopClientException
     */
    public function smscodeSend(Model\SmscodeSendRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\SmscodeSendRequestMarshaller::getInstance(),
            Model\SmscodeSendResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\TradeorderApplyRequest $request
     * @return Model\TradeorderApplyResponse
     * @throws YopClientException
     */
    public function tradeorderApply(Model\TradeorderApplyRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\TradeorderApplyRequestMarshaller::getInstance(),
            Model\TradeorderApplyResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\TradeorderConfirmRequest $request
     * @return Model\TradeorderConfirmResponse
     * @throws YopClientException
     */
    public function tradeorderConfirm(Model\TradeorderConfirmRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\TradeorderConfirmRequestMarshaller::getInstance(),
            Model\TradeorderConfirmResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\TradeorderQueryRequest $request
     * @return Model\TradeorderQueryResponse
     * @throws YopClientException
     */
    public function tradeorderQuery(Model\TradeorderQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        if ($request->getMerchantNo() == null) {
            throw new YopClientException("request.merchantNo is required.");
        }
        if ($request->getTrxType() == null) {
            throw new YopClientException("request.trxType is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\TradeorderQueryRequestMarshaller::getInstance(),
            Model\TradeorderQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\UseractivateApplyRequest $request
     * @return Model\UseractivateApplyResponse
     * @throws YopClientException
     */
    public function useractivateApply(Model\UseractivateApplyRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\UseractivateApplyRequestMarshaller::getInstance(),
            Model\UseractivateApplyResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\UseractivateConfirmRequest $request
     * @return Model\UseractivateConfirmResponse
     * @throws YopClientException
     */
    public function useractivateConfirm(Model\UseractivateConfirmRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\UseractivateConfirmRequestMarshaller::getInstance(),
            Model\UseractivateConfirmResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\UseractivateQueryRequest $request
     * @return Model\UseractivateQueryResponse
     * @throws YopClientException
     */
    public function useractivateQuery(Model\UseractivateQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        if ($request->getMerchantNo() == null) {
            throw new YopClientException("request.merchantNo is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\UseractivateQueryRequestMarshaller::getInstance(),
            Model\UseractivateQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\UserinfoModifyRequest $request
     * @return Model\UserinfoModifyResponse
     * @throws YopClientException
     */
    public function userinfoModify(Model\UserinfoModifyRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\UserinfoModifyRequestMarshaller::getInstance(),
            Model\UserinfoModifyResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\UseropenQueryRequest $request
     * @return Model\UseropenQueryResponse
     * @throws YopClientException
     */
    public function useropenQuery(Model\UseropenQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        if ($request->getMerchantNo() == null) {
            throw new YopClientException("request.merchantNo is required.");
        }
        if ($request->getMarketingNo() == null) {
            throw new YopClientException("request.marketingNo is required.");
        }
        if ($request->getBankCode() == null) {
            throw new YopClientException("request.bankCode is required.");
        }
        if ($request->getIdCardType() == null) {
            throw new YopClientException("request.idCardType is required.");
        }
        if ($request->getIdCardNo() == null) {
            throw new YopClientException("request.idCardNo is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\UseropenQueryRequestMarshaller::getInstance(),
            Model\UseropenQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
}
