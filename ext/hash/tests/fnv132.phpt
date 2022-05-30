--TEST--
Hash: FNV132 algorithm
--FILE--
<?php

function R10($t) {
    return str_repeat($t, 10);
}

function R500($t) {
    return str_repeat($t, 500);
}

$tests = array(
    array( "", "811c9dc5" ),
    array( "a", "050c5d7e" ),
    array( "b", "050c5d7d" ),
    array( "c", "050c5d7c" ),
    array( "d", "050c5d7b" ),
    array( "e", "050c5d7a" ),
    array( "f", "050c5d79" ),
    array( "fo", "6b772514" ),
    array( "foo", "408f5e13" ),
    array( "foob", "b4b1178b" ),
    array( "fooba", "fdc80fb0" ),
    array( "foobar", "31f0b262" ),
    array( "\0", "050c5d1f" ),
    array( "a\0", "70772d5a" ),
    array( "b\0", "6f772bc7" ),
    array( "c\0", "6e772a34" ),
    array( "d\0", "6d7728a1" ),
    array( "e\0", "6c77270e" ),
    array( "f\0", "6b77257b" ),
    array( "fo\0", "408f5e7c" ),
    array( "foo\0", "b4b117e9" ),
    array( "foob\0", "fdc80fd1" ),
    array( "fooba\0", "31f0b210" ),
    array( "foobar\0", "ffe8d046" ),
    array( "ch", "6e772a5c" ),
    array( "cho", "4197aebb" ),
    array( "chon", "fcc8100f" ),
    array( "chong", "fdf147fa" ),
    array( "chongo", "bcd44ee1" ),
    array( "chongo ", "23382c13" ),
    array( "chongo w", "846d619e" ),
    array( "chongo wa", "1630abdb" ),
    array( "chongo was", "c99e89b2" ),
    array( "chongo was ", "1692c316" ),
    array( "chongo was h", "9f091bca" ),
    array( "chongo was he", "2556be9b" ),
    array( "chongo was her", "628e0e73" ),
    array( "chongo was here", "98a0bf6c" ),
    array( "chongo was here!", "b10d5725" ),
    array( "chongo was here!\n", "dd002f35" ),
    array( "ch\0", "4197aed4" ),
    array( "cho\0", "fcc81061" ),
    array( "chon\0", "fdf1479d" ),
    array( "chong\0", "bcd44e8e" ),
    array( "chongo\0", "23382c33" ),
    array( "chongo \0", "846d61e9" ),
    array( "chongo w\0", "1630abba" ),
    array( "chongo wa\0", "c99e89c1" ),
    array( "chongo was\0", "1692c336" ),
    array( "chongo was \0", "9f091ba2" ),
    array( "chongo was h\0", "2556befe" ),
    array( "chongo was he\0", "628e0e01" ),
    array( "chongo was her\0", "98a0bf09" ),
    array( "chongo was here\0", "b10d5704" ),
    array( "chongo was here!\0", "dd002f3f" ),
    array( "chongo was here!\n\0", "1c4a506f" ),
    array( "cu", "6e772a41" ),
    array( "cur", "26978421" ),
    array( "curd", "e184ff97" ),
    array( "curds", "9b5e5ac6" ),
    array( "curds ", "5b88e592" ),
    array( "curds a", "aa8164b7" ),
    array( "curds an", "20b18c7b" ),
    array( "curds and", "f28025c5" ),
    array( "curds and ", "84bb753f" ),
    array( "curds and w", "3219925a" ),
    array( "curds and wh", "384163c6" ),
    array( "curds and whe", "54f010d7" ),
    array( "curds and whey", "8cea820c" ),
    array( "curds and whey\n", "e12ab8ee" ),
    array( "cu\0", "26978453" ),
    array( "cur\0", "e184fff3" ),
    array( "curd\0", "9b5e5ab5" ),
    array( "curds\0", "5b88e5b2" ),
    array( "curds \0", "aa8164d6" ),
    array( "curds a\0", "20b18c15" ),
    array( "curds an\0", "f28025a1" ),
    array( "curds and\0", "84bb751f" ),
    array( "curds and \0", "3219922d" ),
    array( "curds and w\0", "384163ae" ),
    array( "curds and wh\0", "54f010b2" ),
    array( "curds and whe\0", "8cea8275" ),
    array( "curds and whey\0", "e12ab8e4" ),
    array( "curds and whey\n\0", "64411eaa" ),
    array( "line 1\nline 2\nline 3", "31ae8f83" ),
    array( "chongo <Landon Curt Noll> /\\../\\", "995fa9c4" ),
    array( "chongo <Landon Curt Noll> /\\../\\\0", "35983f8c" ),
    array( "chongo (Landon Curt Noll) /\\../\\", "5036a251" ),
    array( "chongo (Landon Curt Noll) /\\../\\\0", "97018583" ),
    array( "http://antwrp.gsfc.nasa.gov/apod/astropix.html", "b4448d60" ),
    array( "http://en.wikipedia.org/wiki/Fowler_Noll_Vo_hash", "025dfe59" ),
    array( "http://epod.usra.edu/", "c5eab3af" ),
    array( "http://exoplanet.eu/", "7d21ba1e" ),
    array( "http://hvo.wr.usgs.gov/cam3/", "7704cddb" ),
    array( "http://hvo.wr.usgs.gov/cams/HMcam/", "d0071bfe" ),
    array( "http://hvo.wr.usgs.gov/kilauea/update/deformation.html", "0ff3774c" ),
    array( "http://hvo.wr.usgs.gov/kilauea/update/images.html", "b0fea0ea" ),
    array( "http://hvo.wr.usgs.gov/kilauea/update/maps.html", "58177303" ),
    array( "http://hvo.wr.usgs.gov/volcanowatch/current_issue.html", "4f599cda" ),
    array( "http://neo.jpl.nasa.gov/risk/", "3e590a47" ),
    array( "http://norvig.com/21-days.html", "965595f8" ),
    array( "http://primes.utm.edu/curios/home.php", "c37f178d" ),
    array( "http://slashdot.org/", "9711dd26" ),
    array( "http://tux.wr.usgs.gov/Maps/155.25-19.5.html", "23c99b7f" ),
    array( "http://volcano.wr.usgs.gov/kilaueastatus.php", "6e568b17" ),
    array( "http://www.avo.alaska.edu/activity/Redoubt.php", "43f0245b" ),
    array( "http://www.dilbert.com/fast/", "bcb7a001" ),
    array( "http://www.fourmilab.ch/gravitation/orbits/", "12e6dffe" ),
    array( "http://www.fpoa.net/", "0792f2d6" ),
    array( "http://www.ioccc.org/index.html", "b966936b" ),
    array( "http://www.isthe.com/cgi-bin/number.cgi", "46439ac5" ),
    array( "http://www.isthe.com/chongo/bio.html", "728d49af" ),
    array( "http://www.isthe.com/chongo/index.html", "d33745c9" ),
    array( "http://www.isthe.com/chongo/src/calc/lucas-calc", "bc382a57" ),
    array( "http://www.isthe.com/chongo/tech/astro/venus2004.html", "4bda1d31" ),
    array( "http://www.isthe.com/chongo/tech/astro/vita.html", "ce35ccae" ),
    array( "http://www.isthe.com/chongo/tech/comp/c/expert.html", "3b6eed94" ),
    array( "http://www.isthe.com/chongo/tech/comp/calc/index.html", "445c9c58" ),
    array( "http://www.isthe.com/chongo/tech/comp/fnv/index.html", "3db8bf9d" ),
    array( "http://www.isthe.com/chongo/tech/math/number/howhigh.html", "2dee116d" ),
    array( "http://www.isthe.com/chongo/tech/math/number/number.html", "c18738da" ),
    array( "http://www.isthe.com/chongo/tech/math/prime/mersenne.html", "5b156176" ),
    array( "http://www.isthe.com/chongo/tech/math/prime/mersenne.html#largest", "2aa7d593" ),
    array( "http://www.lavarnd.org/cgi-bin/corpspeak.cgi", "b2409658" ),
    array( "http://www.lavarnd.org/cgi-bin/haiku.cgi", "e1489528" ),
    array( "http://www.lavarnd.org/cgi-bin/rand-none.cgi", "fe1ee07e" ),
    array( "http://www.lavarnd.org/cgi-bin/randdist.cgi", "e8842315" ),
    array( "http://www.lavarnd.org/index.html", "3a6a63a2" ),
    array( "http://www.lavarnd.org/what/nist-test.html", "06d2c18c" ),
    array( "http://www.macosxhints.com/", "f8ef7225" ),
    array( "http://www.mellis.com/", "843d3300" ),
    array( "http://www.nature.nps.gov/air/webcams/parks/havoso2alert/havoalert.cfm", "bb24f7ae" ),
    array( "http://www.nature.nps.gov/air/webcams/parks/havoso2alert/timelines_24.cfm", "878c0ec9" ),
    array( "http://www.paulnoll.com/", "b557810f" ),
    array( "http://www.pepysdiary.com/", "57423246" ),
    array( "http://www.sciencenews.org/index/home/activity/view", "87f7505e" ),
    array( "http://www.skyandtelescope.com/", "bb809f20" ),
    array( "http://www.sput.nl/~rob/sirius.html", "8932abb5" ),
    array( "http://www.systemexperts.com/", "0a9b3aa0" ),
    array( "http://www.tq-international.com/phpBB3/index.php", "b8682a24" ),
    array( "http://www.travelquesttours.com/index.htm", "a7ac1c56" ),
    array( "http://www.wunderground.com/global/stations/89606.html", "11409252" ),
    array( R10("21701"), "a987f517" ),
    array( R10("M21701"), "f309e7ed" ),
    array( R10("2^21701-1"), "c9e8f417" ),
    array( R10("\x54\xc5"), "7f447bdd" ),
    array( R10("\xc5\x54"), "b929adc5" ),
    array( R10("23209"), "57022879" ),
    array( R10("M23209"), "dcfd2c49" ),
    array( R10("2^23209-1"), "6edafff5" ),
    array( R10("\x5a\xa9"), "f04fb1f1" ),
    array( R10("\xa9\x5a"), "fb7de8b9" ),
    array( R10("391581216093"), "c5f1d7e9" ),
    array( R10("391581*2^216093-1"), "32c1f439" ),
    array( R10("\x05\xf9\x9d\x03\x4c\x81"), "7fd3eb7d" ),
    array( R10("FEDCBA9876543210"), "81597da5" ),
    array( R10("\xfe\xdc\xba\x98\x76\x54\x32\x10"), "05eb7a25" ),
    array( R10("EFCDAB8967452301"), "9c0fa1b5" ),
    array( R10("\xef\xcd\xab\x89\x67\x45\x23\x01"), "53ccb1c5" ),
    array( R10("0123456789ABCDEF"), "fabece15" ),
    array( R10("\x01\x23\x45\x67\x89\xab\xcd\xef"), "4ad745a5" ),
    array( R10("1032547698BADCFE"), "e5bdc495" ),
    array( R10("\x10\x32\x54\x76\x98\xba\xdc\xfe"), "23b3c0a5" ),
    array( R500("\x00"), "fa823dd5" ),
    array( R500("\x07"), "0c6c58b9" ),
    array( R500("~"), "e2dbccd5" ),
    array( R500("\x7f"), "db7f50f9" ),
);

$i = 0;
$pass = true;
foreach($tests as $test) {
    $result = hash('fnv132', $test[0]);
    if ($result != $test[1]) {
        echo "Iteration " . $i . " failed - expected '" . $test[1] . "', got '" . $result . "' for '" . $test[1] . "'\n";
        $pass = false;
    }
    $i++;
}

if($pass) {
    echo "PASS";
}
?>
--EXPECT--
PASS