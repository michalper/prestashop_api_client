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
    public function getCustomer(int $idCustomer)
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
    public function searchCustomers(SearchModel $searchModel)
    {
        $searchModel->setResource('customers');
        $searchModel->setDisplay('full');

        $customer = $this->service
            ->setParams($searchModel)
            ->setType(Service::REQUEST_METHOD_GET)
            ->request()
            ->getBody();

        $ret = [];
        if (
            isset($customer['customers'])
            && isset($customer['customers']['customer'])
        ) {
            if (!Tools::isNumericArray($customer['customers']['customer'])) {
                $customer = $this->serializer->denormalize($customer['customers']['customer'], CustomerModel::class);
                /** @var CustomerModel $customer */
                $ret[$customer->getId()] = $customer;
            } else {
                foreach ($customer['customers']['customer'] as $customer) {
                    $customer = $this->serializer->denormalize($customer, CustomerModel::class);
                    /** @var CustomerModel $customer */
                    $ret[$customer->getId()] = $customer;
                }
            }
            return $ret;
        }
        return false;
    }
}