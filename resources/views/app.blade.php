<x-layout>
    <div class="min-h-full">
        <div class="flex flex-1 flex-col">
            <x-search-bar />
            <main class="flex-1 pb-8">
                <!-- Page header -->
                <x-page-header />
                <div class="mt-8">
                    <div class="mx-auto max-w-6xl px-4 sm:px-6 lg:px-8">
                        <h2 class="text-lg font-medium leading-6 text-gray-900">Overview</h2>
                        <div class="mt-2 grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-3">
                            <!-- Card -->
                            <x-card title="Total Income" :value="$totalIncome" />
                            <x-card title="Total Expense" :value="$totalExpenses" />
                            <x-card title="Account Balance" :value="$currentBalance" />

                        </div>
                    </div>

                    <h2 class="mx-auto mt-8 max-w-6xl px-4 text-lg font-medium leading-6 text-gray-900 sm:px-6 lg:px-8">
                        Recent activity
                    </h2>
                    <x-activity />
                </div>
            </main>
        </div>
    </div>
</x-layout>
