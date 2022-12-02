<nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
    <b class="text-light mr-4"><u>Mon IoT</u></b>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="nav-link <?= $title == 'Home' ? 'active' : ''; ?>" href="/">Home <span class="sr-only">(current)</span></a>
            <a class="nav-link <?= $title == 'Device' ? 'active' : ''; ?>" href="/device">Device</a>
            <a class="nav-link <?= $title == 'About' ? 'active' : ''; ?>" href="/about">About</a>
        </div>
    </div>
</nav>