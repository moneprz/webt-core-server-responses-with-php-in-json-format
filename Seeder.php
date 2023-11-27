<?php
require 'OST.php';
require 'SONGS.php';


class Seeder{

    public function createOSTs() : array{
        $OSTs = [];

        $OSTsongs1 = [];

        $OSTsongs1 [0] = new Songs(1, "Stage Select", "Bomberman 64", 3, 7,46);
        $OSTsongs1 [1] = new Songs(2, "Green Garden", "Bomberman 64", 4, 8,4);
        $OSTsongs1 [2] = new Songs(3, "Blue Resort", "Bomberman 64", 5, 9,135);
        $OSTsongs1 [3] = new Songs(4, "Red Mountain", "Bomberman 64", 6,10, 185);

        $OSTs[0] = new OST(1,"Advertise", "Bomberman 64", 1997, $OSTsongs1);


        $OSTsongs2 = [];

        $OSTsongs2 [0] = new Songs(1, "Bob-omb Battelfield", "Super Mario", 2,6, 132);
        $OSTsongs2 [1] = new Songs(2, "Underwater Theme", "Super Mario", 3,7, 172);
        $OSTsongs2 [2] = new Songs(3, "My Favorite World", "Super Mario", 4,8, 180);
        $OSTsongs2 [3] = new Songs(4, "Ground Theme", "Super Mario", 5,9, 170);

        $OSTs[1] = new OST(2,"Super Mario Bros Theme Song", "Super Mario", 1997, $OSTsongs2);


        $OSTsongs3 = [];

        $OSTsongs3 [0] = new Songs(1, "Pallet Town's Theme", "Pokemon", 4, 8,452);
        $OSTsongs3 [1] = new Songs(2, "Pokemon Center", "Pokemon", 5, 9,305);
        $OSTsongs3 [2] = new Songs(3, "Pokemon Gym", "Pokemon", 6, 10,183);
        $OSTsongs3 [3] = new Songs(4, "Pewter City's Theme", "Pokemon", 7, 11,190);

        $OSTs[2] = new OST(3,"Opening", "Pokemon Blue", 1996, $OSTsongs3);

        return $OSTs;
    }

}
