<?php
session_start();


if (!isset($_SESSION['targetNumber'])) {
    $_SESSION['targetNumber'] = rand(1, 100);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $playerGuess = (int)$_POST['guess'];
    $targetNumber = $_SESSION['targetNumber'];

    if ($playerGuess == $targetNumber) {
       
        echo json_encode(['result' => 'Congratulations! Flag is : <code>CSEC{gu3ss1ng_g4m3s_4r3_fun}</code><br>']);
    } elseif ($playerGuess < $targetNumber) {
        echo json_encode(['result' => 'Try a higher number.']);
    } else {
        echo json_encode(['result' => 'Try a lower number.']);
    }

   
    exit;
}


session_destroy();
?>

<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Guessing Game CTF Challenge</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card">
                    <div class="card-header">
                        <h1 class="text-center">Guess the Number</h1>
                    </div>
                    <div class="card-body">
                        <p class="text-center">Can you guess the number between 1 and 100?</p>
                        <div id="result" class="text-center"></div>
                        <form id="guessForm">
                            <div class="form-group">
                                <input type="number" id="guess" class="form-control" placeholder="Enter your guess" min="1" max="100" required>
                            </div>
                            <button id="submit" class="btn btn-primary btn-block">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#guessForm').submit(function(e) {
                e.preventDefault();

                var guess = $('#guess').val();

               
                $.post(window.location.href, { guess: guess }, function(data) {
                    var result = JSON.parse(data);
                    $('#result').html(result.result);
                });
            });
        });
    </script>
</body>
</html>
