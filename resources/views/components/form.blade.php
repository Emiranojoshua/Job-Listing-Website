@props(['_method'])
<form {{ $attributes }}>
    @method($_method)
    @csrf
    {{ $slot }}

</form>
