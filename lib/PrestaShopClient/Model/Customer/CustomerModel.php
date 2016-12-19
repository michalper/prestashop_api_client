<?php

namespace PrestaShopClient\Model\Customer;

class CustomerModel
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $id_default_group;

    /**
     * @var integer
     */
    private $id_lang;

    /**
     * @var \DateTime
     */
    private $newsletter_date_add;

    /**
     * @var array
     */
    private $ip_registration_newsletter;

    /**
     * @var \DateTime
     */
    private $last_passwd_gen;

    /**
     * @var string
     */
    private $secure_key;

    /**
     * @var bool
     */
    private $deleted;

    /**
     * @var string
     */
    private $passwd;

    /**
     * @var string
     */
    private $lastname;

    /**
     * @var string
     */
    private $firstname;

    /**
     * @var string
     */
    private $email;

    /**
     * @var integer
     */
    private $id_gender;

    /**
     * @var \DateTime
     */
    private $birthday;

    /**
     * @var boolean
     */
    private $newsletter;

    /**
     * @var boolean
     */
    private $optin;

    /**
     * @var array
     */
    private $website;

    /**
     * @var array
     */
    private $company;

    /**
     * @var array
     */
    private $siret;

    /**
     * @var array
     */
    private $ape;

    /**
     * @var float
     */
    private $outstanding_allow_amount;

    /**
     * @var boolean
     */
    private $show_public_prices;

    /**
     * @var integer
     */
    private $id_risk;

    /**
     * @var integer
     */
    private $max_payment_days;

    /**
     * @var boolean
     */
    private $active;

    /**
     * @var array
     */
    private $note;

    /**
     * @var boolean
     */
    private $is_guest;

    /**
     * @var integer
     */
    private $id_shop;

    /**
     * @var integer
     */
    private $id_shop_group;

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
    private $reset_password_token;

    /**
     * @var \DateTime
     */
    private $reset_password_validity;

    /**
     * @var array
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
     * @return CustomerModel
     */
    public function setId(int $id): CustomerModel
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return int
     */
    public function getIdDefaultGroup(): int
    {
        return $this->id_default_group;
    }

    /**
     * @param int $id_default_group
     * @return CustomerModel
     */
    public function setIdDefaultGroup(int $id_default_group): CustomerModel
    {
        $this->id_default_group = $id_default_group;
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
     * @return CustomerModel
     */
    public function setIdLang(int $id_lang): CustomerModel
    {
        $this->id_lang = $id_lang;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getNewsletterDateAdd(): \DateTime
    {
        return $this->newsletter_date_add;
    }

    /**
     * @param \DateTime $newsletter_date_add
     * @return CustomerModel
     */
    public function setNewsletterDateAdd(\DateTime $newsletter_date_add): CustomerModel
    {
        $this->newsletter_date_add = $newsletter_date_add;
        return $this;
    }

    /**
     * @return array
     */
    public function getIpRegistrationNewsletter(): array
    {
        return $this->ip_registration_newsletter;
    }

    /**
     * @param array $ip_registration_newsletter
     * @return CustomerModel
     */
    public function setIpRegistrationNewsletter(array $ip_registration_newsletter): CustomerModel
    {
        $this->ip_registration_newsletter = $ip_registration_newsletter;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getLastPasswdGen(): \DateTime
    {
        return $this->last_passwd_gen;
    }

    /**
     * @param \DateTime $last_passwd_gen
     * @return CustomerModel
     */
    public function setLastPasswdGen(\DateTime $last_passwd_gen): CustomerModel
    {
        $this->last_passwd_gen = $last_passwd_gen;
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
     * @return CustomerModel
     */
    public function setSecureKey(string $secure_key): CustomerModel
    {
        $this->secure_key = $secure_key;
        return $this;
    }

    /**
     * @return bool
     */
    public function isDeleted(): bool
    {
        return $this->deleted;
    }

    /**
     * @param bool $deleted
     * @return CustomerModel
     */
    public function setDeleted(bool $deleted): CustomerModel
    {
        $this->deleted = $deleted;
        return $this;
    }

    /**
     * @return string
     */
    public function getPasswd(): string
    {
        return $this->passwd;
    }

    /**
     * @param string $passwd
     * @return CustomerModel
     */
    public function setPasswd(string $passwd): CustomerModel
    {
        $this->passwd = $passwd;
        return $this;
    }

    /**
     * @return string
     */
    public function getLastname(): string
    {
        return $this->lastname;
    }

    /**
     * @param string $lastname
     * @return CustomerModel
     */
    public function setLastname(string $lastname): CustomerModel
    {
        $this->lastname = $lastname;
        return $this;
    }

    /**
     * @return string
     */
    public function getFirstname(): string
    {
        return $this->firstname;
    }

    /**
     * @param string $firstname
     * @return CustomerModel
     */
    public function setFirstname(string $firstname): CustomerModel
    {
        $this->firstname = $firstname;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     * @return CustomerModel
     */
    public function setEmail(string $email): CustomerModel
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return int
     */
    public function getIdGender(): int
    {
        return $this->id_gender;
    }

    /**
     * @param int $id_gender
     * @return CustomerModel
     */
    public function setIdGender(int $id_gender): CustomerModel
    {
        $this->id_gender = $id_gender;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getBirthday(): \DateTime
    {
        return $this->birthday;
    }

    /**
     * @param \DateTime $birthday
     * @return CustomerModel
     */
    public function setBirthday(\DateTime $birthday): CustomerModel
    {
        $this->birthday = $birthday;
        return $this;
    }

    /**
     * @return bool
     */
    public function isNewsletter(): bool
    {
        return $this->newsletter;
    }

    /**
     * @param bool $newsletter
     * @return CustomerModel
     */
    public function setNewsletter(bool $newsletter): CustomerModel
    {
        $this->newsletter = $newsletter;
        return $this;
    }

    /**
     * @return bool
     */
    public function isOptin(): bool
    {
        return $this->optin;
    }

    /**
     * @param bool $optin
     * @return CustomerModel
     */
    public function setOptin(bool $optin): CustomerModel
    {
        $this->optin = $optin;
        return $this;
    }

    /**
     * @return array
     */
    public function getWebsite(): array
    {
        return $this->website;
    }

    /**
     * @param array $website
     * @return CustomerModel
     */
    public function setWebsite(array $website): CustomerModel
    {
        $this->website = $website;
        return $this;
    }

    /**
     * @return array
     */
    public function getCompany(): array
    {
        return $this->company;
    }

    /**
     * @param array $company
     * @return CustomerModel
     */
    public function setCompany(array $company): CustomerModel
    {
        $this->company = $company;
        return $this;
    }

    /**
     * @return array
     */
    public function getSiret(): array
    {
        return $this->siret;
    }

    /**
     * @param array $siret
     * @return CustomerModel
     */
    public function setSiret(array $siret): CustomerModel
    {
        $this->siret = $siret;
        return $this;
    }

    /**
     * @return array
     */
    public function getApe(): array
    {
        return $this->ape;
    }

    /**
     * @param array $ape
     * @return CustomerModel
     */
    public function setApe(array $ape): CustomerModel
    {
        $this->ape = $ape;
        return $this;
    }

    /**
     * @return float
     */
    public function getOutstandingAllowAmount(): float
    {
        return $this->outstanding_allow_amount;
    }

    /**
     * @param float $outstanding_allow_amount
     * @return CustomerModel
     */
    public function setOutstandingAllowAmount(float $outstanding_allow_amount): CustomerModel
    {
        $this->outstanding_allow_amount = $outstanding_allow_amount;
        return $this;
    }

    /**
     * @return bool
     */
    public function isShowPublicPrices(): bool
    {
        return $this->show_public_prices;
    }

    /**
     * @param bool $show_public_prices
     * @return CustomerModel
     */
    public function setShowPublicPrices(bool $show_public_prices): CustomerModel
    {
        $this->show_public_prices = $show_public_prices;
        return $this;
    }

    /**
     * @return int
     */
    public function getIdRisk(): int
    {
        return $this->id_risk;
    }

    /**
     * @param int $id_risk
     * @return CustomerModel
     */
    public function setIdRisk(int $id_risk): CustomerModel
    {
        $this->id_risk = $id_risk;
        return $this;
    }

    /**
     * @return int
     */
    public function getMaxPaymentDays(): int
    {
        return $this->max_payment_days;
    }

    /**
     * @param int $max_payment_days
     * @return CustomerModel
     */
    public function setMaxPaymentDays(int $max_payment_days): CustomerModel
    {
        $this->max_payment_days = $max_payment_days;
        return $this;
    }

    /**
     * @return bool
     */
    public function isActive(): bool
    {
        return $this->active;
    }

    /**
     * @param bool $active
     * @return CustomerModel
     */
    public function setActive(bool $active): CustomerModel
    {
        $this->active = $active;
        return $this;
    }

    /**
     * @return array
     */
    public function getNote(): array
    {
        return $this->note;
    }

    /**
     * @param array $note
     * @return CustomerModel
     */
    public function setNote(array $note): CustomerModel
    {
        $this->note = $note;
        return $this;
    }

    /**
     * @return bool
     */
    public function isIsGuest(): bool
    {
        return $this->is_guest;
    }

    /**
     * @param bool $is_guest
     * @return CustomerModel
     */
    public function setIsGuest(bool $is_guest): CustomerModel
    {
        $this->is_guest = $is_guest;
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
     * @return CustomerModel
     */
    public function setIdShop(int $id_shop): CustomerModel
    {
        $this->id_shop = $id_shop;
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
     * @return CustomerModel
     */
    public function setIdShopGroup(int $id_shop_group): CustomerModel
    {
        $this->id_shop_group = $id_shop_group;
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
     * @return CustomerModel
     */
    public function setDateAdd(\DateTime $date_add): CustomerModel
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
     * @return CustomerModel
     */
    public function setDateUpd(\DateTime $date_upd): CustomerModel
    {
        $this->date_upd = $date_upd;
        return $this;
    }

    /**
     * @return array
     */
    public function getResetPasswordToken(): array
    {
        return $this->reset_password_token;
    }

    /**
     * @param array $reset_password_token
     * @return CustomerModel
     */
    public function setResetPasswordToken(array $reset_password_token): CustomerModel
    {
        $this->reset_password_token = $reset_password_token;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getResetPasswordValidity(): \DateTime
    {
        return $this->reset_password_validity;
    }

    /**
     * @param \DateTime $reset_password_validity
     * @return CustomerModel
     */
    public function setResetPasswordValidity(\DateTime $reset_password_validity): CustomerModel
    {
        $this->reset_password_validity = $reset_password_validity;
        return $this;
    }

    /**
     * @return array
     */
    public function getAssociations(): array
    {
        return $this->associations;
    }

    /**
     * @param array $associations
     * @return CustomerModel
     */
    public function setAssociations(array $associations): CustomerModel
    {
        $this->associations = $associations;
        return $this;
    }
}