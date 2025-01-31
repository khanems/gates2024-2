{{-- head footer based on auth user starts --}}
@if(auth()->user()->can('admin'))
    <x-admin-sidebar />
    <x-admin-header />
@elseif(auth()->user()->can('vendor'))
    <x-vendor-sidebar />
    <x-vendor-header />
@elseif(auth()->user()->can('user'))
    <x-user-sidebar />
    <x-user-header />
@endif
{{-- head footer based on auth user ends --}}