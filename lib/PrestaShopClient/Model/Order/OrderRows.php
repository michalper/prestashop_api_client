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
    public function getOrderRow(): array
    {
        return $this->order_row;
    }

    /**
     * @param OrderRow[] $order_row
     * @return OrderRows
     */
    public function setOrderRow(array $order_row): OrderRows
    {
        $this->order_row = $order_row;
        return $this;
    }

}