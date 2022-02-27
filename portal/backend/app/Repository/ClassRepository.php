<?php

namespace App\Repository;

use App\Model\DepartmentModel;
use App\Model\StudentModel;
use App\Service\AdminService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ClassRepository
{
    public function createClass(DepartmentModel $DepartmentModel)
    {
        $AdminService = new AdminService();
        $DepartmentModel->save();

        // UPDATE THE TEACHER ASSIGNED CLASS
        if ($DepartmentModel->class_teacher != "-") {
            $this->removeTeacherFromClass($DepartmentModel->class_teacher);
            $AdminService->updateTeacherClass($DepartmentModel->class_teacher, $DepartmentModel->id);
        }
        return response()->json(['success' => true, 'message' => 'Class was created successfully.']);
    }

    public function editClass(Request $request)
    {
        $AdminService = new AdminService();

        $DepartmentModel = DepartmentModel::find($request->class_id);
        $DepartmentModel->class_name =  $request->class_name;
        $DepartmentModel->class_sector =  $request->class_sector;
        $DepartmentModel->class_teacher =  $request->class_teacher;
        // REMOVE CLASS FROM PREVIOUS TEACHER
        if ($request->class_teacher != "-") {
            $AdminService->removeClassFromTeacher($request->class_id);
            $this->removeTeacherFromClass($DepartmentModel->class_teacher);
        }
        $DepartmentModel->save();
        // UPDATE THE TEACHER ASSIGNED CLASS
        if ($request->class_teacher != "-") {
            $AdminService->updateTeacherClass($request->class_teacher, $request->class_id);
        }
        return response()->json(['success' => true, 'message' => 'Class updated successfully.']);
    }

    public function removeTeacherFromClass($teacher_id)
    {
        $DepartmentModel =  DepartmentModel::where('class_teacher', $teacher_id)->first();
        if ($DepartmentModel != "") {
            log::debug($DepartmentModel);
            $DepartmentModel->class_teacher = "-";
            $DepartmentModel->save();
        }
    }

    public function getAllClass()
    {
        $classes = DepartmentModel::with('class_teacher')->get();
        foreach ($classes as $class) {
            $student_no =  $this->getNumberOfStudent($class->id);
            $class['student_no'] = $student_no;
        }

        return $classes;
    }


    public function getNumberOfStudent($class_id)
    {
        return StudentModel::where('class', $class_id)->count();
    }

    public function deleteClass($class_id)
    {
        $class = DepartmentModel::find($class_id);
        $class->delete();
        return response()->json(['success' => true, 'message' => 'Class was deleted successfully.']);
    }

    public function searchClass($class_name)
    {
        //     ->orWhere('name', 'like', '%' . Input::get('name') . '%')->get();
        return  DepartmentModel::where('class_name', 'like', '%' . $class_name . '%')->with("class_teacher")->get();
    }
}
