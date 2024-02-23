<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // dati dal form
    $paragraph = $_POST['paragraph'];
    $badword = $_POST['badword'];

    // paragrafo e la sua lunghezza
    echo "<h2>Paragrafo Originale</h2>";
    echo "<p>$paragraph</p>";
    echo "<p>Lunghezza: " . strlen($paragraph) . " caratteri</p>";

    // censura
    $censoredParagraph = str_replace($badword, '***', $paragraph);

    // paragrafo censurato e la lunghezza
    echo "<h2>Paragrafo Censurato</h2>";
    echo "<p>$censoredParagraph</p>";
    echo "<p>Lunghezza: " . strlen($censoredParagraph) . " caratteri</p>";
}
?>
