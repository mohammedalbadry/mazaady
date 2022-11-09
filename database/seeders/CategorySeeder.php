<?php

namespace Database\Seeders;

use App\Models\Option;
use App\Models\Category;
use App\Models\Value;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [
                'name' => 'سيارات ودرجات ومستلزماتها',
                'sub_categories' => [
                    [
                        'name' =>  'سيارات',
                        'options' => [
                            [
                                'name' => 'اللون',
                                'values' => [
                                    [
                                        'name' => 'احمر',
                                        'sub_options' => null
                                    ],
                                    [
                                        'name' => 'اسود',
                                        'sub_options' => null
                                    ],
                                    [
                                        'name' => 'اخضر',
                                        'sub_options' => null
                                    ],
                                ]
                            ],
                            [
                                'name' => 'العلامة التجارية',
                                'values' => [
                                    [
                                        'name' => 'بي ام دابليو',
                                        'sub_options' => [
                                            [
                                                'name' => 'الموديل',
                                                'values' => [
                                                    [
                                                        'name' => 'اكس 7',
                                                        'sub_options' => null
                                                    ],
                                                    [
                                                        'name' => 'اكس 5',
                                                        'sub_options' => null
                                                    ],
                                                    [
                                                        'name' => 'اكس 6',
                                                        'sub_options' => null
                                                    ],
                                                ]
                                            ]
                                        ]
                                    ],
                                    [
                                        'name' => 'مرسيدس',
                                        'sub_options' => null
                                    ],
                                    [
                                        'name' => 'فيرارى',
                                        'sub_options' => null
                                    ],
                                ]
                            ],
                            [
                                'name' => 'نوع الوقود',
                                'values' => [
                                    [
                                        'name' => 'ديزل',
                                        'sub_options' => null
                                    ],
                                    [
                                        'name' => 'كهرباء',
                                        'sub_options' => null
                                    ],
                                    [
                                        'name' => 'غاز',
                                        'sub_options' => null
                                    ],
                                ]
                            ],
                        ]

                    ],
                    [
                        'name' =>  'قطع غيار السيارات والإكسسوارات',
                        'options' => [
                            [
                                'name' => 'القسم',
                                'values' => [
                                    [
                                        'name' => 'نظام تبريد',
                                        'sub_options' => null
                                    ],
                                    [
                                        'name' => 'الاجهزه السمعيه والبصريه',
                                        'sub_options' => null
                                    ],
                                    [
                                        'name' => 'البطريات ونظام الشحن',
                                        'sub_options' => null
                                    ],
                                ]
                            ],
                            [
                                'name' => 'الحالة',
                                'values' => [
                                    [
                                        'name' => 'جديد',
                                        'sub_options' => null
                                    ],
                                    [
                                        'name' => 'مستعمل',
                                        'sub_options' => null
                                    ],
                                ]
                            ],
                        ]
                    ],
                    
                    [
                        'name' =>  'دراجات هوائية',
                        'options' => [
                            [
                                'name' => 'الفئه',
                                'values' => [
                                    [
                                        'name' => 'سباق',
                                        'sub_options' => null
                                    ],
                                    [
                                        'name' => 'جبلى',
                                        'sub_options' => null
                                    ],
                                    [
                                        'name' => 'متعدد السرعات',
                                        'sub_options' => null
                                    ],
                                ]
                            ],
                            [
                                'name' => 'الحالة',
                                'values' => [
                                    [
                                        'name' => 'جديد',
                                        'sub_options' => null
                                    ],
                                    [
                                        'name' => 'مستعمل',
                                        'sub_options' => null
                                    ],
                                ]
                            ],
                        ]
                    ],
                ]
            ],

            [
                'name' => 'تجهيزات الأثاث والمفروشات',
                'sub_categories' => [
                    [
                        'name'    => 'الأثاث والمفروشات',
                        'options' => [
                            [
                                'name' => "النوع",
                                'values' => [
                                    [
                                        'name' => 'اثاث مداخل',
                                        'sub_options' => null
                                    ],
                                    [
                                        'name' => 'غرف نوم',
                                        'sub_options' => null
                                    ],
                                    [
                                        'name' => 'سجاد وموكيت',
                                        'sub_options' => null
                                    ],
                                ]
                            ],    
                            [
                                'name' => "الحاله",
                                'values' => [
                                    [
                                        'name' => 'الكل',
                                        'sub_options' => null
                                    ],
                                    [
                                        'name' => 'جديد',
                                        'sub_options' => null
                                    ],
                                    [
                                        'name' => 'مستعمل',
                                        'sub_options' => null
                                    ],
                                ]
                            ],  
                        ]
                    ],      
                    [
                        'name'    => 'تحف وهدايا',
                        'options' => [
                            [
                                'name' => "الحجم",
                                'values' => [
                                    [
                                        'name' => 'كبير',
                                        'sub_options' => null
                                    ],
                                    [
                                        'name' => 'وسط',
                                        'sub_options' => null
                                    ],
                                    [
                                        'name' => 'صغير',
                                        'sub_options' => null
                                    ],
                                ]
                            ],    
                            [
                                'name' => "الحاله",
                                'values' => [
                                    [
                                        'name' => 'الكل',
                                        'sub_options' => null
                                    ],
                                    [
                                        'name' => 'جديد',
                                        'sub_options' => null
                                    ],
                                    [
                                        'name' => 'مستعمل',
                                        'sub_options' => null
                                    ],
                                ]
                            ],  
                        ]
                    ]
                ]
            ],

            [
                'name' => 'العقارات و الأسماء التجارية',
                'sub_categories' => [
                    [
                        'name'    => 'عقارات',
                        'options' => [
                            [
                                'name' => "النوع",
                                'values' => [
                                    [
                                        'name' => 'وحدات سكنيه',
                                        'sub_options' => null
                                    ],
                                    [
                                        'name' => 'محلات تجارية',
                                        'sub_options' => null
                                    ],
                                ]
                            ],    
                            [
                                'name' => "نوع العرض",
                                'values' => [
                                    [
                                        'name' => 'للبيع',
                                        'sub_options' => null
                                    ],
                                    [
                                        'name' => 'للايجار',
                                        'sub_options' => null
                                    ],
                                    [
                                        'name' => 'تبرع',
                                        'sub_options' => null
                                    ],
                                ]
                            ],  
                        ]
                    ],      
                    [
                        'name'    => 'أراضي',
                        'options' => [
                            [
                                'name' => "النوع",
                                'values' => [
                                    [
                                        'name' => 'اراضي زراعية',
                                        'sub_options' => null
                                    ],
                                    [
                                        'name' => 'اراضي للبناء',
                                        'sub_options' => null
                                    ]
                                ]
                            ] 
                        ]
                    ]
                ]
            ],

            [
                'name' => 'الحيوانات ومستلزماتها',
                'sub_categories' => [
                    [
                        'name'    => 'حيوانات أليفة',
                        'options' => [
                            [
                                'name' => "النوع",
                                'values' => [
                                    [
                                        'name' => 'قطط',
                                        'sub_options' => null
                                    ],
                                    [
                                        'name' => 'كلاب',
                                        'sub_options' => null
                                    ],
                                    [
                                        'name' => 'سمك زينة',
                                        'sub_options' => null
                                    ],
                                ]
                            ],    
                            [
                                'name' => "نوع العرض",
                                'values' => [
                                    [
                                        'name' => 'بيع',
                                        'sub_options' => null
                                    ],
                                    [
                                        'name' => 'تبنى',
                                        'sub_options' => null
                                    ]
                                ]
                            ],  
                        ]
                    ],      
                    [
                        'name'    => 'مستلزمات الحيوانات',
                        'options' => [
                            [
                                'name' => "النوع",
                                'values' => [
                                    [
                                        'name' => 'اللعاب',
                                        'sub_options' => null
                                    ],
                                    [
                                        'name' => 'بيوت',
                                        'sub_options' => null
                                    ],
                                    [
                                        'name' => 'طعام',
                                        'sub_options' => null
                                    ]
                                ]
                            ] 
                        ]
                    ]
                ]
            ],

            [
                'name' => 'ملابس , أحذية , حقائب , منتجات مدرسية و مكتبية',
                'sub_categories' => [
                    [
                        'name'    => 'ملابس',
                        'options' => [
                            [
                                'name' => "النوع",
                                'values' => [
                                    [
                                        'name' => 'رجالى',
                                        'sub_options' => null
                                    ],
                                    [
                                        'name' => 'حريمي',
                                        'sub_options' => null
                                    ],
                                    [
                                        'name' => 'اطفال',
                                        'sub_options' => null
                                    ],
                                ]
                            ],    
                            [
                                'name' => "اللون",
                                'values' => [
                                    [
                                        'name' => 'احمر',
                                        'sub_options' => null
                                    ],
                                    [
                                        'name' => 'اخضر',
                                        'sub_options' => null
                                    ],
                                    [
                                        'name' => 'اصفر',
                                        'sub_options' => null
                                    ],
                                    [
                                        'name' => 'اسود',
                                        'sub_options' => null
                                    ]
                                ]
                            ],  
                        ]
                    ],      
                    [
                        'name'    => 'حقائب',
                        'options' => [
                            [
                                'name' => "النوع",
                                'values' => [
                                    [
                                        'name' => 'سفر',
                                        'sub_options' => null
                                    ],
                                    [
                                        'name' => 'خروج',
                                        'sub_options' => null
                                    ],
                                    [
                                        'name' => 'مدرسي',
                                        'sub_options' => null
                                    ]
                                ]
                            ], 
                            [
                                'name' => "اللون",
                                'values' => [
                                    [
                                        'name' => 'احمر',
                                        'sub_options' => null
                                    ],
                                    [
                                        'name' => 'اخضر',
                                        'sub_options' => null
                                    ],
                                    [
                                        'name' => 'اصفر',
                                        'sub_options' => null
                                    ],
                                    [
                                        'name' => 'اسود',
                                        'sub_options' => null
                                    ]
                                ]
                            ],  
                        ]
                    ]
                ]
            ],

            [
                'name' => 'إكسسوارات وعطور',
                'sub_categories' => [
                    [
                        'name'    => 'ساعات',
                        'options' => [
                            [
                                'name' => "النوع",
                                'values' => [
                                    [
                                        'name' => 'رجالى',
                                        'sub_options' => null
                                    ],
                                    [
                                        'name' => 'حريمي',
                                        'sub_options' => null
                                    ]
                                ]
                            ],    
                            [
                                'name' => "الموديل",
                                'values' => [
                                    [
                                        'name' => 'اوميجاء',
                                        'sub_options' => null
                                    ],
                                    [
                                        'name' => 'رولكس',
                                        'sub_options' => null
                                    ]
                                ]
                            ],  
                        ]
                    ],      
                    [
                        'name'    => 'العطور',
                        'options' => [
                            [
                                'name' => "النوع",
                                'values' => [
                                    [
                                        'name' => 'رجالى',
                                        'sub_options' => null
                                    ],
                                    [
                                        'name' => 'حريمي',
                                        'sub_options' => null
                                    ]
                                ]
                            ] 
                        ]
                    ]
                ]
            ],
        ];

        foreach ($categories as $item) {
            $category = Category::create([
                'name' => $item['name'],
                'slug' => str_replace(" ", "-", $item['name']),
                'description' =>  $item['name'],
            ]);

            foreach ($item['sub_categories'] as $sub_item) {
                $sub_category = Category::create([
                    'name' => $sub_item['name'],
                    'slug' => str_replace(" ", "-", $sub_item['name']),
                    'description' =>  $sub_item['name'],
                    'parent_id' => $category->id
                ]);

                foreach ($sub_item['options'] as $option) {
                    $main_option = Option::create([
                        'name' => $option['name'],
                        'description' =>  $option['name'],
                        'category_id' => $sub_category->id
                    ]);
                    foreach ($option['values'] as $value) {
                        $main_value = Value::create([
                            'name' => $value['name'],
                            'option_id' => $main_option->id
                        ]);
                        if ($value['sub_options'] != null) {
                        
                            foreach ($value['sub_options'] as $value_sub_option) {
                                $sub_option = Option::create([
                                    'name' => $value_sub_option['name'],
                                    'description' =>  $value_sub_option['name'],
                                    'value_id' => $main_value->id,
                                    'parent_id' => $main_option->id
                                ]);
                                foreach ($value_sub_option['values'] as $sub_option_value) {
                                    Value::create([
                                        'name' => $sub_option_value['name'],
                                        'option_id' => $sub_option->id
                                    ]);
                                }
                            }

                        }
                    }
                }
                    

            }
        }
    }
}
