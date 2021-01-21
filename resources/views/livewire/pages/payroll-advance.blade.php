
 <div class="row row-sm">
    <div class="col-lg-12">
        <div class="card custom-card">
            <div class="card-body">
                @livewire('widgets.add-modal', [
                        'title' => "Manage Payroll Advances",
                        'name'   => "Add New Payroll Advance" ,
                        'sectedKey'  => 'addPayrollAdvance',
                        'allowexcel' => true
                    ])   
                <div class="">
                    <livewire:tables.payroll-advances-table />
                    <livewire:crud.add-payroll-advance />
                    <livewire:crud.add-from-excel model="Advance"/>
                </div>
            </div>
        </div>
    </div>
</div>