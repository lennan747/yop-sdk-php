<?php


namespace Yeepay\Yop\Sdk\Service\MWallet\Model;


use Yeepay\Yop\Sdk\Model\BaseRequest;

class BankAccountWithdrawRequest extends BaseRequest
{
    /**
     * @var string
     */
    private $merchantMemberNo;
    /**
     * @var string
     */
    private $requestNo;
    /**
     * @var string
     */
    private $accountNo;
    /**
     * @var string
     */
    private $accountType;
    /**
     * @var string
     */
    private $oneAccountBankNo;
    /**
     * @var string
     */
    private $bindBankPhone;
    /**
     * @var float
     */
    private $withdrawPrice;
    /**
     * @var string
     */
    private $remark;
    /**
     * @var string
     */
    private $parentMerchantNo;
    /**
     * @var string
     */
    private $merchantNo;

    /**
     * Gets merchantMemberNo
     *
     * @return string
     */
    public function getMerchantMemberNo()
    {
        return $this->merchantMemberNo;
    }

    /**
     * Sets merchantMemberNo
     *
     * @param string $merchantMemberNo
     * @return BankAccountWithdrawRequest
     */
    public function setMerchantMemberNo($merchantMemberNo)
    {
        $this->merchantMemberNo = $merchantMemberNo;
        return $this;
    }
    /**
     * Gets requestNo
     *
     * @return string
     */
    public function getRequestNo()
    {
        return $this->requestNo;
    }

    /**
     * Sets requestNo
     *
     * @param string $requestNo
     * @return BankAccountWithdrawRequest
     */
    public function setRequestNo($requestNo)
    {
        $this->requestNo = $requestNo;
        return $this;
    }
    /**
     * Gets accountNo
     *
     * @return string
     */
    public function getAccountNo()
    {
        return $this->accountNo;
    }

    /**
     * Sets accountNo
     *
     * @param string $accountNo
     * @return BankAccountWithdrawRequest
     */
    public function setAccountNo($accountNo)
    {
        $this->accountNo = $accountNo;
        return $this;
    }
    /**
     * Gets accountType
     *
     * @return string
     */
    public function getAccountType()
    {
        return $this->accountType;
    }

    /**
     * Sets accountType
     *
     * @param string $accountType
     * @return BankAccountWithdrawRequest
     */
    public function setAccountType($accountType)
    {
        $this->accountType = $accountType;
        return $this;
    }
    /**
     * Gets oneAccountBankNo
     *
     * @return string
     */
    public function getOneAccountBankNo()
    {
        return $this->oneAccountBankNo;
    }

    /**
     * Sets oneAccountBankNo
     *
     * @param string $oneAccountBankNo
     * @return BankAccountWithdrawRequest
     */
    public function setOneAccountBankNo($oneAccountBankNo)
    {
        $this->oneAccountBankNo = $oneAccountBankNo;
        return $this;
    }
    /**
     * Gets bindBankPhone
     *
     * @return string
     */
    public function getBindBankPhone()
    {
        return $this->bindBankPhone;
    }

    /**
     * Sets bindBankPhone
     *
     * @param string $bindBankPhone
     * @return BankAccountWithdrawRequest
     */
    public function setBindBankPhone($bindBankPhone)
    {
        $this->bindBankPhone = $bindBankPhone;
        return $this;
    }
    /**
     * Gets withdrawPrice
     *
     * @return float
     */
    public function getWithdrawPrice()
    {
        return $this->withdrawPrice;
    }

    /**
     * Sets withdrawPrice
     *
     * @param float $withdrawPrice
     * @return BankAccountWithdrawRequest
     */
    public function setWithdrawPrice($withdrawPrice)
    {
        $this->withdrawPrice = $withdrawPrice;
        return $this;
    }
    /**
     * Gets remark
     *
     * @return string
     */
    public function getRemark()
    {
        return $this->remark;
    }

    /**
     * Sets remark
     *
     * @param string $remark
     * @return BankAccountWithdrawRequest
     */
    public function setRemark($remark)
    {
        $this->remark = $remark;
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
     * @return BankAccountWithdrawRequest
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
     * @return BankAccountWithdrawRequest
     */
    public function setMerchantNo($merchantNo)
    {
        $this->merchantNo = $merchantNo;
        return $this;
    }

    public static function getOperationId()
    {
        return 'bankAccountWithdraw';
    }


}
