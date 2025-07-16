<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Facebook Login Page (Clone)</title>
    <link rel="stylesheet" href="{{ asset('resource/web/loginstyle.css') }}">
</head>

<body>
    <!-- partial:index.partial.html -->
    <!--
 MAIN CONTENT STRAT
                        -->
    <div class="main-contend-section">
        <div class="main-container">
            <div class="w-50">
                <div class="logo">
                    <img src="https://res.cloudinary.com/drgxflcsb/image/upload/v1681242147/facebook%20clone/logo_mlo10v.svg"
                        alt="Logo">
                </div>
                <div class="fb-tag-line">
                    <h3 id="tnk">Facebook helps you connect and share with the people in your life.</h3>
                </div>
            </div>
            <div class="w-50">
                <div class="form-section">
                    <form action="{{ route('register.submit') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul class="mb-0">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <label for="name">Full Name</label>
                        <input type="text" name="name" id="name" placeholder="Full Name" required>

                        <label for="email">Email Address</label>
                        <input type="text" name="email" id="email" placeholder="Email address" required>

                        <label for="password">Password</label>
                        <div style="position: relative;">
                            <input type="password" name="password" id="password" placeholder="Password" required>
                            <span onclick="togglePassword('password')"
                                style="position: absolute; right: 10px; top: 50%; transform: translateY(-50%); cursor: pointer;">
                                👁
                            </span>
                        </div>

                        <label for="password_confirmation">Confirm Password</label>
                        <div style="position: relative;">
                            <input type="password" name="password_confirmation" id="password_confirmation"
                                placeholder="Confirm Password" required>
                            <span onclick="togglePassword('password_confirmation')"
                                style="position: absolute; right: 10px; top: 50%; transform: translateY(-50%); cursor: pointer;">
                                👁
                            </span>
                        </div>


                        <label for="image">Image</label><br>
                        <input type="file" name="image" id="image" accept="image/*" required><br>
                        <br>
                        <input type="submit" name="submit" value="Register">
                        <div style="display: flex; align-items: center; gap: 5px;">
                            <p style="margin: 0;">Please login already have a account</p>
                            <a href="{{ route('login') }}" target="_self" >Login</a>
                            <div class="line"></div>
                        </div>
                        <br>
                    </form>

                </div>
                <div class="create-page">
                    <p><a href="#" target="_self">Create a Page</a> for a celebrity, band or business.</p>
                </div>
            </div>
        </div>
    </div>
    <!--
 MAIN CONTENT END
 -->

    <!--
 FOOTER CONTENT STRAT
 -->
    <div class="footer-section">
        <div class="footer-container">
            <div class="language-section">
                <ul>
                    <li>English (UK)</li>
                    <li><a href="#" target="_self">বাংলা</a></li>
                    <li><a href="#" target="_self">অসমীয়া</a></li>
                    <li><a href="#" target="_self">हिन्दी</a></li>
                    <li><a href="#" target="_self">Bahasa Indonesia</a></li>
                    <li><a href="#" target="_self">नेपाली</a></li>
                    <li><a href="#" target="_self">中文(简体)</a></li>
                    <li><a href="#" target="_self">العربية</a></li>
                    <li><a href="#" target="_self">Bahasa Melayu</a></li>
                    <li><a href="#" target="_self">Español</a></li>
                    <li><a href="#" target="_self">Português (Brasil)</a></li>
                    <li><a href="#" target="_self" class="add-more-icon">+</a></li>
                </ul>
            </div>
            <div class="other-pages-link">
                <div class="line"></div>
                <ul>
                    <li><a href="#" target="_self">Sign Up</a></li>
                    <li><a href="#" target="_self">Log In</a></li>
                    <li><a href="#" target="_self">Messenger</a></li>
                    <li><a href="#" target="_self">Facebook Lite </a></li>
                    <li><a href="#" target="_self">Watch </a></li>
                    <li><a href="#" target="_self">People</a></li>
                    <li><a href="#" target="_self">Pages</a></li>
                    <li><a href="#" target="_self">Page categories</a></li>
                    <li><a href="#" target="_self">Places</a></li>
                    <li><a href="#" target="_self">Games</a></li>
                    <li><a href="#" target="_self">Locations</a></li>
                    <li><a href="#" target="_self">Marketplace</a></li>
                    <li><a href="#" target="_self">Facebook Pay</a></li>
                    <li><a href="#" target="_self">Groups</a></li>
                    <li><a href="#" target="_self">Jobs</a></li>
                    <li><a href="#" target="_self">Oculus</a></li>
                    <li><a href="#" target="_self">Portal</a></li>
                    <li><a href="#" target="_self">Instagram</a></li>
                    <li><a href="#" target="_self">Local</a></li>
                    <li><a href="#" target="_self">Fundraisers</a></li>
                    <li><a href="#" target="_self">Services</a></li>
                    <li><a href="#" target="_self">Voting Information Centre</a></li>
                    <li><a href="#" target="_self">About</a></li>
                    <li><a href="#" target="_self">Create ad</a></li>
                    <li><a href="#" target="_self">Create Page</a></li>
                    <li><a href="#" target="_self">Developers</a></li>
                    <li><a href="#" target="_self">Careers</a></li>
                    <li><a href="#" target="_self">Privacy</a></li>
                    <li><a href="#" target="_self">Cookies</a></li>
                    <li><a href="#" target="_self">AdChoices<div class="ad-icon"><img
                                    src="https://res.cloudinary.com/drgxflcsb/image/upload/v1681242146/facebook%20clone/ad-icon_k9ged1.png"
                                    alt="ad-icon"></div></a></li>
                    <li><a href="#" target="_self">Terms</a></li>
                    <li><a href="#" target="_self">Help</a></li>
                </ul>
            </div>
            <div class="copywrite">
                <p>Facebook &copy; 2023</p>
            </div>
        </div>
    </div>
    <!-- partial -->
    <script>
        function togglePassword(fieldId) {
            const field = document.getElementById(fieldId);
            field.type = field.type === "password" ? "text" : "password";
        }
    </script>

</body>

</html>
