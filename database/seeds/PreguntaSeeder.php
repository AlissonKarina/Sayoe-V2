<?php

use Illuminate\Database\Seeder;
use App\Model\Pregunta;

class PreguntaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*************** PRIMER TEST: Inventario de Hábitos de Estudio CASM-85 Revisión 2017 ***************/
        Pregunta::create([
            'id' => '1',
            'pregunta' => "Al estudiar... Leo todo lo que tengo que estudiar subrayando los puntos más importantes... ",
            'bloque' => '1',
            'id_cuest_eval' => '1'
        ]); 
        
        Pregunta::create([
            'id' => '2',
            'pregunta' => "Al estudiar... Subrayo las palabras cuyo significado no sé",
            'bloque' => '1',
            'id_cuest_eval' => '1'
        ]);

        Pregunta::create([
            'id' => '3',
            'pregunta' => "Al estudiar... Regreso a los puntos subrayados con el propósito de aclararlo",
            'bloque' => '1',
            'id_cuest_eval' => '1' 
        ]);

        Pregunta::create([
            'id' => '4',
            'pregunta' => "Al estudiar... Busco de inmediato en el diccionario el significado de la palabras que no sé",
            'bloque' => '1',
            'id_cuest_eval' => '1' 
        ]);

        Pregunta::create([
            'id' => '5',
            'pregunta' => "Al estudiar... Me hago preguntas y me respondo en mi propio lenguaje lo que he comprendido",
            'bloque' => '1',
            'id_cuest_eval' => '1' 
        ]);

        Pregunta::create([
            'id' => '6',
            'pregunta' => "Al estudiar... Luego, escribo en mi propio lenguaje lo que he comprendido",
            'bloque' => '1',
            'id_cuest_eval' => '1' 
        ]);

        Pregunta::create([
            'id' => '7',
            'pregunta' => "Al estudiar... Doy una leída parte por parte y repito varias veces hasta recitarlo de memmoria",
            'bloque' => '1',
            'id_cuest_eval' => '1' 
        ]);

        Pregunta::create([
            'id' => '8',
            'pregunta' => "Al estudiar... Trato de memorizar todo lo que estudio",
            'bloque' => '1',
            'id_cuest_eval' => '1' 
        ]);

        Pregunta::create([
            'id' => '9',
            'pregunta' => "Al estudiar... Repaso lo que he estudiado después de 4 a 8 horas",
            'bloque' => '1',
            'id_cuest_eval' => '1'
        ]);

        Pregunta::create([
            'id' => '10',
            'pregunta' => "Al estudiar... Me limito a dar una leída general a todo lo que tengo que estudiar",
            'bloque' => '1',
            'id_cuest_eval' => '1' 
        ]);

        /* 10 */
        Pregunta::create([
            'id' => '11',
            'pregunta' => "Al estudiar... Trato de relacionar el tema que estoy estudiando con otro temas ya estudiados",
            'bloque' => '1',
            'id_cuest_eval' => '1' 
        ]);

        Pregunta::create([
            'id' => '12',
            'pregunta' => "Al estudiar... Estudio solo para los exámenes",
            'bloque' => '1',
            'id_cuest_eval' => '1' 
        ]);

        Pregunta::create([
            'id' => '13',
            'pregunta' => "Al hacer mis tareas... Leo la pregunta, busco en el libro y escribio la respuesta casi como dice el libro",
            'bloque' => '2',
            'id_cuest_eval' => '1' 
        ]);

        Pregunta::create([
            'id' => '14',
            'pregunta' => "Al hacer mis tareas... Leo la pregunta, busco en el libro, leo todo y luego contesto según como he comprendido",
            'bloque' => '2',
            'id_cuest_eval' => '1'
        ]);

        Pregunta::create([
            'id' => '15',
            'pregunta' => "Al hacer mis tareas... Las palabras que no entiendo, las escribo como están en el libro, sin averiguar su significado",
            'bloque' => '2',
            'id_cuest_eval' => '1'
        ]);

        Pregunta::create([
            'id' => '16',
            'pregunta' => "Al hacer mis tareas... Le doy más importancia al orden y presentación del trabajo que a la comprensión del tema",
            'bloque' => '2',
            'id_cuest_eval' => '1'
        ]);

        Pregunta::create([
            'id' => '17',
            'pregunta' => "Al hacer mis tareas... En mi casa, me falta tiempo para terminar con mis tareas, las completo en el salón preguntando a mis amigos",
            'bloque' => '2',
            'id_cuest_eval' => '1' 
        ]);

        /* 18 */
        Pregunta::create([
            'id' => '18',
            'pregunta' => "Al hacer mis tareas... Pido ayuda a mis padres u otras personas que me resuelvan todo o gran parte de la tarea",
            'bloque' => '2',
            'id_cuest_eval' => '1' 
        ]);

        Pregunta::create([
            'id' => '19',
            'pregunta' => "Al hacer mis tareas... Dejo para último momento la ejecución de mis tareas por eso no las concluyo dentro del tiempo fijado",
            'bloque' => '2',
            'id_cuest_eval' => '1'
        ]);

        /* 20 */
        Pregunta::create([
            'id' => '20',
            'pregunta' => "Al hacer mis tareas... Empiezo a resolver una tarea, me canso y paso a otra",
            'bloque' => '2',
            'id_cuest_eval' => '1'
        ]);

        Pregunta::create([
            'id' => '21',
            'pregunta' => "Al hacer mis tareas... Cuando no puedo resolvere una tarea, me da rabia o mucha cólera y ya no la hago",
            'bloque' => '2',
            'id_cuest_eval' => '1'
        ]);

        Pregunta::create([
            'id' => '22',
            'pregunta' => "Al hacer mis tareas... Cuando tengo varias tareas empiezo por la más difícil y luego voy pasando a las más fáciles",
            'bloque' => '2',
            'id_cuest_eval' => '1'
        ]);

        Pregunta::create([
            'id' => '23',
            'pregunta' => "Para prepararme para los exámenes... Estudio por lo menos dos horas todos los días",
            'bloque' => '3',
            'id_cuest_eval' => '1' 
        ]);

        Pregunta::create([
            'id' => '24',
            'pregunta' => "Para prepararme para los exámenes... Espero que se fije la fecha de un examen o evaluación para ponerme a estudiar",
            'bloque' => '3',
            'id_cuest_eval' => '1'
        ]);

        Pregunta::create([
            'id' => '25',
            'pregunta' => "Para prepararme para los exámenes... Cuando hay examen oral, recién en el salón de clase me pongo a revisar mis apuntes",
            'bloque' => '3',
            'id_cuest_eval' => '1'
        ]);

        Pregunta::create([
            'id' => '26',
            'pregunta' => "Para prepararme para los exámenes... Me pongo a estudiar en el mismo día del examen",
            'bloque' => '3',
            'id_cuest_eval' => '1' 
        ]);

        Pregunta::create([
            'id' => '27',
            'pregunta' => "Para prepararme para los exámenes... Repaso momentos ante del examen",
            'bloque' => '3',
            'id_cuest_eval' => '1' 
        ]);

        Pregunta::create([
            'id' => '28',
            'pregunta' => "Para prepararme para los exámenes... Preparo un plagio por su acasi me olvido del tema",
            'bloque' => '3',
            'id_cuest_eval' => '1' 
        ]);

        Pregunta::create([
            'id' => '29',
            'pregunta' => "Para prepararme para los exámenes... Confío que mi compañero me 'sople' alguna respuesta en el momento del examen",
            'bloque' => '3',
            'id_cuest_eval' => '1'
        ]);

        /* 30 */
        Pregunta::create([
            'id' => '30',
            'pregunta' => "Para prepararme para los exámenes... Confío en mi buena suerte, por eso solo estudio aquellos temas que supongo que el profesor preguntará",
            'bloque' => '3',
            'id_cuest_eval' => '1'
        ]);

        Pregunta::create([
            'id' => '31',
            'pregunta' => "Para prepararme para los exámenes... Cuando tengo dos o más exámenes el mismo día empiezo a estudiar por el tema más difícil y luego por el más fácil",
            'bloque' => '3',
            'id_cuest_eval' => '1'
        ]);

        Pregunta::create([
            'id' => '32',
            'pregunta' => "Para prepararme para los exámenes... Me presento a rendir mis exámenes sin haber concluido con el estudio de todo el tema",
            'bloque' => '3',
            'id_cuest_eval' => '1' 
        ]);

        Pregunta::create([
            'id' => '33',
            'pregunta' => "Para prepararme para los exámenes... Durante el examen se me confunden los temas, se me olvida lo que he estudiado",
            'bloque' => '3',
            'id_cuest_eval' => '1'
        ]);

        Pregunta::create([
            'id' => '34',
            'pregunta' => "Al escuchar mis clases... Trato de tomar apuntes de todo lo que dice el profesor",
            'bloque' => '4',
            'id_cuest_eval' => '1'
        ]);

        Pregunta::create([
            'id' => '35',
            'pregunta' => "Al escuchar mis clases... Solo tomo apuntes de las cosas más importantes",
            'bloque' => '4',
            'id_cuest_eval' => '1' 
        ]);

        Pregunta::create([
            'id' => '36',
            'pregunta' => "Al escuchar mis clases... Inmediatamente después de una clase ordeno mis apuntes",
            'bloque' => '4',
            'id_cuest_eval' => '1'
        ]);
        
        Pregunta::create([
            'id' => '37',
            'pregunta' => "Al escuchar mis clases... Cuando el profesor utiliza alguna palabra que no sé, levanto la mano y pido su significado",
            'bloque' => '4',
            'id_cuest_eval' => '1'
        ]);

        Pregunta::create([
            'id' => '38',
            'pregunta' => "Al escuchar mis clases... Estoy más atento a las bromas de mis compañeros que a la clase",
            'bloque' => '4',
            'id_cuest_eval' => '1' 
        ]);

        Pregunta::create([
            'id' => '39',
            'pregunta' => "Al escuchar mis clases... Me canso rápidamente y me pongo a hacer otras cosas",
            'bloque' => '4',
            'id_cuest_eval' => '1' 
        ]);

        /* 40 */
        Pregunta::create([
            'id' => '40',
            'pregunta' => "Al escuchar mis clases... Cuando me aburro me pongo a jugar o a conversar con mi amigo",
            'bloque' => '4',
            'id_cuest_eval' => '1'
        ]);

        Pregunta::create([
            'id' => '41',
            'pregunta' => "Al escuchar mis clases... Cuando no puedo tomar nota de lo que dice el profesor, me aburro y lo dejo todo",
            'bloque' => '4',
            'id_cuest_eval' => '1'
        ]);

        Pregunta::create([
            'id' => '42',
            'pregunta' => "Al escuchar mis clases... Cuando no entiendo un tema, mi mente se pone a pensar, soñando despierto",
            'bloque' => '4',
            'id_cuest_eval' => '1'
        ]);

        Pregunta::create([
            'id' => '43',
            'pregunta' => "Al escuchar mis clases... Mis imaginaciones o fantasías me distraen durante las clases",
            'bloque' => '4',
            'id_cuest_eval' => '1' 
        ]);

        Pregunta::create([
            'id' => '44',
            'pregunta' => "Al escuchar mis clases... Durante las clases me distraigo pensando lo que voy a hacer en la salida",
            'bloque' => '4',
            'id_cuest_eval' => '1' 
        ]);

        Pregunta::create([
            'id' => '45',
            'pregunta' => "Al escuchar mis clases... Durante las clases me gustaría dormir o tal vez irme de clase",
            'bloque' => '4',
            'id_cuest_eval' => '1'
        ]);

        Pregunta::create([
            'id' => '46',
            'pregunta' => "Al escuchar mis clases... Durante las clases, atiendo llamadas o mensajes de mi celular",
            'bloque' => '4',
            'id_cuest_eval' => '1'
        ]);

        Pregunta::create([
            'id' => '47',
            'pregunta' => "En mis momentos de estudio...Requiero de música, sea del radio o del mini componente",
            'bloque' => '5',
            'id_cuest_eval' => '1'
        ]);

        Pregunta::create([
            'id' => '48',
            'pregunta' => "En mis momentos de estudio... Requiero de la compañía de la TV",
            'bloque' => '5',
            'id_cuest_eval' => '1' 
        ]);

        Pregunta::create([
            'id' => '49',
            'pregunta' => "En mis momentos de estudio... Requiero de tranquilidad y silencio",
            'bloque' => '5',
            'id_cuest_eval' => '1' 
        ]);

        /* 50 */
        Pregunta::create([
            'id' => '50',
            'pregunta' => "En mis momentos de estudio... Requiero de algún alimento que como mientras estudio",
            'bloque' => '5',
            'id_cuest_eval' => '1'
        ]);

        Pregunta::create([
            'id' => '51',
            'pregunta' => "En mis momentos de estudio... Su familia conversa, ve TV o escucha música",
            'bloque' => '5',
            'id_cuest_eval' => '1' 
        ]);

        Pregunta::create([
            'id' => '52',
            'pregunta' => "En mis momentos de estudio...  Ocurren interrupciones por parte de sus padres pidiéndole algún favor",
            'bloque' => '5',
            'id_cuest_eval' => '1' 
        ]);

        Pregunta::create([
            'id' => '53',
            'pregunta' => "En mis momentos de estudio...  Ocurren interrupciones como visitas o amigos que me quitan el tiempo",
            'bloque' => '5',
            'id_cuest_eval' => '1' 
        ]);

        Pregunta::create([
            'id' => '54',
            'pregunta' => "En mis momentos de estudio... Ocurren interrupciones sociales, como fiestas, paseos, citas, etc",
            'bloque' => '5',
            'id_cuest_eval' => '1' 
        ]);

        Pregunta::create([
            'id' => '55',
            'pregunta' => "En mis momentos de estudio... Debo estar conectado por celular u otro medio, con mis redes sociales",
            'bloque' => '5',
            'id_cuest_eval' => '1' 
        ]);

        /*************** SEGUNDO TEST: Inventario de Depresion de Beck ***************/
        Pregunta::create([
            'id' => '56',
            'pregunta' => "Tristeza",
            'bloque' => '1',
            'id_cuest_eval' => '2' 
        ]);

        Pregunta::create([
            'id' => '57',
            'pregunta' => "Pesimismo",
            'bloque' => '1',
            'id_cuest_eval' => '2' 
        ]);

        Pregunta::create([
            'id' => '58',
            'pregunta' => "Fracaso",
            'bloque' => '1',
            'id_cuest_eval' => '2' 
        ]);

        Pregunta::create([
            'id' => '59',
            'pregunta' => "Pérdida de Placer",
            'bloque' => '1',
            'id_cuest_eval' => '2' 
        ]);

        Pregunta::create([
            'id' => '60',
            'pregunta' => "Sentimientos de culpa",
            'bloque' => '1',
            'id_cuest_eval' => '2' 
        ]);

        Pregunta::create([
            'id' => '61',
            'pregunta' => "Sentimientos de castigo",
            'bloque' => '1',
            'id_cuest_eval' => '2' 
        ]);

        Pregunta::create([
            'id' => '62',
            'pregunta' => "Disconformidad con uno mismo",
            'bloque' => '1',
            'id_cuest_eval' => '2' 
        ]);

        Pregunta::create([
            'id' => '63',
            'pregunta' => "Autocrítica",
            'bloque' => '1',
            'id_cuest_eval' => '2' 
        ]);

        Pregunta::create([
            'id' => '64',
            'pregunta' => "Pensamientos o Deseos Suicidas",
            'bloque' => '1',
            'id_cuest_eval' => '2' 
        ]);
        
        /* 10 */
        Pregunta::create([
            'id' => '65',
            'pregunta' => "Llanto",
            'bloque' => '1',
            'id_cuest_eval' => '2' 
        ]);

        Pregunta::create([
            'id' => '66',
            'pregunta' => "Agitación",
            'bloque' => '1',
            'id_cuest_eval' => '2' 
        ]);

        Pregunta::create([
            'id' => '67',
            'pregunta' => "Pérdida de interés",
            'bloque' => '2',
            'id_cuest_eval' => '2' 
        ]);

        Pregunta::create([
            'id' => '68',
            'pregunta' => "Indecisión",
            'bloque' => '2',
            'id_cuest_eval' => '2' 
        ]);

        Pregunta::create([
            'id' => '69',
            'pregunta' => "Desvalorización",
            'bloque' => '2',
            'id_cuest_eval' => '2' 
        ]);
        Pregunta::create([
            'id' => '70',
            'pregunta' => "Pérdida de energía",
            'bloque' => '2',
            'id_cuest_eval' => '2' 
        ]);

        Pregunta::create([
            'id' => '71',
            'pregunta' => "Cambios en los hábitos de sueño",
            'bloque' => '2',
            'id_cuest_eval' => '2' 
        ]);

        Pregunta::create([
            'id' => '72',
            'pregunta' => "Irritabilidad",
            'bloque' => '2',
            'id_cuest_eval' => '2' 
        ]);

        Pregunta::create([
            'id' => '73',
            'pregunta' => "Cambios en el apetito",
            'bloque' => '2',
            'id_cuest_eval' => '2' 
        ]);

        Pregunta::create([
            'id' => '74',
            'pregunta' => "Dificultad de concentración",
            'bloque' => '2',
            'id_cuest_eval' => '2' 
        ]);

        Pregunta::create([
            'id' => '75',
            'pregunta' => "Cansancio o fatiga",
            'bloque' => '2',
            'id_cuest_eval' => '2' 
        ]);

        Pregunta::create([
            'id' => '76',
            'pregunta' => "Pérdida de interés en el sexo",
            'bloque' => '2',
            'id_cuest_eval' => '2' 
        ]);

        /*** SOLO TEST DE PRUEBA */
        Pregunta::create([
            'id' => '77',
            'pregunta' => "Pregunta prueba 01",
            'bloque' => '1',
            'id_cuest_eval' => '3' 
        ]);

        Pregunta::create([
            'id' => '78',
            'pregunta' => "Pregunta prueba 02",
            'bloque' => '1',
            'id_cuest_eval' => '3' 
        ]);

        /*************** TERCER TEST: Inventario de intereses vocacionales y ocupacionales CASM-83 Revisión 2014 ***************/
        /** 01 */
        Pregunta::create([
            'id' => '79',
            'pregunta' => "",
            'bloque' => '1',
            'id_cuest_eval' => '4'
       ]); 
        /** 02 */
        Pregunta::create([
            'id' => '80',
            'pregunta' => "",
            'bloque' => '1',
            'id_cuest_eval' => '4'
        ]); 
        /** 03 */
        Pregunta::create([
            'id' => '81',
            'pregunta' => "",
            'bloque' => '1',
            'id_cuest_eval' => '4'
        ]); 
        /** 04 */
        Pregunta::create([
            'id' => '82',
            'pregunta' => "",
            'bloque' => '1',
            'id_cuest_eval' => '4'
        ]);
       /** 05 */
        Pregunta::create([
            'id' => '83',
            'pregunta' => "",
            'bloque' => '1',
            'id_cuest_eval' => '4'
       ]); 
        /** 06 */
        Pregunta::create([
            'id' => '84',
            'pregunta' => "",
            'bloque' => '1',
            'id_cuest_eval' => '4'
        ]); 
        /** 07 */
        Pregunta::create([
            'id' => '85',
            'pregunta' => "",
            'bloque' => '1',
            'id_cuest_eval' => '4'
        ]); 
        /** 08 */
        Pregunta::create([
            'id' => '86',
            'pregunta' => "",
            'bloque' => '1',
            'id_cuest_eval' => '4'
        ]); 
        /** 09 */
        Pregunta::create([
            'id' => '87',
            'pregunta' => "",
            'bloque' => '1',
            'id_cuest_eval' => '4'
        ]); 
        /** 10 */
        Pregunta::create([
            'id' => '88',
            'pregunta' => "",
            'bloque' => '1',
            'id_cuest_eval' => '4'
        ]); 
        /** 11 */
        Pregunta::create([
            'id' => '89',
            'pregunta' => "",
            'bloque' => '1',
            'id_cuest_eval' => '4'
        ]); 
        /** 12 */
        Pregunta::create([
            'id' => '90',
            'pregunta' => "",
            'bloque' => '1',
            'id_cuest_eval' => '4'
        ]); 
        /** 13 */
        Pregunta::create([
            'id' => '91',
            'pregunta' => "",
            'bloque' => '1',
            'id_cuest_eval' => '4'
        ]); 
        /** 14 */
        Pregunta::create([
            'id' => '92',
            'pregunta' => "",
            'bloque' => '1',
            'id_cuest_eval' => '4'
        ]); 
        /** 15 */
        Pregunta::create([
            'id' => '93',
            'pregunta' => "",
            'bloque' => '1',
            'id_cuest_eval' => '4'
        ]); 
        /** 16 */
        Pregunta::create([
            'id' => '94',
            'pregunta' => "",
            'bloque' => '1',
            'id_cuest_eval' => '4'
        ]);
       /** 17 */
        Pregunta::create([
            'id' => '95',
            'pregunta' => "",
            'bloque' => '1',
            'id_cuest_eval' => '4'
       ]); 
        /** 18 */
        Pregunta::create([
            'id' => '96',
            'pregunta' => "",
            'bloque' => '1',
            'id_cuest_eval' => '4'
        ]); 
        /** 19 */
        Pregunta::create([
            'id' => '97',
            'pregunta' => "",
            'bloque' => '1',
            'id_cuest_eval' => '4'
        ]); 
        /** 20 */
        Pregunta::create([
            'id' => '98',
            'pregunta' => "",
            'bloque' => '1',
            'id_cuest_eval' => '4'
        ]); 
        /** 21 */
        Pregunta::create([
            'id' => '99',
            'pregunta' => "",
            'bloque' => '1',
            'id_cuest_eval' => '4'
        ]); 
        /** 22 */
        Pregunta::create([
            'id' => '100',
            'pregunta' => "",
            'bloque' => '1',
            'id_cuest_eval' => '4'
        ]); 
        /** 23 */
        Pregunta::create([
            'id' => '101',
            'pregunta' => "",
            'bloque' => '1',
            'id_cuest_eval' => '4'
        ]); 
        /** 24 */
        Pregunta::create([
            'id' => '102',
            'pregunta' => "",
            'bloque' => '1',
            'id_cuest_eval' => '4'
        ]);
        /** 25 */
        Pregunta::create([
            'id' => '103',
            'pregunta' => "",
            'bloque' => '1',
            'id_cuest_eval' => '4'
       ]); 
        /** 26 */
        Pregunta::create([
            'id' => '104',
            'pregunta' => "",
            'bloque' => '1',
            'id_cuest_eval' => '4'
        ]); 
        /** 27 */
        Pregunta::create([
            'id' => '105',
            'pregunta' => "",
            'bloque' => '1',
            'id_cuest_eval' => '4'
        ]); 
        /** 28 */
        Pregunta::create([
            'id' => '106',
            'pregunta' => "",
            'bloque' => '1',
            'id_cuest_eval' => '4'
        ]);
       /** 29 */
        Pregunta::create([
            'id' => '107',
            'pregunta' => "",
            'bloque' => '1',
            'id_cuest_eval' => '4'
       ]); 
        /** 30 */
        Pregunta::create([
            'id' => '108',
            'pregunta' => "",
            'bloque' => '1',
            'id_cuest_eval' => '4'
        ]); 
        /** 31 */
        Pregunta::create([
            'id' => '109',
            'pregunta' => "",
            'bloque' => '2',
            'id_cuest_eval' => '4'
        ]); 
        /** 32 */
        Pregunta::create([
            'id' => '110',
            'pregunta' => "",
            'bloque' => '2',
            'id_cuest_eval' => '4'
        ]); 
        /** 33 */
        Pregunta::create([
            'id' => '111',
            'pregunta' => "",
            'bloque' => '2',
            'id_cuest_eval' => '4'
        ]); 
        /** 34 */
        Pregunta::create([
            'id' => '112',
            'pregunta' => "",
            'bloque' => '2',
            'id_cuest_eval' => '4'
        ]); 
        /** 35 */
        Pregunta::create([
            'id' => '113',
            'pregunta' => "",
            'bloque' => '2',
            'id_cuest_eval' => '4'
        ]); 
        /** 36 */
        Pregunta::create([
            'id' => '114',
            'pregunta' => "",
            'bloque' => '2',
            'id_cuest_eval' => '4'
        ]);  
        /** 37 */
        Pregunta::create([
            'id' => '115',
            'pregunta' => "",
            'bloque' => '2',
            'id_cuest_eval' => '4'
        ]); 
        /** 38 */
        Pregunta::create([
            'id' => '116',
            'pregunta' => "",
            'bloque' => '2',
            'id_cuest_eval' => '4'
        ]); 
        /** 39 */
        Pregunta::create([
            'id' => '117',
            'pregunta' => "",
            'bloque' => '2',
            'id_cuest_eval' => '4'
        ]); 
        /** 40 */
        Pregunta::create([
            'id' => '118',
            'pregunta' => "",
            'bloque' => '2',
            'id_cuest_eval' => '4'
        ]); 
        /** 41 */
        Pregunta::create([
            'id' => '119',
            'pregunta' => "",
            'bloque' => '2',
            'id_cuest_eval' => '4'
        ]); 
        /** 42 */
        Pregunta::create([
            'id' => '120',
            'pregunta' => "",
            'bloque' => '2',
            'id_cuest_eval' => '4'
        ]); 
        /** 43 */
        Pregunta::create([
            'id' => '121',
            'pregunta' => "",
            'bloque' => '2',
            'id_cuest_eval' => '4'
        ]);
        /** 44 */
        Pregunta::create([
            'id' => '122',
            'pregunta' => "",
            'bloque' => '2',
            'id_cuest_eval' => '4'
        ]); 
        /** 45 */
        Pregunta::create([
            'id' => '123',
            'pregunta' => "",
            'bloque' => '2',
            'id_cuest_eval' => '4'
        ]); 
        /** 46 */
        Pregunta::create([
            'id' => '124',
            'pregunta' => "",
            'bloque' => '2',
            'id_cuest_eval' => '4'
        ]); 
        /** 47 */
        Pregunta::create([
            'id' => '125',
            'pregunta' => "",
            'bloque' => '2',
            'id_cuest_eval' => '4'
        ]); 
        /** 48 */
        Pregunta::create([
            'id' => '126',
            'pregunta' => "",
            'bloque' => '2',
            'id_cuest_eval' => '4'
        ]); 
        /** 49 */
        Pregunta::create([
            'id' => '127',
            'pregunta' => "",
            'bloque' => '2',
            'id_cuest_eval' => '4'
        ]); 
        /** 50 */
        Pregunta::create([
            'id' => '128',
            'pregunta' => "",
            'bloque' => '2',
            'id_cuest_eval' => '4'
        ]); 
        /** 51 */
        Pregunta::create([
            'id' => '129',
            'pregunta' => "",
            'bloque' => '2',
            'id_cuest_eval' => '4'
        ]); 
        /** 52 */
        Pregunta::create([
            'id' => '130',
            'pregunta' => "",
            'bloque' => '2',
            'id_cuest_eval' => '4'
        ]); 
        /** 53 */
        Pregunta::create([
            'id' => '131',
            'pregunta' => "",
            'bloque' => '2',
            'id_cuest_eval' => '4'
        ]);
        /** 54 */
        Pregunta::create([
            'id' => '132',
            'pregunta' => "",
            'bloque' => '2',
            'id_cuest_eval' => '4'
        ]); 
        /** 55 */
        Pregunta::create([
            'id' => '133',
            'pregunta' => "",
            'bloque' => '2',
            'id_cuest_eval' => '4'
        ]); 
        /** 56 */
        Pregunta::create([
            'id' => '134',
            'pregunta' => "",
            'bloque' => '2',
            'id_cuest_eval' => '4'
        ]); 
        /** 57 */
        Pregunta::create([
            'id' => '135',
            'pregunta' => "",
            'bloque' => '2',
            'id_cuest_eval' => '4'
        ]); 
        /** 58 */
        Pregunta::create([
            'id' => '136',
            'pregunta' => "",
            'bloque' => '2',
            'id_cuest_eval' => '4'
        ]); 
        /** 59 */
        Pregunta::create([
            'id' => '137',
            'pregunta' => "",
            'bloque' => '2',
            'id_cuest_eval' => '4'
        ]); 
        /** 60 */
        Pregunta::create([
            'id' => '138',
            'pregunta' => "",
            'bloque' => '2',
            'id_cuest_eval' => '4'
        ]); 
        /** 61 */
        Pregunta::create([
            'id' => '139',
            'pregunta' => "",
            'bloque' => '3',
            'id_cuest_eval' => '4'
        ]); 
        /** 62 */
        Pregunta::create([
            'id' => '140',
            'pregunta' => "",
            'bloque' => '3',
            'id_cuest_eval' => '4'
        ]); 
        /** 63 */
        Pregunta::create([
            'id' => '141',
            'pregunta' => "",
            'bloque' => '3',
            'id_cuest_eval' => '4'
        ]);
        /** 64 */
        Pregunta::create([
            'id' => '142',
            'pregunta' => "",
            'bloque' => '3',
            'id_cuest_eval' => '4'
        ]); 
        /** 65 */
        Pregunta::create([
            'id' => '143',
            'pregunta' => "",
            'bloque' => '3',
            'id_cuest_eval' => '4'
        ]); 
        /** 66 */
        Pregunta::create([
            'id' => '144',
            'pregunta' => "",
            'bloque' => '3',
            'id_cuest_eval' => '4'
        ]); 
        /** 67 */
        Pregunta::create([
            'id' => '145',
            'pregunta' => "",
            'bloque' => '3',
            'id_cuest_eval' => '4'
        ]); 
        /** 68 */
        Pregunta::create([
            'id' => '146',
            'pregunta' => "",
            'bloque' => '3',
            'id_cuest_eval' => '4'
        ]); 
        /** 69 */
        Pregunta::create([
            'id' => '147',
            'pregunta' => "",
            'bloque' => '3',
            'id_cuest_eval' => '4'
        ]); 
        /** 70 */
        Pregunta::create([
            'id' => '148',
            'pregunta' => "",
            'bloque' => '3',
            'id_cuest_eval' => '4'
        ]);
        /** 71 */
        Pregunta::create([
            'id' => '149',
            'pregunta' => "",
            'bloque' => '3',
            'id_cuest_eval' => '4'
        ]); 
        /** 72 */
        Pregunta::create([
            'id' => '150',
            'pregunta' => "",
            'bloque' => '3',
            'id_cuest_eval' => '4'
        ]); 
        /** 73 */
        Pregunta::create([
            'id' => '151',
            'pregunta' => "",
            'bloque' => '3',
            'id_cuest_eval' => '4'
        ]);
        /** 74 */
        Pregunta::create([
            'id' => '152',
            'pregunta' => "",
            'bloque' => '3',
            'id_cuest_eval' => '4'
        ]); 
        /** 75 */
        Pregunta::create([
            'id' => '153',
            'pregunta' => "",
            'bloque' => '3',
            'id_cuest_eval' => '4'
        ]); 
        /** 76 */
        Pregunta::create([
            'id' => '154',
            'pregunta' => "",
            'bloque' => '3',
            'id_cuest_eval' => '4'
        ]); 
        /** 77 */
        Pregunta::create([
            'id' => '155',
            'pregunta' => "",
            'bloque' => '3',
            'id_cuest_eval' => '4'
        ]); 
        /** 78 */
        Pregunta::create([
            'id' => '156',
            'pregunta' => "",
            'bloque' => '3',
            'id_cuest_eval' => '4'
        ]); 
        /** 79 */
        Pregunta::create([
            'id' => '157',
            'pregunta' => "",
            'bloque' => '3',
            'id_cuest_eval' => '4'
        ]); 
        /** 80 */
        Pregunta::create([
            'id' => '158',
            'pregunta' => "",
            'bloque' => '3',
            'id_cuest_eval' => '4'
        ]);
        /** 81 */
        Pregunta::create([
            'id' => '159',
            'pregunta' => "",
            'bloque' => '3',
            'id_cuest_eval' => '4'
        ]); 
        /** 82 */
        Pregunta::create([
            'id' => '160',
            'pregunta' => "",
            'bloque' => '3',
            'id_cuest_eval' => '4'
        ]); 
        /** 83 */
        Pregunta::create([
            'id' => '161',
            'pregunta' => "",
            'bloque' => '3',
            'id_cuest_eval' => '4'
        ]);
        /** 84 */
        Pregunta::create([
            'id' => '162',
            'pregunta' => "",
            'bloque' => '3',
            'id_cuest_eval' => '4'
        ]); 
        /** 85 */
        Pregunta::create([
            'id' => '163',
            'pregunta' => "",
            'bloque' => '3',
            'id_cuest_eval' => '4'
        ]); 
        /** 86 */
        Pregunta::create([
            'id' => '164',
            'pregunta' => "",
            'bloque' => '3',
            'id_cuest_eval' => '4'
        ]); 
        /** 87 */
        Pregunta::create([
            'id' => '165',
            'pregunta' => "",
            'bloque' => '3',
            'id_cuest_eval' => '4'
        ]); 
        /** 88 */
        Pregunta::create([
            'id' => '166',
            'pregunta' => "",
            'bloque' => '3',
            'id_cuest_eval' => '4'
        ]); 
        /** 89 */
        Pregunta::create([
            'id' => '167',
            'pregunta' => "",
            'bloque' => '3',
            'id_cuest_eval' => '4'
        ]); 
        /** 90 */
        Pregunta::create([
            'id' => '168',
            'pregunta' => "",
            'bloque' => '3',
            'id_cuest_eval' => '4'
        ]);
        /** 91 */
        Pregunta::create([
            'id' => '169',
            'pregunta' => "",
            'bloque' => '4',
            'id_cuest_eval' => '4'
        ]); 
        /** 92 */
        Pregunta::create([
            'id' => '170',
            'pregunta' => "",
            'bloque' => '4',
            'id_cuest_eval' => '4'
        ]); 
        /** 93 */
        Pregunta::create([
            'id' => '171',
            'pregunta' => "",
            'bloque' => '4',
            'id_cuest_eval' => '4'
        ]);
        /** 94 */
        Pregunta::create([
            'id' => '172',
            'pregunta' => "",
            'bloque' => '4',
            'id_cuest_eval' => '4'
        ]); 
        /** 95 */
        Pregunta::create([
            'id' => '173',
            'pregunta' => "",
            'bloque' => '4',
            'id_cuest_eval' => '4'
        ]); 
        /** 96 */
        Pregunta::create([
            'id' => '174',
            'pregunta' => "",
            'bloque' => '4',
            'id_cuest_eval' => '4'
        ]); 
        /** 97 */
        Pregunta::create([
            'id' => '175',
            'pregunta' => "",
            'bloque' => '4',
            'id_cuest_eval' => '4'
        ]); 
        /** 98 */
        Pregunta::create([
            'id' => '176',
            'pregunta' => "",
            'bloque' => '4',
            'id_cuest_eval' => '4'
        ]); 
        /** 99 */
        Pregunta::create([
            'id' => '177',
            'pregunta' => "",
            'bloque' => '4',
            'id_cuest_eval' => '4'
        ]); 
        /** 100 */
        Pregunta::create([
            'id' => '178',
            'pregunta' => "",
            'bloque' => '4',
            'id_cuest_eval' => '4'
        ]);
        /** 101 */
        Pregunta::create([
            'id' => '179',
            'pregunta' => "",
            'bloque' => '4',
            'id_cuest_eval' => '4'
        ]); 
        /** 102 */
        Pregunta::create([
            'id' => '180',
            'pregunta' => "",
            'bloque' => '4',
            'id_cuest_eval' => '4'
        ]); 
        /** 103 */
        Pregunta::create([
            'id' => '181',
            'pregunta' => "",
            'bloque' => '4',
            'id_cuest_eval' => '4'
        ]);
        /** 104 */
        Pregunta::create([
            'id' => '182',
            'pregunta' => "",
            'bloque' => '4',
            'id_cuest_eval' => '4'
        ]); 
        /** 105 */
        Pregunta::create([
            'id' => '183',
            'pregunta' => "",
            'bloque' => '4',
            'id_cuest_eval' => '4'
        ]); 
        /** 106 */
        Pregunta::create([
            'id' => '184',
            'pregunta' => "",
            'bloque' => '4',
            'id_cuest_eval' => '4'
        ]); 
        /** 107 */
        Pregunta::create([
            'id' => '185',
            'pregunta' => "",
            'bloque' => '4',
            'id_cuest_eval' => '4'
        ]); 
        /** 108 */
        Pregunta::create([
            'id' => '186',
            'pregunta' => "",
            'bloque' => '4',
            'id_cuest_eval' => '4'
        ]); 
        /** 109 */
        Pregunta::create([
            'id' => '187',
            'pregunta' => "",
            'bloque' => '4',
            'id_cuest_eval' => '4'
        ]); 
        /** 110 */
        Pregunta::create([
            'id' => '188',
            'pregunta' => "",
            'bloque' => '3',
            'id_cuest_eval' => '4'
        ]);   
        /** 111 */
        Pregunta::create([
            'id' => '189',
            'pregunta' => "",
            'bloque' => '4',
            'id_cuest_eval' => '4'
        ]); 
        /** 112 */
        Pregunta::create([
            'id' => '190',
            'pregunta' => "",
            'bloque' => '4',
            'id_cuest_eval' => '4'
        ]); 
        /** 113 */
        Pregunta::create([
            'id' => '191',
            'pregunta' => "",
            'bloque' => '4',
            'id_cuest_eval' => '4'
        ]);
        /** 114 */
        Pregunta::create([
            'id' => '192',
            'pregunta' => "",
            'bloque' => '4',
            'id_cuest_eval' => '4'
        ]); 
        /** 115 */
        Pregunta::create([
            'id' => '193',
            'pregunta' => "",
            'bloque' => '4',
            'id_cuest_eval' => '4'
        ]); 
        /** 116 */
        Pregunta::create([
            'id' => '194',
            'pregunta' => "",
            'bloque' => '4',
            'id_cuest_eval' => '4'
        ]); 
        /** 117 */
        Pregunta::create([
            'id' => '195',
            'pregunta' => "",
            'bloque' => '4',
            'id_cuest_eval' => '4'
        ]); 
        /** 118 */
        Pregunta::create([
            'id' => '196',
            'pregunta' => "",
            'bloque' => '4',
            'id_cuest_eval' => '4'
        ]); 
        /** 119 */
        Pregunta::create([
            'id' => '197',
            'pregunta' => "",
            'bloque' => '4',
            'id_cuest_eval' => '4'
        ]); 
        /** 120 */
        Pregunta::create([
            'id' => '198',
            'pregunta' => "",
            'bloque' => '3',
            'id_cuest_eval' => '4'
        ]);
        /** 121 */
        Pregunta::create([
            'id' => '199',
            'pregunta' => "",
            'bloque' => '5',
            'id_cuest_eval' => '4'
        ]); 
        /** 122 */
        Pregunta::create([
            'id' => '200',
            'pregunta' => "",
            'bloque' => '5',
            'id_cuest_eval' => '4'
        ]); 
        /** 123 */
        Pregunta::create([
            'id' => '201',
            'pregunta' => "",
            'bloque' => '5',
            'id_cuest_eval' => '4'
        ]);
        /** 124 */
        Pregunta::create([
            'id' => '202',
            'pregunta' => "",
            'bloque' => '5',
            'id_cuest_eval' => '4'
        ]); 
        /** 125 */
        Pregunta::create([
            'id' => '203',
            'pregunta' => "",
            'bloque' => '5',
            'id_cuest_eval' => '4'
        ]); 
        /** 126 */
        Pregunta::create([
            'id' => '204',
            'pregunta' => "",
            'bloque' => '5',
            'id_cuest_eval' => '4'
        ]); 
        /** 127 */
        Pregunta::create([
            'id' => '205',
            'pregunta' => "",
            'bloque' => '5',
            'id_cuest_eval' => '4'
        ]); 
        /** 128 */
        Pregunta::create([
            'id' => '206',
            'pregunta' => "",
            'bloque' => '5',
            'id_cuest_eval' => '4'
        ]); 
        /** 129 */
        Pregunta::create([
            'id' => '207',
            'pregunta' => "",
            'bloque' => '5',
            'id_cuest_eval' => '4'
        ]); 
        /** 130 */
        Pregunta::create([
            'id' => '208',
            'pregunta' => "",
            'bloque' => '5',
            'id_cuest_eval' => '4'
        ]);
        /** 131 */
        Pregunta::create([
            'id' => '209',
            'pregunta' => "",
            'bloque' => '5',
            'id_cuest_eval' => '4'
        ]); 
        /** 132 */
        Pregunta::create([
            'id' => '210',
            'pregunta' => "",
            'bloque' => '5',
            'id_cuest_eval' => '4'
        ]); 
        /** 133 */
        Pregunta::create([
            'id' => '211',
            'pregunta' => "",
            'bloque' => '5',
            'id_cuest_eval' => '4'
        ]);
        /** 134 */
        Pregunta::create([
            'id' => '212',
            'pregunta' => "",
            'bloque' => '5',
            'id_cuest_eval' => '4'
        ]); 
        /** 135 */
        Pregunta::create([
            'id' => '213',
            'pregunta' => "",
            'bloque' => '5',
            'id_cuest_eval' => '4'
        ]); 
        /** 136 */
        Pregunta::create([
            'id' => '214',
            'pregunta' => "",
            'bloque' => '5',
            'id_cuest_eval' => '4'
        ]); 
        /** 137 */
        Pregunta::create([
            'id' => '215',
            'pregunta' => "",
            'bloque' => '5',
            'id_cuest_eval' => '4'
        ]); 
        /** 138 */
        Pregunta::create([
            'id' => '216',
            'pregunta' => "",
            'bloque' => '5',
            'id_cuest_eval' => '4'
        ]); 
        /** 139 */
        Pregunta::create([
            'id' => '217',
            'pregunta' => "",
            'bloque' => '5',
            'id_cuest_eval' => '4'
        ]); 
        /** 140 */
        Pregunta::create([
            'id' => '218',
            'pregunta' => "",
            'bloque' => '5',
            'id_cuest_eval' => '4'
        ]);
        /** 141 */
        Pregunta::create([
            'id' => '219',
            'pregunta' => "",
            'bloque' => '5',
            'id_cuest_eval' => '4'
        ]); 
        /** 142 */
        Pregunta::create([
            'id' => '220',
            'pregunta' => "",
            'bloque' => '5',
            'id_cuest_eval' => '4'
        ]); 
        /** 143 */
        Pregunta::create([
            'id' => '221',
            'pregunta' => "",
            'bloque' => '5',
            'id_cuest_eval' => '4'
        ]);
    }
}
