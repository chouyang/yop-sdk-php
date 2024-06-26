<?php


namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;


use Yeepay\Yop\Sdk\Http\Headers;
use Yeepay\Yop\Sdk\Internal\DefaultRequest;
use Yeepay\Yop\Sdk\Internal\Request;
use Yeepay\Yop\Sdk\Model\Transform\RequestMarshaller;
use Yeepay\Yop\Sdk\Utils\ObjectSerializer;
use Yeepay\Yop\Sdk\Utils\UUIDUtils;

class PrePayRequestMarshaller implements RequestMarshaller
{
    /**
     * @var PrePayRequestMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new PrePayRequestMarshaller();
    }

    /**
     * @return PrePayRequestMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @var string
     */
    private $serviceName = 'Aggpay';

    /**
     * @var string
     */
    private $httpMethod = 'POST';

    /**
     * @var string
     */
    private $resourcePath = '/rest/v1.0/aggpay/pre-pay';

    /**
     * @var string
     */
    private $contentType = 'application/x-www-form-urlencoded';


    /**
     * @param PrePayRequest $request
     * @return Request
     */
    public function marshal($request)
    {
        $internalRequest = new DefaultRequest($this->serviceName);
        $internalRequest->setResourcePath($this->resourcePath);
        $internalRequest->setHttpMethod($this->httpMethod);
        if (!empty($request->getRequestConfig()) && !empty($request->getRequestConfig()->getCustomRequestHeaders())) {
            foreach ($request->getRequestConfig()->getCustomRequestHeaders() as $name => $value) {
                $internalRequest->addHeader($name, $value);
            }
        }
        if (!isset($internalRequest->getHeaders()[Headers::YOP_REQUEST_ID])) {
            $internalRequest->addHeader(Headers::YOP_REQUEST_ID, UUIDUtils::uuid());
        }
        if($request->getParentMerchantNo() != null){
            $internalRequest->addParameter('parentMerchantNo', ObjectSerializer::sanitizeForSerialization($request->getParentMerchantNo(), 'string'));
        }
        if($request->getMerchantNo() != null){
            $internalRequest->addParameter('merchantNo', ObjectSerializer::sanitizeForSerialization($request->getMerchantNo(), 'string'));
        }
        if($request->getOrderId() != null){
            $internalRequest->addParameter('orderId', ObjectSerializer::sanitizeForSerialization($request->getOrderId(), 'string'));
        }
        if($request->getOrderAmount() != null){
            $internalRequest->addParameter('orderAmount', ObjectSerializer::sanitizeForSerialization($request->getOrderAmount(), 'float'));
        }
        if($request->getExpiredTime() != null){
            $internalRequest->addParameter('expiredTime', ObjectSerializer::sanitizeForSerialization($request->getExpiredTime(), 'string', 'date-time'));
        }
        if($request->getNotifyUrl() != null){
            $internalRequest->addParameter('notifyUrl', ObjectSerializer::sanitizeForSerialization($request->getNotifyUrl(), 'string', 'url'));
        }
        if($request->getRedirectUrl() != null){
            $internalRequest->addParameter('redirectUrl', ObjectSerializer::sanitizeForSerialization($request->getRedirectUrl(), 'string', 'url'));
        }
        if($request->getMemo() != null){
            $internalRequest->addParameter('memo', ObjectSerializer::sanitizeForSerialization($request->getMemo(), 'string'));
        }
        if($request->getGoodsName() != null){
            $internalRequest->addParameter('goodsName', ObjectSerializer::sanitizeForSerialization($request->getGoodsName(), 'string'));
        }
        if($request->getFundProcessType() != null){
            $internalRequest->addParameter('fundProcessType', ObjectSerializer::sanitizeForSerialization($request->getFundProcessType(), 'string'));
        }
        if($request->getPayWay() != null){
            $internalRequest->addParameter('payWay', ObjectSerializer::sanitizeForSerialization($request->getPayWay(), 'string'));
        }
        if($request->getChannel() != null){
            $internalRequest->addParameter('channel', ObjectSerializer::sanitizeForSerialization($request->getChannel(), 'string'));
        }
        if($request->getScene() != null){
            $internalRequest->addParameter('scene', ObjectSerializer::sanitizeForSerialization($request->getScene(), 'string'));
        }
        if($request->getAppId() != null){
            $internalRequest->addParameter('appId', ObjectSerializer::sanitizeForSerialization($request->getAppId(), 'string'));
        }
        if($request->getUserId() != null){
            $internalRequest->addParameter('userId', ObjectSerializer::sanitizeForSerialization($request->getUserId(), 'string'));
        }
        if($request->getUserIp() != null){
            $internalRequest->addParameter('userIp', ObjectSerializer::sanitizeForSerialization($request->getUserIp(), 'string'));
        }
        if($request->getChannelSpecifiedInfo() != null){
            $internalRequest->addParameter('channelSpecifiedInfo', ObjectSerializer::sanitizeForSerialization($request->getChannelSpecifiedInfo(), 'string'));
        }
        if($request->getChannelPromotionInfo() != null){
            $internalRequest->addParameter('channelPromotionInfo', ObjectSerializer::sanitizeForSerialization($request->getChannelPromotionInfo(), 'string'));
        }
        if($request->getIdentityInfo() != null){
            $internalRequest->addParameter('identityInfo', ObjectSerializer::sanitizeForSerialization($request->getIdentityInfo(), 'string'));
        }
        if($request->getLimitCredit() != null){
            $internalRequest->addParameter('limitCredit', ObjectSerializer::sanitizeForSerialization($request->getLimitCredit(), 'string'));
        }
        if($request->getToken() != null){
            $internalRequest->addParameter('token', ObjectSerializer::sanitizeForSerialization($request->getToken(), 'string'));
        }
        if($request->getUniqueOrderNo() != null){
            $internalRequest->addParameter('uniqueOrderNo', ObjectSerializer::sanitizeForSerialization($request->getUniqueOrderNo(), 'string'));
        }
        if($request->getCsUrl() != null){
            $internalRequest->addParameter('csUrl', ObjectSerializer::sanitizeForSerialization($request->getCsUrl(), 'string', 'url'));
        }
        if($request->getAccountLinkInfo() != null){
            $internalRequest->addParameter('accountLinkInfo', ObjectSerializer::sanitizeForSerialization($request->getAccountLinkInfo(), 'string'));
        }
        if($request->getYpPromotionInfo() != null){
            $internalRequest->addParameter('ypPromotionInfo', ObjectSerializer::sanitizeForSerialization($request->getYpPromotionInfo(), 'string'));
        }
        if($request->getBankCode() != null){
            $internalRequest->addParameter('bankCode', ObjectSerializer::sanitizeForSerialization($request->getBankCode(), 'string'));
        }
        if($request->getBusinessInfo() != null){
            $internalRequest->addParameter('businessInfo', ObjectSerializer::sanitizeForSerialization($request->getBusinessInfo(), 'string'));
        }
        if($request->getUserAuthCode() != null){
            $internalRequest->addParameter('userAuthCode', ObjectSerializer::sanitizeForSerialization($request->getUserAuthCode(), 'string'));
        }
        if($request->getChannelActivityInfo() != null){
            $internalRequest->addParameter('channelActivityInfo', ObjectSerializer::sanitizeForSerialization($request->getChannelActivityInfo(), 'string'));
        }
        if($request->getTerminalId() != null){
            $internalRequest->addParameter('terminalId', ObjectSerializer::sanitizeForSerialization($request->getTerminalId(), 'string'));
        }
        if($request->getTerminalSceneInfo() != null){
            $internalRequest->addParameter('terminalSceneInfo', ObjectSerializer::sanitizeForSerialization($request->getTerminalSceneInfo(), 'string'));
        }
        if($request->getYpAccountBookNo() != null){
            $internalRequest->addParameter('ypAccountBookNo', ObjectSerializer::sanitizeForSerialization($request->getYpAccountBookNo(), 'string'));
        }
        if($request->getTerminalInfo() != null){
            $internalRequest->addParameter('terminalInfo', ObjectSerializer::sanitizeForSerialization($request->getTerminalInfo(), 'string'));
        }
        if($request->getProductInfo() != null){
            $internalRequest->addParameter('productInfo', ObjectSerializer::sanitizeForSerialization($request->getProductInfo(), 'string'));
        }
        if($request->getDivideDetail() != null){
            $internalRequest->addParameter('divideDetail', ObjectSerializer::sanitizeForSerialization($request->getDivideDetail(), 'string'));
        }
        if($request->getDivideNotifyUrl() != null){
            $internalRequest->addParameter('divideNotifyUrl', ObjectSerializer::sanitizeForSerialization($request->getDivideNotifyUrl(), 'string'));
        }
        if($request->getFeeSubsidyInfo() != null){
            $internalRequest->addParameter('feeSubsidyInfo', ObjectSerializer::sanitizeForSerialization($request->getFeeSubsidyInfo(), 'string'));
        }
        if($request->getAgreementId() != null){
            $internalRequest->addParameter('agreementId', ObjectSerializer::sanitizeForSerialization($request->getAgreementId(), 'string'));
        }
        if($request->getCreditOrderId() != null){
            $internalRequest->addParameter('creditOrderId', ObjectSerializer::sanitizeForSerialization($request->getCreditOrderId(), 'string'));
        }
        $internalRequest->addHeader(Headers::CONTENT_TYPE, $this->contentType);

        return $internalRequest;
    }
}
PrePayRequestMarshaller::__init();
