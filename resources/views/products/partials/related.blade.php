<div class="related-products my-4 padding p-2">
    <h3 class="display-4">You might also like</h3>
    @php
    $related = \App\Helpers\GeneralHelper::get_related($brand, $category);
    @endphp
</div>
