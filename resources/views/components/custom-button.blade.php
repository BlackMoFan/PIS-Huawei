<!-- resources/views/components/custom-button.blade.php -->
<button
    {{ $attributes->merge(['type' => $type ?? 'button', 'class' => 'custom-btn ' . $containerStyles]) }}
    @click="{{ $handleClick ?? '' }}">
    <span class="flex-1">
        {{ $title }}
    </span>
</button>
