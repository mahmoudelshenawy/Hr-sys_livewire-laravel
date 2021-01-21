
 <div class="row row-sm">
    <div class="col-lg-12">
        <div class="card custom-card">
            <div class="card-body">
                @livewire('widgets.add-modal', [
                        'title' => "Manage Shifts",
                        'name'   => "Add New Shift" ,
                        'sectedKey'  => 'addShift'
                    ])   
                <div class="">
                    <livewire:tables.shifts-table />
                    <livewire:crud.add-shifts />
                </div>
            </div>
        </div>
    </div>
</div>

