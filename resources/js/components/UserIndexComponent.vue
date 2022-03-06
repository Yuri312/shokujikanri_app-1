<template>
  <div class="index">
  
    <header>食事記録</header>

  <h1><a href="#">調査に関する注意</a></h1>

  <form action="#" method="post">
    <router-link v-bind:to="{name: 'upload'}">
      <input type="button" name="post" id="post" value="回答を追加する">
    </router-link>
  </form>
  
  </div>
</template>
<script>
export default {
  
}
</script>