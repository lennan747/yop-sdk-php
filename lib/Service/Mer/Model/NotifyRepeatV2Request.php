<?php


namespace Yeepay\Yop\Sdk\Service\Mer\Model;


use Yeepay\Yop\Sdk\Model\BaseRequest;

class NotifyRepeatV2Request extends BaseRequest
{
    /**
     * @var string
     */
    private $requestNo;
    /**
     * @var string
     */
    private $applicationNo;
    /**
     * @var string
     */
    private $type;

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
     * @return NotifyRepeatV2Request
     */
    public function setRequestNo($requestNo)
    {
        $this->requestNo = $requestNo;
        return $this;
    }
    /**
     * Gets applicationNo
     *
     * @return string
     */
    public function getApplicationNo()
    {
        return $this->applicationNo;
    }

    /**
     * Sets applicationNo
     *
     * @param string $applicationNo
     * @return NotifyRepeatV2Request
     */
    public function setApplicationNo($applicationNo)
    {
        $this->applicationNo = $applicationNo;
        return $this;
    }
    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets type
     *
     * @param string $type
     * @return NotifyRepeatV2Request
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    public static function getOperationId()
    {
        return 'notifyRepeatV2';
    }


}
