<?php
    $myText = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. At pariatur maiores delectus commodi iusto dolor ducimus cumque culpa totam, rerum id quidem maxime repudiandae, consequuntur cupiditate architecto fugit tempora consequatur nulla, ex distinctio doloribus animi suscipit? Non, qui magni facere quis exercitationem necessitatibus laboriosam natus dolores unde blanditiis, veritatis ex.';

    $badword = $_GET['badword'];
    $censoredText = str_replace($badword, '***', $myText);
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP Badwords</title>
    </head>
    <body>
        <h1>
            PHP Badwords
        </h1>
        <form action="" method="GET">
            <input type="text" name="badword" placeholder="Inserisci la parola da censurare" value="<?php echo $badword; ?>">
            <button>Censura</button>
        </form>
        <p>
            <?php echo $myText; ?>
        </p>
        <div>
            Lunghezza del paragrafo: <?php echo strlen($myText); ?> caratteri
        </div>
        <div>
            Badword inserita come parametro in GET <?php echo $badword; ?>
        </div>
        <p>
            <?php echo $censoredText; ?>
        </p>
        <div>
            Lunghezza del paragrafo censurato: <?php echo strlen($censoredText); ?> caratteri
        </div>
    </body>
</html> 