<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="quizrep.css">
    <title>Résultat du quiz</title>
</head>
<body>
    <div id="txt">
    <h1>Résultat du quiz</h1>
    <?php
    $score_total = 0;

    
    $reponses = array(
        "q1" => "Michael Jordan",
        "q2" => "Boston Celtics",
        "q3" => "3,05 mètres",
        "q4" => "Wilt Chamberlain",
        "q5" => "Kareem Abdul-Jabbar",
        "q6" => "5",
        "q7" => "BAA's Philadelphia Warriors",
        "q8" => "12 minutes",
        "q9" => "Stephen Curry",
        "q10" => "Giannis Antetokounmpo",
    );

    foreach ($reponses as $question => $reponse_correcte) {
        if (isset($_POST[$question])) {
            $reponse_utilisateur = $_POST[$question];
            echo "<p>Question: $question<br>";
            echo "Votre réponse: $reponse_utilisateur<br>";
            echo "Réponse correcte: $reponse_correcte<br>";
            if ($reponse_utilisateur === $reponse_correcte) {
                echo "Score: 10 points</p>";
                $score_total += 10;
            } else {
                echo "Score: 0 points</p>";
            }
        }
    }

    echo "<h2>Score total: $score_total points</h2>";
    if ($score_total === 100) {
        echo "<p>Félicitations ! Vous avez réussi le quiz et gagné un prix ! A vous de choisir lequel vous voulez en nous contactant sur les réseaux :)</p>";
       
        echo "<img src='prix.jpg' alt='Photo des prix'id='photo'>";
    }


    ?>
    </div>

</body>
</html>

