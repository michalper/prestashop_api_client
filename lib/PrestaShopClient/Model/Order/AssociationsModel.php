<?php

namespace PrestaShopClient\Model\Order;

class AssociationsModel
{
    /**
     * @var OrderRow[]
     */
    private $order_rows;

    /**
     * @return OrderRow[]
     */
    public function getOrderRows()
    {
        return $this->order_rows;
    }

    /**
     * @param OrderRow $order_rows
     * @return AssociationsModel
     */
    public function setOrderRows($order_rows)
    {
        $this->order_rows = $order_rows;
        return $this;
    }
}