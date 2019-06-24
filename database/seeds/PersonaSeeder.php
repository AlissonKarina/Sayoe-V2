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
            'dni' => '43695481',
            'nombre' => strtoupper("Roquer"),
            'apellido_paterno' => strtoupper("Yupanqui"),
            'apellido_materno' => strtoupper("Ccopa"),
            'sexo' => 'M',
            'fecha_nacimiento' => "1986-08-12",
            'foto' => 'https://estaticos.qdq.com/swdata/photos/769/769385991/25bc2f3e9e924f0db4c05cb91cbaf772.jpg',
            'telefono' => "8888-888",
            'celular' => "92570-4675",
            'direccion' => strtoupper("Callao - Callao"),
            'correo_personal' => "roquer.yupanqui"."@gmail.com",

        ]);

        Persona::create([
            'dni' => '44603086',
            'nombre' => strtoupper("Tania Victoria"),
            'apellido_paterno' => strtoupper("Escobedo"),
            'apellido_materno' => strtoupper("Cruzado"),
            'sexo' => 'F',
            'fecha_nacimiento' => "1987-08-21",
            'foto' => 'https://fotofigaredo.files.wordpress.com/2015/01/foto-carnet-currc3adculum.jpg',
            'telefono' => "8888-888",
            'celular' => "93537-6063",
            'direccion' => strtoupper("Puente Piedra - Lima"),
            'correo_personal' => "taviescobedo"."@gmail.com",

        ]);

        Persona::create([
            'dni' => '70043237',
            'nombre' => strtoupper("Erik David"),
            'apellido_paterno' => strtoupper("Guido"),
            'apellido_materno' => strtoupper("Balarezo"),
            'sexo' => 'M',
            'fecha_nacimiento' => "1991-10-20",
            'foto' => 'https://media.istockphoto.com/photos/portrait-of-a-smiling-latin-guy-with-beard-picture-id530459305?k=6&m=530459305&s=612x612&w=0&h=myeaZ4NDru68GClrcxHSKcECFhBRUPjsEgx77E3kVRg=',
            'telefono' => "8888-888",
            'celular' => "98624-5245",
            'direccion' => strtoupper("Breña - Lima"),
            'correo_personal' => "erikd.guiba"."@gmail.com",

        ]);

        Persona::create([
            'dni' => '45912324',
            'nombre' => strtoupper("Carlos Marcelo"),
            'apellido_paterno' => strtoupper("Bonifaz"),
            'apellido_materno' => strtoupper("Sota"),
            'sexo' => 'M',
            'fecha_nacimiento' => "1989-09-04",
            'foto' => 'https://media.istockphoto.com/photos/passport-picture-of-a-cool-guy-in-a-blue-shirt-picture-id481864562?k=6&m=481864562&s=612x612&w=0&h=YJ3E7aSRV11yzjWfpwPetU0elXHgbljaN7dkj3rbUYA=',
            'telefono' => "8888-888",
            'celular' => "93088-7268",
            'direccion' => strtoupper("San Martín de Porres - Lima"),
            'correo_personal' => "zero_wii"."hotmail.com",

        ]);

        Persona::create([
            'dni' => '46481023',
            'nombre' => strtoupper("Julio Felipe"),
            'apellido_paterno' => strtoupper("Romero"),
            'apellido_materno' => strtoupper("Cárdenas"),
            'sexo' => 'M',
            'fecha_nacimiento' => "1990-07-22",
            'foto' => 'https://media.istockphoto.com/photos/passport-picture-of-a-hispanic-businessman-with-suit-picture-id477043394?k=6&m=477043394&s=612x612&w=0&h=SqJa7uKBWU4dnuiUMWsUqM03AkbOxq_LxgWH0eo47qk=',
            'telefono' => "8888-888",
            'celular' => "98417-7316",
            'direccion' => strtoupper("La Victoria - Lima"),
            'correo_personal' => "jromeroc90"."@gmail.com",
        ]);

        Persona::create([
            'dni' => '46519414',
            'nombre' => strtoupper("Alberto"),
            'apellido_paterno' => strtoupper("Tataje"),
            'apellido_materno' => strtoupper("Miranda"),
            'sexo' => 'M',
            'fecha_nacimiento' => "1989-10-24",
            'foto' => 'https://media.istockphoto.com/photos/passport-photo-picture-id504854859?k=6&m=504854859&s=612x612&w=0&h=HJxLy9v_A6iCP5-PijR-D7TVTY1j5789SAzy619mHvs=',
            'telefono' => "8888-888",
            'celular' => "99889-2013",
            'direccion' => strtoupper("Puente Piedra - Lima"),
            'correo_personal' => "betomiranda276"."@gmail.com",
        ]);

        Persona::create([
            'dni' => '70078950',
            'nombre' => strtoupper("Arez Miguel"),
            'apellido_paterno' => strtoupper("Rodriguez"),
            'apellido_materno' => strtoupper("Pajita"),
            'sexo' => 'M',
            'fecha_nacimiento' => "1992-02-01",
            'foto' => 'https://estaticos.qdq.com/swdata/photos/769/769385991/25bc2f3e9e924f0db4c05cb91cbaf772.jpg',
            'telefono' => "8888-888",
            'celular' => "92739-4773",
            'direccion' => strtoupper("San Juan de Lurigancho - Lima"),
            'correo_personal' => "aresrodriguezpajita"."@gmail.com",
        ]);

        Persona::create([
            'dni' => '45139174',
            'nombre' => strtoupper("Ingrid Fiorella"),
            'apellido_paterno' => strtoupper("Rodriguez"),
            'apellido_materno' => strtoupper("Valdivia"),
            'sexo' => 'F',
            'fecha_nacimiento' => "1988-05-20",
            'foto' => 'https://fotofigaredo.files.wordpress.com/2015/01/foto-carnet-currc3adculum.jpg',
            'telefono' => "8888-888",
            'celular' => "99174-1436",
            'direccion' => strtoupper("Villa María - Lima"),
            'correo_personal' => "infirova"."@gmail.com",
        ]);

        Persona::create([
            'dni' => '46887361',
            'nombre' => strtoupper("Richar"),
            'apellido_paterno' => strtoupper("Quispe"),
            'apellido_materno' => strtoupper("Curampa"),
            'sexo' => 'M',
            'fecha_nacimiento' => "1988-05-20",
            'foto' => 'https://estaticos.qdq.com/swdata/photos/769/769385991/25bc2f3e9e924f0db4c05cb91cbaf772.jpg',
            'telefono' => "8888-888",
            'celular' => "93053-7833",
            'direccion' => strtoupper("Villa María del Triunfo - Lima"),
            'correo_personal' => "infirova"."@gmail.com",
        ]);

        Persona::create([
            'dni' => '47465301',
            'nombre' => strtoupper("Alexander Martin"),
            'apellido_paterno' => strtoupper("Ramos"),
            'apellido_materno' => strtoupper("Tito"),
            'sexo' => 'M',
            'fecha_nacimiento' => "1991-11-30",
            'foto' => 'https://estaticos.qdq.com/swdata/photos/769/769385991/25bc2f3e9e924f0db4c05cb91cbaf772.jpg',
            'telefono' => "986-2521",
            'celular' => "98625-2159",
            'direccion' => strtoupper("Lima - Lima"),
            'correo_personal' => "alex_mart30"."@hotmail.com",
        ]);

        Persona::create([
            'dni' => '43386175',
            'nombre' => strtoupper("Juan Anyelo"),
            'apellido_paterno' => strtoupper("Anchante"),
            'apellido_materno' => strtoupper("Candia"),
            'sexo' => 'M',
            'fecha_nacimiento' => "1988-05-20",
            'foto' => 'https://estaticos.qdq.com/swdata/photos/769/769385991/25bc2f3e9e924f0db4c05cb91cbaf772.jpg',
            'telefono' => "8888-888",
            'celular' => "99174-1436",
            'direccion' => strtoupper("San Martín de Porres - Lima"),
            'correo_personal' => "anyelius_64"."@hotmail.com",
        ]);

        Persona::create([
            'dni' => '43061789',
            'nombre' => strtoupper("Larry Steve"),
            'apellido_paterno' => strtoupper("Barreto"),
            'apellido_materno' => strtoupper("Trujillo"),
            'sexo' => 'M',
            'fecha_nacimiento' => "1988-05-20",
            'foto' => 'https://estaticos.qdq.com/swdata/photos/769/769385991/25bc2f3e9e924f0db4c05cb91cbaf772.jpg',
            'telefono' => "605-1235",
            'celular' => "93143-4840",
            'direccion' => strtoupper("Los Olivos - Lima"),
            'correo_personal' => "larrysbarretot"."@gmail.com",
        ]);

        Persona::create([
            'dni' => '47676481',
            'nombre' => strtoupper("Kevin Martín"),
            'apellido_paterno' => strtoupper("Castañeda"),
            'apellido_materno' => strtoupper("Zorrilla"),
            'sexo' => 'M',
            'fecha_nacimiento' => "1988-05-20",
            'foto' => 'https://estaticos.qdq.com/swdata/photos/769/769385991/25bc2f3e9e924f0db4c05cb91cbaf772.jpg',
            'telefono' => "354-3312",
            'celular' => "94914-9804",
            'direccion' => strtoupper("Santa Anita - Lima"),
            'correo_personal' => "castanedakevin114"."@gmail.com",
        ]);

        Persona::create([
            'dni' => '46837299',
            'nombre' => strtoupper("Angel Alfonso"),
            'apellido_paterno' => strtoupper("Gonzales"),
            'apellido_materno' => strtoupper("Molina"),
            'sexo' => 'M',
            'fecha_nacimiento' => "1991-11-02",
            'foto' => 'https://estaticos.qdq.com/swdata/photos/769/769385991/25bc2f3e9e924f0db4c05cb91cbaf772.jpg',
            'telefono' => "428-2483",
            'celular' => "97273-4536",
            'direccion' => strtoupper("Lima - Lima"),
            'correo_personal' => "captel_1302"."@hotmail.com",
        ]);

        Persona::create([
            'dni' => '47573179',
            'nombre' => strtoupper("Alberto"),
            'apellido_paterno' => strtoupper("Gutierrez"),
            'apellido_materno' => strtoupper("Espinoza"),
            'sexo' => 'M',
            'fecha_nacimiento' => "1988-05-20",
            'foto' => 'https://estaticos.qdq.com/swdata/photos/769/769385991/25bc2f3e9e924f0db4c05cb91cbaf772.jpg',
            'telefono' => "291-3944",
            'celular' => "99174-1436",
            'direccion' => strtoupper("Villa El Salvador - Lima"),
            'correo_personal' => "algutierrezes"."@gmail.com",
        ]);

        Persona::create([
            'dni' => '46035060',
            'nombre' => strtoupper("Leonardo Fulgencio"),
            'apellido_paterno' => strtoupper("Quispe"),
            'apellido_materno' => strtoupper("Torres"),
            'sexo' => 'M',
            'fecha_nacimiento' => "1989-10-28",
            'foto' => 'https://estaticos.qdq.com/swdata/photos/769/769385991/25bc2f3e9e924f0db4c05cb91cbaf772.jpg',
            'telefono' => "451-4851",
            'celular' => "99174-1436",
            'direccion' => strtoupper("San Miguel - Lima"),
            'correo_personal' => "leo.elimbah"."@gmail.com",
        ]);

        Persona::create([
            'dni' => '42255984',
            'nombre' => strtoupper("Neptali Antony"),
            'apellido_paterno' => strtoupper("Reyes"),
            'apellido_materno' => strtoupper("Cabrera"),
            'sexo' => 'M',
            'fecha_nacimiento' => "1984-01-17",
            'foto' => 'https://estaticos.qdq.com/swdata/photos/769/769385991/25bc2f3e9e924f0db4c05cb91cbaf772.jpg',
            'telefono' => "548-5850",
            'celular' => "99174-1436",
            'direccion' => strtoupper("Villa El Salvador - Lima"),
            'correo_personal' => "neptali_antony"."@gmail.com",
        ]);

        Persona::create([
            'dni' => '70446446',
            'nombre' => strtoupper("Tito Jesús"),
            'apellido_paterno' => strtoupper("Yanac"),
            'apellido_materno' => strtoupper("Saldaña"),
            'sexo' => 'M',
            'fecha_nacimiento' => "1988-05-20",
            'foto' => 'https://estaticos.qdq.com/swdata/photos/769/769385991/25bc2f3e9e924f0db4c05cb91cbaf772.jpg',
            'telefono' => "8888-888",
            'celular' => "99174-1436",
            'direccion' => strtoupper("San Juan de Lurigancho - Lima"),
            'correo_personal' => "titoyanac"."@gmail.com",
        ]);

        Persona::create([
            'dni' => '47753685',
            'nombre' => strtoupper("Erick Carlos"),
            'apellido_paterno' => strtoupper("Avalos"),
            'apellido_materno' => strtoupper("Santiago"),
            'sexo' => 'M',
            'fecha_nacimiento' => "1991-12-07",
            'foto' => 'https://estaticos.qdq.com/swdata/photos/769/769385991/25bc2f3e9e924f0db4c05cb91cbaf772.jpg',
            'telefono' => "8888-888",
            'celular' => "99152-5566",
            'direccion' => strtoupper("Villa El Salvador - Lima"),
            'correo_personal' => "ecavaloss"."@gmail.com",
        ]);

        Persona::create([
            'dni' => '72113937',
            'nombre' => strtoupper("Luis Ángel"),
            'apellido_paterno' => strtoupper("Arteaga"),
            'apellido_materno' => strtoupper("Torres"),
            'sexo' => 'M',
            'fecha_nacimiento' => "1992-05-02",
            'foto' => 'https://estaticos.qdq.com/swdata/photos/769/769385991/25bc2f3e9e924f0db4c05cb91cbaf772.jpg',
            'telefono' => "287-8994",
            'celular' => "94160-7487",
            'direccion' => strtoupper("San Juan de Lurigancho"),
            'correo_personal' => "laat92"."@gmail.com",
        ]);

        Persona::create([
            'dni' => '71732618',
            'nombre' => strtoupper("Diego Alonso"),
            'apellido_paterno' => strtoupper("Chavez"),
            'apellido_materno' => strtoupper("Pacheco"),
            'sexo' => 'M',
            'fecha_nacimiento' => "1992-10-29",
            'foto' => 'https://estaticos.qdq.com/swdata/photos/769/769385991/25bc2f3e9e924f0db4c05cb91cbaf772.jpg',
            'telefono' => "433-9521",
            'celular' => "9999-9999",
            'direccion' => strtoupper("Brecha - Lima"),
            'correo_personal' => "deocha7x"."@gmail.com",
        ]);

        // Persona::create([
        //     'dni' => '47484081',
        //     'nombre' => strtoupper("Martín Jair"),
        //     'apellido_paterno' => strtoupper("Ayo"),
        //     'apellido_materno' => strtoupper("Campos"),
        //     'sexo' => 'M',
        //     'fecha_nacimiento' => "2001-10-05",
        //     'foto' => 'https://estaticos.qdq.com/swdata/photos/769/769385991/25bc2f3e9e924f0db4c05cb91cbaf772.jpg',
        //     'telefono' => "8888-888",
        //     'celular' => "9999-9999",
        //     'direccion' => strtoupper("San Miguel - Lima "),
        //     'correo_personal' => "mrtnayo"."@gmail.com",
        // ]);

        // Persona::create([
        //     'dni' => '72935196',
        //     'nombre' => strtoupper("Luis Enrique"),
        //     'apellido_paterno' => strtoupper("Campos"),
        //     'apellido_materno' => strtoupper("Rubina"),
        //     'sexo' => 'M',
        //     'fecha_nacimiento' => "2001-10-05",
        //     'foto' => 'https://estaticos.qdq.com/swdata/photos/769/769385991/25bc2f3e9e924f0db4c05cb91cbaf772.jpg',
        //     'telefono' => "8888-888",
        //     'celular' => "9999-9999",
        //     'direccion' => strtoupper("Ventanilla - Callao "),
        //     'correo_personal' => "lucaru9"."@gmail.com",
        // ]);
    }
}
