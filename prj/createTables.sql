CREATE TABLE `isp`.`users` ( 
`user_id` INT NOT NULL AUTO_INCREMENT , 
`username` VARCHAR(30) NOT NULL , 
`userpass` VARCHAR(15) NOT NULL , 
`email` VARCHAR(40) NOT NULL , 
`userfav` TEXT NOT NULL , 
PRIMARY KEY (`user_id`));

CREATE TABLE recipeInfo
(
	recipe_id		int(40)			NOT NULL,
	recipe_title		VARCHAR(40)		NOT NULL, 
	recipe_ingredients		TEXT			NOT NULL,
	recipe_description		TEXT			NOT NULL,
	img_url		TEXT		NOT NULL,

   PRIMARY KEY(recipe_title)
);
INSERT INTO recipeInfo (recipe_id,recipe_title,recipe_ingredients,recipe_description,img_url) VALUES
(1, 'CHICKEN MARSALA', 
'4 chicken breasts - sliced horizontally or pounded until 1/2" thick
1/2 tsp kosher salt
1/4 tsp black pepper
1/3 cup + 1 Tbsp. all-purpose flour
5 Tbsp olive oil - , divided
3 tbsp unsalted butter - , divided
8 oz white button mushrooms - sliced
8 oz cremini mushrooms - sliced
2 Tbsp shallots (or your favorite onion) - minced
2 cloves garlic - minced
2/3 cup dry Marsala wine
2/3 cup beef stock
sprig of fresh thyme (optional)
Fresh parsley - minced, for garnish', 

'To a large pan or skillet, add 2 Tbsp olive oil and 1 Tbsp butter and heat over MED-HIGH heat.
Sprinkle pounded chicken cutlets with salt and pepper on both sides, then lightly dredge in the 1/3 cup flour. Shake off excess flour and add chicken to hot pan. Work in batches if needed, as over-crowding the pan will prevent the chicken from crisping up.
Cook chicken about 3-4 minutes per side, until golden.
Transfer chicken to a plate and set aside.
Add 2 Tbsp olive oil and 1 Tbsp butter to the pan and add mushrooms.
Saute about 5-8 minutes, seasoning with salt and pepper about half-way through cooking.
Remove mushrooms to plate with the chicken and set aside.
Add remaining 1 Tbsp olive oil, then add shallots and garlic. Saute about 1 minute, until soft and fragrant.
Sprinkle in the 1 Tbsp flour and stir to coat. Cook for a minute to get the flour taste out.
Pour in Marsala wine and beef stock, scraping the bottom of the pan with a wooden spoon.
Cook, stirring often, for 2 minutes, or until sauce is slightly thickened.
Slide chicken and mushrooms back into the pan, making sure to get all the juices from the plate into the pan - thats pure flavor there!
Add 1 Tbsp butter to the center of the pan, toss a sprig of thyme in there if desired, then cover the pan and let cook about 2 minutes.
Stir and spoon sauce over chicken.
Garnish with parsley if desired and serve.', 

'https://www.cookingclassy.com/wp-content/uploads/2020/02/chicken-marsala-02.jpg'), 

(2, 'GARLIC BALSAMIC CAPRESE CHICKEN',
'GARLIC BALSAMIC MARINADE
8 cloves garlic - minced
1 large shallot - minced
3 leaves fresh basil - minced
1 tsp salt
1/2 tsp pepper
1 1/2 tsp Dijon mustard
1/4 cup balsamic vinegar
1/4 cup olive oil
3-4 boneless skinless chicken breasts
TOPPINGS FOR THE CHICKEN
1 pint cherry tomatoes - left whole or sliced in half lengthwise
1 - 8 oz ball fresh mozzarella cheese - sliced
leaves handful fresh basil - sliced
balsamic glaze - optional',

'Chop garlic, shallots and basil. Add to gallon size ziploc bag.
Add Dijon mustard, salt, pepper, vinegar and oil. Close bag and shake well to combine.
Trim chicken breasts of fat and place in marinade bag. Massage marinade into chicken and place bag on a plate in the refrigerator for approximately 8 hours or overnight.
Preheat oven to 425 degrees F and pull the marinated chicken out of the refrigerator to warm
up on your counter.
Heat a large oven safe skillet (I use cast iron), over medium high heat with a drizzle of oil.
Add chicken to hot pan, and let caramelize for 3 minutes, flip chicken to
caramelize on the other side for 2 minutes.
Turn off burner and place pan in oven for approximately 15-20 minutes (depending on the thickness of your chicken).
While chicken is cooking, chop up your topping ingredients and set aside.
The last 7 minutes of cooking time, add cherry tomatoes to the pan around the chicken.
Once chicken is cooked through , lay slices of mozzarella cheese over the top of the chicken and return to the oven.
Change oven setting to BROIL and broil on HIGH for several minutes, until the cheese is melted to your liking.
Sprinkle chicken with sliced fresh basil and drizzle with balsamic glaze if desired.',

'https://www.thechunkychef.com/wp-content/uploads/2016/07/Garlic-Balsamic-Caprese-Chicken-5.jpg'),

(3, 'ONE PAN CREAMY GARLIC CHICKEN BREASTS', 
'4 chicken breast halves
1/2 tsp kosher salt
1/2 tsp black pepper
1/4 tsp paprika
1/4 cup all purpose flour - (for dredging)
2 Tbsp olive oil
1 Tbsp butter
2 shallots, - finely minced (or 1 small yellow onion)
2 Tbsp finely minced garlic
1 1/3 cups chicken broth or stock
1 - 1 1/3 cups heavy cream
1/4 tsp black pepper
1/4 tsp dried Italian seasoning
1/3 cup grated Parmesan cheese - (fresh is best)', 

'Add flour to a shallow dish. Season chicken on both sides with a total of 1/2 tsp salt, 1/2 tsp pepper, and 1/4 tsp paprika. Add chicken to flour dish, one at a time, turning to coat lightly in flour.
Heat olive oil in heavy skillet over MED HIGH heat until hot. Add butter, then add flour-dredged chicken to skillet, being careful not to overcrowd the pan. If your pan is less than 12 inches across, you may need to brown the chicken in batches.
Cook chicken for approximately 4-5 minutes per side, until cooked and golden brown. Remove to a plate and set aside.
Reduce heat to MED LOW, and add a small drizzle of oil to pan , then add shallots and cook for 2-3 minutes, until soft and fragrant. Add garlic and cook another 30 seconds or so.
Carefully pour in chicken broth or stock, scraping the bottom of the pan to loosen any browned bits. Pour in heavy cream and stir well to combine.
Cook 2-4 minutes, or until thickened slightly. Stir in 1/4 tsp each of pepper and Italian seasoning, and Parmesan cheese. Add chicken back to the pan, nestling them in and moving them around so the flour will help thicken the sauce.', 

'https://cafedelites.com/wp-content/uploads/2018/12/Creamy-Garlic-Chicken-IMAGE-1.jpg'), 

(4, 'PERFECT BLACKBERRY COBBLER', 
'COBBLER
24 oz fresh blackberries
1 cup granulated sugar
1/4 tsp ground cinnamon - (optional but recommended)
3 Tbsp cornstarch
3/4 cup water
TOPPING
1 1/2 cups all-purpose flour
1 Tbsp granulated sugar
1 1/2 tsp baking powder
1/2 tsp kosher salt
1/2 cup cold butter, grated or finely cubed
1/3 - 1/2 cup cold buttermilk', 

'Grease an 8 inch square baking dish.
In a large saucepan, combine the blackberries, sugar, and cinnamon. Cook and stir until mixture comes to a boil.
Combine cornstarch and water until smooth; stir into fruit mixture. Bring to a boil; cook and stir for 2-5 minutes or until thickened.
Pour into prepared baking dish.
For topping, in a small bowl, combine the flour, sugar, baking powder and salt. Cut in butter using a pastry blender or two forks until mixture resembles coarse crumbs.
Stir in buttermilk just until moistened. Drop by tablespoonfuls onto hot berry mixture.
Bake, uncovered, at 350F for 30-35 minutes or until filling is bubbly and topping is golden brown. Serve warm, with whipped topping or ice cream if desired.', 

'https://www.simplyrecipes.com/wp-content/uploads/2011/07/blackberry-cobbler-horiz-a-1600.jpg'),

(5, 'FRUIT SALSA WITH HOMEMADE CINNAMON CHIPS',
'FRUIT SALSA
12 strawberries - hulled and diced
5 mandarin oranges - peeled and chopped
1 mango - peeled and diced
3 kiwis - peeled and diced
1 cup blueberries - halved
3 Tbsp honey
1 lemon - juiced
6 fresh mint leaves - chopped
1 tsp ginger paste - (optional but recommended)
CINNAMON CHIPS
20 6 inch flour tortillas
1/2 cup butter - salted or unsalted
1 cup granulated sugar
4-5 tsp ground cinnamon',

'PREPARE AND BAKE THE CHIPS
Preheat oven to 325°F and line a baking sheet with parchment paper or silicone baking mat. Set aside. Combine granulated sugar and ground cinnamon in a small mixing bowl.
Cut flour tortillas into triangles, place in large bowl. Pour melted butter over cut tortillas, toss until well coated. 
Sprinkle cinnamon sugar mixture into bowl, tossing as you go to evenly distribute the mixture.
Bake about 17-20 minutes or until crispy, oven times may vary, watch closely so they don’t burn. I like to start checking at about 13-14 minutes.
MAKE THE SALSA
Dice all fruit in to small pieces, place in bowl and set aside.
Combine honey, lemon juice, mint and ginger in blender, then blend until smooth.
Pour dressing over diced fruit and toss to combine. For best flavor, chill 30 minutes before serving.
When chips are finished baking, let cool to room temperature while the salsa is chilling.
Serve and enjoy!',

'https://tmbidigitalassetsazure.blob.core.windows.net/rms3-prod/attachments/37/1200x1200/exps34611_BOS13149327C02_08_3b_WEB.jpg'),

(6, 'SLOW COOKER SALSA VERDE PORK TAQUITOS',
'SALSA VERDE:
2 lbs tomatillos - (about 10-12 tomatillos), husks removed and washed
1 yellow onion - peeled and quartered
4 cloves garlic - smashed
2 jalapenos - stems cut off
1/3 cup fresh cilantro
1 tsp salt
Juice of 1/2 a lime
2 tsp honey
PORK:
2 lb pork roast - I used a boneless rump roast
salt and pepper - to taste
2 Tbsp olive oil
1 Tbsp butter
TAQUITOS:
Soft corn tortillas
Oil for frying - I used sunflower oil
Shredded Monterey Jack cheese
Fresh cilantro - for garnish
Fresh avocado - diced
Fresh jalapenos - sliced
AVOCADO LIME CREMA:
1 avocado - pitted
1/2 cup sour cream
1 1/2 Tbsp mayonnaise
1 lime - zested and juiced
1/2 tsp salt
1/4 tsp cumin
1/4 tsp garlic powder', 

'MAKE THE SALSA VERDE:
Preheat oven to 450 degrees F and line a baking sheet with aluminum foil sprayed lightly with cooking spray.
Place tomatillos, onion, garlic and jalapenos on baking sheet and roast for 10 minutes. Flip peppers, onions, garlic and tomatillos over and roast another 10 minutes.
Carefully transfer to blender or food processor and pulse until semi-smooth.
Add cilantro, salt, lime juice and honey, and pulse again until smooth.
MAKE THE PORK:
Season pork roast with salt and pepper.
Add olive oil and butter to a large skillet and heat over HIGH heat.
Add pork and sear on both sides, about 2-3 minutes per side.
Transfer pork, and drippings, to slow cooker.
Pour in 3/4 of the salsa verde, reserving the last 1/4 to an airtight container in the refrigerator.
Cover and cook on LOW for 8-10 hours, or on HIGH for 4-5 hours.
Carefully remove pork to a bowl and shred, then add back to the slow cooker and stir to combine pork with the salsa.
MAKE THE TAQUITOS:
Heat oil in a large heavy bottomed pot over MED heat, until about 350 degrees F.
Line a baking sheet with paper towels and top with a cooling rack. Set aside.
Warm corn tortillas in the microwave until soft and pliable. You may have to do this one at a time, so they dont cool down too much.
Put in a few tablespoons of shredded salsa verde pork to the lower 1/3 of the tortilla, then top with a sprinkle of Monterey Jack cheese. Roll the tortilla up from the bottom towards the top.
Using stainless steel tongs, carefully pick up rolled tortilla and place in hot oil, seam side down. Hold with the tongs for about 15 seconds to make sure the tortilla wont come unrolled.
Fry for 1-2 minutes per side, until golden brown.
Transfer taquito to the cooling rack.
Repeat process with remaining tortillas.
MAKE THE CREMA:
Add all ingredients to blender or food processor and blend until smooth.',

'https://www.thechunkychef.com/wp-content/uploads/2016/08/Slow-Cooker-Salsa-Verde-Pork-Taquitos-4.jpg'), 

(7, 'APPLE BOURBON PULLED PORK SANDWICHES',

'2-3 lbs boneless pork loin or shoulder
1 package Campbells Apple Bourbon Pulled Pork slow cooker sauce
pinch brown sugar - optional
splash of apple cider vinegar - optional', 

'Pat meat dry with a paper towel and place in bottom of slow cooker.
Pour sauce over the meat.
Cover and cook on LOW for 7-8 hours (or 4-5 hours on HIGH
Using two forks, shred pork and mix together with remaining sauce.
If desired, stir in the brown sugar and vinegar.', 

'https://www.curiouscuisiniere.com/wp-content/uploads/2014/12/Apple-Bourbon-Pulled-Pork-Sliders-9530.450.jpg'), 

(8, 'BOURBON CHOCOLATE PECAN PIE',
'1 cups dark chocolate chips
1 cup pecan halves
3 large eggs
1/2 cup granulated sugar
1/4 cup light brown sugar - packed
1 cup dark corn syrup
4 Tbsp butter - melted and slightly cooled
3 Tbsp bourbon
1/2 tsp vanilla extract
1/2 tsp kosher salt',  

'Preheat oven to 350°F. Line a 9" pie pan with a pie crust and crimp edges as desired.
LINE CRUST
To the bottom of the pie crust (in the pan pan), add 1 cup of the chocolate chips and the pecans. Refrigerate pie pan until ready to bake.
MAKE FILLING
Sponsored by Advertising Partner
Sponsored Video
Watch to learn more
SEE MORE
Add eggs to a mixing bowl and whisk until frothy.
Add granulated sugar, brown sugar, corn syrup, melted butter, bourbon, vanilla and salt and whisk to combine well.
BAKE
Remove pie pan from the refrigerator and pour filling over the top of the pecans/chocolate chips.
Bake for 30 minutes. Cover loosely with foil, tenting it so the foil isnt laying on top of the pie filling.
Bake an additional 20-30 minutes or until pie is just slightly jiggly in the center, but the outside is set.
COOL
Cool completely on wire rack.
DRIZZLE (optional)
Add 1/3 cup dark chocolate chips to a microwave-safe bowl and microwave on 50% power for 30 seconds. Stir, and continue microwaving in 15 second intervals, stirring after each interval, until chocolate is smooth and mostly melted.
Stir until chocolate is completely melted, then drizzle over the top of cooled pie.', 

'https://tmbidigitalassetsazure.blob.core.windows.net/rms3-prod/attachments/37/1200x1200/Bourbon-Chocolate-Pecan-Pie_EXPS_HPLBZ17_83692_B06_02_5b.jpg'), 

(9, 'CREAMY NUTELLA CROCKPOT HOT CHOCOLATE', 
'8 cups whole milk
1/3 cup cocoa powder
13 oz jar Nutella (chocolate hazelnut spread)
1/2 cup milk chocolate chips
TOPPING IDEAS
mini marshmallows
chocolate syrup
whipped cream
shaved or grated chocolate
shot of your favorite liquor', 

'Add milk, cocoa powder, nutella, and chocolate chips to a 4qt slow cooker. Whisk to combine, cover, and cook on LOW for 2 hours... stirring occasionally.
Serve topped with desired toppings!   If adding liquor, add it to individual mugs, rather than the whole slow cooker, so the alcohol doesnt cook off.', 

'https://www.thechunkychef.com/wp-content/uploads/2018/11/Creamy-Nutella-Crockpot-Hot-Chocolate-marshmallows-680x1013.jpg'), 

(10, 'HONEY GARLIC CROCKPOT MEATBALLS', 
'28 oz bottle BBQ sauce - (use your favorite brand)
1/3 cup honey
3 Tbsp minced fresh garlic
1/2 tsp cayenne pepper
32 oz bag pre-cooked frozen meatballs - thawed', 

'Lightly spray a slow cooker insert with nonstick cooking spray.
Add bbq sauce, honey, garlic, and cayenne pepper to slow cooker insert and stir to combine well.
Add thawed meatballs and stir to coat well. Cover and cook on LOW for. 3-4 hours or HIGH for 2 hours.
Stir before serving; serve hot.', 

'https://www.thechunkychef.com/wp-content/uploads/2020/11/Honey-Garlic-Crockpot-Meatballs-1200-680x680.jpg');