Evaluaci�n:
- Dise�ar la Base de datos que soporte el sistema requerido,
- Realizar el Crud para la tabla Periodo (PHP +JQuery/JavaScript)

Sistema requerido:
Desarrollar una aplicaci�n que permita el registro de las planillas de los pensionados de la Instituci�n

Las planillas son el conjunto de registro que constituye el pago mensual de los trabajadores de la Instituci�n, 
cada registro est� constituido por un conjunto de conceptos los cuales pueden ser de ingreso o egreso, 
adjunto te enviaremos un archivo xls, donde podr� ver la informaci�n m�s detallada

Existen distintos tipos de pensionados, por lo que los reportes deben ser presentados seg�n el tipo al que pertenece, los tipos son:
Pensionados - viudez - orfandad

Los requerimientos son los siguientes:

- M�dulo de Planillas seg�n el tipo
	* CRUD planillas (Se puede eliminar s� el concepto no ha sido utilizado)
* En el listar Planillas se debe permitir el filtrado por: A�o-Mes-Dni-Nombres del Pensionado
- M�dulo de Gesti�n de Conceptos
	* CRUD conceptos (Se puede eliminar s� el concepto no ha sido utilizado)
	* Activar/Desactivar concepto (Hay conceptos que no se utilizan mensualmente, se desea que los mismos no se muestren en los reportes [PE Aguinaldo])
- M�dulo de gesti�n de Periodos
	* Se debe permitir Apertura/Cierre Periodos
	* Al aperturar se debe ofrecer la opci�n de replicar el Periodos anterior
	* Al cerrar un Periodos no se puede actualizar ninguna planilla asociada a ese Periodo
	
Informaci�n adicional:
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
