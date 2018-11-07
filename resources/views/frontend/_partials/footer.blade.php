<footer class="site-footer">
    <section class="footer-main">
        <div class="container">
            <div class="row">
                <div class="f-col f-logo-wrapper col-sm-12 col-md-12 col-lg-3 col-xl-3">
                    <a href="{{ route('home') }}" class="f-logo">
                        <img src="{{ publicSrc($configs['logo'][0] ?? null) }}" alt="we-edit.com" />
                    </a>
                    <ul class="social horizontal">
                        <li><a href="{{ $configs['facebook'][0] ?? null }}" target="_blank"><i class="fa fa-facebook" aria-label="Facebook"></i></a></li>
                        <li><a href="{{ $configs['twitter'][0] ?? null }}" target="_blank"><i class="fa fa-twitter" aria-label="Twitter"></i></a></li>
                        <li><a href="{{ $configs['instagram'][0] ?? null }}" target="_blank"><i class="fa fa-instagram" aria-label="true"></i></a></li>
                        <li><a href="{{ $configs['youtube'][0] ?? null }}" target="_blank"><i class="fa fa-youtube" aria-label="YouTube"></i></a></li>
                        <li class="last"><a href="{{ $configs['linkedin'][0] ?? null }}" target="_blank"><i class="fa fa-linkedin-square" aria-label="Linkedin"></i></a></li>
                    </ul>
                </div>
                <div class="f-col col-sm-6 col-md-4 col-lg-2 col-xl-2">
                    <h3 class="f-title">Our Services</h3>
                    <ul>
                        @foreach ($__categories as $category)
                        <li><a href="{{ route('category.show', $category->slug) }}">{{ $category->name }}</a></li>
                        @endforeach
                    </ul>
                </div>
                <div class="f-col col-sm-6 col-md-4 col-lg-3 col-xl-3">
                    <h3 class="f-title">Our Flickr</h3>
                    <div id="lightgallery-flickr" class="gallery-inner column-3 overflow-hidden"></div>
                </div>


                <div class="f-col facebook-box-wrapper col-sm-12 col-md-4 col-lg-4 col-xl-4">
                    <div class="facebook-box">
                        <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Ffacebook&tabs&width=340&height=214&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=340231906161242" width="340" height="214" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="copyright">
        <div class="container">
            <div class="row">
                <p class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">{{ $configs['copyright'][0] ?? null }}</p>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <ul class="list-horizontal">
                        <li><a href="{{ route('about') }}">About</a></li>
                        <li><a href="{{ route('blog') }}">Blog</a></li>
                        <li><a href="{{ route('contact') }}">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</footer>
