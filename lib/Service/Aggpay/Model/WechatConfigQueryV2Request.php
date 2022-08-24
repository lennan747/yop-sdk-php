<?php


namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;


use Yeepay\Yop\Sdk\Model\BaseRequest;

class WechatConfigQueryV2Request extends BaseRequest
{
    /**
     * @var string
     */
    private $parentMerchantNo;
    /**
     * @var string
     */
    private $merchantNo;
    /**
     * @var string
     */
    private $appIdType;

    /**
     * Gets parentMerchantNo
     *
     * @return string
     */
    public function getParentMerchantNo()
    {
        return $this->parentMerchantNo;
    }

    /**
     * Sets parentMerchantNo
     *
     * @param string $parentMerchantNo
     * @return WechatConfigQueryV2Request
     */
    public function setParentMerchantNo($parentMerchantNo)
    {
        $this->parentMerchantNo = $parentMerchantNo;
        return $this;
    }
    /**
     * Gets merchantNo
     *
     * @return string
     */
    public function getMerchantNo()
    {
        return $this->merchantNo;
    }

    /**
     * Sets merchantNo
     *
     * @param string $merchantNo
     * @return WechatConfigQueryV2Request
     */
    public function setMerchantNo($merchantNo)
    {
        $this->merchantNo = $merchantNo;
        return $this;
    }
    /**
     * Gets appIdType
     *
     * @return string
     */
    public function getAppIdType()
    {
        return $this->appIdType;
    }

    /**
     * Sets appIdType
     *
     * @param string $appIdType
     * @return WechatConfigQueryV2Request
     */
    public function setAppIdType($appIdType)
    {
        $this->appIdType = $appIdType;
        return $this;
    }

    public static function getOperationId()
    {
        return 'wechatConfigQueryV2';
    }


}
