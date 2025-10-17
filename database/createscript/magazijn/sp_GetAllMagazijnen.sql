DROP PROCEDURE IF EXISTS SP_GetAllMagazijnen;

DELIMITER $$

CREATE PROCEDURE SP_GetAllMagazijnen()
BEGIN
    -- TODO: toevoegen data van andere tabellen
    SELECT MGZN.Id
           ,MGZN.ProductId
           ,MGZN.VerpakkingsEenheid
           ,MGZN.AantalAanwezig
           ,Product.Naam
           ,Product.Barcode
    FROM Magazijn AS MGZN
    INNER JOIN Product ON Product.Id = MGZN.ProductId
    ORDER BY Product.Barcode ASC;
END$$

DELIMITER ;