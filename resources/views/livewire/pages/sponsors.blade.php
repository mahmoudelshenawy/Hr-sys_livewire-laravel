div class="row row-sm">
    <div class="col-lg-12">
        <div class="card custom-card">
            <div class="card-body">
                @livewire('widgets.add-modal', [
                        'title' => "Manage Sponsors",
                        'name'   => "Add New Sponsor" ,
                        'sectedKey'  => 'addSponsor'
                    ])   
                <div class="">
                    <livewire:tables.sponsors-table />
                    <livewire:crud.add-sponsors />
                </div>
            </div>
        </div>
    </div>
</div>