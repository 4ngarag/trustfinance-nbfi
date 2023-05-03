<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Company;
use App\Models\Post;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        $posts = Post::orderByDesc('created_at')->limit(2)->get();

        return view('home.index', compact('posts'));
    }

    // public function news($id)
    // {
    //     return view('home.show.news_show', [
    //         'post' => Post::findOrFail($id)
    //     ]);
    // }
    
    public function news()
    {
        return view('home.news.index');
    }

    public function about()
    {
        return view('home.company.about');
    }

    public function management()
    {
        return view('home.company.management');
    }

    public function address()
    {
        return view('home.address');
    }
    
    public function branch()
    {
        $companies = Company::all();
        return view('home.branch', compact('companies'));
    }

    public function branch_show($id)
    {
        return view('home.show.company_show', [
            'company' => Company::findOrFail($id)
        ]);
    }

    public function brands()
    {
        $brands = Brand::all();
        return view('home.brands', compact('brands'));
    }

    public function brandsTest()
    {
        $brands = Brand::all();
        return view('home.brandsTest', compact('brands'));
    }

    public function brandsDasida()
    {
        $brands = Brand::all();
        return view('home.brandsDasida', compact('brands'));
    }

    public function brandsSpam()
    {
        $brands = Brand::all();
        return view('home.brandsSpam', compact('brands'));
    }

    public function brands_show($id)
    {
        return view('home.show.brand_show', [
            'brand' => Brand::findOrFail($id)
        ]);
    }

    public function loan_business()
    {
        return view('home.loan.business');
    }
    public function loan_car()
    {
        return view('home.loan.car');
    }
    public function loan_consumer()
    {
        return view('home.loan.consumer');
    }
    public function loan_instant()
    {
        return view('home.loan.instant');
    }
    public function loan_salary()
    {
        return view('home.loan.salary');
    }

    public function investment_trust()
    {
        return view('home.investment.trust');
    }

    public function report()
    {
        return view('home.report.index');
    }
    public function report_audit()
    {
        return view('home.report.audit');
    }
    public function report_activity()
    {
        return view('home.report.activity');
    }

    public function calculator()
    {
        return view('home.calculator');
    }

    public function career()
    {
        return view('home.career');
    }

    public function careers()
    {
        return view('hr.index');
    }

    public function contact()
    {
        return view('home.contact');
    }

    public function faq()
    {
        return view('home.faq');
    }
}
