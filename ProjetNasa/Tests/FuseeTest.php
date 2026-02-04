<?php
use PHPUnit\Framework\TestCase;
use App\src\Fusee;

class FuseeTests extends TestCase {

    public function testEtatInitial(){
        
        $fusee = new FuseeTests ("Ariane");

        $this->assertEquals("Ariane", $fusee->getNom());

        $this->assertEmpty($fusee->getEquipage());
    }

    public function testErreurCarburant(){

        $fusee = new FuseeTests("Ariane");

        $this->expectException(\Exception::class);

        $this->expectExceptionMessage("Pas de siphonage !");

        $fusée->ajouterCarburant(-10);
    }

    public function testEquipage(){

        $fusee = new FuseeTests("Ariane");

        $fusee->embarquerAstronaute("Thomas");

        $this->assertContains("Thomas", $fusée->getEquipage());
    }

    public function fournisseurPortee(){
        return [
            [0, 0],
            [100, 250],
            [1000, 2500]
        ];
    }

     /**
     * @dataProvider fournisseurPortee
     */
    public function testCalculPortee($litres, $attendu){

        $fusee = new FuseeTests("Ariane");

        $this->assertEquals($attendu, $fusée->calculerPortee($carburant, $charge));
    }


}

?>