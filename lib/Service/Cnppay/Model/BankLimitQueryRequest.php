<?php


namespace Yeepay\Yop\Sdk\Service\Cnppay\Model;


use Yeepay\Yop\Sdk\Model\BaseRequest;

class BankLimitQueryRequest extends BaseRequest
{
    /**
     * @var string
     */
    private $merchantNo;

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
     * @return BankLimitQueryRequest
     */
    public function setMerchantNo($merchantNo)
    {
        $this->merchantNo = $merchantNo;
        return $this;
    }

    public static function getOperationId()
    {
        return 'bankLimitQuery';
    }


}
