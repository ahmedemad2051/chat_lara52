<template>
    <div>
        <h1>
            add new room
        </h1>
        <div class="form-group">
            <label for="name">room name</label>
            <input type="text" name="name" id="name" v-model="room_name" class="form-control">
        </div>
        <div class="form-group">
            <input type="submit" name="submit" value="add room" class="btn btn-primary">
        </div>
    </div>
</template>
<script>
    export default{
        data(){
            return {
                room_name: ''
            }
        }
    }
</script>