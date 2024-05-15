<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/index.css">
</head>
<body>

    <?php
        require('../required/nav.php')
    ?>
    

    <!-- <form action='add_books_logic.php' name='add_books_logic' method='POST'>
        <label>Boek naam: </label>
        <input type='text' name='boeknaam' placehoder='boeknaam' required>
        <label>Naam schrijver: </label>
        <input type='text' name='naamschrijver' placeholder='naam schrijver' required>
        <label>omschrijving: </label>
        <input type='text' name='omschrijving' placeholder='omschrijving' required>
        <input type='submit' value='register'>
    </form> -->

    <form action='add_books_logic.php' name='add_books_logic.php' method='POST'>
            <label>Boek naam: </label>
            <input type='text' name='boeknaam' placehoder='boeknaam' required>
            <label>Naam schrijver: </label>
            <input type='text' name='naamschrijver' placeholder='naam schrijver' required>
            <label>aftbeelding: </label>
            <input type='text' name='afbeelding' placeholder='afbeelding' required>
            <label>omschrijving: </label>
            <input type='text' name='omschrijving' placeholder='omschrijving' required>
            <label>omschrijving kort: </label>
            <input type='text' name='omschrijvingkort' placeholder='omschrijvingkort' required>
            <label>datum: </label>
            <input type='text' name='datum' placeholder='datum' required>
            <label>recensies: </label>
            <input type='text' name='recensies' placeholder='recensies' required>
            <input type='submit' value='add_book'>
        </form>


</body>
</html>