
 <div class="row row-sm">
    <div class="col-lg-12">
        <div class="card custom-card">
            <div class="card-body">
                @livewire('widgets.add-modal', [
                        'title' => "Manage Payroll Allowances",
                        'name'   => "Add New Payroll Allowance" ,
                        'sectedKey'  => 'addPayrollAllowance',
                        'allowexcel' => true
                     ])   
                <div class="">
                    <livewire:tables.payroll-allowances-table />
                    <livewire:crud.add-payroll-allowance />
                    <livewire:crud.add-from-excel model="Allowance"/>
                </div>
            </div>
        </div>
    </div>
</div>