<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kris\LaravelFormBuilder\FormBuilder;
use App\Http\Requests\TraderCategoryRequest as TraderCategoryRequest;

use App\TraderCategory;

class TraderCategoryController extends Controller
{
    // ->except([
    //     'create', 'store', 'update', 'destroy'
    // ]
    
    public function index(FormBuilder $formBuilder)
    {   
        $form_tradercategory = $formBuilder->create('App\Http\Forms\TraderCategory', [
            'method' => 'POST',
            'url' => route('trader_categories.store')
        ]);

        $tradercategories = TraderCategory::paginate(10);
        return view('layouts.partials.trader_categories.index', compact('tradercategories','form_tradercategory'));
    }

    public function create(FormBuilder $formBuilder)
    {
        $form_tradercategory = $formBuilder->create('App\Http\Forms\TraderCategory', [
            'method' => 'POST',
            'url' => route('trader_categories.store')
        ]);

        return view('layouts.partials.trader_categories.form', compact('form_tradercategory'));
    }

    public function store(TraderCategoryRequest $request, TraderCategory $trader_category)
    {
        $trader_category->create($request->all());
        $url = $request->get('redirect_to' , route('trader_categories.index'));
        return redirect()->to($url);
    }

    public function edit(TraderCategory $trader_category, FormBuilder $formBuilder)
    {
        
        $form_tradercategory = $formBuilder->create('App\Http\Forms\TraderCategory', [
            'method' => 'PUT',
            'url' => route('trader_categories.update', ['id' => $trader_category->id]),
            'model' => $trader_category,
        ]);

        return view('layouts.partials.trader_categories.form', compact('form_tradercategory'));
    }

    public function update(TraderCategoryRequest $request, TraderCategory $trader_category)
    {
        $trader_category->fill($request->all());
        $trader_category->save();
        $url = $request->get('redirect_to' , route('trader_categories.index'));
        return redirect()->to($url);
    }

    public function destroy(Request $request, TraderCategory $trader_category)
    {
        $trader_category->delete();
        $url = route('trader_categories.index');
        $request->session()->flash('message', 'Algoritimo exclido com sucesso!');
        return redirect()->to($url);
    }
}
