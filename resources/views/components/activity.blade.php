<!-- Activity list (smallest breakpoint only) -->
{{-- <div class="shadow sm:hidden">
    <ul role="list" class="mt-2 divide-y divide-gray-200 overflow-hidden shadow sm:hidden">
        <li>
            <a href="#" class="block bg-white px-4 py-4 hover:bg-gray-50">
                <span class="flex items-center space-x-4">
                    <span class="flex flex-1 space-x-2 truncate">
                        <svg class="h-5 w-5 flex-shrink-0 text-gray-400" viewBox="0 0 20 20" fill="currentColor"
                            aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M1 4a1 1 0 011-1h16a1 1 0 011 1v8a1 1 0 01-1 1H2a1 1 0 01-1-1V4zm12 4a3 3 0 11-6 0 3 3 0 016 0zM4 9a1 1 0 100-2 1 1 0 000 2zm13-1a1 1 0 11-2 0 1 1 0 012 0zM1.75 14.5a.75.75 0 000 1.5c4.417 0 8.693.603 12.749 1.73 1.111.309 2.251-.512 2.251-1.696v-.784a.75.75 0 00-1.5 0v.784a.272.272 0 01-.35.25A49.043 49.043 0 001.75 14.5z"
                                clip-rule="evenodd" />
                        </svg>
                        <span class="flex flex-col truncate text-sm text-gray-500">
                            <span class="truncate">Payment to EMI</span>
                            <span><span class="font-medium text-gray-900">$15,000</span> BDT</span>
                            <time datetime="2020-07-11">May 1, 2024</time>
                        </span>
                    </span>
                    <svg class="h-5 w-5 flex-shrink-0 text-gray-400" viewBox="0 0 20 20" fill="currentColor"
                        aria-hidden="true">
                        <path fill-rule="evenodd"
                            d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z"
                            clip-rule="evenodd" />
                    </svg>
                </span>
            </a>
        </li>

        <!-- More transactions... -->
    </ul>

    <nav class="flex items-center justify-between border-t border-gray-200 bg-white px-4 py-3" aria-label="Pagination">
        <div class="flex flex-1 justify-between">
            <a href="#"
                class="relative inline-flex items-center rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50">Previous</a>
            <a href="#"
                class="relative ml-3 inline-flex items-center rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50">Next</a>
        </div>
    </nav>
</div> --}}

@props(['expenses'])

<!-- Activity table (small breakpoint and up) -->
<div class="hidden sm:block">
    <div class="mx-auto max-w-6xl px-4 sm:px-6 lg:px-8">
        <div class="mt-2 flex flex-col">
            <div class="min-w-full overflow-hidden overflow-x-auto align-middle shadow sm:rounded-lg">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead>
                        <tr>
                            <th class="bg-gray-50 px-6 py-3 text-left text-sm font-semibold text-gray-900" scope="col">
                                Transaction Details
                            </th>
                            <th class="bg-gray-50 px-6 py-3 text-right text-sm font-semibold text-gray-900"
                                scope="col">Amount
                            </th>
                            <th class="bg-gray-50 px-6 py-3 text-right text-sm font-semibold text-gray-900"
                                scope="col">Date
                            </th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200 bg-white">
                        @foreach ($expenses as $expense)
                            <tr class="bg-white">
                                <td class="w-full max-w-0 whitespace-nowrap px-6 py-4 text-sm text-gray-900">
                                    <div class="flex">
                                        <a href="#" class="group inline-flex space-x-2 truncate text-sm">
                                            <svg class="h-5 w-5 flex-shrink-0 text-gray-400 group-hover:text-gray-500"
                                                viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd"
                                                    d="M1 4a1 1 0 011-1h16a1 1 0 011 1v8a1 1 0 01-1 1H2a1 1 0 01-1-1V4zm12 4a3 3 0 11-6 0 3 3 0 016 0zM4 9a1 1 0 100-2 1 1 0 000 2zm13-1a1 1 0 11-2 0 1 1 0 012 0zM1.75 14.5a.75.75 0 000 1.5c4.417 0 8.693.603 12.749 1.73 1.111.309 2.251-.512 2.251-1.696v-.784a.75.75 0 00-1.5 0v.784a.272.272 0 01-.35.25A49.043 49.043 0 001.75 14.5z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                            <p class="truncate text-gray-500 group-hover:text-gray-900">
                                                {{ $expense->details }} </p>
                                        </a>
                                    </div>
                                </td>
                                <td class="whitespace-nowrap px-6 py-4 text-right text-sm text-gray-500">
                                    <span class="font-medium text-gray-900">BDT {{ $expense->amount }}</span>
                                </td>
                                <td class="whitespace-nowrap px-6 py-4 text-right text-sm text-gray-500">
                                    <time datetime="2020-07-11">{{ dateFormatter($expense->date) }}</time>
                                </td>
                            </tr>
                        @endforeach
                        <!-- More transactions... -->
                    </tbody>
                </table>
                <!-- Pagination -->
                <nav class="flex items-center justify-between border-t border-gray-200 bg-white px-4 py-3 sm:px-6"
                    aria-label="Pagination">
                    <div class="hidden sm:block">
                        <p class="text-sm text-gray-700">
                            Showing
                            <span class="font-medium">1</span>
                            to
                            <span class="font-medium">10</span>
                            of
                            <span class="font-medium">{{ $expenses->total() }}</span>
                            results
                        </p>
                    </div>
                    <div class="flex flex-1 justify-between gap-x-3 sm:justify-end">
                        <a href="{{ $expenses->previousPageUrl() }}"
                            class="relative inline-flex items-center rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:ring-gray-400">Previous</a>
                        <a href="{{ $expenses->nextPageUrl() }}"
                            class="relative inline-flex items-center rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:ring-gray-400">Next</a>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</div>
