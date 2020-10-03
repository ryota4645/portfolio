<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/portfolio.css')}}">
    <link rel="icon" type="image/png" href="{{asset('imgs/note-pc-002.png')}}">
    <title>Profile</title>
</head>
<body>
    <header>
        <h1 class="center">RYOTA TANAHASHI</h1>
        <ul>
            <li><a href="#about">TOP</a></li>
            <li><a href="#work-history">HISTORY</a></li>
            <li><a href="#work">WORK</a></li>
        </ul>
    </header>
    <main>
        <section id="about" class="about-section">
            <p class="sub-title center">ABOUT</p>
            <p class="big-str">自己紹介</p>
            <p>
                現在バックエンドの開発に携わっております。
                東京にてWEBエンジニアとして働いている、棚橋亮太と申します。
                2020年2月都内WEB系SES企業に就職し現在も在職中です。
                直近の現場では人材系のシステムの開発に携わっていました。
                よろしくお願いいたします。
            </p>
            <br>
            <p class="big-str">使用ツール等</p>
            <div>
                PHP(Laravel)、JavaScript(jQuery)、HTML(blade)、CSS、MySQL、Oracle、Git、SVN
            </div>
        </section>
        <section id="work-history" class="work-history-section">
            <p class=sub-title>WORK HISTORY</p>
            <p>2016年3月</p>
            <p>東京成徳大学 応用心理学部 福祉心理学科 卒業</p>
            <br>
            <p>2016年4月~2016年9月</p>
            <p>株式会社エイエイピー/株式会社パレッティー 入社</p>
            <p>
                地元静岡の広告代理店に入社いたしました。
                入社後、研修という形で関連会社に出向になり飲食のFC経営をしている店舗の店長になりました。
                主に店舗の管理や営業、アルバイトの教育、採用など店舗業務全般を行っていました。
                ただ休みのない日々で過労になったため、約4ヶ月で退職しております。
            </p>
            <br>
            <p>2016年11月~2020年1月</p>
            <p>株式会社加登屋 入社</p>
            <p>
                その後、実家を出て上京し大田区で老舗の文具販売店に入社いたしました。
                こちらでは販売員として主に紙製品、オフィス製品担当として買い付けから店頭での販売まで行っておりました。
                月並みですが、こちらで働いてるうちに技術的に手に職を付けたいと考えるようになりエンジニアに興味を持ち始めました。
            </p>
            <br>
            <p>2020年2月~現在</p>
            <p>株式会社FOXHOUND 入社</p>
            <p>
                エンジニアという職業にひかれていた為、短期的に集中してプログラミングやDBのことなどを独学で勉強しそれをもとに転職活動を行いました。
                結果的に現在の会社に所属しています。
                現在経験のある現場はまだ1つで、人材系システムの新規開発案件に携わっておりました。
                これからも日々学習を怠らず、現場でいろんな技術知識に触れていきたいと考えております。
            </p>    
        </section>
        <section id="work" class="work-section">
            <div class="work-wrapper">
                <div class="work-item">
                    <p class="sub-title">WORK①</p>
                    <p>WORK1</p>
                    <img src="https://source.unsplash.com/random/300x500">
                </div>
                <div class="work-item">
                    <p class="sub-title">WORK②</p>
                    <p>WORK2</p>
                    <img src="https://source.unsplash.com/random/300x500">
                </div>
                <div class="work-item">
                    <p class="sub-title">WORK③</p>
                    <p>WORK3</p>
                    <img src="https://source.unsplash.com/random/300x500">
                </div>
            </div>    
        </section>
    </main>
    <footer>
        <p>2020 &copy;RYOTA TANAHASHI</p>
    </footer>
</body>
</html>