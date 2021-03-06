<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>


    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

    {{ Html::style('css/style.css') }}

</head>
<body >
<div class="container-fluid" id="app-layout">
    <div class="row">
        <div class="mail-box col-xs-12">
            <aside class="sm-side">
                <div class="user-head">
                    <a class="inbox-avatar" href="javascript:;">
                        <img width="64" hieght="60"
                             src="http://bootsnipp.com/img/avatars/ebeb306fd7ec11ab68cbcaa34282158bd80361a7.jpg">
                    </a>
                    <div class="user-name">
                        <h5><a href="#">Alireza Zare</a></h5>
                        <span><a href="#">Info.Ali.Pci@Gmail.com</a></span>
                    </div>
                    <a class="mail-dropdown pull-right" href="javascript:;">
                        <i class="fa fa-chevron-down"></i>
                    </a>
                </div>
                <div class="inbox-body">
                    <a href="#myModal" data-toggle="modal" title="Compose" class="btn btn-compose">
                        Compose
                    </a>
                    <!-- Modal -->
                    <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal"
                         class="modal fade" style="display: none;">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×
                                    </button>
                                    <h4 class="modal-title">Compose</h4>
                                </div>
                                <div class="modal-body">
                                    <form role="form" class="form-horizontal">
                                        <div class="form-group">
                                            <label class="col-lg-2 control-label">To</label>
                                            <div class="col-lg-10">
                                                <input type="text" placeholder="" id="inputEmail1" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-2 control-label">Cc / Bcc</label>
                                            <div class="col-lg-10">
                                                <input type="text" placeholder="" id="cc" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-2 control-label">Subject</label>
                                            <div class="col-lg-10">
                                                <input type="text" placeholder="" id="inputPassword1"
                                                       class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-2 control-label">Message</label>
                                            <div class="col-lg-10">
                                                <textarea rows="10" cols="30" class="form-control" id=""
                                                          name=""></textarea>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-lg-offset-2 col-lg-10">
                                                      <span class="btn green fileinput-button">
                                                        <i class="fa fa-plus fa fa-white"></i>
                                                        <span>Attachment</span>
                                                        <input type="file" name="files[]" multiple="">
                                                      </span>
                                                <button class="btn btn-send" type="submit">Send</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->
                </div>
                <ul class="inbox-nav inbox-divider">
                    <li class="active">
                        <router-link to="/chat"><i class="fa fa-plus"></i> chat</router-link>

                    </li>
                    <li>
                        {{--<a href="#"><i class="fa fa-plus"></i> add room <span--}}
                                    {{--class="label label-danger pull-right">2</span></a>--}}
                        <router-link to="/add_room"><i class="fa fa-plus"></i> add room</router-link>

                    </li>
                    <li>
                        {{--<a ><i class="fa fa-user"></i> my rooms</a>--}}
                        <router-link to="/my_rooms"><i class="fa fa-user"></i> my rooms</router-link>
                    </li>
                    <li>
                        {{--<a href="#"><i class="fa fa-users"></i> all rooms</a>--}}
                        <router-link to="/all_rooms"><i class="fa fa-users"></i> all rooms</router-link>
                    </li>
                </ul>
                <div style="visibility: hidden">
                    <ul class="nav nav-pills nav-stacked labels-info inbox-divider">
                        <li><h4>Labels</h4></li>
                        <li><a href="#"> <i class=" fa fa-sign-blank text-danger"></i> Work </a></li>
                        <li><a href="#"> <i class=" fa fa-sign-blank text-success"></i> Design </a></li>
                        <li><a href="#"> <i class=" fa fa-sign-blank text-info "></i> Family </a>
                        </li>
                        <li><a href="#"> <i class=" fa fa-sign-blank text-warning "></i> Friends </a>
                        </li>
                        <li><a href="#"> <i class=" fa fa-sign-blank text-primary "></i> Office </a>
                        </li>
                    </ul>
                    <ul class="nav nav-pills nav-stacked labels-info ">
                        <li><h4>Buddy online</h4></li>
                        <li><a href="#"> <i class=" fa fa-circle text-success"></i>Alireza Zare <p>I do not think</p>
                            </a></li>
                        <li><a href="#"> <i class=" fa fa-circle text-danger"></i>Dark Coders<p>Busy with coding</p></a>
                        </li>
                        <li><a href="#"> <i class=" fa fa-circle text-muted "></i>Mentaalist <p>I out of control</p></a>
                        </li>
                        <li><a href="#"> <i class=" fa fa-circle text-muted "></i>H3s4m<p>I am not here</p></a>
                        </li>
                        <li><a href="#"> <i class=" fa fa-circle text-muted "></i>Dead man<p>I do not think</p></a>
                        </li>
                    </ul>
                </div>


            </aside>
            <aside class="lg-side">
                <div class="inbox-head">
                    <h3>Inbox</h3>
                    <form action="#" class="pull-right position">
                        <div class="input-append">
                            <input type="text" class="sr-input" placeholder="Search Mail">
                            <button class="btn sr-btn" type="button"><i class="fa fa-search"></i></button>
                        </div>
                    </form>
                </div>
                <div class="inbox-body">
{{--                    @{{ message }}--}}
                    @yield('content')
                </div>
            </aside>
        </div>
    </div>
</div>

<!-- JavaScripts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js"
        integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js"
        integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS"
        crossorigin="anonymous"></script>
{{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
{{ Html::script('js/app.js') }}
</body>
</html>
