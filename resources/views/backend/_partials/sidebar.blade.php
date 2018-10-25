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
                </ul>
            </li>
            <li class="nav-item nav-dropdown">
                <a class="nav-link nav-dropdown-toggle" href="#"><i class="ion-clipboard"></i> {{ __('repositories.title.post') }}</a>
                <ul class="nav-dropdown-items">
                    <li class="nav-item">
                        <a class="nav-link" href="#"> {{ __('repositories.post.name') }}</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item nav-dropdown">
                <a class="nav-link nav-dropdown-toggle" href="#"><i class="ion-ios-book"></i> {{ __('repositories.title.article') }}</a>
                <ul class="nav-dropdown-items">
                    @can('post-read')
                    <li class="nav-item">
                        <a class="nav-link" href="#"> {{ __('repositories.post.article') }}</a>
                    </li>
                    @endcan
                    @can('category-read')
                    <li class="nav-item">
                        <a class="nav-link" href="#"> {{ __('repositories.category.name') }}</a>
                    </li>
                    @endcan
                </ul>
            </li>
            <li class="nav-item nav-dropdown">
                <a class="nav-link nav-dropdown-toggle" href="#"><i class="ion-ios-gear-outline"></i> {{ __('repositories.title.config') }}</a>
                <ul class="nav-dropdown-items">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('backend.user.index') }}"> {{ __('repositories.user.name') }}</a>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>
</div>
