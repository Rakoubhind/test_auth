<?php

namespace App\Http\Controllers;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){
        $students=Student::orderBy('id','DESC')->get();
        return view ('student',compact('students'));
    }
    public function store(Request $request){
        $students=new Student;
        $students->name=$request->name;
        $students->lname=$request->lname;
        $students->email=$request->email;
        $students->phone=$request->phone;
        $students->save();
    //   return redirect('/students');
return response()->json($students);

    }
    public function edit($id){
        $students=Student::find($id);
        return response()->json($students);
    }
    
 public function update(Request $request){
    $students=Student::find($request->id);
    $students->name=$request->name;
    $students->lname=$request->lname;
    $students->email=$request->email;
    $students->phone=$request->phone;
    $students->save();
//   return redirect('/students');
return response()->json($students);
 }

 public function delete($id){
    $students=Student::find($id);
    $students->delete();
    return response()->json(['success'=>'Etudiant supprimé']);

}
public function deletecheckedStudents(Request $request){
    $ids=$request->ids;
    Student::whereIn('id',$ids)->delete();
    return response()->json(['success'=>"Etudiant supprimé"]);

}
}
