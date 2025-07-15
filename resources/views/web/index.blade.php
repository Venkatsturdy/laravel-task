@extends('layout.web.app')
@push('meta')
    <title>Facebook Full Responsive Design - main feed</title>
@endpush
<style>
    .loader {
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        z-index: 1000;
    }

    .spinner {
        width: 40px;
        height: 40px;
        border: 4px solid #f3f3f3;
        border-top: 4px solid #3498db;
        border-radius: 50%;
        animation: spin 1s linear infinite;
    }

    @keyframes spin {
        0% {
            transform: rotate(0deg);
        }

        100% {
            transform: rotate(360deg);
        }
    }

    .visually-hidden {
        position: absolute;
        width: 1px;
        height: 1px;
        padding: 0;
        margin: -1px;
        overflow: hidden;
        clip: rect(0, 0, 0, 0);
        border: 0;
    }

    .actions-buttons-button {
        background-color: #f0f0f0;
        color: #333;
        padding: 8px 16px;
        border: none;
        cursor: pointer;
        transition: all 0.3s ease;
        border-radius: 6px;
    }

    .actions-buttons-button.liked {
        background-color: #333;
        color: #fff;
    }

    .like-btn.liked {
        background-color: #007bff;
        color: #fff;
        border-radius: 5px;
        padding: 5px 10px;
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

        <main class="main-feed">
            <ul class="main-feed-list" id="post-list">
                @include('web.postcreate')
                @include('layout.web.partial.post_list')
            </ul>
        </main>
   
    
    <div id="loader" class="loader" style="display: none;" aria-live="polite" aria-busy="false">
        <div class="spinner"></div>
        <span class="visually-hidden">Loading...</span>
    </div>
    <script>
        let page = 1;
        let loading = false;
        let scrollTimeout;

        window.onscroll = function() {
            if (window.innerHeight + window.scrollY >= document.body.offsetHeight - 100 && !loading) {
                clearTimeout(scrollTimeout);
                scrollTimeout = setTimeout(loadMorePosts, 100);
            }
        };

        function loadMorePosts() {
            loading = true;
            page++;
            const loader = document.getElementById('loader');
            loader.style.display = 'block';
            loader.setAttribute('aria-busy', 'true');

            fetch("{{ route('posts.loadMore') }}?page=" + page, {
                    headers: {
                        'Accept': 'application/json'
                    }
                })
                .then(res => {
                    if (!res.ok) {
                        throw new Error('Network response was not ok: ' + res.status);
                    }
                    return res.json();
                })
                .then(data => {
                    if (!data.html || !data.hasMore) {
                        loader.style.display = 'none';
                        loader.setAttribute('aria-busy', 'false');
                        return;
                    }
                    document.getElementById('post-list').insertAdjacentHTML('beforeend', data.html);
                    loader.style.display = 'none';
                    loader.setAttribute('aria-busy', 'false');
                    loading = false;
                })
                .catch(error => {
                    console.error('Error loading posts:', error);
                    loading = false;
                    loader.style.display = 'none';
                    loader.setAttribute('aria-busy', 'false');
                    alert('Failed to load more posts. Please try again.');
                });
        }
    </script>
   

    
@endsection

@push('script')
@endpush
