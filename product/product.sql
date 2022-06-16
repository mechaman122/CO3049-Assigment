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
  `item_about` text DEFAULT NULL,
  `item_qty` INT DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `tbl_product` (`item_id`, `item_name`, `item_price`, `item_image`,`item_cate`, `item_nsx`,`item_about`,`item_qty`) VALUES
(1, 'Zoofy Among Us Red', 33.00, '../img/item-1.jpg','toy', '2020','Size: Standard
Polyester fibers, all new materials
Plush figure has devil horns
Measures 12" tall
Officially licensed',10), -- NOW()
(2, 'Zoofy Among Us Pink', 33.00, '../img/item-2.jpg','toy', '2021','Size: Standard
Polyester fibers, all new materials
Plush figure has devil horns
Measures 12" tall
Officially licensed',10),
(3, 'Zoofy Among Us Pink', 333.00, '../img/item-3.jpg','toy', '2022','Size: Standard
Polyester fibers, all new materials
Plush figure has devil horns 
Measures 12 tall
Officially licensed',10),
(4, 'Zoofy Among Us Red 12" Plush w/ Devil Horns Standard', 33.00, '../img/item-4.jpg','toy', '2019','Size: Standard
Polyester fibers, all new materials
Plush figure has devil horns
Measures 12" tall
Officially licensed',10),
(5, 'Maxx Marketing inc. Official Yume Among US 16-Inch Super-Soft Squishy Plush Toy  Black', 33.00, '../img/item-5.jpg','toy', '2020','Size: Standard
Polyester fibers, all new materials
Plush figure has devil horns
Measures 12" tall
Officially licensed',10),
(6, 'All Zoofy Among Us', 150.00, '../img/item-6.jpg','toy', '2021','Size: Standard
Polyester fibers, all new materials
Plush figure has devil horns
Measures 12" tall
Officially licensed',10),
(7, 'Among U&s Plush Toy 12Inch Cute Stuffed Figure Bulging Eyes Astronaut PlushToy Figure with is The Best Gift for Kids (Red)', 50.00, '../img/item-7.jpg','toy', '2020','Size: Standard
Polyester fibers, all new materials
Plush figure has devil horns
Measures 12" tall
Officially licensed',10),
(8, 'Among Us Cute Astronaut Plush', 169.00, '../img/item-8.jpg','toy', '2021','Size: Standard
Polyester fibers, all new materials
Plush figure has devil horns
Measures 12" tall
Officially licensed',10),
(9, 'Among U&s Plush Toy 12Inch Cute Stuffed Figure Bulging Eyes Astronaut PlushToy', 200.00, '../img/item-9.jpg','toy', '2021','Size: Standard
Polyester fibers, all new materials
Plush figure has devil horns
Measures 12" tall
Officially licensed',10),
(10, 'Among U&s Plush Toy 12Inch Cute Stuffed Figure Bulging Eyes Astronaut PlushToy Figure', 170.00, '../img/item-10.jpg','toy', '2019','Size: Standard
Polyester fibers, all new materials
Plush figure has devil horns
Measures 12" tall
Officially licensed',10),
(11, 'RubRab Hot Game Character Plush Toys Soft Merch Plushies Cute Astronaut Stuffed Plushies Doll Gifts for Game Fans and Kids Birthday Build-in BB Whistle (Figure Toy E)', 95.00, '../img/item-11.jpg','toy', '2022','Funny voice: Plush built-in plastic BB sounder, when you press the plush toy, and it will make a sound, which makes these toys more funny.
Soft Material: Plush is made of durable plush material and filled with high-quality PP cotton material. Easy to clean, use a small amount of soap and water to remove stains, and dry naturally.',10),
(12, 'RubRab Hot Game Character Plush Toys Soft Merch Plushies Cute Astronaut Stuffed Plushies Doll Gifts for Game Fans and Kids Birthday Build-in BB Whistle (Figure Toy E)', 111.00, '../img/item-12.jpg','toy', '2022','Funny voice: Plush built-in plastic BB sounder, when you press the plush toy, and it will make a sound, which makes these toys more funny.
Soft Material: Plush is made of durable plush material and filled with high-quality PP cotton material. Easy to clean, use a small amount of soap and water to remove stains, and dry naturally.',10),
(13, 'Fxxti 2 Pcs Plush Merch Toys with Music Cute Small Among Us Plushies Toys Gifts for Game Fans Crewmate Cute Music Stuffed Doll,Pink', 20.00, '../img/item-13.jpg','toy', '2022','[Material] it is made of high-quality cotton, not easily deformed, touch to delicate, very soft, and comfortable.crewmate stuffed plush plushie toy action game figures soft doll High-quality materials.Use high-quality short-pile fabric, filled with soft PP cotton, smooth to the touch.',10),
(14, 'Fxxti 2 Pcs Plush Merch Toys with Music Cute Small Among Us Plushies Toys Gifts for Game Fans Crewmate Cute Music Stuffed Doll,Blue', 20.00, '../img/item-14.jpg','toy', '2022','[Material] it is made of high-quality cotton, not easily deformed, touch to delicate, very soft, and comfortable.crewmate stuffed plush plushie toy action game figures soft doll High-quality materials.Use high-quality short-pile fabric, filled with soft PP cotton, smooth to the touch.',10),
(15, 'Fxxti 2 Pcs Plush Merch Toys with Music Cute Small Among Us Plushies Toys Gifts for Game Fans Crewmate Cute Music Stuffed Doll,Brown', 20.00, '../img/item-15.jpg',' toy', '2022','[Material] it is made of high-quality cotton, not easily deformed, touch to delicate, very soft, and comfortable.crewmate stuffed plush plushie toy action game figures soft doll High-quality materials.Use high-quality short-pile fabric, filled with soft PP cotton, smooth to the touch.',10),
(16, 'Fxxti 2 Pcs Plush Merch Toys with Music Cute Small Among Us Plushies Toys Gifts for Game Fans Crewmate Cute Music Stuffed Doll,Green', 20.00, '../img/item-16.jpeg','toy', '2022','[Material] it is made of high-quality cotton, not easily deformed, touch to delicate, very soft, and comfortable.crewmate stuffed plush plushie toy action game figures soft doll High-quality materials.Use high-quality short-pile fabric, filled with soft PP cotton, smooth to the touch.',10),
(17, 'Fxxti 2 Pcs Plush Merch Toys with Music Cute Small Among Us Plushies Toys Gifts for Game Fans Crewmate Cute Music Stuffed Doll,Black', 20.00, '../img/item-17.jpg','toy', '2022','[Material] it is made of high-quality cotton, not easily deformed, touch to delicate, very soft, and comfortable.crewmate stuffed plush plushie toy action game figures soft doll High-quality materials.Use high-quality short-pile fabric, filled with soft PP cotton, smooth to the touch.',10),
(18, 'Fxxti 2 Pcs Plush Merch Toys with Music Cute Small Among Us Plushies Toys Gifts for Game Fans Crewmate Cute Music Stuffed Doll,White', 20.00, '../img/item-18.jpg','toy', '2022','[Material] it is made of high-quality cotton, not easily deformed, touch to delicate, very soft, and comfortable.crewmate stuffed plush plushie toy action game figures soft doll High-quality materials.Use high-quality short-pile fabric, filled with soft PP cotton, smooth to the touch.',10),
(19, 'Fxxti 2 Pcs Plush Merch Toys with Music Cute Small Among Us Plushies Toys Gifts for Game Fans Crewmate Cute Music Stuffed Doll,Orange', 20.00, '../img/item-19.jpg','toy', '2022','[Material] it is made of high-quality cotton, not easily deformed, touch to delicate, very soft, and comfortable.crewmate stuffed plush plushie toy action game figures soft doll High-quality materials.Use high-quality short-pile fabric, filled with soft PP cotton, smooth to the touch.',10),
(20, 'Among Us: But Detective Gonan Vol.1', 20.00, '../img/item-20.jpg','comic', '2022','AMONG US, but Detective Gonan Vol.1',10),
(21, 'Among us logic 1: Fun story', 20.00, '../img/item-21.jpg','comic', '2022','Player is back at it again, this time in Among Us; a game where impostors and deception lurk around every corner. Will he be able to figure out who is good and who is evil? And even if he does, will his crewmates believe him... ?',10),
(22, 'Among us logic 2: Fun story', 20.00, '../img/item-22.jpg','comic', '2022','Player is sick of losing as a Crewmate in Among Us. But this round at the Skeld he takes matters into his own hands as the Impostor. Will he be able to get away with eliminating all the crewmates? Or will he get caught in the act and lose yet again...',10),
(23, 'Among us logic 3: Fun story', 20.00, '../img/item-23.jpg','comic', '2022','Veteran joins Player in the wonderfully evil world of Among Us. But when The Gentleman skills get thrown into question, the two best friends find themselves up against a deadly impostor at MIRA HQ.',10),
(24, 'Among us logic 4: Fun story', 20.00, '../img/item-24.jpg','comic', '2022','Player and Veteran meet the newest member of their Among Us group, Greaser. But while Veteran is distracted by how cool he is, Player has other things on his mind, including being the most ruthless impostor imaginable and getting his very first first win at the Skeld...',10),
(25, 'Among us logic 5: Fun story', 20.00, '../img/item-25.jpg','comic', '2022','Player is having the game of his life in Among Us. As the impostor he is skillfully eliminating every crewmate. It is finally time for him to get his first win. Or is it...?',10),
(26, 'Among us logic 6: Fun story', 20.00, '../img/item-26.jpg','comic', '2022','Instead of going Trick-or-Treating, Player decides to stay inside and game a spooky game of Among Us. But there is a couple impostors on the loose, and they are ready to take out every crewmate one by one til they win the game in this special Halloween themed episode...',10),
(27, 'Among us logic 7: Fun story', 20.00, '../img/item-27.jpg','comic', '2022','Player was doing so well as the impostor, that is, until Blue showed up and ruined everything. See the tragic tale of Player failing to win yet again with his buddy Mr. Cheese!
',10),
(28, 'Among Us Official Toikido Yume LED Light-up Crewmate with Hand & Bag Strap - Red', 20.00, '../img/item-28.jpg','light', '2022','AMONG US TOY FIGURINE Show your fandom with the LED Light-up Crewmate with Hand & Bag strap. Official branded toys of hit online multiplayer game Among Us.',10),
(29, 'Among Us Official Toikido Yume LED Light-up Crewmate with Hand & Bag Strap - Cyan', 20.00, '../img/item-29.jpg','light', '2022','AMONG US TOY FIGURINE Show your fandom with the LED Light-up Crewmate with Hand & Bag strap. Official branded toys of hit online multiplayer game Among Us.',10),
(30, 'Among Us Crewmate (White) 4-inch Action Figure with 4 Interchangeable Hands and 2 Hats by Toikido and Just Toys', 111.00, '../img/item-30.jpg','figure', '2022','Among Us Crewmate (white) 4-inch Action Figure with 4 Interchangeable Hands and 2 Hats by Toikido and Just Toys',10),
(31, 'Among Us Crewmate (Black) 4-inch Action Figure with 4 Interchangeable Hands and 2 Hats by Toikido and Just Toys', 111.00, '../img/item-31.jpg','figure', '2022','Among Us Crewmate (black) 4-inch Action Figure with 4 Interchangeable Hands and 2 Hats by Toikido and Just Toys',10),
(32, 'Hot Figures Toys for hot game PVC Space Figures Model Toys Cake Topper Decorations Accessories Computer Desktop Dolls Gifts Figures Collection Toys Gifts Free 50pcs Stickers and Bag (12pcs Set B)
', 111.00, '../img/item-32.jpg','figure', '2022','Refer to high quality figure toy action game figures. Touch to delicate, easy to hold and comfortable, non-toxic and eco-friendly PVC material.',10),
(33, 'White Sus: White Among Us Crewmate Imposter Notebook Gift Journal for Gamers', 21.00, '../img/item-33.jpg','book', '2022','This journal is filled with 120 beautifully wide ruled lined Pages for you to write, sketch and journal in!
All pages are blank (No page numbers, etc.) to ensure you have as much creative freedom as possible!',10),
(34, 'Among Us: Coloring Book', 6.00, '../img/item-34.jpg','book', '2022','Coloring Book For Kids and Adults Color It original Among us characters ;this book is among the most popular adult and kids coloring books.',10),
(35, 'Among Us: Coloring Book', 8.00, '../img/item-35.jpg','book', '2022','Coloring Book For Kids and Adults Color It original Among us characters ;this book is among the most popular adult and kids coloring books.',10),
(36, 'Among Us: Activity Book', 8.00, '../img/item-36.jpg','book', '2022','60 Activities Including Coloring, Dot-to-Dots & Spot the Difference word search , Maze , high quality illustrations of Adopt Me pets. No repeats. No filler. Just grab your coloured pencils and crayons and dive into the magical and fun world of AMONG US .Filled with all your favourite Unicorns, Dragons and other dream pets.',10),
(37, 'Find The Imposter: Unofficial Among US Coloring Book. Among Us Coloring Book for Kids with Over 60 Stunning Illustrations', 8.00, '../img/item-37.jpg','book', '2022','
',10),
(38, 'Among Us: Coloring :Great Gifts With Plenty Of Beautiful Illustrations For Kids To Color And Have Fun', 8.00, '../img/item-38.jpg','book', '2022','A great collection of Among Us pictures for kids to color and entertain. This book can also help kids improve their coloring skill and unleash their artistic potential. Dad and Mom can spend time coloring with children and have fun with them. This way can connect you closer together.',10),
(39, 'Among Us: Coloring Book', 8.00, '../img/item-39.jpg','book', '2022','This coloring book has 50 beautifully designed coloring pages filled with xxxx characters, and more to provide hours of fun, calm, relaxation, and stress relief through creative expression. You will LOVE this Coloring Book.',10),
(40, 'Among Us: Coloring Book Encourage Creativity for Kids & Adults with One Sided Drawing Pages Of Characters and Iconic Scenes', 6.00, '../img/item-40.jpg','book', '2096','Ten astronauts. An imposter determined to kill them all. Welcome to the deadliest spaceship of all time.',10),
(41, 'Among Us Sticker', 5.00, '../img/item-41.jpg','sticker', '2022',' Products with electrical plugs are designed for use in the US.',10),
(42, 'Among Us Notebook: Cute College Wide Ruled Journal Notebook for School Students, Teen Boys and Girls, Kids, Women for Creative Writing ... (Among Us Composition Notebooks)', 7.00, '../img/item-42.jpg','book', '2022','Line Notebook Cover Arts Designed Happy Birthday Gifts, Blank Line Notebook Journal',10),
(43, 'Among Us Rainbow', 7.00, '../img/item-43.jpg','toy', '2022','THE BEST HOLIDAYS GIFTS Plush is inspired by the astronaut. It is a great gift for anyone who loves space. it is also ideal as a bedtime companion for every little one, with the rainbow flag symbolizing peace, tolerance and diversity.',10),
(44, 'Among Us Collectible Figures - Full Set (Crow, Pink Crewmate, Red Devil, Purple Imposter, Brown w/ mask)', 200.00, '../img/item-44.jpg','figure', '2022','Officially licensed Among Us Collectible Figures.
Set contains all 5 Among Us collectible figures, including pink, red w/ suit, black crow, brown w/ mask and the 1 imposter.
Each figure stands over 5" tall and comes in a collector window box package.
Perfect for any Among Us fan.',10),
(45, 'Among Us Collectible Figures (Purple Imposter)', 50.00, '../img/item-45.jpg','figure', '2022','Officially licensed Among Us Collectible Figures.',10),
(46, 'Among Us Collectible Figures (Pink w/ Flower)', 50.00, '../img/item-46.jpg','figure', '2022','Officially licensed Among Us Collectible Figures.',10),
(47, 'Among Us Collectible Figures (Crow)', 50.00, '../img/item-47.jpg','figure', '2022','Officially licensed Among Us Collectible Figures.',10),
(48, 'Among Us Collectible Figures (Devil w/ Gun)', 50.00, '../img/item-48.jpg','figure', '2022','Officially licensed Among Us Collectible Figures.',10),
(49, 'Among Us Collectible Figures (Brown w/ Mask)', 50.00, '../img/item-49.jpg','figure', '2022','Officially licensed Among Us Collectible Figures.',10),
(50, 'Among Us Mini Figures', 10.00, '../img/item-50.jpg','figure', '2022','Officially licensed Among Us Mini Figures.',10);



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
