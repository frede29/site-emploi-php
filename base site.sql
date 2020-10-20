#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: offre d'emploi
#------------------------------------------------------------

CREATE TABLE offre_d_emploi(
        id_offre    Varchar (50) NOT NULL ,
        titre       Varchar (50) NOT NULL ,
        description Varchar (50) NOT NULL ,
        date        Varchar (50) NOT NULL ,
        pays        Varchar (50) NOT NULL ,
        ville       Varchar (50) NOT NULL
	,CONSTRAINT offre_d_emploi_PK PRIMARY KEY (id_offre)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Utilisateurs
#------------------------------------------------------------

CREATE TABLE Utilisateurs(
        id_utilisateur Varchar (50) NOT NULL COMMENT "c'est la clé primaire de l'entité utilisateur"  ,
        Nom            Varchar (50) NOT NULL COMMENT "c'est le nom de l'utilisateur"  ,
        Prenom         Varchar (50) NOT NULL COMMENT "c'est le prenom de l'utilisateur"  ,
        Email          Varchar (50) NOT NULL COMMENT "l'adresse mail de l'utilisateur"  ,
        Mot_de_passe   Varchar (50) NOT NULL ,
        id_offre       Varchar (50) NOT NULL
	,CONSTRAINT Utilisateurs_PK PRIMARY KEY (id_utilisateur)

	,CONSTRAINT Utilisateurs_offre_d_emploi_FK FOREIGN KEY (id_offre) REFERENCES offre_d_emploi(id_offre)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Entreprises
#------------------------------------------------------------

CREATE TABLE Entreprises(
        id_entreprise Varchar (50) NOT NULL ,
        Nom           Varchar (50) NOT NULL ,
        Domaine       Varchar (50) NOT NULL ,
        mot_de_passe  Varchar (50) NOT NULL ,
        Description   Varchar (50) NOT NULL ,
        id_offre      Varchar (50) NOT NULL
	,CONSTRAINT Entreprises_PK PRIMARY KEY (id_entreprise)

	,CONSTRAINT Entreprises_offre_d_emploi_FK FOREIGN KEY (id_offre) REFERENCES offre_d_emploi(id_offre)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: _notification
#------------------------------------------------------------

CREATE TABLE _notification(
        id_notif                Varchar (50) NOT NULL ,
        titre                   Varchar (50) NOT NULL ,
        etat                    Varchar (50) NOT NULL ,
        nom_entreprise          Varchar (50) NOT NULL ,
        ville                   Varchar (50) NOT NULL ,
        id_offre                Varchar (50) NOT NULL ,
        id_offre_offre_d_emploi Varchar (50)
	,CONSTRAINT _notification_AK UNIQUE (id_offre)
	,CONSTRAINT _notification_PK PRIMARY KEY (id_notif)

	,CONSTRAINT _notification_offre_d_emploi_FK FOREIGN KEY (id_offre_offre_d_emploi) REFERENCES offre_d_emploi(id_offre)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: _domaine
#------------------------------------------------------------

CREATE TABLE _domaine(
        id_domaine Varchar (50) NOT NULL ,
        libelle    Varchar (50) NOT NULL ,
        specialite Varchar (50) NOT NULL
	,CONSTRAINT _domaine_PK PRIMARY KEY (id_domaine)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: type d'offre
#------------------------------------------------------------

CREATE TABLE type_d_offre(
        id_type_offre Varchar (50) NOT NULL ,
        libelle       Varchar (50) NOT NULL
	,CONSTRAINT type_d_offre_PK PRIMARY KEY (id_type_offre)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: contenir
#------------------------------------------------------------

CREATE TABLE contenir(
        id_type_offre Varchar (50) NOT NULL ,
        id_offre      Varchar (50) NOT NULL ,
        id_domaine    Varchar (50) NOT NULL
	,CONSTRAINT contenir_PK PRIMARY KEY (id_type_offre,id_offre,id_domaine)

	,CONSTRAINT contenir_type_d_offre_FK FOREIGN KEY (id_type_offre) REFERENCES type_d_offre(id_type_offre)
	,CONSTRAINT contenir_offre_d_emploi0_FK FOREIGN KEY (id_offre) REFERENCES offre_d_emploi(id_offre)
	,CONSTRAINT contenir__domaine1_FK FOREIGN KEY (id_domaine) REFERENCES _domaine(id_domaine)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: recevoir
#------------------------------------------------------------

CREATE TABLE recevoir(
        id_utilisateur Varchar (50) NOT NULL COMMENT "c'est la clé primaire de l'entité utilisateur"  ,
        id_notif       Varchar (50) NOT NULL ,
        id_offre       Varchar (50) NOT NULL
	,CONSTRAINT recevoir_PK PRIMARY KEY (id_utilisateur,id_notif,id_offre)

	,CONSTRAINT recevoir_Utilisateurs_FK FOREIGN KEY (id_utilisateur) REFERENCES Utilisateurs(id_utilisateur)
	,CONSTRAINT recevoir__notification0_FK FOREIGN KEY (id_notif) REFERENCES _notification(id_notif)
	,CONSTRAINT recevoir_offre_d_emploi1_FK FOREIGN KEY (id_offre) REFERENCES offre_d_emploi(id_offre)
)ENGINE=InnoDB;

