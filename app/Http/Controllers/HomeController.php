<?php

namespace App\Http\Controllers;
use Nahid\Talk\Facades\Talk;
use Nahid\Talk\Middleware\TalkMiddleware;
use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('talk');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        return view('home')->with('posts', $user->posts, auth()->user()->id);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'profile_image' => 'image|nullable|max:1999'
        ]);

        // Handle File Upload
        if ($request->hasFile('profile_image')) {
            // Get filename with the extension
            $filenameWithExt = $request->file('profile_image')->getClientOriginalName();
            // Get just the filename with php method pathinfo
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //Get just the ext
            $extension = $request->file('profile_image')->getClientOriginalExtension();
            // Filename to store with timestamp to make it unique
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            // Upload the image
            $path = $request->file('profile_image')->storeAs('public/profile_images', $fileNameToStore);
        } else {
            $fileNameToStore = $request->file('images/captain.png');
        }


        $user = User::find($id);
        $user->profile_image = $fileNameToStore;
        $user->save();
        return redirect('/home');
    }

    public function inbox()
    {
        Talk::setAuthUserId(auth()->user()->id);
        $id = 1;
       /* $message = '';*/
        $message = Talk::sendMessage($id, 'this is a message');
    /*    $inboxes = Talk::getInbox();*/
        if ($message) {
            return response()->json(['status'=>'success', 'data'=>$message], 200);
        }
        dd('This did not work');
        /*return view('messages.threads', compact('inboxes'));*/
    }

}
