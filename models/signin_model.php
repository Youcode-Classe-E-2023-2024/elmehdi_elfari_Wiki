<?php

class SigninModel
{
    private $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /** Method pour inserer les articles:
     * @param string $password
     * @param string $email
     */
    public function signinModel($password, $email)
    {
        return $this->user->signin($password, $email);
    }

    public function isEmailAdminModel($email)
    {
        return $this->user->isEmailAdmin($email);
    }
}
