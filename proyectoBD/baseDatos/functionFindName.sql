use basefinal;


drop function buscarEmpleado;
DELIMITER //
create function buscarEmpleado (buscaNombre varchar(20)) RETURNS integer
BEGIN
declare resul integer; #varchar(150);
	select count(empleado.Nombre1)  into resul from empleado where Nombre1 = buscaNombre;
    return resul;
END //

select buscarEmpleado('john');
select *from empleado;

