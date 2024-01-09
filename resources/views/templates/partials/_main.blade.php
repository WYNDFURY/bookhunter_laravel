<div class="container mx-auto flex flex-wrap pt-4 pb-12 text-white">
    <!-- Aside -->
    @include('template.partials._aside')

    <!-- Main content -->
    <main class="w-full md:w-3/4 p-3">
        
        @yield('content')

    </main>
</div>