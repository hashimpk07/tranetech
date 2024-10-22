<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Rap2hpoutre\FastExcel\FastExcel;
use App\Models\Items;
use App\Models\Quotations;
use App\Models\User;

class ItemQuotationController extends Controller
{
    public function export()
    {
        $quotations = Quotations::all();
        return (new FastExcel($quotations))->download('file.xlsx');
    }

}
