<?php


namespace App\Models;


class UserData
{
    public string $firstName;
    public string $lastName;
    public string $email;
    public string $password;

    public function __construct(string $firstName, string $lastName, string $email, string $password)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
        $this->password = $password;
    }

    public static function fromArray(array $data): UserData
    {
        return new UserData($data['first_name'], $data['last_name'], $data['email'], $data['password']);
    }
}
