 <?php
    include('pdo.php');
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $gender = $_POST['gender'];
        $age = $_POST['age'];
        $number = $_POST['number'];
        $social = $_POST['social'];
        $city = $_POST['city'];
        $study = $_POST['study'];
        $position = $_POST['position'];
        $nationality = $_POST['nationality'];
        $poltical = $_POST['poltical'];
        $des1 = $_POST['des1'];
        $des2 = $_POST['des2'];
        $des3 = $_POST['des3'];
        $insert =   insertSingleRow($name, $gender, $age, $number, $social, $city, $study, $position, $nationality, $poltical, $des1, $des2, $des3);
        if ($insert != null) {
            header('Location: ../links.php');
        }
    }
