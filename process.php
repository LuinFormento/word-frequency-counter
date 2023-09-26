<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Word Frequency Result</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <style>
        table {
            margin: 15px auto;
        }
    </style>
</head>
<body>
    <h1>Word Frequency Result</h1>

    <?php
    // Function to calculate Frequency without stop words.
    function calculateWordFrequency($words, $stopWords) {
        $wordFrequency = array_count_values($words);

        // Remove stop words from the frequency array
        foreach ($stopWords as $stopWord) {
            unset($wordFrequency[$stopWord]);
        }

        return $wordFrequency;
    }

    // Function to sort words to ascending or descending order.
    function sortWordFrequency($wordFrequency, $sortOrder) {
        if ($sortOrder === "asc") {
            asort($wordFrequency);
        } else {
            arsort($wordFrequency);
        }
        return $wordFrequency;
    }

    // Function to limit words to be displayed.
    function limitWordFrequency($wordFrequency, $limit) {
        return array_slice($wordFrequency, 0, $limit);
    }

    // Define stop words
    const stopWords = ["the", "and", "in"]; // Common stop words to ignore

    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve user input and perform input validation
        $inputText = trim($_POST['text']);
        $selectedSortOrder = $_POST['sort']; // 'asc' or 'desc'
        $selectedLimit = (int)$_POST['limit']; // Number of words to display
        
            // Tokenize the input text into words
            $words = str_word_count($inputText, 1);

            // Calculate word frequency
            $wordFrequency = calculateWordFrequency($words, stopWords);

            // Sorts words based in order's choice.
            $sortedWordFrequency = sortWordFrequency($wordFrequency, $selectedSortOrder);

            // Limits number of words to be display.
            $limitedWordFrequency = limitWordFrequency($sortedWordFrequency, $selectedLimit);

            // Output results in tabled style.
            echo '<table>';
            echo '<tr><th>Word</th><th>Frequency</th></tr>';

            foreach ($limitedWordFrequency as $word => $frequency) {
                // HTML escape user-generated content.
                $word = htmlspecialchars($word);
                echo "<tr><td>$word</td><td>$frequency</td></tr>";
            }
            echo '</table>';
    }
    ?>

</body>
</html>
