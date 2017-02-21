/**
 * Created by onepiece on 2/18/17.
 */
// var Vue=require('vue');
var Vue=require('vue/dist/vue.js');

var chatBox=require('./components/chatbox/chatbox.vue')
var add_room=require('./components/rooms/add_room.vue')
var all_rooms=require('./components/rooms/all_rooms.vue')

new Vue({
    el:'#app-layout',
    components:{
        chat_box:chatBox,
        add_room:add_room,
        all_rooms:all_rooms,
    },
    data:function(){
        return {
            message:'one piece'
        }
    }
});