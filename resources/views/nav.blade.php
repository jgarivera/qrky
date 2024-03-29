<div class="uk-container">
<nav class="uk-navbar uk-navbar-container uk-navbar-transparent" data-uk-navbar>
        <div class="uk-navbar-left">
            <div class="uk-navbar-item">
            <a class="uk-logo" title="Logo" href="{{ route('home') }}">
                <img src="{{ asset('img/logo.png')}}" draggable="false" alt="Logo" style="width: 100px; margin-top: 20px;">
            </a>
        </div>
        </div>

        <div class="uk-navbar-right">
            <ul class="uk-navbar-nav uk-visible@m">
                <li>
                    <!-- Logged Out -->
                    @guest  
                        <div class="uk-button-group">
                            <a href="{{ route('login') }}">
                                <button class="uk-button uk-button-default qrky-nav-btn uk-button-small">Login</button>
                            </a>
                            <a href="{{ route('register') }}">
                                <button class="uk-button uk-button-default qrky-nav-btn uk-button-small">Register</button>
                            </a>
                        </div>
                    @else
                    <!-- Logged In -->
                        <div class="uk-button-group">
                            <a href="{{ route('manage-qrcs-ug') }}">
                                <button class="uk-button uk-button-default qrky-nav-btn uk-button-small">My QR Codes</button>
                            </a>
                            <a href="{{ route('manage-grps') }}">
                                <button class="uk-button uk-button-default qrky-nav-btn uk-button-small">My Groups</button>
                            </a>
                            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <button class="uk-button uk-button-default qrky-nav-btn uk-button-small">Logout</button>
                            </a>
                        </div>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
							{{ csrf_field() }}
						</form>
                    @endguest
                </li>
            </ul>
            <a class="uk-navbar-toggle uk-navbar-item uk-hidden@m" data-uk-toggle data-uk-navbar-toggle-icon href="#offcanvas-nav"></a>
        </div>
    </nav>

    <hr>
</div>