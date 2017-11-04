# Brainly Scraper
Mendapatkan jawaban dari pertanyaanmu.

## Installasi via composer
```composer require ammarfaizi2/brainly```

## Contoh penggunaan
```php
<?php

require "src/Brainly.php";

use Brainly\Brainly;

$query = "siapa penemu lampu?";
$st = new Brainly($query);
$st->limit(10); // limit query
$result = $st->exec();

print_r($result);
```

## Hasil
```
Array
(
    [0] => Array
        (
            [content] => siapa penemu lampu neon
            [responses] => Array
                (
                    [0] => Array
                        (
                            [content] => <span>Georges Claude<br /><br />maaf klo salah</span>
                        )

                    [1] => Array
                        (
                            [content] => Georgeus Claude yg menemukan lampu neon
                        )

                )

        )

    [1] => Array
        (
            [content] => siapa penemu lampu ?<br />
            [responses] => Array
                (
                    [0] => Array
                        (
                            [content] => kalau tidak salah thomas alva
                        )

                    [1] => Array
                        (
                            [content] => Thomas Alva Edison<br />#maaf kalau salah <br />
                        )

                )

        )

    [2] => Array
        (
            [content] => siapa penemu lampu pijar?mohon dijawab^-^
            [responses] => Array
                (
                    [0] => Array
                        (
                            [content] => Penemunya adalah Thomas Alva Edison<br />semoga membantu kawan^_^
                        )

                    [1] => Array
                        (
                            [content] => thomas alva edison <br />mohon dijadikan jawaban terbaik ya<br />
                        )

                )

        )

    [3] => Array
        (
            [content] => siapa penemu lampu pijar
            [responses] => Array
                (
                    [0] => Array
                        (
                            [content] => thomas a.edishon .. <br /><br />eh lampu pijar tah 
                        )

                    [1] => Array
                        (
                            [content] => Penemu lampu pijar adalah Thomas Alfa Edison 
                        )

                )

        )

    [4] => Array
        (
            [content] => siapa penemu lampu neon
            [responses] => Array
                (
                    [0] => Array
                        (
                            [content] => Thomas Alva Edison.....
                        )

                    [1] => Array
                        (
                            [content] => Georges claude.maaf klo slh
                        )

                )

        )

    [5] => Array
        (
            [content] => siapa penemu lampu dan siapa penemu jodoh
            [responses] => Array
                (
                    [0] => Array
                        (
                            [content] => Kalau penemu lampu adalah Thomas Alfa Edison.<br />Kalau penemu jodoh gak tau,mungkin orang itu sendiri yang menemukan jodohnya
                        )

                    [1] => Array
                        (
                            [content] => Thomas Alva Edison penemu lampu kalau penemu jodoh hanya Tuhan yang tahu
                        )

                )

        )

    [6] => Array
        (
            [content] => siapa penemu lampu pertama kali?
            [responses] => Array
                (
                    [0] => Array
                        (
                            [content] => penemu kampu pertama kali = thomas alva edison
                        )

                    [1] => Array
                        (
                            [content] => Faktanya, Edison bukanlah seorang pionir pertama, tetapi mengembangkan sebuah eksperimen yang memperjelas tabung lampuhampa udara yang pernah didesain oleh seorang fisikawan asal Inggris, Joseph Wilson Swan.Thomas Alva Edison Penemu Bola Lampu Pijarpertama.
                        )

                )

        )

    [7] => Array
        (
            [content] => siapa penemu lampu?<br />tolong jawab
            [responses] => Array
                (
                    [0] => Array
                        (
                            [content] =>  dia adalah Thomas Alva Edison
                        )

                    [1] => Array
                        (
                            [content] => Thomas Alva Edison Beliau Menemukan Hasil Ciptaan Menbutuhkan 100 akli percobaan dan hanya 1 Yang Berhasil 
                        )

                )

        )

    [8] => Array
        (
            [content] => siapa penemu lampu listrik di dunia
            [responses] => Array
                (
                    [0] => Array
                        (
                            [content] => penemu lampu listrik di dunia adalah <span>Thomas Alva Edison</span>
                        )

                    [1] => Array
                        (
                            [content] => Thomas Alva edison<br /><br />Semoga membantu ....
                        )

                )

        )

    [9] => Array
        (
            [content] => siapa penemu lampu selain thomas alfa edison
            [responses] => Array
                (
                    [0] => Array
                        (
                            [content] => sebenar nya alfa edison itu hanya orang kedua pembuat lampu  yg pertama kali adalah sir joseph wilson swan ialah orang inggris ahli fisika dan kimia
                        )

                    [1] => Array
                        (
                            [content] => Namanya Joseph Wilson Swan.
                        )

                )

        )

)
```