<?php


namespace Yeepay\Yop\Sdk\Service\Pos\Model;


use Yeepay\Yop\Sdk\Model\BaseRequest;

class InstallPosWithProductRequest extends BaseRequest
{
    /**
     * @var 
     */
    private $body;

    /**
     * Gets body
     *
     * @return 
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Sets body
     *
     * @param  $body
     * @return InstallPosWithProductRequest
     */
    public function setBody($body)
    {
        $this->body = $body;
        return $this;
    }

    public static function getOperationId()
    {
        return 'installPosWithProduct';
    }


}
