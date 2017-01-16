<?php

namespace PrestaShopClient\Model\Order;

class OrderRows
{
    /**
     * @var OrderRow[]
     */
    private $order_row;

    /**
     * @return OrderRow[]
     */
    public function getOrderRow()
    {
        return $this->order_row;
    }

    /**
     * @param OrderRow[] $order_row
     * @return OrderRows
     */
    public function setOrderRow($order_row)
    {
        $this->order_row = $order_row;
        return $this;
    }

}