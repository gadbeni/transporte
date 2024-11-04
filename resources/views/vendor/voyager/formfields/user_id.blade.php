<div>
    <select
    class="form-control select2"
    name="{{ $row->field }}"
    data-name="{{ $row->display_name }}"
    @if($row->required == 1) required @endif
    @php
        $disabled = isset($options->disabled)
    @endphp
    @disabled($disabled)
    >
        <option value="{{ Auth::user()->id }}">{{ Auth::user()->name }}</option>
    </select>
</div>