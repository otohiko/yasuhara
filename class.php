<?php

class User
{
    /* クラスの定義 */

    /* インスタンス変数 */
    public $name;
    public $address;
    public $age;

    /* コンストラクタの定義 */
    public function __construct($name, $address, $age)
    {
        $this->name = $name;
        $this->address = $address;
        $this->age = $age;
    }

    /* 関数を定義する */
    public function hello()
    {
        $name = $this->sanduke();
        echo 'こんちは' . $name;
    }

    private function sanduke()
    {
        return $this->name . 'さん';
    }
}

class Naohiko extends User
{
    /* コンストラクタの定義 */
    public function __construct()
    {
        parent::__construct('尚彦', '東京都文京区', 26);
    }
}

class Yasuhara extends User
{
    /* コンストラクタの定義 */
    public function __construct()
    {
        parent::__construct('安原', '埼玉県', 24);
    }
}

?>
