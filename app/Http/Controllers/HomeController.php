<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use Artesaos\SEOTools\Facades\SEOTools;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Carbon\Carbon;
use App\Partner;
use App\Employee;
use App\Slider;
use App\Career;
use Session;
use DB;

class HomeController extends Controller
{

   // on page seo
   public function on_page_seo($title,$description)
   {
        SEOTools::setTitle($title);
        SEOTools::setDescription($description);
        SEOTools::opengraph()->setUrl(url()->current());
        SEOTools::setCanonical(url()->current());
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::twitter()->setSite('');
        SEOTools::jsonLd()->addImage( asset('frontend/assets/images/main.webp'));
   }
   public function index()
   {

        $this->on_page_seo('Atherton Imbros Company Limited I Pesticides I Dhaka',"Farmers are the soul of our countrys economy, key to our core advancement, shape shifter of our generation, ergo: the most important people of Bangladesh.");
      // Session::put('locale','bn');
      // dd(Session::get('locale'));
        return view('frontend.home');
   }

   // company-profile
   public function profile()
   {
        $this->on_page_seo('Profile','Profile page');
        return view('frontend.company-profile');
   }
   // financial-partners
   public function partners()
   {
        // onpage seo
        $this->on_page_seo('Partner','Partner page');
        $partners = Partner::where('status',true)->latest()->get();
        return view('frontend.financial-partners',compact('partners'));
   }
   // dept-distribution
   public function distribution()
   {
        // onpage seo
        $this->on_page_seo('Distribution','Distribution Center');
        return view('frontend.dept-distribution');
   }
   // dept-distribution-image
   public function distribution_image()
   {
        // onpage seo
        $this->on_page_seo('Distribution','Distribution Center Images');
        return view('frontend.dept-distribution-image');
   }

   // corporate-structure
   public function employee()
   {
        // onpage seo
        $this->on_page_seo('Employee','Employee page');
        $employees = Employee::where('status',true)->orderBy('position','asc')->get();
        return view('frontend.corporate-structure',compact('employees'));
   }
   // quality-control
   public function quality_control()
   {
        // onpage seo
        $this->on_page_seo('Quality','Quality page');
        $quality_sliders = Slider::where('position',"2")->where('status',true)->latest()->get();
        return view('frontend.quality-control',compact('quality_sliders'));
   }
   // support-functions
   public function support_functions()
   {

        // onpage seo
        $this->on_page_seo('Support','Support page');
        $support_sliders = Slider::where('position',"3")->where('status',true)->latest()->get();
        return view('frontend.support-functions',compact('support_sliders'));
   }
   // units
   public function units()
   {
        // onpage seo
        $this->on_page_seo('Partner','Partner page');
        return view('frontend.units');
   }

    // pesticides
    public function pesticides()
    {
        // onpage seo
        $this->on_page_seo('Pesticides','Pesticides page');
        return view('frontend.pesticides');
    }
    // packaging
    public function packaging()
    {
        // onpage seo
        $this->on_page_seo('Packaging','Packaging page');
        $packaging_sliders = Slider::where('position',"4")->where('status',true)->latest()->get();
        return view('frontend.packaging',compact('packaging_sliders'));
    }
    // seed
    public function seed()
    {

        // onpage seo
        $this->on_page_seo('Seed','Seed page');
        $seed_sliders = Slider::where('position',"5")->where('status',true)->latest()->get();
        return view('frontend.seed',compact('seed_sliders'));
    }
   // careers
   public function careers()
   {
        // onpage seo
        $this->on_page_seo('Careers','Careers page');
        $careers = Career::where('status',true)->latest()->get();
        return view('frontend.careers',compact('careers'));
   }
   // Job Application
   public function apply_now(Request $request)
   {
      $this->validate($request,[
         'fname'     => 'string|required|max:255',
         'lname'     => 'string|max:255',
         'email'     => 'email|required',
         'phone'     => 'required',
         'position'  => 'string|required',
         'address'   => 'string|required',
         'cv'        => 'required|mimes:pdf,docx,doc',
      ]);

      $user_cv = $request->file('cv');
      $username = $request->fname.$request->lname;
      if(isset($user_cv))
      {
         $currentDate = Carbon::now()->toDateString();
         $fileName    = $username.'-'.$currentDate.'.'.$user_cv->getClientOriginalExtension();

         // Check user cv dir exists
         if(!Storage::disk('public')->exists('user-cv'))
         {
            Storage::disk('public')->makeDirectory('user-cv');
         }

         $FileEnconded=  File::get($user_cv);
         Storage::disk('public')->put('user-cv/'.$fileName, $FileEnconded);
      }

      $application = DB::table('job_applications')->insert([
         'fname'        => $request->fname,
         'lname'        => $request->lname,
         'email'        => $request->email,
         'address'      => $request->address,
         'phone'        => $request->phone,
         'position'     => $request->position,
         'application_date'     => Carbon::now()->toDateString(),
         'cv'           => $fileName,
      ]);

      return redirect()->back()->with('success','Application Successfully Send.');
   }
   // contact-us
   public function contact_us()
   {
        // onpage seo
        $this->on_page_seo('Contact us','Contact us page');
        return view('frontend.contact-us');
   }

   // send contact message
   public function send_message(Request $request)
   {
      $this->validate($request,[
         'name'      => 'required|string',
         'address'   => 'string',
         'subject'   => 'string|required',
         'message'   => 'string|required',
      ]);
      $contact = DB::table('contacts')->insert([
         'contact_name'      => $request->name,
         'contact_email'     => $request->email,
         'contact_phone'     => $request->phone,
         'contact_address'   => $request->address,
         'contact_subject'   => $request->subject,
         'contact_message'   => $request->message,
      ]);

      Toastr::success('Message Send Success','Success');
      return redirect()->back();
   }

   // order form
   public function order()
   {

        // onpage seo
        $this->on_page_seo('Order','Order page');
        return view('frontend.order');
   }
   // test
   public function dashboard()
   {
      return view('backend.dashboard');
   }


}
