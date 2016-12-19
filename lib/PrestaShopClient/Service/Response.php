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
        $this->body = self::parseXML($response->getBody()->getContents());
    }

    /**
     * @return \SimpleXMLElement
     */
    public function getXmlBody()
    {
        return $this->body;
    }

    /**
     * @return array
     */
    public function getBody()
    {
        return json_decode(json_encode($this->body), TRUE);
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

    /**
     * @param string $response
     * @return \SimpleXMLElement
     * @throws \Exception
     */
    private function parseXML($response)
    {
        if ($response != '') {
            libxml_clear_errors();
            libxml_use_internal_errors(true);
            $xml = simplexml_load_string($response, 'SimpleXMLElement', LIBXML_NOCDATA);
            if (libxml_get_errors()) {
                $msg = var_export(libxml_get_errors(), true);
                libxml_clear_errors();
                throw new \Exception('HTTP XML response is not parsable: ' . $msg);
            }
            return $xml;
        } else
            throw new \Exception('HTTP response is empty');
    }

}