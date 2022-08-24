<?php


namespace Yeepay\Yop\Sdk\Service\MWallet\Model;


use Yeepay\Yop\Sdk\Model\BaseRequest;

class BankAccountUpdateKeyWordsRequest extends BaseRequest
{
    /**
     * @var string
     */
    private $operateType;
    /**
     * @var string
     */
    private $keyWordStrs;
    /**
     * @var string
     */
    private $parentMerchantNo;
    /**
     * @var string
     */
    private $merchantNo;

    /**
     * Gets operateType
     *
     * @return string
     */
    public function getOperateType()
    {
        return $this->operateType;
    }

    /**
     * Sets operateType
     *
     * @param string $operateType
     * @return BankAccountUpdateKeyWordsRequest
     */
    public function setOperateType($operateType)
    {
        $this->operateType = $operateType;
        return $this;
    }
    /**
     * Gets keyWordStrs
     *
     * @return string
     */
    public function getKeyWordStrs()
    {
        return $this->keyWordStrs;
    }

    /**
     * Sets keyWordStrs
     *
     * @param string $keyWordStrs
     * @return BankAccountUpdateKeyWordsRequest
     */
    public function setKeyWordStrs($keyWordStrs)
    {
        $this->keyWordStrs = $keyWordStrs;
        return $this;
    }
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
     * @return BankAccountUpdateKeyWordsRequest
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
     * @return BankAccountUpdateKeyWordsRequest
     */
    public function setMerchantNo($merchantNo)
    {
        $this->merchantNo = $merchantNo;
        return $this;
    }

    public static function getOperationId()
    {
        return 'bankAccountUpdateKeyWords';
    }


}
