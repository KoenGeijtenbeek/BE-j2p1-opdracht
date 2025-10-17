DROP PROCEDURE IF EXISTS SP_GetAllMagazijnen;

DELIMITER $$

CREATE PROCEDURE SP_GetAllMagazijnen()
BEGIN
    -- TODO: toevoegen data van andere tabellen
    SELECT MGZN.Id
           ,MGZN.ProductId
           ,MGZN.VerpakkingsEenheid
           ,MGZN.AantalAanwezig
    FROM Magazijn AS MGZN;
END$$

DELIMITER ;