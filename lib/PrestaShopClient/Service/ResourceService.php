<?php

namespace PrestaShopClient\Service;

use Itav\Component\Serializer\Serializer;
use PrestaShopClient\Model\SearchModel;

/**
 * Class CustomerService
 * @package PrestaShopClient\Service
 */
class ResourceService implements ServiceInterface
{
    /**
     * @var Service
     */
    private $service;

    /**
     * @var Serializer
     */
    private $serializer;

    /**
     * CustomerService constructor.
     * @param Service $service
     * @param Serializer $serializer
     */
    public function __construct(Service $service, Serializer $serializer)
    {
        $this->service = $service;
        $this->serializer = $serializer;
    }

    /**
     * @return array
     */
    public function get()
    {
        $request = new SearchModel();
        $request->setResource('');

        $resource = $this->service
            ->setParams($request)
            ->setType(Service::REQUEST_METHOD_GET)
            ->request()
            ->getBody();

        return $resource;
    }
}