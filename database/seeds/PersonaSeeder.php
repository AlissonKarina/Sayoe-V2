<?php

use Illuminate\Database\Seeder;
use App\Model\Persona;

class PersonaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Persona::create([
            'dni' => '9876542',
            'nombre' => "Roquer",
            'apellido_paterno' => "Yupanqui",
            'apellido_materno' => "Ccopa",
            'sexo' => '0',
            'fecha_nacimiento' => "1986-08-12",
            'foto' => 'https://autoescuela-aula4.es/wp-content/uploads/2016/01/chico-carnet-conducir.jpg',
            'telefono' => "8888-888",
            'celular' => "92570-4675",
            'direccion' => "Callao - Callao",
            'correo_personal' => "roquer.yupanqui"."@gmail.com",

        ]);

        Persona::create([
            'dni' => '9876542',
            'nombre' => "Tania Victoria",
            'apellido_paterno' => "Escobedo",
            'apellido_materno' => "Cruzado",
            'sexo' => '1',
            'fecha_nacimiento' => "1987-08-21",
            'foto' => 'https://autoescuela-aula4.es/wp-content/uploads/2016/01/chico-carnet-conducir.jpg',
            'telefono' => "8888-888",
            'celular' => "93537-6063",
            'direccion' => "Puente Piedra - Lima",
            'correo_personal' => "taviescobedo"."@gmail.com",

        ]);

        Persona::create([
            'dni' => '70043237',
            'nombre' => "Erik David",
            'apellido_paterno' => "Guido",
            'apellido_materno' => "Balarezo",
            'sexo' => '0',
            'fecha_nacimiento' => "1991-10-20",
            'foto' => 'https://autoescuela-aula4.es/wp-content/uploads/2016/01/chico-carnet-conducir.jpg',
            'telefono' => "8888-888",
            'celular' => "98624-5245",
            'direccion' => "Breña - Lima",
            'correo_personal' => "erikd.guiba"."@gmail.com",

        ]);

        Persona::create([
            'dni' => '45912324',
            'nombre' => "Carlos Marcelo",
            'apellido_paterno' => "Bonifaz",
            'apellido_materno' => "Sota",
            'sexo' => '0',
            'fecha_nacimiento' => "1989-09-04",
            'foto' => 'https://autoescuela-aula4.es/wp-content/uploads/2016/01/chico-carnet-conducir.jpg',
            'telefono' => "8888-888",
            'celular' => "93088-7268",
            'direccion' => "San Martín de Porres - Lima",
            'correo_personal' => "zero_wii"."hotmail.com",

        ]);

        Persona::create([
            'dni' => '46481023',
            'nombre' => "Julio Felipe",
            'apellido_paterno' => "Romero",
            'apellido_materno' => "Cárdenas",
            'sexo' => '0',
            'fecha_nacimiento' => "1990-07-22",
            'foto' => 'https://autoescuela-aula4.es/wp-content/uploads/2016/01/chico-carnet-conducir.jpg',
            'telefono' => "8888-888",
            'celular' => "98417-7316",
            'direccion' => "La Victoria - Lima",
            'correo_personal' => "jromeroc90"."@gmail.com",
        ]);

        Persona::create([
            'dni' => '46519414',
            'nombre' => "Alberto",
            'apellido_paterno' => "Tataje",
            'apellido_materno' => "Miranda",
            'sexo' => '0',
            'fecha_nacimiento' => "1989-10-24",
            'foto' => 'https://autoescuela-aula4.es/wp-content/uploads/2016/01/chico-carnet-conducir.jpg',
            'telefono' => "8888-888",
            'celular' => "99889-2013",
            'direccion' => "Puente Piedra - Lima",
            'correo_personal' => "betomiranda276"."@gmail.com",
        ]);

        Persona::create([
            'dni' => '70078950',
            'nombre' => "Arez Miguel",
            'apellido_paterno' => "Rodriguez",
            'apellido_materno' => "Pajita",
            'sexo' => '0',
            'fecha_nacimiento' => "1992-02-01",
            'foto' => 'https://autoescuela-aula4.es/wp-content/uploads/2016/01/chico-carnet-conducir.jpg',
            'telefono' => "8888-888",
            'celular' => "92739-4773",
            'direccion' => "San Juan de Lurigancho - Lima",
            'correo_personal' => "aresrodriguezpajita"."@gmail.com",
        ]);

        Persona::create([
            'dni' => '45139174',
            'nombre' => "Ingrid Fiorella",
            'apellido_paterno' => "Rodriguez",
            'apellido_materno' => "Valdivia",
            'sexo' => '1',
            'fecha_nacimiento' => "1988-05-20",
            'foto' => 'https://autoescuela-aula4.es/wp-content/uploads/2016/01/chico-carnet-conducir.jpg',
            'telefono' => "8888-888",
            'celular' => "99174-1436",
            'direccion' => "Villa María - Lima",
            'correo_personal' => "infirova"."@gmail.com",
        ]);

        Persona::create([
            'dni' => '46887361',
            'nombre' => "Richar",
            'apellido_paterno' => "Quispe",
            'apellido_materno' => "Curampa",
            'sexo' => '0',
            'fecha_nacimiento' => "1988-05-20",
            'foto' => 'https://autoescuela-aula4.es/wp-content/uploads/2016/01/chico-carnet-conducir.jpg',
            'telefono' => "8888-888",
            'celular' => "93053-7833",
            'direccion' => "Villa María del Triunfo - Lima",
            'correo_personal' => "infirova"."@gmail.com",
        ]);

        Persona::create([
            'dni' => '47465301',
            'nombre' => "Alexander Martin",
            'apellido_paterno' => "Ramos",
            'apellido_materno' => "Tito",
            'sexo' => '0',
            'fecha_nacimiento' => "1991-11-30",
            'foto' => 'https://autoescuela-aula4.es/wp-content/uploads/2016/01/chico-carnet-conducir.jpg',
            'telefono' => "8888-888",
            'celular' => "98625-2159",
            'direccion' => "Lima - Lima",
            'correo_personal' => "alex_mart30"."@hotmail.com",
        ]);

        Persona::create([
            'dni' => '43386175',
            'nombre' => "Juan Anyelo",
            'apellido_paterno' => "Anchante",
            'apellido_materno' => "Candia",
            'sexo' => '0',
            'fecha_nacimiento' => "1988-05-20",
            'foto' => 'https://autoescuela-aula4.es/wp-content/uploads/2016/01/chico-carnet-conducir.jpg',
            'telefono' => "8888-888",
            'celular' => "99174-1436",
            'direccion' => "San Martín de Porres - Lima",
            'correo_personal' => "anyelius_64"."@hotmail.com",
        ]);

        Persona::create([
            'dni' => '43061789',
            'nombre' => "Larry Steve",
            'apellido_paterno' => "Barreto",
            'apellido_materno' => "Trujillo",
            'sexo' => '0',
            'fecha_nacimiento' => "1988-05-20",
            'foto' => 'https://autoescuela-aula4.es/wp-content/uploads/2016/01/chico-carnet-conducir.jpg',
            'telefono' => "8888-888",
            'celular' => "93143-4840",
            'direccion' => "Los Olivos - Lima",
            'correo_personal' => "larrysbarretot"."@gmail.com",
        ]);

        Persona::create([
            'dni' => '47676481',
            'nombre' => "Kevin Martín",
            'apellido_paterno' => "Castañeda",
            'apellido_materno' => "Zorrilla",
            'sexo' => '0',
            'fecha_nacimiento' => "1988-05-20",
            'foto' => 'https://autoescuela-aula4.es/wp-content/uploads/2016/01/chico-carnet-conducir.jpg',
            'telefono' => "8888-888",
            'celular' => "94914-9804",
            'direccion' => "Santa Anita - Lima",
            'correo_personal' => "castanedakevin114"."@gmail.com",
        ]);

        Persona::create([
            'dni' => '46837299',
            'nombre' => "Angel Alfonso",
            'apellido_paterno' => "Gonzales",
            'apellido_materno' => "Molina",
            'sexo' => '0',
            'fecha_nacimiento' => "1991-11-02",
            'foto' => 'https://autoescuela-aula4.es/wp-content/uploads/2016/01/chico-carnet-conducir.jpg',
            'telefono' => "8888-888",
            'celular' => "97273-4536",
            'direccion' => "Lima - Lima",
            'correo_personal' => "captel_1302"."@hotmail.com",
        ]);

        Persona::create([
            'dni' => '47573179',
            'nombre' => "Alberto",
            'apellido_paterno' => "Gutierrez",
            'apellido_materno' => "Espinoza",
            'sexo' => '0',
            'fecha_nacimiento' => "1988-05-20",
            'foto' => 'https://autoescuela-aula4.es/wp-content/uploads/2016/01/chico-carnet-conducir.jpg',
            'telefono' => "8888-888",
            'celular' => "99174-1436",
            'direccion' => "Villa El Salvador - Lima",
            'correo_personal' => "algutierrezes"."@gmail.com",
        ]);

        Persona::create([
            'dni' => '46035060',
            'nombre' => "Leonardo Fulgencio",
            'apellido_paterno' => "Quispe",
            'apellido_materno' => "Torres",
            'sexo' => '0',
            'fecha_nacimiento' => "1989-10-28",
            'foto' => 'https://autoescuela-aula4.es/wp-content/uploads/2016/01/chico-carnet-conducir.jpg',
            'telefono' => "8888-888",
            'celular' => "99174-1436",
            'direccion' => "San Miguel - Lima",
            'correo_personal' => "leo.elimbah"."@gmail.com",
        ]);



        Persona::create([
            'dni' => '46887361',
            'nombre' => "Juan Anyelor",
            'apellido_paterno' => "Anchante",
            'apellido_materno' => "Candia",
            'sexo' => '0',
            'fecha_nacimiento' => "1988-05-20",
            'foto' => 'https://autoescuela-aula4.es/wp-content/uploads/2016/01/chico-carnet-conducir.jpg',
            'telefono' => "8888-888",
            'celular' => "99174-1436",
            'direccion' => "Villa El Salvador - Lima",
            'correo_personal' => "infirova"."@gmail.com",
        ]);

        Persona::create([
            'dni' => '46887361',
            'nombre' => "Juan Anyelor",
            'apellido_paterno' => "Anchante",
            'apellido_materno' => "Candia",
            'sexo' => '0',
            'fecha_nacimiento' => "1988-05-20",
            'foto' => 'https://autoescuela-aula4.es/wp-content/uploads/2016/01/chico-carnet-conducir.jpg',
            'telefono' => "8888-888",
            'celular' => "99174-1436",
            'direccion' => "Villa El Salvador - Lima",
            'correo_personal' => "infirova"."@gmail.com",
        ]);

        Persona::create([
            'dni' => '46887361',
            'nombre' => "Juan Anyelor",
            'apellido_paterno' => "Anchante",
            'apellido_materno' => "Candia",
            'sexo' => '0',
            'fecha_nacimiento' => "1988-05-20",
            'foto' => 'https://autoescuela-aula4.es/wp-content/uploads/2016/01/chico-carnet-conducir.jpg',
            'telefono' => "8888-888",
            'celular' => "99174-1436",
            'direccion' => "Villa El Salvador - Lima",
            'correo_personal' => "infirova"."@gmail.com",
        ]);

        Persona::create([
            'dni' => '46887361',
            'nombre' => "Juan Anyelor",
            'apellido_paterno' => "Anchante",
            'apellido_materno' => "Candia",
            'sexo' => '0',
            'fecha_nacimiento' => "1988-05-20",
            'foto' => 'https://autoescuela-aula4.es/wp-content/uploads/2016/01/chico-carnet-conducir.jpg',
            'telefono' => "8888-888",
            'celular' => "99174-1436",
            'direccion' => "Villa El Salvador - Lima",
            'correo_personal' => "infirova"."@gmail.com",
        ]);

        Persona::create([
            'dni' => '9876542',
            'nombre' => "Luis David ",
            'apellido_paterno' => "Yauri",
            'apellido_materno' => "Martinez",
            'sexo' => '0',
            'fecha_nacimiento' => "2001-10-05",
            'foto' => 'https://autoescuela-aula4.es/wp-content/uploads/2016/01/chico-carnet-conducir.jpg',
            'telefono' => "8888-888",
            'celular' => "9999-9999",
            'direccion' => "Miraflores ",
            'correo_personal' => "david.yauri"."@gmail.com",

        ]);
        
        for($i = 3 ; $i <= 10 ; $i ++){
            Persona::create([
                'dni' => '987654'.$i,
                'nombre' => "nombre ".$i,
                'apellido_paterno' => "apellido paterno ".$i,
                'apellido_materno' => "apellido materno ".$i,
                'sexo' => '0',
                'fecha_nacimiento' => "2001-10-05",
                'foto' => 'https://autoescuela-aula4.es/wp-content/uploads/2016/01/chico-carnet-conducir.jpg',
                'telefono' => "8888-888",
                'celular' => "9999-9999",
                'direccion' => "Direccion ".$i,
                'correo_personal' => "personal".$i."@gamil.com",
            ]);
        }

        for($i = 11 ; $i <= 21; $i ++){
            Persona::create([
                'dni' => '987654'.$i,
                'nombre' => "nombre ".$i,
                'apellido_paterno' => "apellido paterno ".$i,
                'apellido_materno' => "apellido materno ".$i,
                'sexo' => '1',
                'fecha_nacimiento' => "2000-10-05",
                'foto' => 'http://blogs.lanacion.com.ar/merle/files/2009/03/pn_2399_image_031.jpg',
                'telefono' => "8888-888",
                'celular' => "9999-9999",
                'direccion' => "Direccion ".$i,
                'correo_personal' => "personal".$i."@gamil.com",
            ]);
        }
    }
}
