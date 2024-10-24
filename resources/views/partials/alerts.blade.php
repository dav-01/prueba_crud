@if (session('success') || session('error') || session('info') || session('warning'))
    <div class="max-w-4xl mx-auto mt-4">
        @foreach (['success' => 'green', 'error' => 'red', 'info' => 'blue', 'warning' => 'yellow'] as $type => $color)
            @if (session($type))
                <div class="bg-{{ $color }}-100 border border-{{ $color }}-400 text-{{ $color }}-700 px-4 py-3 rounded relative mb-4" role="alert" id="alert">
                    <span class="block sm:inline">{{ session($type) }}</span>
                    <span class="absolute top-0 bottom-0 right-0 px-4 py-3" onclick="closeAlert()">
                        <svg class="fill-current h-6 w-6 text-{{ $color }}-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path d="M14.348 5.652a.5.5 0 0 1 0 .707L11.207 9.5l3.141 3.141a.5.5 0 1 1-.707.707L10.5 10.207l-3.141 3.141a.5.5 0 1 1-.707-.707L9.793 9.5 6.652 6.359a.5.5 0 1 1 .707-.707L10.5 8.793l3.141-3.141a.5.5 0 0 1 .707 0z"/>
                        </svg>
                    </span>
                </div>
            @endif
        @endforeach
    </div>
@endif
