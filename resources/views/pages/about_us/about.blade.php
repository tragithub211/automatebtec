<x-btec-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <!-- breadcrumb-area-start -->
    @include('pages.about_us.about.breadcrumb')

    @include('pages.about_us.about.about')
</x-btec-layout>
