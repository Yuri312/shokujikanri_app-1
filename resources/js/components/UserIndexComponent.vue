<template>
  <div class="container">
  <div class="p-3 my-3 text-center" style="background-color:#f5f5f5">
    <a href="#" class="h2 text-dark "><u>調査に関する注意</u></a>
  </div>

  <form action="#" method="post">
    <router-link v-bind:to="{name: 'upload'}">
      <input type="button" class="mt-5 btn btn-secondary col-sm-2" value="回答を追加する">
    </router-link>
  </form>
  
  </div>
</template>
<script>
export default {
  
}
</script>