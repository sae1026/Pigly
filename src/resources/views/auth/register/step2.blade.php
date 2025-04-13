<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pigly</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/step2.css') }}">
</head>

<body>
    <div class="register-form__content">

        <div class="register-form__heading">
            <h1>Pigly</h1>
            <h2>新規会員登録</h2>
        </div>

        <div class="register-form__step">
            <p>step2 体重データの入力</p>
        </div>


        <form class="register-form" action="/step2" method="post">
            @csrf


            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__label--item">現在の体重</span>
                </div>

                <div class="form__group-content">

                    <div class="form__group--text">
                        <input type="text" name="weight-now" value="現在の体重を入力">
                        <span>kg</span>
                    </div>
                    <div class="form__error">

                    </div>

                </div>

                <div class="form__group-title">
                    <span class="form__label--item">目標の体重</span>
                </div>

                <div class="form__group-content">

                    <div class="form__group--text">
                        <input type="text" name="weight-goal" value="目標の体重を入力">
                        <span>kg</span>
                    </div>
                    <div class="form__error">

                    </div>

                </div>

            </div>
            <div class="form__button">
                <button class="form__button-submit" type="submit">アカウント作成</button>
            </div>
        </form>

    </div>
</body>

</html>