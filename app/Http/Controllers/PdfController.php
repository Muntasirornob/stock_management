<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use PDF;

class PdfController extends Controller
{
    // create pdf view page
    public function CreatePdf()
    {
       $product=Product::all();
       return view('pdf',compact('product'));
    //    $pdf = PDF::loadView('pdf', $product);
    //    return $pdf->download('products.pdf');
    //     return view('pdf.CreatePdf');
    }


    public function download()
    {
       $product=Product::all();
     
       $pdf = PDF::loadView('pdf',compact('product') );
       return $pdf->download('product.pdf');
       return view('pdf',compact('product'));
    }
   
   
    
}
