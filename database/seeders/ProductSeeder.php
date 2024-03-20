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
            [
                "name" => "Optimum Nutrition (ON) Gold Standard 100% Whey (2 lbs/907 g) (Double Rich Chocolate) Protein Powder",
                "description" => "Gold Standard 100% Whey Blend – 24g blended protein consisting of whey protein isolate, whey protein concentrate, and whey peptides to support lean muscle mass – they don't call it the Gold Standard of standard for nothing What Does It Have - 5 grams of naturally occurring BCAAs and over 4 grams of glutamine and glutamic acid in each serving ‚which helps to build lean and strong muscles; Gluten Free",
                "price" => 1299,
                "quantity" => 10,
                "category_id" => 1,
                "image" => "products/product-1.jpg",
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
                "image" => "products/product-2.jpg",
                "keywords" => "whey protien powder dark chocolate nakpro gold",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "Lifelong Protein Shaker|Stylish Protein Shaker Bottle|Sipper Bottle|Gym Bottle for Protein- 700ml",
                "description" => "This gym shaker bottle is completely leakproof and has an ergonomic carry loop for easy transport.
                The classic design of the shaker has a round base as well as a wide mouth to avoid any odours from residue and keep it germ-free.
                This bottle's super powerful blender distributes the energy and ingredients throughout your drink. It provides a consistent blend that is easier to absorb into your body.
                Innovative Design: The design of the shaker bottle is very innovative and elegant and makes it very easy to use throughout your workout routine; the secure screw lid top ensures no spills whilst the wide spout and 'flip cap' offer an easy to use",
                "price" => 150,
                "quantity" => 20,
                "category_id" => 4,
                "image" => "products/product-3.jpg",
                "keywords" => "gym bottle protien shaker sipper",
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
                "image" => "products/product-4.jpg",
                "keywords" => "gym bottle protien shaker sipper boldfit gallon",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "Boldfit Cotton Wrist Band for Men & Women, Wrist Supporter for Gym Wrist Wrap/Straps Gym Accessories for Men for Hand Grip & Wrist Support While Workout & Muscle Relaxation",
                "description" => "PERFECT ACCESSORY FOR TRAINING: Whether you're just getting into working out or are a seasoned weight lifter these gym band are for you, wrap them around as tight or loose as needed for your desired level of restriction without cutting of circulation or causing pain from stiff, rough edges. Our gym hand grip are perfect for strength training, powerlifting, bodybuilding, cross training or specific exercises like bench press, shoulder press, clean and jerk, and other push movements.
                STRONG PROTECTION WRAP: Gym straps adjustable design allows it to contour to the unique shape of your wrists, strong support and comfortable. With gentle compression, this wrist brace can strongly protect and stabilize your wrist in working out. Without excess belt or band, it's super easy to wear and fits either left hand or right hand and it's suitable for kids & adult, men & women.
                TRAIN HARDER & LIFT MORE: These wrist band for women protectors are made of high quality cotton and elastic that will contour around your wrists, securing them in a neutral position, improving your form. Our hand grip for gym proprietary elastic will provide unparalleled levels of support to immobilize your wrist as needed .This will significantly reduce tension on your wrist joints allowing you to feel more confident, so you can train harder & execute more efficiently.",
                "price" => 199,
                "quantity" => 70,
                "category_id" => 2,
                "image" => "products/product-5.jpg",
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
                "image" => "products/product-6.jpg",
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
                "image" => "products/product-7.jpg",
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
                "image" => "products/product-8.jpg",
                "keywords" => "slovic door pull up bar home workout men training non slip rod",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "Zexer Men Men Compression T-Shirt Gym and Sports Wear T-Shirt for Men | Body fit Skinny T-Shirt",
                "description" => "Zexer's Tshirt’s are slim fit. So go for regular size for physique hugging fit and a size up for relax fit. We are one of the largest manufacturers and using world class nylon fabric for our compression wear, 90% nylon 10% spandex. Smooth and ultra soft fabric that provides extreme comfort and control with excellent elasticity, enhanced range of motion and durability
                Fast-dry technology: Releases heat and wicks moisture away with cooling effect keeping you drier and cooler for longer
                Why nylon compression: Nylon compression provides more oxygen filled blood to active muscles, increasing endurance, power, efficiency and promotes recovery after hard workouts. It also helps to control blood flow and prevent soreness",
                "price" => 736,
                "quantity" => 40,
                "category_id" => 3,
                "image" => "products/product-9.jpg",
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
                "image" => "products/product-10.jpg",
                "keywords" => "hotfits cotton mens training sports gym workout t-shier half sleeves",
                "created_at" => now(),
                "updated_at" => now()
            ],
        ];

        Product::insert($products);
    }
}
