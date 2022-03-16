<template>
    <div class="container-fluid bg-white">
        <div class="container">
            <nav class="navbar navbar-light">
                <span class="navbar-brand mb-0 h1">食事記録</span>
                <button type="button" class="btn" @click="openModal">
                    <img :src="'images/logout.jpg'" width="40" alt="ログアウト">
                </button>

                <div class="modal fade" id="modal">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            
                        <div class="modal-body text-center">
                            <h5 class="modal-title" id="logoutModalLabel">ログアウトしてよろしいですか？</h5>
                            <div class="row justify-content-around mt-5">
                                <input type="button" class="btn btn-secondary" style="width:100px" data-dismiss="modal" value="戻る">
                                <router-link v-bind:to="{name: 'login'}">
                                <input type="button" class="btn btn-secondary" style="width:100px" data-dismiss="modal" value="はい">
                                </router-link>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</template>
<script src="https://cdn.jsdelivr.net/npm/vue@2.6.10/dist/vue.min.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.19.0/axios.min.js"></script>
<script>
    export default {
        data: {
        },
        methods: {
            openModal(e) {
                    $('#modal').modal('show');
                }

            }
    }
</script>