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
            <h2>目標体重設定</h2>
        </div>


        <form class="log_add-form">


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

            </div>


            <div class="form__button">
                <button class="form__button-submit" type="submit">戻る</button>
                <button class="form__button-submit" type="submit">更新</button>
            </div>
        </form>

    </div>
</body>

</html>