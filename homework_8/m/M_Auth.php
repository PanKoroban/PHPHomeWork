<?php
class M_Auth
{
    static function reg($name, $surname, $address, $login, $pass, $sid)
    {
            $check = M_PDO::Select("SELECT login FROM users WHERE login=:login", [':login' => $login]);
            if (!$check) {
                M_PDO::insert("INSERT INTO users (name, surname, address, login, session_id, pass ) VALUES (:name, :sur, :address, :login, :sid, :pas)",
                    [':name' => $name, ':sur' => $surname, ':address' => $address, ':login' => $login, ':pas' => $pass, ':sid' => $sid]);
                $_SESSION['auth'] = 1;
                header('Location:index.php');
            } else {
                return "Такой логин уже существует";
            }
        }


    static function logout(){
        $_SESSION['auth'] = NULL;
        $_SESSION['role'] = NULL;
        header('Location:index.php?c=auth&act=login');
    }

    static function login($login, $pass){
            $check = M_PDO::Select("SELECT * FROM users WHERE login=:login", [':login' => $login]);
            if (!$check) {
                return "Неверный логин";
            } elseif ($pass == $check[0]['pass']) {
                $_SESSION['auth'] = 1;
                if($check[0]['role'] == 1){
                    $_SESSION['role'] = 1;
                    header('Location:index.php?c=admin');
                } else header('Location:index.php');
            } else return "Неверный логин или пароль";
    }


}