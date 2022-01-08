<?php

class Account
{
    protected int $id;
    protected string $accountNb;
    protected string $typeAccount;
    protected float $solde;
    protected string $createAccountDate;
    protected int $customers_id;

    //--------------------------------------------------------------

    public function __contructor(array $data=null)
    {
        if ($data) {
            $this->hydrate($data);
        }
    }
    public function hydrate(array $data)
    {
        foreach ($data as $key => $value) {
            $method = "set". ucfirst($key);
            if (method_exists($this, $method)) {
                $this->$method($value);
            }
        }
    }

    //--------------------------------------------------------------

    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }
    public function getId()
    {
        return $this->id;
    }

    //--------------------------------------------------------------

    public function setAccountNb($accountNb)
    {
        $this->accountNb = $accountNb;
        return $this;
    }
    public function getAccountNb()
    {
        return $this->accountNb;
    }

    //--------------------------------------------------------------

    public function setTypeAccount($typeAccount)
    {
        $this->typeAccount = $typeAccount;
        return $this;
    }
    public function getTypeAccount()
    {
        return $this->typeAccount;
    }

    //--------------------------------------------------------------

    public function setCustomers_id($customers_id)
    {
        $this->customers_id = $customers_id;
        return $this;
    }
    public function getCustomers_id()
    {
        return $this->customers_id;
    }

    //--------------------------------------------------------------

    public function setSolde($solde)
    {
        $this->solde = $solde;
        return $this;
    }
    public function getSolde()
    {
        return $this->solde;
    }

    //--------------------------------------------------------------

    public function setCreateAccountDate($createAccountDate)
    {
        $this->createAccountDate = $createAccountDate;
        return $this;
    }
    public function getCreateAccountDate()
    {
        return $this->createAccountDate;
    }
}
