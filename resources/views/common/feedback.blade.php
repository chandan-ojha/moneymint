@if (session('success') || session('error'))
    <div x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 5000)"
        class="fixed inset-0 bg-black bg-opacity-40 z-50 left-[-12px] flex items-center justify-center">
        <div
            class="bg-white px-6 py-4 rounded-md shadow-md min-w-[300px] min-h-[150px] border-t-4
        {{ session('success') ? 'border-green-500' : 'border-red-500' }}">
            <div class="flex justify-between items-center mb-2">
                <h3 class="text-xl font-semibold text-gray-800">
                    {{ session('success') ? 'Success' : 'Error' }}
                </h3>
                <button @click="show = false" class="text-gray-600 hover:text-black text-2xl">&times;</button>
            </div>
            <p class="text-base text-gray-700">
                {{ session('success') ?? session('error') }}
            </p>
        </div>
    </div>
@endif
