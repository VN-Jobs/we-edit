<?php

use Illuminate\Database\Seeder;
use App\Eloquent\Config;

class ConfigsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Config::truncate();
        app(Config::class)->create([
            'key' => 'name',
            'value' => ['We-edit'],
        ]);

        app(Config::class)->create([
            'key' => 'keywords',
            'value' => ['we-edit, photography'],
        ]);

        app(Config::class)->create([
            'key' => 'description',
            'value' => ['Contact us today with questions regarding our service offerings and we’ll get back to you as soon as possible.'],
        ]);

        app(Config::class)->create([
            'key' => 'facebook',
            'value' => ['https://facebook.com'],
        ]);

        app(Config::class)->create([
            'key' => 'youtube',
            'value' => ['https://youtube.com'],
        ]);

        app(Config::class)->create([
            'key' => 'twitter',
            'value' => ['https://twitter.com'],
        ]);

        app(Config::class)->create([
            'key' => 'instagram',
            'value' => ['https://instagram.com'],
        ]);

        app(Config::class)->create([
            'key' => 'linkedin',
            'value' => ['https://linkedin.com'],
        ]);

        app(Config::class)->create([
            'key' => 'email',
            'value' => ['contact@we-edit.com'],
        ]);

        app(Config::class)->create([
            'key' => 'phone',
            'value' => ['(+84) 97 6243 323'],
        ]);

        app(Config::class)->create([
            'key' => 'address',
            'value' => ['CT1 A1 Building, Hoang Liet Str., Hoang Mai Dis., Hanoi, Vietnam, 100000'],
        ]);

        app(Config::class)->create([
            'key' => 'map',
            'value' => ['https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3725.6790075671793!2d105.82015161425761!3d20.96540198603266!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135acfdc32041f3%3A0xfb0ba343c3f5d627!2zQ1QxLUExLCBC4bqxbmcgQSAyLCBLaHUgxJHDtCB0aOG7iyBUw6J5IE5hbSBMaW5oIMSQw6BtLCBIb8OgbmcgTGnhu4d0LCBIb8OgbmcgTWFpLCBIw6AgTuG7mWksIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1520319639447'],
        ]);

        app(Config::class)->create([
            'key' => 'analytics_id',
            'value' => ['UA-109817333-1'],
        ]);

        app(Config::class)->create([
            'key' => 'logo',
            'value' => ['seeds/logo.png'],
        ]);

        app(Config::class)->create([
            'key' => 'copyright',
            'value' => ['© we-edit.com Pty Ltd. All Rights Reserved.'],
        ]);

        app(Config::class)->create([
            'key' => 'blog',
            'value' => [
                'description' => "We-edit.com.vn's team and other experts offer their best advice, insights, and how-to's. All to help you improve the presentation of your property marketing.",
                'banner' => 'seeds/5.jpg',
            ],
        ]);

        app(Config::class)->create([
            'key' => 'about',
            'value' => [
                'description' => 'We-edit.com.vn – Real Estate Photo Editing, Virtual Staging & Floor Plans',
                'banner' => 'seeds/5.jpg',
                'information' => "A homeowner or a realtor can get possible leads in selling their real estate by making an attractive first impression. This is why it is definitely crucial for property agencies and homeowners who are selling their properties to make sure that they are making a massive good impression to their prospective buyers. How can they do that? There is a lot of ways and online is the best platform for that. Online is where most of the businesses are happening today. It is already considered to be the biggest marketplace across the globe due to its broad coverage and influence. It is the perfect place for everyone to look for products and services. This is why creating an impressive online marketing campaign will surely invite more buyers, resulting in higher sales and we can help you with that. So, if you are a realtor for homes for sale, you should have your marketing campaign online. The latter comes in various methods and types. However, in property selling such as houses and apartments, virtual home staging is the most suited method.",
                'trusted' => "WE-EDIT started as a standalone property photography company in 2013. Built on the trust of our customers and aim to always deliver excellent quality, we continue to service the residential and commercial real estate market in USA, Australia and European market, with over 1 million images to date and counting. Today we have an extensive range of product offerings that caters to the diverse visual marketing needs of our clients which include leading real estate groups, real estate professionals, home owners, builders, retailers, architects and property developers.",
                'innovative' => "WE-EDIT is at the forefront of introducing cutting-edge services. Customer's data hosted on a cloud platform provides secure access and a faster and better user experience to manage products anytime, anywhere and we always backup them at our end for long time. Through our cloud storage you can easily download property images and floor plans onto your desktop and email them to suppliers and vendors with the click of a button. You can further share these images on social media, create video slideshows and instantaneously ask for revisions through the quick and easy redo request system.",
            ],
        ]);

        app(Config::class)->create([
            'key' => 'contact',
            'value' => [
                'description' => 'We-Edit – Work 24/7',
                'banner' => 'seeds/5.jpg',
                'custom_service' => "Contact us by phone, live chat and email\n\r \n\rPhone: (+84) 97 6243 323\n\rEmail: Info@We-Edit.com",
                'banner_1' => 'seeds/contact1.jpg',
                'contact_information' => "Contact us today with questions regarding our service offerings and we’ll get back to you as soon as possible. \n\r \n\rAddress: CT1 A1 Building, Hoang Liet Str., Hoang Mai Dis., Hanoi, Vietnam, 100000",
                'banner_2' => 'seeds/contact2.jpg',
            ],
        ]);

        app(Config::class)->create([
            'key' => 'home',
            'value' => [
                'who_we_are' => 'Based in Hanoi, We-edit provides a high quality and dedicated photo editing service platform with the main focus on real estate photo editing sector for cooperation and individual clients around the world. Beyond in 2017, we have never stopped to improve and develop our full service solution to our photographers in line with the highest industry standards and customer expectations. We-edit is equipped with a highly talented and enthusiastic team of photo editors who reached outstanding level in editing techniques to guarantee the best quality and turnaround time.',
                'icons' => [
                    'twilight' => 'Upload your photos from your mobile, tablet or desktop computer.',
                    'remove_item' => 'Our team of professional editors will perform over 16 editing tasks on your images within 24 hours. 100% satisfaction guaranteed.',
                    'day_to_dusk' => 'Each image is viewed & checked by our quality control team.',
                    'image_enhancement' => 'Download the professionally edited images from your account as soon as they are complete.',
                ],
                'about_us' => "WE-EDIT team located in Vietnam, serves you in a wide range of services including photo editing, floor plans, virtual staging and video listing as a best center for your promotional campaigns, expand your photography bussiness. Every job is processed with calibrated screens, top softwares, high connection internet, fast turnaround time, affordable price.\n\r \n\r Whether you are in real estate and need high-quality images to showcase a home or are presenting products to the retail market, WE-EDIT will work with your images to get the best result for your needs. High quality photos are proven to increase sales and our editors will make your product or listing stand out from the competition.",
            ],
        ]);

        app(Config::class)->create([
            'key' => 'mail',
            'value' => [
                'address' => "chanelcartoon01@gmail.com",
                'subject' => '[We-edit.com.vn] Contact Message',
            ],
        ]);

        app(Config::class)->create([
            'key' => 'flickr',
            'value' => [
                'api_key' => "ea4b187f74544e743e5a558bca48a807",
                'photo_setid' => '72157701668245731',
            ],
        ]);

        app(Config::class)->create([
            'key' => 'fb_embed',
            'value' => ['<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Ffacebook&tabs&width=340&height=214&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=340231906161242" width="340" height="214" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>',
            ],
        ]);
    }
}
