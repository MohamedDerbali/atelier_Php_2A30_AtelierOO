<?php
class client {
    public string $lastName;
    public string $firstName;
    public string $password;
    public int $phone;
    public string $address;
    public DateTime $Dob;
    public function __construct($lastName = null, $firstName =null, $password = null, $phone = null, $address =null, $Dob= null)
    {
       $this->lastName = $lastName;
       $this->firstName = $firstName;
       $this->password= $password;
       $this->address = $address;
       $this->phone = $phone;
       $this->Dob = $Dob;
    }
}
