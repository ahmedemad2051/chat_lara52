<template>
    <div class="row">
        <!--<div v-loading="isLoading" :loading-options="{ options }">-->
        <div>
            <h1>
                add new room
            </h1>
            <div class="form-group">
                <label for="name">room name</label>
                <input type="text" name="name" id="name" v-model="room_name" class="form-control">
            </div>
            <div class="form-group">
                <input type="submit" @click="addRoom()" name="submit" value="add room" class="btn btn-primary">
            </div>
        </div>
    </div>
</template>
<script>
    import loading from 'vue-loading';
    export default{
        directives: {loading},
        data() {
            return {
                room_name: '',
                isLoading: false
            }
        },
        methods: {
            addRoom: function () {
                this.isLoading = true;
            }
        }
    }
</script>