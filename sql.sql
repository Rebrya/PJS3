/*pour avoir les produit*/
insert into produit(designation, codeproduit)
select `COL 2`, `COL 3`
where 1;

UPDATE `produit` SET `prix` = 3
where codeproduit like 'CR%';
UPDATE `produit` SET `prix` = 4
where codeproduit like 'FR%';

/*pour avoir les familles*/
insert into appartientfamille(idproduit, idfamille)
select P.id, 1
from produit P
where P.codeproduit like 'CR%';

insert into appartientfamille(idproduit, idfamille)
select P.id, 2
from produit P
where P.codeproduit like 'FR%';

insert into appartientfamille(idproduit, idfamille)
select P.id, 3
from produit P
where P.codeproduit like 'TR%';

INSERT INTO `contientfamille`(`idFamille`, `idCatalogue`) VALUES (1,1);
INSERT INTO `contientfamille`(`idFamille`, `idCatalogue`) VALUES (2,1);
INSERT INTO `contientfamille`(`idFamille`, `idCatalogue`) VALUES (3,1);



(SELECT C.id FROM
	Users U, FaitPar FP, Commande C
	WHERE U.username = "ren"
	AND FP.idUser = U.id
	AND FP.idCommande = C.id
	AND C.valider = false)