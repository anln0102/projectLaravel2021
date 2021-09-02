<?php

namespace App\Http\Controllers\Pages;

use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Sermina;
use Illuminate\Http\Request;
use App\Traits\UploadTrait;
use App\Models\Information;
use Illuminate\Database\Eloquent\Builder;
use App\Rules\MatchOldPassword;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;


class ProfileController extends Controller
{
	use UploadTrait;

	public function __construct()
	{
		$this->middleware('auth');
	}

	public function index()
	{
		$sermina = Sermina::All();
		$infors = Information::whereHas('students', function (Builder $query) {
			$query->where('students_id', '=', Auth::user()->id);
		})->orderBy('date','desc')->get();
		$ranks = Information::withCount('students')
	      ->orderBy('students_count', 'desc')->limit(1)->get();
	    $lists = Information::has('students')->withCount('students')->orderBy('students_count','desc')->get();
		return view('page.profile',compact('infors','ranks','lists','sermina'));
	}

	public function cancelmoshikomi(Request $request)
    {
        $infor = Information::find( $request->get('infor_id'));
        $infor->students()->detach($request->get('student_id'));
    return redirect()->back()->with('success', '削除しました！');
    }

	public function updateProfile(Request $request)
	{
        // Form validation
		$request->validate([
			'name'        =>  'required',
		]);

        // Get current user
		$user = User::findOrFail(auth()->user()->id);
        // Set user name
		$user->name = $request->input('name');
		$user->grade = $request->input('grade');
		$user->seminar_room = $request->input('seminar_room');
        // Check if a profile image has been uploaded
		if ($request->has('picture')) {
            // Get image file
			$image = $request->file('picture');
            // Make a image name based on user name and current timestamp
			$name = str_slug($request->input('name')).'_'.time();
            // Define folder path
			$folder = '/uploads/images/user/';
            // Make a file path where image will be stored [ folder path + file name + file extension]
			$filePath = $folder . $name. '.' . $image->getClientOriginalExtension();
            // Upload image
			$this->uploadOne($image, $folder, 'public', $name);
            // Set user profile image path in database to filePath
			$user->picture = $filePath;
		}
		$user->save();
		return redirect()->back()->with('success','会員情報更新しました！');
	}
	public function passwordchange(Request $request)
	{
		$request->validate([
			'current_password' => ['required', new MatchOldPassword],
			'new_password' => ['required'],
			'new_confirm_password' => ['same:new_password'],
		]);
		$user = User::findOrFail(auth()->user()->id);
		User::find(auth()->user()->id)->update(['password'=> Hash::make($request->new_password)]);
		$user->save();
		return redirect()->back()->with('success','パスワード更新しました！');

	}
}
