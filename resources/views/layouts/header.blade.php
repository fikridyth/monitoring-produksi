<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-1 shadow">
    <h5 class="px-4">Monitoring Produksi ( {{ auth()->user()->name }} )</h5>
    <div class="navbar-nav">
        <div class="nav-item text-nowrap">
            <form action="/logout" method="post">
                @csrf
                <button type="submit" class="nav-link px-3 border-0 bg-dark" style="color:white;">
                    Logout <span data-feather="log-out"></span></button>
            </form>
        </div>
    </div>
</header>
