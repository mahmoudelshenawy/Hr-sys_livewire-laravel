 <div class="row row-sm">
    <div class="col-lg-12">
        <div class="card custom-card">
            <div class="card-body">
                    @livewire('widgets.add-modal', [
                        'title' => "Manage Insurrance Company",
                        'name'   => "Add New Insurrance Company" ,
                        'sectedKey'  => 'addInsurranceCompany'
                    ])   
                <div class="">
                    <livewire:tables.insurrance-companies-table />
                    <livewire:crud.add-insurrance-companies />
                </div>
            </div>
        </div>
    </div>
</div>
