<?php

class Richpersons extends Controller
{
    private $richpersonModel;

    public function __construct()
    {
        $this->richpersonModel = $this->model('Richperson');
    }

    public function index()
    {
        $richpersons = $this->richpersonModel->getPerson();

        $rows = '';
        foreach ($richpersons as $value) {
            $rows .= "<tr>
                            <td>$value->Name</td>
                            <td>$value->Networth</td>
                            <td>$value->MyAge</td>
                            <td>$value->Company</td>
                            <td><a href='" . URLROOT . "/richpersons/delete/$value->Id'>Delete X</a></td>
                          </tr>";
        }


        $data = [
            'title' => '<h1>De vijf rijkste mensen ter wereld</h1>',
            'persons' => $rows
        ];

        $this->view('richpersons/index', $data);
    }

    public function delete($id)
    {

        $this->richpersonModel->deletePerson($id);

        $data = [
            'deleteStatus' => "Het record met id $id is succesvol verwijderd"
        ];

        $this->view('countries/delete', $data);
        header("Refresh:2; url=" . URLROOT . "/richpersons/index");
    }
}
