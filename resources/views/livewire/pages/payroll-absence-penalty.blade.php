
 <div class="row row-sm">
    <div class="col-lg-12">
        <div class="card custom-card">
            <div class="card-body">
                @livewire('widgets.add-modal', [
                        'title' => "Manage Payroll AbsencePenalties",
                        'name'   => "Add New Payroll Absence Penalty" ,
                        'sectedKey'  => 'addPayrollAbsencePenalty',
                        'allowexcel' => true
                    ])   
                <div class="">
                    <livewire:tables.payroll-absence-penalties-table />
                    <livewire:crud.add-payroll-absence-penalty />
                    <livewire:crud.add-from-excel model="AbsencePenalty"/>
                </div>
            </div>
        </div>
    </div>
</div>