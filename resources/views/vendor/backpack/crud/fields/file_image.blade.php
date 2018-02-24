{{ $field['label'] }}
@foreach ($field as $attribute => $value)
  @if (is_string($attribute) && is_string($value))
    @if($attribute != 'value' && $attribute != 'type') {{ $attribute }}="{{ $value }}"
    @endif
  @endif
@endforeach
value="{{ old($field['name']) ? old($field['name']) : (isset($field['value'])?$field['value']:'') }}" >
@if (isset($field['hint']))
  <p class="help-block">{!! $field['hint'] !!}</p>
@endif