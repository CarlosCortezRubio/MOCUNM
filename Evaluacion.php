Evaluación:
- Diseñar la Base de datos que soporte el sistema requerido,
- Realizar el Crud para la tabla Periodo (PHP +JQuery/JavaScript)

Sistema requerido:
Desarrollar una aplicación que permita el registro de las planillas de los pensionados de la Institución

Las planillas son el conjunto de registro que constituye el pago mensual de los trabajadores de la Institución, 
cada registro está constituido por un conjunto de conceptos los cuales pueden ser de ingreso o egreso, 
adjunto te enviaremos un archivo xls, donde podrá ver la información más detallada

Existen distintos tipos de pensionados, por lo que los reportes deben ser presentados según el tipo al que pertenece, los tipos son:
Pensionados - viudez - orfandad

Los requerimientos son los siguientes:

- Módulo de Planillas según el tipo
	* CRUD planillas (Se puede eliminar sí el concepto no ha sido utilizado)
* En el listar Planillas se debe permitir el filtrado por: Año-Mes-Dni-Nombres del Pensionado
- Módulo de Gestión de Conceptos
	* CRUD conceptos (Se puede eliminar sí el concepto no ha sido utilizado)
	* Activar/Desactivar concepto (Hay conceptos que no se utilizan mensualmente, se desea que los mismos no se muestren en los reportes [PE Aguinaldo])
- Módulo de gestión de Periodos
	* Se debe permitir Apertura/Cierre Periodos
	* Al aperturar se debe ofrecer la opción de replicar el Periodos anterior
	* Al cerrar un Periodos no se puede actualizar ninguna planilla asociada a ese Periodo
	
Información adicional:
Archivo: datos.xls
	
	/*==============================================================*/
/* Table: Periodo                                               */
/*==============================================================*/
create table Periodo
(
   idPeriodo            int not null auto_increment,
   edoPeriodo           int, (Clave foranea)
   anioPeriodo          int,
   mesPeriodo           int,
   nomPeriodo           varchar(64),
   obsPeriodo           varchar(128),
   primary key (idPeriodo)
);
