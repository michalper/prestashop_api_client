<?php

namespace PrestaShopClient\Service;

use Itav\Component\Serializer\Serializer;
use PrestaShopClient\Model\Customer\CustomerModel;
use PrestaShopClient\Model\SearchModel;
use Tools\Tools;

/**
 * Class CustomerService
 * @package PrestaShopClient\Service
 */
class CustomerService implements ServiceInterface
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
     * @param integer $idCustomer
     * @return CustomerModel|false
     */
    public function get(int $idCustomer)
    {
        $request = new SearchModel();
        $request->setResource('customers/' . $idCustomer . '/');

        $customer = $this->service
            ->setParams($request)
            ->setType(Service::REQUEST_METHOD_GET)
            ->request()
            ->getBody();

        if (isset($customer['customer']))
            return $this->serializer->denormalize($customer['customer'], CustomerModel::class);

        return false;
    }

    /**
     * @param SearchModel $searchModel
     * @return CustomerModel[]|bool
     */
    public function search(SearchModel $searchModel)
    {
        $searchModel->setResource('customers');
        $searchModel->setDisplay('full');

        $customer = $this->service
            ->setParams($searchModel)
            ->setType(Service::REQUEST_METHOD_GET)
            ->request()
            ->getBody();

        if (isset($customer['customers'])) {
            return $this->serializer->denormalize($customer['customers'], CustomerModel::class . '[]');
        }
        return false;
    }
}