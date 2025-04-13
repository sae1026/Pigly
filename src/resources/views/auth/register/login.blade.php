<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pigly</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>

<body>
    <div class="register-form__content">

        <div class="register-form__heading">
            <h1>Pigly</h1>
            <h2>ログイン</h2>
        </div>


        <form class="login-form" action="/login" method="post">
            @csrf


            <div class="form__group">
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
                <button class="form__button-submit" type="submit">login</button>
            </div>
        </form>

        <div class="register__link">
            <a class="register__button-submit" href="/register/step1">アカウント作成はこちら</a>
        </div>

    </div>
</body>

</html>