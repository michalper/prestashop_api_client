<?php

namespace PrestaShopClient\Model\Order;

class OrderRow
{

    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $product_id;

    /**
     * @var integer
     */
    private $product_attribute_id;

    /**
     * @var integer
     */
    private $product_quantity;

    /**
     * @var string
     */
    private $product_name;

    /**
     * @var string
     */
    private $product_reference;

    /**
     * @var array
     */
    private $product_ean13;

    /**
     * @var array
     */
    private $product_isbn;

    /**
     * @var array
     */
    private $product_upc;

    /**
     * @var float
     */
    private $product_price;

    /**
     * @var float
     */
    private $unit_price_tax_incl;

    /**
     * @var float
     */
    private $unit_price_tax_excl;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return OrderRow
     */
    public function setId(int $id): OrderRow
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return int
     */
    public function getProductId(): int
    {
        return $this->product_id;
    }

    /**
     * @param int $product_id
     * @return OrderRow
     */
    public function setProductId(int $product_id): OrderRow
    {
        $this->product_id = $product_id;
        return $this;
    }

    /**
     * @return int
     */
    public function getProductAttributeId(): int
    {
        return $this->product_attribute_id;
    }

    /**
     * @param int $product_attribute_id
     * @return OrderRow
     */
    public function setProductAttributeId(int $product_attribute_id): OrderRow
    {
        $this->product_attribute_id = $product_attribute_id;
        return $this;
    }

    /**
     * @return int
     */
    public function getProductQuantity(): int
    {
        return $this->product_quantity;
    }

    /**
     * @param int $product_quantity
     * @return OrderRow
     */
    public function setProductQuantity(int $product_quantity): OrderRow
    {
        $this->product_quantity = $product_quantity;
        return $this;
    }

    /**
     * @return string
     */
    public function getProductName(): string
    {
        return $this->product_name;
    }

    /**
     * @param string $product_name
     * @return OrderRow
     */
    public function setProductName(string $product_name): OrderRow
    {
        $this->product_name = $product_name;
        return $this;
    }

    /**
     * @return string
     */
    public function getProductReference(): string
    {
        return $this->product_reference;
    }

    /**
     * @param string $product_reference
     * @return OrderRow
     */
    public function setProductReference(string $product_reference): OrderRow
    {
        $this->product_reference = $product_reference;
        return $this;
    }

    /**
     * @return array
     */
    public function getProductEan13(): array
    {
        return $this->product_ean13;
    }

    /**
     * @param array $product_ean13
     * @return OrderRow
     */
    public function setProductEan13(array $product_ean13): OrderRow
    {
        $this->product_ean13 = $product_ean13;
        return $this;
    }

    /**
     * @return array
     */
    public function getProductIsbn(): array
    {
        return $this->product_isbn;
    }

    /**
     * @param array $product_isbn
     * @return OrderRow
     */
    public function setProductIsbn(array $product_isbn): OrderRow
    {
        $this->product_isbn = $product_isbn;
        return $this;
    }

    /**
     * @return array
     */
    public function getProductUpc(): array
    {
        return $this->product_upc;
    }

    /**
     * @param array $product_upc
     * @return OrderRow
     */
    public function setProductUpc(array $product_upc): OrderRow
    {
        $this->product_upc = $product_upc;
        return $this;
    }

    /**
     * @return float
     */
    public function getProductPrice(): float
    {
        return $this->product_price;
    }

    /**
     * @param float $product_price
     * @return OrderRow
     */
    public function setProductPrice(float $product_price): OrderRow
    {
        $this->product_price = $product_price;
        return $this;
    }

    /**
     * @return float
     */
    public function getUnitPriceTaxIncl(): float
    {
        return $this->unit_price_tax_incl;
    }

    /**
     * @param float $unit_price_tax_incl
     * @return OrderRow
     */
    public function setUnitPriceTaxIncl(float $unit_price_tax_incl): OrderRow
    {
        $this->unit_price_tax_incl = $unit_price_tax_incl;
        return $this;
    }

    /**
     * @return float
     */
    public function getUnitPriceTaxExcl(): float
    {
        return $this->unit_price_tax_excl;
    }

    /**
     * @param float $unit_price_tax_excl
     * @return OrderRow
     */
    public function setUnitPriceTaxExcl(float $unit_price_tax_excl): OrderRow
    {
        $this->unit_price_tax_excl = $unit_price_tax_excl;
        return $this;
    }
}