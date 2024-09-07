<?php



class Employee
{
    var $id;
    var $first_name;
    var $last_name;
    var $gender;
    var $task = array();
    var $salary;
    var $bonus = 0;
    var $is_manager;
    function GetFullName()
    {
        return ucwords($this->first_name . " " . $this->last_name);
    }

    function AddTask($task)
    {
        $this->task[] = $task;
    }

    function ShowAllTasks()
    {
        foreach ($this->task as $task) {
            echo "<li>";
            echo $task;
            echo "</li>";
        }
    }

    function GetFinalSalary()
    {
        return $this->salary + $this->bonus;
    }

    function SetSallary($salary)
    {
        $this->salary = $salary;
    }
}
