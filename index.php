<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="description" content="夜勤の休憩時間を計算するツールです。"/>
    <meta name="keywords" content="看護,看護師,仮眠,夜勤,ナース,計算,仮眠計算,休憩時間"/><meta property="og:url" content="https://nap-calculation.tantaku.xyz/" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="仮眠計算" />
    <meta property="og:description" content="夜勤の休憩時間を計算するツールです。" />
    <meta property="og:site_name" content="仮眠計算" />
    <meta property="og:image" content="https://nap-calculation.tantaku.xyz/common/img/ogp/ogp.jpg" />
    <meta name="msapplication-square70x70logo" content="/common/img/favicons/site-tile-70x70.png">
    <meta name="msapplication-square150x150logo" content="/common/img/favicons/site-tile-150x150.png">
    <meta name="msapplication-wide310x150logo" content="/common/img/favicons/site-tile-310x150.png">
    <meta name="msapplication-square310x310logo" content="/common/img/favicons/site-tile-310x310.png">
    <meta name="msapplication-TileColor" content="#0078d7">
    <link rel="shortcut icon" type="image/vnd.microsoft.icon" href="/common/img/favicons/favicon.ico">
    <link rel="icon" type="image/vnd.microsoft.icon" href="/common/img/favicons/favicon.ico">
    <link rel="apple-touch-icon" sizes="152x152" href="/common/img/favicons/apple-touch-icon-152x152.png">
    <title>仮眠計算</title>
    <link rel="stylesheet" href="/common/css/lib/destyle.css"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Kosugi+Maru&amp;display=swap"/>
    <link rel="stylesheet" href="/common/css/common.css"/><!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-176744829-1"></script>
    <script>
    	window.dataLayer = window.dataLayer || [];
    	function gtag(){dataLayer.push(arguments);}
    	gtag('js', new Date());
    
    	gtag('config', 'UA-176744829-1');
    </script>
  </head>
  <body>
    <div class="root">
      <div class="loading">
        <div class="loading_icon">
          <div class="loading_hitsuji"><img src="/common/img/loading/hitsuji.png" alt=""/></div>
          <div class="loading_fukidashi"><img src="/common/img/loading/fukidashi.png" alt="計算中.."/></div>
        </div>
      </div>
      <header class="header">
        <div class="container">
          <h1><a class="header_logo" href="/"><img src="/common/img/header/logo.png" alt="仮眠計算"/></a></h1>
        </div>
      </header>
      <main class="main">
        <div class="container">
          <div class="mainContent">
            <div class="noticeBox">
              <div class="noticeBox_date">2020.08.29</div>
              <div class="noticeBox_text">リニューアルしました！</div>
            </div>
            <div class="contentSection">
              <form class="form" action="/api.php" method="POST">
                <div class="fieldArea">
                  <ul class="fieldList">
                    <li>
                      <div class="field">
                        <div class="field_label">
                          <label>人数</label>
                        </div>
                        <div class="field_select">
                          <select name="count">
                            <option value="3">3人</option>
                            <option value="4" selected="selected">4人</option>
                            <option value="5">5人</option>
                          </select>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="field">
                        <div class="field_label">
                          <label>休憩開始時間</label>
                        </div>
                        <ul class="field_column2">
                          <li>
                            <div class="field_select">
                              <select name="startHour">
                                <option value="19">19時</option>
                                <option value="20">20時</option>
                                <option value="21">21時</option>
                                <option value="22" selected="selected">22時</option>
                                <option value="23">23時</option>
                                <option value="24">24時</option>
                                <option value="1">1時</option>
                                <option value="2">2時</option>
                              </select>
                            </div>
                          </li>
                          <li>
                            <div class="field_select">
                              <select name="startMinute">
                                <option value="0" selected="selected">0分</option>
                                <option value="5">5分</option>
                                <option value="10">10分</option>
                                <option value="15">15分</option>
                                <option value="20">20分</option>
                                <option value="25">25分</option>
                                <option value="30">30分</option>
                                <option value="35">35分</option>
                                <option value="40">40分</option>
                                <option value="45">45分</option>
                                <option value="50">50分</option>
                                <option value="55">55分</option>
                              </select>
                            </div>
                          </li>
                        </ul>
                      </div>
                    </li>
                    <li>
                      <div class="field">
                        <div class="field_label">
                          <label>休憩終了時間</label>
                        </div>
                        <ul class="field_column2">
                          <li>
                            <div class="field_select">
                              <select name="endHour">
                                <option value="4">4時</option>
                                <option value="5" selected="selected">5時</option>
                                <option value="6">6時</option>
                                <option value="7">7時</option>
                              </select>
                            </div>
                          </li>
                          <li>
                            <div class="field_select">
                              <select name="endMinute">
                                <option value="0" selected="selected">0分</option>
                                <option value="5">5分</option>
                                <option value="10">10分</option>
                                <option value="15">15分</option>
                                <option value="20">20分</option>
                                <option value="25">25分</option>
                                <option value="30">30分</option>
                                <option value="35">35分</option>
                                <option value="40">40分</option>
                                <option value="45">45分</option>
                                <option value="50">50分</option>
                                <option value="55">55分</option>
                              </select>
                            </div>
                          </li>
                        </ul>
                      </div>
                    </li>
                    <li>
                      <div class="field">
                        <div class="field_label">
                          <label>休憩重複時間</label>
                        </div>
                        <ul class="field_column2">
                          <li>
                            <div class="field_select">
                              <select name="duplicateHour">
                                <option value="0" selected="selected">0時間</option>
                                <option value="1">1時間</option>
                                <option value="2">2時間</option>
                              </select>
                            </div>
                          </li>
                          <li>
                            <div class="field_select">
                              <select name="duplicateMinute">
                                <option value="0">0分</option>
                                <option value="5">5分</option>
                                <option value="10">10分</option>
                                <option value="15">15分</option>
                                <option value="20">20分</option>
                                <option value="25">25分</option>
                                <option value="30" selected="selected">30分</option>
                                <option value="35">35分</option>
                                <option value="40">40分</option>
                                <option value="45">45分</option>
                                <option value="50">50分</option>
                                <option value="55">55分</option>
                              </select>
                            </div>
                          </li>
                        </ul>
                      </div>
                    </li>
                  </ul>
                </div>
                <div class="fieldBtnArea">
                  <button class="btn btn-calc" type="submit">計算する</button>
                </div>
              </form>
            </div>
            <div class="contentSection">
              <div class="resultArea"></div>
            </div>
          </div>
        </div>
      </main>
      <footer class="footer">
        <div class="container">
          <div class="footer_1">
            <div class="line-it-button" data-lang="ja" data-type="share-a" data-ver="3" data-url="https://nap-calculation.tantaku.xyz/" data-color="default" data-size="small" data-count="false" style="display: none;"></div>
            <script src="https://d.line-scdn.net/r/web/social-plugin/js/thirdparty/loader.min.js" async="async" defer="defer"></script>
          </div>
          <div class="footer_2">
            <div class="footer_copy">copyright&copy; Tan 2020.</div>
          </div>
        </div>
      </footer>
    </div>
    <script src="/common/js/lib/jquery-3.5.1.min.js"></script>
    <script src="/common/js/common.js"></script>
  </body>
</html>