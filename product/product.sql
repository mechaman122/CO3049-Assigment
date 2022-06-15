--
-- Database: `product`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `item_id` int(11) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `item_price` double(10,2) NOT NULL,
  `item_image` varchar(255) NOT NULL,
  `item_cate` varchar(255) NOT NULL,
  `item_nsx` varchar(255) DEFAULT NULL,
  `item_about` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `tbl_product` (`item_id`, `item_name`, `item_price`, `item_image`,`item_cate`, `item_nsx`,`item_about`) VALUES
(1, 'The Sus', 99.00, '../img/among-us-symbol.png','clothes', '2020','sex toy'), -- NOW()
(2, 'The Sussier', 109.00, '../img/among-us-symbol.png','accessory', '2021','sex toy'),
(3, 'The more Sus', 129.00, '../img/among-us-symbol.png','figure', '2022','A Good Smile Company import
From the popular party game Among Us
The Crewmate  iconic design has been faithfully recreated in Nendoroid form
Optional parts include a pointed hand, a bone piece, and a red shine sticker
The body can also be separated into two halves and combine with the bone part to show what the imposter left of their victims'),
(4, 'Ultimate Sus', 135.00, '../img/among-us-symbol.png','gaming gear', '2019','Size: Standard
Polyester fibers, all new materials
Plush figure has devil horns
Measures 12" tall
Officially licensed'),
(5, 'Imposter', 140.00, '../img/among-us-symbol.png','accessory', '2020','Size: Standard
Polyester fibers, all new materials
Plush figure has devil horns
Measures 12" tall
Officially licensed'),
(6, 'Red Impostor', 101.00, '../img/among-us-symbol.png','figure', '2021','Size: Standard
Polyester fibers, all new materials
Plush figure has devil horns
Measures 12" tall
Officially licensed'),
(7, 'King of Sus', 150.00, '../img/among-us-symbol.png','gaming gear', '2020','Size: Standard
Polyester fibers, all new materials
Plush figure has devil horns
Measures 12" tall
Officially licensed'),
(8, 'Sussssss', 169.00, '../img/among-us-symbol.png','clothes', '2021','Size: Standard
Polyester fibers, all new materials
Plush figure has devil horns
Measures 12" tall
Officially licensed'),
(9, 'Suspicious...', 200.00, '../img/among-us-symbol.png','accessory', '2021','Size: Standard
Polyester fibers, all new materials
Plush figure has devil horns
Measures 12" tall
Officially licensed'),
(10, 'Not Engineer', 170.00, '../img/among-us-symbol.png','figure', '2019','Size: Standard
Polyester fibers, all new materials
Plush figure has devil horns
Measures 12" tall
Officially licensed'),
(11, 'Venter is Real', 95.00, '../img/among-us-symbol.png','accessory', '2077','Size: Standard
Polyester fibers, all new materials
Plush figure has devil horns
Measures 12" tall
Officially licensed'),
(12, 'Imposter the Nazi', 111.00, '../img/among-us-symbol.png','clothes', '2096','Size: Standard
Polyester fibers, all new materials
Plush figure has devil horns
Measures 12" tall
Officially licensed'),
(13, 'Sugoma', 152.00, '../img/among-us-symbol.png','gaming gear', '2022','Size: Standard
Polyester fibers, all new materials
Plush figure has devil horns
Measures 12" tall
Officially licensed'),
(14, 'Top Trumps Among US 1000 Piece Jigsaw Puzzle Game', 111.00, '../img/among-us-symbol.png','game', '2022','Strap in for the trip of a lifetime with this detailed, officially-licensed Among US jigsaw puzzle
Countless crewmates and their pets are assembled in the lobby for you to discover'),
(15, 'Zoofy Among Us Red 12" Plush w/ Devil Horns Standard', 111.00, '../img/among-us-symbol.png',' toy', '2022','Size: Standard
Polyester fibers, all new materials
Plush figure has devil horns
Measures 12" tall
Officially licensed'),
(16, 'Among Us Backpack', 111.00, '../img/among-us-symbol.png','backpack', '2022','100% Polyester
Imported
Polyester lining
Zipper closure
15" shoulder drop
Hand Wash Only
Large main compartment and interior branded lining'),
(17, 'Among Us Official Toikido Yume LED Light-up Crewmate with Hand & Bag Strap - Red & Cyan (2pk), Assorted', 111.00, '../img/among-us-symbol.png','Glow Light', '2022','AMONG US TOY FIGURINE– Show your fandom with the LED Light-up Crewmate with Hand & Bag strap. Official branded toys of hit online multiplayer game Among Us.
LED LIGHT-UP FIGURE – There are 4 Light-Up Crewmate figures to collect: Red, Cyan, Yellow and Purple. Each with 2 display modes: (1) Neon Glow! (2) Dark Stealth.
HAND AND BAG STRAP – Includes a fabric strap, connect to your wrist or backpack and glow!
GIFT FOR AMONG US FANS – Character toys of popular social deduction game Among Us. The perfect gift for gaming fans, kids, girls and boys.
OFFICIAL LICENSED PRODUCT – Official merchandise of Among Us, by InnerSloth. 3 X LR44 batteries included.
3.5 inches / 9 cm.
'),
(18, 'Among Us: Crewmate (Cyan) Nendoroid Action Figure', 111.00, '../img/among-us-symbol.png','figure', '2022','A Good Smile Company import
From the popular party game Among Us
The Crewmate iconic design has been faithfully recreated in Nendoroid form
Optional parts include a pointed hand, a bone piece, and a red shine sticker'),
(19, 'Among Us Official Toikido Yume 16-Inch Super-Soft Squishy Plush Toy  Yellow,One Size', 111.00, '../img/among-us-symbol.png','figure', '2022','A Good Smile Company import
From the popular party game Among Us
The Crewmate iconic design has been faithfully recreated in Nendoroid form
Optional parts include a pointed hand, a bone piece, and a red shine sticker'),
(20, 'Among Us: But Detective Gonan', 111.00, '../img/among-us-symbol.png','kindle edition', '2022','book'),
(21, 'Among Us: But Detective Gonan', 111.00, '../img/among-us-symbol.png','kindle edition', '2022','book'),
(22, 'Among Us: Crewmate (Black) Nendoroid Action Figure', 111.00, '../img/among-us-symbol.png','figure', '2022','A Good Smile Company import
From the popular party game Among Us
The Crewmate iconic design has been faithfully recreated in Nendoroid form
Optional parts include a pointed hand, a bone piece, and a red shine sticker'),
(23, 'Among Us: But Detective Gonan', 111.00, '../img/among-us-symbol.png','kindle edition', '2022','book'),
(24, 'Among Us: But Detective Gonan', 111.00, '../img/among-us-symbol.png','kindle edition', '2022','book'),
(25, 'Among Us: But Detective Gonan', 111.00, '../img/among-us-symbol.png','kindle edition', '2022','book'),
(26, 'Birthday Boy Among_Us Dabbing Family Member Brother Sister Mom Dad Matching T-Shirt Gifts', 111.00, '../img/among-us-symbol.png','clothes', '2096','A perfect Gift for boy kids, girls. Perfect present for Halloween, Thanksgiving, Easter Day, birthday or any special occasion.'),
(27, 'Birthday Boy Among_Us Dabbing Family Member Brother Sister Mom Dad Matching T-Shirt Gifts', 111.00, '../img/among-us-symbol.png','clothes', '2096','A perfect Gift for boy kids, girls. Perfect present for Halloween, Thanksgiving, Easter Day, birthday or any special occasion.'),
(28, 'Birthday Boy Among_Us Dabbing Family Member Brother Sister Mom Dad Matching T-Shirt Gifts', 111.00, '../img/among-us-symbol.png','clothes', '2096','A perfect Gift for boy kids, girls. Perfect present for Halloween, Thanksgiving, Easter Day, birthday or any special occasion.'),
(29, 'Birthday Boy Among_Us Dabbing Family Member Brother Sister Mom Dad Matching T-Shirt Gifts', 111.00, '../img/among-us-symbol.png','clothes', '2096','A perfect Gift for boy kids, girls. Perfect present for Halloween, Thanksgiving, Easter Day, birthday or any special occasion.'),
(30, 'Birthday Boy Among_Us Dabbing Family Member Brother Sister Mom Dad Matching T-Shirt Gifts', 111.00, '../img/among-us-symbol.png','clothes', '2096','A perfect Gift for boy kids, girls. Perfect present for Halloween, Thanksgiving, Easter Day, birthday or any special occasion.'),
(31, 'Birthday Boy Among_Us Dabbing Family Member Brother Sister Mom Dad Matching T-Shirt Gifts', 111.00, '../img/among-us-symbol.png','clothes', '2096','A perfect Gift for boy kids, girls. Perfect present for Halloween, Thanksgiving, Easter Day, birthday or any special occasion.'),
(32, 'Among Us: Coloring Book', 111.00, '../img/among-us-symbol.png','book', '2096','Coloring Book For Kids and Adults Color It original Among us characters ;this book is among the most popular adult and kids coloring books.'),
(33, 'Among Us: Coloring Book', 111.00, '../img/among-us-symbol.png','book', '2096','Coloring Book For Kids and Adults Color It original Among us characters ;this book is among the most popular adult and kids coloring books.'),
(34, 'Among Us: Coloring Book', 111.00, '../img/among-us-symbol.png','book', '2096','Coloring Book For Kids and Adults Color It original Among us characters ;this book is among the most popular adult and kids coloring books.'),
(35, 'Among Us: Coloring Book', 111.00, '../img/among-us-symbol.png','book', '2096','Coloring Book For Kids and Adults Color It original Among us characters ;this book is among the most popular adult and kids coloring books.'),
(36, 'Among Us: Coloring Book', 111.00, '../img/among-us-symbol.png','book', '2096','Coloring Book For Kids and Adults Color It original Among us characters ;this book is among the most popular adult and kids coloring books.'),
(37, 'Among Us: Coloring Book', 111.00, '../img/among-us-symbol.png','book', '2096','Coloring Book For Kids and Adults Color It original Among us characters ;this book is among the most popular adult and kids coloring books.'),
(38, 'Among Us: Coloring Book', 111.00, '../img/among-us-symbol.png','book', '2096','Coloring Book For Kids and Adults Color It original Among us characters ;this book is among the most popular adult and kids coloring books.'),
(39, 'Among Us: Coloring Book', 111.00, '../img/among-us-symbol.png','book', '2096','Coloring Book For Kids and Adults Color It original Among us characters ;this book is among the most popular adult and kids coloring books.'),
(40, 'Among Us: A Traitor in Space', 111.00, '../img/among-us-symbol.png','toy', '2096','Ten astronauts. An imposter determined to kill them all. Welcome to the deadliest spaceship of all time.'),
(41, 'Among us helmet', 111.00, '../img/among-us-symbol.png','helmet', '2096','BUILT IN SOUND CHIP with realistic countdown and blast off sounds
SPRING LOADED retractable shield
MOCK BOOM MICROPHONE for pretend communication'),
(42, 'Maxx Marketing inc. Official Yume Among US 16-Inch Super-Soft Squishy Plush Toy  Black', 111.00, '../img/among-us-symbol.png','figure', '2096','A Good Smile Company import
From the popular party game Among Us
The Crewmate iconic design has been faithfully recreated in Nendoroid form
Optional parts include a pointed hand, a bone piece, and a red shine sticker'),
(43, 'Hot Figures Toys for hot game PVC Space Figures Model Toys', 111.00, '../img/among-us-symbol.png','figure', '2022','Refer to high quality figure toy action game figures. Touch to delicate, easy to hold and comfortable, non-toxic and eco-friendly PVC material.'),
(44, 'Hot Figures Toys for hot game PVC Space Figures Model Toys', 111.00, '../img/among-us-symbol.png','figure', '2022','Refer to high quality figure toy action game figures. Touch to delicate, easy to hold and comfortable, non-toxic and eco-friendly PVC material.'),
(45, 'Hot Figures Toys for hot game PVC Space Figures Model Toys', 111.00, '../img/among-us-symbol.png','figure', '2022','Refer to high quality figure toy action game figures. Touch to delicate, easy to hold and comfortable, non-toxic and eco-friendly PVC material.'),
(46, 'Hot Figures Toys for hot game PVC Space Figures Model Toys', 111.00, '../img/among-us-symbol.png','figure', '2022','Refer to high quality figure toy action game figures. Touch to delicate, easy to hold and comfortable, non-toxic and eco-friendly PVC material.'),
(47, 'Hot Figures Toys for hot game PVC Space Figures Model Toys', 111.00, '../img/among-us-symbol.png','figure', '2022','Refer to high quality figure toy action game figures. Touch to delicate, easy to hold and comfortable, non-toxic and eco-friendly PVC material.'),
(48, 'Hot Figures Toys for hot game PVC Space Figures Model Toys', 111.00, '../img/among-us-symbol.png','figure', '2022','Refer to high quality figure toy action game figures. Touch to delicate, easy to hold and comfortable, non-toxic and eco-friendly PVC material.'),
(49, 'Hot Figures Toys for hot game PVC Space Figures Model Toys', 111.00, '../img/among-us-symbol.png','figure', '2022','Refer to high quality figure toy action game figures. Touch to delicate, easy to hold and comfortable, non-toxic and eco-friendly PVC material.'),
(50, 'Among Us Crewmate (White)', 111.00, '../img/among-us-symbol.png','figure', '2022','Among Us Crewmate (white) 4-inch Action Figure with 4 Interchangeable Hands and 2 Hats by Toikido and Just Toys');



--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`item_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT;
