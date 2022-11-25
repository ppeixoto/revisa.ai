<div class="menu-item">
    <a class="menu-link {{ $active ? 'active' : null }}" href="{{ $route }}">
        <x-layouts.shared.menu-icon icon="{{ $icon }}" />
        <span class="menu-title">{{ $title }}</span>
    </a>
</div>

{{ $slot }}
