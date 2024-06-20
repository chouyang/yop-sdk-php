# AccountBookCreateRequestDto

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**parentMerchantNo** | **string** | &lt;p&gt;发起方商户编号&lt;br /&gt;标准商户收付款方案中此参数与商编一致，平台商户收付款方案中此参数为平台商商户编号&lt;/p&gt; | 
**merchantNo** | **string** | &lt;p&gt;发起申请记账簿的商户编号&lt;/p&gt; | 
**merchantAccountBookNo** | **string** | &lt;p&gt;商户侧记账簿编号数字、字母、下划线组合&lt;/p&gt; | 
**merchantAccountBookName** | **string** | &lt;p&gt;记账簿名称&lt;br /&gt;非必填，字符长度须小于等于50(记账簿收款使用&amp;ldquo;记账薄预收款_银行汇款_标准版&amp;rdquo;时，开立记账簿时必须传入&amp;ldquo;记账簿名称&amp;rdquo;)&lt;/p&gt; | [optional] 
**accountBookType** | **string** | &lt;p&gt;记账薄类型（绑卡列表不为空时，该项必填 ）&lt;/p&gt; 可选项如下: BUSINESS:企业 PERSON:个人 | [optional] 
**certificateType** | **string** | &lt;div data-page-id&#x3D;\&quot;DMqHd2ER3ob8iexqKTTc8uGUnQc\&quot; data-docx-has-block-data&#x3D;\&quot;false\&quot;&gt; &lt;div class&#x3D;\&quot; old-record-id-PQZ4dxCYHovLlFxpF4Sc9ZD7npc\&quot;&gt;证件类型（绑卡列表不为空时，该项必填 ）&lt;/div&gt; &lt;/div&gt; 可选项如下: BIZ_LICENSEES:统一信用代码 ID_CARD:身份证 | [optional] 
**certificateNo** | **string** | &lt;div data-page-id&#x3D;\&quot;DMqHd2ER3ob8iexqKTTc8uGUnQc\&quot; data-docx-has-block-data&#x3D;\&quot;false\&quot;&gt; &lt;div class&#x3D;\&quot;ace-line ace-line old-record-id-LEefd74zmoWcaExb76AcaOJCndb\&quot;&gt;证件号（绑卡列表不为空时，该项必填 ）&lt;/div&gt; &lt;/div&gt; | [optional] 
**bindCardList** | [**\Yeepay\Yop\Sdk\Service\Account\Model\BindCardDTO[]**](BindCardDTO.md) | &lt;div data-page-id&#x3D;\&quot;DMqHd2ER3ob8iexqKTTc8uGUnQc\&quot; data-docx-has-block-data&#x3D;\&quot;false\&quot;&gt; &lt;div class&#x3D;\&quot;ace-line ace-line old-record-id-MmmtdMeXToa3dhxRi5UczeIkn3e\&quot;&gt; &lt;div data-page-id&#x3D;\&quot;DMqHd2ER3ob8iexqKTTc8uGUnQc\&quot; data-docx-has-block-data&#x3D;\&quot;false\&quot;&gt; &lt;div class&#x3D;\&quot;ace-line ace-line old-record-id-MmmtdMeXToa3dhxRi5UczeIkn3e\&quot;&gt;绑卡信息&lt;/div&gt; &lt;/div&gt; &lt;/div&gt; &lt;/div&gt; | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


