<?php

namespace PrestaShopClient\Service;

use GuzzleHttp\Client;
use PrestaShopClient\Model\SearchModel;

/**
 * Class Service
 * @package PrestaShopClient\Service
 */
class Service
{
    const REQUEST_METHOD_GET = 'GET';
    const REQUEST_METHOD_POST = 'POST';
    const REQUEST_METHOD_PUT = 'PUT';
    const REQUEST_METHOD_DELETE = 'DELETE';

    const API_PREFIX = '/api/';

    /**
     * @var string
     */
    public $apiKey;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $url;

    /**
     * @var Client
     */
    private $client;

    /**
     * @var SearchModel
     */
    private $params;

    private $options = [];

    /**
     * Service constructor.
     */
    public function __construct()
    {
        $this->client = new Client();
    }

    /**
     * @param mixed $apiKey
     * @return Service
     */
    public function setApiKey($apiKey)
    {
        $this->apiKey = $apiKey;
        return $this;
    }

    /**
     * @param mixed $type
     * @return Service
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @param SearchModel $params
     * @return Service
     */
    public function setParams($params)
    {
        $this->params = $params;
        return $this;
    }

    /**
     * @param $post_data
     * @return Service
     */
    public function setPostData($post_data)
    {
        $this->options['json'] = $post_data;
        return $this;
    }

    /**
     * @param array $headers
     * @return Service
     */
    public function setHeaders($headers)
    {
        $this->options['headers'] = $headers;
        return $this;
    }

    /**
     * @return string
     * @throws \Exception
     */
    private function getUrl()
    {
        if (!$this->url) {
            throw new \Exception('PrestaShop URL missing.', 404);
        }

        $this->url = rtrim($this->url, '/');
        $this->url .= self::API_PREFIX;

        if ($this->params instanceof SearchModel) {
            $this->url .= $this->params->getParams();

        }
        return $this->url;
    }

    /**
     * @return string
     * @throws \Exception
     */
    private function getApiKey()
    {
        if (!$this->apiKey) {
            throw new \Exception('PrestaShop ApiKey missing.', 404);
        }

        return $this->apiKey;
    }

    /**
     * @return Response
     * @throws \Exception
     */
    public function request()
    {
        $this->options['auth'] = [$this->getApiKey(), ''];
        return new Response($this->client->request($this->type, $this->getUrl(), $this->options));
    }

    public static function dump($die, $variable, $desc = false, $noHtml = false)
    {
        if (is_string($variable)) {
            $variable = str_replace("<_new_line_>", "<BR>", $variable);
        }

        if ($noHtml) {
            echo "\n";
        } else {
            echo "<pre>";
        }

        if ($desc) {
            echo $desc . ": ";
        }

        print_r($variable);

        if ($noHtml) {
            echo "";
        } else {
            echo "</pre>";
        }

        if ($die) {
            die();
        }
    }

}