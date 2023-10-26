<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- Link Favicon --}}
    <link rel="shortcut icon" href="{{ asset('imgFrontend/favicon_web.png') }}" type="image/x-icon">
    {{-- Link font-awsome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    {{-- Link font icon google --}}
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    {{-- Link Css header --}}
    <link href="{{ asset('css/header.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <title>Anime Sphere</title>
</head>

<body>
    {{-- The video background --}}
    <div id="videoContainer">
        <video autoplay muted id="video_background">
            <source src="{{ asset('video/Ta muốn trở thành chúa tể bóng tối.mp4') }}" type="video/mp4">
        </video>
        <div class="pausedVideobackGround">
            <svg id="playIcon" style="display: none; transition: transform 0.3s;" xmlns="http://www.w3.org/2000/svg"
                width="50" height="50" viewBox="0 0 50 50">
                <circle cx="25" cy="25" r="24" stroke="white" stroke-width="2" fill="none" />
                <path d="M20 15l15 10-15 10z" fill="white" />
            </svg>
            <svg id="pauseIcon" style="display: none; transition: transform 0.3s;" xmlns="http://www.w3.org/2000/svg"
                width="50" height="50" viewBox="0 0 50 50">
                <circle cx="25" cy="25" r="24" stroke="white" stroke-width="2" fill="none" />
                <path d="M17 15h4v20h-4zM29 15h4v20h-4z" fill="white" />
            </svg>
        </div>


        <div class="tenPhim">
            <img src="{{ asset('imgFrontend/tenPhim.png') }}" alt="">
        </div>
        <div class="left_buttomVideo">
            <a href="">
                <button class="watchMove">
                    <div class="svgPlay">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg" class="ltr-4z3qvp e1svuwfo1" data-name="Play"
                            aria-hidden="true">
                            <path
                                d="M5 2.69127C5 1.93067 5.81547 1.44851 6.48192 1.81506L23.4069 11.1238C24.0977 11.5037 24.0977 12.4963 23.4069 12.8762L6.48192 22.1849C5.81546 22.5515 5 22.0693 5 21.3087V2.69127Z"
                                fill="currentColor"></path>
                        </svg>
                    </div>
                    <span>Phát</span>
                </button>
            </a>
            <button class="inforMove">
                <div class="svgPlay svgInforMove">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg" class="ltr-4z3qvp e1svuwfo1" data-name="CircleI"
                        aria-hidden="true">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2ZM0 12C0 5.37258 5.37258 0 12 0C18.6274 0 24 5.37258 24 12C24 18.6274 18.6274 24 12 24C5.37258 24 0 18.6274 0 12ZM13 10V18H11V10H13ZM12 8.5C12.8284 8.5 13.5 7.82843 13.5 7C13.5 6.17157 12.8284 5.5 12 5.5C11.1716 5.5 10.5 6.17157 10.5 7C10.5 7.82843 11.1716 8.5 12 8.5Z"
                            fill="currentColor"></path>
                    </svg>
                </div>
                <span>Thông tin khác</span>
            </button>
        </div>

        <div class="right_buttomVideo">
            <button id="muteButton">
                <div class="iconMuted">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg" class="ltr-4z3qvp e1svuwfo1" data-name="VolumeOff"
                        aria-hidden="true">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M11 4.00003C11 3.59557 10.7564 3.23093 10.3827 3.07615C10.009 2.92137 9.57889 3.00692 9.29289 3.29292L4.58579 8.00003H1C0.447715 8.00003 0 8.44774 0 9.00003V15C0 15.5523 0.447715 16 1 16H4.58579L9.29289 20.7071C9.57889 20.9931 10.009 21.0787 10.3827 20.9239C10.7564 20.7691 11 20.4045 11 20V4.00003ZM5.70711 9.70714L9 6.41424V17.5858L5.70711 14.2929L5.41421 14H5H2V10H5H5.41421L5.70711 9.70714ZM15.2929 9.70714L17.5858 12L15.2929 14.2929L16.7071 15.7071L19 13.4142L21.2929 15.7071L22.7071 14.2929L20.4142 12L22.7071 9.70714L21.2929 8.29292L19 10.5858L16.7071 8.29292L15.2929 9.70714Z"
                            fill="currentColor"></path>
                    </svg>
                </div>
            </button>
            <span class="ageRestriction">
                <span class="numberAge">12+</span>
            </span>
        </div>
    </div>

    {{-- Header --}}
    <header>
        <nav>
            <div class="container">
                <div class="leftHeader">
                    <div class="headerLogo">
                        <a href=""><img src="{{ asset('imgFrontend/logo.png') }}" alt="logo"></a>
                    </div>
                    <ul>
                        <li class=""><a class="active" href="">Trang chủ</a></li>
                        <li class=""><a href="">TV Series</a></li>
                        <li class=""><a href="">Move</a></li>
                        <li class=""><a href="">Reels</a></li>
                        <li class=""><a href="">Mới & Phổ biến</a></li>
                        <li class=""><a href="">Danh sách của tôi</a></li>
                        <li class=""><a href="">Lịch chiếu</a></li>
                    </ul>
                </div>
                <div class="rightHeader">
                    <div class="headerSearch">
                        <div class="leftSearch">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg" class="search-icon ltr-4z3qvp e1svuwfo1"
                                data-name="MagnifyingGlass" aria-hidden="true">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M17 10C17 13.866 13.866 17 10 17C6.13401 17 3 13.866 3 10C3 6.13401 6.13401 3 10 3C13.866 3 17 6.13401 17 10ZM15.6177 17.0319C14.078 18.2635 12.125 19 10 19C5.02944 19 1 14.9706 1 10C1 5.02944 5.02944 1 10 1C14.9706 1 19 5.02944 19 10C19 12.125 18.2635 14.078 17.0319 15.6177L22.7071 21.2929L21.2929 22.7071L15.6177 17.0319Z"
                                    fill="#fff"></path>
                            </svg>
                        </div>
                        <input type="search" placeholder="Phim, Nhân vật, Thể loại...">
                    </div>
                    <div><a href="">Cộng đồng</a></div>
                    <div>
                        <svg style="color: #fff" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg" class="ltr-4z3qvp e1svuwfo1" data-name="Bell"
                            aria-hidden="true">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M13.0002 4.07092C16.3924 4.55624 19 7.4736 19 11V15.2538C20.0489 15.3307 21.0851 15.4245 22.1072 15.5347L21.8928 17.5232C18.7222 17.1813 15.4092 17 12 17C8.59081 17 5.27788 17.1813 2.10723 17.5232L1.89282 15.5347C2.91498 15.4245 3.95119 15.3307 5.00003 15.2538V11C5.00003 7.47345 7.60784 4.55599 11.0002 4.07086V2H13.0002V4.07092ZM17 15.1287V11C17 8.23858 14.7614 6 12 6C9.2386 6 7.00003 8.23858 7.00003 11V15.1287C8.64066 15.0437 10.3091 15 12 15C13.691 15 15.3594 15.0437 17 15.1287ZM8.62593 19.3712C8.66235 20.5173 10.1512 22 11.9996 22C13.848 22 15.3368 20.5173 15.3732 19.3712C15.3803 19.1489 15.1758 19 14.9533 19H9.0458C8.82333 19 8.61886 19.1489 8.62593 19.3712Z"
                                fill="currentColor">
                            </path>
                        </svg>
                    </div>
                    <div class="profile">
                        <div>
                            <div class="avata"><img src="{{ asset('imgFrontend/avata.jpg') }}" alt=""></div>
                            <span class="caret" role="presentation"></span>
                        </div>
                        <ul class="profileList">
                            <li>Đăng Nhập</li>
                            <li>Đăng Ký</li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <main>
        @yield('main')
    </main>
    <script>
        // Fixed Header
        window.onscroll = function() {
            var header = document.querySelector("header");
            if (window.pageYOffset > 90) {
                header.style.background = "#141414";
            } else {
                header.style.background = 'none';
                header.style.backgroundImage = "linear-gradient(180deg, rgba(0, 0, 0, .7) 10%, transparent)";
            }
        }

        // Muted Video
        var video = document.getElementById("video_background");
        var btn = document.getElementById("muteButton");

        btn.addEventListener("click", function() {
            if (!video.muted) {
                video.muted = true;
                btn.innerHTML =
                    '<div class="iconMuted"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"class="ltr-4z3qvp e1svuwfo1" data-name="VolumeOff" aria-hidden="true"><path fill-rule="evenodd" clip-rule="evenodd" d="M11 4.00003C11 3.59557 10.7564 3.23093 10.3827 3.07615C10.009 2.92137 9.57889 3.00692 9.29289 3.29292L4.58579 8.00003H1C0.447715 8.00003 0 8.44774 0 9.00003V15C0 15.5523 0.447715 16 1 16H4.58579L9.29289 20.7071C9.57889 20.9931 10.009 21.0787 10.3827 20.9239C10.7564 20.7691 11 20.4045 11 20V4.00003ZM5.70711 9.70714L9 6.41424V17.5858L5.70711 14.2929L5.41421 14H5H2V10H5H5.41421L5.70711 9.70714ZM15.2929 9.70714L17.5858 12L15.2929 14.2929L16.7071 15.7071L19 13.4142L21.2929 15.7071L22.7071 14.2929L20.4142 12L22.7071 9.70714L21.2929 8.29292L19 10.5858L16.7071 8.29292L15.2929 9.70714Z"fill="currentColor"></path></svg></div>';
            } else {
                video.muted = false;
                btn.innerHTML =
                    '<div class="iconMuted"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="ltr-4z3qvp e1svuwfo1" data-name="VolumeHigh" aria-hidden="true"><path fill-rule="evenodd" clip-rule="evenodd" d="M24 12C24 8.28693 22.525 4.72597 19.8995 2.10046L18.4853 3.51468C20.7357 5.76511 22 8.81736 22 12C22 15.1826 20.7357 18.2348 18.4853 20.4852L19.8995 21.8995C22.525 19.2739 24 15.713 24 12ZM11 3.99995C11 3.59549 10.7564 3.23085 10.3827 3.07607C10.009 2.92129 9.57889 3.00685 9.29289 3.29285L4.58579 7.99995H1C0.447715 7.99995 0 8.44767 0 8.99995V15C0 15.5522 0.447715 16 1 16H4.58579L9.29289 20.7071C9.57889 20.9931 10.009 21.0786 10.3827 20.9238C10.7564 20.7691 11 20.4044 11 20V3.99995ZM5.70711 9.70706L9 6.41417V17.5857L5.70711 14.2928L5.41421 14H5H2V9.99995H5H5.41421L5.70711 9.70706ZM16.0001 12C16.0001 10.4087 15.368 8.88254 14.2428 7.75732L12.8285 9.17154C13.5787 9.92168 14.0001 10.9391 14.0001 12C14.0001 13.0608 13.5787 14.0782 12.8285 14.8284L14.2428 16.2426C15.368 15.1174 16.0001 13.5913 16.0001 12ZM17.0709 4.92889C18.9462 6.80426 19.9998 9.3478 19.9998 12C19.9998 14.6521 18.9462 17.1957 17.0709 19.071L15.6567 17.6568C17.157 16.1565 17.9998 14.1217 17.9998 12C17.9998 9.87823 17.157 7.8434 15.6567 6.34311L17.0709 4.92889Z" fill="currentColor"></path></svg></div>';
            }
        });


        var video = document.getElementById("video_background");
        var playIcon = document.getElementById("playIcon");
        var pauseIcon = document.getElementById("pauseIcon");
        var pausedVideobackGround = document.querySelector(".pausedVideobackGround");

        function togglePlayPause() {
            if (video.paused) {
                video.play();
                playIcon.style.display = "none";
                pauseIcon.style.display = "block";
                pauseIcon.style.transform = "scale(1.2)";
                setTimeout(function() {
                    pauseIcon.style.opacity = "0";
                    setTimeout(function() {
                        pauseIcon.style.display = "none";
                        pauseIcon.style.transform = "scale(1)";
                        pauseIcon.style.opacity = "1";
                    }, 500);
                }, 500);
            } else {
                video.pause();
                pauseIcon.style.display = "none";
                playIcon.style.display = "block";
                playIcon.style.transform = "scale(1.2)";
                // playIcon.style.opacity = "0.8";
            }
        }
        video.addEventListener('click', togglePlayPause);
        pausedVideobackGround.addEventListener('click', togglePlayPause);
        video.addEventListener('ended', function() {
            pauseIcon.style.display = "none";
            playIcon.style.display = "block";
            playIcon.style.transform = "scale(1.2)";
        });
    </script>
