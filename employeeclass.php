<?php
require_once("personclass.php");

class employee extends Person
{
    private $employeeID;
    private $department;
    public function __construct($employeeName, $nationalID, $department)
    {
        parent::__construct($employeeName, $nationalID);
        $this->department =  $department;
        $this->employeeID = $this->GenerateEmployeeID();
    }
    public function GetEmployeeID()
    {
        return $this->employeeID;
    }
    public function SetEmployeeID($employeeID)
    {
        $this->employeeID = $employeeID;
    }
    public function GetEmployeeName()
    {
        return $this->employeeName;
    }
    public function SetEmployeeName($employeeName)
    {
        $this->employeeName = $employeeName;
    }
    
    public function GetDepartment()
    {
        return $this->department;
    }
    final private function GenerateEmployeeID()
    {
        static $IDGen = 1;
        return $IDGen++;
    }
}
?>