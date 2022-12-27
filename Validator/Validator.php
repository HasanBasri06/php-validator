<?php


class Validator
{
    private $errors = [];
    public static $error = [];

    public static function validator($forms = null)
    {

        if(!is_null($forms)){
            $arrayKeys = array_keys($forms);

            foreach ($arrayKeys as $item) {
                if (array_key_exists($item, $forms)) {
                    $expForm = explode("|", $forms[$item]);
                    foreach ($expForm as $havError) {
                        if($havError === "required" and empty($_POST[$item])){
                            self::$error[$item] = $item . " alanı boş bırakılamaz";
                            break;
                        }
                        else if($havError == "email" and filter_var($_POST[$item], FILTER_VALIDATE_EMAIL) == false){
                            self::$error[$item] = $item . " geçerli bir email adresi değildir";
                            break;
                        }
                        else if($havError == 'password'){
                            password_hash($_POST[$item], PASSWORD_DEFAULT);
                            break;
                        }
                    }
                }
            }


        }


    }
}
