<?php
$ name  =  " Bunga Allysah Gardenia " ;
$ address  =  " Purwareja Klampok,Banjarnegara " ;
$ hobbies  =  array ( " Berenang " , " nongki "  );
$ is_married  =  false ;
];
$ school  = 
    ' highSchool '  =>  ' SMK Telkom Purwokerto ' ,
    ' Universitas '  =>  ' - '
$ skill  = [
    ' Web '  => [ ' CSS ' , ' HTML ' , ' JavaScript ' , ' Php ' ],
    ' Bahasa Lain '  => [ ' C # ' , ' Java ' , ' Python ' ],
    ' Pengembangan Desktop '  => [ ' .Net ' , ' Java ' ],
    ' Pengembangan Seluler '  => [ ' Android Studio ' ]
];
function  biodata ( $ name , $ address , $ hobbies , $ is_married , $ school , $ skills ) {
    return  json_encode ( array (
        ' name '  =>  $ name ,
        ' address '  =>  $ address ,
        ' hobi '  =>  $ hobi ,
        ' is_married '  =>  $ is_married ,
        ' sekolah '  =>  $ sekolah ,
        ' skill '  =>  $ skill
    ), JSON_PRETTY_PRINT );
}
echo biodata ( $ name , $ address , $ hobbies , $ is_married , $ school , $ skills ); 