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
    <div class="register-form__content">

        <div class="register-form__heading">
            <h1>Pigly</h1>
            <h2>新規会員登録</h2>
        </div>

        <div class="register-form__step">
            <p>step1 アカウント情報の登録</p>
        </div>


        <form class="register-form" action="/step1" method="post">
            @csrf


            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__label--item">お名前</span>
                </div>

                <div class="form__group-content">

                    <div class="form__group--text">
                        <input type="text" name="name" value="名前を入力">
                    </div>
                    <div class="form__error">

                    </div>

                </div>

                <div class="form__group-title">
                    <span class="form__label--item">メールアドレス</span>
                </div>

                <div class="form__group-content">

                    <div class="form__group--text">
                        <input type="email" name="email" value="名前を入力">
                    </div>
                    <div class="form__error">

                    </div>

                </div>

                <div class="form__group-title">
                    <span class="form__label--item">パスワード</span>
                </div>

                <div class="form__group-content">

                    <div class="form__group--text">
                        <input type="password" name="password" value="名前を入力">
                    </div>
                    <div class="form__error">

                    </div>

                </div>

            </div>
            <div class="form__button">
                <button class="form__button-submit" type="submit">次に進む</button>
            </div>
        </form>

        <div class="login__link">
            <a class="login__button-submit" href="/login">ログインはこちら</a>
        </div>

    </div>
</body>

</html>