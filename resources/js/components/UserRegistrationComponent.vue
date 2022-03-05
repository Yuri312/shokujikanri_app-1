<template>
  <div class="registration">
  
  <header>食事記録</header>
  
  <form action="#" method="post">
    <h1>本日時点のあなたの情報を入力してください</h1>
    <p>お名前(必須)
      <input type="text" name="user_login" required=""></p>
    <p>性別(必須)
      <input id="man" type="radio" name="user_gender" value="男"><label for="男">男</label>
      <input id="women" type="radio" name="user_gender" value="女"><label for="女">女</label></p>
    <p>身長(必須)
      <input type="text" name="user_height" required=""></p>
    <p>体重(必須)
      <input type="text" name="user_weight" required=""></p>
    <p>体脂肪率(任意)
      <input type="text" name="user_fat_perce"></p>
    <p>競技名(必須)
      <input type="text" name="user_competiton" required=""></p>
    <p>ポジション(任意)
      <input type="text" name="user_potiton"></p>

    <h1>メールアドレスとパスワードを設定してください</h1>
    <p>メールアドレス(必須)
      <input type="text" name="user_email" required=""></p>
    <p>メールアドレス確認用(必須)
      <input type="text" name="user_email_confirm" required=""></p>
    <p>パスワード(必須)
      <input type="text" name="user_pass" required=""></p>
    <p>パスワード確認用(必須)
        <input type="text" name="user_pass_confirm" required=""></p>

    <h1>調査番号を入力してください</h1>
    <p>説明時に共有された、6桁の番号を入力してください。(必須)
        <input type="text" name="research_id" required=""></p>
        <input type="hidden" id="_wpnonce" name="_wpnonce" value="5a2fcb9d60">
        <input type="hidden" name="_wp_http_referer" value="/user_registration/">
        <input type="submit" name="um-button" id="um-submit-btn" value="登録する">
  </form>
  </div>
</template>
<script>
export default {
  
}
</script>