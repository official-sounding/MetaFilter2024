<form>
    Tags
</form>

{{--
<form wire:submit.prevent="saveTags">
    <div class="level">
        <button @click="show=false" type="button">
            Cancel
        </button>

        <button type="button">
            Add Tag
        </button>
    </div>
</form>
              <div wire:key="tags-{{ $iteration }}">
                  <div wire:ignore>
                      <select class="select2" name="tags" id="tags" multiple="multiple">
                          @foreach($allTags as $tag)
                              <option value="{{$tag->name}}">
                                {{$tag->name}}
                              </option>
                          @endforeach
                      </select>
                  </div>
                </div>
@push('styles')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css">
@endpush
@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js" defer></script>

    <script>
        document.addEventListener('livewire:initialized', function (event) {
            @this.on('refreshDropdown', function () {

                let tags = document.querySelector('#tags');

                tags.select2({
                    tags: true,
                    tokenSeparators: [','],
                });

                tags.on('change', function () {
                    @this.set('associatedTags', $(this).val());

                });

                let associatedTags = [];

                $.each(@this.associatedTags, function(key, associatedTag) {
                    associatedTags.push(associatedTag)
                });

                tags.val(associatedTags);

                tags.trigger('change');
            });
        });
    </script>
@endpush
--}}
