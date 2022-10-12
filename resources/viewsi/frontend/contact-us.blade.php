@extends('layouts.app')
@section('title','contact-us')
@push('vendor_css')

@endpush
@push('page_css')

@endpush
@section('content')
 <!-- Contact -->
 <div class="contact">
    <div class="container">
      <div class="row">
        <div class="col-sm-10 col-md-10 col-lg-10 offset-md-1">
          <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d58421.45666479088!2d90.35708!3d23.770867!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe385d391a9eb88d2!2sAtherton%20Imbros%20Company%20Limited!5e0!3m2!1sbn!2sbd!4v1617614784923!5m2!1sbn!2sbd" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
          </div>
          <div class="row">
            <div class="col-sm-12 col-md-4 col-lg-4">
              <h2>@lang('messages.Contact')</h2>
              <p>Dhaka, Bangladesh</p>
              <p>Import & Procurement:</p>
              <p>corporate@aicl-bd.com</p>
              <p>Sales & Distribution:</p>
              <p>sales@aicl-bd.com</p>
              <p>+88 02 8190441 </p>

            </div>
            <div class="col-sm-12 col-md-2 col-lg-2">
              <div class="contact_icon" data-testid="svgRoot-comp-jhehz90a" class="_36XXs _3Qjwl"><svg preserveAspectRatio="xMidYMid meet" data-bbox="10.2 22 180.709 131.6" viewBox="10.2 22 180.709 131.6" height="100" width="100" xmlns="http://www.w3.org/2000/svg" data-type="shape" role="img">
                <g>
                    <path d="M175.6 78.2h-4.9c5.6-4 9.2-10.6 9.2-18 0-12.3-10-22.2-22.2-22.2-12.3 0-22.2 10-22.2 22.2 0 7.4 3.6 14 9.2 18H137c-2.8-6-8.8-10.1-15.8-10.1H114c7-4.4 11.6-12.3 11.6-21.1 0-13.8-11.2-25-25-25s-25 11.2-25 25c0 8.9 4.6 16.7 11.6 21.1h-6.7c-7 0-13 4.2-15.8 10.1h-8.4c5.6-4 9.2-10.6 9.2-18 0-12.3-10-22.2-22.2-22.2C31 38 21.1 48 21.1 60.2c0 7.4 3.6 14 9.2 18h-4.5c-8.6 0-15.6 7-15.6 15.6v56.6c0 1.8 1.5 3.2 3.2 3.2s3.2-1.5 3.2-3.2V93.8c0-5 4.1-9.1 9.1-9.1h37.4v43.9c0 1.8 1.5 3.2 3.2 3.2s3.2-1.5 3.2-3.2V85.5c0-6 4.9-10.9 10.9-10.9H121c6 0 10.9 4.9 10.9 10.9v43.1c0 1.8 1.5 3.2 3.2 3.2s3.2-1.5 3.2-3.2V84.7h37.1c5 0 9.1 4.1 9.1 9.1v56.6c0 1.8 1.5 3.2 3.2 3.2s3.2-1.5 3.2-3.2V93.8c.3-8.6-6.7-15.6-15.3-15.6zM43.3 75.9c-8.7 0-15.8-7.1-15.8-15.8s7.1-15.8 15.8-15.8 15.8 7.1 15.8 15.8S52 75.9 43.3 75.9zm57.3-10.4c-10.2 0-18.5-8.3-18.5-18.5s8.3-18.5 18.5-18.5 18.5 8.3 18.5 18.5-8.2 18.5-18.5 18.5zm57.1 10.4c-8.7 0-15.8-7.1-15.8-15.8s7.1-15.8 15.8-15.8 15.8 7.1 15.8 15.8-7.1 15.8-15.8 15.8z"></path>
                </g>
              </svg>
            </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
             <div class="contact-form">
              <form action="{{ route('send-message')}}" method="POST">
                @csrf
                <div class="form-group row">
                  <label for="inputName" class="col-sm-3 col-form-label">@lang('messages.Name') <span style="color:red">*</span></label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="name" id="inputName" placeholder="@lang('messages.Name')" required>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="inputEmail" class="col-sm-3 col-form-label">@lang('messages.Email') <span style="color:red">*</span></label>
                  <div class="col-sm-9">
                    <input type="email" class="form-control" name="email" id="inputEmail" placeholder="@lang('messages.Email')" required>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="inputPhone" class="col-sm-3 col-form-label">@lang('messages.Phone')</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="phone" id="inputPhone" placeholder="@lang('messages.Phone')">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="inputAddress" class="col-sm-3 col-form-label">@lang('messages.Address')</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="address" id="inputAddress" placeholder="@lang('messages.Address')">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="inputSubject" class="col-sm-3 col-form-label">@lang('messages.Subject') <span style="color:red">*</span></label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="subject" id="inputSubject" placeholder="@lang('messages.Subject')" required>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="inputMessage" class="col-sm-3 col-form-label">@lang('messages.Message') <span style="color:red">*</span></label>
                  <div class="col-sm-9">
                    <textarea name="message" id="" cols="30" rows="4" class="form-control" required></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <button type="submit" class="btn btn-success float-right send_btn">@lang('messages.Send')</button>
                </div>
              </form>
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

@endpush
