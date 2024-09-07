<?php
require_once "Employee.php";

$employee1 = new Employee();
$employee1->id = 1;
$employee1->first_name = "Abdul";
$employee1->last_name = "Rahman";
$employee1->gender = "Male";
$employee1->bonus = 100;
$employee1->is_manager = true;
$employee1->SetSallary(10000);
$employee1->AddTask("Task 1");
$employee1->AddTask("Task 2");
$employee1->AddTask("Task 3");
$employee1->AddTask("Task 4");

$employee2 = new Employee();
$employee2->id = 2;
$employee2->first_name = "Fatima";
$employee2->last_name = "Rahman";
$employee2->gender = "Female";
$employee2->is_manager = false;
$employee2->SetSallary(10000);
$employee2->AddTask("Task 1");
$employee2->AddTask("Task 2");

$employee3 = new Employee();
$employee3->id = 3;
$employee3->first_name = "Ahmed";
$employee3->last_name = "Rahman";
$employee3->gender = "Male";
$employee3->is_manager = false;
$employee3->SetSallary(10000);
$employee3->AddTask("Task 1");
$employee3->AddTask("Task 2");
$employee3->AddTask("Task 3");

$employee4 = new Employee();
$employee4->id = 4;
$employee4->first_name = "Sana";
$employee4->last_name = "Rahman";
$employee4->gender = "Female";
$employee4->bonus = 200;
$employee4->is_manager = false;
$employee4->SetSallary(10000);
$employee4->AddTask("Task 1");
$employee4->AddTask("Task 2");
$employee4->AddTask("Task 3");
$employee4->AddTask("Task 4");
$employee4->AddTask("Task 5");

$employee5 = new Employee();
$employee5->id = 5;
$employee5->first_name = "Rana";
$employee5->last_name = "Rahman";
$employee5->gender = "Female";
$employee5->bonus = 300;
$employee5->is_manager = false;
$employee5->SetSallary(10000);
$employee5->AddTask("Task 1");
$employee5->AddTask("Task 2");
$employee5->AddTask("Task 3");
$employee5->AddTask("Task 4");
$employee5->AddTask("Task 5");
$employee5->AddTask("Task 6");

$employee[] = [
    $employee1,
    $employee2,
    $employee3,
    $employee4,
    $employee5
];
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container my-5 text-center">
        <div class="row">
            <div class="col-12">
                <h1>Employees</h1>
            </div>
        </div>
        <table class="table">
            <tr class="table-primary">
                <th>ID</th>
                <th>Name</th>
                <th>Gender</th>
                <th>Sallary</th>
                <th>Manager</th>
                <th>Tasks</th>
                <th>Final Salary</th>
            </tr>
            <?php foreach ($employee as $employee) : ?>
                <?php foreach ($employee as $employee) : ?>
                    <tr>
                        <td><?= $employee->id ?></td>
                        <td><?= $employee->GetFullName() ?></td>
                        <td><?= $employee->gender ?></td>
                        <td><?= $employee->salary ?></td>
                        <?php if ($employee->is_manager) : ?>
                            <td>Yes</td>
                        <?php else : ?>
                            <td>No</td>
                        <?php endif; ?>
                        <td>
                            <ul>
                                <?= $employee->ShowAllTasks() ?>
                            </ul>
                        </td>
                        <td><?= $employee->GetFinalSalary() ?></td>
                    </tr>
                <?php endforeach; ?>
            <?php endforeach; ?>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>