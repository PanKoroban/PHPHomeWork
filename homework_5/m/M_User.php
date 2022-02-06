<?
class M_User {
    static function logout(){
        $_SESSION= [];
        return "Logout success";
    }

    static function reg($login,$pass,$name){
        $check = M_PDO::Select('SELECT * FROM users WHERE login = :login',
            ['login' => $login]);
        if ($check [0]['name']){
            return "This login already exists";
        } else{
            $arr = M_PDO::insert('INSERT INTO users (login, pass, name) VALUES (:login, :pas, :nam)',
                ['login' => $login, 'pas' => $pass, 'nam' => $name]);
            $_SESSION['is_login'] = 1;
            $_SESSION['name'] = $name;
            return "Registration success";
        }
    }



	function auth($login,$pass){
        $arr = M_PDO::Select('SELECT * FROM users WHERE login = :login and pass = :pass',
            ['login' => $login, 'pass' => $pass]);


            if($arr[0]['name']){
                $_SESSION['is_login'] = 1;
                $_SESSION['name'] = $arr[0]['name'];
                return "Welcome, ".$arr[0]['name'];
            }
        else return "Login or password incorrect";
        }

        /*
db::getInstance()->Select(
                'SELECT * FROM users WHERE login = :login',
                ['status' => Status::Active, 'category' => $categoryId, 'good'=>$goodId]);
*/
    }
