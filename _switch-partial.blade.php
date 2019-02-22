@php
function flatten($arr) {
    $attributes = '';
    foreach($arr as $attr => $value)
        $attributes .= $attr .'="'. implode(' ', $value) . '" ';
    return $attributes;
}
@endphp
<div class="form-group switch-component">
    <label class="control-label" for="{{ $name }}">{!! $label !!}</label>
    <label class="switch switch-text switch-{{ $color }}">
        <input type="checkbox"
               name="{{ $name }}"
               {{ old($name, $value) ? 'checked="checked"' : '' }}
               value="1"
               {!! flatten(array_merge_recursive(['class' => 'switch-input'], array_diff_key($attributes, array_flip(['type', 'name', 'value'])))) !!}>
        <span class="switch-label" data-on="{{ $text[0] }}" data-off="{{ $text[1] }}"></span>
        <span class="switch-handle"></span>
    </label>
</div>



