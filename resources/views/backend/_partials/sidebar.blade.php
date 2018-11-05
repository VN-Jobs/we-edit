<div class="sidebar">
    <nav class="sidebar-nav">
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link" href="#"><i class="ion-home"></i> {{ __('repositories.home.name') }}</a>
            </li>
            <li class="nav-item nav-dropdown">
                <a class="nav-link nav-dropdown-toggle" href="#"><i class="ion-ios-folder-outline"></i> {{ __('repositories.title.product') }}</a>
                <ul class="nav-dropdown-items">
                    <li class="nav-item">
                        <a class="nav-link" href="#"> {{ __('repositories.product.name') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('backend.category.type', 'product') }}"> {{ __('repositories.category.name') }}</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('backend.post.index') }}"><i class="ion-clipboard"></i> {{ __('repositories.title.post') }}</a>
            </li>
            <li class="nav-item nav-dropdown">
                <a class="nav-link nav-dropdown-toggle" href="#"><i class="ion-ios-gear-outline"></i> {{ __('repositories.title.config') }}</a>
                <ul class="nav-dropdown-items">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('backend.user.index') }}"> {{ __('repositories.user.name') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('backend.slide.index') }}"> {{ __('repositories.slide.name') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('backend.menu.index') }}"> {{ __('repositories.menu.name') }}</a>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>
</div>
