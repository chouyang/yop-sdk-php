<?php


namespace Yeepay\Yop\Sdk\Service\Pos;


use PHPUnit\Framework\TestCase;
use Yeepay\Yop\Sdk\Config\AppSdkConfig;
use Yeepay\Yop\Sdk\Exception\YopClientException;
use Yeepay\Yop\Sdk\Service\Pos\Model as Model;

class PosClientTest extends TestCase
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
        self::$client = PosClientBuilder::builder($appSdkConfig)->build();
    }

    /**
     * @test
     */
    public function getPosInfoDtosTest()
    {
        $request = new Model\GetPosInfoDtosRequest();

        $request->setCustomerNumber("customerNumber_example");
        $request->setPosCati("0000010484250011");
        $request->setSerialNumber("15706413");
        $request->setShopName("shopName_example");
        try{
            $response = self::$client->getPosInfoDtos($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling PosClient->getPosInfoDtos: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function getPosInfoDtosTest1Test()
    {
        $request = new Model\GetPosInfoDtosTest1Request();

        $request->setCustomerNumber("customerNumber_example");
        $request->setPosCati("0000010484250011");
        $request->setSerialNumber("15706413");
        $request->setShopName("shopName_example");
        try{
            $response = self::$client->getPosInfoDtosTest1($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling PosClient->getPosInfoDtosTest1: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function installPosWithProductTest()
    {
        $request = new Model\InstallPosWithProductRequest();

        $request->setCustomerNumber("customerNumber_example");
        $request->setShopStr("{     \"shopStr\": \"[{\"linkman\":\"XX联系人\",\"name\":\"测试商户A网点\",\"province\":\"北京\",\"city\":\"北京市\",\"county\":\"朝阳区\",\"address\":\"朝外大街XXX号\"}]\" }");
        $request->setPosStr("posStr_example");
        $request->setProductCode("productCode_example");
        $request->setExternalMcc("externalMcc_example");
        $request->setCustomerType("customerType_example");
        $request->setShopList(array("shopList_example"));
        $request->setPosList(array("posList_example"));
        try{
            $response = self::$client->installPosWithProduct($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling PosClient->installPosWithProduct: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function installPosWithProductTest1Test()
    {
        $request = new Model\InstallPosWithProductTest1Request();

        $request->setCustomerNumber("customerNumber_example");
        $request->setShopStr("{     \"shopStr\": \"[{\"linkman\":\"XX联系人\",\"name\":\"测试商户A网点\",\"province\":\"北京\",\"city\":\"北京市\",\"county\":\"朝阳区\",\"address\":\"朝外大街XXX号\"}]\" }");
        $request->setPosStr("posStr_example");
        $request->setProductCode("productCode_example");
        $request->setExternalMcc("externalMcc_example");
        $request->setCustomerType("customerType_example");
        $request->setShopList(array("shopList_example"));
        $request->setPosList(array("posList_example"));
        try{
            $response = self::$client->installPosWithProductTest1($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling PosClient->installPosWithProductTest1: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function unSynBindPosTest()
    {
        $request = new Model\UnSynBindPosRequest();

        $request->setPoscati("0000010484250011");
        $request->setCustomerNumber("customerNumber_example");
        try{
            $response = self::$client->unSynBindPos($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling PosClient->unSynBindPos: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function unSynBindPosTest1Test()
    {
        $request = new Model\UnSynBindPosTest1Request();

        $request->setPoscati("0000010484250011");
        $request->setCustomerNumber("customerNumber_example");
        try{
            $response = self::$client->unSynBindPosTest1($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling PosClient->unSynBindPosTest1: ', $e->getMessage(), PHP_EOL;
        }
    }
}
