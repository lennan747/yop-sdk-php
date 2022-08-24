<?php


namespace Yeepay\Yop\Sdk\Service\Pos\Model;


use Yeepay\Yop\Sdk\Model\BaseRequest;

class UnSynBindPosRequest extends BaseRequest
{
    /**
     * @var string
     */
    private $customerNumber;
    /**
     * @var string
     */
    private $poscati;

    /**
     * Gets customerNumber
     *
     * @return string
     */
    public function getCustomerNumber()
    {
        return $this->customerNumber;
    }

    /**
     * Sets customerNumber
     *
     * @param string $customerNumber
     * @return UnSynBindPosRequest
     */
    public function setCustomerNumber($customerNumber)
    {
        $this->customerNumber = $customerNumber;
        return $this;
    }
    /**
     * Gets poscati
     *
     * @return string
     */
    public function getPoscati()
    {
        return $this->poscati;
    }

    /**
     * Sets poscati
     *
     * @param string $poscati
     * @return UnSynBindPosRequest
     */
    public function setPoscati($poscati)
    {
        $this->poscati = $poscati;
        return $this;
    }

    public static function getOperationId()
    {
        return 'unSynBindPos';
    }


}
