<?php

use PrestaShopClient\Service\Service;
use PrestaShopClient\Service\CustomerService;
use PrestaShopClient\Service\OrderService;
use PrestaShopClient\Service\ResourceService;
use Itav\Component\Serializer\Serializer;

/**
 * Class PrestaShopClient
 */
class PrestaShopClient
{
    /**
     * @var CustomerService
     */
    public $customers;

    /**
     * @var OrderService
     */
    public $orders;

    /**
     * @var Service
     */
    private $service;

    /**
     * @var ResourceService
     */
    public $resource;

    /**
     * @var Serializer
     */
    private $serializer;

    /**
     * PrestaShopClient constructor.
     */
    public function __construct()
    {
        $this->service = new Service();
        $this->serializer = new Serializer();
        $this->customers = new CustomerService($this->service, $this->serializer);
        $this->orders = new OrderService($this->service, $this->serializer);
        $this->resource = new ResourceService($this->service,$this->serializer);
    }

    /**
     * @param string $apiKey
     * @return PrestaShopClient
     */
    public function setApiKey($apiKey)
    {
        $this->service->apiKey = $apiKey;
        return $this;
    }

    /**
     * @param string $url
     * @return PrestaShopClient
     */
    public function setUrl($url)
    {
        $this->service->url = $url;
        return $this;
    }
}