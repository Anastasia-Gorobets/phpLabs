<?php
require_once 'ServiceStation.php';

class CatalogTransport
{
    private $catalog = [];

    public function addTransport(Transport $t)
    {
        $this->catalog[] = $t;
    }

    public function showCatalog()
    {

        foreach ($this->catalog as $key => $val) {
            echo "<br><div class='service'>" . $key . "</div><br>";
            foreach ($val as $tr) {
                echo "<div class='transport'>" . $tr->getName() . ", " . $tr->getType() . ", " . $tr->getWeight() . ", " . $tr->getCarcase() . ", " .
                    $tr->getEngine() . ", " . $tr->getChassis() . "</div><br>";
            }
        }

    }

    public function groupByService()
    {
        if (empty($this->catalog))
            return false;
        $groupedCatalogs = [];
        foreach ($this->catalog as $catalog) {
            $groupedCatalogs[$catalog->getService()->getName()][] = $catalog;
        }
        $this->catalog = $groupedCatalogs;
    }

}