<?php
$releaseDeadlines = include(__DIR__ . '/../../staticData/releases.staticdata.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Neo's Calendar - Release Deadlines</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="../../assets/css/releases.css" />
</head>
<body>
    <?php include(__DIR__ . '/../../layout/header.layout.php'); ?>

    <main class="container">
        <h2 class="releases-header">All Upcoming Deadlines</h2>
        <ul class="release-list">
            <?php foreach ($releaseDeadlines as $date => $title): ?>
                <li>
                    <strong><?= htmlspecialchars($date); ?>:</strong>
                    <?= htmlspecialchars($title); ?>
                </li>
            <?php endforeach; ?>
        </ul>

        <div class="releases-footer">
            <a href="../calendar/index.php" class="back-link">Back to Calendar</a>
        </div>
    </main>

    <?php include(__DIR__ . '/../../layout/footer.layout.php'); ?>
</body>
</html>
