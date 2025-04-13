<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pigly</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
</head>

<body>
    <header class="header">
        <div class="header__inner">
            <a class="header__logo">
                Pigly
            </a>
            <nav>
                <ul>
                    <li class="header-nav__item">
                        <a class="header-nav__link" href="/goal_setting">
                            目標体重設定
                        </a>
                    </li>
                    <li class="header-nav__item">
                        <form class="form" action="/logout" method="post">
                            @csrf
                        <button class="header-nav__button">
                            ログアウト
                        </button>
                        </form>
                    </li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <div class="weight_logs-content">


            <table class="goal_weight-table">
                <tr>
                    <td>
                        <span>目標体重</span>
                        <div> </div>
                    </td>
                    <td>
                        <span>目標まで</span>
                        <div> </div>
                    </td>
                    <td>
                        <span>最新体重</span>
                        <div> </div>
                    </td>
                </tr>
            </table>


            <div class="table-search">
                <input type="date" value="年/月/日">
                <span>～</span>
                <input type="date" value="年/月/日">
                <button>検索</button>
                <button class="open-button" popovertarget="create" popovertargetaction="create">データを追加</button>
            </div>


            <table class="weight_logs-table">
                <tr>
                    <th>日付</th>
                    <th>体重</th>
                    <th>食事摂取カロリー</th>
                    <th>運動時間</th>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </table>


        </div>
    </main>
</body>

</html>