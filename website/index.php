<html>
    <head>
        <title>University of Pireas Courses</title>
    </head>

    <body>
        <h1>MSC Big Data and Analytics - Courses</h1>
        <ul>
            <?php

            $json = file_get_contents('http://course-service/');
            $obj = json_decode($json);

            $courses = $obj->courses;

            foreach ($courses as $course) {
                echo "<li>$course</li>";
            }

            ?>
        </ul>
    </body>
</html>
