<?php
function getTotal($handler) {
    $query = $handler->query("SELECT count(*) FROM Customers");
    $total = $query->fetch();
    return $total['0'];
}


function getNames($handler)
{
    $cnt=1;
    $query = $handler->query("SELECT * FROM Customers");

    while ($results = $query->fetch(PDO::FETCH_ASSOC)) {
      if ($cnt < 10) {
            $cnt = "0".$cnt;
        }

        $test = explode(' ',$results['ContactName']);
        echo "[".$cnt."] ".$test[1]. "<br />";
        $cnt++;
    }

}