<div class="bg-white dark:bg-gray-800 rounded-xl shadow-md overflow-hidden transition-all hover:shadow-lg">
    <div class="p-6 flex items-start">
        <div class="p-3 rounded-lg bg-{{ $color }}-100 text-{{ $color }}-600 mr-4">
            <i class="fas fa-{{ $icon }} text-lg"></i>
        </div>
        <div>
            <p class="text-sm text-gray-500 dark:text-gray-400">{{ $title }}</p>
            <p class="text-2xl font-bold mt-1 text-gray-800 dark:text-white">{{ $value }}</p>
            <p class="text-xs mt-1 {{ $change[0] === '+' ? 'text-green-500' : 'text-red-500' }}">
                {{ $change }} from last month
            </p>
        </div>
    </div>
</div>