<?php


namespace Yeepay\Yop\Sdk\Service\Auth\Model;


use Yeepay\Yop\Sdk\Model\BaseRequest;

class MultipleAuthRequest extends BaseRequest
{
    /**
     * @var string
     */
    private $merchantNo;
    /**
     * @var string
     */
    private $authType;
    /**
     * @var string
     */
    private $requestNo;
    /**
     * @var string
     */
    private $idCardNo;
    /**
     * @var string
     */
    private $username;
    /**
     * @var string
     */
    private $bankCardNo;
    /**
     * @var string
     */
    private $remark;
    /**
     * @var string
     */
    private $mobile;
    /**
     * @var string
     */
    private $idCardType;
    /**
     * @var string
     */
    private $clientSource;
    /**
     * @var string
     */
    private $extMap;

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
     * @return MultipleAuthRequest
     */
    public function setMerchantNo($merchantNo)
    {
        $this->merchantNo = $merchantNo;
        return $this;
    }
    /**
     * Gets authType
     *
     * @return string
     */
    public function getAuthType()
    {
        return $this->authType;
    }

    /**
     * Sets authType
     *
     * @param string $authType
     * @return MultipleAuthRequest
     */
    public function setAuthType($authType)
    {
        $this->authType = $authType;
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
     * @return MultipleAuthRequest
     */
    public function setRequestNo($requestNo)
    {
        $this->requestNo = $requestNo;
        return $this;
    }
    /**
     * Gets idCardNo
     *
     * @return string
     */
    public function getIdCardNo()
    {
        return $this->idCardNo;
    }

    /**
     * Sets idCardNo
     *
     * @param string $idCardNo
     * @return MultipleAuthRequest
     */
    public function setIdCardNo($idCardNo)
    {
        $this->idCardNo = $idCardNo;
        return $this;
    }
    /**
     * Gets username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Sets username
     *
     * @param string $username
     * @return MultipleAuthRequest
     */
    public function setUsername($username)
    {
        $this->username = $username;
        return $this;
    }
    /**
     * Gets bankCardNo
     *
     * @return string
     */
    public function getBankCardNo()
    {
        return $this->bankCardNo;
    }

    /**
     * Sets bankCardNo
     *
     * @param string $bankCardNo
     * @return MultipleAuthRequest
     */
    public function setBankCardNo($bankCardNo)
    {
        $this->bankCardNo = $bankCardNo;
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
     * @return MultipleAuthRequest
     */
    public function setRemark($remark)
    {
        $this->remark = $remark;
        return $this;
    }
    /**
     * Gets mobile
     *
     * @return string
     */
    public function getMobile()
    {
        return $this->mobile;
    }

    /**
     * Sets mobile
     *
     * @param string $mobile
     * @return MultipleAuthRequest
     */
    public function setMobile($mobile)
    {
        $this->mobile = $mobile;
        return $this;
    }
    /**
     * Gets idCardType
     *
     * @return string
     */
    public function getIdCardType()
    {
        return $this->idCardType;
    }

    /**
     * Sets idCardType
     *
     * @param string $idCardType
     * @return MultipleAuthRequest
     */
    public function setIdCardType($idCardType)
    {
        $this->idCardType = $idCardType;
        return $this;
    }
    /**
     * Gets clientSource
     *
     * @return string
     */
    public function getClientSource()
    {
        return $this->clientSource;
    }

    /**
     * Sets clientSource
     *
     * @param string $clientSource
     * @return MultipleAuthRequest
     */
    public function setClientSource($clientSource)
    {
        $this->clientSource = $clientSource;
        return $this;
    }
    /**
     * Gets extMap
     *
     * @return string
     */
    public function getExtMap()
    {
        return $this->extMap;
    }

    /**
     * Sets extMap
     *
     * @param string $extMap
     * @return MultipleAuthRequest
     */
    public function setExtMap($extMap)
    {
        $this->extMap = $extMap;
        return $this;
    }

    public static function getOperationId()
    {
        return 'multipleAuth';
    }


}
