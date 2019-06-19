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
        //*************** PRIMER TEST: Inventario de Hábitos de Estudio CASM-85 Revisión 2017 ***************/
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
/*         Pregunta::create([
            'id' => '77',
            'pregunta' => "Pregunta prueba 01",
            'bloque' => '1',
            'id_cuest_eval' => '3' 
        ]);

        Pregunta::create([
            'id' => '78',
            'pregunta' => "Pregunta prueba 02",
            'bloque' => '2',
            'id_cuest_eval' => '3' 
        ]);  */


        /*************** TERCER TEST: Inventario de intereses vocacionales y ocupacionales CASM-83 Revisión 2014 ***************/
        /* /** 01 
        Pregunta::create([
            'id' => '79',
            'pregunta' => "He comprendido bien las instrucciones para contestar el cuestionario",
            'bloque' => '1',
            'id_cuest_eval' => '4'
       ]); 
        /** 02 
        Pregunta::create([
            'id' => '80',
            'pregunta' => "Estoy dispuesto a contestar todas las cuestiones con sinceridad:",
            'bloque' => '1',
            'id_cuest_eval' => '4'
        ]); 
        /** 03 
        Pregunta::create([
            'id' => '81',
            'pregunta' => "¿Cuáles de las siguientes palabras es diferente de las otras dos?:",
            'bloque' => '1',
            'id_cuest_eval' => '4'
        ]); 
        /** 04 
        Pregunta::create([
            'id' => '82',
            'pregunta' => "Poseo suficiente energía para enfrentarme a todos mis problemas:",
            'bloque' => '1',
            'id_cuest_eval' => '4'
        ]);
       /** 05 
        Pregunta::create([
            'id' => '83',
            'pregunta' => "Evito criticar a la gente y a sus ideas:",
            'bloque' => '1',
            'id_cuest_eval' => '4'
       ]); 
        /** 06 
        Pregunta::create([
            'id' => '84',
            'pregunta' => "Hago agudas y sarcácticas observaciones a la gente si creo que las merecen:",
            'bloque' => '1',
            'id_cuest_eval' => '4'
        ]); 
        /** 07 
        Pregunta::create([
            'id' => '85',
            'pregunta' => "Me gusta más la música semiclásica que las canciones populares:",
            'bloque' => '1',
            'id_cuest_eval' => '4'
        ]); 
        /** 08 
        Pregunta::create([
            'id' => '86',
            'pregunta' => "Si veo peleándose a los niños de mis vecinos:",
            'bloque' => '1',
            'id_cuest_eval' => '4'
        ]); 
        /** 09 
        Pregunta::create([
            'id' => '87',
            'pregunta' => "En situaciones sociales:",
            'bloque' => '1',
            'id_cuest_eval' => '4'
        ]); 
        /** 10 
        Pregunta::create([
            'id' => '88',
            'pregunta' => "Sería más interesante ser:",
            'bloque' => '1',
            'id_cuest_eval' => '4'
        ]); 
        /** 11 
        Pregunta::create([
            'id' => '89',
            'pregunta' => "Generalmente puedo tolerar a la gente presuntuosa, aunque fanfarronee o piense demasiado bien de ella misma:",
            'bloque' => '1',
            'id_cuest_eval' => '4'
        ]); 
        /** 12 
        Pregunta::create([
            'id' => '90',
            'pregunta' => "Cuando una persona no es honrada, casi siempre se le puede notar en la cara",
            'bloque' => '1',
            'id_cuest_eval' => '4'
        ]); 
        /** 13 
        Pregunta::create([
            'id' => '91',
            'pregunta' => "Aceptaría mejor el riesgo de un trabajo donde pudiera tener ganancias mayores, aunque eventuales, que otro sueldo con sueldo pequeño, pero seguro:",
            'bloque' => '1',
            'id_cuest_eval' => '4'
        ]); 
        /** 14 
        Pregunta::create([
            'id' => '92',
            'pregunta' => "De vez en cuando siento un vago temor o un repentino miedo, sin poder comprender las razones:",
            'bloque' => '1',
            'id_cuest_eval' => '4'
        ]); 
        /** 15 
        Pregunta::create([
            'id' => '93',
            'pregunta' => "Cuando me critican duramente por algo que NO he hecho:",
            'bloque' => '1',
            'id_cuest_eval' => '4'
        ]); 
        /** 16 
        Pregunta::create([
            'id' => '94',
            'pregunta' => "Casi todo se puede comprar con dinero:",
            'bloque' => '1',
            'id_cuest_eval' => '4'
        ]);
       /** 17 
        Pregunta::create([
            'id' => '95',
            'pregunta' => "La mayoría de las personas serían más felices si convivieran más con la gente de su nivel e hicieran las cosas como los demás:",
            'bloque' => '1',
            'id_cuest_eval' => '4'
       ]); 
        /** 18 
        Pregunta::create([
            'id' => '96',
            'pregunta' => "En ocasiones, mirándome en un espejo, me entran dudas sobre lo que es mi derecha o izquierda:",
            'bloque' => '1',
            'id_cuest_eval' => '4'
        ]); 
        /** 19 
        Pregunta::create([
            'id' => '97',
            'pregunta' => "Cuando algo realmente me pone furioso, suelo calmarme muy pronto:",
            'bloque' => '1',
            'id_cuest_eval' => '4'
        ]); 
        /** 20 
        Pregunta::create([
            'id' => '98',
            'pregunta' => "Preferiría tener una casa:",
            'bloque' => '1',
            'id_cuest_eval' => '4'
        ]); 
        /** 21 
        Pregunta::create([
            'id' => '99',
            'pregunta' => "Con el mismo horario y sueldo, sería más interesante ser:",
            'bloque' => '1',
            'id_cuest_eval' => '4'
        ]); 
        /** 22 
        Pregunta::create([
            'id' => '100',
            'pregunta' => "«Cansado» es a «trabajar» como «orgulloso» es a:",
            'bloque' => '1',
            'id_cuest_eval' => '4'
        ]); 
        /** 23 
        Pregunta::create([
            'id' => '101',
            'pregunta' => "Me pongo algo nervioso ante animales salvajes, incluso cuando están encerrados en fuertes jaulas:",
            'bloque' => '1',
            'id_cuest_eval' => '4'
        ]); 
        /** 24 
        Pregunta::create([
            'id' => '102',
            'pregunta' => "Una ley anticuada debería cambiarse:",
            'bloque' => '1',
            'id_cuest_eval' => '4'
        ]);
        /** 25 
        Pregunta::create([
            'id' => '103',
            'pregunta' => "La mayor parte de las personas me consideran un interlocutor agradable:",
            'bloque' => '1',
            'id_cuest_eval' => '4'
       ]); 
        /** 26 
        Pregunta::create([
            'id' => '104',
            'pregunta' => "Me gusta salir a divertirme o a un espectáculo:",
            'bloque' => '1',
            'id_cuest_eval' => '4'
        ]); 
        /** 27 
        Pregunta::create([
            'id' => '105',
            'pregunta' => "Cuando veo gente desaliñada y sucia:",
            'bloque' => '1',
            'id_cuest_eval' => '4'
        ]); 
        /** 28 
        Pregunta::create([
            'id' => '106',
            'pregunta' => "Estando en un grupo social me siento un poco turbado si de pronto paso a ser el foco de atención:",
            'bloque' => '1',
            'id_cuest_eval' => '4'
        ]);
       /** 29 
        Pregunta::create([
            'id' => '107',
            'pregunta' => "Cuando voy por la calle prefiero detenerme antes a ver a un artista pintando que a escuchar a la gente discutir:",
            'bloque' => '1',
            'id_cuest_eval' => '4'
       ]); 
        /** 30 
        Pregunta::create([
            'id' => '108',
            'pregunta' => "Cuando me ponen al frente de algo, insisto en que se sigan mis intrucciones; en casi contrario, renuncio:",
            'bloque' => '1',
            'id_cuest_eval' => '4'
        ]); 
        /** 31 
        Pregunta::create([
            'id' => '109',
            'pregunta' => "Sería mejor que las vacaciones fuesen más largas y obligatorias para todas las personas:",
            'bloque' => '1',
            'id_cuest_eval' => '4'
        ]); 
        /** 32 
        Pregunta::create([
            'id' => '110',
            'pregunta' => "Hablo acerca de mis sentimientos:",
            'bloque' => '1',
            'id_cuest_eval' => '4'
        ]); 
        /** 33 
        Pregunta::create([
            'id' => '111',
            'pregunta' => "Me siento muy abatido cuando la gente me critica en un grupo:",
            'bloque' => '1',
            'id_cuest_eval' => '4'
        ]); 
        /** 34 
        Pregunta::create([
            'id' => '112',
            'pregunta' => "Si mi jefe (profesor) me llama a su despacho:",
            'bloque' => '1',
            'id_cuest_eval' => '4'
        ]); 
        /** 35 
        Pregunta::create([
            'id' => '113',
            'pregunta' => "Mis decisiones se apoyan más en:",
            'bloque' => '1',
            'id_cuest_eval' => '4'
        ]); 
        /** 36 
        Pregunta::create([
            'id' => '114',
            'pregunta' => "En mi adolescencia pertenecía a equipos deportivos:",
            'bloque' => '1',
            'id_cuest_eval' => '4'
        ]);  
        /** 37 
        Pregunta::create([
            'id' => '115',
            'pregunta' => "Cuando hablo con alguien, me gusta:",
            'bloque' => '1',
            'id_cuest_eval' => '4'
        ]); 
        /** 38 
        Pregunta::create([
            'id' => '116',
            'pregunta' => "A veces me pongo en estado de tensión y agitación cuando pienso en los sucesos del día:",
            'bloque' => '1',
            'id_cuest_eval' => '4'
        ]); 
        /** 39 
        Pregunta::create([
            'id' => '117',
            'pregunta' => "He sido elegido para hacer algo:",
            'bloque' => '2',
            'id_cuest_eval' => '4'
        ]); 
        /** 40 
        Pregunta::create([
            'id' => '118',
            'pregunta' => "¿Cuál de las siguientes cosas es diferente de las otras dos?",
            'bloque' => '2',
            'id_cuest_eval' => '4'
        ]); 
        /** 41 
        Pregunta::create([
            'id' => '119',
            'pregunta' => "«Sorpresa» es a «extraño» como «miedo» es a:",
            'bloque' => '2',
            'id_cuest_eval' => '4'
        ]); 
        /** 42 
        Pregunta::create([
            'id' => '120',
            'pregunta' => "A veces no puedo dormirme porque tengo una idea que me da vueltas en la cabeza:",
            'bloque' => '2',
            'id_cuest_eval' => '4'
        ]); 
        /** 43 
        Pregunta::create([
            'id' => '121',
            'pregunta' => "Me siento desasosegado cuando trabajo en un proyecto que requiere una acción rápida que afecta a los demás:",
            'bloque' => '2',
            'id_cuest_eval' => '4'
        ]);
        /** 44 
        Pregunta::create([
            'id' => '122',
            'pregunta' => "Indudablemente tengo menos amigos que la mayoría de las personas:",
            'bloque' => '2',
            'id_cuest_eval' => '4'
        ]); 
        /** 45 
        Pregunta::create([
            'id' => '123',
            'pregunta' => "Aborrecería tener que estar en un lugar donde hubiera poca gente con quien hablar:",
            'bloque' => '2',
            'id_cuest_eval' => '4'
        ]); 
        /** 46 
        Pregunta::create([
            'id' => '124',
            'pregunta' => "Creo que es más importante mucha libertad que buena educación y respeto a la ley:",
            'bloque' => '2',
            'id_cuest_eval' => '4'
        ]); 
        /** 47 
        Pregunta::create([
            'id' => '125',
            'pregunta' => "Siempre me alegra formar parte de un grupo grande, como una reunión, un baile o una asamblea:",
            'bloque' => '2',
            'id_cuest_eval' => '4'
        ]); 
        /** 48 
        Pregunta::create([
            'id' => '126',
            'pregunta' => "En mi época de estudiante me gustaba (me gusta):",
            'bloque' => '2',
            'id_cuest_eval' => '4'
        ]); 
        /** 49 
        Pregunta::create([
            'id' => '127',
            'pregunta' => "Si alguien se enfada conmigo:",
            'bloque' => '2',
            'id_cuest_eval' => '4'
        ]); 
        /** 50 
        Pregunta::create([
            'id' => '128',
            'pregunta' => "Para los padres es más importante:",
            'bloque' => '2',
            'id_cuest_eval' => '4'
        ]); 
        /** 51 
        Pregunta::create([
            'id' => '129',
            'pregunta' => "Siento de vez en cuando la necesidad de ocuparme en una actividad física enérgica:",
            'bloque' => '2',
            'id_cuest_eval' => '4'
        ]); 
        /** 52 
        Pregunta::create([
            'id' => '130',
            'pregunta' => "Hay veces en que no me siento siento con humor para ver a alguien:",
            'bloque' => '2',
            'id_cuest_eval' => '4'
        ]); 
        /** 53 
        Pregunta::create([
            'id' => '131',
            'pregunta' => "A veces los demás me advierten que yo muestro mi excitación demasiado claramente en la voz y en los modales:",
            'bloque' => '2',
            'id_cuest_eval' => '4'
        ]);
        /** 54 
        Pregunta::create([
            'id' => '132',
            'pregunta' => "Lo que el mundo necesita es:",
            'bloque' => '2',
            'id_cuest_eval' => '4'
        ]); 
        /** 55 
        Pregunta::create([
            'id' => '133',
            'pregunta' => "Preferiría tener un negocio propio, no compartido con otra persona:",
            'bloque' => '2',
            'id_cuest_eval' => '4'
        ]); 
        /** 56 
        Pregunta::create([
            'id' => '134',
            'pregunta' => "Tengo mi habitación organizada de un modo inteligente y estético, con las cosas colocadas casi siempre en lugares conocidos:",
            'bloque' => '2',
            'id_cuest_eval' => '4'
        ]); 
        /** 57 
        Pregunta::create([
            'id' => '135',
            'pregunta' => "En ocasiones dudo si la gente con quien estoy hablando se interesa realmente por lo que digo:",
            'bloque' => '2',
            'id_cuest_eval' => '4'
        ]); 
        /** 58 
        Pregunta::create([
            'id' => '136',
            'pregunta' => "Si tuviera que escoger, preferiría ser:",
            'bloque' => '2',
            'id_cuest_eval' => '4'
        ]); 
        /** 59 
        Pregunta::create([
            'id' => '137',
            'pregunta' => "¿Cuál de las siguientes fracciones es diferente de las otras dos?",
            'bloque' => '2',
            'id_cuest_eval' => '4'
        ]); 
        /** 60 
        Pregunta::create([
            'id' => '138',
            'pregunta' => "«Tamaño» es a «longitud» como «delito» es a:",
            'bloque' => '2',
            'id_cuest_eval' => '4'
        ]); 
        /** 61 
        Pregunta::create([
            'id' => '139',
            'pregunta' => "En mi vida personal consigo casi siempre todos mis propósitos:",
            'bloque' => '2',
            'id_cuest_eval' => '4'
        ]); 
        /** 62 
        Pregunta::create([
            'id' => '140',
            'pregunta' => "Tengo algunas características en las que me siento claramente superior a la mayoría de la gente:",
            'bloque' => '2',
            'id_cuest_eval' => '4'
        ]); 
        /** 63 
        Pregunta::create([
            'id' => '141',
            'pregunta' => "Solo asisto a actos sociales cuando estoy obligado, y me mantengo aparte en las demás ocasiones:",
            'bloque' => '2',
            'id_cuest_eval' => '4'
        ]);
        /** 64 
        Pregunta::create([
            'id' => '142',
            'pregunta' => "Es mejor ser cauto y esperar poco que optimista y esperar siempre el éxito:",
            'bloque' => '2',
            'id_cuest_eval' => '4'
        ]); 
        /** 65 
        Pregunta::create([
            'id' => '143',
            'pregunta' => "Algunas veces la gente dice que soy descuidado, aunque me considera una persona agradable:",
            'bloque' => '2',
            'id_cuest_eval' => '4'
        ]); 
        /** 66 
        Pregunta::create([
            'id' => '144',
            'pregunta' => "Suelo permanecer callado delante de personas mayores (con mucha más experiencia, edad o jerarquía):",
            'bloque' => '2',
            'id_cuest_eval' => '4'
        ]); 
        /** 67 
        Pregunta::create([
            'id' => '145',
            'pregunta' => "Tengo un buen sentido de la orientación (sitúo fácilmente los puntos cardinales), cuando me encuentro en un lugar desconocido:",
            'bloque' => '2',
            'id_cuest_eval' => '4'
        ]); 
        /** 68 
        Pregunta::create([
            'id' => '146',
            'pregunta' => "Cuando leo en una revista un artículo tendencioso o injusto, me incluso más a olvidarlo que a replicar o «devolver el golpe»:",
            'bloque' => '2',
            'id_cuest_eval' => '4'
        ]); 
        /** 69 
        Pregunta::create([
            'id' => '147',
            'pregunta' => "En tareas de grupo, preferiría:",
            'bloque' => '2',
            'id_cuest_eval' => '4'
        ]); 
        /** 70 
        Pregunta::create([
            'id' => '148',
            'pregunta' => "Me gustaría más andar con personas corteses que con individuos rebeldes y toscos:",
            'bloque' => '2',
            'id_cuest_eval' => '4'
        ]);
        /** 71 
        Pregunta::create([
            'id' => '149',
            'pregunta' => "Si mis conociidos me tratan mal o muestran que yo les disgusto:",
            'bloque' => '2',
            'id_cuest_eval' => '4'
        ]); 
        /** 72 
        Pregunta::create([
            'id' => '150',
            'pregunta' => "Siempre estoy alerta ante los intentos de propaganda en las coas que leo:",
            'bloque' => '2',
            'id_cuest_eval' => '4'
        ]); 
        /** 73 
        Pregunta::create([
            'id' => '151',
            'pregunta' => "Me gustaría más gozar de la vida tranquilamente y a mi modo que ser admirado por mis resultados:",
            'bloque' => '2',
            'id_cuest_eval' => '4'
        ]);
        /** 74 
        Pregunta::create([
            'id' => '152',
            'pregunta' => "Para estar informado, prefiero:",
            'bloque' => '2',
            'id_cuest_eval' => '4'
        ]); 
        /** 75 
        Pregunta::create([
            'id' => '153',
            'pregunta' => "Me encuentro formado (maduro) para la mayor parte de las cosas:",
            'bloque' => '2',
            'id_cuest_eval' => '4'
        ]); 
        /** 76 
        Pregunta::create([
            'id' => '154',
            'pregunta' => "Me encuentro más abatido que ayudado por el tipo de crítica que la gente suele hacer:",
            'bloque' => '2',
            'id_cuest_eval' => '4'
        ]); 
        /** 77 
        Pregunta::create([
            'id' => '155',
            'pregunta' => "En las fiestas de cumpleaños:",
            'bloque' => '3',
            'id_cuest_eval' => '4'
        ]); 
        /** 78 
        Pregunta::create([
            'id' => '156',
            'pregunta' => "«AB»  es «dc» como «SR» es:",
            'bloque' => '3',
            'id_cuest_eval' => '4'
        ]); 
        /** 79 
        Pregunta::create([
            'id' => '157',
            'pregunta' => "«Mejor» es a «pésimo» como «menor» es a:",
            'bloque' => '3',
            'id_cuest_eval' => '4'
        ]); 
        /** 80 
        Pregunta::create([
            'id' => '158',
            'pregunta' => "Mis amigos me han fallado:",
            'bloque' => '3',
            'id_cuest_eval' => '4'
        ]);
        /** 81 
        Pregunta::create([
            'id' => '159',
            'pregunta' => "Cuando me siento abatido hago grandes esfuerzos por ocultar mis sentimientos a los demás:",
            'bloque' => '3',
            'id_cuest_eval' => '4'
        ]); 
        /** 82 
        Pregunta::create([
            'id' => '160',
            'pregunta' => "Gasto gran parte de mi tiempo libre hablando con los amigos sobre situaciones sociales agradables vividas en el pasado:",
            'bloque' => '3',
            'id_cuest_eval' => '4'
        ]); 
        /** 83 
        Pregunta::create([
            'id' => '161',
            'pregunta' => "Pensando en las dificultades de mi trabajo:",
            'bloque' => '3',
            'id_cuest_eval' => '4'
        ]);
        /** 84 
        Pregunta::create([
            'id' => '162',
            'pregunta' => "Me cuesta bastante hablar o dirigir la palabra a un grupo numeroso:",
            'bloque' => '3',
            'id_cuest_eval' => '4'
        ]); 
        /** 85 
        Pregunta::create([
            'id' => '163',
            'pregunta' => "He experimentado en varias situaciones sociales el llamado «nerviosismo del orador»:",
            'bloque' => '3',
            'id_cuest_eval' => '4'
        ]); 
        /** 86 
        Pregunta::create([
            'id' => '164',
            'pregunta' => "Prefiero leer:",
            'bloque' => '3',
            'id_cuest_eval' => '4'
        ]); 
        /** 87 
        Pregunta::create([
            'id' => '165',
            'pregunta' => "Cuando la gente autoritaria trata de dominarme, hago justamente lo contrario de lo que quieren:",
            'bloque' => '3',
            'id_cuest_eval' => '4'
        ]); 
        /** 88 
        Pregunta::create([
            'id' => '166',
            'pregunta' => "Suelo olvidar muchas cosas triviales y sin importancia, tales como los nombres de las calles y tiendas de la ciudad:",
            'bloque' => '3',
            'id_cuest_eval' => '4'
        ]); 
        /** 89 
        Pregunta::create([
            'id' => '167',
            'pregunta' => "Me gustaría la profesión de veterinario, ocupado con las enfermedades y curación de los animales:",
            'bloque' => '3',
            'id_cuest_eval' => '4'
        ]); 
        /** 90 
        Pregunta::create([
            'id' => '168',
            'pregunta' => "Me resulta embarazoso que me dediquen elogios o cumplidos:",
            'bloque' => '3',
            'id_cuest_eval' => '4'
        ]);
        /** 91 
        Pregunta::create([
            'id' => '169',
            'pregunta' => "Siendo adolescente,cuando mi opinión era distinta de la de mis padres, normalmente:",
            'bloque' => '3',
            'id_cuest_eval' => '4'
        ]); 
        /** 92 
        Pregunta::create([
            'id' => '170',
            'pregunta' => "Me gusta tomar parte activa en las tareas sociales, trabajos de comité, etc.",
            'bloque' => '3',
            'id_cuest_eval' => '4'
        ]); 
        /** 93 
        Pregunta::create([
            'id' => '171',
            'pregunta' => "Al llevar a cabo una tarea, no estoy satisfecho hasta que se ha considerado con toda atención el menor detalle:",
            'bloque' => '3',
            'id_cuest_eval' => '4'
        ]);
        /** 94 
        Pregunta::create([
            'id' => '172',
            'pregunta' => "Tengo ocasiones en que me es difícil alejar un sentimiento de compasión hacia mi mismo:",
            'bloque' => '3',
            'id_cuest_eval' => '4'
        ]); 
        /** 95 
        Pregunta::create([
            'id' => '173',
            'pregunta' => "Siempre soy capaz de controlar perfectamente la expresión de mis sentimientos:",
            'bloque' => '3',
            'id_cuest_eval' => '4'
        ]); 
        /** 96 
        Pregunta::create([
            'id' => '174',
            'pregunta' => "Ante un nuevo invento utilitario, me gustaría:",
            'bloque' => '3',
            'id_cuest_eval' => '4'
        ]); 
        /** 97 
        Pregunta::create([
            'id' => '175',
            'pregunta' => "La siguiente serie de letras XOOOOXXOOOXXX continúa con el grupo:",
            'bloque' => '3',
            'id_cuest_eval' => '4'
        ]); 
        /** 98 
        Pregunta::create([
            'id' => '176',
            'pregunta' => "Algunas personas parecen ignorarme o evitarme, aunque no sé por qué:",
            'bloque' => '3',
            'id_cuest_eval' => '4'
        ]); 
        /** 99 
        Pregunta::create([
            'id' => '177',
            'pregunta' => "La gente me trata menos razonablemente de lo que merecen mis buenas intenciones:",
            'bloque' => '3',
            'id_cuest_eval' => '4'
        ]); 
        /** 100 
        Pregunta::create([
            'id' => '178',
            'pregunta' => "Aunque no sea en un grupo mixto de mujeres y hombres, me disgusta que se use un lenguaje obsceno:",
            'bloque' => '3',
            'id_cuest_eval' => '4'
        ]);
        /** 101 
        Pregunta::create([
            'id' => '179',
            'pregunta' => "Me gusta hacer cosas atrevidas y temerarias solo por el placer de divertirme:",
            'bloque' => '3',
            'id_cuest_eval' => '4'
        ]); 
        /** 102 
        Pregunta::create([
            'id' => '180',
            'pregunta' => "Me resulta molesta la vista de una habitación muy sucia:",
            'bloque' => '3',
            'id_cuest_eval' => '4'
        ]); 
        /** 103 
        Pregunta::create([
            'id' => '181',
            'pregunta' => "Cuando estoy en un grupo pequeño, me agrada quedarme en un segundo término y dejar que otros lleven el peso de la conversación:",
            'bloque' => '3',
            'id_cuest_eval' => '4'
        ]);
        /** 104 
        Pregunta::create([
            'id' => '182',
            'pregunta' => "Me resulta fácil mezclarme con la gente en una reunión social:",
            'bloque' => '3',
            'id_cuest_eval' => '4'
        ]); 
        /** 105 
        Pregunta::create([
            'id' => '183',
            'pregunta' => "Sería más interesante ser:",
            'bloque' => '3',
            'id_cuest_eval' => '4'
        ]); 
        /** 106 
        Pregunta::create([
            'id' => '184',
            'pregunta' => "Por regla general, mis jefes y familia me encuentran defectos solo cuando realmente existen:",
            'bloque' => '3',
            'id_cuest_eval' => '4'
        ]); 
        /** 107 
        Pregunta::create([
            'id' => '185',
            'pregunta' => "Me disgusta el modo con que algunas personas se fijan en otras en las calles o en las tiendas:",
            'bloque' => '3',
            'id_cuest_eval' => '4'
        ]); 
        /** 108 
        Pregunta::create([
            'id' => '186',
            'pregunta' => "Como los alimentos con gusto y placer, aunque no siempre tan cuidadosamente y educadamente como otras personas:",
            'bloque' => '3',
            'id_cuest_eval' => '4'
        ]); 
        /** 109 
        Pregunta::create([
            'id' => '187',
            'pregunta' => "Temo algún castigo incluso cuando no he hecho nada malo:",
            'bloque' => '3',
            'id_cuest_eval' => '4'
        ]); 
        /** 110 
        Pregunta::create([
            'id' => '188',
            'pregunta' => "Me gustaría más tener un trabajo con:",
            'bloque' => '3',
            'id_cuest_eval' => '4'
        ]);   
        /** 111 
        Pregunta::create([
            'id' => '189',
            'pregunta' => "Me molesta que la gente piense que mi comportamiento es demasiado raro o fuera de lo corriente:",
            'bloque' => '3',
            'id_cuest_eval' => '4'
        ]); 
        /** 112 
        Pregunta::create([
            'id' => '190',
            'pregunta' => "A veces dejo que sentimientos de envidia o celos influyan en mis acciones:",
            'bloque' => '3',
            'id_cuest_eval' => '4'
        ]); 
        /** 113 
        Pregunta::create([
            'id' => '191',
            'pregunta' => "En ocasiones, contrariedades muy pequeñas me irritan mucho:",
            'bloque' => '3',
            'id_cuest_eval' => '4'
        ]);
        /** 114 
        Pregunta::create([
            'id' => '192',
            'pregunta' => "Siempre duermo bien, nunca hablo en sueños ni me levanto sonámbulo:",
            'bloque' => '3',
            'id_cuest_eval' => '4'
        ]); 
        /** 115 
        Pregunta::create([
            'id' => '193',
            'pregunta' => "Me resultaría más interesante trabajar en una empresa:",
            'bloque' => '4',
            'id_cuest_eval' => '4'
        ]); 
        /** 116 
        Pregunta::create([
            'id' => '194',
            'pregunta' => "«Azada» es a «cavar» como «cuchillo» es a:",
            'bloque' => '4',
            'id_cuest_eval' => '4'
        ]); 
        /** 117 
        Pregunta::create([
            'id' => '195',
            'pregunta' => "Cuando la gente no e razonable, yo normalmente:",
            'bloque' => '4',
            'id_cuest_eval' => '4'
        ]); 
        /** 118 
        Pregunta::create([
            'id' => '196',
            'pregunta' => "Si los demás hablan en voz alta cuando estoy escuchando música:",
            'bloque' => '4',
            'id_cuest_eval' => '4'
        ]); 
        /** 119 
        Pregunta::create([
            'id' => '197',
            'pregunta' => "Creo que se me describe mejor como:",
            'bloque' => '4',
            'id_cuest_eval' => '4'
        ]); 
        /** 120 
        Pregunta::create([
            'id' => '198',
            'pregunta' => "Preferiría vestirme con sencillez y corrección que con un estilo personal y llamativo:",
            'bloque' => '4',
            'id_cuest_eval' => '4'
        ]);
        /** 121 
        Pregunta::create([
            'id' => '199',
            'pregunta' => "Me niego a admitir sugerencias bien intencionadas de los demás aunque sé que no debería hacerlo:",
            'bloque' => '4',
            'id_cuest_eval' => '4'
        ]); 
        /** 122 
        Pregunta::create([
            'id' => '200',
            'pregunta' => "Cuando es necesario que alguien emplee un poco de diplomacia y persuación para conseguir que la gente actúe, generalmente solo me lo encargan a mí:",
            'bloque' => '4',
            'id_cuest_eval' => '4'
        ]); 
        /** 123 
        Pregunta::create([
            'id' => '201',
            'pregunta' => "Me considero a mí mismo como una persona muy abierta y sociable:",
            'bloque' => '4',
            'id_cuest_eval' => '4'
        ]);
        /** 124 
        Pregunta::create([
            'id' => '202',
            'pregunta' => "Me gusta la música:",
            'bloque' => '4',
            'id_cuest_eval' => '4'
        ]); 
        /** 125 
        Pregunta::create([
            'id' => '203',
            'pregunta' => "Si estoy completament4e seguro de que una persona es injusta o se comporta egoístamente, se lo digo, incluso si esto me causa problema:",
            'bloque' => '4',
            'id_cuest_eval' => '4'
        ]); 
        /** 126 
        Pregunta::create([
            'id' => '204',
            'pregunta' => "En un viaje largo, preferiría:",
            'bloque' => '4',
            'id_cuest_eval' => '4'
        ]); 
        /** 127 
        Pregunta::create([
            'id' => '205',
            'pregunta' => "En una situación que puede llegar a ser peligrosa, creo que es mejor alborotar o hablar alto, aún cuando se pierda la calma y la cortesía:",
            'bloque' => '4',
            'id_cuest_eval' => '4'
        ]); 
        /** 128 
        Pregunta::create([
            'id' => '206',
            'pregunta' => "Es una exagerada la idea de que la enfermedad proviene tanto de causas mentales como físicas:",
            'bloque' => '4',
            'id_cuest_eval' => '4'
        ]); 
        /** 129 
        Pregunta::create([
            'id' => '207',
            'pregunta' => "En cualquier gran ceremonia oficial debería mantenerse la pompa y el esplendor:",
            'bloque' => '4',
            'id_cuest_eval' => '4'
        ]); 
        /** 130 
        Pregunta::create([
            'id' => '208',
            'pregunta' => "Cuando hay que hacer algo, me gustaría más trabajar:",
            'bloque' => '4',
            'id_cuest_eval' => '4'
        ]);
        /** 131 
        Pregunta::create([
            'id' => '209',
            'pregunta' => "Creo firmemente que el «tal vez el jefe no tenga siempre  la razón, pero siempre tiene la razón por ser el jefe»:",
            'bloque' => '4',
            'id_cuest_eval' => '4'
        ]); 
        /** 132 
        Pregunta::create([
            'id' => '210',
            'pregunta' => "Suelo enfadarme con las personas demasiado pronto:",
            'bloque' => '4',
            'id_cuest_eval' => '4'
        ]); 
        /** 133 
        Pregunta::create([
            'id' => '211',
            'pregunta' => "Siempre puedo cambiar viejos hábitos sin dificultad y sin volver a ellos:",
            'bloque' => '4',
            'id_cuest_eval' => '4'
        ]);
        /** 134 
        Pregunta::create([
            'id' => '212',
            'pregunta' => "Si el sueldo fuera el mismo, preferiría ser:",
            'bloque' => '4',
            'id_cuest_eval' => '4'
        ]); 
        /** 135 
        Pregunta::create([
            'id' => '213',
            'pregunta' => "«Llama» es a «calor» como «rosa» es a:",
            'bloque' => '4',
            'id_cuest_eval' => '4'
        ]); 
        /** 136 
        Pregunta::create([
            'id' => '214',
            'pregunta' => "Cuando se acerca el momento de algo que he planeado y he esperado, en ocasiones pierdo la ilusión por ello:",
            'bloque' => '4',
            'id_cuest_eval' => '4'
        ]); 
        /** 137 
        Pregunta::create([
            'id' => '215',
            'pregunta' => "Puedo trabajar cuidadosamente en la mayor parte de las cosas sin que me molesten las personas que hacen mucho ruido a mi alrededor:",
            'bloque' => '4',
            'id_cuest_eval' => '4'
        ]); 
        /** 138 
        Pregunta::create([
            'id' => '216',
            'pregunta' => "En ocasiones hablo a desconocidos sobre cosas que considero importantes, aunque no me pregunten sobre ellas:",
            'bloque' => '4',
            'id_cuest_eval' => '4'
        ]); 
        /** 139 
        Pregunta::create([
            'id' => '217',
            'pregunta' => "Me atrae más pasar una tarde ocupado en una tarea tranquila a la que tenga afición que estar en una reunión animada:",
            'bloque' => '4',
            'id_cuest_eval' => '4'
        ]); 
        /** 140 
        Pregunta::create([
            'id' => '218',
            'pregunta' => "Cuando debo decidir algo, tengo siempre presentes las reglas básicas de lo justo y lo injusto:",
            'bloque' => '4',
            'id_cuest_eval' => '4'
        ]);
        /** 141 
        Pregunta::create([
            'id' => '219',
            'pregunta' => "En el trato social:",
            'bloque' => '4',
            'id_cuest_eval' => '4'
        ]); 
        /** 142 
        Pregunta::create([
            'id' => '220',
            'pregunta' => "Admiro más la belleza de un poema que la de un arma de fuego bien construida:",
            'bloque' => '4',
            'id_cuest_eval' => '4'
        ]); 
        /** 143 
        Pregunta::create([
            'id' => '221',
            'pregunta' => "A veces digo en broma disparates, solo para sorprender a la gente y ver qué responden:",
            'bloque' => '4',
            'id_cuest_eval' => '4'
        ]);
        /** 144 
        Pregunta::create([
            'id' => '222',
            'pregunta' => "Me agradaría ser un periodista que escribiera sobre teatro, conciertos, ópera, etc.:",
            'bloque' => '4',
            'id_cuest_eval' => '4'
        ]);
        /** 145 
        Pregunta::create([
            'id' => '223',
            'pregunta' => "Nunca siento la necesidad de garabatear, dibujar o moverme cuando estoy sentado en una reunión:",
            'bloque' => '4',
            'id_cuest_eval' => '4'
        ]);
        /** 146 
        Pregunta::create([
            'id' => '224',
            'pregunta' => "Si alguien me dice algo que yo sé que no es cierto, suelo pensar:",
            'bloque' => '4',
            'id_cuest_eval' => '4'
        ]);
        /** 147 
        Pregunta::create([
            'id' => '225',
            'pregunta' => "La gente me considera con justicia una persona activa pero con éxito solo mediano:",
            'bloque' => '4',
            'id_cuest_eval' => '4'
        ]);
        /** 148 
        Pregunta::create([
            'id' => '226',
            'pregunta' => "Si se suscitara una controversia violenta entre otros miembros de un grupo de discusión:",
            'bloque' => '4',
            'id_cuest_eval' => '4'
        ]);
        /** 149 
        Pregunta::create([
            'id' => '227',
            'pregunta' => "Me gusta planearr mis cosas solo, sin interrupciones y sugerencias de otros:",
            'bloque' => '4',
            'id_cuest_eval' => '4'
        ]);
        /** 150 
        Pregunta::create([
            'id' => '228',
            'pregunta' => "Me gusta seguir mis propios caminos, en vez de actuar según normas establecidas:",
            'bloque' => '4',
            'id_cuest_eval' => '4'
        ]);
        /** 151 
        Pregunta::create([
            'id' => '229',
            'pregunta' => "Me pongo nervioso (tenso) cuando pienso en todas las cosas que tengo que hacer:",
            'bloque' => '4',
            'id_cuest_eval' => '4'
        ]);
        /** 152 
        Pregunta::create([
            'id' => '230',
            'pregunta' => "No me perturba que la gente me haga alguna sugerencia cuando estoy jugando:",
            'bloque' => '4',
            'id_cuest_eval' => '4'
        ]);
        /** 153 
        Pregunta::create([
            'id' => '231',
            'pregunta' => "Me parece más interesante ser:",
            'bloque' => '5',
            'id_cuest_eval' => '4'
        ]);
        /** 154 
        Pregunta::create([
            'id' => '232',
            'pregunta' => "¿Cuál de las siguientes palabras es diferentes de las otras dos?:",
            'bloque' => '5',
            'id_cuest_eval' => '4'
        ]);
        /** 155 
        Pregunta::create([
            'id' => '233',
            'pregunta' => "He tenido sueños tan intensos que no me han dejado dormir bienÑ",
            'bloque' => '5',
            'id_cuest_eval' => '4'
        ]);        
        /** 156 
        Pregunta::create([
            'id' => '234',
            'pregunta' => "Aunque tengo pocas posibilidades de éxito, creo que todavía me merece la pena correr el riesgo:",
            'bloque' => '5',
            'id_cuest_eval' => '4'
        ]);
        /** 157 
        Pregunta::create([
            'id' => '235',
            'pregunta' => "Cuando yo sé muy bien lo que el grupo tiene que hacer, me gusta ser el único en dar las órdenes:",
            'bloque' => '5',
            'id_cuest_eval' => '4'
        ]);
        /** 158 
        Pregunta::create([
            'id' => '236',
            'pregunta' => "Me consideran una persona muy entusiasta",
            'bloque' => '5',
            'id_cuest_eval' => '4'
        ]);
        /** 159 
        Pregunta::create([
            'id' => '237',
            'pregunta' => "Soy una persona bastante estricta, e insisto siempre en hacer las cosas tan correctamente como sea posible:",
            'bloque' => '5',
            'id_cuest_eval' => '4'
        ]);
        /** 160 
        Pregunta::create([
            'id' => '238',
            'pregunta' => "Me disgusta un poco que la gente me esté mirando cuando trabajo:",
            'bloque' => '5',
            'id_cuest_eval' => '4'
        ]);
        /** 161 
        Pregunta::create([
            'id' => '239',
            'pregunta' => "Como no siempre es posible conseguir las cosas utilizando gradualmente métodos razonables, a veces es necesario emplear la fuerza:",
            'bloque' => '5',
            'id_cuest_eval' => '4'
        ]);
        /** 162 
        Pregunta::create([
            'id' => '240',
            'pregunta' => "Si se pasa por alto una buena observación mía:",
            'bloque' => '5',
            'id_cuest_eval' => '4'
        ]);
        /** 163 
        Pregunta::create([
            'id' => '241',
            'pregunta' => "Me gustaría hacer el trabajo de un oficial encargado de los casos de delincuentes bajo fianza:",
            'bloque' => '5',
            'id_cuest_eval' => '4'
        ]);
        /** 164 
        Pregunta::create([
            'id' => '242',
            'pregunta' => "Hay que ser prudente antes de mazclarse con cualquier desconocido, puesto que hay peligros de infección y de otro tipo:",
            'bloque' => '5',
            'id_cuest_eval' => '4'
        ]);
        /** 165 
        Pregunta::create([
            'id' => '243',
            'pregunta' => "En un viaje al extranjero, preferiría ir en un grupo organizado, con un experto, que planear yo mismo los lugares que deseo visitar:",
            'bloque' => '5',
            'id_cuest_eval' => '4'
        ]);
        /** 166 
        Pregunta::create([
            'id' => '244',
            'pregunta' => "Si la gente se aprovecha de mi amistad, no me quedo resentido y lo olvido pronto:",
            'bloque' => '5',
            'id_cuest_eval' => '4'
        ]);
        /** 167 
        Pregunta::create([
            'id' => '245',
            'pregunta' => "Creo que la sociedad debería aceptar nuevas costumbres, de acuerdo con la razón, y olvidar los viejos usos y tradiciones:",
            'bloque' => '5',
            'id_cuest_eval' => '4'
        ]);
        /** 168 
        Pregunta::create([
            'id' => '246',
            'pregunta' => "Aprendo mejor",
            'bloque' => '5',
            'id_cuest_eval' => '4'
        ]);
        /** 169 
        Pregunta::create([
            'id' => '247',
            'pregunta' => "Me gusta esperar a estar seguro de que lo que voy a decir es correcto, antes de exponer mis ideas:",
            'bloque' => '5',
            'id_cuest_eval' => '4'
        ]);
        /** 170 
        Pregunta::create([
            'id' => '248',
            'pregunta' => "Algunas veces me «sacan de quicio» de un modo insoportable pequeñas cosas, aunque reconozca que son triviales:",
            'bloque' => '5',
            'id_cuest_eval' => '4'
        ]);
        /** 171 
        Pregunta::create([
            'id' => '249',
            'pregunta' => "No suelo decir, sin pensarlas, cosas que luego me lamento mucho:",
            'bloque' => '5',
            'id_cuest_eval' => '4'
        ]);
        /** 172 
        Pregunta::create([
            'id' => '250',
            'pregunta' => "Si se me pidiera colaborar en una campaña caritativa:",
            'bloque' => '5',
            'id_cuest_eval' => '4'
        ]);
        /** 173 
        Pregunta::create([
            'id' => '251',
            'pregunta' => "«Pronto» es a «nunca» como «cerca» es a:",
            'bloque' => '5',
            'id_cuest_eval' => '4'
        ]);
        /** 174 
        Pregunta::create([
            'id' => '252',
            'pregunta' => "Si cometo una falta social desagradable, puedo olvidarla pronto:",
            'bloque' => '5',
            'id_cuest_eval' => '4'
        ]);
        /** 175 
        Pregunta::create([
            'id' => '253',
            'pregunta' => "Se me considera un «hombre de ideas» que casi siempre puede apuntar alguna solución a un problema:",
            'bloque' => '5',
            'id_cuest_eval' => '4'
        ]);
        /** 176 
        Pregunta::create([
            'id' => '254',
            'pregunta' => "Creo que se me da mejor mostrar:",
            'bloque' => '5',
            'id_cuest_eval' => '4'
        ]);
        /** 177 
        Pregunta::create([
            'id' => '255',
            'pregunta' => "Me gusta un trabajo que presente cambios, variedad y viajes, aunque implique algún peligro:",
            'bloque' => '5',
            'id_cuest_eval' => '4'
        ]);
        /** 178 
        Pregunta::create([
            'id' => '256',
            'pregunta' => "Me gusta un trabajo que requiera dotes de atención y exactitud:",
            'bloque' => '5',
            'id_cuest_eval' => '4'
        ]);
        /** 179 
        Pregunta::create([
            'id' => '257',
            'pregunta' => "Soy de ese tipo de personas con tanta energía que siempre están ocupadas:",
            'bloque' => '5',
            'id_cuest_eval' => '4'
        ]);
        /** 180 
        Pregunta::create([
            'id' => '258',
            'pregunta' => "En mi época de estudiante peferiría (prefiero):",
            'bloque' => '5',
            'id_cuest_eval' => '4'
        ]);
        /** 181 
        Pregunta::create([
            'id' => '259',
            'pregunta' => "Algunas veces me ha turbado el que la gente diga a mi espalda cosas desagradables de mí sin fundamento:",
            'bloque' => '5',
            'id_cuest_eval' => '4'
        ]);
        /** 182 
        Pregunta::create([
            'id' => '260',
            'pregunta' => "Hablar con personas corrientes, convencionales y rutinarias:",
            'bloque' => '5',
            'id_cuest_eval' => '4'
        ]);
        /** 183 
        Pregunta::create([
            'id' => '261',
            'pregunta' => "Algunas cosas me irritan tanto que creo que entonces lo mejor es no hablar:",
            'bloque' => '5',
            'id_cuest_eval' => '4'
        ]);
        /** 184 
        Pregunta::create([
            'id' => '262',
            'pregunta' => "En la formación del niño, es más importante:",
            'bloque' => '5',
            'id_cuest_eval' => '4'
        ]);
        /** 185 
        Pregunta::create([
            'id' => '263',
            'pregunta' => "Los demás me consideran una persona firma e imperturbable, impasible ante los vaivenes de las circunstancias:",
            'bloque' => '5',
            'id_cuest_eval' => '4'
        ]);
        /** 186 
        Pregunta::create([
            'id' => '264',
            'pregunta' => "Creo que en el mundo actual es más importante resolver:",
            'bloque' => '5',
            'id_cuest_eval' => '4'
        ]);
        /** 187 
        Pregunta::create([
            'id' => '265',
            'pregunta' => "Creo que no me he saltado ninguna cuestión y he contestado a todas de modo apropiado:",
            'bloque' => '5',
            'id_cuest_eval' => '4'
        ]); */
            
        /** PRUEBAAA HABITOS ESTUDIO */
        /* Pregunta::create([
            'id' => '266',
            'pregunta' => "Pregunta prueba",
            'bloque' => '1',
            'id_cuest_eval' => '5'
        ]);
        Pregunta::create([
            'id' => '267',
            'pregunta' => "Pregunta prueba",
            'bloque' => '1',
            'id_cuest_eval' => '5'
        ]);
        Pregunta::create([
            'id' => '268',
            'pregunta' => "Pregunta prueba",
            'bloque' => '2',
            'id_cuest_eval' => '5'
        ]);
        Pregunta::create([
            'id' => '269',
            'pregunta' => "Pregunta prueba",
            'bloque' => '2',
            'id_cuest_eval' => '5'
        ]);
        Pregunta::create([
            'id' => '270',
            'pregunta' => "Pregunta prueba",
            'bloque' => '3',
            'id_cuest_eval' => '5'
        ]);
        Pregunta::create([
            'id' => '271',
            'pregunta' => "Pregunta prueba",
            'bloque' => '3',
            'id_cuest_eval' => '5'
        ]);
        Pregunta::create([
            'id' => '272',
            'pregunta' => "Pregunta prueba",
            'bloque' => '4',
            'id_cuest_eval' => '5'
        ]);
        Pregunta::create([
            'id' => '273',
            'pregunta' => "Pregunta prueba",
            'bloque' => '4',
            'id_cuest_eval' => '5'
        ]);
        Pregunta::create([
            'id' => '274',
            'pregunta' => "Pregunta prueba",
            'bloque' => '5',
            'id_cuest_eval' => '5'
        ]);
        Pregunta::create([
            'id' => '275',
            'pregunta' => "Pregunta prueba",
            'bloque' => '5',
            'id_cuest_eval' => '5'
        ]); */
    }
}
