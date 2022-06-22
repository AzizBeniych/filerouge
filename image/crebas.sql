/*==============================================================*/
/* Nom de SGBD :  MySQL 5.0                                     */
/* Date de création :  09/06/2022 11:31:25                      */
/*==============================================================*/


drop table if exists Book;

drop table if exists Category;

drop table if exists Client;

drop table if exists "Order";

drop table if exists OrderDetails;

/*==============================================================*/
/* Table : Book                                                 */
/*==============================================================*/
create table Book
(
   bookId               int not null,
   categoryId           int not null,
   title                int,
   author               int,
   description          char(1),
   dateOfPublication    int,
   price                float,
   priceOffer           float,
   stock                int,
   image                varchar(254),
   primary key (bookId)
);

/*==============================================================*/
/* Table : Category                                             */
/*==============================================================*/
create table Category
(
   categoryId           int not null,
   name                 int,
   primary key (categoryId)
);

/*==============================================================*/
/* Table : Client                                               */
/*==============================================================*/
create table Client
(
   clientId             int not null,
   firstName            char(1),
   lastName             char(1),
   email                char(1),
   password             int,
   adress               int,
   primary key (clientId)
);

/*==============================================================*/
/* Table : "Order"                                              */
/*==============================================================*/
create table "Order"
(
   orderId              int not null,
   clientId             int not null,
   date                 datetime,
   adress               int,
   primary key (orderId)
);

/*==============================================================*/
/* Table : OrderDetails                                         */
/*==============================================================*/
create table OrderDetails
(
   orderId              int not null,
   bookId               int not null,
   quantite             int,
   primary key (orderId, bookId)
);

alter table Book add constraint FK_association3 foreign key (categoryId)
      references Category (categoryId) on delete restrict on update restrict;

alter table "Order" add constraint FK_association1 foreign key (clientId)
      references Client (clientId) on delete restrict on update restrict;

alter table OrderDetails add constraint FK_association2 foreign key (bookId)
      references Book (bookId) on delete restrict on update restrict;

alter table OrderDetails add constraint FK_association2 foreign key (orderId)
      references "Order" (orderId) on delete restrict on update restrict;

