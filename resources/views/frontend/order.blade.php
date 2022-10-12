@extends('layouts.app')
@section('title','Order Form')
@push('vendor_css')
    
@endpush
@push('page_css')
    
@endpush
@section('content')
   <!-- Order form -->
   <div class="order">
    <div class="container order-form">
      <div class="col-sm-10 offset-1">
        <div class="row">
          <div class="col-sm-6 col-md-6 col-lg-6">
            <h2>অর্ডার ফর্ম</h2>
            <p>Scan QR Code for Android for Officer and Distributor. For more information contact: sales@aicl-bd.com</p>
            <div class="col-sm-6 col-md-6 col-lg-6">
              <input type="text" value="" class="form-control" placeholder="03-03-2021">
            </div>
          </div>
          <div class="col-sm-6 col-md-6 col-lg-6">
            <img src="{{ asset('frontend/assets/images/Atherton QR Code Android.webp')}}" alt="">
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12 col-md-6 col-lg-6">
            <input type="text" class="form-control" name="" id="" placeholder="Name"><br />
            <input type="text" class="form-control" name="" id="" placeholder="Mobile"><br />
            <input type="text" class="form-control" name="" id="" placeholder="Email(Optional)">
          </div>
          <div class="col-sm-12 col-md-6 col-lg-6">
            <textarea name="" id="" cols="30" rows="10" class="form-control">
              </textarea>
          </div>
        </div>
        <br />
        <div class="row">
          <div class="col-sm-12 col-md-4 col-lg-4">
            <label for="product">প্রোডাক্ট <span style="color:red;">*</span></label>
            <select name="product" id="product" class="form-control">
              <option value="">প্রোডাক্ট সিলেক্ট করুন</option>
            </select>
          </div>
          <div class="col-sm-12 col-md-4 col-lg-4">
            <label for="product">প্যাক সাইজ <span style="color:red;">*</span></label>
            <select name="product" id="product" class="form-control">
              <option value="">প্যাকেজিং</option>
            </select>
          </div>
          <div class="col-sm-12 col-md-4 col-lg-4">
            <label for="product">পরিমাণ<span style="color:red;">*</span> </label>
            <input type="text" class="form-control" name="qty" placeholder="কেজি/লিটার">
          </div>
        </div><br />
        <div class="row">
          <div class="col-sm-12 col-md-4 col-lg-4">
            <label for="product">প্রোডাক্ট <span style="color:red;">*</span></label>
            <select name="product" id="product" class="form-control">
              <option value="">প্রোডাক্ট সিলেক্ট করুন</option>
            </select>
          </div>
          <div class="col-sm-12 col-md-4 col-lg-4">
            <label for="product">প্যাক সাইজ <span style="color:red;">*</span></label>
            <select name="product" id="product" class="form-control">
              <option value="">প্যাকেজিং</option>
            </select>
          </div>
          <div class="col-sm-12 col-md-4 col-lg-4">
            <label for="product">পরিমাণ<span style="color:red;">*</span> </label>
            <input type="text" class="form-control" name="qty" placeholder="কেজি/লিটার">
          </div>
        </div><br />
        <div class="row">
          <div class="col-sm-12 col-md-4 col-lg-4">
            <label for="product">প্রোডাক্ট <span style="color:red;">*</span></label>
            <select name="product" id="product" class="form-control">
              <option value="">প্রোডাক্ট সিলেক্ট করুন</option>
            </select>
          </div>
          <div class="col-sm-12 col-md-4 col-lg-4">
            <label for="product">প্যাক সাইজ <span style="color:red;">*</span></label>
            <select name="product" id="product" class="form-control">
              <option value="">প্যাকেজিং</option>
            </select>
          </div>
          <div class="col-sm-12 col-md-4 col-lg-4">
            <label for="product">পরিমাণ<span style="color:red;">*</span> </label>
            <input type="text" class="form-control" name="qty" placeholder="কেজি/লিটার">
          </div>
        </div><br />
        <div class="row">
          <div class="col-sm-12 col-md-4 col-lg-4">
            <label for="product">প্রোডাক্ট <span style="color:red;">*</span></label>
            <select name="product" id="product" class="form-control">
              <option value="">প্রোডাক্ট সিলেক্ট করুন</option>
            </select>
          </div>
          <div class="col-sm-12 col-md-4 col-lg-4">
            <label for="product">প্যাক সাইজ <span style="color:red;">*</span></label>
            <select name="product" id="product" class="form-control">
              <option value="">প্যাকেজিং</option>
            </select>
          </div>
          <div class="col-sm-12 col-md-4 col-lg-4">
            <label for="product">পরিমাণ<span style="color:red;">*</span> </label>
            <input type="text" class="form-control" name="qty" placeholder="কেজি/লিটার">
          </div>
        </div><br />
        <div class="row">
          <div class="col-sm-12 col-md-4 col-lg-4">
            <label for="product">প্রোডাক্ট <span style="color:red;">*</span></label>
            <select name="product" id="product" class="form-control">
              <option value="">প্রোডাক্ট সিলেক্ট করুন</option>
            </select>
          </div>
          <div class="col-sm-12 col-md-4 col-lg-4">
            <label for="product">প্যাক সাইজ <span style="color:red;">*</span></label>
            <select name="product" id="product" class="form-control">
              <option value="">প্যাকেজিং</option>
            </select>
          </div>
          <div class="col-sm-12 col-md-4 col-lg-4">
            <label for="product">পরিমাণ<span style="color:red;">*</span> </label>
            <input type="text" class="form-control" name="qty" placeholder="কেজি/লিটার">
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12">
            <label for="">Comment</label>
            <textarea name="" id="" cols="30" rows="10" class="form-control"></textarea>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12 col-md-4 col-lg-4 offset-md-4">
            <button class="btn btn-info order_btn btn-block">কোটেশনের জন্য অনুরোধ করুন</button>
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