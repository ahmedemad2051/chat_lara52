/**
 * Created by onepiece on 2/18/17.
 */
// var Vue=require('vue');
var Vue=require('vue/dist/vue.js');
var VueRouter=require('vue-router');
Vue.use(VueRouter);

var chatBox=require('./components/chatbox/chatbox.vue');
var add_room=require('./components/rooms/add_room.vue');
var my_rooms=require('./components/rooms/my_rooms.vue');
var all_rooms=require('./components/rooms/all_rooms.vue');


var routes=[
    {path:'/chat',component:chatBox},
    {path:'/add_room',component:add_room},
    {path:'/my_rooms',component:my_rooms},
    {path:'/all_rooms',component:all_rooms},
];

var router=new VueRouter({routes:routes});

var app=new Vue({router:router});
app.$mount('#app-layout');

// new Vue({
//     el:'#app-layout',
//     components:{
//         chat_box:chatBox,
//         add_room:add_room,
//         all_rooms:all_rooms,
//     },
//     data:function(){
//         return {
//             message:'one piece'
//         }
//     }
// });