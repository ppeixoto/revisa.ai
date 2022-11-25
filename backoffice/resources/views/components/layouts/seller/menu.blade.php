<x-layouts.shared.menu-item title='Dashboard' :route="route('seller.home')" :active="request()->routeIs('seller.home')" icon='bi bi-house' />

@can('seller.artists.index')
<x-layouts.shared.menu-item title='Artistas' :route="route('seller.artists.index')" :active="request()->routeIs('seller.artists.*')" icon="bi bi-person" />
@endcan
