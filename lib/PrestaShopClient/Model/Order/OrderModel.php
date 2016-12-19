<?php

namespace PrestaShopClient\Model\Order;

class OrderModel
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $id_address_delivery;

    /**
     * @var integer
     */
    private $id_address_invoice;

    /**
     * @var integer
     */
    private $id_cart;

    /**
     * @var integer
     */
    private $id_currency;

    /**
     * @var integer
     */
    private $id_lang;

    /**
     * @var integer
     */
    private $id_customer;

    /**
     * @var integer
     */
    private $id_carrier;

    /**
     * @var integer
     */
    private $current_state;

    /**
     * @var string
     */
    private $module;

    /**
     * @var string
     */
    private $invoice_number;

    /**
     * @var \DateTime
     */
    private $invoice_date;

    /**
     * @var string
     */
    private $delivery_number;

    /**
     * @var \DateTime
     */
    private $delivery_date;

    /**
     * @var boolean
     */
    private $valid;

    /**
     * @var \DateTime
     */
    private $date_add;

    /**
     * @var \DateTime
     */
    private $date_upd;

    /**
     * @var array
     */
    private $shipping_number;

    /**
     * @var integer
     */
    private $id_shop_group;

    /**
     * @var integer
     */
    private $id_shop;

    /**
     * @var string
     */
    private $secure_key;

    /**
     * @var string
     */
    private $payment;

    /**
     * @var boolean
     */
    private $recyclable;

    /**
     * @var boolean
     */
    private $gift;

    /**
     * @var array
     */
    private $gift_message;

    /**
     * @var string
     */
    private $mobile_theme;

    /**
     * @var float
     */
    private $total_discounts;

    /**
     * @var float
     */
    private $total_discounts_tax_incl;

    /**
     * @var float
     */
    private $total_discounts_tax_excl;

    /**
     * @var float
     */
    private $total_paid;

    /**
     * @var float
     */
    private $total_paid_tax_incl;

    /**
     * @var float
     */
    private $total_paid_tax_excl;

    /**
     * @var float
     */
    private $total_paid_real;

    /**
     * @var float
     */
    private $total_products;

    /**
     * @var float
     */
    private $total_products_wt;

    /**
     * @var float
     */
    private $total_shipping;

    /**
     * @var float
     */
    private $total_shipping_tax_incl;

    /**
     * @var float
     */
    private $total_shipping_tax_excl;

    /**
     * @var float
     */
    private $carrier_tax_rate;

    /**
     * @var float
     */
    private $total_wrapping;

    /**
     * @var float
     */
    private $total_wrapping_tax_incl;

    /**
     * @var float
     */
    private $total_wrapping_tax_excl;

    /**
     * @var string
     */
    private $round_mode;

    /**
     * @var string
     */
    private $round_type;

    /**
     * @var float
     */
    private $conversion_rate;

    /**
     * @var string
     */
    private $reference;

    /**
     * @var AssociationsModel
     */
    private $associations;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return OrderModel
     */
    public function setId(int $id): OrderModel
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return int
     */
    public function getIdAddressDelivery(): int
    {
        return $this->id_address_delivery;
    }

    /**
     * @param int $id_address_delivery
     * @return OrderModel
     */
    public function setIdAddressDelivery(int $id_address_delivery): OrderModel
    {
        $this->id_address_delivery = $id_address_delivery;
        return $this;
    }

    /**
     * @return int
     */
    public function getIdAddressInvoice(): int
    {
        return $this->id_address_invoice;
    }

    /**
     * @param int $id_address_invoice
     * @return OrderModel
     */
    public function setIdAddressInvoice(int $id_address_invoice): OrderModel
    {
        $this->id_address_invoice = $id_address_invoice;
        return $this;
    }

    /**
     * @return int
     */
    public function getIdCart(): int
    {
        return $this->id_cart;
    }

    /**
     * @param int $id_cart
     * @return OrderModel
     */
    public function setIdCart(int $id_cart): OrderModel
    {
        $this->id_cart = $id_cart;
        return $this;
    }

    /**
     * @return int
     */
    public function getIdCurrency(): int
    {
        return $this->id_currency;
    }

    /**
     * @param int $id_currency
     * @return OrderModel
     */
    public function setIdCurrency(int $id_currency): OrderModel
    {
        $this->id_currency = $id_currency;
        return $this;
    }

    /**
     * @return int
     */
    public function getIdLang(): int
    {
        return $this->id_lang;
    }

    /**
     * @param int $id_lang
     * @return OrderModel
     */
    public function setIdLang(int $id_lang): OrderModel
    {
        $this->id_lang = $id_lang;
        return $this;
    }

    /**
     * @return int
     */
    public function getIdCustomer(): int
    {
        return $this->id_customer;
    }

    /**
     * @param int $id_customer
     * @return OrderModel
     */
    public function setIdCustomer(int $id_customer): OrderModel
    {
        $this->id_customer = $id_customer;
        return $this;
    }

    /**
     * @return int
     */
    public function getIdCarrier(): int
    {
        return $this->id_carrier;
    }

    /**
     * @param int $id_carrier
     * @return OrderModel
     */
    public function setIdCarrier(int $id_carrier): OrderModel
    {
        $this->id_carrier = $id_carrier;
        return $this;
    }

    /**
     * @return int
     */
    public function getCurrentState(): int
    {
        return $this->current_state;
    }

    /**
     * @param int $current_state
     * @return OrderModel
     */
    public function setCurrentState(int $current_state): OrderModel
    {
        $this->current_state = $current_state;
        return $this;
    }

    /**
     * @return string
     */
    public function getModule(): string
    {
        return $this->module;
    }

    /**
     * @param string $module
     * @return OrderModel
     */
    public function setModule(string $module): OrderModel
    {
        $this->module = $module;
        return $this;
    }

    /**
     * @return string
     */
    public function getInvoiceNumber(): string
    {
        return $this->invoice_number;
    }

    /**
     * @param string $invoice_number
     * @return OrderModel
     */
    public function setInvoiceNumber(string $invoice_number): OrderModel
    {
        $this->invoice_number = $invoice_number;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getInvoiceDate(): \DateTime
    {
        return $this->invoice_date;
    }

    /**
     * @param \DateTime $invoice_date
     * @return OrderModel
     */
    public function setInvoiceDate(\DateTime $invoice_date): OrderModel
    {
        $this->invoice_date = $invoice_date;
        return $this;
    }

    /**
     * @return string
     */
    public function getDeliveryNumber(): string
    {
        return $this->delivery_number;
    }

    /**
     * @param string $delivery_number
     * @return OrderModel
     */
    public function setDeliveryNumber(string $delivery_number): OrderModel
    {
        $this->delivery_number = $delivery_number;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDeliveryDate(): \DateTime
    {
        return $this->delivery_date;
    }

    /**
     * @param \DateTime $delivery_date
     * @return OrderModel
     */
    public function setDeliveryDate(\DateTime $delivery_date): OrderModel
    {
        $this->delivery_date = $delivery_date;
        return $this;
    }

    /**
     * @return bool
     */
    public function isValid(): bool
    {
        return $this->valid;
    }

    /**
     * @param bool $valid
     * @return OrderModel
     */
    public function setValid(bool $valid): OrderModel
    {
        $this->valid = $valid;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDateAdd(): \DateTime
    {
        return $this->date_add;
    }

    /**
     * @param \DateTime $date_add
     * @return OrderModel
     */
    public function setDateAdd(\DateTime $date_add): OrderModel
    {
        $this->date_add = $date_add;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDateUpd(): \DateTime
    {
        return $this->date_upd;
    }

    /**
     * @param \DateTime $date_upd
     * @return OrderModel
     */
    public function setDateUpd(\DateTime $date_upd): OrderModel
    {
        $this->date_upd = $date_upd;
        return $this;
    }

    /**
     * @return array
     */
    public function getShippingNumber(): array
    {
        return $this->shipping_number;
    }

    /**
     * @param array $shipping_number
     * @return OrderModel
     */
    public function setShippingNumber(array $shipping_number): OrderModel
    {
        $this->shipping_number = $shipping_number;
        return $this;
    }

    /**
     * @return int
     */
    public function getIdShopGroup(): int
    {
        return $this->id_shop_group;
    }

    /**
     * @param int $id_shop_group
     * @return OrderModel
     */
    public function setIdShopGroup(int $id_shop_group): OrderModel
    {
        $this->id_shop_group = $id_shop_group;
        return $this;
    }

    /**
     * @return int
     */
    public function getIdShop(): int
    {
        return $this->id_shop;
    }

    /**
     * @param int $id_shop
     * @return OrderModel
     */
    public function setIdShop(int $id_shop): OrderModel
    {
        $this->id_shop = $id_shop;
        return $this;
    }

    /**
     * @return string
     */
    public function getSecureKey(): string
    {
        return $this->secure_key;
    }

    /**
     * @param string $secure_key
     * @return OrderModel
     */
    public function setSecureKey(string $secure_key): OrderModel
    {
        $this->secure_key = $secure_key;
        return $this;
    }

    /**
     * @return string
     */
    public function getPayment(): string
    {
        return $this->payment;
    }

    /**
     * @param string $payment
     * @return OrderModel
     */
    public function setPayment(string $payment): OrderModel
    {
        $this->payment = $payment;
        return $this;
    }

    /**
     * @return bool
     */
    public function isRecyclable(): bool
    {
        return $this->recyclable;
    }

    /**
     * @param bool $recyclable
     * @return OrderModel
     */
    public function setRecyclable(bool $recyclable): OrderModel
    {
        $this->recyclable = $recyclable;
        return $this;
    }

    /**
     * @return bool
     */
    public function isGift(): bool
    {
        return $this->gift;
    }

    /**
     * @param bool $gift
     * @return OrderModel
     */
    public function setGift(bool $gift): OrderModel
    {
        $this->gift = $gift;
        return $this;
    }

    /**
     * @return array
     */
    public function getGiftMessage(): array
    {
        return $this->gift_message;
    }

    /**
     * @param array $gift_message
     * @return OrderModel
     */
    public function setGiftMessage(array $gift_message): OrderModel
    {
        $this->gift_message = $gift_message;
        return $this;
    }

    /**
     * @return string
     */
    public function getMobileTheme(): string
    {
        return $this->mobile_theme;
    }

    /**
     * @param string $mobile_theme
     * @return OrderModel
     */
    public function setMobileTheme(string $mobile_theme): OrderModel
    {
        $this->mobile_theme = $mobile_theme;
        return $this;
    }

    /**
     * @return float
     */
    public function getTotalDiscounts(): float
    {
        return $this->total_discounts;
    }

    /**
     * @param float $total_discounts
     * @return OrderModel
     */
    public function setTotalDiscounts(float $total_discounts): OrderModel
    {
        $this->total_discounts = $total_discounts;
        return $this;
    }

    /**
     * @return float
     */
    public function getTotalDiscountsTaxIncl(): float
    {
        return $this->total_discounts_tax_incl;
    }

    /**
     * @param float $total_discounts_tax_incl
     * @return OrderModel
     */
    public function setTotalDiscountsTaxIncl(float $total_discounts_tax_incl): OrderModel
    {
        $this->total_discounts_tax_incl = $total_discounts_tax_incl;
        return $this;
    }

    /**
     * @return float
     */
    public function getTotalDiscountsTaxExcl(): float
    {
        return $this->total_discounts_tax_excl;
    }

    /**
     * @param float $total_discounts_tax_excl
     * @return OrderModel
     */
    public function setTotalDiscountsTaxExcl(float $total_discounts_tax_excl): OrderModel
    {
        $this->total_discounts_tax_excl = $total_discounts_tax_excl;
        return $this;
    }

    /**
     * @return float
     */
    public function getTotalPaid(): float
    {
        return $this->total_paid;
    }

    /**
     * @param float $total_paid
     * @return OrderModel
     */
    public function setTotalPaid(float $total_paid): OrderModel
    {
        $this->total_paid = $total_paid;
        return $this;
    }

    /**
     * @return float
     */
    public function getTotalPaidTaxIncl(): float
    {
        return $this->total_paid_tax_incl;
    }

    /**
     * @param float $total_paid_tax_incl
     * @return OrderModel
     */
    public function setTotalPaidTaxIncl(float $total_paid_tax_incl): OrderModel
    {
        $this->total_paid_tax_incl = $total_paid_tax_incl;
        return $this;
    }

    /**
     * @return float
     */
    public function getTotalPaidTaxExcl(): float
    {
        return $this->total_paid_tax_excl;
    }

    /**
     * @param float $total_paid_tax_excl
     * @return OrderModel
     */
    public function setTotalPaidTaxExcl(float $total_paid_tax_excl): OrderModel
    {
        $this->total_paid_tax_excl = $total_paid_tax_excl;
        return $this;
    }

    /**
     * @return float
     */
    public function getTotalPaidReal(): float
    {
        return $this->total_paid_real;
    }

    /**
     * @param float $total_paid_real
     * @return OrderModel
     */
    public function setTotalPaidReal(float $total_paid_real): OrderModel
    {
        $this->total_paid_real = $total_paid_real;
        return $this;
    }

    /**
     * @return float
     */
    public function getTotalProducts(): float
    {
        return $this->total_products;
    }

    /**
     * @param float $total_products
     * @return OrderModel
     */
    public function setTotalProducts(float $total_products): OrderModel
    {
        $this->total_products = $total_products;
        return $this;
    }

    /**
     * @return float
     */
    public function getTotalProductsWt(): float
    {
        return $this->total_products_wt;
    }

    /**
     * @param float $total_products_wt
     * @return OrderModel
     */
    public function setTotalProductsWt(float $total_products_wt): OrderModel
    {
        $this->total_products_wt = $total_products_wt;
        return $this;
    }

    /**
     * @return float
     */
    public function getTotalShipping(): float
    {
        return $this->total_shipping;
    }

    /**
     * @param float $total_shipping
     * @return OrderModel
     */
    public function setTotalShipping(float $total_shipping): OrderModel
    {
        $this->total_shipping = $total_shipping;
        return $this;
    }

    /**
     * @return float
     */
    public function getTotalShippingTaxIncl(): float
    {
        return $this->total_shipping_tax_incl;
    }

    /**
     * @param float $total_shipping_tax_incl
     * @return OrderModel
     */
    public function setTotalShippingTaxIncl(float $total_shipping_tax_incl): OrderModel
    {
        $this->total_shipping_tax_incl = $total_shipping_tax_incl;
        return $this;
    }

    /**
     * @return float
     */
    public function getTotalShippingTaxExcl(): float
    {
        return $this->total_shipping_tax_excl;
    }

    /**
     * @param float $total_shipping_tax_excl
     * @return OrderModel
     */
    public function setTotalShippingTaxExcl(float $total_shipping_tax_excl): OrderModel
    {
        $this->total_shipping_tax_excl = $total_shipping_tax_excl;
        return $this;
    }

    /**
     * @return float
     */
    public function getCarrierTaxRate(): float
    {
        return $this->carrier_tax_rate;
    }

    /**
     * @param float $carrier_tax_rate
     * @return OrderModel
     */
    public function setCarrierTaxRate(float $carrier_tax_rate): OrderModel
    {
        $this->carrier_tax_rate = $carrier_tax_rate;
        return $this;
    }

    /**
     * @return float
     */
    public function getTotalWrapping(): float
    {
        return $this->total_wrapping;
    }

    /**
     * @param float $total_wrapping
     * @return OrderModel
     */
    public function setTotalWrapping(float $total_wrapping): OrderModel
    {
        $this->total_wrapping = $total_wrapping;
        return $this;
    }

    /**
     * @return float
     */
    public function getTotalWrappingTaxIncl(): float
    {
        return $this->total_wrapping_tax_incl;
    }

    /**
     * @param float $total_wrapping_tax_incl
     * @return OrderModel
     */
    public function setTotalWrappingTaxIncl(float $total_wrapping_tax_incl): OrderModel
    {
        $this->total_wrapping_tax_incl = $total_wrapping_tax_incl;
        return $this;
    }

    /**
     * @return float
     */
    public function getTotalWrappingTaxExcl(): float
    {
        return $this->total_wrapping_tax_excl;
    }

    /**
     * @param float $total_wrapping_tax_excl
     * @return OrderModel
     */
    public function setTotalWrappingTaxExcl(float $total_wrapping_tax_excl): OrderModel
    {
        $this->total_wrapping_tax_excl = $total_wrapping_tax_excl;
        return $this;
    }

    /**
     * @return string
     */
    public function getRoundMode(): string
    {
        return $this->round_mode;
    }

    /**
     * @param string $round_mode
     * @return OrderModel
     */
    public function setRoundMode(string $round_mode): OrderModel
    {
        $this->round_mode = $round_mode;
        return $this;
    }

    /**
     * @return string
     */
    public function getRoundType(): string
    {
        return $this->round_type;
    }

    /**
     * @param string $round_type
     * @return OrderModel
     */
    public function setRoundType(string $round_type): OrderModel
    {
        $this->round_type = $round_type;
        return $this;
    }

    /**
     * @return float
     */
    public function getConversionRate(): float
    {
        return $this->conversion_rate;
    }

    /**
     * @param float $conversion_rate
     * @return OrderModel
     */
    public function setConversionRate(float $conversion_rate): OrderModel
    {
        $this->conversion_rate = $conversion_rate;
        return $this;
    }

    /**
     * @return string
     */
    public function getReference(): string
    {
        return $this->reference;
    }

    /**
     * @param string $reference
     * @return OrderModel
     */
    public function setReference(string $reference): OrderModel
    {
        $this->reference = $reference;
        return $this;
    }

    /**
     * @return AssociationsModel
     */
    public function getAssociations(): AssociationsModel
    {
        return $this->associations;
    }

    /**
     * @param AssociationsModel $associations
     * @return OrderModel
     */
    public function setAssociations(AssociationsModel $associations): OrderModel
    {
        $this->associations = $associations;
        return $this;
    }

    /**
     * @return bool|OrderRow[]
     */
    public function getOrderRows()
    {
        if ($rows = $this->associations->getOrderRows()) {
            if ($products = $rows->getOrderRow()) {
                return $products;
            }
        }
        return false;
    }
}

