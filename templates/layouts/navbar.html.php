<ul class="navbar-container">
    <li class="navbar">
        <a class="navbar-link" href="/"> Home</a>
    </li>
    <?php if (App\Core\Services\AboutService::hasAbout()) : ?>
        <li class="navbar">
            <a class="navbar-link" href="/about"> About</a>
        </li>
    <?php endif; ?>
</ul>
