drop procedure Validar;
delimiter $
create procedure Validar(in id int,in Nom varchar(150),in Codigo varchar(150),in Mar varchar(150),
in sto int,in prese varchar(150),in Fecha date,in idPro int,in idDepa int)
begin
declare idp int;
if idPro is not null then 
select idProveedor into idp from proveedor where idProveedor = idPro;
insert into articulo values(id,Nom,Codigo,Mar,sto,prese,Fecha,idp,idDepa);
end if;
end $


#call vali(2, 'galletas', 563453, 'Gamesa', 2, 'piezas', '2019-12-12', 4, 2 );
#select * from articulo;