<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>My Portfolio</h1>
    </header>
    
    <section class="projects">
        <h2>Projects</h2>
        <ul>
            <?php
            // เรียกใช้งานไฟล์ projects.php เพื่อดึงข้อมูลโปรเจ็กต์
            include 'projects.php';
            foreach ($projects as $project) {
                echo "<li><a href='{$project['url']}'>{$project['name']}</a></li>";
            }
            ?>
        </ul>
    </section>

    <footer>
        <p>&copy; 2024 My Portfolio</p>
    </footer>
</body>
</html>