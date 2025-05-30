<!DOCTYPE html>
<html>
<head>
    <title>Neo's Movie Ratings</title>
    <style>
        body {
            font-family: Arial;
            background-color: #0d1117;
            color: #c9d1d9;
            padding: 20px;
        }
        h1 {
            color: #58a6ff;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            background-color: #161b22;
            margin-top: 20px;
        }
        th, td {
            padding: 10px;
            border: 1px solid #30363d;
            text-align: left;
        }
        .excellent {
            color: gold;
            font-weight: bold;
        }
        .good {
            color: lightgreen;
        }
        .average {
            color: tomato;
        }
        a {
            color: #58a6ff;
            text-decoration: none;
        }
    </style>
</head>
<body>

<h1>Neo's Ratings Evaluation</h1>

<?php
$movies = [
    ["title" => "The Godfather", "rating" => 10.0],
    ["title" => "The Godfather Part II", "rating" => 8.7],
    ["title" => "The Godfather Part III", "rating" => 7.3],
    ["title" => "Guardians of the Galaxy", "rating" => 7.9],
    ["title" => "Guardians of the Galaxy Vol. 2", "rating" => 8.1],
    ["title" => "Guardians of the Galaxy Vol. 3", "rating" => 10.0],
    ["title" => "Deadpool", "rating" => 6.9],
    ["title" => "Deadpool 2", "rating" => 7.4],
    ["title" => "Deadpool & Wolverine", "rating" => 9.2],
    ["title" => "Rise of the Planet of the Apes", "rating" => 7.8],
    ["title" => "Dawn of the Planet of the Apes", "rating" => 7.4],
    ["title" => "War for the Planet of the Apes", "rating" => 7.1],
    ["title" => "Minecraft: The Movie", "rating" => 3.0],
    ["title" => "Inception", "rating" => 8.8],
    ["title" => "The Dark Knight", "rating" => 9.0],
    ["title" => "Interstellar", "rating" => 8.6],
    ["title" => "Pulp Fiction", "rating" => 8.9],
    ["title" => "Avengers: Endgame", "rating" => 8.4],
    ["title" => "Spider-Man: No Way Home", "rating" => 8.2],
    ["title" => "The Matrix", "rating" => 8.7],
];
?>

<table>
    <tr>
        <th>Title</th>
        <th>Rating</th>
        <th>Verdict</th>
    </tr>
    <?php
    for ($i = 0; $i < count($movies); $i++) {
        $rating = $movies[$i]["rating"];
        $verdict = "";
        $class = "";

        if ($rating >= 9) {
            $verdict = "EXCELLENT";
            $class = "excellent";
        } elseif ($rating >= 7) {
            $verdict = "GOOD";
            $class = "good";
        } else {
            $verdict = "AVERAGE";
            $class = "average";
        }

        echo "<tr>";
        echo "<td>" . $movies[$i]["title"] . "</td>";
        echo "<td>" . $rating . "</td>";
        echo "<td class='$class'>" . $verdict . "</td>";
        echo "</tr>";
    }
    ?>
</table>

<p><a href='ratings.php'>View Full Movie List</a></p>

</body>
</html>
