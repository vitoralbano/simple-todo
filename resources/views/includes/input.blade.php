$input = ['id' => null]

<div class="form-group">
    @isset($input['label'])
        <label for="{{input['id']??''}}">$input['label']</label>
    @endisset
    <input type="{{input['type']??'text'}}" 
        class="form-control" 
        id="{{input['id'] ?? ''"
    >
</div>