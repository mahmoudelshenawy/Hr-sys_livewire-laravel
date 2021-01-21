<div class="row row-sm">
    <div class="col-lg-12">
        <div class="card custom-card">
            <div class="card-body">
                @livewire('widgets.add-modal', [
                        'title' => "Manage Payroll Delay Penalties",
                        'name'   => "Add New Payroll Delay Penalty" ,
                        'sectedKey'  => 'addPayrollDelayPenalty',
                        'allowexcel' => true
                    ])   
                <div class="">
                    <livewire:tables.payroll-delay-penalties-table />
                    <livewire:crud.add-payroll-delay-penalty />
                    <livewire:crud.add-from-excel model="DelayPenalty"/>
                </div>
            </div>
        </div>
    </div>
</div>