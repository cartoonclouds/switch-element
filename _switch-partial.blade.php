@php
function flatten($arr) {
    $attributes = '';
    foreach($arr as $attr => $value)
        $attributes .= $attr .'="'. implode(' ', $value) . '" ';
    return $attributes;
}
@endphp
<div class="form-group switch-component">
    {{ Form::label(str_slug($label,'_'), $label, ['class' => 'control-label']) }}
    <label class="switch switch-text switch-{{ $color }}">
        <input type="checkbox"
               name="{{ str_slug($label,'_') }}"
               {{ old(str_slug($label,'_'), $value) ? 'checked="checked"' : '' }}
               value="1"
               {!! flatten(array_merge_recursive(['class' => 'switch-input'], array_diff_key($attributes, array_flip(['type', 'name', 'value'])))) !!}>
        <span class="switch-label" data-on="{{ $text[0] }}" data-off="{{ $text[1] }}"></span>
        <span class="switch-handle"></span>
    </label>
</div>



