<?php
namespace app\models\costumer;
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 24.05.2017
 * Time: 17:04
 */
class Customer
{
    /** @var string */
    public $name;

    /** @var \DateTime */
    public $birth_date;

    /** @var string */
    public $notes = '';

    /** @var PhoneRecord[] */
    public $phones = [];
    public function __construct($name, $birth_date)
    {
        $this->name=$name;
        $this->birth_date=$birth_date;
    }
}