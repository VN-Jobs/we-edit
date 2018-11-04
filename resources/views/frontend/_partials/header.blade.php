<div class="offcanvas-menu">
    <div class="offcanvas-inner">
        <div class="offcanvas-header">
            <div class="float-left">
                <span class="offcanvas-title">Menu</span>
            </div>
            <div class="float-right">
                <div class="close-offcanvas">Close</div>
            </div>
        </div>
        <div class="offcanvas-content">
            <div class="main-menu">
                @include('frontend._partials.navigation', ['class' => ''])
            </div>
        </div>
    </div>
</div>
<header class="site-header">
    <nav class="site-navigation">
        <div class="container">
            <div class="row">
                <a class="site-logo col-6 col-sm-6 col-md-6 col-lg-2" href="index.html">
                    <img class="logo" src="images/logo.png" alt="we-edit.com">
                </a>
                <div class="main-menu col-6 col-sm-6 col-md-6 col-lg-10">
                    <div id="offcanvas-toggler" class="d-lg-none d-xl-none">
                        <div class="ico-menu">
                            <div class="bar"></div>
                            <div class="bar"></div>
                            <div class="bar"></div>
                        </div>
                        <span>MENU</span>
                    </div>
                    @include('frontend._partials.navigation', ['class' => ' d-none d-lg-block'])
                </div>
            </div>
        </div>
    </nav>
</header>
