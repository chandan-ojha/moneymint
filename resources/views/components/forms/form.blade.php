<div
    x-show="open"
    class="fixed top-0 left-0 bg-black bg-opacity-40 w-screen h-screen overflow-hidden flex items-center justify-center">
    <div class="bg-white min-w-[500px] rounded-md shadow-md">
        <!-- Modal Header  -->
        <div class="flex items-center justify-between py-2 px-3 border-b bg-gray-200 rounded-t-md">
            <h5 class="text-md font-semibold font-sans">Add Income</h5>
            <svg @click="open = false" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                 stroke-width="1.5"
                 stroke="currentColor" class="size-6 cursor-pointer">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12"/>
            </svg>
        </div>
        <!--End Modal Header -->

        <!-- Modal Body -->
        <form action="#" method="POST" class="px-3 py-2">
            <div class="p-5">
                <label for="income-date"
                       class="after:content-['*'] after:ml-0.5 after:text-red-500 block text-sm font-medium text-slate-700">
                    Date
                </label>
                <input type="date" name="income-date" id="income-date"
                       class="mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-gray-300 focus:ring-gray-300 block w-full rounded-md text-sm focus:ring-1">
            </div>
            <div class="px-5">
                <label for="income-description"
                       class="after:content-['*'] after:ml-0.5 after:text-red-500 block text-sm font-medium text-slate-700">
                    Transaction Details
                </label>
                <input placeholder="Enter details" type="text" name="income-description"
                       id="income-description"
                       class="mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-gray-300 focus:ring-gray-300 block w-full rounded-md text-sm focus:ring-1">
            </div>
            <div class="p-5">
                <label for="income-amount"
                       class="after:content-['*'] after:ml-0.5 after:text-red-500 block text-sm font-medium text-slate-700">
                    Amount
                </label>
                <input placeholder="Enter amount" type="number" name="income-amount"
                       id="income-amount"
                       class="mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-gray-300 focus:ring-gray-300 block w-full rounded-md text-sm focus:ring-1">
            </div>
        </form>
        <!--End Modal Body -->

        <!-- Modal Footer -->
        <div class="flex gap-2 border-t py-3 justify-center">
            <button @click="open = false"
                    class="btn px-4 py-2 border border-red-600 text-red-600 bg-white rounded-md hover:bg-red-100 hover:text-red-700 focus:outline-none focus:ring-2 focus:ring-red-600 focus:ring-opacity-50 active:bg-red-200 transition duration-200">
                Cancel
            </button>
            <button
                class="btn px-4 py-2 bg-green-600 border border-green-600 text-white rounded-md hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-600 focus:ring-opacity-50 active:bg-green-800 transition duration-200">
                Save
            </button>
        </div>
        <!--End Modal Footer -->
    </div>
</div>
<!-- End Add Income Modal -->
