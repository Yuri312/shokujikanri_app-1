<template>
  <div class="login">
  <header>食事記録</header>
  <h1>ログイン</h1>
  <router-link v-bind:to="{name: 'registration'}">初回登録はこちら</router-link>
  <div>
    <input type="text" name="email" placeholder="メールアドレス">
  </div>
  <div>
    <input type="text" name="password" placeholder="パスワード">
  </div>
  <div>
    <input type="checkbox" name="keep_login"><label>ログイン状態を保持する</label>
  </div>
  <div>
    <button>ログイン</button>
  </div>
  
  </div>
</template>
<script>
export default {
  
}
</script>