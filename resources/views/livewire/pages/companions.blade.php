
 <div class="row row-sm">
    <div class="col-lg-12">
        <div class="card custom-card">
            <div class="card-body">
                @livewire('widgets.add-modal', [
                        'title' => "Manage Companions",
                        'name'   => "Add New Companion" ,
                        'sectedKey'  => 'addCompanion'
                    ])   
                <div class="">
                    <livewire:tables.companions-table />
                    <livewire:crud.add-companion />
                </div>
            </div>
        </div>
    </div>
</div>

