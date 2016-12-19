<?php

namespace PrestaShopClient\Model\Order;

class AssociationsModel
{
    /**
     * @var OrderRows
     */
    private $order_rows;

    /**
     * @return OrderRows
     */
    public function getOrderRows(): OrderRows
    {
        return $this->order_rows;
    }

    /**
     * @param OrderRows $order_rows
     * @return AssociationsModel
     */
    public function setOrderRows(OrderRows $order_rows): AssociationsModel
    {
        $this->order_rows = $order_rows;
        return $this;
    }
}