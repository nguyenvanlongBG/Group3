<?php
class ManagerAccount extends Controller
{

    public function show()
    {
        $subjects = $this->model("SubjectModel");
        $this->render("products/", ["subjects" => $subjects->getSubject()]);

    }
    public function update()
    {

    }

}
