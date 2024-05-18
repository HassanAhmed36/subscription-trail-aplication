<nav class="navbar navbar-expand-lg bg-transparent py-3 border-bottom">
    <div class="container w-100 d-flex">
        <a class="navbar-brand fw-semibold fs-4" href="#">Subs.</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
            <ul class="navbar-nav mb-2 mb-lg-0">
                @auth
                    @if (Auth::user()->is_subscribed != false)
                        <li class="nav-item me-4">
                            <a class="nav-link" href="#">Home</a>
                        </li>
                    @endif
                @endauth

                <li class="nav-item dropdown">
                    @auth
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            {{ Auth::user()->name }}
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Profile</a></li>
                            <li><button class="dropdown-item" id="logoutBtn">Logout</button></li>
                        </ul>
                    @endauth

                    @guest
                    <li class="nav-item me-4">
                        <a class="nav-link bg bg-dark text-white rounded-5 px-3" style="font-size: 14px !important"
                            href="{{ route('login') }}">Login / Signup</a>
                    </li>
                @endguest
                </li>

            </ul>
        </div>
    </div>
</nav>

<script type="module">
    $(document).ready(function() {
        $('#logoutBtn').click(function(e) {
            e.preventDefault();
            $.ajax({
                type: "GET",
                url: "{{ route('logout') }}",
                success: function(response) {
                    response.status = true 
                    ? location.reload()
                    : alert('something want wrong!');
                }
            });
        });
    });
</script>
