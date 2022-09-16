<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- FontAwesome 6.1.1 CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- (Optional) Use CSS or JS implementation -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.min.js"
        integrity="sha512-6PM0qYu5KExuNcKt5bURAoT6KCThUmHRewN3zUFNaoI6Di7XJPTMoT6K0nsagZKk2OB4L7E3q1uQKHNHd4stIQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body>
    <?php

    class Student
    {
        private $name;
        private $major;
        private $gpa;

        function __construct($name, $major, $gpa)
        {
            $this->name = $name;
            $this->major = $major;
            $this->gpa = $gpa;
        }

        function hasHonors()
        {
            if ($this->gpa >= 3.0) {
                return "true";
            }

            return "false";
        }

        function getGpa()
        {
            return $this->gpa;
        }
        function setGpa($gpa)
        {
            $this->gpa = $gpa;
        }
    }

    $student1 = new Student("Jim", "Business", 3.1);
    $student2 = new Student("Pam", "Art", 2.7);

    $student2->setGpa(3.4);

    echo $student1->hasHonors() . "<br>";
    echo $student2->hasHonors() . "<br>";

    ?>
</body>

</html>