<?php

namespace PrestaShopClient\Service;

/**
 * Class Response
 * @package PrestaShopClient\Service
 */
class Response
{
    public $body, $message, $status;

    /**
     * Response constructor.
     * @param \GuzzleHttp\Psr7\Response $response
     */
    public function __construct(\GuzzleHttp\Psr7\Response $response)
    {
        $this->status = $response->getStatusCode();
        $this->message = $response->getReasonPhrase();
        $this->body = $response->getBody()->getContents();
    }

    /**
     * @return array
     */
    public function getBody()
    {
        return json_decode($this->body, true);
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @return null|string
     */
    public function getMessage()
    {
        return $this->message;
    }
}