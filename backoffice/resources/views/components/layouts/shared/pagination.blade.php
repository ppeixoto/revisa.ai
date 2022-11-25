@if ($items->total())
    <div class="row mt-5">
        <hr />
        <div class="col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start">
            Página {{ $items->currentPage() }} de {{ $items->lastPage() }} de um total de {{ $items->total() }}
            registros
        </div>
        <div class="col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end">
            <div class="itemsTables_paginate paging_simple_numbers" id="kt_table_items_paginate">
                {{ $items->onEachSide(1)->links() }}
            </div>
        </div>
    </div>
@endif
