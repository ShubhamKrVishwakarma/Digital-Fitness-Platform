<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            // Protiens
            [
                "name" => "Optimum Nutrition (ON) Gold Standard 100% Whey (2 lbs/907 g) (Double Rich Chocolate) Protein Powder",
                "description" => "Gold Standard 100% Whey Blend – 24g blended protein consisting of whey protein isolate, whey protein concentrate, and whey peptides to support lean muscle mass – they don't call it the Gold Standard of standard for nothing What Does It Have - 5 grams of naturally occurring BCAAs and over 4 grams of glutamine and glutamic acid in each serving ‚which helps to build lean and strong muscles; Gluten Free",
                "price" => 1299,
                "quantity" => 10,
                "category_id" => 1,
                "image" => "product-1.jpg",
                "keywords" => "whey protien powder double dark rich chocolate optimum nutrition gold standard",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "NAKPRO Gold Whey Protein Concentrate | 25.46g Protein, 5.57g BCAA | Muscle Gain, Strength, Muscle Recovery, Fast Absorbing Protein Supplement Powder",
                "description" => "Benefits of Whey Protein: Provides 24.76 grams of protein per scoop (33g) and 5.42 grams BCAA. This Whey Protein Supplement helps in muscle growth, Muscle Recovery, Supports Healthy Metabolism, Effective Muscle Recovery and overall strength. Contains Essential Ammino Acids and BCAA required for muscle repair and muscle growth.
                100% Pure Quality: This is a 100% Pure and Safe Whey Protein. Nakpro Gold is the best Whey Protein Powder for Men and Women. Nakpro Whey Protein has No Amino Spiking, No Artificial Colour, No fillers, No Added Sugar, Gluten Free and No Banned Substances.
                Flavour Options: Nakpro Whey Protein Powder Comes in multiple flavour options like Chocolate, Banana, Cookies and Cream, Cream Chocolate, Double Rich Chocolate, Mango, Strawberry, Vanilla, Lychee, Milk Masala and Blueberry.",
                "price" => 1549,
                "quantity" => 20,
                "category_id" => 1,
                "image" => "product-2.jpg",
                "keywords" => "whey protien powder dark chocolate nakpro gold",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "AS-IT-IS Nutrition ATOM Whey Protein 1kg | 27g protein | Isolate & Concentrate | Double Rich Chocolate | USA Labdoor Certified | With Digestive Enzymes for better absorption",
                "description" => "BOOSTS YOUR PERFORMANCE TO NEXT LEVEL: When compared to others, Atom Whey protein has greater bioavailability, solubility and the highest PDCAA score of 1. The high-quality protein offers 27g protein per serving, 5.7g BCAA, 4.8g glutamine with minimal calories, fat and no sugar. Whether you engage in aerobic or resistance training, Whey protein supplementation helps you get the best out of every workout.
                HIGH CONCENTRATION OF BCAA: The high concentration of BCAAs in Atom Whey Protein help promote anabolic response by maximizing muscle protein synthesis, helps preserve muscle glycogen stores, and minimize protein breakdown. BCAAs reduce the amount of tryptophan and the amount of serotonin produced, eventually allowing you to make more gains.",
                "price" => 1899,
                "quantity" => 24,
                "category_id" => 1,
                "image" => "product-3.jpg",
                "keywords" => "whey protien atom double rich chocolate",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "MuscleBlaze Beginner's Whey Protein (Chocolate, 1 kg / 2.2 lb) No Added Sugar, Faster Muscle Recovery & Improved Strength",
                "description" => "12 g PROTEIN: Kickstart your workout journey with a premium, international grade whey protein designed to give extra energy, recovery and added muscle definition. Each serving offers an optimum dose of 12 g protein and 5.5 g EAAs. Whey protein is the primary source of protein in MuscleBlaze Beginner's Protein
                NO ADDED SUGAR OR TRANS-FAT: Whey protein for beginners from Muscleblaze doesn’t contain any added sugar or trans-fat. It is free from any banned substance or doping ingredients as per NADA/WADA list",
                "price" => 1349,
                "quantity" => 17,
                "category_id" => 1,
                "image" => "product-4.jpg",
                "keywords" => "whey protien no added sugar begineer chocolate",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "NUTRABAY Pure 100% Raw Whey Protein Concentrate, 23.4g Protein - 1Kg, Unflavoured",
                "description" => "NUTRABAY Pure Whey Protein Concentrate is 100% Imported Whey Protein Concentrate supplement powder and delivers 23.4g of Protein & 5.3g BCAA per serving Nutrabay Pure & Raw Whey Protein Concentrate is unflavoured in nature, which gives you the freedom to add the flavor of your choice. No Amino Spiking, No Artificial Colour, No fillers, No Added Sugar, Gluten Free and No Banned Substances Builds Muscle Mass : Nutrabay Pure & Raw Whey Protein Concentrate is rich source of protein which helps to Build Lean muscle, Enhances recovery, Supports Healthy Metabolism, Boosts Immunity and Reduces Muscle loss",
                "price" => 1644,
                "quantity" => 32,
                "category_id" => 1,
                "image" => "product-5.jpg",
                "keywords" => "whey protien no added sugar begineer unflavored",
                "created_at" => now(),
                "updated_at" => now()
            ],
            // Bottles
            [
                "name" => "Lifelong Protein Shaker|Stylish Protein Shaker Bottle|Sipper Bottle|Gym Bottle for Protein- 700ml",
                "description" => "This gym shaker bottle is completely leakproof and has an ergonomic carry loop for easy transport.
                The classic design of the shaker has a round base as well as a wide mouth to avoid any odours from residue and keep it germ-free.
                This bottle's super powerful blender distributes the energy and ingredients throughout your drink. It provides a consistent blend that is easier to absorb into your body.
                Innovative Design: The design of the shaker bottle is very innovative and elegant and makes it very easy to use throughout your workout routine; the secure screw lid top ensures no spills whilst the wide spout and 'flip cap' offer an easy to use",
                "price" => 150,
                "quantity" => 20,
                "category_id" => 4,
                "image" => "product-6.jpg",
                "keywords" => "gym water bottle protien shaker sipper",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "Boldfit 2 Litre Water Bottle For Gym Gallon Water Bottle 2+ Litre Gym Water Bottle 2l Gym Bottles For Men & Women Water Jug 2+ Litre Big Water Bottles Sports Water Bottle Plastic Water Bottle- Black",
                "description" => "LARGE CAPACITY GALLON: Large capacity 2.2 litres ensures you enjoy one full water bottle/gallon without having to refill it frequently. Featured with measuring scale help you check the actual amount of water intake easily and clearly. Constructed with a conventional screw, a silicone gasket makes its leak-proof lid tightly seals the bottle. Wide-mouth opening is easy to fill with ice cubes and clean.
                TRACK YOUR DAILY GYM INTAKE: Our gallon water bottle comes with markers on the side so you can see your daily water intake and stay on track to meet your health and fitness goals. This gym bottle is great for measuring your daily intake of water, reminding you stay hydrated and drink enough water throughout the day and gym workout. A must have for any fitness goals and overall health
                DISTINCT DESIGN & PORTABLE: The flip top lid is designed to make it dust free and leak proof. It easy to drink, no need to lift heavy water weights with comfortable handle. With a portable handle and anti skid grip design, it gives you different ways to carry it to anywhere. Perfect for gym, workout, office and any outdoor recreations.",
                "price" => 235,
                "quantity" => 20,
                "category_id" => 4,
                "image" => "product-7.jpg",
                "keywords" => "gym water bottle protien shaker sipper boldfit gallon",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "DOVEAZ® Sports Unbreakable Freezer Safe Gallon Water Bottle, Water Bottle for Gym, Protein Shaker Bottle, Water Bottle For Gym (1.5 LTR) with Mixer Ball and Strainer (BPA-Free) - Black",
                "description" => "Leakproof and Unbreakable construction DOVEAZ Shaker Bottles are 100% Food grade material the most safe & healthy material for bottles which is BPA Free. Eco Friendly, safe for all 100 % Leak proof water bottle plus shaker for preparation and saving time Widely use: It is large enough (1500ml) to keep your water all day when you are in gym, practice, class, hiking, Yoga or others sports. In-Box Contents: 1 Gallon Shaker Bottle 1500 Ml : Note:The mixing ball is inside the bottle",
                "price" => 235,
                "quantity" => 20,
                "category_id" => 4,
                "image" => "product-8.jpg",
                "keywords" => "gym water bottle protien shaker sipper doveaz unbreakable freezer safe gallon",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "Boldfit Gallon Water Bottle 2.5 Litre for Gym & Sports, Gallon Bottles for Men & Women, Water Gallon 2.5 Litre Gym Water Bottle for Men, Women, Boys & Girls Gym Bottle (Plastic, Black Yellow)",
                "description" => "2.5 LITRE LARGE CAPACITY: This large capacity Gallon water bottle is made from food grade BPA free plastic and has a capacity of 2.2 litres. This corresponds to daily water intake. Perfect for pre or after workout water needs.
                LEAKPROOF: Absolutely leak proof with the easy drinking flip top, easy to open and perfectly sealed with the press after drinking! It has a 2 inch opening which easily accommodates ice cubes. Measurement markers printed on the side of the bottle help you track your fluid intake, and are also handy when mixing beverages in the bottle. Strong nylon strap and durable cap attached to the bottle,there will be no worries about losing caps.",
                "price" => 699,
                "quantity" => 30,
                "category_id" => 4,
                "image" => "product-9.jpg",
                "keywords" => "gym water bottle protien shaker sipper boldfit gallon",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "Aegon Gym Water Bottle Sports (BPA Free), Motivational Time Marked Sipper Bottle for Gym, Office, School | Stylish Gym Bottle for Men & Women | Leak Proof Sports Shaker 1 liter (Tritan, Black)",
                "description" => "【HEALTH AND SAFETY MATERIALS】 AEGON water bottle is made of high quality Tritan+Silicone+PP material and can be reused. It doesn't release chemicals into your drink like plastic or stainless steel alternatives. Water bottles are easy to clean.
                【KEEP YOU MOTIVATED AND HYDRATED】 Time stamped and motivational quotes, this 1000ml drinks bottle is perfect for measuring your daily water intake and reminding you to stay hydrated and drink enough water each day to meet scientifically recommended intake. Drinks Bottle can help you control your appetite, lose weight and manage your general health.
                【CLASSIC DESIGN】 The bottle comes with a pop-up silicone straw that opens the spout with a single tap, allowing you to rehydrate anytime. The diameter of the mouth of the cup is 6 cm, which provides enough space for ice cubes and various fruits. There is a sealing silicone ring in the water bottle cap to ensure that the water bottle does not leak.",
                "price" => 699,
                "quantity" => 41,
                "category_id" => 4,
                "image" => "product-10.jpg",
                "keywords" => "gym water bottle protien shaker sipper aegon",
                "created_at" => now(),
                "updated_at" => now()
            ],
            // T-shirts
            [
                "name" => "Zexer Men Men Compression T-Shirt Gym and Sports Wear T-Shirt for Men | Body fit Skinny T-Shirt",
                "description" => "Zexer's Tshirt’s are slim fit. So go for regular size for physique hugging fit and a size up for relax fit. We are one of the largest manufacturers and using world class nylon fabric for our compression wear, 90% nylon 10% spandex. Smooth and ultra soft fabric that provides extreme comfort and control with excellent elasticity, enhanced range of motion and durability
                Fast-dry technology: Releases heat and wicks moisture away with cooling effect keeping you drier and cooler for longer
                Why nylon compression: Nylon compression provides more oxygen filled blood to active muscles, increasing endurance, power, efficiency and promotes recovery after hard workouts. It also helps to control blood flow and prevent soreness",
                "price" => 736,
                "quantity" => 40,
                "category_id" => 3,
                "image" => "product-11.jpg",
                "keywords" => "t-shirt men black zeker compression gym sports wear body fit skinny",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "hotfits Cotton Men's Training Sports,Workout, Gym Sleeveless Tshirt",
                "description" => "Lightweight, soft-stretch material
                Machine Wash Cold
                100% cotton",
                "price" => 299,
                "quantity" => 20,
                "category_id" => 3,
                "image" => "product-12.jpg",
                "keywords" => "hotfits cotton mens training sports gym workout t-shirt half sleeves",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "Boldfit Sports T Shirt for Men Quick Dry Fit Tshirt for Men Gym T Shirts for Men for Casual Wear Workout T Shirts for Man Active Gym Wear for Men Running T-Shirts for Men T Shirts for Man",
                "description" => "Lightweight, 95% Polyester, 5% Spandex, Regular Fit, Half Sleeve",
                "price" => 699,
                "quantity" => 30,
                "category_id" => 3,
                "image" => "product-13.jpg",
                "keywords" => "boldfit sports mens training sports gym workout t-shirt half sleeves",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "JUST RIDER Men's Full Sleeve T-Shirt",
                "description" => "Nylon, Solid, Slim Fit, Long Sleeve, Collarless, Standard Length",
                "price" => 369,
                "quantity" => 30,
                "category_id" => 3,
                "image" => "product-14.jpg",
                "keywords" => "just rider mens training sports gym workout t-shirt full long sleeves",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "CHKOKKO Men Solid Gym Tank Tops Sleeveless Sport Vest",
                "description" => "Color and Material: These tank tops are fabricated with 100% DryFit Polyester which gives allowance to wear in every season.
                This CHKOKKO tank top is actual combination of comfort and ease with double stitching at borders.
                It has antimicrobial and sweat-wicking technology.
                It is perfect for gym, jogging, running, yoga, athletic, cycling, stretching, gymnastics, work-out and for games like basketball, badminton etc.",
                "price" => 299,
                "quantity" => 50,
                "category_id" => 3,
                "image" => "product-15.jpg",
                "keywords" => "chkokko cotton mens training sports gym workout t-shirt tops sleeves vest",
                "created_at" => now(),
                "updated_at" => now()
            ],
            // Equipments
            [
                "name" => "Boldfit Cotton Wrist Band for Men & Women, Wrist Supporter for Gym Wrist Wrap/Straps Gym Accessories for Men for Hand Grip & Wrist Support While Workout & Muscle Relaxation",
                "description" => "PERFECT ACCESSORY FOR TRAINING: Whether you're just getting into working out or are a seasoned weight lifter these gym band are for you, wrap them around as tight or loose as needed for your desired level of restriction without cutting of circulation or causing pain from stiff, rough edges. Our gym hand grip are perfect for strength training, powerlifting, bodybuilding, cross training or specific exercises like bench press, shoulder press, clean and jerk, and other push movements.
                STRONG PROTECTION WRAP: Gym straps adjustable design allows it to contour to the unique shape of your wrists, strong support and comfortable. With gentle compression, this wrist brace can strongly protect and stabilize your wrist in working out. Without excess belt or band, it's super easy to wear and fits either left hand or right hand and it's suitable for kids & adult, men & women.
                TRAIN HARDER & LIFT MORE: These wrist band for women protectors are made of high quality cotton and elastic that will contour around your wrists, securing them in a neutral position, improving your form. Our hand grip for gym proprietary elastic will provide unparalleled levels of support to immobilize your wrist as needed .This will significantly reduce tension on your wrist joints allowing you to feel more confident, so you can train harder & execute more efficiently.",
                "price" => 199,
                "quantity" => 70,
                "category_id" => 2,
                "image" => "product-16.jpg",
                "keywords" => "boldfit cotton wrist band men women gym hand grip",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "Fitness Mantra® Counter 10KG To 60KG Weight Adjustable Professional Counter Hand Gripper for Men & Women | Counter Hand Grip|Finger Exerciser|Power Gripper|Black Color|",
                "description" => "Made with high-quality and durable materials
                Adjustable resistance for customized workouts
                Ergonomic design for a comfortable and secure grip
                Improves hand and forearm strength
                Built-in counter to track reps or squeezes
                Compact and portable design for easy use on the go
                Suitable for athletes, weightlifters, rock climbers, and anyone looking to strengthen their grip",
                "price" => 155,
                "quantity" => 30,
                "category_id" => 2,
                "image" => "product-17.jpg",
                "keywords" => "fitness mantra counter hand gripper",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "FitBox Sports Intruder 20 Kg Adjustable PVC Dumbbells Weights With Dumbbells Rods For Home Gym & Strength Training, 10 Kg X 2 (Black)",
                "description" => "MUST-HAVE FREE WEIGHTS FOR YOUR HOME GYM: Exercise from the comfort of your home, at your own pace, on your own terms. Create your morning-workout routine with our 20kg Button Weights Set and start building muscle, anytime, anywhere.
                BOX CONTANT : (3kg x 4 12kg + 2kg x 4 8kg) 20kg weight plates & rods
                WANT A VARIETY OF EXERCISES? Our dumbbells and barbell weights set is the thing for you! Perfect for muscle-sculpting, squatting, biceps and triceps shaping, core strengthening, push-ups, and calorie burning, the dumbbell weights meet your needs.",
                "price" => 725,
                "quantity" => 20,
                "category_id" => 2,
                "image" => "product-18.jpg",
                "keywords" => "fitbox sports intruder pvc dumbell weight gym men training",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "SLOVIC Door Pull Up Bar for Home Workout (Load Capacity: 100 KG) Wall Mounted Pullup Bar At Home Non Slip Pull Up Rod & Chin Up Bar For Home with Adjustable Length 62 to 100cm",
                "description" => "【DOOR PULL UP BARS FOR HOME WORKOUT】 This pull-up bar has an adjustable length that goes as low as 62 cm, and it has an anti-slip rubber grip that gives you the stability you need to hold the rod firmly while exercising. The locking mechanism on the hanging bar ensures complete security and protection while performing at-home exercises. With a tightening rod on both ends, installing the bar is simple and requires no drilling or screws.
                【HIGH STRENGTH FRAME】 To ensure durability, this pull bar for the home gym is built of high strength. Exercise with a pull-up bar provides support for doing challenging body workouts at home and is simple to mount at any wall height. This home pull-up bar has a bubble meter in the middle to guarantee a straight installation on the doorway. This pull-up bar for the house is portable and simply detachable.",
                "price" => 799,
                "quantity" => 15,
                "category_id" => 2,
                "image" => "product-19.jpg",
                "keywords" => "slovic door pull up bar home workout men training non slip rod",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "PRO365 Home Gym Ab Roller/Indoor Ab Wheel for Abs Workouts 6 Month Warranty/Dual Abdominal Exercise/Core Workouts for Men and Women (6 MM Safe Knee Mat, Yellow Roller)",
                "description" => "Strengthens and Tones ABS, Shoulders, Arms and Back with dual ab wheel.
                6 MM Premium Knee Mat, Protect your knees during work out & light stainless steel rod Which can bear up to 100 kg weight easily.
                Knee pad supports the knees during workout, portable and compact in shape, size
                Easy-Grip Wheels and two Non-Skid wheels for added Stability. Dual wheel offers more stability, control and balance
                Quick Installation in no time, just stick 2 rollers together and apply closure on both ends on the rod.",
                "price" => 199,
                "quantity" => 20,
                "category_id" => 2,
                "image" => "product-20.jpg",
                "keywords" => "home gum abs core roller equipment",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "Kore PVC 20-100 Kg Home Gym Set with Multipurpose Fitness Bench + One 5 Ft Plain + One 3 Ft Curl and One Pair Dumbbell Rods",
                "description" => "20 kg of PVC weight (2 kg x 4 = 8 kg + 3 kg x 4 = 12 kg)
                1 x 5 feet plain rod + 1 x 3 feet curl rod
                2 x 14 inch dumbbell Rods
                4 Locks and clippers comes with the rods
                A combination of all gym equipment for the perfect workout,It is highly durable and long lasting,A perfect muscle builder.",
                "price" => 1599,
                "quantity" => 20,
                "category_id" => 2,
                "image" => "product-21.jpg",
                "keywords" => "kore pvc home gym setup multipurpose fitness bench barbell dumbbell rods",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "WELLBERG Push Up Bars WORKOUT Equipment Fitness - GYM, Exercise with Cushioned Foam Grip and Non-Slip Sturdy Structure Portable for Home Fitness Training for Men & Women",
                "description" => "★【DURABLE & SLIP-RESISTANT 】- Strength Training Pushup Stands are made of high quality polypropylene, which is sturdy and strong enough to support any weight. Thickened steel tube chrome-plated ergonomically designed for better load bearing and corrosion protection,for superior safety, rubber feet will keep the pushup bar stable on all kinds of floor types without slipping.
                ★【POWERFUL UPPER BODY】- They are ideal for upper body muscle training, especially the chest muscles, triceps, abdominal muscles and back muscles. These can be easily used at home and in the gyms. Push up bars are perfect for both men and women. By training with the push up bars, your range of motion will be increased, and you will be able to target muscles more effectively.",
                "price" => 249,
                "quantity" => 32,
                "category_id" => 2,
                "image" => "product-22.jpg",
                "keywords" => "wellberg push up bars workout fitness gym foam grip",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "Aurion Premium Strength Training Kettlebells for Weightlifting - 1Pc (5 Kg, Black) | Gym Equipment | Heavy Workout | Fitness Iron | Heavy Lifting for Men and Women | Home Gym | Plates Exercise",
                "description" => "PVC Molding: The inside of the kettlebells is filled with concrete for weight and resistance workouts and coated with polyvinyl chloride (PVC) for durable and durable dumbbells.
                Features: The kettlebell features a smooth handle that provides a comfortable & secure grip for high reps, you can work out with this without the worry of losing grip or injuring your palms.
                Benefits: Strength training is extremely beneficial for body composition, joint and bone health, and metabolism swinging a kettlebell as you work out can blast up to 20 calories per minute, you can increase your range of motion, and using the kettlebell can increase your awareness of your body.",
                "price" => 599,
                "quantity" => 21,
                "category_id" => 2,
                "image" => "product-23.jpg",
                "keywords" => "aurion premium strength kettlebells weightlifting training iron",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "Boldfit Gym Ball for Exercise Anti Burst Exercise Ball with Foot Pump, Workout Yoga for Women/Men Swiss Ball for Balance Stability Training, Fitness",
                "description" => "ANTI BURST & SLOW DEFLATION - Our exercise ball is made with the fine structure which makes it deflate slowly and burst resistant if punctured, thus reducing the risks of injury due to falls to the ground and offering you the most caring protection. This anti burst gym ball, 55cm ball will provide broad base while doing workouts & will easily absorb heavy body weights is well.
                NON SLIP SURFACE - The Swiss ball is not picky at all when it comes to the practice venue - be it home, the gym or outdoors, the slip prevention will leave you feeling safe and your movements worry free. The non-slip lines provide grip when you are performing weighted exercises. Not to mention it’s one-thing-for-all - Pilates, Yoga, pregnancy gymnastics or various other low-impact exercises and the total body exercise ball workout.",
                "price" => 599,
                "quantity" => 60,
                "category_id" => 2,
                "image" => "product-24.jpg",
                "keywords" => "boldfit gym ball exercise anti burst foot pump",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "BULLAR dumbbell rack for home gym fitness (DUMBBELL-RACK-PRO)",
                "description" => "𝐌𝐔𝐋𝐓𝐈𝐅𝐔𝐍𝐂𝐓𝐈𝐎𝐍𝐀𝐋 - Designed to hold pairs of dumbbells ranging from 5 KG to 40 KG and Three bars ; Mix and match your dumbbells to fit this rack,
                𝐒𝐏𝐀𝐂𝐄-𝐒𝐀𝐕𝐈𝐍𝐆 𝐃𝐄𝐒𝐈𝐆𝐍 - steel frame design of this rack maximizes floor space by storing dumbbells. Easily access and store dumbbells This is a compact and small design that can be placed in a corner or next to a sofa to save space. A tidy and safe home gym for you.
                𝐒𝐓𝐀𝐁𝐋𝐄 𝐖𝐈𝐓𝐇𝐎𝐔𝐓 𝐀𝐍𝐘 𝐖𝐎𝐁𝐁𝐋𝐄-This free weight rack feature construction with 12 gauge thick steel strong enough to hold dumbells and 3 bars without wobble like planted on the ground. Doesn’t topple by kid or pets",
                "price" => 3298,
                "quantity" => 30,
                "category_id" => 2,
                "image" => "product-25.jpg",
                "keywords" => "bullar dumbbell rack home gym training fitness",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "Life Line Fitness Multi Home Gym Multiple Muscle Workout Exercise Machine Chest Biceps Shoulder Back Triceps Legs For Men At Home,72Kg Weight Stack,Made In India(Hg-002(Without Installation))",
                "description" => "You can build up certifiable muscles at home with this Lifeline Home Gym HG 002. It has a heavy duty square frame construction of CRC Steel Tube of 2 inches. The frame of the gym is powder coated which makes the product long-lasting and non-corrosive (rust-free).
                The home gym has a total weight stack of 72kg (12 plates of 6kg each). The total weight of the machine is 120kg.
                Non cable change design. It is easy to open pulley locks which makes it easier to use other attachments provided; Lat Pull-down Rod, Tricep Rod and Ankle Strap.
                HG 002 allows full body conditioning as you can target your back, chest, biceps, triceps, quadriceps, abdominals, etc. An assortment of activities can be performed; Lat Pull-Front/Back, Butterfly, Rear Deltoid, Preacher Curls, Low Pulley Row, Bench Press, Military Press, Bench Row, Leg Extension and many more.",
                "price" => 9269,
                "quantity" => 25,
                "category_id" => 2,
                "image" => "product-26.jpg",
                "keywords" => "life long fitness multi home gym multiple muscle workout exercise machine chest biceps shoulder triceps legs",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "BLUMORA Exercise Bands Resistance Bands Set for Workingout Door Fitness Gym Resistance Bands Kit for Men Women Streching Rubber Bands (11PCS)",
                "description" => "DIFFERENT COLOR ADJUSTABLE RESISTANCE BANDS: Yellow (10 lbs.), Blue (20 lbs.), Green (30 lbs.), Black (40 lbs.), Red(50 lbs.).All exercise bands are 48' in length, and can be used alone stacked in any combination to a maximum equivalent of 150 lbs
                GET YOUR COMPLETE RESISTANCE BANDS SET NOW: You ll feel 100% from the moment you received the exercise bands set. They come with a lightweight carrying bag, a sturdy door anchor, a pair of larger straps and handles for home gym exercise, door exercise, weightlifting, stretch exercise,leg exercise, . We are quite sure that you will be super-impressed with the durability, portability, versatility and high quality of our resistance exercise bands",
                "price" => 376,
                "quantity" => 25,
                "category_id" => 2,
                "image" => "product-27.jpg",
                "keywords" => "blumora exercise bands resistance band set fitness gym resistance bands kits streching rubber bands",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "National Bodyline NB750 Heavy Duty Multipurpose Home Gym Bench, Adjustable Bench, Exercise Bench, Workout bench for the gym, Weight benches, bench for a home workout, an idol for bench press, Weightlifting bench",
                "description" => "ASSEMBLED DIMENSIONS: 47'L x 28'W x 48'H | Maximum Weight Capacity Including User : 400Lbs.
                COMFORTABLE & ERGONOMIC DESIGN: With High-density Foam Padding & Seat Secure Body Firmly & Reduce Muscle Fatigue When You Do Full Body Workout With Exercise Bench.
                ADJUSTABLE DESIGN: National Bodyline Fitness Gym Bench Has An Adjustable Back Pad To Accommodate Incline, Decline, And Flat Chest Press Exercises. You Can Also Adjust The Height Of The Barbell Crutches For Easier Access.
                HEAVY-DUTY CONSTRUCTION: Inclined Decline Bench is Made Of 14 & 16-gauge Tubular Steel; Guaranteed to Withstand Intense Use Of Multipurpose Gym Machine.",
                "price" => 6269,
                "quantity" => 41,
                "category_id" => 2,
                "image" => "product-28.jpg",
                "keywords" => "bodyline heavy duty multipurpose home gym bench orkout bench press weightlifting",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "Aurion Weight Lifting Gym Belt-Small | Leather Gym Belt for Workout with Padded Back Support | Dead Lift Belt - Black",
                "description" => "Durable and Supportive: Made of high-quality leather, the weightlifting belt provides the ultimate support to your core that you need to lift heavy weights safely. The weight belt features a 4mm thickness. Please check the size chart before buying for the right fit. Measure your belly button size, not waist/pant size, to measure the belt accurately.
                Adjustable: The belt features a double-prong buckle closure that allows you to adjust the fit for a snug and comfortable feel.
                Versatile: The weightlifting belt can be used for a variety of weightlifting exercises, including squats, deadlifts, bench presses and more.",
                "price" => 789,
                "quantity" => 120,
                "category_id" => 2,
                "image" => "product-29.jpg",
                "keywords" => "aurion weight lifting gym fitness belt small leather black",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "HASHTAG FITNESS 10kg to 60kg gym equipment set for home workout dumbbells set for home gym for home with 8in1 gym bench for home workout (50kg)",
                "description" => "Hashtag Fitness offer you wide range of home gym equipments for men with fitness accessories for your dialy home workout.you can do many exercises like incline bench press,decline bench press,flat bench press,dumbbells press,dips,push ups,leg curl,leg extensions & butterfly.
                Package Contains : HASHTAG FITNESS gym bench for home workout with 1 No x 3 feet curl rod + 1 No x 5 Feet Straight rod(Capacity of bar for weight lifting upto 160 Kg +2 No x 14 inch Iron dumbbell rods With Bolts 1 Pair leather gloves + 1 skipping rope + gym equipment set for home workout 4 Spring locks(it can't come out when you lift the weight)
                HASHTAG FITNESS heavy duty Multi 8 in 1 Bench Press for home gym equipments Made of 2 x 2 heavy Pipe ( Incline, Decline & Flat Bench Press, Push-up & Dips, Leg Pully , Dumbbell Fly & Dumbbell Press + 50 Kg of PVC weight (10kg x 2 + 5kg x 4 + 2.5Kg x 4 = 50Kg)",
                "price" => 8899,
                "quantity" => 18,
                "category_id" => 2,
                "image" => "product-30.jpg",
                "keywords" => "hashtag fitness gym equipment set home workout dumbbells bench barbell rods",
                "created_at" => now(),
                "updated_at" => now()
            ],
        ];

        Product::insert($products);
    }
}
