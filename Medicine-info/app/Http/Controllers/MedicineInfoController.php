<?php

namespace App\Http\Controllers;

use App\Drug;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Validator;

class MedicineInfoController extends Controller
{
    public function ShowData()
    {
        $drug = Drug::paginate(8);
        return view('MedicineInfo',compact('drug'));
    }

    public function searchProduct(Request $request)
    {   
        $drug = Drug::where('Name','LIKE','%'.$request->search.'%')->orWhere('Desc','LIKE','%'.$request->search.'%')->paginate(8);
        return view('MedicineInfo',compact('drug'));
    }

    public function ShowDetail($Id)
    {
        $drug = Drug::find($Id);
        return view('Detail',compact('drug'));
    }

    public function Original($Id)
    {
        $drug = Drug::find($Id);
        return view('OriginalDrug',compact('drug'));
    }

    //tidak dipakai
    // public function compareProduct($isShow,$isShow2, Request $request)
    // {   
    //     //echo 'jiwo';

    //     $drug = Drug::where('Name','LIKE','%'.$request->search.'%')->paginate(4);
    //     $isShow = 'newisShow';

    //     $result = compact('drug','isShow');
    //     $result2 = compact('isShow2');

    //     //dd($isShow2);

    //     return view('Compare',compact('result'),compact('result2'));
    // }

    //tidak dipakai
    // public function compareProduct2($isShow,$isShow2, Request $request)
    // {   
    //     // echo 'jiwo';
    //     $drug2 = Drug::where('Name','LIKE','%'.$request->search.'%')->paginate(4);
    //     $isShow2 = 'newisShow2';
 
    //     $result2 = compact('drug2','isShow2');
    //     $result = compact('isShow');
            
    //     //dd($isShow);

    //     return view('Compare',compact('result'),compact('result2'));
    // }

    public function newCompareProduct()
    {
        parse_str($_SERVER['QUERY_STRING'], $queries);

        $firstQuery = $queries['search1'];
        $secondQuery = $queries['search2'];
        
        $drug1 = Drug::where('Name','LIKE','%'.$firstQuery.'%')->first();
        $drug2 = Drug::where('Name','LIKE','%'.$secondQuery.'%')->first();

        // if($drug1 == null)
        //     $drug1 = Drug::where('Name','LIKE',$firstQuery)->first();
        //     //$drug1 = DB::table('Drugs')->where('Name', $firstQuery)->first();
        // if($drug2 == null)
        //     $drug2 = Drug::where('Name','LIKE',$secondQuery)->first();

        $toReturn = compact('drug1','drug2');
        //dd($toReturn);
        if($drug1 == null && $drug2 == null)
        {
            $isShow = 'false';
            return view('newCompare',compact('isShow'));
        }
        else if($drug1 == null)
        {
            $isShow = 'miss';
            return view('newCompare',compact('isShow'));
        }
        else if($drug2 == null)
        {
            $isShow = 'miss';
            return view('newCompare',compact('isShow'));
        }
        else
        {
            $isShow = 'true';
            return view('newCompare',compact('isShow'), compact('toReturn'));
        }
        
    }

    public function doInsertDrug(Request $request)
    {
        //Custom Message
        $message = [
            'Name.required' => 'drug name must be filled',
            'Name.between' => 'drug length must between 3-20 character',
            'Desc.required' => 'Description must be filled',
            'Brand.required' => 'Brand must be filled',
            'Type.required' => 'Type must be filled',
            'AvgPrice.required' => 'Price must be filled',
            'General.required'=>'General must be filled'
        ];

        //Validasi
        $validator = Validator::make($request->all(),[
            'Name' => 'required|between:3 , 20',
            'Desc' => 'required',
            'ImageUrl'=>'required',
            'Brand' => 'required',
            'Type' => 'required',
            'AvgPrice' => 'required',
            'General' => 'required'
        ],$message);

        if($validator->fails())
        {
            return back()->withErrors($validator);
        }

        if($request->hasFile('ImageUrl'))
        {
            $file = $request->ImageUrl;
            $filename = $file->getClientOriginalName();
            $file->move('MsPhoto/',$filename);
        }

        $drug = new Drug();
        //$photos->id = $request->user_id;
        $drug->Name = $request->Name;
        $drug->Desc = $request->Desc;
        //harus di substring
        $drug->ImageUrl = $file->getClientOriginalName();
        $drug->Brand = $request->Brand;
        $drug->Type = $request->Type;
        $drug->AvgPrice = $request->AvgPrice;
        $drug->General = $request->General;
 

       // dd($photos);
        $drug->save();
        return redirect('MedicineInfo');

    }

}
