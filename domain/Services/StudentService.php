<?php

namespace domain\Services;

use App\Models\Student;

class StudentService
{
    protected $student;

    public function __construct()
    {
        $this->student = new Student();
    }

    public function all()
    {
        return $this->student->all();
    }

    public function store($data)
    {
        $this->student->create($data);
    }

    public function view()
    {
        $response['students'] = $this->student->all();
    }

    public function delete($student_id)
    {
        $student = $this->student->find($student_id);
        $student->delete();
    }

    public function status($student_id)
    {
        $student = $this->student->find($student_id);
        $student->status = 1;
        $student->update();
    }

    public function get($student_id)
    {
        return $this->student->find($student_id);
    }

    public function update(array $data, $student_id)
    {
        $student = $this->student->find($student_id);
        // $student->update($this->edit($student, $data));

        $student->name = $data['name'];
        $student->age = $data['age'];
        $student->update();
    }

    protected function edit(Student $student, $data)
    {
        return array_merge($student->toArray(), $data);
    }
}
