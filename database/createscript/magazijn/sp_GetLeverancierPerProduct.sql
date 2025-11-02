DROP PROCEDURE IF EXISTS sp_GetLeverancierPerProduct;

DELIMITER $$

CREATE PROCEDURE sp_GetLeverancierPerProduct(
    IN p_id INT
)

BEGIN

    SELECT p.Naam AS ProductNaam
          ,l.Naam AS LeverancierNaam
          ,l.ContactPersoon
          ,l.LeverancierNummer
          ,l.Mobiel
          ,ppl.DatumLevering
          ,ppl.Aantal
          ,ppl.DatumEerstvolgendeLevering
          ,m.AantalAanwezig
    FROM Product AS p
    INNER JOIN ProductPerLeverancier AS ppl ON p.Id = ppl.ProductId
    INNER JOIN Leverancier AS l ON ppl.LeverancierId = l.Id
    INNER JOIN Magazijn AS m ON p.Id = m.ProductId
    WHERE p.Id = p_id
    ORDER BY ppl.DatumLevering ASC;

END$$

DELIMITER ;