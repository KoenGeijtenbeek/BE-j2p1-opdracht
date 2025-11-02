DROP PROCEDURE IF EXISTS sp_GetAllergeenPerProduct;

DELIMITER $$

CREATE PROCEDURE sp_GetAllergeenPerProduct(
    IN p_id INT
)

BEGIN

    SELECT p.Id
          ,p.Naam
          ,p.Barcode
          ,a.Id
          ,a.Naam
          ,a.Omschrijving
    FROM Product AS p
    INNER JOIN ProductPerAllergeen AS ppa ON p.Id = ppa.ProductId
    INNER JOIN Allergeen AS a ON ppa.AllergeenId = a.Id
    WHERE p.Id = p_id
    ORDER BY a.Naam ASC;

END$$

DELIMITER ;