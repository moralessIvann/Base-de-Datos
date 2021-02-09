DELIMITER $ 
create trigger stockNull
before INSERT ON articulo 
FOR EACH ROW
BEGIN
IF (NEW.Stock < 0) THEN
SET NEW.Stock = 0;
END IF;
END $
