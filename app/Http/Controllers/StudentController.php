<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Session;
class StudentController extends Controller
{

 function create(){
 	$show = array('title' =>'Create Page');
 	return view ('students/create',$show);
 }
 function submit(Request $request){
 	$name = $request->get('name');
 	$course = $request->get('course');
 	$rollno = $request->get('rollno');
 	$dob = $request->get('dob');
 	$contactno = $request->get('contactno');

 	$students = Student::create([
	     'name'   => $name,
	     'course'  => $course,
	     'rollno' => $rollno,
	     'dob'    => $dob,
	     'contactno' => $contactno,
 	]);
 	if($students){
 		return redirect('students')->with('success','student inserted successfully');
 	}
 	else{
 		return  redirect()->back()->with('error','something went wrong');  
 	}
 	
 }
  function view(){
    	$students = Student::get()->toarray();
    	$show  = array('title' =>'Students List','tag'=>'This is Students List','data'=>$students);
   		return view('students/list',$show);
}
   function edit($id){
   	  $student = Student::find($id)->toarray();      
   	  $show = array('title' =>'Edit Page','data'=>$student);
   	  return view('students/edit',$show);
       
   }
   function update(Request $request){
   	$name = $request->get('name');
   	$course = $request->get('course');
   	$rollno = $request->get('rollno');
   	$dob = $request->get('dob');
   	$contactno = $request->get('contactno');
   	$id = $request->get('id');

   	$update = Student::find($id);
   	$update->name = $name;
   	$update->course = $course;
   	$update->rollno = $rollno;
   	$update->dob = $dob;
   	$update->contactno = $contactno;
   	$update->save();

   	if($update){
   		return redirect('students')->with('updatesuccess','Student Updated Sucessfully');
   	}
   	else{
   		return redirect()->back()->with()('error','Not Updated');
   	}
   }

   function destroy($id){
   	$delete = Student::find($id);
   	$delete->delete();
   if($delete){
           return redirect('students')->with('deletesuccess','Student record Deleted');
   }else{
   	return redirect()->back()->with()('error','Not Deleted');
   }
   }
  }

