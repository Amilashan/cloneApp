

<?php
    class StudentParent {
        // properties
        public $stdName;
        public $stdRegNum;

        // constructor
        function __construct($Name, $regnum) {
            $this->stdName = $Name;
            $this->stdRegNum = $regnum;
        }
    }

    class StudentChild extends StudentParent {
        public function display() {
            return "<div>The student name is {$this->stdName} and Registration Number is {$this->stdRegNum}</div>";
        }
    }
?>

<?php
    $msg = "";
    if (isset($_POST['submit'])) {
        $stdName = $_POST['stdName'];
        $stdRegNum = $_POST['stdRegNum'];
        if (empty($stdName) || empty($stdRegNum)) {
            $msg = "<div class='alert alert-danger'>All fields are required.</div>";
        }else {
            $student = new StudentChild($stdName, $stdRegNum);
            $msg = "<div class='alert alert-success'>{$student->display()}</div>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Question 01</title>
</head>
<body>
    <div class="wrapper">
        <h2 class="title">Form</h2>
        <?php echo $msg; ?>
        <form action="" method="post" class="form" name="form">
            <div class="input-field">
                <label for="stdName" class="input-label">Name</label>
                <input type="text" name="stdName" class="input" id="stdName" placeholder="Enter your name" value="<?php if (isset($_POST['submit'])) { echo $stdName; } ?>">
            </div>
            <div class="input-field">
                <label for="stdRegNum" class="input-label">Reg No.</label>
                <input type="text" name="stdRegNum" class="input" id="stdRegNum" placeholder="Enter your registration number" value="<?php if (isset($_POST['submit'])) { echo $stdRegNum; } ?>">
            </div>
            <button type="submit" name="submit" class="btn">Submit</button>
        </form>
    </div>
    
</body>
</html>