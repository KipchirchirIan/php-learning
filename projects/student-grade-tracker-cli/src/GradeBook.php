<?php

declare(strict_types=1);

class GradeBook
{
    /** @var Student[]  */
    public array $students;

    public function addStudent(Student $student)
    {
        $this->students[] = $student;
    }

    public function listGrades(): void
    {
        foreach($this->students as $student) {
            $name = $student->getName();
            $average = number_format($student->getAverageGrade(), 2);
            $letter = $student->assignLetterGrade();

            echo "$name - Avg: $average - Grade: $letter\n";
        }
    }
}