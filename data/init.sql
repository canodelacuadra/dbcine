START TRANSACTION;
DROP DATABASE IF EXISTS cine;
CREATE DATABASE cine;
use cine;
START TRANSACTION;
-- diseño de tabla generos
CREATE TABLE generos(
  id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  genero VARCHAR(30) NOT NULL
);
-- Datos de inicio para la tabla géneros
INSERT INTO generos
VALUES (1, 'drama'),
  (2, 'policiaca'),
  (3, 'histórica'),
  (4, 'comedia'),
  (5, 'western'),
  (6, 'accion'),
  (7, 'documental'),
  (8, 'fantasia'),
  (9, 'musical');
CREATE TABLE nacionalidades(
  id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  nacionalidad VARCHAR(30) NOT NULL
);
-- Datos de Inicio para la tabla nacionalidades
INSERT INTO nacionalidades
VALUES (1, 'española'),
  (2, 'norteamericana'),
  (3, 'europea'),
  (4, 'latinoamericana'),
  (5, 'india'),
  (6, 'china'),
  (7, 'británica'),
  (8, 'africana'),
  (9, 'francesa'),
  (10, 'italiana'),
  (11, 'alemana'),
  (12, 'surcoreana');
CREATE TABLE peliculas (
  id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  pelicula VARCHAR(40) NOT NULL,
  fecha year(4) DEFAULT NULL COMMENT 'Año Producción',
  genero INT(11) NOT NULL,
  nacionalidad INT(11) NOT NULL,
  sinopsis text DEFAULT NULL,
  num_votos INT(11) UNSIGNED NOT NULL DEFAULT 0,
  puntuacion_total INT(11) UNSIGNED NOT NULL DEFAULT 0,
  puntuacion_media FLOAT(4, 2) DEFAULT NULL,
  create_time datetime DEFAULT current_timestamp() COMMENT 'fecha inserción',
  FOREIGN KEY (genero) REFERENCES generos(id),
  FOREIGN KEY (nacionalidad) REFERENCES nacionalidades(id),
  UNIQUE(pelicula, fecha)
);
-- inicio para la tabla peliculas
INSERT INTO peliculas
VALUES (
    1,
    'La vida de Brian',
    1979,
    4,
    7,
    'Trata la historia de un jud í o que nace el mismo d í a que Jesucristo y ya de adulto es varias veces confundido con é l.Con canciones cl á sicas de los Python como « Always Look On The Bright Side Of Life » (Mira siempre el lado positivo de la vida),
cantada por un coro de crucificados,
la pel í cula es,
junto con Los caballeros de la mesa cuadrada y El sentido de la vida una de las m á s exitosas de Monty Python.',
    1,
    5,
    5.00,
    '2021-08-08 10:53:56'
  ),
  (
    2,
    'El estado de las cosas',
    1982,
    1,
    3,
    'El estado de las cosas es un caso de una pel í cula dentro de otra pel í cula.En un lugar desierto en la costa portuguesa,
el rodaje de una pel í cula de ciencia ficci ó n,
"The Survivors",
se interrumpe por falta de pel í cula ya que la producci ó n no tiene dinero para comprarla.El equipo est á inmovilizado en un antiguo hotel devastado por las tormentas.El director,
Friedrich Munro,
es un l í der filósofo,
que tiene una relación paternal con los miembros de su equipo;
cuida su bienestar físico,
pero tambi é n su bienestar emocional.Se mantiene s ó lido como una roca en medio de la crisis,
manteniendo a su equipo enfocado en su objetivo creativo durante este per í odo de vac í o,
esperando un suministro de fondos que les permita regresar al trabajo.',
    0,
    0,
    NULL,
    '2021-08-08 18:08:40'
  ),
  (
    3,
    'Chinatown',
    1974,
    2,
    2,
    'En Los Ángeles, durante los años 30, el detective privado Jake Gittes (Jack Nicholson) recibe la visita de una mujer que dice ser la esposa del ingeniero de la compañía de agua de la ciudad, Hollis Mulwray (Darrel Zwerling), y que cree que le está siendo infiel; poco después, la verdadera esposa de Mulwray, Evelyn (Faye Dunaway), se presenta también en la oficina del detective en días posteriores, después de que Gittes hace el ridículo por haber sido ingenuamente engañado por la primera mujer, que luego se hace llamar Ida Sessions (Diane Ladd). Cuando Mulwray es asesinado, Gittes es contratado, dos veces, por dos diferentes clientes, para investigar el caso; y es entonces que empieza a descubrir que detrás de todo, como cabe esperar, está un enorme negocio inmobiliario, secretos familiares y mucha codicia.',
    0,
    0,
    NULL,
    '2021-08-08 18:13:02'
  ),
  (
    4,
    'Viridiana',
    1961,
    1,
    1,
    'La novicia Viridiana (Silvia Pinal), a punto de tomar los hábitos, debe abandonar el convento para visitar a su tío don Jaime (Fernando Rey), quien le ha pagado los estudios. Durante su visita, don Jaime, impresionado por el parecido entre Viridiana y su difunta esposa, la adormece e intenta violarla, pero finalmente no se atreve. Posteriormente, intenta retenerla cuando ella quiere volver al convento; le miente diciéndole que ya no podrá profesar monja, porque la ha poseído mientras dormía. Esto aleja aún más a Viridiana de su tío, que, tras la marcha de esta, se suicida. Viridiana, que se siente culpable de la muerte de su tío, renuncia a ser monja y se queda en la mansión a practicar la caridad cristiana, acogiendo a un grupo de vagabundos, a quienes brinda refugio y alimento pero que son, a fin de cuentas, quienes la atacarán y robarán. La llegada de Jorge (Francisco Rabal), hijo natural de don Jaime, cambiará definitivamente el destino de la joven.',
    0,
    0,
    NULL,
    '2021-08-08 18:20:45'
  ),
  (
    5,
    'Alguien voló sobre el nido del cuco',
    1975,
    1,
    2,
    'Randle McMurphy (Jack Nicholson), un hombre condenado por asalto, y un espíritu libre que vive contracorriente, es recluido en un hospital psiquiátrico. La inflexible disciplina del centro acentúa su contagiosa tendencia al desorden, que acabará desencadenando una guerra entre los pacientes y el personal de la clínica con la fría y severa enfermera Ratched (Louise Fletcher) a la cabeza. La suerte de cada paciente del pabellón está en juego',
    2,
    9,
    4.50,
    '2021-08-08 19:14:51'
  ),
  (
    6,
    'La ventana indiscreta',
    1954,
    6,
    2,
    'Un reportero fotográfico (Stewart) se ve obligado a permanecer en reposo con una pierna escayolada. A pesar de la compañía de su novia (Kelly) y de su enfermera (Ritter), procura escapar al tedio observando desde la ventana de su apartamento con unos prismáticos lo que ocurre en las viviendas de enfrente. Debido a una serie de extrañas circunstancias empieza a sospechar de un vecino cuya mujer ha desaparecido',
    0,
    0,
    NULL,
    '2021-08-08 19:26:09'
  ),
  (
    7,
    'A quemarropa',
    1967,
    6,
    2,
    'Walker (Lee Marvin) está intentando ayudar a Reese (John Vernon), un amigo suyo de los bajos fondos. Reese le dispara y, creyendo que está muerto, lo abandona y se marcha con la mujer de Walker, que es su amante. Cuando Walker se recupera de sus heridas decide vengarse, llegando al corazón mismo de una poderosa organización criminal.',
    0,
    0,
    NULL,
    '2021-08-12 13:48:40'
  ),
  (
    8,
    'Valor de ley',
    2010,
    5,
    2,
    'Mattie Ross, una enérgica chica de catorce años, contrata a Cogburn, un alguacil alcohólico de gatillo fácil, después de que un forajido llamado Tom Chaney (Brolin) asesine a su padre. El dúo es acompañado en su expedición por un Ranger de Texas llamado LaBoeuf (Damon), quien ha estado siguiendo a Chaney por el asesinato de un senador estatal. A lo largo de una peligrosa aventura, el valor de cada personaje es puesto a prueba de diferentes formas.',
    0,
    0,
    NULL,
    '2021-08-12 13:57:13'
  ),
  (
    9,
    'Valor de ley',
    1969,
    5,
    2,
    'Mattie Ross, una enérgica chica de catorce años, contrata a Cogburn, un alguacil alcohólico de gatillo fácil, después de que un forajido llamado Tom Chaney (Brolin) asesine a su padre. El dúo es acompañado en su expedición por un Ranger de Texas llamado LaBoeuf (Damon), quien ha estado siguiendo a Chaney por el asesinato de un senador estatal. A lo largo de una peligrosa aventura, el valor de cada personaje es puesto a prueba de diferentes formas.',
    0,
    0,
    NULL,
    '2021-08-12 13:57:13'
  ),
  (
    10,
    'Reservoir dogs',
    1992,
    2,
    2,
    'Seis criminales profesionales son contratados por Joe Cabot (Lawrence Tierney) y su hijo Nice Guy Eddie (Chris Penn) para un trabajo. No se conocen entre sí y se mantienen en el anonimato, escondidos bajo nombres de colores: el señor Naranja (Tim Roth), el señor Blanco (Harvey Keitel), el señor Rosa (Steve Buscemi), el señor Rubio (Michael Madsen), el señor Marrón (Quentin Tarantino) y el señor Azul (Edward Bunker). \r\n        ',
    0,
    0,
    NULL,
    '2021-08-23 09:00:03'
  ),
  (
    11,
    'Gladiator',
    2000,
    3,
    2,
    'Cuando un general Romano es traicionado y su familia es asesinada por el hijo corrupto de un emperador, regresa a Roma como un gladiador en búsqueda de venganza.\r\n        ',
    0,
    0,
    NULL,
    '2021-08-23 09:01:29'
  ),
  (
    12,
    'Amelie',
    2002,
    8,
    9,
    'Amelie no es una chica como las demás. Ha visto a su pez de colores deslizarse hacia las alcantarillas municipales, a su madre morir en la plaza de Nôtre-Dame y a su padre dedicar todo su afecto a un gnomo de jardín. De repente, a los veintidós años, descubre su objetivo en la vida: arreglar la vida de los demás. A partir de entonces, inventa toda clase de estrategias para intervenir en los asuntos de los demás: su portera, que se pasa los días bebiendo vino de Oporto; Georgette, una estanquera hipocondríaca, o &quot;el hombre de cristal&quot;, un vecino que sólo ve el mundo a través de la reproducción de un cuadro de Renoir.\r\n        ',
    0,
    0,
    NULL,
    '2021-08-23 09:02:37'
  ),
  (
    13,
    'El gran Lebowsky',
    1998,
    4,
    2,
    'Jeffrey Lebowski, un jugador de bolos desempleado de Los Ángeles, quien se hace llamar «The Dude» (también conocido como «El Nota» o «El Fino»). Después de un caso de identidad errónea, el Dude se presenta ante la planeada víctima: un multimillonario también llamado Jeffrey Lebowski. Cuando la joven esposa del millonario es secuestrada, este le pide al Dude que se encargue de su rescate para una segura liberación. El plan sale mal cuando un amigo del Dude, Walter Sobchak , pretende conservar el dinero del rescate. \r\n        ',
    0,
    0,
    NULL,
    '2021-08-23 09:06:40'
  ),
  (
    14,
    'La naranja mecánica',
    1972,
    1,
    7,
    'Gran Bretaña, en un futuro indeterminado. Alex (Malcolm McDowell) es un joven muy agresivo que tiene dos pasiones: la violencia desaforada y Beethoven. Es el jefe de la banda de los drugos, que dan rienda suelta a sus instintos más salvajes apaleando, violando y aterrorizando a la población. Cuando esa escalada de terror llega hasta el asesinato, Alex es detenido y, en prisión, se someterá voluntariamente a una innovadora experiencia de reeducación que pretende anular drásticamente cualquier atisbo de conducta antisocial.\r\n        ',
    0,
    0,
    NULL,
    '2021-08-23 09:09:03'
  ),
  (
    15,
    'Laurence de Arabia',
    1964,
    3,
    7,
    'El Cairo, 1917. Durante la Gran Guerra (1914-1918), T.E. Lawrence (Peter O&#039;Toole), un conflictivo y enigmático oficial británico, es enviado al desierto para participar en una campaña de apoyo a los árabes contra Turquía. Él y su amigo Sherif Alí (Omar Sharif) pondrán en esta misión toda su alma. Los nativos adoran a Lawrence porque ha demostrado sobradamente ser un amante del desierto y del pueblo árabe. En cambio, sus superiores británicos creen que se ha vuelto loco. A pesar de que los planes de Lawrence se ven coronados por el éxito, su sueño de una Arabia independiente fracasará.\r\n        ',
    0,
    0,
    NULL,
    '2021-08-23 09:16:20'
  ),
  (
    16,
    'Parásitos',
    2019,
    1,
    6,
    '&quot;Debido a que la historia trata sobre una familia pobre que se infiltra en una casa rica, parece muy obvio que Parásitos se refiriera a la familia pobre, y creo que es por eso que el equipo de marketing dudaba un poco. Pero, si lo miras por otro lado, se puede decir que la familia rica también es parásita en términos de trabajo. Ni siquiera pueden lavar los platos ni conducir por sí mismos, con lo que eliminarían el trabajo de la familia pobre. Así que ambos son parásitos\r\n        ',
    0,
    0,
    NULL,
    '2021-08-23 17:49:49'
  );
--
-- Estructura de tabla para la tabla actores
--
CREATE TABLE actores (
  id INT(11) NOT NULL PRiMARY KEY,
  create_time datetime DEFAULT NULL COMMENT 'create time',
  actor varchar(255) DEFAULT NULL COMMENT 'nombre artístico',
  nacionalidad INT(11),
  FOREIGN KEY (nacionalidad) REFERENCES nacionalidades(id)
);
--
-- Datos de inicio  para la tabla actores
--
INSERT INTO actores
VALUES (1, '2021-08-07 09:35:19', 'Jack Nicholson', 2),
  (2, '2021-08-07 09:35:19', 'Faye Dunaway', 2);
--
-- Estructura de la tabla peliculasactores
--
CREATE TABLE peliculasactores (
  id int(11) NOT NULL PRIMARY KEY,
  pelicula INT(11) NOT NULL,
  actor INT(11) NOT NULL,
  fecha datetime DEFAULT current_timestamp(),
  FOREIGN KEY (pelicula) REFERENCES peliculas(id),
  FOREIGN KEY (actor) REFERENCES actores(id)
);
--
-- Volcado de datos para la tabla `peliculasactores`
--
INSERT INTO peliculasactores
VALUES (1, 3, 2, '2021-08-08 20:41:18'),
  (2, 3, 1, '2021-08-08 20:41:18'),
  (3, 5, 1, '2021-08-09 07:54:38');
--
-- Estrucutura TABLA USUARIOS
--
CREATE TABLE usuarios(
  id INT(11) AUTO_INCREMENT PRIMARY KEY,
  usuario VARCHAR(30) NOT NULL,
  email VARCHAR(50) UNIQUE NOT NULL,
  activo tinyint(1) NOT NULL DEFAULT 0
);
-- Datos inicio tabla usuarios
INSERT INTO usuarios
VALUES (1, 'admin', 'admin@gmail.com', 1),
  (2, 'gestor', 'gestor@gmail.com', 1);
-- vista peliculas, generos, nacionalidades
CREATE VIEW peliculasgenerosnacionalidades AS
SELECT peliculas.id AS id,
  peliculas.pelicula AS pelicula,
  peliculas.fecha AS produccion,
  generos.genero AS genero,
  nacionalidades.nacionalidad AS nacionalidad,
  peliculas.puntuacion_media AS puntos,
  peliculas.num_votos AS votos
FROM peliculas
  JOIN generos on peliculas.genero = generos.id
  JOIN nacionalidades on peliculas.nacionalidad = nacionalidades.id;
-- tabla stars
CREATE TABLE stars (
  id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  pelicula int(11) NOT NULL,
  usuario int(11) NOT NULL,
  calificacion int(11) NOT NULL,
  comentarios text NOT NULL,
  creado datetime NOT NULL DEFAULT current_timestamp(),
  modificado datetime NOT NULL DEFAULT current_timestamp(),
  estado tinyint(1) NOT NULL DEFAULT '1' COMMENT '1 = Block, 0 = Unblock',
  FOREIGN KEY (pelicula) REFERENCES peliculas(id) ON DELETE CASCADE,
  FOREIGN KEY (usuario) REFERENCES usuarios(id) ON DELETE CASCADE,
  UNIQUE(pelicula, usuario)
);
--
-- Datps de inicio para la tabla `stars`
--
INSERT INTO stars
VALUES (
    1,
    5,
    1,
    5,
    'Todo un clásico. Cómo la gente especial puede ser marginada por la sociedad',
    '2021-08-27 17:49:04',
    '2021-08-27 17:49:04',
    1
  ),
  (
    2,
    5,
    2,
    4,
    'Los locos son los que no salen en la película',
    '2021-08-27 17:50:46',
    '2021-08-27 17:50:46',
    1
  ),
  (
    4,
    1,
    2,
    5,
    'mágica, simplemente única',
    '2021-08-27 17:55:05',
    '2021-08-27 17:55:05',
    1
  );
-- triger stars para actualizar tabla películas
CREATE TRIGGER after_insert_stars
AFTER
INSERT ON stars FOR EACH ROW
UPDATE peliculas
SET num_votos = num_votos + 1,
  puntuacion_total = puntuacion_total + NEW.calificacion,
  puntuacion_media = puntuacion_total / num_votos
where id = NEW.pelicula;
COMMIT;