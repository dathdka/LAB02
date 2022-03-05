<html  lang="vi">
    <head>
        <meta charset="UTF-8" />
        <link rel="stylesheet" href="/LAB02.site.css">
    </head>
    <body>
        <div id="wrapper">
            <?php
                require_once("userclass.php");
                $HoangDat = new User('Hoang Dat', 'dathdka@gmail.com');
                echo "<br> UserName: ". $HoangDat->getUserName()."<br/>";
                echo "<br> UserEmail: ". $HoangDat->getUserEmail()."<br/>";

                echo "<h1>-------------------------------</h1>";
                include("employeeclass.php");
                $person_a = new person("Truong The Hao", 123);
                echo "person name: ". $person_a->getName() ."<br/>";
                echo "person ID: ". $person_a->getNationalID() ."<br/>";


                echo "<h1>-------------------------------</h1>";
                $employee_a = new employee("Tieu Anh Khoa", 234, "Lao cong");
                echo "employee ID: ". $employee_a->GetEmployeeID()."<br/>";
                echo "employee Name: ". $employee_a->getName()."<br/>";
                echo "employee Department: ". $employee_a->GetDepartment()."<br/>";
                echo "<h1>-------------------------------</h1>";

                $employee_b = new employee("Thai Trung Kien", 234, "Bao ve");
                echo "employee ID: ". $employee_b->GetEmployeeID()."<br/>";
                echo "employee Name: ". $employee_b->getName()."<br/>";
                echo "employee Department: ". $employee_b->GetDepartment()."<br/>";
            ?>
        </div>
    </body>
</html>