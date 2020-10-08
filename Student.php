<?php
 class Student{
	public $fullName;
	public $age;
	public $firstPoint;
	public $secondPoint;
	public $thirdPoint;
	public $address;
	public $sex;
	//public age;
    /**

     * @return mixed
     */

    public function __construct($fullName, $age, $firstPoint, $secondPoint, $thirdPoint, $address, $sex)
    {
    	$this->fullName = $fullName;
    	$this->age = $age;
    	$this->firstPoint = $firstPoint;
    	$this->secondPoint = $secondPoint;
    	$this->thirdPoint = $thirdPoint;
    	$this->address = $address;
    	$this->sex = $sex;
    }
    public function getMediumScore()
    {
    	return ($this->firstPoint + $this->secondPoint + $this->thirdPoint)/3;
    }
    public function getFullName()
    {
        return $this->fullName;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @return mixed
     */
    public function getFirstPoint()
    {
        return $this->firstPoint;
    }

    /**
     * @return mixed
     */
    public function getSecondPoint()
    {
        return $this->secondPoint;
    }

    /**
     * @return mixed
     */
    public function getThirdPoint()
    {
        return $this->thirdPoint;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @return mixed
     */
    public function getSex()
    {
        return $this->sex;
    }
}
?>