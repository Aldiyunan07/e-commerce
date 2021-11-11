<div class="card">
    @isset($header)
        <div class="card-header d-flex align-items-center justify-content-between">
            {{ $header }}
            <a href="/" class="link-dark text-decoration-none">
                Back Home
            </a>
        </div>
    @endisset
    <div class="card-body">
        {{ $slot }}
    </div>
</div>
