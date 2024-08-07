<form action="{{ $action }}" method="{{ $method }}">
    @csrf
    {{ $slot }}
    <button type="submit">{{ $buttonText }}</button>
</form>
