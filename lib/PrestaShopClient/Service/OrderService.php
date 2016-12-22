<?php

namespace PrestaShopClient\Service;

use Itav\Component\Serializer\Serializer;
use PrestaShopClient\Model\Order\OrderModel;
use PrestaShopClient\Model\SearchModel;
use Tools\Tools;

/**
 * Class OrderService
 * @package PrestaShopClient\Service
 */
class OrderService implements ServiceInterface
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
     * OrderService constructor.
     * @param Service $service
     * @param Serializer $serializer
     */
    public function __construct(Service $service, Serializer $serializer)
    {
        $this->service = $service;
        $this->serializer = $serializer;
    }

    /**
     * @param integer $idOrder
     * @return OrderModel|false
     */
    public function get(int $idOrder)
    {
        $request = new SearchModel();
        $request->setResource('orders/' . $idOrder . '/');

        $order = $this->service
            ->setParams($request)
            ->setType(Service::REQUEST_METHOD_GET)
            ->request()
            ->getBody();


        if (isset($order['order']))
            return $this->serializer->denormalize($order['order'], OrderModel::class);

        return false;
    }

    /**
     * @param SearchModel $searchModel
     * @return OrderModel[]|bool
     */
    public function search(SearchModel $searchModel)
    {
        $searchModel->setResource('orders');
        $searchModel->setDisplay('full');

        $order = $this->service
            ->setParams($searchModel)
            ->setType(Service::REQUEST_METHOD_GET)
            ->request()
            ->getBody();

        $ret = [];
        if (
            isset($order['orders'])
            && isset($order['orders']['order'])
        ) {
            if (!Tools::isNumericArray($order['orders']['order'])) {
                $order = $this->serializer->denormalize($order['orders']['order'], OrderModel::class);
                /** @var OrderModel $order */
                $ret[$order->getId()] = $order;
            } else {
                foreach ($order['orders']['order'] as $order) {
                    $order = $this->serializer->denormalize($order, OrderModel::class);
                    /** @var OrderModel $order */
                    $ret[$order->getId()] = $order;
                }
            }
            return $ret;
        }
        return false;
    }
}