<?php wp_footer(); ?>

<footer class="footer l-footer">
  <div class="footer__inner inner">
    <div class="footer__flex">
      <!-- 左側: クリニック情報 -->
      <div class="footer__clinic-info">
        <h2 class="footer__clinic-name">まつだ歯科医院</h2>
        <div class="footer__tel-flex">
          <p class="footer__tel">tel.</p>
          <p class="footer__number"> 078-521-0418</p>
        </div>
        <p class="footer__address">
          〒652-0042　兵庫県神戸市兵庫区東山町4丁目19-1-2F　<br class="u-mobile">ワコーレ東山2F<br>
          アクセス　湊川公園駅徒歩5分
        </p>
        <div class="footer__schedule">
          <table class="schedule-table">
            <thead>
              <tr class="schedule-table__header">
                <th class="schedule-table__day">診療時間</th>
                <th class="schedule-table__day">月</th>
                <th class="schedule-table__day">火</th>
                <th class="schedule-table__day">水</th>
                <th class="schedule-table__day">木</th>
                <th class="schedule-table__day">金</th>
                <th class="schedule-table__day">土</th>
              </tr>
            </thead>
            <tbody>
              <tr class="schedule-table__hours">
                <td class="schedule-table__time">9:00-12:30</td>
                <td class="schedule-table__time">○</td>
                <td class="schedule-table__time">○</td>
                <td class="schedule-table__time">○</td>
                <td class="schedule-table__time">－</td>
                <td class="schedule-table__time">○</td>
                <td class="schedule-table__time">○</td>
              </tr>
              <tr class="schedule-table__hours">
                <td class="schedule-table__time">14:30-18:30</td>
                <td class="schedule-table__time">○</td>
                <td class="schedule-table__time">○</td>
                <td class="schedule-table__time">○</td>
                <td class="schedule-table__time">－</td>
                <td class="schedule-table__time">○</td>
                <td class="schedule-table__time">○*</td>
              </tr>
            </tbody>
          </table>
          <p class="footer__saturday">*土曜日は午後14:30~16:30</p>
          <p class="footer__note">最終受付時間は診療時間の30分前になります。<br>日祝日のある週の木曜は診療日とさせていただきます。</p>
        </div>
      </div>
      <!-- 右側: 地図とリンク -->
      <div class="footer__map-and-links">
        <div class="footer__map">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26247.357336865156!2d135.12684121083984!3d34.68197689999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60008f6ebd510c6b%3A0x947978a0a9c5583f!2z44G-44Gk44Gg5q2v56eR5Yy76Zmi!5e0!3m2!1sja!2sjp!4v1724981528553!5m2!1sja!2sjp"
            style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
    </div>
    <nav class="footer__nav">
      <ul class="footer__nav-list">
        <!-- 診療案内 -->
        <li class="footer__nav-item footer__nav-item--flex">
          <p class="footer__nav-title">診療案内</p>
          <ul class="footer__sub-list">
            <div class="">
              <li class="footer__sub-item"><a href="<?php echo home_url('/medical/stuffing/'); ?>"
                  class="footer__nav-link">詰め物・被せ物</a></li>
              <li class="footer__sub-item"><a href="<?php echo home_url('/medical/denture/'); ?>"
                  class="footer__nav-link">入れ歯</a></li>
              <li class="footer__sub-item"><a href="<?php echo home_url('/medical/cavity/'); ?>"
                  class="footer__nav-link">虫歯治療</a></li>
              <li class="footer__sub-item"><a href="<?php echo home_url('/medical/root-canal-therapy/'); ?>"
                  class="footer__nav-link">根管治療</a></li>
            </div>
            <div class="">
              <li class="footer__sub-item"><a href="<?php echo home_url('/medical/periodontal-therapy/'); ?>"
                  class="footer__nav-link">歯周病治療</a></li>
              <li class="footer__sub-item"><a href="<?php echo home_url('/medical/maintenance/'); ?>"
                  class="footer__nav-link">メンテナンス・予防</a></li>
              <li class="footer__sub-item"><a href="<?php echo home_url('/medical/bruxism/'); ?>"
                  class="footer__nav-link">歯ぎしり・顎関節症</a></li>
              <li class="footer__sub-item"><a href="<?php echo home_url('/medical/mouthguard/'); ?>"
                  class="footer__nav-link">スポーツ用マウスガード</a></li>
            </div>
            <div class="">
              <li class="footer__sub-item"><a href="<?php echo home_url('/medical/remedy/'); ?>"
                  class="footer__nav-link">矯正</a></li>
              <li class="footer__sub-item"><a href="<?php echo home_url('/medical/implant/'); ?>"
                  class="footer__nav-link">インプラント</a></li>
            </div>
          </ul>
        </li>

        <!-- 当院の特徴 -->
        <li class="footer__nav-title">
          <a href="<?php echo home_url('/feature/'); ?>" class="footer__nav-link">当院の特徴</a>
          <ul class="footer__anchorlink-list">
            <li class="footer__anchorlink-item">
              <a href="">治療方針</a>
            </li>
            <li class="footer__anchorlink-item">
              <a href="">当院の特徴</a>
            </li>
            <li class="footer__anchorlink-item">
              <a href="">設備紹介</a>
            </li>
            <li class="footer__anchorlink-item">
              <a href="">衛生管理</a>
            </li>
          </ul>
        </li>

        <!-- 医師・スタッフ紹介 -->
        <li class="footer__nav-title">
          <a href="<?php echo home_url('/staff/'); ?>" class="footer__nav-link">医師・スタッフ紹介</a>
          <ul class="footer__anchorlink-list">
            <li class="footer__anchorlink-item">
              <a href="">医師紹介</a>
            </li>
            <li class="footer__anchorlink-item">
              <a href="">スタッフ紹介</a>
            </li>
          </ul>
        </li>

        <!-- 初回診療の方へ -->
        <li class="footer__nav-title">
          <a href="<?php echo home_url('/first/'); ?>" class="footer__nav-link">初回診療の方へ</a>
          <ul class="footer__anchorlink-list">
            <li class="footer__anchorlink-item">
              <a href="">ご予約について</a>
            </li>
            <li class="footer__anchorlink-item">
              <a href="">キャンセル・遅刻について</a>
            </li>
            <li class="footer__anchorlink-item">
              <a href="">診察の姿勢</a>
            </li>
            <li class="footer__anchorlink-item">
              <a href="">検査から治療の流れ</a>
            </li>
          </ul>
        </li>

        <!-- 新着情報 -->
        <li class="footer__nav-title">
          <a href="<?php echo home_url('/news/'); ?>" class="footer__nav-link">新着情報</a>
        </li>
      </ul>
    </nav>
  </div>

  <div class="footer__bottom">
    <p class="footer__copy">© まつだ歯科医院. All Rights Reserved.</p>
  </div>
</footer>
</body>

</html>