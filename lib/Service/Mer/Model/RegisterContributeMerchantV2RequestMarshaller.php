<?php


namespace Yeepay\Yop\Sdk\Service\Mer\Model;


use Yeepay\Yop\Sdk\Http\Headers;
use Yeepay\Yop\Sdk\Internal\DefaultRequest;
use Yeepay\Yop\Sdk\Internal\Request;
use Yeepay\Yop\Sdk\Model\Transform\RequestMarshaller;
use Yeepay\Yop\Sdk\Utils\ObjectSerializer;
use Yeepay\Yop\Sdk\Utils\UUIDUtils;

class RegisterContributeMerchantV2RequestMarshaller implements RequestMarshaller
{
    /**
     * @var RegisterContributeMerchantV2RequestMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new RegisterContributeMerchantV2RequestMarshaller();
    }

    /**
     * @return RegisterContributeMerchantV2RequestMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @var string
     */
    private $serviceName = 'Mer';

    /**
     * @var string
     */
    private $httpMethod = 'POST';

    /**
     * @var string
     */
    private $resourcePath = '/rest/v2.0/mer/register/contribute/merchant';

    /**
     * @var string
     */
    private $contentType = 'application/x-www-form-urlencoded';


    /**
     * @param RegisterContributeMerchantV2Request $request
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
        if($request->getRequestNo() != null){
            $internalRequest->addParameter('requestNo', ObjectSerializer::sanitizeForSerialization($request->getRequestNo(), 'string'));
        }
        if($request->getBusinessRole() != null){
            $internalRequest->addParameter('businessRole', ObjectSerializer::sanitizeForSerialization($request->getBusinessRole(), 'string'));
        }
        if($request->getMerchantSubjectInfo() != null){
            $internalRequest->addParameter('merchantSubjectInfo', ObjectSerializer::sanitizeForSerialization($request->getMerchantSubjectInfo(), 'string'));
        }
        if($request->getMerchantCorporationInfo() != null){
            $internalRequest->addParameter('merchantCorporationInfo', ObjectSerializer::sanitizeForSerialization($request->getMerchantCorporationInfo(), 'string'));
        }
        if($request->getMerchantContactInfo() != null){
            $internalRequest->addParameter('merchantContactInfo', ObjectSerializer::sanitizeForSerialization($request->getMerchantContactInfo(), 'string'));
        }
        if($request->getIndustryCategoryInfo() != null){
            $internalRequest->addParameter('industryCategoryInfo', ObjectSerializer::sanitizeForSerialization($request->getIndustryCategoryInfo(), 'string'));
        }
        if($request->getBusinessAddressInfo() != null){
            $internalRequest->addParameter('businessAddressInfo', ObjectSerializer::sanitizeForSerialization($request->getBusinessAddressInfo(), 'string'));
        }
        if($request->getSettlementAccountInfo() != null){
            $internalRequest->addParameter('settlementAccountInfo', ObjectSerializer::sanitizeForSerialization($request->getSettlementAccountInfo(), 'string'));
        }
        if($request->getNotifyUrl() != null){
            $internalRequest->addParameter('notifyUrl', ObjectSerializer::sanitizeForSerialization($request->getNotifyUrl(), 'string'));
        }
        if($request->getProductInfo() != null){
            $internalRequest->addParameter('productInfo', ObjectSerializer::sanitizeForSerialization($request->getProductInfo(), 'string'));
        }
        if($request->getProductQualificationInfo() != null){
            $internalRequest->addParameter('productQualificationInfo', ObjectSerializer::sanitizeForSerialization($request->getProductQualificationInfo(), 'string'));
        }
        if($request->getFunctionService() != null){
            $internalRequest->addParameter('functionService', ObjectSerializer::sanitizeForSerialization($request->getFunctionService(), 'string'));
        }
        if($request->getFunctionServiceQualificationInfo() != null){
            $internalRequest->addParameter('functionServiceQualificationInfo', ObjectSerializer::sanitizeForSerialization($request->getFunctionServiceQualificationInfo(), 'string'));
        }
        if($request->getBusinessScene() != null){
            $internalRequest->addParameter('businessScene', ObjectSerializer::sanitizeForSerialization($request->getBusinessScene(), 'string'));
        }
        $internalRequest->addHeader(Headers::CONTENT_TYPE, $this->contentType);

        return $internalRequest;
    }
}
RegisterContributeMerchantV2RequestMarshaller::__init();
