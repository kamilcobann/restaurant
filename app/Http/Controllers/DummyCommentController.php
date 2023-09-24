<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DummyCommentController extends Controller
{
    public function getComments()
    {
        $data=[];


        array_push($data,
                [
                    "id"=> 1, "comment"=> "Uşakta yediğim en güzel yemek, hatta son yıllarda yediğim en iyi çöp şiş diyebilirim. Atmosfer idare eder. Karşılayan ve siparişleri alan hanımefendi çok ilgili, güleryüzlü, yemekler hakkında bilgili. Önerilerini dinleyin derim. 3 kişiydik farklı yemekler söyledik hepsinden tafalım diye, hepsi güzeldi. Fiyatlar diğer yerlere oranla biraz yüksek ama diğer yerlerin yemeklerini düşününce makul. Çaylarımızıda akşam serinliğinde dışarıdaki ağacın altına getirdiler 10 numara oldu.",
                     "customer_name"=> "Ekrem", "customer_image"=> "https://picsum.photos/50/50?random=1"
                ]
            );

        array_push($data,
        [
            "id"=> 2, "comment"=> "Sis yedik hem kuzu hem dana eti dana etini sevmem lakin süper olmuş ızgarada kesinlikle tavsiye ederim fiyatlarında mukkemmel derecede uygun tşkler shish go steakhouse",
             "customer_name"=> "Rahmi Bozkurt", "customer_image"=> "https://picsum.photos/50/50?random=2"
        ]
    );

    array_push($data,
    [
        "id"=> 3, "comment"=> "Aile işletmesi olduğunu öğrendim.cogu isletmeden seviye olarak yukarıda. 2 şiş 2 işkembe çorbası gayet lezzetli içecek 420 TL. Gayet fiyat performansı iyi.ortam  çok temiz ferah herşey olması gerektiği gibi. İçki olmaması ayrıca güzel.insaallah tekrar gelmek isterim. Elinize sağlık. İyi çalışmalar",
         "customer_name"=> "Necmettin Taflan", "customer_image"=> "https://picsum.photos/50/50?random=3"
    ]
);

array_push($data,
[
    "id"=> 4, "comment"=> "Seneler önce geldiğimde daha mı iyi di kararsız kaldım. Ancak şöyle bir özetyecek olursam; aile işletmesi ilgililer. Sürekli bir isteğiniz var mı diye soruyorlar. Meze tabakaları az gelebilir ama lezzetli. Özellikle tabaktski pilav harika. Büftek lezzetli, çöp şiş idare eder ancak köfte bol kimyonlu kuru bir tada sahip... Türkiye'nin bir çok yerinde köfte yiyen biri olarak o nasıl bir tad.. Bir et restaurantına gerçekten yakışmıyor. Fiyatlar 2 bonfile, 4 çöp şiş, 4 köfte ve 2 su180 tl. Bu enflasyona göre uygun sayılır.",
     "customer_name"=> "Emre T.", "customer_image"=> "https://picsum.photos/50/50?random=4"
]
);
array_push($data,
[
    "id"=> 5, "comment"=> "Harika bir yer izmir-ankara yolculugumuzda mola verdik. Çöp sis mukemmeldi, calan muzikler harikaydi, her sey icin tesekkur ederiz :)",
     "customer_name"=> "Nil Beril Sargın.", "customer_image"=> "https://picsum.photos/50/50?random=5"
]
);
array_push($data,
[
    "id"=> 6, "comment"=> "Eğer nerede yiyelim diye düşünüyorsanız burayı şiddetle tavsiye ederim. Hizmet, kalite# makul fiyatlar ve doymak istiyorsanız aradığınızı bulacaksanız.",
     "customer_name"=> "Umut Berk Uzel", "customer_image"=> "https://picsum.photos/50/50?random=4"
]
);

        return response()->json([
            'status' => true,
            'dummy_data' => $data,
        ]);
    }
}
