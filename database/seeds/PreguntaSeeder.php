<?php

use Illuminate\Database\Seeder;
use App\Pregunta;

class PreguntaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pregunta::create([
            'id' => '1',
            'pregunta' => "Leo todo lo que tengo que estudiar subrayando los puntos más importantes... ".$i,
            'id_cuest_eval' => '1'
        ]); 
        
        Pregunta::create([
            'id' => '2',
            'pregunta' => "Subrayo las palabras cuyo significado no sé",
            'id_cuest_eval' => '1'
        ]);

        Pregunta::create([
            'id' => '3',
            'pregunta' => "Regreso a los puntos subrayados con el propósito de aclararlo",
            'id_cuest_eval' => '1' 
        ]);

        Pregunta::create([
            'id' => '4',
            'pregunta' => "Busco de inmediato en el diccionario el significado de la palabras que no sé",
            'id_cuest_eval' => '1' 
        ]);

        Pregunta::create([
            'id' => '5',
            'pregunta' => "Me hago preguntas y me respondo en mi propio lenguaje lo que he comprendido",
            'id_cuest_eval' => '1' 
        ]);

        Pregunta::create([
            'id' => '6',
            'pregunta' => "Luego, escribo en mi propio lenguaje lo que he comprendido",
            'id_cuest_eval' => '1' 
        ]);

        Pregunta::create([
            'id' => '7',
            'pregunta' => "Doy una leída parte por parte y repito varias veces hasta recitarlo de memmoria",
            'id_cuest_eval' => '1' 
        ]);

        Pregunta::create([
            'id' => '8',
            'pregunta' => "Trato de memorizar todo lo que estudio",
            'id_cuest_eval' => '1' 
        ]);

        Pregunta::create([
            'id' => '9',
            'pregunta' => "Repaso lo que he estudiado después de 4 a 8 horas",
            'id_cuest_eval' => '1'
        ]);

        Pregunta::create([
            'id' => '10',
            'pregunta' => "Me limito a dar una leída general a todo lo que tengo que estudiar",
            'id_cuest_eval' => '1' 
        ]);

        /* 10 */
        Pregunta::create([
            'id' => '11',
            'pregunta' => "Trato de relacionar el tema que estoy estudiando con otro temas ya estudiados",
            'id_cuest_eval' => '1' 
        ]);

        Pregunta::create([
            'id' => '12',
            'pregunta' => "Estudio solo para los exámenes",
            'id_cuest_eval' => '1' 
        ]);

        Pregunta::create([
            'id' => '13',
            'pregunta' => "Leo la pregunta, busco en el libro y escribio la respuesta casi como dice el libro",
            'id_cuest_eval' => '1' 
        ]);

        Pregunta::create([
            'id' => '14',
            'pregunta' => "Leo la pregunta, busco en el libro, leo todo y luego contesto según como he comprendido",
            'id_cuest_eval' => '1'
        ]);

        Pregunta::create([
            'id' => '15',
            'pregunta' => "Las palabras que no entiendo, las escribo como están en el libro, sin averiguar su significado",
            'id_cuest_eval' => '1'
        ]);

        Pregunta::create([
            'id' => '16',
            'pregunta' => "Le doy más importancia al orden y presentación del trabajo que a la comprensión del tema",
            'id_cuest_eval' => '1'
        ]);

        Pregunta::create([
            'id' => '17',
            'pregunta' => "En mi casa, me falta tiempo para terminar con mis tareas, las completo en el salón preguntando a mis amigos",
            'id_cuest_eval' => '1' 
        ]);

        /* 18 */
        Pregunta::create([
            'id' => '18',
            'pregunta' => "Pido ayuda a mis padres u otras personas que me resuelvan todo o gran parte de la tarea",
            'id_cuest_eval' => '1' 
        ]);

        Pregunta::create([
            'id' => '19',
            'pregunta' => "Dejo para último momento la ejecución de mis tareas por eso no las concluyo dentro del tiempo fijado",
            'id_cuest_eval' => '1'
        ]);

        /* 20 */
        Pregunta::create([
            'id' => '20',
            'pregunta' => "Empiezo a resolver una tarea, me canso y paso a otra",
            'id_cuest_eval' => '1'
        ]);

        Pregunta::create([
            'id' => '21',
            'pregunta' => "Cuando no puedo resolvere una tarea, me da rabia o mucha cólera y ya no la hago",
            'id_cuest_eval' => '1'
        ]);

        Pregunta::create([
            'id' => '22',
            'pregunta' => "Cuando tengo varias tareas empiezo por la más difícil y luego voy pasando a las más fáciles",
            'id_cuest_eval' => '1'
        ]);

        Pregunta::create([
            'id' => '23',
            'pregunta' => "Estudia por lo menos dos horas todos los días",
            'id_cuest_eval' => '1' 
        ]);

        Pregunta::create([
            'id' => '24',
            'pregunta' => "Espero que se fije la fecha de un examen o evaluación para ponerme a estudiar",
            'id_cuest_eval' => '1'
        ]);

        Pregunta::create([
            'id' => '25',
            'pregunta' => "Cuando hay examen oral, recién en el salón de clase me pongo a revisar mis apuntes",
            'id_cuest_eval' => '1'
        ]);

        Pregunta::create([
            'id' => '26',
            'pregunta' => "Mr pongo a estudiar en el mismo día del examen",
            'id_cuest_eval' => '1' 
        ]);

        Pregunta::create([
            'id' => '27',
            'pregunta' => "Repaso momentos ante del examen",
            'id_cuest_eval' => '1' 
        ]);

        Pregunta::create([
            'id' => '28',
            'pregunta' => "Preparo un plagio por su acasi me olvido del tema",
            'id_cuest_eval' => '1' 
        ]);

        Pregunta::create([
            'id' => '29',
            'pregunta' => "Confío que mi compañero me 'sople' alguna respuesta en el momento del examen",
            'id_cuest_eval' => '1'
        ]);

        /* 30 */
        Pregunta::create([
            'id' => '30',
            'pregunta' => "Confío en mi buena suerte, por eso solo estudio aquellos temas que supongo que el profesor preguntará",
            'id_cuest_eval' => '1'
        ]);

        Pregunta::create([
            'id' => '31',
            'pregunta' => "Cuando tengo dos o más exámenes el mismo día empiezo a estudiar por el tema más difícil y luego por el más fácil",
            'id_cuest_eval' => '1'
        ]);

        Pregunta::create([
            'id' => '32',
            'pregunta' => "Me presento a rendir mis exámenes sin haber concluido con el estudio de todo el tema",
            'id_cuest_eval' => '1' 
        ]);

        Pregunta::create([
            'id' => '33',
            'pregunta' => "Durante el examen se me confunden los temas, se me olvida lo que he estudiado",
            'id_cuest_eval' => '1'
        ]);

        Pregunta::create([
            'id' => '34',
            'pregunta' => "Trato de tomar apuntes de todo lo que dice el profesor",
            'id_cuest_eval' => '1'
        ]);

        Pregunta::create([
            'id' => '35',
            'pregunta' => "Solo tomo apuntes de las cosas más importantes",
            'id_cuest_eval' => '1' 
        ]);

        Pregunta::create([
            'id' => '36',
            'pregunta' => "Inmediatamente después de una clase ordeno mis apuntes",
            'id_cuest_eval' => '1'
        ]);
        
        Pregunta::create([
            'id' => '37',
            'pregunta' => "Cuando el profesor utiliza alguna palabra que no sé, levanto la mano y pido su significado",
            'id_cuest_eval' => '1'
        ]);

        Pregunta::create([
            'id' => '38',
            'pregunta' => "Estoy más atento a las bromas de mis compañeros que a la clase",
            'id_cuest_eval' => '1' 
        ]);

        Pregunta::create([
            'id' => '39',
            'pregunta' => "Me canso rápidamente y me pongo a hacer otras cosas",
            'id_cuest_eval' => '1' 
        ]);

        /* 40 */
        Pregunta::create([
            'id' => '40',
            'pregunta' => "Cuando me aburro me pongo a jugar o a conversar con mi amigo",
            'id_cuest_eval' => '1'
        ]);

        Pregunta::create([
            'id' => '41',
            'pregunta' => "Cuando no puedo tomar nota de lo que dice el profesor, me aburro y lo dejo todo",
            'id_cuest_eval' => '1'
        ]);

        Pregunta::create([
            'id' => '42',
            'pregunta' => "Cuando no entiendo un tema, mi mente se pone a pensar, soñando despierto",
            'id_cuest_eval' => '1'
        ]);

        Pregunta::create([
            'id' => '43',
            'pregunta' => "Mis imaginaciones o fantasías me distraen durante las clases",
            'id_cuest_eval' => '1' 
        ]);

        Pregunta::create([
            'id' => '44',
            'pregunta' => "Durante las clases me distraigo pensando lo que voy a hacer en la salida",
            'id_cuest_eval' => '1' 
        ]);

        Pregunta::create([
            'id' => '45',
            'pregunta' => "Durante las clases me gustaría dormir o tal vez irme de clase",
            'id_cuest_eval' => '1'
        ]);

        Pregunta::create([
            'id' => '46',
            'pregunta' => "Durante las clases, atiendo llamadas o mensajes de mi celular",
            'id_cuest_eval' => '1'
        ]);

        Pregunta::create([
            'id' => '47',
            'pregunta' => "En mis momentos de estudio...Requiero de música, sea del radio o del mini componente",
            'id_cuest_eval' => '1'
        ]);

        Pregunta::create([
            'id' => '48',
            'pregunta' => "En mis momentos de estudio... Requiero de la compañía de la TV",
            'id_cuest_eval' => '1' 
        ]);

        Pregunta::create([
            'id' => '49',
            'pregunta' => "En mis momentos de estudio... Requiero de tranquilidad y silencio",
            'id_cuest_eval' => '1' 
        ]);

        /* 50 */
        Pregunta::create([
            'id' => '50',
            'pregunta' => "En mis momentos de estudio... Requiero de algún alimento que como mientras estudio",
            'id_cuest_eval' => '1'
        ]);

        Pregunta::create([
            'id' => '51',
            'pregunta' => "En mis momentos de estudio... Su familia conversa, ve TV o escucha música",
            'id_cuest_eval' => '1' 
        ]);

        Pregunta::create([
            'id' => '52',
            'pregunta' => "En mis momentos de estudio...  Ocurren interrupciones por parte de sus padres pidiéndole algún favor",
            'id_cuest_eval' => '1' 
        ]);

        Pregunta::create([
            'id' => '53',
            'pregunta' => "En mis momentos de estudio...  Ocurren interrupciones como visitas o amigos que me quitan el tiempo",
            'id_cuest_eval' => '1' 
        ]);

        Pregunta::create([
            'id' => '54',
            'pregunta' => "En mis momentos de estudio... Ocurren interrupciones sociales, como fiestas, paseos, citas, etc",
            'id_cuest_eval' => '1' 
        ]);

        Pregunta::create([
            'id' => '55',
            'pregunta' => "En mis momentos de estudio... Debo estar conectado por celular u otro medio, con mis redes sociales",
            'id_cuest_eval' => '1' 
        ]);

    }
}
