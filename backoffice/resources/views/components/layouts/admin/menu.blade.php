<x-layouts.shared.menu-item title='Dashboard' :route="route('admin.home')" :active="request()->routeIs('admin.home')" icon='bi bi-house' />

@can('users.index')
    <x-layouts.shared.menu-item title='Usuários' :route="route('admin.users.index')" :active="request()->routeIs('admin.users.*')" icon="bi bi-person" />
@endcan

@canAny(['operators.index', 'roles.index'])
    <x-layouts.shared.menu-group title='Administração' icon='bi bi-gear' :active="request()->routeIs('admin.operators.*') || request()->routeIs('admin.roles.*')">

        @can('operators.index')
            <x-layouts.shared.menu-item title='Operadores' :route="route('admin.operators.index')" :active="request()->routeIs('admin.operators.*')" />
        @endcan

        @can('roles.index')
            <x-layouts.shared.menu-item title='Permissões' :route="route('admin.roles.index')" :active="request()->routeIs('admin.roles.*')" />
        @endcan

    </x-layouts.shared.menu-group>
@endcanany


@canAny(['categories.index', 'musicgenres.index', 'specialties.index', 'equipments.index'])
    <x-layouts.shared.menu-group title='Cadastros' icon='bi bi-list' :active="request()->routeIs('admin.categories.*') || request()->routeIs('admin.musicgenres.*') || request()->routeIs('admin.specialties.*') || request()->routeIs('admin.equipments.*')">

        @can('categories.index')
            <x-layouts.shared.menu-item title='Categorias' :route="route('admin.categories.index')" :active="request()->routeIs('admin.categories.*')" />
        @endcan
        @can('musicgenres.index')
            <x-layouts.shared.menu-item title='Estilos Musicais' :route="route('admin.musicgenres.index')" :active="request()->routeIs('admin.musicgenres.*')" />
        @endcan
        @can('specialties.index')
            <x-layouts.shared.menu-item title='Funções Integrantes' :route="route('admin.specialties.index')" :active="request()->routeIs('admin.specialties.*')" />
        @endcan
        @can('equipments.index')
            <x-layouts.shared.menu-item title='Estruturas e Equipamentos' :route="route('admin.equipments.index')" :active="request()->routeIs('admin.equipments.*')" />
        @endcan
    </x-layouts.shared.menu-group>
@endcanany
