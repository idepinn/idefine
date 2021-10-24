<nav class="navbar navbar-expand navbar-light bg-warning p-3">
    <div class="container">
        <span href="/" class="navbar-brand d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
            Idefine
        </span>

        <ul class="navbar-nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
            <li class="nav-item">
                <a href="/" class="nav-link px-2 {{ ($title === "Home") ? 'active' : '' }}">Home</a>
            </li>
            <li class="nav-item">
                <a href="/connection" class="nav-link px-2 {{ ($title === "Connection") ? 'active' : '' }}">Connection</a>
            </li>
            <li class="nav-item">
                <a href="/idea" class="nav-link px-2 {{ ($title === "Idea") ? 'active' : '' }}">Idea</a>
            </li>
        </ul>

        <div class="col-md-3 text-end">
            <!--<button type="button" class="btn btn-outline-primary me-2">Login</button>-->
            <a href="/login" type="button" class="btn btn-light">Logout</a>
        </div>
    </div>
</nav>
