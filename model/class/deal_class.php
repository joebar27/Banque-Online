<?php

class Deal {

    protected int $id;
    protected int $dealNb;
    protected string $dealType;
    protected string $description;
    protected float $amount;
    protected string $dealDate;
    protected int $customers_id;
    protected int $account_id;

    //--------------------------------------------------------------

    public function __contructor(array $data=null) {
        if ($data) {
            $this->hydrate($data);
        }
    }
    public function hydrate(array $data) {
        foreach ($data as $key => $value) {
          $method = "set". ucfirst($key);
          if(method_exists($this, $method)) {
            $this->$method($value);
          }
        }
    }

    //--------------------------------------------------------------

    public function setId($id) {
        $this->id = $id;
        return $this;
    }
    public function getId() {
        return $this->id;
    }

    //--------------------------------------------------------------

    public function setDealNb($dealNb) {
        $this->dealNb = $dealNb;
        return $this;
    }
    public function getDealNb() {
        return $this->dealNb;
    }
    
    //--------------------------------------------------------------

    public function setDealType($dealType) {
        $this->dealType = $dealType;
        return $this;
    }
    public function getDealType() {
        return $this->dealType;
    }
    
    //--------------------------------------------------------------

    public function setDescription($description) {
        $this->description = $description;
        return $this;
    }
    public function getDescription() {
        return $this->description;
    }

    //--------------------------------------------------------------

    public function setAmount($amount) {
        $this->amount = $amount;
        return $this;
    }
    public function getAmount() {
        return $this->amount;
    }

    //--------------------------------------------------------------
    public function setDealDate($dealDate) {
        $this->dealDate = $dealDate;
        return $this;
    }
    public function getDealDate() {
        return $this->dealDate;
    }
    
    //--------------------------------------------------------------

    public function setCustommers_id($custommers_id) {
        $this->custommers_id = $custommers_id;
        return $this;
    }
    public function getCustommers_id() {
        return $this->custommers_id;
    }

    //--------------------------------------------------------------

    public function setAccount_id($account_id) {
        $this->account_id = $account_id;
        return $this;
    }
    public function getAccount_id() {
        return $this->account_id;
    }    
}

?>