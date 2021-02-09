use bd_abarrotes;
#Eliminamos el trigger si existe.
drop trigger if exists before_date_insert;  /*2*/
#Iniciamos definiendo el delimitador
delimiter $
CREATE TRIGGER before_date_insert
before insert on articulo
for each row
begin
declare aux date;
	if(new.FechaCaducidad is null) then
    select date(date_add(now(),interval 1 month)) into aux;
		set new.FechaCaducidad = aux;
    end if;
end$ 

call vali(3, 'galletas', '563453', 'Gamesa', 2, 'piezas', null, 1, 1 );  /*3*/

select *from  empleado;
SELECT stock, COUNT(*) FROM articulo; 

alter table articulo change FechaCaducidad FechaCaducidad date;     /* 1 cambiar tipo de dato*/

DELETE FROM articulo WHERE idArticulo >2 and idArticulo <5;
INSERT INTO `articulo` (`idArticulo`, `Nombre`, `CodigoBarra`, `Marca`, `Stock`, `Presentacion`, `FechaCaducidad`, `Proveedor_idProveedor`, `Departamento_idDepartamento`) VALUES
(4, 'chicle', '3323', 'Clorets', 11, 'cajas', 'null', 1, 1);