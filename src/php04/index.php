<?php

require_once('./config/status_codes.php');
//status_code.php ファイルの読み込み

$random_numbers = array_rand($status_codes, 4);
//ランダムで4つ取り出したインデックス(code, meaning, description)を代入

foreach ($random_numbers as $index) {
    $options[] = $status_codes[$index];
    //ランダムで取り出した配列を$optionsに代入
}

$question = $options[mt_rand(0, 3)];
//1つを正解として代入

?>

<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Status Code Quiz</title>
    <link rel="stylesheet" href="css/sanitize.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
    <header class="header">
        <div class="header__inner">
            <a href="" class="header__logo">
                Status Code Quiz
            </a>
        </div>
    </header>

    <main>
        <div class="quiz__content">
            <div class="question">
                <p class="question__text">Q. 以下の内容に当てはまるステータスコードを選んでください</p>
                <p class="question__text">
                    <?php echo $question['description'] ?>
                </p>
            </div>

            <form class="quiz-form" action="result.php" method="post">
                <input type="hidden" name="answer_code"
                value="<?php echo $question['code'] ?>">
                <!-- type="hidden"で表示されない,正解のcodeをresult.phpで受け取るため？ -->
                <div class="quiz-form__item">
                    <?php foreach ($options as $option): ?>
                        <div class="quiz-form__group">
                            <input class="quiz-form__radio"
                            type="radio" name="option"
                            id="<?php echo $option['code'] ?>"
                            value="<?php echo $option['code']?>">
                            <label for="<?php echo $option['code'] ?>"
                            class="quiz-form__label">
                            <?php echo $option['code'] ?>
                            </label>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="quiz-form__button">
                    <button class="quiz-form__button-submit" type="submit">
                        回答
                    </button>
                </div>
            </form>
        </div>
    </main>
</body>
</html>