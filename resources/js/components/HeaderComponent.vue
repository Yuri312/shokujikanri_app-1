<template>
    <div class="container-fluid bg-white">
        <div class="container">
            <nav class="navbar navbar-light">
                <span class="navbar-brand mb-0 h1">食事記録</span>
                <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#logoutModal">
                    <img :src="'images/logout.jpg'" width="40" alt="ログアウト">
                </button>
                <div class="modal fade" id="logoutModal" tabindex="-1" aria-labelledby="logoutModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="logoutModalLabel">ログアウトしますか？</h5>
                        </div>
                        <div class="modal-body text-center">
                            <div class="row mt-5">
                                <router-link v-bind:to="{name: 'login'}">
                                <input type="button" class="btn btn-secondary btn-close" style="width:100px" value="戻る">
                                </router-link>
                                <router-link v-bind:to="{name: 'login'}">
                                <input type="button" class="btn btn-secondary" style="width:100px" value="はい">
                                </router-link>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">OK</button>
                        </div>
                        </div>
                    </div>
                    </div>
            </nav>
        </div>
    </div>
</template>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script>
    export default {}
</script>