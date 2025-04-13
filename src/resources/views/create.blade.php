<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pigly</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/step1.css') }}">
</head>

<body>
    <div class="log_add-form__content">

        <div class="log_add-form__heading">
            <h2>Weight Logを追加</h2>
        </div>


        <form class="log_add-form">


            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__label--item">日付</span>
                </div>
                <div class="form__group-content">

                    <div class="form__group--text">
                        <input type="date" name="date" value="日付を入力">
                    </div>
                    <div class="form__error">

                    </div>
                </div>


                <div class="form__group-title">
                    <span class="form__label--item">体重</span>
                </div>
                <div class="form__group-content">

                    <div class="form__group--text">
                        <input type="text" name="weight" value="50.0">
                        <span>kg</span>
                    </div>
                    <div class="form__error">

                    </div>
                </div>


                <div class="form__group-title">
                    <span class="form__label--item">摂取カロリー</span>
                </div>
                <div class="form__group-content">
                    <div class="form__group--text">
                        <input type="text" name="Kcal" value="1200">
                        <span>cal</span>
                    </div>
                    <div class="form__error">

                    </div>
                </div>


                <div class="form__group-title">
                    <span class="form__label--item">運動時間</span>
                </div>
                <div class="form__group-content">
                    <div class="form__group--text">
                        <input type="text" name="exercise-tame" value="00:00">
                    </div>
                    <div class="form__error">

                    </div>
                </div>


                <div class="form__group-title">
                    <span class="form__label--item">運動内容</span>
                </div>
                <div class="form__group-content">
                    <div class="form__group--text">
                        <input type="textbox" 運動内容を追加>
                    </div>
                    <div class="form__error">

                    </div>
                </div>

            </div>


            <div class="form__button">
                <button class="form__button-submit" type="submit">戻る</button>
                <button class="form__button-submit" type="submit">登録</button>
            </div>
        </form>

    </div>
</body>

</html>