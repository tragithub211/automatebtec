<x-btec-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <!-- breadcrumb-area-start -->
    @include('pages.contact_us.breadcrumb')

    @include('pages.contact_us.contact')

    @include('pages.contact_us.map')
</x-btec-layout>