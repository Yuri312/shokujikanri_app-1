<template>
  <div class="container">
    <form class="form-horizontal">

      <div class="p-3 my-3" style="background-color:#f5f5f5">
        本日時点のあなたの情報を入力してください
      </div>

      <div class="form-group form-inline">
        <label class="col-sm-3 control-label">
        お名前（必須）
        </label>
        <div class="col-sm-7">
        <input class="form-control" type="text" name="user_login" required="">
        </div>
      </div>

      <div class="form-group form-inline">
        <label class="col-sm-3 form-check-label">
          性別（必須）
        </label>
          <div class="row radio-inline mx-2">
            <input class="form-check-input" id="man" type="radio" name="user_gender" value="男性">&nbsp;<label for="男性">男性</label>
          </div>
          <div class="row radio-inline mx-2">
            <input class="form-check-input" id="women" type="radio" name="user_gender" value="女性">&nbsp;<label for="女性">女性</label>
          </div>
      </div>

      <div class="form-group form-inline">
        <label class="col-sm-3 control-label">
        身長（必須）
        </label>
        <div class="col-sm-7">
        <input class="form-control" type="text" name="user_height" size="10" required="">&nbsp;cm
        </div>
      </div>

      <div class="form-group form-inline">
        <label class="col-sm-3 control-label">
        体重（必須）
        </label>
        <div class="col-sm-7">
        <input class="form-control" type="text" name="user_weight" size="10" required="">&nbsp;kg
        </div>
      </div>

      <div class="form-group form-inline">
        <label class="col-sm-3 control-label">
        体脂肪率（任意）
        </label>
        <div class="col-sm-7">
        <input class="form-control" type="text" name="user_fat_perce" size="10" required="">&nbsp;%
        </div>
      </div>

      <div class="form-group form-inline">
        <label class="col-sm-3 control-label">
        競技名（必須）
        </label>
        <div class="col-sm-7">
        <input class="form-control" type="text" name="user_competition" required="">
        </div>
      </div>

      <div class="form-group form-inline">
        <label class="col-sm-3 control-label">
        ポジション（任意）
        </label>
        <div class="col-sm-7">
        <input class="form-control" type="text" name="user_position" required="">
        </div>
      </div>

      <div class="p-3 my-3" style="background-color:#f5f5f5">
        メールアドレスとパスワードを設定してください
      </div>

      <div class="form-group form-inline">
        <label class="col-sm-3 control-label">
        メールアドレス（必須）
        </label>
        <div class="col-sm-7">
        <input class="form-control" type="text" name="user_email" required="">
        </div>
      </div>

      <div class="form-group form-inline">
        <label class="col-sm-3 control-label">
        メールアドレス確認用（必須）
        </label>
        <div class="col-sm-7">
        <input class="form-control" type="text" name="user_email_confirm" required="">
        </div>
      </div>

      <div class="form-group form-inline">
        <label class="col-sm-3 control-label">
        パスワード（必須）
        </label>
        <div class="col-sm-7">
        <input class="form-control" type="text" name="user_pass" required="">
        </div>
      </div>

      <div class="form-group form-inline">
        <label class="col-sm-3 control-label">
        パスワード確認用（必須）
        </label>
        <div class="col-sm-7">
        <input class="form-control" type="text" name="user_pass_confirm" required="">
        </div>
      </div>

      <div class="p-3 my-3" style="background-color:#f5f5f5">
        調査番号を入力してください
      </div>
      
      <div class="form-group">
        <label class="control-label">
        説明時に共有された、6桁の番号を入力してください。(必須)
        </label>
        <input class="col-sm-2 form-control" type="text" name="research_id" required="">
      </div>
      
      <div>
        <input type="hidden" id="_wpnonce" name="_wpnonce" value="5a2fcb9d60">
        <input type="hidden" name="_wp_http_referer" value="/user_registration/">
      </div>
      
      <router-link v-bind:to="{name: 'complete'}">
        <input type="button" class="mt-5 btn btn-secondary" style="width:150px" value="登録する">
      </router-link>
    </form>
  </div>
</template>
<script>
export default {
  
}
</script>

<style>

</style>