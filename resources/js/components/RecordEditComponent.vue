<template>
  <div class="container">
  
  <form>

    <div style="background-color:#f5f5f5">
      画像一覧が表示される予定
    </div>
    <div class="form-group mt-3">
        <label class="control-label">
        食事区分（必須）
        </label>
          <select name="meal_time" class="form-control" style="width:200px">
            <option hidden>選択してください</option>
            <option value="1">朝食</option>
            <option value="2">昼食</option>
            <option value="3">間食</option>
            <option value="4">夕食</option>
            <option value="5">夜食</option>
        </select>
      </div>
      <div class="form-group mt-3">
        <label class="control-label">
        場所（必須）
        </label>
        <input class="form-control" style="width:200px" type="text" name="place">
      </div>
      <div class="form-group mt-3">
        <label class="control-label">
          日時(必須）
        </label>
        <div class="form-row">
          <input class="form-control" style="width:150px" type="date" name="date">
          <input class="form-control" style="width:150px" type="time" name="time">
        </div>
      </div>

    <div>
        <label class="control-label mt-3">
          食事内容を入力してください（必須）&nbsp;<a href="#" name="help">ヘルプ</a>
        </label>
        <div class="row">
          <label class="control-label text-center" style="width:150px">食事</label>
          <label class="control-label text-center" style="width:150px">材料</label>
          <label class="control-label text-center" style="width:150px">量</label>
        </div>
        <div class="form-row">
          <div class="form-group" v-for="(meal,index) in meals" :key="index">
            <input class="form-control" style="width:150px" type="text" v-model="meals[index]">
          </div>
          <div class="form-group" v-for="(ingredient,index) in ingredients" :key="index">
            <input class="form-control" style="width:150px" type="text" v-model="ingredients[index]">
          </div>
          <div class="form-group" v-for="(amount,index) in amounts" :key="index">
            <input class="form-control" style="width:150px" type="text" v-model="amounts[index]">
          </div>
          <div class="batsu" @click="deleteForm(index)">
            ×
          </div>
        </div>
        <button class=" btn btn-secondary" style="width:450px" @click="addForm()">入力欄を追加</button>
      </div>
      <div class="form-group mt-5">
        <label class="control-label">
          補足事項があれば入力してください（任意）
        </label>
          <textarea class="form-control" name="option" rows="3"></textarea>
      </div>
      <div class="row mt-5">
        <router-link v-bind:to="{name: 'index'}">
          <input type="button" class="btn btn-light border" style="width:200px" name="delete" value="削除する">
        </router-link>
        <router-link v-bind:to="{name: 'index'}">
          <input type="button" class="btn btn-secondary" style="width:200px" name="update" id="post" value="登録する">
        </router-link>
      </div>
  </form>
  
  </div>
</template>
<script>
export default {
  data() {
    return {
      meals: [],
      ingredients: [],
      amounts: []
    }
  },
  methods: {
    addForm () {
      this.meals.push('')
      this.ingredients.push('')
      this.amounts.push('')
    },
    deleteForm (index) {
      this.meals.splice(index, 1)
      this.ingredients.splice(index, 1)
      this.amounts.splice(index, 1)
    }
  }
}
</script>
<style>
  .batsu{
    font-size: 200%;
    font-weight: bold;
}
</style>