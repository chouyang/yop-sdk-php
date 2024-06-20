<?php


namespace Yeepay\Yop\Sdk\Service\Offline\Model;


use Yeepay\Yop\Sdk\Http\Headers;
use Yeepay\Yop\Sdk\Internal\DefaultRequest;
use Yeepay\Yop\Sdk\Internal\Request;
use Yeepay\Yop\Sdk\Model\Transform\RequestMarshaller;
use Yeepay\Yop\Sdk\Utils\ObjectSerializer;
use Yeepay\Yop\Sdk\Utils\UUIDUtils;

class UpdateAuxiliaryTerminalRequestMarshaller implements RequestMarshaller
{
    /**
     * @var UpdateAuxiliaryTerminalRequestMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new UpdateAuxiliaryTerminalRequestMarshaller();
    }

    /**
     * @return UpdateAuxiliaryTerminalRequestMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @var string
     */
    private $serviceName = 'Offline';

    /**
     * @var string
     */
    private $httpMethod = 'POST';

    /**
     * @var string
     */
    private $resourcePath = '/rest/v1.0/offline/update-auxiliary-terminal';

    /**
     * @var string
     */
    private $contentType = 'application/x-www-form-urlencoded';


    /**
     * @param UpdateAuxiliaryTerminalRequest $request
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
        if($request->getTerminalName() != null){
            $internalRequest->addParameter('terminalName', ObjectSerializer::sanitizeForSerialization($request->getTerminalName(), 'string'));
        }
        if($request->getSerialNo() != null){
            $internalRequest->addParameter('serialNo', ObjectSerializer::sanitizeForSerialization($request->getSerialNo(), 'string'));
        }
        $internalRequest->addHeader(Headers::CONTENT_TYPE, $this->contentType);

        return $internalRequest;
    }
}
UpdateAuxiliaryTerminalRequestMarshaller::__init();
