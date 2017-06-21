<div class="container">
    <div class="top-bar">
        <div class="top-bar-title"><img src="/images/logo_with_title.png"/></div>
        <div>
            <div class="top-bar-left">
                <div class="search-container">
                    <div class="search-icon"><i class="fa fa-search" aria-hidden="true"></i></div>
                    <div class="search-input"><input type="text" placeholder="Zoeken..."></div>
                </div>
            </div>
            <div class="top-bar-right">
                <div class="float-left">
                    <button class="button radius btn-default-padding">+ Nieuwe widget</button>
                </div>

                <div class="float-left">
                    <div class="user-container">
                        <div class="user-image"><img class="image-rounded" src="/images/user_image.jpg"/></div>
                        <div class="user-name">{{ auth()->user()->name }}</div>
                    </div>
                </div>

                <div class="float-left">
                    <a class="button" href="{{ route('auth.logout') }}"><i class="fa fa-sign-out" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>