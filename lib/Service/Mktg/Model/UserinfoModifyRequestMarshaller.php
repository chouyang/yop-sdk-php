<?php


namespace Yeepay\Yop\Sdk\Service\Mktg\Model;


use Yeepay\Yop\Sdk\Http\Headers;
use Yeepay\Yop\Sdk\Internal\DefaultRequest;
use Yeepay\Yop\Sdk\Internal\Request;
use Yeepay\Yop\Sdk\Model\Transform\RequestMarshaller;
use Yeepay\Yop\Sdk\Utils\ObjectSerializer;
use Yeepay\Yop\Sdk\Utils\UUIDUtils;

class UserinfoModifyRequestMarshaller implements RequestMarshaller
{
    /**
     * @var UserinfoModifyRequestMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new UserinfoModifyRequestMarshaller();
    }

    /**
     * @return UserinfoModifyRequestMarshaller
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
    private $resourcePath = '/rest/v1.0/mktg/userinfo/modify';

    /**
     * @var string
     */
    private $contentType = 'application/x-www-form-urlencoded';


    /**
     * @param UserinfoModifyRequest $request
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
        if($request->getInfoOrderId() != null){
            $internalRequest->addParameter('infoOrderId', ObjectSerializer::sanitizeForSerialization($request->getInfoOrderId(), 'string'));
        }
        if($request->getBankCardNo() != null){
            $internalRequest->addParameter('bankCardNo', ObjectSerializer::sanitizeForSerialization($request->getBankCardNo(), 'string'));
        }
        if($request->getUserName() != null){
            $internalRequest->addParameter('userName', ObjectSerializer::sanitizeForSerialization($request->getUserName(), 'string'));
        }
        if($request->getMobile() != null){
            $internalRequest->addParameter('mobile', ObjectSerializer::sanitizeForSerialization($request->getMobile(), 'string'));
        }
        if($request->getIdCardType() != null){
            $internalRequest->addParameter('idCardType', ObjectSerializer::sanitizeForSerialization($request->getIdCardType(), 'string'));
        }
        if($request->getIdCardNo() != null){
            $internalRequest->addParameter('idCardNo', ObjectSerializer::sanitizeForSerialization($request->getIdCardNo(), 'string'));
        }
        $internalRequest->addHeader(Headers::CONTENT_TYPE, $this->contentType);

        return $internalRequest;
    }
}
UserinfoModifyRequestMarshaller::__init();
