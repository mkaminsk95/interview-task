<?php
declare(strict_types=1);

class UserValidator
{
    private const string EMAIL_PATTERN = '/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/';
    private const string PASSWORD_PATTERN = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&.])[A-Za-z\d@$!%*?&.]{8,}$/';

    public function validateEmail(string $email): bool
    {
        return (bool)preg_match(self::EMAIL_PATTERN, $email);
    }

    public function validatePassword(string $password): bool
    {
        return (bool)preg_match(self::PASSWORD_PATTERN, $password);
    }

//    public function validatePassword(string $password): bool
//    {
//        if (
//            $this->isLongEnough($password) &&
//            $this->ifContainsUppercase($password) &&
//            $this->ifContainsLowercase($password) &&
//            $this->ifContainsDigit($password) &&
//            $this->ifContainsSpecialSign($password) &&
//            $this->ifContainsOnlyValidCharacters($password)
//        ) {
//            return true;
//        }
//
//        return false;
//    }
//
//    public function ifContainsLowercase(string $password): bool
//    {
//        return (bool)preg_match('/[a-z]/', $password);
//    }
//
//    public function ifContainsUppercase(string $password): bool
//    {
//        return (bool)preg_match('/[A-Z]/', $password);
//    }
//
//    public function isLongEnough(string $password): bool
//    {
//        return strlen($password) >= 8;
//    }
//
//    public function ifContainsDigit(string $password): bool
//    {
//        return (bool)preg_match('/[0-9]/', $password);
//    }
//
//    public function ifContainsSpecialSign(string $password): bool
//    {
//        return (bool)preg_match('/[@$!%*?&.]/', $password);
//    }
//
//    // there has to be additional check for whitespaces and other non-included special characters
//    public function ifContainsOnlyValidCharacters(string $password): bool
//    {
//        return (bool)preg_match('/^[A-Za-z\d@$!%*?&.]+$/', $password);
//    }
}
