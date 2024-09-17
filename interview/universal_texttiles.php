<?php

class LanguageStudent
{
    public $languages = array();
    
    public function getLanguages() {
        return $this->languages;
    }

    public function addLanguage($language) {
        array_push($this->languages, $language);
    }
}

class LanguageTeacher extends LanguageStudent
{
    public function teach(LanguageStudent $studens, $languageToLearn) {
        if(in_array($languageToLearn, $this->languages)) {
            array_push($studens->languages, $languageToLearn);
            return true;
        } else {
            return false;
        }
    }
}

$teacher = new LanguageTeacher();
$teacher->addLanguage('English');
$student = new LanguageStudent();
$teacher->teach($student, 'English');
print_r($student->getLanguages());