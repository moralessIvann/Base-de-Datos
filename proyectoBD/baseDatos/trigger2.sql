use bd_abarrotes;
drop trigger if exists cuenta_existencia;  
delimiter $
create trigger cuenta_existencia
after insert on articulo for each row begin
DECLARE updatecount INT;
  set updatecount = ( select count(*) from articulo where stock );
  #select updatecount from articulo;
end $ 



#call vali(3, 'galletas', '563453', 'Gamesa', 2, 'piezas', null, 1, 1 );

select *from  articulo where stock;