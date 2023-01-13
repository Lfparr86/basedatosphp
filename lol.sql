create database lol;
create table champ(
id int primary key auto_increment,
`name` varchar(30),
rol enum("asesino","luchador","mago","tirador","apoyo","tanque"),
difficulty enum("baja","media","alta"),
`description` text
);

insert into champ values (1,"Fiora","luchador","baja","Fiora, la duelista más temida de Valoran, ha alcanzado renombre por su estilo brusco y su mente astuta, así como por la velocidad de su estoque. Fiora nació en el seno de la Casa Laurent, en el reino de Demacia.");
insert into champ values (2,"Morgana","mago","baja","En vistas del conflicto entre su naturaleza celestial y su naturaleza mortal, Morgana decidió atarse las alas para aceptar la humanidad y deja caer el peso de su dolor y rencor sobre los deshonestos y los corruptos. Se opone a las leyes y tradiciones.");
insert into champ values (3,"Janna","apoyo","media","Janna, armada con el poder de los vendavales de Runaterra, es un misterioso espíritu elemental que aprovecha el viento para proteger a los más desfavorecidos de Zaun. Hay quien cree que surgió de los ruegos de los marineros de Runaterra.");
insert into champ values (4,"Jinx","tirador","media","Jinx, una criminal perturbada e impulsiva de Zaun, vive para sembrar el caos sin importarle las consecuencias. Provoca las explosiones más ruidosas y cegadoras con su arsenal de armas letales para dejar un rastro de terror y destrucción a su paso.");
insert into champ values (5,"Zac","tanque","alta","Zac es el resultado de un vertido tóxico que recorría una veta tecnoquímica y fue a parar a una profunda caverna apartada en el sumidero de Zaun. A pesar de sus humildes orígenes, Zac ha pasado de ser un flujo primitivo");