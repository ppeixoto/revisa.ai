<div data-kt-menu-trigger="click" class="menu-item menu-accordion {{ $active ? 'show' : null }}">
    <span class="menu-link">
        <x-layouts.shared.menu-icon icon="{{ $icon }}" />
        <span class="menu-title">{{ $title }}</span>
        <span class="menu-arrow"></span>
    </span>
    <div class="menu-sub menu-sub-accordion">
        {{ $slot }}
    </div>
</div>
