<?php


namespace Yeepay\Yop\Sdk\Service\Aggpay;


use Yeepay\Yop\Sdk\Client\ClientExecutionParams;
use Yeepay\Yop\Sdk\Client\ClientHandler;
use Yeepay\Yop\Sdk\Client\ClientParams;
use Yeepay\Yop\Sdk\Exception\YopClientException;
use Yeepay\Yop\Sdk\Service\Aggpay\Model as Model;

class AggpayClient
{
    /**
     * @var ClientHandler
     */
    private $clientHandler;

    /**
     * AggpayClient constructor.
     * @param ClientParams $clientParams
     */
    function __construct(ClientParams $clientParams)
    {
        $this->clientHandler = new ClientHandler($clientParams);
    }

    /**
     * @param Model\AggAttachReportV10Request $request
     * @return Model\AggAttachReportV10Response
     * @throws YopClientException
     */
    public function agg_attach_report_v1_0(Model\AggAttachReportV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\AggAttachReportV10RequestMarshaller::getInstance(),
            Model\AggAttachReportV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\AggCloseOrderV10Request $request
     * @return Model\AggCloseOrderV10Response
     * @throws YopClientException
     */
    public function agg_close_order_v1_0(Model\AggCloseOrderV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\AggCloseOrderV10RequestMarshaller::getInstance(),
            Model\AggCloseOrderV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\AggReportQueryV10Request $request
     * @return Model\AggReportQueryV10Response
     * @throws YopClientException
     */
    public function agg_report_query_v1_0(Model\AggReportQueryV10Request $request)
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
        if ($request->getChannel() == null) {
            throw new YopClientException("request.channel is required.");
        }
        if ($request->getScene() == null) {
            throw new YopClientException("request.scene is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\AggReportQueryV10RequestMarshaller::getInstance(),
            Model\AggReportQueryV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\AggReportUpdateV10Request $request
     * @return Model\AggReportUpdateV10Response
     * @throws YopClientException
     */
    public function agg_report_update_v1_0(Model\AggReportUpdateV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\AggReportUpdateV10RequestMarshaller::getInstance(),
            Model\AggReportUpdateV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\CloseOrderRequest $request
     * @return Model\CloseOrderResponse
     * @throws YopClientException
     */
    public function closeOrder(Model\CloseOrderRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\CloseOrderRequestMarshaller::getInstance(),
            Model\CloseOrderResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\ComplaintWechatDetailsRequest $request
     * @return Model\ComplaintWechatDetailsResponse
     * @throws YopClientException
     */
    public function complaintWechatDetails(Model\ComplaintWechatDetailsRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        if ($request->getComplaintNo() == null) {
            throw new YopClientException("request.complaintNo is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\ComplaintWechatDetailsRequestMarshaller::getInstance(),
            Model\ComplaintWechatDetailsResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\ComplaintWechatDownloadPicRequest $request
     * @return Model\ComplaintWechatDownloadPicResponse
     * @throws YopClientException
     */
    public function complaintWechatDownloadPic(Model\ComplaintWechatDownloadPicRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\ComplaintWechatDownloadPicRequestMarshaller::getInstance(),
            Model\ComplaintWechatDownloadPicResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\ComplaintWechatFeedbackRequest $request
     * @return Model\ComplaintWechatFeedbackResponse
     * @throws YopClientException
     */
    public function complaintWechatFeedback(Model\ComplaintWechatFeedbackRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\ComplaintWechatFeedbackRequestMarshaller::getInstance(),
            Model\ComplaintWechatFeedbackResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\ComplaintWechatListRequest $request
     * @return Model\ComplaintWechatListResponse
     * @throws YopClientException
     */
    public function complaintWechatList(Model\ComplaintWechatListRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        if ($request->getStartTime() == null) {
            throw new YopClientException("request.startTime is required.");
        }
        if ($request->getEndTime() == null) {
            throw new YopClientException("request.endTime is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\ComplaintWechatListRequestMarshaller::getInstance(),
            Model\ComplaintWechatListResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\ComplaintWechatNegotiationHistoryRequest $request
     * @return Model\ComplaintWechatNegotiationHistoryResponse
     * @throws YopClientException
     */
    public function complaintWechatNegotiationHistory(Model\ComplaintWechatNegotiationHistoryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        if ($request->getComplaintNo() == null) {
            throw new YopClientException("request.complaintNo is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\ComplaintWechatNegotiationHistoryRequestMarshaller::getInstance(),
            Model\ComplaintWechatNegotiationHistoryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\ComplaintWechatSuccessRequest $request
     * @return Model\ComplaintWechatSuccessResponse
     * @throws YopClientException
     */
    public function complaintWechatSuccess(Model\ComplaintWechatSuccessRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\ComplaintWechatSuccessRequestMarshaller::getInstance(),
            Model\ComplaintWechatSuccessResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\CreditScoreCancelRequest $request
     * @return Model\CreditScoreCancelResponse
     * @throws YopClientException
     */
    public function creditScoreCancel(Model\CreditScoreCancelRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\CreditScoreCancelRequestMarshaller::getInstance(),
            Model\CreditScoreCancelResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\CreditScoreCreateRequest $request
     * @return Model\CreditScoreCreateResponse
     * @throws YopClientException
     */
    public function creditScoreCreate(Model\CreditScoreCreateRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\CreditScoreCreateRequestMarshaller::getInstance(),
            Model\CreditScoreCreateResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\CreditScoreModifyRequest $request
     * @return Model\CreditScoreModifyResponse
     * @throws YopClientException
     */
    public function creditScoreModify(Model\CreditScoreModifyRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\CreditScoreModifyRequestMarshaller::getInstance(),
            Model\CreditScoreModifyResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\CreditScoreQueryRequest $request
     * @return Model\CreditScoreQueryResponse
     * @throws YopClientException
     */
    public function creditScoreQuery(Model\CreditScoreQueryRequest $request)
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
        if ($request->getCreditOrderId() == null) {
            throw new YopClientException("request.creditOrderId is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\CreditScoreQueryRequestMarshaller::getInstance(),
            Model\CreditScoreQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\CreditScoreSyncRequest $request
     * @return Model\CreditScoreSyncResponse
     * @throws YopClientException
     */
    public function creditScoreSync(Model\CreditScoreSyncRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\CreditScoreSyncRequestMarshaller::getInstance(),
            Model\CreditScoreSyncResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\CreditScorecompleteRequest $request
     * @return Model\CreditScorecompleteResponse
     * @throws YopClientException
     */
    public function creditScorecomplete(Model\CreditScorecompleteRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\CreditScorecompleteRequestMarshaller::getInstance(),
            Model\CreditScorecompleteResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\CreditscoreCancelRequest $request
     * @return Model\CreditscoreCancelResponse
     * @throws YopClientException
     */
    public function creditscoreCancel(Model\CreditscoreCancelRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\CreditscoreCancelRequestMarshaller::getInstance(),
            Model\CreditscoreCancelResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\CreditscoreCompleteRequest $request
     * @return Model\CreditscoreCompleteResponse
     * @throws YopClientException
     */
    public function creditscoreComplete(Model\CreditscoreCompleteRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\CreditscoreCompleteRequestMarshaller::getInstance(),
            Model\CreditscoreCompleteResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\CreditscoreCreateRequest $request
     * @return Model\CreditscoreCreateResponse
     * @throws YopClientException
     */
    public function creditscoreCreate(Model\CreditscoreCreateRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\CreditscoreCreateRequestMarshaller::getInstance(),
            Model\CreditscoreCreateResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\CreditscoreModifyRequest $request
     * @return Model\CreditscoreModifyResponse
     * @throws YopClientException
     */
    public function creditscoreModify(Model\CreditscoreModifyRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\CreditscoreModifyRequestMarshaller::getInstance(),
            Model\CreditscoreModifyResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\CreditscoreQueryRequest $request
     * @return Model\CreditscoreQueryResponse
     * @throws YopClientException
     */
    public function creditscoreQuery(Model\CreditscoreQueryRequest $request)
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
        if ($request->getCreditOrderId() == null) {
            throw new YopClientException("request.creditOrderId is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\CreditscoreQueryRequestMarshaller::getInstance(),
            Model\CreditscoreQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\CreditscoreSyncRequest $request
     * @return Model\CreditscoreSyncResponse
     * @throws YopClientException
     */
    public function creditscoreSync(Model\CreditscoreSyncRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\CreditscoreSyncRequestMarshaller::getInstance(),
            Model\CreditscoreSyncResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\GetAuthInfoRequest $request
     * @return Model\GetAuthInfoResponse
     * @throws YopClientException
     */
    public function getAuthInfo(Model\GetAuthInfoRequest $request)
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
        if ($request->getRawData() == null) {
            throw new YopClientException("request.rawData is required.");
        }
        if ($request->getStoreId() == null) {
            throw new YopClientException("request.storeId is required.");
        }
        if ($request->getStoreName() == null) {
            throw new YopClientException("request.storeName is required.");
        }
        if ($request->getDeviceId() == null) {
            throw new YopClientException("request.deviceId is required.");
        }
        if ($request->getChannel() == null) {
            throw new YopClientException("request.channel is required.");
        }
        if ($request->getScene() == null) {
            throw new YopClientException("request.scene is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\GetAuthInfoRequestMarshaller::getInstance(),
            Model\GetAuthInfoResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\MiniprogramDetailsRequest $request
     * @return Model\MiniprogramDetailsResponse
     * @throws YopClientException
     */
    public function miniprogramDetails(Model\MiniprogramDetailsRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\MiniprogramDetailsRequestMarshaller::getInstance(),
            Model\MiniprogramDetailsResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\MiniprogramFeedbackRequest $request
     * @return Model\MiniprogramFeedbackResponse
     * @throws YopClientException
     */
    public function miniprogramFeedback(Model\MiniprogramFeedbackRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\MiniprogramFeedbackRequestMarshaller::getInstance(),
            Model\MiniprogramFeedbackResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\MiniprogramNegotiationHistoryRequest $request
     * @return Model\MiniprogramNegotiationHistoryResponse
     * @throws YopClientException
     */
    public function miniprogramNegotiationHistory(Model\MiniprogramNegotiationHistoryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\MiniprogramNegotiationHistoryRequestMarshaller::getInstance(),
            Model\MiniprogramNegotiationHistoryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\PayRequest $request
     * @return Model\PayResponse
     * @throws YopClientException
     */
    public function pay(Model\PayRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\PayRequestMarshaller::getInstance(),
            Model\PayResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\PayLinkRequest $request
     * @return Model\PayLinkResponse
     * @throws YopClientException
     */
    public function payLink(Model\PayLinkRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\PayLinkRequestMarshaller::getInstance(),
            Model\PayLinkResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\PrePayRequest $request
     * @return Model\PrePayResponse
     * @throws YopClientException
     */
    public function prePay(Model\PrePayRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\PrePayRequestMarshaller::getInstance(),
            Model\PrePayResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\QueryComplaintNegotiationHistoryRequest $request
     * @return Model\QueryComplaintNegotiationHistoryResponse
     * @throws YopClientException
     */
    public function queryComplaintNegotiationHistory(Model\QueryComplaintNegotiationHistoryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\QueryComplaintNegotiationHistoryRequestMarshaller::getInstance(),
            Model\QueryComplaintNegotiationHistoryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\QueryMiniProgramDetailRequest $request
     * @return Model\QueryMiniProgramDetailResponse
     * @throws YopClientException
     */
    public function queryMiniProgramDetail(Model\QueryMiniProgramDetailRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\QueryMiniProgramDetailRequestMarshaller::getInstance(),
            Model\QueryMiniProgramDetailResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\QueryUseridRequest $request
     * @return Model\QueryUseridResponse
     * @throws YopClientException
     */
    public function queryUserid(Model\QueryUseridRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\QueryUseridRequestMarshaller::getInstance(),
            Model\QueryUseridResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\ReportAttachRequest $request
     * @return Model\ReportAttachResponse
     * @throws YopClientException
     */
    public function reportAttach(Model\ReportAttachRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\ReportAttachRequestMarshaller::getInstance(),
            Model\ReportAttachResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\ReportQueryRequest $request
     * @return Model\ReportQueryResponse
     * @throws YopClientException
     */
    public function reportQuery(Model\ReportQueryRequest $request)
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
        if ($request->getChannel() == null) {
            throw new YopClientException("request.channel is required.");
        }
        if ($request->getScene() == null) {
            throw new YopClientException("request.scene is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\ReportQueryRequestMarshaller::getInstance(),
            Model\ReportQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\ReportUpdateRequest $request
     * @return Model\ReportUpdateResponse
     * @throws YopClientException
     */
    public function reportUpdate(Model\ReportUpdateRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\ReportUpdateRequestMarshaller::getInstance(),
            Model\ReportUpdateResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\ShareTokenGenerateRequest $request
     * @return Model\ShareTokenGenerateResponse
     * @throws YopClientException
     */
    public function shareTokenGenerate(Model\ShareTokenGenerateRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\ShareTokenGenerateRequestMarshaller::getInstance(),
            Model\ShareTokenGenerateResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\ShareTokenMarketQueryRequest $request
     * @return Model\ShareTokenMarketQueryResponse
     * @throws YopClientException
     */
    public function shareTokenMarketQuery(Model\ShareTokenMarketQueryRequest $request)
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
        if ($request->getOrderId() == null) {
            throw new YopClientException("request.orderId is required.");
        }
        if ($request->getOrderAmount() == null) {
            throw new YopClientException("request.orderAmount is required.");
        }
        if ($request->getExternalUserId() == null) {
            throw new YopClientException("request.externalUserId is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\ShareTokenMarketQueryRequestMarshaller::getInstance(),
            Model\ShareTokenMarketQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\SignRequest $request
     * @return Model\SignResponse
     * @throws YopClientException
     */
    public function sign(Model\SignRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\SignRequestMarshaller::getInstance(),
            Model\SignResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\SignQueryRequest $request
     * @return Model\SignQueryResponse
     * @throws YopClientException
     */
    public function signQuery(Model\SignQueryRequest $request)
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
        if ($request->getAgreementId() == null) {
            throw new YopClientException("request.agreementId is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\SignQueryRequestMarshaller::getInstance(),
            Model\SignQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\TutelagePrePayRequest $request
     * @return Model\TutelagePrePayResponse
     * @throws YopClientException
     */
    public function tutelagePrePay(Model\TutelagePrePayRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\TutelagePrePayRequestMarshaller::getInstance(),
            Model\TutelagePrePayResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\UnsignRequest $request
     * @return Model\UnsignResponse
     * @throws YopClientException
     */
    public function unsign(Model\UnsignRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\UnsignRequestMarshaller::getInstance(),
            Model\UnsignResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\ViolationWechatChannelRequest $request
     * @return Model\ViolationWechatChannelResponse
     * @throws YopClientException
     */
    public function violationWechatChannel(Model\ViolationWechatChannelRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        if ($request->getParentMerchantNo() == null) {
            throw new YopClientException("request.parentMerchantNo is required.");
        }
        if ($request->getBeginTime() == null) {
            throw new YopClientException("request.beginTime is required.");
        }
        if ($request->getEndTime() == null) {
            throw new YopClientException("request.endTime is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\ViolationWechatChannelRequestMarshaller::getInstance(),
            Model\ViolationWechatChannelResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\WechatComplaintFeedbackRequest $request
     * @return Model\WechatComplaintFeedbackResponse
     * @throws YopClientException
     */
    public function wechatComplaintFeedback(Model\WechatComplaintFeedbackRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\WechatComplaintFeedbackRequestMarshaller::getInstance(),
            Model\WechatComplaintFeedbackResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\WechatConfigAddRequest $request
     * @return Model\WechatConfigAddResponse
     * @throws YopClientException
     */
    public function wechatConfigAdd(Model\WechatConfigAddRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        if ($request->getBody() == null) {
            throw new YopClientException("request.body is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\WechatConfigAddRequestMarshaller::getInstance(),
            Model\WechatConfigAddResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\WechatConfigAddV2Request $request
     * @return Model\WechatConfigAddV2Response
     * @throws YopClientException
     */
    public function wechatConfigAddV2(Model\WechatConfigAddV2Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\WechatConfigAddV2RequestMarshaller::getInstance(),
            Model\WechatConfigAddV2ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\WechatConfigQueryRequest $request
     * @return Model\WechatConfigQueryResponse
     * @throws YopClientException
     */
    public function wechatConfigQuery(Model\WechatConfigQueryRequest $request)
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
        $clientExecutionParams = new ClientExecutionParams($request, Model\WechatConfigQueryRequestMarshaller::getInstance(),
            Model\WechatConfigQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\WechatConfigQueryV2Request $request
     * @return Model\WechatConfigQueryV2Response
     * @throws YopClientException
     */
    public function wechatConfigQueryV2(Model\WechatConfigQueryV2Request $request)
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
        $clientExecutionParams = new ClientExecutionParams($request, Model\WechatConfigQueryV2RequestMarshaller::getInstance(),
            Model\WechatConfigQueryV2ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
}
