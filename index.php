<html  lang="vi">
    <head>
        <meta charset="UTF-8" />
        <link rel="stylesheet" href="/LAB02/site.css">
    </head>
    <body style = "background:lightskyblue">
        <div id="wrapper">
        <nav id ="nav-1">
            <?php
            require_once("userclass.php");
            $HoangDat = new User('Hoang Dat', 'dathdka@gmail.com');
            echo "<br> UserName: ". $HoangDat->getUserName()."<br/>";
            echo "<br> UserEmail: ". $HoangDat->getUserEmail()."<br/>";
            ?>
            </nav>
                <!-- --------------------------------------------->
            <nav id ="nav-2">
            <?php
                echo "<h1>-------------------------------</h1>";
                include("employeeclass.php");
                $person_a = new person("Truong The Hao", 123);
                echo "person name: ". $person_a->getName() ."<br/>";
                echo "person ID: ". $person_a->getNationalID() ."<br/>";
            ?>
            </nav>
                <!-- --------------------------------------------->
            <nav id ="nav-3">
            <?php
                echo "<h1>-------------------------------</h1>";
                $employee_a = new employee("Tieu Anh Khoa", 234, "Lao cong");
                echo "employee ID: ". $employee_a->GetEmployeeID()."<br/>";
                echo "employee Name: ". $employee_a->getName()."<br/>";
                echo "employee Department: ". $employee_a->GetDepartment()."<br/>";
                echo "<h1>-------------------------------</h1>";
            ?>
            </nav>
                <!-- --------------------------------------------->
            <nav id ="nav-4">
            <?php
                $employee_b = new employee("Thai Trung Kien", 234, "Bao ve");
                echo "employee ID: ". $employee_b->GetEmployeeID()."<br/>";
                echo "employee Name: ". $employee_b->getName()."<br/>";
                echo "employee Department: ". $employee_b->GetDepartment()."<br/>";
            ?>
            </nav>
            ?>
        </div>
        <footer>
            &#169; 2016 - Hon Dat - Hutech
        </footer>
    </body>
</html>