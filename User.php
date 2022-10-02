<?php

class User{
    private string $firstName;
    private string $lastName;
    private string $email;
    private string $sex;
    private ?string $middleName = null;
    private int $age;
    private bool $isActive = true;

    public function __construct(
       string $firstName,
       string $lastName,
       string $email,
       string $sex,
       int $age
    ){
        $this->firstName= $firstName;
        $this->lastName= $lastName;
        $this->email= $email;
        $this->sex= $sex;
        $this->age= $age;
    }


    public function getFirstName(): int
    {
        return $this->firstName;
    }

    // Изменяем имя пользователя
    public function setFirstName(string $firstName): void
    {
        $this->firstName = $firstName;
    }

    // Изменяем фамилию пользователя
    public function setLastName(string $lastName): void
    {
        $this->lastName = $lastName;
    }

    // Изменяем почту пользователя
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    // Изменяем отчетсво пользователя
    public function setMiddleName(?string $middleName): void
    {
        $this->middleName = $middleName;
    }

    // Изменяем активность пользователя
    public function setIsActive(bool $isActive): void
    {
        $this->isActive = $isActive;
    }
    public function getLastName(): int
    {
        return $this->lastName;
    }
    public function getMiddleName(): int
    {
        return $this->middleName;
    }
    public function getEmail(): int
    {
        return $this->email;
    }
    public function getSex(): int
    {
        return $this->sex;
    }
    public function getAge(): int
    {
        return $this->age;
    }
    public function getIsActive(): int
    {
        return $this->isActive;
    }


}
