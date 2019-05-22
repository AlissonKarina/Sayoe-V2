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
        /*************** PRIMER TEST ***************/
        Pregunta::create([
            'id' => '1',
            'pregunta' => "Al estudiar... Leo todo lo que tengo que estudiar subrayando los puntos más importantes... ",
            'id_cuest_eval' => '1'
        ]); 
        
        Pregunta::create([
            'id' => '2',
            'pregunta' => "Al estudiar... Subrayo las palabras cuyo significado no sé",
            'id_cuest_eval' => '1'
        ]);

        Pregunta::create([
            'id' => '3',
            'pregunta' => "Al estudiar... Regreso a los puntos subrayados con el propósito de aclararlo",
            'id_cuest_eval' => '1' 
        ]);

        Pregunta::create([
            'id' => '4',
            'pregunta' => "Al estudiar... Busco de inmediato en el diccionario el significado de la palabras que no sé",
            'id_cuest_eval' => '1' 
        ]);

        Pregunta::create([
            'id' => '5',
            'pregunta' => "Al estudiar... Me hago preguntas y me respondo en mi propio lenguaje lo que he comprendido",
            'id_cuest_eval' => '1' 
        ]);

        Pregunta::create([
            'id' => '6',
            'pregunta' => "Al estudiar... Luego, escribo en mi propio lenguaje lo que he comprendido",
            'id_cuest_eval' => '1' 
        ]);

        Pregunta::create([
            'id' => '7',
            'pregunta' => "Al estudiar... Doy una leída parte por parte y repito varias veces hasta recitarlo de memmoria",
            'id_cuest_eval' => '1' 
        ]);

        Pregunta::create([
            'id' => '8',
            'pregunta' => "Al estudiar... Trato de memorizar todo lo que estudio",
            'id_cuest_eval' => '1' 
        ]);

        Pregunta::create([
            'id' => '9',
            'pregunta' => "Al estudiar... Repaso lo que he estudiado después de 4 a 8 horas",
            'id_cuest_eval' => '1'
        ]);

        Pregunta::create([
            'id' => '10',
            'pregunta' => "Al estudiar... Me limito a dar una leída general a todo lo que tengo que estudiar",
            'id_cuest_eval' => '1' 
        ]);

        /* 10 */
        Pregunta::create([
            'id' => '11',
            'pregunta' => "Al estudiar... Trato de relacionar el tema que estoy estudiando con otro temas ya estudiados",
            'id_cuest_eval' => '1' 
        ]);

        Pregunta::create([
            'id' => '12',
            'pregunta' => "Al estudiar... Estudio solo para los exámenes",
            'id_cuest_eval' => '1' 
        ]);

        Pregunta::create([
            'id' => '13',
            'pregunta' => "Al hacer mis tareas... Leo la pregunta, busco en el libro y escribio la respuesta casi como dice el libro",
            'id_cuest_eval' => '1' 
        ]);

        Pregunta::create([
            'id' => '14',
            'pregunta' => "Al hacer mis tareas... Leo la pregunta, busco en el libro, leo todo y luego contesto según como he comprendido",
            'id_cuest_eval' => '1'
        ]);

        Pregunta::create([
            'id' => '15',
            'pregunta' => "Al hacer mis tareas... Las palabras que no entiendo, las escribo como están en el libro, sin averiguar su significado",
            'id_cuest_eval' => '1'
        ]);

        Pregunta::create([
            'id' => '16',
            'pregunta' => "Al hacer mis tareas... Le doy más importancia al orden y presentación del trabajo que a la comprensión del tema",
            'id_cuest_eval' => '1'
        ]);

        Pregunta::create([
            'id' => '17',
            'pregunta' => "Al hacer mis tareas... En mi casa, me falta tiempo para terminar con mis tareas, las completo en el salón preguntando a mis amigos",
            'id_cuest_eval' => '1' 
        ]);

        /* 18 */
        Pregunta::create([
            'id' => '18',
            'pregunta' => "Al hacer mis tareas... Pido ayuda a mis padres u otras personas que me resuelvan todo o gran parte de la tarea",
            'id_cuest_eval' => '1' 
        ]);

        Pregunta::create([
            'id' => '19',
            'pregunta' => "Al hacer mis tareas... Dejo para último momento la ejecución de mis tareas por eso no las concluyo dentro del tiempo fijado",
            'id_cuest_eval' => '1'
        ]);

        /* 20 */
        Pregunta::create([
            'id' => '20',
            'pregunta' => "Al hacer mis tareas... Empiezo a resolver una tarea, me canso y paso a otra",
            'id_cuest_eval' => '1'
        ]);

        Pregunta::create([
            'id' => '21',
            'pregunta' => "Al hacer mis tareas... Cuando no puedo resolvere una tarea, me da rabia o mucha cólera y ya no la hago",
            'id_cuest_eval' => '1'
        ]);

        Pregunta::create([
            'id' => '22',
            'pregunta' => "Al hacer mis tareas... Cuando tengo varias tareas empiezo por la más difícil y luego voy pasando a las más fáciles",
            'id_cuest_eval' => '1'
        ]);

        Pregunta::create([
            'id' => '23',
            'pregunta' => "Para prepararme para los exámenes... Estudio por lo menos dos horas todos los días",
            'id_cuest_eval' => '1' 
        ]);

        Pregunta::create([
            'id' => '24',
            'pregunta' => "Para prepararme para los exámenes... Espero que se fije la fecha de un examen o evaluación para ponerme a estudiar",
            'id_cuest_eval' => '1'
        ]);

        Pregunta::create([
            'id' => '25',
            'pregunta' => "Para prepararme para los exámenes... Cuando hay examen oral, recién en el salón de clase me pongo a revisar mis apuntes",
            'id_cuest_eval' => '1'
        ]);

        Pregunta::create([
            'id' => '26',
            'pregunta' => "Para prepararme para los exámenes... Me pongo a estudiar en el mismo día del examen",
            'id_cuest_eval' => '1' 
        ]);

        Pregunta::create([
            'id' => '27',
            'pregunta' => "Para prepararme para los exámenes... Repaso momentos ante del examen",
            'id_cuest_eval' => '1' 
        ]);

        Pregunta::create([
            'id' => '28',
            'pregunta' => "Para prepararme para los exámenes... Preparo un plagio por su acasi me olvido del tema",
            'id_cuest_eval' => '1' 
        ]);

        Pregunta::create([
            'id' => '29',
            'pregunta' => "Para prepararme para los exámenes... Confío que mi compañero me 'sople' alguna respuesta en el momento del examen",
            'id_cuest_eval' => '1'
        ]);

        /* 30 */
        Pregunta::create([
            'id' => '30',
            'pregunta' => "Para prepararme para los exámenes... Confío en mi buena suerte, por eso solo estudio aquellos temas que supongo que el profesor preguntará",
            'id_cuest_eval' => '1'
        ]);

        Pregunta::create([
            'id' => '31',
            'pregunta' => "Para prepararme para los exámenes... Cuando tengo dos o más exámenes el mismo día empiezo a estudiar por el tema más difícil y luego por el más fácil",
            'id_cuest_eval' => '1'
        ]);

        Pregunta::create([
            'id' => '32',
            'pregunta' => "Para prepararme para los exámenes... Me presento a rendir mis exámenes sin haber concluido con el estudio de todo el tema",
            'id_cuest_eval' => '1' 
        ]);

        Pregunta::create([
            'id' => '33',
            'pregunta' => "Para prepararme para los exámenes... Durante el examen se me confunden los temas, se me olvida lo que he estudiado",
            'id_cuest_eval' => '1'
        ]);

        Pregunta::create([
            'id' => '34',
            'pregunta' => "Al escuchar mis clases... Trato de tomar apuntes de todo lo que dice el profesor",
            'id_cuest_eval' => '1'
        ]);

        Pregunta::create([
            'id' => '35',
            'pregunta' => "Al escuchar mis clases... Solo tomo apuntes de las cosas más importantes",
            'id_cuest_eval' => '1' 
        ]);

        Pregunta::create([
            'id' => '36',
            'pregunta' => "Al escuchar mis clases... Inmediatamente después de una clase ordeno mis apuntes",
            'id_cuest_eval' => '1'
        ]);
        
        Pregunta::create([
            'id' => '37',
            'pregunta' => "Al escuchar mis clases... Cuando el profesor utiliza alguna palabra que no sé, levanto la mano y pido su significado",
            'id_cuest_eval' => '1'
        ]);

        Pregunta::create([
            'id' => '38',
            'pregunta' => "Al escuchar mis clases... Estoy más atento a las bromas de mis compañeros que a la clase",
            'id_cuest_eval' => '1' 
        ]);

        Pregunta::create([
            'id' => '39',
            'pregunta' => "Al escuchar mis clases... Me canso rápidamente y me pongo a hacer otras cosas",
            'id_cuest_eval' => '1' 
        ]);

        /* 40 */
        Pregunta::create([
            'id' => '40',
            'pregunta' => "Al escuchar mis clases... Cuando me aburro me pongo a jugar o a conversar con mi amigo",
            'id_cuest_eval' => '1'
        ]);

        Pregunta::create([
            'id' => '41',
            'pregunta' => "Al escuchar mis clases... Cuando no puedo tomar nota de lo que dice el profesor, me aburro y lo dejo todo",
            'id_cuest_eval' => '1'
        ]);

        Pregunta::create([
            'id' => '42',
            'pregunta' => "Al escuchar mis clases... Cuando no entiendo un tema, mi mente se pone a pensar, soñando despierto",
            'id_cuest_eval' => '1'
        ]);

        Pregunta::create([
            'id' => '43',
            'pregunta' => "Al escuchar mis clases... Mis imaginaciones o fantasías me distraen durante las clases",
            'id_cuest_eval' => '1' 
        ]);

        Pregunta::create([
            'id' => '44',
            'pregunta' => "Al escuchar mis clases... Durante las clases me distraigo pensando lo que voy a hacer en la salida",
            'id_cuest_eval' => '1' 
        ]);

        Pregunta::create([
            'id' => '45',
            'pregunta' => "Al escuchar mis clases... Durante las clases me gustaría dormir o tal vez irme de clase",
            'id_cuest_eval' => '1'
        ]);

        Pregunta::create([
            'id' => '46',
            'pregunta' => "Al escuchar mis clases... Durante las clases, atiendo llamadas o mensajes de mi celular",
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

        /*************** SEGUNDO TEST ***************/
        Pregunta::create([
            'id' => '56',
            'pregunta' => "Tristeza",
            'id_cuest_eval' => '2' 
        ]);

        Pregunta::create([
            'id' => '57',
            'pregunta' => "Pesimismo",
            'id_cuest_eval' => '2' 
        ]);

        Pregunta::create([
            'id' => '58',
            'pregunta' => "Fracaso",
            'id_cuest_eval' => '2' 
        ]);

        Pregunta::create([
            'id' => '59',
            'pregunta' => "Pérdida de Placer",
            'id_cuest_eval' => '2' 
        ]);

        Pregunta::create([
            'id' => '60',
            'pregunta' => "Sentimientos de culpa",
            'id_cuest_eval' => '2' 
        ]);

        Pregunta::create([
            'id' => '61',
            'pregunta' => "Sentimientos de castigo",
            'id_cuest_eval' => '2' 
        ]);

        Pregunta::create([
            'id' => '62',
            'pregunta' => "Disconformidad con uno mismo",
            'id_cuest_eval' => '2' 
        ]);

        Pregunta::create([
            'id' => '63',
            'pregunta' => "Autocrítica",
            'id_cuest_eval' => '2' 
        ]);

        Pregunta::create([
            'id' => '64',
            'pregunta' => "Pensamientos o Deseos Suicidas",
            'id_cuest_eval' => '2' 
        ]);
        
        /* 10 */
        Pregunta::create([
            'id' => '65',
            'pregunta' => "Llanto",
            'id_cuest_eval' => '2' 
        ]);

        Pregunta::create([
            'id' => '66',
            'pregunta' => "Agitación",
            'id_cuest_eval' => '2' 
        ]);

        Pregunta::create([
            'id' => '67',
            'pregunta' => "Pérdida de interés",
            'id_cuest_eval' => '2' 
        ]);

        Pregunta::create([
            'id' => '68',
            'pregunta' => "Indecisión",
            'id_cuest_eval' => '2' 
        ]);

        Pregunta::create([
            'id' => '69',
            'pregunta' => "Desvalorización",
            'id_cuest_eval' => '2' 
        ]);
        Pregunta::create([
            'id' => '70',
            'pregunta' => "Pérdida de energía",
            'id_cuest_eval' => '2' 
        ]);

        Pregunta::create([
            'id' => '71',
            'pregunta' => "Cambios en los hábitos de sueño",
            'id_cuest_eval' => '2' 
        ]);

        Pregunta::create([
            'id' => '72',
            'pregunta' => "Irritabilidad",
            'id_cuest_eval' => '2' 
        ]);

        Pregunta::create([
            'id' => '73',
            'pregunta' => "Cambios en el apetito",
            'id_cuest_eval' => '2' 
        ]);

        Pregunta::create([
            'id' => '74',
            'pregunta' => "Dificultad de concentración",
            'id_cuest_eval' => '2' 
        ]);

        Pregunta::create([
            'id' => '75',
            'pregunta' => "Cansancio o fatiga",
            'id_cuest_eval' => '2' 
        ]);

        Pregunta::create([
            'id' => '76',
            'pregunta' => "Pérdida de interés en el sexo",
            'id_cuest_eval' => '2' 
        ]);

    }
}
