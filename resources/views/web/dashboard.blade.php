@extends('layout.web.app')

@push('meta')
    <title>{{ $user->name }}'s Profile - Facebook Design</title>
@endpush
<style>
    .create_post {
        display: inline-block;
        padding: 8px 16px;
        background-color: #007bff;
        color: #fff;
        text-decoration: none;
        border-radius: 4px;
        font-weight: bold;
        margin-left: 90px;
        margin-top: -36px;
    }

    * {
        margin: 0;
        padding: 0;
        text-decoration: none;
        box-sizing: border-box;
        list-style-type: none;
        font-family: helvetica;

    }

    body {
        background-color: #333;

    }

    .mainDiv {
        /* width: 500px; */
        background-color: #fff;
        margin: 50px auto;
        border-radius: 3px;
        position: relative;

    }

    .title {
        width: 100%;
        height: 33px;
        background-color: #f6f7f9;
        border-bottom: 1px solid #dddfe2;
        border-radius: 2px 2px 0 0;
        font-size: 13.5px;


    }

    .title p {
        margin-right: 5px;
        margin-top: 3px;
        float: right;
        padding: 3px 7px;
        border-radius: 50%;
    }

    .title p:hover {
        background-color: #ddd;
    }

    .title a {
        line-height: 33px;
        font-weight: bold;
        color: #365899;
        font-size: 13px;
        padding: 0 3px 0 3px;
    }


    .title a:first-of-type {
        height: 14px;
        padding: 4px 6px 4px 4px;
        color: #4b4f56;
    }

    .title a:nth-of-type(2) i {
        height: 14px;
        padding: 4px 2px 4px 4px;
        color: #4b4f56;
    }

    .title a i {
        padding: 3px;
    }



    /*image and text container*/

    #body {
        border-radius: 3px;
    }

    .imtcontainer {
        width: 100%;
        /*min-height: 71px;*/
        border: 1px solid transparent;
        border-radius: 3px;
        background-color: #fff;

    }

    .imtcontainer>.img {
        float: left;
        width: 40px;
        height: 40px;
        background-color: #eee;
        margin: 8px 1px 0 8px;
        display: inline-block;
        border: 1px solid transparent;
    }

    .imtcontainer>.img img {
        width: 100%;
        height: 100%;
    }

    .imtcontainer>.textarea {
        display: inline-block;
        background-color: #fff;
        width: 90%;
    }

    .imtcontainer>.textarea textarea {


        display: flex;
        margin-top: 8px;
        width: 100%;
        /*min-height: 90%;*/
        text-align: left;
        padding: 10px;
        border: none;
        resize: none;
        font-size: 16px;
    }

    .imtcontainer>.textarea textarea:focus {
        border: none;
        outline: none;
    }


    .line {
        position: relative;
        margin: 1px auto;
        width: 100%;
        border-top: 1px solid #e9ebee;
        text-align: left;
        padding-top: 1px;
        background-color: #fff;
    }

    .line span {
        border-radius: 50px;
        padding: 11px;
        margin-bottom: 5px;
        margin-left: 5px;
        display: none;
        z-index: 10;
        border: 1px solid #fff;
    }

    .line span:active {
        outline: 5px #333;
    }

    .line i {
        position: absolute;
        top: -18px;
        right: 5px;
        color: #4b4f56;
    }

    .line .colors {
        display: inline-block;
        visibility: hidden;
    }

    /*icons*/

    .icons {
        width: 100%;
        padding-left: 10px;
        border: 1px solid transparent;
        background-color: #fff;
    }

    .photos,
    .feeling,
    .more,
    .checkin,
    .tagfriend,
    .back,
    .live {
        text-indent: 5px;
        margin-top: 6px;
        line-height: 32px;
        display: inline-block;
        height: 32px;
        border-radius: 50px;
        background-color: #f6f7f9;
        padding: 0px 6px 0px 3px;
        transition: all .0s ease-in-out;
    }

    .photos a,
    .feeling a,
    .checkin a,
    .tagfriend a,
    .back a,
    .live a {
        color: #333;
        font-weight: bold;
        font-size: 13.8px;
    }

    .photos i {
        color: #8bbf50;
    }

    .feeling i {
        color: #f6d16f
    }

    .more {
        padding: 0px 10px 0px 10px;
        text-indent: 0;
        line-height: 30px;
    }

    .more span {
        border-radius: 50px;
        display: inline-block;
        padding: 2.5px;
        background-color: #a7aab1
    }

    .photos:hover,
    .feeling:hover,
    .more:hover,
    .checkin:hover,
    .tagfriend:hover,
    .back:hover,
    .live:hover {
        background-color: #dddfe2;
    }

    /*footer*/

    .footer {
        width: 100%;
        background-color: #fff;
        text-align: right;
        padding-bottom: 5px;
        padding-top: 15px;
    }

    .footer a:first-of-type {
        font-size: 13px;
        display: inline-block;
        color: #333;
        line-height: 21px;
        padding: 1px 2px 1px 2px;
        width: 147px;
        height: 24px;
        text-align: center;
        border: 1px solid #ced0d4;
    }

    .footer a:nth-of-type(2) {
        color: #fff;
        display: inline-block;
        padding: 1px 2px 1px;
        width: 61px;
        height: 24px;
        line-height: 21px;
        text-align: center;
        background-color: #4267b2;
    }

    .footer a {}





    .clicked {
        height: 290px;
        background-color: #fff
    }

    .area {
        min-height: 117px;
    }

    .opwidth {
        width: 49%;
        margin-left: 5x;
    }

    .inline {
        display: inline-block !important;
    }

    .visible {
        visibility: visible !important;
    }
</style>
@section('content')
    <div class="container">
        <article class="common-post">
            <div class="profile-header u-flex u-margin-bottom">
                <img src="{{ $user->image ? asset('storage/' . $user->image) : 'https://assets.codepen.io/65740/internal/avatars/users/default.png' }}"
                    alt="{{ $user->name }}" class="user-image" width="80" height="80">

                <div class="profile-info u-margin-start">
                    <h2>{{ $user->name }}</h2>
                    <p><strong>{{ $user->posts->count() }}</strong> Posts</p>
                </div>

            </div>
        @include('web.postcreate')

        </article>
        <div class="user-posts">
            <main class="main-feed">
                <ul class="main-feed-list" id="post-list">
                    @include('layout.web.partial.post_list')
                </ul>
            </main>
        </div>
    </div>
    <script>
        var text = document.getElementsByTagName('textarea')[0],
            more = document.getElementsByClassName('more')[0],
            cont = document.getElementById('body'),
            areaCont = document.getElementsByClassName('imtcontainer')[0],
            ico = document.querySelectorAll(".photos , .feeling, .tagfriend, .checkin, .back, .live "),
            line = document.querySelectorAll('.line span'),
            bor = document.querySelectorAll('.line')
        exit = document.querySelectorAll('.title p')[0],
            colo = document.getElementsByClassName('colors')
        span = document.querySelectorAll('.colors span'),
            footer = document.getElementsByClassName('footer')[0];


        text.onfocus = function() {

            text.style.height = "90px";
            cont.classList.add('clicked');
            areaCont.classList.add('area');
            document.getElementsByClassName('mainDiv')[0].classList.add('area');
            more.style.display = "none"
            ico[2].style.display = 'inline-block';
            ico[3].style.display = 'inline-block';
            ico[4].style.display = 'inline-block';
            ico[5].style.display = 'inline-block';


            for (var i = 0; i < ico.length; i++) {
                ico[i].classList.add('opwidth');
            }


            bor[0].style.borderTop = 'none';
            bor[0].style.borderBottom = '1px solid #e9ebee';
            footer.style.display = 'block';

        }




        exit.onclick = function() {
            footer.style.display = 'none';
            text.style.height = "";

            cont.classList.remove('clicked');

            areaCont.classList.remove('area');

            more.style.display = "inline-block"

            ico[2].style.display = 'none';
            ico[3].style.display = 'none';
            ico[4].style.display = 'none';
            ico[5].style.display = 'none';

            for (var i = 0; i < ico.length; i++) {
                ico[i].classList.remove('opwidth');
            }
            for (var i = 0; i < line.length; i++) {
                line[i].style.display = "none";
            }
            text.value = '';
            text.placeholder = " what's in your mind?";

        }


        ico[5].onclick = function() {

            colo[0].classList.toggle('visible');

            for (var i = 0; i < line.length; i++) {
                line[i].style.display = "inline-block";
            }
        }









        var col = ['#e8eaee', '#fcd85d', '#f25467', '#10aaff', '#f25467', '#488ee8', '#5a3be2',
            '#5e6574'
        ];


        span[0].onclick = function() {
            text.style.backgroundColor = col[0];
            text.style.color = "#333";
        };
        span[1].onclick = function() {
            text.style.backgroundColor = col[1];
            text.style.color = "#fff";
        };
        span[2].onclick = function() {
            text.style.backgroundColor = col[2];
            text.style.color = "#fff";
        };
        span[3].onclick = function() {
            text.style.backgroundColor = col[3];
            text.style.color = "#fff";
        };
        span[4].onclick = function() {
            text.style.backgroundColor = col[4];
            text.style.color = "#fff";
        };
        span[5].onclick = function() {
            text.style.backgroundColor = col[5];
            text.style.color = "#fff";
        };
        span[6].onclick = function() {
            text.style.backgroundColor = col[6];
            text.style.color = "#fff";
        };
        span[7].onclick = function() {
            text.style.backgroundColor = col[7];
            text.style.color = "#fff";
        };












        function InputAdjust(o) {
            o.style.height = "1px";
            o.style.height = (40 + o.scrollHeight) + "px";
        }
    </script>
@endsection

@push('script')
    <!-- Optional JS -->
@endpush
