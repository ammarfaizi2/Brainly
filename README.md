# Brainly Scraper
Scrape brainly.co.id

## Installasi via composer
```composer require ammarfaizi2/brainly```

## Contoh penggunaan
```php
<?php

require "src/Brainly.php";

use Brainly\Brainly;

$query = "siapa penemu lampu?";
$st = new Brainly($query);
$result = $st->exec();

if (count($result) === 0) {
    print "Not found!\n";
} else {
    print json_encode($result, JSON_PRETTY_PRINT);
}
```

## Hasil
```json
[
    {
        "content": "siapa penemu lampu sang penemu bola lampu pijar?",
        "answers": [
            "1.Thomas Alva Edision<br \/>2.Jeseph Wilson Swan<br \/>3.Hiram Maxim<br \/><br \/>semoga membantu yha;)"
        ]
    },
    {
        "content": "Siapakah Penemu Lampu ?<br \/>( Thomas Alva Edison adalah Penemu Lampu Pijar )\u200b",
        "answers": [
            "<p>Penemu lampu pertama kali adalah Sir Joseph Wilson Swan<\/p><p>Sebagian besar dari kita menganggap bahwa penemu lampu pijar adalah Thomas Alfa Edison. Sebenarnya hal itu salah. Ia bukanlah penemu lampu pijar, ia hanya memperbaiki sistem kerja lampu pijar sehingga dapat digunakan lebih lama.<\/p><p><\/p>"
        ]
    },
    {
        "content": "siapa penemu mobil dan penemu lampu",
        "answers": [
            "penemu mobil adalah gottlich daimler<br \/>penemu lampu adalah thomas alva edison<br \/><br \/>smoga brmnfaat :)<br \/><br \/>jdikan jwbn trbaik ya..<br \/>"
        ]
    },
    {
        "content": "siapa penemu lampu dan penemu sepeda ",
        "answers": [
            "Penemu lampu adalah Thomas Alva Edison.<br \/>Penemu sepeda adalah <span>Baron Karls Drais von Sauerbronn atau Karl Drais<br \/><br \/>Semoga membantu ^-^<br \/><\/span>",
            "penemu lampu: thomas alva edhison<br \/>penemu sepeda:\u00a0Baron karl Von Drais"
        ]
    },
    {
        "content": "siapa penemu lampu,dan siapa penemu handphone ?",
        "answers": [
            "penemu lampu : thomas alva edison<br \/>penemu hp : martin cooper<br \/>",
            "penemu lampu:THOMAS ALVA EDISON<br \/>penemu hp:MARTIN COOPER"
        ]
    },
    {
        "content": "siapa penemu lampu dan penemu telpon",
        "answers": [
            "penemu lampu : Thomas Alva Edison<br \/>penemu telepon Alexander Graham Bell<br \/>",
            "penemu lampu adalah Thomas Alva Edison\npenemu telepon adalah Alexander Graham Bell"
        ]
    },
    {
        "content": "siapa penemu lampu dan siapa penemu cinta",
        "answers": [
            "penemu lampu Thomas Alva Edison<br \/>",
            "penemu lampu= thomas alfa edison<br \/><br \/>"
        ]
    },
    {
        "content": "siapakah penemu pesawat dan penemu lampu?<strong><\/strong><br \/>",
        "answers": [
            "kalau pesawat gak tau :V<br \/>kalau lampa itu thomas alfa edison",
            "penemu pesawat : wright brother <br \/>penemu lampu : thomas alva edison<br \/>"
        ]
    },
    {
        "content": "siapa penemu lampu?<br \/>\nsiapa penemu radio?",
        "answers": [
            "thomas alva edinson ",
            "\u00a0lampu thomas alva edison, klo radio maaf sy nda tau :D"
        ]
    },
    {
        "content": "siapa penemu handphone dan penemu lampu",
        "answers": [
            "penemu telepon alexander graham bell, penemu lampu thomas alfa edison",
            "Penemu handphone = Martin Cooper<br \/>Penemu lampu = Thomas Alva Edison"
        ]
    },
    {
        "content": "siapa penemu lampu dan penemu sepeda",
        "answers": [
            "Penemu lampu : Thomas Alva Edison<br \/>Penemu sepeda :\u00a0<span>Karl Drais (Penemu pertama)<br \/><br \/><br \/><\/span>",
            "Penemu lampu : Thomas Alva Edison<br \/>Penemu sepeda :\u00a0<span>Karl Drais (Penemu pertama)<br \/><strong>Semoga Membantu...<\/strong><br \/><\/span>"
        ]
    },
    {
        "content": "siapa penemu lampu dan siapa penemu jodoh",
        "answers": [
            "Kalau penemu lampu adalah Thomas Alfa Edison.<br \/>Kalau penemu jodoh gak tau,mungkin orang itu sendiri yang menemukan jodohnya",
            "Thomas Alva Edison penemu lampu kalau penemu jodoh hanya Tuhan yang tahu"
        ]
    },
    {
        "content": "Kalau penemu lampu pijar adalah Thomas Alva  Edison, maka siapakah penemu lampu neon?",
        "answers": [
            "jawabanya adalah georges claude"
        ]
    },
    {
        "content": "Siapakah penemu Radio?Dan siapa penemu lampu lalu lintas?",
        "answers": [
            "penemu radio guglielmo marconi<br \/>penemu lampu lalu lintas garrett morgan",
            "penemu radio adalah Guglielmo Marconi<br \/>penemu lampu lalu lintas adalah Garrett Morgan "
        ]
    },
    {
        "content": "penemu lampu adalah ??",
        "answers": [
            "Thomas Alva Edison <br \/>semoga membantu",
            "penemu lampu adalah thomas alva edison , joseph swan , dan hiram maxim <br \/>semoga membantu :)"
        ]
    },
    {
        "content": "siapa yang penemu lampu????",
        "answers": [
            "Thomas Alva Edison penemunya",
            "thomas alva edison<br \/>maaf kalau salah"
        ]
    },
    {
        "content": "Siapakah Penemu Lampu",
        "answers": [
            "Penemuan lampu adalah Thomas Alfa Edison",
            "thomas alva edison<br \/>maaf klo slh"
        ]
    },
    {
        "content": "siapa penemu lampu??",
        "answers": [
            "thomas alpha edizon klau gag salah"
        ]
    },
    {
        "content": "siapakah penemu lampu ?",
        "answers": [
            "thomas alfa edison....",
            "thomas alva edison<br \/><br \/>jadikan jwbn terbaik ya"
        ]
    },
    {
        "content": "siapakah penemu lampu?",
        "answers": [
            "thomas alfa edison uuhdewasgjkk",
            "<strong>Thomas Alfa Edison<br \/><br \/><\/strong><strong>&lt;(Semoga membantu !)&gt;<\/strong><strong><br \/><\/strong>"
        ]
    },
    {
        "content": "siapakah penemu lampu",
        "answers": [
            "Thomas Alva Edison.<br \/>maaf jika salah",
            "Yg menemukan lampu adalah \nThomas Alfa Edison"
        ]
    },
    {
        "content": "Siapakah penemu lampu?",
        "answers": [
            "thomas alfa edison.<br \/><br \/>semoga membantu",
            "penemu lampu adalah Thomas Alva Edison"
        ]
    },
    {
        "content": "SIAPA PENEMU LAMPU ............................<br \/>",
        "answers": [
            "Thomas Alva Edison <br \/>maaf jika salah ",
            "penemu lampu ialah, Thomas Alva Edison"
        ]
    },
    {
        "content": "siapakah penemu lampu",
        "answers": [
            "Ialah \"Thomas Alva\u00a0Edison\""
        ]
    },
    {
        "content": "siapa penemu lampu? ",
        "answers": [
            "Thomas alfa edison<br \/><br \/>Semoga membantu <br \/><br \/>Terima kasih"
        ]
    },
    {
        "content": "siapa penemu lampu ?",
        "answers": [
            "Thomas Alva Edison<br \/><br \/>semoga membantu^^<br \/>",
            "Soal :<br \/>- Siapa penemu lampu? <br \/><br \/>Jawab :<br \/>- Thomas Alva Edison<br \/><br \/>#Maaf kalau salah "
        ]
    },
    {
        "content": "siapa penemu lAmpu???<br \/><br \/><br \/>",
        "answers": [
            "penemu lampu\u00a0thomas alfa edison. idola gue :D",
            "\u00a0penemu lampu adalah\u00a0Thomas Alfa Edison"
        ]
    },
    {
        "content": "siapakah penemu lampu?",
        "answers": [
            "Thomas Alfa Edison......?",
            "penemu lampu : thomas alva edison"
        ]
    },
    {
        "content": "siapa penemu lampu ?<br \/>",
        "answers": [
            "penemu lampu:  thomas alva edison",
            "Penemu lampu adalah Thomas Alfa Edison<br \/>"
        ]
    },
    {
        "content": "Siapa penemu lampu ?<br \/>",
        "answers": [
            "penemu lampu adalah\u00a0\u00a0albert einsten\u00a0<br \/><br \/>",
            "penemu bola lampu thomas alva edision<br \/>"
        ]
    },
    {
        "content": "siapakah penemu lampu?",
        "answers": [
            "JAWABANNYA ADALAH THOMAS ALPHA EDISON<br \/>",
            "Thomas Alva Edison adalah penemu dari Amerika dan merupakan satu dari penemu terbesar sepanjang sejarah.<br \/>Thomas Alva Edison telah mempatentkan sekitar dari 1.093 hasil penemuannya, termasuk bola lampu listrik dan gramophone, juga kamera film.<br \/><br \/>"
        ]
    },
    {
        "content": "siapa penemu lampu ?",
        "answers": [
            "penemu lampu :Thomas Alva Edison<br \/>",
            "Penemu Lampu Adalah\u00a0Thomas Alva Edison"
        ]
    },
    {
        "content": "siapa penemu lampu ?",
        "answers": [
            "Thomas alva edison adalh penemu lampu",
            "seorang anak yang dulunnya mempunyai keterbatasan pikiran, dan sempat dikeluari dari sekolahannya karena gurunya mengatakan dia sangat susah memahami apa yang telah diajarkan, dengan semangat ibunya yang besar pelan-pelan ibunya mengajar dia dengan sabar sehingga dia menjadi anak yang gemar membaca dialah yang mempunyai nama THOMAS ALPHA EDISON.."
        ]
    },
    {
        "content": "siapakah penemu lampu",
        "answers": [
            "Thomas Alva Edison.Klo g salah",
            "Thomas Alva Edison - Penemu Bola Lampu "
        ]
    },
    {
        "content": "siapa penemu lampu itu",
        "answers": [
            "thomas alva edison<br \/>maaf kalo salah",
            "Orang-orang biasanya mengenal Thomas Alva Edison sebagai penemu bola lampu. Tapi yang sebenarnya menemukan bola lampu adalah Joseph Wilson Swan. Edison hanya mengembangkan sebuah eksperimen dan memperjelas tabung lampu hampa udara yang di desain oleh Joseph Wilson Swan."
        ]
    },
    {
        "content": "siapa penemu lampu adalah?<br \/>",
        "answers": [
            "jawabannya thomos alfa edison ",
            "thomas alva edison hdjejene"
        ]
    },
    {
        "content": "Siapakah penemu lampu?",
        "answers": [
            "kalo lampu pijar thomas alfa edison",
            "thomas alfa edison<br \/><br \/>#semoga bisa membantu <br \/>\u00a0 \u00a0 \u00a0\u00a0 dan <br \/>\u00a0<br \/>bisa dijadikan yang terbaik\u00a0 <br \/>"
        ]
    },
    {
        "content": "siapakah penemu lampu",
        "answers": [
            "Penemu lampu adalah <strong>Thomas Alva Edison<\/strong><br \/>",
            "\u00a0nama penemu lampu = thomas alva edison<br \/>"
        ]
    },
    {
        "content": "siapakah penemu lampu?",
        "answers": [
            "<span>Thomas Alva Edison<br \/><br \/>\"semoga terbantu\"<\/span>",
            "\u00a0penemu lampu bernama thomas alva edison<br \/><br \/>"
        ]
    },
    {
        "content": "siapakah penemu lampu<br \/>",
        "answers": [
            "Thomas Alfa Edison\n..........",
            "Penemu lampu adalah Thomas Alva Edison"
        ]
    },
    {
        "content": "siapakah penemu lampu",
        "answers": [
            "Thomas alva edison <br \/>semoga membantu : ) <br \/><br \/>",
            "===&gt; Thomas alva edison "
        ]
    },
    {
        "content": "siapa penemu lampu? ",
        "answers": [
            "Thomas Alva Edison.<br \/><br \/><br \/>Maaf kalo salah dan semoga membantu",
            "Thomas Alva Edison. Penemu asal Amerika Serikat yang sangat produktif sekaligus juga pengusaha."
        ]
    },
    {
        "content": "siapa penemu lampu ?",
        "answers": [
            "penemu lampu adalah<br \/><br \/>Thomas Alva Edison<br \/><br \/>semoga membantu",
            "Penemu lampu adalah Thomas Alva Edison."
        ]
    },
    {
        "content": "siapakah penemu lampu ",
        "answers": [
            "thomas alfa edison<br \/>maaf kalau salah",
            "Jawaban Thomas Arison<br \/>semoga bermanfaat"
        ]
    },
    {
        "content": "siapakah penemu lampu?",
        "answers": [
            "A.Thomas Alva Edison<br \/><br \/>B.Joseph Wilson Swan<br \/><br \/>C.Hiram Maxim<br \/><br \/>#SMOGA MEMBANTU<br \/>JADIKAN SAYA YANG TERBAIK YAA"
        ]
    },
    {
        "content": "siapa penemu lampu?\u200b",
        "answers": [
            "<ul><li>Thomas Alva Edison<\/li><li>Joseph Wilson Swan<\/li><li>Hiram Maxim<\/li><\/ul>",
            "Penemu lampu adalah <br \/><br \/>Thomas Alva Edison penemu lampu modern<br \/><br \/>Semoga membantu : )"
        ]
    },
    {
        "content": "siapakah penemu lampu",
        "answers": [
            "Penemu bohlam lampu:<br \/>Thomas Alfa Edison"
        ]
    },
    {
        "content": "siapakah penemu lampu ?",
        "answers": [
            "TOMAS ALVA EDISON<br \/>#MAKASIH TOLONG JADIKAN JAWABAN TERBAIK",
            "Thomas alva Edinson<br \/>maaf jika salah kak &gt;_&lt;."
        ]
    },
    {
        "content": "siapakah penemu lampu",
        "answers": [
            "thomas alva...........",
            "penemu lampu adalah Thomas Alva "
        ]
    },
    {
        "content": "siapakah penemu lampu",
        "answers": [
            "albret enstein pememu bola lampu maaf kalo salah",
            "Thomas Alva Edison<br \/>Thomas Alva Edison 11 February 1847 - 18 Oktober 1931<br \/>Bola Lampu<br \/><br \/>Thomas Alva Edison adalah penemu dari Amerika dan merupakan satu dari penemu terbesar sepanjang sejarah. Edison mulai bekerja pada usia yang sangat muda dan terus bekerja hingga akhir hayatnya. Selama karirnya, Thomas Alva Edison telah mempatentkan sekitar dari 1.093 hasil penemuannya, termasuk bola lampu listrik dan gramophone, juga kamera film. "
        ]
    },
    {
        "content": "siapakah penemu lampu?",
        "answers": [
            "Thomas Alva Edison pada tahun 1870-an, dan dipatenkan pada bulan november 1978.<br \/>\" Semoga Membantu \"",
            "<strong>Ans:<\/strong><br \/>Lampu bohlam diciptakan oleh Thomas Alva Edison, paten penemuannya didaftarkan pada bulan November 1879.<br \/><br \/>Lampu pendar (lampu dengan gas di dalamnya, seperti lampu neon)\u00a0diciptakan oleh Nikola Tesla pada tahun 1893, di Chicago World's Columbian Exhibition."
        ]
    },
    {
        "content": "siapakah penemu lampu",
        "answers": [
            "lampu ; THOMAS ALFA EDISON",
            "thomas alfa edison..."
        ]
    },
    {
        "content": "Siapa penemu lampu? ",
        "answers": [
            "Thomas alva edison, albert einstein",
            "penemu bola lampu adalah thomas alva edison"
        ]
    },
    {
        "content": "Siapakah penemu Lampu ?",
        "answers": [
            "penemu lampu =\u00a0Thomas Alva Edison",
            "Thomas Alva edison , kalo james watt itu mesin uap"
        ]
    },
    {
        "content": "penemu lampu adalah?",
        "answers": [
            "Penemu lampu adalah <strong>Thomas Alva Edison.<\/strong><br \/>",
            "Penemu bola lampu adalah Thomas Alva Edison.<br \/><span>Thomas Alva Edison dilahirkan di Milan, Ohio pada tanggal 11 Februari 1847. Tahun 1854 orang tuanya pindah ke Port Huron, Michigan. Edison pun tumbuh besar di sana. Sewaktu kecil Edison hanya sempat mengikuti sekolah selama 3 bulan. Gurunya memperingatkan Edison kecil bahwa ia tidak bisa belajar di sekolah sehingga akhirnya Ibunya memutuskan untuk mengajar sendiri Edison di rumah. Kebetulan ibunya berprofesi sebagai guru. Hal ini dilakukan karena ketika di sekolah Edison termasuk murid yang sering tertinggal dan ia dianggap sebagai murid yang tidak berbakat.<\/span><br \/>"
        ]
    },
    {
        "content": "siapa penemu lampu ?<br \/>",
        "answers": [
            "kalau tidak salah thomas alva",
            "Thomas Alva Edison<br \/>#maaf kalau salah <br \/>"
        ]
    },
    {
        "content": "siapakah penemu lampu ",
        "answers": [
            "Thomas alfa edison menemukan lampu pijar\/bolam",
            "thomas alva edison<br \/>maaf ya kalo salah"
        ]
    },
    {
        "content": "siapakah penemu lampu yang sebenarnya?",
        "answers": [
            "Thomasa Alfa Edison adalah penemu lampu",
            "thomas itu penemu lampu jadi jawabanya adalh thomas yaaaaaaaa"
        ]
    },
    {
        "content": "siapakah penemu lampu?",
        "answers": [
            "Thomas Alfa Eddison.",
            "Thomas Alva Edison....<br \/>"
        ]
    },
    {
        "content": "siapa penemu lampu??",
        "answers": [
            "Penemu lampu : <br \/>=&gt; Thomas Alva Edison<br \/>=&gt; Joseph Swan<br \/>=&gt; Hiram Maxim<br \/><br \/>Maap klo salah",
            "Alessandro Volta<br \/>Penemu lampu sebelum Thomas Alva Edison"
        ]
    },
    {
        "content": "siapa penemu lampu.......<br \/>",
        "answers": [
            "<em>Penemu lampu adalah Thomas Alva Edison<\/em><br \/><em>Mohon maaf apabila ada kesalahan :)<\/em><br \/>",
            "Thomas Alva Edison adalah penemu lampu pijar<br \/>"
        ]
    },
    {
        "content": "Siapa penemu lampu ?",
        "answers": [
            "Thomas Alva Edison<br \/>semoga membantu :)",
            "Penemu lampu adalah Thomas Alva Edison.\nSemoga bisa membantu..."
        ]
    },
    {
        "content": "siapa penemu lampu????<br \/><br \/><br \/>",
        "answers": [
            "thomas alfa edison adalah penemu lampu<br \/>",
            "jawabannya :Thomas alfa edison"
        ]
    },
    {
        "content": "siapakah penemu lampu  ",
        "answers": [
            "james Watt ,,,,,,,,,,,,",
            "Penemu Lampu = Thomas Alva Edison<br \/>"
        ]
    },
    {
        "content": "Penemu Lampu Adalah...",
        "answers": [
            "Thomas Alva Edison<br \/><br \/>semoga membantu"
        ]
    },
    {
        "content": "siapa penemu lampu? ",
        "answers": [
            "thomas alva edison......",
            "penemunya\u00a0Thomas Alva Edison."
        ]
    },
    {
        "content": "siapa penemu lampu????",
        "answers": [
            "Thomas AlfA Edison<br \/>semoga membantuu",
            "sir james watt<br \/><br \/>maaf kalau salah dan semoga membnatu"
        ]
    },
    {
        "content": "siapakah penemu lampu",
        "answers": [
            "Lampu pijar kah??<br \/><br \/>Klo lampu pijar Thomas Alva Edison<br \/><br \/><br \/>Semoga membantu:D",
            "banyak yg berkata bahwa Thomas Alva Edison adalah penemu lampu pertama namun sebenarnya penemu lampu pertama adalah Joseph Wilson Swan ia awalnya tertarik namun setelah beberapa tahun setelahnya Joseph Wilson Swan sudah tidak tertarik lagi berbeda dengan Thomas A. Edison yg tertarik dan mengembangkan nya.<br \/>Kesimpulannya Joseph Wilson Swan adalah penemu lampu namun penemuan itu telah di gantikan oleh Thomas Alva Edison.<br \/><br \/>Semoga membantu"
        ]
    },
    {
        "content": "siapakah penemu lampu",
        "answers": [
            "Thomas alva edison <br \/>#Maafkloslh",
            "Yaitu Thomas Alva Ediso"
        ]
    },
    {
        "content": "siapakah penemu lampu",
        "answers": [
            "Thomas Alva Edison<br \/><br \/>Maaf kalau salah<br \/>",
            "Penemu lampu adalah Thomas Alfa Edison"
        ]
    },
    {
        "content": "Siapa penemu lampu? ",
        "answers": [
            "Faktanya, Edison bukanlah seorang pionir pertama, tetapi mengembangkan sebuah eksperimen yang memperjelas tabung\u00a0lampuhampa udara yang pernah didesain oleh seorang fisikawan asal Inggris, Joseph Wilson Swan.Thomas Alva Edison\u00a0Penemu\u00a0Bola\u00a0Lampu\u00a0Pijar pertama.",
            "Thomas Alva Edison\u00a0maaf klo salah"
        ]
    },
    {
        "content": "siapa penemu lampu \u200b",
        "answers": [
            "<p>Thomas Alva Edison<\/p><p>Joseph Wilson Swan<\/p><p>Hiram Maxim<\/p>",
            "Thomas Alva Edison <br \/>maaf klo salah "
        ]
    },
    {
        "content": "Penemu lampu adalah\u200b",
        "answers": [
            "<p>penemu lampu adalah Thomas Alva Edison<\/p>",
            "<p>Bola lampu ditemukan oleh<\/p><h2>Thomas Alva Edison<\/h2><p><\/p><p>Ia sering tidak berhasil dalam percobaannya hingga 10000 kali,<\/p><p>tetapi ia tetap gigih.<\/p>"
        ]
    },
    {
        "content": "siapa penemu lampu \u200b",
        "answers": [
            "<p>Joseph Wilson Swan adalah yang menemukan pertama kali<\/p><p>namun yang memperpopulerkannya adalah Thomas Alva Edison<\/p><p><\/p><p><\/p><p>PENJELASAN:<\/p><p><\/p><p>Pada 1860, seorang ilmuwan Inggris Joseph Swan memperoleh hak paten U.K. (United Kingdom) untuk lampu pijar filamen-karbon yang beroperasi dalam tekanan vakum. Swan menerima hak paten lain dari U.K. pada 1878 untuk lampu pijar filamen karbon yang beroperasi dalam vakum yang disempurnakan. Di Amerika Serikat, Edison mengerjakan salinan-salinan asli hak paten 1860 Swan. Dia mendirikan Edison Electric Light Company pada 1878 dan mematenkan pada 1879 sebuah versi yang lebih efisien dari penemuan Swan. Swan menggugat Edison atas pelanggaran hak paten dan Swan menang. Pada 1881, Swan mulai menjalankan perusahaannya, Swan Electric Light Company, dan mulai memasarkan produk bola lampu pijar. Pada 1883, Edison dan Swan bergabung, dan mendirikan Edison and Swan United Electric Light Company, biasa dikenal dengan nama Ediswan. Perusahaan gabungan tersebut menjual lampu-lampu pijar yang dikembangkan Swan pada 1881. Jadi, Swan adalah penemu bola lampu pijar, tetapi Edison menjadi orang yang lebih banyak mempopulerkan dan mengembangkan bola lampu pijar.<\/p>"
        ]
    },
    {
        "content": "siapa penemu lampu \u200b",
        "answers": [
            "Jawaban:<br \/>Penemu lampu adalah Thomas Edison<br \/><br \/>maafklosalah",
            "<p>jawabannya adalah..<\/p><p>THOMAS ALFA EDISON!!!<\/p><p>YEYEY!<\/p><p>semoga membantu!!<\/p>"
        ]
    },
    {
        "content": "siapa penemu lampu ?<br \/>",
        "answers": [
            "Thomas Alfa Edison...",
            "penemu lampu -&gt;Thomas Alva Edison"
        ]
    },
    {
        "content": "siapa penemu lampu ??",
        "answers": [
            "Penemu nya adalah\u00a0Thomas Alfa Edison",
            "thomas alfa edison klo gasalah"
        ]
    },
    {
        "content": "siapakah penemu lampu ",
        "answers": [
            "penemu lampu adalah\u00a0Thomas Alva Edison",
            "Penemu lampu adalah Thomas Alva Edison."
        ]
    },
    {
        "content": "penemu lampu??..................",
        "answers": [
            "Penemu lampu adalah Thomas Alva Edison <br \/><br \/><br \/><br \/><br \/>#CMIIW ",
            "Edison maaf kalo salah <br \/>"
        ]
    },
    {
        "content": "siapa penemu lampu ??",
        "answers": [
            "Thomas Alva Edison penemu lampu as ",
            "penemu lampu adalah <br \/><br \/>Nama : Thomas Alva Edison<br \/>tanggal lahir. : 11 - 2 - 1847<br \/>wafat. : 18 Oktober 1931<br \/>Asal : Amerika serikat"
        ]
    },
    {
        "content": "siapakah penemu lampu",
        "answers": [
            "Thomas Alva Edison<br \/><br \/>maafklo slh",
            "<p>Thomas alva edison yg menemukan lampu<\/p><br \/>"
        ]
    },
    {
        "content": "siapa penemu lampu ?",
        "answers": [
            "Pada peralihan abad 19 menuju abad 20,\u00a0penemu\u00a0asal Amerika Serikat yang sangat produktif sekaligus juga pengusaha, Thomas Alva Edison, mengembangkan alat-alat yang mengubah industri, komunikasi dan kehidupan sehari-hari, dari mulai bolalampu\u00a0listrik sampai kamera gambar bergerak.",
            "penemu lampu:<br \/>Thomas Alva Edison"
        ]
    },
    {
        "content": "Siapakah penemu lampu",
        "answers": [
            "penemunya adalah james watt",
            " penemu lampu adalah thomas alva edison"
        ]
    },
    {
        "content": "siapakah penemu lampu?",
        "answers": [
            "thomas alfa edison\u2026\u2026\u2026\u2026\u2026\u2026\u2026\u2026\u2026",
            "Penemu lampu pijar adalah Thomas Edison, Amerika<br \/>Penemu lampu neon adalah Irving Langmuir, Amerika"
        ]
    },
    {
        "content": "siapa penemu lampu ?",
        "answers": [
            "tomas alva edison kalo nga salah<br \/>",
            "<strong>Thomas Alfa Edison<\/strong><br \/><strong>..................................<\/strong><br \/>"
        ]
    },
    {
        "content": "Siapakah penemu lampu ?<br \/>",
        "answers": [
            "Penemu lampu adalah <u>Thomas Alva Edison<\/u>",
            "penemu lampu adalah =\u00a0Thomas Alva Edinson"
        ]
    },
    {
        "content": "siapakah penemu lampu?",
        "answers": [
            "penemu lampu James Watt",
            "penemu lampu thomas alva edison<br \/><br \/><br \/><br \/><br \/>"
        ]
    },
    {
        "content": "siapa penemu lampu ?? ",
        "answers": [
            "penemu bola lampu pijar pertamakali adalah Thomas Alfa Edison<br \/><br \/>",
            "thomas alfa edison adalah penemu bola lampu"
        ]
    },
    {
        "content": "siapakah penemu lampu?",
        "answers": [
            "penemu lampu adalah thomas alva edisen",
            " penemu lampu adalah thomas alva edison "
        ]
    },
    {
        "content": "siapakah penemu lampu",
        "answers": [
            "penemu lampu sepertinya\u00a0thomas alfa edison",
            "penemu bola lampu yaitu thomas alfha edison <br \/>"
        ]
    },
    {
        "content": "siapakah penemu lampu ?",
        "answers": [
            "penemu lampu adalah Thomas Alva Edison",
            "Penemu lampu adalah Thomas Alva Edison"
        ]
    },
    {
        "content": "siapakah penemu lampu?",
        "answers": [
            "Thomas Alfa edison<br \/><br \/>smoga membantu"
        ]
    },
    {
        "content": "siapa penemu lampu ?",
        "answers": [
            "Thomas Alva Edison<br \/>Jawaban Terbaik Ya",
            "thomas alva edison <br \/><br \/><br \/>jawaban pasti"
        ]
    },
    {
        "content": "siapakah penemu lampu",
        "answers": [
            " peneu lampu : thomas alva edison",
            "Thomas Alva Edison\u00a0<br \/>semoga membantu !"
        ]
    },
    {
        "content": "siapakah penemu lampu",
        "answers": [
            "thomas alva edison......",
            "Penemu bohlam pertama kali adalah joseph wilson swan bahwa thomas yang hanya mengembangkannya saja sesuai perkembangan zaman joseph wilson dilupakan dan dianganggap thomas lah yang menemukan pertama kali. Semoga bermanfaat"
        ]
    },
    {
        "content": "siapakah penemu lampu?!",
        "answers": [
            "Thomas Alva Edison<br \/>kalo ga salah<br \/>",
            "thomas alfa edisonnnn"
        ]
    },
    {
        "content": "siapakah penemu lampu?",
        "answers": [
            "penemu lampu : thomas alfa edison",
            "Penemunya adalah Thomas Alfa Edison"
        ]
    },
    {
        "content": "siapakah penemu lampu",
        "answers": [
            "Thomas Alva Edison<br \/><br \/>1847\u20131931<br \/><br \/><br \/><br \/>Alessandro Volta<br \/><br \/>1745\u20131827<br \/><br \/><br \/>Semoga membantu <br \/>",
            "thomas alva edison<br \/>1847-1931<br \/><br \/><br \/>alessandro volta<br \/>1745-1827"
        ]
    },
    {
        "content": "siapakah penemu lampu?",
        "answers": [
            "Penemu lampu ialah Thomas Alva Edison.",
            "Joseph Wilson Swan dan disempurnakan oleh thomas alva edison <br \/>"
        ]
    },
    {
        "content": "Siapa penemu lampu ?",
        "answers": [
            "kalo gak salah james watt",
            "Thomas Alva Edision.\u00a0"
        ]
    }
]
```