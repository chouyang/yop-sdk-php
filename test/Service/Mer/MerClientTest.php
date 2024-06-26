<?php


namespace Yeepay\Yop\Sdk\Service\Mer;


use PHPUnit\Framework\TestCase;
use Yeepay\Yop\Sdk\Config\AppSdkConfig;
use Yeepay\Yop\Sdk\Exception\YopClientException;
use Yeepay\Yop\Sdk\Service\Mer\Model as Model;

class MerClientTest extends TestCase
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
        self::$client = MerClientBuilder::builder($appSdkConfig)->build();
    }

    /**
     * @test
     */
    public function authStateQueryV2Test()
    {
        $request = new Model\AuthStateQueryV2Request();

        $request->setMerchantNo("merchantNo_example");
        $request->setReportMerchantNo("reportMerchantNo_example");
        $request->setFeeType("feeType_example");
        $request->setQueryStrategy("queryStrategy_example");
        $request->setPageNum("pageNum_example");
        $request->setPageSize("pageSize_example");
        try{
            $response = self::$client->authStateQueryV2($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MerClient->authStateQueryV2: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function bankAccountOpenTest()
    {
        $request = new Model\BankAccountOpenRequest();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setBusinessPlacePhoto("businessPlacePhoto_example");
        $request->setNotifyUrl("notifyUrl_example");
        $request->setDeviceip("deviceip_example");
        $request->setToken("token_example");
        $request->setMerchantSubjectInfo("{\"busStartDate\":\"商户证件有效期起始日期\",\"busEndDate\":\"商户证件有效期截止日期\",\"magAddress\":\"注册地址\",\"magScope\":\"经营范围\"}");
        $request->setSettlementAccountInfo("{\"bankCode\":\"银行账户开户总行编码\",\"bankCardNo\":\"银行账户号码\"}");
        $request->setMerchantCorporationInfo("{\"legalStartDate\":\"法人证件有效期起始日期\",\"legalEndDate\":\"法人证件有效期截止日期\",\"legalMobile\":\"法人手机号\"}");
        $request->setMerchantContactInfo("{\"contactName\":\"\",\"contactLicenceType\":\"\",\"contactLicenceNo\":\"\",\"contactMobile\":\"\",\"contactLicenceStartDate\":\"\",\"contactLicenceEndDate\":\"\",\"contactLicenceFrontUrl\":\"\",\"contactLicenceBackUrl\":\"\"}");
        $request->setShareholdersInfo("[{\"shareholdersType\":\"\",\"shareholdersName\":\"\",\"shareholdersNo\":\"\",\"shareholdersRatio\":\"\",\"shareholdersLicenceUrl\":\"\",\"shareholdersEndDate\":\"\",\"shareholdersIdCardFrontUrl\":\"\",\"shareholdersIdCardBackUrl\":\"\"}]");
        $request->setBeneficiaryInfo("[{\"benefName\":\"\",\"benefNo\":\"\",\"benefAddress\":\"\",\"benefIdCardFrontUrl\":\"\",\"benefIdCardBackUrl\":\"\",\"benefEndDate\":\"\"}]");
        $request->setRequestNo("requestNo_example");
        try{
            $response = self::$client->bankAccountOpen($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MerClient->bankAccountOpen: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function bankAccountOpenQueryTest()
    {
        $request = new Model\BankAccountOpenQueryRequest();

        $request->setMerchantNo("merchantNo_example");
        try{
            $response = self::$client->bankAccountOpenQuery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MerClient->bankAccountOpenQuery: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function bossRegisterContributeDivideV2Test()
    {
        $request = new Model\BossRegisterContributeDivideV2Request();

        $request->setRequestNo("YBRWQQH20231113XXXXXX");
        $request->setBusinessRole("SETTLED_MERCHANT");
        $request->setNotifyUrl("https://notify.merchant.com/xxx");
        $request->setMerchantSubjectInfo("{ \"licenceUrl\":\"商户证件照片地址\", \"signName\":\"商户签约名\", \"signType\":\"商户签约类型\", \"licenceNo\":\"商户证件号码\", \"shortName\":\"商户简称\" }");
        $request->setMerchantCorporationInfo("{ \"legalName\":\"法人名称\", \"legalLicenceType\":\"法人证件类型\", \"legalLicenceNo\":\"法人证件编号\", \"legalLicenceFrontUrl\":\"法人证件正面照片地址\", \"legalLicenceBackUrl\":\"法人证件背面照片地址\" }");
        $request->setMerchantContactInfo("{ \"contactName\":\"联系人姓名\", \"contactMobile\":\"联系人手机号\", \"contactEmail\":\"联系人邮箱\", \"contactLicenceNo\":\"联系人证件号码\"}");
        $request->setIndustryCategoryInfo("{ \"primaryIndustryCategory\":\"一级行业分类编码\", \"secondaryIndustryCategory\":\"二级行业分类编码\" }");
        $request->setBusinessAddressInfo("{ \"province\":\"经营省编码\", \"city\":\"经营市编码\", \"district\":\"经营区编码\", \"address\":\"经营地址\" }");
        $request->setProductInfo("[{\"rateType\":\"SINGLE_FIXED\",\"productCode\":\"D1\",\"fixedRate\":\"0\",\"paymentMethod\":\"REAL_TIME\",\"undertaker\":\"PLATFORM_MERCHANT\"},{\"rateType\":\"SINGLE_PERCENT\",\"productCode\":\"USER_SCAN_WECHAT_OFFLINE\",\"fixedRate\":\"1\",\"paymentMethod\":\"REAL_TIME\",\"percentRate\":\"11\",\"undertaker\":\"PLATFORM_MERCHANT\"},{\"rateType\":\"SINGLE_PERCENT\",\"productCode\":\"MERCHANT_SCAN_WECHAT_OFFLINE\",\"fixedRate\":\"1\",\"paymentMethod\":\"REAL_TIME\",\"percentRate\":\"1\",\"undertaker\":\"PLATFORM_MERCHANT\"},{\"rateType\":\"SINGLE_PERCENT\",\"productCode\":\"WECHAT_OFFIACCOUNT_WECHAT_OFFLINE\",\"fixedRate\":\"1\",\"paymentMethod\":\"REAL_TIME\",\"percentRate\":\"1\",\"undertaker\":\"PLATFORM_MERCHANT\"},{\"rateType\":\"SINGLE_PERCENT\",\"productCode\":\"USER_SCAN_ALIPAY_OFFLINE\",\"paymentMethod\":\"REAL_TIME\",\"minRate\":\"1\",\"percentRate\":\"1\",\"undertaker\":\"PLATFORM_MERCHANT\"},{\"rateType\":\"SINGLE_FIXED\",\"productCode\":\"ENTERPRISE_PAYMENT_REALTIME_PUBLIC\",\"fixedRate\":\"10\",\"paymentMethod\":\"REAL_TIME\",\"minRate\":\"1\",\"undertaker\":\"PLATFORM_MERCHANT\"},{\"rateType\":\"SINGLE_FIXED\",\"productCode\":\"ENTERPRISE_PAYMENT_REALTIME_PRIVATE\",\"fixedRate\":\"10\",\"paymentMethod\":\"REAL_TIME\",\"minRate\":\"1\",\"undertaker\":\"PLATFORM_MERCHANT\"}]");
        $request->setProductQualificationInfo("{ \"paymentScene\": \"RLZYFW\", \"systemScreenshotUrl\": \"https://staticres.yeepay.com/xxx.文件后缀\", \"specialPermitProcessUrl\": \"https://staticres.yeepay.com/xxx.文件后缀\", \"agreementPhotoUrl\": \"https://staticres.yeepay.com/xxx.文件后缀\" }");
        $request->setFunctionService("[\"BACKUP\"]");
        $request->setFunctionServiceQualificationInfo("{\"alipayBackupCount\":\"5\",\"wechatBackupCount\":\"30\"}");
        $request->setDivideConfigInfo("{\"publicAccountInfo\":{\"bankCode\":\"bankCode\",\"bankCardNo\":\"bankCardNo\",\"accountType\":\"ENTERPRISE_ACCOUNT\",\"settleRatio\":\"50\"},\"receiverInfo\":[{\"receiverType\":\"TO_PRIVATE\",\"receiverName\":\"receiverName \",\"licenceNo\":\"licenceNo\",\"accountLabel\":\"API测试\",\"settleCardInfo\":[{\"bankCode\":\"bankCode\",\"bankCardNo\":\"bankCardNo\",\"mobile\":\"mobile\",\"settleRatio\":\"30.00\"}]},{\"legalName\":\"legalName\",\"legalLicenceNo\":\"legalLicenceNo\",\"receiverType\":\"TO_PUBLIC\",\"receiverName\":\"receiverName\",\"licenceNo\":\"licenceNo\",\"accountLabel\":\"API测试1\",\"settleCardInfo\":[{\"bankCode\":\"bankCode\",\"bankCardNo\":\"bankCardNo\",\"settleRatio\":\"20.00\"}]}],\"toPublicDivideUrl\":\"对公分账资质文件url\",\"divideMode\":\"AUTO\"}");
        try{
            $response = self::$client->bossRegisterContributeDivideV2($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MerClient->bossRegisterContributeDivideV2: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function bossRegisterContributeStandardV2Test()
    {
        $request = new Model\BossRegisterContributeStandardV2Request();

        $request->setRequestNo("YBRWQQH20231113XXXXXX");
        $request->setBusinessRole("ORDINARY_MERCHANT");
        $request->setNotifyUrl("https://notify.merchant.com/xxx");
        $request->setMerchantSubjectInfo("merchantSubjectInfo_example");
        $request->setMerchantCorporationInfo("示例值：{ \"legalName\":\"法人名称\", \"legalLicenceType\":\"法人证件类型\", \"legalLicenceNo\":\"法人证件编号\", \"legalLicenceFrontUrl\":\"法人证件正面照片地址\", \"legalLicenceBackUrl\":\"法人证件背面照片地址\" }");
        $request->setMerchantContactInfo("{ \"contactName\":\"联系人姓名\", \"contactMobile\":\"联系人手机号\", \"contactEmail\":\"联系人邮箱\", \"contactLicenceNo\":\"联系人证件号码\"}");
        $request->setSettlementAccountInfo("{ \"settlementDirection\":\"结算方向\", \"bankCode\":\"开户总行编码\", \"bankAccountType\":\"银行账户类型\", \"bankCardNo\":\"银行账户号码\" }");
        $request->setIndustryCategoryInfo("{ \"primaryIndustryCategory\":\"一级行业分类编码\", \"secondaryIndustryCategory\":\"二级行业分类编码\" }");
        $request->setBusinessAddressInfo("{ \"province\":\"经营省编码\", \"city\":\"经营市编码\", \"district\":\"经营区编码\", \"address\":\"经营地址\" }");
        $request->setProductInfo("[{\"rateType\":\"SINGLE_FIXED\",\"productCode\":\"D1\",\"fixedRate\":\"0\",\"paymentMethod\":\"REAL_TIME\",\"undertaker\":\"SETTLED_MERCHANT\"},{\"rateType\":\"SINGLE_PERCENT\",\"productCode\":\"USER_SCAN_WECHAT_OFFLINE\",\"fixedRate\":\"1\",\"paymentMethod\":\"REAL_TIME\",\"percentRate\":\"11\",\"undertaker\":\"SETTLED_MERCHANT\"},{\"rateType\":\"SINGLE_PERCENT\",\"productCode\":\"MERCHANT_SCAN_WECHAT_OFFLINE\",\"fixedRate\":\"1\",\"paymentMethod\":\"REAL_TIME\",\"percentRate\":\"1\",\"undertaker\":\"SETTLED_MERCHANT\"},{\"rateType\":\"SINGLE_PERCENT\",\"productCode\":\"WECHAT_OFFIACCOUNT_WECHAT_OFFLINE\",\"fixedRate\":\"1\",\"paymentMethod\":\"REAL_TIME\",\"percentRate\":\"1\",\"undertaker\":\"SETTLED_MERCHANT\"},{\"rateType\":\"SINGLE_PERCENT\",\"productCode\":\"USER_SCAN_ALIPAY_OFFLINE\",\"paymentMethod\":\"REAL_TIME\",\"minRate\":\"1\",\"percentRate\":\"1\",\"undertaker\":\"SETTLED_MERCHANT\"}]");
        $request->setProductQualificationInfo("{ \"paymentScene\": \"RLZYFW\", \"systemScreenshotUrl\": \"https://staticres.yeepay.com/xxx.文件后缀\", \"specialPermitProcessUrl\": \"https://staticres.yeepay.com/xxx.文件后缀\", \"agreementPhotoUrl\": \"https://staticres.yeepay.com/xxx.文件后缀\" }");
        $request->setFunctionService("[\"SHARE\",\"BACKUP\"]");
        $request->setFunctionServiceQualificationInfo("{\"shareScene\":\"FZ_FJ001\",\"shareCertificate\":\"https://staticres.yeepay.com/xxx.文件后缀\",\"alipayBackupCount\":\"5\",\"wechatBackupCount\":\"30\"}");
        try{
            $response = self::$client->bossRegisterContributeStandardV2($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MerClient->bossRegisterContributeStandardV2: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function bossRegisterQueryV2Test()
    {
        $request = new Model\BossRegisterQueryV2Request();

        $request->setRequestNo("requestNo_example");
        try{
            $response = self::$client->bossRegisterQueryV2($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MerClient->bossRegisterQueryV2: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function mer_qualification_supplementTest()
    {
        $request = new Model\MerQualificationSupplementRequest();

        $request->setRequestNo("requestNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setQualifications("[     {         \"qualificationType\": \"授权书类型\",         \"qualificationAddressUrl\": \"授权书地址\"     },     {         \"qualificationType\": \"保理协议类型\",         \"qualificationAddressUrl\": \"保理协议地址 \"     } ]");
        try{
            $response = self::$client->mer_qualification_supplement($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MerClient->mer_qualification_supplement: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function merchantDisposeQueryTest()
    {
        $request = new Model\MerchantDisposeQueryRequest();

        $request->setRequestNo("requestNo_example");
        $request->setApplicationNo("applicationNo_example");
        try{
            $response = self::$client->merchantDisposeQuery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MerClient->merchantDisposeQuery: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function merchantDisposeUnfreezeTest()
    {
        $request = new Model\MerchantDisposeUnfreezeRequest();

        $request->setRequestNo("requestNo_example");
        $request->setNotifyUrl("notifyUrl_example");
        $request->setMerchantNo("merchantNo_example");
        try{
            $response = self::$client->merchantDisposeUnfreeze($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MerClient->merchantDisposeUnfreeze: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function merchantInfoModifyTest()
    {
        $request = new Model\MerchantInfoModifyRequest();

        $request->setRequestNo("a04cf8bded8b4413a43ab455b21eedcd");
        $request->setMerchantNo("merchantNo_example");
        $request->setNotifyUrl("notifyUrl_example");
        $request->setMerchantSubjectInfo("{ \"licenceUrl\":\"商户证件照片地址\", \"signName\":\"商户签约名\", \"licenceNo\":\"商户证件号码\", \"shortName\":\"商户简称\" }");
        $request->setMerchantCorporationInfo("{ \"legalName\":\"法人名称\", \"legalLicenceType\":\"ID_CARD\", \"legalLicenceNo\":\"法人证件编号\", \"legalLicenceFrontUrl\":\"法人证件人像面照片地址\", \"legalLicenceBackUrl\":\"法人证件非人像面照片地址\" }");
        $request->setMerchantContactInfo("{ \"contactName\":\"联系人姓名\", \"contactMobile\":\"联系人手机号\", \"contactEmail\":\"联系人邮箱\", \"contactLicenceNo\":\"联系人证件号码\" ,\"servicePhone\":\"客服电话\"}");
        $request->setIndustryCategoryInfo("{ \"primaryIndustryCategory\":\"一级行业分类编码\", \"secondaryIndustryCategory\":\"二级行业分类编码\" }");
        $request->setBusinessAddressInfo("{ \"province\":\"经营省\", \"city\":\"经营市\", \"district\":\"经营区\", \"address\":\"经营地址\" }");
        $request->setAccountInfo("{\"bankAccountName\":\"开户名称\",\"bankAccountType\":\"银行账户类型\",\"bankCardNo\":\"银行账户号码\",\"bankCardTag\":\"[\\\"SETTLEMENT\\\",\\\"WITHDRAW\\\"]\",\"authorizationUrl\":\"https://staticres.yeepay.com/xxx.文件后缀\",\"bankCode\":\"开户总行编码\"}");
        $request->setBankToken("{ \"deviceIp\":\"交易ip\", \"token\":\"交易口令\"}");
        try{
            $response = self::$client->merchantInfoModify($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MerClient->merchantInfoModify: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function merchantSupplementQualificationQueryTest()
    {
        $request = new Model\MerchantSupplementQualificationQueryRequest();

        $request->setMerchantNo("merchantNo_example");
        try{
            $response = self::$client->merchantSupplementQualificationQuery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MerClient->merchantSupplementQualificationQuery: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function merchantSupplementQualificationSubmitTest()
    {
        $request = new Model\MerchantSupplementQualificationSubmitRequest();

        $request->setMerchantNo("1234567890");
        $request->setQualifications("[   {     \"value\": \"https://staticres.yeepay.com/xxx.文件后缀\",     \"key\": \"LEGAL_LICENCE_FRONT_URL\"   },   {     \"value\": \"https://staticres.yeepay.com/xxx.文件后缀\",     \"key\": \"LEGAL_LICENCE_BACK_URL\"   } ]");
        try{
            $response = self::$client->merchantSupplementQualificationSubmit($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MerClient->merchantSupplementQualificationSubmit: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function merchantWechatauthCancelTest()
    {
        $request = new Model\MerchantWechatauthCancelRequest();

        $request->setApplymentId("applymentId_example");
        $request->setRequestNo("requestNo_example");
        $request->setSubMerchantNo("subMerchantNo_example");
        $request->setReportFee("reportFee_example");
        $request->setChannelId("channelId_example");
        try{
            $response = self::$client->merchantWechatauthCancel($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MerClient->merchantWechatauthCancel: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function merchantWechatauthQueryTest()
    {
        $request = new Model\MerchantWechatauthQueryRequest();

        $request->setApplymentId("applymentId_example");
        $request->setSubMerchantNo("subMerchantNo_example");
        $request->setReportFee("reportFee_example");
        $request->setRequestNo("requestNo_example");
        try{
            $response = self::$client->merchantWechatauthQuery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MerClient->merchantWechatauthQuery: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function notifyRepeatV2Test()
    {
        $request = new Model\NotifyRepeatV2Request();

        $request->setRequestNo("requestNo_example");
        $request->setApplicationNo("applicationNo_example");
        $request->setType("type_example");
        try{
            $response = self::$client->notifyRepeatV2($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MerClient->notifyRepeatV2: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function productFeeModifyV2Test()
    {
        $request = new Model\ProductFeeModifyV2Request();

        $request->setRequestNo("requestNo_example");
        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setNotifyUrl("notifyUrl_example");
        $request->setProductInfo("[{\"productCode\":\"MERCHANT_SCAN_ALIPAY_OFFLINE\",\"rateType\":\"SINGLE_PERCENT\",\"percentRate\":\"0.1\",\"undertaker\":\"PLATFORM_MERCHANT\",\"paymentMethod\":\"REAL_TIME\"}]");
        $request->setProductQualificationInfo("{\"mcc\":\"7829\",\"paymentScene\":\"RLZYFW\",\"systemScreenshotUrl\":\"https://staticres.yeepay.com/xxx.文件后缀\",\"specialPermitProcessUrl\":\"https://staticres.yeepay.com/xxx.文件后缀\",\"agreementPhotoUrl\":\"https://staticres.yeepay.com/xxx.文件后缀\"}");
        $request->setSettlementAccountInfo("{ \"settlementDirection\":\"结算方向\", \"bankCode\":\"开户总行编码\", \"bankAccountType\":\"银行账户类型\", \"bankCardNo\":\"银行账户号码\" }");
        $request->setFunctionService("[\"SHARE\"]");
        $request->setFunctionServiceQualificationInfo("{\"shareScene\":\"FZ_FJ001\",\"shareCertificate\":\"https://staticres.yeepay.com/xxx.文件后缀\"}");
        try{
            $response = self::$client->productFeeModifyV2($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MerClient->productFeeModifyV2: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function productFeeQueryV2Test()
    {
        $request = new Model\ProductFeeQueryV2Request();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setProductCode("MERCHANT_SCAN_ALIPAY_OFFLINE");
        try{
            $response = self::$client->productFeeQueryV2($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MerClient->productFeeQueryV2: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function productIncrementSettleOpenV2Test()
    {
        $request = new Model\ProductIncrementSettleOpenV2Request();

        $request->setRequestNo("requestNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setProductInfo("[{\"productCode\":\"S0\",\"rateType\":\"FIXED_MIX_PERCENT\",\"percentRate\":\"0.1\",\"fixedRate\":\"111\"}]");
        $request->setNotifyUrl("notifyUrl_example");
        try{
            $response = self::$client->productIncrementSettleOpenV2($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MerClient->productIncrementSettleOpenV2: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function productModifyQueryV2Test()
    {
        $request = new Model\ProductModifyQueryV2Request();

        $request->setRequestNo("0adc579914d541f8baa3be75387846f1");
        try{
            $response = self::$client->productModifyQueryV2($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MerClient->productModifyQueryV2: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function qualificationSupplementTest()
    {
        $request = new Model\QualificationSupplementRequest();

        $request->setRequestNo("requestNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setQualifications("[     {         \"qualificationType\": \"授权书类型\",         \"qualificationAddressUrl\": \"授权书地址\"     },     {         \"qualificationType\": \"保理协议类型\",         \"qualificationAddressUrl\": \"保理协议地址 \"     } ]");
        try{
            $response = self::$client->qualificationSupplement($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MerClient->qualificationSupplement: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function qualificationSupplementaryTest()
    {
        $request = new Model\QualificationSupplementaryRequest();

        $request->setRequestNo("requestNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setRegistAddress("registAddress_example");
        $request->setManageSection("manageSection_example");
        $request->setCorporationFrontUrl("corporationFrontUrl_example");
        $request->setCorporationBackUrl("corporationBackUrl_example");
        $request->setCorporationExpiryDate("corporationExpiryDate_example");
        $request->setQualificationUrl("qualificationUrl_example");
        $request->setQualificationExpiryDate("qualificationExpiryDate_example");
        try{
            $response = self::$client->qualificationSupplementary($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MerClient->qualificationSupplementary: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function registerAbroadContributeMerchantV2Test()
    {
        $request = new Model\RegisterAbroadContributeMerchantV2Request();

        $request->setRequestNo("0a0c579914d541f8b7a3be75387846f1");
        $request->setMerchantSubjectInfo("{         \"licenceUrl\":\"商户证件照片地址\",         \"signName\":\"商户签约名\",         \"signType\":\"商户签约类型\",         \"licenceNo\":\"商户证件号码\",         \"shortName\":\"商户简称\"     }");
        $request->setMerchantCorporationInfo("{ \"legalName\":\"法人名称\", \"legalLicenceType\":\"法人证件类型\", \"legalLicenceNo\":\"法人证件编号\", \"legalLicenceFrontUrl\":\"法人证件人像面照片地址\", \"legalLicenceBackUrl\":\"法人证件非人像面照片地址\" }");
        $request->setMerchantContactInfo("{ \"contactName\":\"联系人姓名\", \"contactMobile\":\"联系人手机号\", \"contactEmail\":\"联系人邮箱\", \"contactLicenceNo\":\"联系人证件号码\" ,\"servicePhone\":\"客服电话\",\"adminEmail\":\"商户后台管理员邮箱\",\"adminMobile\":\"商户后台管理员手机号\" }");
        $request->setIndustryCategoryInfo("{\"merchantClassification\":\"商户所属分类\",\"merchantClassificationOther\":\"商户所属分类其他\",\"primaryIndustryCategory\":\"一级行业分类编码\",\"secondaryIndustryCategory\":\"二级行业分类编码\"}");
        $request->setBusinessAddressInfo("{\"registerNation\":\"注册国家或地区数字码\",\"merchantNation\":\"经营地国家或地区数字码\",\"registerAddress\":\"商户实际注册详细地址\",\"province\":\"经营省\",\"city\":\"经营市\",\"district\":\"经营区\",\"address\":\"经营地址\"}");
        $request->setSettlementAccountInfo("{\"bankAccountName\":\"账户名\",\"settlementDirection\":\"结算方向\",\"bankCode\":\"开户总行编码\",\"bankAccountType\":\"银行账户类型\",\"bankCardNo\":\"银行账户号码\",\"bankBranch\":\"开户支行\",\"bankProProvince\":\"开户省\",\"bankProCity\":\"开户市\",\"bankProDistrict\":\"开户区\"}");
        $request->setNotifyUrl("https://notify.merchant.com/xxx");
        $request->setProductInfo("[{\"productCode\":\"MERCHANT_SCAN_ALIPAY_OFFLINE\",\"rateType\":\"SINGLE_PERCENT\",\"percentRate\":\"0.1\"},{\"productCode\":\"MERCHANT_SCAN_UNIONPAY_CREDIT\",\"rateType\":\"SINGLE_FIXED\",\"fixedRate\":\"1\"},{\"productCode\":\"T1\",\"rateType\":\"SINGLE_PERCENT\",\"percentRate\":\"0.1\"}]");
        $request->setProductQualificationInfo("{\"mcc\":\"7829\",\"paymentScene\":\"RLZYFW\",\"systemScreenshotUrl\":\"https://staticres.yeepay.com/xxx.文件后缀\",\"specialPermitProcessUrl\":\"https://staticres.yeepay.com/xxx.文件后缀\",\"agreementPhotoUrl\":\"https://staticres.yeepay.com/xxx.文件后缀\"}");
        $request->setFunctionService("[\"SHARE\"]");
        $request->setFunctionServiceQualificationInfo("{\"shareScene\":\"FZ_FJ001\",\"shareCertificate\":\"https://staticres.yeepay.com/xxx.文件后缀\"}");
        $request->setDirectorInfos("{\"licenceExpired\":\"证件到期日\",\"gender\":\"性别\",\"licenceType\":\"证件类型\",\"name\":\"姓名\",\"licenceBackUrl\":\"证件非人像面\",\"licenceNo\":\"证件编号\",\"licenceFrontUrl\":\"证件人像面\"}");
        $request->setPubDeclareInfo("{\"isPubDeclare\":\"是否对公申报\",\"areaCodeProvice\":\"营业场所代码(省)\",\"areaCodeCity\":\"营业场所代码(市)\",\"areaCodeDistrict\":\"营业场所代码(区)\",\"attrCode\":\"经济类型代码\",\"postCode\":\"邮政编码\"}");
        $request->setAbroadProductInfo("[{\"productCode\":\"MERCHANT_SCAN_ALIPAY_OFFLINE\",\"rateType\":\"SINGLE_PERCENT\",\"percentRate\":\"0.1\"},{\"productCode\":\"MERCHANT_SCAN_UNIONPAY_CREDIT\",\"rateType\":\"SINGLE_FIXED\",\"fixedRate\":\"1\"},{\"productCode\":\"T1\",\"rateType\":\"SINGLE_PERCENT\",\"percentRate\":\"0.1\"}]");
        $request->setAbroadProductQualificationInfo("{\"mcc\":\"7829\",\"paymentScene\":\"RLZYFW\",\"systemScreenshotUrl\":\"https://staticres.yeepay.com/xxx.文件后缀\",\"specialPermitProcessUrl\":\"https://staticres.yeepay.com/xxx.文件后缀\",\"agreementPhotoUrl\":\"https://staticres.yeepay.com/xxx.文件后缀\"}");
        $request->setShareholderInfos("{\"licenceExpired\":\"证件到期日\",\"gender\":\"性别\",\"licenceType\":\"证件类型\",\"name\":\"姓名\",\"licenceBackUrl\":\"证件非人像面\",\"licenceNo\":\"证件编号\",\"licenceFrontUrl\":\"证件人像面\",\"equityRatio\":\"股权比例\"}");
        $request->setSeniorInfos("{\"licenceExpired\":\"证件到期日\",\"gender\":\"性别\",\"licenceType\":\"证件类型\",\"name\":\"姓名\",\"licenceBackUrl\":\"证件非人像面\",\"licenceNo\":\"证件编号\",\"licenceFrontUrl\":\"证件人像面\",\"equityRatio\":\"股权比例\"}");
        $request->setBeneficialInfos("{\"licenceExpired\":\"证件到期日\",\"gender\":\"性别\",\"licenceType\":\"证件类型\",\"name\":\"姓名\",\"licenceBackUrl\":\"证件非人像面\",\"licenceNo\":\"证件编号\",\"licenceFrontUrl\":\"证件人像面\",\"equityRatio\":\"股权比例\"}");
        try{
            $response = self::$client->registerAbroadContributeMerchantV2($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MerClient->registerAbroadContributeMerchantV2: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function registerAbroadQueryV2Test()
    {
        $request = new Model\RegisterAbroadQueryV2Request();

        $request->setRequestNo("0adc579914d541f8baa3be75387846f1");
        try{
            $response = self::$client->registerAbroadQueryV2($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MerClient->registerAbroadQueryV2: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function registerContributeIndexV2Test()
    {
        $request = new Model\RegisterContributeIndexV2Request();

        $request->setRequestNo("示例值：REQ6437657876");
        $request->setNotifyUrl("示例值：http://www.shili111.com");
        $request->setReturnUrl("示例值：http://www.shili.com");
        $request->setMobile("159****8288");
        $request->setName("示例值：张三");
        $request->setIdCardNo("示例值：430422199001236704");
        $request->setWalletUserNo("示例值：User89849");
        try{
            $response = self::$client->registerContributeIndexV2($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MerClient->registerContributeIndexV2: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function registerContributeMerchantV2Test()
    {
        $request = new Model\RegisterContributeMerchantV2Request();

        $request->setRequestNo("YBRWQQH20210622XXXXXX");
        $request->setBusinessRole("SETTLED_MERCHANT");
        $request->setMerchantSubjectInfo("{         \"licenceUrl\":\"商户证件照片地址\",         \"signName\":\"商户签约名\",         \"signType\":\"商户签约类型\",         \"licenceNo\":\"商户证件号码\",         \"shortName\":\"商户简称\"     }");
        $request->setMerchantCorporationInfo("{ \"legalName\":\"法人名称\", \"legalLicenceType\":\"法人证件类型\", \"legalLicenceNo\":\"法人证件编号\", \"legalLicenceFrontUrl\":\"法人证件人像面照片地址\", \"legalLicenceBackUrl\":\"法人证件非人像面照片地址\" }");
        $request->setMerchantContactInfo("{ \"contactName\":\"联系人姓名\", \"contactMobile\":\"联系人手机号\", \"contactEmail\":\"联系人邮箱\", \"contactLicenceNo\":\"联系人证件号码\" ,\"servicePhone\":\"客服电话\",\"adminEmail\":\"商户后台管理员邮箱\",\"adminMobile\":\"商户后台管理员手机号\" }");
        $request->setIndustryCategoryInfo("{ \"primaryIndustryCategory\":\"一级行业分类编码\", \"secondaryIndustryCategory\":\"二级行业分类编码\" }");
        $request->setBusinessAddressInfo("{ \"province\":\"经营省\", \"city\":\"经营市\", \"district\":\"经营区\", \"address\":\"经营地址\" }");
        $request->setSettlementAccountInfo("{ \"settlementDirection\":\"结算方向\", \"bankCode\":\"开户总行编码\",\"cnapsCode\":\"联行号\", \"bankAccountType\":\"银行账户类型\", \"bankCardNo\":\"银行账户号码\"}");
        $request->setNotifyUrl("https://notify.merchant.com/xxx");
        $request->setProductInfo("[{\"productCode\":\"MERCHANT_SCAN_ALIPAY_OFFLINE\",\"rateType\":\"SINGLE_PERCENT\",\"percentRate\":\"0.1\"},{\"productCode\":\"MERCHANT_SCAN_UNIONPAY_CREDIT\",\"rateType\":\"SINGLE_FIXED\",\"fixedRate\":\"1\"},{\"productCode\":\"T1\",\"rateType\":\"SINGLE_PERCENT\",\"percentRate\":\"0.1\"}]");
        $request->setProductQualificationInfo("{\"mcc\":\"7829\",\"paymentScene\":\"RLZYFW\",\"systemScreenshotUrl\":\"https://staticres.yeepay.com/xxx.文件后缀\",\"specialPermitProcessUrl\":\"https://staticres.yeepay.com/xxx.文件后缀\",\"agreementPhotoUrl\":\"https://staticres.yeepay.com/xxx.文件后缀\"}");
        $request->setFunctionService("[\"SHARE\",\"BACKUP\"]");
        $request->setFunctionServiceQualificationInfo("{\"shareScene\":\"FZ_FJ001\",\"shareCertificate\":\"https://staticres.yeepay.com/xxx.文件后缀\",\"alipayBackupCount\":\"5\",\"wechatBackupCount\":\"30\"}");
        $request->setBusinessScene("{\"businessSceneList\":[\"POS\"],\"isAppIdConfig\":\"YES\",\"appIdConfigType\":\"MERCHANT\",\"appId\":\"121\",\"appSecret\":\"121\"}");
        try{
            $response = self::$client->registerContributeMerchantV2($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MerClient->registerContributeMerchantV2: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function registerContributeMicroV2Test()
    {
        $request = new Model\RegisterContributeMicroV2Request();

        $request->setRequestNo("YBRWQQH20210622XXXXXX");
        $request->setBusinessRole("SETTLED_MERCHANT");
        $request->setMerchantSubjectInfo("{ \"signName\":\"商户签约名\", \"shortName\":\"商户简称\" }");
        $request->setMerchantCorporationInfo("{ \"legalLicenceType\":\"法人证件类型\", \"legalLicenceNo\":\"法人证件编号\", \"legalLicenceFrontUrl\":\"法人证件人像面照片地址\", \"legalLicenceBackUrl\":\"法人证件非人像面照片地址\",  \"mobile\":\"法人手机号\"  }");
        $request->setBusinessAddressInfo("{ \"province\":\"经营省\", \"city\":\"经营市\", \"district\":\"经营区\", \"address\":\"经营地址\" }");
        $request->setAccountInfo("{  \"bankAccountType\":\"银行账户类型\", \"bankCardNo\":\"银行账户号码\",  \"bankCode\":\"开户总行编码\"  }");
        $request->setNotifyUrl("https://notify.merchant.com/xxx");
        $request->setProductInfo("[{\"productCode\":\"MERCHANT_SCAN_ALIPAY_OFFLINE\",\"rateType\":\"SINGLE_PERCENT\",\"percentRate\":\"0.1\"},{\"productCode\":\"MERCHANT_SCAN_UNIONPAY_CREDIT\",\"rateType\":\"SINGLE_FIXED\",\"fixedRate\":\"1\"},{\"productCode\":\"T1\",\"rateType\":\"SINGLE_PERCENT\",\"percentRate\":\"0.1\"}]");
        $request->setProductQualificationInfo("{\"paymentScene\": \"RLZYFW\",   \"systemScreenshotUrl\": \"https://staticres.yeepay.com/xxx.文件后缀\",   \"specialPermitProcessUrl\": \"https://staticres.yeepay.com/xxx.文件后缀\",   \"agreementPhotoUrl\": \"https://staticres.yeepay.com/xxx.文件后缀\" }");
        $request->setFunctionService("[\"SHARE\",\"BACKUP\"]");
        $request->setFunctionServiceQualificationInfo("{\"shareScene\":\"FZ_FJ001\",\"shareCertificate\":\"https://staticres.yeepay.com/xxx.文件后缀\",\"alipayBackupCount\":\"5\",\"wechatBackupCount\":\"30\"}");
        $request->setBusinessScene("{\"businessSceneList\":[\"POS\"],\"isAppIdConfig\":\"YES\",\"appIdConfigType\":\"MERCHANT\",\"appId\":\"121\",\"appSecret\":\"121\"}");
        try{
            $response = self::$client->registerContributeMicroV2($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MerClient->registerContributeMicroV2: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function registerContributeWebIndexV2Test()
    {
        $request = new Model\RegisterContributeWebIndexV2Request();

        $request->setRequestNo("fba1dd39fd3846b4901f5a833fa3baa3");
        $request->setSignType("ENTERPRISE");
        $request->setNotifyUrl("http://www.yeepay.com/merchant/notify");
        $request->setReturnUrl("http://www.yeepay.com");
        $request->setProductTemplateNo("CP166748***3516");
        $request->setMerchantBaseInfo("{ \"signName\":\"商户签约名\", \"licenceNo\":\"商户证件号码\"}");
        $request->setCorporationInfo("{ \"legalName\":\"法人名称\",  \"legalLicenceNo\":\"法人证件编号\"}");
        $request->setContactInfo("{ \"contactName\":\"联系人姓名\", \"contactMobile\":\"联系人手机号\", \"contactEmail\":\"联系人邮箱\", \"contactLicenceNo\":\"联系人证件号码\" ,\"servicePhone\":\"客服电话\"}");
        $request->setBusinessAddressInfo("{ \"address\":\"商户实际经营地址\"}");
        try{
            $response = self::$client->registerContributeWebIndexV2($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MerClient->registerContributeWebIndexV2: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function registerQueryV2Test()
    {
        $request = new Model\RegisterQueryV2Request();

        $request->setRequestNo("0adc579914d541f8baa3be75387846f1");
        try{
            $response = self::$client->registerQueryV2($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MerClient->registerQueryV2: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function rest_v2_mer_boss_register_contribute_divideTest()
    {
        $request = new Model\RestV2MerBossRegisterContributeDivideRequest();

        $request->setRequestNo("YBRWQQH20231113XXXXXX");
        $request->setBusinessRole("SETTLED_MERCHANT");
        $request->setNotifyUrl("https://notify.merchant.com/xxx");
        $request->setMerchantSubjectInfo("{ \"licenceUrl\":\"商户证件照片地址\", \"signName\":\"商户签约名\", \"signType\":\"商户签约类型\", \"licenceNo\":\"商户证件号码\", \"shortName\":\"商户简称\" }");
        $request->setMerchantCorporationInfo("{ \"legalName\":\"法人名称\", \"legalLicenceType\":\"法人证件类型\", \"legalLicenceNo\":\"法人证件编号\", \"legalLicenceFrontUrl\":\"法人证件正面照片地址\", \"legalLicenceBackUrl\":\"法人证件背面照片地址\" }");
        $request->setMerchantContactInfo("{ \"contactName\":\"联系人姓名\", \"contactMobile\":\"联系人手机号\", \"contactEmail\":\"联系人邮箱\", \"contactLicenceNo\":\"联系人证件号码\"}");
        $request->setIndustryCategoryInfo("{ \"primaryIndustryCategory\":\"一级行业分类编码\", \"secondaryIndustryCategory\":\"二级行业分类编码\" }");
        $request->setBusinessAddressInfo("{ \"province\":\"经营省编码\", \"city\":\"经营市编码\", \"district\":\"经营区编码\", \"address\":\"经营地址\" }");
        $request->setProductInfo("[{\"rateType\":\"SINGLE_FIXED\",\"productCode\":\"D1\",\"fixedRate\":\"0\",\"paymentMethod\":\"REAL_TIME\",\"undertaker\":\"PLATFORM_MERCHANT\"},{\"rateType\":\"SINGLE_PERCENT\",\"productCode\":\"USER_SCAN_WECHAT_OFFLINE\",\"fixedRate\":\"1\",\"paymentMethod\":\"REAL_TIME\",\"percentRate\":\"11\",\"undertaker\":\"PLATFORM_MERCHANT\"},{\"rateType\":\"SINGLE_PERCENT\",\"productCode\":\"MERCHANT_SCAN_WECHAT_OFFLINE\",\"fixedRate\":\"1\",\"paymentMethod\":\"REAL_TIME\",\"percentRate\":\"1\",\"undertaker\":\"PLATFORM_MERCHANT\"},{\"rateType\":\"SINGLE_PERCENT\",\"productCode\":\"WECHAT_OFFIACCOUNT_WECHAT_OFFLINE\",\"fixedRate\":\"1\",\"paymentMethod\":\"REAL_TIME\",\"percentRate\":\"1\",\"undertaker\":\"PLATFORM_MERCHANT\"},{\"rateType\":\"SINGLE_PERCENT\",\"productCode\":\"USER_SCAN_ALIPAY_OFFLINE\",\"paymentMethod\":\"REAL_TIME\",\"minRate\":\"1\",\"percentRate\":\"1\",\"undertaker\":\"PLATFORM_MERCHANT\"},{\"rateType\":\"SINGLE_FIXED\",\"productCode\":\"ENTERPRISE_PAYMENT_REALTIME_PUBLIC\",\"fixedRate\":\"10\",\"paymentMethod\":\"REAL_TIME\",\"minRate\":\"1\",\"undertaker\":\"PLATFORM_MERCHANT\"},{\"rateType\":\"SINGLE_FIXED\",\"productCode\":\"ENTERPRISE_PAYMENT_REALTIME_PRIVATE\",\"fixedRate\":\"10\",\"paymentMethod\":\"REAL_TIME\",\"minRate\":\"1\",\"undertaker\":\"PLATFORM_MERCHANT\"}]");
        $request->setProductQualificationInfo("{ \"paymentScene\": \"RLZYFW\", \"systemScreenshotUrl\": \"https://staticres.yeepay.com/xxx.文件后缀\", \"specialPermitProcessUrl\": \"https://staticres.yeepay.com/xxx.文件后缀\", \"agreementPhotoUrl\": \"https://staticres.yeepay.com/xxx.文件后缀\" }");
        $request->setFunctionService("[\"BACKUP\"]");
        $request->setFunctionServiceQualificationInfo("{\"alipayBackupCount\":\"5\",\"wechatBackupCount\":\"30\"}");
        $request->setDivideConfigInfo("{\"publicAccountInfo\":{\"bankCode\":\"bankCode\",\"bankCardNo\":\"bankCardNo\",\"accountType\":\"ENTERPRISE_ACCOUNT\",\"settleRatio\":\"50\"},\"receiverInfo\":[{\"receiverType\":\"TO_PRIVATE\",\"receiverName\":\"receiverName \",\"licenceNo\":\"licenceNo\",\"accountLabel\":\"API测试\",\"settleCardInfo\":[{\"bankCode\":\"bankCode\",\"bankCardNo\":\"bankCardNo\",\"mobile\":\"mobile\",\"settleRatio\":\"30.00\"}]},{\"legalName\":\"legalName\",\"legalLicenceNo\":\"legalLicenceNo\",\"receiverType\":\"TO_PUBLIC\",\"receiverName\":\"receiverName\",\"licenceNo\":\"licenceNo\",\"accountLabel\":\"API测试1\",\"settleCardInfo\":[{\"bankCode\":\"bankCode\",\"bankCardNo\":\"bankCardNo\",\"settleRatio\":\"20.00\"}]}],\"toPublicDivideUrl\":\"对公分账资质文件url\",\"divideMode\":\"AUTO\"}");
        try{
            $response = self::$client->rest_v2_mer_boss_register_contribute_divide($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MerClient->rest_v2_mer_boss_register_contribute_divide: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function rest_v2_mer_boss_register_contribute_standardTest()
    {
        $request = new Model\RestV2MerBossRegisterContributeStandardRequest();

        $request->setRequestNo("YBRWQQH20231113XXXXXX");
        $request->setBusinessRole("ORDINARY_MERCHANT");
        $request->setNotifyUrl("https://notify.merchant.com/xxx");
        $request->setMerchantSubjectInfo("merchantSubjectInfo_example");
        $request->setMerchantCorporationInfo("示例值：{ \"legalName\":\"法人名称\", \"legalLicenceType\":\"法人证件类型\", \"legalLicenceNo\":\"法人证件编号\", \"legalLicenceFrontUrl\":\"法人证件正面照片地址\", \"legalLicenceBackUrl\":\"法人证件背面照片地址\" }");
        $request->setMerchantContactInfo("{ \"contactName\":\"联系人姓名\", \"contactMobile\":\"联系人手机号\", \"contactEmail\":\"联系人邮箱\", \"contactLicenceNo\":\"联系人证件号码\"}");
        $request->setSettlementAccountInfo("{ \"settlementDirection\":\"结算方向\", \"bankCode\":\"开户总行编码\", \"bankAccountType\":\"银行账户类型\", \"bankCardNo\":\"银行账户号码\" }");
        $request->setIndustryCategoryInfo("{ \"primaryIndustryCategory\":\"一级行业分类编码\", \"secondaryIndustryCategory\":\"二级行业分类编码\" }");
        $request->setBusinessAddressInfo("{ \"province\":\"经营省编码\", \"city\":\"经营市编码\", \"district\":\"经营区编码\", \"address\":\"经营地址\" }");
        $request->setProductInfo("[{\"rateType\":\"SINGLE_FIXED\",\"productCode\":\"D1\",\"fixedRate\":\"0\",\"paymentMethod\":\"REAL_TIME\",\"undertaker\":\"SETTLED_MERCHANT\"},{\"rateType\":\"SINGLE_PERCENT\",\"productCode\":\"USER_SCAN_WECHAT_OFFLINE\",\"fixedRate\":\"1\",\"paymentMethod\":\"REAL_TIME\",\"percentRate\":\"11\",\"undertaker\":\"SETTLED_MERCHANT\"},{\"rateType\":\"SINGLE_PERCENT\",\"productCode\":\"MERCHANT_SCAN_WECHAT_OFFLINE\",\"fixedRate\":\"1\",\"paymentMethod\":\"REAL_TIME\",\"percentRate\":\"1\",\"undertaker\":\"SETTLED_MERCHANT\"},{\"rateType\":\"SINGLE_PERCENT\",\"productCode\":\"WECHAT_OFFIACCOUNT_WECHAT_OFFLINE\",\"fixedRate\":\"1\",\"paymentMethod\":\"REAL_TIME\",\"percentRate\":\"1\",\"undertaker\":\"SETTLED_MERCHANT\"},{\"rateType\":\"SINGLE_PERCENT\",\"productCode\":\"USER_SCAN_ALIPAY_OFFLINE\",\"paymentMethod\":\"REAL_TIME\",\"minRate\":\"1\",\"percentRate\":\"1\",\"undertaker\":\"SETTLED_MERCHANT\"}]");
        $request->setProductQualificationInfo("{ \"paymentScene\": \"RLZYFW\", \"systemScreenshotUrl\": \"https://staticres.yeepay.com/xxx.文件后缀\", \"specialPermitProcessUrl\": \"https://staticres.yeepay.com/xxx.文件后缀\", \"agreementPhotoUrl\": \"https://staticres.yeepay.com/xxx.文件后缀\" }");
        $request->setFunctionService("[\"SHARE\",\"BACKUP\"]");
        $request->setFunctionServiceQualificationInfo("{\"shareScene\":\"FZ_FJ001\",\"shareCertificate\":\"https://staticres.yeepay.com/xxx.文件后缀\",\"alipayBackupCount\":\"5\",\"wechatBackupCount\":\"30\"}");
        try{
            $response = self::$client->rest_v2_mer_boss_register_contribute_standard($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MerClient->rest_v2_mer_boss_register_contribute_standard: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function rest_v2_mer_boss_register_queryTest()
    {
        $request = new Model\RestV2MerBossRegisterQueryRequest();

        $request->setRequestNo("requestNo_example");
        try{
            $response = self::$client->rest_v2_mer_boss_register_query($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MerClient->rest_v2_mer_boss_register_query: ', $e->getMessage(), PHP_EOL;
        }
    }
}
