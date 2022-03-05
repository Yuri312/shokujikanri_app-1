<template>
  <div class="complete">
  
  <header>食事記録</header>

  <form action="#" method="post">

    <p>※画像一覧が表示される予定※</p>
    <p>食事区分(必須)
      <select name="meal_time">
        <option hidden>選択してください</option>
        <option value="1">朝食</option>
        <option value="2">昼食</option>
        <option value="3">間食</option>
        <option value="4">夕食</option>
        <option value="5">夜食</option>
      </select></p>
    <p>場所(必須)
      <input type="text" name="place"></p>
    <p>日時(必須）
      <input type="date" name="date">≈
      <input type="time" name="time"></p>

    <p>食事内容を入力してください(必須)
      <input type="text" name="meal">
      <input type="text" name="ingredient">
      <input type="text" name="amount">
      <a href="#" name="help">ヘルプ</a>
    </p>
    <p>補足事項があれば入力してください(任意)
      <textarea name="option" rows="3"></textarea></p>
    <p>
      <input type="button" name="delete" id="delete" value="削除する">
      <input type="button" name="update" id="update" value="登録する">
    </p>
  </form>
  
  </div>
</template>
<script>
export default {
  
}
</script>