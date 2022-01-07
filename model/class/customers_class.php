<?php

class Customer
{
    protected int $id;
    protected string $firstname;
    protected string $lastname;
    protected string $birthdayDate;
    protected string $sex;
    protected string $adress;
    protected string $city;
    protected int $postalCode;
    protected string $country;
    protected string $phoneNb;
    protected string $email;
    protected string $login;
    protected string $password;
    
    //--------------------------------------------------------------
    
    public function __construct(array $data=null)
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
   
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
        return $this;
    }
    public function getFirstname()
    {
        return $this->firstname;
    }
    //--------------------------------------------------------------

    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
        return $this;
    }
    public function getLastname()
    {
        return $this->lastname;
    }
    //--------------------------------------------------------------
    
    public function setBirthdayDate($birthdayDate)
    {
        $this->birthdayDate = $birthdayDate;
        return $this;
    }
    public function getBirthdayDate()
    {
        return $this->birthdayDate;
    }
    //--------------------------------------------------------------
    
    public function setSex($sex)
    {
        $this->sex = $sex;
        return $this;
    }
    public function getSex()
    {
        return $this->sex;
    }
    //--------------------------------------------------------------
    
    public function setAdress($adress)
    {
        $this->adress = $adress;
        return $this;
    }
    public function getAdress()
    {
        return $this->adress;
    }
    //--------------------------------------------------------------
    
    public function setCity($city)
    {
        $this->city = $city;
        return $this;
    }
    public function getCity()
    {
        return $this->city;
    }
    //--------------------------------------------------------------
    
    public function setPostalCode($postalCode)
    {
        $this->postalCode = $postalCode;
        return $this;
    }
    public function getPostalCode()
    {
        return $this->postalCode;
    }
    
    //--------------------------------------------------------------
    
    public function setCountry($country)
    {
        $this->country = $country;
        return $this;
    }
    public function getCountry()
    {
        return $this->country;
    }
    //--------------------------------------------------------------
    
    public function setPhoneNb($phoneNb)
    {
        $this->phoneNb = $phoneNb;
        return $this;
    }
    public function getPhoneNb()
    {
        return $this->phoneNb;
    }
    //--------------------------------------------------------------
    
    public function setEmail(string $email)
    {
        $this->email = $email;
        return $this;
    }
    public function getEmail():string
    {
        return $this->email;
    }
    //--------------------------------------------------------------
    
    public function setLogin(string $login):Customer
    {
        $this->login = $login;
        return $this;
    }
    public function getLogin():string
    {
        return $this->login;
    }
    //--------------------------------------------------------------
    
    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }
    public function getPassword()
    {
        return $this->password;
    }
}
