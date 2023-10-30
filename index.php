<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=p, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <main>
        <form action="includes/formHandler.php" method="post">
            <label for="firstname">firstname?</label>
            <input required type="text" id="firstname" name="firstname" placeholder="firstname">

            <label for="latname">lastname?</label>
            <input required type="text" id="lastname" name="lastname" placeholder="lastname">

            <label for="favpet">favorit pet?</label>
            <select name="favpet" id="favpet">
                <option value="none">none</option>
                <option value="dog">dog</option>
                <option value="cat">cat</option>
                <option value="bird">bird</option>
            </select>

            <button type="submit">Submit</button>
        </form>
    </main>
</body>

</html>