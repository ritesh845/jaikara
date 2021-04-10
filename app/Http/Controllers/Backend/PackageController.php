<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Package;
use App\Models\PackageServiceMast;
use App\Models\PackageService;
class PackageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $packages = Package::all();
        $services = PackageServiceMast::orderBy('pkg_service_id')->get();
        // foreach ($services as $key => $service) {
        //     return collect($service->packages)->where('pkg_id',1)->first();
        // }
        return view('backend.admin.package.index',compact('packages','services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    //Service Create
    public function create()
    {
        $packages = Package::select('pkg_id','pkg_name')->where('status',1)->get();

        return view('backend.admin.package.service_create',compact('packages'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    //Service Store
    public function store(Request $request)
    {
       
        $pkg_service = PackageServiceMast::create(['pkg_service_name' => $request->pkg_service_name]);
        foreach ($request->pkg_id as $key => $value) {
            $field_name = 'service_type_'.$value;
            $data =[
                'pkg_service_id' => $pkg_service->pkg_service_id, 
                'pkg_id' => $value,
                'status' => $request->$field_name
            ];

            PackageService::insert($data);
        }
        return redirect()->back()->with('success','Service Created Successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $package = Package::find($id);
        return view('backend.admin.package.edit',compact('package'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = [
            'price' => $request->price,
            'valid_days' => $request->valid_days,
            'prdt_limit' => $request->prdt_limit,
            'classified_limit' => $request->classified_limit,
            'trade_ld_limit' => $request->trade_ld_limit,
            'is_buyer_trade' => $request->is_buyer_trade,
            'is_subdomain' => $request->is_subdomain,
            'prdt_verified' => $request->prdt_verified,
            'prdt_seal' => $request->prdt_seal,
            'rfq_limit' => $request->rfq_limit,
            'extra_rfq_chrge' => $request->extra_rfq_chrge,
            'img_limit' => $request->img_limit,
            'video_limit' => $request->video_limit,
        ];
        $package = Package::find($id);
        $package->update($data);
        return redirect()->back()->with('success',"Member Package Updated Successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function service_edit($id)
    {
        $packages = Package::select('pkg_id','pkg_name')->where('status',1)->get();
        $service = PackageServiceMast::find($id);


        return view('backend.admin.package.service_edit',compact('packages','service'));
    } 
    public function service_update(Request $request, $id)
    {
        PackageServiceMast::find($id)->update(['pkg_service_name' => $request->pkg_service_name]);
        PackageService::where('pkg_service_id',$id)->delete();

        foreach ($request->pkg_id as $key => $value) {
            $field_name = 'service_type_'.$value;
            $data =[
                'pkg_service_id' => $id, 
                'pkg_id' => $value,
                'status' => $request->$field_name
            ];

            PackageService::insert($data);
        }
        return redirect()->back()->with('success','Service Updated Successfully');
    }
    public function service_delete($id){
        PackageServiceMast::find($id)->delete();
        PackageService::where('pkg_service_id',$id)->delete();
        return redirect()->back()->with('success','Service Deleted Successfully');
    }

    public function service_approve($id){
        $service =  PackageServiceMast::find($id);
         if($service->status == '1'){
            $status = '0';
            $message = 'Service Approved Successfully';
        }else{
            $status = '1';
            $message = 'Service UnApproved Successfully';
        }
        $service->update(['status' => $status]);
        return [
            'status' => 'success',
            'message' => $message
        ];

    }


}
