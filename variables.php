<?php
class VariablesExample
{
    private static $loginAdminUser = array("id" => "1", "username" => "diellza", "password" => "kosumi", 'role' => '1');
    private static $users;
    public static function getUsers()
    {
        self::$users = array(self::$loginAdminUser);
        return self::$users;
    }
}
