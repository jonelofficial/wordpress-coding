<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <?php while (have_posts()) : the_post() ?>
        <h2><a href="<?= the_permalink() ?>"> <?= the_title() ?> </a></h2>
        <p> <?= the_content() ?> </p>
        <hr>
    <?php endwhile ?>
</body>

</html>