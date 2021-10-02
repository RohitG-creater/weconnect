<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{asset('public/master/images/logo.png')}}" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{asset('public/master/style.css')}}">
    <title>MediaBook</title>
</head>

<body>
    <nav>
        <div class="nav-left">
            <img src="{{asset('public/master/images/logo.png')}}" alt="Logo">
            <input type="text" placeholder="Search Mediabook..">
        </div>

        <div class="nav-middle">
            <a href="#" class="active">
                <i class="fa fa-home"></i>
            </a>

            <a href="#">
                <i class="fa fa-user-friends"></i>
            </a>

            <a href="#">
                <i class="fa fa-play-circle"></i>
            </a>

            <a href="#">
                <i class="fa fa-users"></i>
            </a>
        </div>

        <div class="nav-right">
            <span class="profile"></span>

            <a href="#">
                <i class="fa fa-bell"></i>
            </a>

            <a href="logout">
            <i class="fas fa-sign-out-alt"></i>
            </a>
        </div>
    </nav>


    <div class="container">
        <div class="left-panel">
            <ul>
                <li>
                    <span class="profile"></span>
                    <p>Aashish Panthi</p>
                </li>
                <li>
                    <i class="fa fa-user-friends"></i>
                    <p>Friends</p>
                </li>
                <li>
                    <i class="fa fa-play-circle"></i>
                    <p>Videos</p>
                </li>
                <li>
                    <i class="fa fa-flag"></i>
                    <p>Pages</p>
                </li>
                <li>
                    <i class="fa fa-users"></i>
                    <p>Groups</p>
                </li>
                <li>
                    <i class="fa fa-bookmark"></i>
                    <p>Bookmark</p>
                </li>
                <li>
                    <i class="fab fa-facebook-messenger"></i>
                    <p>Inbox</p>
                </li>
                <li>
                    <i class="fas fa-calendar-week"></i>
                    <p>Events</p>
                </li>
                <li>
                    <i class="fa fa-bullhorn"></i>
                    <p>Ads</p>
                </li>
                <li>
                    <i class="fas fa-hands-helping"></i>
                    <p>Offers</p>
                </li>
                <li>
                    <i class="fas fa-briefcase"></i>
                    <p>Jobs</p>
                </li>
                <li>
                    <i class="fa fa-star"></i>
                    <p>Favourites</p>
                </li>
            </ul>

            <div class="footer-links">
                <a href="#">Privacy</a>
                <a href="#">Terms</a>
                <a href="#">Advance</a>
                <a href="#">More</a>
            </div>
        </div>


        <div class="middle-panel">

            @yield('body')
            
        </div>
        <div class="right-panel">
            <div class="pages-section">
                <h4>Your pages</h4>
                <a class='page' href="#">
                    <div class="dp">
                        <img src="{{asset('public/master/images/logo.png')}}" alt="">
                    </div>
                    <p class="name">Cody</p>
                </a>

                <a class='page' href="#">
                    <div class="dp">
                        <img src="{{asset('public/master/images/dp.jpg')}}" alt="">
                    </div>
                    <p class="name">Cody Tutorials</p>
                </a>
            </div>

            <div class="friends-section">
                <h4>Friends</h4>
                <a class='friend' href="#">
                    <div class="dp">
                        <img src="{{asset('public/master/images/dp.jpg')}}" alt="">
                    </div>
                    <p class="name">Henry Mosely</p>
                </a>

                <a class='friend' href="#">
                    <div class="dp">
                        <img src="{{asset('public/master/images/shoes.jpg')}}" alt="">
                    </div>
                    <p class="name">George</p>
                </a>

                <a class="friend" href="#">
                    <div class="dp">
                        <img src="{{asset('public/master/images/boy.jpg')}}" alt="">
                    </div>
                    <p class="name">Aakash Malhotra</p>
                </a>

                <a class="friend" href="#">
                    <div class="dp">
                        <img src="{{asset('public/master/images/model.jpg')}}" alt="">
                    </div>
                    <p class="name">Ragini Khanna</p>
                </a>

                <a class="friend" href="#">
                    <div class="dp">
                        <img src="{{asset('public/master/images/boy.jpg')}}" alt="">
                    </div>
                    <p class="name">Justin Bieber</p>
                </a>

                <a class="friend" href="#">
                    <div class="dp">
                        <img src="{{asset('public/master/images/dp.jpg')}}" alt="">
                    </div>
                    <p class="name">Ramesh GC</p>
                </a>

                <a class="friend" href="#">
                    <div class="dp">
                        <img src="{{asset('public/master/images/model.jpg')}}" alt="">
                    </div>
                    <p class="name">Sajita Gurung</p>
                </a>
                
            </div>
        </div>
    </div>
</body>

</html>