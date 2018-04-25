<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Pixelpeter\Woocommerce\Facades\Woocommerce;

class ListaController extends Controller
{
    public function index() {
        return Woocommerce::get('orders');
    }
}
