@extends('backend.layouts.main')
@section('content')
<div class="card ">
    <div class="card-header p-1">
        <h5 class="card-title">Edit Member package
            <a href="{{route('package.index')}}" class="btn btn-sm btn-primary pull-right">{{__('Back')}}</a>
        </h5>
    </div><!-- card-header -->
    <div class="card-body">
        @if($message = Session::get('success'))
            <div class="alert alert-success">
                {{$message}}
            </div>
        @endif
        <div class="row">
            <div class="col-md-9">
                <form action="{{route('package.update',$package->pkg_id)}}" method="post">
                    @csrf
                    @method('patch')
                    <table class="table border-0">
                        <tbody>
                            <tr>
                                <td class="font-weight-bold">Price</td>
                                <td class="form-group"><input  type="text" name="price" class="form-control" oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*)\./g, '$1');" value="{{$package->price}}"></td>
                            </tr> 
                            <tr>
                                <td class="font-weight-bold">Valid Days</td>
                                <td class="form-group"><input  type="text" name="valid_days" class="form-control" oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*)\./g, '$1');" value="{{$package->valid_days}}"></td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold">No. of Products Add Limit</td>
                                <td class="form-group"><input  type="text" name="prdt_limit" class="form-control" oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*)\./g, '$1');" value="{{$package->prdt_limit}}"></td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold">No. of Classified Add Limit</td>
                                <td class="form-group"><input  type="text" name="classified_limit" class="form-control" oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*)\./g, '$1');" value="{{$package->classified_limit}}"></td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold">No. of Trade Leads Add Limit</td>
                                <td class="form-group"><input  type="text" name="trade_ld_limit" class="form-control" oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*)\./g, '$1');" value="{{$package->trade_ld_limit}}"></td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold">Access to buyer Trade Leads</td>
                                <td>
                                    <label>Yes</label>
                                    <input type="radio" value="1" name="is_buyer_trade" {{$package->is_buyer_trade == '1' ? 'checked="checked"' : ''}}>
                                    <label>No</label>
                                    <input type="radio" value="0" name="is_buyer_trade" {{$package->is_buyer_trade == '0' ? 'checked="checked"' : ''}}>
                                </td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold">Allow Sub-Domain Creation</td>
                                <td>
                                    <label>Yes</label>
                                    <input type="radio" value="1" name="is_subdomain" {{$package->is_subdomain == '1' ? 'checked="checked"' : ''}}>
                                    <label>No</label>
                                    <input type="radio" value="0" name="is_subdomain" {{$package->is_subdomain == '0' ? 'checked="checked"' : ''}}>
                                </td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold">Product Verified</td>
                                <td>
                                    <label>Yes</label>
                                    <input type="radio" value="1" name="prdt_verified" {{$package->prdt_verified == '1' ? 'checked="checked"' : ''}}>
                                    <label>No</label>
                                    <input type="radio" value="0" name="prdt_verified" {{$package->prdt_verified == '0' ? 'checked="checked"' : ''}}>
                                </td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold">Product Trust Seal</td>
                                <td>
                                    <label>Yes</label>
                                    <input type="radio" value="1" name="prdt_seal" {{$package->prdt_seal == '1' ? 'checked="checked"' : ''}}>
                                    <label>No</label>
                                    <input type="radio" value="0" name="prdt_seal" {{$package->prdt_seal == '0' ? 'checked="checked"' : ''}}>
                                </td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold">Access to RFQs </td>
                                <td>
                                <input type="text" name="rfq_limit" oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*)\./g, '$1');" value="{{$package->rfq_limit}}" style="width: 20%">

                                <label class="ml-3">Extra Rfq Charges: </label><input type="text" class="ml-2" name="extra_rfq_chrge" oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*)\./g, '$1');" value="{{$package->extra_rfq_chrge}}"></td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold">No. of Images Uploads Limit </td>
                                <td>
                                    <select name="img_limit" class="form-control">
                                        @foreach(range(1,10) as $value)
                                            <option value="{{$value}}" {{$package->img_limit == $value ? 'selected="selected' : ''}}>{{$value}}</option>
                                        @endforeach
                                    </select>
                                </td>
                            </tr> 
                            <tr>
                                <td class="font-weight-bold">No. of Youtube Video Uploads Limit </td>
                                <td>
                                    <select name="video_limit" class="form-control">
                                        @foreach(range(1,10) as $vvalue)
                                            <option value="{{$vvalue}}" {{$package->video_limit == $vvalue ? 'selected="selected' : ''}}>{{$vvalue}}</option>
                                        @endforeach
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <button class="btn btn-sm btn-success">Save</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </form>
            </div>
        </div>
      
    </div>
</div>

@endsection