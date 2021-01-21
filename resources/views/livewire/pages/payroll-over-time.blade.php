
 <div class="row row-sm">
    <div class="col-lg-12">
        <div class="card custom-card">
            <div class="card-body">
                @livewire('widgets.add-modal', [
                        'title' => "Manage Payroll OverTimes",
                        'name'   => "Add New Payroll OverTime" ,
                        'sectedKey'  => 'addPayrollOverTime',
                        'allowexcel' => true,
                    ])   
                <div class="">
                    <livewire:tables.payroll-over-times-table />
                    <livewire:crud.add-payroll-over-time />
                    <livewire:crud.add-from-excel model="OverTime"/>
                </div>
            </div>
        </div>
    </div>
</div>