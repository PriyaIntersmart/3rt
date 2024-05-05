<?php

namespace Modules\Admin\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Tokenization;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Admin\Http\Requests\TokenRequest;

class TokenController extends Controller
{

    public function edit()
    {
        $tokenization=Tokenization::first();
        return view('admin::token-content.edit',compact('tokenization'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TokenRequest $request, $id)
    {
      $tokenization=Tokenization::find($id);
      $tokenization->title_one=$request->title_one;
      $tokenization->title_two=$request->title_two;
      $tokenization->title_three=$request->title_three;
      $tokenization->title_four=$request->title_four;
      $tokenization->title_five=$request->title_five;
      $tokenization->title_six=$request->title_six;
      $tokenization->title_seven=$request->title_seven;
      $tokenization->title_eight=$request->title_eight;
      $tokenization->title_nine=$request->title_nine;
      $tokenization->title_ten=$request->title_ten;
      if ($tokenization->save()) {
        return to_route('tokenization.edit')->with('success', 'Tokenization  updated successfully!');
   }

   return to_route('tokenization.edit')->with('error', 'Failed to update Tokenization!');
}


}
