<template>
  <div class="container">
    <div class="my-3">
    <p>登録が完了しました。</p>
    <p>自動的にホーム画面に戻ります。</p>
    <p>（画面が変わらない場合、<router-link v-bind:to="{name: 'index'}">こちらをクリック</router-link>）</p>
    </div>
  </div>
</template>
<script>
export default {
  
}
</script>
<style>
body{
  background-color: white;
}
</style>