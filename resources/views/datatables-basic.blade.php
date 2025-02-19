    @extends('layouts.master')
    @section('title')
        Datatables
    @endsection
    @section('css')
        <!-- Icon Css -->
        <link rel="stylesheet" href="{{ URL::asset('build/css/remixicon.css') }}" />
    @endsection
    @section('content')
        <x-breadcrumb title="Datatables" pagetitle="Table" />

        <!-- Start All Card -->
        <div class="flex flex-col gap-4 min-h-[calc(100vh-212px)]">
            <div class="grid grid-cols-1 gap-4">
                <div class="p-5 bg-white border rounded border-black/10 dark:bg-darklight dark:border-darkborder">
                    <h2 class="mb-4 text-base font-semibold text-black capitalize dark:text-white/80">Data Table</h2>
                    <div class="space-y-4 overflow-auto" x-data="dataTable()" x-init="initData()
                    $watch('searchInput', value => {
                        search(value)
                    })">
                        <div class="flex items-center justify-between gap-3">
                            <div class="flex items-center space-x-2 rtl:space-x-reverse">
                                <p>Show</p>
                                <select class="form-select !w-20" x-model="view" @change="changeView()">
                                    <option value="5">5</option>
                                    <option value="10">10</option>
                                    <option value="25">25</option>
                                    <option value="50">50</option>
                                    <option value="100">100</option>
                                </select>
                            </div>
                            <div>
                                <input x-model="searchInput" type="text" class="form-input" placeholder="Search...">
                            </div>
                        </div>
                        <div class="overflow-auto">
                            <table class="min-w-[640px] w-full">
                                <thead>
                                    <th width="20%">
                                        <div class="flex items-center justify-between gap-2">
                                            <p>Name</p>
                                            <div class="flex flex-col">
                                                <svg @click="sort('name', 'asc')" fill="none" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="4" viewBox="0 0 24 24"
                                                    stroke="currentColor"
                                                    class="w-3 h-3 cursor-pointer fill-current text-muted"
                                                    x-bind:class="{
                                                        '!text-black': sorted.field === 'name' && sorted
                                                            .rule === 'asc'
                                                    }">
                                                    <path d="M5 15l7-7 7 7"></path>
                                                </svg>
                                                <svg @click="sort('name', 'desc')" fill="none" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="4" viewBox="0 0 24 24"
                                                    stroke="currentColor"
                                                    class="w-3 h-3 cursor-pointer fill-current text-muted"
                                                    x-bind:class="{
                                                        '!text-black': sorted.field === 'name' && sorted
                                                            .rule === 'desc'
                                                    }">
                                                    <path d="M19 9l-7 7-7-7"></path>
                                                </svg>
                                            </div>
                                        </div>
                                    </th>
                                    <th width="20%">
                                        <div class="flex items-center justify-between gap-2">
                                            <p class="">Job</p>
                                            <div class="flex flex-col">
                                                <svg @click="sort('job', 'asc')" fill="none" fill="none"
                                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="4"
                                                    viewBox="0 0 24 24" stroke="currentColor"
                                                    class="w-3 h-3 cursor-pointer fill-current text-muted"
                                                    x-bind:class="{
                                                        '!text-black': sorted.field === 'job' && sorted
                                                            .rule === 'asc'
                                                    }">
                                                    <path d="M5 15l7-7 7 7"></path>
                                                </svg>
                                                <svg @click="sort('job', 'desc')" fill="none" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="4" viewBox="0 0 24 24"
                                                    stroke="currentColor"
                                                    class="w-3 h-3 cursor-pointer fill-current text-muted"
                                                    x-bind:class="{
                                                        '!text-black': sorted.field === 'job' && sorted
                                                            .rule === 'desc'
                                                    }">
                                                    <path d="M19 9l-7 7-7-7"></path>
                                                </svg>
                                            </div>
                                        </div>
                                    </th>
                                    <th width="10%">
                                        <div class="flex items-center justify-between gap-2">
                                            <span>
                                                Year
                                            </span>
                                            <div class="flex flex-col">
                                                <svg @click="sort('year', 'asc')" fill="none" fill="none"
                                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="4"
                                                    viewBox="0 0 24 24" stroke="currentColor"
                                                    class="w-3 h-3 cursor-pointer fill-current text-muted"
                                                    x-bind:class="{
                                                        '!text-black': sorted.field === 'year' && sorted
                                                            .rule === 'asc'
                                                    }">
                                                    <path d="M5 15l7-7 7 7"></path>
                                                </svg>
                                                <svg @click="sort('year', 'desc')" fill="none" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="4" viewBox="0 0 24 24"
                                                    stroke="currentColor"
                                                    class="w-3 h-3 cursor-pointer fill-current text-muted"
                                                    x-bind:class="{
                                                        '!text-black': sorted.field === 'year' && sorted
                                                            .rule === 'desc'
                                                    }">
                                                    <path d="M19 9l-7 7-7-7"></path>
                                                </svg>
                                            </div>
                                        </div>
                                    </th>
                                    <th width="15%">
                                        <div class="flex items-center justify-between gap-2">
                                            <span class="">
                                                Country
                                            </span>
                                            <div class="flex flex-col">
                                                <svg @click="sort('country', 'asc')" fill="none" fill="none"
                                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="4"
                                                    viewBox="0 0 24 24" stroke="currentColor"
                                                    class="w-3 h-3 cursor-pointer fill-current text-muted"
                                                    x-bind:class="{
                                                        '!text-black': sorted.field === 'country' && sorted
                                                            .rule === 'asc'
                                                    }">
                                                    <path d="M5 15l7-7 7 7"></path>
                                                </svg>
                                                <svg @click="sort('country', 'desc')" fill="none"
                                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="4"
                                                    viewBox="0 0 24 24" stroke="currentColor"
                                                    class="w-3 h-3 cursor-pointer fill-current text-muted"
                                                    x-bind:class="{
                                                        '!text-black': sorted.field === 'country' && sorted
                                                            .rule === 'desc'
                                                    }">
                                                    <path d="M19 9l-7 7-7-7"></path>
                                                </svg>
                                            </div>
                                        </div>
                                    </th>
                                </thead>
                                <tbody>
                                    <template x-for="(item, index) in items" :key="index">
                                        <tr x-show="checkView(index + 1)" class="">
                                            <td>
                                                <span x-text="item.name"></span>
                                            </td>
                                            <td>
                                                <span x-text="item.job"></span>
                                            </td>
                                            <td>
                                                <span x-text="item.year"></span>
                                            </td>
                                            <td>
                                                <span x-text="item.country"></span>
                                            </td>
                                        </tr>
                                    </template>
                                    <tr x-show="isEmpty()">
                                        <td colspan="5" class="py-3 text-center text-black">No matching records found.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <ul class="inline-flex items-center gap-1">
                            <li><button type="button" @click.prevent="changePage(1)"
                                    class="flex justify-center px-3.5 py-2 rounded transition text-muted hover:text-purple border border-black/10 hover:border-purple dark:border-darkborder dark:text-darkmuted dark:hover:border-purple dark:hover:text-purple">First</button>
                            </li>
                            <li><button type="button" @click="changePage(currentPage - 1)"
                                    class="flex justify-center px-3.5 py-2 rounded transition text-muted hover:text-purple border border-black/10 hover:border-purple dark:border-darkborder dark:text-darkmuted dark:hover:border-purple dark:hover:text-purple">Prev</button>
                            </li>
                            <template x-for="item in pages">
                                <li><button @click="changePage(item)" type="button"
                                        class="flex justify-center px-3.5 py-2 rounded transition text-muted hover:text-purple border border-black/10 hover:border-purple dark:border-darkborder dark:text-darkmuted dark:hover:border-purple dark:hover:text-purple"
                                        x-bind:class="{
                                            'text-purple border-purple dark:text-purple dark:border-purple': currentPage ===
                                                item
                                        }"><span
                                            x-text="item"></span></button></li>
                            </template>
                            <li><button @click="changePage(currentPage + 1)" type="button"
                                    class="flex justify-center px-3.5 py-2 rounded transition text-muted hover:text-purple border border-black/10 hover:border-purple dark:border-darkborder dark:text-darkmuted dark:hover:border-purple dark:hover:text-purple">Next</button>
                            </li>
                            <li><button @click.prevent="changePage(pagination.lastPage)" type="button"
                                    class="flex justify-center px-3.5 py-2 rounded transition text-muted hover:text-purple border border-black/10 hover:border-purple dark:border-darkborder dark:text-darkmuted dark:hover:border-purple dark:hover:text-purple">Last</button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End All Card -->
    @endsection
    @section('scripts')
        <!-- Datatables Js -->
        <script src="{{ URL::asset('build/js/datatable.js') }}"></script>
        <script src="{{ URL::asset('build/js/data-search.js') }}"></script>
    @endsection
