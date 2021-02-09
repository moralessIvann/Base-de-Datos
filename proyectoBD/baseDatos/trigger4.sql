DELIMITER $
CREATE TRIGGER validar_codigoBarra
before INSERT ON articulo 
FOR EACH ROW
BEGIN
IF (character_length(new.CodigoBarra) > 8) THEN
SET NEW.CodigoBarra = 'N/A';
END IF;
END $
