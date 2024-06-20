<?php


namespace Yeepay\Yop\Sdk\Service\Mktg\Model;


use Yeepay\Yop\Sdk\Http\Headers;
use Yeepay\Yop\Sdk\Internal\DefaultRequest;
use Yeepay\Yop\Sdk\Internal\Request;
use Yeepay\Yop\Sdk\Model\Transform\RequestMarshaller;
use Yeepay\Yop\Sdk\Utils\ObjectSerializer;
use Yeepay\Yop\Sdk\Utils\UUIDUtils;

class UseractivateConfirmRequestMarshaller implements RequestMarshaller
{
    /**
     * @var UseractivateConfirmRequestMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new UseractivateConfirmRequestMarshaller();
    }

    /**
     * @return UseractivateConfirmRequestMarshaller
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
    private $resourcePath = '/rest/v1.0/mktg/useractivate/confirm';

    /**
     * @var string
     */
    private $contentType = 'application/x-www-form-urlencoded';


    /**
     * @param UseractivateConfirmRequest $request
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
        if($request->getActivateOrderId() != null){
            $internalRequest->addParameter('activateOrderId', ObjectSerializer::sanitizeForSerialization($request->getActivateOrderId(), 'string'));
        }
        if($request->getUniqueActivateNo() != null){
            $internalRequest->addParameter('uniqueActivateNo', ObjectSerializer::sanitizeForSerialization($request->getUniqueActivateNo(), 'string'));
        }
        if($request->getSmsCode() != null){
            $internalRequest->addParameter('smsCode', ObjectSerializer::sanitizeForSerialization($request->getSmsCode(), 'string'));
        }
        $internalRequest->addHeader(Headers::CONTENT_TYPE, $this->contentType);

        return $internalRequest;
    }
}
UseractivateConfirmRequestMarshaller::__init();
