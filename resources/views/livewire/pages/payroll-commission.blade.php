<div class="row row-sm">
    <div class="col-lg-12">
        <div class="card custom-card">
            <div class="card-body">
                @livewire('widgets.add-modal', [
                        'title' => "Manage Payroll Commissions",
                        'name'   => "Add New Payroll Commission" ,
                        'sectedKey'  => 'addPayrollCommission',
                        'allowexcel' => true
                    ])   
                <div class="">
                    <livewire:tables.payroll-commissions-table />
                    <livewire:crud.add-payroll-commission />
                    <livewire:crud.add-from-excel model="Commission"/>
                </div>
            </div>
        </div>
    </div>
</div>