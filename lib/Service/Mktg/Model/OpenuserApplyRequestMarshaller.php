<?php


namespace Yeepay\Yop\Sdk\Service\Mktg\Model;


use Yeepay\Yop\Sdk\Http\Headers;
use Yeepay\Yop\Sdk\Internal\DefaultRequest;
use Yeepay\Yop\Sdk\Internal\Request;
use Yeepay\Yop\Sdk\Model\Transform\RequestMarshaller;
use Yeepay\Yop\Sdk\Utils\ObjectSerializer;
use Yeepay\Yop\Sdk\Utils\UUIDUtils;

class OpenuserApplyRequestMarshaller implements RequestMarshaller
{
    /**
     * @var OpenuserApplyRequestMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new OpenuserApplyRequestMarshaller();
    }

    /**
     * @return OpenuserApplyRequestMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @var string
     */
    private $serviceName = 'Mktg';

    /**
     * @var string
     */
    private $httpMethod = 'POST';

    /**
     * @var string
     */
    private $resourcePath = '/rest/v1.0/mktg/openuser/apply';

    /**
     * @var string
     */
    private $contentType = 'application/x-www-form-urlencoded';


    /**
     * @param OpenuserApplyRequest $request
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
        if($request->getMerchantNo() != null){
            $internalRequest->addParameter('merchantNo', ObjectSerializer::sanitizeForSerialization($request->getMerchantNo(), 'string'));
        }
        if($request->getOpenOrderId() != null){
            $internalRequest->addParameter('openOrderId', ObjectSerializer::sanitizeForSerialization($request->getOpenOrderId(), 'string'));
        }
        if($request->getMarketingNo() != null){
            $internalRequest->addParameter('marketingNo', ObjectSerializer::sanitizeForSerialization($request->getMarketingNo(), 'string'));
        }
        if($request->getMerchantUserNo() != null){
            $internalRequest->addParameter('merchantUserNo', ObjectSerializer::sanitizeForSerialization($request->getMerchantUserNo(), 'string'));
        }
        if($request->getProfession() != null){
            $internalRequest->addParameter('profession', ObjectSerializer::sanitizeForSerialization($request->getProfession(), 'string'));
        }
        if($request->getSex() != null){
            $internalRequest->addParameter('sex', ObjectSerializer::sanitizeForSerialization($request->getSex(), 'string'));
        }
        if($request->getBankCode() != null){
            $internalRequest->addParameter('bankCode', ObjectSerializer::sanitizeForSerialization($request->getBankCode(), 'string'));
        }
        if($request->getAccountLevel() != null){
            $internalRequest->addParameter('accountLevel', ObjectSerializer::sanitizeForSerialization($request->getAccountLevel(), 'string'));
        }
        if($request->getUserName() != null){
            $internalRequest->addParameter('userName', ObjectSerializer::sanitizeForSerialization($request->getUserName(), 'string'));
        }
        if($request->getIdCardType() != null){
            $internalRequest->addParameter('idCardType', ObjectSerializer::sanitizeForSerialization($request->getIdCardType(), 'string'));
        }
        if($request->getIdCardNo() != null){
            $internalRequest->addParameter('idCardNo', ObjectSerializer::sanitizeForSerialization($request->getIdCardNo(), 'string'));
        }
        if($request->getIdAddress() != null){
            $internalRequest->addParameter('idAddress', ObjectSerializer::sanitizeForSerialization($request->getIdAddress(), 'string'));
        }
        if($request->getIdStartDate() != null){
            $internalRequest->addParameter('idStartDate', ObjectSerializer::sanitizeForSerialization($request->getIdStartDate(), 'string'));
        }
        if($request->getIdEndDate() != null){
            $internalRequest->addParameter('idEndDate', ObjectSerializer::sanitizeForSerialization($request->getIdEndDate(), 'string'));
        }
        if($request->getIdIssuingAuthority() != null){
            $internalRequest->addParameter('idIssuingAuthority', ObjectSerializer::sanitizeForSerialization($request->getIdIssuingAuthority(), 'string'));
        }
        if($request->getNationality() != null){
            $internalRequest->addParameter('nationality', ObjectSerializer::sanitizeForSerialization($request->getNationality(), 'string'));
        }
        if($request->getMobile() != null){
            $internalRequest->addParameter('mobile', ObjectSerializer::sanitizeForSerialization($request->getMobile(), 'string'));
        }
        if($request->getBindBankCardNo() != null){
            $internalRequest->addParameter('bindBankCardNo', ObjectSerializer::sanitizeForSerialization($request->getBindBankCardNo(), 'string'));
        }
        if($request->getCity() != null){
            $internalRequest->addParameter('city', ObjectSerializer::sanitizeForSerialization($request->getCity(), 'string'));
        }
        if($request->getNotifyUrl() != null){
            $internalRequest->addParameter('notifyUrl', ObjectSerializer::sanitizeForSerialization($request->getNotifyUrl(), 'string'));
        }
        $internalRequest->addHeader(Headers::CONTENT_TYPE, $this->contentType);

        return $internalRequest;
    }
}
OpenuserApplyRequestMarshaller::__init();
