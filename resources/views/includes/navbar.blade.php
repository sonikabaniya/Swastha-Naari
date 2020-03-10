<nav class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-fixed-top navbar-toggleable-sm bg-color transparent">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <div class="hamburger">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </button>
    <div class="menu-logo">
        <div class="navbar-brand">
            <span class="navbar-logo">
                <a href="https://swasthanaari.com">
                     <img src="{{ asset('assets/images/swastha-nari-svg-logo.svg')}}" alt="Swastha Naari" title="" style="height: 3.8rem;">
                </a>
            </span>
            <span class="navbar-caption-wrap"><a class="navbar-caption text-primary display-4" href="https://swasthanaari.com">स्वस्थ नारी</a></span>
        </div>
    </div>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        
        <div class="navbar-buttons mbr-section-btn"><a class="btn btn-sm btn-primary display-4" href="{{ route('login') }}"><span class="mbri-login mbr-iconfont mbr-iconfont-btn"></span>
                
                Login/Register</a></div>
    </div>
</nav>