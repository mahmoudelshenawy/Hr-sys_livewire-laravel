<div class="row row-sm">
    <div class="col-lg-12">
        <div class="card custom-card">
            <div class="card-body">
                @livewire('widgets.add-modal', [
                        'title' => "Manage Banks",
                        'name'   => "Add New Bank" ,
                        'sectedKey'  => 'addBank'
                    ])   
                <div class="">
                    <livewire:tables.banks-table />
                    <livewire:crud.add-banks />
                </div>
            </div>
        </div>
    </div>
</div>