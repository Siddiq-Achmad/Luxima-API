<!-- Start Breadcrumb -->
<div>
    <nav class="w-full">
        <ul class="space-y-2 detached-breadcrumb">
            <li class="text-xs dark:text-white/80">{{ isset($attributes['title']) ? $attributes['title'] : 'Sliced' }}</li>
            <li class="text-xl font-semibold text-black dark:text-white">{{ isset($attributes['pagetitle']) ? $attributes['pagetitle'] : '' }}</li>
        </ul>
    </nav>
</div>
<!-- End Breadcrumb -->