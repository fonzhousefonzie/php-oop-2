<?php
require_once __DIR__ . "/user.php";

class Customer extends User
{
    protected $paymentMethod;
    protected $paymentExpDate;
    protected $address;
    protected $cart;

    function __construct($_name, $_lastName,$_email, $_isLogged, $_paymentMethod, $_paymentExpDate, $_address)
    {
        parent::__construct($_name, $_lastName,$_email, $_isLogged);

        $this->setPaymentMethod($_paymentMethod);
        $this->setPaymentExpDate($_paymentExpDate);
        $this->setAddress($_address);
        $this->cart = new Cart();
    }

    /**
     * Get the value of paymentMethod
     */
    public function getPaymentMethod()
    {
        return $this->paymentMethod;
    }

    /**
     * Set the value of paymentMethod
     */
    public function setPaymentMethod($paymentMethod): self
    {
        $this->paymentMethod = $paymentMethod;

        return $this;
    }

    /**
     * Get the value of paymentExpDate
     */
    public function getPaymentExpDate()
    {
        return $this->paymentExpDate;
    }

    /**
     * Set the value of paymentExpDate
     */
    public function setPaymentExpDate($paymentExpDate): self
    {
        $this->paymentExpDate = $paymentExpDate;

        return $this;
    }

    /**
     * Get the value of address
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set the value of address
     */
    public function setAddress($address): self
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Apply discount
     */
    public function applyDiscount(){
        if($this->_isLogged){
            $this->cart->getTotal() - (($this->cart->getTotal() / 100) * 20);
        } else {
            $this->cart->getTotal();
        }
    }
}