<div class="container">
    <div class="row mb-2">
        <div class="col-md-6 ">
            @component("components.sections.{$type_1}", ['sourceImage' => $src])
            @endcomponent
        </div>
        <div class="col-md-6 ">
            @component("components.sections.{$type_2}", ['sourceImage' => $src])
            @endcomponent
        </div>
        <hr width="100%">
    </div>
</div>
