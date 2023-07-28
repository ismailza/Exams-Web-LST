<?php
    if(isset($_POST['submit'])){
        $qst1 = $_POST['qst1'];
        $qst2 = $_POST['qst2'];
        $qst3 = $_POST['qst3'];
        $score = 0;
        $results = fopen("results.txt","r");
        if(strcasecmp($qst1,trim(fgets($results))) == 0) $score++;
        if(strcasecmp($qst2,trim(fgets($results))) == 0) $score++;
        if(strcasecmp($qst3,trim(fgets($results))) == 0) $score++;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questionnaire</title>
</head>
<body>
    <section>
        <div class="containner">
            <div class="content">
                <form action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
                    <?php $questions = fopen("questions.txt","r"); ?>
                    <br><label for="qst1"><?= fgets($questions); ?></label>
                    <input type="radio" id="qst1" name="qst1" value="Markup language">Markup language
                    <input type="radio" name="qst1" name="qst1" value="Server side programming language">Server side programming language
                    <input type="radio" name="qst1" value="Website">Website
                    <br><label for="qst2"><?= fgets($questions); ?></label>
                    <input type="text" id="qst2" name="qst2" value=".">
                    <br><label for="qst3"><?= fgets($questions); ?></label>
                    <input type="text" id="qst3" name="qst3">
                    <br><input type="submit" name="submit" value="Envoyer">
                    <br><output><?php if(isset($score)) echo "Votre score est : $score/3"; ?></output>
                </form>
            </div>
        </div>
        <?php fclose($questions); ?>
    </section>
</body>
</html>