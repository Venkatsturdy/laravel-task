
<form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mainDiv">
        <div class="title">

            <a href="#">
                <i class="fa fa-pencil" aria-hidden="true"></i>
                Create a Post</a>

            <a href="#">
                <i class="fa fa-file-image-o" aria-hidden="true"></i>
                Photo</a>
            <p><i class="fa fa-times" aria-hidden="true"></i>
            </p>
        </div>

        <div id="body">
            <!--img and textarea-->
            <div class="imtcontainer">
                <div class="img">
                    <img src="{{ asset('storage/' . auth()->user()->image) }}">

                </div>
                <div id="imagePreview" style="margin-top: 10px;">

                </div>
                <div class="textarea">
                    <textarea onkeyup="InputAdjust(this)" placeholder="what's on you mind?" name="content"></textarea>
                </div>
            </div>

            <div class="line">
                <div class="colors">
                    <span style="background-color: #e8eaee"></span>
                    <span style="background-color: #fcd85d"></span>
                    <span style="background-color: #f25467"></span>
                    <span style="background-color: #f25467"></span>
                    <span style="background-color: #10aaff"></span>
                    <span style="background-color: #488ee8"></span>
                    <span style="background-color: #5a3be2"></span>
                    <span style="background-color: #5e6574"></span>
                </div>
                <a href='#'><i class="fa fa-smile-o" aria-hidden="true"></i></a>
            </div>



            <!--icons-->
            <div class="icons">
                <div class="photos">
                    <label>
                        <i class="fa fa-picture-o"></i> Photo
                        <input type="file" name="image" accept="image/*" style="display: none;" id="imageInput">
                    </label>

                    <!-- Image preview section -->

                </div>

                <div class="feeling">
                    <a href='#'>
                        <i class="fa fa-smile-o" aria-hidden="true"></i>
                        Felling/Activity</a>
                </div>

                <div class="more">
                    <a href="">
                        <span></span>
                        <span></span>
                        <span></span>
                    </a>
                </div>

                <div style="display: none" class="checkin">
                    <a href='#'>
                        <i style="color: #f42a67;" class="fa fa-map-marker" aria-hidden="true"></i>
                        Check in</a>
                </div>

                <div style="display: none;" class="tagfriend">
                    <a href='#'>
                        <i style="color: #90c0d5" class="fa fa-user-plus" aria-hidden="true"></i>
                        Tag Friend</a>
                </div>

                <div style="display: none;" class="live">
                    <a href='#'>
                        <i style="color: #fa3e3e" class="fa fa-video-camera" aria-hidden="true"></i>
                        Live Video</a>
                </div>

                <div style="display: none;" class="back">
                    <a href='#'>
                        <i style="color: #f7923c" class="fa fa-fonticons" aria-hidden="true"></i>
                        Background Color</a>
                </div>
                <div style="display: none;" class="footer">
                    <div style="margin-top: 10px;">
                        <button type="submit"
                            style="padding: 10px 20px; background: #1877f2; color: white; border: none; border-radius: 5px;">
                            Post
                        </button>
                    </div>
                </div>

            </div>
        </div>

    </div>
</form>
@if ($errors->any())
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            Swal.fire({
                icon: 'error',
                title: 'Validation Error',
                html: `{!! implode('<br>', $errors->all()) !!}`,
                confirmButtonText: 'Close',
                width: '500px', // or any width you prefer
                customClass: {
                    popup: 'swal2-popup-half-height'
                }
            });
        });
    </script>
@endif


@if (session('success'))
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            Swal.fire({
                icon: 'success',
                title: 'Success!',
                text: "{{ session('success') }}"
            });
        });
    </script>
@endif
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
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const imageInput = document.getElementById('imageInput');
        const imagePreview = document.getElementById('imagePreview');

        imageInput.addEventListener('change', function() {
            const file = this.files[0];
            imagePreview.innerHTML = ''; // Clear previous preview

            if (file) {
                const reader = new FileReader();

                reader.onload = function(e) {
                    const img = document.createElement('img');
                    img.src = e.target.result;
                    img.alt = "Preview";
                    img.style.maxWidth = "100%";
                    img.style.height = "200px";
                    img.style.border = "1px solid #ccc";
                    img.style.borderRadius = "8px";
                    img.style.marginTop = "10px";
                    imagePreview.appendChild(img);
                }

                reader.readAsDataURL(file);
            }
        });
    });
</script>
