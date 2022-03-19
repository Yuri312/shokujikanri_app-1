<template>
  
  <div class="container-fluid  title-screen">
    <form action="" method="post">
      <div class="py-5 form-group text-center">
        <div class="h2 my-3">
          ログイン
        </div>
        <div class="my-3">
          <router-link v-bind:to="{name: 'registration'}" class="text-dark">初回登録はこちら</router-link>
        </div>
        <div class="my-3">
          <input type="text" class="form-control-lg login-block" name="email" placeholder="メールアドレス">
        </div>
        <div class="my-3">
          <input type="text" class="form-control-lg login-block" name="password" placeholder="パスワード">
        </div>
        <div class="my-3">
          <input type="checkbox" class="form-check-input" name="keep_login"><label>ログイン状態を保持する</label>
        </div>

        <div class="my-3">
          <button type="submit" class="btn btn-secondary login-block">ログイン</button>
        </div>
      </div>
    </form>
  </div>


</template>
<script>
export default {
  
}
</script>

<style>

.title-screen{
  height:100vh;
  min-height:100vh;
  background-color: #e5e5e5;
}

.login-block{
  width: 300px;
}

</style>