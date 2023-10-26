<!DOCTYPE html>
<html>
<head>
    <title>Random Quote Generator</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f4f4f4;
            text-align: center;
            padding: 20px;
        }

        .quote-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .quote-text {
            font-size: 20px;
            margin-bottom: 20px;
        }

        .get-quote-btn {
            background-color: #007BFF;
            color: #fff;
            border: none;
            padding: 10px 20px;
            font-size: 18px;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="mt-5">Random Quote Generator</h1>

        <div class="quote-container mt-4">
            <p class="quote-text">
                <?php
               
                $quotes = array(
                    "The only way to do great work is to love what you do. - Steve Jobs",
                    "Life is what happens when you're busy making other plans. - John Lennon",
                    "In three words I can sum up everything I've learned about life: it goes on. - Robert Frost",
                    "You miss 100% of the shots you don't take. - Wayne Gretzky",
                    "The only limit to our realization of tomorrow will be our doubts of today. - Franklin D. Roosevelt",
                    "Success is not final, failure is not fatal: It is the courage to continue that counts. - Winston Churchill",
                    "The best way to predict the future is to create it. - Peter Drucker",
                    "In the middle of every difficulty lies opportunity. - Albert Einstein",
                    "It does not matter how slowly you go as long as you do not stop. - Confucius"
                );

               
                $randomQuote = $quotes[array_rand($quotes)];

               
                echo $randomQuote;
                ?>
            </p>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    </script>
</body>
</html>
