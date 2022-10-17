<?php


class Richperson
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getPerson()
    {
        $this->db->query("SELECT * FROM RichestPeople");
        $result = $this->db->resultSet();
        return $result;
    }

    public function getSinglePerson($id)
    {
        $this->db->query("SELECT * FROM RichestPeople WHERE Id = :id");
        $this->db->bind(':id', $id, PDO::PARAM_INT);
        return $this->db->single();
    }

    public function deletePerson($id)
    {
        $this->db->query("DELETE FROM RichestPeople WHERE Id = :id");
        $this->db->bind("id", $id, PDO::PARAM_INT);
        return $this->db->execute();
    }
}
