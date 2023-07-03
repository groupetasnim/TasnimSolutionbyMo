<?php
namespace App\Http\Controllers;
use App\Models\User;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
class StudentController extends Controller
{
    
    public function usersList()
    {
        $students = User::all();
        return view('home', compact('students'));
    }
    public function removeUser($id)
    {
        $delete = User::where('id', $id)->delete();
        if ($delete == $id) {
            $success = true;
            $message = "Student successfully removed!";
        } else {
            $success = true;
            $message = "Student does not exist!";
        }
        //  Return response
        return response()->json([
            'success' => $success,
            'message' => $message,
        ]);
    }
}