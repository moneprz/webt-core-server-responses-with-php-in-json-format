<?php



require 'seeder.php';

header('Content-type: application/json');
class TestOSTsApi
{

    public function handleRequest()
    {
        if (isset($_GET['ost_id'])) {
            $ostId = $_GET['ost_id'];
            $this->outputSingleOST($ostId);
        } else {
            $this->outputAllOSTs();
        }
    }


    public function outputSingleOST($ostId)
    {
        $seeder = new Seeder();
        $osts = $seeder->createOSTs();

        foreach ($osts as $ost) {
            if ($ost->getID() == $ostId) {
                echo json_encode($ost, JSON_PRETTY_PRINT);
                return;
            }
        }
        echo json_encode(["error" => "OST not found"], JSON_PRETTY_PRINT);
    }

    public function outputAllOSTs()
    {
        $seeder = new Seeder();
        $osts = $seeder->createOSTs();

        echo json_encode($osts, JSON_PRETTY_PRINT);
    }
}

$testOSTApi = new TestOSTsApi();
$testOSTApi->handleRequest();
