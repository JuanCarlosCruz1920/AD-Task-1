<!DOCTYPE html>
<html>
<head>
    <title>Movie List</title>
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
            margin-top: 20px;
            background-color: #161b22;
        }
        th, td {
            padding: 10px;
            border: 1px solid #30363d;
            text-align: left;
        }
        a {
            color: #58a6ff;
            text-decoration: none;
        }
    </style>
</head>
<body>

<h1>Movie List</h1>

<?php
$movies = [
    ["title" => "The Godfather", "genre" => "Crime", "rating" => 10.0, "director" => "Francis Ford Coppola"],
    ["title" => "The Godfather Part II", "genre" => "Crime", "rating" => 8.7, "director" => "Francis Ford Coppola"],
    ["title" => "The Godfather Part III", "genre" => "Crime", "rating" => 7.3, "director" => "Francis Ford Coppola"],
    ["title" => "Guardians of the Galaxy", "genre" => "Action", "rating" => 7.9, "director" => "James Gunn"],
    ["title" => "Guardians of the Galaxy Vol. 2", "genre" => "Action", "rating" => 8.1, "director" => "James Gunn"],
    ["title" => "Guardians of the Galaxy Vol. 3", "genre" => "Action", "rating" => 10.0, "director" => "James Gunn"],
    ["title" => "Deadpool", "genre" => "Action/Comedy", "rating" => 6.9, "director" => "Tim Miller"],
    ["title" => "Deadpool 2", "genre" => "Action/Comedy", "rating" => 7.4, "director" => "David Leitch"],
    ["title" => "Deadpool & Wolverine", "genre" => "Action", "rating" => 9.2, "director" => "Shawn Levy"],
    ["title" => "Rise of the Planet of the Apes", "genre" => "Sci-Fi", "rating" => 7.8, "director" => "Rupert Wyatt"],
    ["title" => "Dawn of the Planet of the Apes", "genre" => "Sci-Fi", "rating" => 7.4, "director" => "Matt Reeves"],
    ["title" => "War for the Planet of the Apes", "genre" => "Sci-Fi", "rating" => 7.1, "director" => "Matt Reeves"],
    ["title" => "Minecraft: The Movie", "genre" => "Adventure", "rating" => 3.0, "director" => "Jared Hess"],
    ["title" => "Inception", "genre" => "Sci-Fi", "rating" => 8.8, "director" => "Christopher Nolan"],
    ["title" => "The Dark Knight", "genre" => "Action", "rating" => 9.0, "director" => "Christopher Nolan"],
    ["title" => "Interstellar", "genre" => "Sci-Fi", "rating" => 8.6, "director" => "Christopher Nolan"],
    ["title" => "Pulp Fiction", "genre" => "Crime", "rating" => 8.9, "director" => "Quentin Tarantino"],
    ["title" => "Avengers: Endgame", "genre" => "Action", "rating" => 8.4, "director" => "Anthony and Joe Russo"],
    ["title" => "Spider-Man: No Way Home", "genre" => "Action", "rating" => 8.2, "director" => "Jon Watts"],
    ["title" => "The Matrix", "genre" => "Sci-Fi", "rating" => 8.7, "director" => "Lana Wachowski, Lilly Wachowski"],
];
?>

<table>
    <tr>
        <th>Title</th>
        <th>Genre</th>
        <th>Rating</th>
        <th>Director</th>
    </tr>
    <?php
    for ($i = 0; $i < count($movies); $i++) {
        echo "<tr>";
        echo "<td>" . $movies[$i]["title"] . "</td>";
        echo "<td>" . $movies[$i]["genre"] . "</td>";
        echo "<td>" . $movies[$i]["rating"] . "</td>";
        echo "<td>" . $movies[$i]["director"] . "</td>";
        echo "</tr>";
    }
    ?>
</table>

<p><a href='ratings.php'>View Ratings Evaluation</a></p>

</body>
</html>
