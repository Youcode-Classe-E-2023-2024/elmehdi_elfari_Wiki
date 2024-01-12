<?php
class SignupModel
{
    private $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function insertModel($firstName, $lastName, $password, $email)
    {
        $this->user->insert($firstName, $lastName, $password, $email);
    }
}
