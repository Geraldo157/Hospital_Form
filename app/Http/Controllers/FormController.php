<?php

namespace App\Http\Controllers;

use App\Models\Form;
use Illuminate\Http\Request;

class FormController extends Controller
{   

    public readonly Form $form;

    public function __construct(){
        $this->form = new Form();
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $forms = $this->form->all();
        return view('form.forms', ['forms' => $forms]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('form.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $created = $this->form->create($request->except(['_token']));
        
        if($created) {
            return redirect()->back()->with('message', 'Sucessfully Created!');
        }

        return redirect()->back()->with('message', 'Error creating!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Form $form)
    {
        return view('form.show_form', ['form' => $form]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Form $form)
    {
        return view('form.edit_form', ['form' => $form]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $newForm = $this->form->where('id', $id);
        $updated = $newForm->update($request->except(['_token', '_method']));
        
        if($updated) {
            return redirect()->back()->with('message', 'Sucessfully Updated!');
        }

        return redirect()->back()->with('message', 'Error updating!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->form->where('id', $id)->delete();
        return redirect()->route('forms.index');
    }
}
