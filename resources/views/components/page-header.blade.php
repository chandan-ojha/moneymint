<div class="bg-white shadow">
    <div class="px-4 sm:px-6 lg:mx-auto lg:max-w-6xl lg:px-8">
        <div class="py-6 md:flex md:items-center md:justify-between lg:border-t lg:border-gray-200">
            <div class="min-w-0 flex-1">
                <!-- Profile -->
                <div class="flex items-center">
                    <div>
                        <div class="flex items-center">
                            <img class="h-16 w-16 rounded-full sm:hidden"
                                src="https://avatars.githubusercontent.com/u/61087593?v=4" alt="">
                            <h1 class="text-2xl font-bold leading-7 text-gray-900 sm:truncate sm:leading-9"
                                x-data="{ greeting: '{{ getGreeting() }}' }" x-text="greeting">
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-6 flex space-x-3 md:ml-4 md:mt-0" x-data="{ open: false, modalTitle: '' }">
                <button @click="open = true; modalTitle = 'Add Income'" type="button"
                    class="inline-flex items-center rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50">
                    Add Income
                </button>
                <button @click="open = true; modalTitle = 'Add Expense'" type="button"
                    class="inline-flex items-center rounded-md bg-cyan-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-cyan-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-cyan-600">
                    Deduct Expense
                </button>

                @include('components.forms.form')
            </div>
        </div>
    </div>
</div>
