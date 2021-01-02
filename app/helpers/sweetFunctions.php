<?php

function AppSetting()
{
    return \App\Models\AppSetting::orderBy('id', 'desc')->first();
}

function lang()
{
    return AppSetting()->lang;
}

function direction()
{
    if (AppSetting()->lang == 'ar') {
        return 'rtl';
    } else {
        return 'ltr';
    }
}
