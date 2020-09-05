<?php
/**
 * Created by PhpStorm.
 * User: Z.Naderi
 * Date: 9/5/2020
 * Time: 3:15 PM
 */

class MsnCar
{
    public $name;
    private $wheel_count=4;
    private $door_count;
    protected $company;
    public static $car_static_property="This is for parent class";

    public function __construct($name=null,$wheel_count=null)
    {
        $this->name=$name;
        $this->wheel_count=$wheel_count;
    }

    public function getCompany()
    {
        return $this->company;
    }
    public function setCompany($company)
    {
        $this->company=$company;
    }
    public function getWheelCount()
    {
        return $this->wheel_count;

    }

    public function setWheelCount($wheel_count)
    {
        $this->wheel_count=$wheel_count;

    }
    function car_details()
    {
        echo $this->name.'has'.$this->wheel_count.'wheels and'.$this->door_count.'doors';
    }
}