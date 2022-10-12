@extends('layouts.app')
@section('title','')
@push('vendor_css')

@endpush
@push('page_css')

@endpush
@section('content')
   <div class="container">
       <div class="row mt-5 mb-5">
           <h2>চেকআউট</h2>
           <div class="col-md-12">
            <div class="accordion" id="accordionExample">
                @guest
                <div class="card">
                    <div class="card-header" id="headingOne">
                      <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                          ধাপ ১ : চেকআউট অপশন
                        </button>
                      </h2>
                    </div>

                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                      <div class="card-body">
                        <div class="col-md-12">
                          <div class="row">
                              <div class="col-sm-6" id="">
                                  <h2>নতুন ক্রেতা</h2>
                                  <p><br /></p>
                                  <div class="radio">
                                      <label> <input type="radio" name="account" value="guest" checked="checked" /> অতিথি চেকআউট</label>
                                  </div>
                                  <div class="radio">
                                      <label> <input type="radio" name="account" value="register" /> অ্যাকাউন্ট নিবন্ধন</label>
                                  </div>
                                  <p>একটি একাউন্ট তৈরি করে আপনি দ্রুত কেনাকাটা করতে পারবেন, অর্ডার অবস্থা আপডেট জানতে পারবেন, এবং আপনি পূর্বে সম্পন্ন অর্ডার সমূহের ট্র্যাক রাখতে পারবেন।</p>
                                  <input type="button" value="পরবর্তী ধাপে যান" id="button-account" data-loading-text="" class="btn btn-primary" />
                              </div>
                              <div class="col-sm-6">
                                  <h2>পুরাতন ক্রেতা</h2>
                                  <p><br /></p>
                                  <div class="form-group">
                                      <label class="control-label" for="input-email">ইমেইল:</label>
                                      <input type="text" name="email" value="" placeholder="ইমেইল:" id="input-email" class="form-control" />
                                  </div>
                                  <div class="form-group">
                                      <label class="control-label" for="input-password">পাসওয়ার্ড :</label>
                                      <input type="password" name="password" value="" placeholder="পাসওয়ার্ড :" id="input-password" class="form-control" />
                                      <a href="https://www.acicropcare.com/shop/index.php?route=account/forgotten">পাসওয়ার্ড ভুলে গেছেন!</a>
                                  </div>
                                  <input type="button" value="লগইন" id="button-login" data-loading-text="" class="btn btn-primary" />
                              </div>
                          </div>

                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header" id="headingTwo">
                      <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                          ধাপ ২ : অ্যাকাউন্ট, বিলিং ও ডেলিভারি
                        </button>
                      </h2>
                    </div>
                    <div id="collapseTwo" class="collapse show"  aria-labelledby="headingTwo" data-parent="#accordionExample">
                      <div class="card-body">
                        <div class="col-md-12">
                          <div class="row">
                              <div class="col-sm-6">
                                  <fieldset id="account">
                                      <legend>@lang('messages.Your-personal-info')</legend>
                                      <div class="form-group required">
                                          <label class="control-label" for="input-name">@lang('messages.Name') <span style="color: red">*</span></label>
                                          <input type="text" name="fullname" value="" placeholder="@lang('messages.Name')" id="input-name" class="form-control" />
                                      </div>
                                      <div class="form-group">
                                          <label class="control-label" for="input-payment-email">@lang('messages.Email') <span style="color: red">*</span></label>
                                          <input type="text" name="email" value="" placeholder="@lang('messages.Email')" id="input-payment-email" class="form-control" />
                                      </div>
                                      <div class="form-group required">
                                          <label class="control-label" for="input-payment-telephone">@lang('messages.Phone') <span style="color: red">*</span></label>
                                          <input type="text" name="telephone" value="" placeholder="@lang('messages.Phone')" id="input-payment-telephone" class="form-control" />
                                      </div>
                                  </fieldset>
                              </div>
                              <div class="col-sm-6">
                                  <fieldset id="address">
                                      <legend>@lang('messages.Your-address')</legend>

                                      <div class="form-group required">
                                          <label class="control-label" for="divisions">@lang('messages.Divisions') <span style="color: red">*</span></label>
                                          <select name="division" id="divisions" class="form-control">
                                              <option value=""> --- @lang('messages.Select') --- </option>
                                              @foreach ($divisions as $division)
                                              <option value="{{ $division->id }}">{{ $division->name }}</option>
                                              @endforeach
                                          </select>
                                      </div>
                                      <div class="form-group required">
                                          <label class="control-label" for="district">@lang('messages.District') <span style="color: red">*</span></label>
                                          <select name="district" id="district" class="form-control">
                                              <option value=""> --- @lang('messages.Select') --- </option>
                                          </select>
                                      </div>
                                      <div class="form-group required">
                                          <label class="control-label" for="upzila">@lang('messages.Upzila') <span style="color: red">*</span></label>
                                          <select name="upzila" id="upzila" class="form-control">
                                              <option value=""> --- @lang('messages.Select') --- </option>
                                          </select>
                                      </div>
                                  </fieldset>
                              </div>
                              <div class="col-md-12 mb-3">
                                  <label class="control-label" for="address">@lang('messages.Address') <span style="color: red">*</span></label>
                                  <textarea name="address" class="form-control" id="address" cols="30" rows="5" placeholder="@lang('messages.Address')"></textarea>
                              </div>
                          </div>
                          <div class="buttons">
                              <div class="pull-right">
                              <input type="button" value="@lang('messages.Go-next-step')" id="button-guest" data-loading-text="" class="btn btn-primary mb-3">
                              </div>
                              </div>
                        </div>
                      </div>
                    </div>
                  </div>
                @else
                <div class="card">
                    <div class="card-header" id="headingTwo">
                      <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                          ধাপ ২ : অ্যাকাউন্ট, বিলিং ও ডেলিভারি
                        </button>
                      </h2>
                    </div>
                    <div id="collapseTwo" class="collapse show"  aria-labelledby="headingTwo" data-parent="#accordionExample">
                      <div class="card-body">
                        <div class="col-md-12">
                          <div class="row">
                              <div class="col-sm-6">
                                  <fieldset id="account">
                                      <legend>@lang('messages.Your-personal-info')</legend>
                                      <div class="form-group required">
                                          <label class="control-label" for="input-name">@lang('messages.Name') <span style="color: red">*</span></label>
                                          <input type="text" name="fullname" value="{{ Auth::user()->name }}" placeholder="@lang('messages.Name')" id="input-name" class="form-control" />
                                      </div>
                                      <div class="form-group">
                                          <label class="control-label" for="input-payment-email">@lang('messages.Email') <span style="color: red">*</span></label>
                                          <input type="text" name="email" value="{{ Auth::user()->email }}" placeholder="@lang('messages.Email')" id="input-payment-email" class="form-control" />
                                      </div>
                                      <div class="form-group required">
                                          <label class="control-label" for="input-payment-telephone">@lang('messages.Phone') <span style="color: red">*</span></label>
                                          <input type="text" name="telephone" value="{{ Auth::user()->phone_number }}" placeholder="@lang('messages.Phone')" id="input-payment-telephone" class="form-control" />
                                      </div>
                                  </fieldset>
                              </div>
                              <div class="col-sm-6">
                                  <fieldset id="address">
                                      <legend>@lang('messages.Your-address')</legend>

                                      <div class="form-group required">
                                          <label class="control-label" for="divisions">@lang('messages.Divisions') <span style="color: red">*</span></label>
                                          <select name="division" id="divisions" class="form-control">
                                              <option value=""> --- @lang('messages.Select') --- </option>
                                              @foreach ($divisions as $division)
                                              <option value="{{ $division->id }}">{{ $division->name }}</option>
                                              @endforeach
                                          </select>
                                      </div>
                                      <div class="form-group required">
                                          <label class="control-label" for="district">@lang('messages.District') <span style="color: red">*</span></label>
                                          <select name="district" id="district" class="form-control">
                                              <option value=""> --- @lang('messages.Select') --- </option>
                                          </select>
                                      </div>
                                      <div class="form-group required">
                                          <label class="control-label" for="upzila">@lang('messages.Upzila') <span style="color: red">*</span></label>
                                          <select name="upzila" id="upzila" class="form-control">
                                              <option value=""> --- @lang('messages.Select') --- </option>
                                          </select>
                                      </div>
                                  </fieldset>
                              </div>
                              <div class="col-md-12 mb-3">
                                  <label class="control-label" for="address">@lang('messages.Address') <span style="color: red">*</span></label>
                                  <textarea name="address" class="form-control" id="address" cols="30" rows="5" placeholder="@lang('messages.Address')"></textarea>
                              </div>
                          </div>
                          <div class="buttons">
                              <div class="pull-right">
                              <input type="button" value="@lang('messages.Go-next-step')" id="button-guest" onclick="testFun()" class="btn btn-primary mb-3">
                              </div>
                              </div>
                        </div>
                      </div>
                    </div>
                  </div>
                @endguest
                <div class="card">
                  <div class="card-header" id="headingThree">
                    <h2 class="mb-0">
                      <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        ধাপ ৩ : অর্ডার নিশ্চিত করুন
                      </button>
                    </h2>
                  </div>
                  <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                    <div class="card-body">
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <td class="text-left">পণ্যের নাম</td>
                                            <td class="text-left">মডেল</td>
                                            <td class="text-right">পরিমাণ</td>
                                            <td class="text-right">একক মূল্য</td>
                                            <td class="text-right">মোট</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-left">
                                                <a href="https://www.acicropcare.com/shop/acimix">AC Mix 55 EC- এসিমিক্স ৫৫ ই সি</a> <br />
                                                &nbsp;<small> - পরিমাণ: ৫০০ মিলি</small>
                                            </td>
                                            <td class="text-left">ক্লোরপাইরিফস ৫০ %+ সাইপারমেথ্রিন ৫ %</td>
                                            <td class="text-right">1</td>
                                            <td class="text-right">Tk. 775﹒00</td>
                                            <td class="text-right">Tk. 775﹒00</td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td colspan="4" class="text-right"><strong>উপ-সমষ্টি:</strong></td>
                                            <td class="text-right">Tk. 775﹒00</td>
                                        </tr>
                                        <tr>
                                            <td colspan="4" class="text-right"><strong>মোট:</strong></td>
                                            <td class="text-right">Tk. 775﹒00</td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <p><strong>ডেলিভারি খরচ: </strong>ঢাকার ভেতরে ও বাইরে হোম ডেলিভারীর জন্য নির্দিষ্ট চার্জ প্রযোজ্য, ডেলিভারী কনফার্মেশনের সময় ডেলিভারী চার্জ নিশ্চিত করা হবে। ঢাকার ভেতরে ডেলিভারীর জন্য ৪৮ ঘন্টা এবং ঢাকার বাইরে ৩-৪ দিন সময় লাগতে পারে।</p>
                            <strong>পেমেন্ট পদ্ধতি: </strong>ক্যাশ অন ডেলিভারী
                            <br />
                            <br />
                            <em>সচেতনতামূলক তথ্যঃ</em><br />
                            ১. পণ্যটির বিষক্রিয়া মাত্রা WHO এর বিষক্রিয়া নির্দেশক অনুযায়ী Class ll এবং Class lll এর অন্তর্ভুক্ত, যা সম্পূর্ণ নিরাপদ মাত্রা নির্দেশ করে।<br />
                            ২. পণ্যটির LD 50 (Lethal Dose) WHO এর নির্দেশিকা মোতাবেক নিরাপদ মাত্রায় রয়েছে।<br />
                            ৩. পণ্যটির LC 50 (Lethal Concentration) WHO এর নির্দেশিকা মোতাবেক নিরাপদ মাত্রায় রয়েছে।
                            <br />
                            <strong>সতর্কতাঃ</strong><br />
                            আমার বয়স ১৮ বছর অথবা তার বেশি এবং মানষিকভাবে আমি সম্পূর্ণ সুস্থ্য ও সচেতন। এটি একটি কীটনাশক জাতীয় পণ্য সে বিষয়ে অবগত হয়ে এবং অত্র পণ্যের ক্ষতিকর দিক জেনে, বুঝে স্বজ্ঞানে পণ্যটি কিনতে চাচ্ছি। শুধুমাত্র কৃষিকাজ/ বাগানে ব্যবহারের জন্য
                            পণ্যটি কিনতে চাচ্ছি। ব্যবহারের পূর্বে আমি অবশ্যই মোড়কে উল্লেখিত ব্যবহারবিধি সম্পর্কে জানবো এবং তা মেনে চলবো।
                            <div class="buttons">
                                <div class="pull-right">
                                    <input type="button" value="আমি সতর্কতা পরেছি ও অর্ডার নিশ্চিত করছি" id="button-confirm" data-loading-text="" class="btn btn-primary mb-3" />
                                </div>
                            </div>

                        </div>

                    </div>
                  </div>
                </div>
              </div>
           </div>
       </div>
   </div>
@endsection
@push('vendor_js')

@endpush
@push('page_js')
   <script>

       $(document).ready(function() {
           // select district
            $('#divisions').on('change', function() {
                var stateID = $(this).val();
                var base_url = {!! json_encode(url('/')) !!};
                if(stateID) {
                    $.ajax({
                        url: base_url+'/distict-select/'+stateID,
                        type: "GET",
                        data : {"_token":"{{ csrf_token() }}"},
                        dataType: "json",
                        success:function(data) {
                            //console.log(data);
                            if(data){
                                $('#district').empty();
                                $('#district').focus;
                                $('#district').append('<option value="district">-- Select District --</option>');
                                $.each(data, function(key, value){
                                    $('select[name="district"]').append('<option value="'+ value.id +'">' + value.name+ '</option>');
                                });
                            }else{
                                $('#district').empty();
                            }
                        }
                    });
                }else{
                    $('#district').empty();
                }
            });
            // select district
            $('#district').on('change', function() {
                var districtID = $(this).val();
                var base_url = {!! json_encode(url('/')) !!};
                if(districtID) {
                    $.ajax({
                        url: base_url+'/upzila-select/'+districtID,
                        type: "GET",
                        data : {"_token":"{{ csrf_token() }}"},
                        dataType: "json",
                        success:function(data) {
                            if(data){
                                $('#upzila').empty();
                                $('#upzila').focus;
                                $('#upzila').append('<option value="upzila">-- Select upzila --</option>');
                                $.each(data, function(key, value){
                                    $('select[name="upzila"]').append('<option value="'+ value.id +'">' + value.name+ '</option>');
                                });
                            }else{
                                $('#upzila').empty();
                            }
                        }
                    });
                }else{
                    $('#upzila').empty();
                }
            });

            // finel step
            function finalStep()
            {
            alert('Workfing');
                //$('.collapseThree').collapse()
            }
        });

        function testFun()
        {
            alert('Working');
        }

   </script>
@endpush
