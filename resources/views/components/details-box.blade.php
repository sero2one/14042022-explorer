<div class="flex space-x-2 detail-box">
    @if(isset($icon))
        <div
            class="flex items-center justify-center p-2 rounded-full h-12 w-12 mr-3 bg-theme-secondary-200 {{ $iconWrapperClass ?? '' }}"
        >
            @svg($icon, 'h-5 w-5 text-theme-secondary-900 '.($iconClass ?? ''))
        </div>
    @endif
    <div class="flex flex-col space-y-2">
        <span class="text-sm font-semibold text-theme-secondary-500">{{ $title }}</span>
        @if((string) $slot === "")
            <span class="font-semibold text-theme-secondary-500">@lang('generic.not_specified')</span>
        @else
            <span class="text-lg font-semibold text-theme-secondary-700">
                {{ $slot }}
                @isset($extraValue)
                    <span class="text-theme-secondary-500">{{ $extraValue }}</span>
                @endif
            </span>
        @endif
    </div>
</div>