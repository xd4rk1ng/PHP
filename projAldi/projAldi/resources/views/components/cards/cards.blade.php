<div class="container">
    <div class="row mb-3">
        <div class="col-md-4 mt-5">
            @component("components.cards.card", [
                'source' => $image1
            ])
            @endcomponent
        </div>
        <div class="col-md-4 mt-5">
            @component("components.cards.card", [
                'source' => $image2
            ])
            @endcomponent
        </div>
        <div class="col-md-4 mt-5">
            @component("components.cards.card", [
                'source' => $image3
            ])
            @endcomponent
        </div>
    </div>
</div>
