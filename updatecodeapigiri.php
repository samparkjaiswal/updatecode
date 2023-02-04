public function updateProfile(Request $request)
    {  
        $id=Auth::id();
       $update=User:: find($id);
       if(isset($request['name']) && !empty($request['name']))
       $update->name=$request['name'];

       if(isset($request['mobile']) && !empty($request['mobile']))
       $update->mobile=$request['mobile'];

       if(isset($request['gender']) && !empty($request['gender']))
    

   Route::post('/updateProfile',[apiController::class,'updateProfile']);