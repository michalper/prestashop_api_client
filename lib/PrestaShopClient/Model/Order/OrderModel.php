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
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return OrderModel
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return int
     */
    public function getIdAddressDelivery()
    {
        return $this->id_address_delivery;
    }

    /**
     * @param int $id_address_delivery
     * @return OrderModel
     */
    public function setIdAddressDelivery($id_address_delivery)
    {
        $this->id_address_delivery = $id_address_delivery;
        return $this;
    }

    /**
     * @return int
     */
    public function getIdAddressInvoice()
    {
        return $this->id_address_invoice;
    }

    /**
     * @param int $id_address_invoice
     * @return OrderModel
     */
    public function setIdAddressInvoice($id_address_invoice)
    {
        $this->id_address_invoice = $id_address_invoice;
        return $this;
    }

    /**
     * @return int
     */
    public function getIdCart()
    {
        return $this->id_cart;
    }

    /**
     * @param int $id_cart
     * @return OrderModel
     */
    public function setIdCart($id_cart)
    {
        $this->id_cart = $id_cart;
        return $this;
    }

    /**
     * @return int
     */
    public function getIdCurrency()
    {
        return $this->id_currency;
    }

    /**
     * @param int $id_currency
     * @return OrderModel
     */
    public function setIdCurrency($id_currency)
    {
        $this->id_currency = $id_currency;
        return $this;
    }

    /**
     * @return int
     */
    public function getIdLang()
    {
        return $this->id_lang;
    }

    /**
     * @param int $id_lang
     * @return OrderModel
     */
    public function setIdLang($id_lang)
    {
        $this->id_lang = $id_lang;
        return $this;
    }

    /**
     * @return int
     */
    public function getIdCustomer()
    {
        return $this->id_customer;
    }

    /**
     * @param int $id_customer
     * @return OrderModel
     */
    public function setIdCustomer($id_customer)
    {
        $this->id_customer = $id_customer;
        return $this;
    }

    /**
     * @return int
     */
    public function getIdCarrier()
    {
        return $this->id_carrier;
    }

    /**
     * @param int $id_carrier
     * @return OrderModel
     */
    public function setIdCarrier($id_carrier)
    {
        $this->id_carrier = $id_carrier;
        return $this;
    }

    /**
     * @return int
     */
    public function getCurrentState()
    {
        return $this->current_state;
    }

    /**
     * @param int $current_state
     * @return OrderModel
     */
    public function setCurrentState($current_state)
    {
        $this->current_state = $current_state;
        return $this;
    }

    /**
     * @return string
     */
    public function getModule()
    {
        return $this->module;
    }

    /**
     * @param string $module
     * @return OrderModel
     */
    public function setModule($module)
    {
        $this->module = $module;
        return $this;
    }

    /**
     * @return string
     */
    public function getInvoiceNumber()
    {
        return $this->invoice_number;
    }

    /**
     * @param string $invoice_number
     * @return OrderModel
     */
    public function setInvoiceNumber($invoice_number)
    {
        $this->invoice_number = $invoice_number;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getInvoiceDate()
    {
        return $this->invoice_date;
    }

    /**
     * @param $invoice_date
     * @return OrderModel
     */
    public function setInvoiceDate($invoice_date)
    {
        $this->invoice_date = $invoice_date;
        return $this;
    }

    /**
     * @return string
     */
    public function getDeliveryNumber()
    {
        return $this->delivery_number;
    }

    /**
     * @param string $delivery_number
     * @return OrderModel
     */
    public function setDeliveryNumber($delivery_number)
    {
        $this->delivery_number = $delivery_number;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDeliveryDate()
    {
        return $this->delivery_date;
    }

    /**
     * @param $delivery_date
     * @return OrderModel
     */
    public function setDeliveryDate($delivery_date)
    {
        $this->delivery_date = $delivery_date;
        return $this;
    }

    /**
     * @return bool
     */
    public function isValid()
    {
        return $this->valid;
    }

    /**
     * @param bool $valid
     * @return OrderModel
     */
    public function setValid($valid)
    {
        $this->valid = $valid;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDateAdd()
    {
        return $this->date_add;
    }

    /**
     * @param $date_add
     * @return OrderModel
     */
    public function setDateAdd($date_add)
    {
        $this->date_add = $date_add;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDateUpd()
    {
        return $this->date_upd;
    }

    /**
     * @param $date_upd
     * @return OrderModel
     */
    public function setDateUpd($date_upd)
    {
        $this->date_upd = $date_upd;
        return $this;
    }

    /**
     * @return array
     */
    public function getShippingNumber()
    {
        return $this->shipping_number;
    }

    /**
     * @param array $shipping_number
     * @return OrderModel
     */
    public function setShippingNumber($shipping_number)
    {
        $this->shipping_number = $shipping_number;
        return $this;
    }

    /**
     * @return int
     */
    public function getIdShopGroup()
    {
        return $this->id_shop_group;
    }

    /**
     * @param int $id_shop_group
     * @return OrderModel
     */
    public function setIdShopGroup($id_shop_group)
    {
        $this->id_shop_group = $id_shop_group;
        return $this;
    }

    /**
     * @return int
     */
    public function getIdShop()
    {
        return $this->id_shop;
    }

    /**
     * @param int $id_shop
     * @return OrderModel
     */
    public function setIdShop($id_shop)
    {
        $this->id_shop = $id_shop;
        return $this;
    }

    /**
     * @return string
     */
    public function getSecureKey()
    {
        return $this->secure_key;
    }

    /**
     * @param string $secure_key
     * @return OrderModel
     */
    public function setSecureKey($secure_key)
    {
        $this->secure_key = $secure_key;
        return $this;
    }

    /**
     * @return string
     */
    public function getPayment()
    {
        return $this->payment;
    }

    /**
     * @param string $payment
     * @return OrderModel
     */
    public function setPayment($payment)
    {
        $this->payment = $payment;
        return $this;
    }

    /**
     * @return bool
     */
    public function isRecyclable()
    {
        return $this->recyclable;
    }

    /**
     * @param bool $recyclable
     * @return OrderModel
     */
    public function setRecyclable($recyclable)
    {
        $this->recyclable = $recyclable;
        return $this;
    }

    /**
     * @return bool
     */
    public function isGift()
    {
        return $this->gift;
    }

    /**
     * @param bool $gift
     * @return OrderModel
     */
    public function setGift($gift)
    {
        $this->gift = $gift;
        return $this;
    }

    /**
     * @return array
     */
    public function getGiftMessage()
    {
        return $this->gift_message;
    }

    /**
     * @param array $gift_message
     * @return OrderModel
     */
    public function setGiftMessage($gift_message)
    {
        $this->gift_message = $gift_message;
        return $this;
    }

    /**
     * @return string
     */
    public function getMobileTheme()
    {
        return $this->mobile_theme;
    }

    /**
     * @param string $mobile_theme
     * @return OrderModel
     */
    public function setMobileTheme($mobile_theme)
    {
        $this->mobile_theme = $mobile_theme;
        return $this;
    }

    /**
     * @return float
     */
    public function getTotalDiscounts()
    {
        return $this->total_discounts;
    }

    /**
     * @param float $total_discounts
     * @return OrderModel
     */
    public function setTotalDiscounts($total_discounts)
    {
        $this->total_discounts = $total_discounts;
        return $this;
    }

    /**
     * @return float
     */
    public function getTotalDiscountsTaxIncl()
    {
        return $this->total_discounts_tax_incl;
    }

    /**
     * @param float $total_discounts_tax_incl
     * @return OrderModel
     */
    public function setTotalDiscountsTaxIncl($total_discounts_tax_incl)
    {
        $this->total_discounts_tax_incl = $total_discounts_tax_incl;
        return $this;
    }

    /**
     * @return float
     */
    public function getTotalDiscountsTaxExcl()
    {
        return $this->total_discounts_tax_excl;
    }

    /**
     * @param float $total_discounts_tax_excl
     * @return OrderModel
     */
    public function setTotalDiscountsTaxExcl($total_discounts_tax_excl)
    {
        $this->total_discounts_tax_excl = $total_discounts_tax_excl;
        return $this;
    }

    /**
     * @return float
     */
    public function getTotalPaid()
    {
        return $this->total_paid;
    }

    /**
     * @param float $total_paid
     * @return OrderModel
     */
    public function setTotalPaid($total_paid)
    {
        $this->total_paid = $total_paid;
        return $this;
    }

    /**
     * @return float
     */
    public function getTotalPaidTaxIncl()
    {
        return $this->total_paid_tax_incl;
    }

    /**
     * @param float $total_paid_tax_incl
     * @return OrderModel
     */
    public function setTotalPaidTaxIncl($total_paid_tax_incl)
    {
        $this->total_paid_tax_incl = $total_paid_tax_incl;
        return $this;
    }

    /**
     * @return float
     */
    public function getTotalPaidTaxExcl()
    {
        return $this->total_paid_tax_excl;
    }

    /**
     * @param float $total_paid_tax_excl
     * @return OrderModel
     */
    public function setTotalPaidTaxExcl($total_paid_tax_excl)
    {
        $this->total_paid_tax_excl = $total_paid_tax_excl;
        return $this;
    }

    /**
     * @return float
     */
    public function getTotalPaidReal()
    {
        return $this->total_paid_real;
    }

    /**
     * @param float $total_paid_real
     * @return OrderModel
     */
    public function setTotalPaidReal($total_paid_real)
    {
        $this->total_paid_real = $total_paid_real;
        return $this;
    }

    /**
     * @return float
     */
    public function getTotalProducts()
    {
        return $this->total_products;
    }

    /**
     * @param float $total_products
     * @return OrderModel
     */
    public function setTotalProducts($total_products)
    {
        $this->total_products = $total_products;
        return $this;
    }

    /**
     * @return float
     */
    public function getTotalProductsWt()
    {
        return $this->total_products_wt;
    }

    /**
     * @param float $total_products_wt
     * @return OrderModel
     */
    public function setTotalProductsWt($total_products_wt)
    {
        $this->total_products_wt = $total_products_wt;
        return $this;
    }

    /**
     * @return float
     */
    public function getTotalShipping()
    {
        return $this->total_shipping;
    }

    /**
     * @param float $total_shipping
     * @return OrderModel
     */
    public function setTotalShipping($total_shipping)
    {
        $this->total_shipping = $total_shipping;
        return $this;
    }

    /**
     * @return float
     */
    public function getTotalShippingTaxIncl()
    {
        return $this->total_shipping_tax_incl;
    }

    /**
     * @param float $total_shipping_tax_incl
     * @return OrderModel
     */
    public function setTotalShippingTaxIncl($total_shipping_tax_incl)
    {
        $this->total_shipping_tax_incl = $total_shipping_tax_incl;
        return $this;
    }

    /**
     * @return float
     */
    public function getTotalShippingTaxExcl()
    {
        return $this->total_shipping_tax_excl;
    }

    /**
     * @param float $total_shipping_tax_excl
     * @return OrderModel
     */
    public function setTotalShippingTaxExcl($total_shipping_tax_excl)
    {
        $this->total_shipping_tax_excl = $total_shipping_tax_excl;
        return $this;
    }

    /**
     * @return float
     */
    public function getCarrierTaxRate()
    {
        return $this->carrier_tax_rate;
    }

    /**
     * @param float $carrier_tax_rate
     * @return OrderModel
     */
    public function setCarrierTaxRate($carrier_tax_rate)
    {
        $this->carrier_tax_rate = $carrier_tax_rate;
        return $this;
    }

    /**
     * @return float
     */
    public function getTotalWrapping()
    {
        return $this->total_wrapping;
    }

    /**
     * @param float $total_wrapping
     * @return OrderModel
     */
    public function setTotalWrapping($total_wrapping)
    {
        $this->total_wrapping = $total_wrapping;
        return $this;
    }

    /**
     * @return float
     */
    public function getTotalWrappingTaxIncl()
    {
        return $this->total_wrapping_tax_incl;
    }

    /**
     * @param float $total_wrapping_tax_incl
     * @return OrderModel
     */
    public function setTotalWrappingTaxIncl($total_wrapping_tax_incl)
    {
        $this->total_wrapping_tax_incl = $total_wrapping_tax_incl;
        return $this;
    }

    /**
     * @return float
     */
    public function getTotalWrappingTaxExcl()
    {
        return $this->total_wrapping_tax_excl;
    }

    /**
     * @param float $total_wrapping_tax_excl
     * @return OrderModel
     */
    public function setTotalWrappingTaxExcl($total_wrapping_tax_excl)
    {
        $this->total_wrapping_tax_excl = $total_wrapping_tax_excl;
        return $this;
    }

    /**
     * @return string
     */
    public function getRoundMode()
    {
        return $this->round_mode;
    }

    /**
     * @param string $round_mode
     * @return OrderModel
     */
    public function setRoundMode($round_mode)
    {
        $this->round_mode = $round_mode;
        return $this;
    }

    /**
     * @return string
     */
    public function getRoundType()
    {
        return $this->round_type;
    }

    /**
     * @param string $round_type
     * @return OrderModel
     */
    public function setRoundType($round_type)
    {
        $this->round_type = $round_type;
        return $this;
    }

    /**
     * @return float
     */
    public function getConversionRate()
    {
        return $this->conversion_rate;
    }

    /**
     * @param float $conversion_rate
     * @return OrderModel
     */
    public function setConversionRate($conversion_rate)
    {
        $this->conversion_rate = $conversion_rate;
        return $this;
    }

    /**
     * @return string
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * @param string $reference
     * @return OrderModel
     */
    public function setReference($reference)
    {
        $this->reference = $reference;
        return $this;
    }

    /**
     * @return AssociationsModel
     */
    public function getAssociations()
    {
        return $this->associations;
    }

    /**
     * @param AssociationsModel $associations
     * @return OrderModel
     */
    public function setAssociations($associations)
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

