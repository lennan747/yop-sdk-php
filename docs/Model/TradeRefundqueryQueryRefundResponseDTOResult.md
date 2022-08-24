# TradeRefundqueryQueryRefundResponseDTOResult

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**code** | **string** | 返回码 | [optional] 
**message** | **string** | 返回信息 | [optional] 
**parentMerchantNo** | **string** | 父商编 | [optional] 
**merchantNo** | **string** | 子商编 | [optional] 
**orderId** | **string** | 商户订单号 | [optional] 
**refundRequestId** | **string** | 商户退款请求号 | [optional] 
**uniqueOrderNo** | **string** | 易宝订单号 | [optional] 
**uniqueRefundNo** | **string** | 易宝退款订单号 | [optional] 
**refundAmount** | **float** | 退款请求金额 | [optional] 
**returnMerchantFee** | **float** | 返还商户手续费 | [optional] 
**returnCustomerFee** | **float** | 返回用户手续费 | [optional] 
**status** | **string** | 退款状态 | [optional] 
**description** | **string** | 退款描述信息 | [optional] 
**refundRequestDate** | **string** | 退款请求时间 | [optional] 
**refundSuccessDate** | **string** | 退款成功时间 | [optional] 
**realDeductAmount** | **float** | 实扣金额 | [optional] 
**realRefundAmount** | **float** | 实退金额 | [optional] 
**accountDivided** | **string** | 分账规则 | [optional] 
**cashRefundFee** | **float** | 现金退款金额 | [optional] 
**bankPromotionInfoDTOList** | [**\Yeepay\Yop\Sdk\Service\Sys\Model\TradeRefundqueryBankPromotionInfoDTOResult[]**](TradeRefundqueryBankPromotionInfoDTOResult.md) | 银行优惠卡券列表 | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


