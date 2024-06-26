<?php


namespace Yeepay\Yop\Sdk\Service\Offline;


use PHPUnit\Framework\TestCase;
use Yeepay\Yop\Sdk\Config\AppSdkConfig;
use Yeepay\Yop\Sdk\Exception\YopClientException;
use Yeepay\Yop\Sdk\Service\Offline\Model as Model;

class OfflineClientTest extends TestCase
{


    private static $client;

    public static function setUpBeforeClass()
    {
        $data = \GuzzleHttp\json_decode('{"app_key":"app_Fe51qCyZWcEnDMtK","aes_secret_key":"ytrbMFjRqLpLgY58J6LN9Q==","server_root":"http://ycetest.yeepay.com:30228/yop-center","yos_server_root":"http://ycetest.yeepay.com:30228/yop-center","yop_public_key":[{"store_type":"string","cert_type":"RSA2048","value":"MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEA4g7dPL+CBeuzFmARI2GFjZpKODUROaMG+E6wdNfv5lhPqC3jjTIeljWU8AiruZLGRhl92QWcTjb3XonjaV6k9rf9adQtyv2FLS7bl2Vz2WgjJ0FJ5/qMaoXaT+oAgWFk2GypyvoIZsscsGpUStm6BxpWZpbPrGJR0N95un/130cQI9VCmfvgkkCaXt7TU1BbiYzkc8MDpLScGm/GUCB2wB5PclvOxvf5BR/zNVYywTEFmw2Jo0hIPPSWB5Yyf2mx950Fx8da56co/FxLdMwkDOO51Qg3fbaExQDVzTm8Odi++wVJEP1y34tlmpwFUVbAKIEbyyELmi/2S6GG0j9vNwIDAQAB"}],"isv_private_key":[{"store_type":"string","cert_type":"RSA2048","value":"MIIEvAIBADANBgkqhkiG9w0BAQEFAASCBKYwggSiAgEAAoIBAQCf0qRvP2OJQEONEHiO5Jh2tbGo6pA3Wh7cINgpKZHLHIygZHhB4sU/2JxHqbraRsuBzC2aeWCTrXJVKjQS91vn0JHJd4BonK4ryqTRWULQkPqvzFNz59qna5laWE/m1LriyMfSVsyTHGggqbCKtNorCW+DVnWtCJybo4HKeSqyHFw13EetSRkmVF+Y8TvDTkKZJuNlK5HXSithkSY9d4PZUyIkaF1HnogQPf+mmvPwSJuVvFxeupnG99wljP5Yv2FfD9xq+XoR5mSlTCFePWjKvocSmiaVcWwSk0jW6ks0XdlMLhHq6NeqLzX8Ze0wpzqcAEurZpOrmaQNFd2m+RXNAgMBAAECggEAdafmMZeiuQm8MP7tIZSbwNhlX4q+fGE10qvDNhpKIBJ2XCVaenZs62GVOxRyX/o6GuWqtMuiE1Vek9+r0kKTQAbFLGFzAJBHkClwSEXD8DKqufxbezo2N4X4sQ/OUopMwmM451nK5InHBjSlqJcW/RPHKhLeMnHiiJlIFTw5+D/DcnCBfJ7sLJw3/EM2WR5wbLguI+ExCkN1PovSBkGhvTLzJtBhMveBdM7/ajg5/edvIvU0spBmakPCCnVuek1asO95AYyo02psZ3//MMD3/li9wzZqeIGsFbALIOS/vLPh1qBozJIHYTPmO+mXx8VVYBK5QtCw6HwotD6J94VBQQKBgQD8MnsaHBUn28dTsg/aeSeQSjlX93czeu/nmlXCS1J6ctjBDPCL8wrPsVkjYsgH+uJTbAW3Cwuoov50A3BDZEWA+C3plZoXDIOlFEgA1dWPsrZONe27PjYNvlKphVBXb2mfPxoAcOtBBQBIfsBQIXGTB0pVkMDpVqnbOpEM7cGVGQKBgQCiO5UdaMoHHM9ZTicZdsg/6ZPS6ZtBS+7JRSQaosb66P6rib5YyfoYOBfUeswjrB/y5CXtkN4xd/gyAm1AVN5I4NPS7XQhvphfg+BBAJ7mixNwT7hkQek8pi20+TOlgbd1PmG4qvOEhgeMa9neuJCmGSw3rgfcu96+1YP3GOFI1QKBgDNUpv+idZ/eOMzNMjLac/YHVXKVGLruq8OtAwV/xTLNC1cHpjIl7q5lP2pXYbVWGBi4pNUjt2TEgBvm00O0Nf1RBi9D1tAYKPdBkIIzA7uyuS5kBZYVzHSxpyt/yeFx+MKD2mv6j7d1KCCZQ9VLaU1ur2+I/erAS+QmIH3MKpmJAoGAP15kpYMr/tE7ENgdH64tFAHp0uWa1kuRrx6JtrnEXXerGlgIeOgT/2fRrxZ0LK7sH9UMF5qRn+MLmIUoJYvA89iWBPrpdNDc9douO1XBu62xXxpUnRy9vQnwKpN4n/pmLa67PwXPbwFna2spQ/z1y1tj0S/yND9SB1qhXGBkhy0CgYBhJf0SZ9PWaasOxAsDgFsj3mSjfvoTqclRDKo1d0KFyOIKOkK3hS8ZaHA/dcR024ydc6b0mU+pyrm2/k+JuX4dHO1M9wshS1YAXytj5RCs+43ghJrbDeNxrNK4VesJPpyK0kEGHSLbMgHnSVZ4/jAgdoKEhz1cHbZorQ92XgDzBw=="}],"encrypt_key":"AWXI5fZGXmTFVHfjyzBMMrrk1IF9dCqGJt3JIZrKY90=","http_client":{"connect_timeout":10000,"read_timeout":30000,"max_conn_total":2000,"max_conn_per_route":1000}}', true);
        try {
            $appSdkConfig = new AppSdkConfig($data);
        } catch (YopClientException $e) {
            throw $e;
        }
        self::$client = OfflineClientBuilder::builder($appSdkConfig)->build();
    }

    /**
     * @test
     */
    public function bindTest()
    {
        $request = new Model\BindRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Offline\Model\YopBindTerminalRequestDto());
        try{
            $response = self::$client->bind($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling OfflineClient->bind: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function createAuxiliaryTerminalTest()
    {
        $request = new Model\CreateAuxiliaryTerminalRequest();

        $request->setTerminalName("terminalName_example");
        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setShopNo("shopNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setSerialNo("serialNo_example");
        $request->setTerminalType("terminalType_example");
        try{
            $response = self::$client->createAuxiliaryTerminal($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling OfflineClient->createAuxiliaryTerminal: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function createQrCodeTest()
    {
        $request = new Model\CreateQrCodeRequest();

        $request->setCount(56);
        $request->setParentMerchantNo("parentMerchantNo_example");
        try{
            $response = self::$client->createQrCode($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling OfflineClient->createQrCode: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function createQrcodeTest()
    {
        $request = new Model\CreateQrcodeRequest();

        $request->setCount(56);
        $request->setParentMerchantNo("parentMerchantNo_example");
        try{
            $response = self::$client->createQrcode($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling OfflineClient->createQrcode: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function createShopTest()
    {
        $request = new Model\CreateShopRequest();

        $request->setAddress("address_example");
        $request->setProvince("province_example");
        $request->setCity("city_example");
        $request->setDistrict("district_example");
        $request->setMobile("mobile_example");
        $request->setShopName("shopName_example");
        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setLinkman("linkman_example");
        $request->setMerchantNo("merchantNo_example");
        try{
            $response = self::$client->createShop($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling OfflineClient->createShop: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function downloadQrCodeTest()
    {
        $request = new Model\DownloadQrCodeRequest();

        $request->setQrCodeNo("qrCodeNo_example");
        $request->setParentMerchantNo("parentMerchantNo_example");
        try{
            $response = self::$client->downloadQrCode($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling OfflineClient->downloadQrCode: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function downloadQrcodeTest()
    {
        $request = new Model\DownloadQrcodeRequest();

        $request->setQrCodeNo("qrCodeNo_example");
        $request->setParentMerchantNo("parentMerchantNo_example");
        try{
            $response = self::$client->downloadQrcode($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling OfflineClient->downloadQrcode: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function getShopTest()
    {
        $request = new Model\GetShopRequest();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setShopName("shopName_example");
        $request->setShopNo("shopNo_example");
        $request->setStatus("status_example");
        try{
            $response = self::$client->getShop($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling OfflineClient->getShop: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function openQrCodeTest()
    {
        $request = new Model\OpenQrCodeRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Offline\Model\YopOpenQrCodeReqDTO());
        try{
            $response = self::$client->openQrCode($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling OfflineClient->openQrCode: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function openQrcodeTest()
    {
        $request = new Model\OpenQrcodeRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Offline\Model\YopOpenQrCodeReqDTO());
        try{
            $response = self::$client->openQrcode($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling OfflineClient->openQrcode: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function operateShopTest()
    {
        $request = new Model\OperateShopRequest();

        $request->setOperateType("operateType_example");
        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setShopNo("shopNo_example");
        $request->setMerchantNo("merchantNo_example");
        try{
            $response = self::$client->operateShop($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling OfflineClient->operateShop: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function queryAgentListTest()
    {
        $request = new Model\QueryAgentListRequest();

        $request->setAgentMerchantNo("agentMerchantNo_example");
        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setTerminalNo("terminalNo_example");
        $request->setSerialNo("serialNo_example");
        try{
            $response = self::$client->queryAgentList($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling OfflineClient->queryAgentList: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function queryOrderInfoTest()
    {
        $request = new Model\QueryOrderInfoRequest();

        $request->setOrderId("customerReNo1666686514009");
        $request->setMerchantNo("merchantNo_example");
        try{
            $response = self::$client->queryOrderInfo($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling OfflineClient->queryOrderInfo: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function queryPosTrxInfoTest()
    {
        $request = new Model\QueryPosTrxInfoRequest();

        $request->setOrderId("customerReNo1666686514009");
        $request->setMerchantNo("merchantNo_example");
        try{
            $response = self::$client->queryPosTrxInfo($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling OfflineClient->queryPosTrxInfo: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function queryQrCodeListTest()
    {
        $request = new Model\QueryQrCodeListRequest();

        $request->setPageNo(56);
        $request->setPageSize(56);
        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setQrCodeNo("qrCodeNo_example");
        $request->setShopNo("shopNo_example");
        $request->setBindStatus("bindStatus_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setStatus("status_example");
        try{
            $response = self::$client->queryQrCodeList($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling OfflineClient->queryQrCodeList: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function queryQrcodeListTest()
    {
        $request = new Model\QueryQrcodeListRequest();

        $request->setPageNo(56);
        $request->setPageSize(56);
        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setQrCodeNo("qrCodeNo_example");
        $request->setShopNo("shopNo_example");
        $request->setBindStatus("bindStatus_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setStatus("status_example");
        try{
            $response = self::$client->queryQrcodeList($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling OfflineClient->queryQrcodeList: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function queryShopBindListTest()
    {
        $request = new Model\QueryShopBindListRequest();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setShopNo("shopNo_example");
        $request->setTerminalType("POS");
        try{
            $response = self::$client->queryShopBindList($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling OfflineClient->queryShopBindList: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function relateBroadcastDeviceTest()
    {
        $request = new Model\RelateBroadcastDeviceRequest();

        $request->setQrCodeNo("qrCodeNo_example");
        $request->setOperateType("operateType_example");
        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setSerialNo("serialNo_example");
        try{
            $response = self::$client->relateBroadcastDevice($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling OfflineClient->relateBroadcastDevice: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function saveTerminalEmployeeTest()
    {
        $request = new Model\SaveTerminalEmployeeRequest();

        $request->setEmployeeName("employeeName_example");
        $request->setPassword("password_example");
        $request->setOperatorType("operatorType_example");
        $request->setEmployeeNo("employeeNo_example");
        $request->setEmployeeStatus("employeeStatus_example");
        $request->setMerchantNo("merchantNo_example");
        try{
            $response = self::$client->saveTerminalEmployee($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling OfflineClient->saveTerminalEmployee: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function unbindTest()
    {
        $request = new Model\UnbindRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Offline\Model\YopUnBindTerminalRequestDto());
        try{
            $response = self::$client->unbind($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling OfflineClient->unbind: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function unbindQrCodeTest()
    {
        $request = new Model\UnbindQrCodeRequest();

        $request->setQrCodeNo("qrCodeNo_example");
        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        try{
            $response = self::$client->unbindQrCode($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling OfflineClient->unbindQrCode: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function unbindQrcodeTest()
    {
        $request = new Model\UnbindQrcodeRequest();

        $request->setQrCodeNo("qrCodeNo_example");
        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        try{
            $response = self::$client->unbindQrcode($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling OfflineClient->unbindQrcode: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function updateAuxiliaryTerminalTest()
    {
        $request = new Model\UpdateAuxiliaryTerminalRequest();

        $request->setTerminalName("terminalName_example");
        $request->setSerialNo("serialNo_example");
        try{
            $response = self::$client->updateAuxiliaryTerminal($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling OfflineClient->updateAuxiliaryTerminal: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function updateQrCfgTest()
    {
        $request = new Model\UpdateQrCfgRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Offline\Model\YopUpdateQrCodeCfgReqDTO());
        try{
            $response = self::$client->updateQrCfg($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling OfflineClient->updateQrCfg: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function updateQrCodeStatusTest()
    {
        $request = new Model\UpdateQrCodeStatusRequest();

        $request->setQrCodeNo("qrCodeNo_example");
        $request->setOperateType("operateType_example");
        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        try{
            $response = self::$client->updateQrCodeStatus($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling OfflineClient->updateQrCodeStatus: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function updateQrcodeStatusTest()
    {
        $request = new Model\UpdateQrcodeStatusRequest();

        $request->setQrCodeNo("qrCodeNo_example");
        $request->setOperateType("operateType_example");
        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        try{
            $response = self::$client->updateQrcodeStatus($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling OfflineClient->updateQrcodeStatus: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function updateShopTest()
    {
        $request = new Model\UpdateShopRequest();

        $request->setAddress("address_example");
        $request->setMobile("mobile_example");
        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setShopNo("shopNo_example");
        $request->setLinkman("linkman_example");
        $request->setMerchantNo("merchantNo_example");
        try{
            $response = self::$client->updateShop($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling OfflineClient->updateShop: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function updateTerminalEmployeeTest()
    {
        $request = new Model\UpdateTerminalEmployeeRequest();

        $request->setResetPassword(56);
        $request->setPassword("password_example");
        $request->setOldPassword("oldPassword_example");
        $request->setEmployeeNo("employeeNo_example");
        $request->setMerchantNo("merchantNo_example");
        try{
            $response = self::$client->updateTerminalEmployee($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling OfflineClient->updateTerminalEmployee: ', $e->getMessage(), PHP_EOL;
        }
    }
}
