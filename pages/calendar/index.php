<?php
$year = 2025;
$month = 7;
$todayDate = '2025-07-04';

$releaseDeadlines = include(__DIR__ . '/../../staticData/releases.staticdata.php');

$monthNames = [
    1 => 'January', 2 => 'February', 3 => 'March', 4 => 'April',
    5 => 'May', 6 => 'June', 7 => 'July', 8 => 'August',
    9 => 'September', 10 => 'October', 11 => 'November', 12 => 'December'
];
$currentMonthName = $monthNames[$month];
$daysInMonth = cal_days_in_month(CAL_GREGORIAN, $month, $year);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Neo's Calendar - Release Calendar</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="../../assets/css/calendar.css" />
</head>
<body>
    <?php include(__DIR__ . '/../../layout/header.layout.php'); ?>

    <main class="container">
        <h2 class="calendar-header"><?= $currentMonthName . " " . $year; ?> Release Schedule</h2>
        <ul class="daily-schedule">
            <?php
            for ($day = 1; $day <= $daysInMonth; $day++) {
                $currentDate = sprintf('%04d-%02d-%02d', $year, $month, $day);
                $classes = [];
                $content = '<span class="no-deadline">No major release deadline.</span>';

                if ($currentDate === $todayDate) $classes[] = 'today';
                if (isset($releaseDeadlines[$currentDate])) {
                    $classes[] = 'deadline';
                    $content = '<span class="deadline-label">Deadline:</span> <span class="deadline-item">'
                             . htmlspecialchars($releaseDeadlines[$currentDate]) . '</span>';
                }

                echo '<li class="day-entry ' . implode(' ', $classes) . '">';
                echo '<span class="day-number">' . $day . '</span>';
                echo '<div class="day-content">' . $content . '</div>';
                echo '</li>';
            }
            ?>
        </ul>

        <div class="calendar-footer">
            <a href="../releases/index.php" class="calendar-footer-button">View All Deadlines</a>
        </div>
    </main>

    <?php include(__DIR__ . '/../../layout/footer.layout.php'); ?>
</body>
</html>
